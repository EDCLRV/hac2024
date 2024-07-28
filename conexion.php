<?php

function conectar(){
    $user="root";
    $passc="";
    $server="localhost";
    $db="dance";
    $con=new mysqli($server,$user,$passc) or die ("Error al conectar a la base de datos".mysql_error());
    mysq_select_db($db,$con);
    return $con;

}
?>