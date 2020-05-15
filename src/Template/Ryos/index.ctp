<?php
    // Breadcrumb
    $breadcrumb = [
        [ 'Inicio', 'home','Pages','PortalProjects'],
        [ 'Lista de RYOS','index','Ryos'],
    ];
?>
<?= $this->Html->script(['search.min.js']) ?>
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
            <form class="col s12">
                <div class="input-field col s12">
                  <i class="material-icons prefix">search</i>
                  <input id="Search_Input" onkeyup="Search()" type="text"></input>
                  <label for="Search_Input">Buscar</label>
              </div>
            </form>
          <table id="myTable" class="display highlight centered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                      <th scope="col" width="10%"><?php echo $this->Html->link($this->Html->tag('i','add', array('class' => 'material-icons tooltipped','data-position'=>'dropdown','data-tooltip'=>'Crear RYOS')),
                      array('action' => 'form'), array('escape'=>false));?></th>
                      <th scope="col">Código</th>
                      <th scope="col">Nombre</th>
                      <th>Acciones</th>
                    </tr>
                </thead>
              <tbody id="tbody-ryos"></tbody>
            </table>
        </div>
    </div>
</div>
<script>
  var email_user = $('#email-element').text();
  var settings = {
      "async": true,
      "crossDomain": true,
<<<<<<< HEAD
      "url": "http://192.168.1.153:7001/ords/projects_portal/portal/formryos/listbyemail/?v_email=" + email_user,
=======
      "url": "http://192.168.0.210:8080/ords/portal/formryos/listbyemail/?v_email=" + email_user,
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
  var promise = new Promise(function(resolve, reject) {
      $.ajax(settings).done(function(response) {
          $.each(response.items, function(i) {
              $('#tbody-ryos').append($('<tr>', {
                  id: 'tr_' + this.record_no
              }));
              $('#tr_' + this.record_no).append($('<td>'))
                  .append($('<td>', {
                      text: this.record_no
                  }))
                  .append($('<td>', {
                      text: this.nombre
                  }))
                  .append($('<td>', {
                      class: 'actions'
                  }).append(
                      $('<a>', {
                          id: this.record_no,
                          name: 'btn-ver',
                          class: 'btn btn-small',
                          text: 'Ver'
                      })
                  ));
          });
          resolve();
      });
  });
  promise.then(function(result) {
      $('a[name="btn-ver"]').on('click', function() {
          window.location.href = "/Portal-Web/ryos/detail/"+this.id;
      });
  });
  // TEMPORAL
  function Search() {
      var searchText = document.getElementById('Search_Input').value;
      var targetTable = document.getElementById('myTable');
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
              rowData += targetTable.rows.item(rowIndex).cells.item(colIndex).textContent;
          }

          //If search term is not found in row data
          //then hide the row, else show
          if (rowData.indexOf(searchText) == -1)
              targetTable.rows.item(rowIndex).style.display = 'none';
          else
              targetTable.rows.item(rowIndex).style.display = 'table-row';
      }
  }
</script>
