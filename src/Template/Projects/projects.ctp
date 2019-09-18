<?php
    // Breadcrumb
    $breadcrumb = [
        [ 'Inicio', '/' ],
        [ 'Portal Proyectos', '/portal-projects' ],
        [ 'Transmisión y Transporte', '/portal-projects/companies' ],
        [ 'Unidad de Transmisión Colombia', '/portal-projects/company' ],
        [ 'Crecimiento', '' ],
    ];

    // Indicadores
    $indicators = [
        [
            'name' => '﻿SPI',
            'id' => 'spi-indicator',
            'icon' => 'show_chart',
            'color' => 'success',
        ],
        [
            'name' => 'Presupuesto Total USD ',
            'id' => 'pres-total-indicator',
            'icon' => 'language',
            'color' => 'accent',
        ],
        [
            'name' => 'Ejecutado Total USD',
            'id' => 'ejec-total-indicator',
            'icon' => 'language',
            'color' => 'tertiary',
        ],
        [
            'name' => 'CPI',
            'id' => 'cpi-indicator',
            'icon' => 'show_chart',
            'color' => 'error',
        ],
        [
            'name' => 'Presupuesto Anual USD',
            'id' => 'pres-anual-indicator',
            'icon' => 'language',
            'color' => 'primary',
        ],
        [
            'name' => 'Ejecutado Anual USD',
            'id' => 'ejec-anual-indicator',
            'icon' => 'language',
            'color' => 'primary',
        ],
    ];

    // Proyectos
    $projects = [
        [
            'id' => 1,
            'name' => 'Nueva Subestación MOCOA (RENACER) 230 kV', // Nombre proyecto
            'phase' => 3, // Fase
            'spi' => 0.74, // SPI
            'cpiAnnual' => 42, // CPI anual
            'acBac' => 11, // AC/BAC
            'capexPlanned' => 16.09, // CAPEX Planeado (USD)
            'capexExecuted' => 1.77, // CAPEX Ejecutado (USD)
            'regional' => 'sur', // Regional
        ],
        [
            'id' => 2,
            'name' => 'Proyecto A',
            'phase' => 1,
            'spi' => 0.8,
            'cpiAnnual' => 2,
            'acBac' => 2,
            'capexPlanned' => 16.09,
            'capexExecuted' => 1.77,
            'regional' => 'centro',
        ],
        [
            'id' => 3,
            'name' => 'Proyecto B',
            'phase' => 2,
            'spi' => 0.9,
            'cpiAnnual' => 50,
            'acBac' => 45,
            'capexPlanned' => 16.09,
            'capexExecuted' => 1.77,
            'regional' => 'norte',
        ],
        [
            'id' => 4,
            'name' => 'Proyecto C',
            'phase' => 4,
            'spi' => 0.98,
            'cpiAnnual' => 60,
            'acBac' => 75,
            'capexPlanned' => 16.09,
            'capexExecuted' => 1.77,
            'regional' => 'occidente',
        ],
        [
            'id' => 5,
            'name' => 'Proyecto D',
            'phase' => 5,
            'spi' => 1,
            'cpiAnnual' => 53,
            'acBac' => 76,
            'capexPlanned' => 16.09,
            'capexExecuted' => 1.77,
            'regional' => 'occidente',
        ],
    ];
