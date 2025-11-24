<?php 
include ('../clases/agregado.php');

$registros->crearRegistro($_POST['usuario'], $_POST['contrasenia']);

header("Location: ../unidad8.php?reg_ok");
?>