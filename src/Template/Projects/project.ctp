<?php
    // Breadcrumb
    $breadcrumb = [
      [ 'Inicio', 'home','Pages',''],
      [ 'Portal Proyectos','index','PortalProjects',''],
      [ 'Transmisión y transporte','companies','PortalProjects',''],
      [ 'Sucursal de Transmisión','company','PortalProjects',''],
      [ 'Crecimiento','projects','Projects',''],
    ];
    // Indicadores de cronograma
    // $scheduleIndicators = [
    //     'spi' => 0.90, // SPI
    //     'progressPercentagePlanned' => 63, // Porcentaje avance planeado
    //     'progressPercentageExecuted' => 57, //Porcentaje avance ejecutado
    //     'fepo' => 'Septiembre 30, 2020' // FEPO
    // ];
    //
    // // Indicadores de presupuesto
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
<script type="text/javascript" src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script type="text/javascript" src="https://www.amcharts.com/lib/3/serial.js"></script>
<script type="text/javascript" src="https://www.amcharts.com/lib/3/pie.js"></script>
<script type="text/javascript" src="https://www.amcharts.com/lib/3/gauge.js"></script>
<script src="https://www.amcharts.com/lib/3/lang/es.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
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
                            "color": "#A6CE39",
                            "startValue": 0,
                            "endValue": <?=$projects->PLANNED?>,
                            "radius": "100%",
                            "innerRadius": "70%",
                            "balloonText": "<?=$projects->PLANNED?>% Avance planeado",
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
                            "color": "#2CACE3",
                            "startValue": 0,
                            "endValue": <?=$projects->EXECUTED?>,
                            "radius": "70%",
                            "innerRadius": "40%",
                            "balloonText": "<?=$projects->EXECUTED?>% Ejecutado",
                        },
                    ]
                }
            ],
            "export": {
                "enabled": false
            }
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
                "labelOffset": -1

            },
            "chartCursor": {
                "enabled": true,
                "categoryBalloonDateFormat": "DD MMM YYYY",
                "cursorColor": "#00A34B"
            },
            "chartScrollbar": {
                "enabled": true,
                "graph": "AmGraph-1",
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
                    // "customBullet": "",
                    // "dashLength": 7,
                    "id": "AmGraph-2",
                    // "labelPosition": "right",
                    // "labelText": "",
                    "lineColor": "#2CACE3",
                    "lineThickness": 3,
                    // "minBulletSize": 3,
                    // "showAllValueLabels": true,
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
                  "title": "Completar",
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
                     "column-3": "<?=$acDec?>",
                     <?php if(is_numeric($evJson[$i])):?>
                     "column-2": "<?=$evDec?>",
                     <?php else: ?>
                     "column-2": null,
                     <?php endif;?>
                     "column": "<?=$blDec?>"

                },
                  <?php endfor; ?>
                // {
                //     "date": "2014-04-17",
                //     "column-1": "11",
                //     "column-2": "15"
                // },
            ],
            "export": {
                "enabled": true
            }
        }
    );
    AmCharts.makeChart("tg",
        {
            "type": "serial",
            "categoryField": "category",
            "dataDateFormat": "YYYY-MM-DD",
            "sequencedAnimation": false,
            "startDuration": 1,
            "categoryAxis": {
                "autoRotateAngle": 90,
                "autoRotateCount": 12,
                "equalSpacing": true,
                "gridPosition": "start",
                "minPeriod": "MM",
                "startOnAxis": true,
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
                    "id": "forecastReal",
                    "legendAlpha": 1,
                    "lineColor": "#953A12",
                    "lineThickness": 3,
                    "title": "Forecast real",
                    "valueAxis": "ValueAxis-2",
                    "valueField": "col-forecastReal"
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
                {
                    "category": "2013",
                    "col-plannedAnnual": "23.01",
                    "col-executedAnnual": "4.74",
                    "col-executed": "null",
                    "col-forecastReal": "null",
                    "col-forecast": "null",
                    "col-planned": "null"
                },
                {
                    "category": "2014",
                    "col-plannedAnnual": "58.07",
                    "col-executedAnnual": "8.40",
                    "col-executed": "null",
                    "col-forecastReal": "null",
                    "col-forecast": "null",
                    "col-planned": "null"
                },
                {
                    "category": "2015",
                    "col-plannedAnnual": "41.93",
                    "col-executedAnnual": "12.85",
                    "col-executed": "null",
                    "col-forecastReal": "null",
                    "col-forecast": "null",
                    "col-planned": "null"
                },
                {
                    "category": "2016",
                    "col-plannedAnnual": "25.38",
                    "col-executedAnnual": "2.16",
                    "col-executed": "null",
                    "col-forecastReal": "null",
                    "col-forecast": "null",
                    "col-planned": "null"
                },
                {
                    "category": "2017",
                    "col-plannedAnnual": "10.32",
                    "col-executedAnnual": "7.64",
                    "col-executed": "null",
                    "col-forecastReal": "null",
                    "col-forecast": "null",
                    "col-planned": "null"
                },
                {
                    "category": "2018-01",
                    "col-plannedAnnual": "null",
                    "col-executedAnnual": "null",
                    "col-executed": "0.2",
                    "col-forecastReal": "null",
                    "col-forecast": "null",
                    "col-planned": "1.7"
                },
                {
                    "category": "2018-02",
                    "col-plannedAnnual": "null",
                    "col-executedAnnual": "null",
                    "col-executed": "1",
                    "col-forecastReal": "null",
                    "col-forecast": "null",
                    "col-planned": "2"
                },
                {
                    "category": "2018-03",
                    "col-plannedAnnual": "null",
                    "col-executedAnnual": "null",
                    "col-executed": "2",
                    "col-forecastReal": "null",
                    "col-forecast": "null",
                    "col-planned": "3.5"
                },
                {
                    "category": "2018-04",
                    "col-plannedAnnual": "null",
                    "col-executedAnnual": "null",
                    "col-executed": "2.2",
                    "col-forecastReal": "null",
                    "col-forecast": "null",
                    "col-planned": "3.7"
                },
                {
                    "category": "2018-05",
                    "col-plannedAnnual": "null",
                    "col-executedAnnual": "null",
                    "col-executed": "3",
                    "col-forecastReal": "null",
                    "col-forecast": "null",
                    "col-planned": "4.1"
                },
                {
                    "category": "2018-06",
                    "col-plannedAnnual": "null",
                    "col-executedAnnual": "null",
                    "col-executed": "3.1",
                    "col-forecastReal": "null",
                    "col-forecast": "null",
                    "col-planned": "4.5"
                },
                {
                    "category": "2018-07",
                    "col-plannedAnnual": "null",
                    "col-executedAnnual": "null",
                    "col-executed": "3.2",
                    "col-forecastReal": "null",
                    "col-forecast": "null",
                    "col-planned": "4.8"
                },
                {
                    "category": "2018-08",
                    "col-plannedAnnual": "null",
                    "col-executedAnnual": "null",
                    "col-executed": "3.8",
                    "col-forecastReal": "null",
                    "col-forecast": "3.8",
                    "col-planned": "5.3"
                },
                {
                    "category": "2018-09",
                    "col-plannedAnnual": "null",
                    "col-executedAnnual": "null",
                    "col-executed": "4",
                    "col-forecastReal": "null",
                    "col-forecast": "4.7",
                    "col-planned": "6"
                },
                {
                    "category": "2018-10",
                    "col-plannedAnnual": "null",
                    "col-executedAnnual": "null",
                    "col-executed": "4.7",
                    "col-forecastReal": "null",
                    "col-forecast": "5.2",
                    "col-planned": "6.3"
                },
                {
                    "category": "2018-11",
                    "col-plannedAnnual": "null",
                    "col-executedAnnual": "null",
                    "col-executed": "5.02",
                    "col-forecastReal": "5.02",
                    "col-forecast": "6",
                    "col-planned": "7"
                },
                {
                    "category": "2018-12",
                    "col-plannedAnnual": "null",
                    "col-executedAnnual": "null",
                    "col-executed": "null",
                    "col-forecastReal": "6",
                    "col-forecast": "7.05",
                    "col-planned": "8.7"
                },
                {
                    "category": "2019",
                    "col-plannedAnnual": "8.5",
                    "col-executedAnnual": "null",
                    "col-executed": "null",
                    "col-forecastReal": "null",
                    "col-forecast": "null",
                    "col-planned": "null"
                },
                {
                    "category": "2020",
                    "col-plannedAnnual": "45.34",
                    "col-executedAnnual": "null",
                    "col-executed": "null",
                    "col-forecastReal": "null",
                    "col-forecast": "null",
                    "col-planned": "null"
                }
            ]
        }
    );
