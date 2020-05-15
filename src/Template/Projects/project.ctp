<?php
    // Breadcrumb
    $breadcrumb = [
        [ 'Inicio', 'home','Pages' ],
        [ 'Portal Proyectos', 'portalProjects','Projects']
    ];
    setlocale(LC_ALL, "es_ES");
?>
<script>
    function compare(){
        var compare = document.querySelector(".compare"), notebook = $('#notebook-main');
<<<<<<< HEAD
        var compare = document.querySelector(".compare");
=======
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
        compare.classList.toggle("compare-show");
        <?php if ($array_project['code_1'] != 1921):?>
          var compareRisk = document.querySelector(".compare-risk");
          compareRisk.classList.toggle("compare-show");

          var chartRisk = document.querySelector(".box-risk");
          chartRisk.classList.toggle("compare-show");
        <?php endif;?>
<<<<<<< HEAD
=======
        if (notebook.is(":visible")) {
            notebook.hide();
        } else {
            notebook.show();
        }
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
    }
</script>

<div class="section bcrumb project">
  <div class="breadcrumb-container" id="breadcrumb_ctg">
<<<<<<< HEAD
    <a href="javascript:history.back()" class="breadcrumb-back"><i class="material-icons">keyboard_arrow_left</i></a>
      <?php foreach ($breadcrumb as $item): ?>
        <?php echo $this->Html->link($item[0],
          ['controller'=>$item[2], 'action'=>$item[1]],
          ['escape' => false,'class'=>'breadcrumb']
        );?>
      <?php endforeach; ?>
      <!--Breadcrumb para las EPS provenientes de la pestaña companies, diferentes a la EPS de grupo de energía de Bogotá.
Dentro de los breadcrumb se utiliza para enviar parametro el urlencode(base64_encode($var)) para codificar los parametro a enviar.-->
<?php if ($array_project["child_eps_id"] != 23305): ?>
  <?php echo $this->Html->link(
        $array_project["name"],
        ['controller'=>'Projects', 'action'=>'companies',urlencode(base64_encode($json_project))],
        ['escape' => false,'class'=>'breadcrumb']
  );?>
  <?php echo $this->Html->link(
          $array_project["child_name"],
          ['controller'=>'Projects', 'action'=>'company',urlencode(base64_encode($json_project))],
          ['escape' => false,'class'=>'breadcrumb']
    );?>
<?php else:?>
  <?php echo $this->Html->link(
          $array_project["name"],
          ['controller'=>'Projects', 'action'=>'company',urlencode(base64_encode($json_project))],
          ['escape' => false,'class'=>'breadcrumb']
    );?>
<?php endif;?>
  <?php echo $this->Html->link(
    $array_project["category_name"],
    ['controller'=>'Projects', 'action'=>'projects',urlencode(base64_encode($json_project))],
    ['escape' => false,'class'=>'breadcrumb']
  );?>
</div>

    <sidebar class="project-sidebar">
        <h1 id="project-name"></h1>
        <div class="project-sidebar-phase">
            <h2 id="project-phase"></h2>
        </div>
=======
      <a href="javascript:history.back()" class="breadcrumb-back"><i class="material-icons">keyboard_arrow_left</i></a>
        <?php foreach ($breadcrumb as $item): ?>
          <?php echo $this->Html->link($item[0],
            ['controller'=>$item[2], 'action'=>$item[1]],
            ['escape' => false,'class'=>'breadcrumb']
          );?>
        <?php endforeach; ?>
        <!--Breadcrumb para las EPS provenientes de la pestaña companies, diferentes a la EPS de grupo de energía de Bogotá.
  Dentro de los breadcrumb se utiliza para enviar parametro el urlencode(base64_encode($var)) para codificar los parametro a enviar.-->
  <?php if ($array_project["child_eps_id"] != 23305): ?>
    <?php echo $this->Html->link(
          $array_project["name"],
          ['controller'=>'Projects', 'action'=>'companies',urlencode(base64_encode($json_project))],
          ['escape' => false,'class'=>'breadcrumb']
    );?>
    <?php echo $this->Html->link(
            $array_project["child_name"],
            ['controller'=>'Projects', 'action'=>'company',urlencode(base64_encode($json_project))],
            ['escape' => false,'class'=>'breadcrumb']
      );?>
  <?php else:?>
    <?php echo $this->Html->link(
            $array_project["name"],
            ['controller'=>'Projects', 'action'=>'company',urlencode(base64_encode($json_project))],
            ['escape' => false,'class'=>'breadcrumb']
      );?>
  <?php endif;?>
    <?php echo $this->Html->link(
      $array_project["category_name"],
      ['controller'=>'Projects', 'action'=>'projects',urlencode(base64_encode($json_project))],
      ['escape' => false,'class'=>'breadcrumb']
    );?>
  </div>

    <sidebar class="project-sidebar">
        <h1 id="project-name"></h1>
          <div class="project-sidebar-phase">
            <?php if ($array_project['code_1'] != 1921):?>
              <h2 id="project-phase"></h2>
            <?php endif;?>
          </div>
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
        <div class="project-sidebar-percentages">
            <div class="chart" id="advance"></div>
            <div class="legend">
                <h3 class="secondary-text" id="porcentaje-plan"></h3>
                <h3 class="accent-text" id="porcentaje-ejec"></h3>
            </div>
        </div>
        <div class="project-sidebar-info">
            <h2>Objetivo estratégico</h2>
            <p id="p-obj-est"></p>
        </div>
        <div class="project-sidebar-info">
            <h2>Información general</h2>
            <p id="p-info-general"></p>
        </div>
        <div class="project-sidebar-info">
            <h2>Alcance</h2>
            <p id="p-alcance"></p>
        </div>
        <div class="project-sidebar-info">
            <h2>Controles de cambio</h2>
            <p id="p-control-cambio"></p>
        </div>
    </sidebar>

    <div class="project-content">
        <div class="data">
            <div class="data-content">
                <ul>
                    <li>
                        <i class="material-icons">event</i>
                        <span id="span-fopo">FoPo:</span>
                    </li>
                    <li>
                        <i class="material-icons">event_note</i>
                        <span id="span-adj">Adjudicación:</span>
                    </li>
                    <li>
                        <i class="material-icons">event_available</i>
                        <span id="span-spi-date">Fecha SPI:</span>
                    </li>
                    <li>
                        <i class="material-icons">straighten</i>
                        <span id="span-cpi-date">Fecha CPI:</span>
                    </li>
                    <li>
                        <i class="material-icons">place</i>
                        <span id="span-igr-date">Fecha IGR</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="compare">
            <!-- Versión actual -->
            <div class="compare-item">
                <!-- <div class="compare-item-title">
                    <h2>VERSIÓN ACTUAL</h2>
                </div> -->
                <div class="compare-item-title col s12">
                    <div class="input-field">
                      <form id="form-select-new" class="input-field">
                        <select id="compare-select-new" class="select-compare-new">
                          <option value="actual" id="actual-new">Actual</option>
                        </select>
                        <label>Versión</label>
                      </form>
                    </div>
                </div>

                <div class="indicators row wrap">
                    <h2>Indicadores de cronograma</h2>
                    <div class="d-flex col s12 m6 l4 xl3 tooltipped" data-position="bottom" data-tooltip="% Avance ejecutado / % Avance planeado">
                        <a class="indicator type-1 modal-trigger" id="spi-new" href="#wbs-main-new">
                            <h3 class="mr-2">SPI</h3>
                            <h3 class="ml-auto" id="spi-indicator-new"></h3>
                        </a>
                    </div>
<<<<<<< HEAD
                    <div class="d-flex col s12 m6 l4 xl3 tooltipped" data-position="bottom" data-tooltip="Porcentaje de avance planeado del proyecto">
=======
                    <div class="d-flex col s12 m6 l4 xl3">
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
                        <div class="indicator type-1 light-blue darken-2">
                            <h5 class="mr-2">PORCENTAJE <small>AVANCE PLANEADO</small></h5>
                            <h3 class="ml-auto" id="avance-plan-new"></h3>
                        </div>
                    </div>
<<<<<<< HEAD
                    <div class="d-flex col s12 m6 l4 xl3 tooltipped" data-position="bottom" data-tooltip="Porcentaje de avance ejecutado del proyecto">
=======
                    <div class="d-flex col s12 m6 l4 xl3">
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
                        <div class="indicator type-1 light-blue darken-2">
                            <h5 class="mr-2">PORCENTAJE <small>AVANCE EJECUTADO</small></h5>
                            <h3 class="ml-auto" id="avance-ejec-new"></h3>
                        </div>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <div class="indicator type-1 light-blue darken-2">
                            <h5 class="mr-2">FEPO</h5>
                            <h5 class="ml-auto right-align" id="fepo-new"></h5>
                        </div>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <div class="indicator type-1 light-blue darken-2">
                            <h5 class="mr-2">DURACIÓN TOTAL</h5>
                            <h4 class="ml-auto right-align" id="duration-total-new"></h4>
                        </div>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <div class="indicator type-1 light-blue darken-2">
                            <h5 class="mr-2">VARIACIÓN <small>ESTIMADA DURACIÓN</small></h5>
                            <h4 class="ml-auto" id="da-new"></h4>
                        </div>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <div class="indicator type-1 light-blue darken-2">
                            <h5 class="mr-2">PORCENTAJE <small>DE IMPACTO</small></h5>
                            <h4 class="ml-auto" id="pi-new"></h4>
                        </div>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3">
<<<<<<< HEAD
                      <a class="indicator type-1 light-blue darken-2 modal-trigger" href="#Hitos-new">
                          <h4 class="mr-2">HITOS</h4>
                      </a>
=======
                        <a class="indicator type-1 light-blue darken-2 modal-trigger" href="#Hitos-new">
                            <h4 class="mr-2">HITOS</h4>
                        </a>
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
                    </div>
                </div>

                <?php if ($array_project['code_1'] != 1921):?>
<<<<<<< HEAD
                <div class="indicators row wrap mb-4">
                    <h2 class="mb-2">Indicadores de presupuesto</h2>
                    <h3>Total proyecto</h3>
                    <div class="d-flex col s12 m6 l4 xl3 tooltipped" data-position="bottom" data-tooltip="AC  / Ejecutado a la fecha">
                        <a class="indicator type-1 modal-trigger" id="cpi-indicator-new" href="#detailValueExecuted">
                            <h4 class="fw-600 mr-2">CPI</h4>
                            <h4 class="fw-600 ml-auto right-align" id="cpi-new"></h4>
                        </a>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3 tooltipped" data-position="bottom" data-tooltip="Valor causado real acumulado del proyecto">
                        <a class="indicator type-1 secondary darken-2 modal-trigger" href="#detailValueExecuted">
                            <h5 class="fw-600 mr-2">EJECUTADO</h5>
                            <h5 class="fw-600 ml-auto right-align" id="ejecutado-new"></h5>
                        </a>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3 tooltipped" data-position="bottom" data-tooltip="Valor planeado en un periodo.">
                        <a class="indicator type-1 secondary darken-2 modal-trigger" href="#detailValueExecuted">
                            <h5 class="fw-600 mr-2">PLANEADO</h5>
                            <h5 class="fw-600 ml-auto right-align" id="planeado-new"></h5>
                        </a>
                    </div>
                    <div class="divider transparent"></div>
                    <div class="d-flex col s12 m6 l4 xl3 tooltipped" data-position="bottom" data-tooltip="Total presupuesto aprobado al proyecto">
                        <a class="indicator type-1 secondary darken-2 modal-trigger" href="#detailValueExecuted">
                            <h5 class="fw-600">PRESUPUESTO</h5>
                            <h5 class="ml-auto" id="presupuesto-new"></h5>
                        </a>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3 tooltipped" data-position="bottom" data-tooltip="Proyección del presupuesto anual para invertir en el proyecto">
                        <div class="indicator type-1 secondary darken-2">
                            <h5 class="mr-2">PROYECCIÓN <small class="small-indicator">PROYECTO</small></h5>
                            <h5 class="ml-auto" id="proyeccion-new"></h5>
                        </div>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3 tooltipped" data-position="bottom" data-tooltip="Diferencia entre el presupuesto y Proyección del proyecto">
                        <div class="indicator type-1 secondary darken-2">
                            <h5 class="mr-2">VARIACIÓN <small class="small-indicator">PROYECTADA</small></h5>
                            <h5 class="ml-auto" id="variacion-new"></h5>
                        </div>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3 tooltipped" data-position="bottom" data-tooltip="(Desviación presupuestal / presupuesto) * 100">
                        <div class="indicator type-1" id="porcentaje-proy-new">
                            <h5 class="mr-2">PORCENTAJE<small class="small-indicator">VARIACIÓN PROYECTADA</small></h5>
                            <h4 class="ml-auto" id="porcentaje-var-new"></h4>
                        </div>
                    </div>
                    <h3 class="mt-3">Anual proyecto</h3>
                    <div class="d-flex col s12 m6 l4 xl3 tooltipped" data-position="bottom" data-tooltip="AC anual  / Presupuesto anual">
                        <a class="indicator type-1 modal-trigger" id="cpi-anual-indicator-new" href="#detailValueExecuted">
                            <h4 class="fw-600 mr-2">CPI <small class="small-indicator">ANUAL <?=date("Y")?></small></h4>
                            <h4 class="fw-600 ml-auto right-align" id="cpi-anual-new"></h4>
                        </a>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3 tooltipped" data-position="bottom" data-tooltip="Valor causado real acumulado del año">
                        <div class="indicator type-1 secondary darken-2">
                            <h5 class="mr-2">EJECUTADO <small class="small-indicator"><?=date("Y")?></small></h5>
                            <h5 class="ml-auto" id="ejec-anual-new"></h5>
                        </div>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3 tooltipped" data-position="bottom" data-tooltip="Valor planeado en un periodo.">
                        <div class="indicator type-1 secondary darken-2">
                            <h5 class="mr-2">PLANEADO <small class="small-indicator"><?=date("Y")?></small></h5>
                            <h5 class="ml-auto" id="plan-anual-new"></h5>
                        </div>
                    </div>
                    <div class="divider transparent"></div>
                    <div class="d-flex col s12 m6 l4 xl3 tooltipped" data-position="bottom" data-tooltip="Presupuesto planeado para ejecutar en el año">
                        <div class="indicator type-1 secondary darken-2">
                            <h5 class="mr-2">PRESUPUESTO <small class="small-indicator"><?=date("Y")?></small></h5>
                            <h5 class="ml-auto" id="pres-anual-new"></h5>
                        </div>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3 tooltipped" data-position="bottom" data-tooltip="Proyección del presupuesto anual para invertir en el proyecto">
                        <div class="indicator type-1 secondary darken-2">
                            <h5 class="mr-2">PROYECCIÓN <small class="small-indicator">PROYECTO <?=date("Y")?></small></h5>
                            <h5 class="ml-auto" id="proyeccion-anual-new"></h5>
                        </div>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3 tooltipped" data-position="bottom" data-tooltip="Diferencia entre el presupuesto y Proyección del proyecto">
                        <div class="indicator type-1 secondary darken-2" id="var-proy-anual-new">
                            <h5 class="mr-2">VARIACIÓN <small class="small-indicator">PROYECTADA <?=date("Y")?></small></h5>
                            <h5 class="ml-auto" id="variacion-anual-new"></h5>
                        </div>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3 tooltipped" data-position="bottom" data-tooltip="(Desviación presupuestal / presupuesto) * 100">
                        <div class="indicator type-1" id="porcentaje-pr-anual-new">
                            <h5 class="mr-2">PORCENTAJE VARIACIÓN <small class="small-indicator">PROYECTADA <?=date("Y")?></small></h5>
                            <h5 class="ml-auto" id="porcentaje-anual-new"></h5>
                        </div>
                    </div>
                </div>
              <?php endif;?>
              <!-- NOTEBOOKS -->
=======
                  <div class="indicators row wrap mb-4">
                      <h2 class="mb-2">Indicadores de presupuesto</h2>
                      <h3>Total proyecto</h3>
                      <div class="d-flex col s12 m6 l4 xl3">
                          <a class="indicator type-1 modal-trigger" id="cpi-indicator-new" href="#detailValueExecuted">
                              <h4 class="fw-600 mr-2">CPI</h4>
                              <h4 class="fw-600 ml-auto right-align" id="cpi-new"></h4>
                          </a>
                      </div>
                      <div class="d-flex col s12 m6 l4 xl3">
                          <a class="indicator type-1 secondary darken-2 modal-trigger" href="#detailValueExecuted">
                              <h5 class="fw-600 mr-2">EJECUTADO</h5>
                              <h5 class="fw-600 ml-auto right-align" id="ejecutado-new"></h5>
                          </a>
                      </div>
                      <div class="d-flex col s12 m6 l4 xl3">
                          <a class="indicator type-1 secondary darken-2 modal-trigger" href="#detailValueExecuted">
                              <h5 class="fw-600 mr-2">PLANEADO</h5>
                              <h5 class="fw-600 ml-auto right-align" id="planeado-new"></h5>
                          </a>
                      </div>
                      <div class="divider transparent"></div>
                      <div class="d-flex col s12 m6 l4 xl3">
                          <a class="indicator type-1 secondary darken-2 modal-trigger" href="#detailValueExecuted">
                              <h5 class="fw-600">PRESUPUESTO</h5>
                              <h5 class="fw-600 ml-auto right-align" id="presupuesto-new"></h5>
                          </a>
                      </div>
                      <div class="d-flex col s12 m6 l4 xl3">
                          <div class="indicator type-1 secondary darken-2">
                              <h5 class="mr-2">PROYECCIÓN <small class="small-indicator">PROYECTO</small></h5>
                              <h5 class="fw-600 ml-auto right-align" id="proyeccion-new"></h5>
                          </div>
                      </div>
                      <div class="d-flex col s12 m6 l4 xl3">
                          <div class="indicator type-1 secondary darken-2">
                              <h5 class="mr-2">VARIACIÓN <small class="small-indicator">PROYECTADA</small></h5>
                              <h5 class="fw-600 ml-auto right-align" id="variacion-new"></h5>
                          </div>
                      </div>
                      <div class="d-flex col s12 m6 l4 xl3">
                          <div class="indicator type-1" id="porcentaje-proy-new">
                              <h5 class="mr-2">PORCENTAJE<small class="small-indicator">VARIACIÓN PROYECTADA</small></h5>
                              <h4 class="fw-600 ml-auto right-align" id="porcentaje-var-new"></h4>
                          </div>
                      </div>
                      <h3 class="mt-3">Anual proyecto</h3>
                      <div class="d-flex col s12 m6 l4 xl3">
                          <a class="indicator type-1 modal-trigger" id="cpi-anual-indicator-new" href="#detailValueExecuted">
                              <h4 class="fw-600 mr-2">CPI <small class="small-indicator">ANUAL <?=date("Y")?></small></h4>
                              <h4 class="fw-600 ml-auto right-align" id="cpi-anual-new"></h4>
                          </a>
                      </div>
                      <div class="d-flex col s12 m6 l4 xl3">
                          <div class="indicator type-1 secondary darken-2">
                              <h5 class="mr-2">EJECUTADO <small class="small-indicator"><?=date("Y")?></small></h5>
                              <h5 class="fw-600 ml-auto right-align" id="ejec-anual-new"></h5>
                          </div>
                      </div>
                      <div class="d-flex col s12 m6 l4 xl3">
                          <div class="indicator type-1 secondary darken-2">
                              <h5 class="mr-2">PLANEADO <small class="small-indicator"><?=date("Y")?></small></h5>
                              <h5 class="fw-600 ml-auto right-align" id="plan-anual-new"></h5>
                          </div>
                      </div>
                      <div class="divider transparent"></div>
                      <div class="d-flex col s12 m6 l4 xl3">
                          <div class="indicator type-1 secondary darken-2">
                              <h5 class="mr-2">PRESUPUESTO <small class="small-indicator"><?=date("Y")?></small></h5>
                              <h5 class="fw-600 ml-auto right-align" id="pres-anual-new"></h5>
                          </div>
                      </div>
                      <div class="d-flex col s12 m6 l4 xl3">
                          <div class="indicator type-1 secondary darken-2">
                              <h5 class="mr-2">PROYECCIÓN <small class="small-indicator">PROYECTO <?=date("Y")?></small></h5>
                              <h5 class="fw-600 ml-auto right-align" id="proyeccion-anual-new"></h5>
                          </div>
                      </div>
                      <div class="d-flex col s12 m6 l4 xl3">
                          <div class="indicator type-1 secondary darken-2" id="var-proy-anual-new">
                              <h5 class="mr-2">VARIACIÓN <small class="small-indicator">PROYECTADA <?=date("Y")?></small></h5>
                              <h5 class="fw-600 ml-auto right-align" id="variacion-anual-new"></h5>
                          </div>
                      </div>
                      <div class="d-flex col s12 m6 l4 xl3">
                          <div class="indicator type-2" id="porcentaje-pr-anual-new">
                              <h5 class="mr-2">PORCENTAJE VARIACIÓN <small class="small-indicator">PROYECTADA <?=date("Y")?></small></h5>
                              <h5 class="fw-600 ml-auto right-align" id="porcentaje-anual-new"></h5>
                          </div>
                      </div>
                  </div>
                <?php endif;?>
                <!-- NOTEBOOKS -->
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
                <div class="box" id="notebook-main">
                    <div class="box-content">
                        <div class="row wrap align-center">
                            <div class="col flex-300">
                                <div class="input-field">
                                    <select id="notebooks-select">
                                      <option value="default" disabled selected>Seleccionar notebook</option>
                                    </select>
                                    <label>Notebooks</label>
                                </div>
                            </div>
                        </div>
                        <div class="align-center">
                          <P id="notebooks-p"></P>
                        </div>
                    </div>
                </div>
                <div class="box" id="div-caf-new-box">
                    <div class="box-content">
                        <div class="row wrap align-center">
                            <div class="col flex-300">
                                <div class="input-field">
                                    <select id="actual-select" class="period-select">
<<<<<<< HEAD
                                      <option value="" disabled selected>Cambiar periodo</option>
=======
                                      <option value="default" disabled selected>Cambiar periodo</option>
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
                                      <option class="work-option" value="1">Día</option>
                                      <option class="work-option" value="2">Semana</option>
                                      <option class="work-option" value="3">Mes</option>
                                      <option class="work-option" value="4">Trimestre</option>
                                      <option class="work-option" value="5">Año</option>
                                    </select>
                                    <label>Periodo</label>
                                </div>
                            </div>
                            <div class="col flex-0" id="Caf_Button_Excel_new">
                                <a class="btn-floating btn-depressed" onclick="return false;">
                                    <i class="mdi mdi-download"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

