<?php
class Contacto extends Controllers{
    public function __construct(){
        parent::__construct();
    }

    public function contacto(){

       $data['page_tag'] = "Contacto";
       $data['page_title'] = "Contacto | ".NOMBRE_EMPRESA;
       $data['page_name'] = "contacto";
       $data['menu_active'] = "contacto_active";
		$data['page_functions_js'] = "functions_contacto.js";
       $this->views->getView($this,"contacto",$data);
    }

}
?>