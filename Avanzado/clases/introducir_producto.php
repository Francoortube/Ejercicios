<?php 
include ('agregado.php');


$productos->cargarProducto($_POST['nombre'], $_POST['descripcion'], $_POST['precio']);

header("Location: ../unidad7.php?resgistrado");
?>