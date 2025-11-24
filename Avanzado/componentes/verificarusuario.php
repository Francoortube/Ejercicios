<?php 
include ('../clases/agregado.php');

$consulta = $registros->ingresoRegistro($_POST['usuario'],$_POST['contrasenia']);
      if ($consulta) {
         header("Location: ../unidad8.php?verificado");
         } else {
         header("Location: ../unidad8.php?error");
       }

?>