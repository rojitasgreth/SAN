<?php

class ControladorFormularios{

        /*==============================
          REGISTRO DE ESTUDIANTE
        ==============================*/

    static public function ctrRegistro(){

        /* Primero se verifica que se haya obtenido la variable POST, se declaran las variables tabla y datos. Se pasan los datos al modelo con la variable respuesta*/

        if(isset($_POST["RegistroNombre"])){      

            $tabla = "estu"; 

            $datos = array("id" => $_POST["RegistroId"],
                           "nombre" => $_POST["RegistroNombre"],  
                           "apellido" => $_POST["RegistroApellido"], 
                           "genero" => $_POST["RegistroGenero"],
                           "grado" => $_POST["RegistroGrado"],
                           "seccion" => $_POST["RegistroSeccion"],
                           "representante" => $_POST["RegistroRepresentante"]);
            
            $respuesta = modeloformulario::mdlregistro($tabla, $datos);

            return $respuesta;           


        } // Fin-if.
    } // Fin-método.

        /*==============================
           SELECCIONAR REGISTROS
        ==============================*/
   
    static public function ctrSeleccionarRegistros($item, $valor){

        $tabla = "perso";

        $respuesta = ModeloFormulario::mdlSeleccionarRegistros($tabla, $item, $valor);

        return $respuesta;
    }



        /*==============================
           SELECCIONAR AULAS
        ==============================*/
    

    static public function ctrSeleccionarAula($item, $valor, $item2, $valor2){

        $tabla = "estu";

        $respuesta = ModeloFormulario::mdlSeleccionarAula($tabla, $item, $valor, $item2, $valor2);

        return $respuesta;
    }

    

        /*==============================
           SELECCIONAR ESTUDIANTES
        ==============================*/

    // Nos ayudara a visualizar el estudiante seleccionado a editar.
    static public function ctrSeleccionarEstu($item, $valor){

        $tabla = "estu";

        $respuesta = ModeloFormulario::mdlSeleccionarEstu($tabla, $item, $valor);

        return $respuesta;
    }

        /*==============================
           SELECCIONAR EGRESOS
        ==============================*/
    // Nos ayudara a seleccionar los registros de la tabla de egresos.
        static public function ctrSeleccionarEgresos(){

            $tabla = "egresos";

            $respuesta = ModeloFormulario::mdlSeleccionarEgresos($tabla);


            return $respuesta;
        }

        /*==============================
           ACTUALIZAR ESTUDIANTE
        ==============================*/

    public function ctrActualizarEstu(){

        if(isset($_POST["ActualizarNombre"])){      #nos aseguramos que si se haya guardado la variable

            
            $tabla = "estu"; #nombre de nuestra tabla en la bd

            $datos = array("id" => $_POST["ActualizarId"],
                           "nombre" => $_POST["ActualizarNombre"],  
                           "apellido" => $_POST["ActualizarApellido"], 
                           "genero" => $_POST["ActualizarGenero"],
                           "grado" => $_POST["ActualizarGrado"],
                           "seccion" => $_POST["ActualizarSeccion"],
                           "representante" => $_POST["ActualizarRepresentante"]);

            #Le pasamos los datos al modelo haciendo una instancia con la variable de respuesta  
            #Y le pasamos lo que nos pida (la tabla y los datos)             
            $respuesta = modeloformulario::mdlActualizarEstu($tabla, $datos);

            if($respuesta == "ok"){

                #borramos el cache del formulario
                echo '<script> 

                if (window.history.replaceState){
    
                    window.history.replaceState ( null, null, window.location.href );
    
                }
    
    
                 </script>';

                echo '<div class="alert alert-success">Modificacion Completada</div>

                <script>

                    setTimeout(function(){

                    window.location="index.php?action=VIS_plantilla";

                    }, 3000); 

                </script>';
                            
                    
                } else {
                    echo '<div class="alert alert-danger">Error al actualizar el estudiante</div>';
                }

            }

            


        }

    

        /*==============================
           DESINCOPORAR ESTUDIANTE
        ==============================*/
            
