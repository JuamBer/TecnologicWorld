<?php if(!isset($_SESSION)){session_start();}?>
<?php include 'PreHecho/Head.php';?>
<?php include 'PreHecho/header.php';?>
<?php

$mysqli = new mysqli("localhost","id6358110_juamber","passwordtw","id6358110_basededatos");

$SQL = "SELECT * FROM noticias";
$Consulta = $mysqli->query($SQL);
$Rows = $Consulta->num_rows;

while($Array = $Consulta->fetch_array()){
   $Noticias[] = $Array;
}

if(!empty($_GET['CuantasNoticias'])){
  if($_GET['CuantasNoticias'] >= count($Noticias)){
    $CuantasNoticias = count($Noticias);
  }else{
    $CuantasNoticias = $_GET['CuantasNoticias'];
    $CuantasNoticias++;
  }
}else{
  if(count($Noticias) >= 1){
    $CuantasNoticias = 1;
  }else{
    $CuantasNoticias = count($Noticias);
  }
}
ECHO '<div id="ListadoGrande" class="ListadoGrande">';
for($i = 0; $i < $CuantasNoticias; $i++){
 $ID = $Noticias[$i]['ID'];
 $ID_Persona = $Noticias[$i]['ID_Persona'];
 $Titulo = $Noticias[$i]['Titulo'];
 $Noticia = $Noticias[$i]['Noticia'];

 echo '<div class="Noticia">';
 if(!empty($_SESSION['Rango'])){
   if($_SESSION['Rango'] == 'Administrador'){
    echo '<a  class="BorrarEditarNoticia" href="php/Noticias/BorrarNoticia.php?ID_Comentario='.$ID.'">
          <span class="glyphicon glyphicon-remove"></span> Borrar</a>
          <a  class="BorrarEditarNoticia" href="php/Noticias/EditarNoticia.php?ID_Comentario='.$ID.'">
          <span class="glyphicon glyphicon-wrench"></span> Editar</a>';
   }}

 echo'
  <a name="'.$Titulo.'"></a>
  <h1>'.$Titulo.'</h1>
  <p>'.$Noticia.'</p>
  </div>';

}
echo '<a class="MasNoticias" href="Noticias.php?CuantasNoticias='.$CuantasNoticias++.'">Mas Noticias</a>';
if(!empty($_SESSION['Rango'])){
if($_SESSION['Rango'] == 'Administrador'){

  echo'
  <div class="PublicarNoticia">
    <form action="php/Noticias/EnvioNoticia.php" method="POST" enctype="multipart/form-data">
      <h2>Título</h2>
        <input type="text" name="Titulo" placeholder="Aqui pon el Título para identificar la noticia, este tendrá un resaltado"><br/><br/>
      <h2>Artículo</h2>
      <textarea name="Noticia" rows="10" placeholder="Escribe todo el artículo aquí, puedes utilizat etiquetas de HTML5 como poner enlaces,Imagenes,Tipos de texto...


      Enlaces: <a href=(Comillas Dobles)URL(Comillas Dobles)>Nombre Del Enlace</a>
      Imagenes:                   <img src=(Comillas Dobles)URL(Comillas Dobles)/>
      Tipografias:                       <b>Texto</b>,<i>Texto</i>,<u>Texto</u>..." required></textarea>


      <input type="submit" value="Publicar Noticia"/>

      </form>
    </div>';

}}


?>



<?php include 'PreHecho/footer.php';?>
