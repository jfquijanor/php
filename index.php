<?php

	spl_autoload_register(function($clase){
		//print $clase;
		$ruta = "api/" . str_replace("\\", "/", $clase) . ".php";
		//print $ruta;
		if (is_readable($ruta)) {
			require_once $ruta;
		}else{
			echo "El archivo no existe";
		}
	});

	/*
	require_once "api/Models/Persona.php";
	require_once "api/Controllers/PersonasController.php";  
	*/
	//Persona::Hola(); //Class 'Persona' not found, debe incluirse previamente el namespace
	
	Models\Persona::Hola();
	//Controllers\Persona::Hola();
	//La clase debe tener el mismo nombre de la carpeta al crear una autoload
	Controllers\PersonasControllers::Hola();
