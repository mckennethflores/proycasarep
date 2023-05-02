<?php
class Perfil extends Controllers{
    public function __construct(){
        parent::__construct();
    }

    public function perfil(){
       // echo "mensaje desde el controlador";
       $data['page_tag'] = "Perfil";
       $data['page_title'] = NOMBRE_EMPESA." Mi Perfil";
       $data['page_name'] = "perfil";

       $this->views->getView($this,"perfil",$data);
    }

}
?>