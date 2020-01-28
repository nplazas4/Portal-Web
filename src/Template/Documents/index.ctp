<?php
    // Breadcrumb
    $breadcrumb = [
        [ 'Inicio', 'home','Pages','PortalProjects'],
        [ 'Gestión documental','index','Documents'],
    ];

    // Proyectos
    $projects = [
        [
            'id' => 1,
            'name' => 'Gráfica 1', // Nombre proyecto
            'phase' => 3, // Fase
            'spi' => 0.74, // SPI
            'cpiAnnual' => 42, // CPI anual
            'acBac' => 11, // AC/BAC
            'capexPlanned' => 16.09, // CAPEX Planeado (USD)
            'capexExecuted' => 1.77, // CAPEX Ejecutado (USD)
            'regional' => 'sur', // Regional
        ],
        [
            'id' => 2,
            'name' => 'Gráfica 2',
            'phase' => 1,
            'spi' => 0.8,
            'cpiAnnual' => 2,
            'acBac' => 2,
            'capexPlanned' => 16.09,
            'capexExecuted' => 1.77,
            'regional' => 'centro',
        ],
        [
            'id' => 3,
            'name' => 'Gráfica 3',
            'phase' => 2,
            'spi' => 0.9,
            'cpiAnnual' => 50,
            'acBac' => 45,
            'capexPlanned' => 16.09,
            'capexExecuted' => 1.77,
            'regional' => 'norte',
        ],
        [
            'id' => 4,
            'name' => 'Gráfica 4',
            'phase' => 4,
            'spi' => 0.98,
            'cpiAnnual' => 60,
            'acBac' => 75,
            'capexPlanned' => 16.09,
            'capexExecuted' => 1.77,
            'regional' => 'occidente',
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
        'name' => 'BP',
        'value' => '3'
      ]
    ];
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
        <li class="tab col l2 m4 s6"><a class="active" href="#general">Gráficas</a></li>
        <li class="tab col l3 m4 s6"><a  href="#mainConf">Lista</a></li>
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
    <div class="divider transparent mb-1"></div>
    <div class="row wrap">
      <?php 
        $a = 1;
        $cont = 0;
        $loop = 0;
      ?>
      <?php foreach ($projects as $project): ?> 
        <?php
          $loop = $a++;
          if($a == 2){
            $cont = 1;
          } else {
            $cont = $a;
          } 
        ?>
        <?php if($loop == 1 || $loop == 2):?>
        <div class="d-flex col s12 m6 l6 xl6">      
          <div class="col xl12 l12 m12 s12">
            <div class="graph-card" style="overflow: auto;">
              <div class="sheet-options">
                <a class='dropdown-trigger btn-flat mt-3 ' href='' data-target='dropdown<?= $project['id'] ?>'>
                  <i class="material-icons" style="font-size: 2rem">more_vert</i>
                </a>
                <ul id='dropdown<?= $project['id'] ?>' class='dropdown-content'>
                  <li><a class="modal-trigger" href="#modalFilter<?=$cont?>"><i class="mdi material-icons">insert_chart</i>Filtrar gráfica</a></li>
                  <li>
                    <a href="#!"><i class="mdi"><svg style="width:24px;height:24px" viewBox="0 0 24 24">
                      <path fill="currentColor" d="M19,3A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5C3.89,21 3,20.1 3,19V5C3,3.89 3.89,3 5,3H19M10.59,10.08C10.57,10.13 10.3,11.84 8.5,14.77C8.5,14.77 5,16.58 5.83,17.94C6.5,19 8.15,17.9 9.56,15.27C9.56,15.27 11.38,14.63 13.79,14.45C13.79,14.45 17.65,16.19 18.17,14.34C18.69,12.5 15.12,12.9 14.5,13.09C14.5,13.09 12.46,11.75 12,9.89C12,9.89 13.13,5.95 11.38,6C9.63,6.05 10.29,9.12 10.59,10.08M11.4,11.13C11.43,11.13 11.87,12.33 13.29,13.58C13.29,13.58 10.96,14.04 9.9,14.5C9.9,14.5 10.9,12.75 11.4,11.13M15.32,13.84C15.9,13.69 17.64,14 17.58,14.32C17.5,14.65 15.32,13.84 15.32,13.84M8.26,15.7C7.73,16.91 6.83,17.68 6.6,17.67C6.37,17.66 7.3,16.07 8.26,15.7M11.4,8.76C11.39,8.71 11.03,6.57 11.4,6.61C11.94,6.67 11.4,8.71 11.4,8.76Z" />
                    </svg></i>Descargar pdf</a>
                  </li>
                </ul>
              </div>
              <div class="carousel carousel-slider center">
                <div class="carousel-item white" href="#one!">
                  <div id="advance<?=$loop?>" class="pb-6" style="width: 90%; height: 400px; margin-left: 5%;"></div>
                </div>
                <div class="carousel-item white white-text" href="#two!">
                  <div id="column<?=$loop?>" class="pb-6" style="width: 100%; height: 370px; margin-top: 25px; padding-right: 5%;"></div>
                </div>
                <div class="carousel-item white white-text" href="#three!">
                  <div id="bar<?=$loop?>" style="width: 90%; height: 370px; margin-left: 2%;"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php elseif($loop == 3):?>
          <div class="d-flex col s12 m12 l9 xl9">      
          <div class="col xl12 l12 m12 s12">
            <div class="graph-card" style="overflow: auto;">
              <div class="sheet-options">
                <a class='dropdown-trigger btn-flat mt-3 ' href='' data-target='dropdown<?= $project['id'] ?>'>
                  <i class="material-icons" style="font-size: 2rem">more_vert</i>
                </a>
                <ul id='dropdown<?= $project['id'] ?>' class='dropdown-content'>
                  <li><a class="modal-trigger" href="#modalFilter<?=$cont?>"><i class="mdi material-icons">insert_chart</i>Filtrar gráfica</a></li>
                  <li>
                    <a href="#!"><i class="mdi"><svg style="width:24px;height:24px" viewBox="0 0 24 24">
                      <path fill="currentColor" d="M19,3A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5C3.89,21 3,20.1 3,19V5C3,3.89 3.89,3 5,3H19M10.59,10.08C10.57,10.13 10.3,11.84 8.5,14.77C8.5,14.77 5,16.58 5.83,17.94C6.5,19 8.15,17.9 9.56,15.27C9.56,15.27 11.38,14.63 13.79,14.45C13.79,14.45 17.65,16.19 18.17,14.34C18.69,12.5 15.12,12.9 14.5,13.09C14.5,13.09 12.46,11.75 12,9.89C12,9.89 13.13,5.95 11.38,6C9.63,6.05 10.29,9.12 10.59,10.08M11.4,11.13C11.43,11.13 11.87,12.33 13.29,13.58C13.29,13.58 10.96,14.04 9.9,14.5C9.9,14.5 10.9,12.75 11.4,11.13M15.32,13.84C15.9,13.69 17.64,14 17.58,14.32C17.5,14.65 15.32,13.84 15.32,13.84M8.26,15.7C7.73,16.91 6.83,17.68 6.6,17.67C6.37,17.66 7.3,16.07 8.26,15.7M11.4,8.76C11.39,8.71 11.03,6.57 11.4,6.61C11.94,6.67 11.4,8.71 11.4,8.76Z" />
                    </svg></i>Descargar pdf</a>
                  </li>
                </ul>
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
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="legendMainDiv" class="d-flex col s12 m6 l3 xl3">      
          <div class="col xl12 l12 m12 s12">
            <div id="legendwrapper" class="graph-card" style="height: 300px;">
              <div id="legenddiv"></div>
            </div>
          </div>
        </div>
        <?php else:?>
          <div class="d-flex col s12 m6 l3 xl3">      
          <div class="col xl12 l12 m12 s12">
            <div class="graph-card">
              <div class="sheet-options">
                <a class='dropdown-trigger btn-flat mt-3 ' href='' data-target='dropdown<?= $project['id'] ?>'>
                  <i class="material-icons" style="font-size: 2rem">more_vert</i>
                </a>
                <ul id='dropdown<?= $project['id'] ?>' class='dropdown-content'>
                  <li><a class="modal-trigger" href="#modalFilter<?=$cont?>"><i class="mdi material-icons">insert_chart</i>Filtrar gráfica</a></li>
                  <li>
                    <a href="#!"><i class="mdi"><svg style="width:24px;height:24px" viewBox="0 0 24 24">
                      <path fill="currentColor" d="M19,3A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5C3.89,21 3,20.1 3,19V5C3,3.89 3.89,3 5,3H19M10.59,10.08C10.57,10.13 10.3,11.84 8.5,14.77C8.5,14.77 5,16.58 5.83,17.94C6.5,19 8.15,17.9 9.56,15.27C9.56,15.27 11.38,14.63 13.79,14.45C13.79,14.45 17.65,16.19 18.17,14.34C18.69,12.5 15.12,12.9 14.5,13.09C14.5,13.09 12.46,11.75 12,9.89C12,9.89 13.13,5.95 11.38,6C9.63,6.05 10.29,9.12 10.59,10.08M11.4,11.13C11.43,11.13 11.87,12.33 13.29,13.58C13.29,13.58 10.96,14.04 9.9,14.5C9.9,14.5 10.9,12.75 11.4,11.13M15.32,13.84C15.9,13.69 17.64,14 17.58,14.32C17.5,14.65 15.32,13.84 15.32,13.84M8.26,15.7C7.73,16.91 6.83,17.68 6.6,17.67C6.37,17.66 7.3,16.07 8.26,15.7M11.4,8.76C11.39,8.71 11.03,6.57 11.4,6.61C11.94,6.67 11.4,8.71 11.4,8.76Z" />
                    </svg></i>Descargar pdf</a>
                  </li>
                </ul>
              </div>
              <div class="carousel carousel-slider center">
                <div class="carousel-item white" href="#one!">
                  <div id="advance<?=$loop?>" class="pb-6" style="width: 90%; height: 400px; margin-left: 5%;"></div>
                </div>
                <div class="carousel-item white white-text" href="#two!">
                  <div id="column<?=$loop?>" class="pb-6" style="width: 100%; height: 370px; margin-top: 25px; padding-right: 5%;"></div>
                </div>
                <div class="carousel-item white white-text" href="#three!">
                  <div id="bar<?=$loop?>" style="width: 90%; height: 370px; margin-left: 2%;"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php endif;?>
      <?php endforeach; ?>
    </div>
  </div>
