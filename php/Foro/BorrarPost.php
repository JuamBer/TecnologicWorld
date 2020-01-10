<?php
$mysqli = new mysqli("localhost","id6358110_juamber","passwordtw","id6358110_basededatos");

$ID = $_GET['ID'];
$ID_POST = $_GET['ID_POST'];

$mysqli->query("DELETE FROM foro WHERE ID = '$ID'");
$mysqli->query("DELETE FROM comentariosdelforo WHERE ID_Post = '$ID'");

header('Location:../../Foro/Foro.php');
?>
