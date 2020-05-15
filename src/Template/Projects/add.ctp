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
  <script>
  var csrfToken = <?= json_encode($this->request->getParam('_csrfToken')) ?>;
  </script>
  <script>
  var xhr = null;
  $(document).ready(function() {
      $('.work-select').change(function() {
        var id = $(this).children(":selected").attr("id");
<<<<<<< HEAD
        var idString = id; /* Almacena la id del option select*/
=======
        var idString = id; /* STORE THAT TO A DATA STRING */
        event.preventDefault();
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
          var xhr = $.ajax({
              headers:{
                'X-CSRF-Token':csrfToken
              },
              method: "POST",
              url: "http://localhost/Portal-Web/projects/edit/<?php echo $projects->id; ?>",
              complete: function(){
                if (idString == "option-gas") {
                  $('#id-row-torre-sub').hide();
                  $("#input-subestaciones").attr("disabled", true);
                  $("#input-torres").attr("disabled", true);
                  $("#label-corte").text("Fecha SPI");
                  $("#input-corte").attr("placeholder", "Fecha SPI");
                  $("#label-distancia").text("Gasoducto");
                  $("#input-distancia").attr("placeholder", "Gasoducto");
                  $("#label-linea").text("Estaciones ESG");
                  $("#input-linea").attr("placeholder", "Estaciones ESG");
                  $('#div-regional').hide();
                  $("#div-regional *").attr("disabled", "disabled").off('click');
                  $('#div-distrito').show();
                  $("#div-distrito *").attr("disabled", false).off('click');
                }
                else {
                  $('#id-row-torre-sub').show();
                  $("#input-subestaciones").attr("disabled", false);
                  $("#input-torres").attr("disabled", false);
                  $("#label-corte").text("Fecha de corte");
                  $("#input-corte").attr("placeholder", "Fecha de corte");
                  $("#label-distancia").text("Longitud");
                  $("#input-distancia").attr("placeholder", "Longitud");
                  $("#label-linea").text("Líneas de transmisión");
                  $("#input-linea").attr("placeholder", "Líneas de transmisión");
                  $('#div-regional').show();
                  $("#div-regional *").attr("disabled", false).off('click');
                  $('#div-distrito').hide();
                  $("#div-distrito *").attr("disabled", "disabled").off('click');
                }
              }
          });
      });
  });
  xhr.abort();
  </script>
  <div class="form-content">
          <div class="chart">
            <select id="select-work" class="work-select">
               <option class="work-option" id="option-elect">Electricidad</option>
               <option class="work-option" id="option-gas">Gas</option>
            </select>
          </div>
           <?= $this->Form->create($projects,['class'=>'col s12','type' => 'file']) ?>
           <div class="form-content">
             <div id="login-page" class="row">
             <div class="col s12 m6 offset-m3 l4 offset-l4 z-depth-6 ">
               <fieldset>
                 <h5 class"centered">Crear proyecto</h5>
                 <div class="row">
                   <div class="input-field col s6">
                     <div class="input text">
                     <label for="id" class="active">ID</label>
                     <?php echo $this->Form->input('ID_PROJECT',['id'=>'id','placeholder'=>'ID','class'=>'validate','required','div' => false, 'label' => false]);?>
                   </div>
                   </div>
                   <div class="input-field col s12">
                     <?php echo $this->Form->input('PROJECT_NAME',['label'=>'Nombre','placeholder'=>'Nombre','class'=>'validate','required']);?>
                   </div>
                 </div>
                 <div class="row">
                   <div class="input-field col s12">
                     <label class="active">Objetivo estratégico</label>
                     <?php echo $this->Form->textarea('Proj_Obj',['label'=>'Objetivo estratégico','placeholder'=>'Objetivo estratégico','class'=>'materialize-textarea','required']);?>
                   </div>
                 </div>
                 <div class="row">
                   <div class="input-field col s12">
                     <label class="active">Información general</label>
                     <?php echo $this->Form->textarea('DESCRIPTION',['placeholder'=>'Información general','class'=>'materialize-textarea','required']);?>
                   </div>
                 </div>
                 <div class="row">
                   <div class="input-field col s6">
                     <?php echo $this->Form->input('PLANNED',['label'=>'Planeado','placeholder'=>'Planeado','class'=>'validate','value' => '0','required']);?>
                   </div>
                   <div class="input-field col s6">
                     <?php echo $this->Form->input('EXECUTED',['label'=>'Ejecutado','placeholder'=>'Ejecutado','class'=>'validate','value' => '0','required']);?>
                   </div>
                 </div>
                 <div class="row">
                   <div class="input-field col s6">
                     <?php echo $this->Form->input('AC',['label'=>'AC','placeholder'=>'AC','class'=>'validate','value' => '0','required']);?>
                   </div>
                   <div class="input-field col s6">
                     <?php echo $this->Form->input('PV',['label'=>'PV anual','placeholder'=>'PV','class'=>'validate','value' => '0','required']);?>
                   </div>
                 </div>
                 <div class="row">
                   <div class="input-field col s6">
                     <?php echo $this->Form->input('CAPEX_PLANNED',['label'=>'Presupuesto planeado','placeholder'=>'Presupuesto planeado','value' => '0','class'=>'validate','required']);?>
                   </div>
                   <div class="input-field col s6">
                     <?php echo $this->Form->input('CAPEX_EXECUTED',['label'=>'Presupuesto ejecutado','placeholder'=>'Presupuesto ejecutado','class'=>'validate','value' => '0','required']);?>
                   </div>
                 </div>
                 <div class="row">
                   <div class="input-field col s6">
                     <?php echo $this->Form->input('FASE',['label'=>'Fase','options'=>['1'=>'I','2'=>'II','3'=>'III','4'=>'IV','5'=>'V']]);?>
                   </div>
                   <div class="input-field col s6" id="div-regional">
                     <?php echo $this->Form->input('REGIONAL',['label'=>'Regional / Distrito','id'=>'input-regional','options'=>['norte'=>'Norte','sur'=>'Sur','centro'=>'Centro','occidente'=>'Occidente']]);?>
                   </div>
                   <div class="input-field col s6" id="div-distrito" style="display:none">
                     <?php echo $this->Form->input('REGIONAL',['label'=>'Regional / Distrito','id'=>'input-distrito','disabled','options'=>['DI'=>'DI-Co Barrancabermeja','DII'=>'DII-Co Gualanday','DIII'=>'DIII-Co Sabala',
                     'DIV'=>'DIV-Co Villavicencio','DV'=>'DV-Co Paipa','DVI'=>'DVI-Co Valledupar','DVII'=>'DVII-Co Manizales','DVIII'=>'DVIII-Co Buga','DIX'=>'DIX-Co']]);?>
                   </div>
                 </div>
                 <div class="row">
                   <div class="input-field col s12">
                     <label class="active">Alcance</label>
                     <?php echo $this->Form->textarea('ALCANCE',['label'=>'Alcance','placeholder'=>'Alcance','class'=>'materialize-textarea','required']);?>
                   </div>
                 </div>
                 <div class="row">
                   <div class="input-field col s12">
                     <label class="active">Solicitud</label>
                     <?php echo $this->Form->textarea('SOLICITUD',['label'=>'Solicitud','placeholder'=>'Solicitud','class'=>'materialize-textarea','required']);?>
                   </div>
                 </div>
                 <div class="row">
                   <div class="input-field col s6">
                     <div class="input text">
                       <label for="distancia" id="label-distancia" class="active">Longitud</label>
                       <?php echo $this->Form->input('DISTANCIA',['placeholder'=>'Longitud','id'=>'input-distancia','class'=>'validate','required','value' => '0','div' => false, 'label' => false]);?>
                   </div>
                   </div>
                   <div class="input-field col s6">
                   <div class="input text">
                     <label for="linea-trans" id="label-linea" class="active">Líneas de transmisión</label>
                     <?php echo $this->Form->input('LINEA_TRANS',['placeholder'=>'Líneas de transmisión','id'=>'input-linea','class'=>'validate','required','value' => '0','div' => false, 'label' => false]);?>
                   </div>
                   </div>
                 </div>
                 <div class="row">
                   <div class="input-field col s6">
                     <?php echo $this->Form->input('FOPO',['label'=>'FOPO','placeholder'=>'FoPo','type'=>'text','class'=>'datepicker','required','readonly'=>'readonly']);?>
                   </div>
                   <div class="input-field col s6">
                    <?php echo $this->Form->input('FEPO',['label'=>'FEPO','placeholder'=>'FePo','type'=>'text','class'=>'datepicker2','required','readonly'=>'readonly']);?>
                   </div>
                 </div>
                 <div class="row">
                   <div class="input-field col s6">
                     <?php echo $this->Form->input('ADJUDICACION',['label'=>'Adjudicación','placeholder'=>'Adjudicación','type'=>'text','class'=>'datepicker3','readonly'=>'readonly']);?>
                   </div>
                   <div class="input-field col s6">
                   <div class="input text">
                     <label for="distancia" id="label-corte" class="active">Fecha de corte</label>
                     <?php echo $this->Form->input('APROBACION',['placeholder'=>'Aprobación','id' => 'input-corte','type'=>'text','class'=>'datepicker4','required','readonly'=>'readonly','div' => false, 'label' => false]);?>
                   </div>
                 </div>
                 </div>
                 <div class="row">
                   <div class="input-field col s6">
                     <?php echo $this->Form->input('IGR_DATE',['label'=>'Fecha IGR','placeholder'=>'Fecha IGR','type'=>'text','class'=>'datepicker5','readonly'=>'readonly']);?>
                   </div>
                   <div class="input-field col s6">
                     <?php echo $this->Form->input('CPI_DATE',['label'=>'Fecha CPI','placeholder'=>'Fecha CPI','type'=>'text','class'=>'datepicker6','readonly'=>'readonly']);?>
                   </div>
                 </div>
                 <div class="row" id="id-row-torre-sub">
                   <div class="input-field col s6">
                     <div class="input text">
                       <label for="torre" class="active" id="label-torres">Torres</label>
                         <?php echo $this->Form->input('TORRE',['placeholder'=>'Torres','id'=>'input-torres','class'=>'validate','value' => '0','required','div' => false, 'label' => false]);?>
                     </div>
                   </div>
                   <div class="input-field col s6">
                     <div class="input text">
                       <label for="distancia" class="active" id="label-subestaciones">No. De subestaciones</label>
                       <?php echo $this->Form->input('NUM_SUBESTACION',['placeholder'=>'No. De subestaciones','id' => 'input-subestaciones','class'=>'validate','required','value' => '0','div' => false, 'label' => false]);?>
                     </div>
                   </div>
                 </div>
                 <div class="row">
                   <div class="input-field col s6">
                     <?php echo $this->Form->input('CPI_ANUAL',['label'=>'CPI anual','placeholder'=>'CPI anual','class'=>'validate','value' => '0','required']);?>
                   </div>
                   <div class="input-field col s6">
