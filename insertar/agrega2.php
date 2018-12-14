<?php
    require ("../conexion.php");

    $bd = $_POST['bd'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];

    $max1 = maxid1();
    $max2 = maxid2();
    $idtipo = max($max1, $max2);
    //echo($idtipo);
    $idtipo = (int) $idtipo;
    $idtipo = $idtipo + 1;
    //echo($idtipo);

    $ocurre = buscacoincide($nombre);

    if (($ocurre == 0) && ($bd == 1)) 
    {
        $cnx = con1();
        $query = "INSERT INTO clasificacion(nombreClasificacion, caracteristicas, idClasificacion) VALUES('". $nombre ."', '". $descripcion ."', '". $idtipo ."');";
        mysqli_query($cnx,$query);
        mysqli_close($cnx);
        echo json_encode('agregado');
    }
    if (($ocurre == 0) && ($bd == 2)) 
    {
        $cnx = con1();
        $query = "INSERT INTO clasificacion(nombreClasificacion, caracteristicas, idClasificacion) VALUES('". $nombre ."', '". $descripcion ."', '". $idtipo ."');";
        mysqli_query($cnx,$query);        
        mysqli_close($cnx);
        echo json_encode('agregado');
    }
    if ($ocurre!=0) 
    {
        echo json_encode('error');        
    }



?>