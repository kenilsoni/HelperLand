<?php
class HelperlandController
{

    var $model;
    function __construct()
    {
        include('models/Connection.php');
        $this->model = new Helperland();
    }
    public function HomePage()
    {
        include("./views/Homepage.php");
    }
    public function contactpage()
    {
        include("./views/contact.php");
    }
    public function aboutpage()
    {
        include("./views/about.php");
    }
    public function pricepage()
    {
        include("./views/price.php");
    }
    public function faqpage()
    {
        include("./views/faq.php");
    }
    public function createaccountpage()
    {
        include("./views/create_account.php");
    }
    public function become_providerpage()
    {
        include("./views/become_provider.php");
    }
    public function service_historypage()
    {
        include("./views/servicehistory.php");
    }
    public function logout(){
        include("./views/logout.php");
    }
    public function upcoming_servicepage()
    {
        include("./views/upcomingservice.php");
    }
    public function bookservice_page(){
        include("./views/bookservice.php");
    }
    public function mysettingpage(){
        include("./views/servicehistory_mysetting.php");
    }
    public function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    public function createaccount_user()
    {
        if (isset($_POST['fname'])) {
            $fname = $this->test_input($_POST['fname']);
            $lname = $this->test_input($_POST['lname']);
            $password = $this->test_input($_POST['password']);
            $cpassword = $this->test_input($_POST['confirmPassword']);
            $mobile = $this->test_input($_POST['mobile']);
            $email = $this->test_input($_POST['email']);
            $UserTypeId = $this->test_input($_POST['usertype']);

            if ($cpassword == $password) {
                if ($fname && $lname && $mobile && $email && $password && $UserTypeId) {

                    $this->model->insert_user($fname, $lname, $mobile, $email, $password, $UserTypeId);
                } else {
                    $error_message = 'Invalid city data. Check all fields and resubmit.';

                    echo $error_message;
                }
            } else {
                echo "<script>alert('Please check the password');
                window.location.href = '?function=createaccountpage'; </script>";
            }
        }
    }
    public function insert_contactus()
    {
        if (isset($_POST['fname'])) {
            $fname = $this->test_input($_POST['fname']);
            $lname = $this->test_input($_POST['lname']);
            $subject = $this->test_input($_POST['subject']);
            $mobile = $this->test_input($_POST['mobile']);
            $email = $this->test_input($_POST['email']);
            $name = $fname . " " . $lname;
            $message = $this->test_input($_POST['message']);

            if ($name && $mobile && $email && $message && $subject) {
                $this->model->insert_contact($name, $mobile, $email, $message, $subject);
            } else {
                $error_message = 'Invalid city data. Check all fields and resubmit.';
                echo $error_message;
            }
        }
    }

    public function login()
    {
        if (isset($_POST['email'])) {
            $email = $this->test_input($_POST['email']);
            $password = $this->test_input($_POST['password']);
            if ($email && $password) {

                $this->model->check_login($email, $password);
            } else {
                $error_message = 'Invalid data';

                echo $error_message;
            }
        }
    }
}