<<<<<<< HEAD
                <div class="chart" id="div-caf-new">
                    <h2>Curva de Avance Físico</h2>
                    <div class="chart-content" id="caf"></div>
                </div>
                <?php if ($array_project['code_1'] != 1921):?>
                  <div class="chart" id="tg-div">
                      <h2>Tres Generaciones</h2>
                      <div class="chart-content" id="tg" style="min-height: 475px;"></div>
                  </div>
                <?php endif;?>
            </div>

            <!-- Otras versiones -->
            <div class="compare-item compare-item-version">
                <div class="compare-item-title col s12">
                    <div class="input-field">
                      <form id="form-select-old" class="input-field">
                        <select id="compare-select-old" class="select-compare-old">
                          <option value="actual" id="actual-old">Actual</option>
                        </select>
                        <label>Versión</label>
                      </form>
                    </div>
                </div>

                <div class="indicators row wrap">
                    <h2>Indicadores de cronograma</h2>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <a class="indicator type-1 modal-trigger tooltipped" data-position="bottom" data-tooltip="% Avance ejecutado / % Avance planeado" id="spi-old-color" href="#wbs-main-old">
                            <h3 class="mr-2">SPI</h3>
                            <h3 class="ml-auto" id="spi-old"></h3>
                        </a>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <div class="indicator type-1 light-blue darken-2 tooltipped" data-position="bottom" data-tooltip="Porcentaje de avance planeado del proyecto">
                            <h5 class="mr-2">PORCENTAJE <small>AVANCE PLANEADO</small></h5>
                            <h3 class="ml-auto" id="avance-plan-old"></h3>
                        </div>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <div class="indicator type-1 light-blue darken-2 tooltipped" data-position="bottom" data-tooltip="Porcentaje de avance ejecutado del proyecto">
                            <h5 class="mr-2">PORCENTAJE <small>AVANCE EJECUTADO</small></h5>
                            <h3 class="ml-auto" id="avance-ejec-old"></h3>
                        </div>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <div class="indicator type-1 light-blue darken-2">
                            <h5 class="mr-2">FEPO</h5>
                            <h5 class="ml-auto right-align" id="fepo-old"></h5>
                        </div>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <div class="indicator type-1 light-blue darken-2">
                            <h5 class="mr-2">DURACIÓN TOTAL</h5>
                            <h4 class="ml-auto right-align" id="duracion-total-old"></h4>
                        </div>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <div class="indicator type-1 light-blue darken-2">
                            <h5 class="mr-2">VARIACIÓN <small>ESTIMADA DURACIÓN</small></h5>
                            <h4 class="ml-auto" id="variacion-est-old"></h4>
                        </div>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <div class="indicator type-1 light-blue darken-2">
                            <h5 class="mr-2">PORCENTAJE <small>DE IMPACTO</small></h5>
                            <h4 class="ml-auto" id="pi-old"></h4>
                        </div>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <a class="indicator type-1 light-blue darken-2 modal-trigger" href="#Hitos-old">
                            <h4 class="mr-2">HITOS</h4>
                        </a>
                    </div>
                </div>
              <?php if ($array_project['code_1'] != 1921):?>
                <div class="indicators row wrap mb-4">
                    <h2 class="mb-2">Indicadores de presupuesto</h2>
                    <h3>Total proyecto</h3>
                    <div class="d-flex col s12 m6 l4 xl3 tooltipped" data-position="bottom" data-tooltip="AC  / Ejecutado a la fecha">
                        <a class="indicator type-1 modal-trigger" id="cpi-indicator-old" href="#detailValueExecuted">
                            <h4 class="fw-600 mr-2">CPI</h4>
                            <h4 class="fw-600 ml-auto right-align"  id="cpi-old"></h4>
                        </a>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3 tooltipped" data-position="bottom" data-tooltip="Valor causado real acumulado del proyecto">
                        <a class="indicator type-1 secondary darken-2 modal-trigger" href="#detailValueExecuted">
                            <h5 class="fw-600 mr-2">EJECUTADO</h5>
                            <h5 class="fw-600 ml-auto right-align" id="ejec-total-old"></h5>
                        </a>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3 tooltipped" data-position="bottom" data-tooltip="Valor planeado en un periodo.">
                        <a class="indicator type-1 secondary darken-2 modal-trigger" href="#detailValueExecuted">
                            <h5 class="fw-600 mr-2">PLANEADO</h5>
                            <h5 class="fw-600 ml-auto right-align" id="plan-total-old"></h5>
                        </a>
                    </div>
                    <div class="divider transparent"></div>
                    <div class="d-flex col s12 m6 l4 xl3 tooltipped" data-position="bottom" data-tooltip="Total presupuesto aprobado al proyecto">
                        <a class="indicator type-1 secondary darken-2 modal-trigger" href="#detailValueExecuted">
                            <h5 class="fw-600">PRESUPUESTO</h5>
                            <h5 class="ml-auto" id="pres-total-old"></h5>
                        </a>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3 tooltipped" data-position="bottom" data-tooltip="Proyección del presupuesto anual para invertir en el proyecto">
                        <div class="indicator type-1 secondary darken-2">
                            <h5 class="mr-2">PROYECCIÓN <small class="small-indicator">PROYECTO</small></h5>
                            <h5 class="ml-auto" id="proy-total-old"></h5>
                        </div>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3 tooltipped" data-position="bottom" data-tooltip="Diferencia entre el presupuesto y Proyección del proyecto">
                        <div class="indicator type-1 secondary darken-2">
                            <h5 class="mr-2">VARIACIÓN <small class="small-indicator">PROYECTADA</small></h5>
                            <h5 class="ml-auto" id="variacion-total-old"></h5>
                        </div>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3 tooltipped" data-position="bottom" data-tooltip="(Desviación presupuestal / presupuesto) * 100">
                        <div class="indicator type-1" id="porcentaje-proy-old">
                            <h5 class="mr-2">PORCENTAJE<small class="small-indicator">VARIACIÓN PROYECTADA</small></h5>
                            <h4 class="ml-auto" id="porcentaje-total-old"></h4>
                        </div>
                    </div>
                    <h3 class="mt-3">Anual proyecto</h3>
                    <div class="d-flex col s12 m6 l4 xl3 tooltipped" data-position="bottom" data-tooltip="AC anual  / Presupuesto anual">
                        <a class="indicator type-1 modal-trigger" href="#detailValueExecuted" id="cpi-anual-indicator-old">
                            <h4 class="fw-600 mr-2">CPI <small class="small-indicator">ANUAL <?=date("Y")?></small></h4>
                            <h4 class="fw-600 ml-auto right-align" id="cpi-anual-old"></h4>
                        </a>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3 tooltipped" data-position="bottom" data-tooltip="Valor causado real acumulado del año">
                        <div class="indicator type-1 secondary darken-2">
                            <h5 class="mr-2">EJECUTADO <small class="small-indicator"><?=date("Y")?></small></h5>
                            <h5 class="ml-auto" id="ejec-anual-old"></h5>
                        </div>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3 tooltipped" data-position="bottom" data-tooltip="Valor planeado en un periodo.">
                        <div class="indicator type-1 secondary darken-2">
                            <h5 class="mr-2">PLANEADO <small class="small-indicator"><?=date("Y")?></small></h5>
                            <h5 class="ml-auto" id="plan-anual-old"></h5>
                        </div>
                    </div>
                    <div class="divider transparent"></div>
                    <div class="d-flex col s12 m6 l4 xl3 tooltipped" data-position="bottom" data-tooltip="Presupuesto planeado para ejecutar en el año">
                        <div class="indicator type-1 secondary darken-2">
                            <h5 class="mr-2">PRESUPUESTO <small class="small-indicator"><?=date("Y")?></small></h5>
                            <h5 class="ml-auto" id="pres-anual-old"></h5>
                        </div>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3 tooltipped" data-position="bottom" data-tooltip="Proyección del presupuesto anual para invertir en el proyecto">
                        <div class="indicator type-1 secondary darken-2">
                            <h5 class="mr-2">PROYECCIÓN <small class="small-indicator">PROYECTO <?=date("Y")?></small></h5>
                            <h5 class="ml-auto" id="proy-anual-old"></h5>
                        </div>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3 tooltipped" data-position="bottom" data-tooltip="Diferencia entre el presupuesto y Proyección del proyecto">
                        <div class="indicator type-1 secondary darken-2">
                            <h5 class="mr-2">VARIACIÓN <small class="small-indicator">PROYECTADA <?=date("Y")?></small></h5>
                            <h5 class="ml-auto" id="variacion-anual-old"></h5>
                        </div>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3 tooltipped" data-position="bottom" data-tooltip="(Desviación presupuestal / presupuesto) * 100">
                        <div class="indicator type-1" id="porcentaje-anual-old">
                            <h5 class="mr-2">PORCENTAJE <small class="small-indicator">VARIACIÓN PROYECTADA <?=date("Y")?></small></h5>
                            <h5 class="ml-auto" id="porc-variacion-anual-old"></h5>
                        </div>
                    </div>
                </div>
              <?php endif;?>
                <div class="box" id="div-caf-old-box">
                    <div class="box-content">
                        <div class="row wrap align-center">
                            <div class="col flex-300">
                                <div class="input-field">
                                    <select id="old-select" class="period-select">
                                      <option value="" disabled selected>Cambiar periodo</option>
                                      <option class="work-option" value="1">Día</option>
                                      <option class="work-option" value="2">Semana</option>
                                      <option class="work-option" value="3">Mes</option>
                                      <option class="work-option" value="4">Trimestre</option>
                                      <option class="work-option" value="5">Año</option>
                                    </select>
                                    <label>Periodo</label>
                                </div>
                            </div>
                            <div class="col flex-0">
                                <a href="#" class="btn-floating btn-depressed" onclick="return false;" id="Caf_Button_Excel_old">
                                    <i class="mdi mdi-download"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="chart" id="div-caf-old">
                    <h2>Curva de Avance Físico</h2>
                    <div class="chart-content" id="caf-old"></div>
                </div>
                <?php if ($array_project['code_1'] != 1921):?>
                  <div class="chart" id="div-tg-old">
                      <h2>Tres Generaciones</h2>
                      <div class="chart-content" id="tg-old" style="min-height: 475px;"></div>
                  </div>
                <?php endif;?>
            </div>
        </div>
      <?php if ($array_project['code_1'] != 1921):?>
        <div class="compare compare-risk">
            <div class="compare-item">
                <div class="chart">
                    <h2>Riesgos</h2>
                    <div class="chart-risk">
                        <div class="chart-risk-list">
                            <ul class="pa-0 mb-3">
                                <li>
                                    <a class="lighten-1 white-text" id="igr-value-3"></a>
                                </li>
                            </ul>
                            <ul class="py-1 ul-risk">
                              <li class="li-risks">
                                  <div class="box-content">
                                      <div class="row wrap align-center">
                                        <form id="form-rks-new" class="row flex-300">
                                          <div class="col s6 input-field">
                                            <select class="new-rks-filter" id="estado_new">
                                                <option data-id="all" value="all" selected>Filtrar estado</option>
                                                <option data-id="fase" data-type="estado" value="fase" class="estado-filtro">N/A En esta fase</option>
                                                <option data-id="ejecucion" data-type="estado" value="ejecucion" class="estado-filtro">En ejecución</option>
                                                <option data-id="pendiente" data-type="estado" value="pendiente" class="estado-filtro">Pendiente</option>
                                                <option data-id="finalizado" data-type="estado" value="finalizado" class="estado-filtro">Finalizado</option>
                                            </select>
                                            <label>Estado de las acciones</label>
                                          </div>
                                          <div class="col s6 input-field">
                                            <select class="new-rks-filter" id="materializado_new">
                                                <option data-id="all" value="all" selected>Filtrar por materialización</option>
                                                <option data-id="abierto" data-type="materializacion" value="abierto">Abierto</option>
                                                <option data-id="cerrado" data-type="materializacion" value="cerrado">Cerrado</option>
                                                <option data-id="materializado" data-type="materializacion" value="materializado">Materializado</option>
                                            </select>
                                              <label>Materialización de riesgo</label>
                                          </div>
                                          <div class="col flex-0 mt-3" id="clean-new-rks-filters" style="display:none">
                                              <div href="#" class="btn-floating btn-depressed">
                                                  <i class="mdi mdi-window-close"></i>
                                              </div>
                                          </div>
                                        </form>
                                      </div>
                                  </div>
                              </li>
                            </ul>
                            <ul class="ul-risk">
                                <?php foreach ($rks as $rk): ?>
                                <li class="li-risks info-new" data-estado="<?=$rk->ACTION_STATE?>" data-materializacion="<?=$rk->MATERIALIZACION?>">
                                    <a href=<?='#'.$rk->id?> class="modal-trigger tooltipped" data-code="<?=$rk->RISK_NUMBER?>" data-position="bottom" data-tooltip="<?=$rk->RISK_NAME?>">Riesgo <?=$rk->RISK_NUMBER?></a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="compare-item compare-item-version">
                <div class="chart">
                    <h2>Riesgos</h2>
                    <div class="chart-risk">
                        <div class="chart-risk-list">
                            <ul class="pa-0 mb-3">
                                <li>
                                    <a class="lighten-1 white-text" id="igr-value-1"></a>
                                </li>
                            </ul>
                            <ul class="py-1 ul-risk">
                              <li class="li-risks">
                                  <div class="box-content">
                                      <div class="row wrap align-center">
                                        <form id="form-rks-old" class="row flex-300">
                                          <div class="col s6 input-field">
                                            <select class="old-rks-filter" id="estado_old">
                                                <option data-id="all" value="all" selected>Filtrar estado</option>
                                                <option data-id="fase" data-type="estado" value="fase" class="estado-filtro">N/A En esta fase</option>
                                                <option data-id="ejecucion" data-type="estado" value="ejecucion" class="estado-filtro">En ejecución</option>
                                                <option data-id="pendiente" data-type="estado" value="pendiente" class="estado-filtro">Pendiente</option>
                                                <option data-id="finalizado" data-type="estado" value="finalizado" class="estado-filtro">Finalizado</option>
                                            </select>
                                            <label>Estado de las acciones</label>
                                          </div>
                                          <div class="col s6 input-field">
                                            <select class="old-rks-filter"id="materializado_old">
                                                <option data-id="all" value="all" selected>Filtrar por materialización</option>
                                                <option data-id="abierto" data-type="materializacion" value="abierto">Abierto</option>
                                                <option data-id="cerrado" data-type="materializacion" value="cerrado">Cerrado</option>
                                                <option data-id="materializado" data-type="materializacion" value="materializado">Materializado</option>
                                            </select>
                                              <label>Materialización de riesgo</label>
                                          </div>
                                          <div class="col flex-0 mt-3" id="clean-old-rks-filters" style="display:none">
                                              <div href="#" class="btn-floating btn-depressed">
                                                  <i class="mdi mdi-window-close"></i>
                                              </div>
                                          </div>
                                        </form>
                                      </div>
                                  </div>
                              </li>
                            </ul>
                            <ul class="ul-risk">
                                <?php foreach ($rks as $rk): ?>
                                <li class="li-risks info-old" data-estado="<?=$rk->ACTION_STATE?>" data-materializacion="<?=$rk->MATERIALIZACION?>">
                                    <a href=<?='#'.$rk->id?> class="modal-trigger tooltipped" data-code="<?=$rk->RISK_NUMBER?>" data-position="bottom" data-tooltip="<?=$rk->RISK_NAME?>">Riesgo <?=$rk->RISK_NUMBER?></a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="chart box-risk">
            <h2>Riesgos</h2>
=======
              <div class="chart" id="div-caf-new">
                <h2>Curva de Avance Físico</h2>
                <div class="chart-content" id="caf"></div>
              </div>
              <?php if ($array_project['code_1'] != 1921):?>
                <div class="chart" id="tg-div">
                  <h2>Tres Generaciones</h2>
                  <div class="chart-content" id="tg" style="min-height: 475px;"></div>
                </div>
              <?php endif;?>
            </div>

            <!-- Otras versiones -->
            <div class="compare-item compare-item-version">
                <div class="compare-item-title col s12">
                    <div class="input-field">
                      <form id="form-select-old" class="input-field">
                        <select id="compare-select-old" class="select-compare-old">
                          <option value="actual" id="actual-old">Actual</option>
                        </select>
                        <label>Versión</label>
                      </form>
                    </div>
                </div>

                <div class="indicators row wrap">
                    <h2>Indicadores de cronograma</h2>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <a class="indicator type-1 modal-trigger" id="spi-old-color" href="#wbs-main-old">
                            <h3 class="mr-2">SPI</h3>
                            <h3 class="ml-auto" id="spi-old"></h3>
                        </a>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <div class="indicator type-1 light-blue darken-2">
                            <h5 class="mr-2">PORCENTAJE <small>AVANCE PLANEADO</small></h5>
                            <h3 class="ml-auto" id="avance-plan-old"></h3>
                        </div>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <div class="indicator type-1 light-blue darken-2">
                            <h5 class="mr-2">PORCENTAJE <small>AVANCE EJECUTADO</small></h5>
                            <h3 class="ml-auto" id="avance-ejec-old"></h3>
                        </div>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <div class="indicator type-1 light-blue darken-2">
                            <h5 class="mr-2">FEPO</h5>
                            <h5 class="ml-auto right-align" id="fepo-old"></h5>
                        </div>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <div class="indicator type-1 light-blue darken-2">
                            <h5 class="mr-2">DURACIÓN TOTAL</h5>
                            <h4 class="ml-auto right-align" id="duracion-total-old"></h4>
                        </div>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <div class="indicator type-1 light-blue darken-2">
                            <h5 class="mr-2">VARIACIÓN <small>ESTIMADA DURACIÓN</small></h5>
                            <h4 class="ml-auto" id="variacion-est-old"></h4>
                        </div>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <div class="indicator type-1 light-blue darken-2">
                            <h5 class="mr-2">PORCENTAJE <small>DE IMPACTO</small></h5>
                            <h4 class="ml-auto" id="pi-old"></h4>
                        </div>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <a class="indicator type-1 light-blue darken-2 modal-trigger" href="#Hitos-old">
                            <h4 class="mr-2">HITOS</h4>
                        </a>
                    </div>
                </div>
                <?php if ($array_project['code_1'] != 1921):?>
                  <div class="indicators row wrap mb-4">
                    <h2 class="mb-2">Indicadores de presupuesto</h2>
                    <h3>Total proyecto</h3>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <a class="indicator type-1 modal-trigger" id="cpi-indicator-old" href="#detailValueExecuted">
                            <h4 class="fw-600 mr-2">CPI</h4>
                            <h4 class="fw-600 ml-auto right-align"  id="cpi-old"></h4>
                        </a>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <a class="indicator type-1 secondary darken-2 modal-trigger" href="#detailValueExecuted">
                            <h5 class="fw-600 mr-2">EJECUTADO</h5>
                            <h5 class="fw-600 ml-auto right-align" id="ejec-total-old"></h5>
                        </a>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <a class="indicator type-1 secondary darken-2 modal-trigger" href="#detailValueExecuted">
                            <h5 class="fw-600 mr-2">PLANEADO</h5>
                            <h5 class="fw-600 ml-auto right-align" id="plan-total-old"></h5>
                        </a>
                    </div>
                    <div class="divider transparent"></div>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <a class="indicator type-2 secondary darken-2 modal-trigger" href="#detailValueExecuted">
                            <h5 class="fw-600">PRESUPUESTO</h5>
                            <h5 class="right-align" id="pres-total-old"></h5>
                        </a>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <div class="indicator type-1 secondary darken-2">
                            <h5 class="mr-2">PROYECCIÓN <small class="small-indicator">PROYECTO</small></h5>
                            <h5 class="ml-auto" id="proy-total-old"></h5>
                        </div>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <div class="indicator type-1 secondary darken-2">
                            <h5 class="mr-2">VARIACIÓN <small class="small-indicator">PROYECTADA</small></h5>
                            <h5 class="ml-auto" id="variacion-total-old"></h5>
                        </div>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <div class="indicator type-1" id="porcentaje-proy-old">
                            <h5 class="mr-2">PORCENTAJE<small class="small-indicator">VARIACIÓN PROYECTADA</small></h5>
                            <h4 class="ml-auto" id="porcentaje-total-old"></h4>
                        </div>
                    </div>
                    <h3 class="mt-3">Anual proyecto</h3>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <a class="indicator type-1 modal-trigger" href="#detailValueExecuted" id="cpi-anual-indicator-old">
                            <h4 class="fw-600 mr-2">CPI <small class="small-indicator">ANUAL <?=date("Y")?></small></h4>
                            <h4 class="fw-600 ml-auto right-align" id="cpi-anual-old"></h4>
                        </a>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <div class="indicator type-1 secondary darken-2">
                            <h5 class="mr-2">EJECUTADO <small class="small-indicator"><?=date("Y")?></small></h5>
                            <h5 class="ml-auto" id="ejec-anual-old"></h5>
                        </div>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <div class="indicator type-1 secondary darken-2">
                            <h5 class="mr-2">PLANEADO <small class="small-indicator"><?=date("Y")?></small></h5>
                            <h5 class="ml-auto" id="plan-anual-old"></h5>
                        </div>
                    </div>
                    <div class="divider transparent"></div>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <div class="indicator type-1 secondary darken-2">
                            <h5 class="mr-2">PRESUPUESTO <small class="small-indicator"><?=date("Y")?></small></h5>
                            <h5 class="ml-auto" id="pres-anual-old"></h5>
                        </div>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <div class="indicator type-1 secondary darken-2">
                            <h5 class="mr-2">PROYECCIÓN <small class="small-indicator">PROYECTO <?=date("Y")?></small></h5>
                            <h5 class="ml-auto" id="proy-anual-old"></h5>
                        </div>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <div class="indicator type-1 secondary darken-2">
                            <h5 class="mr-2">VARIACIÓN <small class="small-indicator">PROYECTADA <?=date("Y")?></small></h5>
                            <h5 class="ml-auto" id="variacion-anual-old"></h5>
                        </div>
                    </div>
                    <div class="d-flex col s12 m6 l4 xl3">
                        <div class="indicator type-1" id="porcentaje-anual-old">
                            <h5 class="mr-2">PORCENTAJE <small class="small-indicator">VARIACIÓN PROYECTADA <?=date("Y")?></small></h5>
                            <h5 class="ml-auto" id="porc-variacion-anual-old"></h5>
                        </div>
                    </div>
                </div>
                <?php endif;?>
                <div class="box" id="div-caf-old-box">
                    <div class="box-content">
                        <div class="row wrap align-center">
                            <div class="col flex-300">
                                <div class="input-field">
                                    <select id="old-select" class="period-select">
                                      <option value="default" disabled selected>Cambiar periodo</option>
                                      <option class="work-option" value="1">Día</option>
                                      <option class="work-option" value="2">Semana</option>
                                      <option class="work-option" value="3">Mes</option>
                                      <option class="work-option" value="4">Trimestre</option>
                                      <option class="work-option" value="5">Año</option>
                                    </select>
                                    <label>Periodo</label>
                                </div>
                            </div>
                            <div class="col flex-0">
                                <a href="#" class="btn-floating btn-depressed" onclick="return false;" id="Caf_Button_Excel_old">
                                    <i class="mdi mdi-download"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="chart" id="div-caf-old">
                    <h2>Curva de Avance Físico</h2>
                    <div class="chart-content" id="caf-old"></div>
                </div>
                <?php if ($array_project['code_1'] != 1921):?>
                  <div class="chart" id="div-tg-old">
                      <h2>Tres Generaciones</h2>
                      <div class="chart-content" id="tg-old" style="min-height: 475px;"></div>
                  </div>
                <?php endif;?>
            </div>
        </div>

        <?php if ($array_project['code_1'] != 1921):?>
          <div class="compare compare-risk">
              <div class="compare-item">
                  <div class="chart">
                      <h2>Riesgos</h2>
                      <div class="chart-risk">
                          <div class="chart-risk-list">
                              <ul class="pa-0 mb-3">
                                  <li>
                                      <a class="lighten-1 white-text" id="igr-value-3"></a>
                                  </li>
                              </ul>
                              <ul class="py-1 ul-risk">
                                <li class="li-risks">
                                    <div class="box-content">
                                        <div class="row wrap align-center">
                                          <form id="form-rks-new" class="row flex-300">
                                            <div class="col s6 input-field">
                                              <select class="new-rks-filter" id="estado_new">
                                                  <option data-id="all" value="all" selected>Filtrar estado</option>
                                                  <option data-id="fase" data-type="estado" value="fase" class="estado-filtro">N/A En esta fase</option>
                                                  <option data-id="ejecucion" data-type="estado" value="ejecucion" class="estado-filtro">En ejecución</option>
                                                  <option data-id="pendiente" data-type="estado" value="pendiente" class="estado-filtro">Pendiente</option>
                                                  <option data-id="finalizado" data-type="estado" value="finalizado" class="estado-filtro">Finalizado</option>
                                              </select>
                                              <label>Estado de las acciones</label>
                                            </div>
                                            <div class="col s6 input-field">
                                              <select class="new-rks-filter" id="materializado_new">
                                                  <option data-id="all" value="all" selected>Filtrar por materialización</option>
                                                  <option data-id="abierto" data-type="materializacion" value="abierto">Abierto</option>
                                                  <option data-id="cerrado" data-type="materializacion" value="cerrado">Cerrado</option>
                                                  <option data-id="materializado" data-type="materializacion" value="materializado">Materializado</option>
                                              </select>
                                                <label>Materialización de riesgo</label>
                                            </div>
                                            <div class="col flex-0 mt-3" id="clean-new-rks-filters" style="display:none">
                                                <div href="#" class="btn-floating btn-depressed">
                                                    <i class="mdi mdi-window-close"></i>
                                                </div>
                                            </div>
                                          </form>
                                        </div>
                                    </div>
                                </li>
                              </ul>
                              <ul class="ul-risk">
                                  <?php foreach ($rks as $rk): ?>
                                  <li class="li-risks info-new" data-estado="<?=$rk->ACTION_STATE?>" data-materializacion="<?=$rk->MATERIALIZACION?>">
                                      <a href=<?='#'.$rk->id?> class="modal-trigger tooltipped" data-position="bottom" data-code="<?=$rk->RISK_NUMBER?>" data-tooltip="<?=$rk->RISK_NAME?>">Riesgo <?=$rk->RISK_NUMBER?></a>
                                  </li>
                                  <?php endforeach; ?>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="compare-item compare-item-version">
                  <div class="chart">
                      <h2>Riesgos <span>test</span></h2>
                      <div class="chart-risk">
                          <div class="chart-risk-list">
                              <ul class="pa-0 mb-3">
                                  <li>
                                      <a class="lighten-1 white-text" id="igr-value-1"></a>
                                  </li>
                              </ul>
                              <ul class="py-1 ul-risk">
                                <li class="li-risks">
                                    <div class="box-content">
                                        <div class="row wrap align-center">
                                          <form id="form-rks-old" class="row flex-300">
                                            <div class="col s6 input-field">
                                              <select class="old-rks-filter" id="estado_old">
                                                  <option data-id="all" value="all" selected>Filtrar estado</option>
                                                  <option data-id="fase" data-type="estado" value="fase" class="estado-filtro">N/A En esta fase</option>
                                                  <option data-id="ejecucion" data-type="estado" value="ejecucion" class="estado-filtro">En ejecución</option>
                                                  <option data-id="pendiente" data-type="estado" value="pendiente" class="estado-filtro">Pendiente</option>
                                                  <option data-id="finalizado" data-type="estado" value="finalizado" class="estado-filtro">Finalizado</option>
                                              </select>
                                              <label>Estado de las acciones</label>
                                            </div>
                                            <div class="col s6 input-field">
                                              <select class="old-rks-filter"id="materializado_old">
                                                  <option data-id="all" value="all" selected>Filtrar por materialización</option>
                                                  <option data-id="abierto" data-type="materializacion" value="abierto">Abierto</option>
                                                  <option data-id="cerrado" data-type="materializacion" value="cerrado">Cerrado</option>
                                                  <option data-id="materializado" data-type="materializacion" value="materializado">Materializado</option>
                                              </select>
                                                <label>Materialización de riesgo</label>
                                            </div>
                                            <div class="col flex-0 mt-3" id="clean-old-rks-filters" style="display:none">
                                                <div href="#" class="btn-floating btn-depressed">
                                                    <i class="mdi mdi-window-close"></i>
                                                </div>
                                            </div>
                                          </form>
                                        </div>
                                    </div>
                                </li>
                              </ul>
                              <ul class="ul-risk">
                                  <?php foreach ($rks as $rk): ?>
                                  <li class="li-risks info-old" data-estado="<?=$rk->ACTION_STATE?>" data-materializacion="<?=$rk->MATERIALIZACION?>">
                                      <a href=<?='#'.$rk->id?> class="modal-trigger tooltipped" data-position="bottom" data-code="<?=$rk->RISK_NUMBER?>" data-tooltip="<?=$rk->RISK_NAME?>">Riesgo <?=$rk->RISK_NUMBER?></a>
                                  </li>
                                  <?php endforeach; ?>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="chart box-risk">
            <h2>Riesgos <span class="icon-download"><i class="material-icons">info_outline</i></span></h2>
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
            <div class="chart-risk">
                <div class="chart-risk-list">
                    <ul class="py-0 ul-risk mb-6">
                        <li class="li-risks">
                            <a class="lighten-1 white-text" id="igr-value-2"></a>
                        </li>
                    </ul>
                    <ul class="py-1 ul-risk">
                      <li class="li-risks">
                          <div class="box-content">
                              <div class="row wrap align-center">
                                  <!-- <div class="row flex-300"> -->
<<<<<<< HEAD
                                  <form id="form-select-actual" class="row flex-300">
                                    <div class="col s6 input-field">
                                        <select class="actual-rks-filter" id="estado_act">
                                            <option data-id="all" value="all" selected>Filtrar estado</option>
                                            <option data-id="fase" data-type="estado" value="fase" class="estado-filtro">N/A En esta fase</option>
                                            <option data-id="ejecucion" data-type="estado" value="ejecucion" class="estado-filtro">En ejecución</option>
                                            <option data-id="pendiente" data-type="estado" value="pendiente" class="estado-filtro">Pendiente</option>
                                            <option data-id="finalizado" data-type="estado" value="finalizado" class="estado-filtro">Finalizado</option>
                                        </select>
                                        <label>Estado de las acciones</label>
                                      </div>
                                      <div class="col s6 input-field">
                                        <select class="actual-rks-filter" id="materializado_act">
                                            <option data-id="all" value="all" selected>Filtrar por materialización</option>
                                            <option data-id="abierto" data-type="materializacion" value="abierto">Abierto</option>
                                            <option data-id="cerrado" data-type="materializacion" value="cerrado">Cerrado</option>
                                            <option data-id="materializado" data-type="materializacion" value="materializado">Materializado</option>
                                        </select>
                                        <label>Materialización de riesgo</label>
                                    </div>
                                    <div class="col flex-0 mt-3" id="clean-rks-filters" style="display:none">
                                        <div href="#" class="btn-floating btn-depressed">
                                            <i class="mdi mdi-window-close"></i>
                                        </div>
                                    </div>
                                  </form>
=======
                                    <form id="form-select-actual" class="row flex-300">
                                      <div class="col s6 input-field">
                                          <select class="actual-rks-filter" id="estado_act">
                                              <option data-id="all" value="all" selected>Filtrar estado</option>
                                              <option data-id="fase" data-type="estado" value="fase" class="estado-filtro">N/A En esta fase</option>
                                              <option data-id="ejecucion" data-type="estado" value="ejecucion" class="estado-filtro">En ejecución</option>
                                              <option data-id="pendiente" data-type="estado" value="pendiente" class="estado-filtro">Pendiente</option>
                                              <option data-id="finalizado" data-type="estado" value="finalizado" class="estado-filtro">Finalizado</option>
                                          </select>
                                          <label>Estado de las acciones</label>
                                        </div>
                                        <div class="col s6 input-field">
                                          <select class="actual-rks-filter" id="materializado_act">
                                              <option data-id="all" value="all" selected>Filtrar por materialización</option>
                                              <option data-id="abierto" data-type="materializacion" value="abierto">Abierto</option>
                                              <option data-id="cerrado" data-type="materializacion" value="cerrado">Cerrado</option>
                                              <option data-id="materializado" data-type="materializacion" value="materializado">Materializado</option>
                                          </select>
                                          <label>Materialización de riesgo</label>
                                      </div>
                                      <div class="col flex-0 mt-3" id="clean-rks-filters" style="display:none">
                                          <div href="#" class="btn-floating btn-depressed">
                                              <i class="mdi mdi-window-close"></i>
                                          </div>
                                      </div>
                                    </form>
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
                                  <!-- </div> -->
                              </div>
                          </div>
                      </li>
                    </ul>
                    <ul class="ul-risk">
                        <?php foreach ($rks as $rk): ?>
<<<<<<< HEAD
                        <li class="li-risks info-actual" data-estado="<?=$rk->ACTION_STATE?>" data-materializacion="<?=$rk->MATERIALIZACION?>">
                            <a href=<?='#'.$rk->id?> class="modal-trigger tooltipped" data-code="<?=$rk->RISK_NUMBER?>" data-position="bottom" data-tooltip="<?=$rk->RISK_NAME?>">Riesgo <?=$rk->RISK_NUMBER?></a>
