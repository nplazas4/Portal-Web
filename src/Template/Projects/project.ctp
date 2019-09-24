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

<script>
    function compare(){
        var compare = document.querySelector(".compare");
        compare.classList.toggle("compare-show");

        var compareRisk = document.querySelector(".compare-risk");
        compareRisk.classList.toggle("compare-show");

        var chartRisk = document.querySelector(".box-risk");
        chartRisk.classList.toggle("compare-show");
    }
</script>

<div class="section bcrumb project">
    <div class="breadcrumb-container">
        <a href="javascript:history.back()" class="breadcrumb-back"><i class="material-icons">keyboard_arrow_left</i></a>
        <?php foreach ($breadcrumb as $item): ?>
            <a href="<?= $item[1] ?>" class="breadcrumb"><?= $item[0] ?></a>
        <?php endforeach; ?>
    </div>

    <sidebar class="project-sidebar">
        <h1 id="project-name"></h1>
        <div class="project-sidebar-phase phase iii">
            <h2 id="project-phase"></h2>
        </div>
        <div class="project-sidebar-percentages">
            <div class="chart" id="advance"></div>
            <div class="legend">
                <h3 class="secondary-text" id="porcentaje-plan"></h3>
                <h3 class="accent-text" id="porcentaje-ejec"></h3>
            </div>
        </div>
        <div class="project-sidebar-info">
            <h2>Objetivo estratégico</h2>
            <p id="p-obj-est"></p>
        </div>
        <div class="project-sidebar-info">
            <h2>Información general</h2>
            <p id="p-info-general"></p>
        </div>
        <div class="project-sidebar-info">
            <h2>Alcance</h2>
            <p id="p-alcance"></p>
        </div>
        <div class="project-sidebar-info">
            <h2>Controles de cambio</h2>
            <p id="p-control-cambio"></p>
        </div>
    </sidebar>

    <div class="project-content">
        <div class="data">
            <div class="data-content">
                <ul>
                    <li>
                        <i class="material-icons">event</i>
                        <span id="span-fopo">FoPo:</span>
                    </li>
                    <li>
                        <i class="material-icons">event_note</i>
                        <span id="span-adj">Adjudicación:</span>
                    </li>
                    <li>
                        <i class="material-icons">event_available</i>
                        <span id="span-spi-date">Fecha SPI:</span>
                    </li>
                    <li>
                        <i class="material-icons">straighten</i>
                        <span id="span-cpi-date">Fecha CPI:</span>
                    </li>
                    <li>
                        <i class="material-icons">place</i>
                        <span id="span-igr-date">Fecha IGR</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="compare">
            <!-- Versión actual -->
            <div class="compare-item">
                <div class="compare-item-title">
                    <h2>VERSIÓN ACTUAL</h2>
                </div>

                <div class="indicators row wrap">
                    <h2>Indicadores de cronograma</h2>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <a class="indicator type-1 modal-trigger" href="#detailValueExecuted">
                            <h3 class="mr-2">SPI</h3>
                            <h3 class="ml-auto" id="spi-indicator"></h3>
                        </a>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <div class="indicator type-1 light-blue darken-2">
                            <h5 class="mr-2">PORCENTAJE <small>AVANCE PLANEADO</small></h5>
                            <h3 class="ml-auto" id="avance-plan-indicator"></h3>
                        </div>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <div class="indicator type-1 light-blue darken-2">
                            <h5 class="mr-2">PORCENTAJE <small>AVANCE EJECUTADO</small></h5>
                            <h3 class="ml-auto" id="avance-ejec-indicator"></h3>
                        </div>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <div class="indicator type-1 light-blue darken-2">
                            <h5 class="mr-2">FEPO</h5>
                            <h5 class="ml-auto right-align" id="fepo-indicator"></h5>
                        </div>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <div class="indicator type-1 light-blue darken-2">
                            <h5 class="mr-2">DURACIÓN TOTAL</h5>
                            <h4 class="ml-auto right-align" id="od-indicator"></h4>
                        </div>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <div class="indicator type-1 light-blue darken-2">
                            <h5 class="mr-2">VARIACIÓN <small>ESTIMADA DURACIÓN</small></h5>
                            <h4 class="ml-auto" id="da-indicator"></h4>
                        </div>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <div class="indicator type-1 light-blue darken-2">
                            <h5 class="mr-2">PORCENTAJE <small>DE IMPACTO</small></h5>
                            <h4 class="ml-auto" id="pi-indicator"></h4>
                        </div>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <a class="indicator type-1 light-blue darken-2 modal-trigger" href="#detailValueExecuted">
                            <h4 class="mr-2">HITOS</h4>
                        </a>
                    </div>
                </div>

                <div class="indicators row wrap mb-4">
                    <h2 class="mb-2">Indicadores de presupuesto</h2>
                    <h3>Total proyecto</h3>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <a class="indicator type-1 secondary darken-2 modal-trigger" href="#detailValueExecuted">
                            <h4 class="fw-600 mr-2">CPI</h4>
                            <h4 class="fw-600 ml-auto right-align"></h4>
                        </a>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <a class="indicator type-1 secondary darken-2 modal-trigger" href="#detailValueExecuted">
                            <h5 class="fw-600 mr-2">EJECUTADO</h5>
                            <h4 class="fw-600 ml-auto right-align"></h4>
                        </a>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <a class="indicator type-1 secondary darken-2 modal-trigger" href="#detailValueExecuted">
                            <h5 class="fw-600 mr-2">PLANEADO</h5>
                            <h4 class="fw-600 ml-auto right-align"></h4>
                        </a>
                    </div>
                    <div class="divider transparent"></div>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <a class="indicator type-1 secondary darken-2 modal-trigger" href="#detailValueExecuted">
                            <h5 class="fw-600">PRESUPUESTO</h5>
                            <h4 class="ml-auto" id="pi-indicator"></h4>
                        </a>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <div class="indicator type-1 secondary darken-2">
                            <h5 class="mr-2">PROYECCIÓN <small class="small-indicator">PROYECTO</small></h5>
                            <h4 class="ml-auto" id="da-indicator"></h4>
                        </div>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <div class="indicator type-1 secondary darken-2">
                            <h5 class="mr-2">VARIACIÓN <small class="small-indicator">PROYECTADA</small></h5>
                            <h4 class="ml-auto" id="da-indicator"></h4>
                        </div>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <div class="indicator type-1 secondary darken-2">
                            <h5 class="mr-2">PORCENTAJE<small class="small-indicator">VARIACIÓN PROYECTADA</small></h5>
                            <h4 class="ml-auto" id="da-indicator"></h4>
                        </div>
                    </div>
                    <h3 class="mt-3">Anual proyecto</h3>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <a class="indicator type-1 secondary darken-2 modal-trigger" href="#detailValueExecuted">
                            <h4 class="fw-600 mr-2">CPI <small class="small-indicator">ANUAL <?=date("Y")?></small></h4>
                            <h4 class="fw-600 ml-auto right-align"></h4>
                        </a>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <div class="indicator type-1 secondary darken-2">
                            <h5 class="mr-2">EJECUTADO <small class="small-indicator"><?=date("Y")?></small></h5>
                            <h4 class="ml-auto" id="da-indicator"></h4>
                        </div>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <div class="indicator type-1 secondary darken-2">
                            <h5 class="mr-2">PLANEADO <small class="small-indicator"><?=date("Y")?></small></h5>
                            <h4 class="ml-auto" id="da-indicator"></h4>
                        </div>
                    </div>
                    <div class="divider transparent"></div>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <div class="indicator type-1 secondary darken-2">
                            <h5 class="mr-2">PRESUPUESTO <small class="small-indicator"><?=date("Y")?></small></h5>
                            <h4 class="ml-auto" id="da-indicator"></h4>
                        </div>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <div class="indicator type-1 secondary darken-2">
                            <h5 class="mr-2">PROYECCIÓN <small class="small-indicator">PROYECTO <?=date("Y")?></small></h5>
                            <h4 class="ml-auto" id="da-indicator"></h4>
                        </div>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <div class="indicator type-1 secondary darken-2">
                            <h5 class="mr-2">VARIACIÓN <small class="small-indicator">PROYECTADA <?=date("Y")?></small></h5>
                            <h4 class="ml-auto" id="da-indicator"></h4>
                        </div>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <div class="indicator type-1 secondary darken-2">
                            <h5 class="mr-2">PORCENTAJE VARIACIÓN <small class="small-indicator">PROYECTADA <?=date("Y")?></small></h5>
                            <h4 class="ml-auto" id="da-indicator">100%</h4>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="box-content">
                        <div class="row wrap align-center">
                            <div class="col flex-300">
                                <div class="input-field">
                                    <select id="select-work" class="work-select">
                                      <option value="" disabled selected>Cambiar periodo</option>
                                      <option class="work-option" value="1">Día</option>
                                      <option class="work-option" value="2">Semana</option>
                                      <option class="work-option" value="3">Mes</option>
                                      <option class="work-option" value="4">Trimestre</option>
                                      <option class="work-option" value="5">Año</option>
                                    </select>
                                    <label>Periodo</label>
                                </div>
                            </div>
                            <div class="col flex-0">
                                <a href="" class="btn-floating btn-depressed">
                                    <i class="mdi mdi-download"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="chart">
                    <h2>Curva de Avance Físico</h2>
                    <div class="chart-content" id="caf"></div>
                </div>
            </div>

            <!-- Otras versiones -->
            <div class="compare-item compare-item-version">
                <div class="compare-item-title">
                    <div class="input-field">
                        <select>
                            <option value="1">V1 - Enero 25, 2019</option>
                            <option value="2">V2 - Marzo 25, 2019</option>
                            <option value="3">V3 - Agosto 25, 2019</option>
                        </select>
                        <label>Versión</label>
                    </div>
                </div>

                <div class="indicators row wrap">
                    <h2>Indicadores de cronograma</h2>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <a class="indicator type-1 modal-trigger" href="#detailValueExecuted">
                            <h3 class="mr-2">SPI</h3>
                            <h3 class="ml-auto" id="spi-indicator"></h3>
                        </a>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <div class="indicator type-1 light-blue darken-2">
                            <h5 class="mr-2">PORCENTAJE <small>AVANCE PLANEADO</small></h5>
                            <h3 class="ml-auto" id="avance-plan-indicator"></h3>
                        </div>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <div class="indicator type-1 light-blue darken-2">
                            <h5 class="mr-2">PORCENTAJE <small>AVANCE EJECUTADO</small></h5>
                            <h3 class="ml-auto" id="avance-ejec-indicator"></h3>
                        </div>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <div class="indicator type-1 light-blue darken-2">
                            <h5 class="mr-2">FEPO</h5>
                            <h5 class="ml-auto right-align" id="fepo-indicator"></h5>
                        </div>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <div class="indicator type-1 light-blue darken-2">
                            <h5 class="mr-2">DURACIÓN TOTAL</h5>
                            <h4 class="ml-auto right-align" id="od-indicator"></h4>
                        </div>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <div class="indicator type-1 light-blue darken-2">
                            <h5 class="mr-2">VARIACIÓN <small>ESTIMADA DURACIÓN</small></h5>
                            <h4 class="ml-auto" id="da-indicator"></h4>
                        </div>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <div class="indicator type-1 light-blue darken-2">
                            <h5 class="mr-2">PORCENTAJE <small>DE IMPACTO</small></h5>
                            <h4 class="ml-auto" id="pi-indicator"></h4>
                        </div>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <a class="indicator type-1 light-blue darken-2 modal-trigger" href="#detailValueExecuted">
                            <h4 class="mr-2">HITOS</h4>
                        </a>
                    </div>
                </div>

                <div class="indicators row wrap mb-4">
                    <h2 class="mb-2">Indicadores de presupuesto</h2>
                    <h3>Total proyecto</h3>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <a class="indicator type-1 secondary darken-2 modal-trigger" href="#detailValueExecuted">
                            <h4 class="fw-600 mr-2">CPI</h4>
                            <h4 class="fw-600 ml-auto right-align"></h4>
                        </a>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <a class="indicator type-1 secondary darken-2 modal-trigger" href="#detailValueExecuted">
                            <h5 class="fw-600 mr-2">EJECUTADO</h5>
                            <h4 class="fw-600 ml-auto right-align"></h4>
                        </a>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <a class="indicator type-1 secondary darken-2 modal-trigger" href="#detailValueExecuted">
                            <h5 class="fw-600 mr-2">PLANEADO</h5>
                            <h4 class="fw-600 ml-auto right-align"></h4>
                        </a>
                    </div>
                    <div class="divider transparent"></div>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <a class="indicator type-1 secondary darken-2 modal-trigger" href="#detailValueExecuted">
                            <h5 class="fw-600">PRESUPUESTO</h5>
                            <h4 class="ml-auto" id="pi-indicator"></h4>
                        </a>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <div class="indicator type-1 secondary darken-2">
                            <h5 class="mr-2">PROYECCIÓN <small class="small-indicator">PROYECTO</small></h5>
                            <h4 class="ml-auto" id="da-indicator"></h4>
                        </div>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <div class="indicator type-1 secondary darken-2">
                            <h5 class="mr-2">VARIACIÓN <small class="small-indicator">PROYECTADA</small></h5>
                            <h4 class="ml-auto" id="da-indicator"></h4>
                        </div>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <div class="indicator type-1 secondary darken-2">
                            <h5 class="mr-2">PORCENTAJE<small class="small-indicator">VARIACIÓN PROYECTADA</small></h5>
                            <h4 class="ml-auto" id="da-indicator"></h4>
                        </div>
                    </div>
                    <h3 class="mt-3">Anual proyecto</h3>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <a class="indicator type-1 secondary darken-2 modal-trigger" href="#detailValueExecuted">
                            <h4 class="fw-600 mr-2">CPI <small class="small-indicator">ANUAL <?=date("Y")?></small></h4>
                            <h4 class="fw-600 ml-auto right-align"></h4>
                        </a>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <div class="indicator type-1 secondary darken-2">
                            <h5 class="mr-2">EJECUTADO <small class="small-indicator"><?=date("Y")?></small></h5>
                            <h4 class="ml-auto" id="da-indicator"></h4>
                        </div>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <div class="indicator type-1 secondary darken-2">
                            <h5 class="mr-2">PLANEADO <small class="small-indicator"><?=date("Y")?></small></h5>
                            <h4 class="ml-auto" id="da-indicator"></h4>
                        </div>
                    </div>
                    <div class="divider transparent"></div>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <div class="indicator type-1 secondary darken-2">
                            <h5 class="mr-2">PRESUPUESTO <small class="small-indicator"><?=date("Y")?></small></h5>
                            <h4 class="ml-auto" id="da-indicator"></h4>
                        </div>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <div class="indicator type-1 secondary darken-2">
                            <h5 class="mr-2">PROYECCIÓN <small class="small-indicator">PROYECTO <?=date("Y")?></small></h5>
                            <h4 class="ml-auto" id="da-indicator"></h4>
                        </div>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <div class="indicator type-1 secondary darken-2">
                            <h5 class="mr-2">VARIACIÓN <small class="small-indicator">PROYECTADA <?=date("Y")?></small></h5>
                            <h4 class="ml-auto" id="da-indicator"></h4>
                        </div>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <div class="indicator type-1 secondary darken-2">
                            <h5 class="mr-2">PORCENTAJE <small class="small-indicator">VARIACIÓN PROYECTADA <?=date("Y")?></small></h5>
                            <h4 class="ml-auto" id="da-indicator"></h4>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="box-content">
                        <div class="row wrap align-center">
                            <div class="col flex-300">
                                <div class="input-field">
                                    <select>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                    <label>Periodo</label>
                                </div>
                            </div>
                            <div class="col flex-0">
                                <a href="" class="btn-floating btn-depressed">
                                    <i class="mdi mdi-download"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="chart">
                    <h2>Curva de Avance Físico</h2>
                    <div class="chart-content" id="caf"></div>
                </div>
            </div>
        </div>

        <!-- <div class="chart">
            <h2>Gráfica acumulado (en construcción)</h2>
            <div class="chart-content" id="ga"></div>
            <a class="copyright-amcharts right-align" href="http://www.amcharts.com" title="JavaScript charts" target="_blank">JS chart por amCharts</a>
        </div> -->

        <div class="chart">
            <h2>Tres Generaciones</h2>
            <div class="chart-content" id="tg" style="min-height: 475px;"></div>
        </div>

        <div class="compare compare-risk">
            <div class="compare-item">
                <div class="chart">
                    <h2>Riesgos</h2>
                    <div class="chart-risk">
                        <div class="chart-risk-list">
                            <ul class="pa-0 mb-3">
                                <li>
                                    <a class="secondary white-text">IGR 90%</a>
                                </li>
                            </ul>
                            <ul class="pa-0">
                                <?php foreach ($risks as $risk): ?>
                                <li>
                                    <a href="#detailRisk" class="modal-trigger">Riesgo <?= $risk['name'] ?></a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="compare-item compare-item-version">
                <div class="chart">
                    <h2>Riesgos</h2>
                    <div class="chart-risk">
                        <div class="chart-risk-list">
                            <ul class="pa-0 mb-3">
                                <li>
                                    <a class="secondary white-text">IGR 90%</a>
                                </li>
                            </ul>
                            <ul class="pa-0">
                                <?php foreach ($risks as $risk): ?>
                                <li>
                                    <a href="#detailRisk" class="modal-trigger">Riesgo <?= $risk['name'] ?></a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="chart box-risk">
            <h2>Riesgos</h2>
            <div class="chart-risk">
                <div class="chart-risk-list">
                    <ul class="py-0">
                        <li>
                            <a class="secondary white-text">IGR 90%</a>
                        </li>
                    </ul>
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
        <div class="data-distance2">
            <?= $this->Html->image('icons/torre-blanca.svg') ?>
            <div class="data-distance2-content">
                <h2>Longitud</h2>
                <h3>162 Km</h3>
                <div class="line-distance"></div>
                <h4>de líneas de transmisión de</h4>
                <h5>230kV</h5>
                <div class="divider white mt-3 mb-1"></div>
                <h6>344 Torres</h6>
            </div>
            <?= $this->Html->image('icons/torre-blanca.svg') ?>
        </div>
        <div class="data">
            <div class="data-distance">
                <figure class="data-distance-valve start">
                    <?= $this->Html->image('icons/valvula-izq.svg') ?>
                </figure>
                <div class="data-distance-content">
                    <h2>Distancia</h2>
                    <h3>162 Km</h3>
                    <div class="line-distance"></div>
                    <h4>de líneas de transmisión de</h4>
                    <h5>230kV</h5>
                    <div class="divider white mt-3 mb-1"></div>
                    <h6>344 Torres</h6>
                </div>
                <figure class="data-distance-valve end">
                    <?= $this->Html->image('icons/valvula-der.svg') ?>
                </figure>
            </div>
        </div>

        <div class="map">
            <?= $this->Html->image('maps/mapa-1.jpg') ?>
        </div>
    </div>
