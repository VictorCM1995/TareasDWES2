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

	<form method="POST">
		<fieldset>
			<legend>MOSTRAR TODO</legend>
			<input type="Submit" name="enviar1" value="PULSA">
		</fieldset>
	</form>
	<form method="POST">
		<fieldset>
			<legend>MOSTRAR URGENCIAS TARDE MAYOR DE 60</legend>
			<input type="Submit" name="enviar2" value="PULSA">
		</fieldset>
	</form>
	<form method="POST">
		<fieldset>
			<legend>MOSTRAR FAMILIA IGUAL O MAYOR</legend>
			<label>Introduce numero de pacientes</label>
			<input type="number" name="num"><br>
			<input type="Submit" name="enviar3" value="PULSA">
		</fieldset>
	</form>
	<?php
		$a = new Familia("Alfa",30,"mañana",10);
		$b = new Familia("Beta",60,"tarde",20);
		$c = new Familia("Charlie",20,"mañana",30);

		$d = new Urgencias("Delta",80,"tarde","A");
		$e = new Urgencias("Epsilon",45,"mañana","B");
		$f = new Urgencias("Foxtrop",70,"tarde","C");
		$medicos = array($a,$b,$c,$d,$e,$f);

		function uno($array){
			foreach($array as $a){
				echo $a->toString()."<br>";
			}
		}

		function dos($array){
			$contador = 0;
			foreach($array as $a){
				if($a instanceof Urgencias){
					if($a->getTurno()=="tarde" && $a->getEdad()>=60){
						$contador++;
					}
				}
			}
			return $contador;
		}

		function tres($array,$numero){
			foreach($array as $a){
				if($a instanceof Familia){
					if($a->getNum_pacientes()>=$numero){
						echo $a->toString()."<br>";
					}
				}
			}
		}

		if(isset($_POST["enviar1"])){
			uno($medicos);
			echo "<br>";
		}
		if(isset($_POST["enviar2"])){
			echo "Numero de medicos que cumplen las condiciones: ".dos($medicos)."<br>";
		}
		if(isset($_POST["enviar3"])){
			$num = $_POST["num"];
			tres($medicos,$num);
		}
	?>
</body>
</html>