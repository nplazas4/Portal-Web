<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<?= $this->Html->css('login')?>
<div class="row">
   <!-- <form class="col s12"> -->
   <?= $this->Form->create($projects,['class'=>'col s12']) ?>
    <fieldset>
     <div class="row">
       <div class="input-field col s6">
         <?php echo $this->Form->input('ID_PROJECT',['label'=>'','placeholder'=>'ID','class'=>'validate','required']);?>
       </div>
       <div class="input-field col s6">
         <?php echo $this->Form->input('PROJECT_NAME',['label'=>'','placeholder'=>'Nombre','class'=>'validate','required']);?>
       </div>
     </div>
     <div class="row">
       <div class="input-field col s12">
         <?php echo $this->Form->textarea('DESCRIPTION',['label'=>'','placeholder'=>'Descripción','class'=>'materialize-textarea','required']);?>
       </div>
     </div>
     <div class="row">
       <div class="input-field col s6">
         <?php echo $this->Form->input('PLANNED_START_DATE',['label'=>'','placeholder'=>'Inicio planificado','type'=>'text','class'=>'datepicker']);?>
       </div>
       <div class="input-field col s6">
        <?php echo $this->Form->input('PLANNED_FINISH_DATE',['label'=>'','placeholder'=>'Inicio planificado','type'=>'text','class'=>'datepicker2']);?>
       </div>
     </div>
     <div class="row">
       <div class="input-field col s12">
         <?php echo $this->Form->input('SPI',['label'=>'','placeholder'=>'SPI','class'=>'validate','required']);?>
       </div>
     </div>
     <div class="row">
       <div class="input-field col s6">
         <?php echo $this->Form->input('EXECUTED',['label'=>'','placeholder'=>'Ejecutado','class'=>'validate','required']);?>
       </div>
       <div class="input-field col s6">
         <?php echo $this->Form->input('PLANNED',['label'=>'','placeholder'=>'Planeado','class'=>'validate','required']);?>
       </div>
     </div>
     <div class="row">
       <div class="input-field col s12">
         <?php echo $this->Form->input('ACPU',['label'=>'','placeholder'=>'AC / PV','class'=>'validate','required']);?>
       </div>
     </div>
     <div class="row">
       <div class="input-field col s6">
         <?php echo $this->Form->input('CAPEX_PLANNED',['label'=>'','placeholder'=>'CAPEX Planeado','class'=>'validate','required']);?>
       </div>
       <div class="input-field col s6">
         <?php echo $this->Form->input('CAPEX_EXECUTED',['label'=>'','placeholder'=>'CAPEX Ejecutado','class'=>'validate','required']);?>
       </div>
     </div>
     <div class="row">
       <div class="input-field col s6">
         <?php echo $this->Form->input('REGIONAL',['label'=>'','placeholder'=>'Regional','class'=>'validate','required']);?>
       </div>
       <div class="input-field col s12">
         <?php echo $this->Form->input('EPS_OBJECT_ID',['label'=>'EPS','type'=>'select','multiple'=>true,'class'=>'validate','required']);?>
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

 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
 <script>
  var Calendar = document.querySelector('.datepicker');
  M.Datepicker.init(Calendar,{
    format:'yyyy-mm-dd',
    // setDefaultDate: new Date(2019,2,27),
    // firstDay:1,
    // minDate: new Date(2018,12,1),
    // maxDate: new Date(2019,11,31),
    showClearBtn:true,
    i18n:{
      clear:'borrar',
      done:'Aceptar',
      cancel:'cancelar',
      months:['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
      monthsShort:['Ene','Feb','Mar','Abr','Mayo','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
      weekdays:['Domingo','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado'],
      weekdaysShort:['Dom','Lun','Mar','Miér','Jue','Vie.','Sáb'],
      weekdaysAbbrev:['D','L','M','M','J','V','S']
    }
  });
  var Calendar = document.querySelector('.datepicker2');
  M.Datepicker.init(Calendar,{
    format:'yyyy-mm-dd',
    // setDefaultDate: new Date(2019,2,27),
    // firstDay:1,
    // minDate: new Date(2018,12,1),
    // maxDate: new Date(2019,11,31),
    showClearBtn:true,
    i18n:{
      clear:'borrar',
      done:'Aceptar',
      cancel:'cancelar',
      months:['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
      monthsShort:['Ene','Feb','Mar','Abr','Mayo','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
      weekdays:['Domingo','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado'],
      weekdaysShort:['Dom','Lun','Mar','Miér','Jue','Vie.','Sáb'],
      weekdaysAbbrev:['D','L','M','M','J','V','S']
    }
  });
 </script>
 <!-- <script>
  var Calendar = document.querySelector('.datepicker2');
  M.Datepicker.init(Calendar,{});
 </script> -->
