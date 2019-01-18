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
    type: 'radar',
  data: {
  datasets: [{
        label: 'Unidades actuales',
        // backgroundColor: 'rgb(250, 128, 114)',
        fill: false,
        lineTension: 0,
        borderColor: 'rgb(229, 236, 21)',
        data: <?=$ActUnitsJson?>
      },{
        label: 'Unidades Planeadas',
        // backgroundColor: 'rgb(96, 157, 229)',
        fill: false,
        borderColor: 'rgb(252, 132, 67)',
        data: <?=$PlanUnitsJson?>
      },{
        label: 'Unidades restantes',
        // backgroundColor: 'rgb(247, 244, 48)',
        fill: false,
        borderColor: 'rgb(235, 23, 78)',
        data: <?=$RemainJson?>
      },{
        label: 'Actual',
        fill: false,
        // backgroundColor: 'rgb(250, 128, 114)',
        borderColor: 'rgb(250, 128, 114)',
        data: <?=$ActJson?>
      },{
        label: 'Planeado',
        fill: false,
        lineTension:0.1,
        // backgroundColor: 'rgb(96, 157, 229)',
        borderColor: 'rgb(96, 157, 229)',
        data: <?=$PlanJson?>
      },
      {
        label: 'Proyectado',
        fill: false,
        // backgroundColor: 'rgb(247, 244, 48)',
        borderColor: 'rgb(44, 218, 62)',
        // borderDash: [5, 5],
        // backgroundColor: 'transparent',
        // pointStyle: 'rectRounded',
        data: <?=$CompJson?>
      }],
  labels: <?=$fecJson?>
  },
      options: {
        elements:{
        line:{
        tension:0,
        legend: {
          display: true,
          labels: {
              fontColor: 'rgb(2, 2, 2)'
          }
      }
    }
  }    
}
});
  </script>
</body>

</html>
