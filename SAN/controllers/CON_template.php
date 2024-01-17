<?php

#Clase en php: en el cual se fundamenta la programación orientada a objetos, y sus instancias son las que crean objetos. Esta clase será instanciada. (GKRB)


Class ControllerTemplate{

	/*=====================================
		METODO DE LLAMADA A LA PLANTILLA
	=====================================*/

	public static function ctrTraerplantilla(){

		#INCLUDE: Se utiliza para invocar archivos que tengan código HTML-PHP.
		include "views/template.php";
	}

	/*=====================================
					ENLACES
	=====================================*/


	public function enlacesPaginasController(){

		if (isset($_GET["action"])) { //Si la variable action obtenida a travès del método GET trae información (isset).
			
			$enlaces = $_GET["action"]; //le da valor con esa información
		}



		else{

			$enlaces = "index";  //Sino, le da el valos de index.

		}

		$respuesta = Paginas::enlacesPaginasModel($enlaces);

		include $respuesta; 
	}

} 
