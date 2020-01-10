<?php session_start();?>
<?php include '../PreHecho/Head.php';?>
<?php include '../PreHecho/header.php';?>

<div class="CambiarParametros">

  <form action="../php/RegistroLogin/CambiarParametrosUsuario/CambiarCorreo.php" method="POST"><br/><br/>

		<input name="NuevoCorreo" placeholder="Nuevo Correo" value=""/>
		<input type="submit"value="Enviar" />
	</form>

</div>

<?php include '../PreHecho/footer.php';?>
