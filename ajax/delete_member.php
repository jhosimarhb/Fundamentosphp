<? php
include ( 'conexion.php' );
$ pdo = conectar ();
// eliminando un miembro usando PDO con try / catch para escapar de las excepciones
prueba { 
	$ sql = "DELETE FROM alumnos WHERE id =: id" ; 
	$ consulta = $ pdo -> preparar ( $ sql );
	$ consulta -> bindParam ( ': id' , $ _POST [ 'id' ], DOP :: PARAM_INT );
	$ consulta -> ejecutar ();
} catch ( PDOException $ e ) {   
	echo 'PDOException:' .   $ e -> getMessage ();
}
 
// list_members: este archivo muestra la lista de miembros en una vista de tabla
include ( 'list_members.php' );
?>