<?php 
session_start();
header("Content-type: image/jpeg");


$fondo = imagecreate(100, 40);
imagecolorallocate($fondo, 240, 97, 86);

$color = imagecolorallocate($fondo, 0, 0, 0);

imagestring($fondo, 10, 15, 5, $_SESSION['captcha'], $color);

imagejpeg($fondo);

?>