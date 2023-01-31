<?php

//CONTROLADOR - CLASE ENCARGADA DE MANEJAR LA CONEXIÓN A LA BASE DE DATOS
    class ConnectionDB{

        public static function Connect(){
         
            $dsn = 'mysql:host='. constant('DB_HOST') . ';dbname=' . constant('DB_NAME');

            $options = array(
                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            );

            try{
                $connection = new PDO($dsn, constant('DB_USER'), 'root', $options);

                $connection->exec("set names utf8");
    
                return $connection;
            }catch(Exception $e){
                $error = $e->getMessage();
                echo $error;
            }

    }

}