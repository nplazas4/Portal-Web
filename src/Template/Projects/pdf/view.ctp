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
            'value' => 0.92,
            'icon' => 'show_chart',
            'color' => 'success',
        ],
        [
            'name' => 'Presupuesto Total USD ',
            'value' => '$ 1.225,97 MM',
            'icon' => 'language',
            'color' => 'accent',
        ],
        [
            'name' => 'Ejecutado Total USD',
            'value' => '$ 383,45 MM',
            'icon' => 'language',
            'color' => 'tertiary',
        ],
        [
            'name' => 'CPI 2018',
            'value' => '51%',
            'icon' => 'show_chart',
            'color' => 'error',
        ],
        [
            'name' => 'Presupuesto Anual USD',
            'value' => '$ 192,32 MM',
            'icon' => 'language',
            'color' => 'primary',
        ],
        [
            'name' => 'Ejecutado Anual USD',
            'value' => '$ 135,04 MM',
            'icon' => 'language',
            'color' => 'primary',
        ],
    ];

    // Proyectos
    $projects = [
        [
            'name' => '﻿Nueva Subestación MOCOA (RENACER) 230 kV', // Nombre proyecto
            'phase' => 3, // Fase
            'spi' => 0.74, // SPI
            'cpiAnnual' => 42, // CPI anual
            'acBac' => 11, // AC/BAC
            'capexPlanned' => 16.09, // CAPEX Planeado (USD)
            'capexExecuted' => 1.77, // CAPEX Ejecutado (USD)
            'regional' => 'sur', // Regional
        ],
        [
            'name' => '﻿Proyecto A',
            'phase' => 1,
            'spi' => 0.8,
            'cpiAnnual' => 2,
            'acBac' => 2,
            'capexPlanned' => 16.09,
            'capexExecuted' => 1.77,
            'regional' => 'centro',
        ],
        [
            'name' => '﻿Proyecto B',
            'phase' => 2,
            'spi' => 0.9,
            'cpiAnnual' => 50,
            'acBac' => 45,
            'capexPlanned' => 16.09,
            'capexExecuted' => 1.77,
            'regional' => 'norte',
        ],
        [
            'name' => '﻿Proyecto C',
            'phase' => 4,
            'spi' => 0.98,
            'cpiAnnual' => 60,
            'acBac' => 75,
            'capexPlanned' => 16.09,
            'capexExecuted' => 1.77,
            'regional' => 'occidente',
        ],
        [
            'name' => '﻿Proyecto D',
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
            <?= $this->Html->image('photos/energia.jpg', ['fullBase' => true]) ?>
        </div>
        <div class="projects-sidebar-total">
            <h2>13 Proyectos</h2>
        </div>
        <div class="projects-sidebar-info">
            <h2>Información general</h2>
            <p>Es la segunda empresa en transmisión de electricidad en Colombia, con una participación en el mercado del 12.5%. Cuenta con 1.504 km de circuitos a 230 kV activos en 17 subestaciones y la disponibilidad del sistema de transmisión a 31 de diciembre del 2015 fue del 99,93%, superior a la meta fijada por la CREG</p>
        </div>
        <div class="projects-sidebar-info">
            <h2>Fecha corte:</h2>
            <p>31 Octubre 2018</p>
        </div>
    </sidebar>

    <div class="projects-content">
        <div class="indicators">
            <?php foreach ($indicators as $indicator): ?>
            <div class="indicator <?= $indicator['color'] ?>">
                <h2><?= $indicator['name'] ?></h2>
                <h3><?= $indicator['value'] ?></h3>
                <i class="material-icons"><?= $indicator['icon'] ?></i>
            </div>
            <?php endforeach; ?>
        </div>
      </div>
      <div class="projects-content2">
        <div class="divider transparent mb-3"></div>

        <div class="row wrap">
            <?php foreach ($projects as $project): ?>
            <div class="d-flex col s12 m6 l4 xl3">
                <div class="sheet pointer" onclick="location.href='/portal-projects/project'">
                    <div class="sheet-line regional-text text-<?= $project['regional'] ?>">
                        <div class="sheet-line-item"></div>
                        <div class="sheet-line-item"></div>
                        <div class="sheet-line-item"></div>
                    </div>
                    <div class="sheet-content pl-5">
                        <h2>﻿<?= $project['name'] ?></h2>
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
                                <span>AC/BAC</span>
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
