<?php

include("conexionBD.php");

$id=$_GET['id'];

$conexion=conectar();
$borrar =$borrar ="CALL deleteProducts($id) ";

$resultado = mysqli_query($conexion,$borrar);

header("location:products.php");

mysqli_close($conexion);

?>