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
		<label>CATEGORIAS</label>
		<select name="categoria">
			<?php
				$a = $instance::getCategorias();
				foreach($a as $b){
					echo "<option value='".$b["Nombre"]."'";
					if(isset($_POST["categoria"]) && $_POST["categoria"]==$b["Nombre"]) 
					echo "selected = 'selected'";
				echo ">".$b["Nombre"]."</option>";
				}
			?>
		</select>
		<input type="Submit" name="enviar" value="enviar">
	</form>
	<?php
		if(isset($_POST["enviar"])){
			$categoria = $_POST["categoria"];
			print_r2($instance::getProductosFiltroCategoria($categoria));
		}
	?>
</body>
</html>