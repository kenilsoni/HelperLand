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
    public function logout()
    {
        include("./views/logout.php");
    }
    public function upcoming_servicepage()
    {
        include("./views/upcomingservice.php");
    }
    public function bookservice_page()
    {
        include("./views/bookservice.php");
    }
    public function mysettingpage()
    {
        include("./views/servicehistory_mysetting.php");
    }
    public function forgotpassword_page()
    {
        include("./views/forgotpassword.php");
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
                window.location.href = '?function=contactpage'; </script>";
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
            $filename=mt_rand(100000,999999). '.jpg';
            date_default_timezone_set('Asia/Kolkata');
            $date = date('d-m-y h:i:s');

            if ($name && $mobile && $email && $message && $subject && $date && $filename) {
                $this->model->insert_contact($name, $mobile, $email, $message, $subject, $date,$filename);
            } else {
                echo "<script>alert('Invalid city data. Check all fields and resubmit');
                window.location.href='?function=createaccountpage'</script>";
            }
        }
    }

    public function login()
    {
        if (isset($_POST['email'])) {
            $email = $this->test_input($_POST['email']);
            $password = $this->test_input($_POST['password']);
            $remember = $_POST['remember'];
            if ($email && $password) {

                $this->model->check_login($email, $password, $remember);
            } else {
                $error_message = 'Invalid data';

                echo $error_message;
            }
        }
    }
    public function forgot_password()
    {
        if (isset($_POST['submit'])) {
            $emailid = $this->test_input($_POST['email']);
            if ($emailid != ' ') {
                $this->model->check_email($emailid);
            } else {
                echo "Kindly enter your email";
            }
        }
        if (isset($_POST['setbtn'])) {
            $password = $this->test_input($_POST['password']);
            $cpassword = $this->test_input($_POST['confirmPassword']);
            $id = $_POST['id'];
            if (($password == $cpassword) && $password != ' ') {
                $this->model->update_password($password, $id);
            }
        }
    }
}
