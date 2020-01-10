<?php session_start();?>
<?php if(!empty($_GET)){$Editar = $_GET['Perfil'];}?>
<?php include 'PreHecho/Head.php';?>
<?php include 'PreHecho/header.php';?>


<div class="PerfilUsuario">
		<div class="FotoPerfilUsuario">
					<img src="<?php print_r($_SESSION['FotoUsuario']);?>"/>
		</div>

		<div class="Nombre">
				<h3><b><?php print_r($_SESSION['Nickname']);?></b></h3>
				<h5><i><?php print_r($_SESSION['Rango']);?></i></h5>
		</div>
		<div class="Estado">
				<h3>Estado</h3>
				<hr>
				<h4><?php print_r($_SESSION['Estado']);?></h4>
		</div>
</div>



<div class="Editor">

<?php


if(!empty($_GET)){
 if($Editar == "Editar"){
   echo '

  <div class="Edit">
		<a href="Perfil.php">Editar</a>
	</div>
	<div class="Editar">
   	<div class="CambiarEstado">
   		<form action="php/RegistroLogin/CambiarParametrosUsuario/CambiarEstado.php" method="POST">

   				<textarea type="text" name="NuevoEstado" placeholder="Nuevo estado"></textarea>

   				<input id="submit_button" type="submit"
   				class="btn btn-danger btn-lg" value="Guardar Estado" />

   		</form>
    </div>

   <div class="CambiarNombreCorreoPass">
   	   <ul>
   				<li><a href="CambiarParametrosUsuario/CambiarNombre.php">Cambiar Nombre</a></li>
   				<li><a href="CambiarParametrosUsuario/CambiarCorreo.php">Cambiar Correo</a></li>
   				<li><a href="CambiarParametrosUsuario/CambiarPassword.php">Cambiar Contraseña</a></li>
   		</ul>
   </div>


   	 <div class="CambiarFoto">

			 <form action="php/RegistroLogin/CambiarParametrosUsuario/CambiarImagen.php" method="POST" enctype="multipart/form-data">

   				<input type="file" name="foto" value="Examinar"/>

   				<input type="submit" value="Guardar Foto"/>

   	   </form>
		</div>


</div>
</div>
</div>



';}
 }else{
   echo'<div class="Edit">
	 <a href="Perfil.php?Perfil=Editar">Editar</a>
	 </div>';}




	 $mysqli = new mysqli("localhost","id6358110_juamber","passwordtw","id6358110_basededatos");
	 $ID = $_SESSION['ID'];
	 $result = $mysqli->query("SELECT * FROM foro WHERE ID_Persona = '$ID'");
	 while($Array = $result->fetch_array()){
	    $Post[] = $Array;
	 }
	 echo '<div class="PreguntasForo">';
	 if(!empty($Post)){
	 for($i = 0;$i < count($Post);$i++){

		 echo '<a class="PreguntaForo" href="../../Foro/Post.php?ID='.$Post[$i]['ID'].'">

				 <div class="PersonaDelPost">
					 <img src="'.$_SESSION['FotoUsuario'].'" alt=""/>
					 <h4>'.$_SESSION['Nickname'].'</h4>
					 <p>'.$Post[$i]['Data'].'</p>
				 </div>
				 <div class="TítuloDelPost">
						 <hgroup><h3>'.$Post[$i]['Titulo'].'</h3></hgroup>
				 </div>


		</a>';
	}}else{
		echo '<div class="NoHayNada"> <h3>No has realizado publicaciones</h3> </div>';
	}

?>
</div>
<?php include 'PreHecho/footer.php';?>