=======
                        <li class="li-risks info-actual" id="<?=$rk->RISK_NUMBER?>" data-estado="<?=$rk->ACTION_STATE?>" data-materializacion="<?=$rk->MATERIALIZACION?>">
                            <a href=<?='#'.$rk->id?> class="modal-trigger tooltipped" data-position="bottom" data-code="<?=$rk->RISK_NUMBER?>" data-tooltip="<?=$rk->RISK_NAME?>">Riesgo <?=$rk->RISK_NUMBER?></a>
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="heatmap">
                  <table id="risk-tr">
<<<<<<< HEAD
                      <tr>
                          <th class="title" rowspan="5"><h3 class="vert">Probabilidad</h3></th>
                          <th>MA</th>
                          <td class="yellow">
                            <?php foreach ($rks as $rk):
                              $color_rks;
                              if ($rk->IMPACT == 1 && $rk->PROBABILITY == 5) {
                                if ($rk->MATERIALIZACION == "materializado") {
                                  $color_rks = "dark lighten-1";
                                } else {
                                  $color_rks = "warning";
                                }
                                echo '<span class="'.$color_rks.'" id="'.$rk->RISK_NUMBER.'_risk'.'">' .$rk->RISK_NUMBER. '</span>';
                              };
                              if ($rk->IMPACT_POST == 1 && $rk->PROBABILITY_POST == 5) {
                                echo '<span class="dark lighten-1 rks-post" id="'.$rk->RISK_NUMBER.'_post'.'">' .$rk->RISK_NUMBER. '</span>';
                              };
                            endforeach; ?>
                          </td>
                          <td class="yellow">
                            <?php foreach ($rks as $rk):
                              $color_rks;
                              if ($rk->IMPACT == 2 && $rk->PROBABILITY == 5) {
                                if ($rk->MATERIALIZACION == "materializado") {
                                  $color_rks = "dark lighten-1";
                                } else {
                                  $color_rks = "warning";
                                }
                                echo '<span class="'.$color_rks.'" id="'.$rk->RISK_NUMBER.'_risk'.'">' .$rk->RISK_NUMBER. '</span>';
                              };
                              if ($rk->IMPACT_POST == 2 && $rk->PROBABILITY_POST == 5) {
                                echo '<span class="dark lighten-1 rks-post" id="'.$rk->RISK_NUMBER.'_post'.'">' .$rk->RISK_NUMBER. '</span>';
                              };
                            endforeach;?>
                          </td>
                          <td class="orange">
                            <?php foreach ($rks as $rk):
                              $color_rks;
                              if ($rk->IMPACT == 3 && $rk->PROBABILITY == 5) {
                                if ($rk->MATERIALIZACION == "materializado") {
                                  $color_rks = "dark lighten-1";
                                } else {
                                  $color_rks = "warning";
                                }
                                echo '<span class="'.$color_rks.'" id="'.$rk->RISK_NUMBER.'_risk'.'">' .$rk->RISK_NUMBER. '</span>';
                              };
                              if ($rk->IMPACT_POST == 3 && $rk->PROBABILITY_POST == 5) {
                                echo '<span class="dark lighten-1 rks-post" id="'.$rk->RISK_NUMBER.'_post'.'">' .$rk->RISK_NUMBER. '</span>';
                              };
                            endforeach;?>
                          </td>
                          <td class="red">
                            <?php foreach ($rks as $rk):
                              $color_rks;
                              if ($rk->IMPACT == 4 && $rk->PROBABILITY == 5) {
                                if ($rk->MATERIALIZACION == "materializado") {
                                  $color_rks = "dark lighten-1";
                                } else {
                                  $color_rks = "warning";
                                }
                                echo '<span class="'.$color_rks.'" id="'.$rk->RISK_NUMBER.'_risk'.'">' .$rk->RISK_NUMBER. '</span>';
                              };
                              if ($rk->IMPACT_POST == 4 && $rk->PROBABILITY_POST == 5) {
                                echo '<span class="dark lighten-1 rks-post" id="'.$rk->RISK_NUMBER.'_post'.'">' .$rk->RISK_NUMBER. '</span>';
                              };
                            endforeach;?>
                          </td>
                          <td class="red">
                            <?php foreach ($rks as $rk):
                              $color_rks;
                              if ($rk->IMPACT == 5 && $rk->PROBABILITY == 5) {
                                if ($rk->MATERIALIZACION == "materializado") {
                                  $color_rks = "dark lighten-1";
                                } else {
                                  $color_rks = "warning";
                                }
                                echo '<span class="'.$color_rks.'" id="'.$rk->RISK_NUMBER.'_risk'.'">' .$rk->RISK_NUMBER. '</span>';
                              };
                              if ($rk->IMPACT_POST == 5 && $rk->PROBABILITY_POST == 5) {
                                echo '<span class="dark lighten-1 rks-post" id="'.$rk->RISK_NUMBER.'_post'.'">' .$rk->RISK_NUMBER. '</span>';
                              };
                            endforeach; ?>
                          </td>
                        </tr>
                       <tr>
                        <th>A</th>
                          <td class="yellow">
                            <?php foreach ($rks as $rk):
                              $color_rks;
                              if ($rk->IMPACT == 1 &&  $rk->PROBABILITY == 4) {
                                if ($rk->MATERIALIZACION == "materializado") {
                                  $color_rks = "dark lighten-1";
                                } else {
                                  $color_rks = "warning";
                                }
                                echo '<span class="'.$color_rks.'" id="'.$rk->RISK_NUMBER.'_risk'.'">' .$rk->RISK_NUMBER. '</span>';
                              };
                              if ($rk->IMPACT_POST == 1 &&  $rk->PROBABILITY_POST == 4) {
                                echo '<span class="dark lighten-1 rks-post" id="'.$rk->RISK_NUMBER.'_post'.'">' .$rk->RISK_NUMBER. '</span>';
                              };
                            endforeach; ?>
                          </td>
                          <td class="yellow">
                            <?php foreach ($rks as $rk):
                              $color_rks;
                              if ($rk->IMPACT == 2 && $rk->PROBABILITY == 4) {
                                if ($rk->MATERIALIZACION == "materializado") {
                                  $color_rks = "dark lighten-1";
                                } else {
                                  $color_rks = "warning";
                                }
                                echo '<span class="'.$color_rks.'" id="'.$rk->RISK_NUMBER.'_risk'.'">' .$rk->RISK_NUMBER. '</span>';
                              };
                              if ($rk->IMPACT_POST == 2 && $rk->PROBABILITY_POST == 4) {
                                echo '<span class="dark lighten-1 rks-post" id="'.$rk->RISK_NUMBER.'_post'.'">' .$rk->RISK_NUMBER. '</span>';
                              };
                            endforeach; ?>
                          </td>
                          <td class="orange">
                            <?php foreach ($rks as $rk):
                              $color_rks;
                              if ($rk->IMPACT == 3 && $rk->PROBABILITY == 4) {
                                if ($rk->MATERIALIZACION == "materializado") {
                                  $color_rks = "dark lighten-1";
                                } else {
                                  $color_rks = "warning";
                                }
                                echo '<span class="'.$color_rks.'" id="'.$rk->RISK_NUMBER.'_risk'.'">' .$rk->RISK_NUMBER. '</span>';
                              };
                              if ($rk->IMPACT_POST == 3 && $rk->PROBABILITY_POST == 4) {
                                echo '<span class="dark lighten-1 rks-post" id="'.$rk->RISK_NUMBER.'_post'.'">' .$rk->RISK_NUMBER. '</span>';
                              };
                            endforeach; ?>
                          </td>
                          <td class="orange">
                            <?php foreach ($rks as $rk):
                              $color_rks;
                              if ($rk->IMPACT == 4 && $rk->PROBABILITY == 4) {
                                if ($rk->MATERIALIZACION == "materializado") {
                                  $color_rks = "dark lighten-1";
                                } else {
                                  $color_rks = "warning";
                                }
                                echo '<span class="'.$color_rks.'" id="'.$rk->RISK_NUMBER.'_risk'.'">' .$rk->RISK_NUMBER. '</span>';
                              };
                              if ($rk->IMPACT_POST == 4 && $rk->PROBABILITY_POST == 4) {
                                echo '<span class="dark lighten-1 rks-post" id="'.$rk->RISK_NUMBER.'_post'.'">' .$rk->RISK_NUMBER. '</span>';
                              };
                            endforeach; ?>
                          </td>
                          <td class="red">
                            <?php foreach ($rks as $rk):
                              $color_rks;
                              if ($rk->IMPACT == 5 && $rk->PROBABILITY == 4) {
                                if ($rk->MATERIALIZACION == "materializado") {
                                  $color_rks = "dark lighten-1";
                                } else {
                                  $color_rks = "warning";
                                }
                                echo '<span class="'.$color_rks.'" id="'.$rk->RISK_NUMBER.'_risk'.'">' .$rk->RISK_NUMBER. '</span>';
                              };
                              if ($rk->IMPACT_POST == 5 && $rk->PROBABILITY_POST == 4) {
                                echo '<span class="dark lighten-1 rks-post" id="'.$rk->RISK_NUMBER.'_post'.'">' .$rk->RISK_NUMBER. '</span>';
                              };
                            endforeach; ?>
                          </td>
                      </tr>
                      <tr>
                          <th>M</th>
                          <td class="lime accent-4">
                            <?php foreach ($rks as $rk):
                              $color_rks;
                              if ($rk->IMPACT == 1 && $rk->PROBABILITY == 3) {
                                if ($rk->MATERIALIZACION == "materializado") {
                                  $color_rks = "dark lighten-1";
                                } else {
                                  $color_rks = "warning";
                                }
                                echo '<span class="'.$color_rks.'" id="'.$rk->RISK_NUMBER.'_risk'.'">' .$rk->RISK_NUMBER. '</span>';
                              };
                              if ($rk->IMPACT_POST == 1 && $rk->PROBABILITY_POST == 3) {
                                echo '<span class="dark lighten-1 rks-post" id="'.$rk->RISK_NUMBER.'_post'.'">' .$rk->RISK_NUMBER. '</span>';
                              };
                            endforeach; ?>
                          </td>
                          <td class="yellow">
                            <?php foreach ($rks as $rk):
                              $color_rks;
                              if ($rk->IMPACT == 2 && $rk->PROBABILITY == 3) {
                                if ($rk->MATERIALIZACION == "materializado") {
                                  $color_rks = "dark lighten-1";
                                } else {
                                  $color_rks = "warning";
                                }
                                echo '<span class="'.$color_rks.'" id="'.$rk->RISK_NUMBER.'_risk'.'">' .$rk->RISK_NUMBER. '</span>';
                              };
                              if ($rk->IMPACT_POST == 2 && $rk->PROBABILITY_POST == 3) {
                                echo '<span class="dark lighten-1 rks-post" id="'.$rk->RISK_NUMBER.'_post'.'">' .$rk->RISK_NUMBER. '</span>';
                              };
                            endforeach; ?>
                          </td>
                          <td class="yellow">
                            <?php foreach ($rks as $rk):
                              $color_rks;
                              if ($rk->IMPACT == 3 && $rk->PROBABILITY == 3) {
                                if ($rk->MATERIALIZACION == "materializado") {
                                  $color_rks = "dark lighten-1";
                                } else {
                                  $color_rks = "warning";
                                }
                                echo '<span class="'.$color_rks.'" id="'.$rk->RISK_NUMBER.'_risk'.'">' .$rk->RISK_NUMBER. '</span>';
                              };
                              if ($rk->IMPACT_POST == 3 && $rk->PROBABILITY_POST == 3) {
                                echo '<span class="dark lighten-1 rks-post" id="'.$rk->RISK_NUMBER.'_post'.'">' .$rk->RISK_NUMBER. '</span>';
                              };
                            endforeach; ?>
                          </td>
                          <td class="orange">
                            <?php foreach ($rks as $rk):
                              $color_rks;
                              if ($rk->IMPACT == 4 && $rk->PROBABILITY == 3) {
                                if ($rk->MATERIALIZACION == "materializado") {
                                  $color_rks = "dark lighten-1";
                                } else {
                                  $color_rks = "warning";
                                }
                                echo '<span class="'.$color_rks.'" id="'.$rk->RISK_NUMBER.'_risk'.'">' .$rk->RISK_NUMBER. '</span>';
                              };
                              if ($rk->IMPACT_POST == 4 && $rk->PROBABILITY_POST == 3) {
                                echo '<span class="dark lighten-1 rks-post" id="'.$rk->RISK_NUMBER.'_post'.'">' .$rk->RISK_NUMBER. '</span>';
                              };
                            endforeach; ?>
                          </td>
                          <td class="orange">
                            <?php foreach ($rks as $rk):
                              $color_rks;
                              if ($rk->IMPACT == 5 && $rk->PROBABILITY == 3) {
                                if ($rk->MATERIALIZACION == "materializado") {
                                  $color_rks = "dark lighten-1";
                                } else {
                                  $color_rks = "warning";
                                }
                                echo '<span class="'.$color_rks.'" id="'.$rk->RISK_NUMBER.'_risk'.'">' .$rk->RISK_NUMBER. '</span>';
                              };
                              if ($rk->IMPACT_POST == 5 && $rk->PROBABILITY_POST == 3) {
                                echo '<span class="dark lighten-1 rks-post" id="'.$rk->RISK_NUMBER.'_post'.'">' .$rk->RISK_NUMBER. '</span>';
                              };
                            endforeach; ?>
                          </td>
                      </tr>
                      <tr>
                          <th>B</th>
                          <td class="lime accent-4">
                            <?php foreach ($rks as $rk):
                              $color_rks;
                              if ($rk->IMPACT == 1 && $rk->PROBABILITY == 2) {
                                if ($rk->MATERIALIZACION == "materializado") {
                                  $color_rks = "dark lighten-1";
                                } else {
                                  $color_rks = "warning";
                                }
                                echo '<span class="'.$color_rks.'" id="'.$rk->RISK_NUMBER.'_risk'.'">' .$rk->RISK_NUMBER. '</span>';
                              };
                              if ($rk->IMPACT_POST == 1 && $rk->PROBABILITY_POST == 2) {
                                echo '<span class="dark lighten-1 rks-post" id="'.$rk->RISK_NUMBER.'_post'.'">' .$rk->RISK_NUMBER. '</span>';
                              };
                            endforeach; ?>
                          </td>
                          <td class="lime accent-4">
                            <?php foreach ($rks as $rk):
                              $color_rks;
                              if ($rk->IMPACT == 2 && $rk->PROBABILITY == 2) {
                                if ($rk->MATERIALIZACION == "materializado") {
                                  $color_rks = "dark lighten-1";
                                } else {
                                  $color_rks = "warning";
                                }
                                echo '<span class="'.$color_rks.'" id="'.$rk->RISK_NUMBER.'_risk'.'">' .$rk->RISK_NUMBER. '</span>';
                              };
                              if ($rk->IMPACT_POST == 2 && $rk->PROBABILITY_POST == 2) {
                                echo '<span class="dark lighten-1 rks-post" id="'.$rk->RISK_NUMBER.'_post'.'">' .$rk->RISK_NUMBER. '</span>';
                              };
                            endforeach; ?>
                          </td>
                          <td class="yellow">
                            <?php foreach ($rks as $rk):
                              $color_rks;
                              if ($rk->IMPACT == 3 && $rk->PROBABILITY == 2) {
                                if ($rk->MATERIALIZACION == "materializado") {
                                  $color_rks = "dark lighten-1";
                                } else {
                                  $color_rks = "warning";
                                }
                                echo '<span class="'.$color_rks.'" id="'.$rk->RISK_NUMBER.'_risk'.'">' .$rk->RISK_NUMBER. '</span>';
                              };
                              if ($rk->IMPACT_POST == 3 && $rk->PROBABILITY_POST == 2) {
                                echo '<span class="dark lighten-1 rks-post" id="'.$rk->RISK_NUMBER.'_post'.'">' .$rk->RISK_NUMBER. '</span>';
                              };
                            endforeach; ?>
                          </td>
                          <td class="yellow">
                            <?php foreach ($rks as $rk):
                              $color_rks;
                              if ($rk->IMPACT == 4 && $rk->PROBABILITY == 2) {
                                if ($rk->MATERIALIZACION == "materializado") {
                                  $color_rks = "dark lighten-1";
                                } else {
                                  $color_rks = "warning";
                                }
                                echo '<span class="'.$color_rks.'" id="'.$rk->RISK_NUMBER.'_risk'.'">' .$rk->RISK_NUMBER. '</span>';
                              };
                              if ($rk->IMPACT_POST == 4 && $rk->PROBABILITY_POST == 2) {
                                echo '<span class="dark lighten-1 rks-post" id="'.$rk->RISK_NUMBER.'_post'.'">' .$rk->RISK_NUMBER. '</span>';
                              };
                            endforeach; ?>
                          </td>
                          <td class="yellow">
                            <?php foreach ($rks as $rk):
                              $color_rks;
                              if ($rk->IMPACT == 5 && $rk->PROBABILITY == 2) {
                                if ($rk->MATERIALIZACION == "materializado") {
                                  $color_rks = "dark lighten-1";
                                } else {
                                  $color_rks = "warning";
                                }
                                echo '<span class="'.$color_rks.'" id="'.$rk->RISK_NUMBER.'_risk'.'">' .$rk->RISK_NUMBER. '</span>';
                              };
                              if ($rk->IMPACT_POST == 5 && $rk->PROBABILITY_POST == 2) {
                                echo '<span class="dark lighten-1 rks-post" id="'.$rk->RISK_NUMBER.'_post'.'">' .$rk->RISK_NUMBER. '</span>';
                              };
                            endforeach; ?>
                          </td>
                      </tr>
                      <tr>
                        <th>MB</th>
                          <td class="lime accent-4">
                            <?php foreach ($rks as $rk):
                              $color_rks;
                              if ($rk->IMPACT == 1 && $rk->PROBABILITY == 1) {
                                if ($rk->MATERIALIZACION == "materializado") {
                                  $color_rks = "dark lighten-1";
                                } else {
                                  $color_rks = "warning";
                                }
                                echo '<span class="'.$color_rks.'" id="'.$rk->RISK_NUMBER.'_risk'.'">' .$rk->RISK_NUMBER. '</span>';
                              };
                              if ($rk->IMPACT_POST == 1 && $rk->PROBABILITY_POST == 1) {
                                echo '<span class="dark lighten-1 rks-post" id="'.$rk->RISK_NUMBER.'_post'.'">' .$rk->RISK_NUMBER. '</span>';
                              };
                            endforeach; ?>
                          </td>
                          <td class="lime accent-4">
                            <?php foreach ($rks as $rk):
                              $color_rks;
                              if ($rk->IMPACT == 2 && $rk->PROBABILITY == 1) {
                                if ($rk->MATERIALIZACION == "materializado") {
                                  $color_rks = "dark lighten-1";
                                } else {
                                  $color_rks = "warning";
                                }
                                echo '<span class="'.$color_rks.'" id="'.$rk->RISK_NUMBER.'_risk'.'">' .$rk->RISK_NUMBER. '</span>';
                              };
                              if ($rk->IMPACT_POST == 2 && $rk->PROBABILITY_POST == 1) {
                                echo '<span class="dark lighten-1 rks-post" id="'.$rk->RISK_NUMBER.'_post'.'">' .$rk->RISK_NUMBER. '</span>';
                              };
                            endforeach; ?>
                          </td>
                          <td class="lime accent-4">
                            <?php foreach ($rks as $rk):
                              $color_rks;
                              if ($rk->IMPACT == 3 && $rk->PROBABILITY == 1) {
                                if ($rk->MATERIALIZACION == "materializado") {
                                  $color_rks = "dark lighten-1";
                                } else {
                                  $color_rks = "warning";
                                }
                                echo '<span class="'.$color_rks.'" id="'.$rk->RISK_NUMBER.'_risk'.'">' .$rk->RISK_NUMBER. '</span>';
                              };
                              if ($rk->IMPACT_POST == 3 && $rk->PROBABILITY_POST == 1) {
                                echo '<span class="dark lighten-1 rks-post" id="'.$rk->RISK_NUMBER.'_post'.'">' .$rk->RISK_NUMBER. '</span>';
                              };
                            endforeach; ?>
                          </td>
                          <td class="lime accent-4">
                            <?php foreach ($rks as $rk):
                              $color_rks;
                              if ($rk->IMPACT == 4 && $rk->PROBABILITY == 1) {
                                if ($rk->MATERIALIZACION == "materializado") {
                                  $color_rks = "dark lighten-1";
                                } else {
                                  $color_rks = "warning";
                                }
                                echo '<span class="'.$color_rks.'" id="'.$rk->RISK_NUMBER.'_risk'.'">' .$rk->RISK_NUMBER. '</span>';
                              };
                              if ($rk->IMPACT_POST == 4 && $rk->PROBABILITY_POST == 1) {
                                echo '<span class="dark lighten-1 rks-post" id="'.$rk->RISK_NUMBER.'_post'.'">' .$rk->RISK_NUMBER. '</span>';
                              };
                            endforeach; ?>
                          </td>
                         <td class="yellow">
                            <?php foreach ($rks as $rk):
                              $color_rks;
                              if ($rk->IMPACT == 5 && $rk->PROBABILITY == 1) {
                                if ($rk->MATERIALIZACION == "materializado") {
                                  $color_rks = "dark lighten-1";
                                } else {
                                  $color_rks = "warning";
                                }
                                echo '<span class="'.$color_rks.'" id="'.$rk->RISK_NUMBER.'_risk'.'">' .$rk->RISK_NUMBER. '</span>';
                              };
                              if ($rk->IMPACT_POST == 5 && $rk->PROBABILITY_POST == 1) {
                                echo '<span class="dark lighten-1 rks-post" id="'.$rk->RISK_NUMBER.'_post'.'">' .$rk->RISK_NUMBER. '</span>';
                              };
                            endforeach; ?>
                         </td>
                      </tr>
                      <tr>
                          <th class="title" colspan="2"></th>
                          <th>MB</th>
                          <th>B</th>
                          <th>M</th>
                          <th>A</th>
                          <th>MA</th>
                      </tr>
                      <tr>
                          <th class="title" colspan="2"></th>
                          <th class="title" colspan="5">
                              <h3>Impacto</h3>
                          </th>
                      </tr>
                  </table>
                </div>
            </div>
        </div>
        <?php if($array_project["child_eps_id"] != 34013 && $array_project["child_eps_id"] != 34021 && $array_project["child_eps_id"] != 34015 && $array_project["child_eps_id"] != 34017):?>
          <div class="data-distance2">
              <?= $this->Html->image('icons/torre-blanca.svg') ?>
              <div class="data-distance2-content">
                  <h2>Longitud</h2>
                  <h3 class="long-distance"></h3>
                  <div class="line-distance"></div>
                  <h4>de líneas de transmisión de</h4>
                  <h5 id="lines-distance"></h5>
                  <div class="divider white mt-3 mb-1"></div>
                  <h6 id="towers-distance"></h6>
              </div>
              <?= $this->Html->image('icons/torre-blanca.svg') ?>
          </div>
        <?php else:?>
          <div class="data">
              <div class="data-distance">
                  <figure class="data-distance-valve start">
                      <?= $this->Html->image('icons/valvula-izq.svg') ?>
                  </figure>
                  <div class="data-distance-content">
                      <h2>Longitud</h2>
                      <h3 class="long-distance"></h3>
                      <div class="line-distance"></div>
                      <h4>ECG</h4>
                      <h5 id="ecg-value"></h5>
                      <div class="divider white mt-3 mb-1"></div>
                      <h6 id="facilidades"></h6>
                  </div>
                  <figure class="data-distance-valve end">
                      <?= $this->Html->image('icons/valvula-der.svg') ?>
                  </figure>
              </div>
          </div>
        <?php endif;?>
      <?php endif;?>
