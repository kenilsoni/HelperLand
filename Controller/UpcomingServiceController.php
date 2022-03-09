<?php
class UpcomingServiceController
{
    function __construct()
    {
        include('models/Connection.php');
        $this->model = new Helperland();
    }
    public function upcoming_servicepage()
    {
        include("./views/upcomingservice.php");
    }
    public function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    public function getsp_detail(){
        if($_SERVER['REQUEST_METHOD']=="GET"){
            session_start();
            $id=$_SESSION['user_id'];
            $this->model->getsp_detail($id);
        }
        else{
            echo 0;
        }
    }
    public function updatesp_detail(){
        if($_SERVER['REQUEST_METHOD']=="POST"){
            session_start();
            $id=$_SESSION['user_id'];
            $data1=array(
                'UserId'=>$id,
                'FirstName'=>$this->test_input($_POST['fname']),
                'LastName'=>$this->test_input($_POST['lname']),
                'DateOfBirth'=>$this->test_input($_POST['dob']),
                'Mobile'=>$this->test_input($_POST['mobile']),
                'Gender'=>$this->test_input($_POST['radiobtn_gender']),
                'NationalityId'=>$this->test_input($_POST['nationality']),
                'UserProfilePicture'=>$this->test_input($_POST['radiobtn_avatar']),
                'ZipCode'=>$this->test_input($_POST['postal']),


            );
            $data2=array(
                'UserId'=>$id,              
                'Mobile'=>$this->test_input($_POST['mobile']),
                'AddressLine1'=>$this->test_input($_POST['address1']),
                'AddressLine2'=>$this->test_input($_POST['address2']),
                'City'=>$this->test_input($_POST['city']),     
                'PostalCode'=>$this->test_input($_POST['postal']),
            
            );
            $this->model->updatesp_detail($data1,$data2);
        }
        else{
            echo 0;
        }
    }
    public function getNewService(){
        if($_SERVER['REQUEST_METHOD']=="GET"){
            session_start();
            $id=$_SESSION['user_id'];

            $this->model->getNewService_data($id);
        }
        else{
            echo 0;
        }
    }
    public function acceptService(){
        if($_SERVER['REQUEST_METHOD']=="POST"){
            session_start();
            $id=$_SESSION['user_id'];
            $date=date("Y-m-d H:i:s");
            $serviceid= $_POST['serviceid'];
            $this->model->acceptService_data($id,$serviceid,$date);
        
        }
        else{
            echo 0;
        }
    }
    public function getUpcomingService(){
        if($_SERVER['REQUEST_METHOD']=="GET"){
            session_start();
            $id=$_SESSION['user_id'];
            $this->model->getUpcomingService_data($id);
        
        }
        else{
            echo 0;
        }
    }
    public function cancelService(){
        if($_SERVER['REQUEST_METHOD']=="POST"){
            session_start();
            $id=$_SESSION['user_id'];
            $serviceid= $_POST['serviceid'];
            $this->model->cancelService_data($id,$serviceid);
        
        }
        else{
            echo 0;
        }
    }
    public function completeservice(){
        if($_SERVER['REQUEST_METHOD']=="POST"){
            session_start();
            $id=$_SESSION['user_id'];
            $serviceid= $_POST['serviceid'];
            $this->model->completeservice_data($id,$serviceid);
        
        }
        else{
            echo 0;
        }
    }
    public function getservice_history(){
        if($_SERVER['REQUEST_METHOD']=="GET"){
            session_start();
            $id=$_SESSION['user_id'];
            $this->model->getshistory_data($id);
        
        }
        else{
            echo 0;
        }

    }
    public function getratingdata(){
        if($_SERVER['REQUEST_METHOD']=="GET"){
            session_start();
            $id=$_SESSION['user_id'];
            $this->model->getrating_data($id);
        
        }
        else{
            echo 0;
        }

    }


}
?>