<script>
  $(document).ready(function(){
    $('.fixed-action-btn.filters').hide();
    $('input[type=text]').on('keydown', function(e) {
    if (e.which == 13) {
      e.preventDefault();
    }
  });
    $('#Input_Search').keyup(function(){
    // Search text
    var text = $(this).val();
    logic_search(text);
  });
  function logic_search(text){
    // Hide all content class element
    $('.Search').hide();
    // Search and show
    $('.Search:contains("'+text+'")').show();
  }
  $('#btn_main_filter').click(function() {
    $('.fixed-action-btn.filters').show();
  });
  $( "#btn_main_filter" ).dblclick(function() {
    $('.Search').show();
    $('.fixed-action-btn.filters').hide();
  });
  $('.btn-filter-phase').click(function() {
    var array_filters_phase = new Array();
    var li_selected = $(this).find('a:first');
    if ($('#'+li_selected.attr('id')).hasClass('dark lighten-1')) {
      li_selected.removeClass('dark lighten-1').addClass('tertiary active');
      $(this).addClass('active');
    } else {
      li_selected.addClass('dark lighten-1');
      $(this).removeClass('active');
    }
    var $stats = $('.btn-filter-phase.active');
    var $items = $('.Search.list');
    $items.show();
    if ($stats.length == 0)
      return;
    var $vstats = $.map($stats, function(o) {return $(o).data('id'); });
    $stats.each(function() {
      var $stat = $(this);
      $items.filter(function() {
        return $vstats.indexOf($(this).data($stat.data('type'))) < 0;
      }).hide();
    })
  });
    $('#cancel_fase').click(function() {
      var li_selected = $('.btn-filter-phase.active');
      if ($('#'+li_selected.attr('id')).hasClass('active')) {
        var selected = $('.btn-filter-phase.active').val();
        console.log(selected);
       if (selected == '1' || selected == '2' || selected == '3' || selected == '4' || selected == '5') {
        li_selected.addClass('dark lighten-1').removeClass('tertiary active');
        li_selected.parent().removeClass('active');
        var $stats = $('.btn-filter-phase.active');
        var $items = $('.Search.list');
        $items.show();
        if ($stats.length == 0)
          return;
        var $vstats = $.map($stats, function(o) {return $(o).data('id'); });
        $stats.each(function() {

          var $stat = $(this);
          $items.filter(function() {
            return $vstats.indexOf($(this).data($stat.data('type'))) < 0;
          }).hide();
        })
      }
      }
    });
    $('#cancel_ctg').click(function() {
      var li_selected = $('.btn-filter-phase.active').find('a:first');
      console.log();
      if ($('#'+li_selected.attr('id')).hasClass('active')) {
        var selected = $('.btn-filter-phase.active').val();
       if (selected == '1888' || selected == '1887' || selected == '1886') {
        li_selected.addClass('dark lighten-1').removeClass('tertiary active');
        li_selected.parent().removeClass('active');
        var $stats = $('.btn-filter-phase.active');
        var $items = $('.Search.list');
        $items.show();
        if ($stats.length == 0)
          return;
        var $vstats = $.map($stats, function(o) {return $(o).data('id'); });
        $stats.each(function() {
          var $stat = $(this);
          $items.filter(function() {
            return $vstats.indexOf($(this).data($stat.data('type'))) < 0;
          }).hide();
        })
      }
      }
    });
    $('#cancel_area').click(function() {
      var li_selected = $('.btn-filter-phase.active').find('a:first');
      // console.log(li_selected);
      if ($('#'+li_selected.attr('id')).hasClass('active')) {
        li_selected.addClass('dark lighten-1').removeClass('tertiary active');
        li_selected.parent().removeClass('active');
        var $stats = $('.btn-filter-phase.active');
        var $items = $('.Search.list');
        $items.show();
        if ($stats.length == 0)
          return;
        var $vstats = $.map($stats, function(o) {return $(o).data('id'); });
        $stats.each(function() {
          var $stat = $(this);
          $items.filter(function() {
            return $vstats.indexOf($(this).data($stat.data('type'))) < 0;
          }).hide();
        })
      }
    });
    $('#cancel_mec').click(function() {
      var li_selected = $('.btn-filter-phase.active').find('a:first');
      // console.log(li_selected);
      if ($('#'+li_selected.attr('id')).hasClass('active')) {
        li_selected.addClass('dark lighten-1').removeClass('tertiary active');
        li_selected.parent().removeClass('active');
        var $stats = $('.btn-filter-phase.active');
        var $items = $('.Search.list');
        $items.show();
        if ($stats.length == 0)
          return;
        var $vstats = $.map($stats, function(o) {return $(o).data('id'); });
        $stats.each(function() {
          var $stat = $(this);
          $items.filter(function() {
            return $vstats.indexOf($(this).data($stat.data('type'))) < 0;
          }).hide();
        })
      }
    });
    function cancel_logic(){
      var $stats = $('.btn-filter-phase.active');
      var $items = $('.Search.list');
      $items.show();
      if ($stats.length == 0)
        return;
      var $vstats = $.map($stats, function(o) {return $(o).data('id'); });
      $stats.each(function() {
        var $stat = $(this);
        $items.filter(function() {
          return $vstats.indexOf($(this).data($stat.data('type'))) < 0;
        }).hide();
      })
    }
});
$(document).ready(function(){
  if($(this).scrollTop() == 0){
    $('#return-to-top').hide();
  }
    // ===== Scroll to Top ====
  $(window).scroll(function() {
      if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
          $('#return-to-top').fadeIn(200);    // Fade in the arrow
      } else {
          $('#return-to-top').fadeOut(200);   // Else fade out the arrow
      }
  });
  $('#return-to-top').click(function() {      // When arrow is clicked
      $('body,html').animate({
          scrollTop : 0                       // Scroll to top of body
      }, 500);
  });
  $(document).ready(function(){
    $('.fixed-action-btn').floatingActionButton({
      hoverEnabled: false,
      direction: 'left'
    });
  });
});
</script>
<!-- Array que almacena las id de los proyectos de portal alterno relacionadas con la EPS seleccionada-->
<?php $ArrayProjectId = array();?>
<!--Foreach que recorre el arreglo $projectsCategory(Proyectos portal alterno) y evalua que categoria es,
en caso de ser crecimiento o sostenimiento da un código distinto para ser lo más congruente con los datos obtenidos de WS -->
<?php $CategoryPr = 0;?>
<?php foreach ($projectsCategory as $project): ?>
    <!--Llena el array $ArrayProjectId con las id delos proyectos relacionados con la EPS actual.-->
    <?php array_push($ArrayProjectId, $project->ID_PROJECT);?>
