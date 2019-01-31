<?php
    // Breadcrumb
    $breadcrumb = [
        [ 'Inicio', '/' ],
        [ 'Portal Proyectos', '/portal-projects' ],
        [ 'Transmisión y Transporte', '/portal-projects/companies' ],
        [ 'Unidad de Transmisión Colombia', '/portal-projects/company' ],
        [ 'Crecimiento', '/portal-projects/projects' ],
        [ '﻿UPME 03 – 2010 Norte', '' ],
    ];

    // Indicadores de cronograma
    $scheduleIndicators = [
        'spi' => 0.90, // SPI
        'progressPercentagePlanned' => 63, // Porcentaje avance planeado
        'progressPercentageExecuted' => 57, //Porcentaje avance ejecutado
        'fepo' => 'Septiembre 30, 2020' // FEPO
    ];

    // Indicadores de presupuesto
    $budgetIndicators = [
        'acPpto' => 41, // AC/PPTO
        'ac' => 41.59, // AC
        'totalBudget' => 100.46, // Presupuesto total
        'forecastTotal' => 89.73, // Forecast total

        'cpiAnnual' => 44, // CPI Anual
        'acAnnual' => 4.61, // AC Anual
        'pvAnnual' => 10.57, // PV Anual
        'annualBudget' => 26.12, // Presupuesto anual
        'annualForecast' => 21.16, // Forecast anual
    ];

    // Riesgos
    $risks = [
        [
            'name' => '1',
            'x' => 5,
            'y' => 2,
        ],
        [
            'name' => '2',
            'x' => 5,
            'y' => 2,
        ],
        [
            'name' => '3',
            'x' => 1,
            'y' => 1,
        ],
        [
            'name' => '4',
            'x' => 1,
            'y' => 3,
        ],
        [
            'name' => '5',
            'x' => 4,
            'y' => 3,
        ],
        [
            'name' => '6',
            'x' => 3,
            'y' => 3,
        ],
        [
            'name' => '7',
            'x' => 2,
            'y' => 1,
        ],
        [
            'name' => '8',
            'x' => 3,
            'y' => 4,
        ],
        [
            'name' => '9',
            'x' => 4,
            'y' => 5,
        ],
        [
            'name' => '10',
            'x' => 3,
            'y' => 2,
        ],
    ];
