<?php

    $personaje = (new Personaje())->lista_completa();
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
                                        <option value="<?= $s->getId() ?>"><?= $s->getNombre() ?></option>

                                <?php } ?>  


                            </select>
                        </div>

                        <div class="col-6 mb-3">
                            <label class="form-label" for="imagen">Imagen:</label>
                            <input type="file" class="form-control" name="imagen" id="imagen">
                        </div>

                        <div class="col-6 mb-3">
                            <label class="form-label" for="primera_aparicion">Primera Aparicion:</label>
                            <input type="number" class="form-control" name="primera_aparicion" id="primera_aparicion" max="9999" required>
                            <div class="form-text">Ingresar el año con 4 digitos</div>
                        </div>

                        
                        <div class="col-12 mb-3">
                            <label class="form-label" for="creador">Creador(es)</label>
                            <input type="text" class="form-control" name="creador" id="creador"  required>
                            <div class="form-text">En caso de que sean multiples creadores , separar los nombres con comas</div>
                        </div>

                        <div class="col-12 mb-3">
                            <label class="form-label" for="bio">Biografia</label>
                            <textarea name="bio" id="bio" class="form-control"></textarea>
                          
                        </div>

                        <button type="submit" class="btn btn-primary">Cargar Personaje</button>

                        


                </form>  
            </div>
    </div>
</div>