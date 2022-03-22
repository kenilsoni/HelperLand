<?php
class AdminController
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
    public function admin_management()
    {
        include("./views/Admin_management.php");
    }
    public function getservice_data()
    {
       $this->model->getadmin_service_data();
    }
    public function reschedule()
    {
        if($_SERVER['REQUEST_METHOD']== "POST"){
            $name="admin";
            $date=$_POST['date_modal'];
            $time=$_POST['time_modal'];
            $add1=$this->test_input($_POST['add1_modal']);
            $add2=$this->test_input($_POST['add2_modal']);
            $city=$this->test_input($_POST['city_modal']);
            $postal=$this->test_input($_POST['postal_modal']);
            $serviceid=$_POST['service_id'];
            $spid=$_POST['sp_id'];
            $combinedDT = new DateTime();
            $date = explode("-", $date);
            $time3 = explode(":", $time);
            $combinedDT->setDate($date[0], $date[1], $date[2])->setTime($time3[0], $time3[1]);
            $serviceid_display=$_POST['servicereqid_display'];
            $userid=$_POST['userid'];

            $address=array(

                'ServiceRequestId'=>$serviceid,
                'AddressLine1'=>$add1,
                'AddressLine2'=>$add2,
                'City'=> $city,
                'PostalCode'=>$postal
                
            );
            $date=array(
                'ServiceRequestId'=> $serviceid,
                'ServiceStartDate'=> $combinedDT->format("Y-m-d H-i-s")
            );
            $this->model->reschedule_admin($date,$address);
            $this->model->reschedule_mail($combinedDT,$spid,$serviceid_display,$name);
            $this->model->reschedule_mail($combinedDT,$userid,$serviceid_display,$name);
        }
  
    }
    public function getuser_data()
    {
       $this->model->getadmin_user_data();
    }
    public function active()
    {
        if($_SERVER['REQUEST_METHOD']== "POST"){
            $id=$_POST['id'];
            $data=array(
                'UserId'=>$id,
                'IsActive'=>1
            );
       $this->model->getadmin_active($data);
        }
    }
    public function Inactive()
    {
        if($_SERVER['REQUEST_METHOD']== "POST"){
            $id=$_POST['id'];
            $data=array(
                'UserId'=>$id,
                'IsActive'=>0
            );
       $this->model->getadmin_active($data);
        }
    }

}