<?php

    require_once "../../functions/autoload.php";
   

    $postData = $_POST;

    $id = $_GET['id'] ?? FALSE;

    $fileData = $_FILES['imagen'] ?? FALSE;






    try {

        $personaje = new Personaje();

        if(!empty($fileData['tmp_name'])){
            if(!empty($postData['imagen_og'])){
                (new Imagen())->borrarImagen(__DIR__ . "/../../img/personajes/" . $postData['imagen_og']);
            }

            $imagen = (new Imagen())->subirImagen(__DIR__ . "/../../img/personajes", $fileData);

            $personaje->reemplazar_imagen($imagen, $id);
        }


        $personaje->edit($postData['nombre'],$postData['alias'],$postData['creador'],$postData['primera_aparicion'],$postData['bio'], $id);

        header("Location: ../index.php?sec=admin_personajes");
    } catch (\Exception $e) {
        die("No se pudo cargar el personaje".  $e);
    }




?>