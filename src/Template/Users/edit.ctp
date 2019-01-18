<div class="container">
  <div class="row">
    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
      <div class="card card-signin my-5">
      <div class="card-body">
        <h5 class="card-title text-center">Editar usuario</h5>
        <?= $this->Form->create($user,['novalidate']) ?>
        <fieldset>
            <?php
                echo $this->Form->input('first_name',['label'=>'Nombre','class'=>'form-control','placeholder'=>'Nombre']);
                echo $this->Form->input('last_name',['label'=>'Apellido','class'=>'form-control','placeholder'=>'Apellido']);
                echo $this->Form->input('email',['label'=>'Correo','class'=>'form-control','placeholder'=>'Email']);
                echo $this->Form->input('password',['label'=>'Contraseña','class'=>'form-control','placeholder'=>'contraseña','value'=>'']);
                // echo $this->Form->input('role',['label'=>'Rol','class'=>'form-control','options'=>['admin'=>'Administrador','user'=>'Usuario']]);
                // echo $this->Form->control('active',['label'=>'Activo']);
            ?>
        </fieldset>
        <?= $this->Form->button('Editar',['class'=>'btn btn-primary mt-2'])?>
        <?= $this->Form->end() ?>
    </div>
  </div>
</div>
</div>
