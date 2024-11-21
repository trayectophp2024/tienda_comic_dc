<?php

    class Conexion {
        //atributos
        public const DB_SERVER = "localhost";
        public const DB_USER = "root";
        public const DB_PASS = "";
        public const DB_NAME = "tienda_comics";

        const DB_DSN = "mysql:host=" . self::DB_SERVER . ";dbname=" . self::DB_NAME . ";charset=utf8mb4" ;

        // atributo con tipo PDO

        protected PDO $db;

        //Metodo Contructor 

        public function __construct(){
             try {
                $this->db = new PDO(self::DB_DSN, self::DB_USER ,self::DB_PASS, array(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION));
             } catch (Exception $e) {
                    die("Error al conectarme a la base de datos".  $e);
             }
        }

        //Metodo para llamar la conexion en cada archivo

        public function getConexion() : PDO {
            return $this->db;
        }

    }







?>