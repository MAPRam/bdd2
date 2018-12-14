function changeInsert(divid)
{
    console.log(divid);
    

    if (divid == "option1") 
    {
        document.getElementById("formulario1").style.visibility="visible";
        document.getElementById("formulario1").style.display="block";
        document.getElementById("formulario2").style.visibility="hidden";
        document.getElementById("formulario2").style.display="none";
        document.getElementById("formulario3").style.visibility="hidden";
        document.getElementById("formulario3").style.display="none";    
    }
    else if(divid == "option2")
    {
        document.getElementById("formulario1").style.visibility="hidden";
        document.getElementById("formulario1").style.display="none";
        document.getElementById("formulario2").style.visibility="visible";
        document.getElementById("formulario2").style.display="block";
        document.getElementById("formulario3").style.visibility="hidden";
        document.getElementById("formulario3").style.display="block";
    }
    else if(divid =="option3")
    {
        document.getElementById("formulario1").style.visibility="hidden";
        document.getElementById("formulario1").style.display="none";
        document.getElementById("formulario2").style.visibility="hidden";
        document.getElementById("formulario2").style.display="none";
        document.getElementById("formulario3").style.visibility="visible";
        document.getElementById("formulario3").style.display="block";
    }
}

function hola()
{
    console.log("HOLAAA");
}