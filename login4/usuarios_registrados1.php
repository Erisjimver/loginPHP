<!DOCTYPE html>
<html>
<head>
	<title>Usuarios 1</title>
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

<table border="1">
	
<td colspan="3">Usuarios registrados</td>

<tr>
	<td><a href="usuarios_registrados2.php" name="link1">Link1</a></td>
	<td><a href="usuarios_registrados3.php" name="link1">Link2</a></td>
	<td><a href="usuarios_registrados4.php" name="link1">Link3</a></td>

</tr>

</table>
</body>
</html>