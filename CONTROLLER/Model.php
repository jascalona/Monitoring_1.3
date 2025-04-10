<?php

/**Instancia Connection
 * Summary of conexion
 */
class Conexion{


    /**Instanacia Implementada con PDO */
    public static function conectar(){
        $conn = new PDO(
            'mysql:host=localhost;dbname=gxdeve_apps',
            'root',
            '',

            /**PARAMETROS PARA ADMINISTRAR LOS ERRORES */
            array(PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION,
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')
        );

        return $conn;

    }


    
}