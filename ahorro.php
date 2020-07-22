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

    <title>Ahorro</title>

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
              <a class="nav-link js-scroll-trigger" href="index.php">Inicio</a>
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

  
    <!-- Test -->
    <section id="portfolio">
      <div class="container"><br>
        <h2 class="text-center">Ahorro</h2>
        <hr class="star-primary"></hr>
        
        <center><h5 >Date ciertos lujos con el dinero que puedes ahorrar</h5></center><br>
         <br>

        

         <form class="form-horizontal" method="POST" action="resultado_ahorro.php">
  <div class="form-group">
    <label class="control-label col-sm-8" > <h4>¿Cuántos cigarros fumas  al día?</h4></label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="num" placeholder="Ingresa un número" required data-validation-required-message="Por favor ingresa un número">
       <p class="help-block text-danger"></p>
    </div>
  </div>
  
   <div class="form-group">
    <label class="control-label col-sm-8" > <h4> ¿Cuánto gastas en una cajetilla de cigarros?</h4></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name= "precio" placeholder="Ingresa un número" required data-validation-required-message="Por favor ingresa un número">
      <p class="help-block text-danger"></p>
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-8" > <h4> ¿Cuántos cigarros contiene la cajetilla?</h4></label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name= "numcig" placeholder="Ingresa un número" required data-validation-required-message="Por favor ingresa un número">
      <p class="help-block text-danger"></p>
    </div>
  </div>


         <center><input type="submit" value="Ver Resultado" class="btn btn-success" name="env">
</form> 
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

 