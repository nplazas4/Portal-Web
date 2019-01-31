<?php
    // Breadcrumb
    $breadcrumb = [
        [ 'Inicio', 'home','Pages','PortalProjects'],
        [ 'Indicadores de presupuesto','index','Presindicators'],
        [ 'Crear indicador de presupuesto','add','Presindicators'],
    ];
?>
<?= $this->Html->css('login')?>
<div class="section bcrumb company">
    <div class="breadcrumb-container">
        <?php foreach ($breadcrumb as $item): ?>
            <!-- <a href="<?= $item[1] ?>" class="breadcrumb"><?= $item[0] ?></a> -->
            <?php echo $this->Html->link($item[0],
              ['controller'=>$item[2], 'action'=>$item[1]],
              ['escape' => false,'class'=>'breadcrumb']
            );?>
        <?php endforeach; ?>
    </div>
    <div class="section home">
        <div class="home-menu">
          <!-- <div class="row"> -->
          <div class="row">
            <h5>Crear indicador de presupuesto</h5>
            <br/>
             <!-- <form class="col s12"> -->
             <?= $this->Form->create($presindicators,['class'=>'col s12']) ?>
              <fieldset>
                <div class="row">
                  <div class="input-field col s12">
                    <?php echo $this->Form->input('AC_ID',['label'=>'','placeholder'=>'Código (CBS)','class'=>'validate','required']);?>
                  </div>
                </div>
               <div class="row">
                 <div class="input-field col s6">
                   <?php echo $this->Form->input('Monto_COP',['label'=>'','placeholder'=>'Monto (COP)','class'=>'validate','required']);?>
                 </div>
                 <div class="input-field col s6">
                   <?php echo $this->Form->input('Monto_USD',['label'=>'','placeholder'=>'Monto (USD)','class'=>'validate','required']);?>
                 </div>
               </div>
               <div class="row">
                 <div class="input-field col s12">
                    <?php echo $this->Form->input('Indicator_Desc',['label'=>'','placeholder'=>'Descripción','class'=>'validate','required']);?>
                 </div>
               </div>
               <div class="row">
                 <div class="input-field col s6">
                   <?php echo $this->Form->input(
                     'PROJ_CODE',
                     [
                       'label' => 'Proyecto',
                       'type' => 'select',
                       'multiple' => false,
                       'options' => $projects,
                       'empty' => true
                     ]
                   );?>
                 </div>
                 <div class="input-field col s6">
                   <?php echo $this->Form->input(
                     'ID_PARENT',
                     [
                       'label' => 'Indicador',
                       'type' => 'select',
                       'multiple' => false,
                       'options' => $P_Indicator,
                       'empty' => true
                     ]
                   );?>
                 </div>
               </div>
               </fieldset>
               <div class="btns mb-2">
                   <?= $this->Form->button(__('Crear'),['class'=>'btn waves-effect btn-depressed'])?>
               </div>
                <?= $this->Form->end() ?>
           </div>
        </div>
    </div>
</div>
