<?php
header("Content-type: image/jpg");

$y =300;
$contador = 10;
$imagen= imagecreatetruecolor(600, $y);

 $blanco= imagencolorAllocate($imagen,255,255,255);
 imagefilltoborder($imagen, 0, 0, $blanco, $blanco);
 $rojo = imagecolorAllocate($imagen, 255, 0, 0);

$bd= new sqLite3('grafica.db');
$resultado = $bd->query("select * from grafica;");
while ($fila = $resultado -> fetchArray) {
	# code...
	imagefilledrectangle($imagen, $contador, $y-20,$contador+10,($y-20-($fila ['valores']*5)), $rojo);
	//separar las graficas 
	$contador += 20;
}

//imagefilledrectangle($imagen, 10, $y-20, 20,($y-20-50), $rojo);

ImageJPEG($imagen);
ImageDestroy($imagen);
?>