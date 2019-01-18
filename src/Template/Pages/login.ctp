<?= $this->Html->css('login')?>
<div class="login">
    <figure class="login-logo">
        <?= $this->Html->image('logo-vert.svg') ?>
    </figure>
    <div class="login-content">
        <h1>Iniciar sesión</h1>
        <!-- <form action=""> -->
          <!-- <?//= $this->Flash->render('auth') ?>
          <?//= $this->Form->create() ?>
          <fieldset> -->
            <div class="input-field">
                <!-- <?//php echo $this->Form->input('text',['label'=>'','placeholder'=>'usuario','class'=>'validate','required']);?> -->
                <input id="email" type="email" class="validate">
                <label for="email">Email<span class="material-icons right mr-4">person</span></label>
            </div>
            <div class="input-field">
                <!-- <?//php echo $this->Form->input('password',['label'=>'','placeholder'=>'contraseña','class'=>'validate','required']);?> -->
                <input id="password" type="password" class="validate">
                <label for="password">Contraseña<span class="material-icons right mr-4">lock</span></label>
            </div>
            <!-- </fieldset> -->
            <div class="btns mb-2">
                <a href="" class="btn waves-effect btn-depressed">Ingresar</a>
                <!-- <?//= $this->Form->button('Ingresar',['class'=>'btn waves-effect btn-depressed'])?> -->
            </div>
            <a href="#recoverPassword" class="link modal-trigger">Recuperar contraseña</a>
            <!-- <?//= $this->Form->end() ?> -->
        <!-- </form> -->
    </div>
</div>

<!-- Modal recuperar contraseña -->
<div id="recoverPassword" class="modal small">
    <div class="modal-content">
        <a class="modal-close close">
            <i class="material-icons">close</i>
        </a>
        <h2>Recuperar contraseña</h2>
        <div class="divider transparent my-1"></div>
        <form action="">
            <div class="input-field">
                <input id="emailRecover" type="email" class="validate">
                <label for="emailRecover">Email</label>
            </div>
            <div class="btns">
                <a href="" class="btn waves-effect btn-depressed">Enviar</a>
            </div>
        </form>
    </div>
</div>
