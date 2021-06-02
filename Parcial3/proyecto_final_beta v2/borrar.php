<?php
    include "conexion.php";

    $id = $_GET['id'];

    $queryDelete = "DELETE FROM CATALOGOBANCOS WHERE ID_BANCO = '$id'";

    $ejecutarDelete = $conexion->prepare($queryDelete);
    $ejecutarDelete->execute();

    if ($ejecutarDelete) {
        header("Location: pagina_crud.php");
    }
?>