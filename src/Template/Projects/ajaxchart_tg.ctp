<script type="text/javascript" src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script type="text/javascript" src="https://www.amcharts.com/lib/3/serial.js"></script>
<script type="text/javascript" src="https://www.amcharts.com/lib/3/pie.js"></script>
<script type="text/javascript" src="https://www.amcharts.com/lib/3/gauge.js"></script>
<script src="https://www.amcharts.com/lib/3/lang/es.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
<script type="text/javascript">


    if (<?=$longitudArrayDate?> != 0) {
      AmCharts.makeChart("tg2",
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
                      <?php if($Column1_TG_Color != null):?>
                      "lineColor": "<?=$Column1_TG_Color?>",
                      <?php else:?>
                      "lineColor": "#2376BC",
                      <?php endif;?>
                      <?php if($Column1_TG_Type == "line"):?>
                      "id": "plannedAnnual",
                      "lineThickness": 3,
                      "title": "Planeado",
                      "valueAxis": "ValueAxis-1",
                      "valueField": "col-plannedAnnual",
                      "xAxis": "ValueAxis-1",
                      "yAxis": "ValueAxis-1"
                      <?php else:?>
                      "columnWidth": 0.67,
                      "fillAlphas": 1,
                      "id": "plannedAnnual",
                      "lineAlpha": 0,
                      "lineThickness": 0,
                      "title": "Planeado",
                      "type":"<?=$Column1_TG_Type?>",
                      "valueAxis": "ValueAxis-1",
                      "valueField": "col-plannedAnnual",
                      "xAxis": "ValueAxis-1",
                      "yAxis": "ValueAxis-1"
                      <?php endif;?>
                  },
                  {
                      <?php if($Column2_TG_Color != null):?>
                      "lineColor": "<?=$Column2_TG_Color?>",
                      <?php else:?>
                      "lineColor": "#FF8000",
                      <?php endif;?>
                      <?php if($Column2_TG_Type == "line"):?>
                      "id": "executedAnnual",
                      "lineThickness": 3,
                      "title": "Planeado",
                      "valueAxis": "ValueAxis-1",
                      "valueField": "col-executedAnnual",
                      "xAxis": "ValueAxis-1",
                      "yAxis": "ValueAxis-1"
                      <?php else:?>
                      "columnWidth": 0.71,
                      "fillAlphas": 1,
                      "id": "executedAnnual",
                      "title": "Ejecutado",
                      "type": "column",
                      "valueAxis": "ValueAxis-1",
                      "valueField": "col-executedAnnual",
                      "xAxis": "ValueAxis-1",
                      "yAxis": "ValueAxis-1"
                      <?php endif;?>
                  },
                  {
                      "customMarker": "",
                      "id": "executed",
                      <?php if($Column3_TG_Color != null):?>
                      "lineColor": "<?=$Column3_TG_Color?>",
                      <?php else:?>
                      "lineColor": "#FBB800",
                      <?php endif;?>
                      <?php if($Column3_TG_Type != "line"):?>
                      "type":"<?=$Column3_TG_Type?>",
                      "fillAlphas":1,
                      <?php else:?>
                      "lineThickness": 3,
                      <?php endif;?>
                      "title": "Ejecutado",
                      "valueAxis": "ValueAxis-2",
                      "valueField": "col-executed",
                      "xAxis": "ValueAxis-2",
                      "yAxis": "ValueAxis-2"
                  },
                  {
                      "id": "forecast",
                      <?php if($Column4_TG_Color != null):?>
                      "lineColor": "<?=$Column4_TG_Color?>",
                      <?php else:?>
                      "lineColor": "#4D91CE",
                      <?php endif;?>
                      <?php if($Column4_TG_Type != "line"):?>
                      "type":"<?=$Column4_TG_Type?>",
                      "fillAlphas":1,
                      <?php else:?>
                      "dashLength": 4,
                      "lineThickness": 3,
                      <?php endif;?>
                      "title": "Forecast",
                      "valueAxis": "ValueAxis-2",
                      "valueField": "col-forecast"
                  },
                  {
                      "id": "planned",
                      <?php if($Column5_TG_Color != null):?>
                      "lineColor": "<?=$Column5_TG_Color?>",
                      <?php else:?>
                      "lineColor": "#BBBBBB",
                      <?php endif;?>
                      <?php if($Column5_TG_Type != "line"):?>
                      "type":"<?=$Column5_TG_Type?>",
                      "fillAlphas":1,
                      <?php else:?>
                      "lineThickness": 3,
                      "fillColors": "undefined",
                      <?php endif;?>
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
              ]
          }
      );
    }
</script>
    <h2>Tres Generaciones</h2>
    <div class="chart-content" id="tg2" style="min-height: 475px;"></div>
