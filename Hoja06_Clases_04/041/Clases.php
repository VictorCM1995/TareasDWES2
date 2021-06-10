<?php
	class Categoria{
		private $id;
		private $nombre;

		public function __construct($id,$nombre){
			$this->id = $id;
			$this->$nombre = $nombre;
		}

		public function getId(){
			return $this->id;
		}

		public function getNombre(){
			return $this->nombre;
		}

		public function setId($id){
			$this->id = $id;
		}

		public function setNombre($nombre){
			$this->nombre = $nombre;
		}
	}

	class Producto {
		protected $codigo;
		protected $precio;
		protected $nombre;
		protected $categoria;

		public function __construct($codigo,$precio,$nombre,$categoria){
			$this->codigo=$codigo;
			$this->precio=$precio;
			$this->nombre=$nombre;
			$this->categoria=$categoria;
		}

		public function getCodigo(){
			return $this->codigo;
		}

		public function getPrecio(){
			return $this->precio;
		}

		public function getNombre(){
			return $this->nombre;
		}

		public function getCategoria(){
			return $this->categoria;
		}

		public function setCodigo($codigo){
			$this->codigo = $codigo;
		}

		public function setPrecio($precio){
			$this->precio = $precio;
		}

		public function setNombre($nombre){
			$this->nombre = $nombre;
		}

		public function setCategoria($categoria){
			$this->categoria = $categoria;
		}

		public function toString(){
			return "Codigo: ".$this->codigo.", Precio: ".$this->precio.", Nombre: ".$this->nombre.", Categoria: ".$this->categoria;
		}
	}

	class Alimentacion extends Producto{
		private $mesCaducidad;
		private $añoCaducidad;

		public function __construct($codigo,$precio,$nombre,$categoria,$mesCaducidad,$añoCaducidad){
			parent::__construct($codigo,$precio,$nombre,$categoria);
			$this->mesCaducidad = $mesCaducidad;
			$this->añoCaducidad = $añoCaducidad;
		}

		public function getMesCaducidad(){
			return $this->mesCaducidad;
		}

		public function getAñoCaducidad(){
			return $this->añoCaducidad;
		}

		public function setMesCaducidad($mesCaducidad){
			$this->mesCaducidad = $mesCaducidad;
		}

		public function setAñoCaducidad($añoCaducidad){
			$this->añoCaducidad = $añoCaducidad;
		}

		public function toString(){
			return parent::toString().", Mes Caducidad: ".$this->mesCaducidad.", Año Caducidad: ".$this->añoCaducidad;
		}
	}

	class Electronica extends Producto{
		private $plazoGarantia;

		public function __construct($codigo,$precio,$nombre,$categoria,$plazoGarantia){
			parent::__construct($codigo,$precio,$nombre,$categoria);
			$this->plazoGarantia = $plazoGarantia;
		}

		public function getPlazoGarantia(){
			return $this->plazoGarantia;
		}

		public function setPlazoGarantia($plazoGarantia){
			$this->plazoGarantia = $plazoGarantia;
		}

		public function toString(){
			return parent::toString().", Plazo garantia: ".$this->plazoGarantia;
		}
	}
?>