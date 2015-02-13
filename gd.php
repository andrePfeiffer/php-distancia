<?php

//header("Content-type: image/jpeg");
//header("Content-type: image/gif");
header("Content-type: image/png");

//$img = imagecreatetruecolor(400, 200);
$img = imagecreatefromjpeg("foto.jpg");
$preto = imagecolorallocate($img, 0, 0, 0);
$branco = imagecolorallocate($img, 255, 255, 255);
imagestring($img, 5, 10, 10, "Biblioteca GD no PHP", $branco);
imagepng($img);
