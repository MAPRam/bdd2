<?php


function con1()
{
    $con1=mysqli_init(); 
    mysqli_ssl_set($con1, NULL, NULL, "../BaltimoreCyberTrustRoot.crt.pem", NULL, NULL); 
    $conexion1 = mysqli_real_connect($con1, "dbmysql.mysql.database.azure.com", "marco@dbmysql", "Matencio891", "bd1", 3306);
    return $con1;
}


function con2()
{
    $con2=mysqli_init(); 
    mysqli_ssl_set($con2, NULL, NULL, "../BaltimoreCyberTrustRoot.crt.pem", NULL, NULL); 
    $conexion2 = mysqli_real_connect($con2, "distribuida2.mysql.database.azure.com", "marco@distribuida2", "Matencio891", "bd2", 3306);

    return $con2;
}


function selectid()
{
    $cnx = con1();

    $consulta = "SELECT MAX(idEnfermedad) as maxim FROM enfermedades";
    $query = mysqli_query($cnx,$consulta);
    $fila = mysqli_fetch_array($query, MYSQL_ASSOC);
    
    mysqli_close($cnx);
    
    return $fila['maxim'];
}


function selectidTratamientos($id, $bd)
{

    if ($bd == 1) 
    {
        $cnx = con1();

        $consulta = "SELECT idTratamiento FROM tratamientos WHERE nombreTratamiento = '" . $id ."';";
        $query = mysqli_query($cnx,$consulta);
        $fila = mysqli_fetch_array($query, MYSQL_ASSOC);
        
        //echo $consulta;
        //echo "\n";
        
        mysqli_close($cnx);

        return $fila['idTratamiento'];        
    }
    else 
    {
        $cnx = con2();

        $consulta = "SELECT idTratamiento FROM tratamientos WHERE nombreTratamiento = '" . $id ."';";
        $query = mysqli_query($cnx,$consulta);
        $fila = mysqli_fetch_array($query, MYSQL_ASSOC);
        
        //echo $consulta;
        //echo "\n";

        mysqli_close($cnx);
        return $fila['idTratamiento'];    
    }

    
}

function selectidTipos($id, $bd)
{
    if ($bd == 1) 
    {
        $cnx = con1();

        $consulta = "SELECT idClasificacion FROM clasificacion WHERE nombreClasificacion = '" . $id ."';";
        $query = mysqli_query($cnx,$consulta);
        $fila = mysqli_fetch_array($query, MYSQL_ASSOC);
        
        //echo $consulta;
        //echo "\n";

        mysqli_close($cnx);
        return $fila['idClasificacion'];        
    }
    else 
    {
        $cnx = con1();

        $consulta = "SELECT idClasificacion FROM clasificacion WHERE nombreClasificacion = '" . $id ."';";
        $query = mysqli_query($cnx,$consulta);
        $fila = mysqli_fetch_array($query, MYSQL_ASSOC);
        
        //echo $consulta;
        //echo "\n";

        mysqli_close($cnx);

        return $fila['idClasificacion'];    
    }
}

function selectidEnfermedad($nombre, $bd)
{

    if ($bd == 1) 
    {
        $cnx = con1();
        $count = 0;
    
        $consulta = "SELECT * FROM enfermedades WHERE nombreEnfermedad = '" . $nombre ."';";
        $query = mysqli_query($cnx,$consulta);
        $fila = mysqli_fetch_array($query, MYSQL_ASSOC);
        
        mysqli_close($cnx);
        
        if ($fila['idEnfermedad'] != null) 
        {
            $count = $count + 1;
        }
        if ($fila['idEnfermedad'] != null) 
        {
            $count = $count + 1;
        }
    
        if ($count != 0) 
        {
            return 1;    
        }
        else 
        {
            return 0;
        }    
    }
    else 
    {
    $cnx = con2();
    $count = 0;

    $consulta = "SELECT * FROM enfermedades WHERE nombreEnfermedad = '" . $nombre ."';";
    $query = mysqli_query($cnx,$consulta);
    $fila = mysqli_fetch_array($query, MYSQL_ASSOC);
    
    mysqli_close($cnx);
    
    if ($fila['idEnfermedad'] != null) 
    {
        $count = $count + 1;
    }
    if ($fila['idEnfermedad'] != null) 
    {
        $count = $count + 1;
    }

    if ($count != 0) 
    {
        return 1;    
    }
    else 
    {
        return 0;
    }    
    }

    

    
}



function maxid1()
{
    $cnx = con1();

    $consulta = "SELECT MAX(idClasificacion) as maxim FROM clasificacion";
    $query = mysqli_query($cnx,$consulta);
    $fila = mysqli_fetch_array($query, MYSQL_ASSOC);
    
    mysqli_close($cnx);
    
    return $fila['maxim'];
}

