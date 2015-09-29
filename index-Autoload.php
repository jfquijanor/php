<?php

	//$_GET['action']; //http://localhost:8000/?action=clases

	function autoload($clase){
		//include "clases/" . $clase . ".php";
		include $_GET['action'] . "/" . $clase . ".php";
	}

	spl_autoload_register('autoload');

	//Persona::mostrar("Hola Mundo");
	Auto::mostrar("Hola Mundo<br>");
	Persona::mostrar("Netmasters");