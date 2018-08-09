<!DOCTYPE html>
<html lang="es_CO">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700,800|Raleway:300,400,700" rel="stylesheet"> 
	<link rel="stylesheet" href="../css/flexboxgrid.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<title>Dashboard | Univercity</title>
</head>
<body>
	<section class="section-interior">
		<div class="container">
			<div class="row center-xs middle-xs">
				<div class="col-xs-12 col-md-4">
					<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
						<div class="row">
							<div class="col-xs-12"><h1>UniverSitio</h1></div>
							<div class="col-xs-12">
								<input type="file" class="filestyle" data-buttonText="Seleccione archivo" name="file">
							</div>
							<div class="col-xs-12">
								<input type="submit" class="btn-theme btn-dark"  name="enviar" value="Importar">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
</body>
</html>