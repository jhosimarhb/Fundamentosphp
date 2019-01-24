<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<script>
	//para que la otra funcion puedad ocupar una variable de otra funcion lo debe resivir un argumento 
	function concatenar_cadenas(){
        var a = "orda";
        var b = "lía";
        var c = a + b;

    }
    
    function mostrar_resultado(){
        alert(c);
    }
    
    concatenar_cadenas();
    mostrar_resultado();
</script>
</body>
</html>