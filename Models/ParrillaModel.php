<?php 

	class ParrillaModel extends Mysql
	{
		private $intIdCategoria;
		private $intIdProducto;
		private $strNombre;
		private $strModelo;
		private $intCodigo;
		private $intCategoriaTresId;
		private $intMarcaId;
		private $strDescripcion;
		private $strDatosDscto;
		private $intCaracteristicaId;
		private $strImagen;
		private $intGaleriaId;
		private $strCodigoBarra;
		private $floatPrecioDolares;
		private $floatPrecioDolaresIgv;
		private $floatPrecioSoles;
		private $floatPrecioSolesIgv;
		private $strPorcentajeDscto;
		private $floatPrecioDescuento;
		private $intStock;
		private $strRuta;
		private $strResumen;
		private $intStatus;

		

		public function __construct()
		{
			parent::__construct();
		}

		public function selectProductos(){
			$sql = "SELECT
			p.idproducto,
			p.modelo,
			p.codigo,
			p.nombre,
			p.descripcion,
			p.categoriatresid,
			ct.idcategoriatres,
			ct.nombre AS nombrecategoriatres,
			p.marcaid,
			m.idmarca,
			m.nombre AS marca,
			p.caracteristicaid,
			dc.iddetcaracteristicas,
			dc.nombre AS caracteristica,
			p.galeriaid,
			g.idgaleria,
			g.nombre AS galeria,
			p.preciodolares,
			p.preciodolaresigv,
			p.preciosoles,
			p.preciosolesigv,
			p.stock,
			p.ruta,
			p.resumen,
			p.`status`,
			me_pais.nombre AS pais,
			me_marcas.nombre AS marca,
			me_marcas.idmarca,
			me_pais.idpais 
		FROM
			me_productos AS p
			INNER JOIN me_categoriatres AS ct ON p.categoriatresid = ct.idcategoriatres
			INNER JOIN me_marcas AS m ON p.marcaid = m.idmarca
			INNER JOIN me_det_caracteristicas AS dc ON p.caracteristicaid = dc.iddetcaracteristicas
			INNER JOIN me_galeria AS g ON p.galeriaid = g.idgaleria
			INNER JOIN me_marcas ON p.marcaid = me_marcas.idmarca
			INNER JOIN me_pais ON me_marcas.paisid = me_pais.idpais 
		WHERE
			p.`status` <> 0 ";
					
					$request = $this->select_all($sql);
			return $request;
		}	

		public function insertProducto(
			string $nombre,
			string $modelo,
			string $codigo,
			int $categoriatresid,
			int $marcaid,
			string $descripcion,
			string $datosdscto,
			int $caracteristicaid,
			string $imagen,
			int $galeriaid,
			string $codigobarra,
			float $preciodolares,
			float $preciodolaresigv,
			float $preciosoles,
			float $preciosolesigv,
			string $porcentajedscto,
			float $preciodescuento,
			int $stock,
			string $ruta,
			string $resumen,
			int $status
			){
			$this->strNombre = $nombre;
			$this->strModelo = $modelo;
			$this->intCodigo = $codigo;
			$this->intCategoriaTresId = $categoriatresid;
			$this->intMarcaId = $marcaid;
			$this->strDescripcion = $descripcion;
			$this->strDatosDscto = $datosdscto;
			$this->intCaracteristicaId = $caracteristicaid;
			$this->strImagen = $imagen;
			$this->intGaleriaId = $galeriaid;
			$this->strCodigoBarra = $codigobarra;
			$this->floatPrecioDolares = $preciodolares;
			$this->floatPrecioDolaresIgv = $preciodolaresigv;
			$this->floatPrecioSoles = $preciosoles;
			$this->floatPrecioSolesIgv = $preciosolesigv;
			$this->strPorcentajeDscto = $porcentajedscto;
			$this->floatPrecioDescuento = $preciodescuento;
			$this->intStock = $stock;
			$this->strRuta = $ruta;
			$this->strResumen = $resumen;
			$this->intStatus = $status;
			$return = 0;
 
		 
				$query_insert  = "INSERT INTO me_productos(nombre,
														modelo,
														codigo,
														categoriatresid,
														marcaid,
														descripcion,
														datosdscto,
														caracteristicaid,
														imagen,
														galeriaid,
														codigobarra,
														preciodolares,
														preciodolaresigv,
														preciosoles,
														preciosolesigv,
														porcentajedscto,
														preciodescuento,
														stock,
														ruta,
														resumen,
														status) 
								  VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

								  //echo $query_insert; return;
	        	$arrData = array($this->strNombre,
        						$this->strModelo,
        						$this->intCodigo,
        						$this->intCategoriaTresId,
        						$this->intMarcaId,
        						$this->strDescripcion,
        						$this->strDatosDscto,
        						$this->intCaracteristicaId,
        						$this->strImagen,
        						$this->intGaleriaId,
        						$this->strCodigoBarra,
        						$this->floatPrecioDolares,
        						$this->floatPrecioDolaresIgv,
        						$this->floatPrecioSoles,
        						$this->floatPrecioSolesIgv,
        						$this->strPorcentajeDscto,
        						$this->floatPrecioDescuento,
        						$this->intStock,
        						$this->strRuta,
								$this->strResumen,
        						$this->intStatus);
	        	$request_insert = $this->insert($query_insert,$arrData);
	        	$return = $request_insert;
	 
	        return $return;
		}

		public function updateProducto(int $idproducto, string $nombre,
		string $modelo,
		string $codigo,
		int $categoriatresid,
		int $marcaid,
		string $descripcion,
		string $datosdscto,
		int $caracteristicaid,
		string $imagen,
		int $galeriaid,
		string $codigobarra,
		float $preciodolares,
		float $preciodolaresigv,
		float $preciosoles,
		float $preciosolesigv,
		string $porcentajedscto,
		float $preciodescuento,
		int $stock,
		string $ruta,
		string $resumen,
		int $status){
			$this->intIdProducto = $idproducto;
			$this->strNombre = $nombre;
			$this->strModelo = $modelo;
			$this->intCodigo = $codigo;
			$this->intCategoriaTresId = $categoriatresid;
			$this->intMarcaId = $marcaid;
			$this->strDescripcion = $descripcion;
			$this->strDatosDscto = $datosdscto;
			$this->intCaracteristicaId = $caracteristicaid;
			$this->strImagen = $imagen;
			$this->intGaleriaId = $galeriaid;
			$this->strCodigoBarra = $codigobarra;
			$this->floatPrecioDolares = $preciodolares;
			$this->floatPrecioDolaresIgv = $preciodolaresigv;
			$this->floatPrecioSoles = $preciosoles;
			$this->floatPrecioSolesIgv = $preciosolesigv;
			$this->strPorcentajeDscto = $porcentajedscto;
			$this->floatPrecioDescuento = $preciodescuento;
			$this->intStock = $stock;
			$this->strRuta = $ruta;
			$this->strResumen = $resumen;
			$this->intStatus = $status;
			
			$return = 0;
			 
				$sql= "";
				$sql .= "UPDATE me_productos 
						SET 
						nombre=?,
						modelo=?,
						codigo=?,
						categoriatresid=?,
					marcaid=?,
					descripcion=?,
					datosdscto=?,
					caracteristicaid=?,";

				if(1==1){
					$sql .= "
					imagen=?,
					galeriaid=?,
					codigobarra=?,
					preciodolares=?,
					preciodolaresigv=?,
					preciosoles=?,
					preciosolesigv=?,";

				}	
				
						
				$sql .= "porcentajedscto=?,
						preciodescuento=?,
						stock=?,
						ruta=?,
						resumen=?,
						status=? 
						WHERE idproducto = $this->intIdProducto ";
				$arrData = array(	$this->strNombre,
									$this->strModelo,
									$this->intCodigo,
									$this->intCategoriaTresId,
									$this->intMarcaId,
									$this->strDescripcion,
									$this->strDatosDscto,
									$this->intCaracteristicaId,
									$this->strImagen,
									$this->intGaleriaId,
									$this->strCodigoBarra,
									$this->floatPrecioDolares,
									$this->floatPrecioDolaresIgv,
									$this->floatPrecioSoles,
									$this->floatPrecioSolesIgv,
									$this->strPorcentajeDscto,
									$this->floatPrecioDescuento,
									$this->intStock,
									$this->strRuta,
									$this->strResumen,
									$this->intStatus);

	        	$request = $this->update($sql,$arrData);
	        	$return = $request;
 
	        return $return;
		}

		public function selectProducto(int $idproducto){
			$this->intIdProducto = $idproducto;
			$sql = "SELECT p.idproducto,
							p.modelo,
			p.codigo,
			p.nombre,
			p.descripcion,
			p.categoriatresid,
			ct.idcategoriatres,
			ct.nombre as nombrecategoriatres,
			p.marcaid,
			 m.idmarca,
			m.nombre as marca,
			p.caracteristicaid,
			dc.iddetcaracteristicas,
			dc.nombre as caracteristica,

			p.galeriaid,
			g.idgaleria,
			g.nombre as galeria,
		  
			p.preciodolares,
			p.preciodolaresigv,
			p.preciosoles,
			p.preciosolesigv,
			p.datosdscto,
			p.porcentajedscto,
			p.preciodescuento,
			
			p.stock,
			p.ruta,
			p.resumen,
			p.status 
	FROM me_productos p 
	INNER JOIN me_categoriatres ct ON p.categoriatresid = ct.idcategoriatres
	INNER JOIN me_marcas m ON p.marcaid = m.idmarca
	INNER JOIN me_det_caracteristicas dc ON p.caracteristicaid = dc.iddetcaracteristicas
	INNER JOIN me_galeria g ON p.galeriaid = g.idgaleria 
					WHERE idproducto = $this->intIdProducto";
			$request = $this->select($sql);
			return $request;

		}

		public function insertImage(int $idproducto, string $imagen){
			$this->intIdProducto = $idproducto;
			$this->strImagen = $imagen;
			$query_insert  = "INSERT INTO me_galeria(nombre,titulogaleria,productoid) VALUES(?,?,?)";
	        $arrData = array(
        					$this->strImagen,$this->strImagen,$this->intIdProducto);
	        $request_insert = $this->insert($query_insert,$arrData);
	        return $request_insert;
		}

		public function selectImages(int $idproducto){
			$this->intIdProducto = $idproducto;
			$sql = "SELECT productoid,nombre as img,titulogaleria
					FROM me_galeria
					WHERE productoid = $this->intIdProducto";
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

		public function deleteProducto(int $idproducto){
			$this->intIdProducto = $idproducto;
			$sql = "UPDATE me_productos SET status = ? WHERE idproducto = $this->intIdProducto ";
			$arrData = array(0);
			$request = $this->update($sql,$arrData);
			return $request;
		}

		
	}
 ?>