<!DOCTYPE html>
<html lang="es">
<head>
  <!-- Required meta tags always come first -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="robots" content="Desarrollo de herramientas y aplicaciones móviles, sitios web y tiendas virtuales en Temuco, región de la Araucanía" />
  <meta name="description" content="Desarrollo de herramientas y aplicaciones móviles, sitios web y tiendas virtuales en Temuco, región de la Araucanía"/>
  <meta name="keywords" content="aplicaciones moviles, apps, desarrollo, móvil, smartphone, tablet, android, nativas, descargas, aplicaciones web, página web, tiendas online, sitios web, temuco, Araucanía"/>
  <!-- iconos -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
  <link href="css/fontawesome.css" rel="stylesheet" type="text/css" media="all" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap-flex.min.css">

  <script src="https://use.fontawesome.com/5765211a64.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="css/app.css">
  <link rel="stylesheet" href="css/mobile.css">
  <link rel="stylesheet" href="css/contacto.css">
  <link rel="shortcut icon" href="images/favicon.ico" />
  <title>mAppu - Desarrollo de herramientas y aplicaciones móviles, sitios web y tiendas virtuales en Temuco, Región de la Araucanía</title>

  <script>
    window.onload = detectarCarga;
    function detectarCarga(){
      document.getElementById("cargando").style.display="none";
    }
  </script>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-122731656-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-122731656-1');
  </script>

  <!-- Datos estructurados para buscador Google-->
  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "name": "mAppu",
      "url": "https://mappu.cl",
      "telephone": "+5698331825",
      "email": "hola@mappu.cl",
      "logo": "https://mappu.cl/images/logo.png",
      "description": "Desarrollo de aplicaciones móviles, aplicaciones web, sitios web, tiendas virtuales; Temuco, región de La Araucanía",
      "sameAs": [
      "https://www.facebook.com/",
      "https://twitter.com/",
      "https://plus.google.com/u/0/",
      "https://www.linkedin.com/in/"
      ]
    }
  </script>
