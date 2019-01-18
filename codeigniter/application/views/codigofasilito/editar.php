<?= form_open("/codigofasilito/actualizar/".$id)?>
<?php
$nombre = array(
'name' => 'nombre',
'placeholder' => 'Escribe tu nombre',
'value'=> $curso->result()[0]->nombreCurso

);

$videos = array(
'name' => 'videos',
'placeholder' => 'cantidad de videos',
'value'=> $curso->result()[0]->videosCurso
);

?>
<?php echo form_label('Nombre:','nombre')?>
<?php echo form_input($nombre) ?>

<br><br>
<?php echo form_label('Numeros videos','videos')?>
<?php echo form_input($videos) ?>

<?php form_close() ?>
<br>
<?php echo form_submit('','subir')?>
<?php echo form_close() ?>



