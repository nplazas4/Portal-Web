<!doctype html>
<html>

<head>
    <title>Line Chart</title>
    <!-- <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.bundle.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <style>
        canvas {
            -moz-user-select: none;
            -webkit-user-select: none;
            -ms-user-select: none;
        }
    </style>
</head>

<body>
  <div style="width:75%;">
      <canvas id="myChart" width="200" height="100"></canvas>
  </div>
<!-- <<h1><?=print($fecJson)?></h1> -->
  <!-- <canvas id="myChart" width="400" height="400"></canvas> -->
  <script>
  var ctx = document.getElementById("myChart").getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'bar',
  data: {
  datasets: [{
        label: 'Unidades actuales',
        // fill: false,
        backgroundColor: 'rgb(250, 128, 114)',
        borderColor: 'rgb(250, 128, 114)',
        data: <?=$ActUnitsJson?>
      },{
        label: 'Unidades Planeadas',
        // fill: false,
        backgroundColor: 'rgb(96, 157, 229)',
        borderColor: 'rgb(96, 157, 229)',
        data: <?=$PlanUnitsJson?>
      },{
        label: 'Unidades restantes',
        // fill: false,
        backgroundColor: 'rgb(255,0,0,0.2)',
        borderColor: 'rgb(138,221,45,0.2)',
        data: <?=$RemainJson?>
      },{
        label: 'Actual',
        // fill: false,
        backgroundColor: 'rgb(250, 128, 114)',
        borderColor: 'rgb(250, 128, 114)',
        fill: false,
        data: <?=$ActJson?>,
        type:'line'
      },{
        label: 'Planeado',
        fill: false,
        backgroundColor: 'rgb(96, 157, 229)',
        borderColor: 'rgb(96, 157, 229)',
        data: <?=$PlanJson?>,
        type: 'line'
      },
      {
        label: 'Proyectado',
        fill: false,
        // backgroundColor: 'rgb(247, 244, 48)',
        borderColor: 'rgb(247, 244, 48)',
        borderDash: [5, 5],
        backgroundColor: 'transparent',
        pointStyle: 'rectRounded',
        data: <?=$CompJson?>,
        type: 'line'
      }],
  labels: <?=$fecJson?>
  },
      options: {
        legend: {
          display: true,
          position:'right',
          labels: {
              fontColor: 'rgb(2, 2, 2)',
          }
      },
      scales: {
      xAxes: [{
          gridLines: {
              display:false
          }
      }],
      yAxes: [{
          gridLines: {
              display:false
          }
      }]
  }
}
});
  </script>
</body>

</html>
