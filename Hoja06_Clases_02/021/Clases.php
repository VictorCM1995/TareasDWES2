<?php
	class Empleado {
		protected $sueldo;

		public function __construct($sueldo){
			$this->sueldo = $sueldo;
		}

		public function getSueldo(){
			return $this->sueldo;
		}
	}

	class Encargado extends Empleado{

		public function __construct($sueldo){
			parent::__construct($sueldo * 1.15);
		}

		public function getSueldo(){
			return parent::getSueldo();
		}
	}
?>