<?php session_start();?>
<?php include '../PreHecho/Head.php';?>
<?php include '../PreHecho/header.php';?>

<h2 class="-Titulo">Foro</h2>
<?php

$mysqli = new mysqli("localhost","id6358110_juamber","passwordtw","id6358110_basededatos");

	$IDPost = $_GET['ID'];

  $sql = "SELECT * FROM foro WHERE id = '$IDPost'";
  $Mysql = $mysqli->query($sql);
  $Post = $Mysql->fetch_array();

  $ID = $Post['ID'];
  $Titulo = $Post['Titulo'];
  $Texto = $Post['Texto'];
  $Apartado = $Post['Apartado'];
  $ID_PERSONA = $Post['ID_Persona'];
  $Data = $Post['Data'];


	$EEEE = "SELECT * FROM usuarios WHERE ID = '$ID_PERSONA'";
  $persona1 = $mysqli->query($EEEE);

  $persona = $persona1->fetch_array();

  $Imagen = "https://juamber-tecnologic-world.000webhostapp.com/".$persona['FotoPerfil'];
  $Usuario = $persona['Nickname'];
	echo '<div class="Post">

		<div class="PersonaPost">
			<img src="'.$Imagen.'"/>

	  	<a href="https://juamber-tecnologic-world.000webhostapp.com/php/Buscador/Perfil.php?user='.$Usuario.'">
				<h3>'.$Usuario.'</h3>
			</a>

			<div class="InformaciónPost">
				<h4>'.$Data.'</h4>
				<h4>'.$Apartado.'</h4>
			</div>

			<div class="EditarBorrar">';
			if(!empty($_SESSION['Rango'])){
if($_SESSION['Rango'] == 'Administrador' || $_SESSION['ID'] == $persona['ID']){
				echo '<a class="EditarBorrarPost" href="../php/Foro/BorrarPost.php?ID='.$ID.'&ID_POST='.$IDPost.'">
					Borrar Post <span class="glyphicon glyphicon-remove"></span>
				</a>';}

			if($_SESSION['Rango'] == 'Administrador' || $_SESSION['ID'] == $persona['ID']){
				echo '<a class="EditarBorrarPost" href="EditarPost.php?ID='.$ID.'">
					Editar <span class="glyphicon glyphicon-cog"></span>
				</a>';}}


echo '</div></div>

		<div class="PostPost">
			<h2>'.$Titulo.'</h2>
			<p>'.$Texto.'</p>
		</div>






';


echo'</div>';


?>

<?php
if(!empty($_SESSION['Rango'])){
$foto = "../".$_SESSION['FotoUsuario'];
$ID = $_GET['ID'];
echo '
<div class="FormularioParaComentar">
	<div class="FormularioComentar">
		<img src="'.$foto.'" alt="imagen"/>

  <form action="../php/Foro/Comentarios.php?ID='.$ID.'" method="POST">
			<textarea name="Comentario"></textarea><br/>
			<input type="submit" value=" Comentar "/>
	</form>';}?>
						</div>
</div>






<?php


$sql = "SELECT * FROM comentariosforo
INNER JOIN usuarios
ON usuarios.ID = comentariosforo.ID_Persona
WHERE ID_Post = '$IDPost'";

$result = $mysqli->query($sql);

while($Array = $result->fetch_array()){
   $Comentario[] = $Array;
}

if(!empty($Comentario)){
for($i = 0;$i < count($Comentario); $i++){

	echo '<div class="Comentario">';
		echo '<div class="UserQueComenta">';
				echo '<img src="../'.$Comentario[$i]['FotoPerfil'].'" alt="'.$Comentario[$i]['Nickname'].'"/>';
				echo '<a href="https://juamber-tecnologic-world.000webhostapp.com/php/Buscador/Perfil.php?user='.$Comentario[$i]['Nickname'].'" target="_blank"><h4>'.$Comentario[$i]['Nickname'].'</h4></a>';
		echo '</div>';

		echo '<div class="ComentarioDelUser">';
				echo '<div class="TextoComentario"><p>'.$Comentario[$i]['Comentario'].'</p></div>';
				echo '<div class="DataComentario"><h3>'.$Comentario[$i]['Data'].'</h3></div>';
		echo '</div>';
	echo '</div>';

}}



?>
<?php include '../PreHecho/footer.php';?>
