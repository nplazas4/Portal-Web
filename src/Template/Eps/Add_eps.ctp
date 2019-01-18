<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<?= $this->Html->css('AddProject')?>
<!-- <div class="row">
  <br/>
   <form class="col s12">
     <div class="row">
       <div class="input-field col s6">
         <input id="Id_Proyecto" type="text" class="validate">
         <label for="Id_Proyecto">ID de proyecto</label>
       </div>
       <div class="input-field col s6">
         <input id="Nombre_Proyecto" type="text" class="validate">
         <label for="Nombre_Proyecto">Nombre de proyecto</label>
       </div>
       <div class="input-field col s12"> -->
         <!-- <input disabled value="I am not editable" id="disabled" type="text" class="validate"> -->
         <!-- <textarea id="Description" class="materialize-textarea"></textarea>
         <label for="Description">Descripción</label>
       </div>
     </div> -->
     <!-- <div class="row">
       <div class="input-field col s12"> -->
         <!-- <input disabled value="I am not editable" id="disabled" type="text" class="validate"> -->
         <!-- <textarea id="Description" class="materialize-textarea"></textarea>
         <label for="Description">Descripción</label>
       </div>
     </div> -->
     <!-- <div class="row">
       <div class="input-field col s6">
         <input id="EPS" type="text" class="validate">
         <label for="EPS">EPS</label>
       </div>
       <div class="input-field col s6">
         <input id="Gestor" type="text" class="validate">
         <label for="Gestor">Gestor responsable</label>
       </div>
     </div>
     <div class="row">
       <div class="row">
       <div class="input-field col s6">
         <input id="Inicio_Planificado" type="text" class="validate">
         <label for="Inicio_Planificado">Inicio planificado<span class="material-icons right mr-4">event</span></label> -->
         <!-- <button class="waves-effect waves-light btn-small"><i class="material-icons center">event</i></button> -->
       <!-- </div>
       <div class="input-field col s6">
         <input id="Finalizar" type="text" class="validate">
         <label for="Finalizar">Debe finalizar antes<span class="material-icons right mr-4">event</span></label> -->
         <!-- <button type="submit" class="waves-effect waves-light btn-small"><i class="material-icons center">event</i></button> -->
       <!-- </div>
     </div>
     </div>
     <div class="btns mb-2">
         <a href="http://localhost/web/pages/home" class="btn waves-effect btn-depressed">Ingresar</a> -->
         <!-- <?//= $this->Form->button('Ingresar',['class'=>'btn waves-effect btn-depressed'])?> -->
     <!-- </div>
   </form>
 </div> -->
<!-- estructura -->
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ep[]|\Cake\Collection\CollectionInterface $eps
 */
?>

<div class="container">
  <div class="row">
  <div class="col-md-12">
    <div class="page-header">
      <h2>EPS</h2>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                  <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('EPS_ID') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('EPS_NAME') ?></th>
                  <!-- <th scope="col" class="actions"><?//= __('Actions') ?></th> -->
                  <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
              <?php foreach ($eps as $ep): ?>
              <tr>
                  <td><?= $this->Number->format($ep->id) ?></td>
                  <td><?= $this->Number->format($ep->ID_P_EPS) ?></td>
                  <td><?= h($ep->EPS_ID) ?></td>
                  <td><?= h($ep->EPS_NAME) ?></td>
                  <td class="actions">
                      <?= $this->Html->link(__('View'), ['action' => 'view', $ep->id]) ?>
                      <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ep->id]) ?>
                      <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ep->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ep->id)]) ?>
                  </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
        </table>
      </div>
        <div class="paginator">
            <ul class="pagination">
              <?= $this->Paginator->first('<< ' . __('first')) ?>
              <?= $this->Paginator->prev('< ' . __('previous')) ?>
              <?= $this->Paginator->numbers() ?>
              <?= $this->Paginator->next(__('next') . ' >') ?>
              <?= $this->Paginator->last(__('last') . ' >>') ?>
            </ul>
            <p><?= $this->Paginator->counter() ?></p>
        </div>
    </div>
  </div>
</div>

<!-- <div class="eps index large-9 medium-8 columns content">
    <h3><?//= __('Eps') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?//= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?//= $this->Paginator->sort('ID_P_EPS') ?></th>
                <th scope="col"><?//= $this->Paginator->sort('EPS_ID') ?></th>
                <th scope="col"><?//= $this->Paginator->sort('EPS_NAME') ?></th>
                <th scope="col" class="actions"><?//= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?//php foreach ($eps as $ep): ?>
            <tr>
                <td><?//= $this->Number->format($ep->id) ?></td>
                <td><?//= $this->Number->format($ep->ID_P_EPS) ?></td>
                <td><?//= h($ep->EPS_ID) ?></td>
                <td><?//= h($ep->EPS_NAME) ?></td>
                <td class="actions">
                    <?//= $this->Html->link(__('View'), ['action' => 'view', $ep->id]) ?>
                    <?//= $this->Html->link(__('Edit'), ['action' => 'edit', $ep->id]) ?>
                    <?//= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ep->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ep->id)]) ?>
                </td>
            </tr>
            <?//php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?//= $this->Paginator->first('<< ' . __('first')) ?>
            <?//= $this->Paginator->prev('< ' . __('previous')) ?>
            <?//= $this->Paginator->numbers() ?>
            <?//= $this->Paginator->next(__('next') . ' >') ?>
            <?//= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?//= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div> -->
