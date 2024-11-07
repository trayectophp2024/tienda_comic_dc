<?php

    require_once "../../classes/Conexion.php";
    require_once "../../classes/Personaje.php";

    $postData = $_POST;

    echo "<pre>";
     print_r($postData);
    echo "</pre>";

    try {
        (new Personaje())->insert($postData['nombre'],$postData['alias'],$postData['creador'],$postData['primera_aparicion'],$postData['bio'], '');

        header("Location: ../index.php?sec=admin_personajes");
    } catch (\Exception $e) {
        die("No se pudo cargar el personaje".  $e);
    }




?>