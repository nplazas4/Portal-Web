<?php
    // Breadcrumb
    $breadcrumb = [
        [ 'Inicio', 'home','Pages','PortalProjects'],
        [ 'Riesgos de Proyectos','index','Risks'],
    ];
?>
<?= $this->Html->css('textlength')?>
<<<<<<< HEAD
<?= $this->Html->script(['search.min.js']) ?>
=======
<?= $this->Html->script(['search.js']) ?>
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
<div class="section portal-projects">
    <div class="breadcrumb-container">
        <a href="javascript:history.back()" class="breadcrumb-back"><i class="material-icons">keyboard_arrow_left</i></a>
        <?php foreach ($breadcrumb as $item): ?>
            <?php echo $this->Html->link($item[0],
              ['controller'=>$item[2], 'action'=>$item[1]],
              ['escape' => false,'class'=>'breadcrumb']
            );?>
        <?php endforeach; ?>
    </div>
    <div class="section home">
        <div class="home-menu" id="Id_Table_Risks">
          <!-- <div class="row"> -->
            <form class="col s12">
                <div class="input-field col s12">
                  <i class="material-icons prefix">search</i>
                  <input id="Search_Input" onkeyup="Search()" type="text"></input>
                  <label for="Search_Input">Buscar</label>
              </div>
            </form>
          <table id="myTable" class="display highlight centered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                      <th scope="col" width="10%"><?php echo $this->Html->link($this->Html->tag('i','add', array('class' => 'material-icons tooltipped','data-position'=>'dropdown','data-tooltip'=>'Agregar Riesgo')),
                      array('action' => 'add'), array('escape'=>false));?></th>
                      <th scope="col" width="10%"><?= $this->Paginator->sort('id',['No.']) ?></th>
                      <th scope="col" width="10%"><?= $this->Paginator->sort('PROJECT_CODE',['PROYECTO']) ?></th>
                      <th scope="col" width="10%"><?= $this->Paginator->sort('RISK_NUMBER',['RIESGO']) ?></th>
                      <th scope="col"><?= $this->Paginator->sort('RISK_NAME',['NOMBRE']) ?></th>
                      <th>ACCIONES</th>
                    </tr>
                </thead>
              <tbody>
                <?php foreach ($risks as $risk):?>
                  <?php foreach ($projectsRisks as $project):?>
                    <?php if ($project->id == $risk->PROJECT_CODE):?>
                      <tr>
                          <td></td>
                          <td><?= $this->Number->format($risk->id) ?></td>
                          <td><?= h($project->PROJECT_NAME) ?></td>
                          <td><?= h($risk->RISK_NUMBER) ?></td>
                          <td><?= h($risk->RISK_NAME) ?></td>
                          <td class="actions">
                            <?= $this->Html->link(__('Editar'),['action' => 'edit', $risk->id],['class'=>'btn btn-small tooltipped','data-position'=>'left','data-tooltip'=>'Ver o Editar Riesgo de Proyecto']) ?>
                            <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete',$risk->id], ['confirm' => __('Seguro desea eliminar el proyecto '.$risk->RISK_NAME.'?', $risk->id),'class'=>'btn btn-small tooltipped #f44336 red','data-position'=>'dropdown','data-tooltip'=>'Eliminar Riesgo de Proyecto']) ?>
                          </td>
                      </tr>
                    <?php endif;?>
                  <?php endforeach;?>
                <?php endforeach;?>
              </tbody>
            </table>
        </div>
    </div>
</div>
