<?php
session_start();
$mysqli = new mysqli("localhost","id6358110_juamber","passwordtw","id6358110_basededatos");

if(!empty($_POST)){
	$NuevoCorreo = htmlspecialchars(mysqli_real_escape_string($mysqli,$_POST['NuevoCorreo']));
	$ID = $_SESSION['ID'];
	$sql = "UPDATE usuarios SET Correo = '$NuevoCorreo' WHERE ID = '$ID'";
	$mysqli->query($sql);
}
header('Location:../../../Perfil.php');
?>
