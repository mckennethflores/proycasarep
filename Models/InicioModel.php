<?php

    class InicioModel extends Mysql{

     
        public function __construct(){
        //    echo "Mensaje desde el modelo Inicio";
            parent::__construct();

        }
        public function getCarrito($params){
            return "Datos del carrito Nro: " . $params;
            
        }

    }
?>