?>
<div class="section projects">
    <div class="breadcrumb-container">
        <a href="javascript:history.back()" class="breadcrumb-back"><i class="material-icons">keyboard_arrow_left</i></a>
        <?php foreach ($breadcrumb as $item): ?>
            <a href="<?= $item[1] ?>" class="breadcrumb"><?= $item[0] ?></a>
        <?php endforeach; ?>
    </div>

    <sidebar class="projects-sidebar">
        <div class="projects-sidebar-img">
            <?= $this->Html->image('photos/energia.jpg') ?>
        </div>
        <div class="projects-sidebar-total">
            <h2>13 Proyectos</h2>
        </div>
        <div class="projects-sidebar-info">
            <h2>Información general</h2>
            <p>Es la segunda empresa en transmisión de electricidad en Colombia, con una participación en el mercado del 12.5%. Cuenta con 1.504 km de circuitos a 230 kV activos en 17 subestaciones y la disponibilidad del sistema de transmisión a 31 de diciembre del 2015 fue del 99,93%, superior a la meta fijada por la CREG</p>
        </div>
    </sidebar>
  <div class="projects-content">
      <div class="indicators row wrap">
        <?php foreach ($indicators as $indicator): ?>
          <div class="d-flex col s12 m6 l4 xl4">
            <div class="indicator <?= $indicator['color'] ?>">
              <h2><?= $indicator['name'] ?></h2>
              <h3 <?= $indicator['id'] ?>></h3>
              <i class="material-icons"><?= $indicator['icon'] ?></i>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="projects-content2">
        <div class="divider transparent mb-3"></div>
        <div class="row wrap">
            <?php foreach ($projects as $project): ?>
            <div class="Search d-flex col s12 m6 l4 xl3">
                <div class="sheet pointer">
                    <div class="sheet-options">
                        <a class='dropdown-trigger btn-floating btn-flat' href='' data-target='dropdown<?= $project['id'] ?>'>
                            <i class="material-icons">more_vert</i>
                        </a>
                        <ul id='dropdown<?= $project['id'] ?>' class='dropdown-content'>
                            <li><a class="modal-trigger" href="#compareProjectVersion"><i class="mdi mdi-select-compare"></i>COMPARAR</a></li>
                            <!-- <li><a href="#!"><i class="mdi mdi-content-save-outline"></i>CAPTURAR INF. ACTUAL</a></li> -->
                        </ul>
                    </div>
                    <div class="sheet-line regional-text text-<?= $project['regional'] ?>">
                        <div class="sheet-line-item"></div>
                        <div class="sheet-line-item"></div>
                        <div class="sheet-line-item"></div>
                    </div>
                    <div class="sheet-content pl-5" onclick="location.href='/portal-projects/project'">
                        <h2><?= $project['name'] ?></h2>
                        <div class="data-box mt-auto">
                            <div class="data-box-circle phase
                                <?php
                                    if ($project['phase'] == 1) {
                                        echo 'i';
                                    } elseif ($project['phase'] == 2) {
                                        echo 'ii';
                                    } elseif ($project['phase'] == 3) {
                                        echo 'iii';
                                    } elseif ($project['phase'] == 4) {
                                        echo 'iv';
                                    } elseif ($project['phase'] == 5) {
                                        echo 'v';
                                    }
                                ?>">
                                <h3>
                                    <?php
                                        if ($project['phase'] == 1) {
                                            echo 'I';
                                        } elseif ($project['phase'] == 2) {
                                            echo 'II';
                                        } elseif ($project['phase'] == 3) {
                                            echo 'III';
                                        } elseif ($project['phase'] == 4) {
                                            echo 'IV';
                                        } elseif ($project['phase'] == 5) {
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
                                    if ($project['spi'] >= 0.98) {
                                        echo 'primary';
                                    } elseif ($project['spi'] < 0.98 && $project['spi'] >= 0.9) {
                                        echo 'secondary';
                                    } elseif ($project['spi'] < 0.9 && $project['spi'] >= 0.8) {
                                        echo 'warning';
                                    } elseif ($project['spi'] < 0.8) {
                                        echo 'error';
                                    }
                                ?>">
                                <h4><?= $project['spi'] ?></h4>
                            </div>
                            <div class="data-box-content">
                                <span>SPI</span>
                            </div>
                        </div>
                        <div class="data-box">
                            <div class="data-box-circle error">
                                <h5><?= $project['cpiAnnual'] ?>%</h5>
                            </div>
                            <div class="data-box-content">
                                <span>CPI Anual</span>
                            </div>
                        </div>
                        <div class="data-box">
                            <div class="data-box-circle tertiary">
                                <h5><?= $project['acBac'] ?>%</h5>
                            </div>
                            <div class="data-box-content">
                                <span>CPI Total</span>
                            </div>
                        </div>
                        <div class="data-box">
                            <div class="data-box-circle tertiary">
                                <h5><?= $project['acBac'] ?>%</h5>
                            </div>
                            <div class="data-box-content">
                                <span>IGR</span>
                            </div>
                        </div>
                        <div class="divider transparent"></div>
                        <div class="data-chip accent">
                            <h3>CAPEX Planeado (USD)</h3>
                            <h4><?= $project['capexPlanned'] ?> MM</h4>
                        </div>
                        <div class="data-chip secondary mb-0">
                            <h3>CAPEX Ejecutado (USD)</h3>
                            <h4><?= $project['capexExecuted'] ?> MM</h4>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<!-- Modal comparación del proyecto -->
<div id="compareProjectVersion" class="modal w-600" style="width: 968px">
    <div class="modal-content">
        <a class="modal-close close">
            <i class="material-icons">close</i>
        </a>
        <h2>Nueva Subestación MOCOA (RENACER) 230 kV</h2>
        <div class="row wrap ma-0">
            <div class="d-flex col s12 m6 pa-0">
                <div class="sheet light lighten-1">
                    <div class="sheet-content">
                        <h2 class="accent-text fz-20">VERSIÓN ACTUAL</h2>
                        <div class="data-box mt-auto mx-0">
                            <div class="data-box-circle phase
                                <?php
                                    if ($project['phase'] == 1) {
                                        echo 'i';
                                    } elseif ($project['phase'] == 2) {
                                        echo 'ii';
                                    } elseif ($project['phase'] == 3) {
                                        echo 'iii';
                                    } elseif ($project['phase'] == 4) {
                                        echo 'iv';
                                    } elseif ($project['phase'] == 5) {
                                        echo 'v';
                                    }
                                ?>">
                                <h3>
                                    <?php
                                        if ($project['phase'] == 1) {
                                            echo 'I';
                                        } elseif ($project['phase'] == 2) {
                                            echo 'II';
                                        } elseif ($project['phase'] == 3) {
                                            echo 'III';
                                        } elseif ($project['phase'] == 4) {
                                            echo 'IV';
                                        } elseif ($project['phase'] == 5) {
                                            echo 'V';
                                        }
                                    ?>
                                </h3>
                            </div>
                            <div class="data-box-content">
                                <span>Fase</span>
                            </div>
                        </div>
                        <div class="data-box mx-0">
                            <div class="data-box-circle
                                <?php
                                    if ($project['spi'] >= 0.98) {
                                        echo 'primary';
                                    } elseif ($project['spi'] < 0.98 && $project['spi'] >= 0.9) {
                                        echo 'secondary';
                                    } elseif ($project['spi'] < 0.9 && $project['spi'] >= 0.8) {
                                        echo 'warning';
                                    } elseif ($project['spi'] < 0.8) {
                                        echo 'error';
                                    }
                                ?>">
                                <h4><?= $project['spi'] ?></h4>
                            </div>
                            <div class="data-box-content">
                                <span>SPI</span>
                            </div>
                        </div>
                        <div class="data-box mx-0">
                            <div class="data-box-circle error">
                                <h5><?= $project['cpiAnnual'] ?>%</h5>
                            </div>
                            <div class="data-box-content">
                                <span>CPI Anual</span>
                            </div>
                        </div>
                        <div class="data-box mx-0">
                            <div class="data-box-circle tertiary">
                                <h5><?= $project['acBac'] ?>%</h5>
                            </div>
                            <div class="data-box-content">
                                <span>AC/BAC</span>
                            </div>
                        </div>
                        <div class="divider transparent"></div>
                        <div class="data-chip accent mx-0">
                            <h3>CAPEX Planeado (USD)</h3>
                            <h4><?= $project['capexPlanned'] ?> MM</h4>
                        </div>
                        <div class="data-chip secondary mb-0 mx-0">
                            <h3>CAPEX Ejecutado (USD)</h3>
                            <h4><?= $project['capexExecuted'] ?> MM</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex col s12 m6 pa-0">
                <div class="sheet light">
                    <div class="sheet-content">
                        <div class="input-field">
                            <select>
                                <option value="1">V1 - Enero 25, 2019</option>
                                <option value="2">V2 - Marzo 25, 2019</option>
                                <option value="3">V3 - Agosto 25, 2019</option>
                            </select>
                            <label>Versión</label>
                        </div>
                        <div class="data-box mt-auto mx-0">
                            <div class="data-box-circle phase
                                <?php
                                    if ($project['phase'] == 1) {
                                        echo 'i';
                                    } elseif ($project['phase'] == 2) {
                                        echo 'ii';
                                    } elseif ($project['phase'] == 3) {
                                        echo 'iii';
                                    } elseif ($project['phase'] == 4) {
                                        echo 'iv';
                                    } elseif ($project['phase'] == 5) {
                                        echo 'v';
                                    }
                                ?>">
                                <h3>
                                    <?php
                                        if ($project['phase'] == 1) {
                                            echo 'I';
                                        } elseif ($project['phase'] == 2) {
                                            echo 'II';
                                        } elseif ($project['phase'] == 3) {
                                            echo 'III';
                                        } elseif ($project['phase'] == 4) {
                                            echo 'IV';
                                        } elseif ($project['phase'] == 5) {
                                            echo 'V';
                                        }
                                    ?>
                                </h3>
                            </div>
                            <div class="data-box-content">
                                <span>Fase</span>
                            </div>
                        </div>
                        <div class="data-box mx-0">
                            <div class="data-box-circle
                                <?php
                                    if ($project['spi'] >= 0.98) {
                                        echo 'primary';
                                    } elseif ($project['spi'] < 0.98 && $project['spi'] >= 0.9) {
                                        echo 'secondary';
                                    } elseif ($project['spi'] < 0.9 && $project['spi'] >= 0.8) {
                                        echo 'warning';
                                    } elseif ($project['spi'] < 0.8) {
                                        echo 'error';
                                    }
                                ?>">
                                <h4><?= $project['spi'] ?></h4>
                            </div>
                            <div class="data-box-content">
                                <span>SPI</span>
                            </div>
                        </div>
                        <div class="data-box mx-0">
                            <div class="data-box-circle error">
                                <h5><?= $project['cpiAnnual'] ?>%</h5>
                            </div>
                            <div class="data-box-content">
                                <span>CPI Anual</span>
                            </div>
                        </div>
                        <div class="data-box mx-0">
                            <div class="data-box-circle tertiary">
                                <h5><?= $project['acBac'] ?>%</h5>
                            </div>
                            <div class="data-box-content">
                                <span>AC/BAC</span>
                            </div>
                        </div>
                        <div class="divider transparent"></div>
                        <div class="data-chip accent mx-0">
                            <h3>CAPEX Planeado (USD)</h3>
                            <h4><?= $project['capexPlanned'] ?> MM</h4>
                        </div>
                        <div class="data-chip secondary mb-0 mx-0">
                            <h3>CAPEX Ejecutado (USD)</h3>
                            <h4><?= $project['capexExecuted'] ?> MM</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <a class="modal-close waves-effect waves-light btn btn-depressed tertiary my-0">Aceptar</a>
    </div>
</div>
