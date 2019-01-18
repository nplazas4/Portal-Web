<div class="well">
<br>
<h2><?= $projects->PROJECT_NAME?></h2>
    <br>
    <dl>
        <dt>ID</dt>
        <dd>
            <?= $projects->ID_PROJECT ?>
            &nbsp;
        </dd>
        <br>
        <dt>Nombre</dt>
        <dd>
            <?= $projects->PROJECT_NAME ?>
            &nbsp;
        </dd>
        <br>
        <dt>Descripción</dt>
        <dd>
            <?= $projects->DESCRIPTION ?>
            &nbsp;
        </dd>
        <br>
        <dt>Inicio planificado del proyecto</dt>
        <dd>
            <?= $projects->PLANNED_START_DATE ?>
            &nbsp;
        </dd>
        <br>
        <dt>Debe finalizar antes del</dt>
        <dd>
            <?= $projects->PLANNED_FINISH_DATE ?>
            &nbsp;
        </dd>
        <br>
        <dt>EPS</dt>
        <dd>
            <?= $projects->EPS_OBJECT_ID ?>
            &nbsp;
        </dd>
        <br>
        <br>
    </dl>
</div>
