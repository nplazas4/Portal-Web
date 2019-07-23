<script>
  $(document).ready(function(){
    $('input[type=text]').on('keydown', function(e) {
      if (e.which == 13) {
          e.preventDefault();
      }
  });
 $('#Input_Search').keyup(function(){
  // Search text
  var text = $(this).val();
  // Hide all content class element
  $('.Search').hide();

  // Search and show
  $('.Search:contains("'+text+'")').show();

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
  $PresTotal = 0;
  $BDLocalPresTotal = 0;
  $EjecTotal = 0;
  $BDLocalEjecTotal = 0;
  $SPITotal = 0;
  $BDLocalSPITotal = 0;
  $CPITotal = 0;
  $BDLocalCPITotal = 0;
  $ACTotal = 0;
  $BDLocalACTotal = 0;
  $PresupuestoAnual = 0;
  $BDLocalPresupuestoAnual = 0;
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
  $_SESSION['total'] = $BDLocalEjecTotal + $EjecTotal;
  $SPITotalProj = ($SPITotal + $BDLocalSPITotal)/$TotalProj;
  $CPITotalProj = ($CPITotal + $BDLocalCPITotal)/$TotalProj;
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
$indicators1 = [
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
        'value' => '$ '.number_format($PresTotal + $BDLocalPresTotal, 2, ",", ".").' MM',
        'icon' => 'language',
        'color' => 'accent',
        'colorBackground' => '',
        'tooltip' => 'Suma de todos los presupuestos planeados.',
    ],
];
$indicators2 = [
    [
        'name' => 'Ejecutado Total USD',
        'value' => '$ '.number_format($EjecTotal + $BDLocalEjecTotal, 2, ",", ".").' MM',
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
];
$indicators3 = [
    [
        'name' => 'Presupuesto Anual USD',
        'value' => '$ '.number_format($PresupuestoAnual + $BDLocalPresupuestoAnual, 2, ",", ".").' MM',
        'icon' => 'language',
        'color' => 'primary',
        'colorBackground' => '',
        'tooltip' => 'Suma de todos los presupuestos anuales.',
    ],
    [
        'name' => 'Ejecutado Anual USD',
        'value' => '$ '.number_format($ACTotal + $BDLocalACTotal, 2, ",", ".").' MM',
        'icon' => 'language',
        'color' => 'primary',
        'colorBackground' => '',
        'tooltip' => 'Suma de todos los ejecutados anuales.',
    ],
];
?>
<div class="section projects">
<sidebar class="projects-sidebar">
    <div class="projects-sidebar-img">
        <?= $this->Html->image('photos/energia.jpg', ['fullBase' => true]) ?>
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
<div class="projects-content" style="margin-bottom: 15%;">
    <div class="indicators row wrap" style="display: -webkit-box;">
      <?php foreach ($indicators1 as $indicator): ?>
        <div class="d-flex col s6 m6 l4 xl4">
          <div class="indicator <?=$indicator['color']?> tooltipped" data-position="bottom" data-tooltip="<?=$indicator['tooltip']?>" style="background-color:<?=$indicator['colorBackground']?>">
              <h2><?= $indicator['name'] ?></h2>
              <h3><?= $indicator['value'] ?></h3>
              <i class="material-icons"><?= $indicator['icon'] ?></i>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <div class="indicators row wrap" style="display: -webkit-box">
      <?php foreach ($indicators2 as $indicator): ?>
        <div class="d-flex col s6 m6 l4 xl4">
          <div class="indicator <?=$indicator['color']?> tooltipped" data-position="bottom" data-tooltip="<?=$indicator['tooltip']?>" style="background-color:<?=$indicator['colorBackground']?>">
              <h2><?= $indicator['name'] ?></h2>
              <h3><?= $indicator['value'] ?></h3>
              <i class="material-icons"><?= $indicator['icon'] ?></i>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <div class="indicators row wrap" style="display: -webkit-box">
      <?php foreach ($indicators3 as $indicator): ?>
        <div class="d-flex col s6 m6 l4 xl4">
          <div class="indicator <?=$indicator['color']?> tooltipped" data-position="bottom" data-tooltip="<?=$indicator['tooltip']?>" style="background-color:<?=$indicator['colorBackground']?>">
              <h2><?= $indicator['name'] ?></h2>
              <h3><?= $indicator['value'] ?></h3>
              <i class="material-icons"><?= $indicator['icon'] ?></i>
          </div>
        </div>
      <?php endforeach; ?>
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
              <div class = "Search d-flex col s6 m6 l4 xl3">
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
                          <div class="data-box-circle phase
                              <?php
                                  if ($projects->FASE == 1) {
                                      echo 'i';
                                  } elseif ($projects->FASE == 2) {
                                      echo 'ii';
                                  } elseif ($projects->FASE == 3) {
                                      echo 'iii';
                                  } elseif ($projects->FASE == 4) {
                                      echo 'iv';
                                  } elseif ($projects->FASE == 5) {
                                      echo 'v';
                                  }
                              ?> tooltipped" data-position="bottom" data-tooltip="Fase Info">
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
                              ?> tooltipped" data-tooltip="SPI Info">
                              <h4><?=$SPI?></h4>
                          </div>
                          <div class="data-box-content">
                              <span>SPI</span>
                          </div>
                      </div>
                      <div class="data-box">
                          <div class="data-box-circle error tooltipped" data-tooltip="CPI Anual info">
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
                      <div class="divider transparent"></div>
                      <div class="data-chip accent tooltipped" data-tooltip="Presupuesto planeado info">
                          <h3>Presupuesto Planeado (USD)</h3>
                          <h4><?=number_format($projects->CAPEX_PLANNED, 2, ",", ".")?> MM</h4>
                      </div>
                      <div class="data-chip secondary mb-0 tooltipped" data-tooltip="Presupuesto ejecutado info">
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
              <div class="Search d-flex col s6 m6 l4 xl3" style="display: inline-block; margin-bottom: -20px;">
                <?php if ($value["spi_labor_units"] == null && $project->PLANNED != null): ?>
                  <?php $SPI_WS = number_format($project->EXECUTED/$project->PLANNED, 2, '.', '');?>
                <?php elseif ($value["spi_labor_units"] != null): ?>
                  <?php $SPI_WS = number_format($value["spi_labor_units"], 2, '.', '');?>
                <?php else:?>
                  <?php $SPI_WS = 0;?>
                <?php endif; ?>
            <div class="sheet pointer" onclick="location.href='/Portal-Web/projects/project/<?=$project->id?>/<?=$current_user['V_ID_P_USER']?>/<?=urlencode(base64_encode($ActualEps))?>/<?=urlencode(base64_encode($Categoria1))?>/<?=urlencode(base64_encode($Categoria2))?>/<?=urlencode(base64_encode($NameEpsPrjs))?>/<?=urlencode(base64_encode($titlePrjs))?>
              /<?=urlencode(base64_encode($idEpsParent))?>/<?=urlencode(base64_encode($value["name"]))?>/<?=$value["id_p_project"]?>/<?=$SPI_WS?>/<?=$value["data_date"]?>/<?=$value["project_id_p6"]?>'">
                <div class="sheet-line regional-text text-<?=$project->REGIONAL?>">
                    <div class="sheet-line-item"></div>
                    <div class="sheet-line-item"></div>
                    <div class="sheet-line-item"></div>
                </div>
                <div class="sheet-content pl-5">
                    <h2 style="font-size: 20px !important;">﻿<?=$value["name"]?></h2>
                    <div class="data-box mt-auto" style="display: -webkit-box">
                        <div class="data-box-circle phase" style="width: 50px !important; height: 50px !important; background-color:
                            <?php foreach ($colorIndicator as $colorFase => $valueFase): ?>
                              <?php if ($project->FASE == $valueFase['minimun'] && $valueFase['indicator_name'] == 'FASE'):?>
                                  <?php echo $valueFase['hexa_color'];?>
                              <?php endif;?>
                            <?php endforeach; ?>">
                            <h3 style="padding-top:23% !important; margin-left: 9%">
                                <?php
                                    if ($project->FASE == 1) {
                                        echo 'I';
                                    } elseif ($project->FASE == 2) {
                                        echo 'II';
                                    } elseif ($project->FASE == 3) {
                                        echo 'III';
                                    } elseif ($project->FASE == 4) {
                                        echo 'IV';
                                    } elseif ($project->FASE == 5) {
                                        echo 'V';
                                    }
                                ?>
                            </h3>
                        </div>
                        <div class="data-box-content" style="margin-top: 4%">
                            <span style="font-Size: 14px !important;">Fase</span>
                        </div>
                    </div>
                    <div class="data-box" style="display: -webkit-box">
                      <div class="data-box-circle phase" style="width: 50px !important; height: 50px !important;background-color:
                          <?php foreach ($colorIndicator as $colorFase => $valueFase): ?>
                            <?php if ($SPI_WS >= $valueFase['minimun'] && $SPI_WS <= $valueFase['maximo'] && $valueFase['indicator_name'] == 'SPI'):?>
                                <?php echo $valueFase['hexa_color'];?>
                            <?php endif;?>
                          <?php endforeach; ?>">
                            <h4 style="padding-top:32% !important"><?=$SPI_WS?></h4>
                        </div>
                        <div class="data-box-content" style="margin-top: 4%">
                            <span style="font-Size: 14px !important;">SPI</span>
                        </div>
                    </div>
                    <div class="data-box" style="display: -webkit-box">
                        <div class="data-box-circle" style="width: 50px !important; height: 50px !important; background-color:
                            <?php foreach ($colorIndicator as $colorFase => $valueFase): ?>
                              <?php if ($project->CPI_ANUAL >= $valueFase['minimun'] && $project->CPI_ANUAL <= $valueFase['maximo'] && $valueFase['indicator_name'] == 'CPI'):?>
                                  <?php echo $valueFase['hexa_color'];?>
                              <?php endif;?>
                            <?php endforeach; ?>">
                            <h5 style="padding-top:33% !important;"><?= number_format($project->CPI_ANUAL, 2, '.', '') ?></h5>
                        </div>
                        <div class="data-box-content" style="margin-top: 4%">
                            <span style="font-Size: 14px !important;">CPI Anual</span>
                        </div>
                    </div>
                    <div class="data-box" style="display: -webkit-box">
                        <div class="data-box-circle" style="width: 50px !important; height: 50px !important; background-color:
                            <?php foreach ($colorIndicator as $colorFase => $valueFase): ?>
                              <?php if ($project->AC_BAC >= $valueFase['minimun'] && $project->AC_BAC <= $valueFase['maximo'] && $valueFase['indicator_name'] == 'AC/BAC'):?>
                                  <?php echo $valueFase['hexa_color'];?>
                              <?php endif;?>
                            <?php endforeach; ?>">
                          <h5 style="padding-top:33% !important;"><?=$project->AC_BAC?>%</h5>
                        </div>
                        <div class="data-box-content" style="margin-top: 4%">
                            <span style="font-Size: 14px !important;">AC/BAC</span>
                        </div>
                    </div>
                    <div class="divider transparent"></div>
                    <div class="data-chip accent" style="height: 50px !important;">
                        <h3 style="font-size: 14px !important;">Presupuesto Planeado (USD)</h3>
                        <h4 style="font-size: 18px !important;"><?=number_format($project->CAPEX_PLANNED, 2, ",", ".")?> MM</h4>
                    </div>
                    <div class="data-chip secondary mb-0" style="height: 50px !important;">
                        <h3 style="font-size: 14px !important;">Presupuesto Ejecutado (USD)</h3>
                        <h4 style="font-size: 18px !important;"><?=number_format($project->CAPEX_EXECUTED, 2, ",", ".")?> MM</h4>
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
