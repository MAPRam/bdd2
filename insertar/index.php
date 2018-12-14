<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Insertar</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- <script src="js/functions.js"></script> -->
      <script src="js/functions.js"></script>

    </head>
    <body style="background-color: rgb(235,235,235);">
        <div class="pos-f-t">
    <!-- Image and text -->
    <nav class="navbar navbar-light bg-light">
      <a class="navbar-brand" onclick="location.href = '../'">
        <img src="images/OMS.png" width="30" height="30" class="d-inline-block align-top" alt="">
        SALUD MUNDIAL
      </a>
        <!-- Muestra menú -->
        <ul class="nav nav-tabs">

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">Salud mundial</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="http://www.who.int/country-cooperation/es/">Reportes de la OMS</a>
      <a class="dropdown-item" href="http://www.who.int/about/regions/es/">Paises que conforman la OMS</a>
      <a class="dropdown-item" href="https://www.who.int/about/es/">Qué es la OMS</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">Estad&iacute;sticas</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" onclick="location.href = '../privacidad/'" >Información sobre los datos</a>
          <a class="dropdown-item" onclick="location.href = ''">Consultar informaci&oacute;n</a>
          <a class="dropdown-item" onclick="location.href = '../descargar/'">Descargar datos</a>
        </div>
      </li>

      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">Modificar datos</a>
          <div class="dropdown-menu">
<!--<a class="dropdown-item" onclick="location.href = '../actualizar/'">Actualizar</a>-->            <a class="dropdown-item" onclick="location.href = ''">Insertar</a>
            <a class="dropdown-item" onclick="location.href ='../eliminar/'">Eliminar</a>
          </div>
        </li>

      <li class="nav-item">
        <a class="nav-link " onclick="location.href = '../about/'">¿Quienes somos?</a>
      </li>
    </ul>
    </nav>
    </div>


    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Insertar</li>
        </ol>
      </nav>


    <div class="container py-5">
      <div class="row col-md-8  px-5">
        <p class="h5 lead">Insertar datos:</p>
        <div class="row col-md-8" id="mensaje">

        </div>              
      </div>
      
      <div class="row justify-content-center bg-light py-4">
          <div class="btn-group btn-group-toggle" data-toggle="buttons">
              <label class="btn btn-secondary active" id="option1" onclick="changeInsert(this.id);">
                <input type="radio" name="options" id="option1" onclick="changeInsert(this.id);" checked> Enfermedades
              </label>
              <label class="btn btn-secondary active" id="option2"  onclick="changeInsert(this.id);">
                <input type="radio" name="options" id="option2" onclick="changeInsert(this.id);" > Tipos de enfermedades
              </label>
              <label class="btn btn-secondary active" id="option3" onclick="changeInsert(this.id);">
                <input type="radio" name="options" id="option3" onclick="changeInsert(this.id);" > Tratamiento
              </label>
            </div>
      </div>

      <div id="formulario1"> 
          <div class="row justify-content-center bg-light py-5">
              <div class="col-6">
                  <label for="form7">Nombre</label>
                  <input type="text" id="nombre">
              </div>
            </div>
            <!--<div class="row justify-content-center bg-light">
                <div class="col-6">
                    <label for="form7">Clave</label>
                    <input type="text" id="clave">
                </div>
              </div>-->

              <div class="row justify-content-center bg-light">
                  <div class="col-6">
                      <label for="form7">Tipo</label>
                      <select name="tipo" id="tipo">

                      <?php

                        $con1=mysqli_init(); 
                        mysqli_ssl_set($con1, NULL, NULL, "../BaltimoreCyberTrustRoot.crt.pem", NULL, NULL); 
                        $conexion1 = mysqli_real_connect($con1, "dbmysql.mysql.database.azure.com", "marco@dbmysql", "Matencio891", "bd1", 3306);


                        $con2=mysqli_init(); 
                        mysqli_ssl_set($con2, NULL, NULL, "../BaltimoreCyberTrustRoot.crt.pem", NULL, NULL); 
                        $conexion2 = mysqli_real_connect($con2, "distribuida2.mysql.database.azure.com", "marco@distribuida2", "Matencio891", "bd2", 3306);

                        $query = "SELECT * FROM  clasificacion";

                        //$result1 = mysqli_query($con2, $query);
                        //$resultado = mysqli_fetch_array($result1, MYSQLI_ASSOC);

                        //echo ($resultado['nombreClasificacion']);


                        $resultado = mysqli_query($con1,$query);
                        $resultado2 = mysqli_query($con2,$query);
                        $var1 = "<option value=\"";
                        $var2 = ">";
                        $var3 = "</option>";
                        
                    
                        while ($row = mysqli_fetch_array($resultado, MYSQL_ASSOC))
                        {
                    
                          echo $var1 . 1 . "\" lang = \"1\"" . $var2 . $row["nombreClasificacion"] . $var3 ;
                        }
                        


                        while ($row = mysqli_fetch_array($resultado2, MYSQL_ASSOC))
                        {
                    
                          echo $var1 . 2 . "\" lang = \"2\"" . $var2 . $row["nombreClasificacion"] . $var3 ;
                        }


                      ?>
                      </select>
                  </div>
                </div>
    
          <div class="row justify-content-center bg-light">
              <div class="col-6">
                  <label for="form7">Tratamiento</label>
                  <select name="tratamiento" id="tratamiento">
                  <?php

$con1=mysqli_init(); 
mysqli_ssl_set($con1, NULL, NULL, "../BaltimoreCyberTrustRoot.crt.pem", NULL, NULL); 
$conexion1 = mysqli_real_connect($con1, "dbmysql.mysql.database.azure.com", "marco@dbmysql", "Matencio891", "bd1", 3306);


