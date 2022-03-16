<?php
class BookserviceController
{
    function __construct()
    {
        include('models/Connection.php');
        $this->model = new Helperland();
    }
    public function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    public function checkpincode()
    {

        if (isset($_POST['pincode'])) {
           
            $pincode = $this->test_input($_POST['pincode']);
           
                $this->model->check_pincode($pincode);
          
        } else {
            echo 0;
        }
    }
    public function scheduleplan()
    {
       

        session_start();
        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            $arr = [];
            if (isset($_POST['insideCabinet'])) {
                array_push($arr, $_POST['insideCabinet']);
            }
            if (isset($_POST['insideFridge'])) {
                array_push($arr, $_POST['insideFridge']);
            }
            if (isset($_POST['insideOven'])) {
                array_push($arr, $_POST['insideOven']);
            }
            if (isset($_POST['laundry'])) {
                array_push($arr, $_POST['laundry']);
            }
            if (isset($_POST['interior'])) {
                array_push($arr, $_POST['interior']);
            }
            if (!isset($_POST['comment'])) {
                $comment = " ";
            } else {
                $comment = $_POST['comment'];
            }
            if (!isset($_POST['haveapat'])) {
                $pet = 0;
            } else {
                $pet = $_POST['haveapat'];
            }

            $Service=(float)$_POST['range'];
            $ExtraHours=(Float)$Service - 3;
            $TotalCost=(Float)$Service*25;
            $ServiceHours=$Service - $ExtraHours;
            $Subtotal=  $ServiceHours + $ExtraHours;
            $date=$_POST['date'];
            $time=$_POST['time'];
            $combinedDT = date('Y-m-d H:i:s', strtotime("$date $time"));
            $data = array(
                'UserId' => $_SESSION['user_id'],
                'ServiceId' => mt_rand(100000, 999999),
                'ServiceStartDate' =>$combinedDT ,
                'ZipCode' => $_SESSION['pincode'],
                'ServiceHourlyRate' => 25,
                'ServiceHours' => $ServiceHours,
                'ExtraHours' => $ExtraHours,
                'SubTotal' => $Subtotal,
                'Discount' => 0,
                'TotalCost' => $TotalCost,
                'Comments' => $comment,
                'HasPets' => $pet,
                
                'Status'=>2,
                
            );

            $_SESSION['data'] = $data;
            $_SESSION['extraservice'] = $arr;
            $this->model->getaddress($_SESSION['user_id'],$_SESSION['pincode']);
        } else {
            echo 0;
        }
    }
    public function customer_details()
    {
        
        
        if (isset($_POST['address1'])) {
            session_start();
            $favprovider=$_SESSION['data'];
            
            if(isset($_POST['fav_id'])){
        
            $favprovider['ServiceProviderId']=$_POST['fav_id'];

            $_SESSION['data']=$favprovider;
            }else{
                $favprovider['ServiceProviderId']=NULL;

                $_SESSION['data']=$favprovider;
            }
   
            $string = $this->test_input($_POST['address1']);
            $array = explode(',', $string);
      
            $address1 = $array[0];
            $address2 = $array[1];
            $city= $array[2];
            $postal= $array[3];
            $phone = $array[4];
     
            
            $data = array(
                'AddressLine1' => $address1,
                'AddressLine2' => $address2,
                'City' => $city,
                'PostalCode' => $postal,
                'Mobile' => $phone,
                'Email'=>$_SESSION['email'],
                
              
            );
            
          
            $_SESSION['address'] = $data;
            echo 1;
           
        } else {
            echo 0;
        }
    }
    public function payment_done()
    {

        session_start();

        if (isset($_POST['confirm'])) {


            $service_data = $_SESSION['data'];
            $address = $_SESSION['address'];
            $extraservice = $_SESSION['extraservice'];
            $extraservice = (int)implode("", $extraservice);
            $this->model->insertschedule($service_data, $extraservice, $address);
        } else {
            echo 0;
        }
    }
}
