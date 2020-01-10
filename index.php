<?php if(!isset($_SESSION)){session_start();}?>
<?php if(!empty($_GET)){$Buscador = $_GET["Buscador"];}?>
<?php include 'PreHecho/Head.php';?>
<?php include 'PreHecho/header.php'; ?>

		<div class="Información">


			  <div class="Descripción">
					<p>
						Tecnologic World fue mi primer proyecto realizado mientras cursaba la ESO,
            la idea del proyecto era formar una comunidad de desarrolladores.
            En el portal se publicarían noticias, se preguntarían dudas en el foro,
            y se podrían seguir a las personas como en un red social. El diseño no era mi
						fuerte por aquel entonces pero he querido mantener la web tal y como la dejé. <br><br>

						Funcionalidades destacadas como: Registro he inicio de sesión de usuarios, perfil
						con parámetros variables como el estado , la foto de perfil, correo...
						En la sección del Foro se pueden hacer posts y los usuarios pueden responder a este.
						En el buscador se pueden buscar usuarios. Al entrar a su perfil puedes ver sus publicaciones,estado,rango...  <br>
						A cada usuario se le	da un rango dentro de la web, según este podrá acceder a más funcionalidades, ejemplo: si eres
						administrador puedes borrar posts de otra gente o publicar noticias, sin embargo con rango usuario
						solo puedes borrar tus posts y leer noticias.
							 <br> <br>
						Este proyecto paso por muchas versiones,
						básicamente fue mi manera de aplicar lo que iba aprendiendo. Empecé
						con HTML y CSS, luego añadiría JS, Jquery, Boostrap, que posteriormente eliminaría.
						También por el lado del servidor tenemos a PHP y MySQL como protagonistas.
					</p>
				</div>
		</div>

<?php include 'PreHecho/footer.php';?>
