<?php

	class Pagina{

			//Atributos

			public $nombre = "NetMasters";
			public static $url = "ww.netmasters.co";

			//Métodos
			public function bienvenida(){

				//echo "Bienvenidos a <b> " . $this->nombre . "</b> la pagina es <b>" . $this->url . "</b><br>"; //Undefined property: Pagina::$url

				//echo "Bienvenidos a <b> " . $this->nombre . "</b> la pagina es <b>" . self::$url . "</b><br>";

				echo "Bienvenidos a <b> " . $this->nombre . "</b> la pagina es <b>" . Pagina::$url . "</b><br>";

			}

			public static function bienvenida2(){
					//echo "Bienvenidos a " . $this->nombre; //Using $this when not in object context
				 //echo "Bienvenidos a " . self::$nombre; //Access to undeclared static property: Pagina::$nombre
					echo "Bienvenidos a " . self::$url . "<br>"; //funciones static sólo puden acceder a variables static
			}

	}

	/**
	* 
	*/
	class Web extends Pagina
	{
		
		
	}

/*
$pagina = new Pagina(); //Undefined property: Pagina::$url
$pagina->bienvenida();
*/

Pagina::bienvenida2();
Web::bienvenida2();