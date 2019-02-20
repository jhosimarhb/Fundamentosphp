<?php
 
include('conexion.php');
$pdo = connect();
// agregar alumnos
try {
 $sql = "INSERT INTO alumnos (nombre, apellido, email, telefono) VALUES (:nombre,:apellido, :email,:telefono)";
 $query = $pdo->prepare($sql);
 $query->bindParam(':nombre', $_POST['nombre'], PDO::PARAM_STR);
 $query->bindParam(':apellido', $_POST['apellido'], PDO::PARAM_STR);
 $query->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
 $query->bindParam(':telefono', $_POST['telefono'], PDO::PARAM_STR);
 $query->execute();
} catch (PDOException $e) {
 echo 'PDOException : '.  $e->getMessage();
}
 
// Lista de alumnos a ver
include('lista_alumnos.php');
?>