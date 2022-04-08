<?php

include("conexionBD.php");
$conexion=conectar();

$cc=$_GET['id'];
$consulta = "CALL deleteUser($cc) ";
$resultado=mysqli_query($conexion, $consulta);

header("location:client.php");

mysqli_free_result($resultado);
mysqli_close($conexion);

?>