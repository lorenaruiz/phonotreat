<!DOCTYPE html>
<!--[if IE 8 ]> <html class="ie8 no-js"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js">  <!--<![endif]-->
	
<!-- Mirrored from craftedpixels.net/demo-html/kindergarten-template/gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 May 2017 20:09:58 GMT -->
<head>
		<?php

     include("php/conexion.php");

     //se verifica si la sesion exsiste y si el usuario tiene permisos para entrar a la pag
     if ( $_SESSION['session_usser_rol']!=3 || $_SESSION['session_usser_rol']=="") { 
	    header("location: index.php");
	    die();
	}
	
	$user_rol = $_SESSION['session_usser_rol'];


 ?>
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
		<script src="js/html5lightbox/html5lightbox.js"></script>
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
					<h1>Actividades</h1>
				</div>

				<div class="content-bg">
					<h2 class="green-title"><span class="fa"></span> Praxias</h2>
					<p>Las siguientes actividades, conocidas como praxias, estan diseñadas con el fin de que los niños puedan imitarlas, a fin de estimular los músculos orofaciales y a su vez ver cómo lo hacen.</p>
					<div class="gallery">
					<a href="media/gusanito.mp4" class="html5lightbox" data-group="praxias"  data-thumbnail="media/min/gusanito.png" data-width="700" data-height="500" title="Gusanito"><img src="media/min/gusanito.png" alt="" /></a>
					<a href="media/gusanito.mp4" type="video/mp4" rel="prettyphoto" data-lightbox-gallery="portfolio-gallery">
					<img src="media/min/gusanito.png" class="fluid-img" alt="portfolio img">
					<a title="Gusanito" rel="prettyPhoto[movies]" href="media/gusanito.mov"><img src="media/min/gusanito.png" alt="Gusanito" /></a>
						<a href="media/gusanito.mp4" type="video/mp4" rel="prettyphoto[gallery1]"><img src="media/min/gusanito.png" alt="" /></a>
						<a href="images/placeholders/yellow-big.png" rel="prettyphoto[gallery1]"><img src="images/placeholders/yellow.png" alt="" /></a>
						<a href="images/placeholders/orange-big.png" rel="prettyphoto[gallery1]"><img src="images/placeholders/orange.png" alt="" /></a>
						<a href="images/placeholders/blue-big.png" rel="prettyphoto[gallery1]"><img src="images/placeholders/blue.png" alt="" /></a>
						<a href="images/placeholders/blue-big.png" rel="prettyphoto[gallery1]"><img src="images/placeholders/blue.png" alt="" /></a>
						<a href="images/placeholders/orange-big.png" rel="prettyphoto[gallery1]"><img src="images/placeholders/orange.png" alt="" /></a>
						<a href="images/placeholders/yellow-big.png" rel="prettyphoto[gallery1]"><img src="images/placeholders/yellow.png" alt="" /></a>
						<a href="images/placeholders/green-big.png" rel="prettyphoto[gallery1]"><img src="images/placeholders/green.png" alt="" /></a>
						<div class="clearfix"></div>
					</div>

					<div class="separator"></div>

					<h2 class="green-title"><span class="fa"></span> Ejercicios</h2>
					<p>Los siguientes ejercicios son una compilación de actividades específicas para cada fonema. Estos ejercicios constituyen una base de retroalimentación para el paciente.</p>
					<div class="gallery">
						<a href="images/placeholders/green-big.png" rel="prettyphoto[gallery2]"><img src="images/placeholders/green.png" alt="" /></a>
						<a href="images/placeholders/yellow-big.png" rel="prettyphoto[gallery2]"><img src="images/placeholders/yellow.png" alt="" /></a>
						<a href="images/placeholders/orange-big.png" rel="prettyphoto[gallery2]"><img src="images/placeholders/orange.png" alt="" /></a>
						<a href="images/placeholders/blue-big.png" rel="prettyphoto[gallery2]"><img src="images/placeholders/blue.png" alt="" /></a>
						<div class="clearfix"></div>
					</div>
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
						<div class="col-lg-12 col-md-12">&copy; 2013 Proyecto PhonoTreat</div>
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

</html>