<?php endforeach; ?>
<!--resultProj albergar la cantidad de proyectos con diferentes id a los WS, es decir proyectos creados 100% a partir del portal alterno-->
<?php $resultProj = array_diff($ArrayProjectId, $ProjectCodId);?>
  <?php $ContProj = 0;?>
  <!--Condicional que evalua si el array $varProj contiene algún dato, en caso de estar vacio se le asigna el valor de 0-->
    <?php if (empty($ProjectsWS)):?>
      <?php $ContProj = 0?>
    <?php else: ?>
      <?php $ContProj = count($ProjectsWS)?>
    <?php endif; ?>
    <?php $TotalProj = count($resultProj) + $ContProj ?>
<?php
  // Breadcrumb
  $breadcrumb = [
      [ 'Inicio', 'home','Pages'],
      [ 'Portal Proyectos','portalProjects','Projects'],
  ];
  $PresTotal = 0; $BDLocalPresTotal = 0; $EjecTotal = 0; $BDLocalEjecTotal = 0;
  $SPITotal = 0; $BDLocalSPITotal = 0; $CPITotal = 0; $BDLocalCPITotal = 0;
  $ACTotal = 0; $BDLocalACTotal = 0; $PresupuestoAnual = 0; $BDLocalPresupuestoAnual = 0;
  foreach ($ProjectsWS as $row => $value) {
      foreach ($AllLocalDBProjects as $project) {
          if ($project->ID_PROJECT == $value["id_p_project"]) {
              $PresTotal+=$project->CAPEX_PLANNED;
              $BDLocalEjecTotal += $project->CAPEX_EXECUTED;
              $SPITotal+=$value["spi_labor_units"];
              $CPITotal += $project->CPI_ANUAL;
              $ACTotal +=$project->AC;
              $PresupuestoAnual +=$project->PRES_PROJ;
          }
      }
  }
  foreach ($projectsCategory as $BDProjects) {
      $BDLocalPresTotal+=$BDProjects->CAPEX_PLANNED;
      $BDLocalEjecTotal += $BDProjects->CAPEX_EXECUTED;
      if($BDProjects->PLANNED != 0){
        $BDLocalSPITotal+=($BDProjects->EXECUTED/$BDProjects->PLANNED);
      }
      $BDLocalCPITotal += $BDProjects->CPI_ANUAL;
      $BDLocalACTotal +=$BDProjects->AC;
      $BDLocalPresupuestoAnual +=$BDProjects->PRES_PROJ;
  }
  $SPITotalProj = null;
  $CPITotalProj =  null;
  if ($TotalProj != 0) {
    $SPITotalProj = ($SPITotal + $BDLocalSPITotal)/$TotalProj;
    $CPITotalProj = ($CPITotal + $BDLocalCPITotal)/$TotalProj;
  }
  $SpiFormatNumber = number_format($SPITotalProj, 2, ".", ",");
  $CpiFormatNumber = number_format($CPITotalProj, 2, ".", ",");
  $SPITotalcolor = null;
  $CPITotalcolor = null;
  foreach ($colorIndicator as $colorFase => $valueFase) {
      if ( $SpiFormatNumber >= $valueFase['minimun'] && $SpiFormatNumber <= $valueFase['maximo'] && $valueFase['indicator_name'] == 'SPI') {
          $SPITotalcolor = $valueFase['hexa_color'];
      }
  }
  foreach ($colorIndicator as $colorFase => $valueFase) {
      if ($CpiFormatNumber >= $valueFase['minimun'] && $CpiFormatNumber <= $valueFase['maximo'] && $valueFase['indicator_name'] == 'CPI') {
          $CPITotalcolor = $valueFase['hexa_color'];
      }
  }
