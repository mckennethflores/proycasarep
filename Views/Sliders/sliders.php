<?php
 header_Admin($data);

//$fotoActual =  $data['imagenes'];
//dep($fotoActual);
/* $fotoActualDos = $fotoActual[0]['imagen']; */
/*   $fotoActual = $data['infoPage']['portada'];
  $fotoRemove = 0;
  $imgPortada = $fotoActual != "" ? '<img id="img" src="'.media()."/images/uploads/".$fotoActual.'">' : ""; */

 getModal('modalSliders', $data);
 
 ?>
    <main class="app-content">
      <div class="app-title">
        <div>
            <h1><i class="fas fa-user-tag"></i> <?= $data['page_title']; ?>
                <button class="btn btn-primary" type="button" onclick="openModal();"> <i class="fas fa-plus-circle"></i> Nuevo</button>
            </h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="<?= base_url(); ?>/sliders"><?= $data['page_title'] ?></a></li>
        </ul>
      </div>
      <div class="row">
            <div class="col-md-12">
              <div class="tile">
                <div class="tile-body">
                  <div class="table-responsive">
                    <table class="table table-hover table-bordered" id="tableSliders">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Nombre</th> 
                          <th>Titulo</th>
                          <th>Imagen</th>
                          <th>Boton</th>
                          <th>Estatus</th>
                          <th>Acciones</th>

                        </tr>
                      </thead>
                      <tbody>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </main>
    <?= footer_Admin($data); ?>