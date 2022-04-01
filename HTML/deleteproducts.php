<?php

include("conexionBD.php");

$id=$_POST['idProductos'];

$conexion=conectar();
$borrar = " DELETE FROM productos WHERE idProductos = $id ";

$resultado = mysqli_query($conexion,$borrar);

header("location:products.php");

mysqli_close($conexion);

?>