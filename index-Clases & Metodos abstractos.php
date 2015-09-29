<?php

	abstract class Molde{

			abstract public function ingresarNombre($nombre);
			abstract public function obtenerNombre();

			/*
			public static function mensaje($mensaje){
					print $mensaje;
			}
			*/
	}

	class Persona extends Molde
	{
			private $mensaje = "Hola Mundo";
			private $nombre;

			public function mostrar(){
					print $this->mensaje;
			}

			public function ingresarNombre($nombre, $username = "cf"){
						$this->nombre = $nombre . $username . "<br>";
			}

			public function obtenerNombre(){
				 print $this->nombre;
			}
		
	}


	//Molde::mensaje("Hola Mundo");

/*
	$obj = new Persona();
	$obj->mostrar();

	Class Persona contains 2 abstract methods and must therefore be declared abstract or implement the remaining methods (Molde::ingresarNombre, Molde::obtenerNombre)

	*/

	$obj = new Persona();
	$obj->ingresarNombre("Felipe");
	$obj->obtenerNombre();
	//Las clases abstractas permiten parámetros adicionales
	$obj->ingresarNombre("Felipe ", "Quijano");
	$obj->obtenerNombre();