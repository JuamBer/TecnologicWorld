<?php session_start();?><?php

$mysqli = new mysqli("localhost","id6358110_juamber","passwordtw","id6358110_basededatos");
$ID = $_GET['ID_Comentario'];

$mysqli->query("DELETE FROM noticias WHERE ID = '$ID'");

header('Location:../../Noticias.php');






?>
