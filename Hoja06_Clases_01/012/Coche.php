<?php
	class Coche {
		private $matricula;
		private $velocidad;
		public function __construct($matricula,$velocidad){
			$this->matricula = $matricula;
			$this->velocidad = $velocidad;
		}

		public function acelerar($numero){
			$this->velocidad += $numero;
			if($this->velocidad>=120){
				$this->velocidad = 120;
			}
		}

		public function frenar($numero){
			$this->velocidad -= $numero;
			if($this->velocidad<=0){
				$this->velocidad = 0;
			}
		}

		public function toString(){
			return "El coche ".$this->matricula." con velocidad de ".$this->velocidad;
		}
	}
?>