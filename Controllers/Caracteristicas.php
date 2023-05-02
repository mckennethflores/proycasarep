<?php
class Caracteristicas extends Controllers{
    public function __construct(){

		session_start();
		
		if(empty($_SESSION['login']))
		{
			header('Location: '.base_url().'/login');
		}
		
		parent::__construct();
		getPermisos(8);
    }

    public function Caracteristicas(){
       
       $data['page_id'] = 6;
       $data['page_tag'] = "Caracteristicas";
       $data['page_name'] = "caracteristicas";
       $data['page_title'] = "Caracteristicas";
	   $data['page_functions_js'] = "functions_marcas.js";
      
       $this->views->getView($this,"caracteristicas",$data);
    }

/* 		public function setCategoriatres(){

			if($_POST){
			

				if(empty($_POST['txtNombre']) || empty($_POST['listCategoriadosid']))
				{
					$arrResponse = array("status" => false, "msg" => 'Datos incorrectos.');
				}else{

					$intIdcategoriatres = intval($_POST['idcategoriatres']);
					$strNombre =  		strClean($_POST['txtNombre']);
					$intCategoriadosid = intval(strClean($_POST['listCategoriadosid']));
					$intStatus = intval($_POST['listStatus']);

					if($intIdcategoriatres == 0){
						//crear Categoriauno
						$opion = 1;
						$request_categoriatres = $this->model->insertCategoriatres($strNombre, $intCategoriadosid, $intStatus);
					}else{
						//actualizar Categoriauno
						$opion = 2;
						$request_categoriatres = $this->model->updateCategoriatres($intIdcategoriatres, $strNombre, $intCategoriadosid, $intStatus);
					}
					
					if($request_categoriatres > 0){

						if($opion == 1){
							$arrResponse = array('status' => true, 'msg' => 'Datos guardados correctamente.');
						}else{
						$arrResponse = array('status' => true, 'msg' => 'Datos actualizados correctamente.');
						}
						
					}else if($request_categoriatres == 'exist'){
						
						$arrResponse = array('status' => false, 'msg' => '¡Atención! La subcategoría ya existe.');
					}else{
						$arrResponse = array("status" => false, "msg" => 'No es posible almacenar los datos.');
					}

				}
				echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
			}
			die();	
		
		}

		public function getMarcas()
		{
			$arrData = $this->model->selectMarcas();

			for ($i=0; $i < count($arrData); $i++) {

				if($arrData[$i]['status'] == 1)
				{
					$arrData[$i]['status'] = '<span class="badge badge-success">Activo</span>';
				}else{
					$arrData[$i]['status'] = '<span class="badge badge-danger">Inactivo</span>';
				}

				$arrData[$i]['options'] = '<div class="text-center">
				<button class="btn btn-primary btn-sm btnEditCategoriados" onClick="fntEditCategoriatres('.$arrData[$i]['idcategoriatres'].')" title="Editar"><i class="fas fa-pencil-alt"></i></button>
				<button class="btn btn-danger btn-sm btnDelCategoriatres" onClick="fntDelCategoriatres('.$arrData[$i]['idcategoriatres'].')" title="Eliminar"><i class="far fa-trash-alt"></i></button>
				</div>';
			}
			echo json_encode($arrData,JSON_UNESCAPED_UNICODE);
			die();
		}


		public function getCategoriatres_singular(int $idcategoriatres)
		{
			$intIdcategoriatres = intval(strClean($idcategoriatres));
			if($intIdcategoriatres > 0)
			{
				$arrData = $this->model->selectCategoriatres_singular($intIdcategoriatres);
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

		public function delCategoriatres()
		{
			if($_POST){
				$intIdcategoriatres = intval($_POST['idcategoriatres']);
				$requestDelete = $this->model->deleteCategoriatres($intIdcategoriatres);
			
				if($requestDelete == 'ok')
				{
					$arrResponse = array('status' => true, 'msg' => 'Se ha eliminado la subcategoría');
				}else if($requestDelete == 'exist'){
					$arrResponse = array('status' => false, 'msg' => 'No es posible eliminar una subcategoria, asociado a categoria dos.');
				}else{
					$arrResponse = array('status' => false, 'msg' => 'Error al eliminar la categoría.');
				}
				echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
			}
			die();
		}

		
 */

		public function getSelectCaracteristicas()
		{
			$htmlOptions = "";
			$arrData = $this->model->selectCaracteristicas();
			if(count($arrData) > 0 ){
				for ($i=0; $i < count($arrData); $i++) { 
					if($arrData[$i]['status'] == 1 ){
					$htmlOptions .= '<option value="'.$arrData[$i]['iddetcaracteristicas'].'">'.$arrData[$i]['nombre'].' '.$arrData[$i]['valorcapacidad'].'</option>';
					}
				}
			}
			echo $htmlOptions;
			die();
		}

	}

?>