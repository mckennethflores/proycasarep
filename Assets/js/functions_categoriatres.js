function openModal(){
    
    document.querySelector('#idcategoriatres').value ="";
    document.querySelector('.modal-header').classList.replace("headerUpdate", "headerRegister");
    document.querySelector('#btnActionForm').classList.replace("btn-info", "btn-primary");
    document.querySelector('#btnText').innerHTML ="Guardar";
    document.querySelector('#titleModal').innerHTML = "Nueva SubCategoria";
    document.querySelector("#formCategoriatres").reset();

    $('#modalFormCategoriatres').modal('show');
}

window.addEventListener('load', function() {

}, false);

var tableCategoriatres;

document.addEventListener('DOMContentLoaded', function(){

	tableCategoriatres = $('#tableCategoriatres').dataTable( {
		"aProcessing":true,
		"aServerSide":true,
        "language": {
        	"url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
        },
        "ajax":{
            "url": " "+base_url+"/Categoriatres/getCategoriatres",
            "dataSrc":""
        },
        "columns":[
            {"data":"idcategoriatres"},
            {"data":"nombrecategoriatres"},
            {"data":"nombrecategoriados"},
            {"data":"status"},
            {"data":"options"}
        ],
        "resonsieve":"true",
        "bDestroy": true,
        "iDisplayLength": 25,
        "order":[[0,"desc"]]  
    });

    //NUEVO ROL
     var formCategoriatres = document.querySelector("#formCategoriatres");
     formCategoriatres.onsubmit = function(e) {
        e.preventDefault();

        var intIdCategoriatres = document.querySelector('#idcategoriatres').value;
        var strNombre = document.querySelector('#txtNombre').value;

        var intCategoriadosid= document.querySelector('#listCategoriadosid').value;

        var intStatus = document.querySelector('#listStatus').value;        
        if(strNombre == '' || intStatus == ''|| intCategoriadosid == '')
        {
            swal("Atención", "Todos los campos son obligatorios." , "error");
            return false;
        }
        var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
        var ajaxUrl = base_url+'/Categoriatres/setCategoriatres'; 
        var formData = new FormData(formCategoriatres);
 
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
                    $('#modalFormCategoriatres').modal("hide");
                    formCategoriatres.reset();
                    swal("Subcategoria Productos", objData.msg ,"success");
                    tableCategoriatres.api().ajax.reload(function(){ 
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
    fntCategoriadosCategoriatres();
    //no se utiliza   fntViewUsuario(); fntEditUsuario(); fntDelUsuario();
}, false);

function fntCategoriadosCategoriatres(){
    var ajaxUrl = base_url+'/Categoriados/getSelectCategoriados';
    var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
    request.open("GET",ajaxUrl,true);
    request.send();

    request.onreadystatechange = function(){
        if(request.readyState == 4 && request.status == 200){
            document.querySelector('#listCategoriadosid').innerHTML = request.responseText;
            document.querySelector('#listCategoriadosid').value = 1;
            $('#listCategoriadosid').selectpicker('render');
        }
    }
    
}


function fntEditCategoriatres(idcategoriatres){


            document.querySelector('#titleModal').innerHTML ="Actualizar Categoria";
            document.querySelector('.modal-header').classList.replace("headerRegister", "headerUpdate");
            document.querySelector('#btnActionForm').classList.replace("btn-primary", "btn-info");
            document.querySelector('#btnText').innerHTML ="Actualizar";

           
            var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            var ajaxUrl  = base_url+'/Categoriatres/getCategoriatres_singular/'+idcategoriatres;
            request.open("GET",ajaxUrl ,true);
            request.send();

            request.onreadystatechange = function(){
                if(request.readyState == 4 && request.status == 200){

                    //console.log(request.responseText);
                    
                    var objData = JSON.parse(request.responseText);
                    if(objData.status)
                    {
                        document.querySelector("#idcategoriatres").value = objData.data.idcategoriatres;
                        document.querySelector("#txtNombre").value = objData.data.nombrecategoriatres;
                        document.querySelector("#listCategoriadosid").value =objData.data.categoriadosid;
                        $('#listCategoriadosid').selectpicker('render');
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
                        $('#modalFormCategoriatres').modal('show');
                    }else{
                        swal("Error", objData.msg , "error");
                    }
                }
            }
            
}


$('#tableCategoriatres').DataTable();

function fntDelCategoriatres(idcategoriatres){
  
            swal({
                title: "Eliminar SubCategoría",
                text: "¿Realmente quiere eliminar la subcategoría?",
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
                    var ajaxUrl = base_url+'/Categoriatres/delCategoriatres/';
                    var strData = "idcategoriatres="+idcategoriatres;
                    request.open("POST",ajaxUrl,true);
                    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    request.send(strData);
                    request.onreadystatechange = function(){

                        if(request.readyState == 4 && request.status == 200){
                            var objData = JSON.parse(request.responseText);
                            if(objData.status)
                            {
                                swal("Eliminar!", objData.msg , "success");
                                tableCategoriatres.api().ajax.reload(function(){

                                });
                            }else{
                                swal("Atención!", objData.msg , "error");
                            }
                        }
                    }
                }

            });


}
