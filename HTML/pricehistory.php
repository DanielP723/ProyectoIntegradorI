<?php

include("conexionBD.php");
$conexion=conectar();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Products</title>
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
<body>
	<div class="mdl-tabs__panel" id="tabListProducts">
		<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--8-col-desktop mdl-cell--2-offset-desktop">
				<div class="full-width panel mdl-shadow--2dp">
					<div class="full-width panel-tittle bg-success text-center tittles">
						Lista de Productos
					</div>
					<div class="full-width panel-content">
						<form action="#">
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
								<label class="mdl-button mdl-js-button mdl-button--icon" for="searchProduct">
									<i class="zmdi zmdi-search"></i>
								</label>
								<div class="mdl-textfield__expandable-holder">
									<input class="mdl-textfield__input" type="text" id="searchProduct">
									<label class="mdl-textfield__label"></label>
								</div>
							</div>
						</form>
						<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp full-width table-responsive">
							<thead>	
								<tr>
									<th>Id</th>
									<th class="mdl-data-table__cell--non-numeric">Nombre</th>
									<th>Precio</th>
									<th>Modificación</th>
								</tr>
							</thead>
								<?php
								$consulta = "SELECT idProductos,nombre_p,precio,modificacion FROM historico_precios";
								$resultado = mysqli_query($conexion,$consulta);
								while($mostrar=mysqli_fetch_array($resultado)){
								?>
							<tbody>
								<tr>
									<td><?php echo $mostrar['idProductos']?></td>
									<td><?php echo $mostrar['nombre_p']?></td>
									<td><?php echo $mostrar['precio']?></td>
									<td><?php echo $mostrar['modificacion']?></td>
								</tr>
								<?php
								}
								?>
							</tbody>
						</table>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</body>
</html>

