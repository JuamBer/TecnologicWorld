<?php  session_start();

include '../PreHecho/Head.php';
?>
<?php include '../PreHecho/header.php';?>

<h2 class="-Titulo">Foro</h2>
	<div class="Foro">
				<div class="NuevoTema">
          <a href="NuevoTema.php" class="">Nuevo Tema</a>
        </div>

			<div class="PreguntasForo">
					<?php
          $mysqli = new mysqli("localhost","id6358110_juamber","passwordtw","id6358110_basededatos");

					if(empty($Apartado)){
							$Consulta = $mysqli->query("SELECT * FROM foro");
					}else{
						  $Consulta = $mysqli->query("SELECT * FROM foro WHERE Apartado = '$Apartado'");
					}
					if($Consulta){
				   while($Resultados = $Consulta->fetch_array()){
            $ResultadoPosts[] = $Resultados;
          }}
          if(empty($ResultadoPosts)){
            echo '<div id="NingúnResultadoForo"><img src="../Imagenes/Logos/Logo.png"><h2>Ninún Resultado Encontrado</h2></div>';
          }else{


            if(!empty($_GET['CuantosPosts'])){
              if($_GET['CuantosPosts'] >= count($ResultadoPosts)){
                $CuantosPosts = count($ResultadoPosts);
              }else{
                $CuantosPosts = $_GET['CuantosPosts'];

                if(count($ResultadoPosts) >= $CuantosPosts ++){
                  $CuantosPosts = $CuantosPosts;
                }else{
                  $CuantosPosts= $CuantosPosts + 1;
                }
              }
            }else{
               if(count($ResultadoPosts) >= 3){
                 $CuantosPosts = 3;
               }else{
                 $CuantosPosts = count($ResultadoPosts);
               }
            }

				  for( $i = 0; $i < $CuantosPosts; $i++){
          $ID = $ResultadoPosts[$i]['ID'];
					$Titulo = $ResultadoPosts[$i]['Titulo'];
					$Texto = $ResultadoPosts[$i]['Texto'];
					$Apartado = $ResultadoPosts[$i]['Apartado'];
					$Data = $ResultadoPosts[$i]['Data'];
          $ID_Persona = $ResultadoPosts[$i]['ID_Persona'];

            $Consulta = $mysqli->query("SELECT * FROM usuarios WHERE ID = '$ID_Persona'");
            $Final = $Consulta->fetch_array();
            $Imagen = "https://juamber-tecnologic-world.000webhostapp.com/".$Final['FotoPerfil'];

            if(empty($Final)){$Imagen = "../../Imagenes/Iconos/User.png";}
            echo '
            <a class="PreguntaForo" href="Post.php?ID='.$ID.'">

  							<div class="PersonaDelPost">
  								<img src="'.$Imagen.'" alt=""/>
                  <h4>'.$Final['Nickname'].'</h4>
                  <p>'.$Data.'</p>
  							</div>
  							<div class="TítuloDelPost">
  							    <hgroup><h3>'.$Titulo.'</h3></hgroup>
                </div>


           </a>
';
}}
echo '<a class="MasNoticias" href="https://juamber-tecnologic-world.000webhostapp.com/Foro/Foro.php?CuantosPosts='.$CuantosPosts.'">Mas Posts</a>';

?>
			</div>
	</div>
<?php include '../PreHecho/footer.php';?>
