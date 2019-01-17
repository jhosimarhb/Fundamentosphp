<?= form_open("/codigofasilito/recibirdatos")?>
<?php
$nombre = array(
'name' => 'nombre',
'placeholder' => 'Escribe tu nombre',

);

$videos = array(
'name' => 'videos',
'placeholder' => 'cantidad de videos',

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



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>