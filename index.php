<?php


$con=mysqli_connect("localhost","root","","sintabaco");




?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
      <script src="js/push.min.js"></script>
    <title>Sin Tabaco</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">
      <link href="css/starter-template.css" rel="stylesheet">

    <link href="css/estilos.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Sin Tabaco</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Menú</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">Info</a>
            </li>
            
          </ul>

        </div>
      </div>

      <?php
            include("conexion.php");
        ?>  
      <div class="demo-content">
   <div id="notification-header">
      
            <button id="notification-icon" class="btn btn-primary" name="button" onclick="myFunction()" class="dropbtn"><span id="notification-count"><?php if($count>0) { echo $count; } ?></span><img src="img/icono1.png" /></button>
                <div id="notification-latest"></div>
        </div>          
   </div>
</div>
          <?php if(isset($message)) { ?> <div class="error"><?php echo $message; ?></div> <?php } ?>
          <?php if(isset($success)) { ?> <div class="success"><?php echo $success;?></div> <?php } ?>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <img class="img-fluid" src="img/profile.png" alt="">
        <div class="intro-text">
          <span class="name">Sin Tabaco</span>
          <hr class="star-light">
          <span class="skills">¡Has dado un importante primer paso!</span>
        </div>
      </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
      <div class="container">
        <h2 class="text-center">Menú</h2>
        <hr class="star-primary">
        <div class="row">
          <div class="col-sm-4 portfolio-item">
            <a class="portfolio-link" href="#portfolioModal1" data-toggle="modal">
              <div class="caption">
                <div class="caption-content">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/test.png" alt="">
            </a>
          </div>
          <div class="col-sm-4 portfolio-item">
            <a class="portfolio-link" href="#portfolioModal2" data-toggle="modal">
              <div class="caption">
                <div class="caption-content">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/dinero.png" alt="">
            </a>
          </div>
         
          <div class="col-sm-4 portfolio-item">
            <a class="portfolio-link" href="#portfolioModal4" data-toggle="modal">
              <div class="caption">
                <div class="caption-content">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/estadisticas.png" alt="">
            </a>
          </div>
          
          <div class="col-sm-4 portfolio-item">
            <a class="portfolio-link" href="#portfolioModal6" data-toggle="modal">
              <div class="caption">
                <div class="caption-content">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/tabaco.png" alt="">
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- About Section -->
    <section class="success" id="about">
      <div class="container">
        <h2 class="text-center">Info</h2>
        <hr class="star-light">
        <div class="row">
          <div class="col-lg-4 ml-auto">
            <p>Sin tabaco te proporcionará algunas herramientas que podrás utilizar para crear conciencia sobre tu consumo de cigarrillos.
            Conocerás tu nivel de dependencia a la nicotina por medio de un test que responderás las veces que desees.
            Saber cuánto puedes ahorrar si disminuyes tu consumo de cigarrillos. 
            Además registrarás tu consumo diario de cigarros y con esto visualizarás una gráfica para llevar un historial sobre ello. </p>
          </div>
          <div class="col-lg-4 mr-auto">
            <p>Recibirás mensajes motivadores por medio de notificaciones para ayudarte a disminuir tu consumo. También recibirás notificaciones para registrar el número de cigarrillos que has fumado el las últimas horas. </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
   

    <!-- Footer -->
    <footer class="text-center">
      <div class="footer-above">
        <div class="container">
          <div class="row">
            <div class="footer-col col-md-4">
               <h3>Facultad de Cs. de la computación</h3>
              <p>14 Sur y Av. San Claudio C.P. Puebla, 
                <br>Puebla, México </p>
            </div>
            <div class="footer-col col-md-4">
              <h3>Acerca de la web</h3>
              <ul class="list-inline">
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="#">
                    <i class="fa fa-fw fa-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="#">
                    <i class="fa fa-fw fa-google-plus"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="#">
                    <i class="fa fa-fw fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="#">
                    <i class="fa fa-fw fa-linkedin"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="#">
                    <i class="fa fa-fw fa-dribbble"></i>
                  </a>
                </li>
              </ul>
            </div>
            <div class="footer-col col-md-4">
              <h3>Contacto</h3>
              <p>sintabaco@gmail.com</p>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-below">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              Copyright &copy; Your Website 2017
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top d-lg-none">
      <a class="btn btn-primary js-scroll-trigger" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

    <!-- Portfolio Modals -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <h2>Test para saber tu nivel de dependencia</h2>
                  <hr class="star-primary">
                  <img class="img-fluid img-centered" src="img/portfolio/test1.png" alt="">
                  <p> Responde un test (denominado Fagerström), el cual te permitirá conocer tu nivel de dependencia a la nicotina.</p>
                  
                  <h3><ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="test.php">Realizar Test</a>
            </li>
          </ul></h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <h2>Ahorro</h2>
                  <hr class="star-primary">
                  <img class="img-fluid img-centered" src="img/portfolio/dinero1.png" alt="">
                  <p>Date ciertos lujos con el dinero que has ahorrado</p>
                
                   <h3><ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="ahorro.php">Ir a ahorro</a>
            </li>
          </ul></h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
        
        </div>
      </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <h2>Estadísticas</h2>
                  <hr class="star-primary">
                  <img class="img-fluid img-centered" src="img/portfolio/est.png" alt="">
                  <p>Podrás conocer las estadísticas de tu consumo</p>
                 
                  <h3><ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="estadisticas.php">Ver Estadísticas</a>
            </li>
          </ul></h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
         
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <h2>Registra cuántos cigarros has fumado</h2>
                  <hr class="star-primary">
                  <img class="img-fluid img-centered" src="img/portfolio/tabaco1.png" alt="">
                  <p>Registra el número de cigarros que has consumido durante el día, esto te hará más consciente sobre cuánto fumas.</p>
                   <h3><ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="registra_cigarros.php">Registra cigarros</a>
            </li>
          </ul></h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>

     <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>

    <script type="text/javascript">
      function myFunction() {
        $.ajax({
          url: "notificaciones.php",
          type: "POST",
          processData:false,
          success: function(data){
            $("#notification-count").remove();                  
            $("#notification-latest").show();$("#notification-latest").html(data);
          },
          error: function(){}           
        });
      }
                                 
      $(document).ready(function() {
        $('body').click(function(e){
          if ( e.target.id != 'notification-icon'){
            $("#notification-latest").hide();
          }
        });
      });                                     
    </script>

    <?php
    echo '<script>
    Push.create("Sin tabaco",{
      body: "¿Cuántos cigarros has fumado en la última hora?",
      icon: "img/logo.png",
      timeout: 7000,
      onClick: function () {
        window.location="registra_cigarros.php";
        this.close();
      }
    });
  </script>';
  ?>
  </body>

</html>
