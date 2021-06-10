<?php
	class Circulo {
		private $radio;
		public function __construct($radio){
			$this->radio = $radio;
		}

		public function get_radio(){
			return $this->radio;
		}

		public function set_radio($radio){
			$this->radio = $radio;
		}

		public function __get($radio){
			if(property_exists(__CLASS__, $radio)){
				return $this->$radio;
			}
			return NULL;
		}

		public function __set($radio,$valor){
			if(property_exists(__CLASS__, $radio)){
				$this->$radio = $valor;
			} else {
				echo "No existe ".$radio;
			}
		}

	}
?>