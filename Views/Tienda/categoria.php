<?php

headerTienda($data); 
$arrProductos = $data['productos'];

/* dep($data['productos']); */
?>

<div class="container">
	<ul class="breadcrumb">
		<li><a href="./">Inicio</a></li>
		<li> <a href="#">Productos</a></li>
		<li class="active"> <?= $arrProductos[0]['nombrecategoriatres'] ?> </li>
	</ul>
 	 <br>
 
	<div class="row">  
    
				<div class="col-md-12">				
								 
<!-- Categoria -->
<div class="container divProductos">
		<div class="row">
			<h3><?= $arrProductos[0]['nombrecategoriatres'] ?></h3>
			<p><?= $arrProductos[0]['descripcion'] ?></p>
		</div>
		<br>

	<div class="container-fluid" id="inventory">
		<div class="row">
	 
        <?php

        for($p=0; $p < count($arrProductos); $p++){

            if(count($arrProductos[$p]['images']) > 0 ){
                $portada = $arrProductos[$p]['images'][0]['url_image'];
            }else{
                $portada = media().'/images/uploads/product.png';
            }
        ?>
        <div class="col-md-3 productoOrganico">
            <div class="card">
                <div class="ribbon"><span>Nuevo</span></div>
                <div class="flex-items">
                    <a href="<?= $portada ?>?w=700" data-lightbox="<?= $arrProductos[$p]['nombre'] ?>" data-title="<?= $arrProductos[$p]['nombre'] ?>"><img class="img-fluid"  width="100%" src="<?= $portada ?>?w=400"  alt="<?= $arrProductos[$p]['nombre'] ?>" ></a>
                </div>
                    <a href="<?= base_url().'/tienda/producto/'.$arrProductos[$p]['ruta']; ?>"><h3 class="titulo_producto" ><?= $arrProductos[$p]['nombre'] ?></h3></a>
                    <p><?= $arrProductos[$p]['resumen'] ?></p>
                    <a href="<?= base_url().'/tienda/producto/'.$arrProductos[$p]['ruta']; ?>"><button class="btn view-btn">Ver Producto</button></a>
            </div>
        </div>
        <?php
        }
        ?>
 
		</div>
	</div>

 
</div>
<!-- Categoria -->
				</div>
				<!-- CIERRA LAS 12 COLUMNAS-->
	</div>
</div>
<div class="divisor"></div>
            <!-- /Carrusel -->
<?php

footerTienda($data); 

?>