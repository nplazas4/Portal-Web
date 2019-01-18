<?php
    // Breadcrumb
    $breadcrumb = [
        [ 'Inicio', 'home','Pages','PortalProjects'],
        [ 'Crear Códigos de Proyecto','add','Projectcodes'],
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
            <br/>
             <!-- <form class="col s12"> -->
             <?= $this->Form->create($projectcodes,['class'=>'col s12']) ?>
               <div class="row">
                 <fieldset>
                 <div class="input-field col s12">
                   <?php echo $this->Form->input('CODE_NAME',['label'=>'','placeholder'=>'Nombre','class'=>'validate','required']);?>
                 </div>
                 <div class="input-field col s12">
                   <!-- <input id="Nombre_Proyecto" type="text" class="validate">
                   <label for="Nombre_Proyecto">Nombre de proyecto</label> -->
                   <?php echo $this->Form->textarea('CODE_DESCRIPTION',['label'=>'','placeholder'=>'Descripción','class'=>'materialize-textarea','required']);?>
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
        </div>
    </div>
</div>