</div>
<?php for ($i=1; $i < 5; $i++):?>
  <?php
    $a = 0;
    if($i == 2){
      $a = 1;
    } else {
      $a = $i;
    }    
  ?>
  <div id="modalFilter<?=$a?>" class="modal w-600" style="overflow-y:visible;">
    <div class="modal-content">
      <a class="modal-close close">
        <i class="material-icons">close</i>
      </a>
      <h2>Filtrar gráfica <?=$i?></h2>
      <div class="row wrap ma-0">
        <div class="d-flex col s12 m6 l6 xl6">      
          <div class="input-field col xl12 l12 m12 s12">
            <select id="select-gen-<?=$i?>"></select>
            <label style="color: #333333; font-weight: bold;">Grupo estratégicos de negocios</label>
          </div>
        </div>
        <div class="d-flex col s12 m6 l6 xl6">      
          <div class="input-field col xl12 l12 m12 s12">
            <select id="select-company-<?=$i?>"></select>
            <label style="color: #333333; font-weight: bold;">Empresas</label>
          </div>
        </div>
        <div class="d-flex col s12 m6 l6 xl6">      
          <div class="input-field col xl12 l12 m12 s12">
            <select id="select-project-<?=$i?>"></select>
            <label style="color: #333333; font-weight: bold;">Proyectos</label>
          </div>
        </div>
        <div class="d-flex col s12 m6 l6 xl6">      
          <div class="input-field col xl12 l12 m12 s12">
            <select id="select-bp-<?=$i?>"></select>
            <label style="color: #333333; font-weight: bold;">Proceso de negocio</label>
          </div>
        </div>
      </div>
    </div>
    <div class="modal-footer">
      <a class="modal-close btn btn-depressed error" id="filter_cancel">
        <i class="large material-icons noselect">cancel</i>
      </a>
      <a class="modal-close btn btn-depressed tertiary">
        <i class="large material-icons noselect " id="filter_la">search</i>
      </a>
    </div>
  </div>
