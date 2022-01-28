<?php
class HelperlandController
{
    function __construct()
    {
        include('models/Connection.php');
        $this->model = new Helperland();
     
    }
    public function HomePage()
    {
        include("./views/Homepage.php");
    }
   
    
}
