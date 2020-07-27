<?php
    if (!in_array('ob_gzhandler', ob_list_handlers())) {
      ob_start('ob_gzhandler');
    } else {
      ob_start();
    }
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
            'portalProjects', // Action
            'Projects', //Controller
            'id' => 'dropdownPortalProjects', // ID desplegable
            'class' => 'dropdown-hover',
            // Submenu
            'children' => []
        ],
        [ 'RYOS', 'index','Ryos','id' => '','class' => '','children' => [] ],
        [ 'Lecciones aprendidas', 'index','Events','id' => '','class' => '', 'children' => [] ],
        [ 'Documentos gestión de programas y proyectos', 'index','Documents','id' => '','class' => '', 'children' => [] ],
    ];
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Security-Policy" content="default-src 'self' 'unsafe-inline'; style-src 'self' 'unsafe-inline' *.materialdesignicons.com; font-src 'self' 'unsafe-inline' data: *.gstatic.com fonts.gstatic.com *.materialdesignicons.com;">
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->script(['jquery-3.3.1.min.js','alert.js','leader-line.min.js']) ?>
    <?= $this->Html->script('amcharts4/core.js') ?>
    <?= $this->Html->script('amcharts4/charts.js') ?>
    <?= $this->Html->script('amcharts4/material.js') ?>
    <?= $this->Html->script('amcharts4/animated.js') ?>
    <?= $this->Html->css('materialize.min.css') ?>
    <?= $this->Html->css('icon.css') ?>
    <?= $this->Html->css('fonts.css') ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <header class="header">
        <div class="header-wrapper">
            <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <?php echo $this->Html->link(
              $this->Html->image('logo.svg'),
              ['controller'=>'Pages', 'action'=>'home'],
              ['escape' => false,'class'=>'header-logo']
            );?>
            <nav data-topbar role="navigation">
                <div class="nav-wrapper">
                    <ul>
                      <li>
                        <?php if (isset($current_user)):?>
                        <?php if($current_user['V_ROL']!='Viewer'):?>
                        <a href="#" class="dropdown-hover" data-target="PortalDropDown">
                            Portal alterno
                        </a>
                        <div id="PortalDropDown" class='dropdown-content sub-menu'>
                            <div class="sub-menu-content">
                                <h2>Portal alterno</h2>
                                 <div class="sub-menu-column">
                                    <h3>Proyectos</h3>
                                    <ul>
                                        <li style="display : flex !important">
                                          <?php echo $this->Html->link('Lista de proyectos',
                                            ['controller'=>'Projects','action'=>'index'],
                                            ['escape'=>false]
                                          );?>
                                        </li>
                                    </ul>
                                </div>
                                <div class="sub-menu-column">
                                   <h3>Riesgos</h3>
                                   <ul>
                                     <li style="display : flex !important">
                                       <?php echo $this->Html->link('Lista de riesgos',
                                         ['controller'=>'Risks','action'=>'index'],
                                         ['escape'=>false]
                                       );?>
                                     </li>
                                     <li style="display : flex !important">
                                       <?php echo $this->Html->link('Crear riesgo',
                                         ['controller'=>'Risks','action'=>'add'],
                                         ['escape'=>false]
                                       );?>
                                     </li>
                                   </ul>
                               </div>
                               <div class="sub-menu-column">
                                  <h3>EPS</h3>
                                  <ul>
                                    <li style="display : flex !important">
                                      <?php echo $this->Html->link('Lista de EPS',
                                        ['controller'=>'Eps','action'=>'index'],
                                        ['escape'=>false]
                                      );?>
                                    </li>
                                  </ul>
                              </div>
                            </div>
                        </div>
                      <?php endif;?>
                    <?php endif;?>
                    <?php foreach ($menu as $item): ?>
                        <li>
                          <?php echo $this->Html->link($item[0],
                            ['controller'=>$item[2],'action'=>$item[1]],
                            ['escape'=>false,'class'=>$item['class'],'data-target'=>$item['id']]
                          );?>
                            <div id="<?= $item['id'] ?>" class='dropdown-content sub-menu'>
                                <div class="sub-menu-content">
                                    <h2>Grupos estratégicos de negocios</h2>
                                     <div class="sub-menu-column">
                                       <h3 id="h3-corp"><a class="a-corp no-hover" style="background-color: #fff;" id="nav-a-corp">Corporativo</a></h3>
                                    </div>
                                    <div class="sub-menu-column">
                                        <h3 id="h3-dist">Distribución</h3>
                                        <ul class="ul-dist">
                                        </ul>
                                   </div>
                                   <div class="sub-menu-column">
                                       <h3 id="h3-trans">Transmisión y Transporte</h3>
                                       <ul class = "ul-trans">
                                       </ul>
                                  </div>
                                  <div class="sub-menu-column">
                                      <h3 id="h3-gen">Generación</h3>
                                      <ul class = "ul-gen">
                                      </ul>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </nav>
            <?php  if (isset($current_user)):?>
            <?php  if($current_user['V_ROL']=='Administrator' || $current_user['V_ROL']=='Editor' || $current_user['V_ROL']=='Viewer'):?>
            <div id="header-user" class="header-user dropdown-trigger" data-target='dropdownUser' data-identifier='<?= $current_user['V_ID_P_USER'] ?>'>
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
                        <h2 id="name-element"><?= $user['name'] ?></h2>
                        <small id="email-element"><?= $user['email'] ?></small>
                    </div>
                </li>
                <li class="divider" tabindex="-1"></li>
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
        <?php if($current_user['V_ROL']!='Viewer'):?>
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
                          <!-- <li>
                            </?php echo $this->Html->link('Crear proyecto',
                              ['controller'=>'Projects','action'=>'add'],
                              ['escape'=>false]
                            );?>
                          </li> -->
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
                          <!-- <li>
                            </?php echo $this->Html->link('Lista de indicadores de proyectos',
                              ['controller'=>'Indicators','action'=>'index'],
                              ['escape'=>false]
                            );?>
                          </li>
                          <li>
                            </?php echo $this->Html->link('Crear indicadores de proyectos',
                              ['controller'=>'Indicators','action'=>'add'],
                              ['escape'=>false]
                            );?>
                          </li> -->
                      </ul>
                  </div>
                  <!-- <div class="submenu-row">
                     <h3>Códigos</h3>
                     <ul>
                       <li>
                         </?php echo $this->Html->link('Lista de códigos de proyectos',
                           ['controller'=>'Projectcodes','action'=>'index'],
                           ['escape'=>false]
                         );?>
                       </li>
                       <li>
                         </?php echo $this->Html->link('Crear código de proyecto',
                           ['controller'=>'Projectcodes','action'=>'add'],
                           ['escape'=>false]
                         );?>
                       </li>
                     </ul>
                 </div> -->
                 <div class="submenu-row">
                    <h3>EPS</h3>
                    <ul>
                      <li>
                        <?php echo $this->Html->link('Lista de EPS',
                          ['controller'=>'Eps','action'=>'index'],
                          ['escape'=>false]
                        );?>
                      </li>
                      <!-- <li>
                        </?php echo $this->Html->link('Crear EPS',
                          ['controller'=>'Eps','action'=>'add'],
                          ['escape'=>false]
                        );?>
                      </li> -->
                    </ul>
                </div>
          </li>
        <?php endif;?>
        <?php endif;?>
        <?php foreach ($menu as $item): ?>
            <li>
                <?php echo $this->Html->link($item[0],
                  ['controller'=>$item[2],'action'=>$item[1]],
                  ['escape'=>false]
                );?>
                <i class="material-icons success-text">keyboard_arrow_down</i>
                  <div class='submenu'>
                    <h2>Grupos estratégicos de negocio</h2>
                      <div class="submenu-row">
                        <h3><a class="a-corp no-hover" style="background-color: #fff;" id="nav-a-corp">Corporativo</a></h3>
                        <h3>Distribución</h3>
                          <ul class = "ul-dist">
                          </ul>
                          <h3>Transmisión y Transporte</h3>
                          <ul class = "ul-trans">
                          </ul>
                          <h3>Generación</h3>
                          <ul class = "ul-gen">
                          </ul>
                        </div>
                      </div>
                  </li>
                <?php endforeach; ?>
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
    <?= $this->Html->script(['materialize.min.js']) ?>
    <script async>
        $(document).ready(function(){
            $('.sidenav').sidenav();
            $('select').formSelect();
            $('.tooltipped').tooltip();
            $('.modal').modal();
            $('.collapsible').collapsible();
            $('.dropdown-trigger').dropdown();
            $('.dropdown-hover').dropdown({
                hover: true
            });
            $('.tabs').tabs();
            $('.carousel.carousel-slider').carousel({
              fullWidth: true,
              indicators: true
            });
        });
    </script>
</body>
</html>
