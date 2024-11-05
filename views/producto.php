<?php
    

    $id = $_GET['id'] ?? FALSE;

    $miObjetocomic = new Comic();

    $comic = $miObjetocomic->producto_x_id($id);

  

?>

<div class="row">
     <?php if(isset($comic)) { ?>
       <h1 class="text-center my-5"><?= $comic->nombre_completo() ?>  </h1>
       <div class="col">
            <div class="card mb-5">
                <div class="row g-0">
                        <div class="col-5">
                            <img class="img-fluid rounded-start" src="img/covers/<?= $comic->getPortada() ?>" alt="">
                        </div>
                        <div class="col-7 d-flex flex-column p-3 ">
                            <div class="card-body flex-grow-0">
                                <p class="fs-4 m-0 fw-bold text-danger"><?= $comic->nombre_completo() ?></p>
                                <h2 class="card-title fs-2 mb-4"><?= $comic->getTitulo() ?></h2>
                                <p class="card-text"><?= $comic->getBajada() ?></p> 
                            </div>
                            <ul class="list-group ">
                                <li class="list-group-item">Guion: <?=$comic->getGuion()?></li>
                                <li class="list-group-item">Arte: <?=$comic->getArte()?></li>
                                <li class="list-group-item">Publicación: <?=$comic->getPublicacion() ?></li>
                            </ul>

                            <div class="card-body">
                                 <h2 class="card-title fs-6 mb-4 text-danger">Medios de Pago</h2>
                                 <div class="d-flex">
                                     <i class="fa-brands fa-cc-visa me-3 fs-3 text-info"></i>
                                     <i class="fa-brands fa-cc-mastercard me-3 fs-3 text-warning"></i>
                                     <i class="fa-brands fa-cc-paypal me-3 fs-3 text-primary"></i>
                                     <i class="fa-solid fa-money-bill me-3 fs-3 text-primary-emphasis"></i>
                                     <i class="fa-solid fa-credit-card me-3 fs-3 text-success"></i>
                                  </div>
                            </div>
                            
                            <div class="card-body">
                                <p class="fs-3 mb-3 fw-bold text-danger text-center">$<?=$comic->getPrecio() ?></p>
                                <a href="#" class="btn btn-danger w-100 fw-bold" >COMPRAR</a>
                            </div>



                        </div>

                </div>

            </div>
       </div>
    <?php } else { ?>
        <h2 class="text-center m-5 text-danger">No se encontro el producto deseado</h2>
    
    <?php } ?>
    

</div>

