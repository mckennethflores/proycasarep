<?php

headerDetalle($data); 

$banner = $data['page']['portada'];
$idpagina = $data['page']['idpost'];
?>

    <!-- ************************************************************** -->
    <!-- *************************  portada  ************************* -->
    <!-- ************************************************************** -->
    <section class="banner">
    <div class="capa">
        
        <h1 class="bannerTit">
        <?php
        if(viewPage($idpagina)){
            echo $data['page']['titulo'];
        }
        ?>
        </h1>
    </div>
    
    </section>
    <!-- ************************************************************** -->
    <!-- *************************  /portada  ************************* -->
    <!-- ************************************************************** -->

    <div class="container-fluid">
        <ul class="breadcrumb">
            <li><a href="<?= base_url(); ?>">Inicio</a></li> / 
            <li class="active"><strong> <?php
            if(viewPage($idpagina)){
                echo $data['page']['titulo'];
            } ?> </strong></li>
        </ul>
    </div>

        <div class="container">
                <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <?php
	if(viewPage($idpagina)){
		echo $data['page']['contenido'];
	}else{
  ?>
<div>
	<div class="container-fluid py-5 text-center" >
		<img src="<?= media() ?>/images/construction.png" alt="En construcción">
		<h3>Estamos trabajando para usted.</h3>
	</div>
</div>
<?php 
	}

?>
<a id="divWhatsapp" class="btn btn-success text-white btnCenter" ><i class="fa fa-whatsapp " aria-hidden="true"></i> Deseo reservar ahora!</a>

                        </div>

                    </div>
        </div>
<?php

footerDetalle($data); 

?>            