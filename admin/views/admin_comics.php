<?php
$comics = (new Comic())->catalogo_completo();

/* echo "<pre>";
    print_r($personaje);
    echo "</pre>"; */

?>


<div class="row my-5">
    <div class="col">
        <h1 class="text-center mb-5">Administracion de Comics</h1>
        <div class="row mb-5 d-flex align-items-center">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" width="15%">Portada</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Bajada</th>
                        <th scope="col">Guion</th>
                        <th scope="col">Arte</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>

                <?php  foreach($comics as $c){  ?>

                    <tr>
                        <td><img src="../img/covers/<?=  $c->getPortada() ?>" class="img-fluid rounded" alt=""></td>
                        <th scope="row"><?=  $c->nombre_completo() ?></th>
                        <td><?=  $c->getTitulo() ?></td>
                        <td><?=  $c->getBajada() ?></td>
                        <td><?=  $c->getGuion() ?></td>
                        <td><?=  $c->getArte() ?></td>
                        <td><?=  $c->getPrecio() ?></td>
                        <td>
                            <a class="btn btn-warning" href="index.php?sec=edit_comic&id=<?= $c->getId() ?>">Editar</a>

                            <a class="btn btn-danger mt-2" href="index.php?sec=delete_comic&id=<?= $c->getId() ?>">Eliminar</a>
                        </td>
                    </tr>

                <?php  } ?>   
                    
                </tbody>
            </table>

            <a class="btn btn-primary mt-5" href="index.php?sec=add_comic">Cargar Nuevo Comic</a>

        </div>
    </div>

</div>