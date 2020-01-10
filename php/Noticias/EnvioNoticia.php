<?php
session_start();
$mysqli = new mysqli("localhost","id6358110_juamber","passwordtw","id6358110_basededatos");

$Titulo = $_POST['Titulo'];
$Noticia = $_POST['Noticia'];
$ID_Persona = $_SESSION['ID'];

$mysqli->query("INSERT INTO noticias (Titulo, Noticia, ID_Persona) VALUES ('$Titulo','$Noticia','$ID_Persona')");

header('Location:../../Noticias.php');
?>
