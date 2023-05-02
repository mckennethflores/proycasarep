<!-- Modal -->
<div class="modal fade" id="modalFormProductos" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-xl" >
    <div class="modal-content">
      <div class="modal-header headerRegister">
        <h5 class="modal-title" id="titleModal">Nuevo Paquete Turisticos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form id="formProductos" name="formProductos" class="form-horizontal">
            <div id="divLoading" >
          <div>
            <img src="<?= media(); ?>/images/loading.svg" alt="Loading">
          </div>
        </div>
              <input type="hidden" id="idProducto" name="idProducto" value="">
              <p class="text-primary">Los campos con asterisco (<span class="required">*</span>) son obligatorios.</p>
              <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                      <label class="control-label">Nombre  <span class="required">*</span></label>
                      <input class="form-control" id="txtNombre" name="txtNombre" type="text" required="">
                    </div>
                    <div class="form-group">
                      <label class="control-label">Descripción </label>
                      <textarea class="form-control" id="txtDescripcion" name="txtDescripcion" ></textarea>
                    </div>
                    <div class="form-group">
                            <label class="control-label">Resumen <span class="required">*</span></label>
                            <textarea class="form-control" id="txtResumen" name="txtResumen" ></textarea>
                    </div>
                    <div class="form-group ">
                            <label class="control-label">Caracteristica <span class="required">*</span></label>
                          <!--   <input class="form-control" id="txtCaracteristica" name="txtCaracteristica" type="text" value="Caracteristica" required=""> -->
                            <textarea class="form-control" id="txtCaracteristica" name="txtCaracteristica" ></textarea>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="form-group">
                        <label class="control-label">Código <span class="required">*</span></label>
                        <input class="form-control" id="txtCodigo" name="txtCodigo" type="text" placeholder="Código de barra" value="csasas" required="">
                        <br>
                        <div id="divBarCode" class="notblock textcenter">
                            <div id="printCode">
                                <svg id="barcode"></svg> 
                            </div>
                            <button class="btn btn-success btn-sm" type="button" onClick="fntPrintBarcode('#printCode')"><i class="fas fa-print"></i> Imprimir</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6 d-none">
                            <label class="control-label">Precio Dolares <span class="required">*</span></label>
                            <input class="form-control" id="txtPrecioDolares" name="txtPrecioDolares" type="text" value="1" required="">
                        </div>
                        <div class="form-group col-md-6 d-none">
                            <label class="control-label">Precio Dolares IGV <span class="required">*</span></label>
                            <input class="form-control" id="txtPrecioDolaresIgv" name="txtPrecioDolaresIgv" type="text" value="1" required="">
                        </div>
                        <div class="form-group col-md-6 d-none">
                            <label class="control-label">Precio Soles <span class="required">*</span></label>
                            <input class="form-control" id="txtPrecioSoles" name="txtPrecioSoles" type="text" value="1" required="">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label">Precio<span class="required">*</span></label>
                            <input class="form-control" id="txtPrecioSolesIgv" placeholder="S/" name="txtPrecioSolesIgv" type="text" value="1" required="">
                        </div>
                        <div class="form-group col-md-6 d-none">
                            <label class="control-label">Stock <span class="required">*</span></label>
                            <input class="form-control" id="txtStock" name="txtStock" type="text" required="" value="100">
                        </div>
                        <div class="form-group col-md-6 d-none">
                            <label class="control-label">Modelo <span class="required">*</span></label>
                            <input class="form-control" id="txtModelo" name="txtModelo" type="text" required="" value="1">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="listCategoriatres">Categoría <span class="required">*</span></label>
                            <select class="form-control" data-live-search="true" id="listCategoriatres" name="listCategoriatres" required=""></select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="listStatus">Estado <span class="required">*</span></label>
                            <select class="form-control selectpicker" id="listStatus" name="listStatus" required="">
                              <option value="1">Activo</option>
                              <option value="2">Inactivo</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6 d-none">
                            <label for="listMarca">Marca <span class="required">*</span></label>
                            <select class="form-control" data-live-search="true" id="listMarcas" name="listMarcas" required=""></select>
                        </div>
                        <div class="form-group col-md-6 d-none">
                            <label class="control-label">Datos dscto <span class="required">*</span></label>
                            <input class="form-control" id="txtDatosdscto" name="txtDatosdscto" type="text" required="" value="1">
                        </div>
                        <div class="form-group col-md-6 d-none">
                            <label for="listCaracteristicas d-none">Caracteristica <span class="required">*</span></label>
                            <select class="form-control" data-live-search="true" id="listCaracteristicas" name="listCaracteristicas" required=""></select>
                        </div>
                        <div class="form-group col-md-6 d-none">
                            <label class="control-label">Porcentaje dscto <span class="required">*</span></label>
                            <input class="form-control" id="txtPorcentajedscto" name="txtPorcentajedscto" type="text" value="1" required="">
                        </div>
                        <div class="form-group col-md-6 d-none">
                            <label class="control-label">Precio dscto <span class="required">*</span></label>
                            <input class="form-control" id="txtPreciodscto" name="txtPreciodscto" type="text" value="1" required="">
                        </div>
                        
                        <div class="form-group col-md-6 ">
                            <label class="control-label">Lugar <span class="required">*</span></label>
                            <input class="form-control" id="txtLugar" name="txtLugar" type="text"  placeholder="Lugar" required="">
                        </div>
                    </div>

                    <div class="row">
                       <div class="form-group col-md-6">
                           <button id="btnActionForm" class="btn btn-primary btn-lg btn-block" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i><span id="btnText">Guardar</span></button>
                       </div> 
                       <div class="form-group col-md-6">
                           <button class="btn btn-danger btn-lg btn-block" type="button" data-dismiss="modal"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cerrar</button>
                       </div> 
                    </div>  
                </div>
              </div>
              
              <div class="tile-footer">
                 <div class="form-group col-md-12">
                     <div id="containerGallery">
                         <span>Agregar foto (500 x 500)</span>
                         <button class="btnAddImage btn btn-info btn-sm" type="button">
                             <i class="fas fa-plus"></i>
                         </button>
                     </div>
                     <hr>
                     <div id="containerImages">
                         <!-- <div id="div24">
                             <div class="prevImage">
                                 <img src="<?= media(); ?>/images/uploads/producto1.jpg">
                             </div>
                             <input type="file" name="foto" id="img1" class="inputUploadfile">
                             <label for="img1" class="btnUploadfile"><i class="fas fa-upload "></i></label>
                             <button class="btnDeleteImage" type="button" onclick="fntDelItem('div24')"><i class="fas fa-trash-alt"></i></button>
                         </div>
                         <div id="div24">
                             <div class="prevImage">
                                 <img class="loading" src="<?= media(); ?>/images/loading.svg">
                             </div>
                             <input type="file" name="foto" id="img1" class="inputUploadfile">
                             <label for="img1" class="btnUploadfile"><i class="fas fa-upload "></i></label>
                             <button class="btnDeleteImage" type="button" onclick="fntDelItem('div24')"><i class="fas fa-trash-alt"></i></button>
                         </div> -->
                        
                     </div>
                 </div>
                                
              </div>
            </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalViewProducto" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-xl" >
    <div class="modal-content">
      <div class="modal-header header-primary">
        <h5 class="modal-title" id="titleModal">Datos del Producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-bordered">
          <tbody>
            <tr>
              <td>Codigo:</td>
              <td id="celCodigo"></td>
            </tr>
            <tr>
              <td>Nombres:</td>
              <td id="celNombre"></td>
            </tr>
            <tr>
              <td>Precio:</td>
              <td id="celPrecioDolares"></td>
            </tr>
            <tr>
              <td>Stock:</td>
              <td id="celStock"></td>
            </tr>
            <tr>
              <td>Categoría:</td>
              <td id="celCategoriaTres"></td>
            </tr>
            <tr>
              <td>Status:</td>
              <td id="celStatus"></td>
            </tr>
            <tr>
              <td>Descripción:</td>
              <td id="celDescripcion"></td>
            </tr>
            <tr>
              <td>Resumen:</td>
              <td id="celResumen"></td>
            </tr>
            <tr>
              <td>Fotos de referencia:</td>
              <td id="celFotos">
              </td>
            </tr>
            <tr>
              <td>Caracteristica</td>
              <td id="celCaracteristica">
              </td>
            </tr>
            <tr>
              <td>Lugar</td>
              <td id="celLugar">
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

