<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h2>calcular el resultado</h2>
<p id="demo"></p>
<script>
	function myFunction(p1,p2){
		return p1*p2;
	}
	document.getElementById("demo").innerHTML =myFunction(4,3);
</script>

 
<script>
	//sirve para dar un mensaje en moda alerta y dice la fecha de hoy
	//Función sin parámetros
function mostrarDia() {
    var fecha = new Date();
    alert("Hoy es día " + fecha.getDate());
}
//Llamada a la función.
mostrarDia();
</script>



</body>
</html>