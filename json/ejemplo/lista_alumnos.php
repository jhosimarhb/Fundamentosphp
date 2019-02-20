<table  class="table table-bordered" cellspacing="0" cellpadding="0">
    <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Email</th>
        <th>telefono</th>
        <th style="width:160px;">Borrar Alumno</th>
    </tr>
    <?php
 // Mostrar labla de alumnosWW
        $sql = "SELECT * FROM alumnos ORDER BY id ASC";
        $query = $pdo->prepare($sql);
        $query->execute();
        $list = $query->fetchAll();
        foreach ($list as $rs) {
            ?>
            <tr>
                <td><?php echo $rs['nombre']; ?></td>
                <td><?php echo $rs['apellido']; ?></td>
                <td><?php echo $rs['email']; ?></td>
                <td><?php echo $rs['telefono']; ?></td>
                <td><a href="#" onclick="delete_member(<?php echo $rs['id']; ?>)"> Borrar</a></td>
            </tr>
            <?php
            
        }
    ?>