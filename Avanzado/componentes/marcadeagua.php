<?php

$imagen = "../imagenes/grupob.jpg";
$marca_de_agua = "../imagenes/marca.png";

$img = imagecreatefrompng($marca_de_agua);
$extraer = substr($imagen, -3);
$extraer = strtolower($extraer);

switch ($extraer) {
    case 'gif':
        $foto = imagecreatefromgif($imagen);
        break;
    case 'jpg':
        $foto = imagecreatefromjpeg($imagen);
        break;
    case 'png':
        $foto = imagecreatefrompng($imagen);
        break;
}

imagecopy($foto, $img, (imagesx($foto)/8),(imagesy($foto)/2), (imagesx($img)/256), (imagesy($img)/256),imagesx($img), imagesy($img));

header("Content-Type: image/jpeg");
imagejpeg($foto);
imagedestroy($img);
imagedestroy($foto);

?>