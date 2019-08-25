<!DOCTYPE html>
<html>
<head>
	<title>Pagina 1</title>
</head>
<body>
<?php 

	if(isset($_COOKIE["idioma_selecionado"])){
		
		if($_COOKIE["idioma_selecionado"]=="es"){
			header("Location:pagina2.php");
		}
		else if($_COOKIE["idioma_selecionado"]=="us"){
			header("Location:pagina3.php");
		}

	}



?>
	<table width="25%" border="0" align="center">
		<tr>
			<td colspan="2" align="center"><h1>Elige Idioma</h1></td>
		</tr>
		<tr>
			<td align="center"><a href="creaCookie.php?idioma=es"><img src="img/ecu.png" width="50" height="50"></a></td>
			<td align="center"><a href="creaCookie.php?idioma=us"><img src="img/usa.png" width="50" height="50"></a></td>
		</tr>
	</table>

</body>
</html>