<?php
	class Cuenta {
		protected $numero;
		protected $titular;
		protected $saldo;

		public function __construct($numero,$titular,$saldo){
			$this->numero = $numero;
			$this->titular = $titular;
			$this->saldo = $saldo;
		}

		public function ingreso($numero){
			$this->saldo += $numero;
		}

		public function reintegro($numero){
			$this->saldo -= $numero;
			if($this->saldo<=0){
				$this->saldo = 0;
			}
		}

		public function esPreferencial($numero){
			$correcto = false;
			if($this->saldo>$numero){
				$correcto = true;
			}
			return $correcto;
		}

		public function mostrar(){
			return "Numero de cuenta: ".$this->numero.", Nombre del titular: ".$this->titular.", Saldo actual: ".$this->saldo;
		}
	}

	class CuentaCorriente extends Cuenta{
		private $cuota_mantenimiento;

		public function __construct($numero,$titular,$saldo,$cuota_mantenimiento){
			parent::__construct($numero,$titular,($saldo-$cuota_mantenimiento));
			$this->cuota_mantenimiento = $cuota_mantenimiento; 
		}

		public function reintegro($numero){
			if($this->saldo>20){
				parent::reintegro($numero);
			} else {
				$this->saldo -= 0;
			}
		}

		public function mostrar(){
			return parent::mostrar().", Cuota_mantenimiento : ".$this->cuota_mantenimiento;
		}
	}

	class CuentaAhorro extends Cuenta{
		private $comision_apertura;
		private $intereses;

		public function __construct($numero,$titular,$saldo,$comision_apertura,$intereses){
			parent::__construct($numero,$titular,($saldo-$comision_apertura));
			$this->comision_apertura = $comision_apertura;
			$this->intereses = $intereses;
		}

		public function aplicaInteres(){
			$this->saldo += $this->intereses;
		}

		public function mostrar(){
			return parent::mostrar().", Comision_apertura : ".$this->comision_apertura.", Intereses: ".$this->intereses;
		}
	}
?>