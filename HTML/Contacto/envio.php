<?php
    if (isset($_POST['formulario'])){
        if (!empty($_POST['nombre']) && !empty($_POST['email']) && !empty($_POST['mensaje'])){
            $to = "diego.vivas.2020@upb.edu.co";
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            $mensaje = $_POST['mensaje'];
            $subject = "Necesito su ayuda";

            $headers = "From: Concesionario UPB";
            $mensajeCompleto = $mensaje . "\n Atentamente: " . $nombre;
            mail($to, $subject, $mensajeCompleto, $headers);
            if($mail){
                echo "<h4>¡Enviado!</h4>";
            }
        }
    }

?>