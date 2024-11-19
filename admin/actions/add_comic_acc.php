<?php

    require_once "../../functions/autoload.php";
   

    $postData = $_POST;

    $fileData = $_FILES['portada'];





    try {

        $imagen = (new Imagen())->subirImagen(__DIR__ . "/../../img/covers", $fileData);

        (new Comic())->insert(
            $postData['titulo'],
            $postData['volumen'],
            $postData['numero'],
            $postData['publicacion'],
            $postData['origen'],
            $postData['editorial'],
            $postData['bajada'],
            $imagen,
            $postData['precio'],
            $postData['id_serie'],
            $postData['id_personaje'],
            $postData['id_guionista'],
            $postData['id_artista']
        
        );

        header("Location: ../index.php?sec=admin_comics");
    } catch (\Exception $e) {
        die("No se pudo cargar el comic".  $e);
    }




?>