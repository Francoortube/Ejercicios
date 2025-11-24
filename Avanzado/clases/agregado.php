<?php 
include ('base_de_datos.php');
include ('producto.php');
include ('registro.php');

$baseDatos = new Basededatos('localhost','root','','phpavanzado');
$productos = new Producto($baseDatos);
$registros = new Registro($baseDatos);

?>