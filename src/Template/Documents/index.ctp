<?php
    // Breadcrumb
    $breadcrumb = [
        [ 'Inicio', 'home','Pages','PortalProjects'],
        [ 'Gestión documental','index','Documents'],
    ];

    // Proyectos
    $charts = [
        [
            'id' => 1,
            'name' => 'Gráfica 1', // Título gráfica
        ],
        [
            'id' => 2,
            'name' => 'Gráfica 2'
        ],
        [
            'id' => 3,
            'name' => 'Gráfica 3'
        ],
        [
            'id' => 4,
            'name' => 'Gráfica 4'
        ],
    ];

    $GeneralIndicators = [
      [
        'id' => 'pe-value',
        'name' => 'Proyectos Enlazados',
        'value' => ''
      ],
      [
        'id' => 'pa-value',
        'name' => 'Proyectos Asignados',
        'value' => ''
      ],
      [
        'id' => 'nr-value',
        'name' => 'Muestra del número de registros',
        'value' => ''
      ],
      [
        'id' => 'bp-value',
        'name' => 'Procesos de negocio',
        'value' => '3'
      ]
    ];
    // Títulos tablas
    $headers_table_1 = ['Registro','Estatus','Fecha registro','Proyecto','Título','Creador','Título doc.','Descripción','Carpeta'];
    $headers_table_2 = ['Registro','Estatus','Fecha registro','Proyecto','Título','Creador','Nombre doc.','Asunto doc.','Aprobación'];
    $headers_table_3 = ['Registro','Estatus','Fecha registro','Proyecto','Título','Creador','Nombre doc.','Asunto doc.','Email'];
?>
<div class="section portal-projects">
  <div class="breadcrumb-container">
    <a href="javascript:history.back()" class="breadcrumb-back"><i class="material-icons">keyboard_arrow_left</i></a>
    <?php foreach ($breadcrumb as $item): ?>
      <?php echo $this->Html->link($item[0],
        ['controller'=>$item[2], 'action'=>$item[1]],
        ['escape' => false,'class'=>'breadcrumb']
      );?>
    <?php endforeach; ?>
  </div>
  <div class="section home">
    <div class="col s12 ml-1 mr-1 pb-1">
      <ul class="tabs mb-3" style="border-bottom: 1px solid #ccc">
        <li id="graph_link" class="tab col l2 m4 s6"><a class="active-side" href="">Gráficas</a></li>
        <li id="list_link" class="tab col l3 m4 s6"><a href="">Lista</a></li>
      </ul>
    </div>
    <div class="col l12 m12 s12 mt-1 ml-2 mr-2">
      <div class="row wrap">
        <?php foreach ($GeneralIndicators as $Indicators): ?>
          <div class="d-flex col s6 m3 l3 xl3" style="padding:0 !important; margin:0 !important">
            <div class="col xl3 l3 m6 s6 item-card" style="padding-bottom:0 !important; padding-top:0 !important">
              <div class="kpi-card border-color">
                <div class="value-kpi" id="<?=$Indicators['id']?>"><?=$Indicators['value']?></div>
                <div class="cont-title-kpi">
                  <div class="title-kpi t-semibold"><?=$Indicators['name']?></div>
                  <div><i class="p9 fas fa-arrow-right"></i></div>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach;?>
      </div>
    </div>
    <div class="table-container col l5 m6 s12 mt-1 ml-1 mr-1">
      <!-- Field camp -->
      <div class="field-search">
        <div class="cont-icon" style="opacity: 0.8"><i class=" material-icons">search</i></div>
        <input id="Search_Input" onkeyup="Search()" type="text" placeholder="Buscar en la lista ">
        <div class="cont-icon" style="opacity: 0.7; cursor:pointer"><i id="remove-search" class="material-icons">close</i></div>
      </div>
    </div>
    <div class="divider transparent mb-1"></div>
    <div id="chart-container" class="row wrap">
      <?php
        $a = 1;
        $cont = 0;
        $loop = 0;
      ?>
      <?php foreach ($charts as $chart): ?>
        <?php
          $loop = $a++;
          if($loop == 2){
            $cont = 1;
          } else {
            $cont = $loop;
          }
        ?>
        <?php if($loop == 1 || $loop == 2):?>
        <div class="d-flex col s12 m6 l6 xl6">
          <div class="col xl12 l12 m12 s12">
            <div class="graph-card">
              <div class="sheet-options">
                <a class='dropdown-trigger btn-flat mt-3 ' href='' data-target='dropdown<?= $chart['id'] ?>'>
                  <i class="material-icons" style="font-size: 2rem">more_vert</i>
                </a>
                <ul id='dropdown<?= $chart['id'] ?>' class='dropdown-content'>
                  <li><a class="modal-trigger" href="#modalFilter<?=$cont?>"><i class="mdi material-icons">insert_chart</i>Filtrar gráfica</a></li>
<<<<<<< HEAD
                  <li>
                    <a href="#!"><i class="mdi"><svg style="width:24px;height:24px" viewBox="0 0 24 24">
=======
                  <li id="li-chart-<?=$chart['id']?>">
                    <a id="link-pdf-<?=$chart['id']?>"><i class="mdi"><svg style="width:24px;height:24px" viewBox="0 0 24 24">
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
                      <path fill="currentColor" d="M19,3A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5C3.89,21 3,20.1 3,19V5C3,3.89 3.89,3 5,3H19M10.59,10.08C10.57,10.13 10.3,11.84 8.5,14.77C8.5,14.77 5,16.58 5.83,17.94C6.5,19 8.15,17.9 9.56,15.27C9.56,15.27 11.38,14.63 13.79,14.45C13.79,14.45 17.65,16.19 18.17,14.34C18.69,12.5 15.12,12.9 14.5,13.09C14.5,13.09 12.46,11.75 12,9.89C12,9.89 13.13,5.95 11.38,6C9.63,6.05 10.29,9.12 10.59,10.08M11.4,11.13C11.43,11.13 11.87,12.33 13.29,13.58C13.29,13.58 10.96,14.04 9.9,14.5C9.9,14.5 10.9,12.75 11.4,11.13M15.32,13.84C15.9,13.69 17.64,14 17.58,14.32C17.5,14.65 15.32,13.84 15.32,13.84M8.26,15.7C7.73,16.91 6.83,17.68 6.6,17.67C6.37,17.66 7.3,16.07 8.26,15.7M11.4,8.76C11.39,8.71 11.03,6.57 11.4,6.61C11.94,6.67 11.4,8.71 11.4,8.76Z" />
                    </svg></i>Descargar pdf</a>
                  </li>
                </ul>
              </div>
              <div class="head-dropdown-filter">
                <div class="cont-title">
                  <?php if($loop == 1):?>
                    <div class="title-graph p1 tc" style="font-weight: bold;">Estados de los registros</div>
                  <?php else:?>
                    <div class="title-graph p1 tc" style="font-weight: bold;">Creadores de registros</div>
                  <?php endif;?>
                </div>
              </div>
              <div class="carousel carousel-slider center">
<<<<<<< HEAD
                <div class="carousel-item white" href="#one!">
                  <div id="advance<?=$loop?>" class="pb-6" style="width: 90%; height: 400px; margin-left: 5%;"></div>
                </div>
                <div class="carousel-item white white-text" href="#two!">
                  <div id="column<?=$loop?>" class="pb-6" style="width: 100%; height: 370px; margin-top: 25px; padding-right: 5%;"></div>
                </div>
                <div class="carousel-item white white-text" href="#three!">
                  <div id="bar<?=$loop?>" style="width: 90%; height: 370px; margin-left: 2%;"></div>
=======
                <div class="carousel-item carousel-<?= $chart['id'] ?> white" href="#one!">
                  <div id="advance<?=$loop?>" data-chart="pie" class="pb-6" style="width: 90%; height: 400px; margin-left: 5%;"></div>
                </div>
                <div class="carousel-item carousel-<?= $chart['id'] ?> white white-text" href="#two!">
                  <div id="column<?=$loop?>" data-chart="column" class="pb-6" style="width: 100%; height: 370px; margin-top: 25px; padding-right: 5%;"></div>
                </div>
                <div class="carousel-item carousel-<?= $chart['id'] ?> white white-text" href="#three!">
                  <div id="bar<?=$loop?>" data-chart="bar" style="width: 90%; height: 370px; margin-left: 2%;"></div>
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php elseif($loop == 3):?>
<<<<<<< HEAD
          <div class="d-flex col s12 m12 l8 xl8">
          <div class="col xl12 l12 m12 s12">
            <div class="graph-card" style="overflow: auto;">
              <div class="sheet-options">
                <a class='dropdown-trigger btn-flat mt-3 ' href='' data-target='dropdown<?= $chart['id'] ?>'>
                  <i class="material-icons" style="font-size: 2rem">more_vert</i>
                </a>
                <ul id='dropdown<?= $chart['id'] ?>' class='dropdown-content'>
                  <li><a class="modal-trigger" href="#modalFilter<?=$cont?>"><i class="mdi material-icons">insert_chart</i>Filtrar gráfica</a></li>
                  <li>
                    <a href="#!"><i class="mdi"><svg style="width:24px;height:24px" viewBox="0 0 24 24">
                      <path fill="currentColor" d="M19,3A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5C3.89,21 3,20.1 3,19V5C3,3.89 3.89,3 5,3H19M10.59,10.08C10.57,10.13 10.3,11.84 8.5,14.77C8.5,14.77 5,16.58 5.83,17.94C6.5,19 8.15,17.9 9.56,15.27C9.56,15.27 11.38,14.63 13.79,14.45C13.79,14.45 17.65,16.19 18.17,14.34C18.69,12.5 15.12,12.9 14.5,13.09C14.5,13.09 12.46,11.75 12,9.89C12,9.89 13.13,5.95 11.38,6C9.63,6.05 10.29,9.12 10.59,10.08M11.4,11.13C11.43,11.13 11.87,12.33 13.29,13.58C13.29,13.58 10.96,14.04 9.9,14.5C9.9,14.5 10.9,12.75 11.4,11.13M15.32,13.84C15.9,13.69 17.64,14 17.58,14.32C17.5,14.65 15.32,13.84 15.32,13.84M8.26,15.7C7.73,16.91 6.83,17.68 6.6,17.67C6.37,17.66 7.3,16.07 8.26,15.7M11.4,8.76C11.39,8.71 11.03,6.57 11.4,6.61C11.94,6.67 11.4,8.71 11.4,8.76Z" />
                    </svg></i>Descargar pdf</a>
                  </li>
                </ul>
              </div>
              <div class="head-dropdown-filter">
                <div class="cont-title">
                <!-- </?php echo $this->Html->link(__('Export to PDF'), array('action' => 'Documents', 'ext' => 'pdf')); ?> -->
                  <div class="title-graph p1 tc" style="font-weight: bold;">Número de registros por proyecto</div>
                </div>
              </div>
              <div class="carousel carousel-slider center">
                <div class="carousel-item white" href="#one!">
                  <div id="column<?=$loop?>" class="pb-6" style="width: 100%; height: 370px; margin-top: 25px; padding-right: 5%;"></div>
                </div>
                <div id="projectCarousel" class="carousel-item white white-text" href="#two!">
                  <div id="advance<?=$loop?>" class="pb-6" style="width: 90%; height: 400px; margin-left: 5%;"></div>
                </div>
                <div class="carousel-item white white-text" href="#three!">
                  <div id="bar<?=$loop?>" style="width: 90%; height: 370px; margin-left: 2%;"></div>
