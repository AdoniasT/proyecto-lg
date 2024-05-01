<?php 

$fi=fopen("tareasdecocina.txt","a")
or die("ocurrio un error");
fwrite($fi,"Tareas: \n");
fwrite($fi,$_POST['li-container']);
?>