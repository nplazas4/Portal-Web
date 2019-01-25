<?php
    /**
     * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
     * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
     *
     * Licensed under The MIT License
     * For full copyright and license information, please see the LICENSE.txt
     * Redistributions of files must retain the above copyright notice.
     *
     * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
     * @link          https://cakephp.org CakePHP(tm) Project
     * @since         0.10.0
     * @license       https://opensource.org/licenses/mit-license.php MIT License
     */

    $cakeDescription = 'Grupo Energía Bogotá';

    // Datos de usuario
    $user = [
      'avatar' => $current_user['V_EMAIL'][0],
      'name' => $current_user['V_FIRST_NAME'].' '.$current_user['V_LAST_NAME'],
      // 'name' => $current_user['V_EMAIL'],
      'email' => $current_user['V_EMAIL']
    ];
    // $user = [
    //     'avatar' => 'M',
    //     'name' => 'Martín Zabala',
    //     'email' => 'mzabala@geb.com.co'
    // ];
    // Menu
    $menu = [
        [ 'PORTAL PROYECTOS', 'index','PortalProjects'],
        [ 'RyOS', 'companies','PortalProjects'],
        [ 'PORTAFOLIO', 'company','PortalProjects'],
        [ 'PROYECTOS PEC', 'projects','PortalProjects'],
    ];
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('materialize.css') ?>
      <?= $this->Html->script(['jquery-3.3.1.min.js']) ?>
    <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.css" />
<!-- <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid-theme.min.css" />
<link type="text/css" rel="stylesheet" href="jsgrid.min.css" />
<link type="text/css" rel="stylesheet" href="jsgrid-theme.min.css" /> -->

