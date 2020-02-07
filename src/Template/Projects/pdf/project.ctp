<?php
    // Breadcrumb
    $breadcrumb = [
      [ 'Inicio', 'home','Pages',''],
      [ 'Portal Proyectos','portalProjects','Projects','']
    ];
    $budgetIndicators = [
        'acPpto' => $projects->AC_PPTO, // AC/PPTO
        'ac' => $projects->AC, // AC
        'totalBudget' => $projects->PROJ_TOTAL_PRES, // Presupuesto total
        'forecastTotal' => $projects->TOTAL_FORECAST, // Forecast total

        'cpiAnnual' => $projects->CPI_ANUAL, // CPI Anual
        'acAnnual' => $projects->PROJ_AC, // AC Anual
        'pvAnnual' => $projects->PV, // PV Anual
        'annualBudget' => $projects->PRES_PROJ, // Presupuesto anual
        'annualForecast' => $projects->FORECAST_PROJ, // Forecast anual
    ];
?>
<?= $this->Html->script('https://www.amcharts.com/lib/3/amcharts.js',['fullBase' => true]) ?>
<?= $this->Html->script('https://www.amcharts.com/lib/3/serial.js',['fullBase' => true]) ?>
<?= $this->Html->script('https://www.amcharts.com/lib/3/pie.js',['fullBase' => true]) ?>
<?= $this->Html->script('https://www.amcharts.com/lib/3/gauge.js',['fullBase' => true]) ?>
<?= $this->Html->script('https://www.amcharts.com/lib/3/lang/es.js',['fullBase' => true]) ?>
<script type="text/javascript">
    // Porcentajes de avances
    AmCharts.makeChart("advance",
        {
            "type": "gauge",
            "theme": "light",
            "language": "es",
            "axes": [
                {
                    "axisAlpha": 0,
                    "tickAlpha": 0,
                    "labelsEnabled": false,
                    "startValue": 0,
                    "endValue": 100,
                    "startAngle": 0,
                    "endAngle": 360,
                    "bands": [
                        // Usuarios perdidos
                        {
                            "color": "#eee",
                            "startValue": 0,
                            "endValue": 100,
                            "radius": "100%",
                            "innerRadius": "70%",
                            "balloonText": "Avance planeado",
                        },
                        {
                            <?php if ($Plan == 100): ?>
                            <?php $PlanDec = $Plan ?>
                            <?php else: ?>
                            <?php $PlanDec = bcdiv($Plan, '1', 2);?>
                            <?php endif;?>
                            "color": "#A6CE39",
                            "startValue": 0,
                            <?php if ($code == $projects->ID_PROJECT && $Plan != 0): ?>
                            "endValue": <?=$PlanDec?>,
                            <?php else:?>
                            "endValue": <?=$projects->PLANNED?>,
                            <?php endif;?>
                            "radius": "100%",
                            "innerRadius": "70%",
                            <?php if ($code == $projects->ID_PROJECT && $Plan != 0): ?>
                            "balloonText": "<?=$PlanDec?>% Avance planeado",
                            <?php else:?>
                            "balloonText": "<?=$projects->PLANNED?>% Avance planeado",
                            <?php endif;?>
                        },
                        // Usuarios pagos
                        {
                            "color": "#E6E6E6",
                            "startValue": 0,
                            "endValue": 100,
                            "radius": "70%",
                            "innerRadius": "40%",
                            "balloonText": "Ejecutado",
                        },
                        {
                            <?php $EjecDec = bcdiv($Ejec, '1', 2);?>
                            "color": "#2CACE3",
                            "startValue": 0,
                            <?php if ($code == $projects->ID_PROJECT && $Plan != 0): ?>
                            "endValue": <?=$EjecDec?>,
                            <?php else:?>
                            "endValue": <?=$projects->EXECUTED?>,
                            <?php endif;?>
                            "radius": "70%",
                            "innerRadius": "40%",
                            <?php if ($code == $projects->ID_PROJECT && $Plan != 0): ?>
                            "balloonText": "<?=$EjecDec?>% Ejecutado",
                            <?php else:?>
                            "balloonText": "<?=$projects->EXECUTED?>% Ejecutado",
                            <?php endif;?>
                        },
                    ]
                }
            ],
            // "export": {
            //     "enabled": false
            // }
        }
    );
    // Curva de avance físico
    var chart = AmCharts.makeChart("caf",{
          "type": "serial",
          "categoryField": "date",
          "dataDateFormat": "YYYY-MM-DD",
          "fontFamily": "'Open Sans'",
          "theme": "default",
          "language": "es",
          "categoryAxis": {
              "equalSpacing": true,
              "gridPosition": "start",
              "minPeriod": "DD",
              "parseDates": true,
              "startOnAxis": true,
              "axisAlpha": 0,
              "gridAlpha": 0,
              "labelOffset": -1,

          },
          "chartCursor": {
              "enabled": true,
              "categoryBalloonDateFormat": "DD MMM YYYY",
              "cursorColor": "#00A34B"
          },
          "chartScrollbar": {
              "enabled": true,
              "graph": "AmGraph-3",
              "graphType": "line",
              "gridCount": 7,
              "offset": 40,
              "oppositeAxis": false,
              "scrollbarHeight": 40,
          },
          "trendLines": [],
          "graphs": [
              {
                "id": "AmGraph-1",
                "lineColor": "#A6CE39",
                "lineThickness": 3,
                "title": "Planeado",
                "valueField": "column"
              },
              {
                  "id": "AmGraph-2",
                  "lineColor": "#2CACE3",
                  "lineThickness": 3,
                  "title": "Ejecutado",
                  "valueField": "column-2"
              },
              {
                "customBullet": "",
                "dashLength": 7,
                "id": "AmGraph-3",
                "labelPosition": "right",
                "labelText": "",
                "lineColor": "#fc9219",
                "lineThickness": 3,
                "minBulletSize": 3,
                "showAllValueLabels": true,
                "title": "Estimado a completar",
                "valueField": "column-3"
              }
          ],
          "guides": [],
          "valueAxes": [
              {
                  "id": "ValueAxis-1",
                  "minimum": 0,
                  "maximum": 100,
                  "totalText": "",
                  "unit": "%",
                  "axisAlpha": 0,
                  "gridAlpha": 0.06,
                  "title": ""
              }
          ],
          "allLabels": [],
          "balloon": {},
          "legend": {
              "enabled": true,
              "autoMargins": false,
              "marginRight": 0,
              "markerSize": 15,
              "fontSize": 13,
              "position": "top",
              "spacing": 16,
              "useGraphSettings": true
          },
          "titles": [],
          "dataProvider": [
              <?php for ($i=0; $i<$cont; $i++): ?>
              {
                   <?php $blDec = bcdiv($blJson[$i], '1', 4);?>
                   <?php $evDec = bcdiv($evJson[$i], '1', 4);?>
                   <?php $acDec = bcdiv($acJson[$i], '1', 4);?>
                   "date": "<?=$fecJson[$i]?>",
                   "column-3": "<?=$acJson[$i]?>",
                   <?php if (is_numeric($evJson[$i])):?>
                   "column-2": "<?=$evJson[$i]?>",
                   <?php else: ?>
                   "column-2": null,
                   <?php endif;?>
                    <?php if (is_numeric($blJson[$i])):?>
                   "column": "<?=$blJson[$i]?>"
                   <?php else: ?>
                   "column": null,
                   <?php endif;?>
              },
                <?php endfor; ?>
          ],
      }
  );
    if (<?=$longitudArrayDate?> != 0) {
      AmCharts.makeChart("tg",
          {
              "type": "serial",
              "categoryField": "category",
              "dataDateFormat": "YYYY-MM-DD",
              "categoryAxis": {
                  "autoRotateAngle": 90,
                  "autoRotateCount": 12,
                  "equalSpacing": true,
                  "gridPosition": "start",
                  "minPeriod": "MM",
                  "axisAlpha": 0,
                  "fontSize": 10,
                  "gridAlpha": 0,
                  "ignoreAxisWidth": true,
                  "titleBold": false
              },
              "chartCursor": {
                  "enabled": true,
                  "cursorColor": "#00A34B"
              },
              "chartScrollbar": {
                  "enabled": true,
                  "color": "#BBBBBB",
                  "graphType": "line",
                  "gridCount": 4,
                  "offset": 60,
                  "oppositeAxis": false,
                  "scrollbarHeight": 40
              },
              "trendLines": [],
              "graphs": [
                  {
                      "columnWidth": 0.67,
                      "fillAlphas": 1,
                      "id": "plannedAnnual",
                      "lineAlpha": 0,
                      "lineColor": "#2376BC",
                      "lineThickness": 0,
                      "title": "Planeado",
                      "type": "column",
                      "valueAxis": "ValueAxis-1",
                      "valueField": "col-plannedAnnual",
                      "xAxis": "ValueAxis-1",
                      "yAxis": "ValueAxis-1"
                  },
                  {
                      "columnWidth": 0.71,
                      "fillAlphas": 1,
                      "id": "executedAnnual",
                      "lineColor": "#FF8000",
                      "title": "Ejecutado",
                      "type": "column",
                      "valueAxis": "ValueAxis-1",
                      "valueField": "col-executedAnnual",
                      "xAxis": "ValueAxis-1",
                      "yAxis": "ValueAxis-1"
                  },
                  {
                      "customMarker": "",
                      "id": "executed",
                      "lineColor": "#FBB800",
                      "lineThickness": 3,
                      "title": "Ejecutado",
                      "valueAxis": "ValueAxis-2",
                      "valueField": "col-executed",
                      "xAxis": "ValueAxis-2",
                      "yAxis": "ValueAxis-2"
                  },
                  {
                      "dashLength": 4,
                      "id": "forecast",
                      "lineColor": "#4D91CE",
                      "lineThickness": 3,
                      "title": "Forecast",
                      "valueAxis": "ValueAxis-2",
                      "valueField": "col-forecast"
                  },
                  {
                      "fillColors": "undefined",
                      "id": "planned",
                      "lineColor": "#BBBBBB",
                      "lineThickness": 3,
                      "title": "Planeado",
                      "valueAxis": "ValueAxis-2",
                      "valueField": "col-planned"
                  }
              ],
              "guides": [],
              "valueAxes": [
                  {
                      "id": "ValueAxis-1",
                      "unit": "USD ",
                      "unitPosition": "left",
                      "axisAlpha": 0,
                      "fontSize": 10,
                      "gridAlpha": 0.05,
                      "title": "MILLONES",
                      "titleBold": false,
                      "titleFontSize": 10
                  },
                  {
                      "id": "ValueAxis-2",
                      "position": "right",
                      "unit": "USD ",
                      "unitPosition": "left",
                      "axisAlpha": 0,
                      "fontSize": 10,
                      "gridAlpha": 0,
                      "title": "MILLONES",
                      "titleBold": false,
                      "titleFontSize": 10
                  }
              ],
              "allLabels": [],
              "balloon": {},
              "legend": {
                  "enabled": true,
                  "autoMargins": false,
                  "marginRight": 0,
                  "position": "top",
                  "spacing": 16,
                  "useGraphSettings": true
              },
              "titles": [],
              "dataProvider": [
                <?php for ($a=1; $a<=$longitudArrayDate; $a++): ?>
                {
                  <?php $excelEjecutadoDec = bcdiv($excelEjecutado[$a], '1', 4);?>
                  <?php $excelPlaneadoDec = bcdiv($excelPlaneado[$a], '1', 4);?>
                  <?php $excelProyectadoDec = bcdiv($excelProyectado[$a], '1', 4);?>
                    "category": "<?=$excelDate[$a]?>",
                  <?php if (strlen($excelDate[$a])<5):?>
                    "col-plannedAnnual": "<?=$excelPlaneadoDec?>",
                    "col-executedAnnual": "<?=$excelEjecutadoDec?>",
                    "col-executed": "null",
                    "col-forecast": "null",
                    "col-planned": "null"
                  <?php elseif (strlen($excelDate[$a])>4):?>
                    "col-plannedAnnual": "null",
                    "col-executedAnnual": "null",
                    <?php if (is_numeric($excelEjecutado[$a])):?>
                    "col-executed": "<?=$excelEjecutadoDec?>",
                    <?php else:?>
                    "col-executed": "null",
                    <?php endif;?>
                    <?php if (is_numeric($excelProyectado[$a])):?>
                    "col-forecast": "<?=$excelProyectadoDec?>",
                    <?php else:?>
                    "col-forecast": "null",
                    <?php endif;?>
                    "col-planned": "<?=$excelPlaneadoDec?>"
                  <?php endif;?>
                },
                <?php endfor; ?>
              ]
          }
      );
    }
