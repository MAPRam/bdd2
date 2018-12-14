function busqueda(idbusca)
{
    var idoption = document.getElementById(idbusca);
    var idop = idoption.options[idoption.selectedIndex].id;
    //var val = document.getElementById("tramite").value;

    switch (idop)
    {
        case "0":
                eligenuevo();
            break;
        case "pais":
                pais();
            break;
        case "enfermedad":
                enfermedad();
            break;
        case "tipo":
                tipo();
            break;
        case "tratamiento":
                tratamiento();
            break;
        case "reportes":
                reportes();
            break;

        default:
            break;
    }
}


function eligenuevo()
{
    alert("Debes elegir un elemento válido");
}


function pais()
{
    var select = document.getElementById('select2');

    var lbl = "<label class=\"control-label col-md-4 col-sm-12\">Cantidad de enfermos por pais:</label>";
    var div = "<div>";
    var inp = "<input class=\" col-md-6\" type=\"text\" id=\"select3\" placeholder=\"Nombre de la enfermedad\" />";
    var clv = "<input class=\" col-md-6\" type=\"text\" id=\"select4\" placeholder=\"Clave de la enfermedad\" />";
    var div2 = "</div>";

    select.innerHTML = lbl + div + inp + clv + div2;
}


function enfermedad()
{
    var select = document.getElementById('select2');

    var lbl = "<label class=\"control-label col-md-4 col-sm-12\">Casos de enfermedades por pa&iacute;s:</label>";
    var div = "<div>";
    var inp = "<input class=\" col-md-6\" type=\"text\" id=\"select3\" placeholder=\"Nombre de la enfermedad\" />";
    var clv = "<input class=\" col-md-6\" type=\"text\" id=\"select4\" placeholder=\"Clave de la enfermedad\" />";
    var div2 = "</div>";

    select.innerHTML = lbl + div + inp + clv + div2;

}

                    
function tipo()
{

    var select = document.getElementById('select2');

    var lbl = "<label class=\"control-label col-md-4 col-sm-12\">Caracter&iacute;sticas:</label>";
    var div = "<div>";
    var select1 = "<select class=\"col-md-6 custom-select\" id=\"select3\" />" + "<option id=\"0\">Seleccionar</option>";
    var select2 = "</select>";
    var clv = "<input class=\" col-md-6\" type=\"text\" id=\"select4\" placeholder=\"Clave del tipo de enfermedad\" />";
    var div2 = "</div>";

    select1 += ' <?php $con1=mysqli_init(); mysqli_ssl_set($con1, NULL, NULL, "../BaltimoreCyberTrustRoot.crt.pem", NULL, NULL);  $conexion1 = mysqli_real_connect($con1, "dbmysql.mysql.database.azure.com", "marco@dbmysql", "Matencio891", "bd1", 3306);    $con2=mysqli_init();  mysqli_ssl_set($con2, NULL, NULL, "../BaltimoreCyberTrustRoot.crt.pem", NULL, NULL);  $conexion2 = mysqli_real_connect($con2, "distribuida2.mysql.database.azure.com", "marco@distribuida2", "Matencio891", "bd2", 3306); $query = "SELECT * FROM  clasificacion"; $resultado = mysqli_query($con1,$query); $resultado2 = mysqli_query($con2,$query); $var1 = "<option value=\""; $var2 = "\">"; $var3 = "</option>"; while ($row = mysqli_fetch_array($resultado, MYSQL_ASSOC)) { echo $var1 . $row["idClasificacion"] . $var2 . $row["nombreClasificacion"] . $var3 ; } while ($row = mysqli_fetch_array($resultado2, MYSQL_ASSOC)) {     echo $var1 . $row["idClasificacion"] . $var2 . $row["nombreClasificacion"] . $var3 ; }  ?>";';

    select.innerHTML = lbl + div + select1 + select2 + clv + div2;

}                    
                                    

function tratamiento()
{

    var select = document.getElementById('select2');

    var lbl = "<label class=\"control-label col-md-4 col-sm-12\">Tratamiento:</label>";
    var div = "<div>";
    var select1 = "<select class=\"col-md-6 custom-select\" id=\"select3\" />" + "<option id=\"0\">Seleccionar</option>";
    var select2 = "</select>";
    var clv = "<input class=\" col-md-6\" type=\"text\" id=\"select4\" placeholder=\"Clave de enfermedad\" />";
    var div2 = "</div>";

    select1 += "<option id=\"1\">Nombre enfermedad 1</option>" + "<option id=\"2\">Nombre enfermedad 2</option>" + "<option id=\"3\">Nombre enfermedad 3</option>" + "<option id=\"n\">Nombre enfermedad n</option>";

    select.innerHTML = lbl + div + select1 + select2 + clv + div2;

}


function reportes()
{

    var select = document.getElementById('select2');

    var lbl = "<label class=\"control-label col-md-4 col-sm-12\">Reportes de casos por paises:</label>";
    var div = "<div>";
    var select1 = "<select class=\"col-md-6 custom-select\" id=\"select3\" />" + "<option id=\"0\">Seleccionar</option>";
    var select2 = "</select>";
    var clv = "<input class=\" col-md-6\" type=\"text\" id=\"select4\" maxlength=\"50\" placeholder=\"Nombre de enfermedad\" />";
    var div2 = "</div>";

    select1 += "<option id=\"1\">Pais 1</option>" + "<option id=\"2\">Pais 2</option>" + "<option id=\"3\">Pais 3</option>" + "<option id=\"n\">Pais n</option>";

    select.innerHTML = lbl + div + select1 + select2 + clv + div2;

}










