<?php

    include "conexion.php";

    $querySelect = "SELECT id_banco, razon_social, rfc, colonia, calle, numero_domicilio, telefono FROM CATALOGOBANCOS";
    $ejecutarSelect =  $conexion -> prepare($querySelect);
    $ejecutarSelect -> execute();
    $selectBancos = $ejecutarSelect -> fetchAll(PDO::FETCH_ASSOC);
    $ejecutarSelect -> closeCursor();
    echo json_encode($selectBancos);
?>