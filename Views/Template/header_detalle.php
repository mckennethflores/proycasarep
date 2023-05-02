<?php
$active=$data['menu_active'];
?>
<!DOCTYPE html>
<html lang="es-ES">
 <head>
	<meta charset="UTF-8">
	<title><?= NOMBRE_EMPRESA ?> &#8211; <?= T_SEO ?></title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	

	<link rel="shortcut icon" href="<?= media();?>/images/favicon2.ico" type="image/x-icon">
	<meta name="author" content="McKenneth Flores">
    <meta name="msapplication-TileColor" content="#47A895">
    <meta name="theme-color" content="#47A895">
	<!--Yoast Seo--> 
	<meta name="description" content="<?= D_SEO ?>"/>
	<!-- Facebook Tags -->
	<meta property="og:locale" content="es_PE" />	
	<meta property="fb:admins" content="1694154767535867" />
	<meta property="fb:page_id" content="1694154767535867" />
	<meta property="og:title" itemprop="name" content="<?= D_SEO ?>" />
	<meta property="og:description" content="<?= D_SEO ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:site_name" content="<?= NOMBRE_EMPRESA ?> | <?= D_SEO ?>" />
	<meta property="og:url" content="<?= base_url(); ?>" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:title" content="<?= NOMBRE_EMPRESA ?> | <?= D_SEO ?>" />
	<link rel="shortcut icon" type="image/png" href="<?= media(); ?>/tienda/img/favicon3.ico" />
	<link rel="apple-touch-icon" href="<?= media(); ?>/tienda/img/favicon3.ico" />
	<link rel="author" type="text/plain" href="humans.txt" />
	<link rel="sitemap" type="application/xml" title="Sitemap" href="sitemap.xml" />
	<link rel="canonical" href="<?= base_url(); ?>">
	<!-- /Yoast Seo-->

<!--  Iconos -->
 
<link rel="stylesheet" href="<?= media(); ?>/tienda/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= media(); ?>/tienda/css/bootstrap.min.css.map">
    <link rel="stylesheet" href="<?= media(); ?>/tienda/css/bootstrap.css.map">

<!-- / Iconos -->

<!-- lightbox -->
<link rel="stylesheet" href="<?= media(); ?>/tienda/css/lightbox.min.css">
<!-- lightbox -->

<link href="<?= media(); ?>/tienda/css/style.css" rel="stylesheet">
</head>

<body onunload="myStopFunction();" >

    <!-- ************************************************************** -->
    <!-- *************************  cabecera  ************************* -->
    <!-- ************************************************************** -->
    <header>
        <div id="desktop" class="container header">
            <div class="row align-items-center">
                <div class="col-md-3">
                    <a href="<?= base_url(); ?>"><img class="logo" src="<?= media(); ?>/tienda/img/logo.png" alt="<?= NOMBRE_EMPRESA ?>" title="<?= NOMBRE_EMPRESA ?>"></a>
                </div>
                <div class="col-md-9">
                    
                <ul class="social">
                            <li><a target="_blank" href="https://api.whatsapp.com/send?phone=51<?= CELULAR1 ?>&text=Hola%20<?= NOMBRE_EMPRESA ?>,%20deseo%20mas%20informaci%C3%B3n%20mi%20nombre%20es:"><i class="fa fa-whatsapp " aria-hidden="true"></i> (+51) <?= CELULAR1 ?></a></li>
                            <li><a target="_blank" href="https://api.whatsapp.com/send?phone=51<?= CELULAR2 ?>&text=Hola%20<?= NOMBRE_EMPRESA ?>,%20deseo%20mas%20informaci%C3%B3n%20mi%20nombre%20es:"><i class="fa fa-whatsapp " aria-hidden="true"></i> (+51) <?= CELULAR2 ?></a></li>
 
                        </ul>
                    <nav>
                    <ul class="menu ">
                        <li><a class="<?= $active == "inicio_active" ? "active" : ""; ?>" href="<?= base_url(); ?>">Inicio</a></li>
                        <li><a href="<?= base_url(); ?>/nosotros">Nosotros</a></li>
                        <li><a href="<?= base_url(); ?>/servicios">Servicios</a></li>
					 
                        <li><a class="<?= $active == "contacto_active" ? "active" : ""; ?>" href="<?= base_url(); ?>/contacto">Contacto</a></li>
                    </ul>
					</nav>
                   
                </div>
               <!--  <div class="col-md-2">
                    
                </div> -->
            </div>
        </div>
        <div id="mobile"  class="container-fluid header" >

            <div class="header-mb">
				<a href="<?= base_url(); ?>"><img class="logo-mb" src="<?= media(); ?>/tienda/img/logo-small-white.webp" alt="<?= NOMBRE_EMPRESA ?>" title="<?= NOMBRE_EMPRESA ?>"></a>
                

                <i id="hamburguer" class="fa fa-bars" aria-hidden="true"></i>
                <i  id="close" class="hidden fa fa-times" aria-hidden="true"></i>
            </div>
            <div class="body-mb">
				<nav>
                    <ul id="menu-mb" class="hidden">
                        <li class="<?= $active == "inicio_active" ? "active" : ""; ?>" ><a href="<?= base_url(); ?>">Inicio</a></li>
                        <li><a href="<?= base_url(); ?>/nosotros">Nosotros</a></li>
                        <li><a href="<?= base_url(); ?>/servicios">Servicios</a></li>
                        
   
                        <li><a class="<?= $active == "contacto_active" ? "active" : ""; ?>" href="<?= base_url(); ?>/contacto">Contacto</a></li>
                    </ul>
				</nav>
            </div>
        </div>
    </header>
    
    <!-- ************************************************************** -->
    <!-- *************************  /cabecera  ************************* -->
    <!-- ************************************************************** -->
