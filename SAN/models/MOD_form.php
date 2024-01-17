<?php

require_once "MOD_conexion.php";

class modeloformulario{


        /*==============================
           REGISTRO DE ESTUDIANTE
        ==============================*/
       static public function mdlregistro($tabla, $datos){

        /*  Creamos un objeto que nos traiga los datos de la bd.
            Este objeto sera de la clase conexion y con el metodo conectar traeremos los datos con los parametros del prepare.
            BindParam se usa para desocultar los valores dados en la sentencia SQL*/

        $stmt = conexion::conectar()->prepare("INSERT INTO $tabla(id, nombre, apellido, genero, grado, seccion, representante) VALUES (:id, :nombre, :apellido, :genero, :grado, :seccion, :representante)"); 

        $stmt->bindParam(":id", $datos["id"], PDO::PARAM_STR);
        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":apellido", $datos["apellido"], PDO::PARAM_STR);
        $stmt->bindParam(":genero", $datos["genero"], PDO::PARAM_STR);
        $stmt->bindParam(":grado", $datos["grado"], PDO::PARAM_STR);
        $stmt->bindParam(":seccion", $datos["seccion"], PDO::PARAM_STR);
        $stmt->bindParam(":representante", $datos["representante"], PDO::PARAM_STR);


        if($stmt->execute()){
            return "ok";
            #Si todo se ejecuta correctamente se devuelve un ok
        }else{ 
        
        /* Cerramos la conexion a la bd en caso de que "ok" no sea la respuesta y pase al else con el error y vaciamos el objeto por seguridad */
        $stmt->close(); 
        $stmt = NULL;   

        return "no_ok";
        }
    }

        /*==============================
           SELECCIONAR REGISTRO
        ==============================*/

        // Nos ayudara a seleccionar los registro por las coincidencias
        static public function mdlSeleccionarRegistros($tabla, $item, $valor){

         if($item == null AND $valor == null) { #Este sera el que se use en la vista de inicio ya que hay que mostrar todos los registros.

        $stmt = conexion::conectar()->prepare("SELECT *, DATE_FORMAT(fecha, '%d/%m/%y') AS fecha FROM $tabla ORDER BY status, cargo");  #seleccionamos los registros y le ponemos el date_format() para mostrar la fecha como dia/mes/año
        $stmt->execute();                                               #Ejecutamos la declaracion del stmt
        return $stmt -> fetchAll();                                     # devolvemos el stmt con el fetchall el cual nos muestra todos los registros

        }else{                                  #Este sera el que se use a momento de buscar un registro en especifico (se tenga que buscar coincidencias)

            $stmt = conexion::conectar()->prepare("SELECT *, DATE_FORMAT(fecha, '%d/%m/%y') AS fecha FROM $tabla WHERE $item = :$item");  #buscamos las coincidencias haciando busqueda con el where con la variable $item (la columna de email)
            $stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);             #traemos en la variable item la columna del email y en el valor el email introducido por el usuario en la dicha variable POST
            $stmt->execute();                                                #Ejecutamos la declaracion del stmt
            return $stmt -> fetch();                                         #devolvemos el stmt con el fetch ya que vmaos a evaluar solo un registro no todos.
        }

        $stmt->close(); 
        $stmt = NULL;

        }

        /*==============================
           SELECCIONAR EGRESOS
        ==============================*/

        // Nos ayudara a seleccionar los registro por las coincidencias
        static public function mdlSeleccionarEgresos($tabla){

        $stmt = conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY grado, motivo ASC");  #seleccionamos todos los registros de la tabla de egresos ordenados por el grado de forma ascendente.
        $stmt->execute();                                               #Ejecutamos la declaracion del stmt
        return $stmt -> fetchAll();                                     # devolvemos el stmt con el fetchall el cual nos muestra todos los registros
        

        $stmt->close(); 
        $stmt = NULL;

        }

        /*==============================
           SELECCIONAR AULA
        ==============================*/

        /* Este método permite buscar coincidencias segun el grado y sección seleccionado por el usuario, muestra todos los resultados (fetchAll) */ 

        static public function mdlSeleccionarAula($tabla, $item, $valor, $item2, $valor2){

        $stmt = conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item AND $item2 = :$item2"); 
        $stmt->bindParam(":".$item, $valor, PDO::PARAM_INT);             
        $stmt->bindParam(":".$item2, $valor2, PDO::PARAM_STR);     
        $stmt->execute();                                                
        return $stmt -> fetchAll();       
        
        $stmt->close(); 
        $stmt = NULL;                                
    }


        /*==============================
           SELECCIONAR ESTUDIANTE
        ==============================*/

        /*  1. Nos ayudara a seleccionar los registro por las coincidencias
            2. Buscamos las coincidencias haciando busqueda con el where con la variable $item (id).
            3. traemos en la variable item la columna del id y en el valor el id introducido por el usuario en la dicha variable POST. */
        static public function mdlSeleccionarEstu($tabla, $item, $valor){

        $stmt = conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item"); 

        $stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);
        $stmt->execute();                                                
        return $stmt -> fetch();                                         


        $stmt->close(); 
        $stmt = NULL;

        }

        /*==============================
           ACTUALIZAR ESTUDIANTE
        ==============================*/

        static public function mdlActualizarEstu($tabla, $datos){

        $stmt = conexion::conectar()->prepare("UPDATE $tabla SET id=:id, nombre=:nombre, apellido=:apellido, genero=:genero, grado=:grado, seccion=:seccion, representante=:representante WHERE id = :id");            

        #enlazamos parametros, coloca en nombre lo que venga en $datos[nombre] en email lo que venga en...
        $stmt->bindParam(":id", $datos["id"], PDO::PARAM_STR);
        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":apellido", $datos["apellido"], PDO::PARAM_STR);
        $stmt->bindParam(":genero", $datos["genero"], PDO::PARAM_STR);
        $stmt->bindParam(":grado", $datos["grado"], PDO::PARAM_STR);
        $stmt->bindParam(":seccion", $datos["seccion"], PDO::PARAM_STR);
        $stmt->bindParam(":representante", $datos["representante"], PDO::PARAM_STR); 
        $stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);

        if($stmt->execute()){
            return "ok";        #Si todo se ejecuta correctamente se devuelve un ok
        }else{
            print_r(conexion::conectar()->errorInfo()); #si hay algun error imprimimos que error fue.
        }

        $stmt->close(); #Cerramos la conexion a la bd en caso de que "ok" no sea la respuesta y pase al else con el error
        $stmt = NULL;   #Vaciamos el objeto por seguridad 
    }

        /*==============================
           EGRESAR ESTUDIANTE
        ==============================*/
        public function EgresarEstudiante($id, $motivo){

            $tabla = "estu";  // Se declara la tabla de los estudiantes.
            $tabla2 = "egresos"; // Se declara la tabla de los egresos.

            // Se van a transferir los datos de la tabla estu a la tabla egresos:

            $sql = "SELECT * FROM $tabla WHERE id = $id";
            $query = Conexion::conectar()->prepare($sql);
            $query->execute();
            $estudiante = $query->fetch(PDO::FETCH_ASSOC);

            // Insertar los datos en la tabla "egresos"
            $sql = "INSERT INTO $tabla2 (id, nombre, apellido, genero, grado, seccion, nota, representante, motivo) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = Conexion::conectar()->prepare($sql);
            $stmt->execute([$estudiante['id'], $estudiante['nombre'], $estudiante['apellido'], $estudiante['genero'], $estudiante['grado'], $estudiante['seccion'], $estudiante['nota'], $estudiante['representante'], $motivo]);

            // Eliminar el registro de la tabla "estu"
            $sql = "DELETE FROM $tabla WHERE id = $id";
            $query = Conexion::conectar()->prepare($sql);
            $query->execute();

            return true;
        }

        /*==============================
           ACTUALIZAR REGISTRO
        ==============================*/


    static public function mdlActualizarRegistro($tabla, $datos){

        /*  Este método estático, permite actualizar cada uno de los campos del usuario a editar, según el ID.
            El BindParam se usa para desocultar los valores dados en la sentencia SQL.*/

        $stmt = conexion::conectar()->prepare("UPDATE $tabla SET user=:user, email=:email, password=:password, status=:status, status2=:status2, cargo=:cargo WHERE id = :id");            

        $stmt->bindParam(":user", $datos["user"], PDO::PARAM_STR); 
        $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
        $stmt->bindParam(":status", $datos["status"], PDO::PARAM_INT);
        $stmt->bindParam(":status2", $datos["status2"], PDO::PARAM_STR);
        $stmt->bindParam(":cargo", $datos["cargo"], PDO::PARAM_STR);
        $stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);

        if($stmt->execute()){
            return "ok";
            #Si todo se ejecuta correctamente se devuelve un ok.    
        }else{
            print_r(conexion::conectar()->errorInfo());
            #si hay algun error imprimimos que error fue.
        }

        /* Cerramos la conexion a la bd en caso de que "ok" no sea la respuesta y pase al else con el error y vaciamos el objeto por seguridad */
        $stmt->close(); 
        $stmt = NULL; 
    }

        /*==============================
                CARGAR NOTA
        ==============================*/

static public function mdlCargarNota($tabla, $nota){

    /* Conecta con la base da datos, y con la secuencia SQL UPDATE actualiza el campo nota segun el ID obtenido en la variable (estudiante especifico). */

        $stmt = conexion::conectar()->prepare("UPDATE $tabla SET nota=:nota WHERE id = :id");         

        $stmt->bindParam(":nota", $nota["nota"], PDO::PARAM_STR); 
        $stmt->bindParam(":id", $nota["id"], PDO::PARAM_INT);

        if($stmt->execute()){

            return "ok";
            #Si todo se ejecuta correctamente se devuelve un ok  

        }else{

            print_r(conexion::conectar()->errorInfo());
            #si hay algun error imprimimos que error fue.
        }

        $stmt->close();
        $stmt = NULL;   
    }



}

?> 