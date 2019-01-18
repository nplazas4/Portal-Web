<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<?= $this->Html->css('login')?>
<div class="row">
  <br/>
   <!-- <form class="col s12"> -->
   <?= $this->Form->create($indicators,['class'=>'col s12']) ?>
   <fieldset>
     <div class="row">
       <div class="input-field col s6">
         <?php echo $this->Form->input('CAPEX_USD',['label'=>'','placeholder'=>'CAPEX USD','class'=>'validate','required']);?>
       </div>
       <div class="input-field col s6">
         <?php echo $this->Form->input('CAPEX_COP',['label'=>'','placeholder'=>'CAPEX COP','class'=>'validate','required']);?>
       </div>
     </div>
     <div class="row">
       <div class="input-field col s6">
         <?php echo $this->Form->input('RIESGOS',['label'=>'','placeholder'=>'Riesgos','class'=>'validate','required']);?>
       </div>
       <div class="input-field col s6">
         <?php echo $this->Form->input('SPI_EXTERNO',['label'=>'','placeholder'=>'SPI Externo','class'=>'validate','required']);?>
       </div>
     </div>
     </fieldset>
     <div class="btns mb-2">
         <!-- <a href="http://localhost/web/pages/home" class="btn waves-effect btn-depressed">Crear</a> -->
         <!-- <?//= $this->Form->button('Crear',['class'=>'btn waves-effect btn-depressed'])?> -->
         <?= $this->Form->button(__('Crear'),['class'=>'btn waves-effect btn-depressed'])?>
     </div>
      <?= $this->Form->end() ?>
 </div>
