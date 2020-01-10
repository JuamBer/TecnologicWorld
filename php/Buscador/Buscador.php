<?php session_start();?>
<?php include '../../PreHecho/Head.php';?>
<?php include '../../PreHecho/header.php';?>
<?php  $mysqli = new mysqli("localhost","id6358110_juamber","passwordtw","id6358110_basededatos");


if(!empty($_POST)){

  $Busqueda = htmlspecialchars(mysqli_real_escape_string($mysqli,$_POST['Busqueda']));
  $sqlUsers = "SELECT * FROM usuarios WHERE Nickname LIKE '%".$Busqueda."%'";

  $ConsultaUsers = $mysqli->query($sqlUsers);

  while($var = $ConsultaUsers->fetch_array()){
    $ResultadoUsers[] = $var;}
 }




if(!empty($_POST)){
if(!empty($ResultadoUsers)){
echo '
<div class="ResultadosBuscador">
  <div class="Resultados">
    <h5>'.count($ResultadoUsers).'
    Resultados Para
    "'.$Busqueda.'"</h5>
  </div>
  <div class="ElecciónBuscador">
    <h4>Usuarios</h4>
    <h4>Posts</h4>
  </div>
</div>';
}else{
echo'  <div class="ResultadosBuscador">
    <div class="Resultados">
        <center><h5>No Se Encontraron Resultados</h5></center>
    </div>
    <div class="ElecciónBuscador">

    </div>
  </div>';
}}
echo '<div class="container"><center>';

if(!empty($ResultadoUsers)){
for( $i = 0; $i < count($ResultadoUsers); $i++){
  $Nickname = $ResultadoUsers[$i]['Nickname'];

  $sql = "SELECT * FROM usuarios WHERE Nickname = '$Nickname'";
  $Consulta = $mysqli->query($sql);
  while($Imagenes = $Consulta->fetch_array()){
    $Imagen[] = $Imagenes;
  }
$FotoPerfil = "../../".$Imagen[$i]['FotoPerfil'];
$Rango = $Imagen[$i]['Rango'];

  echo '
  <a class="PersonaBuscador" href="Perfil.php?user='.$Nickname.'">
          <img src="'.$FotoPerfil.'" alt="'.$Nickname.'"/>
          <h2>'.$Nickname.'</h2>

          <h4>'.$Rango.'</h4>
  </a>';




}}?>
</div></center>
<?php include '../../PreHecho/footer.php';?>