=======
                          <tr>
                              <th class="title" rowspan="5"><h3 class="vert">Probabilidad</h3></th>
                              <th>MA</th>
                              <td class="yellow">
                                <?php foreach ($rks as $rk):
                                  $color_rks;
                                  if ($rk->IMPACT == 1 && $rk->PROBABILITY == 5) {
                                    if ($rk->MATERIALIZACION == "materializado") {
                                      $color_rks = "dark lighten-1";
                                    } else {
                                      $color_rks = "warning";
                                    }
                                    echo '<span class="'.$color_rks.'" id="'.$rk->RISK_NUMBER.'_risk'.'">' .$rk->RISK_NUMBER. '</span>';
                                  };
                                  if ($rk->IMPACT_POST == 1 && $rk->PROBABILITY_POST == 5) {
                                    echo '<span class="dark lighten-1 rks-post" id="'.$rk->RISK_NUMBER.'_post'.'">' .$rk->RISK_NUMBER. '</span>';
                                  };
                                endforeach; ?>
                              </td>
                              <td class="yellow">
                                <?php foreach ($rks as $rk):
                                  $color_rks;
                                  if ($rk->IMPACT == 2 && $rk->PROBABILITY == 5) {
                                    if ($rk->MATERIALIZACION == "materializado") {
                                      $color_rks = "dark lighten-1";
                                    } else {
                                      $color_rks = "warning";
                                    }
                                    echo '<span class="'.$color_rks.'" id="'.$rk->RISK_NUMBER.'_risk'.'">' .$rk->RISK_NUMBER. '</span>';
                                  };
                                  if ($rk->IMPACT_POST == 2 && $rk->PROBABILITY_POST == 5) {
                                    echo '<span class="dark lighten-1 rks-post" id="'.$rk->RISK_NUMBER.'_post'.'">' .$rk->RISK_NUMBER. '</span>';
                                  };
                                endforeach;?>
                              </td>
                              <td class="orange">
                                <?php foreach ($rks as $rk):
                                  $color_rks;
                                  if ($rk->IMPACT == 3 && $rk->PROBABILITY == 5) {
                                    if ($rk->MATERIALIZACION == "materializado") {
                                      $color_rks = "dark lighten-1";
                                    } else {
                                      $color_rks = "warning";
                                    }
                                    echo '<span class="'.$color_rks.'" id="'.$rk->RISK_NUMBER.'_risk'.'">' .$rk->RISK_NUMBER. '</span>';
                                  };
                                  if ($rk->IMPACT_POST == 3 && $rk->PROBABILITY_POST == 5) {
                                    echo '<span class="dark lighten-1 rks-post" id="'.$rk->RISK_NUMBER.'_post'.'">' .$rk->RISK_NUMBER. '</span>';
                                  };
                                endforeach;?>
                              </td>
                              <td class="red">
                                <?php foreach ($rks as $rk):
                                  $color_rks;
                                  if ($rk->IMPACT == 4 && $rk->PROBABILITY == 5) {
                                    if ($rk->MATERIALIZACION == "materializado") {
                                      $color_rks = "dark lighten-1";
                                    } else {
                                      $color_rks = "warning";
                                    }
                                    echo '<span class="'.$color_rks.'" id="'.$rk->RISK_NUMBER.'_risk'.'">' .$rk->RISK_NUMBER. '</span>';
                                  };
                                  if ($rk->IMPACT_POST == 4 && $rk->PROBABILITY_POST == 5) {
                                    echo '<span class="dark lighten-1 rks-post" id="'.$rk->RISK_NUMBER.'_post'.'">' .$rk->RISK_NUMBER. '</span>';
                                  };
                                endforeach;?>
                              </td>
                              <td class="red">
                                <?php foreach ($rks as $rk):
                                  $color_rks;
                                  if ($rk->IMPACT == 5 && $rk->PROBABILITY == 5) {
                                    if ($rk->MATERIALIZACION == "materializado") {
                                      $color_rks = "dark lighten-1";
                                    } else {
                                      $color_rks = "warning";
                                    }
                                    echo '<span class="'.$color_rks.'" id="'.$rk->RISK_NUMBER.'_risk'.'">' .$rk->RISK_NUMBER. '</span>';
                                  };
                                  if ($rk->IMPACT_POST == 5 && $rk->PROBABILITY_POST == 5) {
                                    echo '<span class="dark lighten-1 rks-post" id="'.$rk->RISK_NUMBER.'_post'.'">' .$rk->RISK_NUMBER. '</span>';
                                  };
                                endforeach; ?>
                              </td>
                            </tr>
                           <tr>
                            <th>A</th>
                              <td class="yellow">
                                <?php foreach ($rks as $rk):
                                  $color_rks;
                                  if ($rk->IMPACT == 1 &&  $rk->PROBABILITY == 4) {
                                    if ($rk->MATERIALIZACION == "materializado") {
                                      $color_rks = "dark lighten-1";
                                    } else {
                                      $color_rks = "warning";
                                    }
                                    echo '<span class="'.$color_rks.'" id="'.$rk->RISK_NUMBER.'_risk'.'">' .$rk->RISK_NUMBER. '</span>';
                                  };
                                  if ($rk->IMPACT_POST == 1 &&  $rk->PROBABILITY_POST == 4) {
                                    echo '<span class="dark lighten-1 rks-post" id="'.$rk->RISK_NUMBER.'_post'.'">' .$rk->RISK_NUMBER. '</span>';
                                  };
                                endforeach; ?>
                              </td>
                              <td class="yellow">
                                <?php foreach ($rks as $rk):
                                  $color_rks;
                                  if ($rk->IMPACT == 2 && $rk->PROBABILITY == 4) {
                                    if ($rk->MATERIALIZACION == "materializado") {
                                      $color_rks = "dark lighten-1";
                                    } else {
                                      $color_rks = "warning";
                                    }
                                    echo '<span class="'.$color_rks.'" id="'.$rk->RISK_NUMBER.'_risk'.'">' .$rk->RISK_NUMBER. '</span>';
                                  };
                                  if ($rk->IMPACT_POST == 2 && $rk->PROBABILITY_POST == 4) {
                                    echo '<span class="dark lighten-1 rks-post" id="'.$rk->RISK_NUMBER.'_post'.'">' .$rk->RISK_NUMBER. '</span>';
                                  };
                                endforeach; ?>
                              </td>
                              <td class="orange">
                                <?php foreach ($rks as $rk):
                                  $color_rks;
                                  if ($rk->IMPACT == 3 && $rk->PROBABILITY == 4) {
                                    if ($rk->MATERIALIZACION == "materializado") {
                                      $color_rks = "dark lighten-1";
                                    } else {
                                      $color_rks = "warning";
                                    }
                                    echo '<span class="'.$color_rks.'" id="'.$rk->RISK_NUMBER.'_risk'.'">' .$rk->RISK_NUMBER. '</span>';
                                  };
                                  if ($rk->IMPACT_POST == 3 && $rk->PROBABILITY_POST == 4) {
                                    echo '<span class="dark lighten-1 rks-post" id="'.$rk->RISK_NUMBER.'_post'.'">' .$rk->RISK_NUMBER. '</span>';
                                  };
                                endforeach; ?>
                              </td>
                              <td class="orange">
                                <?php foreach ($rks as $rk):
                                  $color_rks;
                                  if ($rk->IMPACT == 4 && $rk->PROBABILITY == 4) {
                                    if ($rk->MATERIALIZACION == "materializado") {
                                      $color_rks = "dark lighten-1";
                                    } else {
                                      $color_rks = "warning";
                                    }
                                    echo '<span class="'.$color_rks.'" id="'.$rk->RISK_NUMBER.'_risk'.'">' .$rk->RISK_NUMBER. '</span>';
                                  };
                                  if ($rk->IMPACT_POST == 4 && $rk->PROBABILITY_POST == 4) {
                                    echo '<span class="dark lighten-1 rks-post" id="'.$rk->RISK_NUMBER.'_post'.'">' .$rk->RISK_NUMBER. '</span>';
                                  };
                                endforeach; ?>
                              </td>
                              <td class="red">
                                <?php foreach ($rks as $rk):
                                  $color_rks;
                                  if ($rk->IMPACT == 5 && $rk->PROBABILITY == 4) {
                                    if ($rk->MATERIALIZACION == "materializado") {
                                      $color_rks = "dark lighten-1";
                                    } else {
                                      $color_rks = "warning";
                                    }
                                    echo '<span class="'.$color_rks.'" id="'.$rk->RISK_NUMBER.'_risk'.'">' .$rk->RISK_NUMBER. '</span>';
                                  };
                                  if ($rk->IMPACT_POST == 5 && $rk->PROBABILITY_POST == 4) {
                                    echo '<span class="dark lighten-1 rks-post" id="'.$rk->RISK_NUMBER.'_post'.'">' .$rk->RISK_NUMBER. '</span>';
                                  };
                                endforeach; ?>
                              </td>
                          </tr>
                          <tr>
                              <th>M</th>
                              <td class="lime accent-4">
                                <?php foreach ($rks as $rk):
                                  $color_rks;
                                  if ($rk->IMPACT == 1 && $rk->PROBABILITY == 3) {
                                    if ($rk->MATERIALIZACION == "materializado") {
                                      $color_rks = "dark lighten-1";
                                    } else {
                                      $color_rks = "warning";
                                    }
                                    echo '<span class="'.$color_rks.'" id="'.$rk->RISK_NUMBER.'_risk'.'">' .$rk->RISK_NUMBER. '</span>';
                                  };
                                  if ($rk->IMPACT_POST == 1 && $rk->PROBABILITY_POST == 3) {
                                    echo '<span class="dark lighten-1 rks-post" id="'.$rk->RISK_NUMBER.'_post'.'">' .$rk->RISK_NUMBER. '</span>';
                                  };
                                endforeach; ?>
                              </td>
                              <td class="yellow">
                                <?php foreach ($rks as $rk):
                                  $color_rks;
                                  if ($rk->IMPACT == 2 && $rk->PROBABILITY == 3) {
                                    if ($rk->MATERIALIZACION == "materializado") {
                                      $color_rks = "dark lighten-1";
                                    } else {
                                      $color_rks = "warning";
                                    }
                                    echo '<span class="'.$color_rks.'" id="'.$rk->RISK_NUMBER.'_risk'.'">' .$rk->RISK_NUMBER. '</span>';
                                  };
                                  if ($rk->IMPACT_POST == 2 && $rk->PROBABILITY_POST == 3) {
                                    echo '<span class="dark lighten-1 rks-post" id="'.$rk->RISK_NUMBER.'_post'.'">' .$rk->RISK_NUMBER. '</span>';
                                  };
                                endforeach; ?>
                              </td>
                              <td class="yellow">
                                <?php foreach ($rks as $rk):
                                  $color_rks;
                                  if ($rk->IMPACT == 3 && $rk->PROBABILITY == 3) {
                                    if ($rk->MATERIALIZACION == "materializado") {
                                      $color_rks = "dark lighten-1";
                                    } else {
                                      $color_rks = "warning";
                                    }
                                    echo '<span class="'.$color_rks.'" id="'.$rk->RISK_NUMBER.'_risk'.'">' .$rk->RISK_NUMBER. '</span>';
                                  };
                                  if ($rk->IMPACT_POST == 3 && $rk->PROBABILITY_POST == 3) {
                                    echo '<span class="dark lighten-1 rks-post" id="'.$rk->RISK_NUMBER.'_post'.'">' .$rk->RISK_NUMBER. '</span>';
                                  };
                                endforeach; ?>
                              </td>
                              <td class="orange">
                                <?php foreach ($rks as $rk):
                                  $color_rks;
                                  if ($rk->IMPACT == 4 && $rk->PROBABILITY == 3) {
                                    if ($rk->MATERIALIZACION == "materializado") {
                                      $color_rks = "dark lighten-1";
                                    } else {
                                      $color_rks = "warning";
                                    }
                                    echo '<span class="'.$color_rks.'" id="'.$rk->RISK_NUMBER.'_risk'.'">' .$rk->RISK_NUMBER. '</span>';
                                  };
                                  if ($rk->IMPACT_POST == 4 && $rk->PROBABILITY_POST == 3) {
                                    echo '<span class="dark lighten-1 rks-post" id="'.$rk->RISK_NUMBER.'_post'.'">' .$rk->RISK_NUMBER. '</span>';
                                  };
                                endforeach; ?>
                              </td>
                              <td class="orange">
                                <?php foreach ($rks as $rk):
                                  $color_rks;
                                  if ($rk->IMPACT == 5 && $rk->PROBABILITY == 3) {
                                    if ($rk->MATERIALIZACION == "materializado") {
                                      $color_rks = "dark lighten-1";
                                    } else {
                                      $color_rks = "warning";
                                    }
                                    echo '<span class="'.$color_rks.'" id="'.$rk->RISK_NUMBER.'_risk'.'">' .$rk->RISK_NUMBER. '</span>';
                                  };
                                  if ($rk->IMPACT_POST == 5 && $rk->PROBABILITY_POST == 3) {
                                    echo '<span class="dark lighten-1 rks-post" id="'.$rk->RISK_NUMBER.'_post'.'">' .$rk->RISK_NUMBER. '</span>';
                                  };
                                endforeach; ?>
                              </td>
                          </tr>
                          <tr>
                              <th>B</th>
                              <td class="lime accent-4">
                                <?php foreach ($rks as $rk):
                                  $color_rks;
                                  if ($rk->IMPACT == 1 && $rk->PROBABILITY == 2) {
                                    if ($rk->MATERIALIZACION == "materializado") {
                                      $color_rks = "dark lighten-1";
                                    } else {
                                      $color_rks = "warning";
                                    }
                                    echo '<span class="'.$color_rks.'" id="'.$rk->RISK_NUMBER.'_risk'.'">' .$rk->RISK_NUMBER. '</span>';
                                  };
                                  if ($rk->IMPACT_POST == 1 && $rk->PROBABILITY_POST == 2) {
                                    echo '<span class="dark lighten-1 rks-post" id="'.$rk->RISK_NUMBER.'_post'.'">' .$rk->RISK_NUMBER. '</span>';
                                  };
                                endforeach; ?>
                              </td>
                              <td class="lime accent-4">
                                <?php foreach ($rks as $rk):
                                  $color_rks;
                                  if ($rk->IMPACT == 2 && $rk->PROBABILITY == 2) {
                                    if ($rk->MATERIALIZACION == "materializado") {
                                      $color_rks = "dark lighten-1";
                                    } else {
                                      $color_rks = "warning";
                                    }
                                    echo '<span class="'.$color_rks.'" id="'.$rk->RISK_NUMBER.'_risk'.'">' .$rk->RISK_NUMBER. '</span>';
                                  };
                                  if ($rk->IMPACT_POST == 2 && $rk->PROBABILITY_POST == 2) {
                                    echo '<span class="dark lighten-1 rks-post" id="'.$rk->RISK_NUMBER.'_post'.'">' .$rk->RISK_NUMBER. '</span>';
                                  };
                                endforeach; ?>
                              </td>
                              <td class="yellow">
                                <?php foreach ($rks as $rk):
                                  $color_rks;
                                  if ($rk->IMPACT == 3 && $rk->PROBABILITY == 2) {
                                    if ($rk->MATERIALIZACION == "materializado") {
                                      $color_rks = "dark lighten-1";
                                    } else {
                                      $color_rks = "warning";
                                    }
                                    echo '<span class="'.$color_rks.'" id="'.$rk->RISK_NUMBER.'_risk'.'">' .$rk->RISK_NUMBER. '</span>';
                                  };
                                  if ($rk->IMPACT_POST == 3 && $rk->PROBABILITY_POST == 2) {
                                    echo '<span class="dark lighten-1 rks-post" id="'.$rk->RISK_NUMBER.'_post'.'">' .$rk->RISK_NUMBER. '</span>';
                                  };
                                endforeach; ?>
                              </td>
                              <td class="yellow">
                                <?php foreach ($rks as $rk):
                                  $color_rks;
                                  if ($rk->IMPACT == 4 && $rk->PROBABILITY == 2) {
                                    if ($rk->MATERIALIZACION == "materializado") {
                                      $color_rks = "dark lighten-1";
                                    } else {
                                      $color_rks = "warning";
                                    }
                                    echo '<span class="'.$color_rks.'" id="'.$rk->RISK_NUMBER.'_risk'.'">' .$rk->RISK_NUMBER. '</span>';
                                  };
                                  if ($rk->IMPACT_POST == 4 && $rk->PROBABILITY_POST == 2) {
                                    echo '<span class="dark lighten-1 rks-post" id="'.$rk->RISK_NUMBER.'_post'.'">' .$rk->RISK_NUMBER. '</span>';
                                  };
                                endforeach; ?>
                              </td>
                              <td class="yellow">
                                <?php foreach ($rks as $rk):
                                  $color_rks;
                                  if ($rk->IMPACT == 5 && $rk->PROBABILITY == 2) {
                                    if ($rk->MATERIALIZACION == "materializado") {
                                      $color_rks = "dark lighten-1";
                                    } else {
                                      $color_rks = "warning";
                                    }
                                    echo '<span class="'.$color_rks.'" id="'.$rk->RISK_NUMBER.'_risk'.'">' .$rk->RISK_NUMBER. '</span>';
                                  };
                                  if ($rk->IMPACT_POST == 5 && $rk->PROBABILITY_POST == 2) {
                                    echo '<span class="dark lighten-1 rks-post" id="'.$rk->RISK_NUMBER.'_post'.'">' .$rk->RISK_NUMBER. '</span>';
                                  };
                                endforeach; ?>
                              </td>
                          </tr>
                          <tr>
                            <th>MB</th>
                              <td class="lime accent-4">
                                <?php foreach ($rks as $rk):
                                  $color_rks;
                                  if ($rk->IMPACT == 1 && $rk->PROBABILITY == 1) {
                                    if ($rk->MATERIALIZACION == "materializado") {
                                      $color_rks = "dark lighten-1";
                                    } else {
                                      $color_rks = "warning";
                                    }
                                    echo '<span class="'.$color_rks.'" id="'.$rk->RISK_NUMBER.'_risk'.'">' .$rk->RISK_NUMBER. '</span>';
                                  };
                                  if ($rk->IMPACT_POST == 1 && $rk->PROBABILITY_POST == 1) {
                                    echo '<span class="dark lighten-1 rks-post" id="'.$rk->RISK_NUMBER.'_post'.'">' .$rk->RISK_NUMBER. '</span>';
                                  };
                                endforeach; ?>
                              </td>
                              <td class="lime accent-4">
                                <?php foreach ($rks as $rk):
                                  $color_rks;
                                  if ($rk->IMPACT == 2 && $rk->PROBABILITY == 1) {
                                    if ($rk->MATERIALIZACION == "materializado") {
                                      $color_rks = "dark lighten-1 rks-post";
                                    } else {
                                      $color_rks = "warning";
                                    }
                                    echo '<span class="'.$color_rks.'" id="'.$rk->RISK_NUMBER.'_risk'.'">' .$rk->RISK_NUMBER. '</span>';
                                  };
                                  if ($rk->IMPACT_POST == 2 && $rk->PROBABILITY_POST == 1) {
                                    echo '<span class="dark lighten-1 rks-post" id="'.$rk->RISK_NUMBER.'_post'.'">' .$rk->RISK_NUMBER. '</span>';
                                  };
                                endforeach; ?>
                              </td>
                              <td class="lime accent-4">
                                <?php foreach ($rks as $rk):
                                  $color_rks;
                                  if ($rk->IMPACT == 3 && $rk->PROBABILITY == 1) {
                                    if ($rk->MATERIALIZACION == "materializado") {
                                      $color_rks = "dark lighten-1";
                                    } else {
                                      $color_rks = "warning";
                                    }
                                    echo '<span class="'.$color_rks.'" id="'.$rk->RISK_NUMBER.'_risk'.'">' .$rk->RISK_NUMBER. '</span>';
                                  };
                                  if ($rk->IMPACT_POST == 3 && $rk->PROBABILITY_POST == 1) {
                                    echo '<span class="dark lighten-1 rks-post" id="'.$rk->RISK_NUMBER.'_post'.'">' .$rk->RISK_NUMBER. '</span>';
                                  };
                                endforeach; ?>
                              </td>
                              <td class="lime accent-4">
                                <?php foreach ($rks as $rk):
                                  $color_rks;
                                  if ($rk->IMPACT == 4 && $rk->PROBABILITY == 1) {
                                    if ($rk->MATERIALIZACION == "materializado") {
                                      $color_rks = "dark lighten-1";
                                    } else {
                                      $color_rks = "warning";
                                    }
                                    echo '<span class="'.$color_rks.'" id="'.$rk->RISK_NUMBER.'_risk'.'">' .$rk->RISK_NUMBER. '</span>';
                                  };
                                  if ($rk->IMPACT_POST == 4 && $rk->PROBABILITY_POST == 1) {
                                    echo '<span class="dark lighten-1 rks-post" id="'.$rk->RISK_NUMBER.'_post'.'">' .$rk->RISK_NUMBER. '</span>';
                                  };
                                endforeach; ?>
                              </td>
                             <td class="yellow">
                                <?php foreach ($rks as $rk):
                                  $color_rks;
                                  if ($rk->IMPACT == 5 && $rk->PROBABILITY == 1) {
                                    if ($rk->MATERIALIZACION == "materializado") {
                                      $color_rks = "dark lighten-1";
                                    } else {
                                      $color_rks = "warning";
                                    }
                                    echo '<span class="'.$color_rks.'" id="'.$rk->RISK_NUMBER.'_risk'.'">' .$rk->RISK_NUMBER. '</span>';
                                  };
                                  if ($rk->IMPACT_POST == 5 && $rk->PROBABILITY_POST == 1) {
                                    echo '<span class="dark lighten-1 rks-post" id="'.$rk->RISK_NUMBER.'_post'.'">' .$rk->RISK_NUMBER. '</span>';
                                  };
                                endforeach; ?>
                             </td>
                          </tr>
                          <tr>
                              <th class="title" colspan="2"></th>
                              <th>MB</th>
                              <th>B</th>
                              <th>M</th>
                              <th>A</th>
                              <th>MA</th>
                          </tr>
                          <tr>
                              <th class="title" colspan="2"></th>
                              <th class="title" colspan="5">
                                  <h3>Impacto</h3>
                              </th>
                          </tr>
                      </table>
                </div>
            </div>
        </div>
          <?php if($array_project["child_eps_id"] != 34013 && $array_project["child_eps_id"] != 34021 && $array_project["child_eps_id"] != 34015 && $array_project["child_eps_id"] != 34017):?>
            <div class="data-distance2">
                <?= $this->Html->image('icons/torre-blanca.svg') ?>
                <div class="data-distance2-content">
                    <h2>Longitud</h2>
                    <h3 class="long-distance"></h3>
                    <div class="line-distance"></div>
                    <h4>de líneas de transmisión de</h4>
                    <h5 id="lines-distance"></h5>
                    <div class="divider white mt-3 mb-1"></div>
                    <h6 id="towers-distance"></h6>
                </div>
                <?= $this->Html->image('icons/torre-blanca.svg') ?>
            </div>
          <?php else:?>
            <div class="data">
                <div class="data-distance">
                    <figure class="data-distance-valve start">
                        <?= $this->Html->image('icons/valvula-izq.svg') ?>
                    </figure>
                    <div class="data-distance-content">
                        <h2>Longitud</h2>
                        <h3 class="long-distance"></h3>
                        <div class="line-distance"></div>
                        <h4>ECG</h4>
                        <h5 id="ecg-value"></h5>
                        <div class="divider white mt-3 mb-1"></div>
                        <h6 id="facilidades"></h6>
                    </div>
                    <figure class="data-distance-valve end">
                        <?= $this->Html->image('icons/valvula-der.svg') ?>
                    </figure>
                </div>
            </div>
          <?php endif;?>
        <?php endif;?>
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
      <div class="map" id="mapa-img"></div>
   </div>
</div>

<div class="btns-floating btns-floating-right btns-floating-bottom">
  <button class="btn btn-floating btn-large tertiary" id="return-to-top">
      <i class="mdi material-icons">arrow_upward</i></a>
  </button>
</div>

<div class="btns-floating btns-floating-right btns-floating-bottom mb-6 pb-6">
  <button class="btn btn-floating btn-large tertiary" id="btn-compare" onclick="compare()">
      <i class="mdi mdi-select-compare"></i>COMPARAR</a>
  </button>
</div>

<!-- Modal detalle valor ejecutado -->
<div id="detailValueExecuted" class="modal">
    <div class="modal-content">
        <a class="modal-close close">
            <i class="material-icons">close</i>
        </a>
        <h2>Detalle valor ejecutado</h2>
        <ul class="collapsible collapsible-data">
            <li>
                <div class="collapsible-header">
                    <i class="material-icons">keyboard_arrow_down</i>
                    <ul class="collapsible-header-content">
                        <li>
                            <small>Código (CBS)</small>
                            <h3>1</h3>
                        </li>
                        <li>
                            <small>Descripción</small>
                            <h3>Proyecto</h3>
                        </li>
                        <li>
                            <small>Monto (COP)</small>
                            <h3>$ 35,564,214,614</h3>
                        </li>
                        <li>
                            <small>Monto (USD)</small>
                            <h3>$ 1,564,214,614</h3>
                        </li>
                    </ul>
                </div>
                <div class="collapsible-body">
                    <ul class="collapsible">
                        <li>
                            <div class="collapsible-header">
                                <i class="material-icons">keyboard_arrow_down</i>
                                <ul class="collapsible-header-content">
                                    <li>
                                        <small>Código (CBS)</small>
                                        <h3>1</h3>
                                    </li>
                                    <li>
                                        <small>Descripción</small>
                                        <h3>Proyecto</h3>
                                    </li>
                                    <li>
                                        <small>Monto (COP)</small>
                                        <h3>$ 35,564,214,614</h3>
                                    </li>
                                    <li>
                                        <small>Monto (USD)</small>
                                        <h3>$ 1,564,214,614</h3>
                                    </li>
                                </ul>
                            </div>
                            <div class="collapsible-body">
                                <ul class="collapsible">
                                    <li>
                                        <div class="collapsible-header">
                                            <!-- <i class="material-icons">keyboard_arrow_down</i> -->
                                            <ul class="collapsible-header-content">
                                                <li>
                                                    <small>Código (CBS)</small>
                                                    <h3>1</h3>
                                                </li>
                                                <li>
                                                    <small>Descripción</small>
                                                    <h3>Proyecto</h3>
                                                </li>
                                                <li>
                                                    <small>Monto (COP)</small>
                                                    <h3>$ 35,564,214,614</h3>
                                                </li>
                                                <li>
                                                    <small>Monto (USD)</small>
                                                    <h3>$ 1,564,214,614</h3>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="collapsible-body">
                                        </div>
                                    </li>
                                </ul>
                                <ul class="collapsible">
                                    <li>
                                        <div class="collapsible-header">
                                            <ul class="collapsible-header-content">
                                                <li>
                                                    <small>Código (CBS)</small>
                                                    <h3>1</h3>
                                                </li>
                                                <li>
                                                    <small>Descripción</small>
                                                    <h3>Proyecto</h3>
                                                </li>
                                                <li>
                                                    <small>Monto (COP)</small>
                                                    <h3>$ 35,564,214,614</h3>
                                                </li>
                                                <li>
                                                    <small>Monto (USD)</small>
                                                    <h3>$ 1,564,214,614</h3>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="collapsible-body">
                                        </div>
                                    </li>
                                </ul>
                                <ul class="collapsible">
                                    <li>
                                        <div class="collapsible-header">
                                            <ul class="collapsible-header-content">
                                                <li>
                                                    <small>Código (CBS)</small>
                                                    <h3>1</h3>
                                                </li>
                                                <li>
                                                    <small>Descripción</small>
                                                    <h3>Proyecto</h3>
                                                </li>
                                                <li>
                                                    <small>Monto (COP)</small>
                                                    <h3>$ 35,564,214,614</h3>
                                                </li>
                                                <li>
                                                    <small>Monto (USD)</small>
                                                    <h3>$ 1,564,214,614</h3>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="collapsible-body">
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <div class="collapsible-header">
                    <i class="material-icons">keyboard_arrow_down</i>
                    <ul class="collapsible-header-content">
                        <li>
                            <small>Código (CBS)</small>
                            <h3>1</h3>
                        </li>
                        <li>
                            <small>Descripción</small>
                            <h3>Proyecto</h3>
                        </li>
                        <li>
                            <small>Monto (COP)</small>
                            <h3>$ 35,564,214,614</h3>
                        </li>
                        <li>
                            <small>Monto (USD)</small>
                            <h3>$ 1,564,214,614</h3>
                        </li>
                    </ul>
                </div>
                <div class="collapsible-body">
                    <ul class="collapsible">
                        <li>
                            <div class="collapsible-header">
                                <i class="material-icons">keyboard_arrow_down</i>
                                <ul class="collapsible-header-content">
                                    <li>
                                        <small>Código (CBS)</small>
                                        <h3>1</h3>
                                    </li>
                                    <li>
                                        <small>Descripción</small>
                                        <h3>Proyecto</h3>
                                    </li>
                                    <li>
                                        <small>Monto (COP)</small>
                                        <h3>$ 35,564,214,614</h3>
                                    </li>
                                    <li>
                                        <small>Monto (USD)</small>
                                        <h3>$ 1,564,214,614</h3>
                                    </li>
                                </ul>
                            </div>
                            <div class="collapsible-body">
                                <ul class="collapsible">
                                    <li>
                                        <div class="collapsible-header">
                                            <ul class="collapsible-header-content">
                                                <li>
                                                    <small>Código (CBS)</small>
                                                    <h3>1</h3>
                                                </li>
                                                <li>
                                                    <small>Descripción</small>
                                                    <h3>Proyecto</h3>
                                                </li>
                                                <li>
                                                    <small>Monto (COP)</small>
                                                    <h3>$ 35,564,214,614</h3>
                                                </li>
                                                <li>
                                                    <small>Monto (USD)</small>
                                                    <h3>$ 1,564,214,614</h3>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="collapsible-body">
                                        </div>
                                    </li>
                                </ul>
                                <ul class="collapsible">
                                    <li>
                                        <div class="collapsible-header">
                                            <ul class="collapsible-header-content">
                                                <li>
                                                    <small>Código (CBS)</small>
                                                    <h3>1</h3>
                                                </li>
                                                <li>
                                                    <small>Descripción</small>
                                                    <h3>Proyecto</h3>
                                                </li>
                                                <li>
                                                    <small>Monto (COP)</small>
                                                    <h3>$ 35,564,214,614</h3>
                                                </li>
                                                <li>
                                                    <small>Monto (USD)</small>
                                                    <h3>$ 1,564,214,614</h3>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="collapsible-body">
                                        </div>
                                    </li>
                                </ul>
                                <ul class="collapsible">
                                    <li>
                                        <div class="collapsible-header">
                                            <ul class="collapsible-header-content">
                                                <li>
                                                    <small>Código (CBS)</small>
                                                    <h3>1</h3>
                                                </li>
                                                <li>
                                                    <small>Descripción</small>
                                                    <h3>Proyecto</h3>
                                                </li>
                                                <li>
                                                    <small>Monto (COP)</small>
                                                    <h3>$ 35,564,214,614</h3>
                                                </li>
                                                <li>
                                                    <small>Monto (USD)</small>
                                                    <h3>$ 1,564,214,614</h3>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="collapsible-body">
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>
<!-- WBS NEW -->
<div id="wbs-main-new" class="modal" style="max-weight: 100% !important">
    <div class="modal-content">
        <a class="modal-close close">
            <i class="material-icons">close</i>
        </a>
        <h2 id="title-wbs-new">Estructura de WBS</h2>
        <ul class="collapsible collapsible-data" id="wbs-new"></ul>
    </div>
</div>
<!-- WBS OLD -->
<div id="wbs-main-old" class="modal" style="max-weight: 100% !important">
    <div class="modal-content">
        <a class="modal-close close">
            <i class="material-icons">close</i>
        </a>
        <h2 id="title-wbs-old">Estructura de WBS</h2>
        <ul class="collapsible collapsible-data" id="wbs-old"></ul>
    </div>
</div>
<!-- HITOS NEW -->
<<<<<<< HEAD
<!-- <div id="Hitos-new" class="modal" style="max-weight: 100% !important">
    <div class="modal-content">
      <div class="modal-content">
          <a class="modal-close close">
              <i class="material-icons">close</i>
          </a>
          <h2 id="hitos-title-new">Hitos</h2>
          <table>
            <thead>
              <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Avance % Planeado</th>
                  <th>Avance % Real</th>
                  <th>BL Inicio</th>
                  <th>BL Fin</th>
                  <th>Inicio</th>
                  <th>Fin</th>
              </tr>
            </thead>
            <tbody class="hitos-body" id="hitos-body-new"></tbody>
          </table>
        </div>
      <div class="modal-footer">
          <a href="#!" class="modal-close waves-effect waves-green btn btn-depressed">Aceptar</a>
      </div>
    </div>
