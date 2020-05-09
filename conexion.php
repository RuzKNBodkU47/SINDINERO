<?php

$host = "localhost";
$user = "root";
$hostpw = "Inquisidor1922";
$database = "proyecto_web";

$conexion = mysqli_connect($host, $user, $hostpw, $database);

if($conexion===false){
    //echo "Conexion fallida";
}else{
    //echo "Conexion exitosa";
}
?>