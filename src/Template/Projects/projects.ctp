<?= $this->Html->script(['search.min.js']);?>
<?php
    // Breadcrumb
    $breadcrumb = [
        [ 'Inicio', 'home','Pages' ],
        [ 'Portal Proyectos', 'portalProjects','Projects']
    ];

    // Indicadores
    $indicators = [];
    if ($array_projects['code_1'] != 1921 && $array_projects['child_eps_id'] != 34012) {
      $indicators = [
          [
              'name' => '﻿SPI',
              'id' => 'spi-indicator',
              'icon' => 'show_chart',
              'color' => '',
              'class' => 'd-flex col s12 m6 l4 xl4',
<<<<<<< HEAD
              'tooltip' => 'Suma de todos los SPI dividido por la cantidad de proyectos.',
=======
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
          ],
          [
              'name' => 'Presupuesto Total USD ',
              'id' => 'pres-total-indicator',
              'icon' => 'language',
              'color' => 'accent',
              'class' => 'd-flex col s12 m6 l4 xl4',
<<<<<<< HEAD
              'tooltip' => 'Suma de todos los presupuestos planeados.',
=======
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
          ],
          [
              'name' => 'Ejecutado Total USD',
              'id' => 'ejec-total-indicator',
              'icon' => 'language',
              'color' => 'tertiary',
              'class' => 'd-flex col s12 m6 l4 xl4',
<<<<<<< HEAD
              'tooltip' => 'Suma de todos los presupuestos ejecutados.',
=======
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
          ],
          [
              'name' => 'CPI',
              'id' => 'cpi-indicator',
              'icon' => 'show_chart',
              'color' => '',
              'class' => 'd-flex col s12 m6 l4 xl4',
<<<<<<< HEAD
              'tooltip' => 'Suma de todos los CPI dividido por la cantidad de proyectos.',
=======
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
          ],
          [
              'name' => 'Presupuesto Anual USD',
              'id' => 'pres-anual-indicator',
              'icon' => 'language',
              'color' => 'primary',
              'class' => 'd-flex col s12 m6 l4 xl4',
<<<<<<< HEAD
              'tooltip' => 'Suma de todos los presupuestos anuales.',
=======
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
          ],
          [
              'name' => 'Ejecutado Anual USD',
              'id' => 'ejec-anual-indicator',
              'icon' => 'language',
              'color' => 'primary',
              'class' => 'd-flex col s12 m6 l4 xl4',
<<<<<<< HEAD
              'tooltip' => 'Suma de todos los ejecutados anuales.',
          ],
      ];
    } elseif ($array_projects['code_1'] == 870) {
=======
          ],
      ];
    } elseif ($array_projects['child_eps_id'] == 34012) {
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
      $indicators = [
          [
              'name' => '﻿SPI',
              'id' => 'spi-indicator',
              'icon' => 'show_chart',
              'color' => '',
              'class' => 'd-flex col s12 m6 l4 xl4',
<<<<<<< HEAD
              'tooltip' => 'Suma de todos los SPI dividido por la cantidad de proyectos.',
=======
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
          ],
          [
              'name' => 'Presupuesto Total COP ',
              'id' => 'pres-total-indicator',
              'icon' => 'language',
              'color' => 'accent',
              'class' => 'd-flex col s12 m6 l4 xl4',
<<<<<<< HEAD
              'tooltip' => 'Suma de todos los presupuestos planeados.',
=======
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
          ],
          [
              'name' => 'Ejecutado Total COP',
              'id' => 'ejec-total-indicator',
              'icon' => 'language',
              'color' => 'tertiary',
              'class' => 'd-flex col s12 m6 l4 xl4',
<<<<<<< HEAD
              'tooltip' => 'Suma de todos los presupuestos ejecutados.',
=======
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
          ],
          [
              'name' => 'CPI',
              'id' => 'cpi-indicator',
              'icon' => 'show_chart',
              'color' => '',
              'class' => 'd-flex col s12 m6 l4 xl4',
<<<<<<< HEAD
              'tooltip' => 'Suma de todos los CPI dividido por la cantidad de proyectos.',
=======
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
          ],
          [
              'name' => 'Presupuesto Anual COP',
              'id' => 'pres-anual-indicator',
              'icon' => 'language',
              'color' => 'primary',
              'class' => 'd-flex col s12 m6 l4 xl4',
<<<<<<< HEAD
              'tooltip' => 'Suma de todos los presupuestos anuales.',
=======
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
          ],
          [
              'name' => 'Ejecutado Anual COP',
              'id' => 'ejec-anual-indicator',
              'icon' => 'language',
              'color' => 'primary',
              'class' => 'd-flex col s12 m6 l4 xl4',
<<<<<<< HEAD
              'tooltip' => 'Suma de todos los ejecutados anuales.',
=======
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
          ],
      ];
    } else {
      $indicators = [
          [
              'name' => '﻿SPI',
              'id' => 'spi-indicator',
              'icon' => 'show_chart',
              'color' => '',
              'class' => 'd-flex col s12',
<<<<<<< HEAD
              'tooltip' => 'Suma de todos los SPI dividido por la cantidad de proyectos.',
=======
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
          ]
      ];
    }
?>
<div class="section projects">
    <div class="breadcrumb-container">
        <a href="javascript:history.back()" class="breadcrumb-back"><i class="material-icons">keyboard_arrow_left</i></a>
          <?php foreach ($breadcrumb as $item): ?>
            <?php echo $this->Html->link($item[0],
              ['controller'=>$item[2], 'action'=>$item[1]],
              ['escape' => false,'class'=>'breadcrumb']
            );?>
          <?php endforeach; ?>
          <!--Breadcrumb para las EPS provenientes de la pestaña companies, diferentes a la EPS de grupo de energía de Bogotá.
    Dentro de los breadcrumb se utiliza para enviar parametro el urlencode(base64_encode($var)) para codificar los parametro a enviar.-->
    <?php if ($array_projects["child_eps_id"] != 23305): ?>
      <?php echo $this->Html->link(
            $array_projects["name"],
            ['controller'=>'Projects', 'action'=>'companies',urlencode(base64_encode($json_projects))],
            ['escape' => false,'class'=>'breadcrumb']
      );?>
      <?php echo $this->Html->link(
              $array_projects["child_name"],
              ['controller'=>'Projects', 'action'=>'company',urlencode(base64_encode($json_projects))],
              ['escape' => false,'class'=>'breadcrumb']
        );?>
    <?php else:?>
      <?php echo $this->Html->link(
              $array_projects["name"],
              ['controller'=>'Projects', 'action'=>'company',urlencode(base64_encode($json_projects))],
              ['escape' => false,'class'=>'breadcrumb']
        );?>
    <?php endif;?>
      <?php echo $this->Html->link(
        $array_projects["category_name"],
        ['controller'=>'Projects', 'action'=>'projects',urlencode(base64_encode($json_projects))],
        ['escape' => false,'class'=>'breadcrumb']
      );?>
    </div>
    <sidebar class="projects-sidebar">
       <div class="projects-sidebar-img">
         <?php if ($array_projects["child_eps_id"] != 34013 && $array_projects["child_eps_id"] != 34021 && $array_projects["child_eps_id"] != 34015 && $array_projects["child_eps_id"] != 34017): ?>
           <?= $this->Html->image('photos/energia.jpg') ?>
         <?php else:?>
           <?= $this->Html->image('photos/gas.jpg') ?>
         <?php endif;?>
        </div>
        <div class="projects-sidebar-total">
            <h2><?=$array_projects["proj_number"]?> Proyectos</h2>
        </div>
        <div class="projects-sidebar-info">
            <h2>Información general</h2>
            <p id="description-text"></p>
        </div>
    </sidebar>
  <div class="projects-content">
      <div class="indicators row wrap">
        <?php foreach ($indicators as $indicator): ?>
          <div class="<?=$indicator['class']?>">
<<<<<<< HEAD
            <div id="div-<?= $indicator['id']?>" class="indicator <?= $indicator['color'] ?> tooltipped" data-position="bottom" data-tooltip="<?=$indicator['tooltip']?>">
=======
            <div id="div-<?= $indicator['id']?>" class="indicator <?= $indicator['color'] ?>">
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
              <h2><?= $indicator['name'] ?></h2>
              <h3 id="<?= $indicator['id']?>"></h3>
              <i class="material-icons"><?= $indicator['icon'] ?></i>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="section home ml-auto mr-auto" style="margin-top: 2%; width: 98%"> <!--Estructura de búsqueda-->
      <div class="home-menu">
          <form class="col s12">
              <div class="input-field col s12">
                <input id="Input_Search" type="text"></input>
                <label for="Input_Search">Buscar</label>
            </div>
            <div class="fixed-action-btn">
            <a class="btn-floating btn-large waves-effect waves-light Scroll-button" id="return-to-top"><i class="material-icons">arrow_upward</i></a>
          </div>
          <div class="fixed-action-btn" style="margin-bottom: 120px">
            <a class="btn-floating btn-large error noselect">
              <i class="large material-icons noselect" id="btn_main_filter">search</i>
            </a>
          </div>
          <div class="fixed-action-btn filters" style="margin-bottom: 178px">
            <a class="btn-floating btn-large phase ii noselect">
              Área
            </a>
            <ul style="right: -45px !important;" id="ul-area">
              <li><a class="btn-floating warning"><i id="cancel_area" class="large material-icons">cancel</i></a></li>
              <?php foreach ($area as $ws_area => $area_value):?>
                <?php if ($area_value['code_type_id'] == "457"): ?>
                  <li class="btn-filter-phase tooltipped" data-position="bottom" data-tooltip="<?=$area_value['description']?>" data-id="<?=$area_value['code_type_id']?>" data-type="area"  value="<?=$area_value['code_type_id']?>"><a id="<?=$area_value['code_type_id']?>" class="btn-floating dark lighten-1">TI</a></li>
                <?php elseif ($area_value['code_type_id'] == "230"): ?>
                    <li class="btn-filter-phase tooltipped" data-position="bottom" data-tooltip="<?=$area_value['description']?>" data-id="<?=$area_value['code_type_id']?>" data-type="area"  value="<?=$area_value['code_type_id']?>"><a id="<?=$area_value['code_type_id']?>" class="btn-floating dark lighten-1">DGH</a></li>
                <?php elseif ($area_value['code_type_id'] == "456"): ?>
                    <li class="btn-filter-phase tooltipped" data-position="bottom" data-tooltip="<?=$area_value['description']?>" data-id="<?=$area_value['code_type_id']?>" data-type="area"  value="<?=$area_value['code_type_id']?>"><a id="<?=$area_value['code_type_id']?>" class="btn-floating dark lighten-1">SA</a></li>
                <?php elseif ($area_value['code_type_id'] == "233"): ?>
                    <li class="btn-filter-phase tooltipped" data-position="bottom" data-tooltip="<?=$area_value['description']?>" data-id="<?=$area_value['code_type_id']?>" data-type="area"  value="<?=$area_value['code_type_id']?>"><a id="<?=$area_value['code_type_id']?>" class="btn-floating dark lighten-1">GH</a></li>
                  <?php elseif ($area_value['code_type_id'] == "463"): ?>
                    <li class="btn-filter-phase tooltipped" data-position="bottom" data-tooltip="<?=$area_value['description']?>" data-id="<?=$area_value['code_type_id']?>" data-type="area"  value="<?=$area_value['code_type_id']?>"><a id="<?=$area_value['code_type_id']?>" class="btn-floating dark lighten-1">GP</a></li>
                  <?php elseif ($area_value['code_type_id'] == "287"): ?>
                    <li class="btn-filter-phase tooltipped" data-position="bottom" data-tooltip="<?=$area_value['description']?>" data-id="<?=$area_value['code_type_id']?>" data-type="area"  value="<?=$area_value['code_type_id']?>"><a id="<?=$area_value['code_type_id']?>" class="btn-floating dark lighten-1">IDM</a></li>
                  <?php elseif ($area_value['code_type_id'] == "472"): ?>
                    <li class="btn-filter-phase tooltipped" data-position="bottom" data-tooltip="<?=$area_value['description']?>" data-id="<?=$area_value['code_type_id']?>" data-type="area"  value="<?=$area_value['code_type_id']?>"><a id="<?=$area_value['code_type_id']?>" class="btn-floating dark lighten-1">DMG</a></li>
                <?php endif;?>
              <?php endforeach;?>
            </ul>
          </div>
          <div class="fixed-action-btn filters" style="margin-bottom: 236px">
            <a class="btn-floating btn-large phase iii noselect">
              MEC
            </a>
            <ul style="right: -105px !important;" id="ul-mec">
