<?php
    // Breadcrumb
    $breadcrumb = [
        [ 'Inicio', 'home','Pages','PortalProjects'],
        [ 'Curva de proyectos','index','Charts'],
        [ 'Editar curva de tres generaciones','edit','Charts'],
    ];
?>
<?= $this->Html->css('login')?>
<div class="section bcrumb">
  <div class="breadcrumb-container">
      <a href="javascript:history.back()" class="breadcrumb-back"><i class="material-icons">keyboard_arrow_left</i></a>
      <?php foreach ($breadcrumb as $item): ?>
          <?php echo $this->Html->link($item[0],
            ['controller'=>$item[2], 'action'=>$item[1]],
            ['escape' => false,'class'=>'breadcrumb']
          );?>
      <?php endforeach; ?>
  </div>
    <div class="form-content">
             <?= $this->Form->create($charts,['class'=>'col s12','type' => 'file']) ?>
             <div class="form-content">
               <div id="login-page" class="row">
               <div class="col s12 m6 offset-m3 l4 offset-l4 z-depth-6 ">
                 <h5 class"centered">Editar curva de tres generaciones</h5>
                 <fieldset>
                  <div class="row">
                    <div class="input-field col s12">
                       <?php echo $this->Form->input('EXCEL_CHART', ['type' => 'file']); ?>
                    </div>
                  </div>
                    <div class="input-field col s12">
                      <?php echo $this->Form->input(
                        'PROJECT_CODE',
                        [
                          'label' => 'Proyecto',
                          'type' => 'select',
                          'multiple' => false,
                          'options' => $projects,
                          'empty' => true
                        ]
                      );?>
                    </div>
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
