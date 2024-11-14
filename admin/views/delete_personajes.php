<?php

    $id = $_GET['id'] ?? FALSE;

    $personaje  = (new Personaje())->get_x_id($id);

?>

<div class="row my-5 g-3">
        <h1 class="text-center mb-5">¿Está seguro que desea eliminar el personaje : <?= $personaje->getAlias() ?></h1>

        <a href="actions/delete_personaje_acc.php?id=<?= $personaje->getId() ?>" class="btn btn-danger d-block">Eliminar</a>


</div>