<?php
    require ("../conexion.php");


    $nombre = $_POST['nombre'];

    $coinc = buscaEnf($nombre);

    echo json_encode($coinc);

?>
