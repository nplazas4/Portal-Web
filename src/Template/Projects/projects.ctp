<?= $this->Html->script(['search.min.js']);?>
<?php
    // Breadcrumb
    $breadcrumb = [
        [ 'Inicio', 'home','Pages' ],
        [ 'Portal Proyectos', 'portalProjects','Projects']
        // [ 'Transmisión y Transporte', '/portal-projects/companies' ],
        // [ 'Unidad de Transmisión Colombia', '/portal-projects/company' ],
        // [ 'Crecimiento', '' ],
    ];

    // Indicadores
    $indicators = [
        [
            'name' => '﻿SPI',
            'id' => 'spi-indicator',
            'icon' => 'show_chart',
            'color' => 'success',
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
            'color' => 'error',
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
    <?php endif;?>
    <?php echo $this->Html->link(
            $array_projects["child_name"],
            ['controller'=>'Projects', 'action'=>'company',urlencode(base64_encode($json_projects))],
            ['escape' => false,'class'=>'breadcrumb']
      );?>
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
            <p><?=$array_projects["description"]?></p>
        </div>
    </sidebar>
  <div class="projects-content">
      <div class="indicators row wrap">
        <?php foreach ($indicators as $indicator): ?>
          <div class="d-flex col s12 m6 l4 xl4">
            <div class="indicator <?= $indicator['color'] ?>">
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
        </form>
      </div>
    </div>
    <div class="projects-content2">
        <div class="divider transparent mb-3"></div>
        <div class="row wrap" id="main-div"></div>
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
                          <select id="compare-select-new">
                          </select>
                          <label>Versión</label>
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
                            <select id="compare-select-old">
                            </select>
                            <label>Versión</label>
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
    var xhr1, xhr2, xhr3, xhr4;
    var total_spi = 0, total_cpi = 0, total_pres_total = 0, total_eject_total = 0, total_pres_anual = 0, total_ejec_anual = 0, array_lenght = 1;
    var pres_ejecutado = 0, pres_planeado = 0, igr_compare = 0, cpi_anual_comp = 0, cpi_total_comp = 0, selected_date = 0, id_project = 0;
    if(xhr1 && xhr1.readyState != 4){
        xhr1.abort();
    }
      xhr1 = $.ajax({
      headers:{
        'X-CSRF-Token':csrfToken
      },
      method: "GET",
      dataType: "json",
      url: "<?php echo $this->Url->build(['controller'=>'Navbar','action'=>'projects']);?>",
      data: {"user_id" : "<?=$current_user["V_ID_P_USER"]?>", "eps_id" : "<?=$array_projects["eps_id"]?>", "code_1" : "<?=$array_projects["code_1"]?>", "code_2" : "<?=$array_projects["code_2"]?>"},
      cache: true,
      beforeSend: function(xhr) {
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      },
      success: function(response){
        array_lenght = response.length;
        $.each(response, function(i) {
          var iteration_num = i + 1;
          $('#main-div').append($('<div>', {class : 'Search d-flex col s12 m6 l4 xl3', id : this.project_id_p6})).hide().fadeIn(400);
          $('#'+this.project_id_p6).append($('<div>', {class : 'sheet pointer', id: 'sheet-pointer-'+iteration_num}));
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
          $('#sheet-options-'+iteration_num).after($('<div>', {class : 'sheet-line regional-text text-sur', id : 'regional-div-'+iteration_num}));
          $('#regional-div-'+iteration_num).append($('<div>', {class : 'sheet-line-item'}));
          $('#regional-div-'+iteration_num).append($('<div>', {class : 'sheet-line-item'}));
          $('#regional-div-'+iteration_num).append($('<div>', {class : 'sheet-line-item'}));
          // DIV DATA
          $('#regional-div-'+iteration_num).after($('<div>', {class : 'sheet-content pl-5', onclick : 'location.href="/Portal-Web/projects/project/'+btoa(unescape(encodeURIComponent(JSON.stringify(this.project_id_p6))))+'/'+btoa(unescape(encodeURIComponent(JSON.stringify(<?=$json_projects?>))))+'"' ,id : 'div-data'+iteration_num})); //onclick
          $('#div-data'+iteration_num).append($('<h2>', {text : this.name, id : 'h2-name-'+iteration_num}));
          // FASE
          $('#h2-name-'+iteration_num).after($('<div>', {class : 'data-box mt-auto', id : 'data-box-'+iteration_num}));
          $('#data-box-'+iteration_num).append($('<div>', {class : 'data-box-circle', id : 'data-box-circle-'+iteration_num})); //FASE CIRCLE
          if (this.code_fase == '209') {
            $('#data-box-circle-'+iteration_num).append($('<h3>', {text : 'I'})); //FASE DATA
            $('#data-box-circle-'+iteration_num).after($('<div>', {class : 'data-box-content', id : 'phase-text-'+iteration_num}));
            $('#phase-text-'+iteration_num).append($('<span>', {text : 'Estructuración'})); //FASE NAME
          } else if (this.code_fase == '210') {
            $('#data-box-circle-'+iteration_num).append($('<h3>', {text : 'II'})); //FASE DATA
            $('#data-box-circle-'+iteration_num).after($('<div>', {class : 'data-box-content', id : 'phase-text-'+iteration_num}));
            $('#phase-text-'+iteration_num).append($('<span>', {text : 'Selección'})); //FASE NAME
          }else if (this.code_fase == '211') {
            $('#data-box-circle-'+iteration_num).append($('<h3>', {text : 'III'})); //FASE DATA
            $('#data-box-circle-'+iteration_num).after($('<div>', {class : 'data-box-content', id : 'phase-text-'+iteration_num}));
            $('#phase-text-'+iteration_num).append($('<span>', {text : 'Planeación'})); //FASE NAME
          }else if (this.code_fase == '212') {
            $('#data-box-circle-'+iteration_num).append($('<h3>', {text : 'IV'})); //FASE DATA
            $('#data-box-circle-'+iteration_num).after($('<div>', {class : 'data-box-content', id : 'phase-text-'+iteration_num}));
            $('#phase-text-'+iteration_num).append($('<span>', {text : 'Ejecución'})); //FASE NAME
          }else if (this.code_fase == '420') {
            $('#data-box-circle-'+iteration_num).append($('<h3>', {text : 'V'})); //FASE DATA
            $('#data-box-circle-'+iteration_num).after($('<div>', {class : 'data-box-content', id : 'phase-text-'+iteration_num}));
            $('#phase-text-'+iteration_num).append($('<span>', {text : 'Cierre y transferencia'})); //FASE NAME
          }else if (this.code_fase == '1910') {
            $('#data-box-circle-'+iteration_num).append($('<h3>', {text : 'C'})); //FASE DATA
            $('#data-box-circle-'+iteration_num).after($('<div>', {class : 'data-box-content', id : 'phase-text-'+iteration_num}));
            $('#phase-text-'+iteration_num).append($('<span>', {text : 'Cerrado'})); //FASE NAME
          }
          // SPI
          $('#data-box-'+iteration_num).after($('<div>', {class : 'data-box', id : 'data-spi-'+iteration_num}));
          $('#data-spi-'+iteration_num).append($('<div>', {class : 'data-box-circle', id : 'spi-circle-'+iteration_num}));
          $('#spi-circle-'+iteration_num).append($('<h4>', {text : this.spi_labor_units.toFixed(2), id : 'spi-id-'+iteration_num})); //SPI DATA
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
          local_db_projects(this.id_p_project, iteration_num);
          // , complete: function (response) {
          click_compare($('#compare-select-new').children("option:selected").val());
          // }
        });
      }
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
          $.each(response, function() {
            $('#cpi-id-'+iteration_num).text(this.CPI_ANUAL);
            $('#cpi-id-total-'+iteration_num).text(this.AC_PPTO);
            $('#igr-value-'+iteration_num).text(this.IGR);
            $('#plan-id-'+iteration_num).text(this.CAPEX_PLANNED.toFixed(2));
            $('#pres-id-'+iteration_num).text(this.AC.toFixed(2));
            global_indicators(iteration_num, this.PRES_PROJ, this.PROJ_AC);
            // CLICK BTN COMPARAR
            $( "#a-icon-"+iteration_num).click(function() {
              $("#dropdown"+iteration_num).attr('style','display: block; width: 200px; left: 160px; top: 0px; height: 55px; transform-origin: 0px 0px; opacity: 1; transform: scaleX(1) scaleY(1);').show();
            });
          });
        }
      });
    }
    function global_indicators(iteration_num, pres_anual, ejec_anual){
      total_spi += parseFloat($('#spi-id-'+iteration_num).text() / array_lenght);
      $('#spi-indicator').text(total_spi.toFixed(2));
      total_cpi += parseFloat($('#cpi-id-total-'+iteration_num).text() / array_lenght);
      $('#cpi-indicator').text(total_cpi.toFixed(2));
      total_pres_total += parseFloat($('#plan-id-'+iteration_num).text());
      $('#pres-total-indicator').text(total_pres_total.toFixed(2));
      total_eject_total += parseFloat($('#pres-id-'+iteration_num).text());
      $('#ejec-total-indicator').text(total_eject_total.toFixed(2));
      total_pres_anual += parseFloat(pres_anual);
      $('#pres-anual-indicator').text(total_pres_anual.toFixed(2));
      total_ejec_anual += parseFloat(ejec_anual);
      $('#ejec-anual-indicator').text(total_ejec_anual.toFixed(2));
    }
    // CLICK TRES PUNTOS Y OBTENER EL PARENT ID DIV SEARCH
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
            // click_compare($('#compare-select-new').children("option:selected").val());
            // click_compare($('#compare-select-new').children("option:selected").val());
        });
        // option_compare_dates($('#compare-select-new').children("option:selected").val());
        }
      });
      function click_compare(selected_date){
        $(document).ready(function(){
          $( ".modal-trigger" ).click(function() {
            console.log("modal");
            var id_project = $(this).parent().parent().parent().parent().parent().attr('id');
            pres_ejecutado = $('#'+id_project).find('.presupuesto-ejec').text();
            pres_planeado = $('#'+id_project).find('.presupuesto-plan').text();
            igr_compare = $('#'+id_project).find('.igr_data').text();
            cpi_anual_comp = $('#'+id_project).find('.cpi-anual-data').text();
            cpi_total_comp = $('#'+id_project).find('.cpi-total-data').text();
            option_compare_dates(selected_date, id_project);
            // pres_ejecutado = 0, pres_planeado = 0, igr_compare = 0, cpi_anual_comp = 0, cpi_total_compare = 0;
          });
          $('#compare-select-new').change(function() {
            var selected_date_new = $(this).children(":selected").attr("value");
            var id_project = $(".modal-trigger").parent().parent().parent().parent().parent().attr('id');
            pres_ejecutado = $('#'+id_project).find('.presupuesto-ejec').text();
            pres_planeado = $('#'+id_project).find('.presupuesto-plan').text();
            igr_compare = $('#'+id_project).find('.igr_data').text();
            cpi_anual_comp = $('#'+id_project).find('.cpi-anual-data').text();
            cpi_total_comp = $('#'+id_project).find('.cpi-total-data').text();
            option_compare_new_dates(selected_date_new, id_project);
          });
          $('#compare-select-old').change(function() {
            var selected_date_old = $(this).children(":selected").attr("value");
            console.log(selected_date_old);
            var id_project = $(".modal-trigger").parent().parent().parent().parent().parent().attr('id');
            pres_ejecutado = $('#'+id_project).find('.presupuesto-ejec').text();
            pres_planeado = $('#'+id_project).find('.presupuesto-plan').text();
            igr_compare = $('#'+id_project).find('.igr_data').text();
            cpi_anual_comp = $('#'+id_project).find('.cpi-anual-data').text();
            cpi_total_comp = $('#'+id_project).find('.cpi-total-data').text();
            option_compare_old_dates(selected_date_old, id_project);
          });
        });
      }
      // Función que debe buscar el proyecto a comparar y debe existir una función onchange
      function option_compare_dates(selected_date, id_project){
        console.log(selected_date+" "+id_project);
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
            // console.log(this);
            $('#compare-title').text(this.name);
            if (this.code_fase == '209') {
              $('#fase-title-old').text('Estructuración');
              $('#fase-old').text('I');
              $('#fase-title-new').text('Estructuración');
              $('#fase-new').text('I');
            } else if (this.code_fase == '210') {
              $('#fase-title-old').text('Selección');
              $('#fase-old').text('II');
              $('#fase-title-new').text('Selección');
              $('#fase-new').text('II');
            }else if (this.code_fase == '211') {
              $('#fase-title-old').text('Planeación');
              $('#fase-old').text('III');
              $('#fase-title-new').text('Planeación');
              $('#fase-new').text('III');
            }else if (this.code_fase == '212') {
              $('#fase-title-old').text('Ejecución');
              $('#fase-old').text('IV');
              $('#fase-title-new').text('Ejecución');
              $('#fase-new').text('IV');
            }else if (this.code_fase == '420') {
              $('#fase-title-old').text('Cierre y transferencia');
              $('#fase-old').text('V');
              $('#fase-title-new').text('Cierre y transferencia');
              $('#fase-new').text('V');
            }else if (this.code_fase == '1910') {
              $('#fase-title-old').text('Cerrado');
              $('#fase-old').text('C');
              $('#fase-title-new').text('Cerrado');
              $('#fase-new').text('C');
            }
            $('#spi-old').text(this.spi_labor_units.toFixed(2));
            $('#spi-new').text(this.spi_labor_units.toFixed(2));
            // CPI Anual
            $('#cpi-old').text(cpi_anual_comp);
            $('#cpi-new').text(cpi_anual_comp);
            // CPI TOTAL
            $('#cpi-total-old').text(cpi_total_comp);
            $('#cpi-total-new').text(cpi_total_comp);
            // igr
            $('#igr-old').text(igr_compare+"%");
            $('#igr-new').text(igr_compare+"%");
            // Presupuesto planeado
            $('#pres-plan-old').text(pres_planeado+" MM");
            $('#pres-plan-new').text(pres_planeado+" MM");
            // Presupuesto ejecutado
            $('#pres-ejec-old').text(pres_ejecutado+" MM");
            $('#pres-ejec-new').text(pres_ejecutado+" MM");
          });
        }
      });
    }
    // new
    function option_compare_new_dates(selected_date, id_project){
      console.log(selected_date+" "+id_project);
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
          // console.log(this);
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
  // OLD
  function option_compare_old_dates(selected_date, id_project){
    console.log(selected_date+" "+id_project);
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
        // console.log(this);
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
// style : 'display: block; width: 200px; left: 0px; top: 0px; height: 55px; transform-origin: 100% 0px; opacity: 1; transform: scaleX(1) scaleY(1);'
$(document).mouseup(function(e)
{
    var container = $(".dropdown-content");

    // if the target of the click isn't the container nor a descendant of the container
    if (!container.is(e.target) && container.has(e.target).length === 0)
    {
        container.hide();
    }
});
</script>
