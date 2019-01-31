<?php
    // Breadcrumb
    $breadcrumb = [
        [ 'Inicio', 'home','Pages'],
        [ 'Portal Proyectos', 'index','PortalProjects'],
    ];
?>
<div class="section portal-projects">
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

    <div class="portal-projects-menu">
        <!-- <a href="/portal-projects/companies" class="portal-projects-menu-item secondary-text">
            <figure>
                <//?= $this->Html->image('logo-vert.svg') ?>
            </figure>
            <h2>Grupo Energía Bogotá</h2>
        </a> -->
        <?php echo $this->Html->link($this->Html->tag('figure',$this->Html->image('logo-vert.svg')).
                  $this->Html->tag('h2','Grupo Energía Bogotá'),
                  array('controller'=>'PortalProjects','action'=>'index'),
                  array('escape' => false, 'class'=>'portal-projects-menu-item secondary-text'))?>

        <!-- <a href="/portal-projects/companies" class="portal-projects-menu-item indigo-text text-darken-4">
            <figure>
                <//?= $this->Html->image('logos/isotipo-soluciones-energeticas.png') ?>
            </figure>
            <div class="title"><//?= $this->Html->image('logos/logotipo-soluciones-energeticas.png') ?></div>
        </a> -->
        <?php echo $this->Html->link($this->Html->tag('figure',$this->Html->image('logos/isotipo-soluciones-energeticas.png')).
                  $this->Html->tag('div',$this->Html->image('logos/logotipo-soluciones-energeticas.png'),array('class'=>'title')),
                  array('controller'=>'PortalProjects','action'=>'index'),
                  array('escape' => false, 'class'=>'portal-projects-menu-item indigo-text text-darken-4'))?>

        <!-- <a href="/portal-projects/companies" class="portal-projects-menu-item orange-text">
            <figure>
                <//?= $this->Html->image('logos/isotipo-interconexion.png') ?>
            </figure>
            <h2>Transmisión y transporte</h2>
        </a> -->

        <?php echo $this->Html->link($this->Html->tag('figure',$this->Html->image('logos/isotipo-interconexion.png')).
                  $this->Html->tag('h2','Transmisión y transporte'),
                  array('controller'=>'PortalProjects','action'=>'companies'),
                  array('escape' => false, 'class'=>'portal-projects-menu-item orange-text'))?>

        <!-- <a href="/portal-projects/companies" class="portal-projects-menu-item light-green-text text-darken-1">
            <figure>
                <//?= $this->Html->image('logos/isotipo-baja-emision.png') ?>
            </figure>
            <h2>Generación de baja emisión</h2>
        </a> -->
        <?php echo $this->Html->link($this->Html->tag('figure',$this->Html->image('logos/isotipo-baja-emision.png')).
                  $this->Html->tag('h2','Generación de baja emisión'),
                  array('controller'=>'PortalProjects','action'=>'index'),
                  array('escape' => false, 'class'=>'portal-projects-menu-item light-green-text text-darken-1'))?>
    </div>
</div>
