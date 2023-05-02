<?php

require_once("Models/TCategoriauno.php");
require_once("Models/TProducto.php");

class Sliders extends Controllers{
		public function __construct()
		{
			session_start();

			if(empty($_SESSION['login']))
			{
				header('Location: '.base_url().'/login');
				die();
			}
			parent::__construct();
			getPermisos(MPRODUCTOS);
		}
		use TCategoriauno,TCategoriaDos,TCategoriaTres,TProducto;

		public function Sliders()
		{
			$data['page_tag'] = "Sliders";
			$data['page_title'] = "Sliders <small>Tienda Virtual</small>";
			$data['page_name'] = "sliders";
			
			$data['page_functions_js'] = "functions_sliders.js";

			$data['imagenes'] = $this->selectSliders();

			$this->views->getView($this,"sliders",$data);
		}

		public function getSliders()
		{
			if($_SESSION['permisosMod']['r']){
				$arrData = $this->model->selectSliders();
				for ($i=0; $i < count($arrData); $i++) {
					$btnView = '';
					$btnEdit = '';
					$btnDelete = '';

					if($arrData[$i]['status'] == 1)
					{
						$arrData[$i]['status'] = '<span class="badge badge-success">Activo</span>';
					}else{
						$arrData[$i]['status'] = '<span class="badge badge-danger">Inactivo</span>';
					}

					
					if($_SESSION['permisosMod']['r']){
						$btnView = '<button class="btn btn-info btn-sm" onClick="fntViewInfo('.$arrData[$i]['idslider'].')" title="Ver producto"><i class="far fa-eye"></i></button>';
					}
					if($_SESSION['permisosMod']['u']){
						$btnEdit = '<button class="btn btn-primary  btn-sm" onClick="fntEditInfo(this,'.$arrData[$i]['idslider'].')" title="Editar producto"><i class="fas fa-pencil-alt"></i></button>';
					}
					if($_SESSION['permisosMod']['d']){	
						$btnDelete = '<button class="btn btn-danger btn-sm" onClick="fntDelInfo('.$arrData[$i]['idslider'].')" title="Eliminar producto"><i class="far fa-trash-alt"></i></button>';
					}
					$arrData[$i]['options'] = '<div class="text-center">'.$btnView.' '.$btnEdit.' '.$btnDelete.'</div>';
				}
				echo json_encode($arrData,JSON_UNESCAPED_UNICODE);
			}
			die();
		}

		public function setSlider(){

		/* 	dep($_POST);
			return; */
			if($_POST){
				if(empty($_POST['txtNombre']) || empty($_POST['listStatus']) )
				{
					$arrResponse = array("status" => false, "msg" => 'Datos incorrectos.');
				}else{
					
					$idSlider = intval($_POST['idSlider']);
					$strNombre = strClean($_POST['txtNombre']);
					$strTitulo = strClean($_POST['txtTitulo']);
					$strImagen = strClean($_POST['txtImagen']);
					$strBoton = strClean($_POST['txtBoton']);
					$intStatus = intval($_POST['listStatus']);

					$request_producto = "";

					$ruta = strtolower(clear_cadena($strNombre));
					$ruta = str_replace(" ","-",$ruta);

					if($idSlider == 0)
					{
						$option = 1;
						if($_SESSION['permisosMod']['w']){
							$request_producto = $this->model->insertProducto($strNombre,
																		$strTitulo,
																		$strImagen,
																		$strBoton,
																		$intStatus);

																	//	echo $request_producto; return;

						}
					}else{
						$option = 2;
						if($_SESSION['permisosMod']['u']){
							$request_producto = $this->model->updateProducto($idSlider,
																		$strNombre,
																		$strTitulo,
																		$strImagen,
																		$strBoton,
																		$intStatus);
						}
					}
					if($request_producto > 0 )
					{
						if($option == 1){
							$arrResponse = array('status' => true, 'idslider' => $request_producto, 'msg' => 'Datos guardados correctamente.');
						}else{
							$arrResponse = array('status' => true, 'idslider' => $idSlider, 'msg' => 'Datos Actualizados correctamente.');
						}
					}else{
						$arrResponse = array("status" => false, "msg" => 'No es posible almacenar los datos.');
					}
				}
				echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
			}
			die();
		}

		public function getSlider($idslider){
			if($_SESSION['permisosMod']['r']){
				$idslider = intval($idslider);
				if($idslider > 0){
					$arrData = $this->model->selectSlider($idslider);
					if(empty($arrData)){
						$arrResponse = array('status' => false, 'msg' => 'Datos no encontrados.');
					}else{
						 
						 
						$arrResponse = array('status' => true, 'data' => $arrData);
					}
					echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
				}
			}
			die();
		}

		/* public function setImage(){

			if($_POST){
				
				if(empty($_POST['idproducto'])){
					$arrResponse = array('status' => false, 'msg' => 'Error de dato.');
				}else{
					$idProducto = intval($_POST['idproducto']);
					$foto      = $_FILES['foto'];
					$imgNombre = 'pro_'.md5(date('d-m-Y H:i:s')).'.jpg';
					$request_image = $this->model->insertImage($idProducto,$imgNombre);
					if($request_image){
						$uploadImage = uploadImage($foto,$imgNombre);
						$arrResponse = array('status' => true, 'imgname' => $imgNombre, 'msg' => 'Archivo cargado.');
					}else{
						$arrResponse = array('status' => false, 'msg' => 'Error de carga.');
					}
				}
				echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
			}
			die();
		}

		public function delFile(){
			if($_POST){
				if(empty($_POST['idproducto']) || empty($_POST['file'])){
					$arrResponse = array("status" => false, "msg" => 'Datos incorrectos.');
				}else{
					//Eliminar de la DB
					$idProducto = intval($_POST['idproducto']);
					$imgNombre  = strClean($_POST['file']);
					$request_image = $this->model->deleteImage($idProducto,$imgNombre);

					if($request_image){
						$deleteFile =  deleteFile($imgNombre);
						$arrResponse = array('status' => true, 'msg' => 'Archivo eliminado');
					}else{
						$arrResponse = array('status' => false, 'msg' => 'Error al eliminar');
					}
				}
				echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
			}
			die();
		} */

		public function delSlider(){
			if($_POST){
				if($_SESSION['permisosMod']['d']){
					$intIdslider = intval($_POST['idSlider']);
					$requestDelete = $this->model->deleteSlider($intIdslider);
					if($requestDelete)
					{
						$arrResponse = array('status' => true, 'msg' => 'Se ha eliminado el item');
					}else{
						$arrResponse = array('status' => false, 'msg' => 'Error al eliminar el item.');
					}
					echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
				}
			}
			die();
		}
	}

 ?>