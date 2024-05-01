function opciones()
{
    var opcion= document.getElementById("asociado");
    var asociado=opcion.options[opcion.selectedIndex].text;
    console.log(asociado);
    var area=document.getElementById("area");
    if(asociado=="Pineda"){
        area.value="asociado1";
    }
}