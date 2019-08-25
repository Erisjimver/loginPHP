<!DOCTYPE html>
<html>
<head>
	<title>ver_cookie</title>
</head>
<body>
<?php 

if($_COOKIE["idioma_selecionado"]){
	header("Location:pagina1.php");
}
else if($_COOKIE["idioma_selecionado"]=="es"){
	header("Location:pagina2.php");
}
else if($_COOKIE["idioma_selecionado"]=="us"){
	header("Location:pagina3.php");
}
else if($_COOKIE["idioma_selecionado"]=="null"){
	header("Location:pagina3.php");
}


 ?>
</body>
</html>