<!-- <script type="text/javascript" src="jsgrid.min.js"></script> -->

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.js"></script>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <header class="header">
      <?= $this->Html->css('placeholder.css') ?>
        <div class="header-wrapper">
            <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <!-- <a href="/home" class="header-logo"><?//= $this->Html->image('logo.svg') ?></a> -->
            <?php echo $this->Html->link(
              $this->Html->image('logo.svg'),
              ['controller'=>'Pages', 'action'=>'home'],
              ['escape' => false,'class'=>'header-logo']
            );?>
            <?php  if (isset($current_user)):?>
            <?php  if($current_user['V_ROL']=='Administrator' || $current_user['V_ROL']=='Viewer'):?>
            <div class="header-user dropdown-trigger" data-target='dropdownUser'>
                <div class="header-user-content">
                    <h2><?= $user['name'] ?></h2>
                    <small><?= $user['email'] ?></small>
                </div>
                <div class="header-user-avatar"><?= $user['avatar'] ?></div>
            </div>
          <?php endif;?>
          <?php endif;?>
            <ul id='dropdownUser' class='dropdown-content'>
                <li class="dropdown-user">
                    <div class="header-user-avatar"><?= $user['avatar'] ?></div>
                    <div class="dropdown-user-content">
                        <h2><?= $user['name'] ?></h2>
                        <small><?= $user['email'] ?></small>
                    </div>
                </li>
              <li class="divider" tabindex="-1"></li>
                <!-- <li><a href="/login"><i class="material-icons">exit_to_app</i></a></li> -->
                <li><?=$this->Html->link(
                  $this->Html->tag('i','exit_to_app', array('class' => 'material-icons')).'Salir',
                  array('controller'=>'Users','action'=>'logout'),
                  array('escape' => false))?></li>
          </ul>
        </div>
        <nav data-topbar role="navigation" class="primary">
            <div class="nav-wrapper">
                <ul>
                <?php if (isset($current_user)):?>
                <?php if($current_user['V_ROL']=='Administrator' || $current_user['V_ROL']=='Viewer'):?>
                <?php foreach ($menu as $item): ?>
                    <!-- <li><a href="<?= $item[1] ?>"><?= $item[0] ?></a></li> -->
                <li>
                    <?php echo $this->Html->link($item[0],
                      ['controller'=>$item[2], 'action'=>$item[1]],
                      ['escape' => false]
                    );?>
                </li>
                <?php endforeach; ?>
                <li>
                  <?php if($current_user['V_ROL']=='Administrator'):?>
                    <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">PORTAL ALTERNO<i class="material-icons right">arrow_drop_down</i></a></li>
                  <?php endif;?>
              </li>
               <?php endif;?>
             <?php endif;?>
                </ul>
            </div>
        </nav>
        <ul id="dropdown1" class="dropdown-content">
          <li>
            <?php echo $this->Html->link('Proyectos',
              ['controller'=>'Projects','action'=>'index'],
              ['escape' => false]);
              ?>
          </li>
          <li class="divider"></li>
          <li>
            <?php echo $this->Html->link('EPS',
              ['controller'=>'Eps','action'=>'index'],
              ['escape' => false]);
              ?>
          </li>
          <li class="divider"></li>
          <li>
            <?php echo $this->Html->link('Códigos',
              ['controller'=>'Projectcodes','action'=>'index'],
              ['escape' => false]);
              ?>
          </li>
          <li class="divider"></li>
          <li>
            <?php echo $this->Html->link('Indicadores de proyectos',
              ['controller'=>'Indicators','action'=>'index'],
              ['escape' => false]);
              ?>
          </li>
          <li class="divider"></li>
          <li>
            <?php echo $this->Html->link('Riesgos',
              ['controller'=>'Risks','action'=>'index'],
              ['escape' => false]);
              ?>
          </li>
        </ul>
    </header>

    <ul id="slide-out" class="sidenav">
        <li>
            <div class="user-view primary ma-0 pl-4">
                <div class="header-user-avatar mx-0 mb-2"><?= $user['avatar'] ?></div>
                <h2 class="white-text name"><?= $user['name'] ?></h2>
                <span class="white-text email"><?= $user['email'] ?></span>
            </div>
        </li>
        <li>
          <?php echo $this->Html->link(
          $this->Html->tag('i','exit_to_app',
          array('class'=>'material-icons mr-2')).'Salir',
          ['controller'=>'Users','action'=>'logout'],
          ['escape' => false,'class'=>'pl-4']
          );?>
        </li>
        <!-- <li><a class="pl-4" href="/web/users/logout"><i class="material-icons mr-2">exit_to_app</i>Salir</a></li> -->
        <li><div class="divider ma-0"></div></li>
        <!-- <li><a class="waves-effect pl-4" href="/">INICIO</a></li> -->
        <li><?=$this->Html->link('INICIO',['controller'=>'Pages','action'=>'home'],['class'=>'waves-effect pl-4'])?></li>
        <?php foreach ($menu as $item): ?>
            <!-- <li><a class="waves-effect pl-4" href="<?//= $item[1] ?>"><?//= $item[0] ?></a></li> -->
          <li>
            <?php echo $this->Html->link($item[0],
              ['controller'=>$item[2], 'action'=>$item[1]],
              ['escape' => false,'class'=>'waves-effect pl-4']
            );?>
          </li>
        <?php endforeach; ?>
        <li>
          <?php echo $this->Html->link('PORTAL ALTERNO',
            ['controller'=>'Projects', 'action'=>'index'],
            ['escape' => false,'class'=>'waves-effect pl-4']
          );?>
        </li>
    </ul>

    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>

    <footer class="footer">
        <div class="footer-content">
            <figure><?= $this->Html->image('logo-vert.svg') ?></figure>
            <figure><?= $this->Html->image('mmcv.png') ?></figure>
            <ul class="footer-info">
                <li>Of. Principal Cra. 9 # 73-44 Piso 6 </li>
                <li>PBX: (571)3268000 - FAX: (571)3268010</li>
                <li>Bogotá D.C., Colombia</li>
            </ul>
        </div>
    </footer>

    <!-- Compiled and minified JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.sidenav').sidenav();
            $('select').formSelect();
            $('.tooltipped').tooltip();
            $('.modal').modal();
            $('.collapsible').collapsible();
            $('.dropdown-trigger').dropdown();
        });
    </script>
    <script>
    var close = document.getElementsByClassName("closebtn");
    var i;

    for (i = 0; i < close.length; i++) {
      close[i].onclick = function(){
        var div = this.parentElement;
        div.style.opacity = "0";
        setTimeout(function(){ div.style.display = "none"; }, 600);
      }
    }
    </script>
    <!-- Amcharts -->
    <script type="text/javascript" src="https://www.amcharts.com/lib/3/amcharts.js"></script>
    <script type="text/javascript" src="https://www.amcharts.com/lib/3/serial.js"></script>
    <script type="text/javascript" src="https://www.amcharts.com/lib/3/pie.js"></script>
    <script type="text/javascript" src="https://www.amcharts.com/lib/3/gauge.js"></script>
    <script src="https://www.amcharts.com/lib/3/lang/es.js"></script>
    <script type="text/javascript">
        // Porcentajes de avances
        // AmCharts.makeChart("advance",
        //     {
        //         "type": "gauge",
        //         "theme": "light",
        //         "language": "es",
        //         "axes": [
        //             {
        //                 "axisAlpha": 0,
        //                 "tickAlpha": 0,
        //                 "labelsEnabled": false,
        //                 "startValue": 0,
        //                 "endValue": 100,
        //                 "startAngle": 0,
        //                 "endAngle": 360,
        //                 "bands": [
        //                     // Usuarios perdidos
        //                     {
        //                         "color": "#eee",
        //                         "startValue": 0,
        //                         "endValue": 100,
        //                         "radius": "100%",
        //                         "innerRadius": "70%",
        //                         "balloonText": "Avance planeado",
        //                     },
        //                     {
        //                         "color": "#A6CE39",
        //                         "startValue": 0,
        //                         "endValue": 62.3,
        //                         "radius": "100%",
        //                         "innerRadius": "70%",
        //                         "balloonText": "62.3% Avance planeado",
        //                     },
        //                     // Usuarios pagos
        //                     {
        //                         "color": "#E6E6E6",
        //                         "startValue": 0,
        //                         "endValue": 100,
        //                         "radius": "70%",
        //                         "innerRadius": "40%",
        //                         "balloonText": "Ejecutado",
        //                     },
        //                     {
        //                         "color": "#2CACE3",
        //                         "startValue": 0,
        //                         "endValue": 57.2,
        //                         "radius": "70%",
        //                         "innerRadius": "40%",
        //                         "balloonText": "57.2% Ejecutado",
        //                     },
        //                 ]
        //             }
        //         ],
        //         "export": {
        //             "enabled": false
        //         }
        //     }
        // );

        // Curva de avance físico
        // AmCharts.makeChart("caf",
        //     {
        //         "type": "serial",
        //         "categoryField": "date",
        //         "dataDateFormat": "YYYY-MM-DD",
        //         "fontFamily": "'Open Sans'",
        //         "theme": "default",
        //         "language": "es",
        //         "categoryAxis": {
        //             "equalSpacing": true,
        //             "gridPosition": "start",
        //             "minPeriod": "DD",
        //             "parseDates": true,
        //             "startOnAxis": true,
        //             "axisAlpha": 0,
        //             "gridAlpha": 0,
        //             "labelOffset": -1
        //         },
        //         "chartCursor": {
        //             "enabled": true,
        //             "categoryBalloonDateFormat": "DD MMM YYYY",
        //             "cursorColor": "#00A34B"
        //         },
        //         "chartScrollbar": {
        //             "enabled": true,
        //             "graph": "AmGraph-2",
        //             "graphType": "line",
        //             "gridCount": 7,
        //             "offset": 40,
        //             "oppositeAxis": false,
        //             "scrollbarHeight": 40
        //         },
        //         "trendLines": [],
        //         "graphs": [
        //             {
        //                 "customBullet": "",
        //                 "dashLength": 7,
        //                 "id": "AmGraph-1",
        //                 "labelPosition": "right",
        //                 "labelText": "",
        //                 "lineColor": "#2CACE3",
        //                 "lineThickness": 3,
        //                 "minBulletSize": 3,
        //                 "showAllValueLabels": true,
        //                 "title": "Ejecutado",
        //                 "valueField": "column-1"
        //             },
        //             {
        //                 "id": "AmGraph-2",
        //                 "lineColor": "#A6CE39",
        //                 "lineThickness": 3,
        //                 "title": "Planeado",
        //                 "valueField": "column-2"
        //             }
        //         ],
        //         "guides": [],
        //         "valueAxes": [
        //             {
        //                 "id": "ValueAxis-1",
        //                 "totalText": "",
        //                 "unit": "%",
        //                 "axisAlpha": 0,
        //                 "gridAlpha": 0.06,
        //                 "title": ""
        //             }
        //         ],
        //         "allLabels": [],
        //         "balloon": {},
        //         "legend": {
        //             "enabled": true,
        //             "autoMargins": false,
        //             "marginRight": 0,
        //             "markerSize": 15,
        //             "position": "top",
        //             "spacing": 16,
        //             "useGraphSettings": true
        //         },
        //         "titles": [],
        //         "dataProvider": [
        //             {
        //                 "date": "2014-01-17",
        //                 "column-1": "0",
        //                 "column-2": "0"
        //             },
        //             {
        //                 "date": "2014-02-17",
        //                 "column-1": "5",
        //                 "column-2": "6"
        //             },
        //             {
        //                 "date": "2014-03-17",
        //                 "column-1": "10",
        //                 "column-2": "12"
        //             },
        //             {
        //                 "date": "2014-04-17",
        //                 "column-1": "11",
        //                 "column-2": "15"
        //             },
        //             {
        //                 "date": "2014-05-17",
        //                 "column-1": "12",
        //                 "column-2": "20"
        //             },
        //             {
        //                 "date": "2014-06-17",
        //                 "column-1": "13",
        //                 "column-2": "22"
        //             },
        //             {
        //                 "date": "2014-07-17",
        //                 "column-1": "15",
        //                 "column-2": "30"
        //             },
        //             {
        //                 "date": "2014-08-17",
        //                 "column-1": "20",
        //                 "column-2": "30"
        //             },
        //             {
        //                 "date": "2014-09-17",
        //                 "column-1": "21",
        //                 "column-2": "32"
        //             },
        //             {
        //                 "date": "2014-10-17",
        //                 "column-1": "22",
        //                 "column-2": "35"
        //             },
        //             {
        //                 "date": "2014-11-17",
        //                 "column-1": null,
        //                 "column-2": "31"
        //             },
        //             {
        //                 "date": "2014-12-17",
        //                 "column-1": null,
        //                 "column-2": "30"
        //             },
        //             {
        //                 "date": "2015-01-17",
        //                 "column-1": null,
        //                 "column-2": "25"
        //             },
        //             {
        //                 "date": "2015-02-17",
        //                 "column-1": null,
        //                 "column-2": "27"
        //             },
        //             {
        //                 "date": "2015-03-17",
        //                 "column-1": null,
        //                 "column-2": "32"
        //             }
        //         ]
        //     }
        // );

        // Gráfica acumulado
        AmCharts.makeChart("ga",
            {
                "type": "serial",
                "language": "es",
                "categoryField": "category",
                "startDuration": 1,
                "fontFamily": "'Open Sans'",
                "categoryAxis": {
                    "gridPosition": "start",
                    "axisAlpha": 0,
                    "gridAlpha": 0
                },
                "trendLines": [],
                "graphs": [
                    {
                        "balloonText": "[[title]] de [[category]]:[[value]]",
                        "cornerRadiusTop": 6,
                        "fillAlphas": 1,
                        "id": "AmGraph-1",
                        "lineColor": "#2CACE3",
                        "title": "Acumulado",
                        "type": "column",
                        "valueField": "column-1"
                    }
                ],
                "guides": [],
                "valueAxes": [
                    {
                        "id": "ValueAxis-1",
                        "unit": "$ ",
                        "unitPosition": "left",
                        "axisAlpha": 0,
                        "gridAlpha": 0.09,
                        "title": "Axis title",
                        "titleFontSize": 0,
                        "titleRotation": 0
                    }
                ],
                "allLabels": [],
                "balloon": {},
                "titles": [],
                "dataProvider": [
                    {
                        "category": "PPTO COP",
                        "column-1": "22000000000"
                    },
                    {
                        "category": "PPTO USD",
                        "column-1": "500000000"
                    },
                    {
                        "category": "AC COP",
                        "column-1": "36000000000"
                    },
                    {
                        "category": "AC USD",
                        "column-1": "1000000000"
                    }
                ]
            }
        );
    </script>
</body>
</html>
