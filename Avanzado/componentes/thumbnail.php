<?php 
$src_imagen = imagecreatefromjpeg("imagenes/unidad4.jpg");
$altoImg=150;
$anchoImg=150;
$dst_imagen = imagecreatetruecolor($anchoImg,$altoImg);
$imagen = imagecreate($anchoImg,$altoImg);

imagecopyresized($dst_imagen, $src_imagen, 0,0,0,0, $anchoImg, $altoImg, imagesx($src_imagen), imagesy($src_imagen));
imagejpeg($dst_imagen,"imagenes/unidad4_thumb.jpg");
imagedestroy($dst_imagen);
?>