<?php

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

$destinatario = "sebasbatery@gmail.com";
$asunto = "Información - Página web";

$complemento = "De: $nombre \n";
$complemento .= "Correo: $correo \n";
$complemento .= "Mensaje: $mensaje";

mail($destinatario, $asunto, $complemento);

header('Location:pageexitosa.php');


 ?>
