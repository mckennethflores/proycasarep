<?php 

	class CategoriaunoModel extends Mysql
	{
		public $intIdcategoriauno;
		public $strNombre;
		public $intStatus;

		public function __construct()
		{
			parent::__construct();
		}

		public function selectCategoriaunos()
		{
			$sql = "SELECT * FROM me_categoriauno WHERE status != 0";
			$request = $this->select_all($sql);
			return $request;
		}
		public function selectCategoriauno(int $idcategoriauno)
		{
			//BUSCAR Categoriauno
			$this->intIdcategoriauno = $idcategoriauno;
			$sql = "SELECT * FROM me_categoriauno WHERE idcategoriauno  = $this->intIdcategoriauno";
			$request = $this->select($sql);
			return $request;
		}

		public function insertCategoriauno(string $nombre, int $status){

			$return = "";
			$this->strNombre = $nombre;
			$this->intStatus = $status;

			$sql = "SELECT * FROM me_categoriauno WHERE nombre = '{$this->strNombre}' ";
			$request = $this->select_all($sql);

			if(empty($request))
			{
				$query_insert  = "INSERT INTO me_categoriauno(nombre,status) VALUES(?,?)";
	        	$arrData = array($this->strNombre, $this->intStatus);
	        	$request_insert = $this->insert($query_insert,$arrData);
	        	$return = $request_insert;
			}else{
				$return = "exist";
			}
			return $return;
		}

		public function updateCategoriauno(int $idcategoriauno , string $nombre, int $status){
			$this->intIdcategoriauno = $idcategoriauno;
			$this->strNombre = $nombre;
			$this->intStatus = $status;

			$sql = "SELECT * FROM me_categoriauno WHERE nombre = '$this->strNombre' AND idcategoriauno != $this->intIdcategoriauno";
			$request = $this->select_all($sql);

			if(empty($request))
			{
				$sql = "UPDATE me_categoriauno SET nombre = ?, status = ? WHERE idcategoriauno = $this->intIdcategoriauno ";
				$arrData = array($this->strNombre, $this->intStatus);
				$request = $this->update($sql,$arrData);
			}else{
				$request = "exist";
			}
		    return $request;			
		}

		public function deleteCategoriauno(int $idcategoriauno)
		{
			$this->intIdcategoriauno = $idcategoriauno;
			$sql = "SELECT * FROM me_categoriados WHERE categoriaunoid = $this->intIdcategoriauno";
			$request = $this->select_all($sql);
			if(empty($request))
			{
				$sql = "UPDATE me_categoriauno SET status = ? WHERE idcategoriauno = $this->intIdcategoriauno ";
				$arrData = array(0);
				$request = $this->update($sql,$arrData);
				if($request)
				{
					$request = 'ok';	
				}else{
					$request = 'error';
				}
			}else{
				$request = 'exist';
			}
			return $request;
		}
	}
 ?>