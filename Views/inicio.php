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
    <h2 class="text-plomo">BIENVENIDOS A CASA REPOSO SURCO</h2>
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
            <div class="espacio"></div>
            <div class="espacio"></div>
    </section>

        <section class="reviews">
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
                    <p>Somos Casa de Reposo SURCO, un lugar cálido y acogedor en el distrito de Surco. Nuestro objetivo es brindar un ambiente seguro y relajado para nuestros residentes. Ofrecemos una amplia variedad de comodidades, como sala, comedor, cocina, dormitorios, baños, jardín, biblioteca y un hermoso parque bien grande. Tenemos a su disposición enfermeros profesionales que se preocupan por el bienestar de nuestros residentes. Nuestra prioridad es ofrecer un entorno seguro y tranquilo para que nuestros residentes disfruten de la mejor calidad de vida.</p>
                    <h3>Misión:</h3>
                    <p> Brindar un entorno seguro, relajado y acogedor para nuestros residentes, promoviendo el bienestar y el desarrollo integral.</p>
                    <h3>Visión:</h3>
                    <p>Convertirnos en una institución reconocida por ofrecer el mejor cuidado de nuestros residentes. Ser una empresa líder en el sector de la asistencia a la tercera edad.</p>
                </div>
            </div>
            <div class="col-md-6">
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
            <div class="col-md-6">
                <img src="<?= media().'/tienda/img/servicios.png'; ?>" alt="">
            </div>
            <div class="col-md-6">
                
                <div class="descripcion">
                     <ul>
                        <li><span>Servicio de enfermería las 24 horas</span></li>
                        <li><span>Servicio de medicina:<br> Evaluación semanalmente</span></li>
                        <li><span>Alimentación: <br> Desayuno, almuerzo y cena</span></li>
                        <li><span>Terapia</span></li>
                        <li><span>Lavanderia</span></li>
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
        <p class="text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa, unde. Eligendi accusamus quam soluta deserunt quas voluptates, totam aliquid at, alias maxime mollitia. Vel quod, temporibus corrupti incidunt odit blanditiis.</p>
    </section>


    <!-- ************************************************************** -->
    <!-- ************************* /Proceso de ingreso ************************* -->
    <!-- ************************************************************** --> 


<div class="espacio"></div>

 <?php

footerTienda($data); 

?>