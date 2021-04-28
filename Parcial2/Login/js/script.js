/*$(document).ready (function()
 {
    $("#validar").click ( function()
    {
      var user=$('#user').val();
      var pw=$('#pw').val();

       if( user='usuario' && pw=='2021')
       {
            $('#myModal').modal('show');                                         
       }
       else 
       {
            $('.modal-body').html("Contraseña Incorrecta");
            $('#myModal').modal('show');
       }
              
    } );
} ); */


function validar()
{
    //
    var usuario = $("#usuario").val();
    var password = $("#password").val();
    //
        if(usuario == "user" && password == "2021")
        {
            swal("Validación", "Bienvenido", "success");
        }
        else
        {
            swal("Validación", "Usuario y/o contraseña invalidos", "error");
        }
}