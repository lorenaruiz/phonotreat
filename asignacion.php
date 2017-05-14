<!DOCTYPE html>
<!--[if IE 8 ]> <html class="ie8 no-js"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js">  <!--<![endif]-->

<head>
		<?php include 'php/verificarRol.php';?>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>PhonoTreat - Dislalia</title>
		<link rel="shortcut icon" href="favicon.ico">

		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet" media="screen">

		<link href="css/style.css" type="text/css" rel="stylesheet" media="screen">
		<link href="css/font-awesome.css" type="text/css" rel="stylesheet" media="screen">

		<script src="js/modernizr.js"></script>
		<script src="js/respond.js"></script>
	</head>
	<body>
		<div class="container" id="wrapper">

			<!-- header -->
			<header>
				<a href="index-2.html" class="logo">
					<img src="images/logo.png" alt="" />
				</a>
				<?php
					include("Menu.php");

				?>
				<div class="clearfix"></div>
			</header>
			<!-- end header -->

			<!-- page content area -->
			<section id="content" class="col-lg-7 col-md-8 col-sm-12">

				<div class="cloud">
					<h1>Asignar Fonema</h1>
				</div>

				<div class="content-bg row">
					<h2 class="entry-title post-title">Consultar Paciente</h2>
					<div class="col-lg-12 col-md-12 col-sm-12 margin-bottom">
						<form method="post">
							<strong>Identificación</strong>
							<input id="Identificación" type="text" name="id" value=""><br/>
							<br/>
							<input class="button green pull-left" type="reset" onclick="buscarPaciente()" value="&#xf138; Buscar">
						</form>
					</div>
					<br>
					<div class="col-lg-12 col-md-12 col-sm-12">
						<form  action="#" method="post">
							<input id="idPersona" type="hidden" name="idPersona" value="">
							<strong>Nombre</strong><input id="obtainedname" type="text" name="nombre" value="" readonly>
							<strong>Género</strong><input id="obtainedGenre" type="text" name="genero" value="" readonly>
							<strong>Fonemas</strong><br/>
							<section id="asignaciones">
							</section>
							<input class="button green pull-left" type="submit" value="&#xf138; Guardar">
						</form>
					</div>
						
					
					<div class="clearfix"></div>
				</div>

			</section>
			<!-- end page content area -->

			<div class="clearfix"></div>
		</div>
		<!-- end #wrapper -->

		<footer>
			<div class="footer-menu">
				<div class="container">
					<div class="col-lg-6 col-md-6 col-sm-12 fa social-media">
						<a href="#">&#xf0d4;</a>
						<a href="#">&#xf082;</a>
						<a href="#">&#xf099;</a>
						<a href="#">&#xf16d;</a>
						<a href="#">&#xf08c;</a>
						<a href="#">&#xf0d2;</a>
						<a href="#">&#xf166;</a>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 footer-links">
						<div class="col-lg-12 col-md-12">&copy; 2017 Proyecto PhonoTreat</div>
					</div>
				</div>
			</div>
		</footer>

		<script src="js/jquery-1.10.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/custom.js"></script>
		<script src="js/jquery.prettyPhoto.js"></script>
		<script src="js/buscarPaciente.js"></script>
	</body>
</html>