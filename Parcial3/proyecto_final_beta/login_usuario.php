<?php  
    session_start();

    include "conexion.php";

    $usuario = $_POST["usuario"];
    $password = $_POST["password"];
    $password = hash("sha512", $password); 

    $validarLogin = $conexion->prepare("SELECT * FROM USUARIO 
                                        WHERE user = '$usuario' AND password = '$password'");
    $validarLogin->execute();

    if ($validarLogin->rowCount() > 0) {
        $_SESSION['usuario'] = $usuario;
        //header("Location: bienvenida.php");
        header("Location: pagina_crud.php");
        exit;
    }else {
        echo '
            <script>
            alert("El usuario no existe, revise los datos introducidos");
            window.location = "index.php";
            </script>
            ';
            exit;
    }
?>