// Indicadores
$indicators = [
    [
        'name' => 'SPI',
        'value' => $SpiFormatNumber,
        'icon' => 'show_chart',
        'color' => '',
        'colorBackground' => $SPITotalcolor,
        'tooltip' => 'Suma de todos los SPI dividido por la cantidad de proyectos.',
    ],
    [
        'name' => 'Presupuesto Total USD ',
        'value' => '$ '.number_format($PresTotal + $BDLocalPresTotal, 2, ".", ",").' MM',
        'icon' => 'language',
        'color' => 'accent',
        'colorBackground' => '',
        'tooltip' => 'Suma de todos los presupuestos planeados.',
    ],
    [
        'name' => 'Ejecutado Total USD',
        'value' => '$ '.number_format($EjecTotal + $BDLocalEjecTotal, 2, ".", ",").' MM',
        'icon' => 'language',
        'color' => 'tertiary',
        'colorBackground' => '',
        'tooltip' => 'Suma de todos los presupuestos ejecutados.',
    ],
    [
        'name' => 'CPI',
        'value' => $CpiFormatNumber,
        'icon' => 'show_chart',
        'color' => '',
        'colorBackground' =>$CPITotalcolor,
        'tooltip' => 'Suma de todos los CPI dividido por la cantidad de proyectos.',
    ],
    [
        'name' => 'Presupuesto Anual USD',
        'value' => '$ '.number_format($PresupuestoAnual + $BDLocalPresupuestoAnual, 2, ".", ",").' MM',
        'icon' => 'language',
        'color' => 'primary',
        'colorBackground' => '',
        'tooltip' => 'Suma de todos los presupuestos anuales.',
    ],
    [
        'name' => 'Ejecutado Anual USD',
        'value' => '$ '.number_format($ACTotal + $BDLocalACTotal, 2, ".", ",").' MM',
        'icon' => 'language',
        'color' => 'primary',
        'colorBackground' => '',
        'tooltip' => 'Suma de todos los ejecutados anuales.',
    ],
];
?>
<div class="section projects">
<!--Div que contien los breadcrumb de la pestaña de proyectos y controla el comportamiento y responsive de la página -->
<div class="breadcrumb-container">
    <a href="javascript:history.back()" class="breadcrumb-back"><i class="material-icons">keyboard_arrow_left</i></a>
    <!--Estructurea del breadcrumb en lenguaje cakephp que consume mediante un foreach el array "Breadcrumb"-->
    <?php foreach ($breadcrumb as $item): ?>
        <?php echo $this->Html->link(
    $item[0],
    ['controller'=>$item[2], 'action'=>$item[1]],
    ['escape' => false,'class'=>'breadcrumb']
        );?>
    <?php endforeach; ?>
    <!--Breadcrumb para las EPS provenientes de la pestaña companies, diferentes a la EPS de grupo de energía de Bogotá.
    Dentro de los breadcrumb se utiliza para enviar parametro el urlencode(base64_encode($var)) para codificar los parametro a enviar.-->
    <?php if ($ActualEps != 23305): ?>
      <?php echo $this->Html->link(
            $titlePrjs,
            ['controller'=>'Projects', 'action'=>'companies',urlencode(base64_encode($idEpsParent)),urlencode(base64_encode($titlePrjs))],
            ['escape' => false,'class'=>'breadcrumb']
      );?>
    <?php endif;?>
    <?php if ($ActualEps != 34013 && $ActualEps != 34021 && $ActualEps != 34015 && $ActualEps != 34017): ?>
      <?php echo $this->Html->link(
            $NameEpsPrjs,
            ['controller'=>'Projects', 'action'=>'company',urlencode(base64_encode($current_user['V_ID_P_USER'])),urlencode(base64_encode($ActualEps)),urlencode(base64_encode($NameEpsPrjs)),urlencode(base64_encode($titlePrjs)),urlencode(base64_encode($idEpsParent))],
            ['escape' => false,'class'=>'breadcrumb']
      );?>
    <?php else:?>
      <?php echo $this->Html->link(
            $NameEpsPrjs,
            ['controller'=>'Projects', 'action'=>'companyGas',urlencode(base64_encode($current_user['V_ID_P_USER'])),urlencode(base64_encode($ActualEps)),urlencode(base64_encode($NameEpsPrjs)),urlencode(base64_encode($titlePrjs)),urlencode(base64_encode($idEpsParent))],
            ['escape' => false,'class'=>'breadcrumb']
      );?>
    <?php endif;?>
      <?php echo $this->Html->link(
        $CategoryPrTitle,
        ['controller'=>'Projects', 'action'=>'projects',urlencode(base64_encode($current_user['V_ID_P_USER'])),urlencode(base64_encode($ActualEps)),urlencode(base64_encode($Categoria1)),urlencode(base64_encode($Categoria2)),urlencode(base64_encode($NameEpsPrjs)),urlencode(base64_encode($titlePrjs)),urlencode(base64_encode($idEpsParent))],
        ['escape' => false,'class'=>'breadcrumb']
      );?>
