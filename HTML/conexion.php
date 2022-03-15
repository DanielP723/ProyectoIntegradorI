<?php

$usuario=$_POST['username'];
$password=$_POST['pass'];

$conexion=mysqli_connect("localhost","root","","usuarios");
$consulta="SELECT * FROM user WHERE username = '$usuario' and contraseña='$password'";
$resultado=mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);

if ($filas > 0){
    header("location:home.php");
}else{
    echo "Usuario no encontrado";
}

mysqli_free_result($resultado);
mysqli_close($conexion);

?>