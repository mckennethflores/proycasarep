<?php

headerDetalle($data); 

$arrProductos = $data['paquetes-internacionales'];
//dep($arrProductos);
?>

    <!-- ************************************************************** -->
    <!-- *************************  portada  ************************* -->
    <!-- ************************************************************** -->
    <section class="banner">
    <div class="capa">
        
        <h1 class="bannerTit">
        <?=  $arrProductos[0]['nombrecategoriatres']; ?>
        </h1>
    </div>
    
    </section>
    <!-- ************************************************************** -->
    <!-- *************************  /portada  ************************* -->
    <!-- ************************************************************** -->

    <div class="container-fluid">
        <ul class="breadcrumb">
            <li><a href="<?= base_url(); ?>">Inicio</a></li> / 
            <li class="active"><strong> <?=  $arrProductos[0]['nombrecategoriatres']; ?> </strong></li>
        </ul>
    </div>

    <!-- ************************************************************** -->
    <!-- *************************  paquetes turisticos Nacionales  ************************* -->
    <!-- ************************************************************** -->    
	<section class="staticData">
    <!-- titulo -->
    <h2 class="text-success"><?=  $arrProductos[0]['nombrecategoriatres']; ?></h2>
    <p>Siempre podrás contar con nosotros
        para conocer la belleza y grandeza del Perú
        con seguridad y confianza. </p>
    <p class="text-warning-emphasis text-center">NATURALEZA</p>
    <!-- /titulo -->
    <div class="clearfix"></div>
    <div class="container">
        <div class="row">
		<?php

			for($p=0; $p < count($arrProductos); $p++){

				if(count($arrProductos[$p]['images']) > 0 ){
					$portada = $arrProductos[$p]['images'][0]['url_image'];
				}else{
					$portada = media().'/images/uploads/product.png';
			}

		?>
            <article class="col-md-4">
                <div class="conProd">
                   <a class="text-d-none" href="<?= base_url().'/tienda/producto/'.$arrProductos[$p]['ruta']; ?>"> <img src="<?= $portada ?>" alt="<?= $arrProductos[$p]['nombre'] ?>"  title="Viaja a Tarapoto"></a>
                    <div class="conSlog"><a class="text-d-none"href="<?= base_url().'/tienda/producto/'.$arrProductos[$p]['ruta']; ?>"><h3><?= $arrProductos[$p]['lugar'] ?></h3></a></div>
                    <div class="conTit"><a class="text-d-none"href="<?= base_url().'/tienda/producto/'.$arrProductos[$p]['ruta']; ?>"><p><?= $arrProductos[$p]['nombre'] ?></p></a></div>
                </div>
                <div class="descripcion">
                    <a href="<?= base_url().'/tienda/producto/'.$arrProductos[$p]['ruta']; ?>"><h3><?= $arrProductos[$p]['nombre'] ?></h3></a>
                    <p><?= $arrProductos[$p]['resumen'] ?>
                    </p>
                    <div class="precio">Precio: <span class="sym">S/</span><span class="price"><?= $arrProductos[$p]['preciosolesigv'] ?></span></div>
                    <a class="btnBuy btn btn-warning" href="<?= base_url().'/tienda/producto/'.$arrProductos[$p]['ruta']; ?>">VER MAS</a>
                </div>
            </article>
		<?php
			}
		?>
             
        </div>
    </div>
</section>

	<!-- ************************************************************** -->
    <!-- ************************* /paquetes turisticos Nacionales ************************* -->
    <!-- ************************************************************** -->    

<?php

footerDetalle($data); 

?>            