</div>
<sidebar class="projects-sidebar">
    <div class="projects-sidebar-img">
      <?php if ($ActualEps != 34013 && $ActualEps != 34021 && $ActualEps != 34015 && $ActualEps != 34017): ?>
        <?= $this->Html->image('photos/energia.jpg') ?>
      <?php else:?>
        <?= $this->Html->image('photos/gas.jpg') ?>
      <?php endif;?>
    </div>
    <div class="projects-sidebar-total">
        <!--Variable que reflejara el resultado total de proyectos tanto Ws como fuente alterna.-->
          <h2><?=$TotalProj?> Proyectos</h2>
        </div>
    <div class="projects-sidebar-info">
        <h2>Información general</h2>
        <?php if($ActualEps == 34012):?>
          <p>Es la segunda empresa en transmisión de electricidad en Colombia, con una participación en el mercado del 12.5%. Cuenta con 1.504 km de circuitos a 230 kV activos en 17 subestaciones y la disponibilidad del sistema de transmisión a 31 de diciembre del 2015 fue del 99,93%, superior a la meta fijada por la CREG</p>
        <?php elseif($ActualEps == 34013):?>
        <p>
            MEGA: <br>
            “En el año 2027 será una multilatina líder en Midstream con ingresos superiores a USD 1 billón y un ROE de digito”. <br>
            Su unidad de infraestructura compartida, a la vanguardia tecnológica, tendrá una capacidad de transporte de gas equivalente > 1.500 mpcd consolidado su presencia en al menos 4 países.<br>
            30% de los ingresos de la compañía provendrán de otros paises Latam, desarrollando como mínimo dos posiciones en nuevos mercados.<br>
            Escalará su posiciones de generadoras conectando mas de 2.000 MW activos de térmicas a su red.<br>
            Apalancando sobre su posición de mercado, desarrollaría una Unida de Negocios de “Midstream Petrolero” la cual aportará más de 10% de los ingresos de la compañía.<br>
            Construyendo sobre su negocio de Urbes, estimulará per capitas de consumo y su infraestructura servirá a mas de 25 millones de usuarios y activará la demanda de GNV para transporte masico en el menos cinco ciudades de más de 500.000 habitantes.<br>
            Será una compañía de mas de USD 5 billones de market cap, y trabajará con aliados estratégicos.
          </p>
      <?php endif;?>
    </div>