</script>
<div class="section bcrumb project">
  <div class="breadcrumb-container">
      <a href="javascript:history.back()" class="breadcrumb-back"><i class="material-icons">keyboard_arrow_left</i></a>
      <?php foreach ($breadcrumb as $item): ?>
          <!-- <a href="<//?= $item[1] ?>" class="breadcrumb"><//?= $item[0] ?></a> -->
          <?php echo $this->Html->link($item[0],
            ['controller'=>$item[2], 'action'=>$item[1]],
            ['escape' => false,'class'=>'breadcrumb']
          );?>
        <?php endforeach; ?>
        <?php echo $this->Html->link($projects->PROJECT_NAME,
          ['controller'=>'Projects', 'action'=>'project',$projects->id],
          ['escape' => false,'class'=>'breadcrumb']
        );?>
    </div>
    <?php
    setlocale(LC_ALL,"es_ES");
    $FoPo = strftime("%d %B, %Y",strtotime($projects->FOPO));
    $FePo = strftime("%d %B, %Y",strtotime($projects->FEPO));
    $Adj = strftime("%d %B, %Y",strtotime($projects->ADJUDICACION));
    $Apr = strftime("%d %B, %Y",strtotime($projects->APROBACION));

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

    foreach ($roman_numerals as $roman => $number)
    {
     /*** Dividir para encontrar resultados en array ***/
     $matches = intval($n / $number);

     /*** Asignar el numero romano al resultado ***/
     $res .= str_repeat($roman, $matches);

     /*** Descontar el numero romano al total ***/
     $n = $n % $number;
    }
    ?>
    <sidebar class="project-sidebar">
        <h1><?=$projects->PROJECT_NAME?></h1>
        <div class="project-sidebar-phase orange">
            <h2>Fase <?=$res?></h2>
        </div>
        <div class="project-sidebar-percentages">
            <a class="copyright-amcharts" href="http://www.amcharts.com" title="JavaScript charts" target="_blank">JS chart por amCharts</a>
            <div class="chart" id="advance"></div>
            <div class="legend">
                <h3 class="secondary-text"><?= $projects->PLANNED ?>% Avance planeado</h3>
                <h3 class="accent-text"><?= $projects->EXECUTED ?>% Ejecutado</h3>
            </div>
        </div>
        <div class="project-sidebar-info">
            <h2>Objetivo estratégico</h2>
            <p><?= $projects->Proj_Obj ?></p>
        </div>
        <div class="project-sidebar-info">
            <h2>Información general</h2>
            <p><?= $projects->DESCRIPTION ?></p>
        </div>
        <div class="project-sidebar-info">
            <h2>Alcance</h2>
            <p><?= $projects->ALCANCE ?></p>
        </div>
        <div class="project-sidebar-info">
            <h2>Solicitudes al MME modificaciones FOPO</h2>
            <p><?= $projects->SOLICITUD ?></p>
        </div>
    </sidebar>

    <div class="project-content">
        <div class="data">
            <div class="data-distance">
                <?= $this->Html->image('icons/torre-blanca.svg') ?>
                <div class="data-distance-content">
                    <h2>Distancia</h2>
                    <h3><?= $projects->DISTANCIA ?> Km</h3>
                    <div class="line-distance"></div>
                    <h4>de líneas de transmisión de</h4>
                    <h5><?= $projects->LINEA_TRANS ?>kV</h5>
                    <div class="divider white mt-3 mb-1"></div>
                    <h6><?= $projects->TORRE ?> Torres</h6>
                </div>
                <?= $this->Html->image('icons/torre-blanca.svg') ?>
            </div>

            <div class="data-content">
                <ul>
                    <li>
                        <i class="material-icons">event</i>
                        <span>FoPo: <?= $FoPo ?></span>
                    </li>
                    <li>
                        <i class="material-icons">event_note</i>
                        <span>Adjudicación: <?= $Adj ?></span>
                    </li>
                    <li>
                        <i class="material-icons">event_available</i>
                        <span>Fecha corte: <?= $Apr ?></span>
                    </li>
                    <li>
                        <i class="material-icons">straighten</i>
                        <span>Longitud: <?= $projects->DISTANCIA ?> Km</span>
                    </li>
                    <li>
                        <i class="material-icons">place</i>
                        <span>No. de subestaciones: <?= $projects->NUM_SUBESTACION ?></span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="map">
            <?= $this->Html->image('maps/mapa-1.jpg') ?>
        </div>
        <div class="indicators row wrap">
            <h2>Indicadores de cronograma</h2>
            <div class="d-flex col s12 m6 l4 xl3">
                <?php $SPI = number_format($projects->EXECUTED/$projects->PLANNED, 2,'.','');?>
                <div class="indicator type-1
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
                    ?>">
                    <h3 class="mr-2">SPI</h3>
                    <h3 class="ml-auto"><?= $SPI ?></h3>
                </div>
            </div>
            <div class="d-flex col s12 m6 l4 xl3">
                <div class="indicator type-1 light-blue darken-2">
                    <h5 class="mr-2">PORCENTAJE <small>AVANCE PLANEADO</small></h5>
                    <h3 class="ml-auto"><?= $projects->PLANNED ?>%</h3>
                </div>
            </div>
            <div class="d-flex col s12 m6 l4 xl3">
                <div class="indicator type-1 light-blue darken-3">
                    <h5 class="mr-2">PORCENTAJE <small>AVANCE EJECUTADO</small></h5>
                    <h3 class="ml-auto"><?= $projects->EXECUTED ?>%</h3>
                </div>
            </div>
            <div class="d-flex col s12 m6 l4 xl3">
                <div class="indicator type-1 light-blue darken-2">
                    <h5 class="mr-2">FEPO</h5>
                    <h5 class="ml-auto right-align"><?= $FePo ?></h5>
                </div>
            </div>
        </div>

        <div class="indicators row wrap mb-4">
            <h2 class="mb-2">Indicadores de presupuesto</h2>
            <h3>Total proyecto</h3>
            <div class="d-flex col s12 m6 l4 xl3">
                <a class="indicator type-1 secondary modal-trigger" href="#detailValueExecuted">
                    <h4 class="fw-600 mr-2">AC/PPTO</h4>
                    <h4 class="fw-600 ml-auto right-align"><?= $budgetIndicators['acPpto'] ?>%</h4>
                </a>
            </div>
            <div class="d-flex col s12 m6 l4 xl3">
                <a class="indicator type-1 secondary modal-trigger" href="#detailValueExecuted">
                    <h4 class="fw-600 mr-2">AC</h4>
                    <h5 class="fw-600 ml-auto right-align">USD <?=$projects->AC?> MM</h5>
                </a>
            </div>
            <div class="d-flex col s12 m6 l4 xl3">
                <a class="indicator type-2 secondary modal-trigger" href="#detailValueExecuted">
                    <h5 class="fw-600">PRESUPUESTO TOTAL</h5>
                    <h4 class="fw-600 right-align">USD <?= $budgetIndicators['totalBudget'] ?> MM</h4>
                </a>
            </div>
            <div class="d-flex col s12 m6 l4 xl3">
                <a class="indicator type-2 secondary darken-1 modal-trigger" href="#detailValueExecuted">
                    <h5 class="fw-600">FORECAST TOTAL</h5>
                    <h4 class="fw-600 right-align"><?= $budgetIndicators['forecastTotal'] ?> MM</h4>
                </a>
            </div>
            <h3 class="mt-3">Anual proyecto</h3>
            <div class="d-flex col s12 m6 l4 xl3">
                <a class="indicator type-1 secondary darken-1 modal-trigger" href="#detailValueExecuted">
                    <h4 class="fw-600 mr-2">CPI <small>ANUAL 2018</small></h4>
                    <h4 class="fw-600 ml-auto right-align"><?= $budgetIndicators['cpiAnnual'] ?>%</h4>
                </a>
            </div>
            <div class="d-flex col s12 m6 l4 xl3">
                <a class="indicator type-1 secondary darken-1 modal-trigger" href="#detailValueExecuted">
                    <h4 class="fw-600 mr-2">AC <small>2018</small></h4>
                    <h5 class="fw-600 ml-auto right-align">USD <?=$projects->AC?> MM</h5>
                </a>
            </div>
            <div class="d-flex col s12 m6 l4 xl3">
                <a class="indicator type-1 secondary darken-2 modal-trigger" href="#detailValueExecuted">
                    <h4 class="fw-600 mr-2">PV <small>2018</small></h4>
                    <h5 class="fw-600 ml-auto right-align">USD <?=$projects->PV?> MM</h5>
                </a>
            </div>
            <div class="divider transparent"></div>
            <div class="d-flex col s12 m6 l4 xl3">
                <a class="indicator type-2 secondary darken-2 modal-trigger" href="#detailValueExecuted">
                    <h5 class="fw-600">PRESUPUESTO 2018</h5>
                    <h4 class="fw-600 right-align">USD <?= $budgetIndicators['annualBudget'] ?> MM</h4>
                </a>
            </div>
            <div class="d-flex col s12 m6 l4 xl3">
                <a class="indicator type-2 secondary darken-2 modal-trigger" href="#detailValueExecuted">
                    <h5 class="fw-600">FORECAST 2018</h5>
                    <h4 class="fw-600 right-align">USD <?= $budgetIndicators['annualForecast'] ?> MM</h4>
                </a>
            </div>
        </div>

        <!-- </?php echo $this->Form->create('Product', array('controller'=>'Projects', 'action'=>'adv','id' => 'anyFormName'));
        echo $this->Form->input('area', array('options' => array('1' => 'Within Malaysia', '2' => 'International'), 'empty' => 'choose area',
        'label' => 'Choose shipping area', 'onChange'=>'document.getElementById("anyFormName").submit();'));?> -->
        <div class="chart">
          <!-- <div class="row">
            <div class="input-field col s12">
              </?php echo $this->Form->input('PeriodType',['label'=>'','options'=>['1'=>'Día','2'=>'Semana','3'=>'Mes','4'=>'Trimestre','5'=>'Año']]);?>
            </div>
          </div> -->
            <h2>Curva de Avance Físico</h2>
            <div class="chart-content" id="caf"></div>
        </div>
        <?php if ($projects->PROJECT_NAME == 'UPME 03-2010 Norte'): ?>
        <div class="chart">
          <!-- <div class="row">
            <div class="input-field col s12">
              <//?php echo $this->Form->input('PeriodType',['label'=>'','options'=>['1'=>'Día','2'=>'Semana','3'=>'Mes','4'=>'Trimestre','5'=>'Año']]);?>
            </div>
          </div> -->
            <h2>Tres Generaciones</h2>
            <div class="chart-content" id="tg" style="min-height: 475px;"></div>
            <a class="copyright-amcharts right-align" href="http://www.amcharts.com" title="JavaScript charts" target="_blank">JS chart por amCharts</a>
        </div>
        <?php endif; ?>
        <!-- <label class="wrapper" for="states">This label is stacked above the select</label>
        <div class="button dropdown">
          <select id="colorselector">
             <option value="red">Red</option>
             <option value="yellow">Yellow</option>
             <option value="blue">Blue</option>
          </select>
        </div> -->

        <!-- <div class="">
          <div id="red" class="colors red">“Art is the lie that enables us to realize the truth” Pablo Picasso</div>
          <div id="yellow" class="colors yellow"> “Art is the lie that enables us to realize the truth” Pablo Picasso</div>
          <div id="blue" class="colors blue"> “If I don't have red, I use blue” Pablo Picasso</div>
        </div> -->

        <div class="chart">
            <h2>Riesgos</h2>
            <div class="chart-risk">
                <div class="chart-risk-list">
                    <ul>
                        <?php foreach ($rks as $rk): ?>
                        <?php  if ($rk->PROJECT_CODE == $projects->id):?>
                        <li>
                            <a href=<?='#'.$rk->id?> class="modal-trigger">Riesgo <?=$rk->RISK_NUMBER?></a>
                        </li>
                        <?php endif;?>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="heatmap">
                    <table>
                        <tr>
                            <th class="title" rowspan="5"><h3 class="vert">Probabilidad</h3></th>
                            <th>MA</th>
                            <td class="yellow">
                                <?php foreach ($rks as $rk):
                                  if($rk->PROJECT_CODE == $projects->id){
                                    if($rk->IMPACT == 1 && $rk->PROBABILITY == 5 ) {
                                        echo '<span>' .$rk->RISK_NUMBER. '</span>';
                                    };
                                  };
                                endforeach; ?>
                            </td>
                            <td class="yellow">
                                <?php foreach ($rks as $rk):
                                  if($rk->PROJECT_CODE == $projects->id){
                                    if($rk->IMPACT == 2 && $rk->PROBABILITY == 5 ) {
                                        echo '<span>' .$rk->RISK_NUMBER. '</span>';
                                    };
                                  };
                                endforeach; ?>
                            </td>
                            <td class="orange">
                                <?php foreach ($rks as $rk):
                                  if($rk->PROJECT_CODE == $projects->id){
                                    if($rk->IMPACT == 3 && $rk->PROBABILITY == 5 ) {
                                        echo '<span>' .$rk->RISK_NUMBER. '</span>';
                                    };
                                  };
                                endforeach; ?>
                            </td>
                            <td class="red">
                                <?php foreach ($rks as $rk):
                                  if($rk->PROJECT_CODE == $projects->id){
                                    if($rk->IMPACT == 4 && $rk->PROBABILITY == 5 ) {
                                        echo '<span>' .$rk->RISK_NUMBER. '</span>';
                                    };
                                  };
                                endforeach; ?>
                            </td>
                            <td class="red">
                                <?php foreach ($rks as $rk):
                                  if($rk->PROJECT_CODE == $projects->id){
                                    if($rk->IMPACT == 5 && $rk->PROBABILITY == 5 ) {
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
                                  if($rk->PROJECT_CODE == $projects->id){
                                    if($rk->IMPACT == 1 &&  $rk->PROBABILITY == 4 ) {
                                        echo '<span>' .$rk->RISK_NUMBER. '</span>';
                                    };
                                  };
                                endforeach; ?>
                            </td>
                            <td class="yellow">
                              <?php foreach ($rks as $rk):
                                if($rk->PROJECT_CODE == $projects->id){
                                    if($rk->IMPACT == 2 && $rk->PROBABILITY == 4 ) {
                                        echo '<span>' .$rk->RISK_NUMBER. '</span>';
                                    };
                                  };
                                endforeach; ?>
                            </td>
                            <td class="orange">
                                <?php foreach ($rks as $rk):
                                  if($rk->PROJECT_CODE == $projects->id){
                                    if($rk->IMPACT == 3 && $rk->PROBABILITY == 4 ) {
                                        echo '<span>' .$rk->RISK_NUMBER. '</span>';
                                    };
                                  };
                                endforeach; ?>
                            </td>
                            <td class="orange">
                                <?php foreach ($rks as $rk):
                                  if($rk->PROJECT_CODE == $projects->id){
                                    if($rk->IMPACT == 4 && $rk->PROBABILITY == 4 ) {
                                        echo '<span>' .$rk->RISK_NUMBER. '</span>';
                                    };
                                  };
                                endforeach; ?>
                            </td>
                            <td class="red">
                                <?php foreach ($rks as $rk):
                                  if($rk->PROJECT_CODE == $projects->id){
                                    if($rk->IMPACT == 5 && $rk->PROBABILITY == 4 ) {
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
                                  if($rk->PROJECT_CODE == $projects->id){
                                    if($rk->IMPACT == 1 && $rk->PROBABILITY == 3 ) {
                                        echo '<span>' .$rk->RISK_NUMBER. '</span>';
                                    };
                                  };
                                endforeach; ?>
                            </td>
                            <td class="yellow">
                                <?php foreach ($rks as $rk):
                                  if($rk->PROJECT_CODE == $projects->id){
                                    if($rk->IMPACT == 2 && $rk->PROBABILITY == 3 ) {
                                        echo '<span>' .$rk->RISK_NUMBER. '</span>';
                                    };
                                  };
                                endforeach; ?>
                            </td>
                            <td class="yellow">
                                <?php foreach ($rks as $rk):
                                  if($rk->PROJECT_CODE == $projects->id){
                                    if($rk->IMPACT == 3 && $rk->PROBABILITY == 3 ) {
                                        echo '<span>' .$rk->RISK_NUMBER. '</span>';
                                    };
                                  };
                                endforeach; ?>
                            </td>
                            <td class="orange">
                                <?php foreach ($rks as $rk):
                                  if($rk->PROJECT_CODE == $projects->id){
                                    if($rk->IMPACT == 4 && $rk->PROBABILITY == 3 ) {
                                        echo '<span>' .$rk->RISK_NUMBER. '</span>';
                                    };
                                  };
                                endforeach; ?>
                            </td>
                            <td class="orange">
                                <?php foreach ($rks as $rk):
                                  if($rk->PROJECT_CODE == $projects->id){
                                    if($rk->IMPACT == 5 && $rk->PROBABILITY == 3 ) {
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
                                  if($rk->PROJECT_CODE == $projects->id){
                                    if($rk->IMPACT == 1 && $rk->PROBABILITY == 2 ) {
                                        echo '<span>' .$rk->RISK_NUMBER. '</span>';
                                    };
                                  };
                                endforeach; ?>
                            </td>
                            <td class="lime accent-4">
                                <?php foreach ($rks as $rk):
                                  if($rk->PROJECT_CODE == $projects->id){
                                    if($rk->IMPACT == 2 && $rk->PROBABILITY == 2 ) {
                                        echo '<span>' .$rk->RISK_NUMBER. '</span>';
                                    };
                                  };
                                endforeach; ?>
                            </td>
                            <td class="yellow">
                                <?php foreach ($rks as $rk):
                                  if($rk->PROJECT_CODE == $projects->id){
                                    if($rk->IMPACT == 3 && $rk->PROBABILITY == 2 ) {
                                        echo '<span>' .$rk->RISK_NUMBER. '</span>';
                                    };
                                  };
                                endforeach; ?>
                            </td>
                            <td class="yellow">
                                <?php foreach ($rks as $rk):
                                  if($rk->PROJECT_CODE == $projects->id){
                                    if($rk->IMPACT == 4 && $rk->PROBABILITY == 2 ) {
                                        echo '<span>' .$rk->RISK_NUMBER. '</span>';
                                    };
                                  };
                                endforeach; ?>
                            </td>
                            <td class="yellow">
                                <?php foreach ($rks as $rk):
                                  if($rk->PROJECT_CODE == $projects->id){
                                    if($rk->IMPACT == 5 && $rk->PROBABILITY == 2 ) {
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
                                  if($rk->PROJECT_CODE == $projects->id){
                                    if($rk->IMPACT == 1 && $rk->PROBABILITY == 1 ) {
                                        echo '<span>' .$rk->RISK_NUMBER. '</span>';
                                    };
                                  };
                                endforeach; ?>
                            </td>
                            <td class="lime accent-4">
                                <?php foreach ($rks as $rk):
                                  if($rk->PROJECT_CODE == $projects->id){
                                    if($rk->IMPACT == 2 && $rk->PROBABILITY == 1 ) {
                                        echo '<span>' .$rk->RISK_NUMBER. '</span>';
                                    };
                                  };
                                endforeach; ?>
                            </td>
                            <td class="lime accent-4">
                                <?php foreach ($rks as $rk):
                                  if($rk->PROJECT_CODE == $projects->id){
                                    if($rk->IMPACT == 3 && $rk->PROBABILITY == 1 ) {
                                        echo '<span>' .$rk->RISK_NUMBER. '</span>';
                                    };
                                  };
                                endforeach; ?>
                            </td>
                            <td class="lime accent-4">
                                <?php foreach ($rks as $rk):
                                  if($rk->PROJECT_CODE == $projects->id){
                                    if($rk->IMPACT == 4 && $rk->PROBABILITY == 1 ) {
                                        echo '<span>' .$rk->RISK_NUMBER. '</span>';
                                    };
                                  };
                                endforeach; ?>
                            </td>
                            <td class="yellow">
                                <?php foreach ($rks as $rk):
                                  if($rk->PROJECT_CODE == $projects->id){
                                    if($rk->IMPACT == 5 && $rk->PROBABILITY == 1 ) {
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
                <th width="20%">Riesgo</th>
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
                <th>Calificación de Riesgo</th>
                <td><?=$rk->RISK_QUALIFICATION?></td>
            </tr>
            <tr>
                <th>Seguimiento al plan de respuesta 01</th>
                <td><?=$rk->PLAN_ONE_S?></td>
            </tr>
            <tr>
                <th>Seguimiento al plan de respuesta 02</th>
                <td><?=$rk->PLAN_TWO_S?></td>
            </tr>
            <tr>
                <th>Seguimiento al plan de respuesta 03</th>
                <td><?=$rk->PLAN_THREE_S?></td>
            </tr>
            <tr>
                <th>Seguimiento al plan de respuesta 04</th>
                <td><?=$rk->PLAN_FOUR_S?></td>
            </tr>
            <tr>
                <th>Seguimiento al plan de respuesta 05</th>
                <td><?=$rk->PLAN_FIVE_S?></td>
            </tr>
            <tr>
                <th>Calificación Ponderada</th>
                <td><?=$rk->TOTAL_RISK?></td>
            </tr>
        </table>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn btn-depressed">Aceptar</a>
    </div>
</div>
<?php endforeach; ?>
