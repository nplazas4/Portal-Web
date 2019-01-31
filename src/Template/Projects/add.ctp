<?php
    // Breadcrumb
    $breadcrumb = [
        [ 'Inicio', 'home','Pages','PortalProjects'],
        [ 'Proyectos','index','Projects'],
        [ 'Crear Proyecto','add','Projects'],
    ];
?>
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
  </div>
  <div class="form-content">
           <?= $this->Form->create($projects,['class'=>'col s12']) ?>
           <div class="form-content">
             <div id="login-page" class="row">
             <div class="col s12 m6 offset-m3 l4 offset-l4 z-depth-6 ">
               <fieldset>
                 <div class="alert" style=<?= $error ?>>
                   <span class="closebtn">&times;</span>
                   No se ha podido crear el proyecto.
                 </div>
                 <h5 class"centered">Crear proyecto</h5>
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
                    <?php echo $this->Form->input('PLANNED',['label'=>'','placeholder'=>'Planeado','class'=>'validate','required']);?>
                  </div>
                  <div class="input-field col s6">
                    <?php echo $this->Form->input('EXECUTED',['label'=>'','placeholder'=>'Ejecutado','class'=>'validate','required']);?>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s6">
                    <?php echo $this->Form->input('AC',['label'=>'','placeholder'=>'AC','class'=>'validate','required']);?>
                  </div>
                  <div class="input-field col s6">
                    <?php echo $this->Form->input('PV',['label'=>'','placeholder'=>'PV','class'=>'validate','required']);?>
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
                    <?php echo $this->Form->input('FASE',['label'=>'','placeholder'=>'Fase','class'=>'validate','required']);?>
                  </div>
                  <div class="input-field col s6">
                    <?php echo $this->Form->input('REGIONAL',['label'=>'','options'=>['norte'=>'Norte','sur'=>'Sur','centro'=>'Centro','occidente'=>'Occidente']]);?>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <?php echo $this->Form->textarea('ALCANCE',['label'=>'','placeholder'=>'Alcance','class'=>'materialize-textarea','required']);?>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <?php echo $this->Form->textarea('SOLICITUD',['label'=>'','placeholder'=>'Solicitud','class'=>'materialize-textarea','required']);?>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s6">
                    <?php echo $this->Form->input('DISTANCIA',['label'=>'','placeholder'=>'Distancia','class'=>'validate','required']);?>
                  </div>
                  <div class="input-field col s6">
                    <?php echo $this->Form->input('LINEA_TRANS',['label'=>'','placeholder'=>'Líneas de transmisión','class'=>'validate','required']);?>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s6">
                    <?php echo $this->Form->input('FOPO',['label'=>'','placeholder'=>'FoPo','type'=>'text','class'=>'datepicker']);?>
                  </div>
                  <div class="input-field col s6">
                   <?php echo $this->Form->input('FEPO',['label'=>'','placeholder'=>'FePo','type'=>'text','class'=>'datepicker2']);?>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s6">
                    <?php echo $this->Form->input('ADJUDICACION',['label'=>'','placeholder'=>'Adjudicación','type'=>'text','class'=>'datepicker3']);?>
                  </div>
                  <div class="input-field col s6">
                   <?php echo $this->Form->input('APROBACION',['label'=>'','placeholder'=>'Aprobación','type'=>'text','class'=>'datepicker4']);?>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s6">
                    <?php echo $this->Form->input('TORRE',['label'=>'','placeholder'=>'Torres','class'=>'validate','required']);?>
                  </div>
                  <div class="input-field col s6">
                    <?php echo $this->Form->input('NUM_SUBESTACION',['label'=>'','placeholder'=>'No. De subestaciones','class'=>'validate','required']);?>
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
  </div>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
 <script>
  var Calendar = document.querySelector('.datepicker');
  M.Datepicker.init(Calendar,{
    format:'yyyy-mm-dd',
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
  var Calendar = document.querySelector('.datepicker3');
  M.Datepicker.init(Calendar,{
    format:'yyyy-mm-dd',
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
  var Calendar = document.querySelector('.datepicker4');
  M.Datepicker.init(Calendar,{
    format:'yyyy-mm-dd',
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
 <script>
 var close = document.getElementsByClassName("closebtn");
 var i;

 for (i = 0; i < close.length; i++) {
   close[i].onclick = function(){
     var div = this.parentElement;
     div.style.opacity = "0";
     setTimeout(function(){ div.style.display = "none"; }, 600);
   }
 }
 </script>
