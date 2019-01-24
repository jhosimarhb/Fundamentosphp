<!DOCTYPE html>
<html>
<head>
	<title>Galeria</title>
	<script language="javascript">
		function ver_imagen();
		{
			if(!document.images)
				return
			document.images.img.src=document.imagenes.imagen.options[document.imagenes.imagen.selectedIndex].value
		}
	</script>
</head>
<body>
	<form name="imagenes">

		<select name="imagen" size="1" onChange="ver_imagen()">
			<option>Elige imagen</option>
			<option value="img/1.jpg">1</option>
			<option value="img/2.jpg">2</option>
			<option value="img/11.jpg">3</option>
		</select>
	</form>
	<img src="img/1.jpg" name="img" width="600" height="436" border="53">

</body>
</html>