<?php
    // Breadcrumb
    $breadcrumb = [
        [ 'Inicio', 'home','Pages' ],
        [ 'Portal Proyectos','portalProjects','Projects'],
    ];
?>
<div class="section companies">
    <div class="breadcrumb-container">
        <a href="javascript:history.back()" class="breadcrumb-back"><i class="material-icons">keyboard_arrow_left</i></a>
        <?php foreach ($breadcrumb as $item): ?>
            <?php echo $this->Html->link(
    $item[0],
    ['controller'=>$item[2], 'action'=>$item[1]],
    ['escape' => false,'class'=>'breadcrumb']
            );?>
        <?php endforeach; ?>
        <?php echo $this->Html->link(
                $title,
                ['controller'=>'Projects', 'action'=>'companies',urlencode(base64_encode($idEps)),urlencode(base64_encode($title))],
                ['escape' => false,'class'=>'breadcrumb']
        );?>
    </div>

    <div class="companies-banner" id="slider">
      <ul class="slides">
      <li class="slide"><?= $this->Html->image('photos/companies_8.jpg') ?></li>
      <li class="slide"><?= $this->Html->image('photos/companies_2.jpg') ?></li>
      <li class="slide"><?= $this->Html->image('photos/companies_3.jpg') ?></li>
      <li class="slide"><?= $this->Html->image('photos/companies_4.jpg') ?></li>
      <li class="slide"><?= $this->Html->image('photos/companies_5.jpg') ?></li>
      <li class="slide active"><?= $this->Html->image('photos/companies_7.jpg') ?></li>
    </ul>
    </div>
    <?php $Img = null ?>
    <?php $Desc = null?>
    <div class="companies-menu">
          <?php foreach ($AllEps as $row => $value):?>
            <?php if ($value["parent_eps_object_id"] == $idEps): ?>
              <?php if ($value["eps_id"] == 34012): ?>
                <?php $NameEps = 'Sucursal de transmisión'?>
                <?php $Desc = 'Es la segunda empresa en transmisión de electricidad en Colombia, con una participación en el mercado del 12.5%. Cuenta con 1.504 km de circuitos a 230 kV activos en 17 subestaciones y la disponibilidad del sistema de transmisión a 31 de diciembre del 2015 fue del 99,93%, superior a la meta fijada por la CREG.'?>
                <?php $Img = 'logos/logo-sucursal-transmision.svg' ?>
            <?php elseif ($value["eps_id"] == 34013): ?>
              <?php $NameEps = $value["name"]?>
              <?php $Desc = 'MEGA: “En el año 2027 será una multilatina líder en Midstream con ingresos superiores a USD 1 billón y un ROE de digito”.
              Su unidad de infraestructura compartida, a la vanguardia tecnológica, tendrá una capacidad de transporte de gas equivalente > 1.500 mpcd consolidado su presencia en al menos 4 países.
              30% de los ingresos de la compañía provendrán de otros paises Latam, desarrollando como mínimo dos posiciones en nuevos mercados.
              Escalará su posiciones de generadoras conectando mas de 2.000 MW activos de térmicas a su red.
              Apalancando sobre su posición de mercado, desarrollaría una Unida de Negocios de “Midstream Petrolero” la cual aportará más de 10% de los ingresos de la compañía.
              Construyendo sobre su negocio de Urbes, estimulará per capitas de consumo y su infraestructura servirá a mas de 25 millones de usuarios y activará la demanda de GNV para transporte masico en el menos cinco ciudades de más de 500.000 habitantes.
              Será una compañía de mas de USD 5 billones de market cap, y trabajará con aliados estratégicos.'?>
              <?php $Img = 'logos/logo-tgi.svg' ?>
            <?php elseif ($value["eps_id"] == 34015): ?>
              <?php $Desc = 'Es la mayor transportadora de gas natural en Colombia, con 3.957 kilómetros de extensión de gasoductos, tiene una capacidad disponible de 733,8 MPCD (millones de pies cúbicos día) con los cuales atiende las zonas más pobladas del país tales como Bogotá, Medellín, Cali, el Eje Cafetero y el Piedemonte Llanero.'?>
              <?php $NameEps = $value["name"]?>
              <?php $Img = 'logos/logo-contugas.svg' ?>
            <?php elseif ($value["eps_id"] == 34016): ?>
              <?php $Desc = 'Empresa que presta servicios de transmisión de energía y actividades asociadas en Guatemala y Centro América. TRECSA brinda a clientes del sector público y privado servicios de construcción, operación, ingeniería, estudios eléctricos y gerencia de proyectos de transmisión de energía.'?>
              <?php $NameEps = $value["name"]?>
              <?php $Img = 'logos/logo-trecsa.svg' ?>
            <?php elseif ($value["eps_id"] == 34017): ?>
              <?php $Desc = 'Descripción'.' '.$value["name"]?>
              <?php $NameEps = $value["name"]?>
              <?php $Img = 'logos/logo-trecsa.svg' ?>
            <?php elseif ($value["eps_id"] == 34018): ?>
              <?php $Desc ='Es un vehículo de inversión en transmisión de energía eléctrica a través de la cual se manejan cuatro concesiones en operación comercial: MGE, TER, TSP y GOT con 1.094 kilómetros de red y 15 subestaciones'?>
              <?php $NameEps = $value["name"]?>
              <?php $Img = 'logos/logo-gebbras.svg' ?>
            <?php elseif ($value["eps_id"] == 34021): ?>
              <?php $Desc = 'Es la mayor transportadora de gas natural en Colombia, con 3.957 kilómetros de extensión de gasoductos, tiene una capacidad disponible de 733,8 MPCD (millones de pies cúbicos día) con los cuales atiende las zonas más pobladas del país tales como Bogotá, Medellín, Cali, el Eje Cafetero y el Piedemonte Llanero.'?>
              <?php $NameEps = $value["name"]?>
              <?php $Img = 'logos/logo-contugas.svg' ?>
            <?php elseif ($value["eps_id"] != 34012 && $value["eps_id"] != 34013 && $value["eps_id"] != 34015 && $value["eps_id"] != 34016 && $value["eps_id"] != 34017 && $value["eps_id"] != 34018 && $value["eps_id"] != 34021): ?>
              <?php $Desc = 'Descripción'.' '.$value["name"]?>
              <?php $NameEps = $value["name"]?>
              <?php $Img = 'logos/logo-gebbras.svg' ?>
            <?php endif;?>
            <?php if($value["eps_id"] != 34013 && $value["eps_id"] != 34021 && $value["eps_id"] != 34015 && $value["eps_id"] != 34017):?>
            <?php echo $this->Html->link(
            $this->Html->image($Img).
              $this->Html->tag('i', 'keyboard_arrow_right', array('class'=>'material-icons')).
              $this->Html->tag('span', $Desc, array('class'=>'item-tooltip')),
              array('controller'=>'Projects','action'=>'company',urlencode(base64_encode($current_user['V_ID_P_USER'])),urlencode(base64_encode($value["eps_id"])),urlencode(base64_encode($NameEps)),urlencode(base64_encode($title)),urlencode(base64_encode($idEps))),
              array('escape' => false,'class'=>'companies-menu-item'))?>
            <?php else:?>
              <?php echo $this->Html->link(
              $this->Html->image($Img).
                $this->Html->tag('i', 'keyboard_arrow_right', array('class'=>'material-icons')).
                $this->Html->tag('span', $Desc, array('class'=>'item-tooltip')),
                array('controller'=>'Projects','action'=>'companyGas',urlencode(base64_encode($current_user['V_ID_P_USER'])),urlencode(base64_encode($value["eps_id"])),urlencode(base64_encode($NameEps)),urlencode(base64_encode($title)),urlencode(base64_encode($idEps))),
                array('escape' => false,'class'=>'companies-menu-item'))?>
            <?php endif;?>
            <?php endif;?>
          <?php endforeach; ?>
    </div>
</div>
<script>
$(document).ready(function () {
  //save boolean
  var pause = false;
  //save blocks
  var block=  $('.slide');
  block.hide();
  $('.slide.active').show();
  //variable for counter
  var k =0;


   // interval function works only when pause is false
    setInterval(function () {
        if (!pause) {
          var $this = block.eq(k);
          // if (block.hasClass('active'))  {
          //   block.removeClass('active');
          // };
           block.removeClass('active').fadeOut(3000).eq(k).addClass('active').fadeIn(3000);
            $this.addClass('active');
            k++;
          //if k more then number of blocks on page
            if (k >= block.length ) {
              //rewrite variable to start over
                k = 0;
            }
        }
      //every 1.5 sec
    }, 5000);


  // item.hover(function () {
  //   //remove active class from all except this
  //       console.log(this);
  //       $(this).siblings().removeClass("active");
  //      $(this).addClass('active');
  //     //remove active class from all
  //     block.removeClass('active');
  //   //add active class to block item which is accounted as index cliked item
  //     block.eq($(this).index()).addClass('active');
  //   //on hover stop interval function
  //       pause = true;
  //   }, function () {
  //
  //   //when hover event ends, start interval function
  //       pause = false;
  //   });

});
</script>
