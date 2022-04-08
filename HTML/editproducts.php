<?php

include("conexionBD.php");

$id=$_GET['id'];
$nombre=$_POST['nameProduct'];
$stock=$_POST['Stock'];
$modelo=$_POST['modelProduct'];
$marca=$_POST['Marca'];
$precio=$_POST['Precio'];

$conexion=conectar();
$editar = "UPDATE productos SET nombre_p = $nombre,stock = $stock, modelo = $modelo, marca = $marca, precio = $precio WHERE idProductos = $id";

$resultado = mysqli_query($conexion,$editar);

header("location:products.php");

mysqli_close($conexion);

?>