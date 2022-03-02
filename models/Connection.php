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
            $_SESSION['user'] = 1;
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
                $_SESSION['email'] = $users['Email'];
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
            echo 1;
        } else {
            echo 0;
        }
    }
    public function getaddress($userid, $postalcode)
    {
        $query = "select AddressLine1,AddressLine2,City,State,PostalCode,Mobile	 from useraddress where UserId=? and PostalCode=?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$userid, $postalcode]);
        $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($user) {

            $_SESSION['addressdata'] = $user;
            echo 1;
        } else {
            echo 0;
        }
    }
    public function insertschedule($service_data, $extraservice, $address)
    {
        $sql = "INSERT INTO servicerequest (UserId,ServiceId,ServiceStartDate,ZipCode,ServiceHourlyRate,ServiceHours,ExtraHours,SubTotal,Discount,TotalCost,Comments,HasPets,CreatedDate,Status)
        VALUES (:UserId,:ServiceId,:ServiceStartDate,:ZipCode,:ServiceHourlyRate,:ServiceHours,:ExtraHours,:SubTotal,:Discount,:TotalCost,:Comments,:HasPets,:CreatedDate,:Status)";
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
            session_start();
            $_SESSION['booking'] = 1;
            echo 1;
        } else {
            echo 0;
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
    public function getcustomer_details($id)
    {
        $sql1 = "select FirstName,LastName,Email,Mobile,LanguageId,DateOfBirth from user where UserId=?";
        $stmt1 = $this->conn->prepare($sql1);
        $stmt1->execute([$id]);
        $user1 = $stmt1->fetchAll(PDO::FETCH_ASSOC);
        if ($user1) {
            echo  json_encode($user1);
        } else {
            echo 0;
        }
    }
    public function getcustomer_address($id)
    {
        $sql2 = "select AddressId,AddressLine1,AddressLine2,City,PostalCode,Mobile from useraddress where UserId=?";
        $stmt2 = $this->conn->prepare($sql2);
        $stmt2->execute([$id]);
        $user2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);
        if ($user2) {
            echo json_encode($user2);
        } else {
            echo 0;
        }
    }
    public function update_address($data)
    {
        $sql = "UPDATE useraddress SET AddressLine1=:AddressLine1,AddressLine2=:AddressLine2,City=:City,PostalCode=:PostalCode,Mobile=:Mobile where AddressId=:AddressId ";
        $stmt = $this->conn->prepare($sql);
        $success = $stmt->execute($data);
        if ($success) {
            echo 1;
        } else {
            echo 0;
        }
    }
    public function update_details($data)
    {
        $sql = "UPDATE user SET FirstName=:FirstName,LastName=:LastName,Mobile=:Mobile,LanguageId=:LanguageId,DateOfBirth=:DateOfBirth where UserId=:UserId";
        $stmt = $this->conn->prepare($sql);
        $success = $stmt->execute($data);
        if ($success) {
            echo 1;
        } else {
            echo 0;
        }
    }
    public function check_password($oldpassword, $newpassword, $id)
    {
        $sql = "select Password from user where Password=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$oldpassword]);
        $success = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($success) {
            $sql = "UPDATE user SET Password=? where UserId=?";
            $stmt = $this->conn->prepare($sql);
            $user = $stmt->execute([$newpassword, $id]);
            if ($user) {
                echo 1;
            }
        } else {
            echo 0;
        }
    }
    public function addaddress($data)
    {
        $sql = "INSERT INTO useraddress ( `AddressLine1`, `AddressLine2`, `City`,  `PostalCode`,`Mobile`,`UserId`) VALUES (:AddressLine1, :AddressLine2, :City,  :PostalCode, :Mobile,:UserId)";
        $stmt = $this->conn->prepare($sql);
        $user = $stmt->execute($data);
        if ($user) {
            echo 1;
        } else {
            echo 0;
        }
    }
    public function delete_address($id)
    {
        $sql = "DELETE FROM `useraddress` WHERE AddressId=?";
        $stmt = $this->conn->prepare($sql);
        $user = $stmt->execute([$id]);
        if ($user) {
            echo 1;
        } else {
            echo 0;
        }
    }
    public function dashboard_data($id)
    {
        $sql = "SELECT ServiceId,ServiceStartDate,TotalCost,PaymentDone,Status,ServiceRequestId,ServiceHours FROM servicerequest WHERE UserId=14 AND Status=2";


        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);
        $success = $stmt->fetchAll(PDO::FETCH_ASSOC);


        if ($success) {

            echo json_encode($success);
        } else {
            echo 0;
        }
    }
    public function service_datafind($id)
    {

        $sql = "SELECT sr.ServiceRequestId, sr.ServiceId,sr.ServiceStartDate, sr.ServiceHourlyRate, sr.ServiceHours, sr.ExtraHours, sr.SubTotal, sr.Discount,sr.TotalCost, sr.ServiceProviderId, sr.SPAcceptedDate, sr.HasPets, sr.Status, sr.HasIssue, sr.PaymentDone, sra.AddressLine1, sra.AddressLine2, sra.City, sra.State, sra.PostalCode, sra.Mobile, sra.Email, sre.ServiceExtraId FROM servicerequest AS sr JOIN servicerequestaddress AS sra ON sra.ServiceRequestId = sr.ServiceRequestId LEFT JOIN servicerequestextra AS sre ON sre.ServiceRequestId = sr.ServiceRequestId WHERE sr.UserId =? AND sr.Status IN (1,3)";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);
        $success = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $data23 = [];


        foreach ($success as $data) {

            if (!is_null($data['ServiceProviderId'])) {

                $spid = $data['ServiceProviderId'];
                $serviceid = $data["ServiceRequestId"];
                $rating = $this->getRatingByIds($serviceid);
                $spratings = $this->getSPDetailesBySPId($spid);

                $data = array_merge($data, $spratings, $rating);
            }
            array_push($data23, $data);
        }


        if ($success) {
            echo json_encode($data23);
        } else {
            echo 0;
        }
    }
    public function getRatingByIds($serviceid)
    {
        $sql = "SELECT rating.* FROM rating JOIN servicerequest ON servicerequest.ServiceRequestId=rating.ServiceRequestId WHERE servicerequest.ServiceRequestId=$serviceid";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $success = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $success;
    }


    public function getSPDetailesBySPId($spid)
    {
        $sql = "SELECT COUNT(*) as TotalRating, AVG(rating.Ratings ) as AverageRating, CONCAT(user.FirstName,' ',user.LastName) as Fullname, user.UserProfilePicture FROM rating JOIN user ON user.UserId = rating.RatingTo WHERE rating.RatingTo = $spid";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $success = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $success;
    }
    public function reschedule($date, $id)
    {
        $sql = "UPDATE servicerequest SET ServiceStartDate=? WHERE ServiceRequestId=?";
        $stmt = $this->conn->prepare($sql);
        $success = $stmt->execute([$date, $id]);
        if ($success) {
            echo 1;
        }
    }
    public function cancel_service($id)
    {
        $sql = "UPDATE `servicerequest` SET Status=3 WHERE ServiceRequestId=?";
        $stmt = $this->conn->prepare($sql);
        $user = $stmt->execute([$id]);
        if ($user) {
            echo 1;
        } else {
            echo 0;
        }
    }
    public function fav_provider($id)
    {
        $sql = "SELECT fb.*, CONCAT(user.FirstName,' ', user.LastName) as FullName FROM favoriteandblocked as fb JOIN user ON user.UserId = fb.TargetUserId WHERE fb.UserId=$id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $success = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($success) {
            echo json_encode($success);
        } else {
            echo 0;
        }
    }
    public function service_detail($serviceid)
    {
        $sql1 = "SELECT Comments,SubTotal,HasPets,ServiceExtraId,AddressLine1,AddressLine2,City,PostalCode,Email,Mobile FROM servicerequest as a INNER JOIN servicerequestextra as b INNER JOIN servicerequestaddress as c WHERE a.ServiceRequestId=$serviceid AND b.ServiceRequestId=$serviceid AND c.ServiceRequestId=$serviceid";

        $stmt = $this->conn->prepare($sql1);
        $stmt->execute([$serviceid]);
        $success1 = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($success1) {
            echo json_encode($success1);
        } else {
            echo 0;
        }
    }
    public function update_rating($data)
    {
        $sql = "INSERT INTO `rating`(`ServiceRequestId`, `RatingFrom`, `RatingTo`, `Ratings`, `Comments`, `OnTimeArrival`, `Friendly`, `QualityOfService`) VALUES (:ServiceRequestId,:RatingFrom,:RatingTo,:Ratings,:Comments,:OnTimeArrival,:Friendly,:QualityOfService)";
        $stmt = $this->conn->prepare($sql);
        $success = $stmt->execute($data);
        if ($success) {
            echo 1;
        } else {
            echo 0;
        }
    }
}
