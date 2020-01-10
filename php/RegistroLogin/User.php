

<!--________________________________________________________________________________________________________________________________________-->

<!--____________________________________________________________________< HEAD >____________________________________________________________-->

<!--________________________________________________________________________________________________________________________________________-->

<html lang="en">

	<head>

				<meta charset="UTF-8">

					<title>Tecnologic World</title>



	                <meta name="Description" content="Tecnologic World es una Página Web basada en la comunidad , la cual aporta ideas , opina
	                aprende y colabora de forma interactiva.Tecnologic World tiene como temas principales el Hardware, La Seguridad Informática y
	                El diseño Web, Hay cursos de HTML CSS hacking y de hardware." />



	                <meta name="Keywords" content="HTML,css,diseño web,seguridad informática, hacking, hardware, descargar, tecnologic world, tecnologic,world
	                programación,aprender,juegos,amino,comunidad,de,español,amd,intel,software, aprender, guia" />



	                <meta http-equiv="Content-Language" content="es"/>

	                <meta name="distribution" content="global"/>

					<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">



					<link rel="stylesheet" href="../css/Bootstrap/bootstrap.min.css">
					<link rel="stylesheet" href="../css/User.css">
					<link rel="icon" href="../Imagenes/Icono/Icono.ico"/>


	</head>

<!--________________________________________________________________________________________________________________________________________-->

<!--____________________________________________________________________< BODY >____________________________________________________________-->

<!--________________________________________________________________________________________________________________________________________-->


	<body>

							<header>


									



										<div class="row">



											<!--_____________________________________________________________________________________________________________-->
											<!--_____________________________________SECCIÓN DE LOS LOGOS____________________________________________________-->
											<!--_____________________________________________________________________________________________________________-->



													<!--_________________________________________LOGO_______________________________________________________________-->

													<div class="Logo col-lg-5">

															 <a href="http://tecnologic-world.tk"><img  src="../Imagenes/Logos/Logo.png"></a>

													</div>

												
													





											<!--_____________________________________________________________________________________________________________-->
											<!--_____________________________________SECCIÓN DE LOS LOGOS____________________________________________________-->
											<!--_____________________________________________________________________________________________________________-->



													<!--________________________________________CONTADOR DE VISITAS______________________________________________-->

												<div class="contadores col-md-7">

															<div class="Contador-de-visitas  col-md-2">

																	<p><b>Visitas</b></p>

																			<?php

																					// Archivo donde almacenamos el contador
																					$contador = 'visitantes.txt';

																					if( file_exists( $contador ) ){

																					 // Obtenemos el último valor registrado.
																					 $file = file_get_contents( $contador );

																					 // Sumamos uno a la última visita.
																					 $visita = $file+1;

																					 // Escribimos el nuevo valor.
																					 file_put_contents($contador, $visita);

																					 // Imprimimos el número de visitante.
																					 echo "<p>$visita</p>";


																					}//.if
																				?>


															</div>


													<!--_______________________________________INFO DEL CONTADOR________________________________________________-->

															<div class="Contador-de-registros  col-md-1">

																	<p><b>Registros</b></p>
																	<p><b>0</b></p>

															</div>
															<div class="User col-md-3">

																
																
																
																
															</div>


															<div class="User col-md-1">

																
																<h3>Nombre</h3>
																
																
															</div>
															<div class="User col-md-1">
																	<img src="../Imagenes/Logos/MiniLogo.png"/>
															</div>



												</div>



										</div>





					<!--________________________________________________________________________________________________________________________________________-->

					<!--____________________________________________________________________< MENU>_____________________________________________________________-->

					<!--________________________________________________________________________________________________________________________________________-->


										<div class="menu row">

												<!--_____________________________________________________________________________________________________________-->
												<!--_____________________________________SECCIÓN DEL BUSCADOR____________________________________________________-->
												<!--_____________________________________________________________________________________________________________-->


													<div class="buscador col-md-5">

														<div class="input-group">

															<span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>

															<input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">

														</div>
													</div>





												<!--_____________________________________________________________________________________________________________-->
												<!--_____________________________________SECCIÓN DEL MENU________________________________________________________-->
												<!--_____________________________________________________________________________________________________________-->


													<div class="secciones  col-md-7">

																<ul>

																	<li><a   href="http://tecnologic-world.tk">
																	<b>Inicio <span class="glyphicon glyphicon-home"></span></b></a></li>

														            <li><a href="http://tecnologic-world.tk/Contacto.php">
														            <b>Contacto <span class="glyphicon glyphicon-envelope"></span></b></a></li>

																	<li><a href="http://tecnologic-world.tk/Registrarse.php">
																	<b>Registrarse/Entrar <span class="glyphicon glyphicon-user" class="hidden-xs"></span></b></a></li>

																	<li><a  href="http://tecnologic-world.tk/Notiias.php" class="hidden-xs">
																	<b>Noticias <span class="glyphicon glyphicon-bell"></span></b></a></li>

														      	</ul>
													</div>






												</div>
										</div>

									</div>

						</header>

<!--________________________________________________________________________________________________________________________________________-->

