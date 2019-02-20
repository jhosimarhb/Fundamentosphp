<?php 
require('conexion.php');
$con = Conectar();
$SQL = 'SELECT id, nombre, apellido, edad FROM ejemplo';
$stmt = $con->prepare($SQL);
$result = $stmt->execute();
$rows = $stmt->fetchAll(\PDO::FETCH_OBJ);
echo(json_encode($rows));
?>