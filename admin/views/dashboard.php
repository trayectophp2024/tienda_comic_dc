<div class="d-flex justify-content-center  p-5">

    <div class="row">
        <h1 class="text-center mb-5 fw-bold" >PANEL DE CONTROL</h1>
        <div>
            <?= (new Alerta())->get_alertas() ?>
         </div>
        <h2 class="text-center">Bienvenido administrador <?= $userData['username'] ?></h2>
    </div>
   
</div>