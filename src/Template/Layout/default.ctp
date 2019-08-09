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
                       [ 'Sucursal de Transmisión', 'Pages', 'Company']
                    ]
                ],
                [
                    'Generación',
                    'children' => [],
                ]
            ]
        ],
        [ 'RYOS', 'index','Ryos','id' => '','children' => [] ],
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
    <?= $this->Html->script('jquery-3.3.1.min.js',['async']) ?>
    <!-- </?= $this->Html->script(['jquery-3.3.1.min.js']) ?> -->
    <?= $this->Html->css('materialize.css') ?>
    <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,900" rel="stylesheet">
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <header class="header">
        <!-- </?= $this->Html->css('login.css') ?>
        </?= $this->Html->css('textlength.css') ?>
        </?= $this->Html->css('placeholder.css') ?>
        </?= $this->Html->css('error')?> -->
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
                                   <h3>Riesgos</h3>
                                   <ul>
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
                            ['escape'=>false,'class'=>'dropdown-hover','data-target'=>$item['id']]
                          );?>
                            <?php if ( sizeof($item['children']) ): ?>
                            <div id="<?= $item['id'] ?>" class='dropdown-content sub-menu'>
                                <div class="sub-menu-content">
                                    <h2>Grupos estratégicos de negocios</h2>
                                     <div class="sub-menu-column">
                                           <h3><?=$titleGEB?></h3>
                                    </div>
                                    <div class="sub-menu-column">
                                        <h3><?=$titleDIS?></h3>
                                        <ul>
                                            <?php foreach($AllEps as $row => $valueAllEps):?>
                                              <?php if ($valueAllEps["parent_eps_object_id"]== 23307): ?>
                                                <li>
                                                    <?php echo $this->Html->link($valueAllEps["name"],
                                                      ['controller'=>'Projects','action'=>'Company',urlencode(base64_encode($current_user['V_ID_P_USER'])),urlencode(base64_encode($valueAllEps["eps_id"])),urlencode(base64_encode($valueAllEps["name"])),urlencode(base64_encode($titleDIS)),urlencode(base64_encode($valueAllEps["parent_eps_object_id"]))],
                                                      ['escape'=>false]
                                                    );?>
                                                </li>
                                              <?php endif; ?>
                                            <?php endforeach; ?>
                                        </ul>
                                   </div>
                                   <div class="sub-menu-column">
                                       <h3><?=$titleTRANS?></h3>
                                       <ul>
                                           <?php foreach($AllEps as $row => $valueAllEps):?>
                                             <?php if ($valueAllEps["parent_eps_object_id"]== 23306): ?>
                                               <li>
                                                 <?php if($valueAllEps["eps_id"] != 34013 && $valueAllEps["eps_id"] != 34021 && $valueAllEps["eps_id"] != 34015 && $valueAllEps["eps_id"] != 34017):?>
                                                   <?php echo $this->Html->link($valueAllEps["name"],
                                                     ['controller'=>'Projects','action'=>'Company',urlencode(base64_encode($current_user['V_ID_P_USER'])),urlencode(base64_encode($valueAllEps["eps_id"])),urlencode(base64_encode($valueAllEps["name"])),urlencode(base64_encode($titleTRANS)),urlencode(base64_encode($valueAllEps["parent_eps_object_id"]))],
                                                     ['escape'=>false]
                                                   );?>
                                                 <?php else:?>
                                                   <?php echo $this->Html->link($valueAllEps["name"],
                                                     ['controller'=>'Projects','action'=>'companyGas',urlencode(base64_encode($current_user['V_ID_P_USER'])),urlencode(base64_encode($valueAllEps["eps_id"])),urlencode(base64_encode($valueAllEps["name"])),urlencode(base64_encode($titleTRANS)),urlencode(base64_encode($valueAllEps["parent_eps_object_id"]))],
                                                     ['escape'=>false]
                                                   );?>
                                                 <?php endif;?>
                                               </li>
                                             <?php endif; ?>
                                           <?php endforeach; ?>
                                       </ul>
                                  </div>
                                  <div class="sub-menu-column">
                                      <h3><?=$titleGEN?></h3>
                                      <ul>
                                          <?php foreach($AllEps as $row => $valueAllEps):?>
                                            <?php if ($valueAllEps["parent_eps_object_id"]== 23308): ?>
                                              <li>
                                                  <?php echo $this->Html->link($valueAllEps["name"],
                                                    ['controller'=>'Projects','action'=>'Company',urlencode(base64_encode($current_user['V_ID_P_USER'])),urlencode(base64_encode($valueAllEps["eps_id"])),urlencode(base64_encode($valueAllEps["name"])),urlencode(base64_encode($titleGEN)),urlencode(base64_encode($valueAllEps["parent_eps_object_id"]))],
                                                    ['escape'=>false]
                                                  );?>
                                              </li>
                                            <?php endif; ?>
                                          <?php endforeach; ?>
                                      </ul>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>
                    <?php endforeach; ?>
                    </ul>
                </div>
            </nav>
            <?php  if (isset($current_user)):?>
            <?php  if($current_user['V_ROL']=='Administrator' || $current_user['V_ROL']=='Editor' || $current_user['V_ROL']=='Viewer'):?>
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
        <?php endif;?>
        <?php endif;?>
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
                      <div class="submenu-row">
                        <h3><?=$titleGEB?></h3>
                        <h3><?=$titleDIS?></h3>
                          <ul>
                            <?php foreach($AllEps as $row => $valueAllEps):?>
                              <?php if ($valueAllEps["parent_eps_object_id"]== 23307): ?>
                                <li>
                                  <?php echo $this->Html->link($valueAllEps["name"],
                                    ['controller'=>'Projects','action'=>'Company',urlencode(base64_encode($current_user['V_ID_P_USER'])),urlencode(base64_encode($valueAllEps["eps_id"])),urlencode(base64_encode($valueAllEps["name"])),urlencode(base64_encode($titleDIS)),urlencode(base64_encode($valueAllEps["parent_eps_object_id"]))],
                                    ['escape'=>false]
                                  );?>
                                </li>
                              <?php endif; ?>
                            <?php endforeach; ?>
                          </ul>
                          <h3><?=$titleTRANS?></h3>
                          <ul>
                              <?php foreach($AllEps as $row => $valueAllEps):?>
                                <?php if ($valueAllEps["parent_eps_object_id"]== 23306): ?>
                                  <li>
                                    <?php if($valueAllEps["eps_id"] != 34013 && $valueAllEps["eps_id"] != 34021 && $valueAllEps["eps_id"] != 34015 && $valueAllEps["eps_id"] != 34017):?>
                                      <?php echo $this->Html->link($valueAllEps["name"],
                                        ['controller'=>'Projects','action'=>'Company',urlencode(base64_encode($current_user['V_ID_P_USER'])),urlencode(base64_encode($valueAllEps["eps_id"])),urlencode(base64_encode($valueAllEps["name"])),urlencode(base64_encode($titleTRANS)),urlencode(base64_encode($valueAllEps["parent_eps_object_id"]))],
                                        ['escape'=>false]
                                      );?>
                                    <?php else:?>
                                      <?php echo $this->Html->link($valueAllEps["name"],
                                        ['controller'=>'Projects','action'=>'companyGas',urlencode(base64_encode($current_user['V_ID_P_USER'])),urlencode(base64_encode($valueAllEps["eps_id"])),urlencode(base64_encode($valueAllEps["name"])),urlencode(base64_encode($titleTRANS)),urlencode(base64_encode($valueAllEps["parent_eps_object_id"]))],
                                        ['escape'=>false]
                                      );?>
                                    <?php endif;?>
                                  </li>
                                <?php endif; ?>
                              <?php endforeach; ?>
                          </ul>
                          <h3><?=$titleGEN?></h3>
                          <ul>
                              <?php foreach($AllEps as $row => $valueAllEps):?>
                                <?php if ($valueAllEps["parent_eps_object_id"]== 23308): ?>
                                  <li>
                                      <?php echo $this->Html->link($valueAllEps["name"],
                                        ['controller'=>'Projects','action'=>'Company',urlencode(base64_encode($current_user['V_ID_P_USER'])),urlencode(base64_encode($valueAllEps["eps_id"])),urlencode(base64_encode($valueAllEps["name"])),urlencode(base64_encode($titleGEN)),urlencode(base64_encode($valueAllEps["parent_eps_object_id"]))],
                                        ['escape'=>false]
                                      );?>
                                  </li>
                                <?php endif; ?>
                              <?php endforeach; ?>
                          </ul>
                        </div>
                      </div>
                    <?php endif; ?>
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
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
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
                hover: true
            });
        });
    </script>
</body>
</html>
