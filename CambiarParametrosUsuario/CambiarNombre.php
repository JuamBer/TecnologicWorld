<?php session_start();?>
<?php include '../PreHecho/Head.php';?>
<?php include '../PreHecho/header.php';?>

<div class="CambiarParametros">

  <form action="../php/RegistroLogin/CambiarParametrosUsuario/CambiarNombre.php" method="POST"><br/><br/>

		<input name="NuevoNickname" placeholder="Nuevo Nickname" value=""/>
		<input type="submit"value="Enviar" />
	</form>

</div>

<?php include '../PreHecho/footer.php';?>