<?php endfor;?>
<script type="text/javascript" src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script type="text/javascript" src="https://www.amcharts.com/lib/3/serial.js"></script>
<script type="text/javascript" src="https://www.amcharts.com/lib/3/pie.js"></script>
<script type="text/javascript" src="https://www.amcharts.com/lib/3/gauge.js"></script>
<script src="https://www.amcharts.com/lib/3/lang/es.js"></script>
<script>
  const input_identifier = ['1','3'],
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
      "url": "http://192.168.0.210:8080/ords/portal/documents/"+this.link,
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
      "url": "http://192.168.0.210:8080/ords/portal/documents/filtergen/",
      "method": "GET",
      "headers": {
        "Authorization": "Bearer <?=$_SESSION["PortalToken"]?>",
        "cache-control": "no-cache"
      }
    }

    $.ajax(settings).done(function (response) {
      $.each(response.items, function(){
        var option = new Option(this.display, this.ret);
            option.setAttribute('id', this.ret);
        if(this.ret == '23306'){
          option.setAttribute('selected', 'selected');
        }            
        append_options('select-gen-', option);
      });
      filter_company(response.items[1].ret);
      default_option(response.items[1].ret);
    });
  }
  //  
  function filter_company(company_id) {
      var settings = {
      "async": true,
      "crossDomain": true,
      "url": "http://192.168.0.210:8080/ords/portal/documents/filtercompany/"+company_id,
      "method": "GET",
      "headers": {
        "Authorization": "Bearer <?=$_SESSION["PortalToken"]?>",
        "cache-control": "no-cache"
      }
    }

    $.ajax(settings).done(function (response) {
      $.each(response.items, function(){
        var option = new Option(this.d, this.r);
            option.setAttribute('id', this.r);
        if(this.r == '34013'){
          option.setAttribute('selected', 'selected');
        }
        append_options('select-company-', option);
      });
      project(response.items[1].r);
    });
  }

  function project(eps_id) {
    var settings = {
      "async": true,
      "crossDomain": true,
      "url": "http://192.168.0.210:8080/ords/portal/documents/filterproject/?v_eps="+eps_id+"&v_id_user="+user_id,
      "method": "GET",
      "headers": {
        "Authorization": "Bearer <?=$_SESSION["PortalToken"]?>",
        "cache-control": "no-cache"
      }
    }

    $.ajax(settings).done(function (response) {
      $.each(response.items, function(){
        // console.log(this);
        var option = new Option(this.name, this.code_unifier);
        append_options('select-project-', option);
      });
      filter_bp(response.items[0].code_unifier);
    });
  }

  function filter_bp(unifier_code) {
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
      // console.log(response);
      if(response.items.length > 0){
        $.each(response.items, function(){
          var option = new Option(this.name, this.id_p_bp);
          if(this.id_p_bp == '181'){
            option.setAttribute('selected', 'selected');
            graph1(this.id_p_bp);
            graph2(this.id_p_bp);
            graph3(this.id_p_bp);
            graph4(this.id_p_bp);
          } else {
            // graph1(this.id_p_bp);
            // graph2(this.id_p_bp);
          }
          append_options('select-bp-', option);
        });
      } else {
        console.log("El proyecto seleccionado, no tiene ningún BP asociado.")
        var chart_number = '1', 
            dataprovider = [];
        updateData1(dataprovider, chart_number);
        updateColData1(dataprovider, chart_number);
        // updateBarData1(dataprovider, chart_number);
      }
    });
  }
  function append_options(select_id, option) {
    $('#'+select_id+input_identifier).append(option);
    $('#'+select_id+input_identifier).formSelect();
  }
  function default_option(id_gen) {
    // console.log(id_gen);
    $('#'+id_gen).attr('selected','selected');
  }
  // CHARTS WS
  function graph1(id_bp){
    var settings = {
      "async": true,
      "crossDomain": true,
      "url": "http://192.168.0.210:8080/ords/portal/documents/graph1/"+id_bp,
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
      // updateBarData1(response.items, chart_number);
    });
  }
  function graph2(id_bp){
    var settings = {
      "async": true,
      "crossDomain": true,
      "url": "http://192.168.0.210:8080/ords/portal/documents/graph2/"+id_bp,
      "method": "GET",
      "headers": {
        "Authorization": "Bearer <?=$_SESSION["PortalToken"]?>",
        "cache-control": "no-cache"
      }
    }
    $.ajax(settings).done(function (response) {
      // console.log(response);
      var chart_number = '2';
      updateData2(response.items, chart_number);
      updateColData2(response.items, chart_number);
      // updateBarData2(response.items, chart_number);
    });
  }
  function graph3(){
    var settings = {
      "async": true,
      "crossDomain": true,
      "url": "http://192.168.0.210:8080/ords/portal/documents/graph3/Bp%20Registro%20Documental%20Interno",
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
      // updateBarData3(response.items, chart_number);
    });
  }
  function graph4(){
    var settings = {
      "async": true,
      "crossDomain": true,
      "url": "http://192.168.0.210:8080/ords/portal/documents/graph4/TGIGPY19026",
      "method": "GET",
      "headers": {
        "Authorization": "Bearer <?=$_SESSION["PortalToken"]?>",
        "cache-control": "no-cache"
      }
    }

    $.ajax(settings).done(function (response) {
      console.log(response);
      var chart_number = '4';
      updateData4(response.items, chart_number);
      updateColData4(response.items, chart_number);
      // updateBarData4(response.items, chart_number);
    });
  }
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
    },
    {
      id : 'select-company-1',
      key : '1',
      start : 3,
      end : 4,
      select_3 : 'project',
      select_4 : 'bp',
      function : 'filter_project',
    },
    {
      id : 'select-company-3',
      key : '3',
      start : 3,
      end : 4,
      select_3 : 'project',
      select_4 : 'bp',
      function : 'filter_project',
    },
    {
      id : 'select-company-4',
      key : '4',
      start : 3,
      end : 4,
      select_3 : 'project',
      select_4 : 'bp',
      function : 'filter_project',
    },
    {
      id : 'select-project-1',
      key : '1',
      start : 4,
      end : 4,
      select_4 : 'bp',
      function : 'filter_bp',
    },
    {
      id : 'select-project-3',
      key : '3',
      start : 4,
      end : 4,
      select_4 : 'bp',
      function : 'filter_bp',
    },
    {
      id : 'select-project-4',
      key : '4',
      start : 4,
      end : 4,
      select_4 : 'bp',
      function : 'filter_bp',
    }
  ];
  $.each(array_select, function(a, b){
    $("#"+this.id).change(function(){
      var value = $(this).children(":selected").attr("value");
      var array_data = $(b)[0];
      for(i = array_data.start; i <= array_data.end; i++){
        $('#select-'+array_data['select_'+i]+'-'+array_data.key).children().remove();
      } 
      $('select').formSelect();
      eval(array_data.function + "("+value+")");
    });
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
    if(i != 3){
      this["pieSeries"+i].alignLabels = false;
      this["pieSeries"+i].labels.template.bent = true;
      this["pieSeries"+i].labels.template.radius = 3;
      this["pieSeries"+i].labels.template.padding(0,0,0,0);
      this["pieSeries"+i].ticks.template.disabled = true;
    } else {
      // /* Disable labels */
      pieSeries3.labels.template.disabled = true;
      pieSeries3.ticks.template.disabled = true;
      /* Create legend */
chartDonut3.legend = new am4charts.Legend();

chartDonut3.legend.labels.template.wrap = true;
/* Create a separate container to put legend in */
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
    this['chartDonut'+chart_number].data = generateData(bp_data);
    // chart_id(chart_number);
    if(bp_data.length == 0){
      this["indicatorLabel"+chart_number].text = "No data...";
    } else {
      this["indicatorLabel"+chart_number].text = "";
    }
  }
  // COLUMN CHART BEGIN
  if (this["chartColumn"+i]) {
    this["chartColumn"+i].dispose();
  }
  // Create chart instance
  this["chartColumn"+i] = am4core.create("column"+i, am4charts.XYChart);
  this["chartColumn"+i].scrollbarY = new am4core.Scrollbar();

  // chart.scrollbarX = new am4core.Scrollbar();
  // chart.scrollbarX.parent = chart.bottomAxesContainer;
  // Add data
  this["chartColumn"+i].data = generateData();

  // Create axes
  this["categoryAxis"+i] = this["chartColumn"+i].xAxes.push(new am4charts.CategoryAxis());
  // categoryAxis.renderer.grid.template.disabled = true;
  this["categoryAxis"+i].dataFields.category = "v_value";
  this["categoryAxis"+i].renderer.grid.template.location = 0;
  this["categoryAxis"+i].renderer.minGridDistance = 30;
  this["categoryAxis"+i].renderer.labels.template.horizontalCenter = "right";
  this["categoryAxis"+i].renderer.labels.template.verticalCenter = "middle";
  this["categoryAxis"+i].renderer.labels.template.rotation = 270;
  this["categoryAxis"+i].renderer.fontSize = 12;
  // categoryAxis.tooltip.disabled = true;
  // categoryAxis.renderer.minHeight = 110;
  this["valueAxis"+i] = this["chartColumn"+i].yAxes.push(new am4charts.ValueAxis());
  // valueAxis.renderer.grid.template.disabled = true;
  this["valueAxis"+i].renderer.minWidth = 50;

  this["label"+i] = this["categoryAxis"+i].renderer.labels.template;
  // label.wrap = true;
  this["label"+i].truncate = true;
  this["label"+i].maxWidth = 120;

  // Create series
  this["series"+i] = this["chartColumn"+i].series.push(new am4charts.ColumnSeries());
  this["series"+i].sequencedInterpolation = true;
  this["series"+i].dataFields.valueY = "registros";
  this["series"+i].dataFields.categoryX = "v_value";
  this["series"+i].tooltipText = "[{categoryX}: bold]{valueY}[/]";
  this["series"+i].columns.template.strokeWidth = 0;

  this["series"+i].tooltip.pointerOrientation = "vertical";

  this["series"+i].columns.template.column.cornerRadiusTopLeft = 10;
  this["series"+i].columns.template.column.cornerRadiusTopRight = 10;
  this["series"+i].columns.template.column.fillOpacity = 0.8;

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

  this["series"+i].columns.template.adapter.add("fill", function(fill, target) {
    return chartColumn1.colors.getIndex(target.dataItem.index);
  });

  // Cursor
  this["chartColumn"+i].cursor = new am4charts.XYCursor();

  // series.columns.template.adapter.add("fill", function(fill, target) {
  //   return this["chartColumn"+i].colors.getIndex(target.dataItem.index);
  // });

  this["updateColData"+i] = function(bp_data, chart_number) {
      // bp_length(bp_data.length);
      this['chartColumn'+chart_number].data = generateData(bp_data);
      if(bp_data.length == 0){
        this['ColindicatorLabel'+chart_number].text = "No data...";
        this['chartColumn'+chart_number].scrollbarX.dispose();
      } else {
        this['chartColumn'+chart_number].scrollbarX = new am4core.Scrollbar();
        this['chartColumn'+chart_number].scrollbarX.parent = this['chartColumn'+chart_number].bottomAxesContainer;
        this['ColindicatorLabel'+chart_number].text = "";
      }
    }
    // COLUMN CHART END
    // INICIO BAR CHART
    // this["chartBar"+i] = am4core.create("bar"+i, am4charts.XYChart);

    // this["chartBar"+i].data = generateData();

    // //create category axis for years
    // this["categoryAxis"+i] = this["chartBar"+i].yAxes.push(new am4charts.CategoryAxis());
    // this["categoryAxis"+i].dataFields.category = "v_value";
    // this["categoryAxis"+i].renderer.inversed = true;
    // this["categoryAxis"+i].renderer.grid.template.location = 0;

    // //create value axis for income and expenses
    // this["valueAxis"+i] = this["chartBar"+i].xAxes.push(new am4charts.ValueAxis());
    // this["valueAxis"+i].renderer.opposite = false;


    // //create columns
    // this["series"+i] = this["chartBar"+i].series.push(new am4charts.ColumnSeries());
    // this["series"+i].dataFields.categoryY = "v_value";
    // this["series"+i].dataFields.valueX = "registros";
    // this["series"+i].name = "registros";
    // this["series"+i].tooltipText = "{categoryY}: {valueX.value}";
    // this["series"+i].columns.template.strokeWidth = 0;
    // this["series"+i].columns.template.column.fillOpacity = 0.8;

    // this["hoverState"+i] = series1.columns.template.column.states.create("hover");
    // this["hoverState"+i].properties.cornerRadiusTopLeft = 0;
    // this["hoverState"+i].properties.cornerRadiusTopRight = 0;
    // this["hoverState"+i].properties.fillOpacity = 1;

    // //add chart cursor
    // this["chartBar"+i].cursor = new am4charts.XYCursor();
    // this["chartBar"+i].cursor.behavior = "zoomY";

    // this["barLabel"+i] = this["categoryAxis"+i].renderer.labels.template;
    // // label.wrap = true;
    // this["barLabel"+i].truncate = true;
    // this["barLabel"+i].maxWidth = 120;

    // this["series"+i].columns.template.adapter.add("fill", (fill, target) => {
    //   return chartBar1.colors.getIndex(target.dataItem.index);
    // });

    // this["updateBarData"+i] = function(bp_data, chart_number) {
    //     this["chartBar"+chart_number].data = generateData(bp_data);
    //     if(bp_data.length == 0){
    //       // ColindicatorLabel.text = "No data...";
    //       // chart.scrollbarX.dispose();
    //     } else {
    //       // chart.scrollbarX = new am4core.Scrollbar();
    //       // chart.scrollbarX.parent = chart.bottomAxesContainer;
    //       // ColindicatorLabel.text = "";
    //     }
    //   }
    //     // FIN BAR CHART
    } 
    function generateData(bp_data) {
        return bp_data;
    } 

$('html').on("webkitTransitionEnd transitionend", function(e) {
  if($('#projectCarousel').hasClass("active")){
    $("#legendMainDiv").show();
  } else{
    $("#legendMainDiv").hide();
  }
});
var contInterval = 0;
var timer = setInterval(function(){
  console.log(contInterval++);
  var a = contInterval++;
  // if(a == 1){
    $("#legendMainDiv").hide(); 
  // }
  clearInterval(timer);
}, 3000);
</script>
