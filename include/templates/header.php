<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="UTF-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="manifest" href="site.webmanifest">

  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="css/fontawesome.min.css">


  <link rel="stylesheet" href="css/main.css?1.9">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.compat.css"/>
  <? 
    /* OBTENER el archivo php con el que se esra trabajando EJ= Archivo(invitados.php) Resultado Final (Invitados)*/
    $phpSelf = filter_input(INPUT_SERVER, 'PHP_SELF', FILTER_SANITIZE_URL);
    $path_parts = pathinfo($phpSelf);
    $basename = $path_parts['basename'];
    $pageName = ucfirst($path_parts['filename']);

    
    if($pageName == "Invitados" || $pageName == "Index"){
      echo "<link rel=stylesheet href=css/colorbox.css>";
    }elseif($pageName == "Conferencia"){
      echo "<link rel=stylesheet href=css/lightbox.css>";
    }
  ?>
  

  <script src="js/vendor/modernizr-3.11.2.min.js"></script>
<!-- Fuentes-->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;800&family=Oswald:wght@400;600&family=PT+Sans:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
  <meta name="theme-color" content="#fafafa">

</head>

<body class="<? echo $pageName; ?>">
 <!-- Inicio header -->
  <header class="site-header">
      <div class="hero">
          <div class="contenido-header">
              <nav class="redes-sociales">
                  <a href="#"><i class="fab fa-facebook-f"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="#"><i class="fab fa-pinterest-p"></i></a>
                  <a href="#"><i class="fab fa-youtube"></i></a>
                  <a href="#"><i class="fab fa-instagram"></i></a>
              </nav>
              <div class="informacion-evento">
                <div class="clearfix">
                  <p class="fecha"><i class="fas fa-calendar-alt"></i>10/12 Dic</p>
                  <p class="ciudad"><i class="fas fa-map-marker-alt"></i>Cordoba, AR</p>
                </div>

              </div>
              <h1 class="nombre-sitio">WebConferencias</h1>
              <p class="slogan">Las mejores conferencias via web</p>
          </div>
      </div>
  </header><!-- Fin Header -->

  <!-- Barra -->
  <div class="barra animate">
      <div class="contenedor clearfix">
          <div class="logo">
            <a href="index.php">
              <img src="img/logo.svg" alt="Logo">
            </a>
          </div>
          <div class="menu-movil">
              <span></span>
              <span></span>
              <span></span>
          </div>
          <nav class="navegacion-principal">
              <a href="conferencia.php">Conferencia</a>
              <a href="calendario.php">Calendario</a>
              <a href="invitados.php">Invitados</a>
              <a href="registro.php">Reservaciones</a>
          </nav>
      </div>
  </div>
  <!-- Fin Barra -->