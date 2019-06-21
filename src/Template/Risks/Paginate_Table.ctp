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
        <?php foreach ($risks as $risk): ?>
        <?php foreach ($projectsRisks as $project): ?>
          <?php if ($project->id == $risk->PROJECT_CODE): ?>
            <tr>
                <td></td>
                <td><?= $this->Number->format($risk->id) ?></td>
                <td><?= h($risk->PROJECT_CODE) ?></td>
                <td><?= h($risk->RISK_NUMBER) ?></td>
                <td><?= h($risk->RISK_NAME) ?></td>
                <td class="actions">
                  <?= $this->Html->link(__('Editar'),['action' => 'edit', $risk->id],['class'=>'btn btn-small tooltipped','data-position'=>'left','data-tooltip'=>'Ver o Editar Riesgo de Proyecto']) ?>
                  <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete',$risk->id], ['confirm' => __('Seguro desea eliminar el proyecto '.$risk->RISK_NAME.'?', $risk->id),'class'=>'btn btn-small tooltipped #f44336 red','data-position'=>'dropdown','data-tooltip'=>'Eliminar Riesgo de Proyecto']) ?>
                </td>
            </tr>
          <?php endif; ?>
        <?php endforeach; ?>
      <?php endforeach; ?>
      </tbody>
  </table>
  <script>
$(document).ready(function(){
  var targetTable = document.getElementById('myTable');
  var targetTableColCount;
  var Input_Value = "<?=$Search_Input_Value?>";
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
          if (rowData.indexOf(Input_Value) == -1)
              targetTable.rows.item(rowIndex).style.display = 'none';
          else
              targetTable.rows.item(rowIndex).style.display = 'table-row';
        }
  });
  </script>
