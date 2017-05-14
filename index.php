<!DOCTYPE html>
<!--[if IE 8 ]> <html class="ie8 no-js"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js">  <!--<![endif]-->

<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>PhonoTreat - Dislalia</title>
		<link rel="shortcut icon" href="favicon.ico">

		<!-- Bootstrap y CSS -->
		<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet" media="screen">

		<link href="css/style.css" type="text/css" rel="stylesheet" media="screen">
		<link href="css/font-awesome.css" type="text/css" rel="stylesheet" media="screen">

		<script src="js/modernizr.js"></script>
		<script src="js/respond.js"></script>
        
        <?php
        include("php/conexion.php");
   		conectar($_POST['username'],$_POST['password']);
   		echo $_POST['username'];
		?>
        
	</head>
	<body>
		<div class="container" id="wrapper">

			<!-- header -->
			<header>
				<a href="index.html" class="logo">
					<img src="images/logo.png" alt="" />
				</a>
				<nav role="navigation">
					<!-- Agrupacion en toggle para visualización en moviles -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Toggle</span>
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
                                <form  action="php/gestorsesion.php" method="post">
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
			<!-- fin header -->

			<!-- front page header featured area -->
			<section id="featured">

				<!-- WOWSlider -->
				<div id="wowslider-container1">
					<div class="ws_images">
						<ul>
							<li><img src="images/wowslider/01.png" alt="This is the title" title="Herramienta práctica" id="wows1_0"/>Para la conceptualización fonológica de niños y niñas</li>
							<li><img src="images/wowslider/02.png" alt="Another title" title="Aprendizaje contínuo" id="wows1_1"/>Gracias al sistema de enseñanza retroalimentada</li>
							<li><img src="images/wowslider/03.png" alt="Third title" title="Visualmente atractivo" id="wows1_2"/>Contenido multimedial interactivo y dinámico</li>
						</ul>
					</div>
					<div class="ws_bullets">
						<div>
							<a href="#" title="This is the title">1</a>
							<a href="#" title="Another title">2</a>
							<a href="#" title="Third title">3</a>
						</div>
					</div>
				</div>
				<!--  end WOWSlider -->

			</section>
			<!-- end front page header featured area -->

			<!-- page content area -->
			<section id="content-homepage">

				<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
					<div id="col-yellow">
						<div id="ladybug"></div>
						<h2>Nosotros</h2>
						<p>El proyecto PhonoTreat nace para brindar apoyo a los profesionales en fonoaudiología...</p>
						<a href="nosotros.html" class="button blue"><span>&#xf138;</span>LEER MÁS</a>
						<div class="clearfix"><br /></div>
						<h2>Proyecto</h2>
						<p>Lunes 15 de Mayo de 2017</p>
						<a href="nosotros.html" class="button blue"><span>&#xf138;</span>VER PROGRAMA</a>
					</div>
				</div>
				<div class="col-lg-3 col-sm-4 col-xs-12">
					<div id="col-green">
						<div id="butterfly"></div>
						<h2>Para padres</h2>
						<img src="images/placeholders/orange-mid.png" alt="" class="img-margin" />
						<p>La participación de los padres en el proceso de tratamiento de sus hijos(as) es...</p>
						<a href="padres.html" class="button red"><span>&#xf138;</span>LEER MÁS</a>
					</div>
				</div>
				<div class="col-lg-3 col-sm-4 col-xs-12">
					<div id="col-orange">
						<h2>Galería</h2>
						<p>No tengo idea de por qué tenemos una galería pero necesitamos mostrar...</p>
						<img src="images/placeholders/yellow-mid.png" alt="" class="img-margin" /><br />
						<a href="galeria.html" class="button green"><span>&#xf138;</span>VER GALERÍA</a>
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
						&copy; 2017 Proyecto PhonoTreat
					</div>
				</div>
			</div>
		</footer>

		<script src="js/jquery-1.10.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/custom.js"></script>
		<script src="js/wowslider.js"></script>
		<script src="js/wowtransition.js"></script>
		<script src="js/jquery.prettyPhoto.js"></script>
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-86539134-2', 'auto');
			ga('send', 'pageview');

		</script>
		<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/590040d14ac4446b24a6c06b/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
	</body>

</html>