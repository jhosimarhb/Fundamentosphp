<?php
//codigo imperectivio o espageti

$automovil = (object)["marca"=>"toyota", "modelo" =>"corolla"];
$automovil2 =(object)["marca"=>"hyundia", "modelo" =>"vision"];
function mostrar($automovil){
	echo "<p>hola soy un automovil $automovil->marca, modelo $automovil->modelo </p>";
}

mostrar($automovil);
mostrar($automovil2);

?>