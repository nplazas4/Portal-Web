<?= $this->Html->css('login')?>
<?= $this->Html->css('error')?>
<div class="login">
    <figure class="login-logo">
        <?= $this->Html->image('logo-vert.svg') ?>
    </figure>
    <div class="login-content">
        <h1>Iniciar sesión</h1>
        <!-- <form action=""> -->
          <?= $this->Flash->render('auth') ?>
          <?= $this->Form->create() ?>
          <fieldset>
            <div class="input-field">
                <?php echo $this->Form->input('email',['label'=>'','placeholder'=>'usuario','class'=>'validate','required']);?>
                <!-- <input id="email" type="email" class="validate">
                <label for="email">Email</label> -->
            </div>
            <div class="input-field">
                <?php echo $this->Form->input('password',['label'=>'','placeholder'=>'contraseña','class'=>'validate','required']);?>
                <!-- <input id="password" type="password" class="validate">
                <label for="password">Contraseña</label> -->
            </div>
            </fieldset>
            <div class="btns mb-2">
                <!-- <a href="http://localhost/web/pages/home" class="btn waves-effect btn-depressed">Ingresar</a> -->
                <?= $this->Form->button('Ingresar',['class'=>'btn waves-effect btn-depressed'])?>
                <!-- <?//=$this->html->link('Registrar',['controller'=>'Users','action'=>'add'],['class'=>'btn waves-effect btn-depressed'])?> -->
                <br>
                <br>
                <div class="alert" style=<?= $error ?>>
                  <span class="closebtn">&times;</span>
                  Usuario o contraseña incorrecta.
                </div>
                <div class="alert" style=<?= $errorInac ?>>
                  <span class="closebtn">&times;</span>
                  Usuario inactivo.
                </div>
                <!-- <div class="alert success">
                  <span class="closebtn">&times;</span>
                  <strong>Success!</strong> Indicates a successful or positive action.
                </div>

                <div class="alert info">
                  <span class="closebtn">&times;</span>
                  <strong>Info!</strong> Indicates a neutral informative change or action.
                </div>

                <div class="alert warning">
                  <span class="closebtn">&times;</span>
                  <strong>Warning!</strong> Indicates a warning that might need attention.
                </div> -->
            </div>
            <a href="#recoverPassword" class="link modal-trigger">Recuperar contraseña</a>
            <?= $this->Form->end() ?>
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
<script>
var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
  close[i].onclick = function(){
    var div = this.parentElement;
    div.style.opacity = "0";
    setTimeout(function(){ div.style.display = "none"; }, 600);
  }
}
</script>
