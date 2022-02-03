<?php
class BookserviceController
{
    function __construct()
    {
        include('models/Connection.php');
        $this->model = new Helperland();
    }
    public function checkpincode(){
      if(isset($_POST['pincode'])){
        $pincode=$_POST['pincode'];
        if($pincode != ''){
            $this->model->check_pincode($pincode);
        }
        else{
            echo "<script>Please enter valid pincode</script>";
        }
      }
    }
    public function scheduleplan(){
        if(isset($_POST['submit'])){
            session_start();
            if(isset($_SESSION['user_id'])){
                $arr=[];
                if(isset($_POST['insideCabinet'])){
                    array_push($arr,$_POST['insideCabinet']);
                }
                if(isset($_POST['insideFridge'])){
                    array_push($arr,$_POST['insideFridge']);
                }
                if(isset($_POST['insideOven'])){
                    array_push($arr,$_POST['insideOven']);
                }
                if(isset($_POST['laundry'])){
                    array_push($arr,$_POST['laundry']);
                }
                if(isset($_POST['interior'])){
                    array_push($arr,$_POST['interior']);
                }
               if(!isset($_POST['comment'])){
                   $comment=" ";
               }else{
                $comment=$_POST['comment'];
               }
                if(!isset($_POST['haveapat'])){
                    $pet=0;
                }else{
                    $pet=$_POST['haveapat'];
                }
               
                
          
                $data = array(
                  'UserId'=> $_SESSION['user_id'],
                 'ServiceId'=> mt_rand(100000,999999), 
                'ServiceStartDate' => $_POST['date'],
                'ZipCode' =>$_COOKIE['pincode'],
                'ServiceHourlyRate' =>mt_rand(100,999), 
                'ServiceHours' =>mt_rand(10,20),
                'ExtraHours' => mt_rand(10,20),
                'SubTotal' => mt_rand(100,999),
                'Discount' => mt_rand(10,20),
                'TotalCost' => mt_rand(100,999),
                'Comments' => $comment,
                'HasPets' =>$pet,
                'CreatedDate' => date('d-m-y h:i:s'),
                );
         
                $_SESSION['data']=$data;
                $_SESSION['extraservice']=$arr;
                $this->model->getaddress($_SESSION['user_id']);
            }
            else{
                echo "<script>alert('Please first login');
                window.location.href='?controller=Helperland&function=bookservice_page&flag=second';</script>";
               
               
            }
           
        }
    }
    public function customer_details(){
        if(isset($_POST['submit'])){
            header("location:?controller=Helperland&function=bookservice_page&flag=four");
        }
   
    
    }
    public function payment_done(){
        if(isset($_POST['submit'])){
            session_start();
            $confirm=$_POST['confirm'];
            if($confirm == "success"){

                $data=$_SESSION['data'];
                $extraservice=$_SESSION['extraservice'];
                $extraservice=(int)implode("",$extraservice);
                $this->model->insertschedule($data,$extraservice);
              
              
            }

        }
        
    }
    
}
?>