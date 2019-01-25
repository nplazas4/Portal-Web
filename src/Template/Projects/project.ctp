<?php
    // Breadcrumb
    $breadcrumb = [
      [ 'Inicio', 'home','Pages',''],
      [ 'Portal Proyectos','index','PortalProjects',''],
      [ 'IDM','companies','PortalProjects',''],
      [ 'Unidad de Transmisión Colombia','company','PortalProjects',''],
      [ 'Crecimiento','projects','Projects',''],
    ];

    // Riesgos
    // $risks = [
    //     [
    //         'name' => '0',
    //         'x' => 5,
    //         'y' => 2,
    //     ],
    //     [
    //         'name' => '2',
    //         'x' => 5,
    //         'y' => 2,
    //     ],
    //     [
    //         'name' => '3',
    //         'x' => 1,
    //         'y' => 1,
    //     ],
    //     [
    //         'name' => '4',
    //         'x' => 1,
    //         'y' => 3,
    //     ],
    //     [
    //         'name' => '5',
    //         'x' => 4,
    //         'y' => 3,
    //     ],
    //     [
    //         'name' => '6',
    //         'x' => 3,
    //         'y' => 3,
    //     ],
    //     [
    //         'name' => '7',
    //         'x' => 2,
    //         'y' => 1,
    //     ],
    //     [
    //         'name' => '8',
    //         'x' => 3,
    //         'y' => 4,
    //     ],
    //     [
    //         'name' => '9',
    //         'x' => 4,
    //         'y' => 5,
    //     ],
    //     [
    //         'name' => '10',
    //         'x' => 3,
    //         'y' => 2,
    //     ],
    //     [
    //         'name' => '11',
    //         'x' => 3,
    //         'y' => 2,
    //     ],
    //     [
    //         'name' => '12',
    //         'x' => 3,
    //         'y' => 2,
    //     ],
    //     [
    //         'name' => '13',
    //         'x' => 3,
    //         'y' => 4,
    //     ],
    //     [
    //         'name' => '14',
    //         'x' => 3,
    //         'y' => 4,
    //     ],
    // ];
?>
<script type="text/javascript" src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script type="text/javascript" src="https://www.amcharts.com/lib/3/serial.js"></script>
<script type="text/javascript" src="https://www.amcharts.com/lib/3/pie.js"></script>
<script type="text/javascript" src="https://www.amcharts.com/lib/3/gauge.js"></script>
<script src="https://www.amcharts.com/lib/3/lang/es.js"></script>
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
    AmCharts.makeChart("caf",
        {
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
                "graph": "AmGraph-2",
                "graphType": "line",
                "gridCount": 7,
                "offset": 40,
                "oppositeAxis": false,
                "scrollbarHeight": 40
            },
            "trendLines": [],
            "graphs": [
                {
                    "customBullet": "",
                    "dashLength": 7,
                    "id": "AmGraph-1",
                    "labelPosition": "right",
                    "labelText": "",
                    "lineColor": "#2CACE3",
                    "lineThickness": 3,
                    "minBulletSize": 3,
                    "showAllValueLabels": true,
                    "title": "Ejecutado",
                    "valueField": "column-1"
                },
                {
                    "id": "AmGraph-2",
                    "lineColor": "#A6CE39",
                    "lineThickness": 3,
                    "title": "Planeado",
                    "valueField": "column-2"
                }
            ],
            "guides": [],
            "valueAxes": [
                {
                    "id": "ValueAxis-1",
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
                {
                    "date": "2014-01-17",
                    "column-1": "0",
                    "column-2": "0"
                },
                {
                    "date": "2014-02-17",
                    "column-1": "5",
                    "column-2": "6"
                },
                {
                    "date": "2014-03-17",
                    "column-1": "10",
                    "column-2": "12"
                },
                {
                    "date": "2014-04-17",
                    "column-1": "11",
                    "column-2": "15"
                },
                {
                    "date": "2014-05-17",
                    "column-1": "12",
                    "column-2": "20"
                },
                {
                    "date": "2014-06-17",
                    "column-1": "13",
                    "column-2": "22"
                },
                {
                    "date": "2014-07-17",
                    "column-1": "15",
                    "column-2": "30"
                },
                {
                    "date": "2014-08-17",
                    "column-1": "20",
                    "column-2": "30"
                },
                {
                    "date": "2014-09-17",
                    "column-1": "21",
                    "column-2": "32"
                },
                {
                    "date": "2014-10-17",
                    "column-1": "22",
                    "column-2": "35"
                },
                {
                    "date": "2014-11-17",
                    "column-1": null,
                    "column-2": "31"
                },
                {
                    "date": "2014-12-17",
                    "column-1": null,
                    "column-2": "30"
                },
                {
                    "date": "2015-01-17",
                    "column-1": null,
                    "column-2": "25"
                },
                {
                    "date": "2015-02-17",
                    "column-1": null,
                    "column-2": "27"
                },
                {
                    "date": "2015-03-17",
                    "column-1": null,
                    "column-2": "32"
                }
            ]
        }
    );