</div> -->
<!-- HITOS NEW -->
=======
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
<div id="Hitos-new" class="modal" style="max-weight: 100% !important">
    <div class="modal-content">
      <div class="modal-content">
          <a class="modal-close close">
              <i class="material-icons">close</i>
          </a>
          <h2 id="hitos-title-new">Hitos</h2>
          <table>
            <thead>
              <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Avance % Planeado</th>
                  <th>Avance % Real</th>
                  <th>BL Inicio</th>
                  <th>BL Fin</th>
                  <th>Inicio</th>
                  <th>Fin</th>
              </tr>
            </thead>
            <tbody class="hitos-body" id="hitos-body-new"></tbody>
          </table>
        </div>
      <div class="modal-footer">
          <a href="#!" class="modal-close waves-effect waves-green btn btn-depressed">Aceptar</a>
      </div>
    </div>
</div>
<!-- HITOS OLD -->
<div id="Hitos-old" class="modal" style="max-weight: 100% !important">
    <div class="modal-content">
      <div class="modal-content">
          <a class="modal-close close">
              <i class="material-icons">close</i>
          </a>
          <h2 id="hitos-title-old">Hitos</h2>
          <table>
            <thead>
              <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Avance % Planeado</th>
                  <th>Avance % Real</th>
                  <th>BL Inicio</th>
                  <th>BL Fin</th>
                  <th>Inicio</th>
                  <th>Fin</th>
              </tr>
            </thead>
            <tbody class="hitos-body" id="hitos-body-old"></tbody>
          </table>
        </div>
      <div class="modal-footer">
          <a href="#!" class="modal-close waves-effect waves-green btn btn-depressed">Aceptar</a>
      </div>
    </div>
</div>
<!-- Modal detalle de riesgo -->
<?php foreach ($rks as $rk): ?>
<!-- Modal detalle de riesgo -->
<div id=<?=$rk->id?> class="modal">
    <div class="modal-content">
        <a class="modal-close close">
            <i class="material-icons">close</i>
        </a>
        <h2>Detalle riesgo</h2>
        <table>
            <tr>
                <th width="30%">Riesgo</th>
                <td><?=$rk->RISK_NUMBER?></td>
            </tr>
            <tr>
                <th>Nombre Riesgo</th>
                <td><?=$rk->RISK_NAME?></td>
            </tr>
            <tr>
                <th>Probabilidad</th>
                <?php  if ($rk->PROBABILITY == 1):?>
                <td>Muy baja</td>
                <?php endif;?>
                <?php  if ($rk->PROBABILITY == 2):?>
                <td>Baja</td>
                <?php endif;?>
                <?php  if ($rk->PROBABILITY == 3):?>
                <td>Media</td>
                <?php endif;?>
                <?php  if ($rk->PROBABILITY == 4):?>
                <td>Alta</td>
                <?php endif;?>
                <?php  if ($rk->PROBABILITY == 5):?>
                <td>Muy alta</td>
                <?php endif;?>
            </tr>
            <tr>
                <th>Impacto</th>
                <?php  if ($rk->IMPACT == 1):?>
                <td>Muy bajo</td>
                <?php endif;?>
                <?php  if ($rk->IMPACT == 2):?>
                <td>Bajo</td>
                <?php endif;?>
                <?php  if ($rk->IMPACT == 3):?>
                <td>Medio</td>
                <?php endif;?>
                <?php  if ($rk->IMPACT == 4):?>
                <td>Alto</td>
                <?php endif;?>
                <?php  if ($rk->IMPACT == 5):?>
                <td>Muy alto</td>
                <?php endif;?>
            </tr>
            <tr>
                <th>Impacto del riesgo</th>
                <td><?=$rk->IMPACT_RISK?></td>
            </tr>
            <tr>
                <th>Estado de las acciones</th>
                <?php  if ($rk->ACTION_STATE == "fase"):?>
                <td>N/A En esta fase.</td>
                <?php endif;?>
                <?php  if ($rk->ACTION_STATE == "ejecucion"):?>
                <td>En ejecución.</td>
                <?php endif;?>
                <?php  if ($rk->ACTION_STATE == "pendiente"):?>
                <td>Pendiente.</td>
                <?php endif;?>
                <?php  if ($rk->ACTION_STATE == "finalizado"):?>
                <td>Finalizado.</td>
                <?php endif;?>
            </tr>
            <tr>
                <th>Materialización del Riesgo</th>
                <?php  if ($rk->MATERIALIZACION == "abierto"):?>
                <td>Abierto.</td>
                <?php endif;?>
                <?php  if ($rk->MATERIALIZACION == "cerrado"):?>
                <td>Cerrado.</td>
                <?php endif;?>
                <?php  if ($rk->MATERIALIZACION == "materializado"):?>
                <td>Materializado.</td>
                <?php endif;?>
            </tr>
        </table>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn btn-depressed">Aceptar</a>
    </div>
