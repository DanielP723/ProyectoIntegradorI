<?php
include("conexionBD.php");
$conexion=conectar();

?>


<!doctype html>
<html lang="en">
  <head>
  <link rel="icon" href="images/favicon.ico">
          <script>
                  if (window.history.replaceState) { 
    window.history.replaceState(null, null, window.location.href);
}
          </script>
        <script src="js/jquery-1.11.2.min.js"> </script>
        
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Concecionario cortes</title>



    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .titulo{
        color:#DF310C;
        
      }
    </style>

    
  </head>
  <body>
<header>


  <div class="navbar navbar-dark bg-dark shadow-sm" style="background-color:#cc7e2c;">
      
    <div class="container">
      <a href="index.php" class="navbar-brand d-flex align-items-center">
        <img src="images/favicon.ico" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24" alt="">
        <strong>Concecionario Cortes</strong>
      </a>

      <a href="catalogo.php" class="navbar-brand d-flex align-items-center">
        <strong>Ver productos</strong>
      </a>
      

      
    </div>

  </div>
</header>

<main>

<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/publicidad.png" alt="First slide" height="700">
    </div>

  </div>
</div>

<section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light titulo">BIENVENIDOS A CONCESIONARIO CORTES</h1>
        <p class="lead text-muted">Ofrecemos automóviles de excelente calidad provenientes de las marcas más prestigiosas del mundo como pueden ser Toyota, Renault, Mazda, BMW, entre otras. </p>
        
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container" >
    <H1 class="h1">ULTIMOS MODELOS</H1>
    <div>  </div>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" id="result">
      


      <?php
		$consulta = "SELECT nombre_p,modelo,marca,precio,imagen FROM productos;";
	$resultado = mysqli_query($conexion,$consulta);
        $i = 0;
			while(($mostrar=mysqli_fetch_array($resultado)) && ($i<3)){
                                $i += 1;
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
		?>

        


      </div>
    </div>
  </div>

</main>
<footer class="text-muted py-5">
  <div hidden class="container">
    <p class="mb-1">Más información: +57 315 384 5277 </p>
  </div>
</footer>
      
  </body>
</html>

