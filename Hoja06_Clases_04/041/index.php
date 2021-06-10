<?php
	require_once("Clases.php");
	require_once("funciones.php");
	$instance = DB::getInstance();
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>PHP</title>
</head>
<body>
	<form method="POST">
		<select name="cat">
			<option value="Todos"<?php if(isset($_POST["cat"]) && $_POST["cat"]=="Todos") echo "selected = 'selected'"?>>Todos</option>
			<option value="Alimentacion"<?php if(isset($_POST["cat"]) && $_POST["cat"]=="Alimentacion") echo "selected = 'selected'"?>>Alimentacion</option>
			<option value="Electronica"<?php if(isset($_POST["cat"]) && $_POST["cat"]=="Electronica") echo "selected = 'selected'"?>>Electronica</option>
		</select>
		<input type="Submit" name="enviar" value="enviar">
	</form>
	<?php
		if(isset($_POST["enviar"])){
			$cat = $_POST["cat"];
			print_r2($instance::getProductos($cat));
		}
	?>
</body>
</html>