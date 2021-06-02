<?php
    include "conexion.php";
    $id = $_POST['idbanco'];
    $razonsocial = $_POST['razonsocial'];
    $rfc = $_POST['rfc'];
    $colonia = $_POST['colonia'];
    $calle = $_POST['calle'];
    $numdom = $_POST['numdom'];
    $telefono = $_POST['telefono'];

    $queryUpdate = "UPDATE CATALOGOBANCOS
                    SET razon_social = '$razonsocial',
                        rfc = '$rfc',
                        colonia = '$colonia',
                        calle = '$calle',
                        numero_domicilio = '$numdom',
                        telefono = '$telefono' 
                        WHERE id_banco = '$id'";
    $ejecutarUpdate = $conexion ->prepare($queryUpdate);
    $ejecutarUpdate -> execute();

    if ($ejecutarUpdate) {
        header("Location: pagina_crud.php");
    }
?>