<?php

include("conexionBD.php");

$nombre=$_POST['NameUser'];
$identificacion=$_POST['DNIUser'];
$telefono=$_POST['TelUser'];
$email=$_POST['emailUser'];
$direccion=$_POST['addressUser'];

$conexion=conectar();
$insertar = "INSERT INTO usuarios (nombre_u,documento,direccion,telefono,correo) VALUES ('$nombre','$identificacion','$direccion','$telefono','$email')";

$resultado = mysqli_query($conexion,$insertar);

header("location:client.php");

mysqli_close($conexion);

?>