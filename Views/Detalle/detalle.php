<?php
 headerTienda($data);
 ?>
    
    <body>

    <div id="sinFondo">
        <!-- Cabecera -->
        <div class="contenedor fondo">
            <div class="menu-btn">
               <!--  <i class="fas fa-bars fa-2x"></i> -->
                <i class="fa fa-bars fa-2x" aria-hidden="true"></i>

            </div>
            <nav class="nav-main">
                <a href="<?= base_url(); ?>/"><img src="<?= media(); ?>/tienda/files/img/logo2.png" alt="Mega Equipamiento - LOGO " class="nav-brand"></a>

            
                        <form class="search" action="#">
                            <input type="text" placeholder="Buscar..." name="search2">
                            <button type="submit"><i class="bi bi-search"></i></button>
                        </form>

                
                <div class="nav-menu-right">

                    <ul class="navigation">
                        <li class="servicio"><a href="#">Servicio</a></li>
                        <li class="acceso"><a href="#">Acceso</a></li>
                        <li class="carrito"></li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- /Cabecera -->
        <!-- Menu -->
        <ul id="menunav">
            <li id="divMenuNav1" ><a href="#">Laboratorio <i class="bi bi-caret-down-fill"></i></a></li>
            <li id="divMenuNav2"><a href="#">Industria <i class="bi bi-caret-down-fill"></i></a></li>
            <li id="divMenuNav3"><a href="#">Medico <i class="bi bi-caret-down-fill"></i></a></li>
            <li id="divMenuNav4"><a href="#">Dental <i class="bi bi-caret-down-fill"></i></a></li>
        </ul>
        <div id="closedPanel" class="">X</div>
        <section id="panel" class="mt-0 pt-0">
            
            <div class="child-menu">
                <div class="tituloabc">A</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
            </div>
        </section>
        <div id="closedPanel2" class="">X</div>
        <section id="panel2" class="mt-0 pt-0 ">
            
            <div class="child-menu">
                <div class="tituloabc">A</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">B</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">C</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">D</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">E</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
            </div>
            <div class="child-menu">
                <div class="tituloabc">F</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">G</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">H</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">I</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">J</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
            </div>
            <div class="child-menu">
                <div class="tituloabc">K</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">L</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">M</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">N</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">O</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
            </div>
            <div class="child-menu">
                <div class="tituloabc">P</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">Q</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">R</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">S</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">T</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
            </div>
    
        </section>
        <div id="closedPanel3" class="">X</div>
        <section id="panel3" class="mt-0 pt-0 ">
            
            <div class="child-menu">
                <div class="tituloabc">A</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">B</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">C</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">D</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">E</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
            </div>
            <div class="child-menu">
                <div class="tituloabc">F</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">G</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">H</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">I</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">J</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
            </div>
            <div class="child-menu">
                <div class="tituloabc">K</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">L</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">M</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">N</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">O</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
            </div>
            <div class="child-menu">
                <div class="tituloabc">P</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">Q</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">R</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">S</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">T</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
            </div>
    
        </section>
        <div id="closedPanel4" class="">X</div>
        <section id="panel4" class="mt-0 pt-0 ">
            
            <div class="child-menu">
                <div class="tituloabc">A</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">B</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">C</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">D</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">E</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
            </div>
            <div class="child-menu">
                <div class="tituloabc">F</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">G</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">H</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">I</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">J</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
            </div>
            <div class="child-menu">
                <div class="tituloabc">K</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">L</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">M</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">N</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">O</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
            </div>
            <div class="child-menu">
                <div class="tituloabc">P</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">Q</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">R</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">S</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">T</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
            </div>
    
        </section>
        <!-- /Menu -->
<!-- Menu responsive -->
<div id="menu_responsive">
    
