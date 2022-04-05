<?php

function conectar(){

    $user="root";
    $pass="informatica";
    $server="localhost:3306";
    $db="concesionario";
    $conexion=mysqli_connect($server,$user,$pass,$db);

    return $conexion;

}

?>
