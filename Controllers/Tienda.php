<?php
require_once("Models/TCategoriauno.php");
require_once("Models/TProducto.php");

class Tienda extends Controllers{

    public function __construct(){
        parent::__construct();
    }

    use TCategoriauno,TCategoriaDos,TCategoriaTres,TProducto;

    public function tienda(){

       $data['page_tag'] = "Inicio";
       $data['page_title'] = "Página Principal";
       $data['page_name'] = "tienda";

       $this->views->getView($this,"tienda",$data);
    }

    public function categoria($params){
        if(empty($params)){
            header("Location:".base_url());
        }else{
            $categoria = strClean($params);
        
                $data['page_tag'] = NOMBRE_EMPRESA." - ". $categoria;
				$data['page_title'] = $categoria;
				$data['page_name'] = "categoria";
				$data['productos'] = $this->getProductosCategoriaT($categoria);
                

				$this->views->getView($this,"categoria",$data);
        }
    }

    public function producto($params){
        if(empty($params)){
            header("Location:".base_url());
        }else{
               $producto = strClean($params);
              // dep($this->getProductoT($producto));
                $data['page_tag'] = NOMBRE_EMPRESA." - ". $producto;
				$data['page_title'] = $producto;
				$data['page_name'] = "producto";
				$data['producto'] = $this->getProductoT($producto);
                $data['menu_active'] = "producto_active";
                $data['page_functions_js'] = "functions_detalle_producto.js";

				$this->views->getView($this,"producto",$data);
        }
    }

}
?>