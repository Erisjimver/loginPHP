<!DOCTYPE html>
<html>
<head>
	<title>Eliminar</title>
</head>
<body>


<?php 

//setcookie("prueba", "Esta es la informacion de mi primer kookie",time()-1,"/loginPHP/sesionesCookies/zona_contenidos/");

	//setcookie("idioma_selecionado","es",time()-1);

	//setcookie("idioma_selecionado","es",time()-1);//destruye cookies practica 2

	setcookie("nombre_usuario","",time()-1);//elimina cookie pruebas login y cookie

	echo "Se ha destruido la cookie";
 ?>
</body>
</html>