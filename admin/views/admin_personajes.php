<?php
$personajes = (new Personaje())->lista_completa();

/* echo "<pre>";
    print_r($personaje);
    echo "</pre>"; */

?>


<div class="row my-5">
    <div class="col">
        <h1 class="text-center mb-5">Administracion de Personajes</h1>
        <div class="row mb-5 d-flex align-items-center">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Alias</th>
                        <th scope="col">Creador</th>
                        <th scope="col">Primera Aparicion</th>
                        <th scope="col">Biografia</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>

                <?php  foreach($personajes as $p){  ?>

                    <tr>
                        <th scope="row"><?=  $p->getId() ?></th>
                        <td><?=  $p->getNombre() ?></td>
                        <td><?=  $p->getAlias() ?></td>
                        <td><?=  $p->getCreador() ?></td>
                        <td><?=  $p->getPrimera_aparicion() ?></td>
                        <td><?=  $p->getBiografia() ?></td>
                        <td>
                            <a class="btn btn-warning" href="index.php?sec=edit_personajes&id=<?= $p->getId() ?>">Editar</a>
                        </td>
                    </tr>

                <?php  } ?>   
                    
                </tbody>
            </table>

                    <a class="btn btn-primary mt-5" href="index.php?sec=add_personajes">Cargar Nuevo Personaje</a>

        </div>
    </div>

</div>