</script>
<?php if ($code == $projects->ID_PROJECT && $spi != 0): ?>
  <?php $SPI = $spi;?>
<?php elseif ($projects->EXECUTED == null || $projects->PLANNED == null):?>
  <?php $SPI = 0?>
<?php else:?>
<?php $SPI = number_format($projects->EXECUTED/$projects->PLANNED, 2, '.', '');?>
<?php endif;?>
<div class="section bcrumb project">
    <?php
    setlocale(LC_ALL, "es_ES");
    $FoPo = strftime("%d %B, %Y", strtotime($projects->FOPO));
    $FePo = strftime("%d %B, %Y", strtotime($projects->FEPO));
    $Adj = strftime("%d %B, %Y", strtotime($projects->ADJUDICACION));
    $Apr = strftime("%d %B, %Y", strtotime($projects->APROBACION));
    $n = intval($projects->FASE);
    $res = '';
    /*** Array con los numeros romanos  ***/
    $roman_numerals = array(
       'M'  => 1000,
       'CM' => 900,
       'D'  => 500,
       'CD' => 400,
       'C'  => 100,
       'XC' => 90,
       'L'  => 50,
       'XL' => 40,
       'X'  => 10,
       'IX' => 9,
       'V'  => 5,
       'IV' => 4,
       'I'  => 1);
    foreach ($roman_numerals as $roman => $number) {
        /*** Dividir para encontrar resultados en array ***/
        $matches = intval($n / $number);
        /*** Asignar el numero romano al resultado ***/
        $res .= str_repeat($roman, $matches);
        /*** Descontar el numero romano al total ***/
        $n = $n % $number;
    }
    ?>
    <sidebar class="project-sidebar">
        <?php if ($code == $projects->ID_PROJECT): ?>
          <h1><?=$name?></h1>
        <?php else: ?>
          <h1><?=$projects->PROJECT_NAME?></h1>
        <?php endif; ?>
        <div class="project-sidebar-phase phase" style="background-color:
            <?php foreach ($colorIndicator as $colorFase => $valueFase): ?>
              <?php if ($projects->FASE == $valueFase['minimun'] && $valueFase['indicator_name'] == 'FASE'):?>
                  <?php echo $valueFase['hexa_color'];?>
              <?php endif;?>
            <?php endforeach; ?>">
            <h2>Fase <?=$res?></h2>
        </div>
        <div class="project-sidebar-percentages">
            <div class="chart" id="advance" style="width:800px;height:200;"></div>
            <div class="legend">
              <?php if ($code == $projects->ID_PROJECT && $Plan != 0): ?>
                <h3 class="secondary-text"><?= $PlanDec ?>% Avance planeado</h3>
                <h3 class="accent-text"><?= $EjecDec ?>% Ejecutado</h3>
              <?php else:?>
                <h3 class="secondary-text"><?= $projects->PLANNED ?>% Avance planeado</h3>
                <h3 class="accent-text"><?= $projects->EXECUTED ?>% Ejecutado</h3>
              <?php endif;?>
            </div>
        </div>
        <div class="project-sidebar-info">
            <h2>Objetivo estratégico</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="project-sidebar-info">
            <h2>Información general</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="project-sidebar-info">
            <h2>Alcance</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="project-sidebar-info">
            <h2>Controles de cambio</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    </sidebar>

    <div class="project-content">
     <div class="indicators row wrap mb-4" style="margin: 0 !important">
      <h2 class="mb-2">Indicadores de cronograma</h2>
     </div>
        <div class="indicators row wrap" style="display: -webkit-box">
            <div class="d-flex col s6 m6 l4 xl3">
                <div class="indicator type-2" style="background-color:
                    <?php foreach ($colorIndicator as $colorFase => $valueFase): ?>
                      <?php if ($SPI >= $valueFase['minimun'] && $SPI <= $valueFase['maximo'] && $valueFase['indicator_name'] == 'SPI'):?>
                          <?php echo $valueFase['hexa_color'];?>
                      <?php endif;?>
                    <?php endforeach; ?>">
                    <h3 class="mr-2;" style="margin-top: 1%">SPI <span style="margin-left: 69%;"><?= $SPI ?></span></h3>
                </div>
            </div>
            <div class="d-flex col s6 m6 l4 xl3">
                <div class="indicator type-2 light-blue darken-2">
                    <h4 class="mr-2" style="margin-top: 2%">PORCENTAJE <small>AVANCE PLANEADO</small><span style="margin-left: 3.6%">
                        <?php if ($code == $projects->ID_PROJECT && $Plan != 0): ?>
                          <?= $PlanDec ?>%
                        <?php else:?>
                          <?= $projects->PLANNED ?>%
                        <?php endif;?>
                      </span>
                    </h4>
                </div>
            </div>
          </div>
          <div class="indicators row wrap" style="display: -webkit-box">
            <div class="d-flex col s6 m6 l4 xl3">
                <div class="indicator type-2 light-blue darken-3">
                    <h4 class="mr-2" style="margin-top: 2%">PORCENTAJE <small>AVANCE EJECUTADO</small><span style="margin-left: 4px">
                        <?php if ($code == $projects->ID_PROJECT && $Ejec != 0): ?>
                          <?= $EjecDec ?>%
                        <?php else:?>
                          <?= $projects->EXECUTED ?>%
                        <?php endif;?>
                      </span>
                    </h4>
                </div>
            </div>
            <div class="d-flex col s6 m6 l4 xl3">
                <div class="indicator type-2 light-blue darken-3">
                    <h4 class="mr-2" style="margin-top: 2%">FEPO<span style="margin-left: 45%">
                        <?php if($projects->FEPO != null):?>
                          <?= $FePo ?>
                        <?php endif;?>
                      </span>
                    </h4>
                </div>
            </div>
        </div>
      <div class="indicators row wrap mb-4" style="margin: 0 !important">
        <h2 class="mb-2">Indicadores de presupuesto</h2>
        <h3>Total proyecto</h3>
      </div>
        <div class="indicators row wrap" style="display: -webkit-box">
          <div class="d-flex col s6 m6 l4 xl3">
              <div class="indicator type-2 secondary">
                  <h4 class="fw-600 mr-2" style="margin-top: 2%">AC/PPTO <span style="margin-left: 60%"><?= $budgetIndicators['acPpto'] ?></span></h4>
              </div>
          </div>
            <div class="d-flex col s6 m6 l4 xl3">
                <div class="indicator type-2 secondary modal-trigger" href="#detailValueExecuted">
                    <h4 class="fw-600 mr-2" style="margin-top:2%">AC
                        <?php if($projects->AC != null):?>
                          <span style="margin-left: 47%">USD $ <?=number_format($projects->AC,2,",",".")?> MM</span>
                        <?php endif;?>
                    </h4>
                </div>
            </div>
          </div>
          <div class="indicators row wrap mb-4" style="display: -webkit-box">
            <div class="d-flex col s6 m6 l4 xl3">
                <div class="indicator type-2 secondary modal-trigger" href="#detailValueExecuted">
                    <h5 class="fw-600">PRESUPUESTO TOTAL</h5>
                    <?php if($budgetIndicators['totalBudget'] != null):?>
                      <h4 class="fw-600 right-align" style="margin-right: 3%">USD $ <?= $budgetIndicators['totalBudget'] ?> MM</h4>
                    <?php else:?>
                      <h4 class="fw-600 right-align"></h4>
                    <?php endif;?>
                </div>
            </div>
            <div class="d-flex col s6 m6 l4 xl3">
                <div class="indicator type-2 secondary darken-1 modal-trigger" href="#detailValueExecuted">
                    <h5 class="fw-600">FORECAST TOTAL</h5>
                    <h4 class="fw-600 right-align" style="margin-right: 3%"><?= number_format($budgetIndicators['forecastTotal'],2,",",".") ?> MM</h4>
                </div>
            </div>
          </div>
          <div class="indicators row wrap mb-4">
            <h3 class="mt-3">Anual proyecto</h3>
          </div>
           <div class="indicators row wrap" style="display: -webkit-box">
             <div class="d-flex col s6 m6 l4 xl3">
                 <div class="indicator type-2 secondary darken-1 modal-trigger">
                     <h4 class="mr-2" style="margin-top: 2%">CPI <small>ANUAL 2019</small><span style="margin-left: 59%"><?= $budgetIndicators['cpiAnnual'] ?></span></h4>
                 </div>
             </div>
               <div class="d-flex col s6 m6 l4 xl3">
                   <div class="indicator type-2 secondary darken-1 modal-trigger" href="#detailValueExecuted">
                      <h4 class="fw-600 mr-2" style="margin-top:2%">AC <small>2019</small><span style="margin-left: 37%">USD $ <?=number_format($projects->PROJ_AC,2,",",".")?> MM</span></h4>
                   </div>
               </div>
             <!-- <div class="d-flex col s6 m6 l4 xl3">
                <div class="indicator type-2 secondary darken-1 modal-trigger" href="#detailValueExecuted">
                  <h4 class="mr-2">CPI <small>ANUAL 2019 <span style="margin-left: 48%"></?= $budgetIndicators['cpiAnnual'] ?></span></small></h4>
                </div>
            </div>
            <div class="d-flex col s6 m6 l4 xl3">
                <div class="indicator type-2 secondary darken-1 modal-trigger" href="#detailValueExecuted">
                    <h4 class="fw-600 mr-2">AC <small>2019</small></h4>
                    </?php if($projects->PROJ_AC != null):?>
                        <h5 class="fw-600 ml-auto right-align">USD $ </?=number_format($projects->PROJ_AC,2,",",".")?> MM</h5>
                    </?php endif;?>
                </div>
            </div> -->
          </div>
        <div class="indicators row wrap" style="display: -webkit-box">
          <div class="d-flex col s6 m6 l4 xl3">
              <div class="indicator type-2 secondary darken-2 modal-trigger" href="#detailValueExecuted">
                  <h5 class="fw-600">PV 2019</h5>
                  <h4 class="fw-600 right-align" style="margin-right: 3%">
                    <?php if($projects->PV != null):?>
                      USD $ <?=number_format($projects->PV,2,",",".")?> MM
                    <?php endif;?>
                  </h4>
              </div>
          </div>
          <div class="d-flex col s6 m6 l4 xl3">
              <div class="indicator type-2 secondary darken-2 modal-trigger" href="#detailValueExecuted">
                  <h5 class="fw-600">PRESUPUESTO 2019</h5>
                  <h4 class="fw-600 right-align" style="margin-right: 3%">USD $ <?= number_format($budgetIndicators['annualBudget'],2,",",".") ?> MM</h4>
              </div>
          </div>
          <!-- <div class="d-flex col s6 m6 l4 xl3">
              <div class="indicator type-2 secondary darken-2 modal-trigger" href="#detailValueExecuted">
                <h4 class="fw-600 mr-2">PV <small>2019</small></h4>
                  </?php if($projects->PV != null):?>
                    <h5 class="fw-600 ml-auto right-align">USD $ </?=number_format($projects->PV,2,",",".")?> MM</h5>
                  </?php endif;?>
              </div>
          </div>
            <div class="divider transparent"></div>
            <div class="d-flex col s6 m6 l4 xl3">
                <div class="indicator type-2 secondary darken-2 modal-trigger" href="#detailValueExecuted">
                    <h5 class="fw-600">PRESUPUESTO 2019</h5>
                    <h4 class="fw-600 right-align">USD $ </?= number_format($budgetIndicators['annualBudget'],2,",",".") ?> MM</h4>
                </div>
            </div> -->
            <!-- <div class="d-flex col s6 m6 l4 xl3">
                <div class="indicator type-2 secondary darken-2 modal-trigger" href="#detailValueExecuted">
                    <h5 class="fw-600">FORECAST 2019</h5>
                    <h4 class="fw-600 right-align">USD $ </?= number_format($budgetIndicators['annualForecast'],2,",",".") ?> MM</h4>
                </div>
            </div> -->
        </div>
        <div class="indicators row wrap mb-4" style="display: -webkit-box">
          <div class="d-flex col s6 m6 l4 xl3">
              <div class="indicator type-2 secondary darken-2 modal-trigger" href="#detailValueExecuted">
                  <h5 class="fw-600">FORECAST 2019</h5>
                  <h4 class="fw-600 right-align" style="margin-right: 3%">USD $ <?= number_format($budgetIndicators['annualForecast'],2,",",".") ?> MM</h4>
              </div>
          </div>
        </div>
        <?php if ($cont != 0): ?>
          <div id="idchart" class="chart" style="width:800px;height:200;">
              <h2>Curva de Avance Físico</h2>
              <div class="chart-content" id="caf" style="width:800px;height:200;"></div>
          </div>
        <?php endif;?>
        <?php if ($longitudArrayDate != 0):?>
          <div id="idchart-tg" class="chart" style="width:800px;height:200; display: inline-block; margin-bottom: -100px;">
              <h2>Tres Generaciones</h2>
              <div class="chart-content" id="tg" style="width:800px;height:200;"></div>
          </div>
      <?php endif;?>
      <script>
      var csrfToken = <?= json_encode($this->request->getParam('_csrfToken')) ?>;
      </script>
        <div class="chart" style="margin-top: 10%">
            <h2>Riesgos</h2>
            <div class="chart-risk">
              <?php if($ActualEps == 34013 || $projects->EPS_REL == 34013 || $ActualEps == 34021 || $projects->EPS_REL == 34021
              || $ActualEps == 34015 || $projects->EPS_REL == 34015 || $ActualEps == 34017 || $projects->EPS_REL == 34017):?>
              <div class="indicators row">
                  <div class="col s12 m12 l12 xl6">
                      <div class="indicator type-1 secondary">
                        <?php if($projects->IGR != null):?>
                          <h4 class="fw-600" style="margin-left: 42%">IGR <?= $projects->IGR ?>%</h4>
                        <?php else:?>
                          <h4 class="fw-600 ml-auto mr-auto" style="margin-left:50%; padding-left:50%">IGR</h4>
                        <?php endif;?>
                      </div>
                  </div>
                </div>
              <?php endif;?>
                <div class="heatmap" style="padding-left: 8%; margin-top: 8%; margin-bottom: 4%; display: inline-block; margin-bottom: -20px;">
                    <table>
                        <tr>
                            <th class="title" rowspan="5"><h3 class="vert" style="-webkit-transform: rotate(270deg); -webkit-backface-visibility: hidden;">Probabilidad</h3></th>
                            <th>MA</th>
                            <td class="yellow">
                                <?php foreach ($rks as $rk):
                                  if ($rk->PROJECT_CODE == $projects->id) {
                                      if ($rk->IMPACT == 1 && $rk->PROBABILITY == 5) {
                                          echo '<span>' .$rk->RISK_NUMBER. '</span>';
                                      };
                                  };
                                endforeach; ?>
                            </td>
                            <td class="yellow">
                                <?php foreach ($rks as $rk):
                                  if ($rk->PROJECT_CODE == $projects->id) {
                                      if ($rk->IMPACT == 2 && $rk->PROBABILITY == 5) {
                                          echo '<span>' .$rk->RISK_NUMBER. '</span>';
                                      };
                                  };
                                endforeach; ?>
                            </td>
                            <td class="orange">
                                <?php foreach ($rks as $rk):
                                  if ($rk->PROJECT_CODE == $projects->id) {
                                      if ($rk->IMPACT == 3 && $rk->PROBABILITY == 5) {
                                          echo '<span>' .$rk->RISK_NUMBER. '</span>';
                                      };
                                  };
                                endforeach; ?>
                            </td>
                            <td class="red">
                                <?php foreach ($rks as $rk):
                                  if ($rk->PROJECT_CODE == $projects->id) {
                                      if ($rk->IMPACT == 4 && $rk->PROBABILITY == 5) {
                                          echo '<span>' .$rk->RISK_NUMBER. '</span>';
                                      };
                                  };
                                endforeach; ?>
                            </td>
                            <td class="red">
                                <?php foreach ($rks as $rk):
                                  if ($rk->PROJECT_CODE == $projects->id) {
                                      if ($rk->IMPACT == 5 && $rk->PROBABILITY == 5) {
                                          echo '<span>' .$rk->RISK_NUMBER. '</span>';
                                      };
                                  };
                                endforeach; ?>
                            </td>
                        </tr>
                        <tr>
                            <th>A</th>
                            <td class="yellow">
                                <?php foreach ($rks as $rk):
                                  if ($rk->PROJECT_CODE == $projects->id) {
                                      if ($rk->IMPACT == 1 &&  $rk->PROBABILITY == 4) {
                                          echo '<span>' .$rk->RISK_NUMBER. '</span>';
                                      };
                                  };
                                endforeach; ?>
                            </td>
                            <td class="yellow">
                              <?php foreach ($rks as $rk):
                                if ($rk->PROJECT_CODE == $projects->id) {
                                    if ($rk->IMPACT == 2 && $rk->PROBABILITY == 4) {
                                        echo '<span>' .$rk->RISK_NUMBER. '</span>';
                                    };
                                };
                                endforeach; ?>
                            </td>
                            <td class="orange">
                                <?php foreach ($rks as $rk):
                                  if ($rk->PROJECT_CODE == $projects->id) {
                                      if ($rk->IMPACT == 3 && $rk->PROBABILITY == 4) {
                                          echo '<span>' .$rk->RISK_NUMBER. '</span>';
                                      };
                                  };
                                endforeach; ?>
                            </td>
                            <td class="orange">
                                <?php foreach ($rks as $rk):
                                  if ($rk->PROJECT_CODE == $projects->id) {
                                      if ($rk->IMPACT == 4 && $rk->PROBABILITY == 4) {
                                          echo '<span>' .$rk->RISK_NUMBER. '</span>';
                                      };
                                  };
                                endforeach; ?>
                            </td>
                            <td class="red">
                                <?php foreach ($rks as $rk):
                                  if ($rk->PROJECT_CODE == $projects->id) {
                                      if ($rk->IMPACT == 5 && $rk->PROBABILITY == 4) {
                                          echo '<span>' .$rk->RISK_NUMBER. '</span>';
                                      };
                                  };
                                endforeach; ?>
                            </td>
                        </tr>
                        <tr>
                            <th>M</th>
                            <td class="lime accent-4">
                                <?php foreach ($rks as $rk):
                                  if ($rk->PROJECT_CODE == $projects->id) {
                                      if ($rk->IMPACT == 1 && $rk->PROBABILITY == 3) {
                                          echo '<span>' .$rk->RISK_NUMBER. '</span>';
                                      };
                                  };
                                endforeach; ?>
                            </td>
                            <td class="yellow">
                                <?php foreach ($rks as $rk):
                                  if ($rk->PROJECT_CODE == $projects->id) {
                                      if ($rk->IMPACT == 2 && $rk->PROBABILITY == 3) {
                                          echo '<span>' .$rk->RISK_NUMBER. '</span>';
                                      };
                                  };
                                endforeach; ?>
                            </td>
                            <td class="yellow">
                                <?php foreach ($rks as $rk):
                                  if ($rk->PROJECT_CODE == $projects->id) {
                                      if ($rk->IMPACT == 3 && $rk->PROBABILITY == 3) {
                                          echo '<span>' .$rk->RISK_NUMBER. '</span>';
                                      };
                                  };
                                endforeach; ?>
                            </td>
                            <td class="orange">
                                <?php foreach ($rks as $rk):
                                  if ($rk->PROJECT_CODE == $projects->id) {
                                      if ($rk->IMPACT == 4 && $rk->PROBABILITY == 3) {
                                          echo '<span>' .$rk->RISK_NUMBER. '</span>';
                                      };
                                  };
                                endforeach; ?>
                            </td>
                            <td class="orange">
                                <?php foreach ($rks as $rk):
                                  if ($rk->PROJECT_CODE == $projects->id) {
                                      if ($rk->IMPACT == 5 && $rk->PROBABILITY == 3) {
                                          echo '<span>' .$rk->RISK_NUMBER. '</span>';
                                      };
                                  };
                                endforeach; ?>
                            </td>
                        </tr>
                        <tr>
                            <th>B</th>
                            <td class="lime accent-4">
                                <?php foreach ($rks as $rk):
                                  if ($rk->PROJECT_CODE == $projects->id) {
                                      if ($rk->IMPACT == 1 && $rk->PROBABILITY == 2) {
                                          echo '<span>' .$rk->RISK_NUMBER. '</span>';
                                      };
                                  };
                                endforeach; ?>
                            </td>
                            <td class="lime accent-4">
                                <?php foreach ($rks as $rk):
                                  if ($rk->PROJECT_CODE == $projects->id) {
                                      if ($rk->IMPACT == 2 && $rk->PROBABILITY == 2) {
                                          echo '<span>' .$rk->RISK_NUMBER. '</span>';
                                      };
                                  };
                                endforeach; ?>
                            </td>
                            <td class="yellow">
                                <?php foreach ($rks as $rk):
                                  if ($rk->PROJECT_CODE == $projects->id) {
                                      if ($rk->IMPACT == 3 && $rk->PROBABILITY == 2) {
                                          echo '<span>' .$rk->RISK_NUMBER. '</span>';
                                      };
                                  };
                                endforeach; ?>
                            </td>
                            <td class="yellow">
                                <?php foreach ($rks as $rk):
                                  if ($rk->PROJECT_CODE == $projects->id) {
                                      if ($rk->IMPACT == 4 && $rk->PROBABILITY == 2) {
                                          echo '<span>' .$rk->RISK_NUMBER. '</span>';
                                      };
                                  };
                                endforeach; ?>
                            </td>
                            <td class="yellow">
                                <?php foreach ($rks as $rk):
                                  if ($rk->PROJECT_CODE == $projects->id) {
                                      if ($rk->IMPACT == 5 && $rk->PROBABILITY == 2) {
                                          echo '<span>' .$rk->RISK_NUMBER. '</span>';
                                      };
                                  };
                                endforeach; ?>
                            </td>
                        </tr>
                        <tr>
                            <th>MB</th>
                            <td class="lime accent-4">
                                <?php foreach ($rks as $rk):
                                  if ($rk->PROJECT_CODE == $projects->id) {
                                      if ($rk->IMPACT == 1 && $rk->PROBABILITY == 1) {
                                          echo '<span>' .$rk->RISK_NUMBER. '</span>';
                                      };
                                  };
                                endforeach; ?>
                            </td>
                            <td class="lime accent-4">
                                <?php foreach ($rks as $rk):
                                  if ($rk->PROJECT_CODE == $projects->id) {
                                      if ($rk->IMPACT == 2 && $rk->PROBABILITY == 1) {
                                          echo '<span>' .$rk->RISK_NUMBER. '</span>';
                                      };
                                  };
                                endforeach; ?>
                            </td>
                            <td class="lime accent-4">
                                <?php foreach ($rks as $rk):
                                  if ($rk->PROJECT_CODE == $projects->id) {
                                      if ($rk->IMPACT == 3 && $rk->PROBABILITY == 1) {
                                          echo '<span>' .$rk->RISK_NUMBER. '</span>';
                                      };
                                  };
                                endforeach; ?>
                            </td>
                            <td class="lime accent-4">
                                <?php foreach ($rks as $rk):
                                  if ($rk->PROJECT_CODE == $projects->id) {
                                      if ($rk->IMPACT == 4 && $rk->PROBABILITY == 1) {
                                          echo '<span>' .$rk->RISK_NUMBER. '</span>';
                                      };
                                  };
                                endforeach; ?>
                            </td>
                            <td class="yellow">
                                <?php foreach ($rks as $rk):
                                  if ($rk->PROJECT_CODE == $projects->id) {
                                      if ($rk->IMPACT == 5 && $rk->PROBABILITY == 1) {
                                          echo '<span>' .$rk->RISK_NUMBER. '</span>';
                                      };
                                  };
                                endforeach; ?>
                            </td>
                        </tr>
                        <tr>
                            <th class="title" colspan="2"></th>
                            <th>MB</th>
                            <th>B</th>
                            <th>M</th>
                            <th>A</th>
                            <th>MA</th>
                        </tr>
                        <tr>
                            <th class="title" colspan="2"></th>
                            <th class="title" colspan="5">
                                <h3>Impacto</h3>
                            </th>
                        </tr>
                    </table>
                </div>
                <!-- <div class="chart-risk-list">
                    <ul>
                        </?php foreach ($rks as $rk): ?>
                          </?php  if ($rk->PROJECT_CODE == $projects->id):?>
                            <li>
                               <div href=</?='#'.$rk->id?> class="modal-trigger tooltipped" data-position="bottom" data-tooltip="</?=$rk->RISK_NAME?>">Riesgo </?=$rk->RISK_NUMBER?></div>
                            </li>
                          </?php endif;?>
                        </?php endforeach; ?>
                    </ul>
                </div> -->
            </div>
        </div>
        <!-- IMPORTANTE CAMBIOS SOLICITADOS -->
          <div class="data">
            <?php if ($ActualEps != 34013 && $projects->EPS_REL != 34013 && $ActualEps != 34021 && $projects->EPS_REL != 34021
                      && $ActualEps != 34015 && $projects->EPS_REL != 34015 && $ActualEps != 34017 && $projects->EPS_REL != 34017):?>
              <div class="data-distance2">
                  <?= $this->Html->image('icons/torre-blanca.svg', ['fullBase' => true]) ?>
                  <div class="data-distance2-content">
                      <h2>Longitud</h2>
                      <h3><?= $projects->DISTANCIA ?> Km</h3>
                      <div class="line-distance"></div>
                      <h4>de líneas de transmisión de</h4>
                      <h5><?= $projects->LINEA_TRANS ?>kV</h5>
                      <div class="divider white mt-3 mb-1"></div>
                      <h6><?= $projects->TORRE ?> Torres</h6>
                  </div>
                  <?= $this->Html->image('icons/torre-blanca.svg', ['fullBase' => true]) ?>
              </div>
            <?php else:?>
              <div class="data-distance" style="display: -webkit-box;">
                  <figure class="data-distance-valve start" style="height: 200px">
                      <?= $this->Html->image('icons/valvula-izq.svg', ['fullBase' => true]) ?>
                  </figure>
                  <div class="data-distance-content">
                    <h2>Longitud</h2>
                    <h3><?= $projects->DISTANCIA ?> Km</h3>
                    <div class="line-distance"></div>
                    <h4>ECG</h4>
                    <h5>No. <?= $projects->LINEA_TRANS ?></h5>
                    <div class="divider white mt-3 mb-1"></div>
                    <h6><?= $projects->TORRE ?> Facilidades</h6>
                  </div>
                  <figure class="data-distance-valve end" style="height: 200px">
                      <?= $this->Html->image('icons/valvula-der.svg', ['fullBase' => true]) ?>
                  </figure>
              </div>
            <?php endif;?>
          </div>
          <div class="map">
              <?= $this->Html->image('maps/'.$projects->ID_PROJECT.'/'.$projects->FOTO, ['fullBase' => true]) ?>
          </div>
          <div class="data">
              <div class="data-content">
                  <ul style="display: -webkit-box;">
                      <li>
                          <i class="material-icons">event</i>
                          <?php if($projects->FOPO != null):?>
                            <span>FoPo: <?= $FoPo ?></span>
                          <?php else:?>
                            <span>FoPo:</span>
                          <?php endif;?>
                      </li>
                      <?php if ($projects->ADJUDICACION != null):?>
                      <li>
                          <i class="material-icons">event_note</i>
                          <span>Adjudicación: <?= $Adj ?></span>
                      </li>
                    <?php else:?>
                      <li>
                          <i class="material-icons">event_note</i>
                          <span>Adjudicación: No aplica</span>
                      </li>
                    <?php endif;?>
                      <li>
                          <i class="material-icons">event_available</i>
                          <?php if ($code == $projects->ID_PROJECT && $ActualEps != 34013 && $projects->EPS_REL != 34013 && $ActualEps != 34021 && $projects->EPS_REL != 34021
                            && $ActualEps != 34015 && $projects->EPS_REL != 34015 && $ActualEps != 34017 && $projects->EPS_REL != 34017): ?>
                            <span>Fecha corte: <?= strftime("%d %B, %Y", strtotime($corte));?></span>
                          <?php elseif($code == null && $ActualEps != 34013 && $projects->EPS_REL != 34013 && $ActualEps != 34021 && $projects->EPS_REL != 34021
                            && $ActualEps != 34015 && $projects->EPS_REL != 34015 && $ActualEps != 34017 && $projects->EPS_REL != 34017):?>
                            <span>Fecha corte: <?= $Apr ?></span>
                          <?php else:?>
                            <span>Fecha SPI: <?= strftime("%d %B, %Y", strtotime($corte));?></span>
                          <?php endif;?>
                      </li>
                      <li>
                        <?php if($ActualEps != 34013 && $projects->EPS_REL != 34013 && $ActualEps != 34021 && $projects->EPS_REL != 34021
                          && $ActualEps != 34015 && $projects->EPS_REL != 34015 && $ActualEps != 34017 && $projects->EPS_REL != 34017):?>
                          <i class="material-icons">straighten</i>
                          <span>Longitud: <?= $projects->DISTANCIA ?> Km</span>
                        <?php else:?>
                          <i class="material-icons">date_range</i>
                          <?php if ($projects->CPI_DATE != null): ?>
                          <span>Fecha CPI: <?= strftime("%d %B, %Y", strtotime($projects->CPI_DATE));?></span>
                          <?php else:?>
                            <span>Fecha CPI:</span>
                          <?php endif;?>
                        <?php endif;?>
                      </li>
                    </ul>
                    <ul style="display: -webkit-box;">
                      <li>
                        <?php if($ActualEps != 34013 && $projects->EPS_REL != 34013 && $ActualEps != 34021 && $projects->EPS_REL != 34021
                          && $ActualEps != 34015 && $projects->EPS_REL != 34015 && $ActualEps != 34017 && $projects->EPS_REL != 34017):?>
                          <i class="material-icons">place</i>
                            <span>No. de subestaciones: <?= $projects->NUM_SUBESTACION ?></span>
                        <?php else:?>
                            <i class="material-icons">event</i>
                          <?php if ($projects->IGR_DATE != null): ?>
                            <span>Fecha IGR: <?=strftime("%d %B, %Y", strtotime($projects->IGR_DATE))?></span>
                          <?php else: ?>
                            <span>Fecha IGR:</span>
                          <?php endif; ?>
                        <?php endif;?>
                      </li>
                  </ul>
              </div>
          </div>
    </div>
