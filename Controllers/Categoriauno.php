<?php
class Categoriauno extends Controllers{
    public function __construct(){

		session_start();
		
		if(empty($_SESSION['login']))
		{
			header('Location: '.base_url().'/login');
		}
		parent::__construct();
		getPermisos(6);
    }

    public function Categoriauno(){
       
       $data['page_id'] = 6;
       $data['page_tag'] = "Modulo Categorias";
       $data['page_name'] = "categoriauno";
       $data['page_title'] = "Modulo Categorias";
	   $data['page_functions_js'] = "functions_categoriauno.js";
      
       $this->views->getView($this,"categoriauno",$data);
    }

    public function getCategoriaunos()
		{
			$arrData = $this->model->selectCategoriaunos();

			for ($i=0; $i < count($arrData); $i++) {

				if($arrData[$i]['status'] == 1)
				{
					$arrData[$i]['status'] = '<span class="badge badge-success">Activo</span>';
				}else{
					$arrData[$i]['status'] = '<span class="badge badge-danger">Inactivo</span>';
				}

				$arrData[$i]['options'] = '<div class="text-center">
				<button class="btn btn-primary btn-sm btnEditCategoriauno" onClick="fntEditCategoriauno('.$arrData[$i]['idcategoriauno'].')" title="Editar"><i class="fas fa-pencil-alt"></i></button>
				<button class="btn btn-danger btn-sm btnDelCategoriauno" onClick="fntDelCategoriauno('.$arrData[$i]['idcategoriauno'].')" title="Eliminar"><i class="far fa-trash-alt"></i></button>
				</div>';
			}
			echo json_encode($arrData,JSON_UNESCAPED_UNICODE);
			die();
		}

		public function getSelectCategoriaunos()
		{
			$htmlOptions = "";
			$arrData = $this->model->selectCategoriaunos();
			if(count($arrData) > 0 ){
				for ($i=0; $i < count($arrData); $i++) { 
					if($arrData[$i]['status'] == 1 ){
					$htmlOptions .= '<option value="'.$arrData[$i]['idcategoriauno'].'">'.$arrData[$i]['nombre'].'</option>';
					}
				}
			}
			echo $htmlOptions;
			die();		
		}




		public function getCategoriauno(int $idcategoriauno)
		{
			$intIdcategoriauno = intval(strClean($idcategoriauno));
			if($intIdcategoriauno > 0)
			{
				$arrData = $this->model->selectCategoriauno($intIdcategoriauno);
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

		public function setCategoriauno(){
		
			$intIdcategoriauno = intval($_POST['idcategoriauno']);
			$strNombre =  strClean($_POST['txtNombre']);
			$intStatus = intval($_POST['listStatus']);

			if($intIdcategoriauno == 0){
				//crear Categoriauno
				$request_categoriauno = $this->model->insertCategoriauno($strNombre, $intStatus);
				$opion = 1;
			}else{
				//actualizar Categoriauno
				$request_categoriauno = $this->model->updateCategoriauno($intIdcategoriauno, $strNombre, $intStatus);
				$opion = 2;
			}
			
			if($request_categoriauno > 0){

				if($opion == 1){
					$arrResponse = array('status' => true, 'msg' => 'Datos guardados correctamente.');
				}else{
					$arrResponse = array('status' => true, 'msg' => 'Datos actualizados correctamente.');
				}
				
			}else if($request_categoriauno == 'exist'){
				
				$arrResponse = array('status' => false, 'msg' => '¡Atención! La categoría ya existe.');
			}else{
				$arrResponse = array("status" => false, "msg" => 'No es posible almacenar los datos.');
			}
			echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
			die();
		
		}

		public function delCategoriauno()
		{
			if($_POST){
				$intIdcategoriauno = intval($_POST['idcategoriauno']);
				$requestDelete = $this->model->deleteCategoriauno($intIdcategoriauno);
			
				if($requestDelete == 'ok')
				{
					$arrResponse = array('status' => true, 'msg' => 'Se ha eliminado la categoría');
				}else if($requestDelete == 'exist'){
					$arrResponse = array('status' => false, 'msg' => 'No es posible eliminar una categoria, asociado a productos.');
				}else{
					$arrResponse = array('status' => false, 'msg' => 'Error al eliminar la categoría.');
				}
				echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
			}
			die();
		}

		
	}

?>