=======
          <div id="container-chart-3" class="d-flex col s12 m12 l8 xl8">
            <div class="col xl12 l12 m12 s12">
              <div class="graph-card" style="overflow: auto;">
                <div class="sheet-options">
                  <a class='dropdown-trigger btn-flat mt-3 ' href='' data-target='dropdown<?= $chart['id'] ?>'>
                    <i class="material-icons" style="font-size: 2rem">more_vert</i>
                  </a>
                  <ul id='dropdown<?= $chart['id'] ?>' class='dropdown-content'>
                    <li><a class="modal-trigger" href="#modalFilter<?=$cont?>"><i class="mdi material-icons">insert_chart</i>Filtrar gráfica</a></li>
                    <li id="li-chart-<?=$chart['id']?>">
                      <a id="link-pdf-3"><i class="mdi"><svg style="width:24px;height:24px" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M19,3A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5C3.89,21 3,20.1 3,19V5C3,3.89 3.89,3 5,3H19M10.59,10.08C10.57,10.13 10.3,11.84 8.5,14.77C8.5,14.77 5,16.58 5.83,17.94C6.5,19 8.15,17.9 9.56,15.27C9.56,15.27 11.38,14.63 13.79,14.45C13.79,14.45 17.65,16.19 18.17,14.34C18.69,12.5 15.12,12.9 14.5,13.09C14.5,13.09 12.46,11.75 12,9.89C12,9.89 13.13,5.95 11.38,6C9.63,6.05 10.29,9.12 10.59,10.08M11.4,11.13C11.43,11.13 11.87,12.33 13.29,13.58C13.29,13.58 10.96,14.04 9.9,14.5C9.9,14.5 10.9,12.75 11.4,11.13M15.32,13.84C15.9,13.69 17.64,14 17.58,14.32C17.5,14.65 15.32,13.84 15.32,13.84M8.26,15.7C7.73,16.91 6.83,17.68 6.6,17.67C6.37,17.66 7.3,16.07 8.26,15.7M11.4,8.76C11.39,8.71 11.03,6.57 11.4,6.61C11.94,6.67 11.4,8.71 11.4,8.76Z" />
                      </svg></i>Descargar pdf</a>
                    </li>
                  </ul>
                </div>
                <div class="head-dropdown-filter">
                  <div class="cont-title">
                    <div class="title-graph p1 tc" style="font-weight: bold;">Número de registros por proyecto</div>
                  </div>
                </div>
                <div class="carousel carousel-slider center">
                  <div class="carousel-item carousel-<?= $chart['id'] ?> white" href="#one!">
                    <div id="column<?=$loop?>" data-chart="column" class="pb-6" style="width: 100%; height: 370px; margin-top: 25px; padding-right: 5%;"></div>
                  </div>
                  <div id="projectCarousel" class="carousel-item carousel-<?= $chart['id'] ?> white white-text" href="#two!">
                    <div id="advance<?=$loop?>" data-chart="pie" class="pb-6" style="width: 90%; height: 400px; margin-left: 5%;"></div>
                  </div>
                  <div class="carousel-item carousel-<?= $chart['id'] ?> white white-text" href="#three!">
                    <div id="bar<?=$loop?>" data-chart="bar" style="width: 90%; height: 370px; margin-left: 2%;"></div>
                  </div>
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
                </div>
              </div>
            </div>
          </div>
<<<<<<< HEAD
        </div>
        <div id="legendMainDiv" class="d-flex col s12 m6 l3 xl3">
          <div class="col xl12 l12 m12 s12">
            <div id="legendwrapper" class="graph-card" style="height: 300px;">
              <div id="legenddiv"></div>
            </div>
          </div>
        </div>
=======
          <div id="legendMainDiv" class="d-flex col s12 m6 l3 xl3">
            <div class="col xl12 l12 m12 s12">
              <div id="legendwrapper" class="graph-card" style="height: 300px;">
                <div id="legenddiv"></div>
              </div>
            </div>
          </div>
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
        <?php else:?>
          <div class="d-flex col s12 m6 l4 xl4">
          <div class="col xl12 l12 m12 s12">
            <div class="graph-card">
              <div class="sheet-options">
                <a class='dropdown-trigger btn-flat mt-3 ' href='' data-target='dropdown<?= $chart['id'] ?>'>
                  <i class="material-icons" style="font-size: 2rem">more_vert</i>
                </a>
                <ul id='dropdown<?= $chart['id'] ?>' class='dropdown-content'>
                  <li><a class="modal-trigger" href="#modalFilter<?=$cont?>"><i class="mdi material-icons">insert_chart</i>Filtrar gráfica</a></li>
<<<<<<< HEAD
                  <li>
                    <a href="#!"><i class="mdi"><svg style="width:24px;height:24px" viewBox="0 0 24 24">
=======
                  <li id="li-chart-<?=$chart['id']?>">
                    <a id="link-pdf-4"><i class="mdi"><svg style="width:24px;height:24px" viewBox="0 0 24 24">
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
                      <path fill="currentColor" d="M19,3A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5C3.89,21 3,20.1 3,19V5C3,3.89 3.89,3 5,3H19M10.59,10.08C10.57,10.13 10.3,11.84 8.5,14.77C8.5,14.77 5,16.58 5.83,17.94C6.5,19 8.15,17.9 9.56,15.27C9.56,15.27 11.38,14.63 13.79,14.45C13.79,14.45 17.65,16.19 18.17,14.34C18.69,12.5 15.12,12.9 14.5,13.09C14.5,13.09 12.46,11.75 12,9.89C12,9.89 13.13,5.95 11.38,6C9.63,6.05 10.29,9.12 10.59,10.08M11.4,11.13C11.43,11.13 11.87,12.33 13.29,13.58C13.29,13.58 10.96,14.04 9.9,14.5C9.9,14.5 10.9,12.75 11.4,11.13M15.32,13.84C15.9,13.69 17.64,14 17.58,14.32C17.5,14.65 15.32,13.84 15.32,13.84M8.26,15.7C7.73,16.91 6.83,17.68 6.6,17.67C6.37,17.66 7.3,16.07 8.26,15.7M11.4,8.76C11.39,8.71 11.03,6.57 11.4,6.61C11.94,6.67 11.4,8.71 11.4,8.76Z" />
                    </svg></i>Descargar pdf</a>
                  </li>
                </ul>
              </div>
              <div class="head-dropdown-filter">
                <div class="cont-title">
                  <div class="title-graph p1 tc" style="font-weight: bold;">Procesos de negocio - Proyecto</div>
                </div>
              </div>
              <div class="carousel carousel-slider center">
<<<<<<< HEAD
                <div class="carousel-item white" href="#one!">
                  <div id="advance<?=$loop?>" class="" style="width: 90%; height: 300px; margin-left: 5%;"></div>
                </div>
                <div class="carousel-item white white-text" href="#two!">
                  <div id="column<?=$loop?>" class="pb-6" style="width: 100%; height: 370px; margin-top: 25px; padding-right: 5%;"></div>
                </div>
                <div class="carousel-item white white-text" href="#three!">
                  <div id="bar<?=$loop?>" style="width: 90%; height: 370px; margin-left: 2%;"></div>
=======
                <div class="carousel-item carousel-<?= $chart['id'] ?> white" href="#one!">
                  <div id="advance<?=$loop?>" data-chart="pie" class="" style="width: 90%; height: 300px; margin-left: 5%;"></div>
                </div>
                <div class="carousel-item carousel-<?= $chart['id'] ?> white white-text" href="#two!">
                  <div id="column<?=$loop?>" data-chart="column" class="pb-6" style="width: 100%; height: 370px; margin-top: 25px; padding-right: 5%;"></div>
                </div>
                <div class="carousel-item carousel-<?= $chart['id'] ?> white white-text" href="#three!">
                  <div id="bar<?=$loop?>" data-chart="bar" style="width: 90%; height: 370px; margin-left: 2%;"></div>
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php endif;?>
      <?php endforeach; ?>
    </div>
    <div class="table-container col l12 m12 s12 ml-2 mr-2">
      <div class="row">
        <div class="col l12 m12 s12">
          <div class="cont-table">
            <table id="myTable1" class="table-compress myTable">
              <thead>
                <tr>
                  <th>BP Registro Documental Contratista</th>
                  <?php foreach($headers_table_1 as $item_header): ?>
                    <th></th>
                  <?php endforeach;?>
                </tr>
                <tr>
                  <?php foreach($headers_table_1 as $item_header): ?>
                    <th>
                      <?= $item_header ?>
                      <i class="xed fas fa-arrow-up"></i>
                      <!-- <i class="xed fas fa-arrow-down"></i> -->
                    </th>
                  <?php endforeach;?>
                </tr>
              </thead>
              <tbody id="tbody-bp-contratista" class="table-body"></tbody>
            </table>
            <!-- Footer table -->
            <div class="footer-table">
              <ul id="rd-cont" class="pagination tc"></ul>
              <div class="spacer-table"></div>
                <div class="cont-contrls">
                  <div class="rows-cant">
                    <div class="label">Filas por pág:</div>
                    <div class="cont-select">
                      <select id="row-range-cont" class="row-range">
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                        <option value="250">250</option>
                        <option value="500">500</option>
                      </select>
                    </div>
                  </div>
                  <!-- <div class="conter-rows">1-8 de 200</div>
                  <div>
                    <a class="btn-floating btn-small waves-effect primary mr-1"><i class="material-icons" style="font-size: 9pt">keyboard_arrow_left</i></a>
                    <a class="btn-floating btn-small waves-effect primary"><i class="material-icons" style="font-size: 9pt">keyboard_arrow_right</i></a>
                  </div> -->
                </div>
              </div>
            </div>
            <div class="cont-table mt-3">
              <table id="myTable2" class="table-compress myTable">
                <thead>
                  <tr>
                    <th>BP Registro Documental Interno</th>
                    <?php foreach($headers_table_2 as $item_header): ?>
                      <th></th>
                    <?php endforeach;?>
                  </tr>
                  <tr>
                    <?php foreach($headers_table_2 as $item_header): ?>
                      <th>
                        <?= $item_header ?>
                        <i class="xed fas fa-arrow-up"></i>
                        <!-- <i class="xed fas fa-arrow-down"></i> -->
                      </th>
                    <?php endforeach;?>
                  </tr>
                </thead>
                <tbody id="tbody-bp-interno" class="table-body"></tbody>
              </table>
              <!-- Footer table -->
              <div class="footer-table">
                <ul id="rd-interno" class="pagination tc"></ul>
                <div class="spacer-table"></div>
                  <div class="cont-contrls">
                    <div class="rows-cant">
                      <div class="label">Filas por pág:</div>
                      <div class="cont-select">
                        <select id="row-range-interno" class="row-range">
