<?php
	class Productos {
		protected $codigo;
		protected $precio;
		protected $nombre;

		public function __construct($codigo,$precio,$nombre){
			$this->codigo=$codigo;
			$this->precio=$precio;
			$this->nombre=$nombre;
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
	}

	class Alimentacion extends Productos{
		private $mesCaducidad;
		private $añoCaducidad;

		public function __construct($codigo,$precio,$nombre,$mesCaducidad,$añoCaducidad){
			parent::__construct($codigo,$precio,$nombre);
			$this->mesCaducidad = $mesCaducidad;
			$this->añoCaducidad = $añoCaducidad;
		}

		public function getMesCaducidad(){
			return $this->mesCaducidad;
		}

		public function getAñoCaducidad(){
			return $this->añoCaducidad;
		}
	}

	class Electronica extends Productos{
		

		public function __construct($codigo,$precio,$nombre,$plazoGarantia){
			parent::__construct($codigo,$precio,$nombre);
			$this->plazoGarantia = $plazoGarantia;
		}

		public function getPlazoGarantia(){
			return $this->plazoGarantia;
		}
	}
?>