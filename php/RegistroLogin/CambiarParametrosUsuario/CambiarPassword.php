<?php
session_start();
$mysqli = new mysqli("localhost","id6358110_juamber","passwordtw","id6358110_basededatos");

 if(!empty($_POST)){
	 $ViejoPassword = htmlspecialchars(mysqli_real_escape_string($mysqli,$_POST['PasswordActual']));
	 $NuevoPassword = htmlspecialchars(mysqli_real_escape_string($mysqli,$_POST['NuevaPassword']));

	 if($ViejoPassword == $_SESSION['Password']){
		 $ID = $_SESSION['ID'];
		 $sql = "UPDATE usuarios SET Password = '$NuevoPassword' WHERE ID = '$ID'";
		 $mysqli->query($sql);
     $_SESSION['Password'] = $NuevoPassword;
     header('Location:../../../Perfil.php');

  }else{
    $error = '<div class="Alerta"><p><center>La Contraseña Actual No Es Correcta</center></p></div>';
    header('Location:CambiarPassword.php?Error='.$error.'');
  }
}
?>
