<?php
    // Breadcrumb
    $breadcrumb = [
        [ 'Inicio', 'home','Pages','PortalProjects'],
        [ 'Lista de Lecciones aprendidas','index','Events'],
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
        <div class="home-menu" id="Id_Table_Risks">
            <!-- <div class="row"> -->
            <form class="row col s12">
                <div class="input-field col s12">
                    <i class="material-icons prefix">search</i>
                    <input id="Search_Input" onkeyup="Search()" type="text"></input>
                    <label for="Search_Input">Buscar</label>
                </div>
                <div class="input-field col s2 m2 x1 xl1">
                    <select id="row-range">
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                        <option value="250">250</option>
                        <option value="500">500</option>
                        <!-- <option value="all">Todos</option> -->
                    </select>
                    <label for="Search_Input">Número de filas</label>
                </div>
            </form>
        </div>
        <div class="switch ml-5">
            <label>
<<<<<<< HEAD
                <a class="btn-floating btn-depressed white" onclick="return false;">
                    <i class="mdi material-icons grey-text">person</i>
=======
                <a class="mdi black-text" onclick="return false;">
                  person
                    <!-- <i class="mdi primary-text">person</i> -->
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
                </a>
                <!-- </div> -->
                <input class="mdi" id="checkbox-la" type="checkbox">
                <span class="lever"></span>
<<<<<<< HEAD
                <a class="btn-floating btn-depressed white" onclick="return false;">
                    <i class="mdi material-icons grey-text">group</i>
=======
                <a class="mdi black-text" onclick="return false;">
                  group
                    <!-- <i class="mdi black-text">group</i> -->
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
                </a>
            </label>
        </div>
        <div class="ml-5 pt-2 pb-2">
          <h5 id="table-title"></h5>
        </div>
        <table id="myTable" class="display highlight centered" data-table="<?=$view?>" cellspacing="0" width="100%">
            <thead>
                <tr id="thead-tr"></tr>
            </thead>
            <tbody id="tbody-la"></tbody>
        </table>
    </div>
    </div>
    </div>
<div id="filterEvents" class="modal w-600" style="overflow-y:visible;">
    <div class="modal-content">
        <a class="modal-close close">
            <i class="material-icons">close</i>
        </a>
        <h2>Filtrar lecciones aprendidas</h2>
        <div class="row wrap ma-0">
            <div class="d-flex col s12 m6 pa-0">
                <div class="sheet light lighten-1">
                    <div class="sheet-content">
                      <div class="input-field mt-6">
                        <form>
                          <select class="la-filter" name="la-select" id="lare_010_t_Fase">
                              <option data-id="all" value="all"></option>
                              <option data-id="RYOS" data-type="fase" value="RYOS">RYOS</option>
                              <option data-id="Fase I - Estructuracion" data-type="fase" value="Fase I - Estructuracion">Fase I - Estructuración</option>
                              <option data-id="Fase II - Seleccion" data-type="fase" value="Fase II - Seleccion">Fase II - Selección</option>
                              <option data-id="Fase III - Planeacion" data-type="fase" value="Fase III - Planeacion">Fase III - Planeación</option>
                              <option data-id="Fase IV - Ejecucion" data-type="fase" value="Fase IV - Ejecucion">Fase IV - Ejecución</option>
                              <option data-id="Fase V - Cierre y Transferencia" data-type="fase" value="Fase V - Cierre y Transferencia">Fase V - Cierre y Transferencia</option>
                              <option data-id="O&M" data-type="fase" value="O&M">O&M</option>
                          </select>
                          <label style="color: #333333; font-weight: bold;">Fase</label>
                        </form>
                      </div>
                      <div class="input-field mt-6">
                        <form>
                          <select class="la-filter" name="la-select" id="lare_009_t_SubProyecto">
                              <option data-id="all" value="all"></option>
                              <option data-id="Lineas de transmision" data-type="subproyecto" value="Lineas de transmision">Líneas de transmisión</option>
                              <option data-id="Subestaciones" data-type="subproyecto" value="Subestaciones">Subestaciones</option>
                              <option data-id="Gasoductos" data-type="subproyecto" value="Gasoductos">Gasoductos</option>
                              <option data-id="Estaciones compresoras" data-type="subproyecto" value="Estaciones compresoras">Estaciones compresoras</option>
                              <option data-id="Tecnologia" data-type="subproyecto" value="Tecnologia">Tecnología</option>
                              <option data-id="Administrativo Corporativo" data-type="subproyecto" value="Administrativo Corporativo">Administrativo Corporativo</option>
                              <option data-id="Generacion" data-type="subproyecto" value="Generacion">Generación</option>
                              <option data-id="Cogeneracion" data-type="subproyecto" value="Cogeneracion">Cogeneración</option>
                              <option data-id="Otro" data-type="subproyecto" value="Otro">Otro</option>
                              <option data-id="N/A" data-type="subproyecto" value="N/A">N/A</option>
                          </select>
                          <label style="color: #333333; font-weight: bold;">Área core</label>
                        </form>
                      </div>
                      <div class="input-field mt-6 la-filter-gp" style="display:none">
                        <form>
                          <select class="la-filter" id="select-project">
                            <option data-id="all" value="all"></option>
                          </select>
                          <label style="color: #333333; font-weight: bold;">Proyecto</label>
                        </form>
                      </div>
                      <div class="input-field mt-6 la-filter-gp" style="display:none">
                        <form>
                          <select class="la-filter" id="status_select">
                            <option data-id="all" value="all"></option>
                            <option data-id="Approved" data-type="status" value="Approved">Aprobado</option>
                            <option data-id="Disapproved" data-type="status" value="Disapproved">Desaprobado</option>
                          </select>
                          <label style="color: #333333; font-weight: bold;">Estatus</label>
                        </form>
                      </div>
                    </div>
                </div>
            </div>
            <div class="d-flex col s12 m6 pa-0">
                <div class="sheet light lighten-1">
                    <div class="sheet-content">
                        <div class="input-field mt-6">
                          <form>
                            <select class="la-filter" name="la-select" id="lare_008_t_Durante">
                                <option data-id="all" value="all"></option>
                                <option data-id="Alcance - Definicion y gestion de los requerimientos y requisitos" data-type="gestion" value="Alcance - Definicion y gestion de los requerimientos y requisitos">Alcance - Definición y gestión de los requerimientos y requisitos</option>
                                <option data-id="Calidad: planificacion, control y aseguramiento" data-type="gestion" value="Calidad: planificacion, control y aseguramiento">Calidad: planificación, control y aseguramiento</option>
                                <option data-id="Equipo de proyecto - Disponibilidad, desarrollo y funcionamiento" data-type="gestion" value="Equipo de proyecto - Disponibilidad, desarrollo y funcionamiento">Equipo de proyecto - Disponibilidad, desarrollo y funcionamiento</option>
                                <option data-id="Estudios e Ingenieria" data-type="gestion" value="Estudios e Ingenieria">Estudios e Ingeniería</option>
                                <option data-id="Gestion Ambiental" data-type="gestion" value="Gestion Ambiental">Gestión Ambiental</option>
                                <option data-id="Gestion Humana" data-type="gestion" value="Gestion Humana">Gestión Humana</option>
                                <option data-id="Gestion Juridica-Legal" data-type="gestion" value="Gestion Juridica-Legal">Gestión Jurídica-Legal</option>
                                <option data-id="Gestion SST" data-type="gestion" value="Gestion SST">Gestión SST</option>
                                <option data-id="Gestion Social" data-type="gestion" value="Gestion Social">Gestión Social</option>
                                <option data-id="Gestion de Adquisiciones, Compras y Contratacion" data-type="gestion" value="Gestion de Adquisiciones, Compras y Contratacion">Gestión de Adquisiciones, Compras y Contratación</option>
                                <option data-id="Gestion de Comunicaciones" data-type="gestion" value="Gestion de Comunicaciones">Gestión de Comunicaciones</option>
                                <option data-id="Gestion de Interesados" data-type="gestion" value="Gestion de Interesados">Gestión de Interesados</option>
                                <option data-id="Gestion de Riesgos" data-type="gestion" value="Gestion de Riesgos">Gestión de Riesgos</option>
                                <option data-id="Gestion de Tierras" data-type="gestion" value="Gestion de Tierras">Gestión de Tierras</option>
                                <option data-id="Gestion de la Integracion" data-type="gestion" value="Gestion de la Integracion">Gestión de la Integración</option>
                                <option data-id="Seguridad Fisica" data-type="gestion" value="Seguridad Fisica">Seguridad Física</option>
                                <option data-id="Tiempo: estimacion, desarrollo y control de cronograma" data-type="gestion" value="Tiempo: estimacion, desarrollo y control de cronograma">Tiempo: estimación, desarrollo y control de cronograma</option>
                            </select>
                            <label style="color: #333333; font-weight: bold;">Gestión o categoría</label>
                          </form>
                        </div>
                        <div class="input-field mt-6">
                          <form>
                            <select class="la-filter" name="la-select" id="lare_012_TipoEvento">
                                <option data-id="all" value="all"></option>
                                <option data-id="Caso de Exito" data-type="eventype" value="Caso de Exito">Caso de éxito</option>
                                <option data-id="Oportunidad de Mejora" data-type="eventype" value="Oportunidad de Mejora">Oportunidad de mejora</option>
                            </select>
                            <label style="color: #333333; font-weight: bold;">Tipo de evento</label>
                          </form>
                        </div>
                        <div class="input-field mt-6 la-filter-gp" style="display:none">
                          <form>
                            <select class="la-filter" id="select-company">
                              <option data-id="all" value="all"></option>
                            </select>
                            <label style="color: #333333; font-weight: bold;">Empresa</label>
                          </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
      <a class="modal-close btn btn-depressed error" id="filter_cancel" style="display:none">
        <i class="large material-icons noselect">cancel</i>
      </a>
        <a class="modal-close btn btn-depressed tertiary">
          <i class="large material-icons noselect " id="filter_la">search</i>
        </a>
    </div>
</div>
<div class="fixed-action-btn">
  <a class="btn-floating btn-large tertiary Scroll-button">
    <i class="large material-icons noselect" id="add">add</i>
  </a>
</div>
<div class="fixed-action-btn" style="margin-bottom: 120px">
  <a class="btn-floating btn-large tertiary noselect modal-trigger" href="#filterEvents">
    <i class="large material-icons noselect" id="search_la">search</i>
  </a>
</div>
<script>
  var email_user = $('#email-element').text(), table_view = $('#myTable').attr('data-table');
  if(table_view == "group" || $('#checkbox-la').prop("checked") == true){
      $('.la-filter-gp').show();
      $('#checkbox-la').attr('checked', true);
      $('#table-title').text("Lecciones aprendidas");
      group();
  } else {
      $('.la-filter-gp').hide();
      $('#table-title').text("Mis lecciones aprendidas");
      person();
  }
  // TEMPORAL
  function Search() {
      var searchText = document.getElementById('Search_Input').value.toUpperCase();
      if (searchText != null) {
          var targetTable = document.getElementById('myTable');
          var targetTableColCount;
<<<<<<< HEAD

=======
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
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
  }
  var settings = {
    "async": true,
    "crossDomain": true,
<<<<<<< HEAD
    "url": "http://192.168.1.153:7001/ords/projects_portal/portal/registerevent/filtersbycompany/",
=======
    "url": "http://192.168.0.210:8080/ords/portal/registerevent/filtersbycompany/",
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
    "method": "GET",
    "headers": {
      "Authorization": "Bearer <?=$_SESSION["PortalToken"]?>",
      "cache-control": "no-cache"
    }
  }

  $.ajax(settings).done(function (response) {
    $.each(response.items, function() {
      var option = new Option(this.empresa, this.empresa);
      option.setAttribute('data-id' , this.empresa);
      option.setAttribute('data-type' , 'company');
      $('#select-company').append(option);
      $('#select-company').formSelect();
    });
  });
  var settings = {
    "async": true,
    "crossDomain": true,
<<<<<<< HEAD
    "url": "http://192.168.1.153:7001/ords/projects_portal/portal/registerevent/filtersbyprojectreference/",
=======
    "url": "http://192.168.0.210:8080/ords/portal/registerevent/filtersbyprojectreference/",
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
    "method": "GET",
    "headers": {
      "Authorization": "Bearer <?=$_SESSION["PortalToken"]?>",
      "cache-control": "no-cache"
    }
  }

  $.ajax(settings).done(function (response) {
    $.each(response.items, function() {
      var option = new Option(this.projectreference, this.projectreference);
      option.setAttribute('data-id' , this.projectreference);
      option.setAttribute('data-type' , 'project');
      $('#select-project').append(option);
      $('#select-project').formSelect();
    });
  });
  $('#checkbox-la').change(function() {
      var count_individual_checkbox = $('input[name="first_checkbox"]:checked').length;
      $('#tbody-la tr').remove();
      $('#thead-tr th').remove();
      var select = $('.la-filter');
      select.prop('selectedIndex', 0);
      select.formSelect();
      $('.paginator.center').remove();
      if($(this).prop("checked") == true){
              $('.la-filter-gp').show();
              $('#table-title').text("Lecciones aprendidas");
              group();
            } else {
              $('.la-filter-gp').hide();
              $('#table-title').text("Mis lecciones aprendidas");
              person();
            }
  });
  function person(){
    var settings = {
        "async": true,
        "crossDomain": true,
<<<<<<< HEAD
        "url": "http://192.168.1.153:7001/ords/projects_portal/portal/registerevent/eventsbyemail/" + email_user,
=======
        "url": "http://192.168.0.210:8080/ords/portal/registerevent/eventsbyemail/" + email_user,
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
        "method": "GET",
        "headers": {
            "Content-Type": "application/json",
            "Authorization": "Bearer <?=$_SESSION["PortalToken"]?>",
            "cache-control": "no-cache"
        },
        "processData": false,
        "data": ""
    }
        $.ajax(settings).done(function(response) {
            populateTableP(response);
        });
  }
  function group(){
    var settings = {
        "async": true,
        "crossDomain": true,
<<<<<<< HEAD
        "url": "http://192.168.1.153:7001/ords/projects_portal/portal/registerevent/totallist/",
=======
        "url": "http://192.168.0.210:8080/ords/portal/registerevent/totallist/",
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
        "method": "GET",
        "headers": {
            "Content-Type": "application/json",
            "Authorization": "Bearer <?=$_SESSION["PortalToken"]?>",
            "cache-control": "no-cache"
        },
        "processData": false,
        "data": ""
    }
    $.ajax(settings).done(function(response) {
        populateTableG(response);
    });
  }
  function populateTableP(response) {
    console.log(response);
      $('#thead-tr').append(
        $('<th>',{scope : 'col', text : 'Registro'}),
        $('<th>',{scope : 'col', text : 'Fase'}),
        $('<th>',{scope : 'col', text : 'Área Core'}),
        $('<th>',{scope : 'col', text : 'Gestión o categoría'}),
        $('<th>',{scope : 'col', text : 'Tipo de evento'}),
        $('<th>',{scope : 'col', text : 'Acciones'})
      );
      $.each(response.items, function(i) {
          $('#tbody-la').append($('<tr>', {
              id: 'tr_' + this.record_no,
              class : 'public-table'
          }).attr({
            'data-fase' : this.lare_010_t_fase,
            'data-gestion' : this.lare_008_t_durante,
            'data-subproyecto' : this.lare_009_t_subproyecto,
            'data-eventype' : this.lare_012_tipoevento,
            'data-status' : this.status
          }));
          $('#tr_' + this.record_no)
              .append($('<td>', {
                  text: this.record_no
              }))
              .append($('<td>', {
                  text: this.lare_010_t_fase
              }))
              .append($('<td>', {
                  text: this.lare_009_t_subproyecto
              }))
              .append($('<td>', {
                  text: this.lare_008_t_durante
              }))
              .append($('<td>', {
                  text: this.lare_012_tipoevento
              }))
              .append($('<td>', {
                  class: 'actions'
              }).append(
                  $('<a>', {
                      id: this.record_no,
                      name: 'btn-ver',
                      class: 'btn btn-small',
                      text: 'Ver'
                  }).attr('data-user','person')
              ));
      });
      click_detail();
  }
  function populateTableG(response) {
    console.log(response);
      $('#thead-tr').append(
        $('<th>',{scope : 'col', text : 'Registro'}),
        $('<th>',{scope : 'col', text : 'Fase'}),
        $('<th>',{scope : 'col', text : 'Empresa'}),
        $('<th>',{scope : 'col', text : 'Gestión impactada'}),
        $('<th>',{scope : 'col', text : 'Lección aprendida'}),
        $('<th>',{scope : 'col', text : 'Plan de acción'}),
        $('<th>',{scope : 'col', text : 'Proyecto de referencia'}),
        $('<th>',{scope : 'col', text : 'Área Core'}),
        $('<th>',{scope : 'col', text : 'Tipo de acontecimiento'}),
        $('<th>',{scope : 'col', text : 'Estatus'}),
        $('<th>',{scope : 'col', text : 'Fecha de identificación'}),
        $('<th>',{scope : 'col', text : 'Acciones'})
      );
      $.each(response.items, function(i) {
          $('#tbody-la').append($('<tr>', {
              id: 'tr_' + this.record_no,
              class : 'public-table'
          }).attr({
            'data-fase' : this.lapa_005_t_mmcvfase,
            'data-gestion' : this.lapa_003_t_gestionimpactada,
            'data-subproyecto' : this.lapa_004_t_subproyecto,
            'data-eventype' : this.lapa_007_t_tipoacontecimien,
            'data-company' : this.lapa_046_t_empresa,
            'data-project' : this.lapa_045_proyectoreferecia,
            'data-status' : this.status
          }));
          var format_fidentificacion = this.lapa_002_s_fidentificacion.split(' ')[0];
          $('#tr_' + this.record_no)
              .append($('<td>', {
                  text: this.record_no
              }))
              .append($('<td>', {
                  text: this.lapa_005_t_mmcvfase
              }))
              .append($('<td>', {
                  text: this.lapa_046_t_empresa
              }))
              .append($('<td>', {
                  text: this.lapa_003_t_gestionimpactada
              }))
              .append($('<td>', {
                  text: this.lapa_008_s_leccionapren
              }))
              .append($('<td>', {
                  text: this.lapa_009_s_planaccion
              }))
              .append($('<td>', {
                  text: this.lapa_045_proyectoreferecia
              }))
              .append($('<td>', {
                  text: this.lapa_004_t_subproyecto
              }))
              .append($('<td>', {
                  text: this.lapa_007_t_tipoacontecimien
              }))
              .append($('<td>', {
                  text: this.status
              }))
              .append($('<td>', {
                  text: format_fidentificacion
              }))
              .append($('<td>', {
                  class: 'actions'
              }).append(
                  $('<a>', {
                      id: this.record_no,
                      name: 'btn-ver',
                      class: 'btn btn-small',
                      text: 'Ver'
                  }).attr('data-user','group')
              ));
      });
      click_detail();
  }

  function click_detail() {
      var range = $('#row-range').children(":selected");
      $('a[name="btn-ver"]').on('click', function() {
          window.location.href = "/Portal-Web/events/detail/" + $(this).attr('data-user') + '/' + this.id;
      });
      table(range.val());
  }
  $('#add').click(function(){
    window.location.href = "/Portal-Web/events/form";
  });
  // FILTER LOGIC
  $(document).ready(function(){
  var clean_rks = $('#filter_cancel'), e = $('.public-table'),fase = $('#lare_010_t_Fase'),durante = $('#lare_008_t_Durante'),status = $('#status_select'),
      subproyecto = $('#lare_009_t_SubProyecto'),
      tipo = $('#lare_012_TipoEvento'), proyecto = $('#select-project'), empresa = $('#select-company'),
      select_actual = $('.la-filter');
      select_actual.change(function() {
        var a = select_actual.children(":selected"), range = $('#row-range').children(":selected");
        if ($('.public-table').show(), 0 != a.length) {
            var i = $.map(a, function(a) {
                return $(a).data("id")
            });
            if (fase.val() == 'all' && durante.val() == 'all' && status.val() == 'all' && subproyecto.val() == 'all' && tipo.val() == 'all' && proyecto.val() == 'all' && empresa.val() == 'all') {
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
                  table2();
                }
            })
          }
        });
      clean_rks.click(function(){
        var range = $('#row-range').children(":selected");
        $('.public-table').show();
        clean_rks.hide();
        var select = select_actual;
        select.prop('selectedIndex', 0); //Sets the first option as selected
        select.formSelect();
        $('.paginator.center').remove();
        table(range.val());
      })
    });
    $('#row-range').change(function(){
      var range = $(this).children(":selected");
      // alert(range.val());
      if ($('#myTable tbody tr').hasClass("active-item")) {
        table2(range.val());
      } else {
        table(range.val());
      }
<<<<<<< HEAD
    })
