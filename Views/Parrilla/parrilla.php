<?php

headerDetalle($data); 
$arrProducto = $data['producto'];
$arrImg = $arrProducto['images'];

?>
<div class="container">
    <ul class="breadcrumb">
        <li><a href="<?= base_url(); ?>">Inicio</a></li>
        <li class="active"><strong> <?= $arrProducto['nombre'] ?> </strong></li>
    </ul>
 <br/>
  <div class="container">

  </div>
  
	<div class="row">      
		<div class="col-md-12">
            <div class="col-sm-5 col-md-5 prod_image">			  
		        <div class="flex-items"> 
                    <?php
                        if(count($arrImg) > 0 ){
                            $portada =$arrImg[0]['url_image'];
                        }else{
                            $portada = media().'/images/uploads/product.png';
                        }
                    ?>
					<a href="<?= $portada ?>?w=700" data-lightbox="<?= $arrProducto['nombre'] ?>" data-title="<?= $arrProducto['nombre'] ?>">
						<img class="img-fluid"  width="100%" src="<?= $portada ?>?w=400" alt="<?= $arrProducto['nombre'] ?>" title="<?= $arrProducto['nombre'] ?>">
					</a>
				</div>									 						
			</div>
			<div class="col-md-7">
				<div class="caption">
				    <div class="prod_detalle"> 
                        <div class="text-success prod_nom">
							<h5><strong><?= $arrProducto['nombre'] ?></strong></h5>
                            <p> <?= $arrProducto['descripcion'] ?></p>
                            <span>$3.5</span>
						</div>
					<!-- 	<div class="prod_detalle"> 
							<a href="#" class="btn btn-warning" role="button">Enviar una Consulta!</a>
			            </div> -->
                        <br>
                        <a id="divWhatsapp" target="_blank" href="" class="btn btn-success"  ><i class="fa fa-whatsapp" aria-hidden="true"></i>  Consultar por Whatsapp!</a>
                        <br><br>
                        <a href="#" class="btn btn-success">Buy Now</a>
					</div>
					<br>
                                <div class="prod_des">
                                            <p> <?= $arrProducto['descripcion'] ?></p>
                                </div>
							</div>											   
                        </div>
                    </div>
				</div>
	        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus cumque saepe voluptate facere, voluptas inventore quas dolor rem dolores iste laboriosam hic expedita sit atque nisi ipsam odio non corrupti!</p>
            </div>
        </div>
    </div>
<div class="divisor"></div>


<?php

footerDetalle($data); 

?>            