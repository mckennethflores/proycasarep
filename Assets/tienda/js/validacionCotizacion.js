$(document).ready(function(){

    $('.enviar2').click(function(){
        
       // Envio los datos de todos los campos del html
        var prod_nom           = $('input[name=prod_nom]');
        var name           = $('input[name=nombres]');
        var lastname       = $('input[name=telefono_movil]');
        var email          = $('input[name=email]'); 
      //  var ast            = $('input[name=asunto]');
        var comment        = $('textarea[name=mensaje]');       
        var returnError    = false;
        
        // Simple validacion para saber si el usuario ingreso algun valor
        // Agrego un control de errores con js, pero tambien procesando con un archivo PHP.
        // Si encuentra el error, se agrega y resalta la clase .error a los campos de texto y al textarea.
        if (name.val()=='') 
        {
            name.addClass('error');
            returnError = true; alert("Ingresa el nombre");
        } else name.removeClass('error');
  
        if (lastname.val()=='') 
        {
            lastname.addClass('error'); alert("Ingresa el telefono");
            returnError = true;
        } else lastname.removeClass('error');
        
        if (email.val()=='') 
        {
            email.addClass('error'); alert("Ingresa el email");
            returnError = true;
        } else email.removeClass('error');
  
    
        
        if (comment.val()=='') 
        {
            comment.addClass('error'); alert("Ingresa el Mensaje");
            returnError = true;
        } else comment.removeClass('error');
  
        
        // A continuacion se resalta todos los campos que contengan errores.
        if(returnError == true)
        {
            return false;   
        }
                
        // Se inicia el ajax
        $.ajax({
            // Colocamos la url y el archivo enviar.php para que realize el proceso de envio.
            url: '../mail/envia-mensaje2.php',
            
            // el metodo que se usara es POST
            type: "POST",
  
            // colocamos la variable data para enviar los datos del formulario.       
            data: $('#fcotizacion').serialize(),  
            
            // No almacenar los temporales en la pagina
            cache: false,
            
            //success
            success: function(data){            
                
                $('#divMensajeCotizacion').fadeOut("fast",function()
                  {
                      $('#divMensajeCotizacion').html(data);
                  });
                
                $('#divMensajeCotizacion').fadeIn("slow");
                  $("#fcotizacion").find('input[type=text], textarea').val("");
  
            }
  
        });
        
        return false; 
  
    });
  
  });