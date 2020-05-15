<?php
    // Breadcrumb
    $breadcrumb = [
        [ 'Inicio', 'home','Pages' ],
        [ 'Portal Proyectos', 'portalProjects','Projects']
    ];
?>
<div class="section bcrumb company">
    <div class="breadcrumb-container">
        <a href="javascript:history.back()" class="breadcrumb-back"><i class="material-icons">keyboard_arrow_left</i></a>
        <?php foreach ($breadcrumb as $item): ?>
            <?php echo $this->Html->link($item[0],
              ['controller'=>$item[2], 'action'=>$item[1]],
              ['escape' => false,'class'=>'breadcrumb']
            );?>
        <?php endforeach; ?>
        <?php if ($idEps != 23305): ?>
          <?php echo $this->Html->link($title,
            ['controller'=>'Projects', 'action'=>'companies',urlencode(base64_encode($idEpsParent)),urlencode(base64_encode($title))],
            ['escape' => false,'class'=>'breadcrumb']
          );?>
        <?php endif; ?>
        <?php echo $this->Html->link($NameEps,
          ['controller'=>'Projects', 'action'=>'companyGas',urlencode(base64_encode($current_user['V_ID_P_USER'])),urlencode(base64_encode($idEps)),urlencode(base64_encode($NameEps)),urlencode(base64_encode($title)),urlencode(base64_encode($idEpsParent))],
          ['escape' => false,'class'=>'breadcrumb']
        );?>
    </div>
<<<<<<< HEAD
=======
    <div class="company2-content" style="min-height: 0px;">
        <a href="/portal-projects/projects" class="company2-content-valve increase">
            <h2>Crecimiento</h2>
        </a>
        <div class="company-content-data">
        </div>
        <a href="" class="company2-content-valve sustenance">
            <h2>Sostenimiento</h2>
        </a>
    </div>
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
    <div class="company2-content">
      <?php $Img = null ?>
      <?php if ($idEps == 23305): ?>
        <?php $Img = 'logo-vert.svg' ?>
      <?php endif;?>
      <?php if ($idEps == 34012): ?>
        <?php $Img = 'logos/logo-sucursal-transmision.svg' ?>
      <?php endif;?>
      <?php if ($idEps == 34013): ?>
        <?php $Img = 'logos/logo-tgi.svg' ?>
      <?php endif;?>
      <?php if ($idEps == 34015): ?>
        <?php $Img = 'logos/logo-contugas.svg' ?>
      <?php endif;?>
      <?php if ($idEps == 34016): ?>
        <?php $Img = 'logos/logo-trecsa.svg' ?>
      <?php endif;?>
      <?php if ($idEps == 34017): ?>
        <?php $Img = 'logos/logo-trecsa.svg' ?>
      <?php endif;?>
      <?php if ($idEps == 34018): ?>
        <?php $Img = 'logos/logo-gebbras.svg' ?>
      <?php endif;?>
<<<<<<< HEAD

=======
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
      <?php
        $CategoriaSt1 = 870;
        $CategoriaSt2 = 8996;
        $CategoriaCr1 = 871;
        $CategoriaCr2 = 8997;
      ?>
      <?php
        $categoryCrecimiento = array();
        $categorySostenimiento = array();
        foreach ($AllLocalDBProjects as $PrjCode)
        {
          if ($PrjCode->CATEGORY == "crecimiento" && $PrjCode->EPS_REL == $idEps) {
            array_push($categoryCrecimiento, $PrjCode->PROJECT_NAME);
          }
          if ($PrjCode->CATEGORY == "sostenimiento" && $PrjCode->EPS_REL == $idEps) {
            array_push($categorySostenimiento, $PrjCode->PROJECT_NAME);
          }
        }
        $longitudCrecimientoBD = count($categoryCrecimiento);
        $longitudSostenimientoBD = count($categorySostenimiento);
        $TotalCrecimiento = $longitudCrecimientoBD + $ContadorCrecimiento;
        $TotalSostenimiento = $longitudSostenimientoBD + $ContadorSostenimiento;
        $SumCategory = $TotalCrecimiento + $TotalSostenimiento;
      ?>
<<<<<<< HEAD

        <!-- <a href="/portal-projects/projects" class="company2-content-valve increase">
            </?= $this->Html->image('icons/valvula-crecimiento.svg') ?>
            <div class="number">
                <h3>15</h3>
            </div>
            <h2>Crecimiento</h2>
        </a> -->
=======
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
        <?php echo $this->Html->link(
          $this->Html->image('icons/valvula-crecimiento.svg').
          $this->Html->tag('div',$this->Html->tag('h3',$TotalCrecimiento),array('class'=>'number')).
          $this->Html->tag('h2','Crecimiento'),
          array('controller'=>'Projects','action'=>'projects',urlencode(base64_encode($current_user['V_ID_P_USER'])),urlencode(base64_encode($idEps)),urlencode(base64_encode($CategoriaSt1)),urlencode(base64_encode($CategoriaSt2)),urlencode(base64_encode($NameEps)),urlencode(base64_encode($title)),urlencode(base64_encode($idEpsParent))),
          array('escape' => false,'class'=>'company2-content-valve increase'))?>
        <div class="company2-content-data">
            <figure class="company2-content-data-station">
                <?= $this->Html->image('icons/estacion-compresion.svg') ?>
            </figure>
            <div class="number">
                <h2><?=$SumCategory?></h2>
            </div>
            <figure class="company2-content-data-logo">
                <?= $this->Html->image($Img) ?>
            </figure>
        </div>
        <?php echo $this->Html->link(
          $this->Html->image('icons/valvula-sostenimiento.svg').
          $this->Html->tag('div',$this->Html->tag('h3',$TotalSostenimiento),array('class'=>'number')).
          $this->Html->tag('h2','Sostenimiento'),
          array('controller'=>'Projects','action'=>'projects',urlencode(base64_encode($current_user['V_ID_P_USER'])),urlencode(base64_encode($idEps)),urlencode(base64_encode($CategoriaCr1)),urlencode(base64_encode($CategoriaCr2)),urlencode(base64_encode($NameEps)),urlencode(base64_encode($title)),urlencode(base64_encode($idEpsParent))),
          array('escape' => false,'class'=>'company2-content-valve sustenance'))?>
<<<<<<< HEAD
        <!-- <a href="" class="company2-content-valve sustenance">
            </?= $this->Html->image('icons/valvula-sostenimiento.svg') ?>
            <div class="number">
                <h3>10</h3>
            </div>
            <h2>Sostenimiento</h2>
        </a> -->
=======
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
    </div>
</div>
