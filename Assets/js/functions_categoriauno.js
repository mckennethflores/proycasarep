function openModal(){
    
    document.querySelector('#idCategoriauno').value ="";
    document.querySelector('.modal-header').classList.replace("headerUpdate", "headerRegister");
    document.querySelector('#btnActionForm').classList.replace("btn-info", "btn-primary");
    document.querySelector('#btnText').innerHTML ="Guardar";
    document.querySelector('#titleModal').innerHTML = "Nuevo Modulo";
    document.querySelector("#formCategoriauno").reset();

    $('#modalFormCategoriauno').modal('show');
}

window.addEventListener('load', function() {

}, false);

var tableCategoriaunos;

document.addEventListener('DOMContentLoaded', function(){

	tableCategoriaunos = $('#tableCategoriaunos').dataTable( {
		"aProcessing":true,
		"aServerSide":true,
        "language": {
        	"url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
        },
        "ajax":{
            "url": " "+base_url+"/Categoriauno/getCategoriaunos",
            "dataSrc":""
        },
        "columns":[
            {"data":"idcategoriauno"},
            {"data":"nombre"},
            {"data":"status"},
            {"data":"options"}
        ],
        "resonsieve":"true",
        "bDestroy": true,
        "iDisplayLength": 25,
        "order":[[0,"desc"]]  
    });

    //NUEVO ROL
     var formCategoriauno = document.querySelector("#formCategoriauno");
     formCategoriauno.onsubmit = function(e) {
        e.preventDefault();

        var intIdRol = document.querySelector('#idCategoriauno').value;
        var strNombre = document.querySelector('#txtNombre').value;
        var intStatus = document.querySelector('#listStatus').value;        
        if(strNombre == '' || intStatus == '')
        {
            swal("Atención", "Todos los campos son obligatorios." , "error");
            return false;
        }
        var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
        var ajaxUrl = base_url+'/Categoriauno/setCategoriauno'; 
        var formData = new FormData(formCategoriauno);
 
        request.open("POST",ajaxUrl,true);

        request.send(formData);
        request.onreadystatechange = function(){
           /*  console.log(request); */
           if(request.readyState == 4 && request.status == 200){

           /* console.log(request.responseText);
return; */
                var objData = JSON.parse(request.responseText);
                if(objData.status)
                {
                    $('#modalFormCategoriauno').modal("hide");
                    formCategoriauno.reset();
                    swal("Roles de usuario", objData.msg ,"success");
                    tableCategoriaunos.api().ajax.reload(function(){ 
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

function fntEditCategoriauno(idcategoriauno){


            document.querySelector('#titleModal').innerHTML ="Actualizar Categoria";
            document.querySelector('.modal-header').classList.replace("headerRegister", "headerUpdate");
            document.querySelector('#btnActionForm').classList.replace("btn-primary", "btn-info");
            document.querySelector('#btnText').innerHTML ="Actualizar";

            var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            var ajaxUrl  = base_url+'/Categoriauno/getCategoriauno/'+idcategoriauno;
            request.open("GET",ajaxUrl ,true);
            request.send();

            request.onreadystatechange = function(){
                if(request.readyState == 4 && request.status == 200){

                    console.log(request.responseText);
                    
                    var objData = JSON.parse(request.responseText);
                    if(objData.status)
                    {
                        document.querySelector("#idCategoriauno").value = objData.data.idcategoriauno;
                        document.querySelector("#txtNombre").value = objData.data.nombre;

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
                        $('#modalFormCategoriauno').modal('show');
                    }else{
                        swal("Error", objData.msg , "error");
                    }
                }
            }
            
}


$('#tableCategoriaunos').DataTable();

function fntDelCategoriauno(idcategoriauno){
  
            var idcategoriauno = idcategoriauno;

            swal({
                title: "Eliminar Categoría",
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
                    var ajaxUrl = base_url+'/Categoriauno/delCategoriauno/';
                    var strData = "idcategoriauno="+idcategoriauno;
                    request.open("POST",ajaxUrl,true);
                    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    request.send(strData);
                    request.onreadystatechange = function(){

                        if(request.readyState == 4 && request.status == 200){
                            var objData = JSON.parse(request.responseText);
                            if(objData.status)
                            {
                                swal("Eliminar!", objData.msg , "success");
                                tableCategoriaunos.api().ajax.reload(function(){

                                });
                            }else{
                                swal("Atención!", objData.msg , "error");
                            }
                        }
                    }
                }

            });


}
