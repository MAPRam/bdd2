var buscar = document.getElementById("buscarEnfermedad");
var borrar = document.getElementById("elimina");
var respuesta1 = document.getElementById("tabla");



buscar.addEventListener('click', function(e){
    e.preventDefault();
    alert("Entra");
    var nombre = document.getElementById("nombreEnfermedad").value;
    var titulo = document.getElementById("titulo");
    var ide = document.getElementById("ide");
    var sintomas = document.getElementById("sintomas");
    var bd = document.getElementById("basedatos"); 
    

    var datos = new FormData()
    datos.append("nombre", nombre);

    
    
    fetch('borra.php',{
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
        if (data == 0 )
        {   
            alert("No existe esa enfermedad en ninguna base de datos");
            //respuesta.innerHTML = `<div class="alert alert-warning" role="alert">No existe esa enfermedad en ninguna de las bases de datos</div>`;
        }

        else
        {
            rs = data.split(",");
            titulo.innerHTML = rs[1];
            ide.innerHTML = rs[0];
            sintomas.innerHTML = rs[2];
            titulo.innerHTML = rs[5];
            respuesta1.innerHTML = "";

            //respuesta.innerHTML = `<div class="alert alert-success" role="alert">Agregado correctamente</div>`; // ${data}
        }
    })

})




borrar.addEventListener('click', function(e){
    e.preventDefault();

    var nombre = document.getElementById("nombreEnfermedad").value;
    

    var datos = new FormData()

    
    datos.append("nombre", nombre);
    
    fetch('borra.php',{
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
        if (data == 0 )
        {   
            alert("No existe esa enfermedad en ninguna base de datos");
            //respuesta.innerHTML = `<div class="alert alert-warning" role="alert">No existe esa enfermedad en ninguna de las bases de datos</div>`;
        }

        else
        {
            respuesta1.innerHTML = "";

            //respuesta.innerHTML = `<div class="alert alert-success" role="alert">Agregado correctamente</div>`; // ${data}
        }
    })

})

