<?php
    require ("../conexion.php");

    $bd = $_POST['bd'];
    $nombre = $_POST['nombre'];
    $medicina = $_POST['medicina'];
    $descripcion = $_POST['descripcion'];

    $max3 = maxid3();
    $max4 = maxid4();
    $idtipo = max($max3, $max4);
    //echo($idtipo);
    $idtipo = (int) $idtipo;
    $idtipo = $idtipo + 1;
    //echo($idtipo);

    $ocurre = buscacoincide2($nombre);

    if (($ocurre == 0) && ($bd == 1)) 
    {
        $cnx = con1();
        $query = "INSERT INTO tratamientos(idTratamiento, nombreTratamiento, nombreMedicina, caracteristicasTratamiento) VALUES('". $idtipo ."', '". $nombre ."', '". $medicina ."', '". $descripcion ."');";
        mysqli_query($cnx,$query);
        mysqli_close($cnx);
        echo json_encode('agregado');
    }
    if (($ocurre == 0) && ($bd == 2)) 
    {
        $cnx = con1();
        $query = "INSERT INTO tratamientos(idTratamiento, nombreTratamiento, nombreMedicina, caracteristicasTratamiento) VALUES('". $idtipo ."', '". $nombre ."', '". $medicina ."', '". $descripcion ."');";
        mysqli_query($cnx,$query);        
        mysqli_close($cnx);
        echo json_encode('agregado');
    }
    if ($ocurre!=0) 
    {
        echo json_encode('error');        
    }



?>