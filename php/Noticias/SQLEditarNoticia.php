<?php
session_start();
$mysqli = new mysqli("localhost","id6358110_juamber","passwordtw","id6358110_basededatos");

$Titulo = $_POST['Titulo'];
$Noticia = $_POST['Noticia'];
$ID = $_GET['ID'];

$mysqli->query("UPDATE noticias SET Titulo = '$Titulo' WHERE ID = '$ID'");
$mysqli->query("UPDATE noticias SET Noticia = '$Noticia' WHERE ID = '$ID'");

header('Location:../../Noticias.php');
?>
