<?php
    // Breadcrumb
    $breadcrumb = [
        [ 'Inicio', 'home','Pages','PortalProjects'],
        [ 'Lista de riesgos','index','Risks'],
    ];
?>
<?= $this->Html->css('login')?>
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
          <?php echo $this->Html->link('Editar Proyecto '.$risks->RISK_NAME,
            ['controller'=>'Risks', 'action'=>'edit',$risks->id],
            ['escape' => false,'class'=>'breadcrumb']
          );?>
      </div>
        <div class="form-content">
                 <?= $this->Form->create($risks,['class'=>'col s12']) ?>
                 <div class="form-content">
                   <div id="login-page" class="row">
                   <div class="col s12 m6 offset-m3 l4 offset-l4 z-depth-6 ">
                     <h5 class"centered">Editar riesgo de proyecto</h5>
                     <fieldset>
                      <div class="row">
                        <div class="input-field col s6">
                          <?php echo $this->Form->input('RISK_NUMBER',['label'=>'Riesgo','placeholder'=>'Riesgo','class'=>'validate','required']);?>
                        </div>
                        <div class="input-field col s6">
                          <?php echo $this->Form->input('RISK_NAME',['label'=>'Nombre','placeholder'=>'Nombre','class'=>'validate','required']);?>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s6">
                           <?php echo $this->Form->input('PROBABILITY',['label'=>'Probabilidad','options'=>['1'=>'Muy baja','2'=>'Baja','3'=>'Media','4'=>'Alta','5'=>'Muy alta']]);?>
                          <!-- <?//php echo $this->Form->input('PROBABILITY',['label'=>'','placeholder'=>'Probabilidad','class'=>'validate','required']);?> -->
                        </div>
                        <div class="input-field col s6">
                          <?php echo $this->Form->input('IMPACT',['label'=>'Impacto','options'=>['1'=>'Muy bajo','2'=>'Bajo','3'=>'Medio','4'=>'Alto','5'=>'Muy alto']]);?>
                          <!-- <?//php echo $this->Form->input('IMPACT',['label'=>'','placeholder'=>'Impacto','class'=>'validate','required']);?> -->
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <?php echo $this->Form->input('IMPACT_RISK',['label'=>'Impacto del riesgo','placeholder'=>'Impacto del riesgo','class'=>'validate','required']);?>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <?php echo $this->Form->textarea('PLAN_ONE',['label'=>'Plan de respuesta 01','placeholder'=>'Plan de respuesta 01','class'=>'materialize-textarea','required']);?>
                        </div>
                        <div class="input-field col s12">
                          <?php echo $this->Form->textarea('PLAN_TWO',['label'=>'Plan de respuesta 02','placeholder'=>'Plan de respuesta 02','class'=>'materialize-textarea','required']);?>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <?php echo $this->Form->textarea('PLAN_THREE',['label'=>'Plan de respuesta 03','placeholder'=>'Plan de respuesta 03','class'=>'materialize-textarea','required']);?>
                        </div>
                        <div class="input-field col s12">
                          <?php echo $this->Form->textarea('PLAN_FOUR',['label'=>'Plan de respuesta 04','placeholder'=>'Plan de respuesta 04','class'=>'materialize-textarea','required']);?>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <?php echo $this->Form->textarea('PLAN_FIVE',['label'=>'Plan de respuesta 05','placeholder'=>'Plan de respuesta 05','class'=>'materialize-textarea','required']);?>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <?php echo $this->Form->input('RISK_QUALIFICATION',['label'=>'Calificación del riesgo','placeholder'=>'Calificación del riesgo','class'=>'validate','required']);?>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <?php echo $this->Form->textarea('PLAN_ONE_S',['label'=>'Seguimiento al plan de respuesta 01','placeholder'=>'Seguimiento plan de respuesta 01','class'=>'materialize-textarea','required']);?>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <?php echo $this->Form->textarea('PLAN_TWO_S',['label'=>'Seguimiento al plan de respuesta 02','placeholder'=>'Seguimiento plan de respuesta 02','class'=>'materialize-textarea','required']);?>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <?php echo $this->Form->textarea('PLAN_THREE_S',['label'=>'Seguimiento al plan de respuesta 03','placeholder'=>'Seguimiento plan de respuesta 03','class'=>'materialize-textarea','required']);?>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <?php echo $this->Form->textarea('PLAN_FOUR_S',['label'=>'Seguimiento al plan de respuesta 04','placeholder'=>'Seguimiento plan de respuesta 04','class'=>'materialize-textarea','required']);?>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <?php echo $this->Form->textarea('PLAN_FIVE_S',['label'=>'Seguimiento al plan de respuesta 05','placeholder'=>'Seguimiento plan de respuesta 05','class'=>'materialize-textarea','required']);?>
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
