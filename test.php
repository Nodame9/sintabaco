
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

    <title>Test</title>

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
              <a class="nav-link js-scroll-trigger" href="index.php">Regresar</a>
           
           
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

  
    <!-- Test -->
    <section id="portfolio">
      <div class="container"><br>
        <h2 class="text-center">Test de dependencia a la nicotina</h2>
        <hr class="star-primary"></hr>
        <form method="POST" action="ver_resultado.php">
        <h4>1.-¿Cuánto tiempo pasa entre que se levanta y fuma su primer cigarrillo?</h4>
        <div class="form-check">
         <input  type="radio" name="exampleRadios" value="opt1" required data-validation-required-message="">
        <label class="form-check-label" for="exampleRadios1" >Hasta 5 minutos </label>
      </div>
      <div class="form-check">
        <input  type="radio" name="exampleRadios"  value="opt2" required data-validation-required-message="">
         <label class="form-check-label" for="exampleRadios2">Entre 6 y 30 minutos</label>
      </div>
      <div class="form-check">
        <input  type="radio" name="exampleRadios"  value="opt3" required data-validation-required-message="">
        <label class="form-check-label" for="exampleRadios3"> 31 - 60 minutos</label>
      </div>
      <div class="form-check">
       <input type="radio" name="exampleRadios"  value="opt4" required data-validation-required-message="">
      <label class="form-check-label" for="exampleRadios3">  Más de 60 minutos</label>
</div>

 <h4>2.-¿Encuentra difícil no fumar en lugares donde está prohibido, como la biblioteca o el cine?</h4>
      <div class="form-check">
         <input  type="radio" name="exampleRadios2"  value="opt1" required data-validation-required-message="">
        <label class="form-check-label" for="exampleRadios1">Sí</label>
      </div>
      
      <div class="form-check">
       <input  type="radio" name="exampleRadios2"  value="opt2" required data-validation-required-message="">
      <label class="form-check-label" for="exampleRadios"> No </label>
     </div>

  <h4> 3.-¿Qué cigarrillo le molesta más dejar de fumar?</h4>
      <div class="form-check">
         <input  type="radio" name="exampleRadios3"  value="opt1" required data-validation-required-message="">
        <label class="form-check-label" for="exampleRadios">El primero de la mañana</label>
      </div>
      <div class="form-check">
         <input type="radio" name="exampleRadios3"  value="opt2" required data-validation-required-message="">
        <label class="form-check-label" for="exampleRadios">Cualquier otro</label>
      </div>

      <h4>4.-¿Cuántos cigarrillos fuma al día?</h4>

       <div class="form-check">
         <input  type="radio" name="exampleRadios4"  value="opt1" required data-validation-required-message="">
        <label class="form-check-label" for="exampleRadios">10 ó menos</label>
      </div>
      <div class="form-check">
         <input type="radio" name="exampleRadios4"  value="opt2" required data-validation-required-message="" >
        <label class="form-check-label" for="exampleRadios">11 - 20</label>
      </div>
       <div class="form-check">
         <input  type="radio" name="exampleRadios4"  value="opt3" required data-validation-required-message="" >
        <label class="form-check-label" for="exampleRadios">21 - 30</label>
        <div class="form-check">
         <input  type="radio" name="exampleRadios4"  value="opt4" required data-validation-required-message="">
        <label class="form-check-label" for="exampleRadios">31 o más</label>
      </div>

      <h4> 5.-¿Fuma con más frecuencia durante las primeras horas después de levantarse que durante el resto del día? </h4>
     
      <div class="form-check">
         <input type="radio" name="exampleRadios5"  value="opt1" required data-validation-required-message="">
        <label class="form-check-label" for="exampleRadios">Sí</label>
        <div class="form-check">
         <input  type="radio" name="exampleRadios5"  value="opt2" required data-validation-required-message="">
        <label class="form-check-label" for="exampleRadios">No</label>
      </div>
      <h4>6.-¿Fuma aunque esté tan enfermo que tenga que guardar cama la mayor parte del día? </h4>
       <div class="form-check">
         <input  type="radio" name="exampleRadios6" value="opt1" required data-validation-required-message="" >
        <label class="form-check-label" for="exampleRadios">Sí</label>
        <div class="form-check">
         <input type="radio" name="exampleRadios6"  value="opt2" required data-validation-required-message="">
        <label class="form-check-label" for="exampleRadios">No</label>
      </div>

         <center><input type="submit" value="Ver Resultado" class="btn btn-success" name="env">
    </div>
    </section>




    <!-- Footer -->
    <footer class="text-center">
      <div class="footer-above">
        <div class="container">
          <div class="row">
            <div class="footer-col col-md-4">
              <h3>Ubicación</h3>
              <p></p>
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
  </body>

</html>

 