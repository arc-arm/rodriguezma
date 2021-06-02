<?php
    include "conexion.php";
    
    //Campos traidos por metodo POST
    $razonsocial = $_POST['razonsocial'];
    $rfc = $_POST['rfc'];
    $colonia = $_POST['colonia'];
    $calle = $_POST['calle'];
    $numdom = $_POST['numdom'];
    $telefono = $_POST['telefono'];


    $queryInsertar = "INSERT INTO CATALOGOBANCOS (razon_social, rfc, colonia, calle, numero_domicilio, telefono) 
                                        VALUES('$razonsocial', '$rfc', '$colonia', '$calle', '$numdom', '$telefono')";
    $ejecutarInsertar = $conexion->prepare($queryInsertar);
    $ejecutarInsertar->execute();

    if ($ejecutarInsertar) {
        header("Location: pagina_crud.php");
    } 

?>