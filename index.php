 <?php

$controller='Helperland';
$function='Homepage';
$Parameter='';

if(isset($_GET['controller']) && $_GET['controller'] !=''){
    $controller= $_GET['controller'];
}

if(isset($_GET['function']) && $_GET['function'] !=''){
    $function= $_GET['function'];
}

if(isset($_GET['Parameter']) && $_GET['Parameter'] !=''){
    $parameter= $_GET['Parameter'];
}
if(file_exists('Controller/'.$controller.'Controller.php')){
    include('Controller/'.$controller.'Controller.php');
    $class = $controller.'Controller';
    $obj = new $class();

    if(method_exists($class,$function)){
        if($Parameter){
        
            $obj->$function($Parameter);
           
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