=======
    });
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
    function table(range){
      $('.paginator.center').remove();
      $('#myTable').after('<div id="nav" class="paginator center mt-4"></div>');
      $('#nav').append('<ul class="pagination" id="myPager"></ul>');
      var rowsShown = range;
      var rowsTotal = $('#myTable tbody tr').length;
      console.log(rowsTotal);
      if (rowsTotal > 0) {
        var numPages = rowsTotal/rowsShown;
        for(i = 0; i < numPages; i++) {
            var pageNum = i + 1;
            $('#myPager').append('<li><a href="#" id="'+pageNum+'" class="Paginate_Numbers" rel="'+i+'">'+pageNum+'</a></li>');
        }
        var LastPage = i-1;
        $('#myTable tbody tr').hide();
        $('#myTable tbody tr').slice(0, rowsShown).show();
        $('#nav li:first').addClass('active');
        $('<li class="first" style="display:none"><a href="#" rel="0" class="Paginate_Numbers"><i class="material-icons">first_page</i></a></li>').insertBefore(".active");
        $('<li class="prev" style="display:none"><a href="#" class="Paginate_Next_Prev"><i class="material-icons">chevron_left</i></a></li>').insertBefore(".active");
        $('#myPager').append('<li class="next"><a href="#" class="Paginate_Next_Prev"><i class="material-icons">chevron_right</i></a></li>');
        $('#myPager').append('<li class="last"><a href="#" rel="'+LastPage+'" class="Paginate_Numbers"><i class="material-icons">last_page</i></a></li>');
        Click_Pagination(rowsShown);
        Click_Next_Prev(rowsShown);
      } else {
        $('.paginator.center').remove();
      }
  }
  function table2(){
    $('.paginator.center').remove();
    $('#myTable').after('<div id="nav" class="paginator center mt-4"></div>');
    $('#nav').append('<ul class="pagination" id="myPager"></ul>');
    var rowsShown = $('#row-range').children(":selected").val();
    var rowsTotal = $('.public-table.active-item').length;
    console.log(rowsTotal);
    if (rowsTotal > 0) {
      var numPages = rowsTotal/rowsShown;
      for(i = 0; i < numPages; i++) {
          var pageNum = i + 1;
          $('#myPager').append('<li><a href="#" id="'+pageNum+'" class="Paginate_Numbers" rel="'+i+'">'+pageNum+'</a></li>');
      }
      var LastPage = i-1;
      $('.public-table.active-item').hide();
      $('.public-table.active-item').slice(0, rowsShown).show();
      $('#nav li:first').addClass('active');
      $('<li class="first" style="display:none"><a href="#" rel="0" class="Paginate_Numbers"><i class="material-icons">first_page</i></a></li>').insertBefore(".active");
      $('<li class="prev" style="display:none"><a href="#" class="Paginate_Next_Prev"><i class="material-icons">chevron_left</i></a></li>').insertBefore(".active");
      $('#myPager').append('<li class="next"><a href="#" class="Paginate_Next_Prev"><i class="material-icons">chevron_right</i></a></li>');
      $('#myPager').append('<li class="last"><a href="#" rel="'+LastPage+'" class="Paginate_Numbers"><i class="material-icons">last_page</i></a></li>');
      Click_Pagination2(rowsShown);
      Click_Next_Prev2(rowsShown);
    } else {
      $('.paginator.center').remove();
    }
  }
  function Click_Pagination2(rowsShown){
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
        }
        // $(this).closest('li').removeClass('disabled');
        var currPage = $(this).attr('rel');
        var startItem = currPage * rowsShown;
        var endItem = startItem + rowsShown;
        $('.public-table.active-item').css('opacity','1').hide().slice(startItem, endItem).
        css('display','table-row').animate({opacity:1}, 300);
    });
  }
  function Click_Next_Prev2(rowsShown){
    $('.Paginate_Next_Prev').bind('click', function(){
        var Get_Element = document.getElementsByClassName("active")[0].getElementsByClassName("Paginate_Numbers")[0];
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
        $('.public-table.active-item').css('opacity','1').hide().slice(startItem, endItem).
        css('display','table-row').animate({opacity:1}, 300);
      }
    });
  }
  function Remove_Class(){
    $('#nav li').removeClass('active');
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
        }
        // $(this).closest('li').removeClass('disabled');
        var currPage = $(this).attr('rel');
        var startItem = currPage * rowsShown;
        var endItem = startItem + rowsShown;
        $('#myTable tbody tr').css('opacity','1').hide().slice(startItem, endItem).
        css('display','table-row').animate({opacity:1}, 300);
    });
  }
  function Click_Next_Prev(rowsShown){
    $('.Paginate_Next_Prev').bind('click', function(){
<<<<<<< HEAD
=======
      console.log(document.getElementsByClassName("active"));
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
        var Get_Element = document.getElementsByClassName("active")[0].getElementsByClassName("Paginate_Numbers")[0];
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
        $('#myTable tbody tr').css('opacity','1').hide().slice(startItem, endItem).
        css('display','table-row').animate({opacity:1}, 300);
      }
    });
  }
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
    }
  }
</script>
