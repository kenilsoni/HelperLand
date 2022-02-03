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


    public function insert_contact($name, $mobile, $email, $message, $subject, $date, $filename)
    {

        $sql = "INSERT INTO contactus (Name,PhoneNumber,Email,Message,Subject,CreatedOn,UploadFileName)
        VALUES (?,?,?,?,?,?,?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$name, $mobile, $email, $message, $subject, $date, $filename]);

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
        if ($user) {
            echo "<script>alert('Email is already exist'); window.location.href = '?function=Homepage';</script>";
        } else {
            $sql = "INSERT INTO user (FirstName,LastName,Email,Password,Mobile,UserTypeId)
        VALUES (?,?,?,?,?,?)";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$fname, $lname, $email, $password, $mobile, $UserTypeId]);

            echo "<script>alert('Account created successfully');
                window.location.href = '?function=Homepage'; </script>";
        }
    }
    public function check_login($email, $password, $remember)
    {
        $query = "select * from user where Email=? and Password=?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$email, $password]);
        $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($user) {
            if (!empty($remember)) {

                setcookie("member_login", $email, time() + (86400 * 3));
                setcookie("member_password", $password, time() + (86400 * 3));
            }
            session_start();
            foreach ($user as $users) {
                $user_type = $users['UserTypeId'];
                $_SESSION['user_id'] = $users['UserId'];
                $_SESSION['user_name'] = $users['FirstName'];
            }
            if ($user_type == 1) {
                header("location:?function=service_historypage");
            }
            if ($user_type == 2) {
                header("location:?function=upcoming_servicepage");
            }
        } else {
            echo "<script>alert('Please check email or password');
            window.location.href = '?function=Homepage';</script>";
        }
    }

    public function check_pincode($pincode)
    {
        $query = "select id from zipcode where ZipcodeValue=?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$pincode]);
        $user = $stmt->fetch();
        if ($user) {
            setcookie("pincode", $pincode, time() + 3600);
            header("location:?controller=Helperland&function=bookservice_page&flag=second");
        } else {
            echo "<script>alert('Sorry!! Service is not available here');
            window.location.href='?controller=Helperland&function=bookservice_page'</script>";
        }
    }
    public function getaddress($userid)
    {
        $query = "select AddressLine1,AddressLine2,City,State,PostalCode,Mobile	 from useraddress where UserId=?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$userid]);
        $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($user) {
            // foreach ($user as $users) { echo $users['AddressLine1'];}

            $_SESSION['addressdata'] = $user;
            header("location:?controller=Helperland&function=bookservice_page&flag=third");
        } else {
        }
    }
    public function insertschedule($data, $extraservice)
    {
        $sql = "INSERT INTO servicerequest (UserId,ServiceId,ServiceStartDate,ZipCode,ServiceHourlyRate,ServiceHours,ExtraHours,SubTotal,Discount,TotalCost,Comments,HasPets,CreatedDate)
        VALUES (:UserId,:ServiceId,:ServiceStartDate,:ZipCode,:ServiceHourlyRate,:ServiceHours,:ExtraHours,:SubTotal,:Discount,:TotalCost,:Comments,:HasPets,:CreatedDate)";
        $stmt = $this->conn->prepare($sql);
        $success = $stmt->execute($data);
        $id = $this->conn->lastInsertId();
        $sql2 = "INSERT INTO servicerequestextra (ServiceExtraId,ServiceRequestId) VALUES (?,?)";
        $stmt2 = $this->conn->prepare($sql2);
        $success2 = $stmt2->execute([$extraservice, $id]);
        if ($success2 && $success) {
            echo "<script>alert('your booking is successfully');
                window.location.href='?controller=Helperland&function=HomePage';
                </script>";
        } else {
            echo "something went wrong";
        }
    }
    public function check_email($emailid)
    {
        $stmt = $this->conn->prepare("SELECT UserId FROM user WHERE Email=?");
        $stmt->execute([$emailid]);
        $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($user) {
            foreach ($user as $users) {
                $id = $users['UserId'];
            }
            require "vendor/autoload.php";
            $email = new \SendGrid\Mail\Mail();
            $email->setFrom("comicbykenil@gmail.com", "HelperLand");
            $email->setSubject("Forgot Password");
            $email->addTo($emailid);
            $email->addContent(
                "text/html",
                "<h1> Please click on the given link to forgot your password </h1><br><a href='http://localhost/helperland/1st_submission/?controller=Helperland&function=forgotpassword_page&Parameter=$id'>Please Click Here to Forgot Password</a>"

            );
            $sendgrid = new \SendGrid("");
            if ($sendgrid->send($email)) {
                echo "<script>alert('Mail sent Successfully!!')
                window.location.href='?controller=Helperland&function=HomePage'</script>";
            } else {
                echo "<script>alert('Something went wrong')</script>";
            }
        } else {
            echo "<script>alert('Email is not exist in our record');
            window.location.href='?controller=Helperland&function=HomePage';</script>";
        }
    }
    public function update_password($password, $id)
    {

        $sql = "UPDATE user SET Password=? where UserId=?";
        $stmt = $this->conn->prepare($sql);
        $user = $stmt->execute([$password, $id]);
        if ($user) {
            echo "<script>alert('Password is Update Successfully');
            window.location.href='?controller=Helperland'</script>";
        } else {
            echo "something went wrong";
        }
    }
}
