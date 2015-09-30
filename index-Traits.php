<?php

	trait PersonaT{
			
			public $nombre;

			public function mostrarNombre(){
					echo $this->nombre;
			}

			abstract function asignarNombre($nombre);

	}

	trait Trabajador{
			protected function mensaje(){
						echo "Mi nombre es: ";
			}

			protected function hola(){
						echo "es del trabajador";
			}
	}

	class Persona{
		
		use PersonaT, Trabajador;

		public function asignarNombre($nombre){
							//$this->nombre = $nombre;
							$this->nombre = self::mensaje() . $nombre;
							//$this->nombre = $nombre;
		}

		public function Hola(){
			 echo " Hola soy ";
		}

	}

	$persona = new Persona();
	$persona->asignarNombre("Felipe<br>");
	$persona->mostrarNombre() . $persona->Hola(); //Toma la clase Hola redefinida en clase Persona
	echo $persona->nombre;
	//$persona->mensaje(); // Call to protected method Persona::mensaje()