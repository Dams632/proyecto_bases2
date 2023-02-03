<?php 
    class Conectar {
        public $host = "containers-us-west-28.railway.app";
        public $dbname = 'railway';
        public $port = '7209';
        public $user = 'postgres';
        public $password = 'o5yaKm2Qhp2yPFHXhIKW';
        public $connect;

        public static function getConnection(){
            try {
                $conexion= new Conectar();
                $conexion->connect= new PDO("pgsql:host={$conexion->host}; port={$conexion->port}; 
                dbname={$conexion->dbname}", $conexion->user,$conexion->password);
                $conexion->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $conexion->connect;
                //echo "Buena conexion, crack";

            } catch (PDOException $e) {
                echo "Error: ". $e->getMessage();
            }
        }
    }
//Conectar::getConnection();
