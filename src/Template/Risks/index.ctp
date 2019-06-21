<?php
    // Breadcrumb
    $breadcrumb = [
        [ 'Inicio', 'home','Pages','PortalProjects'],
        [ 'Riesgos de Proyectos','index','Risks'],
    ];
?>
<?= $this->Html->css('textlength')?>
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
                      <th scope="col" width="10%"><?php echo $this->Html->link($this->Html->tag('i','add', array('class' => 'material-icons tooltipped','data-position'=>'dropdown','data-tooltip'=>'Agregar Riesgo')),
                      array('action' => 'add'), array('escape'=>false));?></th>
                      <th scope="col" width="10%"><?= $this->Paginator->sort('id',['No.']) ?></th>
                      <th scope="col" width="10%"><?= $this->Paginator->sort('PROJECT_CODE',['PROYECTO']) ?></th>
                      <th scope="col" width="10%"><?= $this->Paginator->sort('RISK_NUMBER',['RIESGO']) ?></th>
                      <th scope="col"><?= $this->Paginator->sort('RISK_NAME',['NOMBRE']) ?></th>
                      <th>ACCIONES</th>
                    </tr>
                </thead>
              <tbody>
                <?php foreach ($risks as $risk):?>
                  <?php foreach ($projectsRisks as $project):?>
                    <?php if ($project->id == $risk->PROJECT_CODE):?>
                      <tr>
                          <td></td>
                          <td><?= $this->Number->format($risk->id) ?></td>
                          <td><?= h($project->PROJECT_NAME) ?></td>
                          <td><?= h($risk->RISK_NUMBER) ?></td>
                          <td><?= h($risk->RISK_NAME) ?></td>
                          <td class="actions">
                            <?= $this->Html->link(__('Editar'),['action' => 'edit', $risk->id],['class'=>'btn btn-small tooltipped','data-position'=>'left','data-tooltip'=>'Ver o Editar Riesgo de Proyecto']) ?>
                            <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete',$risk->id], ['confirm' => __('Seguro desea eliminar el proyecto '.$risk->RISK_NAME.'?', $risk->id),'class'=>'btn btn-small tooltipped #f44336 red','data-position'=>'dropdown','data-tooltip'=>'Eliminar Riesgo de Proyecto']) ?>
                          </td>
                      </tr>
                    <?php endif;?>
                  <?php endforeach;?>
                <?php endforeach;?>
              </tbody>
            </table>
            <div class="paginator">
              <br>
                <!-- <ul class="pagination" id="myPager"> -->
                  <!-- <li class="waves-effect"></()?= $this->Paginator->first($this->Html->tag('i','first_page',array('class'=>'material-icons')),
                    array('escape' => false)) ?></li>
                    <li class="waves-effect"></?= $this->Paginator->prev($this->Html->tag('i','chevron_left',array('class'=>'material-icons')),
                    array('escape' => false)) ?></li>
                    <li class="waves-effect"></?= $this->Paginator->numbers(['before'=>'','after'=>'']) ?></li>
                    <li class="waves-effect"></?= $this->Paginator->next($this->Html->tag('i','chevron_right',array('class'=>'material-icons')),
                    array('escape' => false)) ?></li>
                    <li class="waves-effect"></?= $this->Paginator->last($this->Html->tag('i','last_page',array('class'=>'material-icons')),
                    array('escape' => false)) ?></li> -->
                <!-- </ul> -->
            </div>
        </div>
    </div>
</div>
<script>
  function Search(){
    var searchText = document.getElementById('Search_Input').value;
    if(searchText != null){
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
            {targetTable.rows.item(rowIndex).style.display = 'none';}
        else
            {
              if (searchText != "") {
                targetTable.rows.item(rowIndex).style.display = 'table-row';
                }
                else {
                  $('.active').click();
                }
              }
            }
          }
        }
    // }
    $(document).ready(function(){
      $('#myTable').after('<br><div id="nav" class="paginator center"></div>');
      $('#nav').append('<ul class="pagination" id="myPager"></ul>');
      var rowsShown = 10;
      var rowsTotal = $('#myTable tbody tr').length;
      var numPages = rowsTotal/rowsShown;
      for(i = 0;i < numPages;i++) {
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
  });
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
    console.log(next_Id);
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
