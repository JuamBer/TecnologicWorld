<?php
session_start();

$mysqli = new mysqli("localhost","id6358110_juamber","passwordtw","id6358110_basededatos");

$ID_PERSONA = $_SESSION['ID'];
$Comentario = htmlspecialchars(mysqli_real_escape_string($mysqli,$_POST['Comentario']));
$ID_POST = htmlspecialchars(mysqli_real_escape_string($mysqli,$_GET['ID']));

$mysqli->query("INSERT INTO comentariosforo (ID_Persona, ID_Post, Comentario) VALUES ('$ID_PERSONA', '$ID_POST', '$Comentario')");


header("Location:../../Foro/Post.php?ID=$ID_POST");
?>
