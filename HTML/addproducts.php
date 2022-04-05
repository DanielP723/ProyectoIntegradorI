<?php

include("conexionBD.php");

$nombre=$_POST['nameProduct'];
$stock=$_POST['Stock'];
$modelo=$_POST['modelProduct'];
$marca=$_POST['Marca'];
$precio=$_POST['Precio'];

$conexion=conectar();
$insertar = "INSERT INTO productos (nombre_p,stock,modelo,marca,precio,id_productos_eliminacion) VALUES ('$nombre','$stock','$modelo','$marca','$precio','0')";

$resultado = mysqli_query($conexion,$insertar);

header("location:products.php");

mysqli_close($conexion);

?>