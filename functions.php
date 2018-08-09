<?php 

function conexion_db($bd_config){
	try{
		$conexion_db = new PDO("mysql:host=localhost;dbname=" . $bd_config['basedatos'], $bd_config['usuario'], $bd_config['pass']);
		return $conexion_db;
	} catch (PDOException $e){
		return false;
	}
}


function comprobar_sesion(){
	if (isset($_SESSION['usuario'])) {
		header('Location: login.php');
	}
}

function limpiarTexto($dato)
{
	//$dato = trim($dato);
	//$dato = htmlspecialchars($dato);
	//$dato = stripcslashes($dato);
	$dato = filter_var($dato, FILTER_SANITIZE_STRING);

	return $dato;
}

function limpiarCorreo($correo)
{

	$correo = filter_var($correo, FILTER_SANITIZE_EMAIL);

	return $correo;
}


function portafolio_por_id($conexion, $id){
	$resultado = $conexion->query("SELECT * FROM portafolio WHERE idportafolio = $id LIMIT 1");
	$resultado = $resultado->fetchall();
	return ($resultado) ? $resultado : false;
}

?>