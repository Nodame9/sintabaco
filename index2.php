
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
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
</head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>Sin tabaco</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="css/freelancer.min.css" rel="stylesheet">

<body id="page-top">

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
              <a class="nav-link js-scroll-trigger" href="#about">Registro</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Inicia Sesión</a>
           
          </ul>
        </div>
      </div>
    </nav>

    

    <!-- About Section -->
    <section id="about">
      <div class="container"><br>
        <h2 class="text-center">Registro</h2>
        <hr class="star-light">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <form method="POST" action="index.php">
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Nombre</label>
                  <input class="form-control" name="nombre" type="text" placeholder="Nombre" required data-validation-required-message="Por favor ingresa tu nombre">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Contraseña</label>
                  <input class="form-control" name="contrasena" type="password" placeholder="Contraseña" required data-validation-required-message="Por favor ingresa tu contraseña">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
             
              <br>
              <div id="success"></div>
              <div class="form-group">
                <button type="submit" class="btn btn-success btn-lg" id="sendMessageBut" name="btn1">Enviar</button>
              </div>
            </form>

            <?php

            if (isset($_POST['btn1']))
            {
               

                $nombre = $_POST['nombre'];
                 $contrasena = $_POST['contrasena'];

                 $con->query("INSERT INTO usuarios (nombre,contrasena) values ('$nombre','$contrasena')");
            

      
            ?>

            <script type="text/javascript">
            alert("Registrado");
            </script>

            <?php
            }
            ?>

          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
      <div class="container">
        <h2 class="text-center">Inicia Sesión</h2>
        <hr class="star-primary">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
            <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
            <form action="index.php"  method="POST">
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Nombre</label>
                  <input class="form-control" name="nombre2" type="text" placeholder="Nombre" required data-validation-required-message="Por favor ingresa tu nombre">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Contraseña</label>
                  <input class="form-control" name="contrasena2" type="password" placeholder="Contraseña" required data-validation-required-message="Por favor ingresa tu contraseña">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
             
              <br>
              <div id="success"></div>
              <div class="form-group">
                <button type="submit" class="btn btn-success btn-lg" id="sendMessageButton" >Enviar</button>
              </div>
            </form>

             <?php
               

            $user=$_POST['nombre2'];
            $pass=$_POST['contrasena2'];

            $sqlq = "SELECT * FROM usuarios WHERE nombre='$user'  AND contrasena='$pass'";
            $res = mysqli_query($con, $sqlq);
            
            if($_POST['contrasena2']!=null){
            if($res['contrasena']==$_POST['contrasena2']){
            $_SESSION['username']=$_POST['nombre2'];
            ?>

            <script type="text/javascript">
            location.href ="bienvenido.php";
            </script>
            
            <?php
            }}
            
            ?>

          </div>
        </div>
      </div>
    </section>

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
              <h3>En Web</h3>
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
              <p>correo:sintabaco@gmail.com
                
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


    

  </body>

</html>
