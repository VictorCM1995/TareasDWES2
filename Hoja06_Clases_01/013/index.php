<?php
	require_once("Monedero.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>PHP</title>
</head>
<body>
	<?php
		$a = new Monedero(50);
		echo $a->consultar()."<br>";
		$a->meter(50);
		echo $a->consultar()."<br>";
		$a->sacar(25);
		echo $a->consultar()."<br>";
		$a->sacar(100);
		echo $a->consultar()."<br>";
	?>
</body>
</html>