<?php

    $id = $_GET['id'] ?? FALSE;

    $comic  = (new Comic())->producto_x_id($id);

?>

<div class="row my-5 g-3">
        <h1 class="text-center mb-5">¿Está seguro que desea eliminar el comic? <?=  $comic->nombre_completo() ?></h1>

        <a href="actions/delete_comic_acc.php?id=<?= $comic->getId() ?>" class="btn btn-danger d-block">Eliminar</a>


</div>