<<<<<<< HEAD
              <li><a class="btn-floating warning"><i id="cancel_mec" class="large material-icons" id="btn_main_filter">cancel</i></a></li>
=======
              <li><a class="btn-floating warning"><i id="cancel_mec" class="large material-icons">cancel</i></a></li>
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
              <?php foreach ($mec as $ws_mec => $mec_value):?>
                <li class="btn-filter-phase" data-id="<?=$mec_value['code_type_id']?>" data-type="mec"  value="<?=$mec_value['code_type_id']?>"><a id="<?=$mec_value['code_type_id']?>" class="btn-floating dark lighten-1"><?=substr($mec_value['description'],0,3)?></a></li>
              <?php endforeach;?>
            </ul>
          </div>
          <div class="fixed-action-btn filters" style="margin-bottom: 294px">
            <a class="btn-floating btn-large phase iv noselect">
              Ctg
            </a>
            <ul style="right: -75px;" id="ul-ctg">
              <li><a class="btn-floating warning"><i class="large material-icons" id="cancel_ctg">cancel</i></a></li>
              <?php foreach ($category as $ws_category => $category_value):?>
                <li class="btn-filter-phase tooltipped" data-position="bottom" data-tooltip="<?=$category_value['description']?>" data-id="<?=$category_value['code_type_id']?>" data-type="category" value="<?=$category_value['code_type_id']?>"><a id="<?=$category_value['code_type_id']?>" class="btn-floating dark lighten-1"><?=substr($category_value['description'],0,3).'.'?></a></li>
              <?php endforeach;?>
            </ul>
          </div>
          <div class="fixed-action-btn filters" style="margin-bottom: 351px">
            <a class="btn-floating btn-large phase v noselect">Fase</a>
            <ul id="ul-fase">
              <li><a class="btn-floating warning"><i class="large material-icons" id="cancel_fase">cancel</i></a></li>
              <?php foreach (array_reverse($fase) as $ws_fase => $fase_value):?>
                <?php if ($fase_value['code_type_id'] == "1910"): ?>
                  <li class="btn-filter-phase"  data-id="<?=$fase_value['code_type_id']?>" data-type="fase" value="<?=$fase_value['code_type_id']?>"><a id="<?=$fase_value['code_type_id']?>" class="btn-floating dark lighten-1">C</a></li>
                <?php elseif ($fase_value['code_type_id'] == "420"): ?>
                  <li class="btn-filter-phase"  data-id="<?=$fase_value['code_type_id']?>" data-type="fase" value="<?=$fase_value['code_type_id']?>"><a id="<?=$fase_value['code_type_id']?>" class="btn-floating dark lighten-1">V</a></li>
                <?php elseif ($fase_value['code_type_id'] == "212"): ?>
                  <li class="btn-filter-phase" data-id="<?=$fase_value['code_type_id']?>" data-type="fase" value="<?=$fase_value['code_type_id']?>"><a id="<?=$fase_value['code_type_id']?>" class="btn-floating dark lighten-1">IV</a></li>
                <?php elseif ($fase_value['code_type_id'] == "211"): ?>
                  <li class="btn-filter-phase" data-id="<?=$fase_value['code_type_id']?>" data-type="fase" value="<?=$fase_value['code_type_id']?>"><a id="<?=$fase_value['code_type_id']?>" class="btn-floating dark lighten-1">III</a></li>
                <?php elseif ($fase_value['code_type_id'] == "210"): ?>
                  <li class="btn-filter-phase" data-id="<?=$fase_value['code_type_id']?>" data-type="fase" value="<?=$fase_value['code_type_id']?>"><a id="<?=$fase_value['code_type_id']?>" class="btn-floating dark lighten-1">II</a></li>
                <?php elseif ($fase_value['code_type_id'] == "209"): ?>
                  <li class="btn-filter-phase" data-id="<?=$fase_value['code_type_id']?>" data-type="fase" value="<?=$fase_value['code_type_id']?>"><a id="<?=$fase_value['code_type_id']?>" class="btn-floating dark lighten-1">I</a></li>
                <?php endif;?>
              <?php endforeach;?>
            </ul>
          </div>
        </form>
      </div>
    </div>
    <div class="projects-content2">
        <div class="divider transparent mb-3"></div>
        <div class="row wrap" id="main-div">
        </div>
    </div>
</div>
<div id="compareProjectVersion" class="modal w-600" style="width: 900px !important;">
    <div class="modal-content">
        <a class="modal-close close">
            <i class="material-icons">close</i>
        </a>
        <h2 id="compare-title"></h2>
        <div class="row wrap ma-0">
            <div class="d-flex col s12 m6 pa-0">
                <div class="sheet light lighten-1">
                    <div class="sheet-content">
                      <div class="input-field">
                        <form id="form-select-new">
                          <select id="compare-select-new">
                            <option id="actual-new" value="actual">Actual</option>
                          </select>
                          <label>Versión</label>
                        </form>
                      </div>
                      <?php if ($array_projects['code_1'] != 1921):?>
                        <div class="data-box mt-auto mx-0">
                            <div class="data-box-circle phase">
                                <h3 id="fase-new"></h3>
                            </div>
                            <div class="data-box-content">
                                <span id="fase-title-new"></span>
                            </div>
                        </div>
                        <div class="data-box mx-0">
                            <div class="data-box-circle" id="div-spi-new">
                                <h4 id="spi-new"></h4>
                            </div>
                            <div class="data-box-content">
                                <span>SPI</span>
                            </div>
                        </div>
                        <div class="data-box mx-0">
                            <div class="data-box-circle" id="div-cpi-new">
                                <h5 id="cpi-new"></h5>
                            </div>
                            <div class="data-box-content">
                                <span>CPI Anual</span>
                            </div>
                        </div>
                        <div class="data-box mx-0">
                            <div class="data-box-circle" id="div-cpi-total-new">
                                <h5 id="cpi-total-new"></h5>
                            </div>
                            <div class="data-box-content">
                                <span>CPI Total</span>
                            </div>
                        </div>
                        <div class="data-box mx-0">
                            <div class="data-box-circle" id="div-igr-new">
                                <h5 id="igr-new"></h5>
                            </div>
                            <div class="data-box-content">
                                <span>IGR</span>
                            </div>
                        </div>
                        <div class="divider transparent"></div>
                        <div class="data-chip accent mx-0">
<<<<<<< HEAD
                          <?php if ($array_projects['child_eps_id'] == 34012): ?>
                            <h3>Presupuesto Planeado (COP)</h3>
                          <?php else: ?>
                            <h3>Presupuesto Planeado (USD)</h3>
                          <?php endif; ?>
                          <h4 id="pres-plan-new"></h4>
=======
                            <?php if ($array_projects['child_eps_id'] == 34012): ?>
                              <h3>Presupuesto Planeado (COP)</h3>
                            <?php else: ?>
                              <h3>Presupuesto Planeado (USD)</h3>
                            <?php endif; ?>
                            <h4 id="pres-plan-new"></h4>
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
                        </div>
                        <div class="data-chip secondary mb-0 mx-0">
                          <?php if ($array_projects['child_eps_id'] == 34012): ?>
                            <h3>Presupuesto Ejecutado (COP)</h3>
                          <?php else: ?>
                            <h3>Presupuesto Ejecutado (USD)</h3>
                          <?php endif;?>
<<<<<<< HEAD
                          <h4 id="pres-ejec-new"></h4>
=======
                            <h4 id="pres-ejec-new"></h4>
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
                        </div>
                      <?php else:?>
                        <div class="data-box mx-0">
                            <div class="data-box-circle" id="div-spi-new">
                                <h4 id="spi-new"></h4>
                            </div>
                            <div class="data-box-content">
                                <span>SPI</span>
                            </div>
                        </div>
                      <?php endif;?>
                    </div>
                </div>
            </div>
            <div class="d-flex col s12 m6 pa-0">
                <div class="sheet light">
                    <div class="sheet-content">
                        <div class="input-field">
                          <form id="form-select-old">
                            <select id="compare-select-old">
                              <option id="actual-old" value="actual">Actual</option>
                            </select>
                            <label>Versión</label>
                          </form>
                        </div>
                        <?php if ($array_projects['code_1'] != 1921):?>
                        <div class="data-box mt-auto mx-0">
                            <div class="data-box-circle phase">
                                <h3 id="fase-old"></h3>
                            </div>
                            <div class="data-box-content">
                                <span id="fase-title-old"></span>
                            </div>
                        </div>
                        <div class="data-box mx-0">
                            <div class="data-box-circle" id="div-spi-old">
                                <h4 id="spi-old"></h4>
                            </div>
                            <div class="data-box-content">
                                <span>SPI</span>
                            </div>
                        </div>
                        <div class="data-box mx-0">
                            <div class="data-box-circle" id="div-cpi-annual-old">
                                <h5 id="cpi-old"></h5>
                            </div>
                            <div class="data-box-content">
                                <span>CPI Anual</span>
                            </div>
                        </div>
                        <div class="data-box mx-0">
                            <div class="data-box-circle" id="div-cpi-total-old">
                                <h5 id="cpi-total-old"></h5>
                            </div>
                            <div class="data-box-content" id="div-cpi-total-old">
                                <span>CPI Total</span>
                            </div>
                        </div>
                        <div class="data-box mx-0">
                            <div class="data-box-circle" id="div-igr-old">
                                <h5 id="igr-old"></h5>
                            </div>
                            <div class="data-box-content">
                                <span>IGR</span>
                            </div>
                        </div>
                        <div class="divider transparent"></div>
                        <div class="data-chip accent mx-0">
                          <?php if ($array_projects['child_eps_id'] == 34012): ?>
                            <h3>Presupuesto Planeado (COP)</h3>
                          <?php else:?>
                            <h3>Presupuesto Ejecutado (USD)</h3>
                          <?php endif;?>
