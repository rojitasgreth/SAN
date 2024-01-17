<?php

class ControladorFormularios{
   
    /*==============================
        REGISTRO DEL USUARIO
    ==============================*/
    static public function ctrRegistro(){

        if(isset($_POST["RegistroUser"])){      #nos aseguramos que si se haya guardado la variable

            $tabla = "perso"; #nombre de nuestra tabla en la bd

            $datos = array("user" => $_POST["RegistroUser"],  #creamos un array con los datos que vamos a guardar
                           "email" => $_POST["RegistroEmail"],  #En el campo Email se pondra lo que se coloque en el RegistroEmail
                           "password" => $_POST["RegistroPassword"]);

            #Le pasamos los datos al modelo haciendo una instancia con la variable de respuesta  
            #Y le pasamos lo que nos pida (la tabla y los datos)             
            $respuesta = modeloformulario::mdlregistro($tabla, $datos);

            return $respuesta;

            


        }
    }


    /*==============================
      SELECCIONAR REGISTROS (USER)
    ==============================*/
    #Este método permite buscar coincidencias con los usuarios registrados en la base de datos "perso".

    static public function ctrSeleccionarRegistros($item, $valor){

        $tabla = "perso";

        $respuesta = ModeloFormulario::mdlSeleccionarRegistros($tabla, $item, $valor);

        return $respuesta;
    }


    /*==============================
          INGRESO AL SISTEMA
    ==============================*/

    public function ctrIngreso(){

        if(isset($_POST["IngresoEmail"])){

            /* Se definen las variables de las cuales se buscará 
            coincidencia para permitir el ingreso. Las variables POST
            obtienen el valor ingresado en el formulario*/
            $tabla = "perso";
            $item = "email";                    
            $item2 = "password";             
            $item3 = "status2"; 
            $item4 = "status"; 
            $valor= $_POST["IngresoEmail"];
            $valor2= $_POST["IngresoPassword"];  


            /* Se añaden dichas variables en el objeto respuesta, quien hace un
            llamado al modelo*/
            $respuesta = ModeloFormulario::mdlSeleccionarRegistros($tabla, $item, $valor, $item2, $valor2, $item3, $item4);

            /* Si los datos coinciden, se valida el ingreso */
            if($respuesta["email"] == $_POST["IngresoEmail"] && $respuesta["password"] == $_POST["IngresoPassword"] && $respuesta["status2"] == 'activo' && $respuesta["cargo"] != 'Nuevo' && $respuesta["status"] == 1){  
                
                /* Se crea la variable de sesión para privatizar ingreso */
                $_SESSION['validarIngreso'] = "ok";                                                                   
                echo '<script> 
                
                if ( window.history.replaceState ) {    

                    window.history.replaceState( null, null, window.location.href );
                    
                }
            
            </script>'; 
                    /* Se permite ingreso al sistema */
                    header('location:/SAN3.2/SAN/index.php?action=VIS_inicio');        


            /* En caso de que el usuario no este activo */
            }if($respuesta["email"] == $_POST["IngresoEmail"] && $respuesta["password"] == $_POST["IngresoPassword"] && $respuesta["status2"] == 'inactivo' && $respuesta["status"] == 0){

                echo '<script> 
            
                if ( window.history.replaceState ) {    

                    window.history.replaceState( null, null, window.location.href );
                    
                }
            
            </script>';

            #Indicamos el error
            echo '<div class="alert alert-danger">Usuario no activo</div>';


            /* Si los datos no coinciden */
            }if($respuesta["email"] != $_POST["IngresoEmail"] || $respuesta["password"] != $_POST["IngresoPassword"]){                 

                echo '<script> 
            
                if ( window.history.replaceState ) {    

                    window.history.replaceState( null, null, window.location.href );
                    
                }
            
            </script>';


            /*Indicamos el error*/
            echo '<div class="alert alert-danger">Credenciales invalidas</div>';


            /* Si el cargo del usuario es diferente a Docente, Coordinacion o Director no puede ingresar al sistema */
            }if($respuesta["cargo"] == 'Nuevo'){                 

                echo '<script> 
            
                if ( window.history.replaceState ) {    

                    window.history.replaceState( null, null, window.location.href );
                    
                }
            
            </script>';


            /*Indicamos el error*/
            echo '<div class="alert alert-danger">No posee el cargo para ingresar</div>';
             }

        }

    }

}