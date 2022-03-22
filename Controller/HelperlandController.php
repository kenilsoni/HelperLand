<?php
class HelperlandController
{


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
        if (isset($_POST['submit'])) {
        //    echo "okdd";
            $fname = $this->test_input($_POST['fname']);
            $lname = $this->test_input($_POST['lname']);
            $password = $this->test_input($_POST['password']);
            $cpassword = $this->test_input($_POST['confirmPassword']);
            $mobile = $this->test_input($_POST['mobile']);
            $email = $this->test_input($_POST['email']);
            $UserTypeId = $this->test_input($_POST['usertype']);
            $name = $fname . " " . $lname;
            if($UserTypeId==1){
                $IsActive=1;
            }else{
                $IsActive=0;
            }
            $data = array(
                'FirstName' => $fname,
                'LastName' => $lname,
                'Email' =>  $email,
                'Password' => $password,
                'Mobile' => $mobile,
                'UserTypeId' => $UserTypeId,
                'IsActive'=>$IsActive
                
                
            );
            $email = array(
                'Email' =>  $email,
            );
            if ($cpassword == $password) {
                if (!preg_match('/^[0-9]{10}+$/', $mobile)) {
                    session_start();
                    $_SESSION['user'] = 2;
                    if($UserTypeId==1){
                        header("location:?function=createaccountpage");
                    }elseif($UserTypeId==2){
                        header("location:?function=become_providerpage");
                    }
                    
                } elseif (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                    session_start();
                    $_SESSION['user'] = 3;
                    if($UserTypeId==1){
                        header("location:?function=createaccountpage");
                    }elseif($UserTypeId==2){
                        header("location:?function=become_providerpage");
                    }
                } else {
                    if ($fname && $lname && $mobile && $email && $password && $UserTypeId) {

                        $this->model->insert_user($data, $email);
                    } else {
                        if($UserTypeId==1){
                            echo "<script>alert('Please check the data');
                            window.location.href = '?function=createaccountpage'; </scriptgetdetail>";
                        }elseif($UserTypeId==2){
                            echo "<script>alert('Please check the data');
                            window.location.href = '?function=become_providerpage; </script>";
                        }
                       
                    }
                }
            } else {
                if($UserTypeId==1){
                    echo "<script>alert('Please check the password');
                    window.location.href = '?function=createaccountpage'; </script>";
                }elseif($UserTypeId==2){
                    echo "<script>alert('Please check the password');
                    window.location.href = '?function=become_providerpage; </script>";
                }
            }
        }
    }
    public function insert_contactus()
    {
        if (isset($_POST['submit'])) {

            date_default_timezone_set('Asia/Kolkata');
            $date = date('d-m-y h:i:s');
            $fname = $this->test_input($_POST['fname']);
            $lname = $this->test_input($_POST['lname']);
            $subject = $this->test_input($_POST['subject']);
            $mobile = $this->test_input($_POST['mobile']);
            $email = $this->test_input($_POST['email']);
            $name = $fname . " " . $lname;
            $message = $this->test_input($_POST['message']);
            $filename = mt_rand(100000, 999999) . '.jpg';

            $data = array(
                'Name' => $name,
                'PhoneNumber' => $mobile,
                'Email' =>  $email,
                'Message' => $message,
                'Subject' => $subject,
                'CreatedOn' => $date,
                'UploadFileName' => $filename
            );

            if (!preg_match('/^[0-9]{10}+$/', $mobile)) {
                session_start();
                $_SESSION['contact'] = 3;
                header("location:?function=contactpage");
            } elseif (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                session_start();
                $_SESSION['contact'] = 4;
                header("location:?function=contactpage");
            } else {
                if ($name && $mobile && $email && $message && $subject && $date && $filename) {
                    $this->model->insert_contact($data);
                } else {
                    echo "<script>alert('Invalid city data. Check all fields and resubmit');
                    window.location.href='?function=contactpage'</script>";
                }
            }
        }
    }

    public function login()
    {
        if (isset($_POST['email'])) {
            $email = $this->test_input($_POST['email']);
            $password = $this->test_input($_POST['password']);
            if (isset($_POST['remember'])) {
                $remember = 1;
            } else {
                $remember = 0;
            }
            if ($email && $password) {

                $this->model->check_login($email, $password, $remember);
            } else {

                echo "<script>alert('Invalid data');
                window.location.href='?function=createaccountpage'</script>";
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
                echo "<script>alert('Kindly enter your email');
                window.location.href='?controller=Helperland&function=HomePage';</script>";
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
