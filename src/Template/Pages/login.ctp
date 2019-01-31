<div class="login">
    <figure class="login-logo">
        <?= $this->Html->image('logo-vert.svg') ?>
    </figure>
    <div class="login-content">
        <h1>Iniciar sesión</h1>
        <form action="">
            <div class="input-field">
                <input id="email" type="email" class="validate">
                <label for="email">Email</label>
            </div>
            <div class="input-field">
                <input id="password" type="password" class="validate">
                <label for="password">Contraseña</label>
            </div>
            <div class="btns mb-2">
                <a href="" class="btn waves-effect btn-depressed">Ingresar</a>
            </div>
            <a href="#recoverPassword" class="link modal-trigger">Recuperar contraseña</a>
        </form>
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