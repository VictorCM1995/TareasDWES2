<?php
	require_once("Coche.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>PHP</title>
</head>
<body>
	<?php
		$a = new Coche("SEAT",40);
		$b = new Coche("OPEL",50);
		echo $a->toString()."<br>";
		echo $b->toString()."<br>";
		$a->acelerar(10);
		echo $a->toString()."<br>";
		$a->acelerar(100);
		echo $a->toString()."<br>";
		$b->frenar(25);
		echo $b->toString()."<br>";
		$b->frenar(50);
		echo $b->toString()."<br>";
	?>
</body>
</html>