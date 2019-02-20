<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table class = "table_list" cellspacing = "2" cellpadding = "0" >   
    <tr class = "bg_h" > 
        <th> nombre</th>
        <th> apellido</th>
        <th> email </th>
        <th> telefono </th>
        <th> Eliminar miembro </th>
    </tr>
    <? php
    include ( 'conexion.php' );
		// mostrar la lista de todos los miembros en la vista de tabla
        $ sql = "SELECT * FROM alumnos ORDER BY id ASC" ; 
        $ consulta = $ pdo -> preparar ( $ sql );
        $ consulta -> ejecutar ();
        $ list = $ consulta -> fetchAll ();
        $ bg = 'bg_1' ; 
        foreach ( $ lista como $ rs ) {  
            ?>
            <tr class = " <? php echo $ bg ; ?> "> 
                <td> <? php echo $ rs [ 'nombre' ]; ?> </td> 
                <td> <? php echo $ rs [ 'apellido' ]; ?> </td> 
                <td> <? php echo $ rs [ 'email' ]; ?> </td>
                <td> <? php echo $ rs [ 'telefono' ]; ?> </td> 
                <td> <a href="#" class="delete_m" onclick="delete_member( <? php echo $rs ['id' ]; ?> ) ">  Eliminar </a> </td>  
            </tr>
            <? php
            si ( $ bg == 'bg_1' ) {   
                $ bg = 'bg_2' ; 
            } else {  
                $ bg = 'bg_1' ; 
            }
        }
    ?>
</table>
</body>
</html>