<?php
$mysqli = new mysqli("localhost","id6358110_juamber","passwordtw","id6358110_basededatos");

  $Nickname = htmlspecialchars(mysqli_real_escape_string($mysqli,$_POST['Nickname']));
  $Correo = htmlspecialchars(mysqli_real_escape_string($mysqli,$_POST['Correo']));
  $Password = htmlspecialchars(mysqli_real_escape_string($mysqli,$_POST['Password']));
  $RepetirPassword = htmlspecialchars(mysqli_real_escape_string($mysqli,$_POST['RepetirPassword']));



 $sqlUser = "SELECT ID FROM usuarios WHERE Nickname = '$Nickname'";
 $resultUser = $mysqli->query($sqlUser);
 $UserExistentes = $resultUser->num_rows;

 $sqlCorreo = "SELECT ID FROM usuarios WHERE Correo = '$Correo'";
 $resultCorreo = $mysqli->query($sqlCorreo);
 $CorreoExistentes = $resultCorreo->num_rows;


 if($UserExistentes == 0){}else{
   $error = '<div class="Alerta"><p><center>El Nickname Ya Esta Registrado</center></p></div>';
   header("Location:http://localhost/Registrarse.php?error=$error");
 }
 if($CorreoExistentes == 0){}else{
   $error = '<div class="Alerta"><p><center>El Correo Ya Está Registrado</center></p></div>';
   header("Location:http://localhost/Registrarse.php?error=$error");
 }
 if($Password == $RepetirPassword){}else{
   $error = '<div class="Alerta"><p><center>Las Contraseñas No Coinciden</center></p></div>';
   header("Location:http://localhost/Registrarse.php?error=$error");
 }
 if(!empty(explode("@", $Correo))){


   $mysqli->query(
   "INSERT INTO usuarios (ID, Rango, Nickname, Password, Correo, FotoPerfil, Estado)
   VALUES
   (NULL, 'Usuario', '$Nickname', '$Password', '$Correo',
   'Imagenes/Iconos/user.png', 'Soy Un Usuario De Tecnologic World!')"
   );

$error = '<div class="Alerta"><p><center>¡Felicidades Ya Estas Registrado!</center></p></div>';
header("Location:http://localhost/Registrarse.php?error=$error");
 }else{
 $error = '<div class="Alerta"><p><center>¡Correo No Válido!</center></p></div>';
 header("Location:http://localhost/Registrarse.php?error=$error");
 }
