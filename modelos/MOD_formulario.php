<?php

#REQUIERE EL MODELO QUE CONECTA CON LA BASE DE DATOS.
require_once "MOD_conexion.php";

class modeloformulario{

    /*==============================
        REGISTRO DEL USUARIO
    ==============================*/

    static public function mdlregistro($tabla, $datos){

        #Verificación si existe el usuario a registrar.
        $stmt = Conexion::conectar()->prepare("SELECT user FROM $tabla WHERE user = :user");
        $stmt->bindParam(":user", $_POST["RegistroUser"], PDO::PARAM_STR);
        $stmt->execute();
        $existe = $stmt->fetch();

        if(!$existe ){
            

            /*  1.Creamos un objeto que nos traiga los datos de la bd
                2. Este objeto sera de la clase conexion y con el metodo conectar traeremos los datos con los parametros del prepare
                3. No colocamos el nombre de la tabla, ponemos el $table ya que ahi esta el nombre de la tabla, eso se realiza por seguridad. */
             $stmt = conexion::conectar()->prepare("INSERT INTO $tabla(user, email, password) VALUES (:user, :email, :password)");                                                                                                             
            $stmt->bindParam(":user", $datos["user"], PDO::PARAM_STR); #BindParam se usa para desocultar los valores dados en la sentencia SQL
            $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);   #Nos pide como parametro la variable oculta, donde esta almacenado el valor, y que tipo de variable es.
            $stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);

            if($stmt->execute()){

                return "ok";
                #Si todo se ejecuta correctamente se devuelve un ok

            }else{

                print_r(conexion::conectar()->errorInfo());
                #si hay algun error imprimimos que error fue.
            }

            #Cerramos la conexion a la bd en caso de que "ok" no sea la respuesta y pase al else con el error.
            $stmt->close();
            $stmt = NULL;
        }else{
            return 'existe';
        }
    }



    /*==============================
    SELECCIONAR REGISTROS (ingreso)
    ==============================*/      

    #Permite seleccionar los registro por las coincidencias.
    static public function mdlSeleccionarRegistros($tabla, $item, $valor, $item2, $valor2, $item3, $item4){

        #Para mostrar todos los registros.
        if ($item == null and $valor == null and $item2 == null AND $valor2 == null and $item3 == null AND $item4 == null) { 

           /*   Selecciona los registros y le ponemos el date_format() para mostrar la fecha como dia/mes/año.
                Ejecutamos la declaracion del stmt.
                Devolvemos el stmt con el fetchall el cual nos muestra todos los registros */
            $stmt = conexion::conectar()->prepare("SELECT *, DATE_FORMAT(fecha, '%d/%m/%y') AS fecha FROM $tabla");  
            $stmt->execute();                                               
            return $stmt -> fetchAll(); 

        /* Un else para buscar coicidencias (especificas)*/
        }else{                                  

            /*  Buscamos las coincidencias haciando busqueda con el where con la variable $item (la columna de email).
                Traemos en la variable item la columna del email y en el valor el email introducido por el usuario en la dicha variable POST.
                Ejecutamos la declaracion del stmt.
                devolvemos el stmt con el fetch ya que vmaos a evaluar solo un registro no todos.*/
            $stmt = conexion::conectar()->prepare("SELECT *, DATE_FORMAT(fecha, '%d/%m/%y') AS fecha FROM $tabla WHERE $item = :$item");  
            $stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);            
            $stmt->execute();
            return $stmt -> fetch();                                         
        }

        $stmt->close(); 
        $stmt = NULL;

    }


}