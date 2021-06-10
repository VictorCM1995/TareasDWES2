<?php
	require_once("Circulo.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>PHP</title>
</head>
<body>
	<?php
		$a = new Circulo(10);
		$b = new Circulo(111);
		echo "Circulo 1 radio: ".$a->get_radio()."<br>";
		$b->radio=100;
		echo "Circulo 2 radio: ".$b->get_radio()."<br>";
		$a->set_radio(200);
		echo "Circulo 1 radio: ".$a->get_radio()."<br>";
	?>
</body>
</html>