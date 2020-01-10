<?php session_start();?>
<?php include '../PreHecho/Head.php';?>
<?php include '../PreHecho/header.php';?>
<?php if(!empty($_GET)){$err = $_GET["Error"]; echo $err;}?>


<div class="CambiarParametros">

  <form action="../php/RegistroLogin/CambiarParametrosUsuario/CambiarPassword.php" method="POST"><br/><br/>

		<input name="PasswordActual" placeholder="Contraseña Actual" value=""/>
    <input name="NuevaPassword" placeholder="Contraseña Nueva" value=""/>

		<input type="submit"value="Enviar" />
	</form>

</div>

<?php include '../PreHecho/footer.php';?>
