
<!DOCTYPE HTML >
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Title  -->
    <title>PILARES</title>
    <!-- Favicon  -->




    <link rel="icon" href="<?php echo constant('URL')?>public/img/core-img/favicon.ico">

    <!--Material Design for Bootsrap -->
    
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/mdb.min.css">
    
    
    <!-- Style CSS -->
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/mpg.css">

    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/estilos.css">
    <link rel="stylesheet" href="public/css/style.css">
 
    
    <!--Slider-->
    <link rel="stylesheet" href="public/dist/sheetslider.min.css"/>

</head>
<body>

    
  
    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <!-- Logo -->
                        <a class="navbar-brand" href="<?php echo constant('URL')?>principal"><img src="<?php echo constant('URL')?>public/img/core-img/Pilares_logo.svg" alt="Logo"></a>
                        <!-- Navbar Toggler -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#worldNav" aria-controls="worldNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <!-- Navbar -->
                        <div class="collapse navbar-collapse" id="worldNav">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo constant('URL')?>principal">Convocatorias</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo constant('URL')?>ubicapilares">Ubica tu PILARES</a>
                                </li>
                                <li class="nav-item">
                                    <a id="btn-abrir-popup" class="nav-link btn-abrir-popup">Registro Usuarios</a>
                                </li>
                                <li class="nav-item">
                                    <a  class="nav-link" href="<?php echo constant('URL')?>principal">Administración <span class="sr-only">(current)</span></a>
                                </li>
                            </ul>
                            <ul class="navbar-nav nav-flex-icons">
                              <li class="nav-item">
                                <a class="nav-link" href="https://www.facebook.com/Pilares-CDMX-325332928095841/" target="_blank"><i class="fa fa-facebook"></i></a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="https://twitter.com/CdmxPilares?s=08" target="_blank"><i class="fa fa-twitter"></i></a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="https://www.instagram.com/pilarescdmx/?utm_source=ig_profile_share&igshid=u462xj96zovt" target="_blank"><i class="fa fa-instagram"></i></a>
                              </li>
                            </ul>
                              <!--Vantana emergente de Registro Usuarios-->
                              <div class="contenedor">
                                <div class="overlay" id="overlay">
                                  <div class="popup" id="popup">
                                    <a href="index.html" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fa fa-times"></i></a>
                                    <h4 class="text-white">Ingresa usuario y contraseña </h4>
                                      <form action='<?php echo constant('URL')?>control/validar' method="post">
                                        <input placeholder="Usuario" name='txtusuario'>
                                        <input type="password" placeholder="Contraseña" name='txtpass'>
                                        <button type="submit" name="login">Ingresar</button>
                                      </form>
                                   </div>
                                  </div>
                                </div>
                            <!--Search Form
                            <div id="search-wrapper">
                                <form action="#">
                                    <input type="text" id="search" placeholder="Search something...">
                                    <div id="close-icon"></div>
                                    <input class="d-none" type="submit" value="">
                                </form>
                             -->
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>



</body>



<script language="JavaScript"> 
if(window.screen.availWidth == 1920)window.parent.document.body.style.zoom="140%"
if(window.screen.availWidth == 1280)window.parent.document.body.style.zoom="120%" 
if(window.screen.availWidth == 1152)window.parent.document.body.style.zoom="108%" 
if(window.screen.availWidth == 1024)window.parent.document.body.style.zoom="96%" 
if(window.screen.availWidth == 800)window.parent.document.body.style.zoom="75%" 
if(window.screen.availWidth == 640)window.parent.document.body.style.zoom="60%" 
if(window.screen.availWidth == 360)window.parent.document.body.style.zoom="100%" ;
</script>


<!-- imagen zoom -->


 