            public function ctrDesincorporarEstudiante(){

                if(isset($_POST['DesincEstu'])) {
                    $id = $_POST['id'];
                    $motivo = $_POST['motivo'];

                    $estudiante = new modeloformulario();
                    $egresado = $estudiante->EgresarEstudiante($id, $motivo);

                        if($egresado) {
                            
                            echo '<script> 

                            if (window.history.replaceState){
                
                                window.history.replaceState ( null, null, window.location.href );
                
                            }
                
                
                             </script>';

                            echo '<div class="alert alert-success">Desincoporacion Completada</div>

                            <script>

                                setTimeout(function(){

                                window.location="index.php?action=VIS_secciones";

                                }, 2000); 

                            </script>';
                                        
                                
                            } else {
                                echo '<div class="alert alert-danger">Error al desincorporar el estudiante</div>';
                            }

                        }
                        }
   




        /*==============================
           ACTUALIZAR REGISTRO
        ==============================*/

    public function ctrActualizarRegistro(){

        /*  1. Se valida que se haya obtenido la variable POST ActualizarUser.
            2. Se crea un condicional, donde si la contraseña es diferente a vacío, se debe almacenar la nueva contraseña, sino se debe guardar la contraseña que poseía.
            3. Otra condicional, donde si el status es igual 1, el status2 será activo, de lo contrario (si es 0), será inactivo.
            4. De esta manera se declara nuestra tabla y la variable datos es una array que contiene toda la información a actualizar. Donde password será el objeto password independientemente de la respuesta al igual que status2 (objeto status2).
            5. La respuesta depende del modelo, donde instanciamos el método estático mdlActualizarRegistro*/

        if(isset($_POST["ActualizarUser"])){

            if($_POST["ActualizarPassword"] != ""){

                $password = $_POST["ActualizarPassword"];      

            }else{

                $password = $_POST["ActualPassword"];      

            }
        if ($_POST['ActualizarStatus'] == 1) {
            $status2 = 'activo';
        }else{
            $status2 = 'inactivo';

        }
            $tabla = "perso"; 

            $datos = array("id" => $_POST["Id"],
                           "user" => $_POST["ActualizarUser"],
                           "email" => $_POST["ActualizarEmail"],  
                           "password" => $password,
                           "status" => $_POST["ActualizarStatus"],
                           "status2" => $status2,
                           "cargo" => $_POST["ActualizarCargo"]);
            
            $respuesta = modeloformulario::mdlActualizarRegistro($tabla, $datos);

            /* Ahora con la repsuesta obtenida del modelo, si es "ok", se borra cache dle formulario y se muestra mensaje al usuario de modificación completada, se redirecciona a la vista de gestión de usuarios para observar cambios*/

            if($respuesta == "ok"){

                echo '<script> 

                if (window.history.replaceState){
    
                    window.history.replaceState ( null, null, window.location.href );
    
                }
    
    
                 </script>';

                echo '<div class="alert alert-success">Modificacion Completada</div>

                <script>

                setTimeout(function(){

                window.location="index.php?action=VIS_usuarios";

                }, 2000); 

                </script>';

            }

            


        }

    }
        /*==============================
           CARGA DE NOTAS
        ==============================*/


    public function ctrCargarNota(){

        /*  1. Valida que se haya obtenido la variable POST.
            2. Declara las variables tabla y nota (array que contiene el valor del id y la nota cargada en el formulario).
            3. Declara la variable respuesta, pasando los datos al modelo y solicitando respuesta */

        if(isset($_POST["CargarNota"])){


            $tabla = 'estu';
            $nota = array(  "id" =>$_POST["id"], 
                            "nota" => $_POST["CargarNota"]);

            $respuesta = modeloformulario::mdlCargarNota($tabla, $nota);

            /* Si la respuesta es "ok" borra cache, muestra mensaje exitoso y redirecciona para observar cambios.*/

            if($respuesta == "ok"){

                echo '<script> 

                if (window.history.replaceState){
    
                    window.history.replaceState ( null, null, window.location.href );
    
                }
    
    
                 </script>';

                echo '<div class="alert alert-success">Carga de nota completada</div>

                <script>

                    setTimeout(function(){

                    window.location="index.php?action=VIS_buscar_au";

                    }, 2000); 

                </script>';
                            
               /* Si la respuesta no es "ok", muestra mensaje de error.*/     
                } else {
                    echo '<div class="alert alert-danger">Error al cargar la nota</div>';
                }
        }   
    }

}