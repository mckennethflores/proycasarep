<?php
require_once("Libraries/Core/Mysql.php");
trait TProducto{
	private $con2;
	private $strCategoria;
	private $intIdcategoria;
	private $intIdProducto;
	private $strProducto;
	private $cant;
	private $option;
	private $strRuta;
	private $strRutaCategoria;

    public function selectProductos()
    {
        $this->con2 = new Mysql();
        $sql = "SELECT
        p.idproducto,
        p.modelo,
        p.codigo,
        p.nombre,
        p.descripcion,
        p.categoriatresid,
        ct.idcategoriatres,
        ct.nombre AS nombrecategoriatres,
        ct.ruta,
        ct.descripcion,
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
        p.preciodescuento,
        p.ruta,
        p.resumen,
        p.`status`,
        me_pais.nombre AS nombrepais,
        me_marcas.nombre AS nombremarca,
        me_marcas.idmarca,
        me_pais.idpais,
        me_marcas.imagen as imagenmarca,
        me_pais.imagen as imagenpais,
        me_marcas.paisid,
		p.preciodescuento,
        p.caracteristica,
        p.lugar
        
    FROM
        me_productos AS p
        INNER JOIN me_categoriatres AS ct ON p.categoriatresid = ct.idcategoriatres
        INNER JOIN me_marcas AS m ON p.marcaid = m.idmarca
        INNER JOIN me_det_caracteristicas AS dc ON p.caracteristicaid = dc.iddetcaracteristicas
        INNER JOIN me_galeria AS g ON p.galeriaid = g.idgaleria
        INNER JOIN me_marcas ON p.marcaid = me_marcas.idmarca
        INNER JOIN me_pais ON me_marcas.paisid = me_pais.idpais 
    WHERE
        p.status <> 0";
        $request = $this->con2->select_all($sql);
       if(count($request) >0){

           for( $c=0; $c < count($request) ; $c++){
                $intIdProducto = $request[$c]['idproducto'];

               $sqlImg = " SELECT productoid,nombre as img FROM me_galeria WHERE productoid = $intIdProducto";
                $arrImg = $this->con2->select_all($sqlImg);
                if(count($arrImg) > 0){
                    for($i=0; $i < count($arrImg); $i++){
                        $arrImg[$i]['url_image'] = media(). '/images/uploads/'.$arrImg[$i]['img'];
                    }
                }
                $request[$c]['images'] = $arrImg;
           }
       }
        return $request;
    }
    public function getProductosCategoriaT(string $categoria)
    {
        $this->con2 = new Mysql();
        $this->strCategoria = $categoria;

        
        $sql_cat = "SELECT idcategoriatres,nombre,categoriadosid FROM me_categoriatres WHERE ruta = '{$this->strCategoria}'";
		$request = $this->con2->select($sql_cat);

        if(!empty($request)){
            $this->intIdcategoria = $request['idcategoriatres'];

            $sql = "SELECT p.idproducto,
            p.modelo,
            p.codigo,
            p.nombre,
            p.descripcion,
            p.categoriatresid,
            ct.idcategoriatres,
            ct.nombre as nombrecategoriatres,
            ct.ruta,
            ct.descripcion,
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
            p.stock,
            p.ruta,
            p.resumen,
            
            p.preciodescuento
            FROM me_productos p 
            INNER JOIN me_categoriatres ct ON p.categoriatresid = ct.idcategoriatres
            INNER JOIN me_marcas m ON p.marcaid = m.idmarca
            INNER JOIN me_det_caracteristicas dc ON p.caracteristicaid = dc.iddetcaracteristicas
            INNER JOIN me_galeria g ON p.galeriaid = g.idgaleria
                    
                    WHERE p.status != 0 and  p.categoriatresid = $this->intIdcategoria";
            $request = $this->con2->select_all($sql);
            if(count($request) >0){

                for( $c=0; $c < count($request) ; $c++){
                        $intIdProducto = $request[$c]['idproducto'];

                    $sqlImg = " SELECT productoid,nombre as img FROM me_galeria WHERE productoid = $intIdProducto";
                        $arrImg = $this->con2->select_all($sqlImg);
                        if(count($arrImg) > 0){
                            for($i=0; $i < count($arrImg); $i++){
                                $arrImg[$i]['url_image'] = media(). '/images/uploads/'.$arrImg[$i]['img'];
                            }
                        }
                        $request[$c]['images'] = $arrImg;
                }
            }

        }

        return $request;
    }

