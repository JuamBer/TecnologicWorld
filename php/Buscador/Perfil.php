<?php if(!isset($_SESSION)){session_start();}?>
<?php include '../../PreHecho/Head.php';?>
<?php include '../../PreHecho/header.php';?>
<?php
$mysqli = new mysqli("localhost","id6358110_juamber","passwordtw","id6358110_basededatos");
$user = $_GET['user'];
$sql = "SELECT * FROM usuarios WHERE Nickname = '$user'";
$Algo = $mysqli->query($sql);
$Datos = $Algo->fetch_array();
?>
<div class="PerfilUsuario">
		<div class="FotoPerfilUsuario">
					<img src="../../<?php print_r($Datos['FotoPerfil']);?>"/>
		</div>

		<div class="Nombre">
				<h3><b><?php print_r($Datos['Nickname']);?></b></h3>
				<h5><i><?php print_r($Datos['Rango']);?></i></h5>
		</div>
		<div class="Estado">
				<h3>Estado</h3>
				<hr>
				<h4><?php print_r($Datos['Estado']);?></h4>
		</div>
</div>

<?php

$ID = $Datos['ID'];
$result = $mysqli->query("SELECT * FROM foro WHERE ID_Persona = '$ID'");
while($Array = $result->fetch_array()){
	 $Post[] = $Array;
}
echo '<div class="PreguntasForo">';

if(!empty($Post)){
for ($i=0; $i < count($Post) ; $i++) {

		echo '
		<a class="PreguntaForo" href="../../Foro/Post.php?ID='.$Post[$i]['ID'].'">

				<div class="PersonaDelPost">
					<img src="../../'.$Datos['FotoPerfil'].'" alt=""/>
					<h4>'.$Datos['Nickname'].'</h4>
					<p>'.$Post[$i]['Data'].'</p>
				</div>
				<div class="TítuloDelPost">
						<hgroup><h3>'.$Post[$i]['Titulo'].'</h3></hgroup>
				</div></a>
		';

}}else {
	echo '<div class="NoHayNada"> <h3>'.$Datos['Nickname'].' no ha realizado publicaciones</h3> </div>';
}

?>
</div>
