<?php

	session_start();
	
	$mysqli = new mysqli("localhost","id6358110_juamber","passwordtw","id6358110_basededatos");

	$ID = $_GET['ID'];
	$Yo = $_SESSION['id'];


	$sql = "INSERT INTO Seguidores (ID_Seguidor,ID_PersonaSeguida) VALUES ('$Yo','$ID')";
	$result = $mysqli->query($sql);

	$sql = "SELECT * FROM Seguidores WHERE ID_Seguidor = '$Yo' AND ID_PersonaSeguida = '$ID'";
	$result = $mysqli->query($sql);
	$rows = $result->num_rows;

	if($rows == 2){
		$sql = "DELETE FROM Seguidores WHERE ID_Seguidor = '$Yo' AND ID_PersonaSeguida = '$ID'";
		$result = $mysqli->query($sql);
	}
	if($host == 'localhost'){header('Location:http://localhost/Perfil.php');}
	if($host == 'tecnologic-world.com'){header('Location:http://tecnologic-world.com/Perfil.php');}
?>
