<?php

    $personajes = (new Personaje())->lista_completa();
    $series = (new Serie())->lista_completa();
    $guionistas = (new Guionista())->lista_completa();
    $artistas = (new Artista())->lista_completa();

?>


<div class="row -my-5">
    <div class="col">
            <h1 class="text-center mb-5">Agregar Nuevo Comic</h1>

            <div class="row mb-5 d-flex align-items-center">
                  <form class="row g-3" action="actions/add_comic_acc.php"  method="POST" enctype="multipart/form-data">

                        <div class="col-6 mb-3">
                            <label class="form-label" for="titulo">Titulo</label>
                            <input type="text" class="form-control" name="titulo" id="titulo"  required>
                        </div>

                        <div class="col-6 mb-3">
                            <label class="form-label" for="alias">Serie</label>
                            <select class="form-select" name="id_serie" id="id_serie">
                                <option value="" selected disabled>Elija una opcion</option>
                                <?php foreach($series as $s){ ?>
                                        <option value="<?= $s->getId() ?>"   ><?= $s->getNombre() ?></option>

                                <?php } ?>  
                            </select>
                        </div>

                        <div class="col-6 mb-3">
                            <label class="form-label" for="id_personaje">Personaje Principal</label>
                            <select class="form-select" name="id_personaje" id="id_personaje">
                                <option value="" selected disabled>Elija una opcion</option>
                                <?php foreach($personajes as $p){ ?>
                                        <option value="<?= $p->getId() ?>"   ><?= $p->getNombre() ?></option>

                                <?php } ?>  
                            </select>
                        </div>

                        <div class="col-6 mb-3">
                            <label class="form-label" for="volumen">Volumen</label>
                            <input type="number" class="form-control" name="volumen" id="volumen"  required>
                        </div>

                        <div class="col-6 mb-3">
                            <label class="form-label" for="numero">Numero</label>
                            <input type="number" class="form-control" name="numero" id="numero"  required>
                        </div>

                        <div class="col-6 mb-3">
                            <label class="form-label" for="portada">Portada</label>
                            <input type="file" class="form-control" name="portada" id="portada">
                        </div>

                        <div class="col-6 mb-3">
                            <label class="form-label" for="publicacion">Publicacion</label>
                            <input type="date" class="form-control" name="publicacion" id="publicacion">
                        </div>

                        <div class="col-6 mb-3">
                            <label class="form-label" for="id_guionista">Guionista</label>
                            <select class="form-select" name="id_guionista" id="id_guionista">
                                <option value="" selected disabled>Elija una opcion</option>
                                <?php foreach($guionistas as $g){ ?>
                                        <option value="<?= $g->getId() ?>"   ><?= $g->getNombre_completo() ?></option>

                                <?php } ?>  
                            </select>
                        </div>

                        <div class="col-6 mb-3">
                            <label class="form-label" for="id_artista">Artista</label>
                            <select class="form-select" name="id_artista" id="id_artista">
                                <option value="" selected disabled>Elija una opcion</option>
                                <?php foreach($artistas as $a){ ?>
                                        <option value="<?= $a->getId() ?>"   ><?= $a->getNombre_completo() ?></option>

                                <?php } ?>  
                            </select>
                        </div>

                        <div class="col-6 mb-3">
                            <label class="form-label" for="origen">Origen</label>
                            <select class="form-select" name="origen" id="origen">
                                <option value="" selected disabled>Elija una opcion</option>
                                <option>Estados Unidos</option>
                                <option>Europa</option>
                                <option>Argentina</option>
                            </select>
                        </div>


                        <div class="col-6 mb-3">
                            <label class="form-label" for="editorial">Editorial</label>
                            <input type="text" class="form-control" name="editorial" id="editorial">
                        </div>

                        <div class="col-6 mb-3">
                            <label class="form-label" for="precio">Precio</label>
                            <input type="number" class="form-control" name="precio" id="precio">
                        </div>

                        <div class="col-12 mb-3">
                            <label class="form-label" for="bajada">Bajada</label>
                            <textarea name="bajada" id="bajada" class="form-control"></textarea>
                          
                        </div>

                        <button type="submit" class="btn btn-primary">Cargar Comic</button>

                        


                </form>  
            </div>
    </div>
</div>