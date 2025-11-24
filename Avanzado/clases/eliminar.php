<?php 
include('agregado.php');
$productos->eliminar_producto($_GET['nombre']);
header("Location: ../unidad7.php?eliminado");
?>