<?php
$destino = "migueknd11@gmail.com";
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$mensaje = $_POST["mensaje"];
$email = $_POST['email'];


$contenido = "\Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTelefono: " . $Telefono . "\nMensaje: " . $mensaje;
mail($destino,"Contacto", $contenido);

?>