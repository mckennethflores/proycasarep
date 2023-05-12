<?php

$arrModulo = $data['slider'];


$arrBane = $data['banner'];
$arrCate = $data['categoria'];

$arrCateTres = $data['categoriatres'];
//dep($arrCateTres);
$arrProductos = $data['productos'];
//dep($arrProductos);
$arrSliders = $data['sliders'];
//dep($arrSliders);
$arrPackInter = $data['paquetes-internacionales'];
// dep($arrPackInter);
headerTienda($data); 


?>
<!-- ************************************************************** -->
    <!-- *************************  portada  ************************* -->
    <!-- ************************************************************** -->
    <?php
	$slides='';
	$Indicators='';
	$counter=0;
    ?>

  <?php

  for($s=0; $s < count($arrSliders); $s++){

    $nombre = $arrSliders[$s]['nombre'];
    $titulo = $arrSliders[$s]['titulo'];
    $imagen = $arrSliders[$s]['imagen'];
    $boton = $arrSliders[$s]['boton'];
  
    if($counter == 0)
    {
    
      $Indicators .='<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="'.$s.'" class="active" aria-current="true" aria-label="'.$titulo.'"></button>';
      $slides .= '<div class="carousel-item active" data-bs-interval="2000" >
      <img src="'. media().'/tienda/img/'.$imagen.'" class="d-block w-100" alt="'.$titulo.'" title="'.$titulo.'">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="tituloSlide">'.$titulo.'</h2>
          <a class="btn btn-warning2" href="'.$boton.'"><b>VER MÁS</b></a>
        </div>
      </div>';
    }
    else
    {
      $Indicators .='<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="'.$counter.'"  aria-current="true" aria-label="'.$titulo.'"></button>';
      $slides .= '<div class="carousel-item" data-bs-interval="2000" >
      <img src="'. media().'/tienda/img/'.$imagen.'" class="d-block w-100" alt="'.$titulo.'" title="'.$titulo.'">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="tituloSlide">'.$titulo.'</h2>
          <a class="btn btn-warning2" href="'.$boton.'"><b>VER MÁS</b></a>
        </div>
      </div>';
    }

    
    $counter++;

  }

  ?>
 <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <?= $Indicators; ?>
        </div>
        <div class="carousel-inner">
        <?= $slides; ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

    <!-- ************************************************************** -->
    <!-- *************************  /portada  ************************* -->
    <!-- ************************************************************** -->

	<!-- ************************************************************** -->
    <!-- *************************  paquetes turisticos Nacionales  ************************* -->
    <!-- ************************************************************** -->    
	<section class="staticData">

    <div class="espacio"></div>
    <h2 class="text-plomo">BIENVENIDOS A HOGAR DE MAMINA</h2>
    <div class="line-skyblue"></div>
    <div class="espacio"></div>
    <div class="clearfix"></div>
            <div class="container">
                <div class="row">
                <div id="showVideo"></div>
                    <div id="fotoVideo" class="video-background" onclick="playVideo()">
                        <div class="icono-play"><img src="<?= media().'/tienda/img/play-ico.png'; ?>" alt=""></div>
                    </div>
                </div>
            </div>
            <!-- <div class="espacio"></div>
            <div class="espacio"></div> -->
    </section>

        <section class="reviews" hidden="">
            <div class="title">
                <div class="espacio"></div>
                <h3 class="title2">TESTIMONIOS</h3>
            </div>
            <div class="rbox">
                <div class="rbLeft">
                    <span class="" id="img1">
                        <img src="<?= media().'/tienda/img/rev1.png'; ?>" alt="">
                        <span>Juan Garcia</span>
                    </span>
                    <span class="hidden" id="img2">
                        <img src="<?= media().'/tienda/img/rev2.jpg'; ?>" alt="">
                        <span >Carla Perez</span>
                    </span>
                </div>
                <div class="rbRight">
                    <div class="star">
                        <ul class="linksocial2">
                            <li><a href="#"><i class="fa fa-star " aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star " aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star " aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star " aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star " aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <div class="text" id="text1">
                        <p>"Desde que mi mamá se fue a vivir a Casa de reposo SURCO, estamos muy contentos con el cuidado y la atención que recibe. Está muy bien cuidada y los servicios son excelentes. El ambiente es acogedor y hay muchas actividades para mantenerla entretenida. Estamos muy contentos de haber encontrado un lugar tan maravilloso para que mi mamá se sienta segura y feliz."
                            
                        </p>
                    </div>
                    <div class="text hidden" id="text2">
                        <p>"Los profesionales de la salud que trabajan allí son muy profesionales y atentos. El ambiente es cálido, 
                            el jardín y el parque son hermosos. Muy recomendable."
                        </p>
                    </div>
                    <div class="text hidden" id="text3">
                    <p>Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard
                        dummy text ever since the 1500s, when
                        an unknown printer took a galley of type
                        and scrambled it to make a type specimen
                        book.</p>
                    </div>
                    <div class="bullets">
                        <ul class="linksocial3">
                            <i onclick="carrouselRev(1)" id="c_btn1" class="fa fa-circle" aria-hidden="true"></i>
                            <i onclick="carrouselRev(2)" id="c_btn2" class="fa fa-circle-o" aria-hidden="true"></i>
                        </ul>
                    </div>

                </div>
            </div>
        </section>

	<!-- ************************************************************** -->
    <!-- ************************* /paquetes turisticos Nacionales ************************* -->
    <!-- ************************************************************** -->    
    <div class="espacio"></div>

 
	<!-- ************************************************************** -->
    <!-- ************************* Opiniones ************************* -->
    <!-- ************************************************************** --> 