function maxid2()
{
    $cnx = con2();

    $consulta = "SELECT MAX(idClasificacion) as maxim FROM clasificacion";
    $query = mysqli_query($cnx,$consulta);
    $fila = mysqli_fetch_array($query, MYSQL_ASSOC);
    
    mysqli_close($cnx);
    
    return $fila['maxim'];
}



function buscacoincide($nombre)
{

  
        $cnx = con1();

  
        $count = 0;
    
        $consulta = "SELECT * FROM clasificacion WHERE nombreClasificacion = '" . $nombre ."';";
        $query = mysqli_query($cnx,$consulta);
        $fila = mysqli_fetch_array($query, MYSQL_ASSOC);
        
        mysqli_close($cnx);


        if ($fila['idClasificacion'] != null) 
        {
            $count = 1;
        }

        $cnx2 = con2();

        $consulta2 = "SELECT * FROM clasificacion WHERE nombreClasificacion = '" . $nombre ."';";
        $query2 = mysqli_query($cnx2,$consulta2);
        $fila2 = mysqli_fetch_array($query2, MYSQL_ASSOC);
        
        mysqli_close($cnx2);


        if ($fila2['idClasificacion'] != null) 
        {
            $count = 2;
        }

        return $count;
   
   
}



function buscacoincide2($nombre)
{

  
        $cnx = con1();

  
        $count = 0;
    
        $consulta = "SELECT * FROM tratamientos WHERE nombreTratamiento = '" . $nombre ."';";
        $query = mysqli_query($cnx,$consulta);
        $fila = mysqli_fetch_array($query, MYSQL_ASSOC);
        
        mysqli_close($cnx);


        if ($fila['idTratamiento'] != null) 
        {
            $count = 1;
        }

        $cnx2 = con2();

        $consulta2 = "SELECT * FROM tratamientos WHERE nombreTratamiento = '" . $nombre ."';";
        $query2 = mysqli_query($cnx2,$consulta2);
        $fila2 = mysqli_fetch_array($query2, MYSQL_ASSOC);
        
        mysqli_close($cnx2);


        if ($fila2['idTratamiento'] != null) 
        {
            $count = 2;
        }

        return $count;
}



function maxid3()
{
    $cnx = con1();

    $consulta = "SELECT MAX(idTratamiento) as maxim FROM tratamientos";
    $query = mysqli_query($cnx,$consulta);
    $fila = mysqli_fetch_array($query, MYSQL_ASSOC);
    
    mysqli_close($cnx);
    
    return $fila['maxim'];
}

function maxid4()
{
    $cnx = con2();

    $consulta = "SELECT MAX(idTratamiento) as maxim FROM tratamientos";
    $query = mysqli_query($cnx,$consulta);
    $fila = mysqli_fetch_array($query, MYSQL_ASSOC);
    
    mysqli_close($cnx);
    
    return $fila['maxim'];
}


function buscaEnf($nombre)
{

  
        $cnx = con1();

        $bd = 0;
  
        $count = 0;
        $fila2 = "";
        $consulta = "SELECT * FROM enfermedades WHERE nombreEnfermedad = '" . $nombre ."';";
        $query = mysqli_query($cnx,$consulta);
        $fila = mysqli_fetch_array($query, MYSQL_ASSOC);
        
        mysqli_close($cnx);


        if ($fila['idTratamiento'] != null) 
        {
        $cnx2 = con2();

        $consulta2 = "SELECT * FROM enfermedades WHERE nombreEnfermedad = '" . $nombre ."';";
        $query2 = mysqli_query($cnx2,$consulta2);
        $fila = mysqli_fetch_array($query2, MYSQL_ASSOC);
        
        mysqli_close($cnx2);


            if ($fila['idTratamiento'] != null) 
            {
                return 0;
            }
            else 
            {
                $bd = 2;
                $fila2 = $fila['idEnfermedad'] . "," . $fila['nombreEnfermedad'] . "," . $fila['sintomasEnfermedad'] . "," . $fila['idTratamientoFK'] . "," . $fila['idClasificacionFK'] . "," . $bd; 

                return $fila2;    
            }

        }
        else 
        {
            $bd = 1;
            $fila2 = $fila['idEnfermedad'] . "," . $fila['nombreEnfermedad'] . "," . $fila['sintomasEnfermedad'] . "," . $fila['idTratamientoFK'] . "," . $fila['idClasificacionFK'] . "," . $bd;
            return $fila2;   
        }
}



?>