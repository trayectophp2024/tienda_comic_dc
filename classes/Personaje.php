<?php

    class Personaje {

        protected $id;
        protected $nombre;
        protected $alias;
        protected $biografia;
        protected $creador;
        protected $primera_aparicion;
        protected $imagen;

        //metodos 
        //devolver el listado completo de los personajes

        public function lista_completa() : array {
            $resultado= [];
               
            $conexion = (new Conexion())->getConexion();

            $query = "SELECT * FROM personajes";

            $PDOStatment = $conexion->prepare($query);

            $PDOStatment->setFetchMode(PDO::FETCH_CLASS, self::class);
            $PDOStatment->execute();

            $resultado = $PDOStatment->fetchAll();

            return $resultado;
        }

        // devuelve los datos de un personaje en particular 
        public function get_x_id(int $id) {
            
               
            $conexion = (new Conexion())->getConexion();

            $query = "SELECT * FROM personajes WHERE id = $id";

            $PDOStatment = $conexion->prepare($query);

            $PDOStatment->setFetchMode(PDO::FETCH_CLASS, self::class);
            $PDOStatment->execute();

            $resultado = $PDOStatment->fetch();

            if(!$resultado){
                return null;
            }

            return $resultado;
        }

        // Devuelve el nombre de un personaje y su alias entre parentesis

        public function getTitulo($aliasPrimero = false) {

            if($aliasPrimero){
                $result = "$this->alias ($this->nombre)";
            }else {
                $result = "$this->nombre ($this->alias)";
            }

            return $result;
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
         * Get the value of alias
         */ 
        public function getAlias()
        {
                return $this->alias;
        }

        /**
         * Get the value of biografia
         */ 
        public function getBiografia()
        {
                return $this->biografia;
        }

        /**
         * Get the value of creador
         */ 
        public function getCreador()
        {
                return $this->creador;
        }

        /**
         * Get the value of primera_aparicion
         */ 
        public function getPrimera_aparicion()
        {
                return $this->primera_aparicion;
        }

        /**
         * Get the value of imagen
         */ 
        public function getImagen()
        {
                return $this->imagen;
        }
    }



?>