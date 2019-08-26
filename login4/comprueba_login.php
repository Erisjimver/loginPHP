<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

	$base=new PDO("mysql:host=localhost;dbname=pruebas","root","");

	$base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	$sql="select * from usuarios_pass where usuarios=:login and password=:password";

	$resultado=$base->prepare($sql);

	$login=htmlentities(addslashes($_POST["login"]));
	$password=htmlentities(addslashes($_POST["password"]));

	$resultado->bindValue(":login",$login);
	$resultado->bindValue(":password",$password);

	$resultado->execute();

	$numero_registro=$resultado->rowCount();

	if($numero_registro!=0){
		//echo "<h2>Adelante!</h2";
		session_start();
		$_SESSION["usuario"]=$_POST["login"];
		header("location:usuarios_registrados1.php");
	}else{
		header("location:login.php");
	}

try {
	
} catch (Exception $e) {
	die("Error: " . $e->getMessage());
}


?>
</body>
</html>