<?php
    class Serie {
        protected $id;
        protected $nombre;
        protected $historia;

         // devuelve los datos de una serie en particular 
         public function get_x_id(int $id) {
            
               
            $conexion = (new Conexion())->getConexion();

            $query = "SELECT * FROM series WHERE id = $id";

            $PDOStatment = $conexion->prepare($query);

            $PDOStatment->setFetchMode(PDO::FETCH_CLASS, self::class);
            $PDOStatment->execute();

            $resultado = $PDOStatment->fetch();

            if(!$resultado){
                return null;
            }

            return $resultado;
        }

        

        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Get the value of nombre
         */ 
        public function getNombre()
        {
                return $this->nombre;
        }

        /**
         * Get the value of historia
         */ 
        public function getHistoria()
        {
                return $this->historia;
        }
    }




?>