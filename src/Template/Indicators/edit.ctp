<?php
    // Breadcrumb
    $breadcrumb = [
        [ 'Inicio', 'home','Pages'],
        [ 'Indicadores','index','Indicators'],
    ];
?>
<div class="section bcrumb company">
    <div class="breadcrumb-container">
        <?php foreach ($breadcrumb as $item): ?>
            <!-- <a href="<?= $item[1] ?>" class="breadcrumb"><?= $item[0] ?></a> -->
            <?php echo $this->Html->link($item[0],
              ['controller'=>$item[2], 'action'=>$item[1]],
              ['escape' => false,'class'=>'breadcrumb']
            );?>
        <?php endforeach; ?>
        <?php echo $this->Html->link('Editar Indicador No.'.$indicators->id,
          ['controller'=>'Indicators', 'action'=>'edit',$indicators->id],
          ['escape' => false,'class'=>'breadcrumb']
        );?>
    </div>
    <div class="section home">
        <div class="home-menu">
          <?= $this->Html->css('login')?>
          <div class="row">
            <h5>Editar indicador</h5>
            <br/>
             <!-- <form class="col s12"> -->
             <?= $this->Form->create($indicators,['class'=>'col s12']) ?>
               <div class="row">
                 <fieldset>
                   <div class="row">
                     <div class="input-field col s12">
                       <?php echo $this->Form->input('RIESGOS',['label'=>'Riesgos','placeholder'=>'Riesgos','class'=>'validate','required']);?>
                     </div>
                     <div class="input-field col s12">
                       <?php echo $this->Form->input('SPI_EXTERNO',['label'=>'SPI Externo','placeholder'=>'SPI Externo','class'=>'validate','required']);?>
                     </div>
                   </div>
                   </fieldset>
                   <div class="btns mb-2">
                       <!-- <a href="http://localhost/web/pages/home" class="btn waves-effect btn-depressed">Crear</a> -->
                       <!-- <?//= $this->Form->button('Crear',['class'=>'btn waves-effect btn-depressed'])?> -->
                       <?= $this->Form->button(__('Editar'),['class'=>'btn waves-effect btn-depressed'])?>
                   </div>
                    <?= $this->Form->end() ?>
           </div>
        </div>
    </div>
</div>
