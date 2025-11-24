<?php    
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['mail'];
$comentarios = $_POST['comentarios'];

$fecha_hora = date("d/m/Y H:i");

$archivoCom = fopen('comentario.txt','a') or die ('No se puede leer el archivo');
$contenidoCom = '<p>Nombre: '.$_POST['nombre'].'</p>
<p>Apellido: '.$_POST['apellido'].'</p>
<p>Email: '.$_POST['mail'].'</p>
<p>Comentario: '.$_POST['comentarios'].'</p>
<p>Fecha y Hora: '.$fecha_hora.'</p>';
             fwrite($archivoCom,$contenidoCom);
             fclose($archivoCom);
  
header('Location: ../unidad3.php?comentario_cargado');
?>