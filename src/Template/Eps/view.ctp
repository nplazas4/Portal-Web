<div class="well">
<br>
<h2><?= $eps->EPS_NAME?></h2>
    <br>
    <dl>
        <dt>Nombre</dt>
        <dd>
            <?= $eps->nombre ?>
            &nbsp;
        </dd>
        <br>
        <dt>Apellidos</dt>
        <dd>
            <?= $user->apellido ?>
            &nbsp;
        </dd>
        <br>
        <dt>Correo electrónico</dt>
        <dd>
            <?= $user->email ?>
            &nbsp;
        </dd>
        <br>
        <dt>Habilitado</dt>
        <dd>
            <?= $user->active ? 'SI' : 'NO' ?>
            &nbsp;
        </dd>
        <br>
        <br>
    </dl>
</div>
