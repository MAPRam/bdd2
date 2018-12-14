var boton1 = document.getElementById("agrega1");
var respuesta = document.getElementById("mensaje");

var boton2 = document.getElementById("agregaTipo");
var boton3 = document.getElementById("agregaTratamiento");


boton1.addEventListener('click', function(e){
    e.preventDefault();
    alert("entra");
    var datos = new FormData();

    var nombre = document.getElementById("nombre").value;
    var tipo  = document.getElementById("tipo").value;
    var tratamiento = document.getElementById("tratamiento").value;
    var sintoma = document.getElementById("sintoma").value;

    var ntipo = document.getElementById("tipo").selectedIndex;
    var ntipo1 = document.getElementById("tipo").options[ntipo].text;

    console.log(ntipo);
    console.log(ntipo1);

    var ntratamiento = document.getElementById("tratamiento").selectedIndex;
    var ntratamiento1 = document.getElementById("tratamiento").options[ntratamiento].text;

    console.log(ntratamiento);
    console.log(ntratamiento1);


    datos.append("nombre" ,nombre);
    datos.append("tipo" ,ntipo1);
    datos.append("tratamiento",ntratamiento1);
    datos.append("sintoma",sintoma);

    if ((tipo == 1) && (tratamiento == 1)) 
    {
        datos.append("bd", 1);    


        console.log(nombre);
        console.log(tipo);
        console.log(tratamiento);
        console.log(sintoma);
    
    
        fetch('agrega1.php',{
            method: 'POST',
            body: datos
        })
        .then( res => res.json())
        .then( data => {
    
            if (data == 3)
            {
    
                respuesta.innerHTML = `<div class="alert alert-danger" role="alert">La enfermedad que intentas ingresar ya se encuentra registrada</div>`;
                //alert("Ya existe");
                //console.log("Entra");
                
                //document.getElementById('enlace1').click();
                //console.log(data);
            }
    
            if(data == 1)
            {
                //console.log( "idenf : " + data);
    
                respuesta.innerHTML = `<div class="alert alert-danger" role="alert">Ha ocurrido un error al agregar los datos, por favor Complete los campos</div>`; //${data}
                //document.getElementById('enlace1').click();
            }
            if(data == 2)
            {
                //console.log( "idenf : " + data);
    
                respuesta.innerHTML = `<div class="alert alert-success" role="alert"> SE HA AGREGADO EXITOSAMENTE</div>`; //${data}
                //document.getElementById('enlace1').click();
            }
        })
    

    }
    else if((tratamiento == 2) && (tipo == 2))
    {
        datos.append("bd", 2);


    console.log(nombre);
    console.log(tipo);
    console.log(tratamiento);
    console.log(sintoma);


    fetch('agrega2.php',{
        method: 'POST',
        body: datos
    })
    .then( res => res.json())
    .then( data => {

        if (data == 3)
        {

            respuesta.innerHTML = `<div class="alert alert-danger" role="alert">La enfermedad que intentas ingresar ya se encuentra registrada</div>`;
            //alert("Ya existe");
            //console.log("Entra");
            
            //document.getElementById('enlace1').click();
            //console.log(data);
        }

        if(data == 1)
        {
            //console.log( "idenf : " + data);

            respuesta.innerHTML = `<div class="alert alert-danger" role="alert">Ha ocurrido un error al agregar los datos, por favor Complete los campos</div>`; //${data}
            //document.getElementById('enlace1').click();
        }
        if(data == 2)
        {
            //console.log( "idenf : " + data);

            respuesta.innerHTML = `<div class="alert alert-success" role="alert"> SE HA AGREGADO EXITOSAMENTE</div>`; //${data}
            //document.getElementById('enlace1').click();
        }
    })

    }
    else
    {
        console.log(tipo);
    console.log(tratamiento);
        alert("Selecciona los datos que estén en la misma base de datos");
    }

})



boton2.addEventListener('click', function(e){
    e.preventDefault();

    var bd = document.getElementById("base").value;
    var nombre = document.getElementById("nombre2").value;
    var descripcion = document.getElementById("descripcion").value;
    console.log(bd);
    console.log(nombre);
    console.log(descripcion);

    var datos = new FormData()

    datos.append("bd", bd);
    datos.append("nombre", nombre);
    datos.append("descripcion", descripcion);

    fetch('agrega2.php',{
        method: 'POST',
        body: datos
    })
    .then( res => res.json())
    .then( data => {
        //console.log(data)
        /*if (data === 'repetido')
        {
            formulario.reset();
            respuesta.innerHTML = `<div class="alert alert-danger" role="alert">Es posible que los datos de este usuario ya existan... </div>`;
        }*/
        if (data === 'error')
        {
            respuesta.innerHTML = `<div class="alert alert-warning" role="alert">El tipo que intentas ingresar ya existe en una de las 2 bases de datos... </div>`;
        }

        else
        {
            respuesta.innerHTML = `<div class="alert alert-success" role="alert">Agregado correctamente</div>`; // ${data}
        }
    })

})



boton3.addEventListener('click', function(e){
    e.preventDefault();


    var bd = document.getElementById("base2").value;
    var nombre = document.getElementById("nombreTratamiento").value;
    var medicina = document.getElementById("claveMedicina").value;
    var caracteristicas = document.getElementById("descripcionTratamiento").value;
    

    var datos = new FormData()

    datos.append("bd", bd);
    datos.append("nombre", nombre);
    datos.append("medicina", medicina)
    datos.append("descripcion", caracteristicas);

    fetch('agrega3.php',{
        method: 'POST',
        body: datos
    })
    .then( res => res.json())
    .then( data => {
        //console.log(data)
        /*if (data === 'repetido')
        {
            formulario.reset();
            respuesta.innerHTML = `<div class="alert alert-danger" role="alert">Es posible que los datos de este usuario ya existan... </div>`;
        }*/
        if (data === 'error')
        {
            respuesta.innerHTML = `<div class="alert alert-warning" role="alert">El tipo que intentas ingresar ya existe en una de las 2 bases de datos... </div>`;
        }

        else
        {
            respuesta.innerHTML = `<div class="alert alert-success" role="alert">Agregado correctamente</div>`; // ${data}
        }
    })

})