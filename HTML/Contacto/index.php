<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Contacto</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <!-- formulario de contacto en html y css -->  

    <form action="submeter-formulario.php" method="post">

        <div class="formulario">

            <h1> Contáctanos </h1>
                
                <label for="nombre" class="colocar_nombre"> Nombre</label>
                <input type="text" name="nombre" class="input" id="" required="obligatorio" placeholder="Escribe tu nombre">
                
                
                
                <label for="email" class="colocar_email"> Email</label>
                <input type="email" name="email" class="input" id="" required="obligatorio" placeholder="Escribe tu Email">
                
                
                <label for="mensaje" class="colocar_mensaje"> Mensaje</label>                     
                <textarea name="mensaje" class="input" id="" required="obligatorio" placeholder="Deja aquí tu comentario..."></textarea> 
                
                <button type="submit" name="formulario" class="botton" id=""><p>Enviar</p></button>
        </div>
    </form>
<?php
include("envio.php")
?>
</body>
</html>