</sidebar>
<!--Div que contiene los indicadores generales de todos los proyectos se maneja con una clase distinta a los proyectos individuales para mantener el aspecto.-->
<div class="projects-content">
    <div class="indicators row wrap">
      <?php foreach ($indicators as $indicator): ?>
        <div class="d-flex col s12 m6 l4 xl4">
          <div class="indicator <?=$indicator['color']?> tooltipped" data-position="bottom" data-tooltip="<?=$indicator['tooltip']?>" style="background-color:<?=$indicator['colorBackground']?>">
              <h2><?= $indicator['name'] ?></h2>
              <h3><?= $indicator['value'] ?></h3>
              <i class="material-icons"><?= $indicator['icon'] ?></i>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
  <div class="section home ml-auto mr-auto" style="margin-top: 2%; width: 98%">
      <div class="home-menu">
          <form class="col s12">
              <div class="input-field col s12">
                <!-- <i class="material-icons prefix">search</i> -->
                <input id="Input_Search" type="text"></input>
                <label for="Input_Search">Buscar</label>
                <?php echo $this->Html->link(
                  $this->Html->tag('i','picture_as_pdf',['class'=>'material-icons tooltipped', 'data-position'=>'right','data-tooltip'=>'Descargar PDF']),
                  ['action'=>'projects',urlencode(base64_encode($current_user['V_ID_P_USER'])),urlencode(base64_encode($ActualEps)),urlencode(base64_encode($Categoria1)),urlencode(base64_encode($Categoria2)),urlencode(base64_encode($NameEpsPrjs)),urlencode(base64_encode($titlePrjs)),urlencode(base64_encode($idEpsParent)), '_ext' => 'pdf'],
                  ['escape' => false]
                );?>
            </div>
          <div class="fixed-action-btn">
            <a class="btn-floating btn-large waves-effect waves-light Scroll-button" id="return-to-top"><i class="material-icons">arrow_upward</i></a>
          </div>
          <div class="fixed-action-btn" style="margin-bottom: 120px">
            <a class="btn-floating btn-large error noselect">
              <i class="large material-icons noselect" id="btn_main_filter">search</i>
            </a>
          </div>
          <div class="fixed-action-btn filters" style="margin-bottom: 178px">
            <a class="btn-floating btn-large phase ii noselect">
              Área
            </a>
            <ul style="right: -75px !important;" id="ul-area">
              <li><a class="btn-floating warning"><i id="cancel_area" class="large material-icons">cancel</i></a></li>
              <?php foreach ($area as $ws_area => $area_value):?>
                <?php if ($area_value['code_type_id'] == "457"): ?>
                  <li class="btn-filter-phase tooltipped" data-position="bottom" data-tooltip="<?=$area_value['description']?>" data-id="<?=$area_value['code_type_id']?>" data-type="area"  value="<?=$area_value['code_type_id']?>"><a id="<?=$area_value['code_type_id']?>" class="btn-floating dark lighten-1">TI</a></li>
                <?php elseif ($area_value['code_type_id'] == "230"): ?>
                    <li class="btn-filter-phase tooltipped" data-position="bottom" data-tooltip="<?=$area_value['description']?>" data-id="<?=$area_value['code_type_id']?>" data-type="area"  value="<?=$area_value['code_type_id']?>"><a id="<?=$area_value['code_type_id']?>" class="btn-floating dark lighten-1">DGH</a></li>
                <?php elseif ($area_value['code_type_id'] == "456"): ?>
                    <li class="btn-filter-phase tooltipped" data-position="bottom" data-tooltip="<?=$area_value['description']?>" data-id="<?=$area_value['code_type_id']?>" data-type="area"  value="<?=$area_value['code_type_id']?>"><a id="<?=$area_value['code_type_id']?>" class="btn-floating dark lighten-1">SA</a></li>
                <?php elseif ($area_value['code_type_id'] == "233"): ?>
                    <li class="btn-filter-phase tooltipped" data-position="bottom" data-tooltip="<?=$area_value['description']?>" data-id="<?=$area_value['code_type_id']?>" data-type="area"  value="<?=$area_value['code_type_id']?>"><a id="<?=$area_value['code_type_id']?>" class="btn-floating dark lighten-1">GH</a></li>
                  <?php elseif ($area_value['code_type_id'] == "463"): ?>
                    <li class="btn-filter-phase tooltipped" data-position="bottom" data-tooltip="<?=$area_value['description']?>" data-id="<?=$area_value['code_type_id']?>" data-type="area"  value="<?=$area_value['code_type_id']?>"><a id="<?=$area_value['code_type_id']?>" class="btn-floating dark lighten-1">GP</a></li>
                <?php endif;?>
              <?php endforeach;?>
            </ul>
          </div>
          <div class="fixed-action-btn filters" style="margin-bottom: 236px">
            <a class="btn-floating btn-large phase iii noselect">
              MEC
            </a>
            <ul style="right: -105px !important;" id="ul-mec">
              <li><a class="btn-floating warning"><i id="cancel_mec" class="large material-icons" id="btn_main_filter">cancel</i></a></li>
              <?php foreach ($mec as $ws_mec => $mec_value):?>
                <li class="btn-filter-phase tooltipped" data-position="bottom" data-tooltip="<?=$mec_value['description']?>" data-id="<?=$mec_value['code_type_id']?>" data-type="mec"  value="<?=$mec_value['code_type_id']?>"><a id="<?=$mec_value['code_type_id']?>" class="btn-floating dark lighten-1"><?=substr($mec_value['description'],0,3)?></a></li>
              <?php endforeach;?>
            </ul>
          </div>
          <div class="fixed-action-btn filters" style="margin-bottom: 294px">
            <a class="btn-floating btn-large phase iv noselect">
              Ctg
            </a>
            <ul style="right: -75px;" id="ul-ctg">
              <li><a class="btn-floating warning"><i class="large material-icons" id="cancel_ctg">cancel</i></a></li>
              <?php foreach ($category as $ws_category => $category_value):?>
                <li class="btn-filter-phase tooltipped" data-position="bottom" data-tooltip="<?=$category_value['description']?>" data-id="<?=$category_value['code_type_id']?>" data-type="category" value="<?=$category_value['code_type_id']?>"><a id="<?=$category_value['code_type_id']?>" class="btn-floating dark lighten-1"><?=substr($category_value['description'],0,3).'.'?></a></li>
              <?php endforeach;?>
            </ul>
          </div>
          <div class="fixed-action-btn filters" style="margin-bottom: 351px">
            <a class="btn-floating btn-large phase v noselect">Fase</a>
            <ul id="ul-fase">
              <li><a class="btn-floating warning"><i class="large material-icons" id="cancel_fase">cancel</i></a></li>
              <?php foreach (array_reverse($fase) as $ws_fase => $fase_value):?>
                <?php if ($fase_value['code_type_id'] == "1910"): ?>
                  <li class="btn-filter-phase"  data-id="<?=$fase_value['code_type_id']?>" data-type="fase" value="<?=$fase_value['code_type_id']?>"><a id="<?=$fase_value['code_type_id']?>" class="btn-floating dark lighten-1">C</a></li>
                <?php elseif ($fase_value['code_type_id'] == "420"): ?>
                  <li class="btn-filter-phase"  data-id="<?=$fase_value['code_type_id']?>" data-type="fase" value="<?=$fase_value['code_type_id']?>"><a id="<?=$fase_value['code_type_id']?>" class="btn-floating dark lighten-1">V</a></li>
                <?php elseif ($fase_value['code_type_id'] == "212"): ?>
                  <li class="btn-filter-phase" data-id="<?=$fase_value['code_type_id']?>" data-type="fase" value="<?=$fase_value['code_type_id']?>"><a id="<?=$fase_value['code_type_id']?>" class="btn-floating dark lighten-1">IV</a></li>
                <?php elseif ($fase_value['code_type_id'] == "211"): ?>
                  <li class="btn-filter-phase" data-id="<?=$fase_value['code_type_id']?>" data-type="fase" value="<?=$fase_value['code_type_id']?>"><a id="<?=$fase_value['code_type_id']?>" class="btn-floating dark lighten-1">III</a></li>
                <?php elseif ($fase_value['code_type_id'] == "210"): ?>
                  <li class="btn-filter-phase" data-id="<?=$fase_value['code_type_id']?>" data-type="fase" value="<?=$fase_value['code_type_id']?>"><a id="<?=$fase_value['code_type_id']?>" class="btn-floating dark lighten-1">II</a></li>
                <?php elseif ($fase_value['code_type_id'] == "209"): ?>
                  <li class="btn-filter-phase" data-id="<?=$fase_value['code_type_id']?>" data-type="fase" value="<?=$fase_value['code_type_id']?>"><a id="<?=$fase_value['code_type_id']?>" class="btn-floating dark lighten-1">I</a></li>
                <?php endif;?>
              <?php endforeach;?>
            </ul>
          </div>
        </form>
      </div>
    </div>
  <!--Div que contiene la estructura de los proyectos individuales y mediante un foreach plasma cada proyecto-->
  <div class="projects-content2">
    <div class="divider transparent mb-3"></div>
      <?php $ArrayProjCategory = array();?>
        <?php foreach ($projectsCategory as $projCtg): ?>
          <?php array_push($ArrayProjCategory, $projCtg->ID_PROJECT);?>
        <?php endforeach; ?>
        <?php $Category = 0;?>
    <div class="row wrap">
      <?php foreach ($projectsCategory as $projects): ?>
        <?php if ($projects->CATEGORY == "crecimiento"):?>
            <?php $Category = 870;?>
        <?php elseif ($projects->CATEGORY == "sostenimiento"):?>
            <?php $Category = 871;?>
        <?php endif; ?>
          <?php if (!in_array($projects->ID_PROJECT, $ProjectCodId)):?>
            <?php if ($Category == $Categoria1):?>
              <div class = "d-flex col s12 m6 l4 xl3">
                <?php if ($projects->PLANNED != null || $projects->EXECUTED != null): ?>
                  <?php $SPI = number_format($projects->EXECUTED/$projects->PLANNED, 2, '.', '');?>
                <?php else:?>
                  <?php $SPI = 0;?>
                <?php endif; ?>
              <div class="sheet pointer" onclick="location.href='/Portal-Web/projects/project/<?=$projects->id?>/<?=$current_user['V_ID_P_USER']?>/<?=urlencode(base64_encode($ActualEps))?>/<?=urlencode(base64_encode($Categoria1))?>/<?=urlencode(base64_encode($Categoria2))?>/<?=urlencode(base64_encode($NameEpsPrjs))?>/<?=urlencode(base64_encode($titlePrjs))?>/<?=urlencode(base64_encode($idEpsParent))?>'">
                  <div class="sheet-line regional-text text-<?=$projects->REGIONAL?>">
                      <div class="sheet-line-item"></div>
                      <div class="sheet-line-item"></div>
                      <div class="sheet-line-item"></div>
                  </div>
                  <div class="sheet-content pl-5">
                      <h2>﻿<?=$projects->PROJECT_NAME?></h2>
                        <div class="data-box mt-auto">
                          <div class="data-box-circle tooltipped phase" data-position="bottom" data-tooltip="Fase Info">
                              <h3>
                                  <?php
                                      if ($projects->FASE == 1) {
                                          echo 'I';
                                      } elseif ($projects->FASE == 2) {
                                          echo 'II';
                                      } elseif ($projects->FASE == 3) {
                                          echo 'III';
                                      } elseif ($projects->FASE == 4) {
                                          echo 'IV';
                                      } elseif ($projects->FASE == 5) {
                                          echo 'V';
                                      }
                                  ?>
                              </h3>
                          </div>
                          <div class="data-box-content">
                              <span>Fase</span>
                          </div>
                      </div>
                      <div class="data-box">
                          <div class="data-box-circle
                              <?php
                                  if ($SPI >= 0.98) {
                                      echo 'primary';
                                  } elseif ($SPI < 0.98 && $SPI >= 0.9) {
                                      echo 'secondary';
                                  } elseif ($SPI < 0.9 && $SPI >= 0.8) {
                                      echo 'warning';
                                  } elseif ($SPI < 0.8) {
                                      echo 'error';
                                  }
                              ?> tooltipped" data-tooltip="Resultado del cociente de Valor Ganado dividido para el Valor Presupuestado hasta la fecha.">
                              <h4><?=$SPI?></h4>
                          </div>
                          <div class="data-box-content">
                              <span>SPI</span>
                          </div>
                      </div>
                      <div class="data-box">
                          <div class="data-box-circle error tooltipped" data-tooltip="Resultado del cociente del Valor Ganado dividido para el Costo Incurrido.">
                              <h5><?= $projects->CPI_ANUAL ?></h5>
                          </div>
                          <div class="data-box-content">
                              <span>CPI Anual</span>
                          </div>
                      </div>
                      <div class="data-box">
                          <div class="data-box-circle tertiary tooltipped" data-tooltip="AC/BAC info">
                              <h5><?=$projects->AC_BAC?>%</h5>
                          </div>
                          <div class="data-box-content">
                              <span>AC/BAC</span>
                          </div>
                      </div>
                      <div class="data-box">
                          <div class="data-box-circle tertiary tooltipped" data-tooltip="AC/BAC info">
                              <h5><?=$projects->AC_BAC?>%</h5>
                          </div>
                          <div class="data-box-content">
                              <span>AC/BAC</span>
                          </div>
                      </div>
                      <div class="divider transparent"></div>
                      <div class="data-chip accent tooltipped" data-tooltip="Presupuesto planeado individual.">
                          <h3>Presupuesto Planeado (USD)</h3>
                          <h4><?=number_format($projects->CAPEX_PLANNED, 2, ",", ".")?> MM</h4>
                      </div>
                      <div class="data-chip secondary mb-0 tooltipped" data-tooltip="Presupuesto ejecutado individual.">
                          <h3>Presupuesto Ejecutado (USD)</h3>
                          <h4><?=number_format($projects->CAPEX_EXECUTED, 2, ",", ".")?> MM</h4>
                      </div>
                  </div>
              </div>
          </div>
          <?php endif;?>
        <?php endif;?>
      <?php endforeach; ?>
      <?php foreach ($ProjectsWS as $row => $value):?>
        <?php foreach ($AllLocalDBProjects as $project): ?>
          <?php if ($project->ID_PROJECT == $value["id_p_project"]): ?>
            <div data-fase="<?=$value["code_fase"];?>" data-category="<?=$value["code_category"];?>" data-mec="<?=$value["code_pec"];?>" data-area="<?=$value["code_area"];?>" class="Search list d-flex col s12 m6 l4 xl3">
              <?php if ($value["spi_labor_units"] == null && $project->PLANNED != null): ?>
                <?php $SPI_WS = number_format($project->EXECUTED/$project->PLANNED, 2, '.', '');?>
              <?php elseif ($value["spi_labor_units"] != null): ?>
                <?php $SPI_WS = number_format($value["spi_labor_units"], 2, '.', '');?>
              <?php else:?>
                <?php $SPI_WS = 0;?>
              <?php endif; ?>
              <div class="sheet pointer" onclick="location.href='/Portal-Web/projects/project/<?=$project->id?>/<?=$current_user['V_ID_P_USER']?>/<?=urlencode(base64_encode($ActualEps))?>/<?=urlencode(base64_encode($Categoria1))?>/<?=urlencode(base64_encode($Categoria2))?>/<?=urlencode(base64_encode($NameEpsPrjs))?>/<?=urlencode(base64_encode($titlePrjs))?>/<?=urlencode(base64_encode($idEpsParent))?>/<?=urlencode(base64_encode($value["name"]))?>/<?=$value["id_p_project"]?>/<?=$SPI_WS?>/<?=$value["data_date"]?>/<?=$value["project_id_p6"]?>/<?=$value["fepo"]?>/<?=$value["da"]?>/<?=$value["pi"]?>/<?=$value["od"]?>'">
                  <div class="sheet-line regional-text text-<?=$project->REGIONAL?>">
                      <div class="sheet-line-item"></div>
                      <div class="sheet-line-item"></div>
                      <div class="sheet-line-item"></div>
                  </div>
                  <div class="sheet-content pl-5">
                      <h2>﻿<?=$value["name"]?></h2>
                      <div class="data-box mt-auto">
                          <div class="data-box-circle">
                              <h3>
                                  <?php
                                      if ($value["code_fase"] == '209') {
                                          echo 'I';
                                      } elseif ($value["code_fase"] == '210') {
                                          echo 'II';
                                      } elseif ($value["code_fase"] == '211') {
                                          echo 'III';
                                      } elseif ($value["code_fase"] == '212') {
                                          echo 'IV';
                                      } elseif ($value["code_fase"] == '420') {
                                          echo 'V';
                                      }elseif ($value["code_fase"] == '1910') {
                                          echo 'C';
                                      }
                                  ?>
                              </h3>
                          </div>
                          <div class="data-box-content">
                              <span>
                                <?php
                                    if ($value["code_fase"] == '209') {
                                        echo 'Estructuración';
                                    } elseif ($value["code_fase"] == '210') {
                                        echo 'Selección';
                                    } elseif ($value["code_fase"] == '211') {
                                        echo 'Planeación';
                                    } elseif ($value["code_fase"] == '212') {
                                        echo 'Ejecución';
                                    } elseif ($value["code_fase"] == '420') {
                                        echo 'Cierre y transferencia';
                                    } elseif ($value["code_fase"] == '1910') {
                                        echo 'Cerrado';
                                    }
                                ?>
                              </span>
                          </div>
                      </div>
                      <div class="data-box">
                        <div class="data-box-circle phase tooltipped" data-position="bottom" data-tooltip="Resultado del cociente de Valor Ganado dividido para el Valor Presupuestado hasta la fecha" style="background-color:
                            <?php foreach ($colorIndicator as $colorFase => $valueFase): ?>
                              <?php if ($SPI_WS > $valueFase['minimun'] && $SPI_WS <= $valueFase['maximo'] && $valueFase['indicator_name'] == 'SPI'):?>
                                  <?php echo $valueFase['hexa_color'];?>
                              <?php endif;?>
                            <?php endforeach; ?>">
                              <h4><?=$SPI_WS?></h4>
                          </div>
                          <div class="data-box-content">
                              <span>SPI</span>
                          </div>
                      </div>
                      <div class="data-box">
                          <div class="data-box-circle tooltipped" data-position="bottom" data-tooltip="Resultado Valor Ganado dividido por el Costo Incurrido." style="background-color:
                              <?php foreach ($colorIndicator as $colorFase => $valueFase): ?>
                                <?php if ($project->CPI_ANUAL >= $valueFase['minimun'] && $project->CPI_ANUAL <= $valueFase['maximo'] && $valueFase['indicator_name'] == 'CPI'):?>
                                    <?php echo $valueFase['hexa_color'];?>
                                <?php endif;?>
                              <?php endforeach; ?>">
                              <h5><?= number_format($project->CPI_ANUAL, 2, '.', '') ?></h5>
                          </div>
                          <div class="data-box-content">
                              <span>CPI Anual</span>
                          </div>
                      </div>
                      <div class="data-box">
                          <div class="data-box-circle tooltipped" data-position="bottom" data-tooltip="División entre AC y el PPTO (AC/PPTO)" style="background-color:
                              <?php foreach ($colorIndicator as $colorFase => $valueFase): ?>
                                <?php if ($project->AC_PPTO  >= $valueFase['minimun'] && $project->AC_PPTO <= $valueFase['maximo'] && $valueFase['indicator_name'] == 'CPI TOTAL'):?>
                                    <?php echo $valueFase['hexa_color'];?>
                                <?php endif;?>
                              <?php endforeach; ?>">
                            <h5><?=$project->AC_PPTO?></h5>
                          </div>
                          <div class="data-box-content">
                              <span>CPI Total</span>
                          </div>
                      </div>
                      <div class="data-box">
                          <div class="data-box-circle tooltipped" data-position="bottom" data-tooltip="División entre AC y el PPTO (AC/PPTO)" style="background-color:
                              <?php foreach ($colorIndicator as $colorFase => $valueFase): ?>
                                <?php if ($project->IGR >= $valueFase['minimun'] && $project->IGR <= $valueFase['maximo'] && $valueFase['indicator_name'] == 'IGR'):?>
                                    <?php echo $valueFase['hexa_color'];?>
                                <?php endif;?>
                              <?php endforeach; ?>">
                            <?php if($project->IGR != null && $project->IGR != 100):?>
                               <h5><?= number_format($project->IGR,1)?>%</h5>
                            <?php elseif($project->IGR == 100):?>
                              <h5><?=$project->IGR?>%</h5>
                            <?php endif;?>
                          </div>
                          <div class="data-box-content">
                              <span>IGR</span>
                          </div>
                     </div>
                    <div class="divider transparent"></div>
                    <div class="data-chip accent">
                        <h3>Presupuesto Planeado (USD)</h3>
                        <h4><?=number_format($project->CAPEX_PLANNED, 2, ",", ".")?> MM</h4>
                    </div>
                    <div class="data-chip secondary mb-0">
                        <h3>Presupuesto Ejecutado (USD)</h3>
                        <h4><?=number_format($project->CAPEX_EXECUTED, 2, ",", ".")?> MM</h4>
                    </div>
                  </div>
                </div>
              </div>
            <?php endif;?>
          <?php endforeach;?>
        <?php endforeach; ?>
      </div>
  </div>
</div>
