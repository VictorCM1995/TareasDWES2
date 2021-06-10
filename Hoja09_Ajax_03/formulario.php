<?php
require_once("validar.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="Ajax1.css">
	<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="validar.js"></script>
	<title>Ejercicio 1</title>
</head>
<body>
	<h1>FORMULARIO</h1>
	<form method="post" id="datos">
		<label>Nombre</label>
		<input type="text" id="nombre" name="nombre"><br>
		<span id="errorNombre" for="nombre" class='<?php if(!isset($_POST['enviar'])|| validarNombre($_POST['nombre'])) echo 'oculto';?>'>El nombre debe tener mas de 3 caracteres.</span><br>
		<label>DNI</label>
		<input type="text" id="dni" name="dni"><br>
		<span id="errorDNI" for="dni" class='<?php if(!isset($_POST['enviar'])|| validarDNI($_POST['dni'])) echo 'oculto';?>'>El DNI es incorrecto.</span><br>
		<label>Contraseña</label>
		<input type="password" id="pass1" name="pass1"><br>
		<label>Repetir contraseña</label>
		<input type="password" id="pass2" name="pass2"><br>
		<span id="errorPassword" for="password" class='<?php if(!isset($_POST['enviar'])|| validarPasswords($_POST['pass1'],$_POST['pass2'])) echo 'oculto';?>'>Debe ser mayor de 5 caracteres o no coinciden.</span><br>
		<input type="submit" name="enviar" value="Enviar">
	<form>
	<?php
		/*if(isset($_POST["enviar"])){
			$nombre = $_POST["nombre"];
			$dni = $_POST["dni"];
			$pass1 = $_POST["pass1"];
			$pass2 = $_POST["pass2"];
			if(validarNombre($nombre)){
				echo "Correcto Nombre";
			} else{
				echo "INCorrecto Nombre";
			}
			if(validarDNI($dni)){
				echo "Correcto DNI";
			} else{
				echo "INCorrecto DNI";
			}
			if(validarPasswords($pass1,$pass2)){
				echo "Correcto pass";
			} else{
				echo "INCorrecto pass";
			}
		}*/
	?>
</body>
</html>