</div>
<!-- /Menu responsive -->
        
    </div>

    <div class="container mt-2">
        <!-- Cabecera -->
        <div class="row">
            <div class="col-md-6">
                <!-- breadcrumb -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Inicio</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Producto</li>
                        </ol>
                    </nav>
                <!-- /breadcrumb -->
            </div>
            <div class="col-md-6 d-flex justify-content-end">
                <img class="compraSegura" src="<?= media(); ?>/tienda/<?= media(); ?>/tienda/files/img/brands.jpg" alt="Compra Segura">
            </div>
        </div>
        <!-- /Cabecera -->
        <div class="row">
            <div class="col-md-6">
                <div class="gallery">
                    <div class="gallery-container">

                        <div class="preview col" >
                            <div class="app-figure" id="zoom-fig" style="float:left; ">	 
                                <a id='Zoom-1' class='MagicZoom' title='Titulo' href='<?= media(); ?>/tienda/<?= media(); ?>/tienda/files/img/imagen2.jpg'><img class='tamanoImg'  src='<?= media(); ?>/tienda/files/img/imagen2.jpg?scale.height=400'></a>
                                <div class="selectors">
                                    <a style='width: 70px' data-zoom-id='Zoom-1' href='<?= media(); ?>/tienda/files/img/imagen2.jpg' data-image='img/libro1.jpg?scale.height=400'
                                    ><img style='width: 70px' srcset='<?= media(); ?>/tienda/files/img/imagen2.jpg?scale.width=112 2x' src='<?= media(); ?>/tienda/files/img/imagen2.jpg?scale.width=56'> </a>
                                    <a style='width: 70px' data-zoom-id='Zoom-1' href='<?= media(); ?>/tienda/files/imagen.jpg' data-image='<?= media(); ?>/tienda/files/img/libro1.jpg?scale.height=400'
                                    ><img  style='width: 70px' srcset='<?= media(); ?>/tienda/files/img/imagen2.jpg?scale.width=112 2x' src='<?= media(); ?>/tienda/files/imagen.jpg?scale.width=56'> </a>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="imagenpequena">
                            <img class="sample-image" src="img/imagen2.jpg" alt="">
                        </div>
                        <div class="image-thumb">
                            <div class="image-block"></div>
                            <div class="image-block"></div>
                            <div class="image-block"></div>
                            <div class="image-block"></div>
                        </div> -->
                    </div>
                    
                </div>
            </div>
            <div class="col-md-6">
                <div id="detail_product" class="detail-product">
                   
                      <h1>Luminómetro PCE-ATP 1-KIT</h1>
                      <h4>Referencia <span>PCE-ATP 1-KIT</span></h4>

                      <div class="precio">Precio (sin IGV) <span>S/ 8,543.36</span></div>  
                      <div class="precio">Precio (con IGV) <span>S/ 10,081.16</span></div>

                      <div class="cantidad">
                          <div class="label">Pedido</div>
                          <input type="text" value="1">
                      </div>
  
                      <button type="button" class="btn btn-success btn-sm">AÑADIR AL CARRO</button>
                      <button type="button" class="btn btn-primary btn-sm">CONSÚLTENOS</button>

                      <div class="delivery-text">
                        Plazo de entrega: 2-3 semanas
                      </div>
                </div>
            </div>
        </div>
        <div class="row">
           
       <!--  tablero de navegacion -->
       <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">DESCRIPCIÓN</button>
        <!--   <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</button>
          <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</button> -->
        </div>
      </nav>
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias harum, odit rerum tempore consectetur fuga impedit at perferendis assumenda, eum iste? Perferendis quis labore natus iusto rem omnis sequi vero!</p>
            <table class="table table-striped">
               
                <tbody>
                  <tr>
                    <th scope="row">Peso del Envio</th>
                    <td>0.30 KG</td>
                 
                  </tr>
                  <tr>
                    <th scope="row">El Peso del Articulo</th>
                    <td>0.04 Kg</td>
                   
                  </tr>
                  <tr>
                    <th scope="row">El Peso del Articulo</th>
                    <td>0.04 Kg</td>
                   
                  </tr>
                
                </tbody>
              </table>
        </div>
      <!--   <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div> -->
      </div>
       <!--  /tablero de navegacion -->
           
        </div>
        <div class="row">
            <div class="col-md-8">
                <!-- recomendations -->
                <div class="recomendations">
                    <div class="image"><img src="<?= media(); ?>/tienda/files/img/recomendations.jpg" alt=""></div>
                    <div class="description">
                        <div class="price-boton">
                            <div class="price">Precio con IGV</div>
                            <button class="btn btn-success" >Añadir al carro</button>
                        </div>
                        <div class="description_detail">
                            <h2 class="title">Certificado de calibración ISO (trazable) para Luminómetros</h2> 
                            <div class="description">
                            <p><b>Los certificado de calibración se emiten especialmente par el cliente y por tanto están exentos del derecho de devolucion</b></p>
                                
                            </div>
                            <h5 class="catalogue">Instrumento de medida / Medidos / Comprobador de higiene</h5>
                            <h6 class="maker">MIPEL, S.A.</h6>
                        </div>
                    </div> 
                </div>
                 <!-- /recomendations -->
                <!-- recomendations -->
                <div class="recomendations">
                    <div class="image"><img src="<?= media(); ?>/tienda/files/img/recomendations.jpg" alt=""></div>
                    <div class="description">
                        <div class="price-boton">
                            <div class="price">Precio con IGV</div>
                            <button class="btn btn-success" >Añadir al carro</button>
                        </div>
                        <div class="description_detail">
                            <h2 class="title">Certificado de calibración ISO (trazable) para Luminómetros</h2> 
                            <div class="description">
                            <p><b>Los certificado de calibración se emiten especialmente par el cliente y por tanto están exentos del derecho de devolucion</b></p>
                                
                            </div>
                            <h5 class="catalogue">Instrumento de medida / Medidos / Comprobador de higiene</h5>
                            <h6 class="maker">MIPEL, S.A.</h6>
                        </div>
                    </div> 
                </div>
                 <!-- /recomendations -->
                <!-- Descripción -->
              
                
            </div>
            <div class="col-md-4">
                <div id="your_selection">
                    <div class="title">Tu Selección</div>
                    <table class="table table-striped">
                        
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td class="title_product">Liebherr Pharmacy refrigerator compliant with DIN 58345 - MKUv 1613</td>
                            <td>S/ 1299.13</td>
                          </tr>
                          <tr>
                            <th scope="row">1</th>
                            <td class="title_product">Liebherr Pharmacy refrigerator compliant with DIN 58345 - MKUv 1613</td>
                            <td>S/ 1299.13</td>
                          </tr>
                          <tr>
                            <th scope="row">1</th>
                            <td class="title_product">Liebherr Pharmacy refrigerator compliant with DIN 58345 - MKUv 1613</td>
                            <td>S/ 1299.13</td>
                          </tr>
                          
                        </tbody>
                        <tfoot>
                            <tr>
                               
                                <td colspan="2">Total: </td>
                                
                                <td >S/ 1299.13</td>
                              </tr>
                        </tfoot>
                      </table>
                    
                   
                    <div class="addToBasket">
                        <input type="text" name="" value="1" id="">
                         <button class="btn btn-success">Agregar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
      
     

            <div class="clearfix"></div>



    <!-- Accesorios -->
        <section class="accesorios contenedor products">
                <div class="title"><span>Balanzas y equipos de laboratorio</span></div>
                <div class="clearfix"></div>
                <div class="product-contenedor">
                
                <div class="product-item">
                    <img src="<?= media(); ?>/tienda/files/img/brand/brand.png" alt="">
                    <div class="description">
                        <div class="direction-product">
                            <h3>BALANZA DE LABORATORIO /
                                MICRO / DIGITAL / CON INDICADOR
                                SEPARADO</h3>
                        </div>
                        <div class="price-product">S/ 799.90</div>
                    </div>
                    <div class="product_text">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus fugit quam distinctio
                            repellat quidem.</p>
                            
                            <a class="btn btn-warning" href="detalle.html">VER PRODUCTO</a>
                    </div>
                </div>
                <div class="product-item">
                    <img src="<?= media(); ?>/tienda/files/img/brand/brand.png" alt="">
                    <div class="description">
                        <div class="direction-product">
                            <h3>BALANZA DE LABORATORIO /
                                MICRO / DIGITAL / CON INDICADOR
                                SEPARADO</h3>
                        </div>
                        <div class="price-product">S/ 799.90</div>
                    </div>
                    <div class="product_text">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus fugit quam distinctio
                            repellat quidem.</p>
                            
                            <a class="btn btn-warning" href="detalle.html">VER PRODUCTO</a>
                    </div>
                </div>
                <div class="product-item">
                    <img src="<?= media(); ?>/tienda/files/img/brand/brand.png" alt="">
                    <div class="description">
                        <div class="direction-product">
                            <h3>BALANZA DE LABORATORIO /
                                MICRO / DIGITAL / CON INDICADOR
                                SEPARADO</h3>
                        </div>
                        <div class="price-product">S/ 799.90</div>
                    </div>
                    <div class="product_text">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus fugit quam distinctio
                            repellat quidem.</p>
                            
                            <a class="btn btn-warning" href="detalle.html">VER PRODUCTO</a>
                    </div>
                </div>
                <div class="product-item">
                    <img src="<?= media(); ?>/tienda/files/img/brand/brand.png" alt="">
                    <div class="description">
                        <div class="direction-product">
                            <h3>BALANZA DE LABORATORIO /
                                MICRO / DIGITAL / CON INDICADOR
                                SEPARADO</h3>
                        </div>
                        <div class="price-product">S/ 799.90</div>
                    </div>
                    <div class="product_text">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus fugit quam distinctio
                            repellat quidem.</p>
                            
                            <a class="btn btn-warning" href="detalle.html">VER PRODUCTO</a>
                    </div>
                </div>
        </section>
    <!-- /Accesorios -->

    <!-- Productos Relacionados -->
        <section class="accesorios contenedor products">
                <div class="title"><span>Productos Relacionados</span></div>
                <div class="clearfix"></div>
                <div class="product-contenedor">
                
                <div class="product-item">
                    <img src="<?= media(); ?>/tienda/files/img/brand/brand.png" alt="">
                    <div class="description">
                        <div class="direction-product">
                            <h3>BALANZA DE LABORATORIO /
                                MICRO / DIGITAL / CON INDICADOR
                                SEPARADO</h3>
                        </div>
                        <div class="price-product">S/ 799.90</div>
                    </div>
                    <div class="product_text">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus fugit quam distinctio
                            repellat quidem.</p>
                            
                            <a class="btn btn-warning" href="detalle.html">VER PRODUCTO</a>
                    </div>
                </div>
                <div class="product-item">
                    <img src="<?= media(); ?>/tienda/files/img/brand/brand.png" alt="">
                    <div class="description">
                        <div class="direction-product">
                            <h3>BALANZA DE LABORATORIO /
                                MICRO / DIGITAL / CON INDICADOR
                                SEPARADO</h3>
                        </div>
                        <div class="price-product">S/ 799.90</div>
                    </div>
                    <div class="product_text">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus fugit quam distinctio
                            repellat quidem.</p>
                            
                            <a class="btn btn-warning" href="detalle.html">VER PRODUCTO</a>
                    </div>
                </div>
                <div class="product-item">
                    <img src="<?= media(); ?>/tienda/files/img/brand/brand.png" alt="">
                    <div class="description">
                        <div class="direction-product">
                            <h3>BALANZA DE LABORATORIO /
                                MICRO / DIGITAL / CON INDICADOR
                                SEPARADO</h3>
                        </div>
                        <div class="price-product">S/ 799.90</div>
                    </div>
                    <div class="product_text">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus fugit quam distinctio
                            repellat quidem.</p>
                            
                            <a class="btn btn-warning" href="detalle.html">VER PRODUCTO</a>
                    </div>
                </div>
                <div class="product-item">
                    <img src="<?= media(); ?>/tienda/files/img/brand/brand.png" alt="">
                    <div class="description">
                        <div class="direction-product">
                            <h3>BALANZA DE LABORATORIO /
                                MICRO / DIGITAL / CON INDICADOR
                                SEPARADO</h3>
                        </div>
                        <div class="price-product">S/ 799.90</div>
                    </div>
                    <div class="product_text">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus fugit quam distinctio
                            repellat quidem.</p>
                            
                            <a class="btn btn-warning" href="detalle.html">VER PRODUCTO</a>
                    </div>
                </div>
                <div class="product-item">
                    <img src="<?= media(); ?>/tienda/files/img/brand/brand.png" alt="">
                    <div class="description">
                        <div class="direction-product">
                            <h3>BALANZA DE LABORATORIO /
                                MICRO / DIGITAL / CON INDICADOR
                                SEPARADO</h3>
                        </div>
                        <div class="price-product">S/ 799.90</div>
                    </div>
                    <div class="product_text">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus fugit quam distinctio
                            repellat quidem.</p>
                            
                            <a class="btn btn-warning" href="detalle.html">VER PRODUCTO</a>
                    </div>
                </div>
                <div class="product-item">
                    <img src="<?= media(); ?>/tienda/files/img/brand/brand.png" alt="">
                    <div class="description">
                        <div class="direction-product">
                            <h3>BALANZA DE LABORATORIO /
                                MICRO / DIGITAL / CON INDICADOR
                                SEPARADO</h3>
                        </div>
                        <div class="price-product">S/ 799.90</div>
                    </div>
                    <div class="product_text">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus fugit quam distinctio
                            repellat quidem.</p>
                            
                            <a class="btn btn-warning" href="detalle.html">VER PRODUCTO</a>
                    </div>
                </div>
        </section>
    <!-- /Productos Relacionados -->
            <!-- Carrusel -->
            <section class="marcas cleaner">
                <div class="container">
                    <div class="titH2 wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
                        <h2 class="text-center">MARCAS</h2>
                        <p></p>
                       <!--  <p>A lo largo de nuestra carrera hemos obtenido clientes agradecidos y satisfechos
                            por nuestros trabajos y desempeño, estás son algunas empresas:</p> -->
                    </div>
                    <div class="carrMarcas cleaner">
                        <div class="slider-area">
                            <div class="slider-active owl-carousel">
                                <div class="article wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
                                    <a title="Stark" href=""><img src="<?= media(); ?>/tienda/files/marcas/carrusel/1.jpg" title="Stark" alt="Stark"></a>
                                </div>
                                <div class="article wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
                                    <a title="Stark" href=""><img src="<?= media(); ?>/tienda/files/marcas/carrusel/2.png" title="Stark" alt="Stark"></a>
                                </div>
                                <div class="article wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
                                    <a title="Stark" href=""><img src="<?= media(); ?>/tienda/files/marcas/carrusel/3.png" title="Stark" alt="Stark"></a>
                                </div>
                                <div class="article wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
                                    <a title="Stark" href=""><img src="<?= media(); ?>/tienda/files/marcas/carrusel/4.png" title="Stark" alt="Stark"></a>
                                </div>
                                <div class="article wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
                                    <a title="Stark" href=""><img src="<?= media(); ?>/tienda/files/marcas/carrusel/5.png" title="Stark" alt="Stark"></a>
                                </div>
                                <div class="article wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
                                    <a title="Stark" href=""><img src="<?= media(); ?>/tienda/files/marcas/carrusel/6.png" title="Stark" alt="Stark"></a>
                                </div>
                                <div class="article wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
                                    <a title="Stark" href=""><img src="<?= media(); ?>/tienda/files/marcas/carrusel/7.png" title="Stark" alt="Stark"></a>
                                </div>
                            </div>
                        </div>
        
                        <div class="owl-controls">
                            <div class="owl-dots">
                                <div class="owl-dot"><span></span></div>
                                <div class="owl-dot"><span></span></div>
                                <div class="owl-dot"><span></span></div>
                                <div class="owl-dot "><span></span></div>
                                <div class="owl-dot"><span></span></div>
                                <div class="owl-dot"><span></span></div>
                                <div class="owl-dot"><span></span></div>
        
                            </div>
                        </div>
                    </div>
        
                </div>
            </section>
            <!-- /Carrusel -->
    <?= footerTienda($data); ?>