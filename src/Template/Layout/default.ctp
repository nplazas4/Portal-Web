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
        'email' => $current_user['V_EMAIL']
    ];

    // Menu
    $menu = [
        [
            'Portal proyectos', // Texto
            'index', // Action
            'PortalProjects', //Controller
            'id' => 'dropdownPortalProjects', // ID desplegable
            // Submenu
            'children' => [
                [
                    'Corporativo',
                    'children' => []
                ],
                [
                    'Distribución',
                    'children' => [
                        ['Calidda', 'Pages','companies'],
                        ['Contugas', 'Pages','companies']
                    ]
                ],
                [
                    'Transmisión y Transporte',
                    'children' => [
                       [ 'TGI', 'Pages', 'index'],
                       [ 'Trecsa', 'Pages', 'index'],
                       [ 'Gebbras', 'Pages', 'index'],
                       [ 'Contugas', 'Pages', 'index'],
                       [ 'Unidad de Transmisión Colombia', 'Pages', 'Company']
                    ]
                ],
                [
                    'Generación',
                    'children' => []
                ]
            ]
        ],
        [ 'RYOS', 'home','Pages','id' => '','children' => [] ],
        [ 'Portafolio', 'home','Pages','id' => '', 'children' => [] ],
        [ 'Documentos gestión de programas y proyectos', 'home','Pages','id' => '', 'children' => [] ],
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
    <?= $this->Html->script(['jquery-3.3.1.min.js']) ?>
    <?= $this->Html->css('materialize.css') ?>
    <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,900" rel="stylesheet">

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <header class="header">
      <?= $this->Html->css('login.css') ?>
      <?= $this->Html->css('textlength.css') ?>
      <?= $this->Html->css('placeholder.css') ?>
      <?= $this->Html->css('error')?>
        <div class="header-wrapper">
            <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <!-- <a href="/" class="header-logo"><//?//= $this->Html->image('logo.svg') ?></a> -->
            <?php echo $this->Html->link(
              $this->Html->image('logo.svg'),
              ['controller'=>'Pages', 'action'=>'home'],
              ['escape' => false,'class'=>'header-logo']
            );?>
            <nav data-topbar role="navigation">
                <div class="nav-wrapper">
                    <ul>
                      <li>
                        <a href="" class="dropdown-hover" data-target="PortalDropDown">
                            Portal alterno
                        </a>
                        <div id="PortalDropDown" class='dropdown-content sub-menu'>
                            <div class="sub-menu-content">
                                <h2>Portal alterno</h2>
                                 <div class="sub-menu-column">
                                    <h3>Proyectos</h3>
                                    <ul>
                                        <li>
                                          <?php echo $this->Html->link('Lista de proyectos',
                                            ['controller'=>'Projects','action'=>'index'],
                                            ['escape'=>false]
                                          );?>
                                        </li>
                                        <li>
                                          <?php echo $this->Html->link('Crear proyecto',
                                            ['controller'=>'Projects','action'=>'add'],
                                            ['escape'=>false]
                                          );?>
                                        </li>
                                        <li>
                                          <?php echo $this->Html->link('Lista de riesgos',
                                            ['controller'=>'Risks','action'=>'index'],
                                            ['escape'=>false]
                                          );?>
                                        </li>
                                        <li>
                                          <?php echo $this->Html->link('Crear riesgo',
                                            ['controller'=>'Risks','action'=>'add'],
                                            ['escape'=>false]
                                          );?>
                                        </li>
                                        <li>
                                          <?php echo $this->Html->link('Lista de indicadores de proyectos',
                                            ['controller'=>'Indicators','action'=>'index'],
                                            ['escape'=>false]
                                          );?>
                                        </li>
                                        <li>
                                          <?php echo $this->Html->link('Crear indicadores de proyectos',
                                            ['controller'=>'Indicators','action'=>'add'],
                                            ['escape'=>false]
                                          );?>
                                        </li>
                                    </ul>
                                </div>
                                <div class="sub-menu-column">
                                   <h3>Códigos</h3>
                                   <ul>
                                     <li>
                                       <?php echo $this->Html->link('Lista de códigos de proyectos',
                                         ['controller'=>'Projectcodes','action'=>'index'],
                                         ['escape'=>false]
                                       );?>
                                     </li>
                                     <li>
                                       <?php echo $this->Html->link('Crear código de proyecto',
                                         ['controller'=>'Projectcodes','action'=>'add'],
                                         ['escape'=>false]
                                       );?>
                                     </li>
                                   </ul>
                               </div>
                               <div class="sub-menu-column">
                                  <h3>EPS</h3>
                                  <ul>
                                    <li>
                                      <?php echo $this->Html->link('Lista de EPS',
                                        ['controller'=>'Eps','action'=>'index'],
                                        ['escape'=>false]
                                      );?>
                                    </li>
                                    <li>
                                      <?php echo $this->Html->link('Crear EPS',
                                        ['controller'=>'Eps','action'=>'add'],
                                        ['escape'=>false]
                                      );?>
                                    </li>
                                  </ul>
                              </div>
                            </div>
                        </div>
                    <?php foreach ($menu as $item): ?>
                        <li>
                          <?php echo $this->Html->link($item[0],
                            ['controller'=>$item[2],'action'=>$item[1]],
                            ['escape'=>false,'class'=>'dropdown-hover','data-target'=>$item['id']]
                          );?>
                            <!-- <a href="<?//= $item[1] ?>" class="dropdown-hover" data-target="<?//= $item['id'] ?>">
                                <?//= $item[0] ?>
                            </a> -->
                            <?php if ( sizeof($item['children']) ): ?>
                            <div id="<?= $item['id'] ?>" class='dropdown-content sub-menu'>
                                <div class="sub-menu-content">
                                    <h2>Grupos estratégicos de negocios</h2>
                                    <?php foreach ($item['children'] as $subitem ): ?>
                                     <div class="sub-menu-column">
                                        <h3><?= $subitem[0] ?></h3>
                                        <ul>
                                            <?php foreach ($subitem['children'] as $link ): ?>
                                            <li>
                                                <!-- <a href="<//?//= $link[1] ?>"><//?//= $link[0] ?></a> -->
                                                <?php echo $this->Html->link($link[0],
                                                  ['controller'=>$link[1],'action'=>$link[2]],
                                                  ['escape'=>false]
                                                );?>
                                            </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <?php endif; ?>
                    <?php endforeach; ?>
                    </ul>
                </div>
            </nav>
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
                <!-- <li><a href="/login"><i class="material-icons">exit_to_app</i>Salir</a></li> -->
                <li><?=$this->Html->link(
                  $this->Html->tag('i','exit_to_app', array('class' => 'material-icons')).'Salir',
                  array('controller'=>'Users','action'=>'logout'),
                  array('escape' => false))?></li>
            </ul>
        </div>
    </header>

    <ul id="slide-out" class="sidenav">
        <li>
            <div class="user-view primary ma-0">
                <div class="header-user-avatar mx-0 mb-2"><?= $user['avatar'] ?></div>
                <h2 class="white-text name"><?= $user['name'] ?></h2>
                <span class="white-text email"><?= $user['email'] ?></span>
            </div>
        </li>
        <!-- <li><a href="/login"><i class="material-icons mr-2">exit_to_app</i>Salir</a></li> -->
        <li><?=$this->Html->link(
        $this->Html->tag('i','exit_to_app', array('class' => 'material-icons mr-2')).'Salir',
        array('controller'=>'Users','action'=>'logout'),
        array('escape' => false))?></li>
        <li><div class="divider ma-0"></div></li>
        <li><?php echo $this->Html->link('Inicio',
          ['controller'=>'Pages','action'=>'home'],
          ['escape'=>false,'class'=>'waves-effect']
        );?></li>
        <?php if (isset($current_user)):?>
        <?php if($current_user['V_ROL']=='Administrator' || $current_user['V_ROL']=='Viewer'):?>
          <li>
            <a>
                Portal alterno
            </a>
              <i class="material-icons success-text">keyboard_arrow_down</i>
              <div class='submenu'>
                  <div class="submenu-row">
                      <h3>Proyectos</h3>
                      <ul>
                          <li>
                            <?php echo $this->Html->link('Lista de proyectos',
                              ['controller'=>'Projects','action'=>'index'],
                              ['escape'=>false]
                            );?>
                          </li>
                          <li>
                            <?php echo $this->Html->link('Crear proyecto',
                              ['controller'=>'Projects','action'=>'add'],
                              ['escape'=>false]
                            );?>
                          </li>
                          <li>
                            <?php echo $this->Html->link('Lista de riesgos',
                              ['controller'=>'Risks','action'=>'index'],
                              ['escape'=>false]
                            );?>
                          </li>
                          <li>
                            <?php echo $this->Html->link('Crear riesgo',
                              ['controller'=>'Risks','action'=>'add'],
                              ['escape'=>false]
                            );?>
                          </li>
                          <li>
                            <?php echo $this->Html->link('Lista de indicadores de proyectos',
                              ['controller'=>'Indicators','action'=>'index'],
                              ['escape'=>false]
                            );?>
                          </li>
                          <li>
                            <?php echo $this->Html->link('Crear indicadores de proyectos',
                              ['controller'=>'Indicators','action'=>'add'],
                              ['escape'=>false]
                            );?>
                          </li>
                      </ul>
                  </div>
                  <div class="submenu-row">
                     <h3>Códigos</h3>
                     <ul>
                       <li>
                         <?php echo $this->Html->link('Lista de códigos de proyectos',
                           ['controller'=>'Projectcodes','action'=>'index'],
                           ['escape'=>false]
                         );?>
                       </li>
                       <li>
                         <?php echo $this->Html->link('Crear código de proyecto',
                           ['controller'=>'Projectcodes','action'=>'add'],
                           ['escape'=>false]
                         );?>
                       </li>
                     </ul>
                 </div>
                 <div class="submenu-row">
                    <h3>EPS</h3>
                    <ul>
                      <li>
                        <?php echo $this->Html->link('Lista de EPS',
                          ['controller'=>'Eps','action'=>'index'],
                          ['escape'=>false]
                        );?>
                      </li>
                      <li>
                        <?php echo $this->Html->link('Crear EPS',
                          ['controller'=>'Eps','action'=>'add'],
                          ['escape'=>false]
                        );?>
                      </li>
                    </ul>
                </div>
          </li>
        <?php foreach ($menu as $item): ?>
            <li>
                <?php echo $this->Html->link($item[0],
                  ['controller'=>$item[2],'action'=>$item[1]],
                  ['escape'=>false]
                );?>
                <?php if ( sizeof($item['children']) ): ?>
                <i class="material-icons success-text">keyboard_arrow_down</i>
                <div class='submenu'>
                    <h2>Grupos estratégicos de negocio</h2>
                    <?php foreach ($item['children'] as $subitem ): ?>
                    <div class="submenu-row">
                        <h3><?= $subitem[0] ?></h3>
                        <ul>
                            <?php foreach ($subitem['children'] as $link ): ?>
                            <li>
                              <?php echo $this->Html->link($link[0],
                                ['controller'=>$link[1],'action'=>$link[2]],
                                ['escape'=>false]
                              );?>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
      <?php endif;?>
    <?php endif;?>
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
            $('.dropdown-hover').dropdown({
                hover: true,
            });
        });
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
        // AmCharts.makeChart("ga",
        //     {
        //         "type": "serial",
        //         "language": "es",
        //         "categoryField": "category",
        //         "startDuration": 1,
        //         "fontFamily": "'Open Sans'",
        //         "categoryAxis": {
        //             "gridPosition": "start",
        //             "axisAlpha": 0,
        //             "gridAlpha": 0
        //         },
        //         "trendLines": [],
        //         "graphs": [
        //             {
        //                 "balloonText": "[[title]] de [[category]]:[[value]]",
        //                 "cornerRadiusTop": 6,
        //                 "fillAlphas": 1,
        //                 "id": "AmGraph-1",
        //                 "lineColor": "#2CACE3",
        //                 "title": "Acumulado",
        //                 "type": "column",
        //                 "valueField": "column-1"
        //             }
        //         ],
        //         "guides": [],
        //         "valueAxes": [
        //             {
        //                 "id": "ValueAxis-1",
        //                 "unit": "$ ",
        //                 "unitPosition": "left",
        //                 "axisAlpha": 0,
        //                 "gridAlpha": 0.09,
        //                 "title": "Axis title",
        //                 "titleFontSize": 0,
        //                 "titleRotation": 0
        //             }
        //         ],
        //         "allLabels": [],
        //         "balloon": {},
        //         "titles": [],
        //         "dataProvider": [
        //             {
        //                 "category": "PPTO COP",
        //                 "column-1": "22000000000"
        //             },
        //             {
        //                 "category": "PPTO USD",
        //                 "column-1": "500000000"
        //             },
        //             {
        //                 "category": "AC COP",
        //                 "column-1": "36000000000"
        //             },
        //             {
        //                 "category": "AC USD",
        //                 "column-1": "1000000000"
        //             }
        //         ]
        //     }
        // );

        // Gráfica Tres Generaciones
        // AmCharts.makeChart("tg",
        //     {
        //         "type": "serial",
        //         "categoryField": "category",
        //         "dataDateFormat": "YYYY-MM-DD",
        //         "sequencedAnimation": false,
        //         "startDuration": 1,
        //         "categoryAxis": {
        //             "autoRotateAngle": 90,
        //             "autoRotateCount": 12,
        //             "equalSpacing": true,
        //             "gridPosition": "start",
        //             "minPeriod": "MM",
        //             "startOnAxis": true,
        //             "axisAlpha": 0,
        //             "fontSize": 10,
        //             "gridAlpha": 0,
        //             "ignoreAxisWidth": true,
        //             "titleBold": false
        //         },
        //         "chartCursor": {
        //             "enabled": true,
        //             "cursorColor": "#00A34B"
        //         },
        //         "chartScrollbar": {
        //             "enabled": true,
        //             "color": "#BBBBBB",
        //             "graphType": "line",
        //             "gridCount": 4,
        //             "offset": 60,
        //             "oppositeAxis": false,
        //             "scrollbarHeight": 40
        //         },
        //         "trendLines": [],
        //         "graphs": [
        //             {
        //                 "columnWidth": 0.67,
        //                 "fillAlphas": 1,
        //                 "id": "plannedAnnual",
        //                 "lineAlpha": 0,
        //                 "lineColor": "#2376BC",
        //                 "lineThickness": 0,
        //                 "title": "Planeado",
        //                 "type": "column",
        //                 "valueAxis": "ValueAxis-1",
        //                 "valueField": "col-plannedAnnual",
        //                 "xAxis": "ValueAxis-1",
        //                 "yAxis": "ValueAxis-1"
        //             },
        //             {
        //                 "columnWidth": 0.71,
        //                 "fillAlphas": 1,
        //                 "id": "executedAnnual",
        //                 "lineColor": "#FF8000",
        //                 "title": "Ejecutado",
        //                 "type": "column",
        //                 "valueAxis": "ValueAxis-1",
        //                 "valueField": "col-executedAnnual",
        //                 "xAxis": "ValueAxis-1",
        //                 "yAxis": "ValueAxis-1"
        //             },
        //             {
        //                 "customMarker": "",
        //                 "id": "executed",
        //                 "lineColor": "#FBB800",
        //                 "lineThickness": 3,
        //                 "title": "Ejecutado",
        //                 "valueAxis": "ValueAxis-2",
        //                 "valueField": "col-executed",
        //                 "xAxis": "ValueAxis-2",
        //                 "yAxis": "ValueAxis-2"
        //             },
        //             {
        //                 "dashLength": 4,
        //                 "id": "forecastReal",
        //                 "legendAlpha": 1,
        //                 "lineColor": "#953A12",
        //                 "lineThickness": 3,
        //                 "title": "Forecast real",
        //                 "valueAxis": "ValueAxis-2",
        //                 "valueField": "col-forecastReal"
        //             },
        //             {
        //                 "dashLength": 4,
        //                 "id": "forecast",
        //                 "lineColor": "#4D91CE",
        //                 "lineThickness": 3,
        //                 "title": "Forecast",
        //                 "valueAxis": "ValueAxis-2",
        //                 "valueField": "col-forecast"
        //             },
        //             {
        //                 "fillColors": "undefined",
        //                 "id": "planned",
        //                 "lineColor": "#BBBBBB",
        //                 "lineThickness": 3,
        //                 "title": "Planeado",
        //                 "valueAxis": "ValueAxis-2",
        //                 "valueField": "col-planned"
        //             }
        //         ],
        //         "guides": [],
        //         "valueAxes": [
        //             {
        //                 "id": "ValueAxis-1",
        //                 "unit": "USD ",
        //                 "unitPosition": "left",
        //                 "axisAlpha": 0,
        //                 "fontSize": 10,
        //                 "gridAlpha": 0.05,
        //                 "title": "MILLONES",
        //                 "titleBold": false,
        //                 "titleFontSize": 10
        //             },
        //             {
        //                 "id": "ValueAxis-2",
        //                 "position": "right",
        //                 "unit": "USD ",
        //                 "unitPosition": "left",
        //                 "axisAlpha": 0,
        //                 "fontSize": 10,
        //                 "gridAlpha": 0,
        //                 "title": "MILLONES",
        //                 "titleBold": false,
        //                 "titleFontSize": 10
        //             }
        //         ],
        //         "allLabels": [],
        //         "balloon": {},
        //         "legend": {
        //             "enabled": true,
        //             "autoMargins": false,
        //             "marginRight": 0,
        //             "position": "top",
        //             "spacing": 16,
        //             "useGraphSettings": true
        //         },
        //         "titles": [],
        //         "dataProvider": [
        //             {
        //                 "category": "2013",
        //                 "col-plannedAnnual": "23.01",
        //                 "col-executedAnnual": "4.74",
        //                 "col-executed": "null",
        //                 "col-forecastReal": "null",
        //                 "col-forecast": "null",
        //                 "col-planned": "null"
        //             },
        //             {
        //                 "category": "2014",
        //                 "col-plannedAnnual": "58.07",
        //                 "col-executedAnnual": "8.40",
        //                 "col-executed": "null",
        //                 "col-forecastReal": "null",
        //                 "col-forecast": "null",
        //                 "col-planned": "null"
        //             },
        //             {
        //                 "category": "2015",
        //                 "col-plannedAnnual": "41.93",
        //                 "col-executedAnnual": "12.85",
        //                 "col-executed": "null",
        //                 "col-forecastReal": "null",
        //                 "col-forecast": "null",
        //                 "col-planned": "null"
        //             },
        //             {
        //                 "category": "2016",
        //                 "col-plannedAnnual": "25.38",
        //                 "col-executedAnnual": "2.16",
        //                 "col-executed": "null",
        //                 "col-forecastReal": "null",
        //                 "col-forecast": "null",
        //                 "col-planned": "null"
        //             },
        //             {
        //                 "category": "2017",
        //                 "col-plannedAnnual": "10.32",
        //                 "col-executedAnnual": "7.64",
        //                 "col-executed": "null",
        //                 "col-forecastReal": "null",
        //                 "col-forecast": "null",
        //                 "col-planned": "null"
        //             },
        //             {
        //                 "category": "2018-01",
        //                 "col-plannedAnnual": "null",
        //                 "col-executedAnnual": "null",
        //                 "col-executed": "0.2",
        //                 "col-forecastReal": "null",
        //                 "col-forecast": "null",
        //                 "col-planned": "1.7"
        //             },
        //             {
        //                 "category": "2018-02",
        //                 "col-plannedAnnual": "null",
        //                 "col-executedAnnual": "null",
        //                 "col-executed": "1",
        //                 "col-forecastReal": "null",
        //                 "col-forecast": "null",
        //                 "col-planned": "2"
        //             },
        //             {
        //                 "category": "2018-03",
        //                 "col-plannedAnnual": "null",
        //                 "col-executedAnnual": "null",
        //                 "col-executed": "2",
        //                 "col-forecastReal": "null",
        //                 "col-forecast": "null",
        //                 "col-planned": "3.5"
        //             },
        //             {
        //                 "category": "2018-04",
        //                 "col-plannedAnnual": "null",
        //                 "col-executedAnnual": "null",
        //                 "col-executed": "2.2",
        //                 "col-forecastReal": "null",
        //                 "col-forecast": "null",
        //                 "col-planned": "3.7"
        //             },
        //             {
        //                 "category": "2018-05",
        //                 "col-plannedAnnual": "null",
        //                 "col-executedAnnual": "null",
        //                 "col-executed": "3",
        //                 "col-forecastReal": "null",
        //                 "col-forecast": "null",
        //                 "col-planned": "4.1"
        //             },
        //             {
        //                 "category": "2018-06",
        //                 "col-plannedAnnual": "null",
        //                 "col-executedAnnual": "null",
        //                 "col-executed": "3.1",
        //                 "col-forecastReal": "null",
        //                 "col-forecast": "null",
        //                 "col-planned": "4.5"
        //             },
        //             {
        //                 "category": "2018-07",
        //                 "col-plannedAnnual": "null",
        //                 "col-executedAnnual": "null",
        //                 "col-executed": "3.2",
        //                 "col-forecastReal": "null",
        //                 "col-forecast": "null",
        //                 "col-planned": "4.8"
        //             },
        //             {
        //                 "category": "2018-08",
        //                 "col-plannedAnnual": "null",
        //                 "col-executedAnnual": "null",
        //                 "col-executed": "3.8",
        //                 "col-forecastReal": "null",
        //                 "col-forecast": "3.8",
        //                 "col-planned": "5.3"
        //             },
        //             {
        //                 "category": "2018-09",
        //                 "col-plannedAnnual": "null",
        //                 "col-executedAnnual": "null",
        //                 "col-executed": "4",
        //                 "col-forecastReal": "null",
        //                 "col-forecast": "4.7",
        //                 "col-planned": "6"
        //             },
        //             {
        //                 "category": "2018-10",
        //                 "col-plannedAnnual": "null",
        //                 "col-executedAnnual": "null",
        //                 "col-executed": "4.7",
        //                 "col-forecastReal": "null",
        //                 "col-forecast": "5.2",
        //                 "col-planned": "6.3"
        //             },
        //             {
        //                 "category": "2018-11",
        //                 "col-plannedAnnual": "null",
        //                 "col-executedAnnual": "null",
        //                 "col-executed": "5.02",
        //                 "col-forecastReal": "5.02",
        //                 "col-forecast": "6",
        //                 "col-planned": "7"
        //             },
        //             {
        //                 "category": "2018-12",
        //                 "col-plannedAnnual": "null",
        //                 "col-executedAnnual": "null",
        //                 "col-executed": "null",
        //                 "col-forecastReal": "6",
        //                 "col-forecast": "7.05",
        //                 "col-planned": "8.7"
        //             },
        //             {
        //                 "category": "2019",
        //                 "col-plannedAnnual": "8.5",
        //                 "col-executedAnnual": "null",
        //                 "col-executed": "null",
        //                 "col-forecastReal": "null",
        //                 "col-forecast": "null",
        //                 "col-planned": "null"
        //             },
        //             {
        //                 "category": "2020",
        //                 "col-plannedAnnual": "45.34",
        //                 "col-executedAnnual": "null",
        //                 "col-executed": "null",
        //                 "col-forecastReal": "null",
        //                 "col-forecast": "null",
        //                 "col-planned": "null"
        //             }
        //         ]
        //     }
        // );
    </script>
</body>
</html>
