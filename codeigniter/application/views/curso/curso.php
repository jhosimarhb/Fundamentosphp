<?php 
if($cursos){
foreach ($cursos->result() as $curso) {?>
	# code... 
<ul>
	<li><a href="<php echo $curso->idCurso;?>"><?php echo $curso->nombreCurso; ?></a></li>
</ul>
<?php
}else{
  echo "<p>Error en la aplicacion";
}
}
  ?>
  <!DOCTYPE html>
  <html>
  <head>
  	<title></title>
  </head>
  <body>
  
  </body>
  </html>