<<<<<<< HEAD
                          <h4 id="pres-plan-old"></h4>
=======
                            <h4 id="pres-plan-old"></h4>
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
                        </div>
                        <div class="data-chip secondary mb-0 mx-0">
                          <?php if ($array_projects['child_eps_id'] == 34012): ?>
                            <h3>Presupuesto Ejecutado (COP)</h3>
                          <?php else:?>
                            <h3>Presupuesto Ejecutado (USD)</h3>
                          <?php endif;?>
<<<<<<< HEAD
                          <h4 id="pres-ejec-old"></h4>
                        </div>
                        <?php else:?>
                          <div class="data-box mx-0">
                              <div class="data-box-circle" id="div-spi-old">
                                  <h4 id="spi-old"></h4>
                              </div>
                              <div class="data-box-content">
                                  <span>SPI</span>
                              </div>
                          </div>
                        <?php endif;?>
=======
                            <h4 id="pres-ejec-old"></h4>
                        </div>
                      <?php else:?>
                        <div class="data-box mx-0">
                            <div class="data-box-circle" id="div-spi-old">
                                <h4 id="spi-old"></h4>
                            </div>
                            <div class="data-box-content">
                                <span>SPI</span>
                            </div>
                        </div>
                      <?php endif;?>
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
                    </div>
                </div>
            </div>
        </div>
        <div id="first"></div>
<div id="second"></div>
    </div>
    <div class="modal-footer">
        <a class="modal-close waves-effect waves-light btn btn-depressed tertiary my-0">Aceptar</a>
    </div>
    <div class="modal-footer">
        <a class="modal-close waves-effect waves-light btn btn-depressed tertiary my-0">Aceptar</a>
    </div>
</div>
<script>
<<<<<<< HEAD
  // $(document).ready(function(){
