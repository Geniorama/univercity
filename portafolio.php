<?php
require 'config.php';
require 'functions.php';


$conexion = conexion_db($bd_config);


$productos = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM portafolio ORDER BY titulo");
$productos->execute();
$productos = $productos->fetchAll();

if (!$productos) {
	header('Location: index.php');
}

require 'views/portafolio.view.php';
?>
