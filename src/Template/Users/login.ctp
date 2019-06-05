<?= $this->Html->css('login')?>
<?= $this->Html->css('error')?>
<div class="login">
    <figure class="login-logo">
        <?= $this->Html->image('logo-vert.svg') ?>
    </figure>
    <div class="login-content">
        <h1>Iniciar sesión</h1>
          <!--Método auth del AppController-->
          <?= $this->Flash->render('auth');?>
          <?= $this->Form->create();?>
          <!--Inputs necesarios para auteticar basados en el método creado en el AppController-->
          <fieldset>
            <div class="input-field">
                <?php echo $this->Form->input('email', ['label'=>'','placeholder'=>'usuario','class'=>'validate','required']);?>
            </div>
            <div class="input-field">
                <?php echo $this->Form->input('password', ['label'=>'','placeholder'=>'contraseña','class'=>'validate','required']);?>
            </div>
            </fieldset>
            <div class="btns mb-2">
                <?= $this->Form->button('Ingresar', ['class'=>'btn waves-effect btn-depressed'])?>
                <br>
                <br>
                <div class="alert" style=<?= $error ?>>
                  <span class="closebtn">&times;</span>
                  Usuario o contraseña incorrecta.
                </div>
                <div class="alert" style=<?= $errorInactivo ?>>
                  <span class="closebtn">&times;</span>
                  Usuario inactivo.
                </div>
            </div>
            <a href="#recoverPassword" class="link modal-trigger">Recuperar contraseña</a>
            <?= $this->Form->end();?>
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
<!--Script que se encarga de cerrar el botón error-->
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
