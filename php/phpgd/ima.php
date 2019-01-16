<?php
header("Content-type: image/jpg");

$imagen = imagecreatetruecolor(600, 600);
imagecopy(imagecreatefromjpeg('1.jpg'),0,0,0,0,600,600);
ImageJPEG($imagen);
ImageDestroy($imagen);
?>