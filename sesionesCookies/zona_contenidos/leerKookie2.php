<!DOCTYPE html>
<html>
<head>
	<title>Leer kookie2</title>
</head>
<body>


<?php 

	if(isset($_COOKIE["prueba"])){
		echo $_COOKIE["prueba"];		
	}
	else{
		echo "no se ha creado la cookie";
	}



?>
</body>
</html>