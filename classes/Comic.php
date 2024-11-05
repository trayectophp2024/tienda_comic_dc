<?php

    class Comic {
        //atributos
        protected $id;
        protected $titulo;
        protected $volumen;
        protected $numero;
        protected $publicacion;
        protected $origen;
        protected $editorial;
        protected $bajada;
        protected $portada;
        protected $precio;
        protected $id_personaje;
        protected $id_serie;
        protected $id_guionista;
        protected $id_artista;

        //Metodos
        // Devuelve el catologo Completo
        public function catalogo_completo(): array {
               $catalogo= [];
               
              $conexion = (new Conexion())->getConexion();

              $query = "SELECT * FROM comics";

              $PDOStatment = $conexion->prepare($query);

              $PDOStatment->setFetchMode(PDO::FETCH_CLASS, self::class);
              $PDOStatment->execute();

              $catalogo = $PDOStatment->fetchAll();

              return $catalogo;

         }

       // Devuelve el catalogo de productos de un personaje en particular 
       public function catalogo_x_personaje(int $id_personaje) {
            $catalogo= [];
                
            $conexion = (new Conexion())->getConexion();

            $query = "SELECT * FROM comics WHERE id_personaje = $id_personaje";

            $PDOStatment = $conexion->prepare($query);

            $PDOStatment->setFetchMode(PDO::FETCH_CLASS, self::class);
            $PDOStatment->execute();

            $catalogo = $PDOStatment->fetchAll();

            return $catalogo;  
       }

       /* devolver es un producto en particular */

       /* marcador de posiciones , los marcadores de posiciones nos evitan vulnerabilidades como la inyeccion de SQL */

       public function producto_x_id(int $idProducto){

            $conexion = (new Conexion())->getConexion();

            $query = "SELECT * FROM comics WHERE id = :idProducto";

            $PDOStatment = $conexion->prepare($query);

            $PDOStatment->setFetchMode(PDO::FETCH_CLASS, self::class);
            $PDOStatment->execute(
                [
                    'idProducto' => $idProducto
                ]
            );

            $resultado = $PDOStatment->fetch();

            if(!$resultado){
                return null;
            }

            return $resultado;


       }
       




       //Traer los nombres de cada clase sin usar JOIN (utilizar los metodos)

       public function getSerie(){
          $serie = (new Serie())->get_x_id($this->id_serie);
          $nombre = $serie->getNombre();
          return $nombre;
        }

        public function getGuion(){
          $guionista= (new Guionista())->get_x_id($this->id_guionista);
          $nombre = $guionista->getNombre_completo();
          return $nombre;
        }

        public function getArte(){
            $artista= (new Artista())->get_x_id($this->id_artista);
            $nombre = $artista->getNombre_completo();
            return $nombre;
          }

          public function nombre_completo(){
            return $this->getSerie() .  "Vol." .  $this->volumen . "#" . $this->numero;
          }
          







        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Get the value of titulo
         */ 
        public function getTitulo()
        {
                return $this->titulo;
        }

        /**
         * Get the value of volumen
         */ 
        public function getVolumen()
        {
                return $this->volumen;
        }

        /**
         * Get the value of numero
         */ 
        public function getNumero()
        {
                return $this->numero;
        }

        /**
         * Get the value of publicacion
         */ 
        public function getPublicacion()
        {
                return $this->publicacion;
        }

        /**
         * Get the value of origen
         */ 
        public function getOrigen()
        {
                return $this->origen;
        }

        /**
         * Get the value of editorial
         */ 
        public function getEditorial()
        {
                return $this->editorial;
        }

        /**
         * Get the value of bajada
         */ 
        public function getBajada()
        {
                return $this->bajada;
        }

        /**
         * Get the value of portada
         */ 
        public function getPortada()
        {
                return $this->portada;
        }

        /**
         * Get the value of precio
         */ 
        public function getPrecio()
        {
                return $this->precio;
        }

        /**
         * Get the value of id_personaje
         */ 
        public function getId_personaje()
        {
                return $this->id_personaje;
        }

        /**
         * Get the value of id_serie
         */ 
        public function getId_serie()
        {
                return $this->id_serie;
        }

        /**
         * Get the value of id_guionista
         */ 
        public function getId_guionista()
        {
                return $this->id_guionista;
        }

        /**
         * Get the value of id_artista
         */ 
        public function getId_artista()
        {
                return $this->id_artista;
        }
    }


?>