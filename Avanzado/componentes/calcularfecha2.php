<?php

$dia = $_POST['dia'];
$mes = $_POST['mes'];
$anio = $_POST['anio'];

$fecha_actual = new DateTime();

if (checkdate($dia, $mes, $anio)) {
    $fecha_futura = new DateTime("$anio/$mes/$dia");

    
    $intervalo = $fecha_actual->diff($fecha_futura);
    $dias_restantes = $intervalo->days;

   
    header("Location: ../unidad2.php?resultado=" . $dias_restantes);
   

} else {
   
    header("Location: ../unidad2.php?resultado=-1");
    
}
?>