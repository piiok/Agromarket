<!DOCTYPE HTML>
<html>
	<head>
		<title>Agromarket</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<section id="header">

					<!-- Logo -->
						<a href="index.html"><img src="images/logo2.png" width="200px" alt="logo"></a>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="index.php">Inicio</a></li>
								<li>
									<a href="#">Categorias</a>
									<ul>
										<li><a href="#">Categoria I</a></li>
										<li><a href="#">Categoria II</a></li>
										<li><a href="#">Categoria III</a></li>
										<li>
											<a href="#">Categoria IV</a>
											<ul>
												<li><a href="#">Subcategoria I</a></li>
												<li><a href="#">Subcategoria II</a></li>
												<li><a href="#">Subcategoria III</a></li>
											</ul>
										</li>
										<li><a href="#">Categoria V</a></li>
									</ul>
								</li>
								<li><a href="vender.php">Vender</a></li>
								<li><a href="login.php"><?php if (!empty($_POST['correo'])) {  echo $_POST['correo'];}else{ echo "Login";}?></a></li>
								<li class="current">
									<form action="productos.php" method="POST">
									<input type="text" name="search" id="search" placeholder="<?php echo $_POST['search'];?>"><a class="boton"><button type="submit">Buscar</button></a>
									</form>
									
								</li>
							</ul>
						</nav>
					</section>
			<!-- Main -->
				<section id="main">
					<div class="container">
						<div class="row">
							<div class="col-8 col-12-medium">

								<!-- Content -->
									<article >
										<section>
				
											<ul class="dates">
												<li>
													<span class="date">Ago <strong>27</strong></span>
													<h3><a href="#">Manzana Roja</a></h3><br>
													<a href="#" class="image featured"><img src="images/pic14.jpg" alt="" /></a>
													<p>30 Cajas de manzanas Red Chief, de sabor sensacional.</p>
                                                </li>
                                                <li>
													<span class="date">Ago <strong>25</strong></span>
													<h3><a href="#">Manzana Verde</a></h3><br>
													<a href="#" class="image featured"><img src="images/pic16.jpg" alt="" /></a>
													<p>30 Cajas de manzanas Green Chief, de sabor sensacional.</p>
												</li>
												<!-- <li>
													<span class="date">Ago <strong>23</strong></span>
													<h3><a href="#">Piña Oro Miel</a></h3><br>
													<a href="#" class="image featured"><img src="images/pic15.jpg" alt="" /></a>
													<p>Piñas por cajas de 5,6,7,8,9 con pesos entre 2,2 y 1,2.</p>
												</li>
												<li>
													<span class="date">Ago <strong>15</strong></span>
													<h3><a href="#">Magna tempus lorem feugiat</a></h3>
													<a href="#" class="image featured"><img src="images/pic13.jpg" alt="" /></a>
													<p>Dolore consequat sed phasellus lorem sed etiam nullam dolor etiam sed amet sit consequat.</p>
												</li>
												<li>
													<span class="date">Ago <strong>12</strong></span>
													<h3><a href="#">Dolore tempus ipsum feugiat nulla</a></h3>
													<a href="#" class="image featured"><img src="images/pic11.jpg" alt="" /></a>
													<p>Feugiat lorem dolor sed nullam tempus lorem ipsum dolor sit amet nullam consequat.</p>
												</li>
												<li>
													<span class="date">Ago <strong>10</strong></span>
													<h3><a href="#">Blandit tempus aliquam?</a></h3>
													<a href="#" class="image featured"><img src="images/pic12.jpg" alt="" /></a>
													<p>Feugiat sed tempus blandit tempus adipiscing nisl lorem ipsum dolor sit amet dolore.</p>
												</li> -->
											</ul>
										</section>
									</article>

							</div>
							<div class="col-4 col-12-medium">

                                <!-- Sidebar -->
                                    <!-- <h3 class="dates" style="display:none">Ubicaciones</h3><br> -->
									<section class="box">
										<a href="#" class="image featured"><iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d63356.76129849102!2d-73.10599048628053!3d7.033062100649776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sfinca!5e0!3m2!1ses-419!2sco!4v1536702379210" width="100%" height="300px" frameborder="0" style="border:0" allowfullscreen></iframe></a>
										<header>
											<h3>Productores cerca</h3>
										</header>
										<p>Estos son algunos de los productores que ofrecen <?php echo $_POST['search'];?> cerca de tu ubicación.</p>
										<footer>
											<a href="#" class="button alt">Ver Mapa</a>
										</footer>
									</section>
							

							</div>
						</div>
					</div>
				</section>
				</div>
			<!-- Footer -->
			<section id="footer">
					<div class="container">
						<div class="row">
							<div class="col-12">

									<div id="copyright">
										<ul class="links">
											<li><a style="text-decoration:none;" href="mailto:contacto@agromarket.com">contacto@agromarket.com</a></li>
										</ul>
									</div>

							</div>
						</div>
					</div>
				</section>

		

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>