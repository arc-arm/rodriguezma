<?php
    session_start();
    if (!isset($_SESSION['usuario'])) {
        echo '
          <script>
            alert("Debes iniciar sesión");
            window.location = "index.php";
         </script>
            ';
        session_destroy();
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de Bienvenida</title>
</head>
<body>
    <h1>Bienvenido al sistema</h1>
    <?php
    if (isset($_SESSION['usuario'])) {
        echo 'Bienvenido al sistema, '.$_SESSION['usuario'];
    }
    ?>
    <br>
    <a href="cerrar_sesion.php">Cerrar sesión</a>
</body>
</html>