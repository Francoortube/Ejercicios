<?php 
session_start();
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$mail = $_POST["email"];
$consulta = $_POST["consulta"];
$codigo = $_POST["codigo"];

if($codigo == $_SESSION['captcha']) {
include('conexion.php');

 mysqli_query($datosConexion, "INSERT INTO consultas VALUES ('','$nombre','$apellido','$mail','$consulta')");

    header("Location: ../unidad5.php?okey");
} else {
    header("Location: ../unidad5.php?error");
}

?>