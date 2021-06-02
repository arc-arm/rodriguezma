<?php
    include "conexion.php";
    $conexion->query("SET NAMES 'UTF8'");
    $id = $_GET['id'];
    $querySelectID = "SELECT * FROM CATALOGOBANCOS WHERE id_banco = '$id' ";
    $ejecutarSelectID = $conexion->prepare($querySelectID);
    $ejecutarSelectID->execute();

    $ejecutarSelectID->setFetchMode(PDO::FETCH_ASSOC);
    $resultado = $ejecutarSelectID->fetch();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar registro</title>
    <!--CSS local-->
    <link rel="stylesheet" href="./recursosCRUD/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <form method="POST" action="script_actualizar.php">

                 <!--Inputs de los campos del catalogo-->
                <div class="row">
                    <input class="form-control" type="hidden" name="idbanco" value="<?php echo $resultado['id_banco']?>">
                    <div class="col-md-12">
                        <label for="razonsocial">Razón social:</label>
                        <input type="text" class="form-control mb-3" name="razonsocial" value="<?php echo $resultado['razon_social']?>">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <label for="rfc">RFC:</label>
                        <input class="form-control mb-3" type="text" name="rfc" value="<?php echo $resultado['rfc']?>">
                    </div>
                    <div class="col-md-4">   
                        <label for="colonia">Colonia:</label>
                        <input class="form-control mb-3" type="text" name="colonia" value="<?php echo $resultado['colonia']?>">
                    </div>
                    <div class="col-md-4">
                        <label for="calle">Calle:</label>
                        <input class="form-control mb-3" type="text" name="calle" value="<?php echo $resultado['calle']?>">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">         
                        <label for="numdom">Número Domicilio:</label>
                        <input class="form-control mb-3" type="text" name="numdom" value="<?php echo $resultado['numero_domicilio']?>">
                    </div>
                    <div class="col-md-6">
                        <label for="telefono">Teléfono:</label>
                        <input class="form-control mb-3" type="text" name="telefono" value="<?php echo $resultado['telefono']?>">         
                    </div>
                </div>

                <!--Botón Actualizar-->
                <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
        </form>
    </div>
</body>
</html>