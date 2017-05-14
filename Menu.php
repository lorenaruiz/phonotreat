				<?php 
				
				if ($_SESSION['session_usser_rol']=="") 
					{
				 	?>
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
	                                <form  action="php/login.php" method="post">
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
				 	<?php
				 	} 
				 	elseif ($_SESSION['session_usser_rol']==1) 
				 		{
				 		?>
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
									<li >
									<a href="index.php">Inicio</a></li>
								<li class="has-children">
									<a href="#">Gestión</a>
									<ul class="children">
										<li><a href="crearpersona.php">Crear Persona</a></li>
									</ul>
								</li>
								<li><a href="index.php">Fonema</a></li>
								<li><a href="php/salir.php">Salir</a></li>
									<li class="has-children">								
									<a><?php
									
									if (@$_SESSION['session_usser_name']!="") {
										print(@$_SESSION['session_usser_name']);
										print("</a>");
									}else
										{
											?>
											Ingresar
											</a>
											<ul class="children">
	                                <form  action="php/login.php" method="post">
										<li><input type="text" name="username" id="usuario" placeholder="Usuario"></li>
										<li><input type="password" name="password" placeholder="Contraseña"></li>
										<li><input class="button red" type="submit" value="&#xf138; ENTRAR"></li>
	                                    </form>
									</ul>
											<?php
										}
									?>
								</li>
								</ul>
							</div><!-- /.navbar-collapse -->
							<div id="sun"></div>
							</nav>
						<?php
				 		}elseif ($_SESSION['session_usser_rol']==2) 
				 			{
								?>
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
										<li >
										<a href="index.php">Inicio</a></li>
										<li class="has-children">
										<a href="#">Gestión</a>
										<ul class="children">
											<li><a href="crearpersona.php">Crear Persona</a></li>
										</ul>
									</li>
									<li><a href="asignacion.php">Asignación</a></li>
									<li><a href="php/salir.php">Salir</a></li>
										<li class="has-children">								
										<a><?php
										
										if (@$_SESSION['session_usser_name']!="") {
											print(@$_SESSION['session_usser_name']);
											print("</a>");
										}else
											{
												?>
												Ingresar
												</a>
												<ul class="children">
		                                <form  action="php/login.php" method="post">
											<li><input type="text" name="username" id="usuario" placeholder="Usuario"></li>
											<li><input type="password" name="password" placeholder="Contraseña"></li>
											<li><input class="button red" type="submit" value="&#xf138; ENTRAR"></li>
		                                    </form>
										</ul>
												<?php
											}
										?>
									</li>
									</ul>
								</div><!-- /.navbar-collapse -->
								<div id="sun"></div>
								</nav>
								<?php				 				
				 			}
				 			elseif ($_SESSION['session_usser_rol']==3) 
				 			{
								?>
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
										<li >
										<a href="index.php">Inicio</a></li>										
										<li><a href="actividades.php">Actividades</a></li>
										<li><a href="#">Evaluaciones</a></li>
										<li><a href="php/salir.php">Salir</a></li>
										<li class="has-children">								
										<a><?php
										
										if (@$_SESSION['session_usser_name']!="") {
											print(@$_SESSION['session_usser_name']);
											print("</a>");
										}else
											{
												?>
												Ingresar
												</a>
												<ul class="children">
		                                <form  action="php/login.php" method="post">
											<li><input type="text" name="username" id="usuario" placeholder="Usuario"></li>
											<li><input type="password" name="password" placeholder="Contraseña"></li>
											<li><input class="button red" type="submit" value="&#xf138; ENTRAR"></li>
		                                    </form>
										</ul>
												<?php
											}
										?>
									</li>
									</ul>
								</div><!-- /.navbar-collapse -->
								<div id="sun"></div>
								</nav>
								<?php				 				
				 			}



				?>
				
				