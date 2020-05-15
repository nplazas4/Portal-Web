
<script type="text/javascript" src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script type="text/javascript" src="https://www.amcharts.com/lib/3/serial.js"></script>
<script type="text/javascript" src="https://www.amcharts.com/lib/3/pie.js"></script>
<script type="text/javascript" src="https://www.amcharts.com/lib/3/gauge.js"></script>
<script src="https://www.amcharts.com/lib/3/lang/es.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
<script type="text/javascript">
<<<<<<< HEAD
=======

>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
    // Curva de avance físico
  var chart = AmCharts.makeChart("caf2",{
            "type": "serial",
            // "synchronizeGrid": true,
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
                  "type": "<?=$chart_type?>",
                  "fillAlphas": <?=$fill?>,
                  <?php if($Column1_Color != null):?>
                  "lineColor": "<?=$Column1_Color?>",
                  <?php else:?>
                  "lineColor": "#A6CE39",
                  <?php endif;?>
                  <?php if($chart_type == "line"):?>
                  "lineThickness": 3,
                  <?php endif;?>
                  "title": "Planeado",
                  "valueField": "column"
                },
                {
                    "id": "AmGraph-2",
                    "type": "<?=$chart_type2?>",
                    "fillAlphas": <?=$fill_Column2?>,
                    <?php if($Column2_Color != null):?>
                    "lineColor": "<?=$Column2_Color?>",
                    <?php else:?>
                    "lineColor": "#2CACE3",
                    <?php endif;?>
                    <?php if($chart_type2 == "line"):?>
                    "lineThickness": 3,
                    <?php endif;?>
                    "title": "Ejecutado",
                    "valueField": "column-2"
                },
                {
                  <?php if($chart_type3 == "line"):?>
                  "customBullet": "",
                  "dashLength": <?=$dashLength_Column3?>,
                  "labelPosition": "right",
                  "labelText": "",
                  "lineThickness": 3,
                  "minBulletSize": 3,
                  "showAllValueLabels": true,
                  <?php endif;?>
                  "id": "AmGraph-3",
                  "type": "<?=$chart_type3?>",
                  "fillAlphas": <?=$fill_Column3?>,
                  "title": "Estimado a completar",
                  <?php if($Column3_Color != null):?>
                  "lineColor": "<?=$Column3_Color?>",
                  <?php else:?>
                  "lineColor": "#fc9219",
                  <?php endif;?>
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
            "dataProvider": [
                <?php for ($i=0; $i<$cont; $i++): ?>
                {
                     <?php $blDec = bcdiv($blJson[$i], '1', 4);?>
                     <?php $evDec = bcdiv($evJson[$i], '1', 4);?>
                     <?php $acDec = bcdiv($acJson[$i], '1', 4);?>
                     "date": "<?=$fecJson[$i]?>",
                     "column-3": "<?=$acDec?>",
                     <?php if (is_numeric($evJson[$i])):?>
                     "column-2": "<?=$evDec?>",
                     <?php else: ?>
                     "column-2": null,
                     <?php endif;?>
                     "column": "<?=$blDec?>"
                },
                  <?php endfor; ?>
            ],
            "export": {
                "enabled": true
            }
        }
    );
</script>
<<<<<<< HEAD
<h2>Curva de Avance Físico</h2>
<div class="chart-content" id="caf2"></div>
=======

    <h2>Curva de Avance Físico</h2>
    <div class="chart-content" id="caf2"></div>
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
