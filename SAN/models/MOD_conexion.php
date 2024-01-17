<?php

class conexion{

    static public function conectar(){

        #Los parametros son PDO("nombre servidor; nombre base de datos", "usuario", "contraseña")
        $link = new PDO("mysql:host=localhost;dbname=san", "root", "");

        $link->exec("set names utf8"); #señalamos que trabajaremos con utf8. exec es para ejecutar

        return $link;
    }
}