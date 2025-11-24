<?php 
$unidad_clases = $_POST ['unidad'];
$fecha_clases = $_POST ['fecha'];


include('conexion.php');

mysqli_query($datosConexion, "INSERT INTO clases VALUES ('','$unidad_clases','$fecha_clases')");

header('Location: ../ver_clases.php?ok');
?>