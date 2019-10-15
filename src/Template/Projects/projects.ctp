<?= $this->Html->script(['search.min.js']);?>
<?php
    // Breadcrumb
    $breadcrumb = [
        [ 'Inicio', 'home','Pages' ],
        [ 'Portal Proyectos', 'portalProjects','Projects']
    ];

    // Indicadores
    $indicators = [
        [
            'name' => '﻿SPI',
            'id' => 'spi-indicator',
            'icon' => 'show_chart',
            'color' => '',
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
            'color' => '',
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
          <div class="d-flex col s12 m6 l4 xl4">
            <div id="div-<?= $indicator['id']?>" class="indicator <?= $indicator['color'] ?>">
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
              <li><a class="btn-floating warning"><i id="cancel_mec" class="large material-icons" id="btn_main_filter">cancel</i></a></li>
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
                        <div class="data-box mt-auto mx-0">
                            <div class="data-box-circle phase">
                                <h3 id="fase-new"></h3>
                            </div>
                            <div class="data-box-content">
                                <span id="fase-title-new"></span>
                            </div>
                        </div>
                        <div class="data-box mx-0">
                            <div class="data-box-circle">
                                <h4 id="spi-new"></h4>
                            </div>
                            <div class="data-box-content">
                                <span>SPI</span>
                            </div>
                        </div>
                        <div class="data-box mx-0">
                            <div class="data-box-circle error">
                                <h5 id="cpi-new"></h5>
                            </div>
                            <div class="data-box-content">
                                <span>CPI Anual</span>
                            </div>
                        </div>
                        <div class="data-box mx-0">
                            <div class="data-box-circle tertiary">
                                <h5 id="cpi-total-new"></h5>
                            </div>
                            <div class="data-box-content">
                                <span>CPI Total</span>
                            </div>
                        </div>
                        <div class="data-box mx-0">
                            <div class="data-box-circle tertiary">
                                <h5 id="igr-new"></h5>
                            </div>
                            <div class="data-box-content">
                                <span>IGR</span>
                            </div>
                        </div>
                        <div class="divider transparent"></div>
                        <div class="data-chip accent mx-0">
                            <h3>Presupuesto Planeado (USD)</h3>
                            <h4 id="pres-plan-new"></h4>
                        </div>
                        <div class="data-chip secondary mb-0 mx-0">
                            <h3>Presupuesto Ejecutado (USD)</h3>
                            <h4 id="pres-ejec-new"></h4>
                        </div>
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
                        <div class="data-box mt-auto mx-0">
                            <div class="data-box-circle phase">
                                <h3 id="fase-old"></h3>
                            </div>
                            <div class="data-box-content">
                                <span id="fase-title-old"></span>
                            </div>
                        </div>
                        <div class="data-box mx-0">
                            <div class="data-box-circle">
                                <h4 id="spi-old"></h4>
                            </div>
                            <div class="data-box-content">
                                <span>SPI</span>
                            </div>
                        </div>
                        <div class="data-box mx-0">
                            <div class="data-box-circle error">
                                <h5 id="cpi-old"></h5>
                            </div>
                            <div class="data-box-content">
                                <span>CPI Anual</span>
                            </div>
                        </div>
                        <div class="data-box mx-0">
                            <div class="data-box-circle tertiary">
                                <h5 id="cpi-total-old"></h5>
                            </div>
                            <div class="data-box-content">
                                <span>CPI Total</span>
                            </div>
                        </div>
                        <div class="data-box mx-0">
                            <div class="data-box-circle tertiary">
                                <h5 id="igr-old"></h5>
                            </div>
                            <div class="data-box-content">
                                <span>IGR</span>
                            </div>
                        </div>
                        <div class="divider transparent"></div>
                        <div class="data-chip accent mx-0">
                            <h3>Presupuesto Planeado (USD)</h3>
                            <h4 id="pres-plan-old"></h4>
                        </div>
                        <div class="data-chip secondary mb-0 mx-0">
                            <h3>Presupuesto Ejecutado (USD)</h3>
                            <h4 id="pres-ejec-old"></h4>
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
<script>
  // $(document).ready(function(){
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
          $('#main-div').append($('<div>', {class : 'Search list d-flex col s12 m6 l4 xl3', id : this.project_id_p6})).hide().fadeIn(200);
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
            $('#phase-text-'+iteration_num).append($('<span>', {text : 'Estructuración'})); //FASE NAME
          } else if (this.code_fase == '210') {
            $('#data-box-circle-'+iteration_num).append($('<h3>', {text : 'II', class : 'phase-text'})); //FASE DATA
            $('#data-box-circle-'+iteration_num).after($('<div>', {class : 'data-box-content', id : 'phase-text-'+iteration_num}));
            $('#phase-text-'+iteration_num).append($('<span>', {text : 'Selección'})); //FASE NAME
          }else if (this.code_fase == '211') {
            $('#data-box-circle-'+iteration_num).append($('<h3>', {text : 'III', class : 'phase-text'})); //FASE DATA
            $('#data-box-circle-'+iteration_num).after($('<div>', {class : 'data-box-content', id : 'phase-text-'+iteration_num}));
            $('#phase-text-'+iteration_num).append($('<span>', {text : 'Planeación'})); //FASE NAME
          }else if (this.code_fase == '212') {
            $('#data-box-circle-'+iteration_num).append($('<h3>', {text : 'IV', class : 'phase-text'})); //FASE DATA
            $('#data-box-circle-'+iteration_num).after($('<div>', {class : 'data-box-content', id : 'phase-text-'+iteration_num}));
            $('#phase-text-'+iteration_num).append($('<span>', {text : 'Ejecución'})); //FASE NAME
          }else if (this.code_fase == '420') {
            $('#data-box-circle-'+iteration_num).append($('<h3>', {text : 'V', class : 'phase-text'})); //FASE DATA
            $('#data-box-circle-'+iteration_num).after($('<div>', {class : 'data-box-content', id : 'phase-text-'+iteration_num}));
            $('#phase-text-'+iteration_num).append($('<span>', {text : 'Cierre y transferencia'})); //FASE NAME
          }else if (this.code_fase == '1910') {
            $('#data-box-circle-'+iteration_num).append($('<h3>', {text : 'C', class : 'phase-text'})); //FASE DATA
            $('#data-box-circle-'+iteration_num).after($('<div>', {class : 'data-box-content', id : 'phase-text-'+iteration_num}));
            $('#phase-text-'+iteration_num).append($('<span>', {text : 'Cerrado'})); //FASE NAME
          }
          // SPI
          $('#data-box-'+iteration_num).after($('<div>', {class : 'data-box', id : 'data-spi-'+iteration_num}));
          $('#data-spi-'+iteration_num).append($('<div>', {class : 'data-box-circle', id : 'spi-circle-'+iteration_num}));
          $('#spi-circle-'+iteration_num).append($('<h4>', {text : parseFloat(this.spi_labor_units).toFixed(2), id : 'spi-id-'+iteration_num, class : 'spi-value'})); //SPI DATA
          $('#spi-circle-'+iteration_num).after($('<div>', {class : 'data-box-content', id : 'spi-text-'+iteration_num}));
          $('#spi-text-'+iteration_num).append($('<span>', {text : 'SPI'}));
          // CPI Anual
          $('#data-spi-'+iteration_num).after($('<div>', {class : 'data-box', id : 'data-cpi-'+iteration_num}));
          $('#data-cpi-'+iteration_num).append($('<div>', {class : 'data-box-circle', id : 'cpi-circle-'+iteration_num}));
          $('#cpi-circle-'+iteration_num).append($('<h5>', {class : 'cpi-anual-data', id : 'cpi-id-'+iteration_num})); //CPI DATA
          $('#cpi-circle-'+iteration_num).after($('<div>', {class : 'data-box-content', id : 'cpi-text-'+iteration_num}));
          $('#cpi-text-'+iteration_num).append($('<span>', {text : 'CPI Anual'}));
          // CPI TOTAL
          $('#data-cpi-'+iteration_num).after($('<div>', {class : 'data-box', id : 'data-cpi-total-'+iteration_num}));
          $('#data-cpi-total-'+iteration_num).append($('<div>', {class : 'data-box-circle', id : 'cpi-circle-total-'+iteration_num}));
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
          $('#divider-div-'+iteration_num).after($('<div>', {class : 'data-chip accent', id : 'data-planeado-'+iteration_num}));
          $('#data-planeado-'+iteration_num).append($('<h3>', {text : 'Presupuesto Planeado (USD)'})); // Presupuesto Title value
          $('#data-planeado-'+iteration_num).append($('<h4>', {class : 'presupuesto-plan', id : 'plan-id-'+iteration_num})); // Presupuesto Planeado value
          // Presupuesto Ejecutado
          $('#data-planeado-'+iteration_num).after($('<div>', {class : 'data-chip secondary mb-0', id : 'data-ejecutado-'+iteration_num}));
          $('#data-ejecutado-'+iteration_num).append($('<h3>', {text : 'Presupuesto Ejecutado (USD)'})); // Presupuesto Title value
          $('#data-ejecutado-'+iteration_num).append($('<h4>', {class : 'presupuesto-ejec', id : 'pres-id-'+iteration_num})); // Presupuesto Planeado value
          // Function que se encarga de llamar los proyectos de la bd local correspondientes a cada proyecto del ws
          if (this.code_unifier != null) {
              console.log(this.name);
          } else {
              local_db_projects(this.id_p_project, iteration_num);
          }
        });
        resolve();
      });
    });
      function local_db_projects(id_p_project, iteration_num){
        xhr2 = $.ajax({
        headers:{
          'X-CSRF-Token':csrfToken
        },
        method: "GET",
        dataType: "json",
        url: "<?php echo $this->Url->build(['controller'=>'Navbar','action'=>'local']);?>",
        data: {project_id : id_p_project},
        cache: true,
        beforeSend: function(xhr) {
          xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        },
        success: function(response){
          var spi = $('#spi-id-'+iteration_num), cpi_anual = $('#cpi-id-'+iteration_num), cpi_total = $('#cpi-id-total-'+iteration_num),
              igr = $('#igr-value-'+iteration_num);
          var cpi_anual_val, cpi_total_val, igr_val;
          $.each(response, function() {
              if (this.CPI_ANUAL != null) {
                cpi_anual_val = parseFloat(this.CPI_ANUAL.toFixed(2));
                cpi_anual.text(cpi_anual_val.toFixed(2));
              } else {
                cpi_anual_val = null;
              }
              if (this.AC_PPTO != null) {
                cpi_total_val = parseFloat(this.AC_PPTO);
                cpi_total.text(cpi_total_val);
              } else {
                cpi_total_val = null;
              }
              if (this.IGR != null) {
                igr_val = parseFloat(this.IGR).toFixed(1);
                igr.text(igr_val+'%');
              } else {
                igr_val = null;
              }
              if (this.CAPEX_PLANNED != null) {
                $('#plan-id-'+iteration_num).text(parseFloat(this.CAPEX_PLANNED).toFixed(2)+' MM');
              }
              if (this.AC != null) {
                $('#pres-id-'+iteration_num).text(parseFloat(this.AC).toFixed(2)+' MM');
              }
              $('#regional-div-'+iteration_num).addClass('text-'+this.REGIONAL);
              global_indicators(iteration_num, this.PRES_PROJ, this.PROJ_AC, this.CAPEX_EXECUTED);
              project_colors(spi, cpi_anual_val, cpi_total_val, igr_val, iteration_num);
          });
        }
      });
    }
    var promise1;
    function global_indicators(iteration_num, pres_anual, ejec_anual, total_ejec){
    var promise1 = new Promise(function(resolve, reject) {
      total_spi += parseFloat($('#spi-id-'+iteration_num).text() / array_lenght);
      $('#spi-indicator').text(total_spi.toFixed(2));

      total_cpi += parseFloat($('#cpi-id-total-'+iteration_num).text() / array_lenght);
      $('#cpi-indicator').text(total_cpi.toFixed(2));

      total_pres = $('#plan-id-'+iteration_num).text();
      if (total_pres != '') {
        total_pres_total += parseFloat($('#plan-id-'+iteration_num).text());
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
      $('#spi-new').text($('#'+parent_id+' .spi-value').text());
      $('#cpi-new').text($('#'+parent_id+' .cpi-anual-data').text());
      $('#cpi-total-new').text($('#'+parent_id+' .cpi-total-data').text());
      $('#igr-new').text($('#'+parent_id+' .igr_data').text());
      $('#pres-plan-new').text($('#'+parent_id+' .presupuesto-plan').text());
      $('#pres-ejec-new').text($('#'+parent_id+' .presupuesto-ejec').text());
    }

    function old_compare(){
      var select = $('#compare-select-old');
      $("#form-select-old input").val("actual");
      select.prop('selectedIndex', 0); //Sets the first option as selected
      select.formSelect();
      $('#fase-old').text($('#'+parent_id+' .phase-text').text());
      $('#spi-old').text($('#'+parent_id+' .spi-value').text());
      $('#cpi-old').text($('#'+parent_id+' .cpi-anual-data').text());
      $('#cpi-total-old').text($('#'+parent_id+' .cpi-total-data').text());
      $('#igr-old').text($('#'+parent_id+' .igr_data').text());
      $('#pres-plan-old').text($('#'+parent_id+' .presupuesto-plan').text());
      $('#pres-ejec-old').text($('#'+parent_id+' .presupuesto-ejec').text());
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
        $('.compare-opt.active').click();
      }else {
        option_compare_new_dates(selected_date_new, id_project);
      }
    });

    // new
    function option_compare_new_dates(selected_date_new, id_project){
      console.log(id_project);
      xhr4 = $.ajax({
      headers:{
        'X-CSRF-Token':csrfToken
      },
      method: "GET",
      dataType: "json",
      url: "<?php echo $this->Url->build(['controller'=>'Navbar','action'=>'compare_projects']);?>",
      data: {project_id : id_project, date : selected_date_new},
      cache: true,
      beforeSend: function(xhr) {
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      },
      success: function(response){
        $.each(response, function() {
          $('#compare-title').text(this.name);
          if (this.code_fase == '209') {
            $('#fase-title-new').text('Estructuración');
            $('#fase-new').text('I');
          } else if (this.code_fase == '210') {
            $('#fase-title-new').text('Selección');
            $('#fase-new').text('II');
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
            $('#fase-title-new').text('Cerrado');
            $('#fase-new').text('C');
          }
          $('#spi-new').text(this.spi_labor_units.toFixed(2));
          // CPI Anual
          $('#cpi-new').text(cpi_anual_comp);
          // CPI TOTAL
          $('#cpi-total-new').text(cpi_total_comp);
          // igr
          $('#igr-new').text(igr_compare+"%");
          // Presupuesto planeado
          $('#pres-plan-new').text(pres_planeado+" MM");
          // Presupuesto ejecutado
          $('#pres-ejec-new').text(pres_ejecutado+" MM");
        });
      }
    });
    }

    $('#compare-select-old').change(function() {
      var selected_date_old = $(this).children(":selected").attr("value");
      var id_project = $(".modal-trigger").parent().parent().parent().parent().parent().attr('id');
      if (selected_date_old == "actual") {
        $('.compare-opt.active').click();
      }else {
        option_compare_old_dates(selected_date_old, id_project);
      }
    });

    // OLD
    function option_compare_old_dates(selected_date, id_project){
    xhr4 = $.ajax({
    headers:{
      'X-CSRF-Token':csrfToken
    },
    method: "GET",
    dataType: "json",
    url: "<?php echo $this->Url->build(['controller'=>'Navbar','action'=>'compare_projects']);?>",
    data: {project_id : id_project, date : selected_date},
    cache: true,
    beforeSend: function(xhr) {
      xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    },
    success: function(response){
      $.each(response, function() {
        $('#compare-title').text(this.name);
        if (this.code_fase == '209') {
          $('#fase-title-old').text('Estructuración');
          $('#fase-old').text('I');
        } else if (this.code_fase == '210') {
          $('#fase-title-old').text('Selección');
          $('#fase-old').text('II');
        }else if (this.code_fase == '211') {
          $('#fase-title-old').text('Planeación');
          $('#fase-old').text('III');;
        }else if (this.code_fase == '212') {
          $('#fase-title-old').text('Ejecución');
          $('#fase-old').text('IV');
        }else if (this.code_fase == '420') {
          $('#fase-title-old').text('Cierre y transferencia');
          $('#fase-old').text('V');
        }else if (this.code_fase == '1910') {
          $('#fase-title-old').text('Cerrado');
          $('#fase-old').text('C');
        }
        $('#spi-old').text(this.spi_labor_units.toFixed(2));
        // CPI Anual
        $('#cpi-old').text(cpi_anual_comp);
        // CPI TOTAL
        $('#cpi-total-old').text(cpi_total_comp);
        // igr
        $('#igr-old').text(igr_compare+"%");
        // Presupuesto planeado
        $('#pres-plan-old').text(pres_planeado+" MM");
        // Presupuesto ejecutado
        $('#pres-ejec-old').text(pres_ejecutado+" MM");
      });
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
      xhr5 = $.ajax({
        headers:{
          'X-CSRF-Token':csrfToken
        },
        method: "GET",
        dataType: "json",
        url: "<?php echo $this->Url->build(['controller'=>'Navbar','action'=>'indicator_color1']);?>",
        data: {'spi_global' : spi_finish_value, 'cpi_global' : cpi_finish_value},
        cache: true,
        beforeSend: function(xhr) {
          xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        },
        success: function(response){
          $.each(response, function() {
            $('#div-spi-indicator').css({'background-color' : this.spi_color_global});
            $('#div-cpi-indicator').css({'background-color' : this.cpi_color_global});
          });
        }
      });
    }
    function project_colors(spi, cpi, cpi_total, igr, iteration_num)
    {
      xhr5 = $.ajax({
        headers:{
          'X-CSRF-Token':csrfToken
        },
        method: "GET",
        dataType: "json",
        url: "<?php echo $this->Url->build(['controller'=>'Navbar','action'=>'indicator_color']);?>",
        data: {'spi' : spi.text(), 'cpi' : cpi, 'cpi_total' : cpi_total, 'igr' : igr},
        cache: true,
        beforeSend: function(xhr) {
          xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        },
        success: function(response){
          $.each(response, function() {
            $('#spi-circle-'+iteration_num).css({'background-color' : this.spi_color});
            $('#cpi-circle-'+iteration_num).css({'background-color' : this.cpi_color});
            $('#cpi-circle-total-'+iteration_num).css({'background-color' : this.cpi_total_color});
            $('#igr-circle-'+iteration_num).css({'background-color' : this.igr_color});
          });
        }
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
