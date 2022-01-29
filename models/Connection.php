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


    public function insert_contact($name, $mobile, $email, $message, $subject)
    {

        $sql = "INSERT INTO contactus (Name,PhoneNumber,Email,Message,Subject)
        VALUES ('$name', '$mobile', '$email','$message','$subject')";
        $this->conn->exec($sql);
        $function = 'contact';
        echo "<script>alert('Mail send Successfully');
                window.location.href = '?function=contactpage'; </script>";
    }
    public function insert_user($fname, $lname, $mobile, $email, $password, $UserTypeId)
    {
        // for userprovider set usertypeid to 1
        // for serviceprovider set usertypeid to 2
        $sql = "INSERT INTO user (FirstName,LastName,Email,Password,Mobile,UserTypeId)
        VALUES ('$fname', '$lname', '$email','$password','$mobile','$UserTypeId')";
        $this->conn->exec($sql);

        echo "<script>alert('Account created successfully');
                window.location.href = '?function=Homepage' </script>";
    }
}
