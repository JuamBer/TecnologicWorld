<?php session_start();?>
<?php include '../PreHecho/Head.php';?>
<?php include '../PreHecho/header.php';?>
<?php

$mysqli = new mysqli("localhost","id6358110_juamber","passwordtw","id6358110_basededatos");

$ID = $_GET['ID'];

$sql = "SELECT * FROM foro WHERE ID = '$ID'";
$result = $mysqli->query($sql);

$array = $result->fetch_array();

$Titulo = $array['Titulo'];
$Post = $array['Texto'];
$Apartado = $array['Apartado'];
$ID_Post = $array['ID'];
?>

<?php echo'
<h2 class="-Titulo">Foro -> Editar Tema</h2>

  <center><div class="Post">
    <div class="PostPost">
      <h2>'.$Titulo.'</h2>
      <p>'.$Post.'</p>
    </div>
  </div></center>';?>

  <div class="EditarPost">
    <form action=<?php echo'"../php/Foro/EditarPost.php?ID='.$ID_Post.'"';?> method="POST">
      <input type="text" name="Titulo" value="<?php echo $Titulo;?>"/>
      <textarea name="Texto"><?php echo $Post;?></textarea>
      <select name="Apartado" value="-HTML">
          <option> <?php echo $Apartado;?></option>
          <option> -HTML</option>
          <option> -CSS</option>
          <option> -JS</option>
          <option> -PHP Y MYSQL</option>

          <option> -Hardware General</option>
          <option> -Componentes</option>
          <option> -Empresas</option>
          <option> -Presupuestos</option>

          <option> -Hacking</option>
      </select>


      <input class="Enviar" type="submit" value="Editar Post"/>

			      </form>
			  </div>
		</div>
  </center>

<?php include '../PreHecho/footer.php';?>
