 <?php
$host = $_SERVER["HTTP_HOST"];
$url = $_SERVER["REQUEST_URI"];

$UrlCompleta = "http://" . $host . $url;

$title = $url;

if($url == "/"){$title = "Tecnologic World";}
if($url == "/Login.php"){$title = "Inicio de Sesión";}
if($url == "/Foro.php"){$title = "Foro";}
if($url == "/Noticias.php"){$title = "Noticias";}
if($url == "/Registrarse.php"){$title = "Registro";}
if($url == "/Login.php"){$title = "Inicio de Sesión";}
if(strpos($url, '/Foro/') !== false){$title = "Foro";}
if(strpos($url, '/php/Buscador') !== false){$title = "Buscador";}
if(strpos($url, '/Perfil.php') !== false){$title = "Perfil";}

?>

<html lang="en">
	<head>
		<title><?php echo $title;?></title>
      <meta charset="UTF-8">
      <meta name="Description" content="Tecnologic World es una Página Web basada en la comunidad , Los
	                Apartados de la comunidad son El Hardware,Seguridad Informática,Diseño Web y más." />
      <meta name="Keywords" content="Tecnologic Worl, Web" />
      <meta http-equiv="Content-Language" content="es"/>
      <meta name="distribution" content="global"/>
	    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">


			<link rel="stylesheet" href="https://juamber-tecnologic-world.000webhostapp.com/PreHecho/css/header.css">

      <link rel="stylesheet" href="https://juamber-tecnologic-world.000webhostapp.com/css/Buscador.css">
      <link rel="stylesheet" href="https://juamber-tecnologic-world.000webhostapp.com/css/CambiarParametros.css">
      <link rel="stylesheet" href="https://juamber-tecnologic-world.000webhostapp.com/css/Contacto.css">
      <link rel="stylesheet" href="https://juamber-tecnologic-world.000webhostapp.com/css/index.css">
      <link rel="stylesheet" href="https://juamber-tecnologic-world.000webhostapp.com/css/Noticias.css">
      <link rel="stylesheet" href="https://juamber-tecnologic-world.000webhostapp.com/css/Perfil.css">
      <link rel="stylesheet" href="https://juamber-tecnologic-world.000webhostapp.com/css/RegistroLogin.css">

      <link rel="stylesheet" href="https://juamber-tecnologic-world.000webhostapp.com/css/Foro/Foro.css">
      <link rel="stylesheet" href="https://juamber-tecnologic-world.000webhostapp.com/css/Foro/Comentarios.css">
      <link rel="stylesheet" href="https://juamber-tecnologic-world.000webhostapp.com/css/Foro/EditarPost.css">
      <link rel="stylesheet" href="https://juamber-tecnologic-world.000webhostapp.com/css/Foro/NuevoTema.css">
      <link rel="stylesheet" href="https://juamber-tecnologic-world.000webhostapp.com/css/Foro/Post.css">

      <link rel="stylesheet" href="https://juamber-tecnologic-world.000webhostapp.com/css/Responsive/BuscadorResponsive.css">
      <link rel="stylesheet" href="https://juamber-tecnologic-world.000webhostapp.com/css/Responsive/ContactoResponsive.css">
      <link rel="stylesheet" href="https://juamber-tecnologic-world.000webhostapp.com/css/Responsive/ForoResponsive.css">
      <link rel="stylesheet" href="https://juamber-tecnologic-world.000webhostapp.com/css/Responsive/PerfilResponsive.css">
      <link rel="stylesheet" href="https://juamber-tecnologic-world.000webhostapp.com/css/Responsive/RegistroLoginResponsive.css">




</head>
