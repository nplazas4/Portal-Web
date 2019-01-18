<?php
    // Breadcrumb
    $breadcrumb = [
        [ 'Inicio', 'home','Pages','PortalProjects'],
        [ 'EPS','index','Eps'],
    ];
?>
<div class="section bcrumb company">
    <div class="breadcrumb-container">
        <?php foreach ($breadcrumb as $item): ?>
            <!-- <a href="<?= $item[1] ?>" class="breadcrumb"><?= $item[0] ?></a> -->
            <?php echo $this->Html->link($item[0],
              ['controller'=>$item[2], 'action'=>$item[1]],
              ['escape' => false,'class'=>'breadcrumb']
            );?>
        <?php endforeach; ?>
    </div>
    <div class="section home">
        <div class="home-menu">
          <!-- <div class="row"> -->
            <form class="col s12">
                <div class="input-field col s12">
                  <i class="material-icons prefix">search</i>
                  <input id="myInput" onkeyup="myFunction()" type="text"></input>
                  <label for="myInput">Buscar</label>
              </div>
            </form>
          <!-- </div> -->
          <!-- <div class="input-field col s12">
         <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." />
         </div> -->
          <table id="myTable" class="display highlight centered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                      <th scope="col"><?= $this->Paginator->sort('id',['No.']) ?></th>
                      <th scope="col"><?= $this->Paginator->sort('EPS_ID',['ID']) ?></th>
                      <th scope="col"><?= $this->Paginator->sort('EPS_NAME',['NOMBRE']) ?></th>
                      <th>ACCIONES</th>
                    </tr>
                </thead>
                <!-- <tfoot>
                    <tr>
                      <th scope="col"><?//= $this->Paginator->sort('id') ?></th>
                      <th scope="col"><?//= $this->Paginator->sort('ID_PROJECT') ?></th>
                      <th scope="col"><?//= $this->Paginator->sort('PROJECT_NAME') ?></th>
                      <th scope="col" class="actions"><?//= __('Actions') ?></th>
                    </tr>
                </tfoot> -->
                <tbody>
                  <?php foreach ($eps as $ep): ?>
                  <tr>
                      <td><?= $this->Number->format($ep->id) ?></td>
                      <td><?= h($ep->EPS_ID) ?></td>
                      <td><?= h($ep->EPS_NAME) ?></td>
                      <td class="actions">
                          <?= $this->Html->link(__('Editar'),['action' => 'edit', $ep->id],['class'=>'btn btn-small tooltipped','data-position'=>'left','data-tooltip'=>'Ver o Editar EPS']) ?>
                          <!-- <?//= $this->Html->link(__('Edit'), ['action' => 'edit', $project->id]) ?> -->
                          <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete',$ep->id], ['confirm' => __('Seguro desea eliminar el proyecto '.$ep->EPS_NAME.'?', $ep->id),'class'=>'btn btn-small tooltipped #f44336 red','data-position'=>'right','data-tooltip'=>'Eliminar EPS']) ?>
                      </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
            </table>
            <div class="paginator">
              <br>
                <ul class="pagination">
                  <li class="waves-effect"><?= $this->Paginator->first($this->Html->tag('i','first_page',array('class'=>'material-icons')),
                  array('escape' => false)) ?></li>
                    <!-- <?//= $this->Paginator->first('<< ' . __('first')) ?> -->
                    <li class="waves-effect"><?= $this->Paginator->prev($this->Html->tag('i','chevron_left',array('class'=>'material-icons')),
                    array('escape' => false)) ?></li>
                    <li class="waves-effect"><?= $this->Paginator->numbers(['before'=>'','after'=>'']) ?></li>
                    <!-- <li class="waves-effect"><?//= $this->Paginator->next(__('next') . ' >') ?></li> -->
                    <li class="waves-effect"><?= $this->Paginator->next($this->Html->tag('i','chevron_right',array('class'=>'material-icons')),
                    array('escape' => false)) ?></li>
                    <li class="waves-effect"><?= $this->Paginator->last($this->Html->tag('i','last_page',array('class'=>'material-icons')),
                    array('escape' => false)) ?></li>
                    <!-- <li class="waves-effect"><?//= $this->Paginator->last(__('last') . ' >>') ?></li> -->
                </ul>
                <!-- <p><?//= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p> -->
            </div>
        </div>
    </div>
</div>
<script>

// $(document).ready(function() {
//     $('input#myInput').characterCounter();
//   });
function myFunction() {
var searchText = document.getElementById('myInput').value;
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
