<?php 
require_once("Models/TCategoriauno.php");
require_once("Models/TProducto.php");

	class Limanorte extends Controllers{
		public function __construct()
		{
			session_start();
			/* getPermisos(MODPAGINAS); */
			parent::__construct();
		}

		use TCategoriauno,TCategoriaDos,TCategoriaTres,TProducto;

		public function limanorte()
		{
			/* $pageContent = getPageRout('nacionales');
			if(empty($pageContent)){
				header("Location: ".base_url());
			}else{ */
				$data['page_tag'] = NOMBRE_EMPRESA;
				$data['lima-norte'] = $this->getProductosCategoriaInicio(1);

				$data['page_title'] = NOMBRE_EMPRESA." - ". $data['lima-norte'][0]['nombrecategoriatres'];
				$data['page_name'] = "Lima Norte";
				$data['menu_active'] = "limanorte_active";
				$data['page_functions_js'] = "functions_limanorte.js";
				$this->views->getView($this,"limanorte",$data);
			/* } */
		}

	}
 ?>
