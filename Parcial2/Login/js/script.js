
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