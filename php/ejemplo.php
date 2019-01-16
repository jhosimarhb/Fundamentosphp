<?php
// \b \b sirve para buscae palabras sueltas 
// ^ sigino potesnsisa se inifica que el olor de ve estar al principio de la cadena 
// $

if(preg_match("/\bvideo\b/i", "este  es curso de video 2brain")){
	echo "existe una condicion";
}else{
echo "no existe una coincidencia";
}


// para un mensage 
$mensaje ="tengo un problema con php 'error 404' que puedo hacer?"

var_dump(filter_var($mensaje,FILTER_SANITIZE_MAGIC_QUOTES));
?>