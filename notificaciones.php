<?php
$con = new mysqli("localhost","root","","sintabaco");

$sql = "UPDATE notificaciones SET estado = 1 WHERE estado = 0";	
$result = mysqli_query($con, $sql);

$sql = "SELECT * FROM notificaciones ORDER BY id DESC limit 3";
$result = mysqli_query($con, $sql);

$response='';

while($row=mysqli_fetch_array($result)) {

	/* Formate fecha 
	$fechaOriginal = $row["fecha"];
	$fechaFormateada = date("d-m-Y", strtotime($fechaOriginal));
		*/
	$response = $response . "<div class='notification-item'>" .
	
	"<div class='notification-comment'>" . $row["mensaje"]  . "</div>" .
	"</div>";
}
if(!empty($response)) {
	print $response;
}


?>