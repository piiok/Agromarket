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
						<a href="index.php"><img src="images/logo2.png" width="200px" alt="logo"></a>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li class="current"><a href="index.html">Inicio</a></li>
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
								<li>
									<form action="productos.php" method="POST">
									<input type="text" name="search" id="search" placeholder="Escribe el producto"><a class="boton"><button type="submit">Buscar</button></a>
									</form>
									
								</li>
							</ul>
						</nav>
						
					<!-- Banner -->
						<section id="banner">
							<header>
								<h2>Compra y vende con nosotros</h2>
								<p>Eliminamos los intermediarios en el proceso ; )</p>
							</header>
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