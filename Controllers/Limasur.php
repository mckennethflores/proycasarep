<?php 
require_once("Models/TCategoriauno.php");
require_once("Models/TProducto.php");

	class Limasur extends Controllers{
		public function __construct()
		{
			session_start();
			/* getPermisos(MODPAGINAS); */
			parent::__construct();
		}

		use TCategoriauno,TCategoriaDos,TCategoriaTres,TProducto;

		public function limasur()
		{
			/* $pageContent = getPageRout('nacionales');
			if(empty($pageContent)){
				header("Location: ".base_url());
			}else{ */
				$data['page_tag'] = NOMBRE_EMPRESA;
				$data['lima-sur'] = $this->getProductosCategoriaInicio(2);

				$data['page_title'] = NOMBRE_EMPRESA." - ". $data['lima-sur'][0]['nombrecategoriatres'];
				$data['page_name'] = "Lima Sur";
				$data['menu_active'] = "limasur_active";
				$data['page_functions_js'] = "functions_limasur.js";
				$this->views->getView($this,"limasur",$data);
			/* } */
		}

	}
 ?>
