<?php
class HelperlandController
{
    function __construct()
    {
        include('models/Connection.php');
        $this->model = new Helperland();
        // session_start();
        // $_SESSION['error'] = '';
    }
    public function HomePage()
    {
        include("./views/Homepage.php");
    }
   
    
}