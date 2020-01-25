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
    <!-- <div class="projects-content"> -->
      <div class="col s12 ml-1 mr-1">
        <ul class="tabs mb-3" style="border-bottom: 1px solid #ccc">
          <li class="tab col l2 m4 s6"><a class="active" href="#general">Gráficas</a></li>
          <li class="tab col l3 m4 s6"><a  href="#mainConf">Lista</a></li>
        </ul>
      </div>
      <!-- <div class="switch ml-2">
        <label>
          <a class="mdi black-text" onclick="return false;">
            person
          </a>
          <input class="mdi" id="checkbox-la" type="checkbox">
          <span class="lever"></span>
          <a class="mdi black-text" onclick="return false;">
            group
          </a> 
        </label>
      </div> -->
      <div class="col l12 m12 s12 mt-1 ml-2 mr-2">
        <div class="row">
          <div class="col l3 m4 s6 item-card">
            <a href="/proveedores" class="not-link-style">
              <div class="kpi-card border-color">
                <div class="value-kpi" id="pe-value"></div>
                <div class="cont-title-kpi">
                  <div class="title-kpi t-semibold">Proyectos Enlazados</div>
                  <div><i class="p9 fas fa-arrow-right"></i></div>
                </div>
              </div>
            </a>
          </div>
          <div class="col l3 m4 s6 item-card">
            <a href="#" class="not-link-style">
              <div class="kpi-card border-color">
                <div class="value-kpi" id="pa-value"></div>
                <div class="cont-title-kpi">
                  <div class="title-kpi t-semibold">Proyectos Asignados</div>
                  <div><i class="p9 fas fa-arrow-right"></i></div>
                </div>
              </div>
            </a>
          </div>
          <div class="col l3 m4 s6 item-card">
            <a href="#" class="not-link-style">
              <div class="kpi-card border-color">
                <div class="value-kpi" id="nr-value"></div>
                <div class="cont-title-kpi">
                  <div class="title-kpi t-semibold">Muestra del número de registros</div>
                  <div><i class="p9 fas fa-arrow-right"></i></div>
                </div>
              </div>
            </a>
          </div>
          <div class="col l3 m4 s6 item-card">
            <a href="/interfaces" class="not-link-style">
              <div class="kpi-card border-color">
                <div class="value-kpi" id="bp-value">3</div>
                <div class="cont-title-kpi">
                  <div class="title-kpi t-semibold">BP</div>
                  <div><i class="p9 fas fa-arrow-right"></i></div>
                </div>
              </div>
            </a>
          </div>
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
          <div class="d-flex col s12 m6 l6 xl6">      
            <div class="col xl12 l12 m12 s12">
              <div class="graph-card" style="overflow: auto;">
                <div class="carousel carousel-slider center">
                <div class="sheet-options">
                  <a class='dropdown-trigger btn-flat mt-3 ' href='' data-target='dropdown<?= $project['id'] ?>'>
                    <i class="material-icons" style="font-size: 2rem">more_vert</i>
                  </a>
                  <ul id='dropdown<?= $project['id'] ?>' class='dropdown-content'>
                    <li><a class="modal-trigger" href="#modalFilter<?=$cont?>"><i class="mdi mdi-select-compare"></i>Filtrar gráfica</a></li>
                    <li><a href="#!"><i class="mdi mdi-content-save-outline"></i>Descargar pdf</a></li>
                  </ul>
                </div>
                  <div class="carousel-fixed-item center">
                    
                  </div>
                  <div class="carousel-item" href="#one!">
                    <div id="advance<?=$loop?>" style="width: 90%; height: 370px; margin-left: 5%;"></div>
                  </div>
                  <div class="carousel-item amber white-text" href="#two!">
                    <div id="column<?=$loop?>" style="width: 100%; height: 370px; margin-top: 25px; padding-right: 5%;"></div>
                  </div>
                  <div class="carousel-item green white-text" href="#three!">
                    <h2>Third Panel</h2>
                    <p class="white-text">This is your third panel</p>
                  </div>
                  <div class="carousel-item blue white-text" href="#four!">
                    <h2>Fourth Panel</h2>
                    <p class="white-text">This is your fourth panel</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- </div> -->
          </div>
        <?php endforeach; ?>
      </div>
    <!-- </div> -->
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
        "Authorization": "Bearer ZdupjDKTdxa0Xocr4xcu0Q..",
        "cache-control": "no-cache",
        "Postman-Token": "7e373540-33e3-41a0-b74d-37a17cad22b4"
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
        "Authorization": "Bearer ZdupjDKTdxa0Xocr4xcu0Q..",
        "cache-control": "no-cache",
        "Postman-Token": "389ac047-e750-4533-8433-d276fa3003ef"
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
        "Authorization": "Bearer ZdupjDKTdxa0Xocr4xcu0Q..",
        "cache-control": "no-cache",
        "Postman-Token": "ba0fe31c-537d-435a-99a8-f7612621c9f9"
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
        "Authorization": "Bearer ZdupjDKTdxa0Xocr4xcu0Q..",
        "cache-control": "no-cache",
        "Postman-Token": "3b79e65b-479d-41be-a228-b59117af94a7"
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
        "Authorization": "Bearer ZdupjDKTdxa0Xocr4xcu0Q..",
        "cache-control": "no-cache",
        "Postman-Token": "20f04666-50f6-485c-ba3d-bb34e2f6e2f3"
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
            // graph2(this.id_p_bp);
            // graph3(this.id_p_bp);
            // graph4(this.id_p_bp);
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
        updateData(dataprovider, chart_number);
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
        "Authorization": "Bearer ZdupjDKTdxa0Xocr4xcu0Q..",
        "cache-control": "no-cache",
        "Postman-Token": "ed1ba23b-b77d-4074-8b09-be4a66998402"
      }
    }
    $.ajax(settings).done(function (response) {
      // console.log(response);
      var chart_number = '1';
      updateData(response.items, chart_number);
    });
  }
  function graph2(id_bp){
    var settings = {
      "async": true,
      "crossDomain": true,
      "url": "http://192.168.0.210:8080/ords/portal/documents/graph2/"+id_bp,
      "method": "GET",
      "headers": {
        "Authorization": "Bearer ZdupjDKTdxa0Xocr4xcu0Q..",
        "cache-control": "no-cache",
        "Postman-Token": "ed1ba23b-b77d-4074-8b09-be4a66998402"
      }
    }
    $.ajax(settings).done(function (response) {
      // console.log(response);
      var chart_number = '2';
      pie_chart(response.items, chart_number);
    });
  }
  function graph3(){
    var settings = {
      "async": true,
      "crossDomain": true,
      "url": "http://192.168.0.210:8080/ords/portal/documents/graph3/Bp%20Registro%20Documental%20Interno",
      "method": "GET",
      "headers": {
        "Authorization": "Bearer ZdupjDKTdxa0Xocr4xcu0Q..",
        "cache-control": "no-cache",
        "Postman-Token": "4b725e0e-b802-4d06-81a0-8f09f8b8cf37"
      }
    }

    $.ajax(settings).done(function (response) {
      // console.log(response);
      var chart_number = '3';
      pie_chart(response.items, chart_number);
    });
  }
  function graph4(){
    var settings = {
      "async": true,
      "crossDomain": true,
      "url": "http://192.168.0.210:8080/ords/portal/documents/graph4/TGIGPY19026",
      "method": "GET",
      "headers": {
        "Authorization": "Bearer ZdupjDKTdxa0Xocr4xcu0Q..",
        "cache-control": "no-cache",
        "Postman-Token": "03b7f8a8-2b60-45ab-9c02-077ca35b09cb"
      }
    }

    $.ajax(settings).done(function (response) {
      // console.log(response);
      var chart_number = '4';
      pie_chart(response.items, chart_number);
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
  am4core.useTheme(am4themes_material);
  am4core.useTheme(am4themes_animated);
  // DONUT CHARTS
  // function pie_chart(bp_data, chart_number){
  if (chartDonut) {
    chartDonut.dispose();
  }
  var chartDonut = am4core.create("advance1", am4charts.PieChart);
  // Add data
  chartDonut.data = generateData();
  // Add and configure series
  var pieSeries = chartDonut.series.push(new am4charts.PieSeries());
      pieSeries.dataFields.value = "registros";
      pieSeries.dataFields.category = "v_value";
  // Let's cut a hole in our Pie chart the size of 30% the radius
  chartDonut.innerRadius = am4core.percent(0);
  // Put a thick white border around each Slice
  pieSeries.slices.template.stroke = am4core.color("#fff");
  pieSeries.slices.template.strokeWidth = 2;
  pieSeries.slices.template.strokeOpacity = 1;
  pieSeries.slices.template
  // change the cursor on hover to make it apparent the object can be interacted with
  .cursorOverStyle = [
    {
      "property": "cursor",
      "value": "pointer"
    }
  ];
  
  pieSeries.alignLabels = false;
  pieSeries.labels.template.bent = true;
  pieSeries.labels.template.radius = 3;
  pieSeries.labels.template.padding(0,0,0,0);
  pieSeries.ticks.template.disabled = true;
  // Create a base filter effect (as if it's not there) for the hover to return to
  var shadow = pieSeries.slices.template.filters.push(new am4core.DropShadowFilter);
      shadow.opacity = 0;
  // Create hover state
  var hoverState = pieSeries.slices.template.states.getKey("hover"); // normally we have to create the hover state, in this case it already exists
  // Slightly shift the shadow and make it more prominent on hover
  var hoverShadow = hoverState.filters.push(new am4core.DropShadowFilter);
      hoverShadow.opacity = 0.7;
      hoverShadow.blur = 5;  
      var indicatorLabel = pieSeries.createChild(am4core.Label);
      indicatorLabel.align = "center";
      indicatorLabel.valign = "middle";
      indicatorLabel.fontSize = 20;
      indicatorLabel.x = -40;
      indicatorLabel.y = -10; 

  function generateData(bp_data) {
    return bp_data;
  }
  function updateData(bp_data) {
    chartDonut.data = generateData(bp_data);
    if(bp_data.length == 0){
      indicatorLabel.text = "No data...";
    } else {
      indicatorLabel.text = "";
    }
  }
  // INICIO COLUMN CHART
  // Themes begin
am4core.useTheme(am4themes_animated);
// Themes end

// Create chart instance
var chart = am4core.create("column1", am4charts.XYChart);
// chart.scrollbarY = new am4core.Scrollbar();
chart.scrollbarX = new am4core.Scrollbar();
chart.scrollbarX.parent = chart.bottomAxesContainer;
// Add data
chart.data = [{
  "country": "USA",
  "visits": 3025
}, {
  "country": "China",
  "visits": 1882
}, {
  "country": "Japan",
  "visits": 1809
}, {
  "country": "Germany",
  "visits": 1322
}, {
  "country": "UK",
  "visits": 1122
}, {
  "country": "France",
  "visits": 1114
}, {
  "country": "India",
  "visits": 984
}, {
  "country": "Spain",
  "visits": 711
}, {
  "country": "Netherlands",
  "visits": 665
}, {
  "country": "Russia",
  "visits": 580
}, {
  "country": "South Korea",
  "visits": 443
}, {
  "country": "Canada",
  "visits": 441
}];

// Create axes
var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
// categoryAxis.renderer.grid.template.disabled = true;
categoryAxis.dataFields.category = "country";
categoryAxis.renderer.grid.template.location = 0;
categoryAxis.renderer.minGridDistance = 30;
categoryAxis.renderer.labels.template.horizontalCenter = "right";
categoryAxis.renderer.labels.template.verticalCenter = "middle";
categoryAxis.renderer.labels.template.rotation = 270;
categoryAxis.tooltip.disabled = true;
categoryAxis.renderer.minHeight = 110;

var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
// valueAxis.renderer.grid.template.disabled = true;
valueAxis.renderer.minWidth = 50;

// Create series
var series = chart.series.push(new am4charts.ColumnSeries());
series.sequencedInterpolation = true;
series.dataFields.valueY = "visits";
series.dataFields.categoryX = "country";
series.tooltipText = "[{categoryX}: bold]{valueY}[/]";
series.columns.template.strokeWidth = 0;

series.tooltip.pointerOrientation = "vertical";

series.columns.template.column.cornerRadiusTopLeft = 10;
series.columns.template.column.cornerRadiusTopRight = 10;
series.columns.template.column.fillOpacity = 0.8;

// on hover, make corner radiuses bigger
var hoverState = series.columns.template.column.states.create("hover");
hoverState.properties.cornerRadiusTopLeft = 0;
hoverState.properties.cornerRadiusTopRight = 0;
hoverState.properties.fillOpacity = 1;

series.columns.template.adapter.add("fill", function(fill, target) {
  return chart.colors.getIndex(target.dataItem.index);
});

// Cursor
chart.cursor = new am4charts.XYCursor();
  // FIN COLUM CHART
  // FIN SCRIPT GRÁFICAS
  var donutBtn = $('#donut-chart'), columnBtn = $('#column-chart'), advanceDiv = $('#advance1'), columnDiv = $('#column1');
  donutBtn.click(function(){
    advanceDiv.show();
    columnDiv.hide();
  });
  columnBtn.click(function(){
    advanceDiv.hide();
    columnDiv.show();
  });
</script>
