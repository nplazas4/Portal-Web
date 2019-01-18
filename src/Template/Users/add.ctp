<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="container">
  <div class="row">
    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
      <div class="card card-signin my-5">
      <div class="card-body">
        <h5 class="card-title text-center">Crear usuario</h5>
        <?= $this->Form->create($user) ?>
        <fieldset>
            <?php
                echo $this->Form->input('first_name',['label'=>'Nombre','class'=>'form-control','placeholder'=>'Nombre']);
                echo $this->Form->input('last_name',['label'=>'Apellido','class'=>'form-control','placeholder'=>'Apellido']);
                echo $this->Form->input('email',['label'=>'Correo','class'=>'form-control','placeholder'=>'Email']);
                echo $this->Form->input('password',['label'=>'Contraseña','class'=>'form-control','placeholder'=>'contraseña']);
                // echo $this->Form->input('role',['label'=>'Rol','class'=>'form-control','options'=>['admin'=>'Administrador','user'=>'Usuario']]);
                // echo $this->Form->control('active',['label'=>'Activo']);
            ?>
        </fieldset>
        <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary mt-2'])?>
        <?= $this->Form->end() ?>
    </div>
  </div>
</div>
</div>
<!-- V2 -->
<!-- <body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Sign In</h5>
            <form class="form-signin">
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                <label for="inputEmail">Email address</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                <label for="inputPassword">Password</label>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember password</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
              <hr class="my-4">
              <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign in with Google</button>
              <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign in with Facebook</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body> -->
