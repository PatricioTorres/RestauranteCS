 function ValidarAmdin(){
     correo = $('#admin_correo').val();
     clave = $('#admin_pass').val();

     parametros = {
         "correo":correo, "contrasenia":clave
     }

     $.ajax({ 
        data:parametros,
        type: 'POST',
        url:'controller/AdministradorController?operador=validar_administrador',
        beforeSend:function(){},
        success:function(response){
            console.log(response);
        }
     }); 
 }