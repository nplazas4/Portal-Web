<?php
    // Breadcrumb
    $breadcrumb = [
        [ 'Inicio', 'home','Pages','PortalProjects'],
        [ 'EPS','index','eps'],
    ];
?>
<div class="section bcrumb">
  <div class="breadcrumb-container">
      <a href="javascript:history.back()" class="breadcrumb-back"><i class="material-icons">keyboard_arrow_left</i></a>
      <?php foreach ($breadcrumb as $item): ?>
          <!-- <a href="<//?= $item[1] ?>" class="breadcrumb"><//?= $item[0] ?></a> -->
          <?php echo $this->Html->link($item[0],
            ['controller'=>$item[2], 'action'=>$item[1]],
            ['escape' => false,'class'=>'breadcrumb']
          );?>
      <?php endforeach; ?>
      <?php echo $this->Html->link('Editar EPS '.$eps->EPS_NAME,
        ['controller'=>'Eps', 'action'=>'edit',$eps->id],
        ['escape' => false,'class'=>'breadcrumb']
      );?>
  </div>
    <div class="form-content">
             <?= $this->Form->create($eps,['class'=>'col s12']) ?>
             <div class="form-content">
               <div id="login-page" class="row">
               <div class="col s12 m6 offset-m3 l4 offset-l4 z-depth-6 ">
                 <h5 class"centered">Editar EPS</h5>
                 <fieldset>
                 <div class="input-field col s12">
                   <?php echo $this->Form->input('EPS_ID',['label'=>'','placeholder'=>'ID','class'=>'validate','required']);?>
                 </div>
                 <div class="input-field col s12">
                   <?php echo $this->Form->input('EPS_NAME',['label'=>'','placeholder'=>'Nombre','class'=>'validate','required']);?>
                 </div>
               </fieldset>
               <div class="btns mb-2">
                   <?= $this->Form->button(__('Editar'),['class'=>'btn waves-effect btn-depressed'])?>
               </div>
                <?= $this->Form->end() ?>
               </div>
             </div>
             </div>
        </div>
    </div>
