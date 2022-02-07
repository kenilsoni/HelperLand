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


    public function insert_contact($data)
    {
        session_start();
        $sql = "INSERT INTO contactus (Name,PhoneNumber,Email,Message,Subject,CreatedOn,UploadFileName)
        VALUES (:Name,:PhoneNumber,:Email,:Message,:Subject,:CreatedOn,:UploadFileName)";
        $stmt = $this->conn->prepare($sql);
        $execute = $stmt->execute($data);
        if ($execute) {
            $_SESSION['contact'] = 1;
            echo "<script>
            window.location.href = '?function=contactpage'; </script>";
        } else {
            $_SESSION['contact'] = 2;
            echo "<script>
            window.location.href = '?function=contactpage'; </script>";
        }
    }
    public function insert_user($data, $email)
    {
        // for userprovider set usertypeid to 1
        // for serviceprovider set usertypeid to 2

        session_start();
        $usertype = $data['UserTypeId'];
        $stmt = $this->conn->prepare("SELECT * FROM user WHERE Email=:Email");
        $stmt->execute($email);
        $user = $stmt->fetch();
        if ($user) {
            $_SESSION['emailexist'] = 1;
            if ($usertype == 1) {
                echo "<script>window.location.href = '?function=createaccountpage';</script>";
            } else {
                echo "<script>
                window.location.href = '?function=become_providerpage'; </script>";
            }
        } else {
            $sql = "INSERT INTO user (FirstName,LastName,Email,Password,Mobile,UserTypeId,CreatedDate)
        VALUES (:FirstName,:LastName,:Email,:Password,:Mobile,:UserTypeId,:CreatedDate)";
            $stmt = $this->conn->prepare($sql);
            $execute = $stmt->execute($data);
            if ($execute) {

                $_SESSION['registration'] = 1;
                if ($usertype == 1) {
                    echo "<script>
                window.location.href = '?function=Homepage'; </script>";
                } else {
                    echo "<script>
                    window.location.href = '?function=become_providerpage'; </script>";
                }
            } else {
                $_SESSION['registration'] = 2;
                if ($usertype == 1) {
                    echo "<script>
                window.location.href = '?function=Homepage'; </script>";
                } else {
                    echo "<script>
                    window.location.href = '?function=become_providerpage'; </script>";
                }
            }
        }
    }
    public function check_login($email, $password, $remember)
    {
        $query = "select * from user where Email=? and Password=?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$email, $password]);
        $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
        session_start();
        if ($user) {
            if (!empty($remember)) {

                setcookie("member_login", $email, time() + (86400 * 3));
                setcookie("member_password", $password, time() + (86400 * 3));
            }

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
            $_SESSION['checkemail'] = 1;
            echo "<script>
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
            session_start();
            $_SESSION['pincode'] = 1;
            echo "<script>
            window.location.href='?controller=Helperland&function=bookservice_page';</script>";
        }
    }
    public function getaddress($userid)
    {
        $query = "select AddressLine1,AddressLine2,City,State,PostalCode,Mobile	 from useraddress where UserId=? limit 2";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$userid]);
        $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($user) {
            // foreach ($user as $users) { echo $users['AddressLine1'];}

            $_SESSION['addressdata'] = $user;
            header("location:?controller=Helperland&function=bookservice_page&flag=third");
        } else {
            echo "<script>
            window.location.href='?controller=Helperland&function=bookservice_page';</script>";
        }
    }
    public function insertschedule($service_data, $extraservice, $address)
    {
        $sql = "INSERT INTO servicerequest (UserId,ServiceId,ServiceStartDate,ZipCode,ServiceHourlyRate,ServiceHours,ExtraHours,SubTotal,Discount,TotalCost,Comments,HasPets,CreatedDate)
        VALUES (:UserId,:ServiceId,:ServiceStartDate,:ZipCode,:ServiceHourlyRate,:ServiceHours,:ExtraHours,:SubTotal,:Discount,:TotalCost,:Comments,:HasPets,:CreatedDate)";
        $stmt = $this->conn->prepare($sql);
        $success1 = $stmt->execute($service_data);
        $id = $this->conn->lastInsertId();

        $sql2 = "INSERT INTO servicerequestextra (ServiceExtraId,ServiceRequestId) VALUES (?,?)";
        $stmt2 = $this->conn->prepare($sql2);
        $success2 = $stmt2->execute([$extraservice, $id]);

        $sql3 = "INSERT INTO servicerequestaddress (  `AddressLine1`, `AddressLine2`, `City`, `PostalCode`, `Mobile`,`ServiceRequestId`) VALUES (:AddressLine1, :AddressLine2, :City,  :PostalCode, :Mobile,$id)";
        $stmt3 = $this->conn->prepare($sql3);
        $success3 = $stmt3->execute($address);


        $userid = $_SESSION['user_id'];
        $sql4 = "INSERT INTO useraddress ( `AddressLine1`, `AddressLine2`, `City`,  `PostalCode`,`Mobile`,`UserId`) VALUES (:AddressLine1, :AddressLine2, :City,  :PostalCode, :Mobile,$userid)";
        $stmt4 = $this->conn->prepare($sql4);
        $success4 = $stmt4->execute($address);

        if ($success2 && $success1 && $success3 && $success4) {
            $_SESSION['booking'] = 1;
            echo "<script>
                window.location.href='?controller=Helperland&function=HomePage';
                </script>";
        } else {
            $_SESSION['booking'] = 2;
            echo "<script>
            window.location.href='?controller=Helperland&function=HomePage';
            </script>";
        }
    }
    public function check_email($emailid)
    {
        $stmt = $this->conn->prepare("SELECT UserId FROM user WHERE Email=?");
        $stmt->execute([$emailid]);
        $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
        session_start();
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
                $_SESSION['sendmail'] = 1;
                echo "<script>
                window.location.href='?controller=Helperland&function=HomePage'</script>";
            } else {
                $_SESSION['sendmail'] = 2;
                echo "<script>
                window.location.href='?controller=Helperland&function=HomePage'</script>";
            }
        } else {
            $_SESSION['sendmail'] = 3;
            echo "<script>
            window.location.href='?controller=Helperland&function=HomePage';</script>";
        }
    }
    public function update_password($password, $id)
    {
        session_start();
        $sql = "UPDATE user SET Password=? where UserId=?";
        $stmt = $this->conn->prepare($sql);
        $user = $stmt->execute([$password, $id]);
        if ($user) {
            $_SESSION['fpassword'] = 1;
            echo "<script>
            window.location.href='?controller=Helperland'</script>";
        } else {
            $_SESSION['fpassword'] = 2;
            echo "<script>
            window.location.href='?controller=Helperland'</script>";
        }
    }
}
