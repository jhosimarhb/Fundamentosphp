
<html>
<body>

<p>Ejemplo</p>

<p id="demo"></p>
<script>
var text = "";
var i;
for (i = 0; i < 10; i++) {
	//
  if (i === 3) { break; }
  text += "los numeros " + i + "<br>";
}
document.getElementById("demo").innerHTML = text;
</script>

</body>
</html>
