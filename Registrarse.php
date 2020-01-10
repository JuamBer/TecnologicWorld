<?php if(!isset($_SESSION)){session_start();}?>
<?php if(!empty($_GET)){$err = $_GET["error"];}?>
<?php include 'PreHecho/Head.php';?>
<?php include 'PreHecho/header.php'; ?>
<?php
if(!empty($_GET)){
	echo '<div class="Alerta"><p><center>'.$err.'</center></p></div>';}
?>

<div class="RegistroLogin">
	<div class="RegistrarseLogearse">
			<form action="php/RegistroLogin/Registrarse.php" method="post">


					<input placeholder="Nickname" name="Nickname"  onkeypress="return validar(event)" type="text" required />

					<input placeholder="Correo" name="Correo"  onkeypress="return validar(event)" type="text" required />

					<input placeholder="Contraseña" name="Password"  onkeypress="return validar(event)" type="password" required />

					<input placeholder="Repetir Contraseña" name="RepetirPassword"  onkeypress="return validar(event)" type="password" required />

					<input type="submit" value="Registrarse"/>
				</form>
			</div>

	<div class="Info" >
				<a href="Login.php">
					<h3>Entra</h3>
				</a>
				<p>
					<b>¡Entra y podras disfrutar de todos nuestros servicios,
					Te esperamos desde Tecnologic World!</b>
				</p>
	</div>
</div>
<?php include'PreHecho/footer.php';?>
