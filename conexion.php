<?php
	
    $con = new mysqli("localhost","root","","sintabaco");
    $count = 0;
    $sql2 = "SELECT * FROM notificaciones WHERE estado = 0";
    $result = mysqli_query($con, $sql2);
    $count = mysqli_num_rows($result);
