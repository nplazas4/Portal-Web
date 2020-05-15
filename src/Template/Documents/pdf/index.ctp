<style>
#chartdiv {
  width: 818px;
  height: 500px;
}
</style>
<div class="header-wrapper">   
  <div class="">
    <table class="">
      <thead>
        <tr>
          <th>Registros</th>
          <th>Cantidad</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($chartData as $Data):?> 
          <tr>
            <td><?=$Data["v_value"]?></td>
            <td><?=$Data["registros"]?></td>
          </tr>
        <?php endforeach;?>
      </tbody>
    </table>
  </div>
  <div class="divider transparent mt-6 mb-3"></div>
  <div class="chart" style="width:400px;height:300px;">
    <!-- <h2>Curva de Avance Físico</h2> -->
    <div class="chart-content mr-2" id="chartdiv"></div>
  </div>
</div>

<script>
  // am4core.ready(function() {
  am4core.useTheme(am4themes_material3);
  am4core.useTheme(am4themes_animated);
  // DONUT CHARTS
  <?php if($chartType == 'pie'):?>
    chartDonut = am4core.create("chartdiv", am4charts.PieChart);
    chartDonut.hideLabelsPercent = 15;
    // Add data
    chartDonut.data = <?=$chartJson?>;
    // Add and configure series

    pieSeries = chartDonut.series.push(new am4charts.PieSeries());
    pieSeries.dataFields.value = "registros";
    pieSeries.dataFields.category = "v_value";
    // Let's cut a hole in our Pie chart the size of 30% the radius
    chartDonut.innerRadius = am4core.percent(0);
    // Put a thick white border around each Slice
    pieSeries.slices.template.stroke = am4core.color("#fff");
    pieSeries.slices.template.strokeWidth = 2;
    pieSeries.slices.template.strokeOpacity = 1;
    pieSeries.ticks.template.adapter.add("hidden", hideSmall);
    pieSeries.labels.template.adapter.add("hidden", hideSmall);
    function hideSmall(hidden, target) {
      return target.dataItem.values.value.percent < 5 ? true : false;
    }
    // Create a base filter effect (as if it's not there) for the hover to return to
    shadow = pieSeries.slices.template.filters.push(new am4core.DropShadowFilter);
    shadow.opacity = 0;
    // Create hover state
    // hoverState = pieSeries.slices.template.states.getKey("hover"); // normally we have to create the hover state, in this case it already exists
    // // Slightly shift the shadow and make it more prominent on hover
    // hoverShadow= hoverState.filters.push(new am4core.DropShadowFilter);
    // hoverShadow.opacity = 0.7;
    // hoverShadow.blur = 5;
    // chartDonut.fontSize = 15;
  <?php elseif($chartType == 'column'):?>
    chartColumn = am4core.create("chartdiv", am4charts.XYChart);
    chartColumn.data = <?=$chartJson?>;
    categoryAxis = chartColumn.xAxes.push(new am4charts.CategoryAxis());
    // categoryAxis.renderer.grid.template.disabled = true;
    categoryAxis.dataFields.category = "v_value";
    categoryAxis.renderer.grid.template.location = 0;
    categoryAxis.renderer.minGridDistance = 1;
    categoryAxis.renderer.labels.template.horizontalCenter = "right";
    categoryAxis.renderer.labels.template.verticalCenter = "middle";
    categoryAxis.renderer.labels.template.rotation = 270;
    categoryAxis.renderer.fontSize = 12;
    categoryAxis = chartColumn.yAxes.push(new am4charts.ValueAxis());
    // valueAxis = chartColumn.yAxes.push(new am4charts.ValueAxis());
    // Create series
    series = chartColumn.series.push(new am4charts.ColumnSeries());
    // series.hiddenState.transitionDuration = 200;
    // series.sequencedInterpolation = true;
    series.dataFields.valueY = "registros";
    series.dataFields.categoryX = "v_value";
    // series.columns.template.column.cornerRadiusTopLeft = 10;
    // series.columns.template.column.cornerRadiusTopRight = 10;
    series.columns.template.column.fillOpacity = 0.8;
    series.columns.template.strokeWidth = 0;
    series.columns.template.stroke = am4core.color("#fff");
    series.columns.template.adapter.add("fill", function(fill, target) {
      return chartColumn.colors.getIndex(target.dataItem.index);
    });
  <?php elseif($chartType == 'bar'):?>
    // INICIO BAR CHART
    chart = am4core.create("chartdiv", am4charts.XYChart);
    chart.data = <?=$chartJson?>;

    //create category axis for years
    categoryAxis = chart.yAxes.push(new am4charts.CategoryAxis());
    categoryAxis.dataFields.category = "v_value";
    categoryAxis.renderer.inversed = true;
    categoryAxis.renderer.grid.template.location = 0;
    categoryAxis.renderer.minGridDistance = 30;
    //create value axis for income and expenses
    valueAxis = chart.xAxes.push(new am4charts.ValueAxis());
    valueAxis.renderer.opposite = false;
    //create columns
    series = chart.series.push(new am4charts.ColumnSeries());
    series.dataFields.categoryY = "v_value";
    series.dataFields.valueX = "registros";
    series.name = "registros";
    series.columns.template.strokeWidth = 0;
    series.columns.template.column.fillOpacity = 0.8;
    series.columns.template.stroke = am4core.color("#fff");
    series.columns.template.adapter.add("fill", function(fill, target) {
      return chart.colors.getIndex(target.dataItem.index);
    });
  <?php endif;?>
</script>    