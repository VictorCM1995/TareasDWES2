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
			<label>Tipo de producto: </label>
			<select name="prod">
				<option>Alimentacion</option>
				<option>Electronica</option>
			</select><br>
			<label>Nombre: </label>
			<input type="text" name="nombre"><br>
			<label>Precio: </label>
			<input type="number" name="precio" step="0.01"><br>
			<label>Categoria: </label>
			<select name="categoria">
				<?php
					$a = $instance::getCategoriasId();
					foreach($a as $b){
						echo "<option value='".$b["Id"]."'";
						if(isset($_POST["categoria"]) && $_POST["categoria"]==$b["Id"]) 
						echo "selected = 'selected'";
					echo ">".$b["Id"]."</option>";
					}
				?>
			</select><br>
			<label>Mes Caducidad: </label>
			<input type="number" name="mes" max="12" min="1"><br>
			<label>Año Caducidad: </label>
			<input type="number" name="año" min="2021"><br>
			<label>Plazo garantia: </label>
			<input type="number" name="garantia"><br>
		<input type="Submit" name="enviar" value="enviar">
	</form>
	<?php
		if(isset($_POST["enviar"])){
			$tipo = $_POST["prod"];
			$nombre = $_POST["nombre"];
			$precio = $_POST["precio"];
			$categoria = $_POST["categoria"];
			if($tipo == "Alimentacion"){
				$mes = $_POST["mes"];
				$año = $_POST["año"];
				$garantia = null;
			} else if($tipo == "Electronica"){
				$mes = null;
				$año = null;
				$garantia = $_POST["garantia"];
			}
			$instance::addProducto($nombre,$precio,$categoria,$tipo,$mes,$año,$garantia);
		}
	?>
</body>
</html>