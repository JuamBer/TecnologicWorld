<?php
$mysqli = new mysqli("localhost","id6358110_juamber","passwordtw","id6358110_basededatos");

$ID = $_GET['ID'];
$ID_POST = $_GET['ID_POST'];

$mysqli->query("DELETE FROM comentariosdelforo WHERE ID = '$ID'");

header('Location:../../Foro/Post.php?ID='.$ID_POST.'');
?>
