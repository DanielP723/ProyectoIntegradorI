<?php

include("conexionBD.php");

$nombre=$_POST['nameProduct'];
$stock=$_POST['Stock'];
$modelo=$_POST['modelProduct'];
$marca=$_POST['Marca'];
$precio=$_POST['Precio'];

$conexion=conectar();
$insertar = "INSERT INTO productos (nombre_p,stock,modelo,marca,precio) VALUES ('$nombre','$stock','$modelo','$marca','$precio')";

$resultado = mysqli_query($conexion,$insertar);

header("location:products.php");

mysqli_close($conexion);

?>