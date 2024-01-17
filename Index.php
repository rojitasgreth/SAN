<?php

#Aca debemos de requerir todos los controladores que vayamos a usar, si no lo hacemos nos dara error al usarlos
require_once "controladores/CON_plantilla.php";
require_once "controladores/CON_formularios.php";
require_once "modelos/MOD_formulario.php";

#En el index siempre pondremos los required ya que asi todos los documentos tendran la informacion
#Lo que no pondremos sera el required de la conexion a la bd, esa se hace desde el modelo que usaremos

/* instanciamos creando un nuevo objeto de la clase controlador plantilla y empleamos su metodo de traer plantilla */
$plantilla = new ControladorPlantilla();
$plantilla -> ctrTraerPlantilla();
 
#Creamos un objeto que instancie la clase conexion para poder ejecutar el metodo conectar
$conexion = conexion::conectar();

