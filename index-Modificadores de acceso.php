<?php

	/**
	* 
	*/
	class Facebook
	{
		//Atributos
		public $nombre;
		public $edad;
		//private $pass; //Contraseña
		protected $pass; //Contraseña

		//Métodos		
		function __construct($nombre, $edad, $pass)
		{
			$this->nombre = $nombre;
			$this->edad = $edad;
			$this->pass = $pass;
		}

		public function verInformacion(){
			echo "Nombre: " . $this->nombre . "<br>";
			echo "Edad: " . $this->edad . "<br>";
			//self::cambiarPass("654321");
			$this->cambiarPass("654321");
			echo "Password: " . $this->pass . "";
		}

		private function cambiarPass($pass){
			$this->pass = $pass;
		}
	}

	$facebook = new Facebook("Javier Quijano", 26, "123456");
	//$facebook->verInformacion(); //$pass - Sólo puede ser accedido por un método de la clase en este caso verInformacion() 
	//echo $facebook->nombre;
	//echo $facebook->pass; //Cannot access private property Facebook::$pass
	//echo $facebook->pass; //Cannot access protected property Facebook::$pass
	//PROBANDO FUNCIONES O MÉTODOS PRIVATE
	//$facebook->cambiarPass("654321"); //Call to private method Facebook::cambiarPass() from context
	//Sólo puede accederse a través de otro método de la clase
	$facebook->verInformacion();