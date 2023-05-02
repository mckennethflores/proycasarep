<?php
class Clientes extends Controllers{
    public function __construct(){

		session_start();
		
		if(empty($_SESSION['login']))
		{
			header('Location: '.base_url().'/login');
		}
		parent::__construct();
		getPermisos(3);
    }

    public function Clientes(){
       
       $data['page_id'] = 6;
       $data['page_tag'] = "Clientes";
       $data['page_name'] = "Clientes";
       $data['page_title'] = NOMBRE_EMPRESA." Clientes";
	   $data['page_functions_js'] = "functions_clientes.js";
      
       $this->views->getView($this,"clientes",$data);
    }

		public function setCategoriados(){


			if($_POST){
				/* dep($_POST);
				return; */
				

				if(empty($_POST['txtNombre']) || empty($_POST['listCategoriaunoid']))
				{
					$arrResponse = array("status" => false, "msg" => 'Datos incorrectos.');
				}else{

					$intIdcategoriados = intval($_POST['idcategoriados']);
					$strNombre =  		strClean($_POST['txtNombre']);
					$intCategoriaunoid = intval(strClean($_POST['listCategoriaunoid']));
					$intStatus = intval($_POST['listStatus']);

					if($intIdcategoriados == 0){
						//crear Categoriauno
						$opion = 1;
						$request_categoriados = $this->model->insertCategoriados($strNombre, $intCategoriaunoid, $intStatus);
					}else{
						//actualizar Categoriauno
						$opion = 2;
						$request_categoriados = $this->model->updateCategoriados($intIdcategoriados, $strNombre, $intCategoriaunoid, $intStatus);
					}
					
					if($request_categoriados > 0){

						if($opion == 1){
							$arrResponse = array('status' => true, 'msg' => 'Datos guardados correctamente.');
						}else{
							$arrResponse = array('status' => true, 'msg' => 'Datos actualizados correctamente.');
						}
						
					}else if($request_categoriados == 'exist'){
						
						$arrResponse = array('status' => false, 'msg' => '¡Atención! La subcategoría ya existe.');
					}else{
						$arrResponse = array("status" => false, "msg" => 'No es posible almacenar los datos.');
					}

				}
				echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
			}
			die();	
		
		}

		public function getCategoriados()
		{
			$arrData = $this->model->selectCategoriados();

			for ($i=0; $i < count($arrData); $i++) {

				if($arrData[$i]['status'] == 1)
				{
					$arrData[$i]['status'] = '<span class="badge badge-success">Activo</span>';
				}else{
					$arrData[$i]['status'] = '<span class="badge badge-danger">Inactivo</span>';
				}

				$arrData[$i]['options'] = '<div class="text-center">
				<button class="btn btn-primary btn-sm btnEditCategoriados" onClick="fntEditCategoriados('.$arrData[$i]['idcategoriados'].')" title="Editar"><i class="fas fa-pencil-alt"></i></button>
				<button class="btn btn-danger btn-sm btnDelCategoriados" onClick="fntDelCategoriados('.$arrData[$i]['idcategoriados'].')" title="Eliminar"><i class="far fa-trash-alt"></i></button>
				</div>';
			}
			echo json_encode($arrData,JSON_UNESCAPED_UNICODE);
			die();
		}


		public function getCategoriados_singular(int $idcategoriados)
		{
			$intIdcategoriados = intval(strClean($idcategoriados));
			if($intIdcategoriados > 0)
			{
				$arrData = $this->model->selectCategoriados_singular($intIdcategoriados);
				if(empty($arrData))
				{
					$arrResponse = array('status' => false, 'msg' => 'Datos no encontrados.');
				}else{
					$arrResponse = array('status' => true, 'data' => $arrData);
				}
				echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
			}
			die();
		}

		public function delCategoriados()
		{
			if($_POST){
				$intIdcategoriados = intval($_POST['idcategoriados']);
				$requestDelete = $this->model->deleteCategoriados($intIdcategoriados);
			
				if($requestDelete == 'ok')
				{
					$arrResponse = array('status' => true, 'msg' => 'Se ha eliminado la subcategoría');
				}else if($requestDelete == 'exist'){
					$arrResponse = array('status' => false, 'msg' => 'No es posible eliminar una subcategoria, asociado a categoriastres.');
				}else{
					$arrResponse = array('status' => false, 'msg' => 'Error al eliminar la categoría.');
				}
				echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
			}
			die();
		}

		


		public function getSelectCategoriados()
		{
			$htmlOptions = "";
			$arrData = $this->model->selectCategoriados();
			if(count($arrData) > 0 ){
				for ($i=0; $i < count($arrData); $i++) { 
					if($arrData[$i]['status'] == 1 ){
					$htmlOptions .= '<option value="'.$arrData[$i]['idcategoriados'].'">'.$arrData[$i]['nombre'].'</option>';
					}
				}
			}
			echo $htmlOptions;
			die();
		}

	}

?>