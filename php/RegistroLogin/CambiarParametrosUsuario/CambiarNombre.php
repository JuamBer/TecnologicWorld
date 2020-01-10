<?php
session_start();
$mysqli = new mysqli("localhost","id6358110_juamber","passwordtw","id6358110_basededatos");

	$NuevoNickname = htmlspecialchars(mysqli_real_escape_string($mysqli,$_POST['NuevoNickname']));
	$ID = $_SESSION['ID'];
	$sql = "UPDATE usuarios SET Nickname = '$NuevoNickname' WHERE ID = '$ID'";
	$mysqli->query($sql);
	$_SESSION['Nickname'] = $NuevoNickname;

header('Location:../../../Perfil.php');
?>
