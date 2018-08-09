<?php require 'header.php'; ?>
	<section class="section-home home-formulario" id="home">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 caja text-center">
					<div class="navegacion">
						<a href="index.php">Home</a>
						<p><i class="fas fa-angle-right"></i></p>
						<a href="impresion.php">Impresión</a>
						<p><i class="fas fa-angle-right"></i></p>
						<a href="imprime-ya.php" class="active">Imprime ya</a>
					</div>
					<h1>Imprime ya</h1>
					<p>Relájate, nosotros atenderemos tu solicitud inmediatamente</p>
				</div>
			</div>
		</div>
	</section>
	<section class="section-interior">
		<div class="container">
			<div class="row">
				<div class="col-xs-12"><h2>Solicitud de Impresión</h2></div>
				<div class="col-xs-12 col-md-6">
					<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
						<div class="row">
							<div class="col-xs-12 col-md-6">
								<input type="text" class="input-theme" placeholder="Nombre" name="nombre">
							</div>
							<div class="col-xs-12 col-md-6">
								<input type="text" class="input-theme" placeholder="Teléfono" name="telefono">
							</div>
							<div class="col-xs-12">
								<input type="text" class="input-theme" placeholder="Correo" name="correo">
							</div>
							<div class="col-xs-12">
								<textarea class="textarea-theme" placeholder="Especificaciones" name="mensaje"></textarea>
							</div>
							<div class="col-xs-12 uploader">
								<label for="archivo_subido">Subir archivo</label>
								<input type="file" class="file-input" name="archivo_subido" id="archivo_subido">
							</div>
							<div class="col-xs-12">
								<?php if (!empty($success)): ?>
									<div class="alert alert-success" role="alert"><?php echo $success; ?></div>
								<?php endif ?>

								<?php if (!empty($errores)): ?>
									<div class="alert alert-danger" role="alert"><?php echo $errores; ?></div>
								<?php endif ?>
							</div>
							<div class="col-xs-12">
								<input type="submit" class="btn-theme btn-dark " value="Enviar solicitud">
							</div>
						</div>
					</form>
				</div>
				<div class="col-xs-12 col-md-6">
					<img src="img/woman.jpeg" alt="" class="img-fluid">
				</div>
			</div>
		</div>
	</section>


<?php require 'footer.php'; ?>