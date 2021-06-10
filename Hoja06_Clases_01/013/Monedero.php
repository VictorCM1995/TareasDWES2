<?php
	class Monedero {
		private $dinero;
		private static $num_monederos = 0;
		public function __construct($dinero){
			$this->dinero = $dinero;
			self::$num_monederos++;
		}

		public function __destruct(){
			self::$num_monederos--;
		}

		public function meter($numero){
			$this->dinero += $numero;
		}

		public function sacar($numero){
			$this->dinero -= $numero;
			if($this->dinero <= 0){
				$this->dinero = 0;
			}
		}

		public function consultar(){
			return "Dinero del monedero ".$this->dinero;
		}
	}
?>