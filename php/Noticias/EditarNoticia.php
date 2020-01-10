<?php session_start();?>
<?php
include '../../PreHecho/Head.php';

$mysqli = new mysqli("localhost","id6358110_juamber","passwordtw","id6358110_basededatos");
?>

<?php include '../../PreHecho/header.php';?>

<?php

$ID = $_GET['ID_Comentario']; // Cogemos el ID del comentario de la Base de Datos

$Consulta = $mysqli->query("SELECT * FROM noticias WHERE ID = '$ID'");

$Array = $Consulta->fetch_array();

$Titulo = $Array['Titulo'];
$Noticia = $Array['Noticia'];

$Titulo = htmlspecialchars($Titulo);
$Noticia = htmlspecialchars($Noticia);

echo '<div class="Noticia">';
echo'<h1  class="">'.$Titulo.'</h1>

      <p class="">'.$Noticia.'</p>

      </div></div>';




if($_SESSION['Rango'] == 'Administrador'){

 echo'
    <div class="PublicarNoticia">
      <form action="SQLEditarNoticia.php?ID='.$ID.'" method="POST" enctype="multipart/form-data">
        <h2>Título</h2>
          <input type="text" name="Titulo" value="'.$Titulo.'"><br/><br/>
        <h2>Artículo</h2>
        <textarea name="Noticia">'.$Noticia.'</textarea>


        <input type="submit" value="Editar Noticia"/>

        </form>
      </div>';


}


?>

<?php include '../../PreHecho/footer.php';?>
