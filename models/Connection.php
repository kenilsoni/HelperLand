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
        VALUES (?,?,?,?,?)";
        $stmt= $this->conn->prepare($sql);
        $stmt->execute([$name, $mobile, $email, $message, $subject]);

        echo "<script>alert('Mail send Successfully');
                window.location.href = '?function=contactpage'; </script>";
    }
    public function insert_user($fname, $lname, $mobile, $email, $password, $UserTypeId)
    {
        // for userprovider set usertypeid to 1
        // for serviceprovider set usertypeid to 2
        $stmt = $this->conn->prepare("SELECT * FROM user WHERE Email=?");
        $stmt->execute([$email]); 
        $user = $stmt->fetch();
        if($user){
            echo "<script>alert('Email is already exist'); window.location.href = '?function=Homepage';</script>";
        }
        else{
              $sql = "INSERT INTO user (FirstName,LastName,Email,Password,Mobile,UserTypeId)
        VALUES (?,?,?,?,?,?)";
        $stmt= $this->conn->prepare($sql);
        $stmt->execute([$fname, $lname,$email,$password, $mobile,$UserTypeId]);

        echo "<script>alert('Account created successfully');
                window.location.href = '?function=Homepage'; </script>";
        }
    
      
    }
    public function check_login($email,$password){
        $query = "select * from user where Email=? and Password=?";
        $stmt= $this->conn->prepare($query);
        $stmt->execute([$email,$password]); 
        $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
       
        if($user){
            session_start();
            foreach ($user as $users) {
                    $user_id=$users['UserTypeId'] ;
                    $_SESSION['user_name']=$users['FirstName'] ;
            }
            if($user_id == 1){
                  header("location:?function=service_historypage");
            }
            if($user_id == 2){
                header("location:?function=upcoming_servicepage");
            }
        }
        else{
            echo "<script>alert('Please check email or password');
            window.location.href = '?function=Homepage';</script>";
        
        }

    }
}
