<?php 

	class CaracteristicasModel extends Mysql
	{
		public $intIddetcaracteristicas;
		public $strNombre;
		public $strValorCapacidad;
		public $intProductoId;
		public $intStatus;

		public function __construct()
		{
			parent::__construct();
		}

		public function selectCaracteristicas()
		{
			$sql = "SELECT * FROM me_det_caracteristicas WHERE status != 0";
			$request = $this->select_all($sql);
			return $request;
		}

	
	}
 ?>