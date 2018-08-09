<?php

require 'config.php';
require 'functions.php';

$conexion = conexion_db($bd_config);

$statement = $conexion->prepare('SELECT SQL_CALC_FOUND_ROWS * FROM portafolio ORDER BY titulo LIMIT 8');
$statement->execute();
$productos = $statement->fetchAll();

require 'views/index.view.php';
?>