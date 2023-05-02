<!-- Modal -->
<div class="modal fade" id="modalFormCategoriatres" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header headerRegister">
        <h5 class="modal-title" id="titleModal">Nueva Subcategoría</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="tile">
            
            <div class="tile-body">
              <form id="formCategoriatres" name="formCategoriatres">
                <input type="hidden" id="idcategoriatres" name="idcategoriatres" value="">
                <div class="form-group">
                  <label class="control-label">Nombre</label>
                  <input class="form-control" type="text" id="txtNombre" name="txtNombre" placeholder="Nombre de la subcategoría">
                </div>
                <div class="form-group">
                    <label for="listCategoriadosid">Categoría</label>
                    <select class="form-control" data-live-search="true" id="listCategoriadosid" name="listCategoriadosid" required >
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleSelect1">Estado</label>
                    <select class="form-control" id="listStatus" name="listStatus">
                      <option value="1">Activo</option>
                      <option value="2">Inactivo</option>
                    </select>
                  </div>
                </div>
                <div class="tile-footer">
                    <button id="btnActionForm" class="btn btn-primary" type="submit">
                      <i class="fa fa-fw fa-lg fa-check-circle"></i><span id="btnText">Guardar</span></button>&nbsp;&nbsp;&nbsp;
                      <!-- data-dismiss="modal para cancelar cancelar -->
                      <a class="btn btn-secondary" href="#" data-dismiss="modal"><i class="fa fa-fw fa-lg fa-times-circle"></i>
                      Cancelar
                      </a>
                </div>
              </form>
            </div>
            
          </div>
      </div>
    </div>
  </div>
</div>