<<<<<<< HEAD
                          <option value="5">25</option>
=======
                          <option value="2">25</option>
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
                          <option value="50">50</option>
                          <option value="100">100</option>
                          <option value="250">250</option>
                          <option value="500">500</option>
                        </select>
                      </div>
                    </div>
                    <!-- <div class="conter-rows">1-8 de 200</div>
                    <div>
                      <a class="btn-floating btn-small waves-effect primary mr-1"><i class="material-icons" style="font-size: 9pt">keyboard_arrow_left</i></a>
                      <a class="btn-floating btn-small waves-effect primary"><i class="material-icons" style="font-size: 9pt">keyboard_arrow_right</i></a>
                    </div> -->
                  </div>
                </div>
              </div>
              <div class="cont-table mt-3">
                <table id="myTable3" class="table-compress myTable">
                  <thead>
                    <tr>
                      <th>BP Registro Documental Externo</th>
                      <?php foreach($headers_table_3 as $item_header): ?>
                        <th></th>
                      <?php endforeach;?>
                    </tr>
                    <tr>
                      <?php foreach($headers_table_3 as $item_header): ?>
                        <th>
                          <?= $item_header ?>
                          <i class="xed fas fa-arrow-up"></i>
<<<<<<< HEAD
                          <!-- <i class="xed fas fa-arrow-down"></i> -->
=======
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
                        </th>
                      <?php endforeach;?>
                    </tr>
                  </thead>
                  <tbody id="tbody-bp-externo" class="table-body"></tbody>
                </table>
                <!-- Footer table -->
                <div class="footer-table">
                  <ul id="rd-externo" class="pagination tc"></ul>
                  <div class="spacer-table"></div>
                    <div class="cont-contrls">
                      <div class="rows-cant">
                        <div class="label">Filas por pág:</div>
                        <div class="cont-select">
                          <select id="row-range-externo" class="row-range">
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                            <option value="250">250</option>
                            <option value="500">500</option>
                          </select>
                        </div>
                      </div>
<<<<<<< HEAD
                      <!-- <div class="conter-rows">1-8 de 200</div>
                      <div>
                        <a class="btn-floating btn-small waves-effect primary mr-1"><i class="material-icons" style="font-size: 9pt">keyboard_arrow_left</i></a>
                        <a class="btn-floating btn-small waves-effect primary"><i class="material-icons" style="font-size: 9pt">keyboard_arrow_right</i></a>
                      </div> -->
=======
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
                    </div>
                  </div>
                </div>
          </div>
        </div>
      </div>
    <?php for ($i=1; $i < 6; $i++):?>
      <?php
        $a = 0;
        if($i == 2){
          $a = 1;
        } else {
          $a = $i;
        }
      ?>
<<<<<<< HEAD
    <div id="modalFilter<?=$a?>" class="modal w-600" style="overflow-y:visible;">
      <div class="modal-content">
        <a class="modal-close close">
          <i class="material-icons">close</i>
        </a>
        <h2>Filtrar gráfica <?=$i?></h2>
        <div class="row wrap ma-0">
          <div class="d-flex col s12 m6 l6 xl6">
            <div class="input-field col xl12 l12 m12 s12">
              <select class="select-gen-gd" id="select-gen-<?=$i?>"></select>
              <label style="color: #333333; font-weight: bold;">Grupo estratégicos de negocios</label>
            </div>
          </div>
          <div class="d-flex col s12 m6 l6 xl6">
            <div class="input-field col xl12 l12 m12 s12">
              <select class="select-comp-gd" id="select-company-<?=$i?>"></select>
              <label style="color: #333333; font-weight: bold;">Empresas</label>
            </div>
          </div>
          <div class="d-flex col s12 m6 l6 xl6">
            <div class="input-field col xl12 l12 m12 s12">
              <select class="select-proj-gd" id="select-project-<?=$i?>"></select>
              <label style="color: #333333; font-weight: bold;">Proyectos</label>
            </div>
          </div>
          <?php if($i != 4 && $i != 5):?>
            <div class="d-flex col s12 m6 l6 xl6">
              <div class="input-field col xl12 l12 m12 s12">
                <select class="select-bp-gd" id="select-bp-<?=$i?>"></select>
                <label style="color: #333333; font-weight: bold;">Proceso de negocio</label>
              </div>
            </div>
          <?php elseif($i == 5):?>
            <div class="d-flex col s12 m6 l6 xl6">
              <div class="input-field col xl12 l12 m12 s12">
                <select class="select-estatus-gd filter-list" id="select-estatus-<?=$i?>">
                  <option data-id="all" value="all" selected></option>
                </select>
                <label style="color: #333333; font-weight: bold;">Estatus</label>
=======
      <div id="modalFilter<?=$a?>" class="modal w-600" style="overflow-y:visible;">
        <div class="modal-content">
          <a class="modal-close close">
            <i class="material-icons">close</i>
          </a>
          <h2>Filtrar gráfica <?=$i?></h2>
          <div class="row wrap ma-0">
            <div class="d-flex col s12 m6 l6 xl6">
              <div class="input-field col xl12 l12 m12 s12">
                <select class="select-gen-gd" id="select-gen-<?=$i?>"></select>
                <label style="color: #333333; font-weight: bold;">Grupo estratégicos de negocios</label>
              </div>
            </div>
            <div class="d-flex col s12 m6 l6 xl6">
              <div class="input-field col xl12 l12 m12 s12">
                <select class="select-comp-gd" id="select-company-<?=$i?>"></select>
                <label style="color: #333333; font-weight: bold;">Empresas</label>
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
              </div>
            </div>
            <div class="d-flex col s12 m6 l6 xl6">
              <div class="input-field col xl12 l12 m12 s12">
<<<<<<< HEAD
                <select class="select-creador-gd filter-list" id="select-creador-<?=$i?>">
                  <option data-id="all" value="all" selected></option>
                </select>
                <label style="color: #333333; font-weight: bold;">Creador</label>
              </div>
            </div>
          <?php endif;?>
        </div>
      </div>
      <div class="modal-footer">
        <a class="modal-close btn btn-depressed error" id="filter_cancel">
          <i class="large material-icons noselect">cancel</i>
        </a>
        <!-- <a class="modal-close btn btn-depressed tertiary">
          <i class="large material-icons noselect " id="filter_la">search</i>
        </a> -->
      </div>
    </div>
    <div class="table-container fixed-action-btn">
      <a class="modal-trigger btn-floating btn-large tertiary Scroll-button" href="#modalFilter5">
        <i class="large material-icons noselect" id="add">search</i>
      </a>
    </div>
