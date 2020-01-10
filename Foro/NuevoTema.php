<?php if(!isset($_SESSION)){session_start();}?>
<?php include '../PreHecho/Head.php';?>
<?php include'../PreHecho/header.php';?>

<h2 class="-Titulo">Foro -> Nuevo Tema</h2>
		<div class="Principal">


			  <div class="NuevoTemaForo">

			      <form action="https://juamber-tecnologic-world.000webhostapp.com/php/Foro/NuevoTema.php" method="POST">

			          <input type="text" name="Titulo" placeholder="Título"/>
								<textarea name="Texto" placeholder="Texto"></textarea>
								<select name="Apartado" placeholder="Apartado">

										<option> -HTML</option>
										<option> -CSS</option>
										<option> -JS</option>
										<option> -PHP Y MYSQL</option>

										<option> -Hardware General</option>
										<option> -Componentes</option>
										<option> -Empresas</option>
										<option> -Presupuestos</option>

										<option> -Hacking</option>
								</select>


								<input class="Enviar" type="submit" value="Enviar"/>

			      </form>
			  </div>
		</div>



<?php include'../PreHecho/footer.php';?>
