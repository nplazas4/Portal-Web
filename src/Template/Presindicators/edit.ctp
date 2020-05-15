<?php
    // Breadcrumb
    $breadcrumb = [
        [ 'Inicio', 'home','Pages','PortalProjects'],
        [ 'Riesgos de Proyectos','index','Risks'],
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
        <?php echo $this->Html->link('Editar Proyecto '.$risks->RISK_NAME,
          ['controller'=>'Risks', 'action'=>'edit',$risks->id],
          ['escape' => false,'class'=>'breadcrumb']
        );?>
    </div>
    <div class="section home">
        <div class="home-menu">
          <!-- <div class="row"> -->
          <div class="row">
            <h5>Editar riesgo de proyecto</h5>
            <br/>
             <!-- <form class="col s12"> -->
             <?= $this->Form->create($risks,['class'=>'col s12']) ?>
              <fieldset>
               <div class="row">
                 <div class="input-field col s6">
                   <?php echo $this->Form->input('RISK_NUMBER',['label'=>'','placeholder'=>'Riesgo','class'=>'validate','required']);?>
                 </div>
                 <div class="input-field col s6">
                   <?php echo $this->Form->input('RISK_NAME',['label'=>'','placeholder'=>'Nombre','class'=>'validate','required']);?>
                 </div>
               </div>
               <div class="row">
                 <div class="input-field col s6">
                   <?php echo $this->Form->input('PROBABILITY',['label'=>'Probabilidad','options'=>['1'=>'Muy baja','2'=>'Baja','3'=>'Media','4'=>'Alta','5'=>'Muy alta']]);?>
                 </div>
                 <div class="input-field col s6">
                      <?php echo $this->Form->input('IMPACT',['label'=>'Impacto','options'=>['1'=>'Muy bajo','2'=>'Bajo','3'=>'Medio','4'=>'Alto','5'=>'Muy alto']]);?>
                 </div>
               </div>
               <div class="row">
                 <div class="input-field col s12">
                   <?php echo $this->Form->input('IMPACT_RISK',['label'=>'','placeholder'=>'Impacto del riesgo','class'=>'validate','required']);?>
                 </div>
               </div>
               <div class="row">
                 <div class="input-field col s12">
                   <?php echo $this->Form->textarea('PLAN_ONE',['label'=>'','placeholder'=>'Plan de respuesta 01','class'=>'materialize-textarea','required']);?>
                 </div>
                 <div class="input-field col s12">
                   <?php echo $this->Form->textarea('PLAN_TWO',['label'=>'','placeholder'=>'Plan de respuesta 02','class'=>'materialize-textarea','required']);?>
                 </div>
               </div>
               <div class="row">
                 <div class="input-field col s12">
                   <?php echo $this->Form->textarea('PLAN_THREE',['label'=>'','placeholder'=>'Plan de respuesta 03','class'=>'materialize-textarea','required']);?>
                 </div>
                 <div class="input-field col s12">
                   <?php echo $this->Form->textarea('PLAN_FOUR',['label'=>'','placeholder'=>'Plan de respuesta 04','class'=>'materialize-textarea','required']);?>
                 </div>
               </div>
               <div class="row">
                 <div class="input-field col s12">
                   <?php echo $this->Form->textarea('PLAN_FIVE',['label'=>'','placeholder'=>'Plan de respuesta 05','class'=>'materialize-textarea','required']);?>
                 </div>
               </div>
               <div class="row">
                 <div class="input-field col s12">
                   <?php echo $this->Form->input('RISK_QUALIFICATION',['label'=>'','placeholder'=>'Calificación del riesgo','class'=>'validate','required']);?>
                 </div>
               </div>
               <div class="row">
                 <div class="input-field col s12">
                   <?php echo $this->Form->textarea('PLAN_ONE_S',['label'=>'','placeholder'=>'Seguimiento al plan de respuesta 01','class'=>'materialize-textarea','required']);?>
                 </div>
                 <div class="input-field col s12">
                   <?php echo $this->Form->textarea('PLAN_TWO_S',['label'=>'','placeholder'=>'Seguimiento plan de respuesta 02','class'=>'materialize-textarea','required']);?>
                 </div>
               </div>
               <div class="row">
                 <div class="input-field col s12">
                   <?php echo $this->Form->textarea('PLAN_THREE_S',['label'=>'','placeholder'=>'Seguimiento plan de respuesta 03','class'=>'materialize-textarea','required']);?>
                 </div>
                 <div class="input-field col s12">
                   <?php echo $this->Form->textarea('PLAN_FOUR_S',['label'=>'','placeholder'=>'Seguimiento plan de respuesta 04','class'=>'materialize-textarea','required']);?>
                 </div>
               </div>
               <div class="row">
                 <div class="input-field col s12">
                   <?php echo $this->Form->textarea('PLAN_FIVE_S',['label'=>'','placeholder'=>'Seguimiento plan de respuesta 05','class'=>'materialize-textarea','required']);?>
                 </div>
               </div>
               <div class="row">
                 <div class="input-field col s6">
                   <?php echo $this->Form->input('TOTAL_RISK',['label'=>'Calificación ponderada','placeholder'=>'Calificación ponderada','class'=>'validate','required']);?>
                 </div>
                 <div class="input-field col s6">
                   <?php echo $this->Form->input(
                     'PROJECT_CODE',
                     [
                       'label' => 'Proyecto',
                       'type' => 'select',
                       'multiple' => false,
                       'options' => $projects
                     ]
                   );?>
               </div>
               </fieldset>
               <div class="btns mb-2">
                   <!-- <a href="http://localhost/web/pages/home" class="btn waves-effect btn-depressed">Crear</a> -->
                   <?= $this->Form->button(__('Editar'),['class'=>'btn waves-effect btn-depressed'])?>
               </div>
                <?= $this->Form->end() ?>
           </div>
        </div>
    </div>
</div>
