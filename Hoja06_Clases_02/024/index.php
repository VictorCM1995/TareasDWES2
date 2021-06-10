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
		<input type="Submit" name="enviar" value="Crear">
	</form>
	<?php

		function mes($numero){
			$mes;
			switch($numero){
				case 1:
					$mes = "Enero";
					break;
				case 2:
					$mes = "Febrero";
					break;
				case 3:
					$mes = "Marzo";
					break;
				case 4:
					$mes = "Abril";
					break;
				case 5:
					$mes = "Mayo";
					break;
				case 6:
					$mes = "Junio";
					break;
				case 7:
					$mes = "Julio";
					break;
				case 8:
					$mes = "Agosto";
					break;
				case 9:
					$mes = "Septiembre";
					break;
				case 10:
					$mes = "Octubre";
					break;
				case 11:
					$mes = "Noviembre";
					break;
				case 12:
					$mes = "Diciembre";
					break;
			}
			return $mes;
		}

		function uno($array){
			foreach($array as $a){
				if($a instanceof Alimentacion){
				echo "Codigo: ".$a->getCodigo().", Precio: ".$a->getPrecio().", Nombre: ".$a->getNombre().", Mes de caducidad: ".mes($a->getMesCaducidad()).", Año caducidad: ".$a->getAñoCaducidad()."<br>";
				} else {
					echo "Codigo: ".$a->getCodigo().", Precio: ".$a->getPrecio().", Nombre: ".$a->getNombre().", Plazo garantia: ".$a->getPlazoGarantia()." dias<br>";
				}
			}
		}

		function dos($array){
			$totalAlimentacion = 0;
			$totalElectronica = 0;
			foreach($array as $a){
				if($a instanceof Alimentacion){
					$totalAlimentacion += $a->getPrecio();
				} else {
					$totalElectronica += $a->getPrecio();
				}
			}
			if($totalAlimentacion>$totalElectronica){
				echo "Se ha gastado mas de Alimentacion: ".$totalAlimentacion."<br>";
			} else {
				echo "Se ha gastado mas de Electronica: ".$totalElectronica."<br>";
			}
			$importe = $totalAlimentacion + $totalElectronica;
				echo "El importe total ha sido de: ".$importe;
		}

		if(isset($_POST["enviar"])){
			$a = new Alimentacion("1",10.01,"Aceite",1,2111);
			$b = new Alimentacion("2",21.12,"Bacalao",2,2222);

			$c = new Electronica("3",32.23,"Computadora",7);
			$d = new Electronica("4",43.34,"Detector",14);
			$productos = array($a,$b,$c,$d);

			
			uno($productos);
			dos($productos);
		}
	?>
</body>
</html>