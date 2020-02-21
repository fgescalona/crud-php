<?php

    class Conexion {

        public function __construct()
        {
            
        }

        public static function conexion()
        {

            $servername = "localhost";
            $dbname     = "empresa";
            $username   = "gerardo";
            $password   = "Gerardo=1410";

            try {
        
                $conexion = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $conexion;

            } catch(PDOException $e) {
                echo "Error conectando a la base de datos: " . $e->getMessage();
            }
        }
    }
