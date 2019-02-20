<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            <title>
                PHP + AJAX + MYSQL + JSON + PDO
            </title>
        </meta>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    </head>
    <body>
        <h1>
            Personas
        </h1>
        <div id="resultado">
        </div>
        <!-- <button onclick="Cargar();"> -->
        <button onclick="cargar_2();">
            Mostrar Datos
        </button>
    </body>
    <script>
        function Cargar() {
		    var xmlhttp = new XMLHttpRequest();
		    var url = "consulta.php";
		    xmlhttp.onreadystatechange = function() {
		        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
		            var array = JSON.parse(xmlhttp.responseText);
		            var i;
		            var out = "<table border='1'>";
		            for (i = 0; i < array.length; i++) {
		                out += " <tr><td>" + array[i].id + "</td><td>" + array[i].nombre + "</td><td>" + array[i].apellido + "</td><td>" + array[i].edad + "</td></tr>";
		            }
		            out += "</table>";
		            document.getElementById("resultado").innerHTML = out;
		        }
		    }
		    xmlhttp.open("GET", url, true);
		    xmlhttp.send();
		}
//funcion jquery mas ajax 
		function cargar_2(){
			$.ajax({
		       url: 'http://localhost:8080/fundamentosphp/json/tabla/consulta.php',
		       type: 'GET',
		       success: function(response){
		       	var array = JSON.parse(response);//para parsear a un string asia ajax 
		            var out = "<table border='1'>";
		            for (var i = 0; i < array.length; i++) {
		                out += " <tr><td>" + array[i].id + "</td><td>" + array[i].nombre + "</td><td>" + array[i].apellido + "</td><td>" + array[i].edad + "</td></tr>";
		            }
		            out += "</table>";
		            document.getElementById("resultado").innerHTML = out;
		       }
		   });
		}
    </script>
</html>