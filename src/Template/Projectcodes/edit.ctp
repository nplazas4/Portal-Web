<?php
    // Breadcrumb
    $breadcrumb = [
        [ 'Inicio', 'home','Pages','PortalProjects'],
        [ 'Códigos de Proyecto','index','Projectcodes'],
    ];
?>
<?= $this->Html->css('login')?>
<div class="section bcrumb company">
    <div class="breadcrumb-container">
        <?php foreach ($breadcrumb as $item): ?>
            <!-- <a href="<?= $item[1] ?>" class="breadcrumb"><?= $item[0] ?></a> -->
            <?php echo $this->Html->link($item[0],
              ['controller'=>$item[2], 'action'=>$item[1]],
              ['escape' => false,'class'=>'breadcrumb'],
              ['escape' => false]
            );?>
        <?php endforeach; ?>
        <?php echo $this->Html->link('Editar Indicador '.$projectcodes->CODE_NAME,
          ['controller'=>'Projectcodes', 'action'=>'edit',$projectcodes->id],
          ['escape' => false,'class'=>'breadcrumb']
        );?>
    </div>
    <div class="section home">
        <div class="home-menu">
          <!-- <div class="row"> -->
          <div class="row">
            <br/>
             <!-- <form class="col s12"> -->
             <?= $this->Form->create($projectcodes,['class'=>'col s12']) ?>
               <div class="row">
                 <h5 class="card-title text-center">Editar Código de Proyecto</h5>
                 <!-- <?//= $this->Form->create($projectcodes,['novalidate']) ?> -->
                 <fieldset>
                 <div class="input-field col s12">
                   <?php echo $this->Form->input('CODE_NAME',['label'=>'Nombre','placeholder'=>'NOMBRE','class'=>'validate','required']);?>
                 </div>
                 <div class="input-field col s12">
                   <!-- <input id="Nombre_Proyecto" type="text" class="validate">
                   <label for="Nombre_Proyecto">Nombre de proyecto</label> -->
                   <?php echo $this->Form->textarea('CODE_DESCRIPTION',['label'=>'Descripción','placeholder'=>'Descripción','class'=>'materialize-textarea','required']);?>
                 </div>
               </div>
               </fieldset>
               <div class="btns mb-2">
                   <!-- <a href="http://localhost/web/pages/home" class="btn waves-effect btn-depressed">Crear</a> -->
                   <!-- <?//= $this->Form->button('Crear',['class'=>'btn waves-effect btn-depressed'])?> -->
                   <?= $this->Form->button('Editar',['class'=>'btn btn-primary mt-2'])?>
                   <?= $this->Form->end() ?>
               </div>
                <?= $this->Form->end() ?>
           </div>
        </div>
    </div>
</div>
