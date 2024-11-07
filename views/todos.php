<?php

 $miObjetoComic = new Comic();

 $productos = $miObjetoComic->catalogo_completo();





?>

<h1 class="text-center my-5 ">Todos los comic</h1>

<div class="row">

    <?php    if(count($productos))  {   ?> 
    <?php foreach ($productos as $comic) { ?>
        
    <div class="col-3">
        <div class="card mb-3">
            <img src="img/covers/<?=$comic->getPortada() ?>" class="card-img-top" alt="" style="max-height: 350px;">
            <div class="card-body"  style="height:150px;">
                <p class="fs-6 m-0 fw-bold text-danger"><?=$comic->nombre_completo() ?></p>
                <h5 class="card-title"><?=$comic->getTitulo() ?></h5>
                <p class="card-text"><?= mb_substr($comic->getBajada(), 0 , 30) ?>...</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Guion: <?=$comic->getGuion() ?></li>
                <li class="list-group-item">Arte: <?=$comic->getArte() ?></li>
                <li class="list-group-item">Publicación: <?=$comic->getPublicacion() ?></li>
            </ul>
            <div class="card-body">
                <p class="fs-3 mb-3 fw-bold text-danger text-center">$<?=$comic->getPrecio() ?></p>
                <a href="index.php?sec=producto&id=<?= $comic->getId() ?>" class="btn btn-danger w-100 fw-bold" >VER MÁS</a>
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