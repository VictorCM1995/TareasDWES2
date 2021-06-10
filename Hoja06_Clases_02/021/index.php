<?php
	require_once("Clases.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>PHP</title>
</head>
<body>
	<?php
		$a = new Empleado(100);
		$b = new Encargado(100);
		echo $a->getSueldo()."<br>";
		echo $b->getSueldo()."<br>";
	?>
</body>
</html>