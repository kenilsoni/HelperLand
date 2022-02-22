<?php
class ServicehistoryController
{
    function __construct()
    {
        include('models/Connection.php');
        $this->model = new Helperland();
    }
    public function service_historypage()
    {
        include("./views/servicehistory.php");
    }
    public function mysetting()
    {    
        include("./views/servicehistory.php");

    }
    public function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    public function mysettingpage()
    {
        session_start();
        $id=$_SESSION['user_id'];
        $this->model->getcustomer_details($id);
        // include("./views/servicehistory.php");
    }
    public function update_address(){
        if($_SERVER['REQUEST_METHOD']== "POST"){

            $id=$_POST['update_id'];
           $address1= $this->test_input($_POST['addressline1']);
            $address2=$this->test_input($_POST['addressline2']);
            $postal=$this->test_input($_POST['postal']);
            $city=$this->test_input($_POST['city']);
            $mobile=$this->test_input($_POST['mobile']);
            $data=array(
                'AddressId'=>$id,
                'AddressLine1'=>$address1,
                'AddressLine2'=>$address2,
                'City'=>$city,
                'PostalCode'=>$postal,
                'Mobile'=>$mobile
            );
            $this->model->update_address($data);
        }
    }
    public function update_detail(){
        if($_SERVER['REQUEST_METHOD']== "POST"){
            session_start();
            $id=$_SESSION['user_id'];
            $fname=$_POST['fname'];
            $lname=$_POST['lname'];
            $mobile=$_POST['mobile'];
            $language=$_POST['language'];
            $dob=$_POST['bday'];
            $data=array(
                'UserId'=>  $id,
                'FirstName'=>$fname,
                'LastName'=>$lname,
                'Mobile'=> $mobile,
                'LanguageId'=>$language,
                'DateOfBirth'=> $dob
            );
            $this->model->update_details($data);



        }else{
            echo 0;
        }
   


    }
    public function getdetail(){
        session_start();
        $id=$_SESSION['user_id'];
        $this->model->getcustomer_details($id);
        
    }
    public function getaddress(){
        session_start();
        $id=$_SESSION['user_id'];
        $this->model->getcustomer_address($id);
    }
    public function update_password(){
        session_start();
        $id=$_SESSION['user_id'];
        if($_SERVER['REQUEST_METHOD']== "POST"){
        
          $oldpassword=$this->test_input($_POST['oldpassword']);
            $newpassword=$this->test_input($_POST['password']);
           $repeatpassword=$this->test_input($_POST['confirmPassword']);
           if($newpassword == $repeatpassword)
           {
            $this->model->check_password($oldpassword,$newpassword,$id);
           }

        
        }

    }
    public function add_address(){
        session_start();
        $id=$_SESSION['user_id'];
        if($_SERVER['REQUEST_METHOD']== "POST"){           
           $addressline1=$this->test_input($_POST['addressline1']);
           $addressline2=$this->test_input($_POST['addressline2']);
           $postal=$this->test_input($_POST['postal']);
           $city=$this->test_input($_POST['city']);  
           $mobile=$this->test_input($_POST['mobile']);   
           $data=array(
            'UserId'=>  $id,
            'AddressLine1'=>$addressline1,
            'AddressLine2'=>$addressline2,
            'City'=>  $city,
            'PostalCode'=> $postal,
            'Mobile'=>$mobile
           );
           $this->model->addaddress($data);
         }
        else{
            echo 0;
        }
    }
    public function delete_address(){
        if(isset($_POST['AddressId']))
        {
            $addressid=$_POST['AddressId'];
            $this->model->delete_address($addressid);

        }
    }
    public function dashboard(){
        if($_SERVER['REQUEST_METHOD']== "GET"){     
        }
    }
}