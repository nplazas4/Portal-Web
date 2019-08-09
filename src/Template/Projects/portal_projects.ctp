<?php
    // Breadcrumb
    $breadcrumb = [
        [ 'Inicio', 'home','Pages'],
        [ 'Portal Proyectos', 'portalProjects','Projects'],
    ];
?>
<!--Estructura del breadcrumb-->
<div class="section portal-projects">
    <div class="breadcrumb-container">
        <a href="javascript:history.back()" class="breadcrumb-back"><i class="material-icons">keyboard_arrow_left</i></a>
        <?php foreach ($breadcrumb as $item): ?>
            <?php echo $this->Html->link(
    $item[0],
    ['controller'=>$item[2], 'action'=>$item[1]],
    ['escape' => false,'class'=>'breadcrumb']
            );?>
        <?php endforeach; ?>
    </div>
    <div class="portal-projects-menu">
        <?= $title = null ?>
        <?php foreach ($AllEps as $row => $value):?>
          <?php if ($value["eps_id"] == 23305): ?>
            <?php $title = 'Grupo Energía Bogotá'?>
            <?php echo $this->Html->link(
                $this->Html->tag('figure', $this->Html->image('logo-vert.svg')).
                $this->Html->tag('h2', 'Grupo Energía Bogotá'),
                array('controller'=>'Projects','action'=>'company',urlencode(base64_encode($current_user['V_ID_P_USER'])),urlencode(base64_encode($value["eps_id"])),urlencode(base64_encode($title))),
                array('escape' => false, 'class'=>'portal-projects-menu-item secondary-text')
            );?>
          <?php elseif ($value["eps_id"] == 23306 || $value["eps_id"] == 23307 || $value["eps_id"] == 23308):?>
            <?php if ($value["eps_id"] == 23306): ?>
              <?php $Color = 'orange-text'; ?>
            <?php elseif($value["eps_id"] == 23307):?>
              <?php $Color = 'indigo-text text-darken-4';?>
            <?php elseif($value["eps_id"] == 23308):?>
              <?php $Color = 'light-green-text text-darken-1';?>
            <?php endif; ?>
            <?php $title = $value["name"]?>
            <?php echo $this->Html->link(
                           $this->Html->tag('figure', $this->Html->image('logos/'.$value["eps_id"].'.png')).
                           $this->Html->tag('h2', $title),
                           array('controller'=>'Projects','action'=>'companies',urlencode(base64_encode($value["eps_id"])),urlencode(base64_encode($title))),
                           array('escape' => false, 'class'=>'portal-projects-menu-item '.$Color)
                       )?>
          <?php endif;?>
        <?php endforeach; ?>
    </div>
</div>