<<<<<<< HEAD
                     <?php echo $this->Form->input('PV_TOTAL',['label'=>'PV Total','placeholder'=>'PV Total','class'=>'validate','value' => '0','required']);?>
=======
                     <?php echo $this->Form->input('AC_BAC',['label'=>'AC/BAC','placeholder'=>'AC/BAC','class'=>'validate','value' => '0','required']);?>
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
                   </div>
                 </div>
                 <div class="row">
                   <div class="input-field col s6">
                     <?php echo $this->Form->input('AC_PPTO',['label'=>'AC/PPTO','placeholder'=>'AC/PPTO','class'=>'validate','value' => '0','required']);?>
                   </div>
                   <div class="input-field col s6">
                     <?php echo $this->Form->input('PROJ_TOTAL_PRES',['label'=>'Presupuesto total','placeholder'=>'Presupuesto total','class'=>'validate','value' => '0','required']);?>
                   </div>
                 </div>
                 <div class="row">
                   <div class="input-field col s6">
                     <?php echo $this->Form->input('TOTAL_FORECAST',['label'=>'Forecast total','placeholder'=>'Forecast total','class'=>'validate','value' => '0','required']);?>
                   </div>
                   <div class="input-field col s6">
                     <?php echo $this->Form->input('PROJ_AC',['label'=>'AC anual','placeholder'=>'AC anual','class'=>'validate','value' => '0','required']);?>
                   </div>
                 </div>
                 <div class="row">
                   <div class="input-field col s6">
                     <?php echo $this->Form->input('PRES_PROJ',['label'=>'Presupuesto anual','placeholder'=>'Presupuesto anual','class'=>'validate','value' => '0','required']);?>
                   </div>
                   <div class="input-field col s6">
                     <?php echo $this->Form->input('FORECAST_PROJ',['label'=>'Forecast anual','placeholder'=>'Forecast anual','class'=>'validate','value' => '0','required']);?>
                   </div>
                 </div>
                 <div class="row">
                   <div class="input-field col s6">
                     <?php echo $this->Form->input('CATEGORY',['label'=>'Categoria','options'=>['sostenimiento'=>'Sostenimiento','crecimiento'=>'Crecimiento']]);?>
                   </div>
                   <div class="input-field col s6">
                     <?php echo $this->Form->input('IGR',['label'=>'IGR','placeholder'=>'Riesgo IGR','class'=>'validate','required']);?>
                   </div>
                 </div>
                 <div class="row">
                   <div class="input-field col s12">
                     <?php echo $this->Form->input(
                       'EPS_REL',
                       [
                         'label' => 'EPS',
                         'type' => 'select',
                         'multiple' => false,
                         'options' => $eps,
                         'empty' => false
                       ]
                     );?>
                   </div>
                 </div>
               <div class="row">
                 <div class="input-field col s12 file-field">
                   <div class="btn">
                     <span>Mapa</span>
                     <input type="file" accept="image/*" name="FOTO" id="foto">
                   </div>
                   <div class="file-path-wrapper">
                     <input class="file-path validate" type="text" value="<?=$projects->FOTO?>">
                   </div>
                 </div>
               </div>
               <div class="row">
                 <div class="input-field col s11 file-field">
                   <div class="btn">
                     <span><small>Curva TG</small></span>
                     <input type="file" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" name="CHART" id="chart">
                   </div>
                   <div class="file-path-wrapper">
                     <input class="file-path validate" type="text" value="<?=$projects->CHART?>">
                   </div>
                 </div>
                 <div class="row mt-5">
                     <?php echo $this->Html->link($this->Html->tag('i','file_download', array('class' => 'material-icons tooltipped','data-position'=>'dropdown','data-tooltip'=>'Descargar archivo')),
                     '/files/tg/Curva3G.xlsx',array('escape'=>false));?>
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
  var Calendar = document.querySelector('.datepicker5');
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
  var Calendar = document.querySelector('.datepicker6');
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
<<<<<<< HEAD
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
=======
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
 </script>
