<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<div id="contenedor"></div>
	<script type="text/javascript">
		var variosObjetos=[
		{
			"nombre":"Primer elemento",
			"posicion":"1°"
		},
		{
			"nombre":"Segundo elemento",
			"posicion":"3°"
		},
		{
			"nombre":"Tercer elemento",
			"posicion":"3°"
		}
		];
		document.getElementById("contenedor").innerHTML = variosObjetos[1].nombre;
	</script>

</body>
</html>