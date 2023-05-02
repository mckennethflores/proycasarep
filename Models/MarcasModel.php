<?php 

	class MarcasModel extends Mysql
	{
		public $intIdmarca;
		public $strNombre;
		public $intStatus;

		public function __construct()
		{
			parent::__construct();
		}

		public function selectMarcas()
		{
			$sql = "SELECT * FROM me_marcas WHERE status != 0";
			$request = $this->select_all($sql);
			return $request;
		}

	
	}
 ?>