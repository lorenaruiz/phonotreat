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
					<h1>Crear Persona</h1>
				</div>
				<div class="content-bg">
					<h2 class="entry-title post-title">Datos Personales</h2>
					<form  action="php/guardarUsuario.php" method="post">
						<strong>Nombre</strong><input type="text" name="nombre">
						<strong>Identificación</strong><input type="text" name="id">
						<strong>Fecha de nacimiento</strong><input type="date" name="fecha">
						<strong>Género</strong>
						<select id="genres" name="genero" class="input_select">
							<option value="M">Masculino</option>
							<option value="F">Femenino</option>
						</select>
						<strong>Usuario</strong><input type="text" name="username">
						<strong>Contraseña</strong><input type="password" name="password">
						<strong>Rol</strong>
						<select id="roles" name = "rol" class="input_select">
							<?php include ("php/listarRoles.php"); ?>
						</select>
						<input class="button green pull-left" type="submit" value="&#xf138; Guardar">
					</form>
					
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
		<script>
			(function(i, s, o, g, r, a, m) {
				i['GoogleAnalyticsObject'] = r;
				i[r] = i[r] || function() {
					(i[r].q = i[r].q || []).push(arguments)
				}, i[r].l = 1 * new Date();
				a = s.createElement(o),
						m = s.getElementsByTagName(o)[0];
				a.async = 1;
				a.src = g;
				m.parentNode.insertBefore(a, m)
			})(window, document, 'script', '../../../www.google-analytics.com/analytics.js', 'ga');

			ga('create', 'UA-86539134-2', 'auto');
			ga('send', 'pageview');

		</script>
	</body>

<!-- Mirrored from craftedpixels.net/demo-html/kindergarten-template/blog-post.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 May 2017 20:10:16 GMT -->
</html>