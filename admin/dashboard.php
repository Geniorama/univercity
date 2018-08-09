<?php
require '../config.php';
require '../functions.php';

$conexion = conexion_db($bd_config);

if(!$conexion){
	echo "Error de conexión";
} else{
	echo "Esta conectado";
}

if (isset($_POST['enviar']))
{
	
  $filename=$_FILES["file"]["name"];
  $info = new SplFileInfo($filename);
  $extension = pathinfo($info->getFilename(), PATHINFO_EXTENSION);
 
  $i = 0;

   if($extension == 'csv')
   {
	$filename = $_FILES['file']['tmp_name'];
	$handle = fopen($filename, "r");
 
	while( ($data = fgetcsv($handle, 1000, ";") ) !== FALSE )
	{

		$i++;

		if ($i != 1) {
			$statement = $conexion->prepare("INSERT INTO portafolio(idportafolio,titulo,categoria,imagen,descripcion,nombre_cliente,link,fecha,servicios,equipo) VALUES(:idportafolio, :titulo, :categoria, :imagen, :descripcion, :nombre_cliente, :link, :fecha, :servicios, :equipo)");

		  	$statement->execute(array(
		  		':idportafolio'=> $data[0],
		  		':titulo'=> $data[1],
		  		':categoria'=> $data[2],
		  		':imagen'=> $data[3],
		  		':descripcion'=> $data[4],
		  		':nombre_cliente'=> $data[5],
		  		':link'=> $data[6],
		  		':fecha'=> $data[7],
		  		':servicios'=> $data[8],
		  		':equipo'=> $data[9]

		  	));
		}

   }
 
      fclose($handle);
   }
}
         
        
require '../views/dashboard.view.php';
?>