<?php
    // Breadcrumb
    $breadcrumb = [
        [ 'Inicio', 'home','Pages'],
        [ 'Portal Proyectos','index','PortalProjects'],
        [ 'IDM','companies','PortalProjects'],
        [ 'Unidad de Transmisión Colombia','company','PortalProjects' ],
        [ 'Crecimiento','projects','PortalProjects'],
    ];

    // Proyectos
    $projects = [
        [
            'name' => '﻿Nueva Subestación MOCOA (RENACER) 230 kV', // Nombre proyecto
            'spi' => 0.85, // SPI Oficial
            'executed' => 50, // % Ejecutado
            'planned' => 55, // % Planeado
            'acPv' => 0.39, // AC / PV
            'capexPlanned' => 98, // CAPEX Planeado (USD)
            'capexExecuted' => 55, // CAPEX Ejecutado (USD)
            'regional' => 'sur', // Regional
        ],
        [
            'name' => '﻿Proyecto ejemplo 2',
            'spi' => 0.98,
            'executed' => 50,
            'planned' => 55,
            'acPv' => 0.39,
            'capexPlanned' => 98,
            'capexExecuted' => 55,
            'regional' => 'centro',
        ],
        [
            'name' => '﻿Proyecto ejemplo 3',
            'spi' => 0.9,
            'executed' => 50,
            'planned' => 55,
            'acPv' => 0.39,
            'capexPlanned' => 98,
            'capexExecuted' => 55,
            'regional' => 'norte',
        ],
        [
            'name' => '﻿Proyecto ejemplo 4',
            'spi' => 0.7,
            'executed' => 50,
            'planned' => 55,
            'acPv' => 0.39,
            'capexPlanned' => 98,
            'capexExecuted' => 55,
            'regional' => 'occidente',
        ],
    ];
?>
<div class="section bcrumb projects">
    <div class="breadcrumb-container">
        <?php foreach ($breadcrumb as $item): ?>
            <!-- <a href="<?= $item[1] ?>" class="breadcrumb"><?= $item[0] ?></a> -->
            <?php echo $this->Html->link($item[0],
              ['controller'=>$item[2], 'action'=>$item[1]],
              ['escape' => false,'class'=>'breadcrumb']
            );?>
        <?php endforeach; ?>
    </div>

    <sidebar class="projects-sidebar">
    	<div class="projects-sidebar-img">
    		<?= $this->Html->image('photos/energia.jpg') ?>
    	</div>
    	<div class="projects-sidebar-info">
    		<h2>Información general</h2>
    		<p>Es la segunda empresa en transmisión de electricidad en Colombia, con una participación en el mercado del 12.5%. Cuenta con 1.504 km de circuitos a 230 kV activos en 17 subestaciones y la disponibilidad del sistema de transmisión a 31 de diciembre del 2015 fue del 99,93%, superior a la meta fijada por la CREG</p>
    	</div>
    </sidebar>

    <div class="projects-content">
        <div class="indicators">
        	<div class="indicator accent">
        		<h2>CAPEX USD</h2>
        		<h3>$260.791.481</h3>
        		<i class="material-icons">language</i>
        	</div>
        	<div class="indicator tertiary">
        		<h2>CAPEX COP</h2>
        		<h3>$444.791.481,235</h3>
        		<i class="material-icons">language</i>
        	</div>
        	<div class="indicator error">
        		<h2>RIESGOS</h2>
        		<h3>9.56</h3>
        		<i class="material-icons">report_problem</i>
        	</div>
        	<div class="indicator warning">
        		<h2>SPI EXTERNO</h2>
        		<h3>0.7</h3>
        		<i class="material-icons">show_chart</i>
        	</div>
        </div>

        <div class="divider transparent mb-3"></div>

        <div class="layout wrap">
        	<?php foreach ($projects as $project): ?>
        	<div class="flex">
        		<div class="sheet" onclick="location.href='http://localhost/web/Portal-Projects/project'">
	        		<div class="sheet-line regional-text text-<?= $project['regional'] ?>">
	        			<div class="sheet-line-item"></div>
	        			<div class="sheet-line-item"></div>
	        			<div class="sheet-line-item"></div>
	        		</div>
	        		<div class="sheet-content pl-5">
	        			<h2>﻿<?= $project['name'] ?></h2>
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
	        					<h3><?= $project['spi'] ?></h3>
	        				</div>
	        				<div class="data-box-content">
	        					<span>SPI Oficial</span>
	        				</div>
	        			</div>
	        			<div class="data-box">
	        				<div class="data-box-circle">
	        					<h4><?= $project['executed'] ?>%</h4>
	        					<div class="divider white"></div>
	        					<h4><?= $project['planned'] ?>%</h4>
	        				</div>
	        				<div class="data-box-content">
		        				<span>% Ejecutado</span>
		    					<div class="divider"></div>
		    					<span>% Planeado</span>
	        				</div>
	        			</div>
	        			<div class="data-box">
	        				<div class="data-box-circle tertiary">
	        					<h4><?= $project['acPv'] ?>%</h4>
	        				</div>
	        				<div class="data-box-content">
	        					<span>AC / PV</span>
	        				</div>
	        			</div>
	        			<div class="divider transparent"></div>
	        			<div class="data-chip accent">
	        				<h3>CAPEX Planeado (USD)</h3>
	        				<h4><?= $project['capexPlanned'] ?> M</h4>
	        			</div>
	        			<div class="data-chip secondary mb-0">
	        				<h3>CAPEX Ejecutado (USD)</h3>
	        				<h4><?= $project['capexExecuted'] ?> M</h4>
	        			</div>
	        		</div>
        		</div>
        	</div>
        	<?php endforeach; ?>
        </div>
    </div>
</div>
