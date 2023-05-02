$(document).ready(function(){

    $('.enviar').click(function(){
        
       // Envio los datos de todos los campos del html
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
            returnError = true; alert("Porfavor Ingreses su nombre");
        } else name.removeClass('error');
  
        if (lastname.val()=='') 
        {
            lastname.addClass('error'); alert("Porfavor Ingreses su celular");
            returnError = true;
        } else lastname.removeClass('error');
        
        if (email.val()=='') 
        {
            email.addClass('error'); alert("Porfavor Ingreses su email");
            returnError = true;
        } else email.removeClass('error');
  
    
        
        if (comment.val()=='') 
        {
            comment.addClass('error'); alert("Porfavor Ingreses su mensaje");
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
            url: base_url+'/Assets/tienda/mail/envia-mensaje.php',
            
            // el metodo que se usara es POST
            type: "POST",
  
            // colocamos la variable data para enviar los datos del formulario.       
            data: $('#fcontacto').serialize(),  
            
            // No almacenar los temporales en la pagina
            cache: false,
            
            //success
            success: function(data){            
                
                $('#estado').fadeOut("fast",function()
                  {
                      $('#estado').html(data);
                  });
                
                $('#estado').fadeIn("slow");
                  $("#fcontacto").find('input[type=text], textarea').val("");
  
            }
  
        });
        
        return false; 
  
    });
  });