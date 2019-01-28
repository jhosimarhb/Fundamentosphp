<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<form =id='formulario'>
	<div><input type="text" name="nombre" placeholder="nombre"></div>
	<div><input type="text" name="apellido" placeholder="apellido"></div>
	<div><input type="text" name="email" placeholder="email"></div>
	<div><input type="submit" name="Enviar"></div>
</form>
<div id='contenedor'></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>
	$(document).ready(function(){
		$('#formulario').submit(function(){

			$('#contenedor').html("<b>Enviando...</b>");

			$.post('archivo.php',(this).serialze(),function(data){
				$('#contenedor').html(data);
			}).fail(function(){
				alert("Envio fallido");

			});
			return false;
		});
	});
		
		
</script>
</body>
</html>