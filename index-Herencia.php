<?php

	class Vehiculo{
		//Atributos
		public $motor = false;
		public $marca;
		public $color;

		//Métodos
	
		public function estado(){
			if($this->motor)
				echo "El motor esta encendido<br>";
			else
				echo "El motor esta apagado<br>";
		}

		/*
		protected function estado(){
			if($this->motor)
				echo "El motor esta encendido<br>";
			else
				echo "El motor esta apagado<br>";
		}
		*/

		/*
		private function estado(){
			if($this->motor)
				echo "El motor esta encendido<br>";
			else
				echo "El motor esta apagado<br>";
		}
		*/

		public function encender(){
			if($this->motor){
				echo "Cuidado, el motor ya está prendido<br>";
			}else{
				echo "El motor ahora esta encendido<br>";
				$this->motor = true;
			}
		}
	}

	class Moto extends Vehiculo{

		public function estadoMoto(){
			$this->estado();
		}

	}

	/**
	* 
	*/
	class CuatriMoto extends Moto{
		
	}
	

	/*
	$vehiculo = new Vehiculo();
	$vehiculo->estado();
	$vehiculo->encender();
	$vehiculo->estado();
	*/

	/*
	//$moto = new Moto();
	//$moto->estado(); //Call to protected method Vehiculo::estado()
	//$moto->estadoMoto(); //Call to protected method Vehiculo::estado() a través de Moto::estadoMoto()
	//$moto->estadoMoto(); //Call to private method Vehiculo::estado(), sólo puede ser llamado desde la misma clase Vehiculo, sin extends
	*/

	$cuatrimoto = new CuatriMoto();
	$cuatrimoto->estado();

