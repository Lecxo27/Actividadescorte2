<?php
$ar=fopen("archivo.txt", "w+") or die ("Error al crear el archivo");


$not=$_REQUEST['TBnotas'];

fwrite($ar,$not);
fwrite($ar,"\n");


header("Content-disposition: attachment; filename=archivo.txt");
header("Content-type: Actividad4.com");
readfile("archivo.txt");
?>