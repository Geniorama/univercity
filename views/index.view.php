<!--header -->
	<?php require 'header.php'; ?>
	<div class="modal-window" id="pop-up">
		<div class="container">
			<div class="row center-xs">
				<div class="col-xs-12 col-md-6">
					<div class="card">
					<img src="img/img-popup.jpeg" alt="" class="img-fluid">
					<i class="far fa-times-circle"></i>
					<h3>Nueva línea <b>Univer</b>City</h3><br>
					<p class="number"><a href="tel:+574572948">(57+1)4572948</a></p>
					<p class="number"><a href="tel:+573208573862">(+57)320 8573862</a></p><br><br>
					<a href="tel:+574572948" class="btn-theme btn-dark">Llama al fijo</a>
					<a href="tel:+573208573862" class="btn-theme btn-dark">Llama al Móvil</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="home" class="home-image">
		<img src="img/home-image.jpeg" alt="" class="img-fluid">
		<div class="caption-slider">
			<div class="container">
				<div class="row text-center center-xs">
					<div class="col-xs-12">
						<p class="wow slideInLeft"><b>Univer</b>City</p>
						<p class="slogan wow slideInRight">Impresión <img src="img/more.png" alt="" class="img-more"> Agencia Digital</p>
					</div>
					
					<div class="scroll-mouse"></div>
					
				</div>
			</div>
		</div>
	</div>

	<section class="section" id="servicios">
		<div class="container-fluid">
			<div class="row center-xs">
				<div class="grid grid-services">
					<div class="grid-item">
						<img src="img/printing.jpg" alt="">
						<div class="caption">
							<a href="impresion.php" class="link">Impresión</a>
						</div>
					</div>
					<div class="grid-item">
						<img src="img/bg-digital.jpeg" alt="">
						<div class="caption">
							<a href="agencia-digital.php" class="link">Agencia Digital</a>
						</div>
					</div>
					<div class="grid-item">
						<img src="img/banner.jpg" alt="">
						<div class="caption">
							<a href="http://univercity.cataprom.com/seccion/inicio.html" class="link" target="_blank">Merchandising</a>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</section>

	<section class="section" id="algunos-trabajos">
		<div class="container-fluid">
			<div class="row center-xs">
				<div class="col-xs-12 caja-titulo" id="impresion">
					<h2>NUESTROS TRABAJOS</h2>
					<h3>más recientes</h3>
				</div>
			</div>
			<div class="row gallery">
						<?php foreach ($productos as $producto): ?>
							<div class="col-xs-12 col-md-3 item-gallery" data-category="<?= $producto['categoria'] ?>">
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
			

			<div class="row">
				<div class="col-xs-12 caja-titulo text-center">
					<a href="portafolio.php" class="btn-theme btn-dark">Ver todo el portafolio</a>
				</div>
			</div>
		</div>
	</section>
	<section class="section" id="conocenos">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-md-6 caja bg-image">
					
				</div>
				<div class="col-xs-12 col-md-6 caja text-center">
					<h2>Conócenos</h2>
					<p>Adelante, atrévete a conocer más sobre nuestra historia y nuestro equipo de trabajo. Nos hemos puesto a la tarea de posicionarnos y ser la mejor opción para tus proyectos.</p>
					<a href="conocenos.php" class="btn-theme btn-dark"> Ver más</a>
				</div>
			</div>
		</div>
	</section>
	<section class="section bg-grey" id="clientes">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 caja-titulo text-center">
					<h2>Clientes felices</h2>
				</div>
				<div class="col-xs-12 text-center">
					<div class="owl-clientes owl-carousel">
					  <div class="item-carousel"><img src="img/clientes/cliente-01.jpg" alt=""></div>
					  <div class="item-carousel"><img src="img/clientes/cliente-02.jpg" alt=""></div>
					  <div class="item-carousel"><img src="img/clientes/cliente-03.jpg" alt=""></div>
					  <div class="item-carousel"><img src="img/clientes/cliente-04.jpg" alt=""></div>
					  <div class="item-carousel"><img src="img/clientes/cliente-05.jpg" alt=""></div>
					  <div class="item-carousel"><img src="img/clientes/cliente-06.jpg" alt=""></div>
					  <div class="item-carousel"><img src="img/clientes/cliente-07.jpg" alt=""></div>
					  <div class="item-carousel"><img src="img/clientes/cliente-08.jpg" alt=""></div>
					  <div class="item-carousel"><img src="img/clientes/cliente-09.jpg" alt=""></div>
					  <div class="item-carousel"><img src="img/clientes/cliente-10.jpg" alt=""></div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php require 'footer.php'; ?>