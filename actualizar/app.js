function tratamiento()
{

    //var list = document.getElementById("lista").getElementsByTagName("li");
    //var list2 = document.getElementById("lista").getElementsByTagName("li").length;
    var nombre = document.getElementById("nombre").textContent;
    var clave = document.getElementById("clave").textContent;
    var descripcion = document.getElementById("descripcion").textContent;
    var sintomas = document.getElementById("sintoma").textContent;

    //var arr = [];

    //for ( i = 0; i < list2; i++) 
    //{
    //    arr.push(list[i].textContent);
    //    console.log(list[i].textContent);
    //}

    window.location.href = "modifica/?nombre=" + nombre + "&clave=" + clave + "&descripcion=" + descripcion + "&sintoma=" + sintomas; 

}