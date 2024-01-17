<?php

/* --INDEX--

 Aquí mostraremos las salidas de las vistas al usuario y también enviaremos las acciones que el usuario solicite al controlador. 

Para ejecutar un metodo que esta en el controller, es necesario ejecutar una función de js llamado require.

#REQUIRE: Establece que el código del archivo invocado es requerido (obligatorio) para el funcionamiento del programa. (GKRB) */

require_once "controllers/CON_template.php";
require_once "controllers/CON_form.php";
require_once "models/MOD_form.php";



/* Vamosa instanciar la clase en un objeto llamado template (plantilla). */

$template = new ControllerTemplate();

/* Para ejecutar el metodo que está dentro de esa clase */

$template -> ctrTraerPlantilla();

$conexion = conexion::conectar();