</div>
<?php endforeach; ?>
<!-- SCRIPT PROJECTS -->
<script type="text/javascript" src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script type="text/javascript" src="https://www.amcharts.com/lib/3/serial.js"></script>
<script type="text/javascript" src="https://www.amcharts.com/lib/3/gauge.js"></script>
<script src="https://www.amcharts.com/lib/3/lang/es.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
<?= $this->Html->script('dynamic-charts.min.js',['async']);?>
<script>
  // $(document).ready(function(){
    var csrfToken = <?= json_encode($this->request->getParam('_csrfToken')) ?>;
    var xhr1, xhr2, xhr3, xhr4;
    var fase_value = null, id_project_p6;
    var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

    var promise = new Promise(function(resolve, reject){
      xhr1 = $.ajax({
      headers:{
        'X-CSRF-Token':csrfToken
      },
      method: "GET",
      dataType: "json",
      url: "<?php echo $this->Url->build(['controller'=>'Navbar','action'=>'project_profile']);?>",
      data: {"project_id" : "<?=$project_id?>"},
      cache: true,
      beforeSend: function(xhr) {
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      },
      success: function(response){
        $.each(response, function() {
          // Function que se encarga de llamar los proyectos de la bd local correspondientes a cada proyecto del ws
          $('#project-name').text(this.name);
          if (this.code_fase == '209') {
              fase_value = 'Fase I';
          }else if (this.code_fase == '210') {
              fase_value = 'Fase II';
          }else if (this.code_fase == '211') {
              fase_value = 'Fase III';
          }else if (this.code_fase == '212') {
              fase_value = 'Fase IV';
          }else if (this.code_fase == '420') {
              fase_value = 'Fase V';
          }else if (this.code_fase == '1910') {
              fase_value = 'Cerrado';
          }
          $('#project-phase').text(fase_value);
          // Fecha SPI
          var spi_date = new Date(this.data_date);
          var spi_format_date = spi_date.getUTCDate() + " " + meses[spi_date.getMonth()] + ", " + spi_date.getUTCFullYear();
          $('#span-spi-date').text('Fecha SPI: '+spi_format_date);
          // SPI indicator
          var spi_project = null;
          if (this.spi_labor_units != null) {
            spi_project = this.spi_labor_units.toFixed(2);
            $('#spi-indicator-new').text(spi_project);
            $('#spi-old').text(this.spi_labor_units.toFixed(spi_project));
          }
          id_project = this.id_p_project;
          chart_id = this.project_id_p6;
          <?php if ($array_project['code_1'] != 1921):?>
            crono_indicators_new(this.da, this.fepo, this.od, this.pi);
            crono_indicators_old(this.da, this.fepo, this.od, this.pi);
          <?php else:?>
            crono_actual('new');
          <?php endif;?>
          resolve([id_project, chart_id, this.name, spi_project, this.code_unifier]);
        });
      }
    });
  });
  promise.then(function (result) {
    $('#breadcrumb_ctg').append($('<a>', {text : result[2], class : 'breadcrumb', href : '/Portal-Web/projects/project/'+btoa(unescape(encodeURIComponent(JSON.stringify(result[1]))))+'/'+"<?= urlencode(base64_encode($json_project))?>"+'/'+btoa(unescape(encodeURIComponent(JSON.stringify(result[0]))))}));
  });
  promise.then(function(result) {
<<<<<<< HEAD
    var settings = {
        "async": true,
        "crossDomain": true,
        "url": "http://192.168.1.153:7001/ords/projects_portal/portal/notebook/list/" + result[1],
=======
    console.log( result);
    var settings = {
        "async": true,
        "crossDomain": true,
        "url": "http://192.168.0.210:8080/ords/portal/notebook/list/" + result[1],
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
        "method": "GET",
        "headers": {
            "Authorization": "Bearer <?=$_SESSION["PortalToken"]?>",
            "cache-control": "no-cache"
        }
    }

    $.ajax(settings).done(function(response) {
        if (response.items.length > 0) {
            $('#notebook-main').show();
            $.each(response.items, function() {
                $('#notebooks-select').append(new Option(this.notebooktopicname, this.rawtextnote));
                $('#notebooks-select').formSelect();
            });
        } else {
            $('#notebook-main').hide();
        }
    });
    $('#notebooks-select').change(function() {
        $('#notebooks-p').text($(this).children(":selected").attr("value"))
    });
});
    // Promesa que contiene la información de Unifier y bd local para alimentar los indicadores de presupuesto
  function Unifier_information(project_id, select_value, unifier_code, spi_value, chart_side) {
<<<<<<< HEAD
=======
    console.log("http://192.168.0.210:8080/ords/portal/captures/costindicators/?p_project_id="+project_id+"&p_id_capture="+select_value);
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
    // if (unifier_code != null) {
      if (select_value == 'actual' || select_value == 'all-select') {
        var settings = {
            "async": true,
            "crossDomain": true,
<<<<<<< HEAD
            "url": "http://192.168.1.153:7001/ords/projects_portal/portal/indicatorscosts/list?p_projet_id="+project_id,
=======
            "url": "http://192.168.0.210:8080/ords/portal/indicatorscosts/list?p_projet_id="+project_id,
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
            "method": "GET",
            "headers": {
                "Authorization": "Bearer <?=$_SESSION["PortalToken"]?>"
            }
          }
      } else {
        var settings = {
            "async": true,
            "crossDomain": true,
<<<<<<< HEAD
            "url": "http://192.168.1.153:7001/ords/projects_portal/portal/captures/costindicators/?p_project_id="+project_id+"&p_id_capture="+select_value,
=======
            "url": "http://192.168.0.210:8080/ords/portal/captures/costindicators/?p_project_id="+project_id+"&p_id_capture="+select_value,
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
            "method": "GET",
            "headers": {
                "Authorization": "Bearer <?=$_SESSION["PortalToken"]?>"
            }
          }
        }
        // INDICADORES DE PRESUPUESTO
        $.ajax(settings).done(function (response) {
          if (select_value == 'actual' && chart_side == 'new') {
            new_indicators(response, spi_value, select_value, chart_side);
          } else if(select_value == 'actual' && chart_side == 'old') {
            old_indicators(response, spi_value, select_value, chart_side);
          } else if(select_value == 'all-select') {
            new_indicators(response, spi_value, select_value, chart_side);
            old_indicators(response, spi_value, select_value, chart_side);
          } else if(chart_side == 'new') {
            new_indicators(response, spi_value, select_value, chart_side);
          } else if(chart_side == 'old') {
            old_indicators(response, spi_value, select_value, chart_side);
          }
       });
    }
    function new_indicators(response, spi_value, select_value, chart_side){
<<<<<<< HEAD
=======
      console.log(response.items);
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
      $.each(response.items, function() {
        if (select_value == 'all-select' && this.fecha_cortecpi != null) {
          var cpi_date = new Date(this.fecha_cortecpi);
          var cpi_format_date = cpi_date.getUTCDate() + " " + meses[cpi_date.getMonth()] + ", " + cpi_date.getUTCFullYear();
          $('#span-cpi-date').text('Fecha CPI: '+cpi_format_date);
        }
        // TOTAL PROYECTO
        var unifier_cpi_total = this.cpiusd_total; //Variable que almacena el cpi total proveniente de Unifier
        if (unifier_cpi_total != null) { //Condicionales que validan si el dato
          $('#cpi-new').text(parseFloat(unifier_cpi_total).toFixed(2));
        } else {
          $('#cpi-new').text('');
        }
        var unifier_ejec_total = this.ejecutadousd_total; //Variable que contiene el ejecutado total proveniente de Unifier
        if (unifier_ejec_total != null) {
          <?php if ($array_project['child_eps_id'] == 34012): ?>
            $('#ejecutado-new').text('COP $ '+parseFloat(unifier_ejec_total).toFixed(2)+' MM');
          <?php else:?>
            $('#ejecutado-new').text('USD $ '+parseFloat(unifier_ejec_total).toFixed(2)+' MM');
          <?php endif;?>
        } else {
          $('#ejecutado-new').text('');
        }
        var unifier_plan_total = this.planeadousd_total;
        if (unifier_plan_total != null) {
          <?php if ($array_project['child_eps_id'] == 34012): ?>
            $('#planeado-new').text('COP $ '+parseFloat(unifier_plan_total).toFixed(2)+' MM');
          <?php else:?>
            $('#planeado-new').text('USD $ '+parseFloat(unifier_plan_total).toFixed(2)+' MM');
          <?php endif;?>
        } else {
          $('#planeado-new').text('');
        }
        var unifier_presp_total = this.presupuestousd_total;
        if (unifier_presp_total != null) {
          <?php if ($array_project['child_eps_id'] == 34012): ?>
            $('#presupuesto-new').text('COP $ '+parseFloat(unifier_presp_total).toFixed(2)+' MM');
          <?php else:?>
            $('#presupuesto-new').text('USD $ '+parseFloat(unifier_presp_total).toFixed(2)+' MM');
          <?php endif;?>
        } else {
          $('#presupuesto-new').text('');
        }
        var unifier_var_total = this.variacionusd_total;
        if (unifier_var_total != null) {
          <?php if ($array_project['child_eps_id'] == 34012): ?>
            $('#variacion-new').text('COP $ '+parseFloat(unifier_var_total).toFixed(2)+' MM');
          <?php else:?>
            $('#variacion-new').text('USD $ '+parseFloat(unifier_var_total).toFixed(2)+' MM');
          <?php endif;?>
        } else {
          $('#variacion-new').text('');
        }
        var unifier_proy_total = this.proyeccionusd_total;
        if (unifier_proy_total != null) {
          <?php if ($array_project['child_eps_id'] == 34012): ?>
            $('#proyeccion-new').text('COP $ '+parseFloat(unifier_proy_total).toFixed(2)+' MM');
          <?php else:?>
            $('#proyeccion-new').text('USD $ '+parseFloat(unifier_proy_total).toFixed(2)+' MM');
          <?php endif;?>
        } else {
          $('#proyeccion-new').text('');
        }
        var unifier_porc_total = this.porcentajevausd_total;
        if (unifier_porc_total != null) {
          $('#porcentaje-var-new').text(parseFloat(unifier_porc_total).toFixed(2)+'%');
        } else {
          $('#porcentaje-var-new').text('');
        }
        // ANUAL PROYECTO
        var unifier_cpi_anual = this.cpiusd_2019;
        if (unifier_cpi_anual != null) {
          $('#cpi-anual-new').text(parseFloat(unifier_cpi_anual).toFixed(2));
        } else {
          $('#cpi-anual-new').text('');
        }
        var unifier_ejec_anual = this.ejecutadusd_2019;
        if (unifier_ejec_anual != null) {
          <?php if ($array_project['child_eps_id'] == 34012): ?>
            $('#ejec-anual-new').text('COP $ '+parseFloat(unifier_ejec_anual).toFixed(2)+' MM');
          <?php else:?>
            $('#ejec-anual-new').text('USD $ '+parseFloat(unifier_ejec_anual).toFixed(2)+' MM');
          <?php endif;?>
        } else {
          $('#ejec-anual-new').text('');
        }
        var unifier_plan_anual = this.planeadousd_2019;
        if (unifier_plan_anual != null) {
          <?php if ($array_project['child_eps_id'] == 34012): ?>
            $('#plan-anual-new').text('COP $ '+parseFloat(unifier_plan_anual).toFixed(2)+' MM');
          <?php else:?>
            $('#plan-anual-new').text('USD $ '+parseFloat(unifier_plan_anual).toFixed(2)+' MM');
          <?php endif;?>
        } else {
          $('#plan-anual-new').text('');
        }
        var unifier_pres_anual = this.presupuestousd_2019;
        if (unifier_pres_anual != null) {
          <?php if ($array_project['child_eps_id'] == 34012): ?>
            $('#pres-anual-new').text('COP $ '+parseFloat(unifier_pres_anual).toFixed(2)+' MM');
          <?php else:?>
            $('#pres-anual-new').text('USD $ '+parseFloat(unifier_pres_anual).toFixed(2)+' MM');
          <?php endif;?>
        } else {
          $('#pres-anual-new').text('');
        }
        var unifier_proy_anual = this.proyeccionusd_2019;
        if (unifier_proy_anual != null) {
          <?php if ($array_project['child_eps_id'] == 34012): ?>
            $('#proyeccion-anual-new').text('COP $ '+parseFloat(unifier_proy_anual).toFixed(2)+' MM');
          <?php else:?>
            $('#proyeccion-anual-new').text('USD $ '+parseFloat(unifier_proy_anual).toFixed(2)+' MM');
          <?php endif;?>
        } else {
          $('#proyeccion-anual-new').text('');
        }
        var unifier_var_anual = this.varacionusd_2019;
        if (unifier_var_anual != null) {
          <?php if ($array_project['child_eps_id'] == 34012): ?>
            $('#variacion-anual-new').text('COP $ '+parseFloat(unifier_var_anual).toFixed(2)+' MM');
          <?php else:?>
            $('#variacion-anual-new').text('USD $ '+parseFloat(unifier_var_anual).toFixed(2)+' MM');
          <?php endif;?>
        } else {
          $('#variacion-anual-new').text('');
        }
        var unifier_porc_anual = this.porcentajevausd_2019;
        if (unifier_porc_anual != null) {
          $('#porcentaje-anual-new').text(parseFloat(unifier_porc_anual).toFixed(2)+'%');
        } else {
          $('#porcentaje-anual-new').text('');
        }
        local_db_info([unifier_cpi_total, unifier_porc_total, unifier_cpi_anual, unifier_porc_anual, spi_value, select_value, chart_side]);
      });
    }
    function old_indicators(response, spi_value, select_value, chart_side){
      $.each(response.items, function() {
        // TOTAL PROYECTO
        var unifier_cpi_total = this.cpiusd_total; //Variable que almacena el cpi total proveniente de Unifier
        if (unifier_cpi_total != null) { //Condicionales que validan si el dato
          $('#cpi-old').text(parseFloat(unifier_cpi_total).toFixed(2));
        } else {
          $('#cpi-old').text('');
        }
        var unifier_ejec_total = this.ejecutadousd_total; //Variable que contiene el ejecutado total proveniente de Unifier
        if (unifier_ejec_total != null) {
<<<<<<< HEAD
          $('#ejec-total-old').text('USD $ '+parseFloat(unifier_ejec_total).toFixed(2)+' MM');
=======
          <?php if ($array_project['child_eps_id'] == 34012): ?>
            $('#ejec-total-old').text('COP $ '+parseFloat(unifier_ejec_total).toFixed(2)+' MM');
          <?php else:?>
            $('#ejec-total-old').text('USD $ '+parseFloat(unifier_ejec_total).toFixed(2)+' MM');
          <?php endif;?>
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
        } else {
          $('#ejec-total-old').text('');
        }
        var unifier_plan_total = this.planeadousd_total;
        if (unifier_plan_total != null) {
<<<<<<< HEAD
          $('#plan-total-old').text('USD $ '+parseFloat(unifier_plan_total).toFixed(2)+' MM');
=======
          <?php if ($array_project['child_eps_id'] == 34012): ?>
            $('#plan-total-old').text('COP $ '+parseFloat(unifier_plan_total).toFixed(2)+' MM');
          <?php else:?>
            $('#plan-total-old').text('USD $ '+parseFloat(unifier_plan_total).toFixed(2)+' MM');
          <?php endif;?>
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
        } else {
          $('#plan-total-old').text('');
        }
        var unifier_presp_total = this.presupuestousd_total;
        if (unifier_presp_total != null) {
<<<<<<< HEAD
          $('#pres-total-old').text('USD $ '+parseFloat(unifier_presp_total).toFixed(2)+' MM');
=======
          <?php if ($array_project['child_eps_id'] == 34012): ?>
            $('#pres-total-old').text('COP $ '+parseFloat(unifier_presp_total).toFixed(2)+' MM');
          <?php else:?>
            $('#pres-total-old').text('USD $ '+parseFloat(unifier_presp_total).toFixed(2)+' MM');
          <?php endif;?>
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
        } else {
          $('#pres-total-old').text('');
        }
        var unifier_var_total = this.variacionusd_total;
        if (unifier_var_total != null) {
<<<<<<< HEAD
          $('#variacion-total-old').text('USD $ '+parseFloat(unifier_var_total).toFixed(2)+' MM');
=======
          <?php if ($array_project['child_eps_id'] == 34012): ?>
            $('#variacion-total-old').text('COP $ '+parseFloat(unifier_var_total).toFixed(2)+' MM');
          <?php else:?>
            $('#variacion-total-old').text('USD $ '+parseFloat(unifier_var_total).toFixed(2)+' MM');
          <?php endif;?>
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
        } else {
          $('#variacion-total-old').text('');
        }
        var unifier_proy_total = this.proyeccionusd_total;
        if (unifier_proy_total != null) {
<<<<<<< HEAD
          $('#proy-total-old').text('USD $ '+parseFloat(unifier_proy_total).toFixed(2)+' MM');
=======
          <?php if ($array_project['child_eps_id'] == 34012): ?>
            $('#proy-total-old').text('COP $ '+parseFloat(unifier_proy_total).toFixed(2)+' MM');
          <?php else:?>
            $('#proy-total-old').text('USD $ '+parseFloat(unifier_proy_total).toFixed(2)+' MM');
          <?php endif;?>
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
        } else {
          $('#proy-total-old').text('');
        }
        var unifier_porc_total = this.porcentajevausd_total;
        if (unifier_porc_total != null) {
          $('#porcentaje-total-old').text(parseFloat(unifier_porc_total).toFixed(2)+'%');
        } else {
          $('#porcentaje-total-old').text('');
        }
        // ANUAL PROYECTO
        var unifier_cpi_anual = this.cpiusd_2019;
        if (unifier_cpi_anual != null) {
          $('#cpi-anual-old').text(parseFloat(unifier_cpi_anual).toFixed(2));
        } else {
          $('#cpi-anual-old').text('');
        }
        var unifier_ejec_anual = this.ejecutadusd_2019;
        if (unifier_ejec_anual != null) {
<<<<<<< HEAD
          $('#ejec-anual-old').text('USD $ '+parseFloat(unifier_ejec_anual).toFixed(2)+' MM');
=======
          <?php if ($array_project['child_eps_id'] == 34012): ?>
            $('#ejec-anual-old').text('COP $ '+parseFloat(unifier_ejec_anual).toFixed(2)+' MM');
          <?php else:?>
            $('#ejec-anual-old').text('USD $ '+parseFloat(unifier_ejec_anual).toFixed(2)+' MM');
          <?php endif;?>
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
        } else {
          $('#ejec-anual-old').text('');
        }
        var unifier_plan_anual = this.planeadousd_2019;
        if (unifier_plan_anual != null) {
<<<<<<< HEAD
          $('#plan-anual-old').text('USD $ '+parseFloat(unifier_plan_anual).toFixed(2)+' MM');
=======
          <?php if ($array_project['child_eps_id'] == 34012): ?>
            $('#plan-anual-old').text('COP $ '+parseFloat(unifier_plan_anual).toFixed(2)+' MM');
          <?php else:?>
            $('#plan-anual-old').text('USD $ '+parseFloat(unifier_plan_anual).toFixed(2)+' MM');
          <?php endif;?>
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
        } else {
          $('#plan-anual-old').text('');
        }
        var unifier_pres_anual = this.presupuestousd_2019;
        if (unifier_pres_anual != null) {
<<<<<<< HEAD
          $('#pres-anual-old').text('USD $ '+parseFloat(unifier_pres_anual).toFixed(2)+' MM');
=======
          <?php if ($array_project['child_eps_id'] == 34012): ?>
            $('#pres-anual-old').text('COP $ '+parseFloat(unifier_pres_anual).toFixed(2)+' MM');
          <?php else:?>
            $('#pres-anual-old').text('USD $ '+parseFloat(unifier_pres_anual).toFixed(2)+' MM');
          <?php endif;?>
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
        } else {
          $('#pres-anual-old').text('');
        }
        var unifier_proy_anual = this.proyeccionusd_2019;
        if (unifier_proy_anual != null) {
<<<<<<< HEAD
          $('#proy-anual-old').text('USD $ '+parseFloat(unifier_proy_anual).toFixed(2)+' MM');
=======
          <?php if ($array_project['child_eps_id'] == 34012): ?>
            $('#proy-anual-old').text('COP $ '+parseFloat(unifier_proy_anual).toFixed(2)+' MM');
          <?php else:?>
            $('#proy-anual-old').text('USD $ '+parseFloat(unifier_proy_anual).toFixed(2)+' MM');
          <?php endif;?>
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
        } else {
          $('#proy-anual-old').text('');
        }
        var unifier_var_anual = this.varacionusd_2019;
        if (unifier_var_anual != null) {
<<<<<<< HEAD
          $('#variacion-anual-old').text('USD $ '+parseFloat(unifier_var_anual).toFixed(2)+' MM');
=======
          <?php if ($array_project['child_eps_id'] == 34012): ?>
            $('#variacion-anual-old').text('COP $ '+parseFloat(unifier_var_anual).toFixed(2)+' MM');
          <?php else:?>
            $('#variacion-anual-old').text('USD $ '+parseFloat(unifier_var_anual).toFixed(2)+' MM');
          <?php endif;?>
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
        } else {
          $('#variacion-anual-old').text('');
        }
        var unifier_porc_anual = this.porcentajevausd_2019;
        if (unifier_porc_anual != null) {
          $('#porc-variacion-anual-old').text(parseFloat(unifier_porc_anual).toFixed(2)+'%');
        } else {
          $('#porc-variacion-anual-old').text('');
        }
        local_db_info([unifier_cpi_total, unifier_porc_total, unifier_cpi_anual, unifier_porc_anual, spi_value, select_value, chart_side]);
      });
    }
    function local_db_info(indicators_col_val){
    promise.then(function (result) {
      xhr2 = $.ajax({
          headers:{
            'X-CSRF-Token':csrfToken
          },
          method: "GET",
          dataType: "json",
          url: "<?php echo $this->Url->build(['controller'=>'Navbar','action'=>'local_profile']);?>",
          data: {project_id : result[0]},
          cache: true,
          beforeSend: function(xhr) {
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          },
          success: function(response){
            $.each(response, function() {
              $('#p-obj-est').text(this.Proj_Obj);
              $('#p-info-general').text(this.DESCRIPTION);
              $('#p-alcance').text(this.ALCANCE);
              $('#p-control-cambio').text(this.SOLICITUD);
              // Fopo
              var fopo_date = new Date(this.FOPO);
              var format_utc_date = fopo_date.getUTCDate() + " " + meses[fopo_date.getMonth()] + ", " + fopo_date.getUTCFullYear();
              $('#span-fopo').text('FoPo: '+format_utc_date);
              // Adjudicación
              var adj, format_adj_date;
              if (this.ADJUDICACION != null) {
                  var adj = new Date(this.ADJUDICACION);
                  var format_adj_date = adj.getUTCDate() + " " + meses[adj.getMonth()] + ", " + adj.getUTCFullYear();
                  $('#span-adj').text("Adjudicación: "+format_adj_date);
              } else {
                  $('#span-adj').text("Adjudicación: No aplica");
              }
              // if (this.CPI_DATE != null) {
              //   var cpi_date = new Date(this.CPI_DATE);
              //   var cpi_format_date = cpi_date.getUTCDate() + " " + meses[cpi_date.getMonth()] + ", " + cpi_date.getUTCFullYear();
              //   $('#span-cpi-date').text('Fecha CPI: '+cpi_format_date);
              // }
              if (this.IGR_DATE != null) {
                var igr_date = new Date(this.IGR_DATE);
                var igr_format_date = igr_date.getUTCDate() + " " + meses[igr_date.getMonth()] + ", " + igr_date.getUTCFullYear();
                $('#span-igr-date').text('Fecha IGR: '+igr_format_date);
              }
              if (this.IGR != null) {
                $('#igr-value-1').text('IGR '+this.IGR+'%');
                $('#igr-value-2').text('IGR '+this.IGR+'%');
                $('#igr-value-3').text('IGR '+this.IGR+'%');
              }
              if (this.FOTO != null && $('#mapa-img img').length == 0 && $('#mapa-img img').length <= 1) {
                $('#mapa-img').append($('<img>', {src : '/Portal-Web/img/maps/'+this.ID_PROJECT+'/'+this.FOTO}));
              }
              // Valves and towers
              if (this.DISTANCIA != null) {
                $('.long-distance').text(this.DISTANCIA+' Km');
              }
              if (this.LINEA_TRANS != null) {
                $('#lines-distance').text(this.LINEA_TRANS+' kV');
              }
              if (this.TORRE != null) {
                $('#towers-distance').text(this.TORRE+' Torres');
              }
              $('#ecg-value').text('No. '+this.LINEA_TRANS);
              if (this.TORRE != null) {
                $('#facilidades').text(this.TORRE+' Facilidades');
              }
              indicators_col_val.push(this.IGR);
              if (indicators_col_val[5] == 'actual' && indicators_col_val[6] == 'new') {
                ws_colors_new(indicators_col_val);
              } else if(indicators_col_val[5] == 'actual' && indicators_col_val[6] == 'old') {
                ws_colors_old(indicators_col_val);
              } else if(indicators_col_val[5] == 'all-select') {
                ws_colors_new(indicators_col_val);
                ws_colors_old(indicators_col_val);
              } else if(indicators_col_val[6] == 'new') {
                ws_colors_new(indicators_col_val);
              } else if(indicators_col_val[6] == 'old') {
                ws_colors_old(indicators_col_val);
              }
            });
          }
        });
    });
  }
  function ws_colors_new(indicators_col_val){
<<<<<<< HEAD
    var settings = {
        "async": true,
        "crossDomain": true,
        "url": "http://192.168.1.153:7001/ords/projects_portal/portal/range/list/",
=======
    // console.log(indicators_col_val);
    var settings = {
        "async": true,
        "crossDomain": true,
        "url": "http://192.168.0.210:8080/ords/portal/range/list/",
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
        "method": "GET",
        "headers": {
            "Authorization": "Bearer <?=$_SESSION["PortalToken"]?>"
        }
      }
      $.ajax(settings).done(function (response) {
        $.each(response.items, function() {
          // SPI
          if (indicators_col_val[4] != undefined) {
            if (indicators_col_val[4] != null && indicators_col_val[4] > this.minimun && indicators_col_val[4] <= this.maximo && this.indicator_name == 'SPI') {
                $('#spi-new').css({'background-color' : this.hexa_color});
            } else if (indicators_col_val[4] == null) {
                $('#spi-new').removeAttr('style');
            }
            // CPI TOTAL & ANUAL
            if (indicators_col_val[0] != null && indicators_col_val[0] > this.minimun && indicators_col_val[0] <= this.maximo && this.indicator_name == 'CPI') {
                $('#cpi-indicator-new').css({'background-color' : this.hexa_color});
            } else if (indicators_col_val[0] == null) {
                $('#cpi-indicator-new').removeAttr('style');
            }
            if (indicators_col_val[2] != null && indicators_col_val[2] > this.minimun && indicators_col_val[2] <= this.maximo && this.indicator_name == 'CPI') {
                $('#cpi-anual-indicator-new').css({'background-color' : this.hexa_color});
            } else if (indicators_col_val[2] == null) {
                $('#cpi-anual-indicator-new').removeAttr('style');
            }
            // PORCENTAJE PROYECTADO
            if (indicators_col_val[3] != null && indicators_col_val[3] < this.maximo && this.name_threshold == 'PI Baja') {
                $('#porcentaje-pr-anual-new').css({'background-color' : this.hexa_color});
            } else if (indicators_col_val[3] != null && indicators_col_val[3] == this.maximo && this.name_threshold == 'PI Media') {
                $('#porcentaje-pr-anual-new').css({'background-color' : this.hexa_color});
            } else if (indicators_col_val[3] != null && indicators_col_val[3] < this.maximo && indicators_col_val[3] > this.minimun && this.name_threshold == 'PI Alta') {
                $('#porcentaje-pr-anual-new').css({'background-color' : this.hexa_color});
            } else if (indicators_col_val[3] == null) {
                $('#porcentaje-pr-anual-new').removeAttr('style');
            }
            // PORCENTAJE PROYECTADO
            if (indicators_col_val[1] != null && indicators_col_val[1] < this.maximo && this.name_threshold == 'PI Baja') {
                $('#porcentaje-proy-new').css({'background-color' : this.hexa_color});
            } else if (indicators_col_val[1] != null && indicators_col_val[1] == this.maximo && this.name_threshold == 'PI Media') {
                $('#porcentaje-proy-new').css({'background-color' : this.hexa_color});
            } else if (indicators_col_val[1] != null && indicators_col_val[1] < this.maximo && indicators_col_val[1] > this.minimun && this.name_threshold == 'PI Alta') {
                $('#porcentaje-proy-new').css({'background-color' : this.hexa_color});
            } else if (indicators_col_val[1] == null) {
                $('#porcentaje-proy-new').removeAttr('style');
            }
            // IGR
            if (indicators_col_val[7] != null && indicators_col_val[7] != 'undefined' && (indicators_col_val[7]/100) > this.minimun && (indicators_col_val[7] / 100) <= this.maximo && this.indicator_name == 'IGR') {
              $('#igr-value-2').css({'background-color' : this.hexa_color});
              $('#igr-value-3').css({'background-color' : this.hexa_color});
            } else if (indicators_col_val[7] == null){
              $('#igr-value-2').removeAttr('style');
              $('#igr-value-3').removeAttr('style');
            }
          } else {
            if (indicators_col_val != null && indicators_col_val > this.minimun && indicators_col_val <= this.maximo && this.indicator_name == 'SPI') {
                $('#spi-new').css({'background-color' : this.hexa_color});
            } else if (indicators_col_val == null) {
                $('#spi-new').removeAttr('style');
            }
          }
        });
      });
  }
  function ws_colors_old(indicators_col_val){
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
          if (indicators_col_val[4] != undefined) {
            // SPI
            if (indicators_col_val[4] > this.minimun && indicators_col_val[4] <= this.maximo && this.indicator_name == 'SPI') {
                $('#spi-old-color').css({'background-color' : this.hexa_color});
            } else if (indicators_col_val[4] == null){
                $('#spi-old-color').removeAttr('style');
            }
            // CPI TOTAL & ANUAL
            if (indicators_col_val[0] != null && indicators_col_val[0] > this.minimun && indicators_col_val[0] <= this.maximo && this.indicator_name == 'CPI') {
                $('#cpi-indicator-old').css({'background-color' : this.hexa_color});
            } else if (indicators_col_val[0] == null){
                $('#cpi-indicator-old').removeAttr('style');
            }
            if (indicators_col_val[2] != null && indicators_col_val[2] > this.minimun && indicators_col_val[2] <= this.maximo && this.indicator_name == 'CPI') {
                $('#cpi-anual-indicator-old').css({'background-color' : this.hexa_color});
            } else if (indicators_col_val[2] == null){
                $('#cpi-anual-indicator-old').removeAttr('style');
            }
            // PORCENTAJE PROYECTADO
            if (indicators_col_val[1] < this.maximo && this.name_threshold == 'PI Baja') {
                $('#porcentaje-proy-old').css({'background-color' : this.hexa_color});
            } else if (indicators_col_val[1] == this.maximo && this.name_threshold == 'PI Media') {
                $('#porcentaje-proy-old').css({'background-color' : this.hexa_color});
            } else if (indicators_col_val[1] < this.maximo && indicators_col_val[1] > this.minimun && this.name_threshold == 'PI Alta') {
                $('#porcentaje-proy-old').css({'background-color' : this.hexa_color});
            } else if (indicators_col_val[1] == null){
                $('#porcentaje-proy-old').removeAttr('style');
            }
            // PORCENTAJE PROYECTADO
            if (indicators_col_val[3] < this.maximo && this.name_threshold == 'PI Baja') {
                $('#porcentaje-anual-old').css({'background-color' : this.hexa_color});
            } else if (indicators_col_val[3] == this.maximo && this.name_threshold == 'PI Media') {
                $('#porcentaje-anual-old').css({'background-color' : this.hexa_color});
            } else if (indicators_col_val[3] < this.maximo && indicators_col_val[3] > this.minimun && this.name_threshold == 'PI Alta') {
                $('#porcentaje-anual-old').css({'background-color' : this.hexa_color});
            } else if (indicators_col_val[3] == null){
                $('#porcentaje-anual-old').removeAttr('style');
            }
            // IGR
            if (indicators_col_val[7] != null && indicators_col_val[7] != 'undefined' && (indicators_col_val[7]/100) > this.minimun && (indicators_col_val[7] / 100) <= this.maximo && this.indicator_name == 'IGR') {
              $('#igr-value-1').css({'background-color' : this.hexa_color});
            } else if (indicators_col_val[7] == null){
              $('#igr-value-1').removeAttr('style');
            }
          }
          else {
            if (indicators_col_val > this.minimun && indicators_col_val <= this.maximo && this.indicator_name == 'SPI') {
                $('#spi-new').css({'background-color' : this.hexa_color});
            } else if (indicators_col_val == null){
                $('#spi-new').removeAttr('style');
            }
          }
        });
      });
  }
    // GRÁFICA DONA
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
          var select_date = new Date(this.date_h), minute_format;
          if (select_date.getUTCMinutes() == 0) {
            minute_format = select_date.getUTCMinutes()+''+0;
          } else {
            minute_format = select_date.getUTCMinutes();
          }
          var sel_format_date = select_date.getUTCDate() + " " + meses[select_date.getMonth()] + ", " + select_date.getUTCFullYear() + " T" + select_date.getUTCHours()+":"+minute_format;
          $('.select-compare-new').append(new Option(this.name+" - "+sel_format_date, this.p_historyc_id));
          $('.select-compare-new').formSelect();
          $('.select-compare-old').append(new Option(this.name+" - "+sel_format_date, this.p_historyc_id));
          $('.select-compare-old').formSelect();
      });
      }
    });
    // SELECT COMPARE
    promise.then(function (result) {
      $('#compare-select-new').change(function() {
          var period_select = $('#actual-select');
          period_select.prop('selectedIndex', 0); //Sets the first option as selected
          period_select.formSelect();
          var hitos_body = $('#hitos-body-new');
          $('#hitos-body-new td').remove();
          var div_wbs = $('#wbs-new');
          var selected_date_new = $(this).children(":selected").attr("value"), selected_value = $(this).children(":selected").text();
          if (selected_date_new == "actual") {
            info_actual_new();
            wbs_actual(result[1], 'new');
            $('#hitos-title-new').text('HITOS');
            hitos_actual(result[1], 'new');
            caf(result[1], 1, 'actual-select');
            actual_tg(result[1], result[4], selected_date_new, 'new');
            Unifier_information(result[1], 'actual', result[4], result[3], 'new');
          }else{
            option_compare_new_dates(result[1], selected_date_new, result[4], 'new');
            wbs_compare(result[1], selected_date_new, selected_value, div_wbs, 'new');
            advance_compare(result[1], selected_date_new, 'new');
            $('#hitos-title-new').text('HITOS '+$(this).children(":selected").text());
            hitos_compare(result[1], selected_date_new, hitos_body, 'new');
            curva_s_compare(result[1], selected_date_new, 1, 'new');
            compare_tg (result[1], selected_date_new, 'new', result[4]);
            // Unifier_information(result[1], selected_date_new, result[4], result[3], 'new');
          }
      });
        $('#compare-select-old').change(function() {
          var period_select = $('#old-select');
          period_select.prop('selectedIndex', 0); //Sets the first option as selected
          period_select.formSelect();
          var hitos_body = $('#hitos-body-old');
          $('#hitos-body-old td').remove();
          var div_wbs = $('#wbs-old');
          var selected_date_old = $(this).children(":selected").attr("value"), selected_value = $(this).children(":selected").text();
          if (selected_date_old == "actual") {
            info_actual_old();
            wbs_actual(result[1], 'old');
            $('#hitos-title-old').text('HITOS');
            hitos_actual(result[1], 'old');
            caf(result[1], 1, 'old-select');
            actual_tg(result[1], result[4], selected_date_old, 'old');
            Unifier_information(result[1], 'actual', result[4], result[3], 'old');
          }else{
            option_compare_old_dates(result[1], selected_date_old, result[4], 'old');
            wbs_compare(result[1], selected_date_old, selected_value, div_wbs, 'old');
            advance_compare(result[1], selected_date_old, 'old');
            $('#hitos-title-old').text('HITOS '+$(this).children(":selected").text());
            hitos_compare(result[1], selected_date_old, hitos_body, 'old');
            curva_s_compare(result[1], selected_date_old, 1, 'old');
            compare_tg (result[1], selected_date_old, 'old', result[4]);
            // Unifier_information(result[1], selected_date_old, result[4], result[3], 'old');
          }
        });
      });
      function option_compare_new_dates(id_project, selected_date, unifier_code, chart_side){
        var settings = {
            "async": true,
            "crossDomain": true,
<<<<<<< HEAD
            "url": "http://192.168.1.153:7001/ords/projects_portal/portal/captures/projects/?project_id="+id_project+"&capture_id="+selected_date,
=======
            "url": "http://192.168.0.210:8080/ords/portal/captures/projects/?project_id="+id_project+"&capture_id="+selected_date,
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
            "method": "GET",
            "headers": {
                "Authorization": "Bearer <?=$_SESSION["PortalToken"]?>"
            }
          }
          $.ajax(settings).done(function (response) {
            var spi_value = null;
            if (response.items.length > 0) {
              $.each(response.items, function() {
                  if (this.spi_labor_units != null) {
                    spi_value = this.spi_labor_units.toFixed(2);
                    $('#spi-indicator-new').text(spi_value);
                  } else {
                    $('#spi-indicator-new').text('');
                  }
                  <?php if ($array_project['code_1'] != 1921):?>
                    crono_indicators_new(this.da, this.fepo, this.od, this.pi);
                  <?php else:?>
                    crono_indicators_mec("new", selected_date);
                  <?php endif;?>
              });
              Unifier_information(id_project, selected_date, unifier_code, spi_value, chart_side);
            } else {
              $('#spi-new').removeAttr('style');
              $('#spi-indicator-new').text('');
              $('#fepo-new').text('');
              $('#pi-new').text('');
              $('#da-new').text('');
              $('#duration-total-new').text('');
            }
          });
        }
    // OLD
    function option_compare_old_dates(id_project, selected_date, unifier_code, chart_side){
      var settings = {
          "async": true,
          "crossDomain": true,
<<<<<<< HEAD
          "url": "http://192.168.1.153:7001/ords/projects_portal/portal/captures/projects/?project_id="+id_project+"&capture_id="+selected_date,
=======
          "url": "http://192.168.0.210:8080/ords/portal/captures/projects/?project_id="+id_project+"&capture_id="+selected_date,
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
          "method": "GET",
          "headers": {
              "Authorization": "Bearer <?=$_SESSION["PortalToken"]?>"
          }
        }
        $.ajax(settings).done(function (response) {
          var spi_value = null;
          if (response.items.length > 0) {
            $.each(response.items, function() {
              if (this.spi_labor_units != null) {
                spi_value = this.spi_labor_units.toFixed(2);
                $('#spi-old').text(spi_value);
              } else {
                $('#spi-old').text('');
              }
              <?php if ($array_project['code_1'] != 1921):?>
                crono_indicators_old(this.da, this.fepo, this.od, this.pi);
              <?php else:?>
                crono_indicators_mec("old", selected_date);
              <?php endif;?>
            });
            Unifier_information(id_project, selected_date, unifier_code, spi_value, chart_side);
          } else {
            $('#spi-old-color').removeAttr('style');
            $('#fepo-old').text('');
            $('#pi-old').text('');
            $('#variacion-est-old').text('');
            $('#spi-old').text('');
            $('#duracion-total-old').text('');
          }
        });
      }
      function crono_indicators_mec(compare_side, selected_date){
        promise.then(function (result) {
          var settings = {
              "async": true,
              "crossDomain": true,
<<<<<<< HEAD
              "url": "http://192.168.1.153:7001/ords/projects_portal/portal/captures/indicatorsbyproject/?project_id="+result[1]+"&capture_id="+selected_date,
=======
              "url": "http://192.168.0.210:8080/ords/portal/captures/indicatorsbyproject/?project_id="+result[1]+"&capture_id="+selected_date,
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
              "method": "GET",
              "headers": {
                  "Authorization": "Bearer <?=$_SESSION["PortalToken"]?>",
                  "cache-control": "no-cache"
              }
          }

          $.ajax(settings).done(function(response) {
            $.each(response.items, function() {
              if (compare_side == 'new') {
                  crono_indicators_new(this.da, this.fepo, this.od, this.pi);
              } else {
                  crono_indicators_old(this.da, this.fepo, this.od, this.pi);
              }
            });
          });
        });
      }
      function crono_indicators_new(da, fepo, od, pi) {
        $('#da-new').text(da);
        // Fepo indicator
        if (fepo != null) {
          var fepo_date = new Date(fepo);
          var fepo_format_date = fepo_date.getUTCDate() + " " + meses[fepo_date.getMonth()] + ", " + fepo_date.getUTCFullYear();
          $('#fepo-new').text(fepo_format_date);
        } else {
          $('#fepo-new').text('');
        }
        $('#duration-total-new').text(od);
        if (pi != null) {
          $('#pi-new').text(pi+"%");
        } else {
          $('#pi-new').text('');
        }
      }
      function crono_indicators_old(da, fepo, od, pi) {
          $('#variacion-est-old').text(da);
          // Fepo indicator
          if (fepo != null) {
              var fepo_date = new Date(fepo);
              var fepo_format_date = fepo_date.getUTCDate() + " " + meses[fepo_date.getMonth()] + ", " + fepo_date.getUTCFullYear();
              $('#fepo-old').text(fepo_format_date);
          }
          $('#duracion-total-old').text(od);
          if (pi != null) {
              $('#pi-old').text(pi + "%");
          } else {
              $('#pi-old').text('');
          }
      }
      promise.then(function (result) {
          wbs_actual(result[1], 'new');
          donut(result[1]);
          caf(result[1], 1, 'all-select');
          actual_tg(result[1], result[4], 'all', 'all-select');
          hitos_actual(result[1], 'new');
          Unifier_information(result[1], 'all-select', result[4], result[3], 'all');
      });

    // Porcentajes de avances
  function donut(result){
    var xhr_donut = $.ajax({
        headers:{
          'X-CSRF-Token':csrfToken
        },
        method: "GET",
        dataType: "json",
        url: "<?php echo $this->Url->build(['controller'=>'Navbar','action'=>'Donut']);?>",
        data: {id_p6 : result},
        cache: true,
        beforeSend: function(xhr) {
          xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        },
        success: function(response){
          $.each(response, function() {
            advance_chart(this.planeado, this.ejecutado);
            if (this.planeado != null) {
              $('#avance-plan-new').text(this.planeado+'%');
              $('#avance-plan-old').text(this.planeado+'%');
              $('#porcentaje-plan').text(this.planeado+'% Avance planeado');
            }
            if (this.ejecutado != null) {
              $('#avance-ejec-new').text(this.ejecutado+'%');
              $('#avance-ejec-old').text(this.ejecutado+'%');
              $('#porcentaje-ejec').text(this.ejecutado+'% Avance ejecutado');
            }
          });
        }
      });
    }
    promise.then(function (result) {
        $('#btn-compare').click(function() {
          var select_new = $('#compare-select-new');
          // var selected_date_old = $(this).children(":selected").attr("value");
          $("#form-select-new input").val("actual");
          select_new.prop('selectedIndex', 0); //Sets the first option as selected
          select_new.formSelect();
          info_actual_new();

          var select_old = $('#compare-select-old');
          $("#form-select-old input").val("actual");
          select_old.prop('selectedIndex', 0); //Sets the first option as selected
          select_old.formSelect();
          info_actual_old();

          var period_select = $('.period-select');
          period_select.prop('selectedIndex', 0); //Sets the first option as selected
          period_select.formSelect();

          $('#div-caf-new-box').show();
          $('#div-caf-new').show();
          $('#div-caf-old-box').show();
          $('#div-caf-old').show();

          wbs_actual(result[1], 'new');
          wbs_actual(result[1], 'old');

          hitos_actual(result[1], 'new');
          hitos_actual(result[1], 'old');

          caf(result[1], 1, 'actual-select');

          actual_tg(result[1], result[4], 'all', 'all-select');

          Unifier_information(result[1], 'all-select', result[4], result[3], 'all');
        });
    });
    promise.then(function (result) {
        var select_object = $('.period-select');
        select_object.change(function() {
          var selected_value = $(this).children(":selected").attr("value");
          if ($(this).attr('id') == 'actual-select') {
              new_compare_sel_value = $('#compare-select-new').children(":selected").attr("value");
              if (new_compare_sel_value != 'actual') {
                curva_s_compare(result[1], new_compare_sel_value, selected_value, 'new')
              } else {
                caf(result[1], selected_value, 'actual-select')
              }
          }
          else {
            old_compare_sel_value = $('#compare-select-old').children(":selected").attr("value");
            if (old_compare_sel_value != 'actual') {
              curva_s_compare(result[1], old_compare_sel_value, selected_value, 'old')
            } else {
              caf(result[1], selected_value, 'old-select')
            }
          }
       });
    });
    function caf(result, period_value, select_id){
        var settings = {
            "async": true,
            "crossDomain": true,
<<<<<<< HEAD
            "url": "http://192.168.1.153:7001/ords/projects_portal/portal/graph/data/?P_PROJECT_ID="+result+"&P_PERIOD_TYPE="+period_value,
=======
            "url": "http://192.168.0.210:8080/ords/portal/graph/data/?P_PROJECT_ID="+result+"&P_PERIOD_TYPE="+period_value,
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
            "method": "GET",
            "headers": {
                "Authorization": "Bearer <?=$_SESSION["PortalToken"]?>"
            }
          }
          $.ajax(settings).done(function (response) {
            var chart_value = [];
            $.each(response.items, function() {
                chart_value.push({
                  "date": this.start_date,
                  "column-3": parseFloat(this.cum_ac_lu).toFixed(4), //AC
                  "column-2": parseFloat(this.cum_ev_lu).toFixed(4), //EV
                  "column": parseFloat(this.cum_bl_lu).toFixed(4) //BL
                });
            });
            if (select_id == 'actual-select') {
              $('#div-caf-new-box').show();
              $('#div-caf-new').show();
              caf_chart(chart_value);
            } else if (select_id == 'all-select') {
              caf_chart(chart_value);
              caf_old_chart(chart_value);
            }
            else{
              $('#div-caf-old-box').show();
              $('#div-caf-old').show();
              caf_old_chart(chart_value);
            }
          });
        }
        function advance_chart(planeado, ejecutado){
          AmCharts.makeChart("advance",
            {
              "type": "gauge",
              "theme": "light",
              "language": "es",
              "axes": [
                  {
                      "axisAlpha": 0,
                      "tickAlpha": 0,
                      "labelsEnabled": false,
                      "startValue": 0,
                      "endValue": 100,
                      "startAngle": 0,
                      "endAngle": 360,
                      "bands": [
                          // Usuarios perdidos
                          {
                              "color": "#eee",
                              "startValue": 0,
                              "endValue": 100,
                              "radius": "100%",
                              "innerRadius": "70%",
                              "balloonText": "Avance planeado",
                          },
                          {
                              "color": "#A6CE39",
                              "startValue": 0,
                              "endValue": planeado,
                              "radius": "100%",
                              "innerRadius": "70%",
                              "balloonText": planeado+"% Avance planeado",
                          },
                          // Usuarios pagos
                          {
                              "color": "#E6E6E6",
                              "startValue": 0,
                              "endValue": 100,
                              "radius": "70%",
                              "innerRadius": "40%",
                              "balloonText": "Ejecutado",
                          },
                          {
                              "color": "#2CACE3",
                              "startValue": 0,
                              "endValue": ejecutado,
                              "radius": "70%",
                              "innerRadius": "40%",
                              "balloonText": ejecutado+"% Ejecutado",
                          },
                      ]
                  }
              ]
          }
       );
    }
    // Curva de avance físico
   function caf_chart(chart_values){
     var chart = AmCharts.makeChart("caf",{
               "type": "serial",
               "categoryField": "date",
               "dataDateFormat": "YYYY-MM-DD",
               "fontFamily": "'Open Sans'",
               "theme": "default",
               "language": "es",
               "categoryAxis": {
                   "equalSpacing": true,
                   "gridPosition": "start",
                   "minPeriod": "DD",
                   "parseDates": true,
                   "startOnAxis": true,
                   "axisAlpha": 0,
                   "gridAlpha": 0,
                   "labelOffset": -1

               },
               "chartCursor": {
                   "enabled": true,
                   "categoryBalloonDateFormat": "DD MMM YYYY",
                   "cursorColor": "#00A34B"
               },
               "chartScrollbar": {
                   "enabled": true,
                   "graph": "AmGraph-1",
                   "graphType": "line",
                   "gridCount": 7,
                   "offset": 40,
                   "oppositeAxis": false,
                   "scrollbarHeight": 40,
               },
               "trendLines": [],
               "graphs": [
                   {
                     "id": "AmGraph-1",
                     "lineColor": "#A6CE39",
                     "lineThickness": 5,
                     "title": "Planeado",
                     "valueField": "column"
                   },
                   {
                       "id": "AmGraph-2",
                       "lineColor": "#2CACE3",
                       "lineThickness": 5,
                       "title": "Ejecutado",
                       "valueField": "column-2"
                   },
                   {
                     "customBullet": "",
<<<<<<< HEAD
                     "dashLength": 7,
=======
                     // "dashLength": 7,
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
                     "id": "AmGraph-3",
                     "labelPosition": "right",
                     "labelText": "",
                     "lineColor": "#fc9219",
                     "lineThickness": 5,
                     "minBulletSize": 3,
                     "showAllValueLabels": true,
                     "title": "Estimado a completar",
                     "valueField": "column-3"
                   }
               ],
               "guides": [],
               "valueAxes": [
                   {
                       "id": "ValueAxis-1",
                       "minimum": 0,
                       "maximum": 100,
                       "totalText": "",
                       "unit": "%",
                       "axisAlpha": 0,
                       "gridAlpha": 0.06,
                       "title": ""
                   }
               ],
               "allLabels": [],
               "balloon": {},
               "legend": {
                   "enabled": true,
                   "autoMargins": false,
                   "marginRight": 0,
                   "markerSize": 15,
                   "fontSize": 13,
                   "position": "top",
                   "spacing": 16,
                   "useGraphSettings": true
               },
               "titles": [],
               "dataProvider": chart_values,
               "export": {
                   "enabled": true
               }
           }
       );
   }
  // CAF old
  function caf_old_chart(chart_values){
  var chart_old = AmCharts.makeChart("caf-old",{
            "type": "serial",
            "categoryField": "date",
            "dataDateFormat": "YYYY-MM-DD",
            "fontFamily": "'Open Sans'",
            "theme": "default",
            "language": "es",
            "categoryAxis": {
                "equalSpacing": true,
                "gridPosition": "start",
                "minPeriod": "DD",
                "parseDates": true,
                "startOnAxis": true,
                "axisAlpha": 0,
                "gridAlpha": 0,
                "labelOffset": -1

            },
            "chartCursor": {
                "enabled": true,
                "categoryBalloonDateFormat": "DD MMM YYYY",
                "cursorColor": "#00A34B"
            },
            "chartScrollbar": {
                "enabled": true,
                "graph": "AmGraph-1",
                "graphType": "line",
                "gridCount": 7,
                "offset": 40,
                "oppositeAxis": false,
                "scrollbarHeight": 40,
            },
            "trendLines": [],
            "graphs": [
                {
                  "id": "AmGraph-1",
                  "lineColor": "#A6CE39",
                  "lineThickness": 5,
                  "title": "Planeado",
                  "valueField": "column"
                },
                {
                    "id": "AmGraph-2",
                    "lineColor": "#2CACE3",
                    "lineThickness": 5,
                    "title": "Ejecutado",
                    "valueField": "column-2"
                },
                {
                  "customBullet": "",
                  "dashLength": 7,
                  "id": "AmGraph-3",
                  "labelPosition": "right",
                  "labelText": "",
                  "lineColor": "#fc9219",
                  "lineThickness": 5,
                  "minBulletSize": 3,
                  "showAllValueLabels": true,
                  "title": "Estimado a completar",
                  "valueField": "column-3"
                }
            ],
            "guides": [],
            "valueAxes": [
                {
                    "id": "ValueAxis-1",
                    "minimum": 0,
                    "maximum": 100,
                    "totalText": "",
                    "unit": "%",
                    "axisAlpha": 0,
                    "gridAlpha": 0.06,
                    "title": ""
                }
            ],
            "allLabels": [],
            "balloon": {},
            "legend": {
                "enabled": true,
                "autoMargins": false,
                "marginRight": 0,
                "markerSize": 15,
                "fontSize": 13,
                "position": "top",
                "spacing": 16,
                "useGraphSettings": true
            },
            "titles": [],
            "dataProvider": chart_values,
            "export": {
                "enabled": true
            }
        }
    );
  }
  function actual_tg(project_id, unifier_code, select_compare, select_side) {
      if (unifier_code != null) {
        var settings = {
            "async": true,
            "crossDomain": true,
<<<<<<< HEAD
            "url": "http://192.168.1.153:7001/ords/projects_portal/portal/indicatorscosts/curve3g/?p_project_id="+project_id,
=======
            "url": "http://192.168.0.210:8080/ords/portal/indicatorscosts/curve3g/?p_project_id="+project_id,
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
            "method": "GET",
            "headers": {
                "Authorization": "Bearer <?=$_SESSION["PortalToken"]?>"
            }
          }

          $.ajax(settings).done(function (response) {
            var chart_value = [];
            $.each(response.items, function() {
              var date_lenght = parseInt(this.periodo), planned_value_col, planned_value_ln, executed_value_col,
                  executed_value_ln, forecast_col, forecast_ln;
                if (isNaN(date_lenght)) {
                     planned_value_col = null,
                     planned_value_ln = this.acum_bl,
                     executed_value_col = null,
                     executed_value_ln = this.acum_ejec,
                     forecast_ln = this.acum_proy;
                } else {
                     planned_value_col = this.acum_bl,
                     planned_value_ln = null,
                     executed_value_col = this.acum_ejec,
                     executed_value_ln = null,
                     forecast_col = this.acum_proy,
                     forecast_ln = null;
                }
                chart_value.push({
                  "category": this.periodo,
                  "col-plannedAnnual": parseFloat(planned_value_col).toFixed(4),
                  "col-executedAnnual": parseFloat(executed_value_col).toFixed(4),
                  "col-executed": parseFloat(executed_value_ln).toFixed(4),
                  "col-forecast": parseFloat(forecast_ln).toFixed(4),
                  "col-planned": parseFloat(planned_value_ln).toFixed(4),
                });
            });
            if (select_compare == 'actual' && select_side == 'new') {
              if (chart_value.length > 0) {
                tg_chart(chart_value);
                $('#tg-div').show();
              }
              else
              {
                $('#tg-div').hide();
              }
            }
            if (select_compare == 'actual' && select_side == 'old') {
              if (chart_value.length > 0) {
                tg_chart_old(chart_value);
                $('#div-tg-old').show();
              }
              else
              {
                $('#div-tg-old').hide();
              }
            }
            if (select_compare == 'all' && select_side == 'all-select') {
              if (chart_value.length > 0) {
                tg_chart(chart_value);
                tg_chart_old(chart_value);
                $('#tg-div').show();
                $('#div-tg-old').show();
              }
              else
              {
                $('#tg-div').hide();
                $('#div-tg-old').hide();
              }
            }
         });
       }
    }
    function tg_chart(chart_tg_val){
      AmCharts.makeChart("tg",
          {
            "type": "serial",
            "categoryField": "category",
            "dataDateFormat": "YYYY-MM-DD",
            "sequencedAnimation": false,
            "startDuration": 1,
            "categoryAxis": {
                "autoRotateAngle": 90,
                "autoRotateCount": 12,
                "equalSpacing": true,
                "gridPosition": "start",
                "minPeriod": "MM",
                // "startOnAxis": true,
                "axisAlpha": 0,
                "fontSize": 10,
                "gridAlpha": 0,
                "ignoreAxisWidth": true,
                "titleBold": false
            },
            "chartCursor": {
                "enabled": true,
                "cursorColor": "#00A34B"
            },
            "chartScrollbar": {
                "enabled": true,
                "color": "#BBBBBB",
                "graphType": "line",
                "gridCount": 4,
                "offset": 60,
                "oppositeAxis": false,
                "scrollbarHeight": 40
            },
            "trendLines": [],
            "graphs": [
                {
                    "columnWidth": 0.67,
                    "fillAlphas": 1,
                    "id": "plannedAnnual",
                    "lineAlpha": 0,
                    "lineColor": "#2376BC",
                    "lineThickness": 0,
                    "title": "Planeado",
                    "type": "column",
                    "valueAxis": "ValueAxis-1",
                    "valueField": "col-plannedAnnual",
                    "xAxis": "ValueAxis-1",
                    "yAxis": "ValueAxis-1"
                },
                {
                    "columnWidth": 0.71,
                    "fillAlphas": 1,
                    "id": "executedAnnual",
                    "lineColor": "#FF8000",
                    "title": "Ejecutado",
                    "type": "column",
                    "valueAxis": "ValueAxis-1",
                    "valueField": "col-executedAnnual",
                    "xAxis": "ValueAxis-1",
                    "yAxis": "ValueAxis-1"
                },
                {
                    "dashLength": 4,
                    "id": "forecast",
                    "lineColor": "#4D91CE",
                    "lineThickness": 3,
                    "title": "Forecast",
                    "valueAxis": "ValueAxis-2",
                    "valueField": "col-forecast"
                },
                {
                    "fillColors": "undefined",
                    "id": "planned",
                    "lineColor": "#BBBBBB",
                    "lineThickness": 3,
                    "title": "Planeado",
                    "valueAxis": "ValueAxis-2",
                    "valueField": "col-planned"
                },
                {
                    "customMarker": "",
                    "id": "executed",
                    "lineColor": "#FBB800",
                    "lineThickness": 3,
                    "title": "Ejecutado",
                    "valueAxis": "ValueAxis-2",
                    "valueField": "col-executed",
                    "xAxis": "ValueAxis-2",
                    "yAxis": "ValueAxis-2"
                }
            ],
            "guides": [],
            "valueAxes": [
                {
                    "id": "ValueAxis-1",
                    "unit": "USD ",
                    "unitPosition": "left",
                    "axisAlpha": 0,
                    "fontSize": 10,
                    "gridAlpha": 0.05,
                    "title": "MILLONES",
                    "titleBold": false,
                    "titleFontSize": 10
                },
                {
                    "id": "ValueAxis-2",
                    "position": "right",
                    "unit": "USD ",
                    "unitPosition": "left",
                    "axisAlpha": 0,
                    "fontSize": 10,
                    "gridAlpha": 0,
                    "title": "MILLONES",
                    "titleBold": false,
                    "titleFontSize": 10
                }
            ],
            "allLabels": [],
            "balloon": {},
            "legend": {
                "enabled": true,
                "autoMargins": false,
                "marginRight": 0,
                "position": "top",
                "spacing": 16,
                "useGraphSettings": true
            },
            "titles": [],
            "dataProvider": chart_tg_val,
          }
      );
    }
    function tg_chart_old(chart_tg_val){
      AmCharts.makeChart("tg-old",
          {
            "type": "serial",
            "categoryField": "category",
            "dataDateFormat": "YYYY-MM-DD",
            "sequencedAnimation": false,
            "startDuration": 1,
            "categoryAxis": {
                "autoRotateAngle": 90,
                "autoRotateCount": 12,
                "equalSpacing": true,
                "gridPosition": "start",
                "minPeriod": "MM",
                // "startOnAxis": true,
                "axisAlpha": 0,
                "fontSize": 10,
                "gridAlpha": 0,
                "ignoreAxisWidth": true,
                "titleBold": false
            },
            "chartCursor": {
                "enabled": true,
                "cursorColor": "#00A34B"
            },
            "chartScrollbar": {
                "enabled": true,
                "color": "#BBBBBB",
                "graphType": "line",
                "gridCount": 4,
                "offset": 60,
                "oppositeAxis": false,
                "scrollbarHeight": 40
            },
            "trendLines": [],
            "graphs": [
                {
                    "columnWidth": 0.67,
                    "fillAlphas": 1,
                    "id": "plannedAnnual",
                    "lineAlpha": 0,
                    "lineColor": "#2376BC",
                    "lineThickness": 0,
                    "title": "Planeado",
                    "type": "column",
                    "valueAxis": "ValueAxis-1",
                    "valueField": "col-plannedAnnual",
                    "xAxis": "ValueAxis-1",
                    "yAxis": "ValueAxis-1"
                },
                {
                    "columnWidth": 0.71,
                    "fillAlphas": 1,
                    "id": "executedAnnual",
                    "lineColor": "#FF8000",
                    "title": "Ejecutado",
                    "type": "column",
                    "valueAxis": "ValueAxis-1",
                    "valueField": "col-executedAnnual",
                    "xAxis": "ValueAxis-1",
                    "yAxis": "ValueAxis-1"
                },
                {
                    "dashLength": 4,
                    "id": "forecast",
                    "lineColor": "#4D91CE",
                    "lineThickness": 3,
                    "title": "Forecast",
                    "valueAxis": "ValueAxis-2",
                    "valueField": "col-forecast"
                },
                {
                    "fillColors": "undefined",
                    "id": "planned",
                    "lineColor": "#BBBBBB",
                    "lineThickness": 3,
                    "title": "Planeado",
                    "valueAxis": "ValueAxis-2",
                    "valueField": "col-planned"
                },
                {
                    "customMarker": "",
                    "id": "executed",
                    "lineColor": "#FBB800",
                    "lineThickness": 3,
                    "title": "Ejecutado",
                    "valueAxis": "ValueAxis-2",
                    "valueField": "col-executed",
                    "xAxis": "ValueAxis-2",
                    "yAxis": "ValueAxis-2"
                }
            ],
            "guides": [],
            "valueAxes": [
                {
                    "id": "ValueAxis-1",
                    "unit": "USD ",
                    "unitPosition": "left",
                    "axisAlpha": 0,
                    "fontSize": 10,
                    "gridAlpha": 0.05,
                    "title": "MILLONES",
                    "titleBold": false,
                    "titleFontSize": 10
                },
                {
                    "id": "ValueAxis-2",
                    "position": "right",
                    "unit": "USD ",
                    "unitPosition": "left",
                    "axisAlpha": 0,
                    "fontSize": 10,
                    "gridAlpha": 0,
                    "title": "MILLONES",
                    "titleBold": false,
                    "titleFontSize": 10
                }
            ],
            "allLabels": [],
            "balloon": {},
            "legend": {
                "enabled": true,
                "autoMargins": false,
                "marginRight": 0,
                "position": "top",
                "spacing": 16,
                "useGraphSettings": true
            },
            "titles": [],
            "dataProvider": chart_tg_val,
          }
      );
    }
    $(document).ready(function(){
<<<<<<< HEAD
    var clean_rks = $('#clean-rks-filters'),e = $(".li-risks.info-actual"), estado_act = $('#estado_new'), materializado_act = $('#materializado_new'), estado_act = $('#estado_act'), materializado_act = $('#materializado_act') ,select_actual = $('.actual-rks-filter'), select_input = $('.form-select-actual input');
=======
    var clean_rks = $('#clean-rks-filters'),e = $(".li-risks.info-actual"), estado_act = $('#estado_new'),
        materializado_act = $('#materializado_new'), estado_act = $('#estado_act'), materializado_act = $('#materializado_act'),
        select_actual = $('.actual-rks-filter'), select_input = $('.form-select-actual input');
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
    select_actual.change(function() {
        var a = select_actual.children(":selected");
        if (e.show(), 0 != a.length) {
            var i = $.map(a, function(a) {
<<<<<<< HEAD
                return $(a).data("id")
=======
                return $(a).data("id");
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
            });
            if (estado_act.val() == 'all' && materializado_act.val() == 'all') {
              clean_rks.hide();
            } else {
              clean_rks.show();
            }
            a.each(function() {
                var t = $(this);
                if (t.val() != 'all') {
                  e.filter(function() {
                    clean_rks.show();
                    return i.indexOf($(this).data(t.data("type"))) < 0
                  }).hide()
                }
            })
          }
        });
        clean_rks.click(function(){
          e.show();
          clean_rks.hide();
          var select = select_actual;
          select_input.val("default");
          select.prop('selectedIndex', 0); //Sets the first option as selected
          select.formSelect();
        })
      });
      $(document).ready(function(){
      var clean_rks = $('#clean-new-rks-filters'),e = $(".li-risks.info-new"), estado_new = $('#estado_new'), materializado_new = $('#materializado_new'), select_new = $('.new-rks-filter'), select_input = $('#form-rks-new input');
      select_new.change(function() {
          var a = select_new.children(":selected");
          if (e.show(), 0 != a.length) {
              var i = $.map(a, function(a) {
                  return $(a).data("id")
              });
              if (estado_new.val() == 'all' && materializado_new.val() == 'all') {
                clean_rks.hide();
              } else {
                clean_rks.show();
              }
              a.each(function() {
                  var t = $(this);
                  if (t.val() != 'all') {
                    e.filter(function() {
                        clean_rks.show();
                        return i.indexOf($(this).data(t.data("type"))) < 0
                    }).hide()
                  }
              })
            }
          });
          clean_rks.click(function(){
            e.show();
            clean_rks.hide();
            var select = select_new;
            select_input.val("default");
            select.prop('selectedIndex', 0); //Sets the first option as selected
            select.formSelect();
          })
        });
        $(document).ready(function(){
        var clean_rks = $('#clean-old-rks-filters'),e = $(".li-risks.info-old"), estado_old = $('#estado_new'), materializado_old = $('#materializado_new'), select_old = $('.old-rks-filter'), select_input = $('#form-rks-old input');
        select_old.change(function() {
            var a = select_old.children(":selected");
            if (e.show(), 0 != a.length) {
                var i = $.map(a, function(a) {
                    return $(a).data("id")
                });
                if (estado_old.val() == 'all' && materializado_old.val() == 'all') {
                  clean_rks.hide();
                } else {
                  clean_rks.show();
                }
                a.each(function() {
                    var t = $(this);
                    if (t.val() != 'all') {
                      e.filter(function() {
                          clean_rks.show();
                          return i.indexOf($(this).data(t.data("type"))) < 0
                      }).hide()
                    }
                })
              }
            });
            clean_rks.click(function(){
              e.show();
              clean_rks.hide();
              var select = select_old;
              select_input.val("default");
              select.prop('selectedIndex', 0); //Sets the first option as selected
              select.formSelect();
            })
          });

          function info_actual_new(){
            xhr1 = $.ajax({
            headers:{
              'X-CSRF-Token':csrfToken
            },
            method: "GET",
            dataType: "json",
            url: "<?php echo $this->Url->build(['controller'=>'Navbar','action'=>'project_profile']);?>",
            data: {"project_id" : "<?=$project_id?>"},
            cache: true,
            beforeSend: function(xhr) {
              xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            },
            success: function(response){
              $.each(response, function() {
                // SPI indicator
                if (this.spi_labor_units != null) {
                  $('#spi-indicator-new').text(this.spi_labor_units.toFixed(2));
                }
                $('#avance-plan-new').text($('#porcentaje-plan').text().replace(' Avance planeado', ''));
                $('#avance-ejec-new').text($('#porcentaje-ejec').text().replace(' Avance ejecutado', ''));
                <?php if ($array_project['code_1'] != 1921):?>
                  crono_indicators_new(this.da, this.fepo, this.od, this.pi);
                <?php else:?>
                  crono_actual('new');
                <?php endif;?>
              });
            }
          });
        }
        function info_actual_old(){
          xhr1 = $.ajax({
          headers:{
            'X-CSRF-Token':csrfToken
          },
          method: "GET",
          dataType: "json",
          url: "<?php echo $this->Url->build(['controller'=>'Navbar','action'=>'project_profile']);?>",
          data: {"project_id" : "<?=$project_id?>"},
          cache: true,
          beforeSend: function(xhr) {
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          },
          success: function(response){
            $.each(response, function() {
              // SPI indicator
              $('#spi-old').text(this.spi_labor_units.toFixed(2));
              // PORCENTAJE PLANEADO Y EJECUTADO
              $('#avance-plan-old').text($('#porcentaje-plan').text().replace('Avance planeado', ''));
              $('#avance-ejec-old').text($('#porcentaje-ejec').text().replace('Avance ejecutado', ''));
              <?php if ($array_project['code_1'] != 1921):?>
                crono_indicators_old(this.da, this.fepo, this.od, this.pi);
              <?php else:?>
                crono_actual('old');
              <?php endif;?>
            });
          }
        });
      }
      // INDICADORES DE CRONOGRAMA ACTUALES FEPO, DURACIÓN, VARIACIÓN Y PORCENTAJE
      function crono_actual(compare_side){
        promise.then(function (result) {
          var settings = {
              "async": true,
              "crossDomain": true,
<<<<<<< HEAD
              "url": "http://192.168.1.153:7001/ords/projects_portal/portal/indicators/indicatorsbyproject/"+result[1],
=======
              "url": "http://192.168.0.210:8080/ords/portal/indicators/indicatorsbyproject/"+result[1],
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
              "method": "GET",
              "headers": {
                  "Authorization": "Bearer <?=$_SESSION["PortalToken"]?>",
                  "cache-control": "no-cache"
              }
          }

          $.ajax(settings).done(function(response) {
            $.each(response.items, function() {
              if (compare_side == 'new') {
                  crono_indicators_new(this.da, this.fepo, this.od, this.pi);
              } else {
                  crono_indicators_old(this.da, this.fepo, this.od, this.pi);
              }
            });
          });
        });
      }
      // HITOS ACTUAL
      function hitos_actual(id_project, compare_side){
        $('#hitos-title-'+compare_side).text('HITOS');
        $('#hitos-body-'+compare_side+' tr').remove();
        var settings = {
          "async": true,
          "crossDomain": true,
<<<<<<< HEAD
          "url": "http://192.168.1.153:7001/ords/projects_portal/activity/list/?v_project_id="+id_project,
=======
          "url": "http://primavera.eeb.com.co:8080/ords/portal/activity/list/?v_project_id="+id_project,
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
          "method": "GET",
          "headers": {
            "Authorization": "Bearer <?=$_SESSION["PortalToken"]?>",
            "cache-control": "no-cache"
          }
        }
        $.ajax(settings).done(function (response) {
          $.each(response.items, function(i) {
            // Format dates
            var bl_start_format = null;
            if (this.bl_start_date != null) {
              // BL START DATE
              var bl_start_date = new Date(this.bl_start_date);
              var bl_start_format = bl_start_date.getUTCDate() + " " + meses[bl_start_date.getMonth()] + ", " + bl_start_date.getUTCFullYear();
            }
            var bl_finish_format = null;
            if (this.bl_finish_date != null) {
              // BL FINISH DATE
              var bl_finish_date = new Date(this.bl_finish_date);
              var bl_finish_format = bl_finish_date.getUTCDate() + " " + meses[bl_finish_date.getMonth()] + ", " + bl_finish_date.getUTCFullYear();
            }
            var start_format = null;
            if (this.start_date != null) {
              // START DATE
              var start_date = new Date(this.start_date);
              var start_format = start_date.getUTCDate() + " " + meses[start_date.getMonth()] + ", " + start_date.getUTCFullYear();
            }
            var finish_format = null;
            if (this.finish_date != null) {
              // FINISH DATE
              var finish_date = new Date(this.finish_date);
              var finish_format = finish_date.getUTCDate() + " " + meses[finish_date.getMonth()] + ", " + finish_date.getUTCFullYear();
            }
            // APPEND HITOS
            if (this.nlu_percent_complete == '100') {
              var color_text_npc = 'primary-text';
            } else if (this.spc == '100') {
              var color_text_spc = 'primary-text';
            }
            $('#hitos-body-'+compare_side).append($('<tr>', {id : 'hito-tr-'+compare_side+'-'+i}));
              $('#hito-tr-'+compare_side+'-'+i).append($('<td>', {text : this.code_activity}))
              .append($('<td>', {text : this.name}))
              .append($('<td>', {text : this.spc, class : color_text_spc}))
              .append($('<td>', {text : this.nlu_percent_complete, class : color_text_npc}))
              .append($('<td>', {text : bl_start_format}))
              .append($('<td>', {text : bl_finish_format}))
              .append($('<td>', {text : start_format}))
              .append($('<td>', {text : finish_format}))
          });
        });
      }
      // WBS
      function wbs_actual(id_project, compare_side){
        $('#title-wbs-'+compare_side).text('ESTRUCTURA DE WBS');
        $('#wbs-'+compare_side+' li').remove();
        var settings = {
          "async": true,
          "crossDomain": true,
<<<<<<< HEAD
          "url": "http://192.168.1.153:7001/ords/projects_portal/wbs/list/?v_project="+id_project,
=======
          "url": "http://primavera.eeb.com.co:8080/ords/portal/wbs/list/?v_project="+id_project,
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
          "method": "GET",
          "headers": {
            "Authorization": "Bearer <?=$_SESSION["PortalToken"]?>",
            "cache-control": "no-cache"
          }
        }

        $.ajax(settings).done(function (response) {
<<<<<<< HEAD
=======
          // console.log(response);
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
          $.each(response.items, function(i) {
            if (this.level == 1) {
              $('#wbs-'+compare_side).append($('<li>', {id : 'li-'+compare_side+'-'+this.wbs_id}));
              $('#li-'+compare_side+'-'+this.wbs_id).append($('<div>', {id : 'div-'+compare_side+'-'+this.wbs_id, class : 'collapsible-header'}));
              if (this.connect_by_isleaf == 0) {
                $('#div-'+compare_side+'-'+this.wbs_id).append($('<i>', {class : 'material-icons', text : 'keyboard_arrow_down'}));
              } else {
                $('#div-'+compare_side+'-'+this.wbs_id).click(false);
              }
              $('#div-'+compare_side+'-'+this.wbs_id).append($('<ul>', {id : 'ul-'+compare_side+'-'+this.wbs_id, class : 'collapsible-header-content'}));
              // NAME
              $('#ul-'+compare_side+'-'+this.wbs_id).append($('<li>', {id : 'name-'+compare_side+'-'+this.wbs_id}));
              $('#name-'+compare_side+'-'+this.wbs_id).append($('<small>', {text : 'Nombre'}));
              $('#name-'+compare_side+'-'+this.wbs_id).append($('<h3>', {text : this.name}));
              // AVANCE % PLANEADO
              $('#ul-'+compare_side+'-'+this.wbs_id).append($('<li>', {id : 'plan-'+compare_side+'-'+this.wbs_id}));
              $('#plan-'+compare_side+'-'+this.wbs_id).append($('<small>', {text : 'Avance % Planeado'}));
              $('#plan-'+compare_side+'-'+this.wbs_id).append($('<h3>', {text : this['schedule percent complete']}));
              // AVANCE % REAL
              $('#ul-'+compare_side+'-'+this.wbs_id).append($('<li>', {id : 'real-'+compare_side+'-'+this.wbs_id}));
              $('#real-'+compare_side+'-'+this.wbs_id).append($('<small>', {text : 'Avance % Real'}));
              $('#real-'+compare_side+'-'+this.wbs_id).append($('<h3>', {text : this['nonlabor percent complete']}));
              // BL INICIO
              // var bl_start_format = null;
              $('#ul-'+compare_side+'-'+this.wbs_id).append($('<li>', {id : 'bl_inicio-'+compare_side+'-'+this.wbs_id}));
              $('#bl_inicio-'+compare_side+'-'+this.wbs_id).append($('<small>', {text : 'BL Inicio'}));
              if (this.bl_start_date != null) {
                var bl_start_date = new Date(this.bl_start_date);
                var bl_start_format = bl_start_date.getUTCDate() + " " + meses[bl_start_date.getMonth()] + ", " + bl_start_date.getUTCFullYear();
                $('#bl_inicio-'+compare_side+'-'+this.wbs_id).append($('<h3>', {text : bl_start_format}));
              }
              // BL FIN
              $('#ul-'+compare_side+'-'+this.wbs_id).append($('<li>', {id : 'bl_fin-'+compare_side+'-'+this.wbs_id}));
              $('#bl_fin-'+compare_side+'-'+this.wbs_id).append($('<small>', {text : 'BL Fin'}));
              if (this.bl_finish_daste != 'null') {
                var bl_finish_date = new Date(this.bl_finish_daste);
                var bl_finish_format = bl_finish_date.getUTCDate() + " " + meses[bl_finish_date.getMonth()] + ", " + bl_finish_date.getUTCFullYear();
                $('#bl_fin-'+compare_side+'-'+this.wbs_id).append($('<h3>', {text : bl_finish_format}));
              }
              // INICIO
              $('#ul-'+compare_side+'-'+this.wbs_id).append($('<li>', {id : 'inicio-'+compare_side+'-'+this.wbs_id}));
              $('#inicio-'+compare_side+'-'+this.wbs_id).append($('<small>', {text : 'Inicio'}));
              if (this.start_date != null) {
                var start_date = new Date(this.start_date);
                var start_format = start_date.getUTCDate() + " " + meses[start_date.getMonth()] + ", " + start_date.getUTCFullYear();
                $('#inicio-'+compare_side+'-'+this.wbs_id).append($('<h3>', {text : start_format}));
              }
              // FIN
              $('#ul-'+compare_side+'-'+this.wbs_id).append($('<li>', {id : 'fin-'+compare_side+'-'+this.wbs_id}));
              $('#fin-'+compare_side+'-'+this.wbs_id).append($('<small>', {text : 'Fin'}));
              if (this.finish_date != null) {
                var finish_date = new Date(this.finish_date);
                var finish_format = finish_date.getUTCDate() + " " + meses[finish_date.getMonth()] + ", " + finish_date.getUTCFullYear();
                $('#fin-'+compare_side+'-'+this.wbs_id).append($('<h3>', {text : finish_format}));
              }
              // SPI
              $('#ul-'+compare_side+'-'+this.wbs_id).append($('<li>', {id : 'spi-'+compare_side+'-'+this.wbs_id}));
              $('#spi-'+compare_side+'-'+this.wbs_id).append($('<small>', {text : 'SPI'}));
              $('#spi-'+compare_side+'-'+this.wbs_id).append($('<h3>', {text : this['spi_cost']}));
            }
              // CHILDRENS
              if (this.level != 1) {
                $('#div-'+compare_side+'-'+this.wbs_parent_id).after($('<div>', {id: 'div-child-'+compare_side+'-'+this.wbs_id, class : 'collapsible-body'}));
                $('#div-child-'+compare_side+'-'+this.wbs_id).append($('<ul>', {id: 'ul-'+compare_side+'-'+this.wbs_id, class : 'collapsible'}));
                $('#ul-'+compare_side+'-'+this.wbs_id).append($('<li>', {id : 'li-'+compare_side+'-'+this.wbs_id}));
                $('#li-'+compare_side+'-'+this.wbs_id).append($('<div>', {id : 'div-'+compare_side+'-'+this.wbs_id, class : 'collapsible-header'}));
                if (this.connect_by_isleaf == 0) {
                  $('#div-'+compare_side+'-'+this.wbs_id).append($('<i>', {class : 'material-icons', text : 'keyboard_arrow_down'}));
                } else {
                  $('#div-'+compare_side+'-'+this.wbs_id).click(false);
                }
                $('#div-'+compare_side+'-'+this.wbs_id).append($('<ul>', {id: 'ul-child-'+compare_side+'-'+this.wbs_id, class : 'collapsible-header-content'}));
                // NOMBRE
                $('#ul-child-'+compare_side+'-'+this.wbs_id).append($('<li>', {id: 'li-child-name-'+compare_side+'-'+this.wbs_id}));
                $('#li-child-name-'+compare_side+'-'+this.wbs_id).append($('<small>', {text : 'Nombre'}));
                $('#li-child-name-'+compare_side+'-'+this.wbs_id).append($('<h3>', {text : this.name}));
                // SCHEDULE % COMPLETE
                $('#ul-child-'+compare_side+'-'+this.wbs_id).append($('<li>', {id: 'li-child-plan-'+compare_side+'-'+this.wbs_id}));
                $('#li-child-plan-'+compare_side+'-'+this.wbs_id).append($('<small>', {text : 'Avance % Planeado'}));
                $('#li-child-plan-'+compare_side+'-'+this.wbs_id).append($('<h3>', {text : this['schedule percent complete']}));
                // NL UNITS % COMPLETE
                $('#ul-child-'+compare_side+'-'+this.wbs_id).append($('<li>', {id: 'li-child-real-'+compare_side+'-'+this.wbs_id}));
                $('#li-child-real-'+compare_side+'-'+this.wbs_id).append($('<small>', {text : 'Avance % Real'}));
                $('#li-child-real-'+compare_side+'-'+this.wbs_id).append($('<h3>', {text : this['nonlabor percent complete']}));
                // BL INICIO
                $('#ul-child-'+compare_side+'-'+this.wbs_id).append($('<li>', {id: 'li-child-bl-'+compare_side+'-'+this.wbs_id}));
                $('#li-child-bl-'+compare_side+'-'+this.wbs_id).append($('<small>', {text : 'BL Inicio'}));
                // FORMAT
                if (this.bl_start_date != null) {
                  var bl_start_date = new Date(this.bl_start_date);
                  var bl_start_format = bl_start_date.getUTCDate() + " " + meses[bl_start_date.getMonth()] + ", " + bl_start_date.getUTCFullYear();
                  $('#li-child-bl-'+compare_side+'-'+this.wbs_id).append($('<h3>', {text : bl_start_format}));
                }
                // BL FIN
                $('#ul-child-'+compare_side+'-'+this.wbs_id).append($('<li>', {id: 'li-child-fin-'+compare_side+'-'+this.wbs_id}));
                $('#li-child-fin-'+compare_side+'-'+this.wbs_id).append($('<small>', {text : 'BL Fin'}));
                // FORMAT
                if (this.bl_finish_daste != null) {
                  var bl_finish_date = new Date(this.bl_finish_daste);
                  var bl_finish_format = bl_finish_date.getUTCDate() + " " + meses[bl_finish_date.getMonth()] + ", " + bl_finish_date.getUTCFullYear();
                  $('#li-child-fin-'+compare_side+'-'+this.wbs_id).append($('<h3>', {text : bl_finish_format}));
                }
                // INICIO
                $('#ul-child-'+compare_side+'-'+this.wbs_id).append($('<li>', {id: 'li-child-start-'+compare_side+'-'+this.wbs_id}));
                $('#li-child-start-'+compare_side+'-'+this.wbs_id).append($('<small>', {text : 'Inicio'}));
                // FORMAT
                if (this.start_date != null) {
                  var start_date = new Date(this.start_date);
                  var start_format = start_date.getUTCDate() + " " + meses[start_date.getMonth()] + ", " + start_date.getUTCFullYear();
                  // APPEND DATE
                  $('#li-child-start-'+compare_side+'-'+this.wbs_id).append($('<h3>', {text : start_format}));
                }
                // FIN
                $('#ul-child-'+compare_side+'-'+this.wbs_id).append($('<li>', {id: 'li-child-finish-'+compare_side+'-'+this.wbs_id}));
                $('#li-child-finish-'+compare_side+'-'+this.wbs_id).append($('<small>', {text : 'Fin'}));
                // FORMAT
                if (this.finish_date != null) {
                  var finish_date = new Date(this.finish_date);
                  var finish_format = finish_date.getUTCDate() + " " + meses[finish_date.getMonth()] + ", " + finish_date.getUTCFullYear();
                  // APPEND DATE
                  $('#li-child-finish-'+compare_side+'-'+this.wbs_id).append($('<h3>', {text : finish_format}));
                }
                // SPI
                $('#ul-child-'+compare_side+'-'+this.wbs_id).append($('<li>', {id: 'li-child-spi-'+compare_side+'-'+this.wbs_id}));
                $('#li-child-spi-'+compare_side+'-'+this.wbs_id).append($('<small>', {text : 'SPI'}));
                $('#li-child-spi-'+compare_side+'-'+this.wbs_id).append($('<h3>', {text : this.spi_cost}));

            }
          });
          // JavaScript necesario para la función de acordeon
          var collapsible = document.querySelectorAll('.collapsible');
          var options = {
            accordion: function(){
              var carousel = document.querySelectorAll('.collapsible-header');
              var cInstances = M.Carousel.init(carousel,{
                indicators: true
              });
            }
          };
          var instances = M.Collapsible.init(collapsible, options);
        });
      }
      // COMPARE LOGIC
      // WBS COMPARE
      function wbs_compare(id_project, capture_id, capture_value, main_div, compare_side){
        $('#title-wbs-'+compare_side).text('ESTRUCTURA DE WBS '+capture_value);
        $('#wbs-'+compare_side+' li').remove();
        var settings = {
          "async": true,
          "crossDomain": true,
<<<<<<< HEAD
          "url": "http://192.168.1.153:7001/ords/projects_portal/captures/wbs/?id_project="+id_project+"&id_capture="+capture_id,
=======
          "url": "http://primavera.eeb.com.co:8080/ords/portal/captures/wbs/?id_project="+id_project+"&id_capture="+capture_id,
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
          "method": "GET",
          "headers": {
            "Authorization": "Bearer <?=$_SESSION["PortalToken"]?>",
            "cache-control": "no-cache"
          }
        }

        $.ajax(settings).done(function (response) {
<<<<<<< HEAD
=======
          // console.log(response);
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
          $.each(response.items, function() {
            if (this.level == 1) {
              main_div.append($('<li>', {id : 'li-'+compare_side+'-'+this.wbs_id}));
              $('#li-'+compare_side+'-'+this.wbs_id).append($('<div>', {id : 'div-'+compare_side+'-'+this.wbs_id, class : 'collapsible-header'}));
              if (this.connect_by_isleaf == 0) {
                $('#div-'+compare_side+'-'+this.wbs_id).append($('<i>', {class : 'material-icons', text : 'keyboard_arrow_down'}));
              } else {
                $('#div-'+compare_side+'-'+this.wbs_id).click(false);
              }
              $('#div-'+compare_side+'-'+this.wbs_id).append($('<ul>', {id : 'ul-'+compare_side+'-'+this.wbs_id, class : 'collapsible-header-content'}));
              // NAME
              $('#ul-'+compare_side+'-'+this.wbs_id).append($('<li>', {id : 'name-'+compare_side+'-'+this.wbs_id}));
              $('#name-'+compare_side+'-'+this.wbs_id).append($('<small>', {text : 'Nombre'}));
              $('#name-'+compare_side+'-'+this.wbs_id).append($('<h3>', {text : this.name}));
              // AVANCE % PLANEADO
              $('#ul-'+compare_side+'-'+this.wbs_id).append($('<li>', {id : 'plan-'+compare_side+'-'+this.wbs_id}));
              $('#plan-'+compare_side+'-'+this.wbs_id).append($('<small>', {text : 'Avance % Planeado'}));
              $('#plan-'+compare_side+'-'+this.wbs_id).append($('<h3>', {text : this['schedule percent complete']}));
              // AVANCE % REAL
              $('#ul-'+compare_side+'-'+this.wbs_id).append($('<li>', {id : 'real-'+compare_side+'-'+this.wbs_id}));
              $('#real-'+compare_side+'-'+this.wbs_id).append($('<small>', {text : 'Avance % Real'}));
              $('#real-'+compare_side+'-'+this.wbs_id).append($('<h3>', {text : this['nonlabor percent complete']}));
              // BL INICIO
              $('#ul-'+compare_side+'-'+this.wbs_id).append($('<li>', {id : 'bl_inicio-'+compare_side+'-'+this.wbs_id}));
              $('#bl_inicio-'+compare_side+'-'+this.wbs_id).append($('<small>', {text : 'BL Inicio'}));
              if (this.bl_start_date != null) {
                var bl_start_date = new Date(this.bl_start_date);
                var bl_start_format = bl_start_date.getUTCDate() + " " + meses[bl_start_date.getMonth()] + ", " + bl_start_date.getUTCFullYear();
                $('#bl_inicio-'+compare_side+'-'+this.wbs_id).append($('<h3>', {text : bl_start_format}));
              }
              // BL FIN
              $('#ul-'+compare_side+'-'+this.wbs_id).append($('<li>', {id : 'bl_fin-'+compare_side+'-'+this.wbs_id}));
              $('#bl_fin-'+compare_side+'-'+this.wbs_id).append($('<small>', {text : 'BL Fin'}));
              if (this.bl_finish_daste != null) {
                var bl_finish_date = new Date(this.bl_finish_daste);
                var bl_finish_format = bl_finish_date.getUTCDate() + " " + meses[bl_finish_date.getMonth()] + ", " + bl_finish_date.getUTCFullYear();
                $('#bl_fin-'+compare_side+'-'+this.wbs_id).append($('<h3>', {text : bl_finish_format}));
              }
              // INICIO
              $('#ul-'+compare_side+'-'+this.wbs_id).append($('<li>', {id : 'inicio-'+compare_side+'-'+this.wbs_id}));
              $('#inicio-'+compare_side+'-'+this.wbs_id).append($('<small>', {text : 'Inicio'}));
              if (this.start_date != null) {
                var start_date = new Date(this.start_date);
                var start_format = start_date.getUTCDate() + " " + meses[start_date.getMonth()] + ", " + start_date.getUTCFullYear();
                $('#inicio-'+compare_side+'-'+this.wbs_id).append($('<h3>', {text : start_format}));
              }
              // FIN
              $('#ul-'+compare_side+'-'+this.wbs_id).append($('<li>', {id : 'fin-'+compare_side+'-'+this.wbs_id}));
              $('#fin-'+compare_side+'-'+this.wbs_id).append($('<small>', {text : 'Fin'}));
              if (this.finish_date != null) {
                var finish_date = new Date(this.finish_date);
                var finish_format = finish_date.getUTCDate() + " " + meses[finish_date.getMonth()] + ", " + finish_date.getUTCFullYear();
                $('#fin-'+compare_side+'-'+this.wbs_id).append($('<h3>', {text : finish_format}));
              }
              // SPI
              $('#ul-'+compare_side+'-'+this.wbs_id).append($('<li>', {id : 'spi-'+compare_side+'-'+this.wbs_id}));
              $('#spi-'+compare_side+'-'+this.wbs_id).append($('<small>', {text : 'SPI'}));
              $('#spi-'+compare_side+'-'+this.wbs_id).append($('<h3>', {text : this['spi_cost']}));
            }
              // CHILDRENS
              if (this.level != 1) {
                $('#div-'+compare_side+'-'+this.wbs_parent_id).after($('<div>', {id: 'div-child-'+compare_side+'-'+this.wbs_id, class : 'collapsible-body'}));
                $('#div-child-'+compare_side+'-'+this.wbs_id).append($('<ul>', {id: 'ul-'+compare_side+'-'+this.wbs_id, class : 'collapsible'}));
                $('#ul-'+compare_side+'-'+this.wbs_id).append($('<li>', {id : 'li-'+compare_side+'-'+this.wbs_id}));
                $('#li-'+compare_side+'-'+this.wbs_id).append($('<div>', {id : 'div-'+compare_side+'-'+this.wbs_id, class : 'collapsible-header'}));
                if (this.connect_by_isleaf == 0) {
                  $('#div-'+compare_side+'-'+this.wbs_id).append($('<i>', {class : 'material-icons', text : 'keyboard_arrow_down'}));
                } else {
                  $('#div-'+compare_side+'-'+this.wbs_id).click(false);
                }
                $('#div-'+compare_side+'-'+this.wbs_id).append($('<ul>', {id: 'ul-child-'+compare_side+'-'+this.wbs_id, class : 'collapsible-header-content'}));
                // NOMBRE
                $('#ul-child-'+compare_side+'-'+this.wbs_id).append($('<li>', {id: 'li-child-name-'+compare_side+'-'+this.wbs_id}));
                $('#li-child-name-'+compare_side+'-'+this.wbs_id).append($('<small>', {text : 'Nombre'}));
                $('#li-child-name-'+compare_side+'-'+this.wbs_id).append($('<h3>', {text : this.name}));
                // SCHEDULE % COMPLETE
                $('#ul-child-'+compare_side+'-'+this.wbs_id).append($('<li>', {id: 'li-child-plan-'+compare_side+'-'+this.wbs_id}));
                $('#li-child-plan-'+compare_side+'-'+this.wbs_id).append($('<small>', {text : 'Avance % Planeado'}));
                $('#li-child-plan-'+compare_side+'-'+this.wbs_id).append($('<h3>', {text : this['schedule percent complete']}));
                // NL UNITS % COMPLETE
                $('#ul-child-'+compare_side+'-'+this.wbs_id).append($('<li>', {id: 'li-child-real-'+compare_side+'-'+this.wbs_id}));
                $('#li-child-real-'+compare_side+'-'+this.wbs_id).append($('<small>', {text : 'Avance % Real'}));
                $('#li-child-real-'+compare_side+'-'+this.wbs_id).append($('<h3>', {text : this['nonlabor percent complete']}));
                // BL INICIO
                $('#ul-child-'+compare_side+'-'+this.wbs_id).append($('<li>', {id: 'li-child-bl-'+compare_side+'-'+this.wbs_id}));
                $('#li-child-bl-'+compare_side+'-'+this.wbs_id).append($('<small>', {text : 'BL Inicio'}));
                // FORMAT
                if (this.bl_start_date != null) {
                  var bl_start_date = new Date(this.bl_start_date);
                  var bl_start_format = bl_start_date.getUTCDate() + " " + meses[bl_start_date.getMonth()] + ", " + bl_start_date.getUTCFullYear();
                  $('#li-child-bl-'+compare_side+'-'+this.wbs_id).append($('<h3>', {text : bl_start_format}));
                }
                // BL FIN
                $('#ul-child-'+compare_side+'-'+this.wbs_id).append($('<li>', {id: 'li-child-fin-'+compare_side+'-'+this.wbs_id}));
                $('#li-child-fin-'+compare_side+'-'+this.wbs_id).append($('<small>', {text : 'BL Fin'}));
                // FORMAT
                if (this.bl_finish_daste != null) {
                  var bl_finish_date = new Date(this.bl_finish_daste);
                  var bl_finish_format = bl_finish_date.getUTCDate() + " " + meses[bl_finish_date.getMonth()] + ", " + bl_finish_date.getUTCFullYear();
                  $('#li-child-fin-'+compare_side+'-'+this.wbs_id).append($('<h3>', {text : bl_finish_format}));
                }
                // INICIO
                $('#ul-child-'+compare_side+'-'+this.wbs_id).append($('<li>', {id: 'li-child-start-'+compare_side+'-'+this.wbs_id}));
                $('#li-child-start-'+compare_side+'-'+this.wbs_id).append($('<small>', {text : 'Inicio'}));
                // FORMAT
                if (this.start_date != null) {
                  var start_date = new Date(this.start_date);
                  var start_format = start_date.getUTCDate() + " " + meses[start_date.getMonth()] + ", " + start_date.getUTCFullYear();
                  // APPEND DATE
                  $('#li-child-start-'+compare_side+'-'+this.wbs_id).append($('<h3>', {text : start_format}));
                }
                // FIN
                $('#ul-child-'+compare_side+'-'+this.wbs_id).append($('<li>', {id: 'li-child-finish-'+compare_side+'-'+this.wbs_id}));
                $('#li-child-finish-'+compare_side+'-'+this.wbs_id).append($('<small>', {text : 'Fin'}));
                // FORMAT
                if (this.finish_date != null) {
                  var finish_date = new Date(this.finish_date);
                  var finish_format = finish_date.getUTCDate() + " " + meses[finish_date.getMonth()] + ", " + finish_date.getUTCFullYear();
                  // APPEND DATE
                  $('#li-child-finish-'+compare_side+'-'+this.wbs_id).append($('<h3>', {text : finish_format}));
                }
                // SPI
                $('#ul-child-'+compare_side+'-'+this.wbs_id).append($('<li>', {id: 'li-child-spi-'+compare_side+'-'+this.wbs_id}));
                $('#li-child-spi-'+compare_side+'-'+this.wbs_id).append($('<small>', {text : 'SPI'}));
                $('#li-child-spi-'+compare_side+'-'+this.wbs_id).append($('<h3>', {text : this.spi_cost}));

            }
          });
          // JavaScript necesario para la función de acordeon
          var collapsible = document.querySelectorAll('.collapsible');
          var options = {
            accordion: function(){
              var carousel = document.querySelectorAll('.collapsible-header');
              var cInstances = M.Carousel.init(carousel,{
                indicators: true
              });
            }
          };
          var instances = M.Collapsible.init(collapsible, options);
        });
      }
      // COMPARE - PORCENTAJE PLANEADO Y EJECUTADO
      function advance_compare(id_project, capture_id, chart_side){
        var settings = {
          "async": true,
          "crossDomain": true,
<<<<<<< HEAD
          "url": "http://192.168.1.153:7001/ords/projects_portal/portal/captures/projectpercent/?v_project_id="+id_project+"&v_historyc_id="+capture_id,
=======
          "url": "http://192.168.0.210:8080/ords/portal/captures/projectpercent/?v_project_id="+id_project+"&v_historyc_id="+capture_id,
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
          "method": "GET",
          "headers": {
            "Authorization": "Bearer <?=$_SESSION["PortalToken"]?>",
            "cache-control": "no-cache"
          }
        }
        $.ajax(settings).done(function (response) {
          if (response.items.length == 0 && chart_side == 'new') {
            $('#avance-plan-new').text('');
            $('#avance-ejec-new').text('');
          } else if (response.items.length == 0 && chart_side == 'old') {
            $('#avance-plan-old').text('');
            $('#avance-ejec-old').text('');
          }
          $.each(response.items, function() {
            if (chart_side == 'new') {
              if (this.planeado != null) {
                $('#avance-plan-new').text(this.planeado+'%');
              }
              else {
                $('#avance-plan-new').text('');
              }
              if (this.ejecutado != null) {
                $('#avance-ejec-new').text(this.ejecutado+'%');
              }
              else {
                $('#avance-ejec-new').text('');
              }
            }
            if (chart_side == 'old') {
              if (this.planeado != null) {
                $('#avance-plan-old').text(this.planeado+'%');
              } else {
                $('#avance-plan-old').text('');
              }
              if (this.ejecutado != null) {
                $('#avance-ejec-old').text(this.ejecutado+'%');
              } else {
                $('#avance-ejec-old').text('');
              }
            }
          });
        });
      }
