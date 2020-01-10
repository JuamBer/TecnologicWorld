<?php

session_start();

$mysqli = new mysqli("localhost","id6358110_juamber","passwordtw","id6358110_basededatos");

$Titulo = mysqli_real_escape_string($mysqli,$_POST['Titulo']);
$Texto = mysqli_real_escape_string($mysqli,$_POST['Texto']);
$Apartado = mysqli_real_escape_string($mysqli,$_POST['Apartado']);
$ID = mysqli_real_escape_string($mysqli,$_GET['ID']);

$mysqli->query("UPDATE foro SET Titulo = '$Titulo' WHERE ID = '$ID'");
$mysqli->query("UPDATE foro SET Texto = '$Texto' WHERE ID = '$ID'");
$mysqli->query("UPDATE foro SET Apartado = '$Apartado' WHERE ID = '$ID'");

header('Location:../../Foro/Post.php?ID='.$ID.'');

?>