<section class="staticData">
    <div class="espacio"></div>
    <h2 class="text-success">RESIDENCIAS</h2>
    <div class="line"></div>
    <div class="espacio"></div>
    <div class="clearfix"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="descripcion">
                    <p>El hogar de Mamina, está ubicado en el distrito de Santiago de Surco, Jiron Ismael 761, frente al parque Loma Amarilla.</p>
                    <h3>Misión:</h3>
                    <p> Brindar un entorno seguro, relajado y acogedor para nuestros residentes, promoviendo el bienestar y el desarrollo integral.</p>
                    <h3>Visión:</h3>
                    <p>Convertirnos en un hogar para nuestros huéspedes con mucho amor y dedicación.</p>
                </div>
            </div>
            <div class="col-md-6 imagenEst">
                <img src="<?= media().'/tienda/img/residencias.png'; ?>" alt="">
            </div>
        </div>
    </div>
</section>
	<!-- ************************************************************** -->
    <!-- ************************* /Opiniones ************************* -->
    <!-- ************************************************************** --> 

<section class="staticData">

    <div class="espacio"></div>
    <h2 class="text-success">SERVICIOS</h2>
    <div class="line"></div>
    <div class="espacio"></div>
    <div class="espacio"></div>

    <div class="clearfix"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 imagenEst medic">
                <img src="<?= media().'/tienda/img/casahogardemamila.jpg'; ?>" alt="">
            </div>
            <div class="col-md-6">
                
                <div class="descripcion">
                    <ul>
                        <li><span>Servicio de enfermería 24 Hrs.</span></li>
                        <li><span>Evaluación médica geriátrica semanal.</span></li>
                        <li><span>Evaluación psicológica.</span></li>
                        <li><span>Evaluación odontológica.</span></li>
                        <li><span>Pedicure y manicure.</span></li>
                        <li><span>Corte de cabello mensual.</span></li>
                        <li><span>Terapia física.</span></li>
                        <li><span>Alimentación completa y balanceada, evaluado por nutricionistas.</span></li>
                        <li><span>Recreación, paseos y juegos didácticos.</span></li>
                        <li><span>Sala de lectura.</span></li>
                        <li><span>Lavandería, Agregar las imágenes de la sale de lectura, donde se ve el monitor.</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="espacio"></div>

    <section class="staticData">
        <!-- titulo --> 
        <div class="espacio"></div>
        <h2 class="text-success">PROCESO DE INGRESO</h2>
        <div class="line-skyblue"></div>
        <div class="espacio"></div>
        <!-- /titulo -->
        <div class="clearfix"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 proceso">
                    <div class="procesoContainer">
                        <img src="<?= media().'/tienda/img/proc1.png'; ?>" alt="">
                        <div class="espacio-20"></div>
                        <h4>PASOS PREVIOS</h4>
                    </div>
                </div>
                <div class="col-md-3 proceso">
                    <div class="procesoContainer">
                        <img src="<?= media().'/tienda/img/proc2.png'; ?>" alt="">
                        <div class="espacio-20"></div>
                        <h4>FIRMA DEL<br>CONTRATO</h4>
                    </div>
                </div>
                <div class="col-md-3 proceso">
                    <div class="procesoContainer">
                        <img src="<?= media().'/tienda/img/proc3.png'; ?>" alt="">
                        <div class="espacio-20"></div>
                        <h4>ACONDICIONAMIENTO<br>DE LA HABITACIÓN</h4>
                    </div>
                </div>
                <div class="col-md-3 proceso">
                    <div class="procesoContainer">
                        <img src="<?= media().'/tienda/img/proc4.png'; ?>" alt="">
                        <div class="espacio-20"></div>
                        <h4>INGRESO DEL<br> ADULTO MAYOR</h4>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <section class="staticData" id="pasosprevios">
        <!-- titulo --> 
        <div class="espacio"></div>
        <h2 class="text-success">PASOS PREVIOS</h2>
        <div class="line-skyblue"></div>
        <div class="espacio"></div>
        <!-- /titulo -->
        <p class="text-center">Usted puede elegir la habitación idónea.</p>
        <p class="text-center">Un médico especialista evaluara al adulto mayor para verificar el estado actual del paciente.</p>
        <p class="text-center">Luego del dictamen del medico especialista, se procede a programar la fecha de inserción del paciente.</p>
    </section>

    <section class="staticData" id="pasosprevios">
        <div class="espacio"></div>
        <h2 class="text-success">GALERIA</h2>
        <div class="line-skyblue"></div>
        <div class="espacio"></div>
    </section>

    <body class="bg-light">
        <div class="container">
        <div class="row">
                <div class="col-lg-6 mb-3">
                    <a href="<?= media().'/tienda/imgs/001.jpg'; ?>" data-lightbox="mygallery" data-title="Caption Here">
                    <img src="<?= media().'/tienda/imgs/001.jpg'; ?>" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="col-lg-6 mb-3">
                    <a href="<?= media().'/tienda/imgs/002.jpg'; ?>" data-lightbox="mygallery" data-title="Caption Here">
                    <img src="<?= media().'/tienda/imgs/002.jpg'; ?>" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="col-lg-8 mb-3">
                    <a href="<?= media().'/tienda/imgs/003.jpg'; ?>" data-lightbox="mygallery" data-title="Caption Here">
                    <img src="<?= media().'/tienda/imgs/003.jpg'; ?>" alt="" class="img-fluid">
                    </a>
                </div>
            <div class="col-lg-4 mb-0">
                <div class="col-lg-12 mb-3">
                    <a href="<?= media().'/tienda/imgs/004.jpg'; ?>" data-lightbox="mygallery" data-title="Caption Here">
                    <img src="<?= media().'/tienda/imgs/004.jpg'; ?>" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="col-lg-12 mb-3">
                    <a href="<?= media().'/tienda/imgs/005.jpg'; ?>" data-lightbox="mygallery" data-title="Caption Here">
                    <img src="<?= media().'/tienda/imgs/005.jpg'; ?>" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="col-lg-6 mb-3">
                    <a href="<?= media().'/tienda/imgs/006.jpg'; ?>" data-lightbox="mygallery" data-title="Caption Here">
                    <img src="<?= media().'/tienda/imgs/006.jpg'; ?>" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="col-lg-6 mb-3">
                    <a href="<?= media().'/tienda/imgs/007.jpg'; ?>" data-lightbox="mygallery" data-title="Caption Here">
                    <img src="<?= media().'/tienda/imgs/007.jpg'; ?>" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="col-lg-4 mb-0">
                <div class="col-lg-12 mb-3">
                    <a href="<?= media().'/tienda/imgs/008.jpg'; ?>" data-lightbox="mygallery" data-title="Caption Here">
                    <img src="<?= media().'/tienda/imgs/008.jpg'; ?>" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="col-lg-12 mb-3">
                    <a href="<?= media().'/tienda/imgs/009.jpg'; ?>" data-lightbox="mygallery" data-title="Caption Here">
                    <img src="<?= media().'/tienda/imgs/009.jpg'; ?>" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="col-lg-8 mb-3">
                    <a href="<?= media().'/tienda/imgs/010.jpg'; ?>" data-lightbox="mygallery" data-title="Caption Here">
                    <img src="<?= media().'/tienda/imgs/010.jpg'; ?>" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="col-lg-6 mb-3">
                    <a href="<?= media().'/tienda/imgs/011.jpg'; ?>" data-lightbox="mygallery" data-title="Caption Here">
                    <img src="<?= media().'/tienda/imgs/011.jpg'; ?>" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="col-lg-6 mb-3">
                    <a href="<?= media().'/tienda/imgs/012.jpg'; ?>" data-lightbox="mygallery" data-title="Caption Here">
                    <img src="<?= media().'/tienda/imgs/012.jpg'; ?>" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
        </div>
    </body>

    <!-- ************************************************************** -->
    <!-- ************************* /Proceso de ingreso ************************* -->
    <!-- ************************************************************** --> 


<div class="espacio"></div>

 <?php

footerTienda($data); 

?>