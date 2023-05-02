<?php 

	class DetalleModel extends Mysql
	{
		public $intIdcategoriados;
		public $strNombre;
		public $intCategoriaunoid;
		public $intStatus;

		public function __construct()
		{
			parent::__construct();
		}

		public function selectCategoriados()
		{
			$sql = "SELECT cd.idcategoriados, cd.nombre as nombrecategoriados, cd.categoriaunoid, cd.status, cu.idcategoriauno, cu.nombre as nombrecategoriauno FROM me_categoriados cd
			INNER JOIN me_categoriauno cu ON cd.categoriaunoid = cu.idcategoriauno
			 WHERE cd.status != 0";
			$request = $this->select_all($sql);
			return $request;
		}

		public function selectCategoriados_singular(int $idcategoriados)
		{
			//BUSCAR Categoriados
			$this->intIdcategoriados = $idcategoriados;
			$sql = "SELECT cd.idcategoriados, cd.nombre as nombrecategoriados, cd.categoriaunoid, cd.status, cu.idcategoriauno, cu.nombre as nombrecategoriauno FROM me_categoriados cd
			INNER JOIN me_categoriauno cu ON cd.categoriaunoid = cu.idcategoriauno WHERE cd.idcategoriados  = $this->intIdcategoriados";
			$request = $this->select($sql);
			return $request;
		}

		public function insertCategoriados(string $nombre, int $categoriaunoid,  int $status){

			$return = "";
			$this->strNombre = $nombre;
			$this->intCategoriaunoid = $categoriaunoid;
			$this->intStatus = $status;

			$sql = "SELECT * FROM me_categoriados WHERE nombre = '{$this->strNombre}' ";
			$request = $this->select_all($sql);

			if(empty($request))
			{
				$query_insert  = "INSERT INTO me_categoriados(nombre,categoriaunoid,status) VALUES(?,?,?)";
	        	$arrData = array($this->strNombre, $this->intCategoriaunoid, $this->intStatus);
	        	$request_insert = $this->insert($query_insert,$arrData);
	        	$return = $request_insert;
			}else{
				$return = "exist";
			}
			return $return;
		}

		public function updateCategoriados(int $idcategoriados , string $categoriaunoid, string $nombre, int $status){
			$this->intIdcategoriados = $idcategoriados;
			$this->strNombre = $nombre;
			$this->intCategoriaunoid = $categoriaunoid;
			$this->intStatus = $status;

			$sql = "SELECT * FROM me_categoriados WHERE nombre = '$this->strNombre' AND idcategoriados != $this->intIdcategoriados";
			$request = $this->select_all($sql);

			if(empty($request))
			{
				$sql = "UPDATE me_categoriados SET nombre = ?, categoriaunoid = ?, status = ? WHERE idcategoriados = $this->intIdcategoriados ";
				$arrData = array($this->strNombre, $this->intCategoriaunoid, $this->intStatus);
				$request = $this->update($sql,$arrData);
			}else{
				$request = "exist";
			}
		    return $request;			
		}

		public function deleteCategoriados(int $idcategoriados)
		{
			$this->intIdcategoriados = $idcategoriados;
			$sql = "SELECT * FROM me_categoriatres WHERE categoriadosid = $this->intIdcategoriados";
			$request = $this->select_all($sql);
			if(empty($request))
			{
				$sql = "UPDATE me_categoriados SET status = ? WHERE idcategoriados = $this->intIdcategoriados ";
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