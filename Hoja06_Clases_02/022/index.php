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
		$a = new Cuenta(1,"Alfa",111); 
		$b = new CuentaCorriente(2,"Beta",222,22); //222 despues 200
		$c = new CuentaAhorro(3,"Ganma",333,33,50); //333 despues 300

		//CUENTA
		echo $a->mostrar()."<br>";//111
		$a->ingreso(20); 
		echo $a->mostrar()."<br>";//131
		$a->reintegro(30); 
		echo $a->mostrar()."<br>";//101
		if($a->esPreferencial(20)){
			echo "Es preferencial";
		} else {
			echo "NO es preferencial";
		}
		echo "<br>";
		if($a->esPreferencial(200)){
			echo "Es preferencial";
		} else {
			echo "NO es preferencial";
		}
		echo "<br>";
		$a->reintegro(200); //-99 Mal seria 0
		echo $a->mostrar()."<br>";

		//CUENTA CORRIENTE
		echo $b->mostrar()."<br>";//200
		$b->ingreso(1);
		echo $b->mostrar()."<br>";//201 
		$b->reintegro(181);
		echo $b->mostrar()."<br>";//20 
		if($b->esPreferencial(30)){
			echo "Es preferencial";
		} else {
			echo "NO es preferencial";
		}
		echo "<br>";
		if($b->esPreferencial(1)){
			echo "Es preferencial";
		} else {
			echo "NO es preferencial";
		}
		echo "<br>";
		$b->reintegro(2);
		echo $b->mostrar()."<br>";//20 No se baja mas

		//CUENTA AHORRO
		echo $c->mostrar()."<br>";//300
		$c->ingreso(10);
		echo $c->mostrar()."<br>";//310
		$c->reintegro(40);
		echo $c->mostrar()."<br>";//270
		if($c->esPreferencial(100)){
			echo "Es preferencial";
		} else {
			echo "NO es preferencial";
		}
		echo "<br>";
		if($c->esPreferencial(300)){
			echo "Es preferencial";
		} else {
			echo "NO es preferencial";
		}
		echo "<br>";
		$c->aplicaInteres();
		echo $c->mostrar()."<br>";//320
		
	?>
</body>
</html>