?>
<div class="section bcrumb project">
    <div class="breadcrumb-container">
        <a href="javascript:history.back()" class="breadcrumb-back"><i class="material-icons">keyboard_arrow_left</i></a>
        <?php foreach ($breadcrumb as $item): ?>
            <a href="<?= $item[1] ?>" class="breadcrumb"><?= $item[0] ?></a>
        <?php endforeach; ?>
    </div>

    <sidebar class="project-sidebar">
        <h1>UPME 03 – 2010 Norte</h1>
        <div class="project-sidebar-phase phase iii">
            <h2>Fase III</h2>
        </div>
        <div class="project-sidebar-percentages">
            <a class="copyright-amcharts" href="http://www.amcharts.com" title="JavaScript charts" target="_blank">JS chart por amCharts</a>
            <div class="chart" id="advance"></div>
            <div class="legend">
                <h3 class="secondary-text">62.3% Avance planeado</h3>
                <h3 class="accent-text">57.2% Ejecutado</h3>
            </div>
        </div>
        <div class="project-sidebar-info">
            <h2>Objetivo estratégico</h2>
            <p>Dinamizar el crecimiento rentable de la compañía y el camino a la MEGA</p>
        </div>
        <div class="project-sidebar-info">
            <h2>Información general</h2>
            <p>Construcción de una línea doble circuito 230 kV con una longitud aproximada de 162 km Construcción de las nuevas subestaciones Chivor ll 230 kV (San Luis) y Norte</p>
        </div>
        <div class="project-sidebar-info">
            <h2>Alcance</h2>
            <p>Ampliación de la subestaciones Chivor y Bacatá</p>
        </div>
        <div class="project-sidebar-info">
            <h2>Solicitudes al MME modificaciones FOPO</h2>
            <p>5</p>
        </div>
    </sidebar>

    <div class="project-content">
        <div class="data">
            <div class="data-distance">
                <?= $this->Html->image('icons/torre-blanca.svg') ?>
                <div class="data-distance-content">
                    <h2>Distancia</h2>
                    <h3>162 Km</h3>
                    <div class="line-distance"></div>
                    <h4>de líneas de transmisión de</h4>
                    <h5>230kV</h5>
                    <div class="divider white mt-3 mb-1"></div>
                    <h6>344 Torres</h6>
                </div>
                <?= $this->Html->image('icons/torre-blanca.svg') ?>
            </div>

            <div class="data-content">
                <ul>
                    <li>
                        <i class="material-icons">event</i>
                        <span>FOPO: Abril 14, 2019</span>
                    </li>
                    <li>
                        <i class="material-icons">event_note</i>
                        <span>Adjudicación: Abril 16, 2013</span>
                    </li>
                    <li>
                        <i class="material-icons">event_available</i>
                        <span>Fecha corte: Octubre 31, 2018</span>
                    </li>
                    <li>
                        <i class="material-icons">straighten</i>
                        <span>Longitud: 162 KM</span>
                    </li>
                    <li>
                        <i class="material-icons">place</i>
                        <span>No. de subestaciones: 3</span>
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
                <div class="indicator type-1
                    <?php
                        if ($scheduleIndicators['spi'] >= 0.98) {
                            echo 'primary';
                        } elseif ($scheduleIndicators['spi'] < 0.98 && $scheduleIndicators['spi'] >= 0.9) {
                            echo 'secondary';
                        } elseif ($scheduleIndicators['spi'] < 0.9 && $scheduleIndicators['spi'] >= 0.8) {
                            echo 'warning';
                        } elseif ($scheduleIndicators['spi'] < 0.8) {
                            echo 'error';
                        }
                    ?>">
                    <h3 class="mr-2">SPI</h3>
                    <h3 class="ml-auto"><?= $scheduleIndicators['spi'] ?></h3>
                </div>
            </div>
            <div class="d-flex col s12 m6 l4 xl3">
                <div class="indicator type-1 light-blue darken-2">
                    <h5 class="mr-2">PORCENTAJE <small>AVANCE PLANEADO</small></h5>
                    <h3 class="ml-auto"><?= $scheduleIndicators['progressPercentagePlanned'] ?>%</h3>
                </div>
            </div>
            <div class="d-flex col s12 m6 l4 xl3">
                <div class="indicator type-1 light-blue darken-3">
                    <h5 class="mr-2">PORCENTAJE <small>AVANCE EJECUTADO</small></h5>
                    <h3 class="ml-auto"><?= $scheduleIndicators['progressPercentageExecuted'] ?>%</h3>
                </div>
            </div>
            <div class="d-flex col s12 m6 l4 xl3">
                <div class="indicator type-1 light-blue darken-2">
                    <h5 class="mr-2">FEPO</h5>
                    <h5 class="ml-auto right-align"><?= $scheduleIndicators['fepo'] ?></h5>
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
                    <h5 class="fw-600 ml-auto right-align">USD <?= $budgetIndicators['ac'] ?> MM</h5>
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
                    <h5 class="fw-600 ml-auto right-align">USD <?= $budgetIndicators['acAnnual'] ?> MM</h5>
                </a>
            </div>
            <div class="d-flex col s12 m6 l4 xl3">
                <a class="indicator type-1 secondary darken-2 modal-trigger" href="#detailValueExecuted">
                    <h4 class="fw-600 mr-2">PV <small>2018</small></h4>
                    <h5 class="fw-600 ml-auto right-align">USD <?= $budgetIndicators['pvAnnual'] ?> MM</h5>
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

        <div class="chart">
            <h2>Curva de Avance Físico</h2>
            <div class="chart-content" id="caf"></div>
            <a class="copyright-amcharts right-align" href="http://www.amcharts.com" title="JavaScript charts" target="_blank">JS chart por amCharts</a>
        </div>

        <!-- <div class="chart">
            <h2>Gráfica acumulado (en construcción)</h2>
            <div class="chart-content" id="ga"></div>
            <a class="copyright-amcharts right-align" href="http://www.amcharts.com" title="JavaScript charts" target="_blank">JS chart por amCharts</a>
        </div> -->

        <div class="chart">
            <h2>Tres Generaciones</h2>
            <div class="chart-content" id="tg" style="min-height: 475px;"></div>
            <a class="copyright-amcharts right-align" href="http://www.amcharts.com" title="JavaScript charts" target="_blank">JS chart por amCharts</a>
        </div>

        <div class="chart">
            <h2>Riesgos</h2>
            <div class="chart-risk">
                <div class="chart-risk-list">
                    <ul>
                        <?php foreach ($risks as $risk): ?>
                        <li>
                            <a href="#detailRisk" class="modal-trigger">Riesgo <?= $risk['name'] ?></a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="heatmap">
                    <table>
                        <tr>
                            <th class="title" rowspan="5"><h3 class="vert">Probabilidad</h3></th>
                            <th>MA</th>
                            <td class="yellow">
                                <?php foreach ($risks as $risk):
                                    if($risk['x'] == 1 && $risk['y'] == 1 ) {
                                        echo '<span>' .$risk['name']. '</span>';
                                    };
                                endforeach; ?>
                            </td>
                            <td class="yellow">
                                <?php foreach ($risks as $risk):
                                    if($risk['x'] == 2 && $risk['y'] == 1 ) {
                                        echo '<span>' .$risk['name']. '</span>';
                                    };
                                endforeach; ?>
                            </td>
                            <td class="orange">
                                <?php foreach ($risks as $risk):
                                    if($risk['x'] == 3 && $risk['y'] == 1 ) {
                                        echo '<span>' .$risk['name']. '</span>';
                                    };
                                endforeach; ?>
                            </td>
                            <td class="red">
                                <?php foreach ($risks as $risk):
                                    if($risk['x'] == 4 && $risk['y'] == 1 ) {
                                        echo '<span>' .$risk['name']. '</span>';
                                    };
                                endforeach; ?>
                            </td>
                            <td class="red">
                                <?php foreach ($risks as $risk):
                                    if($risk['x'] == 5 && $risk['y'] == 1 ) {
                                        echo '<span>' .$risk['name']. '</span>';
                                    };
                                endforeach; ?>
                            </td>
                        </tr>
                        <tr>
                            <th>A</th>
                            <td class="yellow">
                                <?php foreach ($risks as $risk):
                                    if($risk['x'] == 1 && $risk['y'] == 2 ) {
                                        echo '<span>' .$risk['name']. '</span>';
                                    };
                                endforeach; ?>
                            </td>
                            <td class="yellow">
                                <?php foreach ($risks as $risk):
                                    if($risk['x'] == 2 && $risk['y'] == 2 ) {
                                        echo '<span>' .$risk['name']. '</span>';
                                    };
                                endforeach; ?>
                            </td>
                            <td class="orange">
                                <?php foreach ($risks as $risk):
                                    if($risk['x'] == 3 && $risk['y'] == 2 ) {
                                        echo '<span>' .$risk['name']. '</span>';
                                    };
                                endforeach; ?>
                            </td>
                            <td class="orange">
                                <?php foreach ($risks as $risk):
                                    if($risk['x'] == 4 && $risk['y'] == 2 ) {
                                        echo '<span>' .$risk['name']. '</span>';
                                    };
                                endforeach; ?>
                            </td>
                            <td class="red">
                                <?php foreach ($risks as $risk):
                                    if($risk['x'] == 5 && $risk['y'] == 2 ) {
                                        echo '<span>' .$risk['name']. '</span>';
                                    };
                                endforeach; ?>
                            </td>
                        </tr>
                        <tr>
                            <th>M</th>
                            <td class="lime accent-4">
                                <?php foreach ($risks as $risk):
                                    if($risk['x'] == 1 && $risk['y'] == 3 ) {
                                        echo '<span>' .$risk['name']. '</span>';
                                    };
                                endforeach; ?>
                            </td>
                            <td class="yellow">
                                <?php foreach ($risks as $risk):
                                    if($risk['x'] == 2 && $risk['y'] == 3 ) {
                                        echo '<span>' .$risk['name']. '</span>';
                                    };
                                endforeach; ?>
                            </td>
                            <td class="yellow">
                                <?php foreach ($risks as $risk):
                                    if($risk['x'] == 3 && $risk['y'] == 3 ) {
                                        echo '<span>' .$risk['name']. '</span>';
                                    };
                                endforeach; ?>
                            </td>
                            <td class="orange">
                                <?php foreach ($risks as $risk):
                                    if($risk['x'] == 4 && $risk['y'] == 3 ) {
                                        echo '<span>' .$risk['name']. '</span>';
                                    };
                                endforeach; ?>
                            </td>
                            <td class="orange">
                                <?php foreach ($risks as $risk):
                                    if($risk['x'] == 5 && $risk['y'] == 3 ) {
                                        echo '<span>' .$risk['name']. '</span>';
                                    };
                                endforeach; ?>
                            </td>
                        </tr>
                        <tr>
                            <th>B</th>
                            <td class="lime accent-4">
                                <?php foreach ($risks as $risk):
                                    if($risk['x'] == 1 && $risk['y'] == 4 ) {
                                        echo '<span>' .$risk['name']. '</span>';
                                    };
                                endforeach; ?>
                            </td>
                            <td class="lime accent-4">
                                <?php foreach ($risks as $risk):
                                    if($risk['x'] == 2 && $risk['y'] == 4 ) {
                                        echo '<span>' .$risk['name']. '</span>';
                                    };
                                endforeach; ?>
                            </td>
                            <td class="yellow">
                                <?php foreach ($risks as $risk):
                                    if($risk['x'] == 3 && $risk['y'] == 4 ) {
                                        echo '<span>' .$risk['name']. '</span>';
                                    };
                                endforeach; ?>
                            </td>
                            <td class="yellow">
                                <?php foreach ($risks as $risk):
                                    if($risk['x'] == 4 && $risk['y'] == 4 ) {
                                        echo '<span>' .$risk['name']. '</span>';
                                    };
                                endforeach; ?>
                            </td>
                            <td class="yellow">
                                <?php foreach ($risks as $risk):
                                    if($risk['x'] == 5 && $risk['y'] == 4 ) {
                                        echo '<span>' .$risk['name']. '</span>';
                                    };
                                endforeach; ?>
                            </td>
                        </tr>
                        <tr>
                            <th>MB</th>
                            <td class="lime accent-4">
                                <?php foreach ($risks as $risk):
                                    if($risk['x'] == 1 && $risk['y'] == 5 ) {
                                        echo '<span>' .$risk['name']. '</span>';
                                    };
                                endforeach; ?>
                            </td>
                            <td class="lime accent-4">
                                <?php foreach ($risks as $risk):
                                    if($risk['x'] == 2 && $risk['y'] == 5 ) {
                                        echo '<span>' .$risk['name']. '</span>';
                                    };
                                endforeach; ?>
                            </td>
                            <td class="lime accent-4">
                                <?php foreach ($risks as $risk):
                                    if($risk['x'] == 3 && $risk['y'] == 5 ) {
                                        echo '<span>' .$risk['name']. '</span>';
                                    };
                                endforeach; ?>
                            </td>
                            <td class="lime accent-4">
                                <?php foreach ($risks as $risk):
                                    if($risk['x'] == 4 && $risk['y'] == 5 ) {
                                        echo '<span>' .$risk['name']. '</span>';
                                    };
                                endforeach; ?>
                            </td>
                            <td class="yellow">
                                <?php foreach ($risks as $risk):
                                    if($risk['x'] == 5 && $risk['y'] == 5 ) {
                                        echo '<span>' .$risk['name']. '</span>';
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

<!-- Modal detalle de riesgo -->
<div id="detailRisk" class="modal">
    <div class="modal-content">
        <a class="modal-close close">
            <i class="material-icons">close</i>
        </a>
        <h2>Detalle riesgo</h2>
        <table>
            <tr>
                <th width="20%">Risego</th>
                <td>1</td>
            </tr>
            <tr>
                <th>Nombre Riesgo</th>
                <td>NO ENTRADA EN OPERACIÓN DEL PROYECTO EN LA FECHA PREVISTA  LO  CUAL GENERA  POSIBLES COMPENSACIONES ANTE MME</td>
            </tr>
            <tr>
                <th>Probabilidad</th>
                <td>Muy Alta</td>
            </tr>
            <tr>
                <th>Impacto</th>
                <td>Muy Alto</td>
            </tr>
            <tr>
                <th>Impacto del riesgo</th>
                <td>25</td>
            </tr>
            <tr>
                <th>Plan de Respuesta 01</th>
                <td>Monitorear y controlar las diferentes actividades de las áreas de gestión del proyecto necesarias para demostrar la debida diligencia ante las autoridades</td>
            </tr>
            <tr>
                <th>Plan de Respuesta 02</th>
                <td>Solicitar ante el MME con todos los soportes necesarios y justificados la aprobación de prórroga de la FOPO</td>
            </tr>
            <tr>
                <th>Plan de Respuesta 03</th>
                <td>Gestión con la autoridad ambiental para el seguimiento del estado del trámite y la modulación de la respuesta de la misma para mitigar la posible desviación de cronograma del proyecto</td>
            </tr>
            <tr>
                <th>Plan de Respuesta 04</th>
                <td>En la sesión de informes quincenales y mensuales se presentará el monitoreo de redes sociales y medios de comunicación regionales y locales con el fin de valorar </td>
            </tr>
            <tr>
                <th>Plan de Respuesta 05</th>
                <td>_</td>
            </tr>
            <tr>
                <th>Calificación de Riesgo</th>
                <td>25</td>
            </tr>
            <tr>
                <th>Seguimiento al plan de respuesta 01</th>
                <td>Se llevan a cabo reuniones de seguimiento. Se diligencia ATL con compromisos actualizados. Se monitorea y realiza seguimiento a los hitos de las áreas de gestión y del proyecto</td>
            </tr>
            <tr>
                <th>Seguimiento al plan de respuesta 02</th>
                <td>A la fecha se ha ejecutado en varias ocasiones el plan de acción permitiendo obtener por parte de la UPME prórrogas sucesivas que extienden la FOPO - Fecha Oficial de Puesta en Operación del Proyecto.</td>
            </tr>
            <tr>
                <th>Seguimiento al plan de respuesta 03</th>
                <td>La Gerencia del Proyecto y la Dirección de Desarrollo Sostenible llevan a cabo reuniones de alto nivel con la autoridad ambiental con el propósito de obtener retroalimentación del proceso de licenciamiento ambiental.</td>
            </tr>
            <tr>
                <th>Seguimiento al plan de respuesta 04</th>
                <td>_</td>
            </tr>
            <tr>
                <th>Seguimiento al plan de respuesta 05</th>
                <td>Se está ejecutando de manera periódica según lo planeado</td>
            </tr>
            <tr>
                <th>Calificación Ponderada</th>
                <td>25</td>
            </tr>
        </table>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn btn-depressed">Aceptar</a>
    </div>
</div>
