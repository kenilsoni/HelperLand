<?php
class AdminController
{
    function __construct()
    {
        include('models/Connection.php');
        $this->model = new Helperland();
    }
public function admin_management()
    {
        include("./views/Admin_management.php");
    }
    public function getservice_data()
    {
       $this->model->getadmin_service_data();
    }
}