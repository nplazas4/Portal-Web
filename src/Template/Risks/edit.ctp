<?php
    // Breadcrumb
    $breadcrumb = [
        [ 'Inicio', 'home','Pages','PortalProjects'],
        [ 'Riesgos de Proyectos','index','Risks'],
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
          <?php echo $this->Html->link('Editar riesgo '.$risks->RISK_NAME,
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
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <?php echo $this->Form->textarea('RISK_NAME',['label'=>'Nombre','placeholder'=>'Nombre','class'=>'materialize-textarea','required']);?>
                        </div>
                      </div>
                      <h6 class"centered">Valoración inicial</h6>
                      <div class="row">
                        <div class="input-field col s6">
                           <?php echo $this->Form->input('PROBABILITY',['label'=>'Probabilidad','id'=>'probability-risk','options'=>['1'=>'Muy baja','2'=>'Baja','3'=>'Media','4'=>'Alta','5'=>'Muy alta']]);?>
                        </div>
                        <div class="input-field col s6">
                          <?php echo $this->Form->input('IMPACT',['label'=>'Impacto','id'=>'impact-risk','options'=>['1'=>'Muy bajo','2'=>'Bajo','3'=>'Medio','4'=>'Alto','5'=>'Muy alto'], ]);?>
                        </div>
                      </div>
                      <h6 class"centered">Valoración post-control</h6>
                      <div class="row">
                        <div class="input-field col s6">
                           <?php echo $this->Form->input('PROBABILITY_POST',['label'=>'Probabilidad','id'=>'probability-risk','options'=>['1'=>'Muy baja','2'=>'Baja','3'=>'Media','4'=>'Alta','5'=>'Muy alta']]);?>
                        </div>
                        <div class="input-field col s6">
                          <?php echo $this->Form->input('IMPACT_POST',['label'=>'Impacto','id'=>'impact-risk','options'=>['1'=>'Muy bajo','2'=>'Bajo','3'=>'Medio','4'=>'Alto','5'=>'Muy alto'], ]);?>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
<<<<<<< HEAD
                          <?php echo $this->Form->input('IMPACT_RISK',['label'=>'Impacto del riesgo','id'=>'impact-result-risk','placeholder'=>'Impacto del riesgo','class'=>'validate','required']);?>
=======
                          <?php echo $this->Form->input('IMPACT_RISK',['label'=>'','placeholder'=>'Impacto del riesgo','class'=>'validate','id'=>'impact-result-risk','required']);?>
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <?php echo $this->Form->textarea('PLAN_ONE',['label'=>'Plan de respuesta 01','placeholder'=>'Plan de respuesta 01','class'=>'materialize-textarea','required']);?>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <?php echo $this->Form->textarea('PLAN_TWO',['label'=>'Plan de respuesta 02','placeholder'=>'Plan de respuesta 02','class'=>'materialize-textarea','required']);?>
                        </div>
                      </div>
                      <div class="row">
                      <div class="input-field col s12">
                        <?php echo $this->Form->textarea('PLAN_THREE',['label'=>'Plan de respuesta 03','placeholder'=>'Plan de respuesta 03','class'=>'materialize-textarea','required']);?>
                      </div>
                    </div>
                      <div class="row">
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
                          <?php echo $this->Form->input('ACTION_STATE',['label'=>'Estado de las acciones','options'=>['fase'=>'N/A En esta fase','ejecucion'=>'En ejecución','pendiente'=>'Pendiente','finalizado'=>'Finalizado']]);?>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <?php echo $this->Form->input('MATERIALIZACION',['label'=>'Materialización de riesgo','options'=>['abierto'=>'Abierto','cerrado'=>'Cerrado','materializado'=>'Materializado']]);?>
                        </div>
                      </div>
                      <div class="row">
                        <!-- <div class="input-field col s6">
                          </?php echo $this->Form->input('TOTAL_RISK',['label'=>'Calificación ponderada','placeholder'=>'Calificación ponderada','class'=>'validate','required']);?>
                        </div> -->
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
                      <?php echo $this->Form->input('IGR_DATE',['type'=>'hidden','value'=>date("Y-m-d")]);?>
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
        <script>
          $(document).ready(function(){
            var impact_value = $('#impact-risk').children(":selected").attr("value");;
            var probability_value = $('#probability-risk').children(":selected").attr("value");;
            impact_result();
            $('#impact-risk').change(function() {
              impact_value = $(this).children(":selected").attr("value");
              impact_result();
            });
            $('#probability-risk').change(function() {
              probability_value = $(this).children(":selected").attr("value");
              impact_result();
            });
            function impact_result(){
              $('#impact-result-risk').val(parseInt(impact_value) * parseInt(probability_value));
            }
          });
        </script>
