<?php
include 'conexiondirecta.php';
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$email=$_POST["email"];
$pass=$_POST["pass"];
$confirmacion=$_POST["confirmacion"];



$insertar= "insert into registro(nombre,apellido,email,pass,confirmacion) values ('$nombre','$apellido','$email','$pass','$confirmacion')";

$resultado = mysqli_query($conexion, $insertar);
if(!$resultado){
echo "Error al registrarse";
}else{
    echo"Usuario registrado exitosamente";

}
mysqli_close($conexion);

echo "Bienvenido \t", $nombre, "   ", $apellido, "   has sido registrado en el sistema \n";


$fi=fopen("regdat.txt","a");


fwrite($fi, "\t");
fwrite($fi, "NOMBRE:");
fwrite($fi, $nombre);
fwrite($fi, "\t");
fwrite($fi, "Apellido:");
fwrite($fi, $apellido);
fwrite($fi, "\t");
fwrite($fi, "E-mail:");
fwrite($fi, $email);
fwrite($fi, "\t");
fwrite($fi, "Contraseña:");
fwrite($fi, $pass);
fwrite($fi, "\t");
fwrite($fi, "Aceptacion de politicas:");
fwrite($fi, $confirmacion);
fwrite($fi, "\t");
fwrite($fi, "\n");
fclose($fi);
echo "\n ";
echo "\t , ahora podras consultar información de nuestro sitio \n";



?>
<body>
    <form method="post" action="base.html">
<div class="form-group">
                                          <button class="btn btn-outline-dark d-inline-block text-light mr-2 mb-3"><i class="icon ion-logo-instagram lead align-self-center "><a class="btn" href="https://www.instagram.com/leviatan_dance_project/" target="_blank">Instagram</a></i></button>
                        
                    </div>
                    <button class="btn btn-primary">Salir</button>   
</form>
</body>