</div>

<!-- Modal detalle valor ejecutado -->
<div id="detailValueExecuted" class="modal">
    <div class="modal-content">
        <a class="modal-close close">
            <i class="material-icons">close</i>
        </a>
        <h2>Detalle valor ejecutado</h2>
        <ul class="collapsible collapsible-data">
            <li>
                <div class="collapsible-header">
                    <i class="material-icons">keyboard_arrow_down</i>
                    <ul class="collapsible-header-content">
                        <li>
                            <small>Código (CBS)</small>
                            <h3>1</h3>
                        </li>
                        <li>
                            <small>Descripción</small>
                            <h3>Proyecto</h3>
                        </li>
                        <li>
                            <small>Monto (COP)</small>
                            <h3>$ 35,564,214,614</h3>
                        </li>
                        <li>
                            <small>Monto (USD)</small>
                            <h3>$ 1,564,214,614</h3>
                        </li>
                    </ul>
                </div>
                <div class="collapsible-body">
                    <ul class="collapsible">
                        <li>
                            <div class="collapsible-header">
                                <i class="material-icons">keyboard_arrow_down</i>
                                <ul class="collapsible-header-content">
                                    <li>
                                        <small>Código (CBS)</small>
                                        <h3>2</h3>
                                    </li>
                                    <li>
                                        <small>Descripción</small>
                                        <h3>Proyecto</h3>
                                    </li>
                                    <li>
                                        <small>Monto (COP)</small>
                                        <h3>$ 35,564,214,614</h3>
                                    </li>
                                    <li>
                                        <small>Monto (USD)</small>
                                        <h3>$ 1,564,214,614</h3>
                                    </li>
                                </ul>
                            </div>
                            <div class="collapsible-body">
                                <ul class="collapsible">
                                    <li>
                                        <div class="collapsible-header">
                                            <i class="material-icons">keyboard_arrow_down</i>
                                            <ul class="collapsible-header-content">
                                                <li>
                                                    <small>Código (CBS)</small>
                                                    <h3>3</h3>
                                                </li>
                                                <li>
                                                    <small>Descripción</small>
                                                    <h3>Proyecto</h3>
                                                </li>
                                                <li>
                                                    <small>Monto (COP)</small>
                                                    <h3>$ 35,564,214,614</h3>
                                                </li>
                                                <li>
                                                    <small>Monto (USD)</small>
                                                    <h3>$ 1,564,214,614</h3>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="collapsible-body">
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>
<?php foreach ($rks as $rk): ?>
<!-- Modal detalle de riesgo -->
<div id=<?=$rk->id?> class="modal">
    <div class="modal-content">
        <a class="modal-close close">
            <i class="material-icons">close</i>
        </a>
        <h2>Detalle riesgo</h2>
        <table>
            <tr>
                <th width="30%">Riesgo</th>
                <td><?=$rk->RISK_NUMBER?></td>
            </tr>
            <tr>
                <th>Nombre Riesgo</th>
                <td><?=$rk->RISK_NAME?></td>
            </tr>
            <tr>
                <th>Probabilidad</th>
                <?php  if ($rk->PROBABILITY == 1):?>
                <td>Muy baja</td>
                <?php endif;?>
                <?php  if ($rk->PROBABILITY == 2):?>
                <td>Baja</td>
                <?php endif;?>
                <?php  if ($rk->PROBABILITY == 3):?>
                <td>Media</td>
                <?php endif;?>
                <?php  if ($rk->PROBABILITY == 4):?>
                <td>Alta</td>
                <?php endif;?>
                <?php  if ($rk->PROBABILITY == 5):?>
                <td>Muy alta</td>
                <?php endif;?>
            </tr>
            <tr>
                <th>Impacto</th>
                <?php  if ($rk->IMPACT == 1):?>
                <td>Muy bajo</td>
                <?php endif;?>
                <?php  if ($rk->IMPACT == 2):?>
                <td>Bajo</td>
                <?php endif;?>
                <?php  if ($rk->IMPACT == 3):?>
                <td>Medio</td>
                <?php endif;?>
                <?php  if ($rk->IMPACT == 4):?>
                <td>Alto</td>
                <?php endif;?>
                <?php  if ($rk->IMPACT == 5):?>
                <td>Muy alto</td>
                <?php endif;?>
            </tr>
            <tr>
                <th>Impacto del riesgo</th>
                <td><?=$rk->IMPACT_RISK?></td>
            </tr>
            <tr>
                <th>Plan de Respuesta 01</th>
                <td><?=$rk->PLAN_ONE?></td>
            </tr>
            <tr>
                <th>Plan de Respuesta 02</th>
                <td><?=$rk->PLAN_TWO?></td>
            </tr>
            <tr>
                <th>Plan de Respuesta 03</th>
                <td><?=$rk->PLAN_THREE?></td>
            </tr>
            <tr>
                <th>Plan de Respuesta 04</th>
                <td><?=$rk->PLAN_FOUR?></td>
            </tr>
            <tr>
                <th>Plan de Respuesta 05</th>
                <td><?=$rk->PLAN_FIVE?></td>
            </tr>
            <tr>
                <th>Estado de las acciones</th>
                <?php  if ($rk->ACTION_STATE == "fase"):?>
                <td>N/A En esta fase.</td>
                <?php endif;?>
                <?php  if ($rk->ACTION_STATE == "ejecucion"):?>
                <td>En ejecución.</td>
                <?php endif;?>
                <?php  if ($rk->ACTION_STATE == "pendiente"):?>
                <td>Pendiente.</td>
                <?php endif;?>
                <?php  if ($rk->ACTION_STATE == "finalizado"):?>
                <td>Finalizado.</td>
                <?php endif;?>
            </tr>
            <tr>
                <th>Materialización del Riesgo</th>
                <?php  if ($rk->MATERIALIZACION == "abierto"):?>
                <td>Abierto.</td>
                <?php endif;?>
                <?php  if ($rk->MATERIALIZACION == "cerrado"):?>
                <td>Cerrado.</td>
                <?php endif;?>
                <?php  if ($rk->MATERIALIZACION == "materializado"):?>
                <td>Materializado.</td>
                <?php endif;?>
            </tr>
        </table>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn btn-depressed">Aceptar</a>
    </div>
