<?php
// PDO conexion data base
function conectar() {
 $hostname = 'localhost';
 $name = 'alumnos';
 $user = 'root';
 $password = '';
    return new PDO('mysql:host='.$hostname.';dbname='.$name, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}
?>