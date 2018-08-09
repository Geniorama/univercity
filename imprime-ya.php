<?php

$success = '';
$errores = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	$target_path = "admin/uploads/"; 
	$target_path = $target_path . basename( $_FILES['archivo_subido']['name']);
	$destino = 'comercial@univercity.com.co';
	$nombre = $_POST['nombre'];
	$telefono = $_POST['telefono'];
	$correo = $_POST['correo'];
	$mensaje = $_POST['mensaje'];

	$contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nMensaje: " . $mensaje . "\nTeléfono: " . $telefono . "\nArchivo: " . "http://univercity.com.co/" . $target_path;
	if(move_uploaded_file($_FILES['archivo_subido']['tmp_name'], $target_path))
	{ 

	$success .= "Gracias <span class='name-contact'>$nombre</span> . Su mensaje ha sido enviado";
	} 
	else
	{ 
	$errores = "Su mensaje no pudo ser enviado";
	}
}


require 'views/imprime-ya.view.php';
?>