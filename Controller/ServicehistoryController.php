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
        $id = $_SESSION['user_id'];
        $this->model->getcustomer_details($id);
        // include("./views/servicehistory.php");
    }
    public function update_address()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            $id = $_POST['update_id'];
            $address1 = $this->test_input($_POST['addressline1']);
            $address2 = $this->test_input($_POST['addressline2']);
            $postal = $this->test_input($_POST['postal']);
            $city = $this->test_input($_POST['city']);
            $mobile = $this->test_input($_POST['mobile']);
            $data = array(
                'AddressId' => $id,
                'AddressLine1' => $address1,
                'AddressLine2' => $address2,
                'City' => $city,
                'PostalCode' => $postal,
                'Mobile' => $mobile
            );
            $this->model->update_address($data);
        }
    }
    public function update_detail()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            session_start();
            $id = $_SESSION['user_id'];
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $mobile = $_POST['mobile'];
            $language = $_POST['language'];
            $dob = $_POST['bday'];
            $data = array(
                'UserId' =>  $id,
                'FirstName' => $fname,
                'LastName' => $lname,
                'Mobile' => $mobile,
                'LanguageId' => $language,
                'DateOfBirth' => $dob
            );
            $this->model->update_details($data);
        } else {
            echo 0;
        }
    }
    public function getdetail()
    {
        session_start();
        $id = $_SESSION['user_id'];
        $this->model->getcustomer_details($id);
    }
    public function getaddress()
    {
        session_start();
        $id = $_SESSION['user_id'];
        $this->model->getcustomer_address($id);
    }
    public function update_password()
    {
        session_start();
        $id = $_SESSION['user_id'];
        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            $oldpassword = $this->test_input($_POST['oldpassword']);
            $newpassword = $this->test_input($_POST['password']);
            $repeatpassword = $this->test_input($_POST['confirmPassword']);
            if ($newpassword == $repeatpassword) {
                $this->model->check_password($oldpassword, $newpassword, $id);
            }
        } else {
            echo 0;
        }
    }
    public function add_address()
    {
        session_start();
        $id = $_SESSION['user_id'];
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $addressline1 = $this->test_input($_POST['addressline1']);
            $addressline2 = $this->test_input($_POST['addressline2']);
            $postal = $this->test_input($_POST['postal']);
            $city = $this->test_input($_POST['city']);
            $mobile = $this->test_input($_POST['mobile']);
            $data = array(
                'UserId' =>  $id,
                'AddressLine1' => $addressline1,
                'AddressLine2' => $addressline2,
                'City' =>  $city,
                'PostalCode' => $postal,
                'Mobile' => $mobile
            );
            $this->model->addaddress($data);
        } else {
            echo 0;
        }
    }
    public function delete_address()
    {
        if (isset($_POST['AddressId'])) {
            $addressid = $_POST['AddressId'];
            $this->model->delete_address($addressid);
        } else {
            echo 0;
        }
    }
    public function dashboard()
    {
        session_start();
        $id = $_SESSION['user_id'];
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            $this->model->dashboard_data($id);
        } else {
            echo 0;
        }
    }
    public function reschedule()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $date = $_POST['date'];
            $time = $_POST['time'];
            $serviceid = $_POST['serviceid'];
            $serviceid_display=$_POST['serviceid_display'];
            $spid=$_POST['spid'];
            $combinedDT = date('Y-m-d H:i:s', strtotime("$date $time"));

            $this->model->reschedule($combinedDT, $serviceid);
            $this->model->reschedule_mail($combinedDT,$spid,$serviceid_display);
        } else {
            echo 0;
        }
    }
    public function cancel_service()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $id = $_POST['serviceid'];

            $this->model->cancel_service($id);
        } else {
            echo 0;
        }
    }
    public function service_detail()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $serviceid = $_POST['serviceid'];
            $this->model->service_detail($serviceid);
        } else {
            echo 0;
        }
    }
    public function service_datafind()
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            session_start();
            $id = $_SESSION['user_id'];
            $this->model->service_datafind($id);
        } else {
            echo 0;
        }
    }
    public function update_rating()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            session_start();
            $comment = $_POST['comment'];
            $ontime = (float)$_POST['ontime'];
            $friendly = (float)$_POST['friendly'];
            $qos = (float)$_POST['qos'];
            $ratings = (float)(($ontime + $friendly + $qos) / 3);
            $data = array(
                'RatingTo' => $_POST['SPid'],
                'RatingFrom' => $_SESSION['user_id'],
                'OnTimeArrival' =>  $ontime,
                'Friendly' => $friendly,
                'QualityOfService' => $qos,
                'ServiceRequestId' => $_POST['sid'],
                'Comments' => $comment,
                'Ratings' => $ratings,
            );
            $this->model->update_rating($data);
        } else {
            echo 0;
        }
    }
    public function fav_provider()
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            session_start();
            $id = $_SESSION['user_id'];
            $this->model->fav_provider($id);
        } else {
            echo 0;
        }
    }
    public function update_fav_provider()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            session_start();
            $id = $_SESSION['user_id'];
            $spid=$_POST['spid'];
            $this->model->update_fav_provider($id,$spid);
        } else {
            echo 0;
        }
    }
    public function add_fav_provider()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            session_start();
            $id = $_SESSION['user_id'];
            $spid=$_POST['spid'];
            $this->model->add_fav_provider($id,$spid);
        } else {
            echo 0;
        }
    }
    public function getfp_detail()
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            session_start();
            $id = $_SESSION['user_id'];
          
            $this->model->getfp_detail($id);
        } else {
            echo 0;
        }
    }
    public function  addblock_fav_provider()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            session_start();
            $id = $_SESSION['user_id'];
            $spid=$_POST['spid'];
            $this->model-> addblock_fav_provider($id,$spid);
        } else {
            echo 0;
        }
    }
    public function  removeblock_fav_provider()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            session_start();
            $id = $_SESSION['user_id'];
            $spid=$_POST['spid'];
            $this->model->  removeblock_fav_provider($id,$spid);
        } else {
            echo 0;
        }
    }
   
    
}
