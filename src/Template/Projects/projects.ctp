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
    // $projects = [
    //     [
    //         'name' => '﻿Nueva Subestación MOCOA (RENACER) 230 kV', // Nombre proyecto
    //         'spi' => 0.85, // SPI Oficial
    //         'executed' => 50, // % Ejecutado
    //         'planned' => 55, // % Planeado
    //         'acPv' => 0.39, // AC / PV
    //         'capexPlanned' => 98, // CAPEX Planeado (USD)
    //         'capexExecuted' => 55, // CAPEX Ejecutado (USD)
    //         'regional' => 'sur', // Regional
    //     ],
    //     [
    //         'name' => '﻿Proyecto ejemplo 2',
    //         'spi' => 0.98,
    //         'executed' => 50,
    //         'planned' => 55,
    //         'acPv' => 0.39,
    //         'capexPlanned' => 98,
    //         'capexExecuted' => 55,
    //         'regional' => 'centro',
    //     ],
    //     [
    //         'name' => '﻿Proyecto ejemplo 3',
    //         'spi' => 0.9,
    //         'executed' => 50,
    //         'planned' => 55,
    //         'acPv' => 0.39,
    //         'capexPlanned' => 98,
    //         'capexExecuted' => 55,
    //         'regional' => 'norte',
    //     ],
    //     [
    //         'name' => '﻿Proyecto ejemplo 4',
    //         'spi' => 0.7,
    //         'executed' => 50,
    //         'planned' => 55,
    //         'acPv' => 0.39,
    //         'capexPlanned' => 98,
    //         'capexExecuted' => 55,
    //         'regional' => 'occidente',
    //     ],
    // ];
?>
<div class="section bcrumb projects">
    <div class="breadcrumb-container">
        <?php foreach ($breadcrumb as $item): ?>
            <!-- <a href="<?//= $item[1] ?>" class="breadcrumb"><?//= $item[0] ?></a> -->
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
            <?php $CapexAcum = 0 ?>
            <?php $CapexPlann = 0 ?>
            <?php foreach ($projects as $project): ?>
              <?php $CapexAcum+= $project->CAPEX_PLANNED;?>
            <?php endforeach?>
        		<h2>CAPEX USD</h2>
            <?php if ($CapexAcum>0):?>
        		<h3><span>$</span><?=$CapexAcum?><span> MM</span></h3>
          <?php else :?>
            <?php $CapexUsd = 0?>
            <h3><span>$</span><?=$CapexUsd?></h3>
            <?php endif;?>
        		<i class="material-icons">language</i>
        	</div>
        	<div class="indicator tertiary">
        		<h2>CAPEX USD</h2>
            <?php if ($CapexAcum>0):?>
        		<h3><span>$</span><?=$CapexAcum?> MM</h3>
          <?php else:?>
            <?php $CapexCop = 0?>
        		<h3><span>$</span><?=$CapexCop?></h3>
          <?php endif;?>
        		<i class="material-icons">language</i>
        	</div>
        	<div class="indicator error">
        		<h2>RIESGOS</h2>
            <?php if (isset($indicators->RIESGOS)):?>
        		<h3><?=$indicators->RIESGOS?></h3>
          <?php else :?>
            <?php $RiskVar = 0 ?>
            <h3><?=$RiskVar?></h3>
            <?php endif;?>
        		<i class="material-icons">report_problem</i>
        	</div>
        	<div class="indicator warning">
        		<h2>SPI EXTERNO</h2>
            <?php if (isset($indicators->SPI_EXTERNO)):?>
        		<h3><?=$indicators->SPI_EXTERNO?></h3>
            <?php else :?>
            <?php $SpiVar = 0 ?>
            <h3><?=$SpiVar?></h3>
            <?php endif;?>
        		<i class="material-icons">show_chart</i>
        	</div>
        </div>
        <div class="divider transparent mb-3"></div>
        <!--Código nuevo -->
        <?php $CapexAcum = 0 ?>
        <div class="layout wrap">
          <?php foreach ($projects as $project): ?>
            <?php
              if ($project->SPI >= 0.98) {
                $var = 'primary';
              } elseif ($project->SPI < 0.98 && $project->SPI >= 0.9) {
                $var = 'secondary';
              } elseif ($project->SPI < 0.9 && $project->SPI >= 0.8) {
                $var = 'warning';
              } elseif ($project->SPI < 0.8) {
                $var = 'error';
              }
            ?>
          <div class="flex">
            <?=$this->Html->link(
              $this->Html->tag('div',$this->Html->tag('div',
              $this->Html->tag('div','',array('class'=>'sheet-line-item')).
              $this->Html->tag('div','',array('class'=>'sheet-line-item')).
              $this->Html->tag('div','',array('class'=>'sheet-line-item')),
              array('class'=>'sheet-line regional-text text-'.$project->REGIONAL)).
              $this->Html->tag('div',$this->Html->tag('h2',$project->PROJECT_NAME).
              // $this->Html->tag('div',$this->Html->tag('div',$this->Html->tag('h3',number_format($project->EXECUTED/$project->PLANNED, 2, ',','')),
              // array('class'=>'data-box-circle '.$var)).
              // $this->Html->tag('div',$this->Html->tag('span','Fase'),
              // array('class'=>'data-box-content')),
              // array('class'=>'data-box')).
              $this->Html->tag('div',$this->Html->tag('div',$this->Html->tag('h3',number_format($project->EXECUTED/$project->PLANNED, 2, ',','')),
              array('class'=>'data-box-circle '.$var)).
              $this->Html->tag('div',$this->Html->tag('span','SPI'),
              array('class'=>'data-box-content')),
              array('class'=>'data-box')).
              $this->Html->tag('div',$this->Html->tag('div',$this->Html->tag('h4',$project->EXECUTED.'%').
              $this->Html->tag('div','',array('class'=>'divider white')).
              $this->Html->tag('h4',$project->PLANNED.'%'),
              array('class'=>'data-box-circle')).
              $this->Html->tag('div',$this->Html->tag('span','% Ejecutado').
              $this->Html->tag('div','',array('class'=>'divider')).
              $this->Html->tag('span','% Planeado'),
              array('class'=>'data-box-content')),
              array('class'=>'data-box')).
              $this->Html->tag('div',$this->Html->tag('div',$this->Html->tag('h4',number_format($project->AC/$project->PV, 2, ',', ' ').'%'),
              array('class'=>'data-box-circle tertiary')).
              $this->Html->tag('div',$this->Html->tag('span','AC / PV'),array('class'=>'data-box-content')),
              array('class'=>'data-box')).
              $this->Html->tag('div','',array('class'=>'divider transparent')).
              $this->Html->tag('div',$this->Html->tag('h3','CAPEX Planeado (USD)').
              $this->Html->tag('h4',$project->CAPEX_PLANNED.' MM'),
              array('class'=>'data-chip accent')).
              $this->Html->tag('div',$this->Html->tag('h3','CAPEX Ejecutado (USD)').
              $this->Html->tag('h4',$project->CAPEX_EXECUTED.' MM'),
              array('class'=>'data-chip secondary mb-0')),
              array('class'=>'sheet-content pl-5')),
              array('class' => 'sheet')),
              array('action' => 'project', $project->id),
              array('escape' => false))?>
          </div>
          <?php endforeach; ?>
        </div>
    </div>
</div>
