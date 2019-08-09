<?php
    // Breadcrumb
    $breadcrumb = [
        [ 'Inicio', 'home','Pages','PortalProjects'],
        [ 'Lista de proyectos','index','Projects']
    ];
?>
<div class="section portal-projects">
    <div class="breadcrumb-container">
        <a href="javascript:history.back()" class="breadcrumb-back"><i class="material-icons">keyboard_arrow_left</i></a>
        <?php foreach ($breadcrumb as $item): ?>
            <?php echo $this->Html->link($item[0],
              ['controller'=>$item[2], 'action'=>$item[1]],
              ['escape' => false,'class'=>'breadcrumb']
            );?>
        <?php endforeach; ?>
        <?php echo $this->Html->link('Editar proyecto '.$projects->PROJECT_NAME,
          ['controller'=>'Projects', 'action'=>'edit',$projects->id],
          ['escape' => false,'class'=>'breadcrumb']
        );?>
    </div>
    <div class="section home">
        <div class="home-menu">
          <div class="container-contact100">
          <a href="Arriba:" class="btn-floating Scroll-button" style="margin-right:5%; margin-bottom:8%" id="next"><i class="material-icons">arrow_upward</i></a>
          <a href="Abajo:" class="btn-floating Scroll-button" style="margin-right:5%; margin-bottom:4%" id="return"><i class="material-icons">arrow_downward</i></a>
          <div class="wrap-contact100">
            <div class="contact100-form validate-form active" id="Form-1">
            <?= $this->Form->create($projects,['type' => 'file', 'class'=>'contact100-form']) ?>
            <span class="contact100-form-title">
              EDITAR PROYECTO
            </span>
            <span class="contact100-form-sub-title">
              INFORMACIÓN GENERAL
            </span>
            <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
              <span class="label-input100">Id</span>
              <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Número de identificación del proyecto" onclick="return false;">help_outline</i></span>
              <?php echo $this->Form->input('ID_PROJECT',['id'=>'id','placeholder'=>'Id','class'=>'validate','required','readonly'=>'readonly','div' => false, 'label' => false]);?>
              <span class="error-text">Validación</span>
            </div>
            <div class="wrap-input100 rs1-wrap-input100 validate-input">
              <span class="label-input100">Nombre</span>
              <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Nombre del proyecto" onclick="return false;">help_outline</i></span>
              <?php echo $this->Form->input('PROJECT_NAME',['label'=>'','placeholder'=>'Nombre','class'=>'validate','required']);?>
              <span class="error-text">Validación</span>
            </div>
            <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
              <span class="label-input100">Objetivo estratégico</span>
              <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Objeyivo estratégico" onclick="return false;">help_outline</i></span>
              <?php echo $this->Form->textarea('Proj_Obj',['placeholder'=>'Objetivo estratégico','class'=>'materialize-textarea','required']);?>
              <span class="error-text">Validación</span>
            </div>
            <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
              <span class="label-input100">Información general</span>
              <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Información general" onclick="return false;">help_outline</i></span>
              <?php echo $this->Form->textarea('DESCRIPTION',['placeholder'=>'Información general','class'=>'materialize-textarea','required']);?>
              <span class="error-text">Validación</span>
            </div>
            <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
              <span class="label-input100">Alcance</span>
              <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Alcance" onclick="return false;">help_outline</i></span>
              <?php echo $this->Form->textarea('ALCANCE',['label'=>'Alcance','placeholder'=>'Alcance','class'=>'materialize-textarea','required']);?>
              <span class="error-text">Validación</span>
            </div>
            <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
              <span class="label-input100">Regional / Distrito</span>
              <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Alcance" onclick="return false;">help_outline</i></span>
              <?php echo $this->Form->input('REGIONAL',['id'=>'input-regional','options'=>['Regional' => [
                'norte' => 'Norte',
                'sur' => 'Sur',
                'centro' => 'Centro',
                'occidente' => 'Occidente'
              ],
              'Distrito' => [
                'DI' => 'DI-Co Barrancabermeja',
                'DII' => 'DII-Co Gualanday',
                'DIII' => 'DIII-Co Sabala',
                'DIV' => 'DIV-Co Villavicencio',
                'DV' => 'DV-Co Paipa',
                'DVI' => 'DVI-Co Valledupar',
                'DVII' => 'DVII-Co Manizales',
                'DVIII' => 'DVIII-Co Buga',
                'DIX' => 'DIX-Co'
              ]],'div' => false, 'label' => false]);?>
              <span class="error-text">Validación</span>
            </div>
            <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
              <span class="label-input100">Fase</span>
              <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Descargar Excel">help_outline</i></span>
              <?php echo $this->Form->input('FASE',['label'=>'Fase','options'=>['1'=>'I','2'=>'II','3'=>'III','4'=>'IV','5'=>'V'],'div' => false, 'label' => false]);?>
              <span class="error-text">Validación</span>
            </div>
            <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
              <span class="label-input100">Controles de cambio / Solicitud</span>
              <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Descargar Excel">help_outline</i></span>
              <?php echo $this->Form->textarea('SOLICITUD',['placeholder'=>'Controles de cambio','class'=>'materialize-textarea','required']);?>
              <span class="error-text">Validación</span>
            </div>
            <div class="wrap-input100 rs1-wrap-input100 validate-input" id="parent-div-num-sub" data-validate = "Valid email is required: ex@abc.xyz">
              <span class="label-input100">No. De subestaciones</span>
              <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Descargar Excel">help_outline</i></span>
              <?php echo $this->Form->input('NUM_SUBESTACION',['placeholder'=>'No. De subestaciones','id' => 'input-subestaciones','onChange'=>'validarNumero(this);','class'=>'validate','required','div' => false, 'label' => false]);?>
              <!-- <span class="error-text">Validación</span> -->
            </div>
            <div class="wrap-input100 rs1-wrap-input100 validate-input" id="parent-div-igr-value" data-validate = "Valid email is required: ex@abc.xyz">
              <span class="label-input100">Valor IGR</span>
              <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Descargar Excel">help_outline</i></span>
              <?php echo $this->Form->input('IGR',['placeholder'=>'Riesgo IGR','id' => 'input-valor-igr','onChange'=>'validarNumero(this);','class'=>'validate','required','div' => false, 'label' => false]);?>
            </div>
          </div>
          <div class="contact100-form validate-form" id="Form-2">
          <span class="contact100-form-title">
            EDITAR PROYECTO
          </span>
          <span class="contact100-form-sub-title">
            FECHAS
          </span>
          <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <span class="label-input100">FOPO</span>
            <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Descargar Excel">help_outline</i></span>
            <?php echo $this->Form->input('FOPO',['placeholder'=>'FoPo','type'=>'text','class'=>'datepicker','required','readonly'=>'readonly','div' => false, 'label' => false]);?>
            <span class="error-text">Validación</span>
          </div>
          <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <span class="label-input100">FEPO</span>
            <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Descargar Excel">help_outline</i></span>
            <?php echo $this->Form->input('FEPO',['placeholder'=>'FePo','type'=>'text','class'=>'datepicker2','required','readonly'=>'readonly','div' => false, 'label' => false]);?>
            <span class="error-text">Validación</span>
          </div>
          <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <span class="label-input100">Fecha SPI / Corte</span>
            <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Descargar Excel">help_outline</i></span>
            <?php echo $this->Form->input('APROBACION',['placeholder'=>'SPI / Corte','id' => 'input-corte','type'=>'text','class'=>'datepicker4','required','readonly'=>'readonly','div' => false, 'label' => false]);?>
            <span class="error-text">Validación</span>
          </div>
          <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <span class="label-input100">Fecha CPI</span>
            <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Descargar Excel">help_outline</i></span>
            <?php echo $this->Form->input('CPI_DATE',['placeholder'=>'Fecha CPI','type'=>'text','class'=>'datepicker6','readonly'=>'readonly','div' => false, 'label' => false]);?>
            <span class="error-text">Validación</span>
          </div>
          <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <span class="label-input100">Fecha IGR</span>
            <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Descargar Excel">help_outline</i></span>
            <?php echo $this->Form->input('IGR_DATE',['placeholder'=>'Fecha IGR','type'=>'text','class'=>'datepicker5','readonly'=>'readonly','div' => false, 'label' => false]);?>
            <span class="error-text">Validación</span>
          </div>
          <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <span class="label-input100">Adjudicación</span>
            <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Descargar Excel">help_outline</i></span>
            <?php echo $this->Form->input('ADJUDICACION',['placeholder'=>'Adjudicación','type'=>'text','class'=>'datepicker3','readonly'=>'readonly','div' => false, 'label' => false]);?>
            <span class="error-text">Validación</span>
          </div>
          <span class="contact100-form-sub-title">
            SUBIR ARCHIVOS
            <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Descargar Excel">help_outline</i></span>
          </span>
          <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <div class="input-field col s12 file-field">
              <div class="btn">
                <span>Mapa</span>
                <input type="file" accept="image/*" name="FOTO" id="foto">
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" type="text" value="<?=$projects->FOTO?>">
                <span class="error-text">Validación</span>
              </div>
            </div>
          </div>
          <div class="wrap-input100 rs1-wrap-input100 row">
            <div class="input-field col s12 file-field">
              <div class="btn">
                <span><small>Curva TG</small></span>
                <input type="file" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" name="CHART" id="chart">
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" type="text" value="<?=$projects->CHART?>">
                <span class="error-text">Validación</span>
              </div>
            </div>
            <div class="row mt-6">
              <?php if ($projects->CHART != null):?>
                <?php echo $this->Html->link($this->Html->tag('i','file_download', array('class' => 'material-icons tooltipped','data-position'=>'dropdown','data-tooltip'=>'Descargar archivo')),
                '/files/tg/'.$projects->ID_PROJECT.'/'.$projects->CHART,array('escape'=>false));?>
              <?php else:?>
                <?php echo $this->Html->link($this->Html->tag('i','file_download', array('class' => 'material-icons tooltipped','data-position'=>'dropdown','data-tooltip'=>'Descargar archivo')),
                '/files/tg/Curva3G.xlsx',array('escape'=>false));?>
              <?php endif;?>
            </div>
          </div>
        </div>
        <div class="contact100-form validate-form" id="Form-3">
        <span class="contact100-form-title">
          EDITAR PROYECTO
        </span>
        <span class="contact100-form-sub-title">
          INDICADORES DE CRONOGRAMA
        </span>
        <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
          <span class="label-input100">Porcentaje de avance planeado</span>
          <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Descargar Excel">help_outline</i></span>
          <?php echo $this->Form->input('PLANNED',['placeholder'=>'Planeado','class'=>'validate','required','div' => false, 'label' => false]);?>
          <span class="error-text">Validación</span>
        </div>
        <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
          <span class="label-input100">Porcentaje de avance ejecutado</span>
          <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Descargar Excel">help_outline</i></span>
          <?php echo $this->Form->input('EXECUTED',['placeholder'=>'Ejecutado','class'=>'validate','required','div' => false, 'label' => false]);?>
          <span class="error-text">Validación</span>
        </div>
        <span class="contact100-form-sub-title">
          INDICADORES DE PRESUPUESTO
        </span>
        <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
          <span class="label-input100">Presupuesto planeado</span>
          <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Descargar Excel">help_outline</i></span>
          <?php echo $this->Form->input('CAPEX_PLANNED',['placeholder'=>'Presupuesto planeado','class'=>'validate','required','div' => false, 'label' => false]);?>
          <span class="error-text">Validación</span>
        </div>
        <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
          <span class="label-input100">Presupuesto ejecutado</span>
          <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Descargar Excel">help_outline</i></span>
          <?php echo $this->Form->input('CAPEX_EXECUTED',['placeholder'=>'Presupuesto ejecutado','class'=>'validate','required','div' => false, 'label' => false]);?>
          <span class="error-text">Validación</span>
        </div>
        <span class="contact100-form-sub-title">
          Total proyecto
        </span>
        <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
          <span class="label-input100">CPI</span>
          <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Descargar Excel">help_outline</i></span>
          <?php echo $this->Form->input('AC_PPTO',['placeholder'=>'AC/PPTO','class'=>'validate','required','div' => false, 'label' => false]);?>
          <span class="error-text">Validación</span>
        </div>
        <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
          <span class="label-input100">AC / BAC</span>
          <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Descargar Excel">help_outline</i></span>
          <?php echo $this->Form->input('AC_BAC',['placeholder'=>'AC/BAC','class'=>'validate','required','div' => false, 'label' => false]);?>
          <span class="error-text">Validación</span>
        </div>
        <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
          <span class="label-input100">AC</span>
          <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Descargar Excel">help_outline</i></span>
          <?php echo $this->Form->input('AC',['placeholder'=>'AC','class'=>'validate','required','div' => false, 'label' => false]);?>
          <span class="error-text">Validación</span>
        </div>
        <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
          <span class="label-input100">Presupuesto total</span>
          <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Descargar Excel">help_outline</i></span>
          <?php echo $this->Form->input('PROJ_TOTAL_PRES',['placeholder'=>'Presupuesto total','class'=>'validate','required','div' => false, 'label' => false]);?>
          <span class="error-text">Validación</span>
        </div>
        <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
          <span class="label-input100">Forecast total</span>
          <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Descargar Excel">help_outline</i></span>
          <?php echo $this->Form->input('TOTAL_FORECAST',['placeholder'=>'Forecast total','class'=>'validate','required','div' => false, 'label' => false]);?>
          <span class="error-text">Validación</span>
        </div>
      </div>
      <div class="contact100-form validate-form" id="Form-4">
      <span class="contact100-form-title">
        EDITAR PROYECTO
      </span>
      <span class="contact100-form-sub-title">
        INDICADORES DE PRESUPUESTO
      </span>
      <span class="contact100-form-sub-title">
        Anual proyecto
      </span>
      <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
        <span class="label-input100">CPI Anual <?=date("Y")?></span>
        <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Descargar Excel">help_outline</i></span>
        <?php echo $this->Form->input('CPI_ANUAL',['placeholder'=>'CPI anual','class'=>'validate','required','div' => false, 'label' => false]);?>
        <span class="error-text">Validación</span>
      </div>
      <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
        <span class="label-input100">AC <?=date("Y")?></span>
        <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Descargar Excel">help_outline</i></span>
        <?php echo $this->Form->input('PROJ_AC',['placeholder'=>'AC anual','class'=>'validate','required','div' => false, 'label' => false]);?>
        <span class="error-text">Validación</span>
      </div>
      <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
        <span class="label-input100">PV <?=date("Y")?></span>
        <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Descargar Excel">help_outline</i></span>
        <?php echo $this->Form->input('PV',['placeholder'=>'PV','class'=>'validate','required','div' => false, 'label' => false]);?>
        <span class="error-text">Validación</span>
      </div>
      <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
        <span class="label-input100">Presupuesto <?=date("Y")?></span>
        <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Descargar Excel">help_outline</i></span>
        <?php echo $this->Form->input('PRES_PROJ',['placeholder'=>'Presupuesto anual','class'=>'validate','required','div' => false, 'label' => false]);?>
        <span class="error-text">Validación</span>
      </div>
      <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
        <span class="label-input100">Forecast <?=date("Y")?></span>
        <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Descargar Excel">help_outline</i></span>
        <?php echo $this->Form->input('FORECAST_PROJ',['placeholder'=>'Forecast anual','class'=>'validate','required','div' => false, 'label' => false]);?>
        <span class="error-text">Validación</span>
      </div>
      <span class="contact100-form-sub-title">
        Distancias
      </span>
      <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
        <span class="label-input100">Longitud</span>
        <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Descargar Excel">help_outline</i></span>
        <?php echo $this->Form->input('DISTANCIA',['placeholder'=>'Longitud','id'=>'input-distancia','class'=>'validate','required','div' => false, 'label' => false]);?>
        <span class="error-text">Validación</span>
      </div>
      <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
        <span class="label-input100">ECG / Líneas de transmisión</span>
        <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Descargar Excel">help_outline</i></span>
        <?php echo $this->Form->input('LINEA_TRANS',['placeholder'=>'Líneas de transmisión','id'=>'input-linea','class'=>'validate','required','div' => false, 'label' => false]);?>
        <span class="error-text">Validación</span>
      </div>
      <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
        <span class="label-input100">Torres</span>
        <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Descargar Excel">help_outline</i></span>
        <?php echo $this->Form->input('TORRE',['placeholder'=>'Torres','id'=>'input-torres','class'=>'validate','required','div' => false, 'label' => false]);?>
        <span class="error-text">Validación</span>
      </div>
      <div class="container-contact100-form-btn">
        <?= $this->Form->button('
          Enviar
          <i class="material-icons right" aria-hidden="true">send</i>',['class'=>'contact100-form-btn'])?>
      </div>
      <?= $this->Form->end();?>
    </div>
<!-- DIVS Estructurales -->
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
$(document).ready(function(){
$('#next').hide();
$('#Form-2').hide();
$('#Form-3').hide();
$('#Form-4').hide();
// $( "#return" ).dblclick(function() {
//   $('.contact100-form.validate-form').hide();
//   $('#Form-4').show();
// });
// $( "#next" ).dblclick(function() {
//   $('.contact100-form.validate-form').hide();
//   $('#Form-1').show();
// });
var Form_Numbers = null;
$("#next").click(function(){
Form_Numbers = $('.contact100-form.validate-form.active').index();
BtnNextHide(Form_Numbers);
 if ($('.contact100-form.validate-form.active').index() > 0) {
      $('.contact100-form.validate-form').hide();
      $('.contact100-form.validate-form.active').removeClass("active").prev().addClass("active").show();
 }
 $('body,html').animate({
     scrollTop : 0
 }, 500);
});
$("#return").click(function(){
Form_Numbers = $('.contact100-form.validate-form.active').index();
BtnReturnHide(Form_Numbers);
 if ($('.contact100-form.validate-form.active').index() < $(".contact100-form.validate-form").length-1) {
      $('.contact100-form.validate-form.active').hide();
      $('.contact100-form.validate-form.active').removeClass("active").next().show().addClass("active");
 }
 $('#next').show();
 $('body,html').animate({
     scrollTop : 0
 }, 500);
});
function BtnNextHide(Form_Numbers){
  if(Form_Numbers == 1){
    $("#next").hide();
  }else{
    $("#return").show();
    $("#next").show();
  }
}
function BtnReturnHide(Form_Numbers){
  if (Form_Numbers == 2) {
    $("#return").hide();
  }else{
    $("#return").show();
    $("#next").show();
  }
}
});
function validarNumero(numero){
  var Div_Id = $('#'+numero.id).parent().parent().attr('id');
  if (!/^[0-9]+\.?[0-9]*$/.test(numero.value) && numero.value){
    if (!document.getElementById(Div_Id).getElementsByClassName("error-text")[0]) {
      $('#'+Div_Id).append('<span class="error-text">Dato invalido</span>');
    }
  }else {
    // document.getElementById(Div_Id).getElementsByClassName("error-text")[0].remove();
  }
}
</script>
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
 </script>
