<!DOCTYPE html>
<html>
<head>
	<title>Usuarios 2</title>
</head>
<body>

	<?php

		session_start();

		if(!isset($_SESSION["usuario"])){
			header("Location:login.php");
		}

	?>
<h1>Bienvenidos usuarios</h1>
<?php

echo "Hola " . $_SESSION["usuario"]. "<br>";



?>
<p>Esto es información solo para usuarios registrados</p>

<a href="usuarios_registrados1.php">Volver</a>
<a href="cierre.php">Cerrar Session</a>
</body>
</html>