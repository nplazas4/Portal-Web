<?php
    // Breadcrumb
    $breadcrumb = [
      [ 'Inicio', 'home','Pages',''],
      [ 'Portal Proyectos','portalProjects','Projects','']
    ];
    $budgetIndicators = [
        'acPpto' => $projects->AC_PPTO, // AC/PPTO
        'ac' => $projects->AC, // AC
        'totalBudget' => $projects->PROJ_TOTAL_PRES, // Presupuesto total
        'forecastTotal' => $projects->TOTAL_FORECAST, // Forecast total

        'cpiAnnual' => $projects->CPI_ANUAL, // CPI Anual
        'acAnnual' => $projects->PROJ_AC, // AC Anual
        'pvAnnual' => $projects->PV, // PV Anual
        'annualBudget' => $projects->PRES_PROJ, // Presupuesto anual
        'annualForecast' => $projects->FORECAST_PROJ, // Forecast anual
    ];
?>
<script type="text/javascript">
$(document).ready(function(){
$("#button_caf_add").click(function(){
  var Column_Select_Caf_Value = $(".Select-Option-Column_Caf").children(":selected").attr("value");
  if ($(".Select-Option-Column_Caf").children(":selected").attr("value") != 0 && $(".Select-Option-Date_Caf").children(":selected").attr("value") != 0) {
      var Column_Select_Caf = $(".Select-Option-Column_Caf").children(":selected").html();
    if (!document.getElementsByClassName('ThCheckboxDinamicTitle'+Column_Select_Caf).length) {
      $('#id_table_caf thead tr').append('<th class="ThCheckboxDinamicTitle'+Column_Select_Caf+'"></th>');
      $('#id_table_caf thead tr>th:last').append('<label><input id="CheckboxDinamicTitle'+Column_Select_Caf+'" type="checkbox" onclick="load_Checkbox_Id(this);" class="filled-in" checked="checked" /><span style="font-size:11px">'+Column_Select_Caf+'</span></label>');
      // Columnas dinámicas - Revisar lógica para consumir WS
      <?php for ($i=0; $i<$cont; $i++): ?>
      $('#id_table_caf tbody tr:eq(<?=$i?>)').append('<td id="Dynamic-Td-Id-<?=$i?>" class="ThCheckboxDinamicTitle'+Column_Select_Caf+'"></td>');
        if(Column_Select_Caf_Value == 1){
          $('#id_table_caf tbody tr:eq(<?=$i?>)').each(function(){$(this).children('td:last').append('<input type="text" id="Dynamic-Input-Planeado-Id-<?=$i?>"  value="<?=$acJsonSnapshot[$i]?>"  class="CheckboxDinamicTitle'+Column_Select_Caf+'">')});
        }
        else if (Column_Select_Caf_Value == 2) {
          $('#id_table_caf tbody tr:eq(<?=$i?>)').each(function(){$(this).children('td:last').append('<input type="text" id="Dynamic-Input-Actual-Id-<?=$i?>"  value="<?=$evJsonSnapshot[$i]?>"  class="CheckboxDinamicTitle'+Column_Select_Caf+'">')});
        }
        else if (Column_Select_Caf_Value == 3) {
          $('#id_table_caf tbody tr:eq(<?=$i?>)').each(function(){$(this).children('td:last').append('<input type="text" id="Dynamic-Estimado-Input-Id-<?=$i?>"  value="<?=$blJsonSnapshot[$i]?>"  class="CheckboxDinamicTitle'+Column_Select_Caf+'">')});
        }
      <?php endfor;?>
    }
    else {
      document.getElementById("CheckboxDinamicTitle"+Column_Select_Caf).checked = true;
      $('.CheckboxDinamicTitle'+Column_Select_Caf).attr("disabled", false).show();
      $('.ThCheckboxDinamicTitle'+Column_Select_Caf).show();
    }
  }
  else {
    alert("Campo vacío.");
   }
  });
});
</script>
<script type="text/javascript" src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script type="text/javascript" src="https://www.amcharts.com/lib/3/serial.js"></script>
<script type="text/javascript" src="https://www.amcharts.com/lib/3/pie.js"></script>
<script type="text/javascript" src="https://www.amcharts.com/lib/3/gauge.js"></script>
<script src="https://www.amcharts.com/lib/3/lang/es.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
<script type="text/javascript">
// AmCharts.makeChart("advance",
//     {
//       "type": "pie",
//       "balloonText": "",
//       "labelText": "",
//       "titleField": "category",
//       "valueField": "column-1",
//       "minRadius": 80,
//       "autoResize": false,
//       "allLabels": [],
//       "balloon": {},
//       "titles": [],
//       "dataProvider": [
//         {
//           "category": "category 1",
//           "column-1": 8
//         },
//         {
//           "category": "category 2",
//           "column-1": 6
//         },
//         {
//           "category": "category 3",
//           "column-1": 2
//         }
//       ]
//     }
//   );
    // Porcentajes de avances
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
                            <?php if ($Plan == 100): ?>
                            <?php $PlanDec = $Plan ?>
                            <?php else: ?>
                            <?php $PlanDec = bcdiv($Plan, '1', 2);?>
                            <?php endif;?>
                            "color": "#A6CE39",
                            "startValue": 0,
                            <?php if ($code == $projects->ID_PROJECT && $Plan != 0): ?>
                            "endValue": <?=$PlanDec?>,
                            <?php else:?>
                            "endValue": <?=$projects->PLANNED?>,
                            <?php endif;?>
                            "radius": "100%",
                            "innerRadius": "70%",
                            <?php if ($code == $projects->ID_PROJECT && $Plan != 0): ?>
                            "balloonText": "<?=$PlanDec?>% Avance planeado",
                            <?php else:?>
                            "balloonText": "<?=$projects->PLANNED?>% Avance planeado",
                            <?php endif;?>
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
                            <?php $EjecDec = bcdiv($Ejec, '1', 2);?>
                            "color": "#2CACE3",
                            "startValue": 0,
                            <?php if ($code == $projects->ID_PROJECT && $Plan != 0): ?>
                            "endValue": <?=$EjecDec?>,
                            <?php else:?>
                            "endValue": <?=$projects->EXECUTED?>,
                            <?php endif;?>
                            "radius": "70%",
                            "innerRadius": "40%",
                            <?php if ($code == $projects->ID_PROJECT && $Plan != 0): ?>
                            "balloonText": "<?=$EjecDec?>% Ejecutado",
                            <?php else:?>
                            "balloonText": "<?=$projects->EXECUTED?>% Ejecutado",
                            <?php endif;?>
                        },
                    ]
                }
            ],
            // "export": {
            //     "enabled": false
            // }
        }
    );
    // Curva de avance físico
 function Chart_Caf(Grafica,DataProvider,Max_Number,Active_Chart) {
  var chart = AmCharts.makeChart("caf",{
            "type": "serial",
            "categoryField": "date",
            "dataDateFormat": "YYYY-MM-DD",
            "fontFamily": "'Open Sans'",
            "theme": "default",
            // "sequencedAnimation": true,
            // "startDuration": 1,
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
                "graph": Active_Chart,
                "graphType": "line",
                "gridCount": 7,
                "offset": 40,
                "oppositeAxis": false,
                "scrollbarHeight": 40,
            },
            "trendLines": [],
            "graphs":Grafica,
            "guides": [],
            "valueAxes": [
                {
                    "id": "ValueAxis-1",
                    "minimum": 0,
                    "maximum": Max_Number,
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
            "dataProvider": DataProvider,
            // [
            //     </?php for ($i=0; $i<$cont; $i++): ?>
            //     {
            //          </?php $blDec = bcdiv($blJson[$i], '1', 4);?>
            //          </?php $evDec = bcdiv($evJson[$i], '1', 4);?>
            //          </?php $acDec = bcdiv($acJson[$i], '1', 4);?>
            //          "date": "</?=$fecJson[$i]?>",
            //          "column-3": "</?=$acDec?>",
            //          </?php if (is_numeric($evJson[$i])):?>
            //          "column-2": "</?=$evDec?>",
            //          </?php else: ?>
            //          "column-2": null,
            //          </?php endif;?>
            //          "column": "</?=$blDec?>"
            //     },
            //       </?php endfor; ?>
            // ],
            "export": {
                "enabled": true,
                "exportTitles": true,
                "fileName": "<?=$name?>"
            }
        }
    );
  };

    if (<?=$longitudArrayDate?> != 0) {
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
                      "customMarker": "",
                      "id": "executed",
                      "lineColor": "#FBB800",
                      "lineThickness": 3,
                      "title": "Ejecutado",
                      "valueAxis": "ValueAxis-2",
                      "valueField": "col-executed",
                      "xAxis": "ValueAxis-2",
                      "yAxis": "ValueAxis-2"
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
              "dataProvider": [
                <?php for ($a=1; $a<=$longitudArrayDate; $a++): ?>
                {
                  <?php $excelEjecutadoDec = bcdiv($excelEjecutado[$a], '1', 4);?>
                  <?php $excelPlaneadoDec = bcdiv($excelPlaneado[$a], '1', 4);?>
                  <?php $excelProyectadoDec = bcdiv($excelProyectado[$a], '1', 4);?>
                    "category": "<?=$excelDate[$a]?>",
                  <?php if (strlen($excelDate[$a])<5):?>
                    "col-plannedAnnual": "<?=$excelPlaneadoDec?>",
                    "col-executedAnnual": "<?=$excelEjecutadoDec?>",
                    "col-executed": "null",
                    "col-forecast": "null",
                    "col-planned": "null"
                  <?php elseif (strlen($excelDate[$a])>4):?>
                    "col-plannedAnnual": "null",
                    "col-executedAnnual": "null",
                    <?php if (is_numeric($excelEjecutado[$a])):?>
                    "col-executed": "<?=$excelEjecutadoDec?>",
                    <?php else:?>
                    "col-executed": "null",
                    <?php endif;?>
                    <?php if (is_numeric($excelProyectado[$a])):?>
                    "col-forecast": "<?=$excelProyectadoDec?>",
                    <?php else:?>
                    "col-forecast": "null",
                    <?php endif;?>
                    "col-planned": "<?=$excelPlaneadoDec?>"
                  <?php endif;?>
                },
                <?php endfor; ?>
              ],
              "export": {
                  "enabled": true,
                  "exportTitles": true,
                  "fileName": "<?=$name?>"
              }
          }
      );
    }
