<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Clients</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/sweetalert2.css">
	<link rel="stylesheet" href="css/material.min.css">
	<link rel="stylesheet" href="css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" href="css/main.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
	<script src="js/material.min.js" ></script>
	<script src="js/sweetalert2.min.js" ></script>
	<script src="js/jquery.mCustomScrollbar.concat.min.js" ></script>
	<script src="js/main.js" ></script>
</head>
<?php 

include('conexionBD.php');

$conexion = conectar();

$salida = "";

$query = "SELECT nombre_p,idProductos,stock,precio,modelo,marca FROM productos_activos ";

if(isset($_POST['consulta'])){
	$q = $conexion->real_escape_string($_POST['consulta']);
	$query= "SELECT nombre_p,idProductos,stock,precio,modelo,marca FROM productos_activos WHERE (nombre_p LIKE '%".$q."%' OR idProductos LIKE '%".$q."%' OR modelo LIKE '%".$q."%' OR marca LIKE '%".$q."%')";
}
$resultado = $conexion->query($query);

if($resultado->num_rows > 0){
	$salida.= "<table class='mdl-data-table mdl-js-data-table mdl-shadow--2dp full-width table-responsive'>
			<thead>	
				<tr>
					<th class='mdl-data-table__cell--non-numeric'>Nombre</th>
					<th>Id</th>
					<th>Cantidad</th>
					<th>Precio</th>
                    <th>Modelo</th>
                    <th>Marca</th>
                    <th>Histórico</th>
                    <th>Editar</th>
                    <th>Borrar</th>
					
				</tr>
				</thead>
				<tbody>";
	
	while($fila = $resultado->fetch_assoc()){
		$salida.="<tr>
		<td>".$fila['nombre_p']."</td>
		<td>".$fila['idProductos']."</td>
		<td>".$fila['stock']."</td>
		<td>".$fila['precio']."</td>
		<td>".$fila['modelo']."</td>
		<td>".$fila['marca']."</td>
        <td><a href='pricehistory.php?id=$fila[idProductos]'' class='mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect' name='change_history'><i class='zmdi zmdi-calendar-note'></i></button></td>
		<td><a href='editproducts.php?id=$fila[idProductos]'' class='mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect'><i class='zmdi zmdi-edit'></i></button></td>
		<td><a href='deleteproducts.php?id=$fila[idProductos]'' class='mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect'><i class='zmdi zmdi-delete'></i></button></td>
		";
		
	}

	$salida.="</tbody></table>";
}else{
	$salida.="No hay dato";
}

echo $salida;

$conexion->close();

?>

</head>
</html>

