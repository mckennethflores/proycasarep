

<?php 
	class Nosotros extends Controllers{
		public function __construct()
		{
			session_start();
			/* getPermisos(MODPAGINAS); */
			parent::__construct();
		}

		public function nosotros()
		{
			$pageContent = getPageRout('nosotros');
			if(empty($pageContent)){
				header("Location: ".base_url());
			}else{
				$data['page_tag'] = NOMBRE_EMPRESA;
				$data['page_title'] = NOMBRE_EMPRESA." - ".$pageContent['titulo'];
				$data['page_name'] = $pageContent['titulo'];
				$data['page'] = $pageContent;
				$data['menu_active'] = "nosotros_active";
				$data['page_functions_js'] = "functions_nosotros.js";
				$this->views->getView($this,"nosotros",$data);  
			}

		}

	}
 ?>
