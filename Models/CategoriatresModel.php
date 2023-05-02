<?php 

	class CategoriatresModel extends Mysql
	{
		public $intIdcategoriatres;
		public $strNombre;
		public $intCategoriadosid;
		public $intStatus;

		public function __construct()
		{
			parent::__construct();
		}

		public function selectCategoriatres()
		{
			$sql = "SELECT ct.idcategoriatres, ct.nombre as nombrecategoriatres, ct.categoriadosid, ct.status, cd.idcategoriados, cd.nombre as nombrecategoriados FROM me_categoriatres ct
			INNER JOIN me_categoriados cd ON ct.categoriadosid = cd.idcategoriados
			 WHERE ct.status != 0";
			$request = $this->select_all($sql);
			return $request;
		}

		public function selectCategoriatres_singular(int $idcategoriatres)
		{
			//BUSCAR Categoriados
			$this->intIdcategoriatres = $idcategoriatres;
			$sql = "SELECT ct.idcategoriatres, ct.nombre as nombrecategoriatres, ct.categoriadosid, ct.status, cd.idcategoriados, cd.nombre as nombrecategoriados FROM me_categoriatres ct
			INNER JOIN me_categoriados cd ON ct.categoriadosid = cd.idcategoriados WHERE ct.idcategoriatres  = $this->intIdcategoriatres";
			$request = $this->select($sql);
			return $request;
		}

		public function insertCategoriatres(string $nombre, int $categoriadosid,  int $status){

			$return = "";
			$this->strNombre = $nombre;
			$this->intCategoriadosid = $categoriadosid;
			$this->intStatus = $status;

			$sql = "SELECT * FROM me_categoriatres WHERE nombre = '{$this->strNombre}' ";
			$request = $this->select_all($sql);

			if(empty($request))
			{
				$query_insert  = "INSERT INTO me_categoriatres(nombre,categoriadosid,status) VALUES(?,?,?)";
	        	$arrData = array($this->strNombre, $this->intCategoriadosid, $this->intStatus);
	        	$request_insert = $this->insert($query_insert,$arrData);
	        	$return = $request_insert;
			}else{
				$return = "exist";
			}
			return $return;
		}

		public function updateCategoriatres(int $idcategoriatres , string $nombre , string $categoriadosid, int $status){
			$this->intIdcategoriatres = $idcategoriatres;
			$this->strNombre = $nombre;
			$this->intCategoriadosid = $categoriadosid;
			$this->intStatus = $status;

			$sql = "SELECT * FROM me_categoriatres WHERE nombre = '$this->strNombre' AND idcategoriatres != $this->intIdcategoriatres";
			$request = $this->select_all($sql);

			if(empty($request))
			{
				$sql = "UPDATE me_categoriatres SET nombre = ?, categoriadosid = ?, status = ? WHERE idcategoriatres = $this->intIdcategoriatres ";
				$arrData = array($this->strNombre, $this->intCategoriadosid, $this->intStatus);
				$request = $this->update($sql,$arrData);
			}else{
				$request = "exist";
			}
		    return $request;			
		}

		public function deleteCategoriatres(int $idcategoriatres)
		{
			$this->intIdcategoriatres = $idcategoriatres;
	 
			if(!empty($idcategoriatres))
			{
				$sql = "UPDATE me_categoriatres SET status = ? WHERE idcategoriatres = $this->intIdcategoriatres ";
				$arrData = array(0);
				$request = $this->update($sql,$arrData);
				if($request)
				{
					$request = 'ok';	
				}else{
					$request = 'error';
				}
			}
			 
			return $request;
		}
	}
 ?>