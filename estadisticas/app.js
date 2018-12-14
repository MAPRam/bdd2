var consulta = document.getElementById("consulta"); 



consulta.addEventListener('click', function(e){
    e.preventDefault();
    
    var res = campos();
    console.log(res);

    

    //var datos = new FormData(formulario)
    //console.log(datos.get('unidad'))

    /*fetch('files/inserta.php',{
        method: 'POST',
        body: datos
    })
    .then( res => res.json())
    .then( data => {
        console.log(data)
        if (data === 'error')
        {
            respuesta.innerHTML = `<div class="alert alert-danger" role="alert"> Hay campos vacíos </div>`;
        }
        else
        {
            formulario.reset();
            respuesta.innerHTML = `<div class="alert alert-success" role="alert">${data}</div>`

        }
    })*/

})




/*////////////////////////////////////////////////////////////////////////////////////
 BLOQUE DE VERIFICACIÓN DE CAMPOS. 
 EN ESTE APARTADO SE COMIENZA VERIFICANDO QUÉ TIPÓ DE OPERACIÓN SE HA SELECCIONADO 
 EL PRIMER SELECT DEL HTML. CON ESTA INFORMACIÓN YA SE SABE SI LAS OPCIONES QUE 
 APARECEN SON DE SELECT E INPUT TECT  O DE DOS INPUT TEXT.
///////////////////////////////////////////////////////////////////////////////////*/


function campos()
{
    var campo1, campo2 = "";
    var flag = 0;

    var select1 = document.getElementById("select1").value;

    switch (select1) 
    {
        case "0":
            alert("Primero debe elegir una opción");
            break;

        case "pais":
            console.log("text y text");
            campo1 = document.getElementById("select3").value;
            campo2 = document.getElementById("select4").value;
            //console.log(campo1);
            //console.log(campo2);
            
            var regresa = [];

            if (campo1 != "" && campo2 != "") 
            {
                regresa.push(select1);
                regresa.push(1)
                return regresa;             
            }
            else if(campo1 != "" && campo2 == "")
            {
                regresa.push(select1);
                regresa.push(2)
                return regresa;
            }
            else if(campo1 == "" && campo2 != "")
            {
                regresa.push(select1);
                regresa.push(3)
                return regresa;
            }
            else if(campo1 == "" && campo2 == "")
            {
                regresa.push(select1);
                regresa.push(4)
                return regresa;
            }

            break;

        case "enfermedad":
            console.log("text y text");
            campo1 = document.getElementById("select3").value;
            campo2 = document.getElementById("select4").value;
            console.log(campo1);
            console.log(campo2);
            break;    

        case "tipo":
            console.log("Select y text");
            campo1 = document.getElementById("select3").value;
            campo2 = document.getElementById("select4").value;
            console.log(campo1);
            console.log(campo2);
            break;

        case "tratamiento":
            console.log("Select y text");
            campo1 = document.getElementById("select3").value;
            campo2 = document.getElementById("select4").value;
            console.log(campo1);
            console.log(campo2);
            break;
        
        case "reportes":
            console.log("Select y text");
            break;    

        default:
            alert("Ha ocurrido un error, intente más tarde");
            break;
    }   

    //return select1;
}