<!--_____________________________________________________< IMAGENES PRINCIPALES>____________________________________________________________-->

<!--________________________________________________________________________________________________________________________________________-->



								<!--_____________________________________________________________________________________________________________-->
								<!--__________________________________LISTA DE LA SECCIÓN________________________________________________________-->
								<!--_____________________________________________________________________________________________________________-->













				</div>

			</div>








<!--________________________________________________________________________________________________________________________________________-->

<!--____________________________________< SECCIONES DE (TECNOLOGIC-WORLD) >_________________________________________________________________-->

<!--________________________________________________________________________________________________________________________________________-->
<br><br><br>

<div class="container Usuario">

	


		<br>
		<div class="row">
			<div class="UserGrande col-md-3">

				<img src="../Imagenes/Logos/MiniLogo.png"/>

			</div>

			<div class="UserGrande col-md-4">

																	
				<h3><b>Nombre</b></h3><br>
				<h5><i>Rango</i></h5>
																	
																	
			</div>
		</div>

		<div class="row"><br><br><br>

			<div class="col-md-1">
			</div>
					
			<div class="col-md-10">

								<hr>
	       					
	       						<div class="">
			          				 <label>Nombre</label>

			                				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="Nombre" name="Nombre" type="text" required />
			                	</div><br><br>

			                	<div class="">
			          				 <label>Contraseña </label>

			                				<input id="Nombre" name="nombre" type="text" required />
			                	</div><br><br>

			                	<div class="">
			                		 <label>Correo</label>
		           							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="Correo" name="Correo" class="correo" type="text" required/><br><br>
		           				</div><br><br><hr>

			                	<div class="">
			          				 <label>Foto De Perfil</label>

			                				 <input type="file" name="SegundaImagen"  class="examinar" value="Examinar" />
			                	</div><br><br><hr>
			                	


			                	

		           				<input id="submit_button" type="submit" class="btn btn-danger btn-lg" value="Guardar" /><br><br><br>
	                		
	        </div>


	        <div class="col-md-1">
			</div>
		</div>

</div>












<br><br><br><br><br><br>


<!--________________________________________________________________________________________________________________________________________-->

<!--_____________________________________________< FOOTER O PIE DE PÁGINA >_________________________________________________________________-->

<!--________________________________________________________________________________________________________________________________________-->


  						<footer>
  							<div class="container-fluid">

  								<div class="row">
  									<div class="Piedepágina hidden-xs col-md-12">
  											<h2><b>Tecnologic World</b></h2>
  									</div>
  								</div>


  								<div class="row cosas">
  									<div class="Texto-de-pie-de-página hidden-xs col-md-4">

	  											<p><b>¡Síguenos en Amino aplicación de móvil donde hay comunidades entra las cuales esta la nuestras con el nombre de "Tecnologic World" vente a nuestra comunidad podrás crear blogs ver cosas que gente publica contestas a preguntas, Ya somos más de 3.000!</b></p>
  									</div>

  									<div class="apartados-de-pie-de-página hidden-xs col-md-2">


  										<ul>

  										<a href=""><li class=""><b>Comunidad</b></li></a><br>
  										<a href=""><li>Juegos de la comunidad</li></a>
  										<a href=""><li>Programas de la comunidad</li></a>
  										<a href=""><li>Normas de la comunidad</li></a>

  										</ul>

  									</div>

  									<div class="apartados-de-pie-de-página hidden-xs col-md-2">


  										<ul>

  										<a href=""><li class=""><b>Contacto</b></li></a><br>
  										<a href=""><li>Por @gmail</li></a>
  										<a href=""><li>Por Twitter</li></a>
  										<a href=""><li>Por Facebook</li></a>
  										<a href=""><li>Por Amino</li></a>

  										</ul>

  									</div>

  									<div class="apartados-de-pie-de-página hidden-xs col-md-2">


  										<ul>

  										<a href=""><li class=""><b>Secciones</b></li></a><br>
  										<a href=""><li>Hardware</li></a>
  										<a href=""><li>Seguridad Informática</li></a>
  										<a href=""><li>Diseño Web</li></a>
  										<a href=""><li>Programación</li></a>
  										<a href=""><li>Desarrolo de Videojuegos</li></a>



  										</ul>

  									</div>

  									<div class="apartados-de-pie-de-página hidden-xs col-md-2">


  										<ul>

  										<a href=""><li class=""><b>Ayuda</b></li></a><br>
  										<a href=""><li>Preguntas Frecuentes</li></a>
  										<a href=""><li>Foro de La comunidad</li></a>
  										<a href=""><li>Admin</li></a>

  										</ul>

  									</div>




  								</div>



  							</div>
  						</footer>

 							<input type="hidden" name="IL_IN_ARTICLE">
<!--________________________________________________________________________________________________________________________________________-->

<!--______________________________________________________< JAVA SCRIPT >___________________________________________________________________-->

<!--________________________________________________________________________________________________________________________________________-->



			<script src="../js/jquery.min.js"></script>
			<script src="../js/bootstrap.min.js"></script>


<br><br><br><br><br><br><br><br><br>

	</body>
