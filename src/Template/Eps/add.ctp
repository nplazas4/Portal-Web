<?php
    // Breadcrumb
    $breadcrumb = [
        [ 'Inicio', 'home','Pages','PortalProjects'],
        [ 'EPS','index','Eps'],
        [ 'Crear EPS','add','Eps'],
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
    </div>
    <div class="section home">
        <div class="home-menu">
          <?= $this->Html->css('login')?>
          <?= $this->Html->css('error')?>
          <div class="row">
            <h5>Crear EPS</h5>
            <br/>
             <!-- <form class="col s12"> -->
             <?= $this->Form->create($eps,['class'=>'col s12']) ?>
               <div class="row">
                 <fieldset>
                   <div class="alert" style=<?=$error?>>
                     <span class="closebtn">&times;</span>
                     No se ha podido crear la EPS.
                   </div>
                   <div class="row">
                     <div class="input-field col s12">
                        <?php echo $this->Form->input('EPS_ID',['label'=>'','placeholder'=>'ID','class'=>'validate','required']);?>
                     </div>
                     <div class="input-field col s12">
                       <?php echo $this->Form->input('EPS_NAME',['label'=>'','placeholder'=>'Nombre','class'=>'validate','required']);?>
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
