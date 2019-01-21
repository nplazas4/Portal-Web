<?php
    // Breadcrumb
    $breadcrumb = [
        [ 'Inicio', 'home','Pages','PortalProjects'],
        [ 'EPS','index','eps'],
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
        <?php echo $this->Html->link('Editar EPS '.$eps->EPS_NAME,
          ['controller'=>'Eps', 'action'=>'edit',$eps->id],
          ['escape' => false,'class'=>'breadcrumb']
        );?>
    </div>
    <div class="section home">
        <div class="home-menu">
          <!-- <div class="row"> -->
          <div class="row">
            <br/>
             <!-- <form class="col s12"> -->
             <?= $this->Form->create($eps,['class'=>'col s12']) ?>
               <div class="row">
                 <h5 class="card-title text-center">Editar EPS</h5>
                 <!-- <?//= $this->Form->create($eps,['novalidate']) ?> -->
                 <fieldset>
                 <div class="input-field col s12">
                   <?php echo $this->Form->input('EPS_ID',['label'=>'ID','class'=>'form-control','placeholder'=>'ID','class'=>'validate','required']);?>
                 </div>
                 <div class="input-field col s12">
                   <?php echo $this->Form->input('EPS_NAME',['label'=>'Nombre','class'=>'form-control','placeholder'=>'Nombre','class'=>'validate','required']);?>
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
