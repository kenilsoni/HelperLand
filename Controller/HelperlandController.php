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
    public function contactus()
    {
        if (isset($_POST['action'])) {


            function test_input($data)
            {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }

            $fname = test_input($_POST['fname']);
            $lname = test_input($_POST['lname']);
            $subject = test_input($_POST['subject']);
            $mobile = test_input($_POST['mobile']);
            $email = test_input($_POST['email']);
            $name = $fname . " " . $lname;
            $message = test_input($_POST['message']);




            if ($name && $mobile && $email && $message && $subject) {

                $this->model->insert_contact($name, $mobile, $email, $message, $subject);
            } else {
                $error_message = 'Invalid city data. Check all fields and resubmit.';

                echo $error_message;
            }
        }
    }
}