<<<<<<< HEAD
      // HITOS COMAPARE
=======
      // HITOS COMPARE
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
      function hitos_compare(id_project, selected_date, hitos_body, select_compare){
        var settings = {
          "async": true,
          "crossDomain": true,
<<<<<<< HEAD
          "url": "http://192.168.1.153:7001/ords/projects_portal/portal/captures/milestone/?v_project_id="+id_project+"&v_capture_id="+selected_date,
=======
          "url": "http://192.168.0.210:8080/ords/portal/captures/milestone/?v_project_id="+id_project+"&v_capture_id="+selected_date,
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
          "method": "GET",
          "headers": {
            "Authorization": "Bearer <?=$_SESSION["PortalToken"]?>",
            "cache-control": "no-cache"
          }
        }
        $.ajax(settings).done(function (response) {
          $.each(response.items, function(i) {
            /* Format dates
            BL START DATE  */
            var bl_start_format = null;
            if (this.bl_start_date != null) {
              var bl_start_date = new Date(this.bl_start_date);
              var bl_start_format = bl_start_date.getUTCDate() + " " + meses[bl_start_date.getMonth()] + ", " + bl_start_date.getUTCFullYear();
            }
            // BL FINISH DATE
            var bl_finish_format = null;
            if (this.bl_finish_date != null) {
              var bl_finish_date = new Date(this.bl_finish_date);
              var bl_finish_format = bl_finish_date.getUTCDate() + " " + meses[bl_finish_date.getMonth()] + ", " + bl_finish_date.getUTCFullYear();
            }
            // START DATE
            var start_format = null;
            if (this.start_date != null) {
              var start_date = new Date(this.start_date);
              var start_format = start_date.getUTCDate() + " " + meses[start_date.getMonth()] + ", " + start_date.getUTCFullYear();
            }
            // FINISH DATE
            var finish_format = null;
            if (this.finish_date != null) {
              var finish_date = new Date(this.finish_date);
              var finish_format = finish_date.getUTCDate() + " " + meses[finish_date.getMonth()] + ", " + finish_date.getUTCFullYear();
            }
            // Color text
            if (this.nlu_percent_complete == '100') {
              var color_text_npc = 'primary-text';
            } else if (this.spc == '100') {
              var color_text_spc = 'primary-text';
            }
            // APPEND HITOS
            hitos_body.append($('<tr>', {id : select_compare+'-'+i}));
              $('#'+select_compare+'-'+i).append($('<td>', {text : this.code_activity}))
              .append($('<td>', {text : this.name}))
              .append($('<td>', {text : this.spc, class : color_text_spc}))
              .append($('<td>', {text : this.nlu_percent_complete, class : color_text_npc}))
              .append($('<td>', {text : bl_start_format}))
              .append($('<td>', {text : bl_finish_format}))
              .append($('<td>', {text : start_format}))
              .append($('<td>', {text : finish_format}))
          });
        });
      }
      // Curva S Compare
      function curva_s_compare(id_project, selected_date, period_type, chart_side){
        var settings = {
          "async": true,
          "crossDomain": true,
<<<<<<< HEAD
          "url": "http://192.168.1.153:7001/ords/projects_portal/captures/graph/?p_project_id="+id_project+"&p_period_type="+period_type+"&p_capture_id="+selected_date,
=======
          "url": "http://primavera.eeb.com.co:8080/ords/portal/captures/graph/?p_project_id="+id_project+"&p_period_type="+period_type+"&p_capture_id="+selected_date,
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
          "method": "GET",
          "headers": {
            "Authorization": "Bearer <?=$_SESSION["PortalToken"]?>",
            "cache-control": "no-cache"
          }
        }
        $.ajax(settings).done(function (response) {
          var chart_value = [];
          $.each(response.items, function() {
              chart_value.push({
                "date": this.start_date,
                "column-3": parseFloat(this.cum_ac_lu).toFixed(4), //AC
                "column-2": parseFloat(this.cum_ev_lu).toFixed(4), //EV
                "column": parseFloat(this.cum_bl_lu).toFixed(4) //BL
              });
          });
          if (chart_value.length > 0) {
            if (chart_side == 'new') {
              $('#div-caf-new-box').show();
              $('#div-caf-new').show();
              caf_chart(chart_value);
            }
            else{
              $('#div-caf-old-box').show();
              $('#div-caf-old').show();
              caf_old_chart(chart_value);
            }
          } else {
            if (chart_side == 'new') {
              $('#div-caf-new-box').hide();
              $('#div-caf-new').hide();
            } else {
              $('#div-caf-old-box').hide();
              $('#div-caf-old').hide();
            }
          }
        });
      }
      // Function que se encarga de los históricos de curva 3g
      function compare_tg (id_project, capture_id, chart_side, unifier_code) {
          if (unifier_code != null) {
            var settings = {
                "async": true,
                "crossDomain": true,
<<<<<<< HEAD
                "url": "http://192.168.1.153:7001/ords/projects_portal/portal/captures/curve3g/?p_project_id="+id_project+"&p_id_capture="+capture_id,
=======
                "url": "http://192.168.0.210:8080/ords/portal/captures/curve3g/?p_project_id="+id_project+"&p_id_capture="+capture_id,
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
                "method": "GET",
                "headers": {
                    "Authorization": "Bearer <?=$_SESSION["PortalToken"]?>"
                }
              }

              $.ajax(settings).done(function (response) {
                var chart_value = [];
                $.each(response.items, function() {
                  var date_lenght = parseInt(this.periodo), planned_value_col, planned_value_ln, executed_value_col,
                      executed_value_ln, forecast_col, forecast_ln;
                    if (isNaN(date_lenght)) {
                         planned_value_col = null,
                         planned_value_ln = this.acum_bl,
                         executed_value_col = null,
                         executed_value_ln = this.acum_ejec,
                         forecast_ln = this.acum_proy;
                    } else {
                         planned_value_col = this.acum_bl,
                         planned_value_ln = null,
                         executed_value_col = this.acum_ejec,
                         executed_value_ln = null,
                         forecast_col = this.acum_proy,
                         forecast_ln = null;
                    }
                    chart_value.push({
                      "category": this.periodo,
                      "col-plannedAnnual": parseFloat(planned_value_col).toFixed(4),
                      "col-executedAnnual": parseFloat(executed_value_col).toFixed(4),
                      "col-executed": parseFloat(executed_value_ln).toFixed(4),
                      "col-forecast": parseFloat(forecast_ln).toFixed(4),
                      "col-planned": parseFloat(planned_value_ln).toFixed(4),
                    });
                });
                if (chart_side == 'new') {
                  if (chart_value.length > 0) {
                    $('#tg-div').show();
                    tg_chart(chart_value);
                  }
                  else
                  {
                    $('#tg-div').hide();
                  }
                }
                if (chart_side == 'old') {
                  if (chart_value.length > 0) {
                    $('#div-tg-old').show();
                    tg_chart_old(chart_value);
                  }
                  else
                  {
                    $('#div-tg-old').hide();
                  }
                }
              });
            }
          }
