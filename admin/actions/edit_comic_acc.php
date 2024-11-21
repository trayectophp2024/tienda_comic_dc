<?php

    require_once "../../functions/autoload.php";
   

    $postData = $_POST;

    $id = $_GET['id'] ?? FALSE;

    $fileData = $_FILES['portada'] ?? FALSE;


 /*    var_dump($_POST['id_serie']);

    die(); */

    try {

        $comic = new Comic();

        if(!empty($fileData['tmp_name'])){
            if(!empty($postData['portada_og'])){
                (new Imagen())->borrarImagen(__DIR__ . "/../../img/covers/" . $postData['portada_og']);
            }

            $imagen = (new Imagen())->subirImagen(__DIR__ . "/../../img/covers", $fileData);

            $comic->reemplazar_imagen($imagen, $id);
        }


        $comic->edit(
            $postData['titulo'],
            $postData['volumen'],
            $postData['numero'],
            $postData['publicacion'],
            $postData['origen'],
            $postData['editorial'],
            $postData['bajada'],
            $postData['precio'],
            $postData['id_serie'],
            $postData['id_personaje'],
            $postData['id_guionista'],
            $postData['id_artista'],
            $id
        
        );

        header("Location: ../index.php?sec=admin_comics");
        exit;
    } catch (\Exception $e) {
        die("No se pudo editar el Comic".  $e);
    }




?>