    public function getProductoT(string $producto)
    {
        $this->con2 = new Mysql();
        $this->strProducto = $producto;
        $sql = "SELECT
        p.idproducto,
        p.modelo,
        p.codigo,
        p.nombre,
        p.descripcion,
        p.categoriatresid,
        ct.idcategoriatres,
        
        ct.nombre AS nombrecategoriatres,
        ct.ruta,
        ct.descripcion AS descripcionCategoria,
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
        p.preciodescuento,
        me_marcas.idmarca,
        me_marcas.paisid,
        me_marcas.imagen AS imagenmarca,
        me_pais.imagen AS imagenpais,
        me_marcas.nombre AS nombremarca,
        me_pais.nombre AS nombrepais,
        p.caracteristica,
        p.lugar
    FROM
        me_productos AS p
        INNER JOIN me_categoriatres AS ct ON p.categoriatresid = ct.idcategoriatres
        INNER JOIN me_marcas AS m ON p.marcaid = m.idmarca
        INNER JOIN me_det_caracteristicas AS dc ON p.caracteristicaid = dc.iddetcaracteristicas
        INNER JOIN me_galeria AS g ON p.galeriaid = g.idgaleria
        INNER JOIN me_marcas ON p.marcaid = me_marcas.idmarca
        INNER JOIN me_pais ON me_marcas.paisid = me_pais.idpais
                
                WHERE p.status != 0 and p.ruta = '{$this->strProducto}' ";
        $request = $this->con2->select($sql);
      
            if(!empty($request)){

              
                        $intIdProducto = $request['idproducto'];

                    $sqlImg = " SELECT productoid,nombre as img FROM me_galeria WHERE productoid = $intIdProducto";
                        $arrImg = $this->con2->select_all($sqlImg);
                        if(count($arrImg) > 0){
                            for($i=0; $i < count($arrImg); $i++){
                                $arrImg[$i]['url_image'] = media(). '/images/uploads/'.$arrImg[$i]['img'];
                            }
                        }
                        $request['images'] = $arrImg;
                
            }
        return $request;
    }
    public function getProductosCategoriaInicio(int $idcategoria)
			{
                $this->con2 = new Mysql();
				$this->intIdcategoria = $idcategoria;

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
                    ct.ruta,
                    ct.descripcion,
					p.galeriaid,
					g.idgaleria,
					g.nombre as galeria,
				
					p.preciodolares,
					p.preciodolaresigv,
					p.preciosoles,
					p.preciosolesigv,
					p.stock,
					p.ruta,
					p.resumen,
					p.preciodescuento,
                    p.caracteristica,
                    p.lugar
					FROM me_productos p 
					INNER JOIN me_categoriatres ct ON p.categoriatresid = ct.idcategoriatres
					INNER JOIN me_marcas m ON p.marcaid = m.idmarca
					INNER JOIN me_det_caracteristicas dc ON p.caracteristicaid = dc.iddetcaracteristicas
					INNER JOIN me_galeria g ON p.galeriaid = g.idgaleria
							
							WHERE p.status != 0 and  p.categoriatresid = $this->intIdcategoria";
                    
					$request = $this->con2->select_all($sql);
					if(count($request) >0){

						for( $c=0; $c < count($request) ; $c++){
								$intIdProducto = $request[$c]['idproducto'];

							$sqlImg = " SELECT productoid,nombre as img FROM me_galeria WHERE productoid = $intIdProducto";
								$arrImg = $this->con2->select_all($sqlImg);
								if(count($arrImg) > 0){
									for($i=0; $i < count($arrImg); $i++){
										$arrImg[$i]['url_image'] = media(). '/images/uploads/'.$arrImg[$i]['img'];
									}
								}
								$request[$c]['images'] = $arrImg;
						}
					}
                    //dep($request); exit();
				return $request;
			}


                
    public function selectSliders()
    {
        $this->con2 = new Mysql();
        $sql = "SELECT idslider, nombre, titulo, imagen, boton, status FROM slider WHERE status <> 0;";
        $request = $this->con2->select_all($sql);

        return $request;
    }






}


?>