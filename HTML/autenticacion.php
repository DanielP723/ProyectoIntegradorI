<?php

include("conexionBD.php");

$usuario=$_POST['username'];
$password=$_POST['pass'];

$conexion=conectar();

$consulta="SELECT * FROM user WHERE username = '$usuario' and contraseña='$password'";
$resultado=mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);

if ($filas > 0){
    header("location:home.php");
}else{
    header("location:login.php");
}

mysqli_free_result($resultado);
mysqli_close($conexion);

?>