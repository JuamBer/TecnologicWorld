<?php session_start();?>
<?php include 'PreHecho/Head.php';?>
<?php include 'PreHecho/header.php';?>

		<div class="FormContacto">
			<form action="php/Contacto/Contacto.php" method="post">
					<h2>Contacto</h2>
						<input name="Nombre" type="text" required placeholder="Nombre"/>
			    	<input name="Asunto" type="text" required placeholder="Asunto"/>
						<input name="Correo" type="text" required placeholder="Correo"/>
						<textarea name="Texto" required           placeholder="Texto"></textarea>
						<input type="submit" value="Enviar" />
			</form>
		</div>

		<div class="InfoContacto">
			<h1>Información</h1>
			<p>Contacta con nosotros y en menos de una semana se te respondera, y si
			quieres contactar de otra manera podras hacerlo enviando el correo de gmail de aquí:
			contacto@nohaycorreo.com</p>
		</div>

<?php include'PreHecho/footer.php';?>
