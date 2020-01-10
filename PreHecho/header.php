<body>

<header>
  <div id="logo" class="Logo">
    <a href="https://juamber-tecnologic-world.000webhostapp.com/">
      <img  src="https://juamber-tecnologic-world.000webhostapp.com/Imagenes/Logos/Logo.png">
    </a>
  </div>

  <div class="Menú">
    <nav>
      <ul>
        <li><a href="https://juamber-tecnologic-world.000webhostapp.com/Contacto.php">Contacto</a></li>
        <li><a href="https://juamber-tecnologic-world.000webhostapp.com/Noticias.php">Noticias</a></li>
        <li><a href="https://juamber-tecnologic-world.000webhostapp.com/Foro/Foro.php">Foro</a></li>
      </ul>
    </nav>
  </div>



<script type="text/javascript">
  function validar(e){
    if (window.event){
      keyval=e.keyCode
    }else if(e.which){
      keyval=e.which
    }if (keyval=="13"){
      document.buscar.submit()}
  }
</script>


  <div class="Buscador">
      <form action="https://juamber-tecnologic-world.000webhostapp.com/php/Buscador/Buscador.php" method="post">
        <input type="text"  placeholder="Buscador de Usuarios,Posts..." onkeypress="return validar(event)" name="Busqueda" class="" size="60" aria-label="Amount (to the nearest dollar)"/>
      </form>
  </div>



<div class="RegistroLoginHeader">
  <?php if(empty($_SESSION['Nickname'])){
    echo '
    <a class="SinIniciarSesión" href="https://juamber-tecnologic-world.000webhostapp.com/Login.php">
      <b>Entra
        <span class="glyphicon glyphicon-user" >
        </span>
      </b>
    </a>';
  }else{
    $foto = $_SESSION['FotoUsuario'];
    echo '
      <a class="SesiónIniciada">
      <img id="ImgUser" src="https://juamber-tecnologic-world.000webhostapp.com/'.$foto.'" alt="Perfil"/>
      </a>
    ';}?>
          <div id="MenuUser" class="MenuDesplegableUsuario">
            <ul>
              <li><a href="https://juamber-tecnologic-world.000webhostapp.com/Perfil.php">Perfil <span class="glyphicon glyphicon-user"></span></a></li>
              <li><a href="https://juamber-tecnologic-world.000webhostapp.com/php/RegistroLogin/CerrarSesion.php">Cerrar Sesión <span class="glyphicon glyphicon-off"></span></a></li>

            </ul>
          </div>
</div>
</header>
