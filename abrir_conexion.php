<?php
  // Parametros a configurar para la conexion de la base de datos
  $host = "localhost";    // sera el valor de nuestra BD
  $basededatos = "sintabaco";    // sera el valor de nuestra BD
  $usuariodb = "root";    // sera el valor de nuestra BD
  $clavedb = "";    // sera el valor de nuestra BD

  //Lista de Tablas
  $tabla_db1 = "test";     // tabla de resultados de el test

  $conexion = new mysqli($host,$usuariodb,$clavedb,$basededatos);


  if ($conexion->connect_errno) {
      echo "Nuestro sitio experimenta fallos....";
      exit();
  }

?>