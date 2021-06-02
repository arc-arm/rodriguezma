<?php
try {
    include "conexion.php";
    //utf por eso no me salia el script aaaaaaaaaaaaa
    $conexion->query("SET NAMES 'UTF8'");
    $consulta = $conexion->prepare("SELECT * FROM catalogobancos");
    $consulta -> execute();
    if (!$consulta) {
        echo 'Error al ejecutar la consulta';
    }else {
        $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($resultado);
    }
} catch (PDOException $ex) {
    echo $ex -> getMessage();
}
?>