<?php
    // Breadcrumb
    $breadcrumb = [
        [ 'Inicio', 'home','Pages' ],
        [ 'Portal Proyectos', 'index','PortalProjects'],
        [ 'Transmisión y Transporte', 'companies', 'PortalProjects'],
    ];

    // Empresas
    $companies = array(
        array(
            'TGI',
            '',
            'logos/logo-tgi.svg',
            'Es la mayor transportadora de gas natural en Colombia, con 3.957 kilómetros de extensión de gasoductos, tiene una capacidad disponible de 733,8 MPCD (millones de pies cúbicos día) con los cuales atiende las zonas más pobladas del país tales como Bogotá, Medellín, Cali, el Eje Cafetero y el Piedemonte Llanero.'
        ),
        array(
            'Trecsa',
            '',
            'logos/logo-trecsa.svg',
            'Empresa que presta servicios de transmisión de energía y actividades asociadas en Guatemala y Centro América. TRECSA brinda a clientes del sector público y privado servicios de construcción, operación, ingeniería, estudios eléctricos y gerencia de proyectos de transmisión de energía.'
        ),
        array(
            'Gebbras',
            '',
            'logos/logo-gebbras.svg',
            'Es un vehículo de inversión en transmisión de energía eléctrica a través de la cual se manejan cuatro concesiones en operación comercial: MGE, TER, TSP y GOT con 1.094 kilómetros de red y 15 subestaciones'
        ),
        array(
            'Contugas',
            '',
            'logos/logo-contugas.png',
            'Es la mayor transportadora de gas natural en Colombia, con 3.957 kilómetros de extensión de gasoductos, tiene una capacidad disponible de 733,8 MPCD (millones de pies cúbicos día) con los cuales atiende las zonas más pobladas del país tales como Bogotá, Medellín, Cali, el Eje Cafetero y el Piedemonte Llanero.'
        ),
        array(
            'Unidad de Transmisión Colombia',
            '/portal-projects/company',
            'logos/logo-unidad-transmision-colombia.svg',
            'Es la segunda empresa en transmisión de electricidad en Colombia, con una participación en el mercado del 12.5%. Cuenta con 1.504 km de circuitos a 230 kV activos en 17 subestaciones y la disponibilidad del sistema de transmisión a 31 de diciembre del 2015 fue del 99,93%, superior a la meta fijada por la CREG.'
        ),
    );
?>
<div class="section companies">
    <div class="breadcrumb-container">
        <a href="javascript:history.back()" class="breadcrumb-back"><i class="material-icons">keyboard_arrow_left</i></a>
        <?php foreach ($breadcrumb as $item): ?>
            <!-- <a href="<//?= $item[1] ?>" class="breadcrumb"><//?= $item[0] ?></a> -->
            <?php echo $this->Html->link($item[0],
              ['controller'=>$item[2], 'action'=>$item[1]],
              ['escape' => false,'class'=>'breadcrumb']
            );?>
        <?php endforeach; ?>
    </div>

    <div class="companies-banner">
        <?= $this->Html->image('photos/idm.jpg') ?>
    </div>

    <div class="companies-menu">
        <?php foreach ($companies as $item): ?>
            <!-- <a href="<//?= $item[1] ?>" class="companies-menu-item">
                <//?= $this->Html->image($item[2]) ?>
                <i class="material-icons">keyboard_arrow_right</i>
                <span class="item-tooltip"><//?= $item[3] ?></span>
            </a> -->
            <?php echo $this->Html->link(
              $this->Html->image($item[2]).
              $this->Html->tag('i','keyboard_arrow_right',array('class'=>'material-icons')).
              $this->Html->tag('span',$item[3],array('class'=>'item-tooltip')),
              array('controller'=>'PortalProjects','action'=>'company'),
              array('escape' => false,'class'=>'companies-menu-item'))?>
        <?php endforeach; ?>
    </div>
</div>