</script>
<?php if ($code == $projects->ID_PROJECT && $spi != 0): ?>
  <?php $SPI = $spi;?>
<?php elseif ($projects->EXECUTED == null || $projects->PLANNED == null):?>
  <?php $SPI = 0?>
<?php else:?>
<?php $SPI = number_format($projects->EXECUTED/$projects->PLANNED, 2, '.', '');?>
<?php endif;?>
<div class="section bcrumb project">
  <div class="breadcrumb-container">
      <a href="javascript:history.back()" class="breadcrumb-back"><i class="material-icons">keyboard_arrow_left</i></a>
      <?php foreach ($breadcrumb as $item): ?>
          <!-- <a href="<//?= $item[1] ?>" class="breadcrumb"><//?= $item[0] ?></a> -->
          <?php echo $this->Html->link(
    $item[0],
    ['controller'=>$item[2], 'action'=>$item[1]],
    ['escape' => false,'class'=>'breadcrumb']
          );?>
        <?php endforeach; ?>
        <?php $Category = null;?>
        <?php $Categoria2 = 0;?>
          <?php if ($Categoria1 == 870):?>
          <?php $Category = "crecimiento";?>
          <?php $Categoria2 = 8996 ?>
        <?php elseif ($Categoria1 == 871):?>
          <?php $Category = "sostenimiento";?>
          <?php $Categoria2 = 8997 ?>
          <?php endif; ?>
          <?php if ($ActualEps != 23305): ?>
            <?php echo $this->Html->link(
              $titlePrjs,
              ['controller'=>'Projects', 'action'=>'companies',urlencode(base64_encode($idEpsParent)),urlencode(base64_encode($titlePrjs))],
              ['escape' => false,'class'=>'breadcrumb']
            );?>
          <?php endif;?>
          <?php if ($ActualEps != 34013 && $ActualEps != 34021 && $ActualEps != 34015 && $ActualEps != 34017): ?>
          <?php echo $this->Html->link(
                $NameEpsPrjs,
                ['controller'=>'Projects', 'action'=>'company',urlencode(base64_encode($current_user['V_ID_P_USER'])),urlencode(base64_encode($ActualEps)),urlencode(base64_encode($NameEpsPrjs)),urlencode(base64_encode($titlePrjs)),urlencode(base64_encode($idEpsParent))],
                ['escape' => false,'class'=>'breadcrumb']
          );?>
        <?php else:?>
          <?php echo $this->Html->link(
                $NameEpsPrjs,
                ['controller'=>'Projects', 'action'=>'companyGas',urlencode(base64_encode($current_user['V_ID_P_USER'])),urlencode(base64_encode($ActualEps)),urlencode(base64_encode($NameEpsPrjs)),urlencode(base64_encode($titlePrjs)),urlencode(base64_encode($idEpsParent))],
                ['escape' => false,'class'=>'breadcrumb']
          );?>
        <?php endif;?>
        <?php echo $this->Html->link(
              $Category,
              ['controller'=>'Projects', 'action'=>'projects',urlencode(base64_encode($current_user['V_ID_P_USER'])),urlencode(base64_encode($ActualEps)),urlencode(base64_encode($Categoria1)),urlencode(base64_encode($Categoria2)),urlencode(base64_encode($NameEpsPrjs)),urlencode(base64_encode($titlePrjs)),urlencode(base64_encode($idEpsParent))],
              ['escape' => false,'class'=>'breadcrumb']
        );?>
        <?php echo $this->Html->link(
            $projects->PROJECT_NAME,
            ['controller'=>'Projects', 'action'=>'project',$projects->id,$current_user_pr,urlencode(base64_encode($ActualEps)),urlencode(base64_encode($Categoria1)),urlencode(base64_encode($Categoria2)),urlencode(base64_encode($NameEpsPrjs)),urlencode(base64_encode($titlePrjs)),urlencode(base64_encode($idEpsParent)),urlencode(base64_encode($name)),$code,$spi,$corte,$graph],
            ['escape' => false,'class'=>'breadcrumb']
        );?>
    </div>
    <?php
    setlocale(LC_ALL, "es_ES");
    $FoPo = strftime("%d %B, %Y", strtotime($projects->FOPO));
    $FePo = strftime("%d %B, %Y", strtotime($projects->FEPO));
    $Adj = strftime("%d %B, %Y", strtotime($projects->ADJUDICACION));
    $Apr = strftime("%d %B, %Y", strtotime($projects->APROBACION));
    $n = intval($projects->FASE);
    $res = '';
    /*** Array con los numeros romanos  ***/
    $roman_numerals = array(
       'M'  => 1000,
       'CM' => 900,
       'D'  => 500,
       'CD' => 400,
       'C'  => 100,
       'XC' => 90,
       'L'  => 50,
       'XL' => 40,
       'X'  => 10,
       'IX' => 9,
       'V'  => 5,
       'IV' => 4,
       'I'  => 1);
    foreach ($roman_numerals as $roman => $number) {
        /*** Dividir para encontrar resultados en array ***/
        $matches = intval($n / $number);
        /*** Asignar el numero romano al resultado ***/
        $res .= str_repeat($roman, $matches);
        /*** Descontar el numero romano al total ***/
        $n = $n % $number;
    }
    ?>
    <sidebar class="project-sidebar">
        <?php if ($code == $projects->ID_PROJECT): ?>
          <h1><?=$name?></h1>
        <?php else: ?>
          <h1><?=$projects->PROJECT_NAME?></h1>
        <?php endif; ?>
        <div class="project-sidebar-phase phase" style="background-color:
            <?php foreach ($colorIndicator as $colorFase => $valueFase): ?>
              <?php if ($projects->FASE == $valueFase['minimun'] && $valueFase['indicator_name'] == 'FASE'):?>
                  <?php echo $valueFase['hexa_color'];?>
              <?php endif;?>
            <?php endforeach; ?>">
            <h2>Fase <?=$res?></h2>
        </div>
        <div class="project-sidebar-percentages">
            <div class="chart" id="advance"></div>
            <div class="legend">
              <?php if ($code == $projects->ID_PROJECT && $Plan != 0): ?>
                <h3 class="secondary-text"><?= $PlanDec ?>% Avance planeado</h3>
                <h3 class="accent-text"><?= $EjecDec ?>% Ejecutado</h3>
              <?php else:?>
                <h3 class="secondary-text"><?= $projects->PLANNED ?>% Avance planeado</h3>
                <h3 class="accent-text"><?= $projects->EXECUTED ?>% Ejecutado</h3>
              <?php endif;?>
            </div>
        </div>
        <div class="project-sidebar-info">
            <h2>Objetivo estratégico</h2>
            <p><?= $projects->Proj_Obj ?></p>
        </div>
        <div class="project-sidebar-info">
            <h2>Información general</h2>
            <p><?= $projects->DESCRIPTION ?></p>
        </div>
        <div class="project-sidebar-info">
            <h2>Alcance</h2>
            <p><?= $projects->ALCANCE ?></p>
        </div>
        <div class="project-sidebar-info">
            <h2>Controles de cambio</h2>
            <p><?= $projects->SOLICITUD ?></p>
        </div>
    </sidebar>

    <div class="project-content">
        <div class="indicators row wrap">
          <?= $this->Html->link($this->Html->tag('i','picture_as_pdf',['class'=>'material-icons tooltipped', 'data-position'=>'right','data-tooltip'=>'Descargar PDF']), ['action' => 'project', 'action'=>'project',$projects->id,$current_user_pr,urlencode(base64_encode($ActualEps)),urlencode(base64_encode($Categoria1)),urlencode(base64_encode($Categoria2)),urlencode(base64_encode($NameEpsPrjs)),urlencode(base64_encode($titlePrjs)),urlencode(base64_encode($idEpsParent)),urlencode(base64_encode($name)),$code,$spi,$corte,$graph , '_ext' => 'pdf'],['escape' => false, 'style'=>'margin-left:1%']); ?>
            <h2>Indicadores de cronograma</h2>
            <div class="d-flex col s12 m6 l4 xl3 tooltipped" data-position="bottom" data-tooltip="Resultado del cociente de Valor Ganado dividido para el Valor Presupuestado hasta la fecha">
                <div class="indicator type-1" style="background-color:
                    <?php foreach ($colorIndicator as $colorFase => $valueFase): ?>
                      <?php if ($SPI >= $valueFase['minimun'] && $SPI <= $valueFase['maximo'] && $valueFase['indicator_name'] == 'SPI'):?>
                          <?php echo $valueFase['hexa_color'];?>
                      <?php endif;?>
                    <?php endforeach; ?>">
                    <h3 class="mr-2">SPI</h3>
                    <h3 class="ml-auto"><?= $SPI ?></h3>
                </div>
            </div>
            <div class="d-flex col s12 m6 l4 xl3 tooltipped" data-position="bottom" data-tooltip="Porcentaje de avance planeado del proyecto.">
              <div class="indicator type-1 light-blue darken-2">
                  <h5 class="mr-2">PORCENTAJE <small>AVANCE PLANEADO</small></h5>
                  <?php if ($code == $projects->ID_PROJECT && $Plan != 0): ?>
                    <h3 class="ml-auto"><?= $PlanDec ?>%</h3>
                  <?php else:?>
                  <h3 class="ml-auto"><?= $projects->PLANNED ?>%</h3>
                <?php endif;?>
              </div>
            </div>
            <div class="d-flex col s12 m6 l4 xl3 tooltipped" data-position="bottom" data-tooltip="Porcentaje de avance ejecutado del proyecto.">
              <div class="indicator type-1 light-blue darken-3">
                  <h5 class="mr-2">PORCENTAJE <small>AVANCE EJECUTADO</small></h5>
                  <?php if ($code == $projects->ID_PROJECT && $Plan != 0): ?>
                    <h3 class="ml-auto"><?= $EjecDec ?>%</h3>
                  <?php else:?>
                  <h3 class="ml-auto"><?= $projects->EXECUTED ?>%</h3>
                <?php endif;?>
              </div>
            </div>
            <div class="d-flex col s12 m6 l4 xl3">
                <div class="indicator type-1 light-blue darken-2">
                    <h5 class="mr-2">FEPO</h5>
                    <?php if($projects->FEPO != null):?>
                      <h5 class="ml-auto right-align"><?= $FePo ?></h5>
                    <?php endif;?>
                </div>
            </div>
        </div>
        <div class="indicators row wrap mb-4">
            <h2 class="mb-2">Indicadores de presupuesto</h2>
            <h3>Total proyecto</h3>
            <div class="d-flex col s12 m6 l4 xl3 tooltipped" data-position="bottom" data-tooltip="Es la división entre el AC y el PPTO (AC/PPTO).">
                <a class="indicator type-1 secondary modal-trigger" href="#detailValueExecuted">
                    <h4 class="fw-600 mr-2">AC/PPTO</h4>
                    <h4 class="fw-600 ml-auto right-align"><?= $budgetIndicators['acPpto'] ?></h4>
                </a>
            </div>
            <div class="d-flex col s12 m6 l4 xl3 tooltipped" data-position="bottom" data-tooltip="Índice que representa el valor de dinero gastado, con base a la planeación.">
                <a class="indicator type-1 secondary modal-trigger" href="#detailValueExecuted">
                    <h4 class="fw-600 mr-2">AC</h4>
                    <?php if($projects->AC != null):?>
                      <h5 class="fw-600 ml-auto right-align">USD $ <?=number_format($projects->AC,2,",",".")?> MM</h5>
                    <?php endif;?>
                </a>
            </div>
            <div class="d-flex col s12 m6 l4 xl3 tooltipped" data-position="bottom" data-tooltip="índice que representa en dinero el presupuesto total del proyecto.">
                <a class="indicator type-2 secondary modal-trigger" href="#detailValueExecuted">
                    <h5 class="fw-600">PRESUPUESTO TOTAL</h5>
                    <?php if($budgetIndicators['totalBudget'] != null):?>
                      <h4 class="fw-600 right-align">USD $ <?= $budgetIndicators['totalBudget'] ?> MM</h4>
                    <?php else:?>
                      <h4 class="fw-600 right-align"></h4>
                    <?php endif;?>
                </a>
            </div>
            <div class="d-flex col s12 m6 l4 xl3 tooltipped" data-position="bottom" data-tooltip="Estimado presupuestal.">
                <a class="indicator type-2 secondary darken-1 modal-trigger" href="#detailValueExecuted">
                    <h5 class="fw-600">FORECAST TOTAL</h5>
                    <h4 class="fw-600 right-align"><?= number_format($budgetIndicators['forecastTotal'],2,",",".") ?> MM</h4>
                </a>
            </div>
            <h3 class="mt-3">Anual proyecto</h3>
            <div class="d-flex col s12 m6 l4 xl3 tooltipped" data-position="bottom" data-tooltip="Resultado del cociente del Valor Ganado dividido para el Costo Incurrido.">
                <a class="indicator type-1 secondary darken-1 modal-trigger" href="#detailValueExecuted">
                    <h4 class="fw-600 mr-2">CPI <small>ANUAL 2019</small></h4>
                    <h4 class="fw-600 ml-auto right-align"><?= $budgetIndicators['cpiAnnual'] ?></h4>
                </a>
            </div>
            <div class="d-flex col s12 m6 l4 xl3 tooltipped" data-position="bottom" data-tooltip="Índice que representa el valor de dinero gastado anualmente, con base a la planeación.">
                <a class="indicator type-1 secondary darken-1 modal-trigger" href="#detailValueExecuted">
                    <h4 class="fw-600 mr-2">AC <small>2019</small></h4>
                    <?php if($projects->PROJ_AC != null):?>
                        <h5 class="fw-600 ml-auto right-align">USD $ <?=number_format($projects->PROJ_AC,2,",",".")?> MM</h5>
                    <?php endif;?>
                </a>
            </div>
            <div class="d-flex col s12 m6 l4 xl3 tooltipped" data-position="bottom" data-tooltip="Valor planeado en un periodo.">
                <a class="indicator type-1 secondary darken-2 modal-trigger" href="#detailValueExecuted">
                    <h4 class="fw-600 mr-2">PV <small>2019</small></h4>
                    <?php if($projects->PV != null):?>
                      <h5 class="fw-600 ml-auto right-align">USD $ <?=number_format($projects->PV,2,",",".")?> MM</h5>
                    <?php endif;?>
                </a>
            </div>
            <div class="divider transparent"></div>
            <div class="d-flex col s12 m6 l4 xl3 tooltipped" data-position="bottom" data-tooltip="Presupuesto anual del proyecto.">
                <a class="indicator type-2 secondary darken-2 modal-trigger" href="#detailValueExecuted">
                    <h5 class="fw-600">PRESUPUESTO 2019</h5>
                    <h4 class="fw-600 right-align">USD $ <?= number_format($budgetIndicators['annualBudget'],2,",",".") ?> MM</h4>
                </a>
            </div>
            <div class="d-flex col s12 m6 l4 xl3 tooltipped" data-position="bottom" data-tooltip="Estimado de tiempo / costo en un tiempo determinado.">
                <a class="indicator type-2 secondary darken-2 modal-trigger" href="#detailValueExecuted">
                    <h5 class="fw-600">FORECAST 2019</h5>
                    <h4 class="fw-600 right-align">USD $ <?= number_format($budgetIndicators['annualForecast'],2,",",".") ?> MM</h4>
                </a>
            </div>
        </div>
        <?php if ($cont != 0): ?>
        <div class="chart" id="Input_Container">
          <div class="row" id="Container_Type_Color">
            <div class="input-field col s8 m6 l4 xl3">
              <select id="select-work" class="work-select">
                 <option class="work-option" value="3">Period type</option>
                 <option class="work-option" value="1">Día</option>
                 <option class="work-option" value="2">Semana</option>
                 <option class="work-option" value="3">Mes</option>
                 <option class="work-option" value="4">Trimestre</option>
                 <option class="work-option" value="5">Año</option>
              </select>
            </div>
            <div class="input-field col s8 m6 l4 xl3">
              <select id="select-work-column1" class="work-select-column1">
                 <option class="work-option-column1" value="line">Línea</option>
                 <option class="work-option-column1" value="column">Columna</option>
              </select>
              <input type="color" id="Id_Color_Column1" value="#A6CE39">
            </div>
            <div class="input-field col s8 m6 l4 xl3">
              <select id="select-work-column2" class="work-select-column2">
                 <option class="work-option-column2" value="line">Línea</option>
                 <option class="work-option-column2" value="column">Columna</option>
              </select>
              <input type="color" id="Id_Color_Column2" value="#2CACE3">
            </div>
            <div class="input-field col s8 m6 l4 xl3">
              <select id="select-work-column3" class="work-select-column3">
                 <option class="work-option-column3" value="line">Línea</option>
                 <option class="work-option-column3" value="column">Columna</option>
              </select>
              <input type="color" id="Id_Color_Column3" value="#fc9219">
            </div>
          </div>
            <div class="tt input-field col s8 m6 l4 xl3">
              <a id="button_caf"><i class="material-icons tooltipped" data-position="right" data-tooltip="Actualizar gráfica" onclick="return false;">refresh</i></a>
              <a id="button_caf_edit"><i class="material-icons tooltipped modal-trigger" href="#EditChart" data-position="right" data-tooltip="Editar" onclick="return false;">edit</i></a>
              <a id="Caf_Button_Excel"><i class="material-icons tooltipped" data-position="right" data-tooltip="Descargar Excel" onclick="return false;">file_download</i></a>
              <?php echo $this->Html->image('gif/download_excel.gif')?>
            </div>
        </div>
      <?php endif;?>
        <?php if ($cont != 0): ?>
        <div class="chart" id="div-gif" style="display:none">
          <div class="data-box ml-auto mr-auto">
              <?php echo $this->Html->image('gif/load.gif',array('id'=>'img-id'))?>
          </div>
        </div>
          <div id="idchart" class="chart">
              <h2>Curva de Avance Físico</h2>
              <div class="chart-content" id="caf"></div>
          </div>
        <?php endif;?>
        <?php if ($longitudArrayDate != 0):?>
          <div class="chart">
            <div class="row">
              <div class="input-field col s8 m6 l4 xl3">
                <select id="select-work-TG-column1" class="work-select-TG-column1">
                   <option class="work-option-TG-column1" value="column">Columna</option>
                   <option class="work-option-TG-column1" value="line">Línea</option>
                </select>
                <input type="color" id="Id_Color_TG_Column1" value="#2376BC">
              </div>
              <div class="input-field col s8 m6 l4 xl3">
                <select id="select-work-TG-column2" class="work-select-TG-column2">
                   <option class="work-option-TG-column2" value="column">Columna</option>
                   <option class="work-option-TG-column2" value="line">Línea</option>
                </select>
                <input type="color" id="Id_Color_TG_Column2" value="#FF8000">
              </div>
              <div class="input-field col s8 m6 l4 xl3">
                <select id="select-work-TG-column3" class="work-select-TG-column3">
                   <option class="work-option-TG-column3" value="line">Línea</option>
                   <option class="work-option-TG-column3" value="column">Columna</option>
                </select>
                <input type="color" id="Id_Color_TG_Column3" value="#FBB800">
              </div>
              <div class="input-field col s8 m6 l4 xl3">
                <select id="select-work-TG-column4" class="work-select-TG-column4">
                   <option class="work-option-TG-column4" value="line">Línea</option>
                   <option class="work-option-TG-column4" value="column">Columna</option>
                </select>
                <input type="color" id="Id_Color_TG_Column4" value="#4D91CE">
              </div>
              <div class="input-field col s8 m6 l4 xl3">
                <select id="select-work-TG-column5" class="work-select-TG-column5">
                   <option class="work-option-TG-column5" value="line">Línea</option>
                   <option class="work-option-TG-column5" value="column">Columna</option>
                </select>
                <input type="color" id="Id_Color_TG_Column5" value="#BBBBBB">
              </div>
            </div>
              <div class="input-field col s8 m6 l4 xl3">
                <a id="button_tg"><i class="material-icons tooltipped" data-position="right" data-tooltip="Actualizar gráfica" onclick="return false;">refresh</i></a>
                <a id="Tg_Button_Excel"><i class="material-icons tooltipped" data-position="right" data-tooltip="Descargar Excel" onclick="return false;">file_download</i></a>
                <?php echo $this->Html->image('gif/download_excel.gif')?>
              </div>
          </div>
          <div class="chart" id="div-gif-tg" style="display:none">
            <div class="data-box ml-auto mr-auto">
                <?php echo $this->Html->image('gif/load.gif',array('id'=>'img-id'))?>
            </div>
          </div>
          <div id="idchart-tg" class="chart">
              <h2>Tres Generaciones</h2>
              <div class="chart-content" id="tg" style="min-height: 475px;"></div>
          </div>
      <?php endif;?>
      <script>
      var csrfToken = <?= json_encode($this->request->getParam('_csrfToken')) ?>;
      </script>
      <script>
      var xhr = null;
      var xhr2 = null;
      var Column1_color = null;
      document.getElementById('Id_Color_Column1').onchange=function(){
        Column1_color = this.value;
      };
      var Column2_color = null;
      document.getElementById('Id_Color_Column2').onchange=function(){
        Column2_color = this.value;
      };
      var Column3_color = null;
      document.getElementById('Id_Color_Column3').onchange=function(){
        Column3_color = this.value;
      };
      $(document).ready(function() {
          $('.work-select').change(function() {
            var Chart_type = $(".work-select-graph").children(":selected").attr("value");
            var Column1_type = $(".work-select-column1").children(":selected").attr("value");
            var Column1_type = $(".work-select-column1").children(":selected").attr("value");
            var Column2_type = $(".work-select-column2").children(":selected").attr("value");
            var Column3_type = $(".work-select-column3").children(":selected").attr("value");
            // event.preventDefault();
              var xhr = $.ajax({
                  headers:{
                    'X-CSRF-Token':csrfToken
                  },
                  method: "POST",
                  url: "<?php echo $this->Url->build(['action'=>'ajaxchart']);?>",
                  data: {
                      workselected1: $(this).val(),
                      "work" : "<?php echo $graph; ?>",
                      chart: Chart_type,
                      Column1_Type: Column1_type,
                      Column2_Type: Column2_type,
                      Column3_Type: Column3_type,
                      Column1_Color: Column1_color,
                      Column2_Color: Column2_color,
                      Column3_Color: Column3_color
                  },
                    beforeSend: function() {
                      $('#div-gif').show();
                      $('#idchart').hide();
                  },
                  complete: function(){
                    $('#div-gif').hide();
                    $('#h2caf').hide();
                    $('#caf').hide();
                    $('#idchart').show();
                  },
                  success: function(data){
                      $("#idchart").html(data);
                      xhr.abort();
                  }
              });
          });
      });
      $(document).ready(function(){
        $("#button_caf").click(function(){
          var Period_type = $(".work-select").children(":selected").attr("value");
          var Chart_type = $(".work-select-graph").children(":selected").attr("value");
          var Column1_type = $(".work-select-column1").children(":selected").attr("value");
          var Column2_type = $(".work-select-column2").children(":selected").attr("value");
          var Column3_type = $(".work-select-column3").children(":selected").attr("value");
          $.ajax({
            headers:{
              'X-CSRF-Token':csrfToken
            },
            method: "POST",
            url: "<?php echo $this->Url->build(['action'=>'ajaxchart']);?>",
            data: {
                workselected1: Period_type,
                "work" : "<?php echo $graph; ?>",
                chart: Chart_type,
                Column1_Type: Column1_type,
                Column2_Type: Column2_type,
                Column3_Type: Column3_type,
                Column1_Color: Column1_color,
                Column2_Color: Column2_color,
                Column3_Color: Column3_color
          },
              beforeSend: function() {
                $('#div-gif').show();
                $('#idchart').hide();
            },
            complete: function(){
              $('#div-gif').hide();
              $('#caf').hide();
              $('#idchart').show();
            },
            success: function(data){
                $("#idchart").html(data);
            }
          });
        });
      });
      var Column1_TG_color = null;
      document.getElementById('Id_Color_TG_Column1').onchange=function(){
        Column1_TG_color = this.value;
      };
      var Column2_TG_color = null;
      document.getElementById('Id_Color_TG_Column2').onchange=function(){
        Column2_TG_color = this.value;
      };
      var Column3_TG_color = null;
      document.getElementById('Id_Color_TG_Column3').onchange=function(){
        Column3_TG_color = this.value;
      };
      var Column4_TG_color = null;
      document.getElementById('Id_Color_TG_Column4').onchange=function(){
        Column4_TG_color = this.value;
      };
      var Column5_TG_color = null;
      document.getElementById('Id_Color_TG_Column5').onchange=function(){
        Column5_TG_color = this.value;
      };
      // Botón carga de gráfica de tres Generaciones.
      $(document).ready(function(){
        $("#button_tg").click(function(){
          var Column1_TG_type = $(".work-select-TG-column1").children(":selected").attr("value");
          var Column2_TG_type = $(".work-select-TG-column2").children(":selected").attr("value");
          var Column3_TG_type = $(".work-select-TG-column3").children(":selected").attr("value");
          var Column4_TG_type = $(".work-select-TG-column4").children(":selected").attr("value");
          var Column5_TG_type = $(".work-select-TG-column5").children(":selected").attr("value");
          $.ajax({
            headers:{
              'X-CSRF-Token':csrfToken
            },
            method: "POST",
            url: "<?php echo $this->Url->build(['action'=>'ajaxchartTg']);?>",
            data: {
                "Project_Code" : "<?php echo $code; ?>",
                "Project_Excel": "<?php echo $projects->CHART; ?>",
                Column1_TG_Type: Column1_TG_type,
                Column2_TG_Type: Column2_TG_type,
                Column3_TG_Type: Column3_TG_type,
                Column4_TG_Type: Column4_TG_type,
                Column5_TG_Type: Column5_TG_type,
                Column1_TG_Color: Column1_TG_color,
                Column2_TG_Color: Column2_TG_color,
                Column3_TG_Color: Column3_TG_color,
                Column4_TG_Color: Column4_TG_color,
                Column5_TG_Color: Column5_TG_color
          },
              beforeSend: function() {
                $('#div-gif-tg').show();
                $('#idchart-tg').hide();
            },
            complete: function(){
              $('#div-gif-tg').hide();
              $('#tg').hide();
              $('#idchart-tg').show();
            },
            success: function(data){
                $("#idchart-tg").html(data);
            }
          });
        });
      });
      function Import_Caf_Excel(Grafica){
        $('#Caf_Button_Excel').click(function() {
          // event.preventDefault();
            var xhr2 = $.ajax({
                headers:{
                  'X-CSRF-Token':csrfToken
                },
                method: "POST",
                url: "<?php echo $this->Url->build(['action'=>'ImportExcelCaf']);?>",
                async: false,
                data: {
                    Info_Grafica: Grafica,
                    Name: "<?=$name?>",
                    Id: "<?=$code?>"
                },
                //   beforeSend: function() {
                // },
                // complete: function(){
                // },
                success: function(data){
                    // xhr2.abort();
                    window.location.href = "/Portal-Web/<?=$name?>_Curva_S.xlsx";
                }
            });
            xhr_delete = $.ajax({
            headers:{
              'X-CSRF-Token':csrfToken
            },
            url: "<?php echo $this->Url->build(['action'=>'DeleteExcelFile']);?>",
            method: "POST",
            data: {Name: "<?=$name?>_Curva_S.xlsx"},
            dataType: 'json',
            success: function (data) {
               // alert("Eliminado");
            }
          });
          xhr_delete.abort();
        }).delay(400);
      };
      $(document).ready(function(){
          $('#Tg_Button_Excel').click(function() {
            // event.preventDefault();
              var xhr2 = $.ajax({
                  headers:{
                    'X-CSRF-Token':csrfToken
                  },
                  method: "POST",
                  url: "<?php echo $this->Url->build(['action'=>'ImportExcelTg']);?>",
                  data: {
                      Info_Grafica_Date: <?= json_encode($excelDate)?>,
                      Info_Grafica_Proyectado: <?= json_encode($excelProyectado)?>,
                      Info_Grafica_Planeado: <?= json_encode($excelPlaneado)?>,
                      Info_Grafica_Ejecutado: <?= json_encode($excelEjecutado)?>,
                      Name: "<?=$name?>",
                      Id: "<?=$code?>"
                  },
                  //   beforeSend: function() {
                  // },
                  // complete: function(){
                  // },
                  success: function(data){
                      // xhr2.abort();
                      window.location.href = "/Portal-Web/<?=$name?>_Curva_Tg.xlsx";
                  }
              });
              delete_TG();
          }).delay(400);
      });
      function delete_TG(){
        xhr_delete_tg = $.ajax({
        url: "<?php echo $this->Url->build(['action'=>'DeleteExcelFile']);?>",
        headers:{
          'X-CSRF-Token':csrfToken
        },
        method: "POST",
        data: {Name: "<?=$name?>_Curva_Tg.xlsx"},
        dataType: 'json',
        success: function (data) {
           // alert("Eliminado");
        }
      });
      xhr_delete_tg.abort();
      }
      </script>
        <div class="chart">
            <h2>Riesgos</h2>
            <div class="chart-risk">
              <?php if($ActualEps == 34013 || $projects->EPS_REL == 34013 || $ActualEps == 34021 || $projects->EPS_REL == 34021
              || $ActualEps == 34015 || $projects->EPS_REL == 34015 || $ActualEps == 34017 || $projects->EPS_REL == 34017):?>
              <div class="indicators row">
                  <div class="ml-3 col s12 m12 l12 xl6">
                      <a class="indicator type-1 secondary">
                        <?php if($projects->IGR != null):?>
                          <h4 class="fw-600 ml-auto mr-auto">IGR <?= $projects->IGR ?>%</h4>
                        <?php else:?>
                          <h4 class="fw-600 ml-auto mr-auto">IGR</h4>
                        <?php endif;?>
                      </a>
                  </div>
                </div>
              <?php endif;?>
                <div class="chart-risk-list">
                    <ul>
                        <?php foreach ($rks as $rk): ?>
                          <?php  if ($rk->PROJECT_CODE == $projects->id):?>
                            <li>
                               <a href=<?='#'.$rk->id?> class="modal-trigger tooltipped" data-position="bottom" data-tooltip="<?=$rk->RISK_NAME?>">Riesgo <?=$rk->RISK_NUMBER?></a>
                            </li>
                          <?php endif;?>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="heatmap">
                    <table>
                        <tr>
                            <th class="title" rowspan="5"><h3 class="vert">Probabilidad</h3></th>
                            <th>MA</th>
                            <td class="yellow">
                                <?php foreach ($rks as $rk):
                                  if ($rk->PROJECT_CODE == $projects->id) {
                                      if ($rk->IMPACT == 1 && $rk->PROBABILITY == 5) {
                                          echo '<span>' .$rk->RISK_NUMBER. '</span>';
                                      };
                                  };
                                endforeach; ?>
                            </td>
                            <td class="yellow">
                                <?php foreach ($rks as $rk):
                                  if ($rk->PROJECT_CODE == $projects->id) {
                                      if ($rk->IMPACT == 2 && $rk->PROBABILITY == 5) {
                                          echo '<span>' .$rk->RISK_NUMBER. '</span>';
                                      };
                                  };
                                endforeach; ?>
                            </td>
                            <td class="orange">
                                <?php foreach ($rks as $rk):
                                  if ($rk->PROJECT_CODE == $projects->id) {
                                      if ($rk->IMPACT == 3 && $rk->PROBABILITY == 5) {
                                          echo '<span>' .$rk->RISK_NUMBER. '</span>';
                                      };
                                  };
                                endforeach; ?>
                            </td>
                            <td class="red">
                                <?php foreach ($rks as $rk):
                                  if ($rk->PROJECT_CODE == $projects->id) {
                                      if ($rk->IMPACT == 4 && $rk->PROBABILITY == 5) {
                                          echo '<span>' .$rk->RISK_NUMBER. '</span>';
                                      };
                                  };
                                endforeach; ?>
                            </td>
                            <td class="red">
                                <?php foreach ($rks as $rk):
                                  if ($rk->PROJECT_CODE == $projects->id) {
                                      if ($rk->IMPACT == 5 && $rk->PROBABILITY == 5) {
                                          echo '<span>' .$rk->RISK_NUMBER. '</span>';
                                      };
                                  };
                                endforeach; ?>
                            </td>
                        </tr>
                        <tr>
                            <th>A</th>
                            <td class="yellow">
                                <?php foreach ($rks as $rk):
                                  if ($rk->PROJECT_CODE == $projects->id) {
                                      if ($rk->IMPACT == 1 &&  $rk->PROBABILITY == 4) {
                                          echo '<span>' .$rk->RISK_NUMBER. '</span>';
                                      };
                                  };
                                endforeach; ?>
                            </td>
                            <td class="yellow">
                              <?php foreach ($rks as $rk):
                                if ($rk->PROJECT_CODE == $projects->id) {
                                    if ($rk->IMPACT == 2 && $rk->PROBABILITY == 4) {
                                        echo '<span>' .$rk->RISK_NUMBER. '</span>';
                                    };
                                };
                                endforeach; ?>
                            </td>
                            <td class="orange">
                                <?php foreach ($rks as $rk):
                                  if ($rk->PROJECT_CODE == $projects->id) {
                                      if ($rk->IMPACT == 3 && $rk->PROBABILITY == 4) {
                                          echo '<span>' .$rk->RISK_NUMBER. '</span>';
                                      };
                                  };
                                endforeach; ?>
                            </td>
                            <td class="orange">
                                <?php foreach ($rks as $rk):
                                  if ($rk->PROJECT_CODE == $projects->id) {
                                      if ($rk->IMPACT == 4 && $rk->PROBABILITY == 4) {
                                          echo '<span>' .$rk->RISK_NUMBER. '</span>';
                                      };
                                  };
                                endforeach; ?>
                            </td>
                            <td class="red">
                                <?php foreach ($rks as $rk):
                                  if ($rk->PROJECT_CODE == $projects->id) {
                                      if ($rk->IMPACT == 5 && $rk->PROBABILITY == 4) {
                                          echo '<span>' .$rk->RISK_NUMBER. '</span>';
                                      };
                                  };
                                endforeach; ?>
                            </td>
                        </tr>
                        <tr>
                            <th>M</th>
                            <td class="lime accent-4">
                                <?php foreach ($rks as $rk):
                                  if ($rk->PROJECT_CODE == $projects->id) {
                                      if ($rk->IMPACT == 1 && $rk->PROBABILITY == 3) {
                                          echo '<span>' .$rk->RISK_NUMBER. '</span>';
                                      };
                                  };
                                endforeach; ?>
                            </td>
                            <td class="yellow">
                                <?php foreach ($rks as $rk):
                                  if ($rk->PROJECT_CODE == $projects->id) {
                                      if ($rk->IMPACT == 2 && $rk->PROBABILITY == 3) {
                                          echo '<span>' .$rk->RISK_NUMBER. '</span>';
                                      };
                                  };
                                endforeach; ?>
                            </td>
                            <td class="yellow">
                                <?php foreach ($rks as $rk):
                                  if ($rk->PROJECT_CODE == $projects->id) {
                                      if ($rk->IMPACT == 3 && $rk->PROBABILITY == 3) {
                                          echo '<span>' .$rk->RISK_NUMBER. '</span>';
                                      };
                                  };
                                endforeach; ?>
                            </td>
                            <td class="orange">
                                <?php foreach ($rks as $rk):
                                  if ($rk->PROJECT_CODE == $projects->id) {
                                      if ($rk->IMPACT == 4 && $rk->PROBABILITY == 3) {
                                          echo '<span>' .$rk->RISK_NUMBER. '</span>';
                                      };
                                  };
                                endforeach; ?>
                            </td>
                            <td class="orange">
                                <?php foreach ($rks as $rk):
                                  if ($rk->PROJECT_CODE == $projects->id) {
                                      if ($rk->IMPACT == 5 && $rk->PROBABILITY == 3) {
                                          echo '<span>' .$rk->RISK_NUMBER. '</span>';
                                      };
                                  };
                                endforeach; ?>
                            </td>
                        </tr>
                        <tr>
                            <th>B</th>
                            <td class="lime accent-4">
                                <?php foreach ($rks as $rk):
                                  if ($rk->PROJECT_CODE == $projects->id) {
                                      if ($rk->IMPACT == 1 && $rk->PROBABILITY == 2) {
                                          echo '<span>' .$rk->RISK_NUMBER. '</span>';
                                      };
                                  };
                                endforeach; ?>
                            </td>
                            <td class="lime accent-4">
                                <?php foreach ($rks as $rk):
                                  if ($rk->PROJECT_CODE == $projects->id) {
                                      if ($rk->IMPACT == 2 && $rk->PROBABILITY == 2) {
                                          echo '<span>' .$rk->RISK_NUMBER. '</span>';
                                      };
                                  };
                                endforeach; ?>
                            </td>
                            <td class="yellow">
                                <?php foreach ($rks as $rk):
                                  if ($rk->PROJECT_CODE == $projects->id) {
                                      if ($rk->IMPACT == 3 && $rk->PROBABILITY == 2) {
                                          echo '<span>' .$rk->RISK_NUMBER. '</span>';
                                      };
                                  };
                                endforeach; ?>
                            </td>
                            <td class="yellow">
                                <?php foreach ($rks as $rk):
                                  if ($rk->PROJECT_CODE == $projects->id) {
                                      if ($rk->IMPACT == 4 && $rk->PROBABILITY == 2) {
                                          echo '<span>' .$rk->RISK_NUMBER. '</span>';
                                      };
                                  };
                                endforeach; ?>
                            </td>
                            <td class="yellow">
                                <?php foreach ($rks as $rk):
                                  if ($rk->PROJECT_CODE == $projects->id) {
                                      if ($rk->IMPACT == 5 && $rk->PROBABILITY == 2) {
                                          echo '<span>' .$rk->RISK_NUMBER. '</span>';
                                      };
                                  };
                                endforeach; ?>
                            </td>
                        </tr>
                        <tr>
                            <th>MB</th>
                            <td class="lime accent-4">
                                <?php foreach ($rks as $rk):
                                  if ($rk->PROJECT_CODE == $projects->id) {
                                      if ($rk->IMPACT == 1 && $rk->PROBABILITY == 1) {
                                          echo '<span>' .$rk->RISK_NUMBER. '</span>';
                                      };
                                  };
                                endforeach; ?>
                            </td>
                            <td class="lime accent-4">
                                <?php foreach ($rks as $rk):
                                  if ($rk->PROJECT_CODE == $projects->id) {
                                      if ($rk->IMPACT == 2 && $rk->PROBABILITY == 1) {
                                          echo '<span>' .$rk->RISK_NUMBER. '</span>';
                                      };
                                  };
                                endforeach; ?>
                            </td>
                            <td class="lime accent-4">
                                <?php foreach ($rks as $rk):
                                  if ($rk->PROJECT_CODE == $projects->id) {
                                      if ($rk->IMPACT == 3 && $rk->PROBABILITY == 1) {
                                          echo '<span>' .$rk->RISK_NUMBER. '</span>';
                                      };
                                  };
                                endforeach; ?>
                            </td>
                            <td class="lime accent-4">
                                <?php foreach ($rks as $rk):
                                  if ($rk->PROJECT_CODE == $projects->id) {
                                      if ($rk->IMPACT == 4 && $rk->PROBABILITY == 1) {
                                          echo '<span>' .$rk->RISK_NUMBER. '</span>';
                                      };
                                  };
                                endforeach; ?>
                            </td>
                            <td class="yellow">
                                <?php foreach ($rks as $rk):
                                  if ($rk->PROJECT_CODE == $projects->id) {
                                      if ($rk->IMPACT == 5 && $rk->PROBABILITY == 1) {
                                          echo '<span>' .$rk->RISK_NUMBER. '</span>';
                                      };
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
        <!-- IMPORTANTE CAMBIOS SOLICITADOS -->
          <div class="data">
            <?php if ($ActualEps != 34013 && $projects->EPS_REL != 34013 && $ActualEps != 34021 && $projects->EPS_REL != 34021
                      && $ActualEps != 34015 && $projects->EPS_REL != 34015 && $ActualEps != 34017 && $projects->EPS_REL != 34017):?>
              <div class="data-distance2">
                  <?= $this->Html->image('icons/torre-blanca.svg') ?>
                  <div class="data-distance2-content">
                      <h2>Longitud</h2>
                      <h3><?= $projects->DISTANCIA ?> Km</h3>
                      <div class="line-distance"></div>
                      <h4>de líneas de transmisión de</h4>
                      <h5><?= $projects->LINEA_TRANS ?>kV</h5>
                      <div class="divider white mt-3 mb-1"></div>
                      <h6><?= $projects->TORRE ?> Torres</h6>
                  </div>
                  <?= $this->Html->image('icons/torre-blanca.svg') ?>
              </div>
            <?php else:?>
              <div class="data-distance">
                  <figure class="data-distance-valve start">
                      <?= $this->Html->image('icons/valvula-izq.svg') ?>
                  </figure>
                  <div class="data-distance-content">
                    <h2>Longitud</h2>
                    <h3><?= $projects->DISTANCIA ?> Km</h3>
                    <div class="line-distance"></div>
                    <h4>ECG</h4>
                    <h5>No. <?= $projects->LINEA_TRANS ?></h5>
                    <div class="divider white mt-3 mb-1"></div>
                    <h6><?= $projects->TORRE ?> Facilidades</h6>
                  </div>
                  <figure class="data-distance-valve end">
                      <?= $this->Html->image('icons/valvula-der.svg') ?>
                  </figure>
              </div>
            <?php endif;?>
          </div>
          <div class="map">
              <?= $this->Html->image('maps/'.$projects->ID_PROJECT.'/'.$projects->FOTO) ?>
          </div>
          <div class="data">
              <div class="data-content">
                  <ul>
                      <li>
                          <i class="material-icons">event</i>
                          <?php if($projects->FOPO != null):?>
                            <span>FoPo: <?= $FoPo ?></span>
                          <?php else:?>
                            <span>FoPo:</span>
                          <?php endif;?>
                      </li>
                      <?php if ($projects->ADJUDICACION != null):?>
                      <li>
                          <i class="material-icons">event_note</i>
                          <span>Adjudicación: <?= $Adj ?></span>
                      </li>
                    <?php else:?>
                      <li>
                          <i class="material-icons">event_note</i>
                          <span>Adjudicación: No aplica</span>
                      </li>
                    <?php endif;?>
                      <li>
                          <i class="material-icons">event_available</i>
                          <?php if ($code == $projects->ID_PROJECT && $ActualEps != 34013 && $projects->EPS_REL != 34013 && $ActualEps != 34021 && $projects->EPS_REL != 34021
                            && $ActualEps != 34015 && $projects->EPS_REL != 34015 && $ActualEps != 34017 && $projects->EPS_REL != 34017): ?>
                            <span>Fecha corte: <?= strftime("%d %B, %Y", strtotime($corte));?></span>
                          <?php elseif($code == null && $ActualEps != 34013 && $projects->EPS_REL != 34013 && $ActualEps != 34021 && $projects->EPS_REL != 34021
                            && $ActualEps != 34015 && $projects->EPS_REL != 34015 && $ActualEps != 34017 && $projects->EPS_REL != 34017):?>
                            <span>Fecha corte: <?= $Apr ?></span>
                          <?php else:?>
                            <span>Fecha SPI: <?= strftime("%d %B, %Y", strtotime($corte));?></span>
                          <?php endif;?>
                      </li>
                      <li>
                        <?php if($ActualEps != 34013 && $projects->EPS_REL != 34013 && $ActualEps != 34021 && $projects->EPS_REL != 34021
                          && $ActualEps != 34015 && $projects->EPS_REL != 34015 && $ActualEps != 34017 && $projects->EPS_REL != 34017):?>
                          <i class="material-icons">straighten</i>
                          <span>Longitud: <?= $projects->DISTANCIA ?> Km</span>
                        <?php else:?>
                          <i class="material-icons">date_range</i>
                          <?php if ($projects->CPI_DATE != null): ?>
                          <span>Fecha CPI: <?= strftime("%d %B, %Y", strtotime($projects->CPI_DATE));?></span>
                          <?php else:?>
                            <span>Fecha CPI:</span>
                          <?php endif;?>
                        <?php endif;?>
                      </li>
                      <li>
                        <?php if($ActualEps != 34013 && $projects->EPS_REL != 34013 && $ActualEps != 34021 && $projects->EPS_REL != 34021
                          && $ActualEps != 34015 && $projects->EPS_REL != 34015 && $ActualEps != 34017 && $projects->EPS_REL != 34017):?>
                          <i class="material-icons">place</i>
                            <span>No. de subestaciones: <?= $projects->NUM_SUBESTACION ?></span>
                        <?php else:?>
                          <i class="material-icons">event</i>
                          <?php if ($projects->IGR_DATE != null): ?>
                            <span>Fecha IGR: <?=strftime("%d %B, %Y", strtotime($projects->IGR_DATE))?></span>
                            <?php else: ?>
                              <span>Fecha IGR:</span>
                          <?php endif; ?>
                        <?php endif;?>
                      </li>
                  </ul>
              </div>
          </div>
        <a href="javascript:" class="btn-floating waves-effect waves-light Scroll-button" id="return-to-top"><i class="material-icons">arrow_upward</i></a>
    </div>
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
                                        <h3>2</h3>
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
                                                    <h3>3</h3>
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
                <th>Plan de Respuesta 01</th>
                <td><?=$rk->PLAN_ONE?></td>
            </tr>
            <tr>
                <th>Plan de Respuesta 02</th>
                <td><?=$rk->PLAN_TWO?></td>
            </tr>
            <tr>
                <th>Plan de Respuesta 03</th>
                <td><?=$rk->PLAN_THREE?></td>
            </tr>
            <tr>
                <th>Plan de Respuesta 04</th>
                <td><?=$rk->PLAN_FOUR?></td>
            </tr>
            <tr>
                <th>Plan de Respuesta 05</th>
                <td><?=$rk->PLAN_FIVE?></td>
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
<div id="EditChart" class="modal" onload="test22();">
    <div class="modal-content">
        <a class="modal-close close" id="button_caf_create" onclick="test22()">
            <i class="material-icons">close</i>
        </a>
        <h2>Filtrar gráfica</h2>
        <div class="row">
          <div class="input-field col s12">
            <select class="Select-Option-Column_Caf">
              <option value="0" disabled selected>Seleccione una opción</option>
              <option value="1">Planeado</option>
              <option value="2">Ejecutado</option>
              <option value="3">Estimado</option>
            </select>
            <label>Columna</label>
            <a id="button_caf_add"><i class="material-icons tooltipped" data-position="right" data-tooltip="Agregar" onclick="return false;">add_box</i></a>
            <a id="button_caf_cancel"><i class="material-icons tooltipped" data-position="right" data-tooltip="Cancelar" onclick="return false;">cancel</i></a>
          </div>
          <div class="input-field col s12">
            <select class="Select-Option-Date_Caf">
              <option value="0" disabled selected>Seleccione una opción</option>
              <option value="1">Abril</option>
            </select>
            <label>Fecha</label>
          </div>
        </div>
        <table id="id_table_caf">
            <thead>
              <tr role="row">
                <th id="IdCheckbox" width="8%" style="padding:10px">
                </th>
                <th id="IdColumnTitleDate">
                  <label>
                    <input id="CheckboxDateTitle" type="checkbox" class="filled-in" checked="checked" />
                      <span style="font-size:11px">Fecha</span>
                  </label>
                </th>
                <th id="IdColumnTitlePlan">
                  <label>
                    <input id="CheckboxPlanTitle" type="checkbox" class="filled-in" checked="checked" />
                      <span style="font-size:11px">Planeado</span>
                  </label>
                </th>
                <th id="IdColumnTitleEjec">
                  <label>
                    <input id="CheckboxEjecTitle" type="checkbox" class="filled-in" checked="checked" />
                      <span style="font-size:11px">Ejecutado</span>
                  </label>
                </th>
                <th id="IdColumnTitleBl">
                  <label>
                    <input id="CheckboxBlTitle" type="checkbox" class="filled-in" checked="checked" />
                      <span style="font-size:11px">Estimado</span>
                  </label>
                </th>
              </tr>
            </thead>
            <tbody>
             <?php for ($i=0; $i<$cont; $i++): ?>
              <tr id="IdTr<?=$i?>">
                <td id="IdColumnCheckbox<?=$i?>">
                  <label>
                    <input id="CheckboxData<?=$i?>" type="checkbox" class="filled-in" checked="checked" />
                    <span></span>
                  </label>
                </td>
                <td id="IdColumnDate<?=$i?>">
                  <input type="text" id="CheckboxDateData<?=$i?>" name="" value="<?=$fecJson[$i]?>">
                </td>
                <td id="IdColumnPlan<?=$i?>">
                  <input type="text" id="CheckboxPlanData<?=$i?>" name="" value="<?=$acJson[$i]?>">
                </td>
                <td id="IdColumnEjec<?=$i?>">
                  <input type="text" id="CheckboxEjecData<?=$i?>" name="" value="<?=$evJson[$i]?>">
                </td>
                <td id="IdColumnBl<?=$i?>">
                  <input type="text" id="CheckboxBlData<?=$i?>" name="" value="<?=$blJson[$i]?>">
                </td>
              </tr>
             <?php endfor;?>
            </tbody>
        </table>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn btn-depressed">Aceptar</a>
    </div>
</div>
<?= $this->Html->script(['dynamic-charts.js']) ?>