<?php endfor;?>
<script type="text/javascript" src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script type="text/javascript" src="https://www.amcharts.com/lib/3/serial.js"></script>
<script type="text/javascript" src="https://www.amcharts.com/lib/3/pie.js"></script>
<script type="text/javascript" src="https://www.amcharts.com/lib/3/gauge.js"></script>
<script src="https://www.amcharts.com/lib/3/lang/es.js"></script>
=======
                <select class="select-proj-gd" id="select-project-<?=$i?>"></select>
                <label style="color: #333333; font-weight: bold;">Proyectos</label>
              </div>
            </div>
            <?php if($i != 4 && $i != 5):?>
              <div class="d-flex col s12 m6 l6 xl6">
                <div class="input-field col xl12 l12 m12 s12">
                  <select class="select-bp-gd" id="select-bp-<?=$i?>"></select>
                  <label style="color: #333333; font-weight: bold;">Proceso de negocio</label>
                </div>
              </div>
            <?php elseif($i == 5):?>
              <div class="d-flex col s12 m6 l6 xl6">
                <div class="input-field col xl12 l12 m12 s12">
                  <select class="select-estatus-gd filter-list" id="select-estatus-<?=$i?>">
                    <option data-id="all" value="all" selected></option>
                  </select>
                  <label style="color: #333333; font-weight: bold;">Estatus</label>
                </div>
              </div>
              <div class="d-flex col s12 m6 l6 xl6">
                <div class="input-field col xl12 l12 m12 s12">
                  <select class="select-creador-gd filter-list" id="select-creador-<?=$i?>">
                    <option data-id="all" value="all" selected></option>
                  </select>
                  <label style="color: #333333; font-weight: bold;">Creador</label>
                </div>
              </div>
            <?php endif;?>
          </div>
        </div>
        <div class="modal-footer">
          <a class="modal-close btn btn-depressed error" id="filter_cancel">
            <i class="large material-icons noselect">cancel</i>
          </a>
        </div>
      </div>
      <div class="table-container fixed-action-btn">
        <a class="modal-trigger btn-floating btn-large tertiary Scroll-button" href="#modalFilter5">
          <i class="large material-icons noselect" id="add">search</i>
        </a>
      </div>
    <?php endfor;?>
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
<script type="text/javascript">
  const input_identifier = ['1','3','4'],
        user_id = $('#header-user').attr('data-identifier');
  gen();
  const array_general_items = [
    {
      link: 'projectlink/',
      id: 'pe-value',
      item: 'project_links'
    },
    {
      link: 'projectassign/42',
      id: 'pa-value',
      item: 'project_assign'
    },
    {
      link: 'muestra/',
      id: 'nr-value',
      item: 'muestra'
    }
  ];
  $.each(array_general_items, function(a, b){
    var settings = {
      "async": true,
      "crossDomain": true,
<<<<<<< HEAD
      "url": "http://192.168.1.153:7001/ords/projects_portal/portal/documents/"+this.link,
=======
      "url": "http://192.168.0.210:8080/ords/portal/documents/"+this.link,
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
      "method": "GET",
      "headers": {
        "Authorization": "Bearer <?=$_SESSION["PortalToken"]?>",
        "cache-control": "no-cache"
      }
    }

    $.ajax(settings).done(function (response) {
      $.each(response.items, function(){
        var gi_object = $(b)[0];
        $('#'+gi_object.id).text(this[gi_object.item]);
      });
    });
  });
  // Petición AJAX que obtiene las GEN (Generación, transmisión, transporte, corporativo y distribución)
  function gen() {
    var settings = {
      "async": true,
      "crossDomain": true,
<<<<<<< HEAD
      "url": "http://192.168.1.153:7001/ords/projects_portal/portal/documents/filtergen/",
=======
      "url": "http://192.168.0.210:8080/ords/portal/documents/filtergen/",
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
      "method": "GET",
      "headers": {
        "Authorization": "Bearer <?=$_SESSION["PortalToken"]?>",
        "cache-control": "no-cache"
      }
    }
    var genJson; // NOTA
    $.ajax(settings).done(function (response) {
      $.each(response.items, function(){
        var option = new Option(this.display, this.ret);
            option.setAttribute('id', this.ret);
        if(this.ret == '23306'){
          option.setAttribute('selected', 'selected');
        }
          $('.select-gen-gd').append(option);
          // $('.select-gen-gd').formSelect();
      });
      filter_company(response.items[1].ret);
      default_option(response.items[1].ret);
    });
  }
  //
  function filter_company(company_id, chart_num) {
      var settings = {
      "async": true,
      "crossDomain": true,
<<<<<<< HEAD
      "url": "http://192.168.1.153:7001/ords/projects_portal/portal/documents/filtercompany/"+company_id,
=======
      "url": "http://192.168.0.210:8080/ords/portal/documents/filtercompany/"+company_id,
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
      "method": "GET",
      "headers": {
        "Authorization": "Bearer <?=$_SESSION["PortalToken"]?>",
        "cache-control": "no-cache"
      }
    }

    $.ajax(settings).done(function (response) {
<<<<<<< HEAD
      $.each(response.items, function(){
        var option = new Option(this.d, this.r);
            option.setAttribute('id', this.r);
        if(this.r == '34013'){
          option.setAttribute('selected', 'selected');
        }
        $('.select-comp-gd').append(option);
        $('.select-comp-gd').formSelect();
        // append_options('select-company-', option);
      });
      filter_project(response.items[1].r, chart_num);
=======
      if(response.items.length > 0){
        $.each(response.items, function(){
          var option = new Option(this.d, this.r);
              option.setAttribute('id', this.r);
          if(this.r == '34013'){
            option.setAttribute('selected', 'selected');
          }
          $('.select-comp-gd').append(option);
          $('.select-comp-gd').formSelect();
          // append_options('select-company-', option);
        });
        filter_project(response.items[1].r, chart_num);
      } else {
        var dataprovider = [];
        // ACTUALIZAR A LA GRÁFICA SELECCIONADAD --  NOTA
        if(chart_num != '1' && chart_num != '2'){
          window["updateData"+chart_num](dataprovider,chart_num);
          window["updateColData"+chart_num](dataprovider,chart_num);
          window["updateBarData"+chart_num](dataprovider,chart_num);
        } else {
          updateData1(dataprovider, '1');
          updateColData1(dataprovider, '1');
          updateBarData1(dataprovider, '1');
          updateData2(dataprovider, '2');
          updateColData2(dataprovider, '2');
          updateBarData2(dataprovider, '2');
        }
      }
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
    });
  }
  // REALIZR CAMBIOS EN ESTA FUNCIÓN DEBE ENVIAR EL CÓDIGO DE UNIFIER A LA FUNCIÓN CHART4 -- NOTA
  function filter_project(eps_id, chart_num) {
    var settings = {
      "async": true,
      "crossDomain": true,
<<<<<<< HEAD
      "url": "http://192.168.1.153:7001/ords/projects_portal/portal/documents/filterproject/?v_eps="+eps_id+"&v_id_user="+user_id,
=======
      "url": "http://192.168.0.210:8080/ords/portal/documents/filterproject/?v_eps="+eps_id+"&v_id_user="+user_id,
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
      "method": "GET",
      "headers": {
        "Authorization": "Bearer <?=$_SESSION["PortalToken"]?>",
        "cache-control": "no-cache"
      }
    }

    $.ajax(settings).done(function (response) {
      if(response.items.length > 0){
        $.each(response.items, function(){
          var option = new Option(this.name, this.code_unifier);
          $('.select-proj-gd').append(option);
          $('.select-proj-gd').formSelect();
          // append_options('select-project-', option);
        });
        filter_bp(response.items[0].code_unifier, chart_num);
        if(chart_num == '4' || chart_num == undefined){
          graph4(response.items[0].code_unifier);
        } else if(chart_num == '5'){
          listGD(response.items[0].code_unifier);
        }
<<<<<<< HEAD
      }
    });
  }

  function filter_bp(unifier_code, chart_num) {
    var settings = {
      "async": true,
      "crossDomain": true,
      "url": "http://192.168.1.153:7001/ords/projects_portal/portal/documents/filterbp/"+unifier_code,
      "method": "GET",
      "headers": {
        "Authorization": "Bearer <?=$_SESSION["PortalToken"]?>",
        "cache-control": "no-cache"
      }
    }

    $.ajax(settings).done(function (response) {
      if(response.items.length > 0){
        $.each(response.items, function(){
          var option = new Option(this.name, this.id_p_bp);
          // if(this.id_p_bp == '181' && chart_num == undefined){
            option.setAttribute('selected', 'selected');
            // CONDICIONAL GRÁFICA SELECCIONADA - GRÁFICA 1, 2, 3 GENERAL PRIMERA CARGA -- NOTA
          // }
          // append_options('select-bp-', option);
          $('.select-bp-gd').append(option);
          $('.select-bp-gd').formSelect();
        });
        var obj_length = (response.items.length - 1);
        if(chart_num == undefined){
            graph1(response.items[obj_length].id_p_bp);
            graph2(response.items[obj_length].id_p_bp);
            graph3(response.items[obj_length].name);
          } else if(chart_num != undefined && chart_num != '1' && chart_num != '2' && chart_num != '3' && chart_num != '5') {
            eval("graph"+chart_num + "("+response.items[obj_length].id_p_bp+")");
          } else if(chart_num == '3') {
            graph3(response.items[obj_length].name);
          }
          else if(chart_num == '1' || chart_num == '2') {
            graph1(response.items[obj_length].id_p_bp);
            graph2(response.items[obj_length].id_p_bp);
          }

      } else {
        console.log("El proyecto seleccionado, no tiene ningún BP asociado. ");
        var dataprovider = [];
        // ACTUALIZAR A LA GRÁFICA SELECCIONADAD --  NOTA
        if(chart_num != '1' && chart_num != '2'){
          eval("updateData"+chart_num + "("+dataprovider+","+chart_number+")");
          eval("updateColData"+chart_num + "("+dataprovider+","+chart_number+")");
          eval("updateBarData"+chart_num + "("+dataprovider+","+chart_number+")");
=======
      } else {
        var dataprovider = [];
        // ACTUALIZAR A LA GRÁFICA SELECCIONADAD --  NOTA
        if(chart_num != '1' && chart_num != '2'){
          window["updateData"+chart_num](dataprovider,chart_num);
          window["updateColData"+chart_num](dataprovider,chart_num);
          window["updateBarData"+chart_num](dataprovider,chart_num);
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
        } else {
          updateData1(dataprovider, '1');
          updateColData1(dataprovider, '1');
          updateBarData1(dataprovider, '1');
          updateData2(dataprovider, '2');
          updateColData2(dataprovider, '2');
          updateBarData2(dataprovider, '2');
        }
      }
    });
  }
<<<<<<< HEAD
=======

  function filter_bp(unifier_code, chart_num) {
    if(chart_num != '4'){
      var settings = {
        "async": true,
        "crossDomain": true,
        "url": "http://192.168.0.210:8080/ords/portal/documents/filterbp/"+unifier_code,
        "method": "GET",
        "headers": {
          "Authorization": "Bearer <?=$_SESSION["PortalToken"]?>",
          "cache-control": "no-cache"
        }
      }

      $.ajax(settings).done(function (response) {
        if(response.items.length > 0){
          $.each(response.items, function(){
            var option = new Option(this.name, this.id_p_bp);
            // if(this.id_p_bp == '181' && chart_num == undefined){
              option.setAttribute('selected', 'selected');
              // CONDICIONAL GRÁFICA SELECCIONADA - GRÁFICA 1, 2, 3 GENERAL PRIMERA CARGA -- NOTA
            // }
            // append_options('select-bp-', option);
            $('.select-bp-gd').append(option);
            $('.select-bp-gd').formSelect();
          });
          var obj_length = (response.items.length - 1);
          if(chart_num == undefined){
              graph1(response.items[obj_length].id_p_bp);
              graph2(response.items[obj_length].id_p_bp);
              graph3(response.items[obj_length].name);
            } else if(chart_num != undefined && chart_num != '1' && chart_num != '2' && chart_num != '3' && chart_num != '5') {
              eval("graph"+chart_num + "("+response.items[obj_length].id_p_bp+")");
            } else if(chart_num == '3') {
              graph3(response.items[obj_length].name);
            }
            else if(chart_num == '1' || chart_num == '2') {
              graph1(response.items[obj_length].id_p_bp);
              graph2(response.items[obj_length].id_p_bp);
            }

        } else {
          console.log("El proyecto seleccionado, no tiene ningún BP asociado. ");
          var dataprovider = [];
          // ACTUALIZAR A LA GRÁFICA SELECCIONADAD --  NOTA
          if(chart_num != '5'){
            if(chart_num != '1' && chart_num != '2'){
              // eval("updateData"+chart_num + "("+dataprovider+","+chart_num+")");
              // eval("updateColData"+chart_num + "("+dataprovider+","+chart_num+")");
              // eval("updateBarData"+chart_num + "("+dataprovider+","+chart_num+")");
              window["updateData"+chart_num](dataprovider,chart_num);
              window["updateColData"+chart_num](dataprovider,chart_num);
              window["updateBarData"+chart_num](dataprovider,chart_num);
            } else {
              updateData1(dataprovider, '1');
              updateColData1(dataprovider, '1');
              updateBarData1(dataprovider, '1');
              updateData2(dataprovider, '2');
              updateColData2(dataprovider, '2');
              updateBarData2(dataprovider, '2');
            }
          }
        }
      });
    }
  }
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
  function append_options(select_id, option) {
    $('#'+select_id).append(option);
    $('#'+select_id).formSelect();
  }
  function append_options3(select_id, option) {
    // console.log(select_id);
    $('#'+select_id).append(option);
    $('#'+select_id).formSelect();
  }
  function default_option(id_gen) {
    // console.log(id_gen);
    $('#'+id_gen).attr('selected','selected');
  }
  // CHARTS WS
  function graph1(id_bp){
<<<<<<< HEAD
    var settings = {
      "async": true,
      "crossDomain": true,
      "url": "http://192.168.1.153:7001/ords/projects_portal/portal/documents/graph1/"+id_bp,
=======
    $('#link-pdf-1').attr('data-id', id_bp);
    var settings = {
      "async": true,
      "crossDomain": true,
      "url": "http://192.168.0.210:8080/ords/portal/documents/graph1/"+id_bp,
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
      "method": "GET",
      "headers": {
        "Authorization": "Bearer <?=$_SESSION["PortalToken"]?>",
        "cache-control": "no-cache"
      }
    }
    $.ajax(settings).done(function (response) {
      // console.log(response);
      var chart_number = '1';
      updateData1(response.items, chart_number);
      updateColData1(response.items, chart_number);
      updateBarData1(response.items, chart_number);
    });
  }
  function graph2(id_bp){
<<<<<<< HEAD
    var settings = {
      "async": true,
      "crossDomain": true,
      "url": "http://192.168.1.153:7001/ords/projects_portal/portal/documents/graph2/"+id_bp,
=======
    $('#link-pdf-2').attr('data-id', id_bp);
    var settings = {
      "async": true,
      "crossDomain": true,
      "url": "http://192.168.0.210:8080/ords/portal/documents/graph2/"+id_bp,
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
      "method": "GET",
      "headers": {
        "Authorization": "Bearer <?=$_SESSION["PortalToken"]?>",
        "cache-control": "no-cache"
      }
    }
    $.ajax(settings).done(function (response) {
      var chart_number = '2';
      updateData2(response.items, chart_number);
      updateColData2(response.items, chart_number);
      updateBarData2(response.items, chart_number);
    });
  }
  function graph3(bp_name){
<<<<<<< HEAD
    // alert(bp_name);
    var settings = {
      "async": true,
      "crossDomain": true,
      "url": "http://192.168.1.153:7001/ords/projects_portal/portal/documents/graph3/"+bp_name,
=======
    $('#link-pdf-3').attr('data-id', bp_name);
    var settings = {
      "async": true,
      "crossDomain": true,
      "url": "http://192.168.0.210:8080/ords/portal/documents/graph3/"+bp_name,
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
      "method": "GET",
      "headers": {
        "Authorization": "Bearer <?=$_SESSION["PortalToken"]?>",
        "cache-control": "no-cache"
      }
    }

    $.ajax(settings).done(function (response) {
      // console.log(response);
      var chart_number = '3';
      updateData3(response.items, chart_number);
      updateColData3(response.items, chart_number);
      updateBarData3(response.items, chart_number);
    });
  }
  function graph4(unifier_code){
<<<<<<< HEAD
    var settings = {
      "async": true,
      "crossDomain": true,
      "url": "http://192.168.1.153:7001/ords/projects_portal/portal/documents/graph4/"+unifier_code,
=======
    $('#link-pdf-4').attr('data-id', unifier_code);
    var data_attr = $('.carousel-4.white.active').children().attr('data-chart')
    $('#link-pdf-4').attr('href', '/Portal-Web/documents/index/4/'+unifier_code+'/'+data_attr+'.pdf');
    var settings = {
      "async": true,
      "crossDomain": true,
      "url": "http://192.168.0.210:8080/ords/portal/documents/graph4/"+unifier_code,
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
      "method": "GET",
      "headers": {
        "Authorization": "Bearer <?=$_SESSION["PortalToken"]?>",
        "cache-control": "no-cache"
      }
    }

    $.ajax(settings).done(function (response) {
      var chart_number = '4';
      updateData4(response.items, chart_number);
      updateColData4(response.items, chart_number);
      updateBarData4(response.items, chart_number);
    });
  }
<<<<<<< HEAD
=======
  function disablePdfBtn(id, pdf_text){
    document.getElementById(id).style.pointerEvents = 'none';
    $('#'+pdf_text).addClass('error-text');
  }
  function enablePdfBtn(id, pdf_text){
    document.getElementById(id).style.pointerEvents = 'auto';
    $('#'+pdf_text).removeClass('error-text');
  }
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
  // ON CHANGE
  var array_select = [
    {
      id : 'select-gen-1',
      key : '1',
      start : 2,
      end : 4,
      select_2 : 'company',
      select_3 : 'project',
      select_4 : 'bp',
      function : 'filter_company',
      chart : 1,
    },
    {
      id : 'select-gen-3',
      key : '3',
      start : 2,
      end : 4,
      select_2 : 'company',
      select_3 : 'project',
      select_4 : 'bp',
      function : 'filter_company',
      chart : 3,
    },
    {
      id : 'select-gen-4',
      key : '4',
      start : 2,
      end : 4,
      select_2 : 'company',
      select_3 : 'project',
      select_4 : 'bp',
      function : 'filter_company',
      chart : 4,
    },
    {
      id : 'select-gen-5',
      key : '5',
      start : 2,
      end : 4,
      select_2 : 'company',
      select_3 : 'project',
      select_4 : 'bp',
      function : 'filter_company',
      chart : 5,
    },
    {
      id : 'select-company-1',
      key : '1',
      start : 3,
      end : 4,
      select_3 : 'project',
      select_4 : 'bp',
      function : 'filter_project',
      chart : 1,
    },
    {
      id : 'select-company-3',
      key : '3',
      start : 3,
      end : 4,
      select_3 : 'project',
      select_4 : 'bp',
      function : 'filter_project',
      chart : 3,
    },
    {
      id : 'select-company-4',
      key : '4',
      start : 3,
      end : 4,
      select_3 : 'project',
      select_4 : 'bp',
      function : 'filter_project',
      chart : 4,
    },
    {
      id : 'select-company-5',
      key : '5',
      start : 3,
      end : 4,
      select_3 : 'project',
      select_4 : 'bp',
      function : 'filter_project',
      chart : 5,
    },
    {
      id : 'select-project-1',
      key : '1',
      start : 4,
      end : 4,
      select_4 : 'bp',
      function : 'filter_bp',
      chart : 1,
    },
    {
      id : 'select-project-3',
      key : '3',
      start : 4,
      end : 4,
      select_4 : 'bp',
      function : 'filter_bp',
      chart : 3,
    },
    {
      id : 'select-project-4',
      key : '4',
      start : 4,
      end : 4,
      select_4 : 'bp',
      function : 'graph4',
      chart : 4,
    },
    {
      id : 'select-project-5',
      key : '5',
      start : 4,
      end : 4,
      select_4 : 'bp',
      function : 'listGD',
      chart : 5,
    }
  ];
  $.each(array_select, function(a, b){
    $("#"+this.id).change(function(){
      var array_data = $(b)[0];
      // if(array_data.value != 'undefined'){
        var value = $(this).children(":selected").attr("value");
      // } else{
        // var value = $(this).children(":selected").attr("value");
      // }
      for(i = array_data.start; i <= array_data.end; i++){
        $('#select-'+array_data['select_'+i]+'-'+array_data.key).children().remove();
      }
      $('select').formSelect();
      // this[array_data.function](value);
      window[array_data.function](value,array_data.chart);
      // eval(array_data.function + "("+value+")");
    });
  });
  $("#select-bp-1").change(function(){
    var value = $(this).children(":selected").attr("value");
<<<<<<< HEAD
=======
    for(i=1; i<3; i++){
      var data_attr = $('.carousel-'+i+'.white.active').children().attr('data-chart')
      $('#link-pdf-'+i).attr('href', '/Portal-Web/documents/index/'+i+'/'+value+'/'+data_attr+'.pdf');
    }
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
    graph1(value);
    graph2(value);
  });
  $("#select-bp-3").change(function(){
    var value = $(this).children(":selected").text();
<<<<<<< HEAD
=======
    var data_attr = $('.carousel-'+i+'.white.active').children().attr('data-chart')
    $('#link-pdf-3').attr('href', '/Portal-Web/documents/index/3/'+value+'/'+data_attr+'.pdf');
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
    graph3(value);
  });
  $("#select-bp-5").change(function(){
    var value = $(this).children(":selected").attr("value");
    listGD(value);
  });
  // INICIO SCRIPT PERTENECIENTE A LAS GRÁFICAS
  // Themes begin
  for(i = 1; i < 5; i++){
    am4core.useTheme(am4themes_material3);
    am4core.useTheme(am4themes_animated);
    // DONUT CHARTS
    // function pie_chart(bp_data, chart_number){
    if (this["chartDonut"+i]) {
      this["chartDonut"+i].dispose();
    }
    this["chartDonut"+i] = am4core.create("advance"+i, am4charts.PieChart);
    this["chartDonut"+i].hideLabelsPercent = 15;
    // Add data
    this["chartDonut"+i].data = generateData();
    // Add and configure series

    this["pieSeries"+i] = this["chartDonut"+i].series.push(new am4charts.PieSeries());
    this["pieSeries"+i].dataFields.value = "registros";
    this["pieSeries"+i].dataFields.category = "v_value";
    // Let's cut a hole in our Pie chart the size of 30% the radius
    this["chartDonut"+i].innerRadius = am4core.percent(0);
    // Put a thick white border around each Slice
    this["pieSeries"+i].slices.template.stroke = am4core.color("#fff");
    this["pieSeries"+i].slices.template.strokeWidth = 2;
    this["pieSeries"+i].slices.template.strokeOpacity = 1;
    this["pieSeries"+i].slices.template
    // change the cursor on hover to make it apparent the object can be interacted with
    .cursorOverStyle = [
      {
        "property": "cursor",
        "value": "pointer"
      }
    ];
    this["pieSeries"+i].ticks.template.adapter.add("hidden", hideSmall);
    this["pieSeries"+i].labels.template.adapter.add("hidden", hideSmall);
    function hideSmall(hidden, target) {
      return target.dataItem.values.value.percent < 5 ? true : false;
    }
    if(i != 3){
      this["pieSeries"+i].alignLabels = false;
      this["pieSeries"+i].labels.template.bent = true;
      this["pieSeries"+i].labels.template.radius = 3;
      this["pieSeries"+i].labels.template.padding(0,0,0,0);
      this["pieSeries"+i].ticks.template.disabled = true;
      this["pieSeries"+i].fontSize = 14;

    } else {
      // /* Disable labels */
      pieSeries3.labels.template.disabled = true;
      pieSeries3.ticks.template.disabled = true;
      /* Create legend */
      chartDonut3.legend = new am4charts.Legend();
      chartDonut3.legend.labels.template.wrap = true;
      /* Create a separate container to put legend in */
<<<<<<< HEAD
      var legendContainer = am4core.create("legenddiv", am4core.Container);
      legendContainer.width = am4core.percent(80);
      legendContainer.height = am4core.percent(100);
      chartDonut3.legend.parent = legendContainer;

      chartDonut3.events.on("datavalidated", resizeLegend);
      chartDonut3.events.on("maxsizechanged", resizeLegend);
      // chartDonut3.legend.labels.template.truncate = true;
      // chartDonut3.legend.labels.template.wrap = true;

      function resizeLegend(ev) {
        document.getElementById("legenddiv").style.height = chartDonut3.legend.contentHeight + "px";
      }
=======
        var legendContainer = am4core.create("legenddiv", am4core.Container);
        legendContainer.width = am4core.percent(80);
        legendContainer.height = am4core.percent(100);
        chartDonut3.legend.parent = legendContainer;

        chartDonut3.events.on("datavalidated", resizeLegend);
        chartDonut3.events.on("maxsizechanged", resizeLegend);
        // chartDonut3.legend.labels.template.truncate = true;
        // chartDonut3.legend.labels.template.wrap = true;

        function resizeLegend(ev) {
          document.getElementById("legenddiv").style.height = chartDonut3.legend.contentHeight + "px";
        }
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
    }

    // Create a base filter effect (as if it's not there) for the hover to return to
    this["shadow"+i] = this["pieSeries"+i].slices.template.filters.push(new am4core.DropShadowFilter);
    this["shadow"+i].opacity = 0;
    // Create hover state
    this["hoverState"+i] = this["pieSeries"+i].slices.template.states.getKey("hover"); // normally we have to create the hover state, in this case it already exists
    // Slightly shift the shadow and make it more prominent on hover
    this["hoverShadow"+i]= this["hoverState"+i].filters.push(new am4core.DropShadowFilter);
    this["hoverShadow"+i].opacity = 0.7;
    this["hoverShadow"+i].blur = 5;
    this["indicatorLabel"+i] = this["pieSeries"+i].createChild(am4core.Label);
    this["indicatorLabel"+i].align = "center";
    this["indicatorLabel"+i].valign = "middle";
    this["indicatorLabel"+i].x = -40;
    this["indicatorLabel"+i].y = -10;

    this["chartDonut"+i].fontSize = 15;

    // this["chartDonut"+i].legend = new am4charts.Legend();
    // this["chartDonut"+i].legend.position = "right";
  // function chart_id(chart_number) {
  //   return chart_number;
  // }
  this["updateData"+i] = function(bp_data, chart_number) {
<<<<<<< HEAD
    this['chartDonut'+chart_number].data = generateData(bp_data);
    // chart_id(chart_number);
    if(bp_data.length == 0){
      this["indicatorLabel"+chart_number].text = "No data...";
    } else {
=======
    console.log(bp_data);
    this['chartDonut'+chart_number].data = generateData(bp_data);
    // chart_id(chart_number);
    if(bp_data.length == 0){
      disablePdfBtn('li-chart-'+chart_number, 'link-pdf-'+chart_number);
      this["indicatorLabel"+chart_number].text = "No data...";
    } else {
      enablePdfBtn('li-chart-'+chart_number, 'link-pdf-'+chart_number);
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
      this["indicatorLabel"+chart_number].text = "";
    }
  }
  // COLUMN CHART BEGIN
    if (this["chartColumn"+i]) {
      this["chartColumn"+i].dispose();
    }
    // Create chart instance
    this["chartColumn"+i] = am4core.create("column"+i, am4charts.XYChart);
    this["chartColumn"+i].data = generateData();

    this["categoryAxis"+i] = this["chartColumn"+i].xAxes.push(new am4charts.CategoryAxis());
    // categoryAxis.renderer.grid.template.disabled = true;
    this["categoryAxis"+i].dataFields.category = "v_value";
    this["categoryAxis"+i].renderer.grid.template.location = 0;
    this["categoryAxis"+i].renderer.minGridDistance = 30;
    this["categoryAxis"+i].renderer.labels.template.horizontalCenter = "right";
    this["categoryAxis"+i].renderer.labels.template.verticalCenter = "middle";
    this["categoryAxis"+i].renderer.labels.template.rotation = 270;
    this["categoryAxis"+i].renderer.fontSize = 12;
    this["label"+i] = this["categoryAxis"+i].renderer.labels.template;
    // label.wrap = true;
    this["label"+i].truncate = true;
    this["label"+i].maxWidth = 120;
    // categoryAxis.tooltip.disabled = true;
    // this["categoryAxis"+i].renderer.minHeight = 110;
    this["valueAxis"+i] = this["chartColumn"+i].yAxes.push(new am4charts.ValueAxis());
    // valueAxis.renderer.grid.template.disabled = true;
    this["valueAxis"+i].renderer.minWidth = 50;

    this["categoryAxis"+i] = this["chartColumn"+i].yAxes.push(new am4charts.ValueAxis());

    // Create series
    this["series"+i] = this["chartColumn"+i].series.push(new am4charts.ColumnSeries());
    this["series"+i].sequencedInterpolation = true
    this["series"+i].dataFields.valueY = "registros";
    this["series"+i].dataFields.categoryX = "v_value";
    this["series"+i].name = "registros";
    this["series"+i].columns.template.tooltipText = "{categoryX}: {valueY}[/]";
    this["series"+i].columns.template.column.cornerRadiusTopLeft = 10;
    this["series"+i].columns.template.column.cornerRadiusTopRight = 10;
    this["series"+i].columns.template.column.fillOpacity = 0.8;
    this["series"+i].columns.template.strokeWidth = 0;
    this["series"+i].columns.template.adapter.add("fill", function(fill, target) {
      return chartColumn1.colors.getIndex(target.dataItem.index);
    });

    // on hover, make corner radiuses bigger
    this["hoverState"+i] = this["series"+i].columns.template.column.states.create("hover");
    this["hoverState"+i].properties.cornerRadiusTopLeft = 0;
    this["hoverState"+i].properties.cornerRadiusTopRight = 0;
    this["hoverState"+i].properties.fillOpacity = 1;

    this["ColindicatorLabel"+i] = this["series"+i].createChild(am4core.Label);
    this["ColindicatorLabel"+i].align = "center";
    this["ColindicatorLabel"+i].valign = "middle";
    this["ColindicatorLabel"+i].fontSize = 20;
    this["ColindicatorLabel"+i].x = 185;
    this["ColindicatorLabel"+i].y = 80;


  this["updateColData"+i] = function(bp_data, chart_number) {
      // bp_length(bp_data.length);
      this['chartColumn'+chart_number].data = generateData(bp_data);
      if(bp_data.length == 0){
<<<<<<< HEAD
        this['ColindicatorLabel'+chart_number].text = "No data...";
        this['chartColumn'+chart_number].scrollbarX.dispose();
      } else {
=======
        disablePdfBtn('li-chart-'+chart_number, 'link-pdf-'+chart_number);
        this['ColindicatorLabel'+chart_number].text = "No data...";
        this['chartColumn'+chart_number].scrollbarX.dispose();
      } else {
        enablePdfBtn('li-chart-'+chart_number, 'link-pdf-'+chart_number);
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
        this['chartColumn'+chart_number].scrollbarX = new am4core.Scrollbar();
        this['chartColumn'+chart_number].scrollbarX.parent = this['chartColumn'+chart_number].bottomAxesContainer;
        this['ColindicatorLabel'+chart_number].text = "";
      }
    }
    // COLUMN CHART END
    // INICIO BAR CHART fontSize
    this["chart"+i] = am4core.create("bar"+i, am4charts.XYChart);
    this["chart"+i].data = generateData();

    //create category axis for years
    this["categoryAxis"+i] = this["chart"+i].yAxes.push(new am4charts.CategoryAxis());
    this["categoryAxis"+i].dataFields.category = "v_value";
    this["categoryAxis"+i].renderer.inversed = true;
    this["categoryAxis"+i].renderer.grid.template.location = 0;
    this["barLabel"+i] = this["categoryAxis"+i].renderer.labels.template;
    // label.wrap = true;
    this["barLabel"+i].truncate = true;
    this["barLabel"+i].maxWidth = 120;

    //create value axis for income and expenses
    this["valueAxis"+i] = this["chart"+i].xAxes.push(new am4charts.ValueAxis());
    this["valueAxis"+i].renderer.opposite = false;

    //create columns
    this["series"+i] = this["chart"+i].series.push(new am4charts.ColumnSeries());
    this["series"+i].dataFields.categoryY = "v_value";
    this["series"+i].dataFields.valueX = "registros";
    this["series"+i].name = "registros";
    this["series"+i].columns.template.tooltipText = "{categoryY}: {valueX}[/]";
    this["series"+i].columns.template.strokeWidth = 0;
    this["series"+i].columns.template.column.fillOpacity = 0.8;
    this["series"+i].tooltip.pointerOrientation = "down";

    this["hoverState"+i] = this["series"+i].columns.template.column.states.create("hover");
    this["hoverState"+i].properties.cornerRadiusTopLeft = 0;
    this["hoverState"+i].properties.cornerRadiusTopRight = 0;
    this["hoverState"+i].properties.fillOpacity = 1;
    // this["chart"+i].cursor = new am4charts.XYCursor();
    this["series"+i].columns.template.adapter.add("fill", (fill, target) => {
    return chart1.colors.getIndex(target.dataItem.index);
    });

    this["updateBarData"+i] = function(bp_data, chart_number) {
    // function updateBarData1(bp_data, chart_number) {
      this['chart'+chart_number].data = generateData(bp_data);
<<<<<<< HEAD
      // chart1.data = generateData(bp_data);
        // alert(bp_data);
      }
       // FIN BAR CHART
    }
    function generateData(bp_data) {
        return bp_data;
    }
    $('html').on("webkitTransitionEnd transitionend", function(e) {
=======
      if(bp_data.length == 0){
        disablePdfBtn('li-chart-'+chart_number, 'link-pdf-'+chart_number);
      } else {
        enablePdfBtn('li-chart-'+chart_number, 'link-pdf-'+chart_number);
      }
    }
       // FIN BAR CHART
  }
  function generateData(bp_data) {
    return bp_data;
  }
    $('html').on("webkitTransitionEnd transitionend", function(e) {
      for(i = 1; i < 5; i++){
        var download_obj = $('.carousel-'+i+'.white.active').children();
        var data_attr = $('.carousel-'+i+'.white.active').children().attr('data-chart'),
            data_id =  $('#link-pdf-'+i).attr('data-id');
        $('#link-pdf-'+i).attr('href', '/Portal-Web/documents/index/'+i+'/'+data_id+'/'+data_attr+'.pdf');
      }
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
      if($('#projectCarousel').hasClass("active")){
        $("#legendMainDiv").show();
      } else{
        $("#legendMainDiv").hide();
      }
    });
<<<<<<< HEAD
    var contInterval = 0;
    var timer = setInterval(function(){
      var a = contInterval++;
      // if(a == 1){
        $("#legendMainDiv").hide();
      // }
      clearInterval(timer);
    }, 4400);
=======
    // var contInterval = 0;
    // var timer = setInterval(function(){
    //   var a = contInterval++;
    //   if(a == 1){
    //     $("#legendMainDiv").hide();
    //   }
    //   clearInterval(timer);
    // }, 4400);
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
    $('.table-container').hide();
    $('#graph_link').click(function(e){
      e.preventDefault();
      $('#chart-container').show();
      $('.table-container').hide();
    });
    $('#list_link').click(function(e){
      e.preventDefault();
      $('#chart-container').hide();
      $('.table-container').show();
    });
// AJAX FILTERS LIST
creator();
status();
function creator() {
  var settings = {
<<<<<<< HEAD
      "async": true,
      "crossDomain": true,
      "url": "http://192.168.1.153:7001/ords/projects_portal/portal/documents/filtercreator/",
      "method": "GET",
      "headers": {
        "Authorization": "Bearer <?=$_SESSION["PortalToken"]?>",
        "cache-control": "no-cache"
      }
    }

    $.ajax(settings).done(function (response) {
      $.each(response.items, function(){
        var option = new Option(this.creator);
            option.setAttribute('data-id', this.creator);
            option.setAttribute('data-type' , 'creator');
        $('.select-creador-gd').append(option);
        $('.select-creador-gd').formSelect();
      });
    });
=======
    "async": true,
    "crossDomain": true,
    "url": "http://192.168.0.210:8080/ords/portal/documents/filtercreator/",
    "method": "GET",
    "headers": {
      "Authorization": "Bearer <?=$_SESSION["PortalToken"]?>",
      "cache-control": "no-cache"
    }
  }

  $.ajax(settings).done(function (response) {
    $.each(response.items, function(){
      var option = new Option(this.creator);
          option.setAttribute('data-id', this.creator);
          option.setAttribute('data-type' , 'creator');
      $('.select-creador-gd').append(option);
      $('.select-creador-gd').formSelect();
    });
  });
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
}
function status() {
  var settings = {
      "async": true,
      "crossDomain": true,
<<<<<<< HEAD
      "url": "http://192.168.1.153:7001/ords/projects_portal/portal/documents/filterstatus/",
=======
      "url": "http://192.168.0.210:8080/ords/portal/documents/filterstatus/",
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
      "method": "GET",
      "headers": {
        "Authorization": "Bearer <?=$_SESSION["PortalToken"]?>",
        "cache-control": "no-cache"
      }
    }

    $.ajax(settings).done(function (response) {
      $.each(response.items, function(){
        var option = new Option(this.status);
            option.setAttribute('data-id', this.status);
            option.setAttribute('data-type' , 'status');
        $('.select-estatus-gd').append(option);
        $('.select-estatus-gd').formSelect();
      });
    });
}
// AJAX LIST TABLE
function listGD(code_unifier){
  $('.table-body').empty();
  bp_reg_contratista(code_unifier);
  bp__reg_interno(code_unifier);
  bp_reg_externo(code_unifier);
}
bp_reg_contratista('TGIGPY19031');
bp__reg_interno('TGIGPY19031');
bp_reg_externo('TGIGPY19031');
function bp_reg_contratista(code_unifier){
  var settings1 = {
    "async": true,
    "crossDomain": true,
<<<<<<< HEAD
    "url": "http://192.168.1.153:7001/ords/projects_portal/portal/documents/bprdc/"+code_unifier,
=======
    "url": "http://192.168.0.210:8080/ords/portal/documents/bprdc/"+code_unifier,
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
    "method": "GET",
    "headers": {
      "Authorization": "Bearer <?=$_SESSION["PortalToken"]?>",
      "cache-control": "no-cache"
    }
  }

  $.ajax(settings1).done(function (response) {
    $.each(response.items, function(){
      $('#tbody-bp-contratista').append($('<tr>',{
                                  class : 'public-table'
                                })
                                .attr({
                                  'data-project' : this.project_projectname,
                                  'data-status' : this.status,
                                  'data-creator' : this.trdocon_001_creador
                                })
                                .append($('<td>', {text: this.record_no}))
                                .append($('<td>', {text: this.status}))
                                .append($('<td>', {text: this.drdocon_002_fecharegistro}))
                                .append($('<td>', {text: this.project_projectname}))
                                .append($('<td>', {text: this.title}))
                                .append($('<td>', {text: this.trdocon_001_creador}))
                                .append($('<td>', {text: this.trdocon_040_titulo_doc_long}))
                                .append($('<td>', {text: this.trdocon_038_descripcion_doc}))
                                .append($('<td>', {text: this.trdocon_033_carpeta_geb}))
                                );
    });
<<<<<<< HEAD
    tableRange('row-range-cont', 'myTable1');
=======
    // tableRange('row-range-cont', 'myTable1');
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
  });
}
function bp__reg_interno(code_unifier){
  var settings2 = {
    "async": true,
    "crossDomain": true,
<<<<<<< HEAD
    "url": "http://192.168.1.153:7001/ords/projects_portal/portal/documents/bprdi/"+code_unifier,
=======
    "url": "http://192.168.0.210:8080/ords/portal/documents/bprdi/"+code_unifier,
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
    "method": "GET",
    "headers": {
      "Authorization": "Bearer <?=$_SESSION["PortalToken"]?>",
      "cache-control": "no-cache"
    }
  }

  $.ajax(settings2).done(function (response) {
    $.each(response.items, function(){
      $('#tbody-bp-interno').append($('<tr>',{
                                  class : 'public-table'
                                })
                                .attr({
                                  'data-project' : this.project_projectname,
                                  'data-status' : this.status,
                                  'data-creator' : this.trdi_01_creador
                                })
                                .append($('<td>', {text: this.record_no}))
                                .append($('<td>', {text: this.status}))
                                .append($('<td>', {text: this.drdi_04_fecha_cre_registro}))
                                .append($('<td>', {text: this.project_projectname}))
                                .append($('<td>', {text: this.title}))
                                .append($('<td>', {text: this.trdi_01_creador}))
                                .append($('<td>', {text: this.trdi_02_nombre_documento}))
                                .append($('<td>', {text: this.trdi_03_asunto_documento}))
                                .append($('<td>', {text: this.trdi_05_requiere_apro}))
                                );
    });
<<<<<<< HEAD
    tableRange('row-range-interno', 'myTable2');
=======
    tableRange('row-range-interno', '2', 'rd-interno');
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
  });
}
function bp_reg_externo(code_unifier){
  var settings3 = {
    "async": true,
    "crossDomain": true,
<<<<<<< HEAD
    "url": "http://192.168.1.153:7001/ords/projects_portal/portal/documents/bprde/"+code_unifier,
=======
    "url": "http://192.168.0.210:8080/ords/portal/documents/bprde/"+code_unifier,
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
    "method": "GET",
    "headers": {
      "Authorization": "Bearer <?=$_SESSION["PortalToken"]?>",
      "cache-control": "no-cache"
    }
  }

  $.ajax(settings3).done(function (response) {
    $.each(response.items, function(){
      $('#tbody-bp-externo').append($('<tr>',{
                              class : 'public-table'
                            })
                            .attr({
                              'data-project' : this.project_projectname,
                              'data-status' : this.status,
                              'data-creator' : this.trde_01_creador
                            })
                            .append($('<td>', {text: this.record_no}))
                            .append($('<td>', {text: this.status}))
                            .append($('<td>', {text: this.drde_02_fecha_cre_registro}))
                            .append($('<td>', {text: this.project_projectname}))
                            .append($('<td>', {text: this.title}))
                            .append($('<td>', {text: this.trde_01_creador}))
                            .append($('<td>', {text: this.trde_03_nombre_documento}))
                            .append($('<td>', {text: this.trde_04_asunto_documento}))
                            .append($('<td>', {text: this.uuu_user_email}))
                          );
    });
<<<<<<< HEAD
    tableRange('row-range-externo', 'myTable3');
  });
}
// $(document).ready(function(){
var targetTable = document.getElementById('tbody-bp-contratista');
var targetTable2 = document.getElementById('tbody-bp-interno');
var targetTable3 = document.getElementById('tbody-bp-externo');
// REMOVE SEARCH
$('#remove-search').click(function(){
  $('#Search_Input').val("");
  logicSearch(targetTable, '');
  logicSearch(targetTable2, '');
  logicSearch(targetTable3, '');
})
// SEARCH FUNCTION
function Search() {
  var searchText = document.getElementById('Search_Input').value.toUpperCase();
  if (searchText != null) {
    logicSearch(targetTable, searchText);
    logicSearch(targetTable2, searchText);
    logicSearch(targetTable3, searchText);
  }
}
function logicSearch(targetTable, searchText){
  var targetTableColCount;
  // alert(targetTable.rows.length);
  //Loop through table rows
  for (var rowIndex = 0; rowIndex < targetTable.rows.length; rowIndex++) {
    var rowData = '';
    //Get column count from header row
    if (rowIndex == 0) {
      targetTableColCount = targetTable.rows.item(rowIndex).cells.length;
      continue; //do not execute further code for header row.
    }

    //Process data rows. (rowIndex >= 1)
    for (var colIndex = 0; colIndex < targetTableColCount; colIndex++) {
      rowData += targetTable.rows.item(rowIndex).cells.item(colIndex).textContent.toUpperCase();
    }
    //If search term is not found in row data
    //then hide the row, else show
    console.log(searchText);
    if (rowData.indexOf(searchText) == -1) {
      $('.paginator.center').hide();
      targetTable.rows.item(rowIndex).style.display = 'none';
    } else {
      if (searchText != "") {
      $('.paginator.center').hide();
      targetTable.rows.item(rowIndex).style.display = 'table-row';
      } else {
        var Get_Element_Button_Number = document.getElementsByClassName('active')[2].getElementsByClassName("Paginate_Numbers")[0];
        $(Get_Element_Button_Number).click();
        $('.paginator.center').show();
      }
    }
  }
}
=======
    tableRange('row-range-externo', '3', 'rd-externo');
  });
}
// $(document).ready(function(){
// var targetTable = document.getElementById('tbody-bp-contratista');
var targetTable2 = document.getElementById('tbody-bp-interno');
// var targetTable3 = document.getElementById('tbody-bp-externo');
// REMOVE SEARCH
// $('#remove-search').click(function(){
//   $('#Search_Input').val("");
//   logicSearch(targetTable, '');
//   logicSearch(targetTable2, '');
//   logicSearch(targetTable3, '');
// })
// SEARCH FUNCTION

function Search() {
      var searchText = document.getElementById('Search_Input').value.toUpperCase();
      if (searchText != null) {
          var targetTable = document.getElementById('tbody-bp-interno');
          console.log(targetTable);
          var targetTableColCount;
          //Loop through table rows
          for (var rowIndex = 0; rowIndex < targetTable.rows.length; rowIndex++) {
              var rowData = '';

              //Get column count from header row
              if (rowIndex == 0) {
                  targetTableColCount = targetTable.rows.item(rowIndex).cells.length;
                  continue; //do not execute further code for header row.
              }

              //Process data rows. (rowIndex >= 1)
              for (var colIndex = 0; colIndex < targetTableColCount; colIndex++) {
                  rowData += targetTable.rows.item(rowIndex).cells.item(colIndex).textContent.toUpperCase();
              }
              console.log(rowData);
              //If search term is not found in row data
              //then hide the row, else show
              if (rowData.indexOf(searchText) == -1) {
                  $('.paginator.center').hide();
                  targetTable.rows.item(rowIndex).style.display = 'none';
              } else {
                  if (searchText != "") {
                      $('.paginator.center').hide();
                      targetTable.rows.item(rowIndex).style.display = 'table-row';
                  } else {
                      var Get_Element_Button_Number = document.getElementsByClassName('active')[9].getElementsByClassName("Paginate_Numbers2")[0];
                      $(Get_Element_Button_Number).click();
                      $('.paginator.center').show();
                  }
              }
          }
      }
  }
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
  // $('#filter_cancel').hide();
  // SELECT LIST FILTERS (CREATOR AND STATUS)
  select_actual = $('.filter-list');
    select_actual.change(function() {
      var a = select_actual.children(":selected"), range = $('.row-range').children(":selected"), clean_rks = $('#filter_cancel'), status = $('#select-estatus-5'), creator = $('#select-creador-5');
      if ($('.public-table').show(), 0 != a.length) {
        var i = $.map(a, function(a) {
        return $(a).data("id")
      });
      if (creator.val() == 'all' && status.val() == 'all') {
        clean_rks.hide();
        table(range.val());
        // $('.active').children().click();
      } else {
        clean_rks.show();
      }
      a.each(function() {
        var t = $(this);
        if (t.val() != 'all') {
          $('.public-table:visible').filter(function() {
            return i.indexOf($(this).data(t.data("type"))) > 0
          }).removeClass('active-item').addClass('active-item');
          $('.public-table').filter(function() {
            clean_rks.show();
            return i.indexOf($(this).data(t.data("type"))) < 0
            }).hide().removeClass('active-item');
            // table2();
        }
      })
    }
  });
    $('.row-range').change(function(){
      var range = $(this).children(":selected");
      table(range.val());
    });
<<<<<<< HEAD
    function tableRange(select_obj, table_id){
      var range = $('#'+select_obj).children(":selected");
      table(range.val(),table_id);
    }
    function table(range, table_id){
      $('#rd-cont').empty();
      // $('#myTable2').after('<div id="nav" class="paginator center mt-4"></div>');
      $('#rd-cont').append('<ul class="pagination" id="myPager"></ul>');
      var rowsShown = range;
      var rowsTotal = $('#myTable1 tbody tr').length;
      if (rowsTotal > 0) {
        var numPages = rowsTotal/rowsShown;
        console.log(numPages+' = '+rowsTotal+'/'+rowsShown);
        for(i = 0; i < Math.round(numPages); i++) {
            var pageNum = i + 1;
            $('#myPager').append('<li><a href="#!" id="'+pageNum+'" class="Paginate_Numbers" rel="'+i+'">'+pageNum+'</a></li>');
        }
        var LastPage = i-1;
        $('#myTable1 tbody tr').hide();
        $('#myTable1 tbody tr').slice(0, rowsShown).show();
        $('#rd-cont li:first').addClass('active');
        $('<li class="first" style="display:none"><a href="#!" rel="0" class="Paginate_Numbers"><i class="material-icons">first_page</i></a></li>').insertBefore(".active");
        $('<li class="prev" style="display:none"><a href="#!" class="Paginate_Next_Prev"><i class="material-icons">chevron_left</i></a></li>').insertBefore(".active");
        $('#myPager').append('<li class="next"><a href="#!" class="Paginate_Next_Prev"><i class="material-icons">chevron_right</i></a></li>');
        $('#myPager').append('<li class="last"><a href="#!" rel="'+LastPage+'" class="Paginate_Numbers"><i class="material-icons">last_page</i></a></li>');
        Click_Pagination(rowsShown);
        Click_Next_Prev(rowsShown);
      } else {
        $('#rd-cont').empty();
      }
  }
  function Remove_Class(){
    $('#rd-cont li').removeClass('active');
  }
  function Click_Pagination(rowsShown){
    $('.Paginate_Numbers').bind('click', function(){
        Remove_Class();
        var Class_li = $(this).parent().attr('class');
        if(Class_li == "first"){
          document.getElementById("1").closest('li').classList.add("active");
          Hide_Prev_Next_Button(1);
        }else if(Class_li == "last"){
          document.getElementById(i).closest('li').classList.add("active");
          Hide_Prev_Next_Button(i);
        }else{
          $(this).closest('li').addClass('active');
          var Id_li = $(this).attr('id');
          Hide_Prev_Next_Button(Id_li);
=======
    function tableRange(select_obj, table_id, pag_obj){
      var range = $('#'+select_obj).children(":selected");
      table(range.val(), table_id, pag_obj);
    }
    function table(range, table_id, pag_obj){
      $('#'+pag_obj).empty();
      // $('#myTable2').after('<div id="nav" class="paginator center mt-4"></div>');
      $('#'+pag_obj).append('<ul class="pagination" id="myPager'+table_id+'"></ul>');
      var rowsShown = range;
      var rowsTotal = $('#myTable'+table_id+' tbody tr').length;
      if (rowsTotal > 0) {
        var numPages = rowsTotal/rowsShown;
        for(i = 0; i < numPages; i++) {
            var pageNum = i + 1;
            $('#myPager'+table_id).append('<li><a href="#!" id="'+table_id+'-'+pageNum+'" data-ref="'+pageNum+'" class="Paginate_Numbers'+table_id+'" rel="'+i+'">'+pageNum+'</a></li>');
        }
        var LastPage = i-1;
        $('#myTable'+table_id+' tbody tr').hide();
        $('#myTable'+table_id+' tbody tr').slice(0, rowsShown).show();
        $('#'+pag_obj+' li:first').addClass('active pagination-item-'+table_id);
        $('<li class="first-'+table_id+'" style="display:none"><a href="#!" rel="0" class="Paginate_Numbers'+table_id+'"><i class="material-icons">first_page</i></a></li>').insertBefore(".active.pagination-item-"+table_id);
        $('<li class="prev-'+table_id+'" style="display:none"><a href="#!" class="Paginate_Next_Prev'+table_id+'"><i class="material-icons">chevron_left</i></a></li>').insertBefore(".active.pagination-item-"+table_id);
        $('#myPager'+table_id).append('<li class="next-'+table_id+'"><a href="#!" class="Paginate_Next_Prev'+table_id+'"><i class="material-icons">chevron_right</i></a></li>');
        $('#myPager'+table_id).append('<li class="last-'+table_id+'"><a href="#!" rel="'+LastPage+'" class="Paginate_Numbers'+table_id+'"><i class="material-icons">last_page</i></a></li>');
        Click_Pagination(rowsShown,table_id,pag_obj,Math.round(numPages));
        Click_Next_Prev(rowsShown,table_id,pag_obj,Math.round(numPages));
      } else {
        $('#'+pag_obj).empty();
      }
  }
  function Remove_Class(pag_obj, table_id){
    $('#'+pag_obj+' li').removeClass('active pagination-item-'+table_id);
  }
  function Click_Pagination(rowsShown,table_id, pag_obj, numPages){
    $('.Paginate_Numbers'+table_id).bind('click', function(){
        Remove_Class(pag_obj, table_id);
        var Class_li = $(this).parent().attr('class');
        if(Class_li == "first-"+table_id){
          document.getElementById(table_id+'-1').closest('li').classList.add("active", "pagination-item-"+table_id);
          Hide_Prev_Next_Button(1, table_id);
        }else if(Class_li == "last-"+table_id){
          document.getElementById(table_id+'-'+numPages).closest('li').classList.add("active", "pagination-item-"+table_id);
          Hide_Prev_Next_Button(numPages, table_id,numPages);
        }else{
          $(this).closest('li').addClass('active pagination-item-'+table_id);
          var Id_li = $(this).attr('data-ref');
          Hide_Prev_Next_Button(Id_li,table_id,numPages);
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
        }
        // $(this).closest('li').removeClass('disabled');
        var currPage = $(this).attr('rel');
        var startItem = currPage * rowsShown;
<<<<<<< HEAD
        var endItem = startItem + rowsShown;
        console.log(startItem+' - '+endItem);
        console.log(startItem+' - '+endItem);
        $('#myTable1 tbody tr').css('opacity','1').hide().slice(startItem, endItem).
        css('display','table-row').animate({opacity:1}, 300);
    });
  }
  function Click_Next_Prev(rowsShown){
    $('.Paginate_Next_Prev').bind('click', function(){
        var Get_Element = document.getElementsByClassName("active")[9].getElementsByClassName("Paginate_Numbers")[0];
        var Rel_Attribute = Get_Element.getAttribute('rel');
        var Rel_Id = Get_Element.getAttribute('id');
        var Class_li = $(this).parent().attr('class');
        if (Class_li == "next") {
          var currPage = parseInt(Rel_Attribute) + 1;
          var next_Id = parseInt(Rel_Id) + 1;
          Hide_Prev_Next_Button(next_Id);
        }else{
          var currPage = parseInt(Rel_Attribute) - 1;
          var next_Id = parseInt(Rel_Id) - 1;
          Hide_Prev_Next_Button(next_Id);
        }
        if(next_Id <= i && next_Id > 0){
        Remove_Class();
        document.getElementById(next_Id).closest('li').classList.add("active");
        var startItem = currPage * rowsShown;
        var endItem = startItem + rowsShown;
        $('#myTable1 tbody tr').css('opacity','1').hide().slice(startItem, endItem).
=======
        var endItem = parseFloat(startItem) + parseFloat(rowsShown);
        $('#myTable'+table_id+' tbody tr').css('opacity','1').hide().slice(startItem, endItem).
        css('display','table-row').animate({opacity:1}, 300);
    });
  }
  function Click_Next_Prev(rowsShown,table_id, pag_obj,numPages){
    $('.Paginate_Next_Prev'+table_id).bind('click', function(){
        var Get_Element = document.getElementsByClassName("pagination-item-"+table_id)[0].getElementsByClassName("Paginate_Numbers"+table_id)[0];
        var Rel_Attribute = Get_Element.getAttribute('rel');
        var Rel_Id = Get_Element.getAttribute('data-ref');
        var Class_li = $(this).parent().attr('class');
        if (Class_li == "next-"+table_id) {
          var currPage = parseInt(Rel_Attribute) + 1;
          var next_Id = parseInt(Rel_Id) + 1;
          Hide_Prev_Next_Button(next_Id, table_id, numPages);
        }else{
          var currPage = parseInt(Rel_Attribute) - 1;
          var next_Id = parseInt(Rel_Id) - 1;
          Hide_Prev_Next_Button(next_Id,table_id,numPages);
        }
        if(next_Id <= i && next_Id > 0){
        Remove_Class(pag_obj, table_id);
        document.getElementById(table_id+'-'+next_Id).closest('li').classList.add("active", "pagination-item-"+table_id);
        var startItem = currPage * rowsShown;
         var endItem = parseFloat(startItem) + parseFloat(rowsShown);
        $('#myTable'+table_id+' tbody tr').css('opacity','1').hide().slice(startItem, endItem).
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
        css('display','table-row').animate({opacity:1}, 300);
      }
    });
  }
<<<<<<< HEAD
  function Hide_Prev_Next_Button(next_Id){
    if (next_Id <= 1) {
      $('.prev').hide();
      $('.first').hide();
      $('.next').show();
      $('.last').show();
    } else if (next_Id >= i) {
      $('.next').hide();
      $('.last').hide();
      $('.prev').show();
      $('.first').show();
    }else{
      $('.next').show();
      $('.last').show();
      $('.prev').show();
      $('.first').show();
=======
  function Hide_Prev_Next_Button(next_Id,table_id,numPages){
    if (next_Id <= 1) {
      $('.prev-'+table_id).hide();
      $('.first-'+table_id).hide();
      $('.next-'+table_id).show();
      $('.last-'+table_id).show();
    } else if (next_Id >= numPages) {
      $('.next-'+table_id).hide();
      $('.last-'+table_id).hide();
      $('.prev-'+table_id).show();
      $('.first-'+table_id).show();
    }else{
      $('.next-'+table_id).show();
      $('.last-'+table_id).show();
      $('.prev-'+table_id).show();
      $('.first-'+table_id).show();
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
    }
  }
// });
</script>
