<?php
 class Artista {
    protected $id;
    protected $nombre_completo;
    protected $biografia;
    protected $foto_perfil;


     //devolver el listado completo de los artista

     public function lista_completa(): array
     {
         $resultado = [];
 
         $conexion = (new Conexion())->getConexion();
 
         $query = "SELECT * FROM artistas";
 
         $PDOStatment = $conexion->prepare($query);
 
         $PDOStatment->setFetchMode(PDO::FETCH_CLASS, self::class);
         $PDOStatment->execute();
 
         $resultado = $PDOStatment->fetchAll();
 
         return $resultado;
     }

    
        // devuelve los datos de un artista en particular 
        public function get_x_id(int $id) {
            
               
            $conexion = (new Conexion())->getConexion();

            $query = "SELECT * FROM artistas WHERE id = $id";

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
     * Get the value of nombre_completo
     */ 
    public function getNombre_completo()
    {
        return $this->nombre_completo;
    }

    /**
     * Get the value of biografia
     */ 
    public function getBiografia()
    {
        return $this->biografia;
    }

    /**
     * Get the value of foto_perfil
     */ 
    public function getFoto_perfil()
    {
        return $this->foto_perfil;
    }
 }



?>