</head>
<body>

  <!-- inicio cargando -->
  <div id="cargando"  align="center">
    <div id="latido">
      <img src="images/boton-mappu.svg" height="125px" width="125px"/>
    </div>
  </div>

  <!-- INICIO HEADER -->
  <header id="header-container">
    <div class="container">
      <div class="row flex-items-xs-middle flex-items-xs-between">
        <div class="col-xs-1 pull-xs-left hidden-sm-down" id="menuToggle">
          <button class="navbar-toggler pull-xs-right hidden-sm-down" type="button" data-toggle="collapse" data-target="#menu-grande">
            <img id="boton-mappu" class="hidden-md-down" src="images/boton-mappu.svg">
          </button>
        </div>
        <div class="col-xs-2 pull-xs-right">
          <a href="{{route('home')}}"><img class="img-responsive" src="images/logo.png" id="logo-mappu"></a>
        </div>
        <div class="col-md-3 col-xs-3 offset-md-5 hidden-xs-down">
          <form>
            <div class="input-group">
              <input type="text" class="form-control">
              <span class="input-group-btn">
                <button class="btn btn-buscar" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </div>
        <!-- BOTON APARECE SOLO CON MODO RESPONSIVO -->
        <div class="col-xs-3">
          <button class="navbar-toggler pull-xs-right hidden-sm-up" type="button" data-toggle="collapse" data-target="#navMenu">
            <img id="mappu-movil" class="hidden-md-up" src="images/boton-mappu.svg" alt="mappu-boton">
          </button>
        </div>
        <!-- BOTON APARECE SOLO CON MODO RESPONSIVO -->
      </div>
    </div>
  </header>

  <!-- /Header -->


  <!-- @include('menu-escritorio') -->
  @include('menu-fixed')
  @include('escritorio')

  <!-- Menu -->
  <!-- MENU DESPEGABLE SOLO PARA DISPOSITIVOS MOVILES -->
  <div id="menu-container" class="hidden-md-up">
    <nav id="navMenu" class="navbar-toggleable-xs navbar navbar-light collapse">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-md-4">
            <div class="nav-container text-xs-center text-md-left">
              <ul class="nav navbar-nav">
                <li class="nav-item text-xs-center active">
                  <a class="nav-link" href="{{route('home')}}"><i class="fa fa-home" style="font-size:25px;"></i>Home</a>
                </li>
                <li class="nav-item text-xs-center">
                  <a class="nav-link" href="{{route('escritorio')}}"><i class="fa fa-television" style="font-size:25px;"></i>Escritorio</a>
                </li>
                <li class="nav-item text-xs-center">
                  <a class="nav-link" href="{{route('asesoria.smart')}}"><i class="fa fa-cogs" style="font-size:25px;"></i>Servicios Informáticos mAppu</a>
                </li>
                <li class="nav-item hidden-sm-up text-xs-center">
                  <a class="nav-link" href="{{route('apps.mappu')}}"><img  width="20px" height="20px" src="images/boton-mappu-copia.svg" />
                  Desarrollo de Aplicaciones móviles</a>
                </li>
                <li class="nav-item hidden-sm-up text-xs-center">
                  <a class="nav-link" href="{{route('apps.medida')}}"><i class="material-icons" style="font-size:25px;">phone_android</i>Aplicaciones mAppu</a>
                </li>
                <li class="nav-item hidden-sm-up text-xs-center">
                  <a class="nav-link" href="{{route('somos.mappu')}}"><i class="fa fa-question" style="font-size:25px;"></i>Somos mAppu</a>
                </li>
                <li class="nav-item hidden-sm-up text-xs-center">
                  <a class="nav-link" href="{{route('contacto')}}"><i class="material-icons" style="font-size:25px;">mail_outline</i>Contacto </a>
                </li>
                <li class="nav-item hidden-sm-up text-xs-center">
                  <form>
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Buscar">
                      <span class="input-group-btn">
                        <button class="btn btn-buscar" type="button">
                          <span class="hidden-sm-down">Buscar</span>
                          <i class="fa fa-search hidden-md-up"></i>
                        </button>
                      </span>
                    </div>
                  </form>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </div>

  <!-- /Menu -->
  @yield('content')
  @include('modals.slide1')
  @include('modals.slide2')
  @include('modals.slide3')




  <!-- Footer -->

  <div id="footer-container">
    <div class="container">
      <div class="row">


          <div class="col-md-3">
            <h6>CONTACTENOS</h6>
            <div style="height:3px; background-color:#ff9900;"></div>
            <br>
            <p>TELEFONO: +56 9 8331825</p>
            <a href="{{route('contacto')}}">
              <p>EMAIL: hola@mappu.cl</p></a>
          </div>

          <div class="col-md-3">
            <h6>MAPA DEL SITIO</h6>
            <div style="height:3px; background-color:#ff9900;"></div>
            <br>
            <p><a href="{{route('asesoria.smart')}}">Servicios Informáticos mAppu</a>
              <br>
              <a href="{{route('apps.medida')}}">Desarrollo de Aplicaciones móviles</a>
              <br>
              <a href="{{route('apps.mappu')}}">Aplicaciones mAppu</a>
              <br>
              <a href="{{route('somos.mappu')}}">Somos mAppu</a>
              <br>
              <a href="{{route('contacto')}}">Contacto</a>
            </p>
          </div>

          <div class="col-md-3">
            <h6>REDES SOCIALES</h6>
            <div style="height:3px; background-color:#ff9900;"></div>
            <br>
            <button><i class="fa fa-facebook" style="font-size:18px; color:black; height:20px; width:20px;"></i></button>
            <button><i class="fa fa-twitter" style="font-size:18px; color:black;  height:20px; width:20px;"></i></button>
            <button><i class="fa fa-youtube" style="font-size:18px; color:black;  height:20px; width:20px;"></i></button>
            <button><i class="fa fa-instagram" style="font-size:18px; color:black;  height:20px; width:20px;"></i></button>
          </div>

          <div class="col-md-3">
            <h6>SOMOS MAPPU</h6>
            <div style="height:3px; background-color:#ff9900;"></div>
            <br>
            <p>Desarrollando desde la frontera  </p>
            <p>
              Temuco, Región de La Araucanía
            </p>

          </div>
            
        </div>
      </div>
    </div>

    <!-- /Footer -->

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/js/bootstrap.min.js" integrity="sha384-ux8v3A6CPtOTqOzMKiuo3d/DomGaaClxFYdCu2HPMBEkf6x2xiDyJ7gkXU0MWwaD" crossorigin="anonymous"></script>
    <script src="js/app.js"></script>
  </body>
  </html>
