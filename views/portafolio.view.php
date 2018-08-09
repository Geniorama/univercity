	<?php require 'header.php'; ?>
	<section class="home-portafolio" id="home">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 caja text-center">
					<div class="navegacion">
						<a href="index.php">Home</a>
						<p><i class="fas fa-angle-right"></i></p>
						<a href="portafolio.php" class="active">Portafolio</a>
					</div>
					<h1>Portafolio</h1>
				</div>
			</div>
		</div>
	</section>
	
	
	<div id="menu-portafolio">
		<div class="container-fluid">
			<div class="row middle-xs">
				<div class="col-xs-12">
					<nav class="category-link">
						<ul>
							<li class="btn-category" data-name="todo"><a href="#">Todo</a></li>
							<li class="btn-category" data-category="producto" data-name="Agencia Digital"><a href="#">Agencia Digital</a></li>
							<li class="btn-category" data-category="producto" data-name="Merchandising"><a href="#">Merchandising</a></li>
							<li class="btn-category" data-category="producto" data-name="Impresión"><a href="#">Impresión</a></li>
							<li class="btn-category" data-category="producto" data-name="Campañas"><a href="#">Campañas</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
	
	<section id="portafolio-interno">
		<div class="container-fluid">
			<div class="row gallery">
						<?php foreach ($productos as $producto): ?>
							<div class="col-xs-12 col-md-3 item-gallery mockups" id="<?= $producto['categoria'] ?>" data-category="producto">
								<img src="<?= $producto['imagen'] ?>" alt="" class="img-fluid">
								<div class="caption-masonry">
									<h5><?= $producto['categoria'] ?></h5>
									<a href="<?= $producto['link'] ?>" class="link" target="_blank"><?= $producto['titulo'] ?></a>
									<h4>Cliente: <span class="cliente"><?= $producto['nombre_cliente'] ?></span></h4>
									<div class="buttons">
										<a href="<?= $producto['link'] ?>" target="_blank"><i class="fas fa-link"></i></a>
										<a href="<?= $producto['imagen'] ?>" data-lightbox="<?= $producto['titulo'] ?>" data-title="<?= $producto['titulo'] ?>"><i class="fas fa-search-plus"></i></a>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="section" id="contacto">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 text-center">
					<h2>CONTÁCTANOS</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis dolor neque adipisci. Suscipit non totam amet incidunt dolore, dolor fugit, nesciunt accusamus facere assumenda voluptates consequatur laudantium corporis enim exercitationem.</p>
				</div>
				
				<div class="col-xs-12 spaced">
					<div class="row">
						<div class="col-xs-12 col-md-6">
							<div class="row center-xs info-contact">
								<div class="col-xs-12 col-md-6">
									<img src="img/iconos/mail.png" alt="" class="img-fluid">
									<p>comercial@univercity.com.co</p>
									<div class="spaced"></div>

									<img src="img/iconos/location.png" alt="" class="img-fluid">
									<p>Av. Calle 32 # 17-49. Bogotá - Colombia</p>
								</div>
								<div class="col-xs-12 col-md-6">
									<img src="img/iconos/phone.png" alt="" class="img-fluid">
									<p>(57 + 1)5658060</p>
									<div class="spaced"></div>

									<img src="img/iconos/cellphone.png" alt="" class="img-fluid">
									<p>comercial@univercity.com.co</p>
									
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-md-6">
							<form action="" class="formulario">
								<div class="row">
									<div class="col-xs-12 col-md-6">
										<input type="text" class="input-theme" placeholder="Tu nombre">
									</div>
									<div class="col-xs-12 col-md-6">
										<input type="email" class="input-theme" placeholder="Tu correo">
									</div>
									<div class="col-xs-12">
										<input type="phone" class="input-theme" placeholder="Tu teléfono">
									</div>
									<div class="col-xs-12">
										<textarea name="" id="" class="textarea-theme" placeholder="Tu mensaje"></textarea>
									</div>
									<div class="form-group">
										<input type="checkbox" class="checkbox-theme" id="newsletter">
										<label for="newsletter">Suscríbete a nuestra Newsletter</label>
									</div>
									<div class="col-xs-12">
										<input type="submit" value="Enviar" class="btn-theme btn-dark">
									</div>
								</div>
								
							</form>
						</div>
					</div>
				</div>				
			</div>
		</div>	
	</section>
	<?php require 'footer.php'; ?>