$con2=mysqli_init(); 
mysqli_ssl_set($con2, NULL, NULL, "../BaltimoreCyberTrustRoot.crt.pem", NULL, NULL); 
$conexion2 = mysqli_real_connect($con2, "distribuida2.mysql.database.azure.com", "marco@distribuida2", "Matencio891", "bd2", 3306);

$query = "SELECT * FROM  tratamientos";

//$result1 = mysqli_query($con2, $query);
//$resultado = mysqli_fetch_array($result1, MYSQLI_ASSOC);

//echo ($resultado['nombreClasificacion']);


$resultado = mysqli_query($con1,$query);
$resultado2 = mysqli_query($con2,$query);
$var1 = "<option value=\"";
$var2 = ">";
$var3 = "</option>";


while ($row = mysqli_fetch_array($resultado, MYSQL_ASSOC))
{

  echo $var1 . 1 . "\" lang = \"1\"" . $var2 . $row["nombreTratamiento"] . $var3 ;
}



while ($row = mysqli_fetch_array($resultado2, MYSQL_ASSOC))
{

  echo $var1 . 2 . "\" lang = \"2\"" . $var2 . $row["nombreTratamiento"] . $var3 ;
}


?>
                  </select>
                  <!--<textarea type="text" id="descripcion" class="md-textarea form-control" rows="3"></textarea>-->
              </div>
            </div>
    
          <div class="row justify-content-center bg-light">
            <div class="col-6">
                <label for="form7">S&iacute;ntoma</label>
                <textarea type="text" id="sintoma" class="md-textarea form-control" rows="3"></textarea>
            </div>
          </div>
          <div class="row justify-content-end bg-light py-3">
              <div class="col-6">
                  <button class="btn btn-danger" onclick="window.location.href = '../'">Cancelar</button>
                  <button class="btn btn-info" id="agrega1">Agregar</button>
              </div>
          </div>
      </div>



      <div id="formulario2" style="visibility: hidden;"> 
          <div class="row justify-content-center bg-light">
          <div class="col-6">
                  <label for="form7">Elige la base de datos</label>
                  <select id="base">
                    <option value="1">1</option>
                    <option value="2">2</option>
                  </select>
              </div>
          </div>


          <div class="row justify-content-center bg-light py-5">
              <div class="col-6">
                  <label for="form7">Tipo</label>
                  <input type="text" id="nombre2">
              </div>
            </div>
    
          <div class="row justify-content-center bg-light">
              <div class="col-6">
                  <label for="form7">Caracter&iacute;sticas</label>
                  <textarea type="text" id="descripcion" class="md-textarea form-control" rows="3"></textarea>
              </div>
            </div>
    
          <div class="row justify-content-end bg-light py-3">
              <div class="col-6">
                  <button class="btn btn-danger" onclick="window.location.href = '../'">Cancelar</button>
                  <button class="btn btn-info" id="agregaTipo">Agregar</button>
              </div>
          </div>
      </div>



      <div id="formulario3" style="visibility: hidden;"> 
      <div class="row justify-content-center bg-light">
          <div class="col-6">
                  <label for="form7">Elige la base de datos</label>
                  <select id="base2">
                    <option value="1">1</option>
                    <option value="2">2</option>
                  </select>
              </div>
          </div>
          <div class="row justify-content-center bg-light py-5">
              <div class="col-6">
                  <label for="form7">Nombre de tratamiento</label>
                  <input type="text" id="nombreTratamiento">
              </div>
            </div>
            <div class="row justify-content-center bg-light">
                <div class="col-6">
                    <label for="form7">Nombre de medicina</label>
                    <input type="text" id="claveMedicina">
                </div>
              </div>
    
          <div class="row justify-content-center bg-light">
              <div class="col-6">
                  <label for="form7">Caracter&iacute;sticas</label>
                  <textarea type="text" id="descripcionTratamiento" class="md-textarea form-control" rows="3"></textarea>
              </div>
            </div>
    
          <div class="row justify-content-end bg-light py-3">
              <div class="col-6">
                  <button class="btn btn-danger" onclick="window.location.href = '../'">Cancelar</button>
                  <button class="btn btn-info" id="agregaTratamiento">Agregar</button>
              </div>
          </div>
      </div>





      
    </div>

       

    <footer class="pt-0 my-5 pt-md-5 border-top">
        <div class="row px-5 py-5">
          <div class="col-md-3">
            <img class="mb-2" src="images/OMS.png" alt="" width="24" height="24">
            <small class="d-block mb-3 text-muted">© 2018-2019</small>
          </div>
          <div class="col-md-3">
            <h5>Acerca de</h5>
            <ul class="list-unstyled text-small" style="font-size:12px;">
              <li><a class="text-muted" href="#">¿Quienes somos?</a></li>
              <li><a class="text-muted" href="#">Integrantes</a></li>
              <li><a class="text-muted" href="#">Localizacion de los datos</a></li>
              <li><a class="text-muted" href="#">Privacidad</a></li>
              <li><a class="text-muted" href="#">Terminos</a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <h5>Fuentes</h5>
            <ul class="list-unstyled text-small" style="font-size:12px;">
              <li><a class="text-muted" href="#">Fuente de datos</a></li>
              <li><a class="text-muted" href="#">P&aacute;ginas consultadas</a></li>
              <li><a class="text-muted" href="#">Herramientas utilizadas</a></li>
              <li><a class="text-muted" href="#">Sistemas operativos y gestores de DB usados</a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <h5>Producto</h5>
            <ul class="list-unstyled text-small" style="font-size:12px;">
              <li><a class="text-muted" href="#">Mapa de sitio</a></li>
            </ul>
          </div>


        </div>
      </footer>


        <script src="app.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
