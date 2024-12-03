<?php

    require_once "../../functions/autoload.php";
   

    $postData = $_POST;

    $fileData = $_FILES['imagen'];


 /*    echo "<pre>";
    print_r($fileData);
    echo "</pre>";
 */

/*   echo time();


    die(); */ 

    /*     echo "<pre>";
     print_r($postData);
    echo "</pre>"; */



    try {

        $imagen = (new Imagen())->subirImagen(__DIR__ . "/../../img/personajes", $fileData);

        (new Personaje())->insert($postData['nombre'],$postData['alias'],$postData['creador'],$postData['primera_aparicion'],$postData['bio'], $imagen);

        (new Alerta())->add_alerta("success" , "El personaje se cargo correctamente");

        header("Location: ../index.php?sec=admin_personajes");
    } catch (\Exception $e) {
        die("No se pudo cargar el personaje".  $e);
    }




?>