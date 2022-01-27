 <?php



$controller='Helperland';
$function='HomePage';
$parameter='';





$action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);
   
if(isset($action)){

    include "models/Connection.php";
    $obj1=new Helperland();

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
      
    $fname =test_input($_POST['fname']);
    $lname =test_input($_POST['lname']) ;
    $subject =test_input($_POST['subject']);
    $mobile = test_input($_POST['mobile']);
    $email = test_input($_POST['email']);
    $name = $fname. " ".$lname;
    $message =test_input($_POST['message']);


   


    switch($action) {
        case 'insert':       
    
            if ($name && $mobile && $email && $message && $subject) {
             
                $obj1-> insert_contact($name, $mobile, $email,$message,$subject);
              
            } else {
                $error_message = 'Invalid city data. Check all fields and resubmit.';
                
                echo $error_message;
            }
            break;
        }
    
}


if(isset($_GET['controller']) && $_GET['controller'] !=''){
    $controller= $_GET['controller'];
}

if(isset($_GET['function']) && $_GET['function'] !=''){
    $function= $_GET['function'];
}

if(isset($_GET['parameter']) && $_GET['parameter'] !=''){
    $parameter= $_GET['parameter'];
}
if(file_exists('Controller/'.$controller.'Controller.php')){
    include('Controller/'.$controller.'Controller.php');
    $class = $controller.'Controller';
    $obj = new $class();

    if(method_exists($class,$function)){
        if($parameter){
      
            $obj->$function($parameter);
          }else{
           $obj->$function();
          }
    }else{
        echo '<h1>Function not found</h1>';
    }
}else{
    echo '<h1>Controller Not Found</h1>';
}


       




?>