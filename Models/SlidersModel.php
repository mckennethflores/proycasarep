<?php 

	class SlidersModel extends Mysql
	{
		private $intIdSlider;
		private $strNombre;
		private $strTitulo;
		private $strImagen;
		private $strBoton;
		private $intStatus;

		

		public function __construct()
		{
			parent::__construct();
		}

		public function selectSliders(){
			$sql = "SELECT idslider, nombre, titulo, imagen, boton, status FROM slider WHERE status <> 0;";
					
					$request = $this->select_all($sql);
			return $request;
		}	

		public function insertProducto(
			string $nombre,
			string $titulo,
			string $imagen,
			string $boton,
			int $status
			){
			$this->strNombre = $nombre;
			$this->strTitulo = $titulo;
			$this->strImagen = $imagen;
			$this->strBoton = $boton;
			$this->intStatus = $status;
			$return = 0;
 
		 
				$query_insert  = "INSERT INTO slider(nombre,
														titulo,
														imagen,
														boton,
														status) 
								  VALUES(?,?,?,?,?)";

								  //echo $query_insert; return;
	        	$arrData = array($this->strNombre,
        						$this->strTitulo,
        						$this->strImagen,
        						$this->strBoton,
        						$this->intStatus);
	        	$request_insert = $this->insert($query_insert,$arrData);
	        	$return = $request_insert;
	 
	        return $return;
		}

		public function updateProducto(int $idslider, string $nombre,
		string $titulo,
		string $imagen,
		string $boton,
		int $status){
			$this->intIdSlider = $idslider;
			$this->strNombre = $nombre;
			$this->strTitulo = $titulo;
			$this->strImagen = $imagen;
			$this->strBoton = $boton;
			$this->intStatus = $status;
			
			$return = 0;
			 
				$sql= "";
				$sql .= "UPDATE slider 
						SET 
						nombre=?,
						titulo=?,
						imagen=?,
						boton=?,";
	
				
						
				$sql .= "
						status=? 
						WHERE idslider = $this->intIdSlider ";
				$arrData = array(	$this->strNombre,
									$this->strTitulo,
									$this->strImagen,
									$this->strBoton,
									$this->intStatus);

	        	$request = $this->update($sql,$arrData);
	        	$return = $request;
 
	        return $return;
		}

		public function selectSlider(int $idslider){
			$this->intIdSlider = $idslider;
			$sql = "SELECT idslider, nombre, titulo, imagen, boton, status FROM slider WHERE idslider = $this->intIdSlider";
			$request = $this->select($sql);
			return $request;

		}

		/* public function insertImage(int $idslider, string $imagen){
			$this->intIdSlider = $idslider;
			$this->strImagen = $imagen;
			$query_insert  = "INSERT INTO slider(nombre,titulo,imagen,boton) VALUES(?,?,?,?)";
	        $arrData = array(
        					$this->strImagen,$this->strImagen,$this->strImagen,$this->intIdSlider);
	        $request_insert = $this->insert($query_insert,$arrData);
	        return $request_insert;
		} */

	/* 	public function selectImages(int $idslider){
			$this->intIdSlider = $idslider;
			$sql = "SELECT productoid,nombre as img,titulogaleria
					FROM me_galeria
					WHERE productoid = $this->intIdSlider";
			$request = $this->select_all($sql);
			return $request;
		}

		public function deleteImage(int $idproducto, string $imagen){
			$this->intIdProducto = $idproducto;
			$this->strImagen = $imagen;
			$query  = "DELETE FROM me_galeria 
						WHERE productoid = $this->intIdProducto 
						AND nombre = '{$this->strImagen}'";
	        $request_delete = $this->delete($query);
	        return $request_delete;
		}

		 */

		public function deleteSlider(int $idslider){
			$this->intIdSlider = $idslider;
			$sql = "UPDATE slider SET status = ? WHERE idslider = $this->intIdSlider ";
			$arrData = array(0);
			$request = $this->update($sql,$arrData);
			return $request;
		}
	}
 ?>