<!DOCTYPE html>
<html>
<head>
	<title>correo</title>

</head>
<body>
<script language="javascript">
	function mailpage(){
		mail_str = "mailto:nombre@dominio.com?subject=Ejemplo:"+document.title;
		mail_str += "&body=te recomiendo que visistes esta pagina" + document.title;
		mail_str +=".Enlace:"+ location.href;
		location.href= mail_str;
	}
</script>
<a href="javascript:mailpage()">mandar correo</a>
</body>
</html>