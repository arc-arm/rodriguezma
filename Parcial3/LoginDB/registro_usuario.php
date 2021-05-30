<?php
    include "conexion.php";

    $usuario = $_POST["usuario"];
    $password = $_POST["password"];
    $password = hash("sha512", $password);

    $query = "INSERT INTO USUARIO (user, password) VALUES('$usuario', '$password')";

    //Verificar que el usuario no se repita en la BD
    $queryVerificar = "SELECT * FROM USUARIO WHERE user = '$usuario'";
    $ejecutarVerificacion = $conexion->prepare($queryVerificar);
    $ejecutarVerificacion->execute();

    if($ejecutarVerificacion->rowCount() > 0){
        echo '
            <script>
                alert("Este usuario ya está registrado");
                window.location = "index.php";
            </script>
            ';
    }else{

        $ejecutarQuery = $conexion->prepare($query);
        $ejecutarQuery->execute();
    
        if($ejecutarQuery){
            echo '
            <script>
                alert("Usuario almacenado con exito!");
                window.location = "index.php";
            </script>
            ';
        }else{
            echo '
            <script>
                alert("Usuario NO almacenado, inténtelo de nuevo");
                window.location = "index.php";
            </script>
            ';
        }
    
        $conexion=null;
    }
?>