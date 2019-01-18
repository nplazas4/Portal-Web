<div class="container">
  <div class="row">
    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
      <div class="card card-signin my-5">
      <div class="card-body">
        <h5 class="card-title text-center">Editar usuario</h5>
        <?= $this->Form->create($projects,['novalidate']) ?>
        <fieldset>
          <div class="row">
            <div class="input-field col s6">
              <?php echo $this->Form->input('ID_PROJECT',['label'=>'ID','placeholder'=>'ID','class'=>'validate','required']);?>
            </div>
            <div class="input-field col s6">
              <?php echo $this->Form->input('PROJECT_NAME',['label'=>'','placeholder'=>'NOMBRE','class'=>'validate','required']);?>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <?php echo $this->Form->textarea('DESCRIPTION',['label'=>'Descripción','placeholder'=>'DESCRIPCIÓN','class'=>'materialize-textarea','required']);?>
            </div>
          </div>
        </fieldset>
        <?= $this->Form->button('Editar',['class'=>'btn btn-primary mt-2'])?>
        <?= $this->Form->end() ?>
    </div>
  </div>
</div>
</div>
