function openModal(){
    
    document.querySelector('#idcategoriados').value ="";
    document.querySelector('.modal-header').classList.replace("headerUpdate", "headerRegister");
    document.querySelector('#btnActionForm').classList.replace("btn-info", "btn-primary");
    document.querySelector('#btnText').innerHTML ="Guardar";
    document.querySelector('#titleModal').innerHTML = "Nueva Categoria";
    document.querySelector("#formCategoriados").reset();

    $('#modalFormCategoriados').modal('show');
}

window.addEventListener('load', function() {

}, false);

var tableCategoriados;

document.addEventListener('DOMContentLoaded', function(){

	tableCategoriados = $('#tableCategoriados').dataTable( {
		"aProcessing":true,
		"aServerSide":true,
        "language": {
        	"url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
        },
        "ajax":{
            "url": " "+base_url+"/Categoriados/getCategoriados",
            "dataSrc":""
        },
        "columns":[
            {"data":"idcategoriados"},
            {"data":"nombrecategoriados"},
            {"data":"nombrecategoriauno"},
            {"data":"status"},
            {"data":"options"}
        ],
        "resonsieve":"true",
        "bDestroy": true,
        "iDisplayLength": 25,
        "order":[[0,"desc"]]  
    });

    //NUEVO ROL
     var formCategoriados = document.querySelector("#formCategoriados");
     formCategoriados.onsubmit = function(e) {
        e.preventDefault();

        var intIdCategoriados = document.querySelector('#idcategoriados').value;
        var strNombre = document.querySelector('#txtNombre').value;
        var intCategoriaunoid= document.querySelector('#listCategoriaunoid').value;
        var intStatus = document.querySelector('#listStatus').value;        
        if(strNombre == '' || intStatus == ''|| intCategoriaunoid == '')
        {
            swal("Atención", "Todos los campos son obligatorios." , "error");
            return false;
        }
        var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
        var ajaxUrl = base_url+'/Categoriados/setCategoriados'; 
        var formData = new FormData(formCategoriados);
 
        request.open("POST",ajaxUrl,true);

        request.send(formData);
        request.onreadystatechange = function(){
        
           if(request.readyState == 4 && request.status == 200){

                var objData = JSON.parse(request.responseText);
                if(objData.status)
                {
                    $('#modalFormCategoriados').modal("hide");
                    formCategoriados.reset();
                    swal("Roles de usuario", objData.msg ,"success");
                    tableCategoriados.api().ajax.reload(function(){ 
                        /* fntEditRol();
                        fntDelRol();
                        fntPermisos(); */
                    });
                }else{
                    swal("Error", objData.msg , "error");
                }              
            } 
        }

        
    } 

});


window.addEventListener('load', function() {
    fntCategoriaunoCategoriados();
    //no se utiliza   fntViewUsuario(); fntEditUsuario(); fntDelUsuario();
}, false);

function fntCategoriaunoCategoriados(){
    var ajaxUrl = base_url+'/Categoriauno/getSelectCategoriaunos';
    var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
    request.open("GET",ajaxUrl,true);
    request.send();

    request.onreadystatechange = function(){
        if(request.readyState == 4 && request.status == 200){
            document.querySelector('#listCategoriaunoid').innerHTML = request.responseText;
          //  document.querySelector('#listCategoriaunoid').value = 1;
            $('#listCategoriaunoid').selectpicker('render');
        }
    }
    
}

function fntEditCategoriadosOnly(idcategoriados){

            document.querySelector('#titleModal').innerHTML ="Actualizar Categoria";
            document.querySelector('.modal-header').classList.replace("headerRegister", "headerUpdate");
            document.querySelector('#btnActionForm').classList.replace("btn-primary", "btn-info");
            document.querySelector('#btnText').innerHTML ="Actualizar";

            var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            var ajaxUrl  = base_url+'/Categoriados/getCategoriados_singular/'+idcategoriados;
            request.open("GET",ajaxUrl ,true);
            request.send();

            request.onreadystatechange = function(){
                if(request.readyState == 4 && request.status == 200){
           
                    var objData = JSON.parse(request.responseText);
                    if(objData.status)
                    {
                        document.querySelector("#idcategoriados").value = objData.data.idcategoriados;
                        document.querySelector("#txtNombre").value = objData.data.nombrecategoriados;
                        document.querySelector("#listCategoriaunoid").value =objData.data.categoriaunoid;
                        $('#listCategoriaunoid').selectpicker('render');
                        if(objData.data.status == 1)
                        {
                            var optionSelect = '<option value="1" selected class="notBlock">Activo</option>';
                        }else{
                            var optionSelect = '<option value="2" selected class="notBlock">Inactivo</option>';
                        }
                        var htmlSelect = `${optionSelect}
                            <option value="1">Activo</option><option value="2">Inactivo</option>
                                        `;
                        document.querySelector("#listStatus").innerHTML = htmlSelect;
                        $('#modalFormCategoriados').modal('show');
                    }else{
                        swal("Error", objData.msg , "error");
                    }
                }
            }
            
}


$('#tableCategoriados').DataTable();

function fntDelCategoriados(idcategoriados){
  
            var idcategoriados = idcategoriados;

            swal({
                title: "Eliminar SubCategoría",
                text: "¿Realmente quiere eliminar la categoría?",
                type: "warning",
                showCancelButton: true,
                confirmButtonText: "Si, eliminar!",
                cancelButtonText: "No, cancelar!",
                closeOnConfirm: false,
                closeOnCancel: true
            }, function(isConfirm) {
                
                if (isConfirm) 
                {
                    var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                    var ajaxUrl = base_url+'/Categoriados/delCategoriados/';
                    var strData = "idcategoriados="+idcategoriados;
                    request.open("POST",ajaxUrl,true);
                    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    request.send(strData);
                    request.onreadystatechange = function(){

                        if(request.readyState == 4 && request.status == 200){
                            var objData = JSON.parse(request.responseText);
                            if(objData.status)
                            {
                                swal("Eliminar!", objData.msg , "success");
                                tableCategoriados.api().ajax.reload(function(){

                                });
                            }else{
                                swal("Atención!", objData.msg , "error");
                            }
                        }
                    }
                }

            });


}
