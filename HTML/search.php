
<?php 

if(!isset($_POST['search'])) exit('No se recibió el valor a buscar');

include('conexionBD.php');

function search()
{
  $conexion = conectar();
  $search = $conexion->real_escape_string($_POST['search']);
  $consulta = "SELECT nombre_p,modelo,marca,precio,imagen FROM productos WHERE (modelo LIKE '%$search%' OR nombre_p LIKE '%$search%' OR marca LIKE '%$search%')";
  $resultado = mysqli_query($conexion,$consulta);
			while(($mostrar=mysqli_fetch_array($resultado))){
                              
      ?>
      
      <div class="col">
                    <div class="card shadow-sm">
                    <img width="300" height="300" src="<?php echo $mostrar['imagen'] ?>" class="card-img-top" alt="" >

                  <div class="card-body">
                          <h5 class="card-tittle"><?php echo $mostrar['nombre_p'] ?></h5>
                  <p class="card-text">Modelo <?php echo $mostrar['modelo'] ?> </p>
                  <p class="card-text">Marca <?php echo $mostrar['marca'] ?> </p>
                  <p class="card-text">Precio <?php echo $mostrar['precio'] ?> </p>
                  <div class="d-flex justify-content-between align-items-center">
              
          </div>
        </div>
      </div>
    </div>

    <?php
    }
}
search();
?>