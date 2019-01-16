<?php
$contador=0;
$bd = new SQLite3('login.db');
$resultado= $bd->query("select * form login where usuario=".$_POST['usuario']."'AND password='".$_POST['password'].";");
while ($fila = $resultado-> fetcharray()) {
	# code...
	echo "has entrado correctamente a la aplicacion";
	$contador++;
}
if($contador ==0){
echo "no has entrado correctamente en la aplicacion";

}

?>