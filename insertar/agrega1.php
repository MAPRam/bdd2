<?php
    require ("../conexion.php");
    
    $nombre = $_POST['nombre'];
    $tipo = $_POST['tipo'];
    $tratamiento = $_POST['tratamiento'];
    $sintoma = $_POST['sintoma'];
    $bd = $_POST['bd'];


    $con1 = con1();
    $con2 = con2();
    $idenf = selectid();
    $idenf = (int) $idenf;
    $idenf = $idenf + 1;
    //selectidTratamientos($tratamiento, $bd);
    //selectidTipos($tipo, $bd);      
    $idTratamiento = selectidTratamientos($tratamiento, $bd);
    $idTipo = selectidTipos($tipo, $bd);
    $idenfermedad = selectidEnfermedad($nombre, $bd);

    $creatabla = "CREATE TABLE tratamientosTmp(idTratamiento VARCHAR(10) NOT NULL,nombreTratamiento VARCHAR(50),nombreMedicina VARCHAR(50),caracteristicasTratamiento VARCHAR(200));";

    if ($idenfermedad == 0) 
    {

        $query = "INSERT INTO enfermedades(idEnfermedad, nombreEnfermedad,sintomasEnfermedad, idTratamientoFK, idClasificacionFK) VALUES('". $idenf ."', '". $nombre ."', '".$sintoma ."', '" . $idTratamiento ."', '" . $idTipo ."');";
        //echo($query);
        //echo("\n");
        if ($bd == 1) 
        {
            //mysqli_query($con1,$query);
            if (mysqli_query($con1,$query))
            {
                mysqli_close($con1);
                mysqli_close($con2);
                echo json_encode('2');
            } 
            else 
            {
                mysqli_close($con1);
                mysqli_close($con2);
                echo json_encode('1');
            }
                
        }
        else
        {
            if (mysqli_query($con2,$query))
            {
                mysqli_close($con1);
                mysqli_close($con2);
                echo json_encode('2');
            } 
            else 
            {
                mysqli_close($con1);
                mysqli_close($con2);
                echo json_encode('1');
            }
    
        }


        
    }
    else 
    {
        mysqli_close($con1);
        mysqli_close($con2);
        echo json_encode('3');
    }

   

    //$query = "INSERT INTO enfermedades(idEnfermedad, nombreEnfermedad,sintomasEnfermedad, idTratamientoFK, idClasificacionFK) VALUES(?,?,?,?,?,?)";

    //$resultado = mysqli_query($con1,$query);
    //$resultado2 = mysqli_query($con2,$query);
    
    

 //$var1 = "<option value=\"";
 //$var2 = "\">";
 //$var3 = "</option>";
 


/*
 while ($row = mysqli_fetch_array($resultado, MYSQL_ASSOC))
 {

   echo $var1 . $row["idClasificacion"] . $var2 . $row["nombreClasificacion"] . $var3 ;
 }
 


 while ($row = mysqli_fetch_array($resultado2, MYSQL_ASSOC))
 {

   echo $var1 . $row["idClasificacion"] . $var2 . $row["nombreClasificacion"] . $var3 ;
 }
*/

?>