/*
    // Gráfica acumulado
    AmCharts.makeChart("ga",
        {
            "type": "serial",
            "language": "es",
            "categoryField": "category",
            "startDuration": 1,
            "fontFamily": "'Open Sans'",
            "categoryAxis": {
                "gridPosition": "start",
                "axisAlpha": 0,
                "gridAlpha": 0
            },
            "trendLines": [],
            "graphs": [
                {
                    "balloonText": "[[title]] de [[category]]:[[value]]",
                    "cornerRadiusTop": 6,
                    "fillAlphas": 1,
                    "id": "AmGraph-1",
                    "lineColor": "#2CACE3",
                    "title": "Acumulado",
                    "type": "column",
                    "valueField": "column-1"
                }
            ],
            "guides": [],
            "valueAxes": [
                {
                    "id": "ValueAxis-1",
                    "unit": "$ ",
                    "unitPosition": "left",
                    "axisAlpha": 0,
                    "gridAlpha": 0.09,
                    "title": "Axis title",
                    "titleFontSize": 0,
                    "titleRotation": 0
                }
            ],
            "allLabels": [],
            "balloon": {},
            "titles": [],
            "dataProvider": [
                {
                    "category": "PPTO COP",
                    "column-1": "22000000000"
                },
                {
                    "category": "PPTO USD",
                    "column-1": "500000000"
                },
                {
                    "category": "AC COP",
                    "column-1": "36000000000"
                },
                {
                    "category": "AC USD",
                    "column-1": "1000000000"
                }
            ]
        }
    );
    */
</script>
<div class="section bcrumb project">
    <div class="breadcrumb-container">
        <?php foreach ($breadcrumb as $item): ?>
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
                        <span>Aprobación: <?= $Apr ?></span>
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
            <?= $this->Html->image('maps/mapa1.png') ?>
        </div>

        <div class="indicators">
            <h2>Indicadores de cronograma</h2>
            <a class="indicator primary modal-trigger" href="#detailValueExecuted">
                <h2>SPI <small>Interno</small></h2>
                <h3><?=number_format($projects->EXECUTED/$projects->PLANNED, 2, ',','')?></h3>
                <?= $this->Html->image('isotype-light.svg') ?>
            </a>
            <div class="indicator light-blue darken-2">
                <h2>PORCENTAJE <small>AVANCE PLANEADO</small></h2>
                <h3><?= $projects->PLANNED ?>%</h3>
                <?= $this->Html->image('isotype-light.svg') ?>
            </div>
            <div class="indicator light-blue darken-3">
                <h2>PORCENTAJE <small>EJECUTADO</small></h2>
                <h3><?= $projects->EXECUTED ?>%</h3>
                <?= $this->Html->image('isotype-light.svg') ?>
            </div>
            <div class="indicator light-blue darken-2">
                <h2>FePo</h2>
                <h4><?=$FePo?></h4>
                <?= $this->Html->image('isotype-light.svg') ?>
            </div>
        </div>

        <div class="indicators mb-4">
            <h2>Indicadores de presupuesto</h2>
            <a class="indicator light-green modal-trigger" href="#detailValueExecuted">
                <h2>AC</h2>
                <h4>USD <?=$projects->AC?> MM</h4>
                <?= $this->Html->image('isotype-light.svg') ?>
            </a>
            <a class="indicator light-green darken-1 modal-trigger" href="#detailValueExecuted">
                <h2>PV</h2>
                <h4>USD <?=$projects->PV?> MM</h4>
                <?= $this->Html->image('isotype-light.svg') ?>
            </a>
            <a class="indicator light-green darken-2 modal-trigger" href="#detailValueExecuted">
                <h2>AC <small>2019</small></h2>
                <h4><small>EN CONSTRUCCIÓN</small></h4>
                <?= $this->Html->image('isotype-light.svg') ?>
            </a>
            <a class="indicator light-green darken-3 modal-trigger" href="#detailValueExecuted">
                <h2>PV <small>2019</small></h2>
                <h4><small>EN CONSTRUCCIÓN</small></h4>
                <?= $this->Html->image('isotype-light.svg') ?>
            </a>
        </div>

        <div class="chart">
            <h2>Curva de Avance Físico</h2>
            <div class="chart-content" id="caf"></div>

        </div>

        <div class="chart">
            <h2>Gráfica acumulado (en construcción)</h2>
            <div class="chart-content" id="ga"></div>
            <a class="copyright-amcharts right-align" href="http://www.amcharts.com" title="JavaScript charts" target="_blank">JS chart por amCharts</a>
        </div>
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
                                            <!-- <i class="material-icons">keyboard_arrow_down</i> -->
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
                                        </div>
                                    </li>
                                </ul>
                                <ul class="collapsible">
                                    <li>
                                        <div class="collapsible-header">
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
                                        </div>
                                    </li>
                                </ul>
                                <ul class="collapsible">
                                    <li>
                                        <div class="collapsible-header">
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
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
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
                                        </div>
                                    </li>
                                </ul>
                                <ul class="collapsible">
                                    <li>
                                        <div class="collapsible-header">
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
                                        </div>
                                    </li>
                                </ul>
                                <ul class="collapsible">
                                    <li>
                                        <div class="collapsible-header">
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
