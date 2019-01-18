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
      <!-- <canvas id="doughnut-custom" width="200" height="100"></canvas> -->
      <canvas id="myChart" width="200" height="100"></canvas>
  </div>
<!-- <<h1><?=print($fecJson)?></h1> -->
  <!-- <canvas id="myChart" width="400" height="400"></canvas> -->
  <script>
var ctx = document.getElementById("myChart").getContext("2d");

var data = {
  labels: [
    "Ejecutado",
    "Planeado"
  ],
  datasets: [
    {
      data: [<?=$data1?>,<?=$data2?>],
      backgroundColor: [
        "#F85245",
        "#1AD3F0"
      ],
      hoverBackgroundColor: [
        "#F85245",
        "#1AD3F0"
      ]
    }]
};
Chart.pluginService.register({
  beforeRender: function (chart) {
    if (chart.config.options.showAllTooltips) {
      // create an array of tooltips
      // we can't use the chart tooltip because there is only one tooltip per chart
      chart.pluginTooltips = [];
      chart.config.data.datasets.forEach(function (dataset, i) {
        chart.getDatasetMeta(i).data.forEach(function (sector, j) {
          chart.pluginTooltips.push(new Chart.Tooltip({
            _chart: chart.chart,
            _chartInstance: chart,
            _data: chart.data,
            _options: chart.options.tooltips,
            _active: [sector]
          }, chart));
        });
      });
      // turn off normal tooltips
      chart.options.tooltips.enabled = false;
    }
  },
  afterDraw: function (chart, easing) {
    if (chart.config.options.showAllTooltips) {
      // we don't want the permanent tooltips to animate, so don't do anything till the animation runs atleast once
      if (!chart.allTooltipsOnce) {
        if (easing !== 1)
          return;
        chart.allTooltipsOnce = true;
      }
      // turn on tooltips
      chart.options.tooltips.enabled = true;
      Chart.helpers.each(chart.pluginTooltips, function (tooltip) {
        tooltip.initialize();
        tooltip.update();
        // we don't actually need this since we are not animating tooltips
        tooltip.pivot();
        tooltip.transition(easing).draw();
      });
      chart.options.tooltips.enabled = false;
    }
  }
})

var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: data,
  options: {
    showAllTooltips: true,
    legend: {
            position:'bottom',
          },
          tooltips: {
                      titleFontSize: 20,
                      bodyFontSize: 20,
                      mode: 'label',
                      callbacks: {
                          label: function(tooltipItem, data) {
                              return data['datasets'][0]['data'][tooltipItem['index']] + '%';
                          }
                      }
                  },
                  scale: {
                          ticks: {
                              beginAtZero: true
                          }
                      }
                    }
                  });

// Chart.plugins.register({
// beforeRender: function(chart) {
//   if (chart.config.options.showAllTooltips) {
//     // create an array of tooltips
//     // we can't use the chart tooltip because there is only one tooltip per chart
//     chart.pluginTooltips = [];
//     chart.config.data.datasets.forEach(function(dataset, i) {
//       chart.getDatasetMeta(i).data.forEach(function(sector, j) {
//         chart.pluginTooltips.push(
//           new Chart.Tooltip(
//             {
//               _chart: chart.chart,
//               _chartInstance: chart,
//               _data: chart.data,
//               _options: chart.options.tooltips,
//               _active: [sector]
//             },
//             chart
//           )
//         );
//       });
//     });
//
//     // turn off normal tooltips
//     chart.options.tooltips.enabled = false;
//   }
// },
// afterDraw: function(chart, easing) {
//   if (chart.config.options.showAllTooltips) {
//     // we don't want the permanent tooltips to animate, so don't do anything till the animation runs atleast once
//     if (!chart.allTooltipsOnce) {
//       if (easing !== 1) return;
//       chart.allTooltipsOnce = true;
//     }
//
//     // turn on tooltips
//     chart.options.tooltips.enabled = true;
//     Chart.helpers.each(chart.pluginTooltips, function(tooltip) {
//       tooltip.initialize();
//       tooltip._options.bodyFontFamily = "'Lato', sans-serif"
//       tooltip._options.displayColors = false;
//       tooltip._options.bodyFontSize = tooltip._chart.height * 0.06;
//       tooltip._options.yPadding = 0;
//       tooltip._options.xPadding = 0;
//       // tooltip._options.position = 'average';
//       // tooltip._options.caretSize = tooltip._options.bodyFontSize * 0.5;
//       //tooltip._options.cornerRadius = tooltip._options.bodyFontSize * 0.5;
//       tooltip.update();
//       // we don't actually need this since we are not animating tooltips
//       tooltip.pivot();
//       tooltip.transition(easing).draw();
//     });
//     chart.options.tooltips.enabled = false;
//   }
// }
// });
//
// // var randomScalingFactor = function() {
// // return Math.round(Math.random() * 100);
// // };
//
// var config = {
// type: "doughnut",
// data: {
//   datasets: [
//     {

//       backgroundColor: [
//         "#F85245",
//         "#1AD3F0"
//       ],
//       borderWidth: 0,
//       label: "Dataset 1"
//     }
//   ],
//   labels: ["Data 1", "Data 2"]
// },
// options: {
//   showAllTooltips: true, // call plugin we created
//   responsive: true,
//   cutoutPercentage: 60,
//   legend: {
//     position: "bottom"
//   },
//   animation: {
//     animateScale: true,
//     animateRotate: true
//   },
//   tooltips: {
//     enabled: false,
//     backgroundColor:"rgba(0,0,0,0)",
//     callbacks: {
//       title: function(tooltipItems, data) {
//         return "";
//       },
//       label: function(tooltipItem, data) {
//         var datasetLabel = "";
//         var label = data.labels[tooltipItem.index];
//         return data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index] + '%';
//       }
//       // labelColor: function(tooltipItem, chart) {
//       // 	return {
//       // 			borderColor: 'rgb(255, 0, 0)',
//       // 			backgroundColor: 'rgba(255, 0, 0, 0)'
//       // 	}
//       // }
//     }
//   }
// }
// };
//
// window.onload = function() {
// var ctx = document.getElementById("doughnut-custom").getContext("2d");
// window.myDoughnut = new Chart(ctx, config);
// };

    </script>
   </body>
</html>