=======
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
    var csrfToken = <?= json_encode($this->request->getParam('_csrfToken')) ?>;
    var xhr2, xhr3, xhr4;
    var total_spi = 0, total_cpi = 0, total_pres_total = 0, total_eject_total = 0, total_pres_anual = 0, total_ejec_anual = 0;
    // total_cpi = 0, total_pres_total = 0, total_eject_total = 0, total_pres_anual = 0, total_ejec_anual = 0, array_lenght = 1;
    var pres_ejecutado = 0, pres_planeado = 0, igr_compare = 0, cpi_anual_comp = 0, cpi_total_comp = 0, selected_date = 0, id_project = 0;
    // if(xhr1 && xhr1.readyState != 4){
    //     xhr1.abort();
    // }
    var promise = new Promise(function(resolve, reject){
      const xhr1 = $.ajax({
        headers:{
          'X-CSRF-Token':csrfToken
        },
        method: "GET",
        dataType: "json",
        url: "<?php echo $this->Url->build(['controller'=>'Navbar','action'=>'projects']);?>",
        data: {"user_id" : "<?=$current_user["V_ID_P_USER"]?>", "eps_id" : "<?=$array_projects["child_eps_id"]?>", "code_1" : "<?=$array_projects["code_1"]?>", "code_2" : "<?=$array_projects["code_2"]?>"},
        cache: true,
        beforeSend: function(xhr) {
          xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        }
      }).done(function(response){
        array_lenght = response.length;
        $.each(response, function(i) {
          var iteration_num = i + 1;
          <?php if ($array_projects['code_1'] != 1921):?>
<<<<<<< HEAD
            $('#main-div').append($('<div>', {class : 'Search list d-flex col s12 m6 l4 xl3', id : this.project_id_p6}));
            var project_div = $('#'+this.project_id_p6);
            project_div.attr({'data-fase' : this.code_fase, 'data-category' : this.code_category, 'data-mec' : this.code_pec, 'data-area' : this.code_area});
            project_div.append($('<div>', {class : 'sheet pointer', id: 'sheet-pointer-'+iteration_num}));
            $('#sheet-pointer-'+iteration_num).append($('<div>', {class : 'sheet-options', id: 'sheet-options-'+iteration_num}));
            $('#sheet-options-'+iteration_num).append($('<a>', {class : 'dropdown-trigger btn-floating btn-flat', id: 'a-icon-'+iteration_num}));
            $('#a-icon-'+iteration_num).attr('data-target','dropdown'+iteration_num);
            $('#a-icon-'+iteration_num).append($('<i>', {class : 'material-icons', id : 'i-icon'+iteration_num, text : 'more_vert'}));
            // $('#a-icon-'+iteration_num).after($('<ul>', {id : 'dropdown'+iteration_num, class : 'dropdown-content', style : 'display: block; width: 200px; left: 0px; top: 0px; height: 55px; transform-origin: 100% 0px; opacity: 1; transform: scaleX(1) scaleY(1);'}));
            $('#a-icon-'+iteration_num).after($('<ul>', {id : 'dropdown'+iteration_num, class : 'dropdown-content'}));
            $('#dropdown'+iteration_num).append($('<li>', {id : 'li-compare-'+iteration_num, class : 'compare-opt'}));
            $('#li-compare-'+iteration_num).append($('<a>', {class : 'modal-trigger', href : '#compareProjectVersion', id : 'a-compare-'+iteration_num}));
            $('#a-compare-'+iteration_num).append($('<i>', {class : 'mdi mdi-select-compare', id: 'compare-icon-'+iteration_num}));
            $('#compare-icon-'+iteration_num).after('COMPARAR');
            // Div siguiente a sheet-option
            $('#sheet-options-'+iteration_num).after($('<div>', {class : 'sheet-line regional-text', id : 'regional-div-'+iteration_num}));
            $('#regional-div-'+iteration_num).append($('<div>', {class : 'sheet-line-item'}));
            $('#regional-div-'+iteration_num).append($('<div>', {class : 'sheet-line-item'}));
            $('#regional-div-'+iteration_num).append($('<div>', {class : 'sheet-line-item'}));
            // DIV DATA
            var url_project = '/Portal-Web/projects/project/'+btoa(unescape(encodeURIComponent(JSON.stringify(this.project_id_p6))))+'/'+btoa(unescape(encodeURIComponent(JSON.stringify(<?=$json_projects?>))))+'/'+btoa(unescape(encodeURIComponent(JSON.stringify(this.id_p_project))));
            $('#regional-div-'+iteration_num).after($('<div>', {class : 'sheet-content pl-5', onclick : 'location.href="'+url_project+'"' ,id : 'div-data'+iteration_num})); //onclick
            $('#div-data'+iteration_num).append($('<h2>', {text : this.name, id : 'h2-name-'+iteration_num}));
            // FASE
            $('#h2-name-'+iteration_num).after($('<div>', {class : 'data-box mt-auto', id : 'data-box-'+iteration_num}));
            $('#data-box-'+iteration_num).append($('<div>', {class : 'data-box-circle', id : 'data-box-circle-'+iteration_num})); //FASE CIRCLE
            if (this.code_fase == '209') {
              $('#data-box-circle-'+iteration_num).append($('<h3>', {text : 'I', class : 'phase-text'})); //FASE DATA
              $('#data-box-circle-'+iteration_num).after($('<div>', {class : 'data-box-content', id : 'phase-text-'+iteration_num}));
              $('#phase-text-'+iteration_num).append($('<span>', {text : 'Estructuración', class : 'span-text'})); //FASE NAME
            } else if (this.code_fase == '210') {
              $('#data-box-circle-'+iteration_num).append($('<h3>', {text : 'II', class : 'phase-text'})); //FASE DATA
              $('#data-box-circle-'+iteration_num).after($('<div>', {class : 'data-box-content', id : 'phase-text-'+iteration_num}));
              $('#phase-text-'+iteration_num).append($('<span>', {text : 'Selección', class : 'span-text'})); //FASE NAME
            }else if (this.code_fase == '211') {
              $('#data-box-circle-'+iteration_num).append($('<h3>', {text : 'III', class : 'phase-text'})); //FASE DATA
              $('#data-box-circle-'+iteration_num).after($('<div>', {class : 'data-box-content', id : 'phase-text-'+iteration_num}));
              $('#phase-text-'+iteration_num).append($('<span>', {text : 'Planeación', class : 'span-text'})); //FASE NAME
            }else if (this.code_fase == '212') {
              $('#data-box-circle-'+iteration_num).append($('<h3>', {text : 'IV', class : 'phase-text'})); //FASE DATA
              $('#data-box-circle-'+iteration_num).after($('<div>', {class : 'data-box-content', id : 'phase-text-'+iteration_num}));
              $('#phase-text-'+iteration_num).append($('<span>', {text : 'Ejecución', class : 'span-text'})); //FASE NAME
            }else if (this.code_fase == '420') {
              $('#data-box-circle-'+iteration_num).append($('<h3>', {text : 'V', class : 'phase-text'})); //FASE DATA
              $('#data-box-circle-'+iteration_num).after($('<div>', {class : 'data-box-content', id : 'phase-text-'+iteration_num}));
              $('#phase-text-'+iteration_num).append($('<span>', {text : 'Cierre y transferencia', class : 'span-text'})); //FASE NAME
            }else if (this.code_fase == '1910') {
              $('#data-box-circle-'+iteration_num).append($('<h3>', {text : 'C', class : 'phase-text'})); //FASE DATA
              $('#data-box-circle-'+iteration_num).after($('<div>', {class : 'data-box-content', id : 'phase-text-'+iteration_num}));
              $('#phase-text-'+iteration_num).append($('<span>', {text : 'Cerrado', class : 'span-text'})); //FASE NAME
            }
            // SPI
            $('#data-box-'+iteration_num).after($('<div>', {class : 'data-box', id : 'data-spi-'+iteration_num}));
            $('#data-spi-'+iteration_num).append($('<div>', {class : 'data-box-circle tooltipped', id : 'spi-circle-'+iteration_num}).attr({'data-position': 'bottom', 'data-tooltip' : '% Avance ejecutado / % Avance planeado'}));
            var project_spi = null;
            if (this.spi_labor_units != null) {
                project_spi = parseFloat(this.spi_labor_units).toFixed(2)
            }
            $('#spi-circle-'+iteration_num).append($('<h4>', {text : project_spi, id : 'spi-id-'+iteration_num, class : 'spi-value'}));
            $('#spi-circle-'+iteration_num).after($('<div>', {class : 'data-box-content', id : 'spi-text-'+iteration_num}));
            $('#spi-text-'+iteration_num).append($('<span>', {text : 'SPI'}));
            // CPI Anual
            $('#data-spi-'+iteration_num).after($('<div>', {class : 'data-box', id : 'data-cpi-'+iteration_num}));
            $('#data-cpi-'+iteration_num).append($('<div>', {class : 'data-box-circle tooltipped', id : 'cpi-circle-'+iteration_num}).attr({'data-position': 'bottom', 'data-tooltip' : 'AC anual  / Presupuesto anual'}));
            $('#cpi-circle-'+iteration_num).append($('<h5>', {class : 'cpi-anual-data', id : 'cpi-id-'+iteration_num})); //CPI DATA
            $('#cpi-circle-'+iteration_num).after($('<div>', {class : 'data-box-content', id : 'cpi-text-'+iteration_num}));
            $('#cpi-text-'+iteration_num).append($('<span>', {text : 'CPI Anual'}));
            // CPI TOTAL
            $('#data-cpi-'+iteration_num).after($('<div>', {class : 'data-box', id : 'data-cpi-total-'+iteration_num}));
            $('#data-cpi-total-'+iteration_num).append($('<div>', {class : 'data-box-circle tooltipped', id : 'cpi-circle-total-'+iteration_num}).attr({'data-position': 'bottom', 'data-tooltip' : 'División entre AC y el PPTO (AC/PPTO)'}));
            $('#cpi-circle-total-'+iteration_num).append($('<h5>', {class : 'cpi-total-data', id : 'cpi-id-total-'+iteration_num})); //CPI TOTAL DATA
            $('#cpi-circle-total-'+iteration_num).after($('<div>', {class : 'data-box-content', id : 'cpi-text-total-'+iteration_num}));
            $('#cpi-text-total-'+iteration_num).append($('<span>', {text : 'CPI Total'}));
            // IGR
            $('#data-cpi-total-'+iteration_num).after($('<div>', {class : 'data-box', id : 'data-igr-'+iteration_num}));
            $('#data-igr-'+iteration_num).append($('<div>', {class : 'data-box-circle', id : 'igr-circle-'+iteration_num}));
            $('#igr-circle-'+iteration_num).append($('<h5>', {class : 'igr_data', id : 'igr-value-'+iteration_num})); //IGR DATA
            $('#igr-circle-'+iteration_num).after($('<div>', {class : 'data-box-content', id : 'igr-text-'+iteration_num}));
            $('#igr-text-'+iteration_num).append($('<span>', {text : 'IGR'}));
            // Divider Circle - Presupuesto
            $('#data-igr-'+iteration_num).after($('<div>', {class : 'divider transparent', id : 'divider-div-'+iteration_num}));
            // Presupuesto Planeado
            $('#divider-div-'+iteration_num).after($('<div>', {class : 'data-chip accent tooltipped', id : 'data-planeado-'+iteration_num}).attr({'data-position': 'bottom', 'data-tooltip' : 'Presupuesto planeado individual'}));
            <?php if ($array_projects['child_eps_id'] == 34012): ?>
              $('#data-planeado-'+iteration_num).append($('<h3>', {text : 'Presupuesto Planeado (COP)'})); // Presupuesto Title value
            <?php else:?>
              $('#data-planeado-'+iteration_num).append($('<h3>', {text : 'Presupuesto Planeado (USD)'})); // Presupuesto Title value
            <?php endif;?>
            $('#data-planeado-'+iteration_num).append($('<h4>', {class : 'presupuesto-plan', id : 'plan-id-'+iteration_num})); // Presupuesto Planeado value
            // Presupuesto Ejecutado
            $('#data-planeado-'+iteration_num).after($('<div>', {class : 'data-chip secondary mb-0 tooltipped', id : 'data-ejecutado-'+iteration_num}).attr({'data-position': 'bottom', 'data-tooltip' : 'Presupuesto ejecutado individual'}));
            <?php if ($array_projects['child_eps_id'] == 34012): ?>
              $('#data-ejecutado-'+iteration_num).append($('<h3>', {text : 'Presupuesto Ejecutado (COP)'})); // Presupuesto Title value
            <?php else:?>
              $('#data-ejecutado-'+iteration_num).append($('<h3>', {text : 'Presupuesto Ejecutado (USD)'})); // Presupuesto Title value
            <?php endif;?>
            $('#data-ejecutado-'+iteration_num).append($('<h4>', {class : 'presupuesto-ejec', id : 'pres-id-'+iteration_num})); // Presupuesto Planeado value
            // Function que se encarga de llamar los proyectos de la bd local correspondientes a cada proyecto del ws
            <?php else:?>
                $('#main-div').append($('<div>', {class : 'Search list d-flex col s12 m6 l4 xl3', id : this.project_id_p6}));
                var project_div = $('#'+this.project_id_p6);
                project_div.attr({'data-fase' : this.code_fase, 'data-category' : this.code_category, 'data-mec' : this.code_pec, 'data-area' : this.code_area});
                project_div.append($('<div>', {class : 'sheet pointer', id: 'sheet-pointer-'+iteration_num}));
                $('#sheet-pointer-'+iteration_num).append($('<div>', {class : 'sheet-options', id: 'sheet-options-'+iteration_num}));
                $('#sheet-options-'+iteration_num).append($('<a>', {class : 'dropdown-trigger btn-floating btn-flat', id: 'a-icon-'+iteration_num}));
                $('#a-icon-'+iteration_num).attr('data-target','dropdown'+iteration_num);
                $('#a-icon-'+iteration_num).append($('<i>', {class : 'material-icons', id : 'i-icon'+iteration_num, text : 'more_vert'}));
                // $('#a-icon-'+iteration_num).after($('<ul>', {id : 'dropdown'+iteration_num, class : 'dropdown-content', style : 'display: block; width: 200px; left: 0px; top: 0px; height: 55px; transform-origin: 100% 0px; opacity: 1; transform: scaleX(1) scaleY(1);'}));
                $('#a-icon-'+iteration_num).after($('<ul>', {id : 'dropdown'+iteration_num, class : 'dropdown-content'}));
                $('#dropdown'+iteration_num).append($('<li>', {id : 'li-compare-'+iteration_num, class : 'compare-opt'}));
                $('#li-compare-'+iteration_num).append($('<a>', {class : 'modal-trigger', href : '#compareProjectVersion', id : 'a-compare-'+iteration_num}));
                $('#a-compare-'+iteration_num).append($('<i>', {class : 'mdi mdi-select-compare', id: 'compare-icon-'+iteration_num}));
                $('#compare-icon-'+iteration_num).after('COMPARAR');
                // Div siguiente a sheet-option
                $('#sheet-options-'+iteration_num).after($('<div>', {class : 'sheet-line regional-text', id : 'regional-div-'+iteration_num}));
                $('#regional-div-'+iteration_num).append($('<div>', {class : 'sheet-line-item'}));
                $('#regional-div-'+iteration_num).append($('<div>', {class : 'sheet-line-item'}));
                $('#regional-div-'+iteration_num).append($('<div>', {class : 'sheet-line-item'}));
                // DIV DATA
                var url_project = '/Portal-Web/projects/project/'+btoa(unescape(encodeURIComponent(JSON.stringify(this.project_id_p6))))+'/'+btoa(unescape(encodeURIComponent(JSON.stringify(<?=$json_projects?>))))+'/'+btoa(unescape(encodeURIComponent(JSON.stringify(this.id_p_project))));
                $('#regional-div-'+iteration_num).after($('<div>', {class : 'sheet-content pl-5', onclick : 'location.href="'+url_project+'"' ,id : 'div-data'+iteration_num})); //onclick
                $('#div-data'+iteration_num).append($('<h2>', {text : this.name, id : 'h2-name-'+iteration_num}));
                // FASE
                $('#h2-name-'+iteration_num).after($('<div>', {class : 'data-box mt-auto', id : 'data-box-'+iteration_num}));
                // SPI
                $('#data-box-'+iteration_num).after($('<div>', {class : 'data-box', id : 'data-spi-'+iteration_num}));
                $('#data-spi-'+iteration_num).append($('<div>', {class : 'data-box-circle tooltipped', id : 'spi-circle-'+iteration_num}).attr({'data-position': 'bottom', 'data-tooltip' : '% Avance ejecutado / % Avance planeado'}));
                var project_spi = null;
                if (this.spi_labor_units != null) {
                    project_spi = parseFloat(this.spi_labor_units).toFixed(2)
                }
                $('#spi-circle-'+iteration_num).append($('<h4>', {text : project_spi, id : 'spi-id-'+iteration_num, class : 'spi-value'})); //SPI DATA
                $('#spi-circle-'+iteration_num).after($('<div>', {class : 'data-box-content', id : 'spi-text-'+iteration_num}));
                $('#spi-text-'+iteration_num).append($('<span>', {text : 'SPI'}));
            <?php endif;?>
              Unifier_information(this.project_id_p6, this.id_p_project, iteration_num, this.spi_labor_units);
              $('.tooltipped').tooltip({delay: 50});
          // }
=======
              $('#main-div').append($('<div>', {class : 'Search list d-flex col s12 m6 l4 xl3', id : this.project_id_p6}));
              var project_div = $('#'+this.project_id_p6);
              project_div.attr({'data-fase' : this.code_fase, 'data-category' : this.code_category, 'data-mec' : this.code_pec, 'data-area' : this.code_area});
              project_div.append($('<div>', {class : 'sheet pointer', id: 'sheet-pointer-'+iteration_num}));
              $('#sheet-pointer-'+iteration_num).append($('<div>', {class : 'sheet-options', id: 'sheet-options-'+iteration_num}));
              $('#sheet-options-'+iteration_num).append($('<a>', {class : 'dropdown-trigger btn-floating btn-flat', id: 'a-icon-'+iteration_num}));
              $('#a-icon-'+iteration_num).attr('data-target','dropdown'+iteration_num);
              $('#a-icon-'+iteration_num).append($('<i>', {class : 'material-icons', id : 'i-icon'+iteration_num, text : 'more_vert'}));
              // $('#a-icon-'+iteration_num).after($('<ul>', {id : 'dropdown'+iteration_num, class : 'dropdown-content', style : 'display: block; width: 200px; left: 0px; top: 0px; height: 55px; transform-origin: 100% 0px; opacity: 1; transform: scaleX(1) scaleY(1);'}));
              $('#a-icon-'+iteration_num).after($('<ul>', {id : 'dropdown'+iteration_num, class : 'dropdown-content'}));
              $('#dropdown'+iteration_num).append($('<li>', {id : 'li-compare-'+iteration_num, class : 'compare-opt'}));
              $('#li-compare-'+iteration_num).append($('<a>', {class : 'modal-trigger', href : '#compareProjectVersion', id : 'a-compare-'+iteration_num}));
              $('#a-compare-'+iteration_num).append($('<i>', {class : 'mdi mdi-select-compare', id: 'compare-icon-'+iteration_num}));
              $('#compare-icon-'+iteration_num).after('COMPARAR');
              // Div siguiente a sheet-option
              $('#sheet-options-'+iteration_num).after($('<div>', {class : 'sheet-line regional-text', id : 'regional-div-'+iteration_num}));
              $('#regional-div-'+iteration_num).append($('<div>', {class : 'sheet-line-item'}));
              $('#regional-div-'+iteration_num).append($('<div>', {class : 'sheet-line-item'}));
              $('#regional-div-'+iteration_num).append($('<div>', {class : 'sheet-line-item'}));
              // DIV DATA
              var url_project = '/Portal-Web/projects/project/'+btoa(unescape(encodeURIComponent(JSON.stringify(this.project_id_p6))))+'/'+btoa(unescape(encodeURIComponent(JSON.stringify(<?=$json_projects?>))))+'/'+btoa(unescape(encodeURIComponent(JSON.stringify(this.id_p_project))));
              $('#regional-div-'+iteration_num).after($('<div>', {class : 'sheet-content pl-5', onclick : 'location.href="'+url_project+'"' ,id : 'div-data'+iteration_num})); //onclick
              $('#div-data'+iteration_num).append($('<h2>', {text : this.name, id : 'h2-name-'+iteration_num}));
              // FASE
              $('#h2-name-'+iteration_num).after($('<div>', {class : 'data-box mt-auto', id : 'data-box-'+iteration_num}));
              $('#data-box-'+iteration_num).append($('<div>', {class : 'data-box-circle', id : 'data-box-circle-'+iteration_num})); //FASE CIRCLE
              if (this.code_fase == '209') {
                $('#data-box-circle-'+iteration_num).append($('<h3>', {text : 'I', class : 'phase-text'})); //FASE DATA
                $('#data-box-circle-'+iteration_num).after($('<div>', {class : 'data-box-content', id : 'phase-text-'+iteration_num}));
                $('#phase-text-'+iteration_num).append($('<span>', {text : 'Estructuración', class : 'span-text'})); //FASE NAME
              } else if (this.code_fase == '210') {
                $('#data-box-circle-'+iteration_num).append($('<h3>', {text : 'II', class : 'phase-text'})); //FASE DATA
                $('#data-box-circle-'+iteration_num).after($('<div>', {class : 'data-box-content', id : 'phase-text-'+iteration_num}));
                $('#phase-text-'+iteration_num).append($('<span>', {text : 'Selección', class : 'span-text'})); //FASE NAME
              }else if (this.code_fase == '211') {
                $('#data-box-circle-'+iteration_num).append($('<h3>', {text : 'III', class : 'phase-text'})); //FASE DATA
                $('#data-box-circle-'+iteration_num).after($('<div>', {class : 'data-box-content', id : 'phase-text-'+iteration_num}));
                $('#phase-text-'+iteration_num).append($('<span>', {text : 'Planeación', class : 'span-text'})); //FASE NAME
              }else if (this.code_fase == '212') {
                $('#data-box-circle-'+iteration_num).append($('<h3>', {text : 'IV', class : 'phase-text'})); //FASE DATA
                $('#data-box-circle-'+iteration_num).after($('<div>', {class : 'data-box-content', id : 'phase-text-'+iteration_num}));
                $('#phase-text-'+iteration_num).append($('<span>', {text : 'Ejecución', class : 'span-text'})); //FASE NAME
              }else if (this.code_fase == '420') {
                $('#data-box-circle-'+iteration_num).append($('<h3>', {text : 'V', class : 'phase-text'})); //FASE DATA
                $('#data-box-circle-'+iteration_num).after($('<div>', {class : 'data-box-content', id : 'phase-text-'+iteration_num}));
                $('#phase-text-'+iteration_num).append($('<span>', {text : 'Cierre y transferencia', class : 'span-text'})); //FASE NAME
              }else if (this.code_fase == '1910') {
                $('#data-box-circle-'+iteration_num).append($('<h3>', {text : 'C', class : 'phase-text'})); //FASE DATA
                $('#data-box-circle-'+iteration_num).after($('<div>', {class : 'data-box-content', id : 'phase-text-'+iteration_num}));
                $('#phase-text-'+iteration_num).append($('<span>', {text : 'Cerrado', class : 'span-text'})); //FASE NAME
              }
              // SPI
              $('#data-box-'+iteration_num).after($('<div>', {class : 'data-box', id : 'data-spi-'+iteration_num}));
              $('#data-spi-'+iteration_num).append($('<div>', {class : 'data-box-circle tooltipped', id : 'spi-circle-'+iteration_num}).attr({'data-position': 'bottom', 'data-tooltip' : '% Avance ejecutado / % Avance planeado'}));

              var project_spi = null;
              if (this.spi_labor_units != null) {
                  project_spi = parseFloat(this.spi_labor_units).toFixed(2)
              }
              $('#spi-circle-'+iteration_num).append($('<h4>', {text : project_spi, id : 'spi-id-'+iteration_num, class : 'spi-value'})); //SPI DATA
              $('#spi-circle-'+iteration_num).after($('<div>', {class : 'data-box-content', id : 'spi-text-'+iteration_num}));
              $('#spi-text-'+iteration_num).append($('<span>', {text : 'SPI'}));
              // CPI Anual
              $('#data-spi-'+iteration_num).after($('<div>', {class : 'data-box', id : 'data-cpi-'+iteration_num}));
              $('#data-cpi-'+iteration_num).append($('<div>', {class : 'data-box-circle tooltipped', id : 'cpi-circle-'+iteration_num}).attr({'data-position': 'bottom', 'data-tooltip' : 'AC anual  / Presupuesto anual'}));
              $('#cpi-circle-'+iteration_num).append($('<h5>', {class : 'cpi-anual-data', id : 'cpi-id-'+iteration_num})); //CPI DATA
              $('#cpi-circle-'+iteration_num).after($('<div>', {class : 'data-box-content', id : 'cpi-text-'+iteration_num}));
              $('#cpi-text-'+iteration_num).append($('<span>', {text : 'CPI Anual'}));
              // CPI TOTAL
              $('#data-cpi-'+iteration_num).after($('<div>', {class : 'data-box', id : 'data-cpi-total-'+iteration_num}));
              $('#data-cpi-total-'+iteration_num).append($('<div>', {class : 'data-box-circle tooltipped', id : 'cpi-circle-total-'+iteration_num}).attr({'data-position': 'bottom', 'data-tooltip' : 'División entre AC y el PPTO (AC/PPTO)'}));
              $('#cpi-circle-total-'+iteration_num).append($('<h5>', {class : 'cpi-total-data', id : 'cpi-id-total-'+iteration_num})); //CPI TOTAL DATA
              $('#cpi-circle-total-'+iteration_num).after($('<div>', {class : 'data-box-content', id : 'cpi-text-total-'+iteration_num}));
              $('#cpi-text-total-'+iteration_num).append($('<span>', {text : 'CPI Total'}));
              // IGR
              $('#data-cpi-total-'+iteration_num).after($('<div>', {class : 'data-box', id : 'data-igr-'+iteration_num}));
              $('#data-igr-'+iteration_num).append($('<div>', {class : 'data-box-circle', id : 'igr-circle-'+iteration_num}));
              $('#igr-circle-'+iteration_num).append($('<h5>', {class : 'igr_data', id : 'igr-value-'+iteration_num})); //IGR DATA
              $('#igr-circle-'+iteration_num).after($('<div>', {class : 'data-box-content', id : 'igr-text-'+iteration_num}));
              $('#igr-text-'+iteration_num).append($('<span>', {text : 'IGR'}));
              // Divider Circle - Presupuesto
              $('#data-igr-'+iteration_num).after($('<div>', {class : 'divider transparent', id : 'divider-div-'+iteration_num}));
              // Presupuesto Planeado
              $('#divider-div-'+iteration_num).after($('<div>', {class : 'data-chip accent tooltipped', id : 'data-planeado-'+iteration_num}).attr({'data-position': 'bottom', 'data-tooltip' : 'Presupuesto planeado individual'}));
              <?php if ($array_projects['child_eps_id'] == 34012): ?>
                $('#data-planeado-'+iteration_num).append($('<h3>', {text : 'Presupuesto Planeado (COP)'})); // Presupuesto Title value
              <?php else:?>
                $('#data-planeado-'+iteration_num).append($('<h3>', {text : 'Presupuesto Planeado (USD)'})); // Presupuesto Title value
              <?php endif;?>
              $('#data-planeado-'+iteration_num).append($('<h4>', {class : 'presupuesto-plan', id : 'plan-id-'+iteration_num})); // Presupuesto Planeado value
              // Presupuesto Ejecutado
              $('#data-planeado-'+iteration_num).after($('<div>', {class : 'data-chip secondary mb-0 tooltipped', id : 'data-ejecutado-'+iteration_num}).attr({'data-position': 'bottom', 'data-tooltip' : 'Presupuesto ejecutado individual'}));
              <?php if ($array_projects['child_eps_id'] == 34012): ?>
                $('#data-ejecutado-'+iteration_num).append($('<h3>', {text : 'Presupuesto Ejecutado (COP)'})); // Presupuesto Title value
              <?php else:?>
                $('#data-ejecutado-'+iteration_num).append($('<h3>', {text : 'Presupuesto Ejecutado (USD)'})); // Presupuesto Title value
              <?php endif;?>
              $('#data-ejecutado-'+iteration_num).append($('<h4>', {class : 'presupuesto-ejec', id : 'pres-id-'+iteration_num})); // Presupuesto Planeado value
          <?php else:?>
              $('#main-div').append($('<div>', {class : 'Search list d-flex col s12 m6 l4 xl3', id : this.project_id_p6}));
              var project_div = $('#'+this.project_id_p6);
              project_div.attr({'data-fase' : this.code_fase, 'data-category' : this.code_category, 'data-mec' : this.code_pec, 'data-area' : this.code_area});
              project_div.append($('<div>', {class : 'sheet pointer', id: 'sheet-pointer-'+iteration_num}));
              $('#sheet-pointer-'+iteration_num).append($('<div>', {class : 'sheet-options', id: 'sheet-options-'+iteration_num}));
              $('#sheet-options-'+iteration_num).append($('<a>', {class : 'dropdown-trigger btn-floating btn-flat', id: 'a-icon-'+iteration_num}));
              $('#a-icon-'+iteration_num).attr('data-target','dropdown'+iteration_num);
              $('#a-icon-'+iteration_num).append($('<i>', {class : 'material-icons', id : 'i-icon'+iteration_num, text : 'more_vert'}));
              // $('#a-icon-'+iteration_num).after($('<ul>', {id : 'dropdown'+iteration_num, class : 'dropdown-content', style : 'display: block; width: 200px; left: 0px; top: 0px; height: 55px; transform-origin: 100% 0px; opacity: 1; transform: scaleX(1) scaleY(1);'}));
              $('#a-icon-'+iteration_num).after($('<ul>', {id : 'dropdown'+iteration_num, class : 'dropdown-content'}));
              $('#dropdown'+iteration_num).append($('<li>', {id : 'li-compare-'+iteration_num, class : 'compare-opt'}));
              $('#li-compare-'+iteration_num).append($('<a>', {class : 'modal-trigger', href : '#compareProjectVersion', id : 'a-compare-'+iteration_num}));
              $('#a-compare-'+iteration_num).append($('<i>', {class : 'mdi mdi-select-compare', id: 'compare-icon-'+iteration_num}));
              $('#compare-icon-'+iteration_num).after('COMPARAR');
              // Div siguiente a sheet-option
              $('#sheet-options-'+iteration_num).after($('<div>', {class : 'sheet-line regional-text', id : 'regional-div-'+iteration_num}));
              $('#regional-div-'+iteration_num).append($('<div>', {class : 'sheet-line-item'}));
              $('#regional-div-'+iteration_num).append($('<div>', {class : 'sheet-line-item'}));
              $('#regional-div-'+iteration_num).append($('<div>', {class : 'sheet-line-item'}));
              // DIV DATA
              var url_project = '/Portal-Web/projects/project/'+btoa(unescape(encodeURIComponent(JSON.stringify(this.project_id_p6))))+'/'+btoa(unescape(encodeURIComponent(JSON.stringify(<?=$json_projects?>))))+'/'+btoa(unescape(encodeURIComponent(JSON.stringify(this.id_p_project))));
              $('#regional-div-'+iteration_num).after($('<div>', {class : 'sheet-content pl-5', onclick : 'location.href="'+url_project+'"' ,id : 'div-data'+iteration_num})); //onclick
              $('#div-data'+iteration_num).append($('<h2>', {text : this.name, id : 'h2-name-'+iteration_num}));
              // FASE
              $('#h2-name-'+iteration_num).after($('<div>', {class : 'data-box mt-auto', id : 'data-box-'+iteration_num}));
              // SPI
              $('#data-box-'+iteration_num).after($('<div>', {class : 'data-box', id : 'data-spi-'+iteration_num}));
              $('#data-spi-'+iteration_num).append($('<div>', {class : 'data-box-circle tooltipped', id : 'spi-circle-'+iteration_num}).attr({'data-position': 'bottom', 'data-tooltip' : '% Avance ejecutado / % Avance planeado'}));
              var project_spi = null;
              if (this.spi_labor_units != null) {
                  project_spi = parseFloat(this.spi_labor_units).toFixed(2)
              }
              $('#spi-circle-'+iteration_num).append($('<h4>', {text : project_spi, id : 'spi-id-'+iteration_num, class : 'spi-value'})); //SPI DATA
              $('#spi-circle-'+iteration_num).after($('<div>', {class : 'data-box-content', id : 'spi-text-'+iteration_num}));
              $('#spi-text-'+iteration_num).append($('<span>', {text : 'SPI'}));
          <?php endif;?>
            Unifier_information(this.project_id_p6, this.id_p_project, iteration_num, this.spi_labor_units);
            $('.tooltipped').tooltip({delay: 50});
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
        });
          resolve();
        });
      });
      function Unifier_information(id_p_project_p6, project_id, iteration_num, spi_val){
        var settings = {
          "async": true,
          "crossDomain": true,
<<<<<<< HEAD
          "url": "http://192.168.1.153:7001/ords/projects_portal/portal/indicatorscosts/list?p_projet_id="+id_p_project_p6,
=======
          "url": "http://192.168.0.210:8080/ords/portal/indicatorscosts/list?p_projet_id="+id_p_project_p6,
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
          "method": "GET",
          "headers": {
            "Authorization": "Bearer <?=$_SESSION["PortalToken"]?>"
        }
      }

      $.ajax(settings).done(function (response) {
          $.each(response.items, function() {
            var spi = $('#spi-id-'+iteration_num), cpi_anual = $('#cpi-id-'+iteration_num), cpi_total = $('#cpi-id-total-'+iteration_num),
              igr = $('#igr-value-'+iteration_num);
            var cpi_anual_val, cpi_total_val, igr_val;
            if (this.cpiusd_2019 != null) {
              cpi_anual_val = parseFloat(this.cpiusd_2019.toFixed(2));
              cpi_anual.text(cpi_anual_val.toFixed(2));
            }
            else {
              cpi_anual_val = null;
            }
            if (this.cpiusd_total != null) {
              cpi_total_val = parseFloat(this.cpiusd_total);
              cpi_total.text(cpi_total_val.toFixed(2));
            } else {
              cpi_total_val = null;
            }
            if (this.planeadousd_total != null) {
              $('#plan-id-'+iteration_num).text(parseFloat(this.planeadousd_total).toFixed(2)+' MM');
            }
            if (this.presupuestousd_total != null) {
              $('#pres-id-'+iteration_num).text(parseFloat(this.presupuestousd_total).toFixed(2)+' MM');
            }
            global_indicators(iteration_num, this.presupuestousd_2019, this.ejecutadusd_2019, this.ejecutadousd_total, this.presupuestousd_total);
            // global_indicators(iteration_num, this.PRES_PROJ, this.PROJ_AC, this.CAPEX_EXECUTED);
            local_db_info(id_p_project_p6, project_id, iteration_num, spi_val, cpi_anual_val,cpi_total_val);
          });
        });
      }
      function local_db_info(id_p_project_p6, p_project_id,iteration_num, spi, cpi_anual_val,cpi_total_val){
        xhr2 = $.ajax({
          headers:{
            'X-CSRF-Token':csrfToken
          },
          method: "GET",
          dataType: "json",
          url: "<?php echo $this->Url->build(['controller'=>'Navbar','action'=>'local']);?>",
          data: {project_id : p_project_id},
          cache: true,
          beforeSend: function(xhr) {
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          },
          success: function(response){
            var igr_val, igr = $('#igr-value-'+iteration_num);
            $.each(response, function() {
                igr_val = parseFloat(this.IGR).toFixed(1);
                if (this.IGR != null) {
                  igr.text(igr_val+'%');
                } else {
                  igr.text();
                }
                $('#regional-div-'+iteration_num).addClass('text-'+this.REGIONAL);
<<<<<<< HEAD
                ws_colors_new([spi.toFixed(2), cpi_anual_val, cpi_total_val, igr_val, iteration_num]);
=======
                ws_colors_new([spi, cpi_anual_val, cpi_total_val, igr_val, iteration_num]);
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
            });
          }
        });
      }
    var promise1;
    function global_indicators(iteration_num, pres_anual, ejec_anual, total_ejec, total_pres){
    var promise1 = new Promise(function(resolve, reject) {
      total_spi += parseFloat($('#spi-id-'+iteration_num).text() / array_lenght);
      $('#spi-indicator').text(total_spi.toFixed(2));

      total_cpi += parseFloat($('#cpi-id-total-'+iteration_num).text() / array_lenght);
      $('#cpi-indicator').text(total_cpi.toFixed(2));

      // total_pres = $('#plan-id-'+iteration_num).text();
      if (total_pres != null) {
        total_pres_total += parseFloat(total_pres);
        $('#pres-total-indicator').text('$ '+total_pres_total.toFixed(2)+' MM');
      }

      if (total_ejec != null) {
        total_eject_total += parseFloat(total_ejec);
        $('#ejec-total-indicator').text('$ '+(total_eject_total.toFixed(2))+' MM');
      }

      if (pres_anual != null) {
        total_pres_anual += parseFloat(pres_anual);
        $('#pres-anual-indicator').text('$ '+total_pres_anual.toFixed(2)+' MM');
      }

      if (ejec_anual != null) {
        total_ejec_anual += parseFloat(ejec_anual);
        $('#ejec-anual-indicator').text('$ '+total_ejec_anual.toFixed(2)+' MM');
      }
      // resolve();
    });
    }
    var cont = 0, spi_finish_value = 0;
    // Función que envia el valor del spi y cpi global de todos los proyectos (Indicadores).
    var interval_global_indicators = setInterval(function () {
      var spi_compare_value = spi_finish_value;
      spi_finish_value = $('#spi-indicator').text();
      var cpi_finish_value = $('#cpi-indicator').text();
      if (spi_finish_value == spi_compare_value && spi_finish_value != '') {
        var contador = cont++;
        if (contador <= 1) {
          indicators_colors(spi_finish_value, cpi_finish_value);
          clearTimeout(interval_global_indicators);
        } else {
          cont = 0;
        }
      }
    }, 1000);

    var parent_id;
    promise.then(function (result) {
      // CLICK BTN COMPARAR
      $(".sheet-options").click(function() {
        $(this).children('.dropdown-content').attr('style','display: block; width: 200px; left: 160px; top: 0px; height: 55px; transform-origin: 0px 0px; opacity: 1; transform: scaleX(1) scaleY(1);').show();
        parent_id = $(this).parent().parent().attr('id');
      });
    }).
    catch(function () {
        console.log('Un error ha ocurrido.');
    });

    $('body').on('click', '.compare-opt', function () {
      $('.compare-opt').removeClass('active')
      $(this).addClass('active');
      actual_compare();
      old_compare();
    });

    $('body').on('click', '.compare-opt.active', function () {
      actual_compare();
      old_compare();
    });
    function actual_compare(){
      var select = $('#compare-select-new');
      $("#form-select-new input").val("actual");
      select.prop('selectedIndex', 0); //Sets the first option as selected
      select.formSelect();
      $('#compare-title').text($('#'+parent_id+' h2').text());
      $('#fase-new').text($('#'+parent_id+' .phase-text').text());
      $('#fase-title-new').text($('#'+parent_id+' .span-text').text());
      $('#spi-new').text($('#'+parent_id+' .spi-value').text());
      $('#cpi-new').text($('#'+parent_id+' .cpi-anual-data').text());
      $('#cpi-total-new').text($('#'+parent_id+' .cpi-total-data').text());
      $('#igr-new').text($('#'+parent_id+' .igr_data').text());
      $('#pres-plan-new').text($('#'+parent_id+' .presupuesto-plan').text());
      $('#pres-ejec-new').text($('#'+parent_id+' .presupuesto-ejec').text());
      var igr_value = $('#'+parent_id+' .igr_data').text();
      color_indicator_new([$('#'+parent_id+' .spi-value').text(), $('#'+parent_id+' .cpi-anual-data').text(), $('#'+parent_id+' .cpi-total-data').text(), igr_value.slice(0,-1)]);
    }

    function old_compare(){
      var select = $('#compare-select-old');
      $("#form-select-old input").val("actual");
      select.prop('selectedIndex', 0); //Sets the first option as selected
      select.formSelect();
      $('#fase-old').text($('#'+parent_id+' .phase-text').text());
      $('#fase-title-old').text($('#'+parent_id+' .span-text').text());
      $('#spi-old').text($('#'+parent_id+' .spi-value').text());
      $('#cpi-old').text($('#'+parent_id+' .cpi-anual-data').text());
      $('#cpi-total-old').text($('#'+parent_id+' .cpi-total-data').text());
      $('#igr-old').text($('#'+parent_id+' .igr_data').text());
      $('#pres-plan-old').text($('#'+parent_id+' .presupuesto-plan').text());
      $('#pres-ejec-old').text($('#'+parent_id+' .presupuesto-ejec').text());
      var igr_value = $('#'+parent_id+' .igr_data').text();
      color_indicator_old([$('#'+parent_id+' .spi-value').text(), $('#'+parent_id+' .cpi-anual-data').text(), $('#'+parent_id+' .cpi-total-data').text(), igr_value.slice(0,-1)]);
<<<<<<< HEAD
=======
      // ws_colors_new();
      // console.log(parent_id);
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
    }

    function color_indicator_new(indicators_col_val){
      var settings = {
          "async": true,
          "crossDomain": true,
<<<<<<< HEAD
          "url": "http://192.168.1.153:7001/ords/projects_portal/portal/range/list/",
=======
          "url": "http://192.168.0.210:8080/ords/portal/range/list/",
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
          "method": "GET",
          "headers": {
              "Authorization": "Bearer <?=$_SESSION["PortalToken"]?>"
          }
        }
        $.ajax(settings).done(function (response) {
          $.each(response.items, function() {
<<<<<<< HEAD
            if (indicators_col_val[0] != null && indicators_col_val[0] != '' && indicators_col_val[0] >= this.minimun && indicators_col_val[0] <= this.maximo && this.indicator_name == 'SPI') {
=======
            if (indicators_col_val[0] != null && indicators_col_val[0] != '' && indicators_col_val[0] > this.minimun && indicators_col_val[0] <= this.maximo && this.indicator_name == 'SPI') {
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
                $('#div-spi-new').css({'background-color' : this.hexa_color});
            } else if(indicators_col_val[0] == null || indicators_col_val[0] == '') {
                $('#div-spi-new').removeAttr('style');
            }
            if (indicators_col_val[1] != null && indicators_col_val[1] != '' && indicators_col_val[1] > this.minimun && indicators_col_val[1] <= this.maximo && this.indicator_name == 'CPI') {
<<<<<<< HEAD
                $('#div-cpi-new').css({'background-color' : this.hexa_color});
            } else if(indicators_col_val[1] == null || indicators_col_val[1] == '') {
                $('#div-cpi-new').removeAttr('style');
=======
                // console.log('true '+indicators_col_val[0]);
                $('#div-cpi-new').css({'background-color' : this.hexa_color});
            } else if(indicators_col_val[1] == null || indicators_col_val[1] == '') {
                $('#div-cpi-new').removeAttr('style');
                // console.log('false '+indicators_col_val[0]);
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
            }
            if (indicators_col_val[2] != null && indicators_col_val[2] != '' && indicators_col_val[2] != null && indicators_col_val[2] > this.minimun && indicators_col_val[2] <= this.maximo && this.indicator_name == 'CPI') {
                $('#div-cpi-total-new').css({'background-color' : this.hexa_color});
            } else if(indicators_col_val[2] == null || indicators_col_val[2] == '') {
                $('#div-cpi-total-new').removeAttr('style');
            }
            // IGR
            if (indicators_col_val[3] != null && indicators_col_val[3] != '' && indicators_col_val[3] != null && indicators_col_val[3] != 'undefined' && (indicators_col_val[3]/100) > this.minimun && (indicators_col_val[3] / 100) <= this.maximo && this.indicator_name == 'IGR') {
              $('#div-igr-new').css({'background-color' : this.hexa_color});
            }
          });
        });
      }
      function ws_colors_new(indicators_col_val){
        var settings = {
            "async": true,
            "crossDomain": true,
<<<<<<< HEAD
            "url": "http://192.168.1.153:7001/ords/projects_portal/portal/range/list/",
=======
            "url": "http://192.168.0.210:8080/ords/portal/range/list/",
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
            "method": "GET",
            "headers": {
                "Authorization": "Bearer <?=$_SESSION["PortalToken"]?>"
            }
          }
          $.ajax(settings).done(function (response) {
            $.each(response.items, function() {
<<<<<<< HEAD
              if (indicators_col_val[0] != null && indicators_col_val[0] >= this.minimun && indicators_col_val[0] <= this.maximo && this.indicator_name == 'SPI') {
=======
              if (indicators_col_val[0] != null && indicators_col_val[0] > this.minimun && indicators_col_val[0] <= this.maximo && this.indicator_name == 'SPI') {
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
                  $('#spi-circle-'+indicators_col_val[4]).css({'background-color' : this.hexa_color});
              }
              // CPI TOTAL & ANUAL
              if (indicators_col_val[1] != null && indicators_col_val[1] > this.minimun && indicators_col_val[1] <= this.maximo && this.indicator_name == 'CPI') {
                  $('#cpi-circle-'+indicators_col_val[4]).css({'background-color' : this.hexa_color});
              }
              if (indicators_col_val[2] != null && indicators_col_val[2] > this.minimun && indicators_col_val[2] <= this.maximo && this.indicator_name == 'CPI') {
                  $('#cpi-circle-total-'+indicators_col_val[4]).css({'background-color' : this.hexa_color});
              }
              // IGR
              if (indicators_col_val[3] != null && indicators_col_val[3] != 'undefined' && (indicators_col_val[3]/100) > this.minimun && (indicators_col_val[3] / 100) <= this.maximo && this.indicator_name == 'IGR') {
                $('#igr-circle-'+indicators_col_val[4]).css({'background-color' : this.hexa_color});
              }
            });
          });
      }
      function color_indicator_old(indicators_col_val){
        var settings = {
            "async": true,
            "crossDomain": true,
<<<<<<< HEAD
            "url": "http://192.168.1.153:7001/ords/projects_portal/portal/range/list/",
=======
            "url": "http://192.168.0.210:8080/ords/portal/range/list/",
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
            "method": "GET",
            "headers": {
                "Authorization": "Bearer <?=$_SESSION["PortalToken"]?>"
            }
          }
          $.ajax(settings).done(function (response) {
            $.each(response.items, function() {
<<<<<<< HEAD
              if (indicators_col_val[0] != null && indicators_col_val[0] != '' && indicators_col_val[0] >= this.minimun && indicators_col_val[0] <= this.maximo && this.indicator_name == 'SPI') {
=======
              if (indicators_col_val[0] != null && indicators_col_val[0] != '' && indicators_col_val[0] > this.minimun && indicators_col_val[0] <= this.maximo && this.indicator_name == 'SPI') {
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
                  $('#div-spi-old').css({'background-color' : this.hexa_color});
              } else if(indicators_col_val[0] == null || indicators_col_val[0] == ''){
                  $('#div-spi-old').removeAttr('style');
              }
              if (indicators_col_val[1] != '' && indicators_col_val[1] > this.minimun && indicators_col_val[1] <= this.maximo && this.indicator_name == 'CPI') {
                  $('#div-cpi-annual-old').css({'background-color' : this.hexa_color});
              } else if(indicators_col_val[1] == null || indicators_col_val[1] == '') {
                  $('#div-cpi-annual-old').removeAttr('style');
              }
              if (indicators_col_val[2] != '' && indicators_col_val[2] != null && indicators_col_val[2] > this.minimun && indicators_col_val[2] <= this.maximo && this.indicator_name == 'CPI') {
                  $('#div-cpi-total-old').css({'background-color' : this.hexa_color});
              } else if(indicators_col_val[2] == null || indicators_col_val[2] == '') {
                  $('#div-cpi-total-old').removeAttr('style');
              }
              // IGR
              if (indicators_col_val[3] != '' && indicators_col_val[3] != null && indicators_col_val[3] != 'undefined' && (indicators_col_val[3]/100) > this.minimun && (indicators_col_val[3] / 100) <= this.maximo && this.indicator_name == 'IGR') {
                $('#div-igr-old').css({'background-color' : this.hexa_color});
              }
            });
          });
        }
    // Petición ajax para llenar los dropdown select
    xhr3 = $.ajax({
      headers:{
        'X-CSRF-Token':csrfToken
      },
      method: "GET",
      dataType: "json",
      url: "<?php echo $this->Url->build(['controller'=>'Navbar','action'=>'compare_dates']);?>",
      cache: true,
      beforeSend: function(xhr) {
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      },
      success: function(response){
        $.each(response, function(index, item) {
          $('#compare-select-new').append(new Option(this.name+" - "+this.date_h, this.p_historyc_id));
          $('#compare-select-new').formSelect();
          $('#compare-select-old').append(new Option(this.name+" - "+this.date_h, this.p_historyc_id));
          $('#compare-select-old').formSelect();
      });
      }
    });
    // Select left compare change
    $('#compare-select-new').change(function() {
      var selected_date_new = $(this).children(":selected").attr("value");
      var id_project = $(".compare-opt.active").parent().parent().parent().parent().attr('id');
      if (selected_date_new == "actual") {
<<<<<<< HEAD
=======
        // $('.compare-opt.active').click();
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
        actual_compare();
      }else {
        option_compare_new_dates(selected_date_new, id_project);
      }
    });

    // new
    function option_compare_new_dates(selected_date_new, id_project){
      var code_unifier = null, spi = null, cpi_anual = null, cpi_total = null;
      var settings = {
        "async": true,
        "crossDomain": true,
<<<<<<< HEAD
        "url": "http://192.168.1.153:7001/ords/projects_portal/portal/captures/projects/?project_id="+id_project+"&capture_id="+selected_date_new,
=======
        "url": "http://192.168.0.210:8080/ords/portal/captures/projects/?project_id="+id_project+"&capture_id="+selected_date_new,
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
        "method": "GET",
        "headers": {
          "Authorization": "Bearer <?=$_SESSION["PortalToken"]?>"
        }
      }
      $.ajax(settings).done(function (response) {
        if (response.items.length > 0) {
          $.each(response.items, function() {
            if (this.code_fase == '209') {
                $('#fase-title-new').text('Estructuración');
                $('#fase-new').text('I');
            } else if (this.code_fase == '210') {
                $('#fase-title-new').text('Selección');
                $('#fase-new').text('II');
<<<<<<< HEAD
            } else if (this.code_fase == '211') {
                $('#fase-title-new').text('Planeación');
                $('#fase-new').text('III');
            } else if (this.code_fase == '212') {
                $('#fase-title-new').text('Ejecución');
                $('#fase-new').text('IV');
            } else if (this.code_fase == '420') {
                $('#fase-title-new').text('Cierre y transferencia');
                $('#fase-new').text('V');
            } else if (this.code_fase == '1910') {
=======
            }else if (this.code_fase == '211') {
                $('#fase-title-new').text('Planeación');
                $('#fase-new').text('III');
            }else if (this.code_fase == '212') {
                $('#fase-title-new').text('Ejecución');
                $('#fase-new').text('IV');
            }else if (this.code_fase == '420') {
                $('#fase-title-new').text('Cierre y transferencia');
                $('#fase-new').text('V');
            }else if (this.code_fase == '1910') {
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
                $('#fase-title-new').text('Cerrado');
                $('#fase-new').text('C');
            } else {
                $('#fase-title-new').text('');
                $('#fase-new').text('');
            }
            // SPI COMPARE LEFT SIDE - NEW
            if (this.spi_labor_units != null) {
                spi = this.spi_labor_units;
                $('#spi-new').text(parseFloat(spi).toFixed(2));
            } else {
                $('#spi-new').text('');
                $('#div-spi-new').removeAttr('style');
            }
            code_unifier = this.code_unifier;
<<<<<<< HEAD
          }
        );
      } else {
=======
          });
        } else {
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
          $('#fase-title-new').text('');
          $('#fase-new').text('');
          $('#spi-new').text('');
        }
<<<<<<< HEAD
          if (code_unifier != null) {
            var unifier_capture = {
              "async": true,
              "crossDomain": true,
              "url": "http://192.168.1.153:7001/ords/projects_portal/portal/captures/costindicators/?p_project_id="+id_project+"&p_id_capture="+selected_date_new,
              "method": "GET",
              "headers": {
                "Authorization": "Bearer <?=$_SESSION["PortalToken"]?>"
              }
            }
=======
        if (code_unifier != null) {
          var unifier_capture = {
            "async": true,
            "crossDomain": true,
            "url": "http://192.168.0.210:8080/ords/portal/captures/costindicators/?p_project_id="+id_project+"&p_id_capture="+selected_date_new,
            "method": "GET",
            "headers": {
              "Authorization": "Bearer <?=$_SESSION["PortalToken"]?>"
            }
          }
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
          $.ajax(unifier_capture).done(function (response) {
            $.each(response.items, function() {
              // CPI Anual
              if (this.cpiusd_2019 != null) {
                cpi_anual = this.cpiusd_2019;
                $('#cpi-new').text(parseFloat(cpi_anual).toFixed(2));
              } else {
                $('#cpi-new').text('');
                $('#div-cpi-new').removeAttr('style');
              }
              // CPI Total
              if (this.cpiusd_total != null) {
                cpi_total = this.cpiusd_total;
                $('#cpi-total-new').text(parseFloat(cpi_total).toFixed(2));
              }else {
                $('#cpi-total-new').text('');
                $('#div-cpi-total-new').removeAttr('style');
              }
              // PRESUPUESTO PLANEADO
              if (this.planeadousd_total != null) {
                $('#pres-plan-new').text(parseFloat(this.planeadousd_total).toFixed(2)+' MM');
              } else {
                $('#pres-plan-new').text('');
              }
              // PRESUPUESTO EJECUTADO
              if (this.presupuestousd_total != null) {
                $('#pres-ejec-new').text(parseFloat(this.presupuestousd_total.toFixed(2))+' MM');
              } else {
                $('#pres-ejec-new').text('');
              }
              color_indicator_new([spi, cpi_anual, cpi_total]);
            });
          });
        } else {
          color_indicator_new([spi, cpi_anual, cpi_total]);
          $('#cpi-new').text('');
          $('#div-cpi-new').removeAttr('style');
          $('#cpi-total-new').text('');
          $('#div-cpi-total-new').removeAttr('style');
          $('#pres-plan-new').text('');
          $('#pres-ejec-new').text('');
        }
      });
    }

    $('#compare-select-old').change(function() {
      var selected_date_old = $(this).children(":selected").attr("value");
      var id_project = $(".compare-opt.active").parent().parent().parent().parent().attr('id');
      if (selected_date_old == "actual") {
        old_compare();
      }else {
        option_compare_old_dates(selected_date_old, id_project);
      }
    });

    // OLD
    function option_compare_old_dates(selected_date_old, id_project){
      var code_inifier = null, spi = null, cpi_anual = null, cpi_total = null;
      var settings = {
        "async": true,
        "crossDomain": true,
<<<<<<< HEAD
        "url": "http://192.168.1.153:7001/ords/projects_portal/portal/captures/projects/?project_id="+id_project+"&capture_id="+selected_date_old,
=======
        "url": "http://192.168.0.210:8080/ords/portal/captures/projects/?project_id="+id_project+"&capture_id="+selected_date_old,
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
        "method": "GET",
        "headers": {
          "Authorization": "Bearer <?=$_SESSION["PortalToken"]?>"
        }
      }
      $.ajax(settings).done(function (response) {
        if (response.items.length > 0) {
<<<<<<< HEAD
        $.each(response.items, function() {
          if (this.code_fase == '209') {
              $('#fase-title-old').text('Estructuración');
              $('#fase-old').text('I');
          } else if (this.code_fase == '210') {
              $('#fase-title-old').text('Selección');
              $('#fase-old').text('II');
          }else if (this.code_fase == '211') {
              $('#fase-title-old').text('Planeación');
              $('#fase-old').text('III');
          }else if (this.code_fase == '212') {
              $('#fase-title-old').text('Ejecución');
              $('#fase-old').text('IV');
          }else if (this.code_fase == '420') {
              $('#fase-title-old').text('Cierre y transferencia');
              $('#fase-old').text('V');
          }else if (this.code_fase == '1910') {
              $('#fase-title-old').text('Cerrado');
              $('#fase-old').text('C');
          } else {
              $('#fase-title-old').text('');
              $('#fase-old').text('');
          }
          // SPI COMPARE RIGHT SIDE - old
          if (this.spi_labor_units != null) {
              spi = this.spi_labor_units;
              $('#spi-old').text(spi.toFixed(2));
          } else {
              $('#spi-old').text('');
              $('#div-spi-old').removeAttr('style');
          }
          code_inifier = this.code_unifier;
        });
      } else {
        $('#fase-title-old').text('');
        $('#fase-old').text('');
        $('#spi-old').text('');
      }
=======
          $.each(response.items, function() {
            if (this.code_fase == '209') {
                $('#fase-title-old').text('Estructuración');
                $('#fase-old').text('I');
            } else if (this.code_fase == '210') {
                $('#fase-title-old').text('Selección');
                $('#fase-old').text('II');
            }else if (this.code_fase == '211') {
                $('#fase-title-old').text('Planeación');
                $('#fase-old').text('III');
            }else if (this.code_fase == '212') {
                $('#fase-title-old').text('Ejecución');
                $('#fase-old').text('IV');
            }else if (this.code_fase == '420') {
                $('#fase-title-old').text('Cierre y transferencia');
                $('#fase-old').text('V');
            }else if (this.code_fase == '1910') {
                $('#fase-title-old').text('Cerrado');
                $('#fase-old').text('C');
            } else {
                $('#fase-title-old').text('');
                $('#fase-old').text('');
            }
            // SPI COMPARE RIGHT SIDE - old
            if (this.spi_labor_units != null) {
                spi = this.spi_labor_units;
                $('#spi-old').text(spi.toFixed(2));
            } else {
                $('#spi-old').text('');
                $('#div-spi-old').removeAttr('style');
            }
            code_inifier = this.code_unifier;
          });
        } else {
          $('#fase-title-old').text('');
          $('#fase-old').text('');
          $('#spi-old').text('');
        }
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
        if (code_inifier != null) {
          var unifier_capture = {
            "async": true,
            "crossDomain": true,
<<<<<<< HEAD
            "url": "http://192.168.1.153:7001/ords/projects_portal/portal/captures/costindicators/?p_project_id="+id_project+"&p_id_capture="+selected_date_old,
=======
            "url": "http://192.168.0.210:8080/ords/portal/captures/costindicators/?p_project_id="+id_project+"&p_id_capture="+selected_date_old,
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
            "method": "GET",
            "headers": {
              "Authorization": "Bearer <?=$_SESSION["PortalToken"]?>"
            }
          }
          $.ajax(unifier_capture).done(function (response) {
            $.each(response.items, function() {
              // CPI Anual
              if (this.cpiusd_2019 != null) {
                cpi_anual = this.cpiusd_2019;
                $('#cpi-old').text(parseFloat(cpi_anual).toFixed(2));
              } else {
                $('#cpi-old').text('');
                $('#div-cpi-old').removeAttr('style');
              }
              // CPI Total
              if (this.cpiusd_total != null) {
                cpi_total = this.cpiusd_total;
                $('#cpi-total-old').text(parseFloat(cpi_total).toFixed(2));
              }else {
                $('#cpi-total-old').text('');
                $('#div-cpi-total-old').removeAttr('style');
              }
              // PRESUPUESTO PLANEADO
              if (this.planeadousd_total != null) {
                $('#pres-plan-old').text(parseFloat(this.planeadousd_total).toFixed(2)+' MM');
              } else {
                $('#pres-plan-old').text('');
              }
              // PRESUPUESTO EJECUTADO
              if (this.presupuestousd_total != null) {
                $('#pres-ejec-old').text(parseFloat(this.presupuestousd_total.toFixed(2))+' MM');
              } else {
                $('#pres-ejec-old').text('');
              }
              color_indicator_old([spi, cpi_anual, cpi_total]);
            });
          });
        } else {
          color_indicator_old([spi, cpi_anual, cpi_total]);
          $('#cpi-old').text('');
          $('#div-cpi-old').removeAttr('style');
          $('#cpi-total-old').text('');
          $('#div-cpi-total-old').removeAttr('style');
          $('#pres-plan-old').text('');
          $('#pres-ejec-old').text('');
        }
      });
    }

    // Función que se encarga de ocultar la etiqueta ul de comparar cada vez que hacen click fuera de este.
    $(document).mouseup(function(e)
    {
      var container = $(".dropdown-content");
      if (!container.is(e.target) && container.has(e.target).length === 0)
      {
          container.hide();
      }
    });

    function indicators_colors(spi_finish_value, cpi_finish_value)
    {
      var settings = {
            "async": true,
            "crossDomain": true,
<<<<<<< HEAD
            "url": "http://192.168.1.153:7001/ords/projects_portal/portal/range/list/",
=======
            "url": "http://192.168.0.210:8080/ords/portal/range/list/",
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
            "method": "GET",
            "headers": {
              "Authorization": "Bearer <?=$_SESSION["PortalToken"]?>"
            }
        }

        $.ajax(settings).done(function (response) {
          $.each(response.items, function() {
            if (spi_finish_value > this.minimun && spi_finish_value <= this.maximo && this.indicator_name == 'SPI') {
                $('#div-spi-indicator').css({'background-color' : this.hexa_color});
            }
            // CPI TOTAL & ANUAL
            if (cpi_finish_value > this.minimun && cpi_finish_value <= this.maximo && this.indicator_name == 'CPI') {
                $('#div-cpi-indicator').css({'background-color' : this.hexa_color});
            }
          });
        });
    }
    xhr_info = $.ajax({
      headers:{
        'X-CSRF-Token':csrfToken
      },
      method: "GET",
      dataType: "json",
      url: "<?php echo $this->Url->build(['controller'=>'Navbar','action'=>'companies']);?>",
      data: {"eps_id" : "<?= $array_projects["eps_id"];?>", "eps_parent_name" : ''},
      cache: true,
      beforeSend: function(xhr) {
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      },
      success: function(response){
        $.each(response, function() {
          if (this.child_eps_id == "<?=$array_projects["child_eps_id"]?>") {
            $('#description-text').text(this.description);
          }
        });
      }
    });
</script>
