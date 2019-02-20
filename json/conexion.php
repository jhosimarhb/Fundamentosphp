<?php
$conexion = new mysqli("localhost", "root", "", "mmv");
if ($conexion->connect_errno)
{
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
    exit();
}
@mysqli_query($conexion, "SET NAMES 'utf8'");
?>