</div>

<div class="btns-floating btns-floating-right btns-floating-bottom">
    <button class="btn btn-floating btn-large tertiary" onclick="compare()">
        <i class="mdi mdi-select-compare"></i>COMPARAR</a>
    </button>
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
                <td></td>
            </tr>
            <tr>
                <th>Nombre Riesgo</th>
                <td></td>
            </tr>
            <tr>
                <th>Probabilidad</th>
                <td></td>
            </tr>
            <tr>
                <th>Impacto</th>
                <td></td>
            </tr>
            <tr>
                <th>Impacto del riesgo</th>
                <td></td>
            </tr>
            <tr>
                <th>Estado de las acciones</th>
                <td></td>
            </tr>
            <tr>
                <th>Materialización del riesgo</th>
                <td></td>
            </tr>
        </table>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn btn-depressed">Aceptar</a>
    </div>
</div>
<!-- SCRIPT PROJECTS -->
<script>
  // $(document).ready(function(){
    var csrfToken = <?= json_encode($this->request->getParam('_csrfToken')) ?>;
    var xhr1, xhr2, xhr3, xhr4;
    var fase_value = null;
    var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
    if(xhr1 && xhr1.readyState != 4){
        xhr1.abort();
    }
      xhr1 = $.ajax({
      headers:{
        'X-CSRF-Token':csrfToken
      },
      method: "GET",
      dataType: "json",
      url: "<?php echo $this->Url->build(['controller'=>'Navbar','action'=>'project_profile']);?>",
      data: {"project_id" : "<?=$project_id?>"},
      cache: true,
      beforeSend: function(xhr) {
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      },
      success: function(response){
        $.each(response, function() {
          // Function que se encarga de llamar los proyectos de la bd local correspondientes a cada proyecto del ws
          console.log(this);
          $('#project-name').text(this.name);
          if (this.code_fase == '209') {
              fase_value = 'Fase I';
          }else if (this.code_fase == '210') {
              fase_value = 'Fase II';
          }else if (this.code_fase == '211') {
              fase_value = 'Fase III';
          }else if (this.code_fase == '212') {
              fase_value = 'Fase IV';
          }else if (this.code_fase == '420') {
              fase_value = 'Fase V';
          }else if (this.code_fase == '1910') {
              fase_value = 'Cerrado';
          }
          $('#project-phase').text(fase_value);
          // Fecha SPI
          var spi_date = new Date(this.data_date);
          var spi_format_date = spi_date.getUTCDate() + " " + meses[spi_date.getMonth()] + ", " + spi_date.getUTCFullYear();
          $('#span-spi-date').text('Fecha SPI: '+spi_format_date);
          // SPI indicator
          $('#spi-indicator').text(this.spi_labor_units.toFixed(2));
          // Fepo indicator
          if (this.fepo != null) {
            var fepo_date = new Date(this.fepo);
            var fepo_format_date = fepo_date.getUTCDate() + " " + meses[fepo_date.getMonth()] + ", " + fepo_date.getUTCFullYear();
            $('#fepo-indicator').text(fepo_format_date);
          }
          local_db_project(this.id_p_project);
        });
      }
    });
    // Información bd local
    function local_db_project(id_p_project){
        xhr2 = $.ajax({
        headers:{
          'X-CSRF-Token':csrfToken
        },
        method: "GET",
        dataType: "json",
        url: "<?php echo $this->Url->build(['controller'=>'Navbar','action'=>'local_profile']);?>",
        data: {project_id : id_p_project},
        cache: true,
        beforeSend: function(xhr) {
          xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        },
        success: function(response){
          $.each(response, function() {
            console.log(this);
            $('#p-obj-est').text(this.Proj_Obj);
            $('#p-info-general').text(this.DESCRIPTION);
            $('#p-alcance').text(this.ALCANCE);
            $('#p-control-cambio').text(this.SOLICITUD);
            // Fopo
            var fopo_date = new Date(this.FOPO);
            var format_utc_date = fopo_date.getUTCDate() + " " + meses[fopo_date.getMonth()] + ", " + fopo_date.getUTCFullYear();
            $('#span-fopo').text('FoPo: '+format_utc_date);
            // Adjudicación
            var adj, format_adj_date;
            if (this.ADJUDICACION != null) {
                var adj = new Date(this.ADJUDICACION);
                var format_adj_date = adj.getUTCDate() + " " + meses[adj.getMonth()] + ", " + adj.getUTCFullYear();
                $('#span-adj').text("Adjudicación: "+format_adj_date);
            } else {
                $('#span-adj').text("Adjudicación: No aplica");
            }
            if (this.CPI_DATE != null) {
              var cpi_date = new Date(this.CPI_DATE);
              var cpi_format_date = cpi_date.getUTCDate() + " " + meses[cpi_date.getMonth()] + ", " + cpi_date.getUTCFullYear();
              $('#span-cpi-date').text('Fecha CPI: '+cpi_format_date);
            }
            if (this.IGR_DATE != null) {
              var igr_date = new Date(this.IGR_DATE);
              var igr_format_date = igr_date.getUTCDate() + " " + meses[igr_date.getMonth()] + ", " + igr_date.getUTCFullYear();
              $('#span-igr-date').text('Fecha IGR: '+igr_format_date);
            }
          });
        }
      });
    }
    // GRÁFICA DONA
</script>
