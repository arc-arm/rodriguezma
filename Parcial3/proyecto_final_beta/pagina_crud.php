<?php
    include "conexion.php";
    $conexion->query("SET NAMES 'UTF8'");
    $querySelect = "SELECT * FROM CATALOGOBANCOS";
    $ejecutarSelect = $conexion->prepare($querySelect);
    $ejecutarSelect->execute();
?>
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
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pruebas CRUD - Parcial 3</title>
    <!--CSS local-->
    <link rel="stylesheet" href="./res/style.css">
    <!--Bootstrap pa q se vea chido-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
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
    <div class="container mt-5 ">
        <div class="row">
            <div class="col-md-12" >
                <form method="POST" action="script_insertar.php">
                    <!--Inputs de los campos del catalogo-->
                    <input type="text" class="form-control mb-3" name="razonsocial" placeholder="Razón Social"> 
            </div>
            <div class="col-md-4">
                    <input class="form-control mb-3" type="text" name="rfc" placeholder="RFC"> 
            </div>
            <div class="col-md-4">
                    <input class="form-control mb-3" type="text" name="colonia" placeholder="Colonia">
            </div>
            <div class="col-md-4">
                    <input class="form-control mb-3" type="text" name="calle" placeholder="Calle">
            </div>
            <div class="col-md-6">
                    <input class="form-control mb-3" type="text" name="numdom" placeholder="Numero domicilio">
            </div>
            <div class="col-md-6">
                    <input class="form-control mb-3" type="text" name="telefono" placeholder="Teléfono">
            </div>
                    <!--Botón submit-->
                    <input type="submit" class="btn btn-primary btn-block">
                </form>
            <div class="col-md-12 mt-5">
                <table class="table table-dark">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Razón Social</th>
                    <th scope="col">RFC</th>
                    <th scope="col">Colonia</th>
                    <th scope="col">Calle</th>
                    <th scope="col">Numero domicilio</th>
                    <th scope="col">Teléfono</th>
                    <th></th>
                    <th></th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                        $ejecutarSelect->setFetchMode(PDO::FETCH_ASSOC);
                        while ($resultado = $ejecutarSelect->fetch()) {
                    ?>
                    <tr>
                        <td><?php echo $resultado['id_banco'] ?></td>
                        <td><?php echo $resultado['razon_social'] ?></td>
                        <td><?php echo $resultado['rfc'] ?></td>
                        <td><?php echo $resultado['colonia'] ?></td>
                        <td><?php echo $resultado['calle'] ?></td>
                        <td><?php echo $resultado['numero_domicilio'] ?></td>
                        <td><?php echo $resultado['telefono'] ?></td>
                        <td><a href="actualizar.php?id=<?php echo $resultado['id_banco'] ?>" class="btn btn-info">Editar</a></td>
                        <td><a href="borrar.php?id=<?php echo $resultado['id_banco'] ?>" class="btn btn-danger">Eliminar</a></td>
                    </tr>

                    <?php } ?>
                </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>