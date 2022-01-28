<?php

class Helperland
{

    /* Creates database connection */
    public function __construct()
    {
        try {
            /* Properties */
            $dsn = 'mysql:dbname=helperland;host=localhost';
            $user = 'root';
            $password = '';
            $this->conn = new PDO($dsn, $user, $password);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "";
            die();
        }
    }

    public function EmailExists($email)
    {
        $sql = "select * from customer_details where Email = $email";
        $stmt =  $this->conn->prepare($sql);
        $stmt->execute();
        $count = $stmt->rowCount();
        if ($count = 1) {
            echo "Email Available";
        } else {
            echo 'Email Already Exists Please Try Another Email';
        }
    }
    public function insert_contact($name, $mobile, $email, $message, $subject)
    {

        $sql = "INSERT INTO contactus (Name,PhoneNumber,Email,Message,Subject)
        VALUES ('$name', '$mobile', '$email','$message','$subject')";
        // use exec() because no results are returned
        $this->conn->exec($sql);
        $function = 'contact';
        echo "<script>alert('Mail send Successfully');
                window.location.href = 'http://localhost/helperland/1st_submission/views/contact.php'; </script>";
    }
}
