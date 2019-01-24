<!DOCTYPE html>
<html>
<head>
	<title>Ejemplo</title>
</head>
<body>
	<script language="Javascript">
		//perdir confirmacion para visitar una pagina
		function confirmar(){
			return confirmar("Esta pagina no es para niños");
		}
		
	</script>
<a href="https://mpdf.github.io/reference/mpdf-functions/writehtml.html" onclick="return confirmar()">Enlase de la pagina.</a>
</body>
</html>