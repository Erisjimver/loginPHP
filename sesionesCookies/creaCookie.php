<!DOCTYPE html>
<html>
<head>
	<title>Crea Cookie</title>
</head>
<body>
<?php 

	setcookie("idioma_selecionado",$_GET["idioma"],time()+86400);

	header("location:ver_cookie.php");

?>
</body>
</html>