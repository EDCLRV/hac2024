<?php

$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$email=$_POST["email"];
$esconder=$_POST["esconder"];
$confirmacion=$_POST["confirmacion"];



echo "Bienvenido \t", $nombre, "   ", $apellido, "   has sido registrado en el sistema \n";
$fi=fopen("yoarchivo.txt","a")
or die("problemas al crear archivo");

fwrite($fi, "Datos:");
fwrite($fi, "\n");
fwrite($fi, $_POST['nombre']);
fwrite($fi, "\n");
fwrite($fi, $_POST['apellido']);
fwrite($fi, "\n");
fwrite($fi, "------------------ \n\n");
?>