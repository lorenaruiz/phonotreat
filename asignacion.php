<!DOCTYPE html>
<!--[if IE 8 ]> <html class="ie8 no-js"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js">  <!--<![endif]-->

<head>
<<<<<<< Updated upstream
		<?php include 'php/verificarRol.php';?>
=======
>>>>>>> Stashed changes
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
				<nav role="navigation">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Navegacion</span>
							<span class="fa">&#xf0c9;</span>
						</button>
					</div>

					<!-- Collección de links de navegación y formularios para toggle -->
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul>
							<li class="active"><a href="index-2.html">Inicio</a></li>
							<li><a href="nosotros.html">Nosotros</a></li>
                            <li><a href="padres.html">Padres</a></li>
							<li><a href="contacto.html">Contacto</a></li>
							<li class="has-children">
								<a>Ingresar</a>
								<ul class="children">
                                <form  action="#" method="post">
									<li><input type="text" name="username" placeholder="Usuario"></li>
									<li><input type="password" name="password" placeholder="Contraseña"></li>
									<li><input class="button red" type="submit" value="&#xf138; ENTRAR"></li>
                                    </form>
								</ul>
							</li>
						</ul>
					</div><!-- /.navbar-collapse -->
					<div id="sun"></div>

				</nav>
				<div class="clearfix"></div>
			</header>
			<!-- end header -->

			<!-- page content area -->
			<section id="content" class="col-lg-7 col-md-8 col-sm-12">

				<div class="cloud">
<<<<<<< Updated upstream
					<h1>#Asignacion</h1>
				</div>

				<div class="content-bg">
					<h2 class="entry-title post-title">Ingrese Documento</h2>
					<form  action="php/guardarUsuario.php" method="post">
						<strong>Nombre</strong><input type="text" name="nombre">
=======
					<h1>Asignar Fonema</h1>
				</div>

				<div class="content-bg">
					<h2 class="entry-title post-title">Consultar Paciente</h2>
					<form  action="#" method="post">
						<strong>Identificación</strong><input type="text" name="id" value='".$fila['idPersona']."'>
						<strong>Nombre</strong><input type="text" name="nombre" value='"Nombre_Persona"' readonly>
						<strong>Género</strong><input type="text" name="genero" value='"Genero_Persona"' readonly>
						<strong>Fonemas</strong><br/>
						<input type="checkbox" name="r" id="r-facil">Fonema /r/ Básico &emsp; &emsp;
						<input type="checkbox" name="s" id="r-medio">Fonema /r/ Intermedio &emsp; &emsp; 
						<input type="checkbox" name="s" id="r-dificil">Fonema /r/ Avanzado <br/>
						<input type="checkbox" name="r" id="s-facil">Fonema /s/ Básico &emsp; &emsp; 
						<input type="checkbox" name="s" id="s-medio">Fonema /s/ Intermedio &emsp; &emsp; 
						<input type="checkbox" name="s" id="s-dificil">Fonema /s/ Avanzado <br/>
						<br/>
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
						<div class="col-lg-12 col-md-12">&copy; 2017 Proyecto PhonoTreat</div>
					</div>
				</div>
			</div>
			
=======
						<div class="col-lg-12 col-md-12">&copy; 2013 Kindergarten</div>
					</div>
				</div>
			</div>
>>>>>>> Stashed changes
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

<<<<<<< Updated upstream
<!-- Mirrored from craftedpixels.net/demo-html/kindergarten-template/blog-post.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 May 2017 20:10:16 GMT -->
=======
>>>>>>> Stashed changes
</html>