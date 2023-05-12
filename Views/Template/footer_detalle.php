<script>
const base_url = "<?= base_url(); ?>";
const celular = "<?= CELULAR1 ?>";
</script>
<footer>
    <div class="espacio"></div>
	<div class="contenedor1">
		<div class="box1">
		
        <h3><?= NOMBRE_EMPRESA ?></h3>
      <!--   <ul class="links">
			<li><a href="<?= base_url(); ?>/nacionales">Vivienda</a></li>

        </ul> -->
		<a href="<?= base_url(); ?>"><img src="<?= media(); ?>/tienda/img/logo.png"  alt="<?= NOMBRE_EMPRESA ?>" title="<?= NOMBRE_EMPRESA ?>"></a>
		</div>
		<div class="box1">
			<h3><?= KEYWORD ?></h3>
			<ul class="links">
			<li><a href="<?= base_url(); ?>/nosotros">Nosotros</a></li>
			<li><a href="<?= base_url(); ?>/servicios">Servicios</a></li>
			
            <li><a href="<?= base_url(); ?>/contacto">Contacto</a></li>
			</ul>
		</div>
		<div class="box1">
			<h3>Contacto</h3>
			<ul class="linksCont">
				 
				<li><a target="_blank" href="https://api.whatsapp.com/send?phone=51<?= CELULAR1 ?>&text=Hola%20<?= NOMBRE_EMPRESA ?>,%20deseo%20mas%20informaci%C3%B3n%20mi%20nombre%20es:"> +51 <?= CELULAR1 ?></a></li>
				<li><a target="_blank" href="https://api.whatsapp.com/send?phone=51<?= CELULAR2 ?>&text=Hola%20<?= NOMBRE_EMPRESA ?>,%20deseo%20mas%20informaci%C3%B3n%20mi%20nombre%20es:"> +51 <?= CELULAR2 ?></a></li>
				<li><a href="mailto:<?= EMAIL ?>"> <?= EMAIL ?></a></li>
			 
			
			 
			</ul>
		</div>
		<div class="box1">
			<h3>Redes sociales</h3>
			<ul class="linksocial">
				<li><a target="_blank" href="https://facebook.com"><i class="fa fa-facebook " aria-hidden="true"></i></a></li>
				<li><a target="_blank" href="https://instagram.com"><i class="fa fa-instagram " aria-hidden="true"></i></a></li>
				<li><a target="_blank" href="https://linkedin.com"><i class="fa fa-linkedin " aria-hidden="true"></i></a></li>
				<li><a target="_blank" href="https://tiktok.com"><img src="img/logos_tiktok-icon.png" alt=""></a></li>
				<li><a target="_blank" href="https://twitter.com"><i class="fa fa-twitter " aria-hidden="true"></i></a></li>
				<li><a target="_blank" href="https://youtube.com"><i class="fa fa-youtube " aria-hidden="true"></i></a></li>
				
			</ul>
		</div>
	</div>
	<div class="contenedor2">
		<div class="compa"> <span><?= NOMBRE_EMPRESA ?>  © | All rights reserved 2023</span></div>
		<div class="copyr"> <a href="https://frsystem.com.pe">Powered By FR SYSTEM S.A.C.</a></div>


	</div>
</footer>


</div>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="lightbox.min.css">

<script src="<?= media(); ?>/tienda/js/lightbox-plus-jquery.min.js"></script>
<script src="<?= media(); ?>/tienda/js/jquery.min.1.9.1.js"></script>


<script src="<?= media(); ?>/tienda/js/jquery-3.3.1.min.js"></script>
<script src="<?= media(); ?>/tienda/js/jquery.min.js"></script>

<script src="<?= media(); ?>/tienda/js/general.js"></script>
<script src="<?= media(); ?>/tienda/js/script.js"></script>

<script src="<?= media(); ?>/tienda/js/bootstrap.min.js"></script>
<script src="<?= media(); ?>/tienda/js/validacionFormulario.js"></script>
<script src="<?= media(); ?>/tienda/js/<?= $data['page_functions_js']; ?>"></script>
</body>
</html>