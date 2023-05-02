<?php

headerDetalle($data); 


?>

    <!-- ************************************************************** -->
    <!-- *************************  portada  ************************* -->
    <!-- ************************************************************** -->
    <section class="banner">
    <div class="capa">
        <h1 class="bannerTit">Contacto</h1>
    </div>
    
</section>
    <!-- ************************************************************** -->
    <!-- *************************  /portada  ************************* -->
    <!-- ************************************************************** -->

        <!-- ************************************************************** -->
    <!-- *************************  informacion statica  ************************* -->
    <!-- ************************************************************** -->    
<section class="staticData">
    <!-- titulo -->
    <h2 class="text-success">CONTACTO</h2>
    <!-- /titulo -->
    <div class="clearfix"></div>
    <div class="espacio"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="conProd">
                <form id="fcontacto" method="post">
                    
                        <div class="nombre">
                            <label for="Nombre">Nombre <span class="required">*</span></label>
                             <input  name="nombres" for="Nombre" type="text" placeholder="Nombre" required>
                        </div>
                        <div class="nombre">
                            <label for="Nombre">Email <span class="required">*</span></label> 
                            <input name="email" for="Nombre" type="email" placeholder="Email" required>
                        </div>
                        <div class="nombre">
                            <label for="Nombre">Celular <span class="required">*</span></label> 
                            <input name="telefono_movil" for="Nombre" type="text" placeholder="Celular" required>
                        </div>
                        <div class="nombre">
                            <label for="">Mensaje <span class="required">*</span></label>
                            <textarea  name="mensaje" id="" cols="10" rows="5" placeholder="Mensaje"></textarea>
                        </div>
                        
                        <div> <button type="button" class="btn btn-success enviar">ENVIAR CONSULTA</button>       </div>
                     
                  </form>
                </div>
            </div>
            <div class="col-md-6">
                
                <div class="descripciond">
                    <h3>Redes sociales</h3>
                    <ul class="linksocialc">
                        <li><a target="_blank" href="https://facebook.com"><i class="fa fa-facebook " aria-hidden="true"></i></a></li>
                        <li><a target="_blank" href="https://instagram.com"><i class="fa fa-instagram " aria-hidden="true"></i></a></li>
                        <li><a target="_blank" href="https://linkedin.com"><i class="fa fa-linkedin " aria-hidden="true"></i></a></li>
                        <li><a target="_blank" href="https://tiktok.com"><img src="img/logos_tiktok-icon.png" alt=""></a></li>
                        <li><a target="_blank" href="https://twitter.com"><i class="fa fa-twitter " aria-hidden="true"></i></a></li>
                        <li><a target="_blank" href="https://youtube.com"><i class="fa fa-youtube " aria-hidden="true"></i></a></li>
                        
                    </ul>
                   <!--  <ul class="dats">
                      <li class="c-tel"><strong>Phone</strong><br><a href="tel:<?= PAIS.CODIGO.CELULAR1 ?>"><?= PAIS.' '.CODIGO.' '. CELULAR1 ?></a>  
                      </li>
                      <li class="c-mail">Email<br><a href="mailto:<?= EMAIL ?>"><?= EMAIL ?></a></li>
                    </ul> -->
                   
                </div>
            </div>

        </div>
    </div>
</section>


    <!-- ************************************************************** -->
    <!-- *************************  /informacion statica  ************************* -->
    <!-- ************************************************************** -->    

    
</div>

<div class="divisor"></div>

<?php

footerDetalle($data); 

?>            