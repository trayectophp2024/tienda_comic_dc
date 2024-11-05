<?php

/* require de productos */
 require_once "libraries/productos.php";
  
$productos = catalogo_todos_personaje();








?>

<h1 class="text-center my-5 ">Todos los comic</h1>

<div class="row">

    <?php    if(count($productos))  {   ?> 
    <?php foreach ($productos as $comic) { ?>
    
    <div class="col-3">
        <div class="card mb-3">
            <img src="img/covers/<?=$comic['portada'] ?>" class="card-img-top" alt="<?=$comic['serie'] ?>">
            <div class="card-body">
                <p class="fs-6 m-0 fw-bold text-danger"><?=$comic['serie'] ?> Vol. <?=$comic['volumen'] ?>   #<?=$comic['numero'] ?></p>
                <h5 class="card-title"><?=$comic['titulo'] ?></h5>
                <p class="card-text"><?= recortar_palabras($comic['bajada'], 6) ?></p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Guion: <?=$comic['guion'] ?></li>
                <li class="list-group-item">Arte: <?=$comic['arte'] ?></li>
                <li class="list-group-item">Publicación: <?=$comic['publicacion'] ?></li>
            </ul>
            <div class="card-body">
                <p class="fs-3 mb-3 fw-bold text-danger text-center">$<?=$comic['precio'] ?></p>
                <a href="index.php?sec=producto&id=<?= $comic['id'] ?>" class="btn btn-danger w-100 fw-bold" >VER MÁS</a>
            </div>

        </div>
    </div>

    <?php } ?>

    <?php }else { ?>
         <div class="col-12">
             <h2 class="text-center text-danger mb-5">No se encontraron Productos</h2>
         </div>
    <?php } ?>
</div>