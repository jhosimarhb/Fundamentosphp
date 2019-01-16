<?php
// para validar que es un correo electronico

if(preg_match("/[a-z0-9]+([.] [a-z0-9]*)+[@]+[a-z0-9]+[.]+[a-z]/", "info@garsa.com")){
	echo "esto si  es un correo electronico";
}else{
echo "no es un corrreo electronico";
}


?>