<<<<<<< HEAD
          $( document ).ready(function() {
            var isMobile = window.matchMedia("(max-width: 760px)").matches;

            if (isMobile) {
              //Conditional script here
=======
          // $('#risk-tr span').hide();
          $( document ).ready(function() {
            var isMobile = window.matchMedia("(max-width: 760px)").matches;
            if (isMobile) {
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
              $('#btn-compare').hide();
            } else {
              $('#btn-compare').show();
            }
<<<<<<< HEAD
            // Ocultar riesgos post
=======
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
            $('.rks-post').hide();
            $('.modal-trigger.tooltipped').hover(function() {
                var rks_position = $(this).attr('data-code');
                $('#' + rks_position + '_risk').addClass('active');
                $('#' + rks_position + '_post').addClass('active').show();
                var rks_start = document.getElementById(rks_position + '_risk'),
                    rks_end = document.getElementById(rks_position + '_post');
                if (rks_end != null) {
                    var line = new LeaderLine(rks_start, rks_end, {
                        color: 'rgba(0, 0, 0)',
                        dash: {
                            animation: true
                        }
                    });
                    line.path = 'straight';
                    line.showEffectName = 'draw';
                }
            }, function() {
                line_exist = document.querySelector('.leader-line') !== null;
                if (line_exist) {
                    document.querySelector('.leader-line').remove();
                }
                var rks_position = $(this).attr('data-code');
                $('#' + rks_position + '_risk').removeClass('active');
                $('#' + rks_position + '_post').removeClass('active').hide();
            });
          });
</script>
