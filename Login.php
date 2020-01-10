<?php if(!isset($_SESSION)){session_start();}?>
<?php include 'PreHecho/Head.php';?>
<?php include 'PreHecho/header.php';?>
<?php
if(!empty($_GET)){
	$Error = $_GET['Error'];
	echo '<div class="Alerta"><p><center>'.$Error.'</center></p></div>';}
?>
<div class="RegistroLogin">
		<div class="RegistrarseLogearse">
			<form action="php/RegistroLogin/Login.php" method="post">

				<input type="text" name="Nickname" placeholder="Usuario o Correo" autofocus/><br/>
				<input type="password" name="Password" placeholder="Contraseña"/><br>
				<input type="submit" value="Ingresar" />
				<div id="response"></div>

		 	</form>
		</div>

		<div class="Info">

			<a href="Registrarse.php">
				<h3>Registrate</h3>
			</a>
			<p>¡Registrate es Fácil sencillo, No tardarás ni un minuto!</p>

		</div>
</div>
<?php include 'PreHecho/footer.php';?>
