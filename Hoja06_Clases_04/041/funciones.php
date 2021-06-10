<?php
	function print_r2($val){
		echo "<pre>";
		print_r($val);
		echo "</pre>";
	}

	class DB{
		const DNS = "mysql:host=localhost;dbname=dwes_supermercado";
		const USUARIO = "root";
		const PASSWORD = "";
		private static $instance = null;

		private function __construct(){}

		public function getInstance(){
			if(self::$instance==null)
			self::$instance = new DB();
			return self::$instance;
		}

		public function getConexion(){
		$opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
		$conexion = new PDO(self::DNS,self::USUARIO,self::PASSWORD,$opciones);
			return $conexion;
		}

		public function getProductos($dato){
			$pdo = self::getConexion();
			if($dato=="Todos"){
				$sql = "SELECT Codigo,productos.Nombre,Precio,categorias.nombre from productos,categorias where categorias.Id=productos.Categoria";
			} else if($dato=="Alimentacion"){
				$sql = "SELECT productos.Codigo,productos.Nombre,categorias.Nombre as Categoria,Precio,Mes_Caducidad,Año_Caducidad from productos,categorias,alimentacion where categorias.id=productos.categoria and productos.codigo=alimentacion.codigo";
			} else {
				$sql = "SELECT productos.Codigo,productos.Nombre,categorias.Nombre as Categoria,plazo_garantia from productos,categorias,electronica where categorias.id=productos.categoria and productos.codigo=electronica.codigo";
				
			}
			$consulta = $pdo->query($sql);
			$productos = $consulta->fetchAll(PDO::FETCH_ASSOC);	
			return $productos;
		}

		public function getCategorias(){
			$pdo = self::getConexion();
			$sql = "SELECT Nombre from categorias";
			$consulta = $pdo->query($sql);
			$categorias = $consulta->fetchAll(PDO::FETCH_ASSOC);
			return $categorias;
		}

		public function getCategoriasId(){
			$pdo = self::getConexion();
			$sql = "SELECT Id from categorias";
			$consulta = $pdo->query($sql);
			$categorias = $consulta->fetchAll(PDO::FETCH_ASSOC);
			return $categorias;
		}

		public function addProducto($nombre,$precio,$categoria,$tipo,$mes,$año,$garantia){
			$conexion = self::getConexion();
			$todoOk = true;
			$conexion->beginTransaction();
			$sql = "INSERT into productos (Precio,Nombre,Categoria) values($precio,'$nombre',$categoria)";
			if($conexion->exec($sql)==0)$todoOk = false;
			if($tipo == "Alimentacion"){
				$sql = "INSERT into alimentacion (codigo,Mes_Caducidad,Año_caducidad) values((select Codigo from productos where nombre='$nombre'),$mes,$año)";
			}else if($tipo=="Electronica"){
				$sql = "INSERT into electronica (codigo,plazo_garantia) values((select Codigo from productos where nombre='$nombre'),$garantia)";
			}
			if($conexion->exec($sql)==0)$todoOk = false;
			if($todoOk==true){
				$conexion->commit();
			} else {
				$conexion->rollback();
			}
		}

		public function getProductosFiltroCategoria($nombreCategoria){
			$pdo = self::getConexion();
			$sql = "SELECT Codigo,productos.Nombre as Nombre_producto ,Precio,categorias.Nombre from productos,categorias where categorias.Id=productos.Categoria and categorias.Nombre=?";
			$consulta = $pdo->prepare($sql);
			$consulta->execute([$nombreCategoria]);
			$resultado = $consulta->fetch(PDO::FETCH_ASSOC);
			return $resultado;
		}
	}

?>