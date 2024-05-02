<?php 

$fi=fopen("tareasdecocina.txt")
or die("ocurrio un error");
fwrite($fi,"Tareas:");
fwrite($fi,$_POST['nombre']);
fclose($fi);
?>
