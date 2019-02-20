<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
</head>
<body>
	<form accept-charset="utf-8" method="POST">
	<input type="text" name="busqueda" id="busqueda" value="" placeholder="" maxlength="30" autocomplete="off" onKeyUp="buscar();"/>
	</form>
	<div id="resultadoBusqueda"></div>
	
	<script>
$(document).ready(function() {
    $("#resultadoBusqueda").html('<p> VACIO</p>');
});

function buscar() {
    var textoBusqueda = $("input#busqueda").val();
 	
     if (textoBusqueda != "") {
        $.post("buscar.php", {busqueda: textoBusqueda}, function(mensaje) {
            $("#resultadoBusqueda").html(mensaje);
         }); 
     } else { 
        $("#resultadoBusqueda").html('<p>VACIO</p>');
        };
};
</script>

</body>
</html>