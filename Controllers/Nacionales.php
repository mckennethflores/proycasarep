<?php 
require_once("Models/TCategoriauno.php");
require_once("Models/TProducto.php");

	class Nacionales extends Controllers{
		public function __construct()
		{
			session_start();
			/* getPermisos(MODPAGINAS); */
			parent::__construct();
		}

		use TCategoriauno,TCategoriaDos,TCategoriaTres,TProducto;

		public function nacionales()
		{
			/* $pageContent = getPageRout('nacionales');
			if(empty($pageContent)){
				header("Location: ".base_url());
			}else{ */
				$data['page_tag'] = NOMBRE_EMPRESA;
				$data['paquetes-nacionales'] = $this->getProductosCategoriaInicio(1);

				$data['page_title'] = NOMBRE_EMPRESA." - ". $data['paquetes-nacionales'][0]['nombrecategoriatres'];
				$data['page_name'] = "Nacionales";
				$data['menu_active'] = "nacionales_active";
				$data['page_functions_js'] = "functions_nacionales.js";
				$this->views->getView($this,"nacionales",$data);  
			/* } */
		}

	}
 ?>