</div>
<?php endforeach; ?>
<div id="EditChart" class="modal" onload="test22();">
    <div class="modal-content">
        <a class="modal-close close" id="button_caf_create" onclick="test22()">
            <i class="material-icons">close</i>
        </a>
        <h2>Filtrar gráfica</h2>
        <div class="row">
          <div class="input-field col s12">
            <select class="Select-Option-Column_Caf">
              <option value="0" disabled selected>Seleccione una opción</option>
              <option value="1">Planeado</option>
              <option value="2">Ejecutado</option>
              <option value="3">Estimado</option>
            </select>
            <label>Columna</label>
            <a id="button_caf_add"><i class="material-icons tooltipped" data-position="right" data-tooltip="Agregar" onclick="return false;">add_box</i></a>
            <a id="button_caf_cancel"><i class="material-icons tooltipped" data-position="right" data-tooltip="Cancelar" onclick="return false;">cancel</i></a>
          </div>
          <div class="input-field col s12">
            <select class="Select-Option-Date_Caf">
              <option value="0" disabled selected>Seleccione una opción</option>
              <option value="1">Abril</option>
            </select>
            <label>Fecha</label>
          </div>
        </div>
        <table id="id_table_caf">
            <thead>
              <tr role="row">
                <th id="IdCheckbox" width="8%" style="padding:10px">
                </th>
                <th id="IdColumnTitleDate">
                  <label>
                    <input id="CheckboxDateTitle" type="checkbox" class="filled-in" checked="checked" />
                      <span style="font-size:11px">Fecha</span>
                  </label>
                </th>
                <th id="IdColumnTitlePlan">
                  <label>
                    <input id="CheckboxPlanTitle" type="checkbox" class="filled-in" checked="checked" />
                      <span style="font-size:11px">Planeado</span>
                  </label>
                </th>
                <th id="IdColumnTitleEjec">
                  <label>
                    <input id="CheckboxEjecTitle" type="checkbox" class="filled-in" checked="checked" />
                      <span style="font-size:11px">Ejecutado</span>
                  </label>
                </th>
                <th id="IdColumnTitleBl">
                  <label>
                    <input id="CheckboxBlTitle" type="checkbox" class="filled-in" checked="checked" />
                      <span style="font-size:11px">Estimado</span>
                  </label>
                </th>
              </tr>
            </thead>
            <tbody>
             <?php for ($i=0; $i<$cont; $i++): ?>
              <tr id="IdTr<?=$i?>">
                <td id="IdColumnCheckbox<?=$i?>">
                  <label>
                    <input id="CheckboxData<?=$i?>" type="checkbox" class="filled-in" checked="checked" />
                    <span></span>
                  </label>
                </td>
                <td id="IdColumnDate<?=$i?>">
                  <input type="text" id="CheckboxDateData<?=$i?>" name="" value="<?=$fecJson[$i]?>">
                </td>
                <td id="IdColumnPlan<?=$i?>">
                  <input type="text" id="CheckboxPlanData<?=$i?>" name="" value="<?=$acJson[$i]?>">
                </td>
                <td id="IdColumnEjec<?=$i?>">
                  <input type="text" id="CheckboxEjecData<?=$i?>" name="" value="<?=$evJson[$i]?>">
                </td>
                <td id="IdColumnBl<?=$i?>">
                  <input type="text" id="CheckboxBlData<?=$i?>" name="" value="<?=$blJson[$i]?>">
                </td>
              </tr>
             <?php endfor;?>
            </tbody>
        </table>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn btn-depressed">Aceptar</a>
    </div>
</div>
