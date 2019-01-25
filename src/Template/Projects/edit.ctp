<?php
    // Breadcrumb
    $breadcrumb = [
        [ 'Inicio', 'home','Pages','PortalProjects'],
        [ 'Proyectos','index','Projects'],
    ];
?>
<?= $this->Html->css('login')?>
<?= $this->Html->css('error')?>
<div class="section bcrumb company">
    <div class="breadcrumb-container">
        <?php foreach ($breadcrumb as $item): ?>
            <!-- <a href="<?= $item[1] ?>" class="breadcrumb"><?= $item[0] ?></a> -->
            <?php echo $this->Html->link($item[0],
              ['controller'=>$item[2], 'action'=>$item[1]],
              ['escape' => false,'class'=>'breadcrumb']
            );?>
        <?php endforeach; ?>
        <?php echo $this->Html->link('Editar Proyecto '.$projects->PROJECT_NAME,
          ['controller'=>'Projects', 'action'=>'edit',$projects->id],
          ['escape' => false,'class'=>'breadcrumb']
        );?>
    </div>
    <div class="section home">
        <div class="home-menu">
          <!-- <div class="row"> -->
          <div class="row">
            <h5>Editar proyecto</h5>
            <br/>
             <!-- <form class="col s12"> -->
             <?= $this->Form->create($projects,['novalidate']) ?>
              <fieldset>
                <div class="alert" style=<?= $error ?>>
                  <span class="closebtn">&times;</span>
                  No se ha podido editar el proyecto.
                </div>
               <div class="row">
                 <div class="input-field col s6">
                   <?php echo $this->Form->input('ID_PROJECT',['label'=>'ID','placeholder'=>'ID','class'=>'validate','required']);?>
                 </div>
                 <div class="input-field col s6">
                   <?php echo $this->Form->input('PROJECT_NAME',['label'=>'Nombre','placeholder'=>'Nombre','class'=>'validate','required']);?>
                 </div>
               </div>
               <div class="row">
                 <div class="input-field col s12">
                   <?php echo $this->Form->textarea('DESCRIPTION',['label'=>'Descripción','placeholder'=>'Descripción','class'=>'materialize-textarea','required']);?>
                 </div>
               </div>
               <div class="row">
                 <div class="input-field col s6">
                   <?php echo $this->Form->input('PLANNED',['label'=>'Planeado','placeholder'=>'Planeado','class'=>'validate','required']);?>
                 </div>
                 <div class="input-field col s6">
                   <?php echo $this->Form->input('EXECUTED',['label'=>'Ejecutado','placeholder'=>'Ejecutado','class'=>'validate','required']);?>
                 </div>
               </div>
               <div class="row">
                 <div class="input-field col s6">
                   <?php echo $this->Form->input('AC',['label'=>'AC','placeholder'=>'AC','class'=>'validate','required']);?>
                 </div>
                 <div class="input-field col s6">
                   <?php echo $this->Form->input('PV',['label'=>'PV','placeholder'=>'PV','class'=>'validate','required']);?>
                 </div>
               </div>
               <div class="row">
                 <div class="input-field col s6">
                   <?php echo $this->Form->input('CAPEX_PLANNED',['label'=>'CAPEX Planeado','placeholder'=>'CAPEX Planeado','class'=>'validate','required']);?>
                 </div>
                 <div class="input-field col s6">
                   <?php echo $this->Form->input('CAPEX_EXECUTED',['label'=>'CAPEX Ejecutado','placeholder'=>'CAPEX Ejecutado','class'=>'validate','required']);?>
                 </div>
               </div>
               <div class="row">
                 <div class="input-field col s6">
                   <?php echo $this->Form->input('FASE',['label'=>'Fase','placeholder'=>'Fase','class'=>'validate','required']);?>
                 </div>
                 <div class="input-field col s6">
                   <?php echo $this->Form->input('REGIONAL',['label'=>'Regional','options'=>['norte'=>'Norte','sur'=>'Sur','centro'=>'Centro','occidente'=>'Occidente']]);?>
                 </div>
               </div>
               <div class="row">
                 <div class="input-field col s12">
                   <?php echo $this->Form->textarea('ALCANCE',['label'=>'Alcance','placeholder'=>'Alcance','class'=>'materialize-textarea','required']);?>
                 </div>
               </div>
               <div class="row">
                 <div class="input-field col s12">
                   <?php echo $this->Form->textarea('SOLICITUD',['label'=>'Solicitud','placeholder'=>'Solicitud','class'=>'materialize-textarea','required']);?>
                 </div>
               </div>
               <div class="row">
                 <div class="input-field col s6">
                   <?php echo $this->Form->input('DISTANCIA',['label'=>'Distancia','placeholder'=>'Distancia','class'=>'validate','required']);?>
                 </div>
                 <div class="input-field col s6">
                   <?php echo $this->Form->input('LINEA_TRANS',['label'=>'Líneas de transmisión','placeholder'=>'Líneas de transmisión','class'=>'validate','required']);?>
                 </div>
               </div>
               <!-- <div class="row">
                 <div class="input-field col s6">
                   <?//php echo $this->Form->input('FOPO',['label'=>'','placeholder'=>'FoPo','type'=>'text','class'=>'datepicker']);?>
                 </div>
                 <div class="input-field col s6">
                  <?//php echo $this->Form->input('FEPO',['label'=>'','placeholder'=>'FePo','type'=>'text','class'=>'datepicker2']);?>
                 </div>
               </div>
               <div class="row">
                 <div class="input-field col s6">
                   <?//php echo $this->Form->input('ADJUDICACION',['label'=>'','placeholder'=>'Adjudicación','type'=>'text','class'=>'datepicker3']);?>
                 </div>
                 <div class="input-field col s6">
                  <?//php echo $this->Form->input('APROBACION',['label'=>'','placeholder'=>'Aprobación','type'=>'text','class'=>'datepicker4']);?>
                 </div>
               </div> -->
               <div class="row">
                 <div class="input-field col s6">
                   <?php echo $this->Form->input('TORRE',['label'=>'Torres','placeholder'=>'Torres','class'=>'validate','required']);?>
                 </div>
                 <div class="input-field col s6">
                   <?php echo $this->Form->input('NUM_SUBESTACION',['label'=>'Número de subestaciones','placeholder'=>'Número de subestaciones','class'=>'validate','required']);?>
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
  var Calendar = document.querySelector('.datepicker3');
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
  var Calendar = document.querySelector('.datepicker4');
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
