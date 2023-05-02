<?php

headerDetalle($data); 
$arrProducto = $data['producto'];

/* dep($arrProducto); */
$arrImg = $arrProducto['images'];

?>

    <!-- ************************************************************** -->
    <!-- *************************  portada  ************************* -->
    <!-- ************************************************************** -->
   <!--  <section class="banner">
    <div class="capa">
        <h1 class="bannerTit"><?= $arrProducto['nombre'] ?></h1>
    </div>
    
    </section> -->
    <!-- ************************************************************** -->
    <!-- *************************  /portada  ************************* -->
    <!-- ************************************************************** -->

    <div class="container-fluid">
        <ul class="breadcrumb">
            <li><a href="<?= base_url(); ?>">Inicio</a></li> / 
            <li class="active"><strong> <?= $arrProducto['nombre'] ?> </strong></li>
        </ul>
    </div>


    <!-- ************************************************************** -->
    <!-- *************************  paquetes turisticos Nacionales  ************************* -->
    <!-- ************************************************************** -->    
	<section class="staticData">
    <!-- titulo -->
    <h2 class="text-success"><?= $arrProducto['nombre'] ?></h2>
    <!-- /titulo -->

    <div class="clearfix"></div>
    <div class="espacio"></div>
    <div class="container">
        <div class="row">
            <?php

                if(count($arrImg) > 0 ){
                    $portada =$arrImg[0]['url_image'];
                }else{
                    $portada = media().'/images/uploads/product.png';
                }
            ?>
            <div class="col-md-6">
                <div class="conProd">
                   <a class="text-d-none" > <img src="<?= $portada ?>" alt="<?= $arrProducto['nombre'] ?>" title="<?= $arrProducto['nombre'] ?>"></a>
                    <div class="conSlog"><a class="text-d-none"  href="<?= $portada ?>" ><h3><?= $arrProducto['lugar'] ?></h3></a></div>
                    <div class="conTit"><a class="text-d-none" href="<?= $portada ?>" ><p><?= $arrProducto['nombre'] ?></p></a></div>
                </div>
            </div>
            <div class="col-md-6"> 
                <div class="descripciond">
                    <span>Caracteristicas:</span>
                    <h3><?= $arrProducto['nombre'] ?></h3>
                    <p><?= $arrProducto['caracteristica'] ?>
                    </p>
                    <div class="precio precio_detalle">Precio: <span class="sym">S/</span><span class="price"><?= $arrProducto['preciosolesigv'] ?></span></div>
                    <div class="espacio"></div>
                        <a id="divWhatsapp" class="btn btn-success text-white" ><i class="fa fa-whatsapp " aria-hidden="true"></i> Deseo reservar ahora!</a>
                </div>
            </div>
        </div>
    </div>

</section>

<div class="callToActiond">
        <h2> DESCRIPCIÓN</h2>
    </div>
<section class="callToAction2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="espacio"></div>
                <p><?= $arrProducto['descripcion'] ?></p>
            </div>
        </div>
    </div>
</section>

	<!-- ************************************************************** -->
    <!-- ************************* /paquetes turisticos Nacionales ************************* -->
    <!-- ************************************************************** -->    


<?php

footerDetalle($data); 

?>            