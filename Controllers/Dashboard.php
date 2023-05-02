<?php
class Dashboard extends Controllers{
    public function __construct(){

        session_start();
        //session_regenerate_id(true);
        if(empty($_SESSION['login']))
        {
            header('Location: '.base_url().'/login');
        }
        parent::__construct();
        getPermisos(1);
    }

    public function dashboard(){
       // echo "mensaje desde el controlador";
       $data['page_id'] = 2;
       $data['page_tag'] = "Dashboard Tienda Virtual";
       $data['page_title'] = "Dashboard Tienda Virtual";
       $data['page_name'] = "dashboard";
      
       $this->views->getView($this,"dashboard",$data);
    }

}
?>