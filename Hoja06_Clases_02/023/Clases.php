<?php
	abstract class Medico {
		protected $nombre;
		protected $edad;
		protected $turno;

		public function __construct($nombre,$edad,$turno){
			$this->nombre = $nombre;
			$this->edad = $edad;
			$this->turno = $turno;
		}

		public function getNombre(){
			return $this->nombre;
		}

		public function getEdad(){
			return $this->edad;
		}

		public function getTurno(){
			return $this->turno;
		}

		abstract public function toString();
	}

	class Familia extends Medico{
		private $num_pacientes;

		public function __construct($nombre,$edad,$turno,$num_pacientes){
			parent::__construct($nombre,$edad,$turno);
			$this->num_pacientes = $num_pacientes;
		}

		public function getNum_pacientes(){
			return $this->num_pacientes;
		}

		public function toString(){
			return "Nombre: ".$this->nombre.", Edad: ".$this->edad.", Turno: ".$this->turno.", Numero Pacientes: ".$this->num_pacientes;
		}
	}

	class Urgencias extends Medico{
		private $unidad;

		public function __construct($nombre,$edad,$turno,$unidad){
			parent::__construct($nombre,$edad,$turno);
			$this->unidad = $unidad;
		}

		public function getUnidad(){
			return $this->unidad;
		}

		public function toString(){
			return "Nombre: ".$this->nombre.", Edad: ".$this->edad.", Turno: ".$this->turno.", Unidad: ".$this->unidad;
		}
	}
?>