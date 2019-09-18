<?php
    // Breadcrumb
    $breadcrumb = [
        [ 'Inicio', 'home','Pages' ],
        [ 'Portal Proyectos', 'portalProjects','Projects']
    ];
    $eps_id = null;
    if (isset($array_company["child_eps_id"])) {
      $eps_id = $array_company["child_eps_id"];
    } elseif ($array_company["eps_id"] == 23305) {
      $eps_id = 23305;
    }
    else {
      $eps_id = 0;
    }
?>
<div class="section bcrumb company">
  <div class="breadcrumb-container">
      <a href="javascript:history.back()" class="breadcrumb-back"><i class="material-icons">keyboard_arrow_left</i></a>
      <?php foreach ($breadcrumb as $item): ?>
          <?php echo $this->Html->link($item[0],
            ['controller'=>$item[2], 'action'=>$item[1]],
            ['escape' => false,'class'=>'breadcrumb']
          );?>
      <?php endforeach; ?>
      <?php if ($array_company["eps_id"] != 23305): ?>
        <?php echo $this->Html->link($array_company["name"],
          ['controller'=>'Projects', 'action'=>'companies',urlencode(base64_encode($json_company))],
          ['escape' => false,'class'=>'breadcrumb']
        );?>
        <?php echo $this->Html->link($array_company["child_name"],
          ['controller'=>'Projects', 'action'=>'company',urlencode(base64_encode($json_company))],
          ['escape' => false,'class'=>'breadcrumb']
        );?>
      <?php else:?>
        <?php echo $this->Html->link($array_company["name"],
          ['controller'=>'Projects', 'action'=>'company',urlencode(base64_encode($json_company))],
          ['escape' => false,'class'=>'breadcrumb']
        );?>
      <?php endif; ?>
  </div>
  <?php if($eps_id != 34013 && $eps_id != 34021 && $eps_id != 34015 && $eps_id != 34017):?>
    <div class="company-towers-content">
        <div class="company-towers-content-data">
              <?= $this->Html->image('logos/'.$eps_id.'.svg') ?>
            <div class="number">
                <h2 class="total-number"></h2>
            </div>
            <span>Proyectos</span>
        </div>
        <a class="category company-towers-content-tower sustenance">
            <?= $this->Html->image('icons/torre-sostenimiento.svg') ?>
            <div class="number">
                <h3 class="sost-number"></h3>
            </div>
            <h2>Sostenimiento</h2>
        </a>
        <a class="category company-towers-content-tower pec">
            <!-- <?= $this->Html->image('icons/torre-crecimiento.svg') ?> -->
            <div class="number">
                <h3 class="mec-number"></h3>
            </div>
            <h2>MEC</h2>
        </a>
        <a class="category company-towers-content-tower increase">
            <?= $this->Html->image('icons/torre-crecimiento.svg') ?>
            <div class="number">
                <h3 class="crec-number"></h3>
            </div>
            <h2>Crecimiento</h2>
        </a>
    </div>
  <?php else: ?>
    <div class="company-content">
        <figure class="company-content-logo">
            <?= $this->Html->image('logos/'.$eps_id.'.svg') ?>
        </figure>
        <div class="company-content-data">
            <figure class="company-content-data-station">
                <?= $this->Html->image('icons/estacion-compresion.svg') ?>
            </figure>
            <div class="number">
                <h2 class="total-number"></h2>
            </div>
        </div>
        <a class="category company-content-valve increase">
            <?= $this->Html->image('icons/valvula-crecimiento.svg') ?>
            <div class="number">
                <h3 class="crec-number"></h3>
            </div>
            <h2>Crecimiento</h2>
        </a>
        <a class="category company-content-valve pec">
            <?= $this->Html->image('icons/valvula-pec.svg') ?>
            <h2>MEC</h2>
            <div class="number">
                <h3 class="mec-number"></h3>
            </div>
        </a>
        <a class="category company-content-valve sustenance">
            <?= $this->Html->image('icons/valvula-sostenimiento.svg') ?>
            <div class="number">
                <h3 class="sost-number"></h3>
            </div>
            <h2>Sostenimiento</h2>
        </a>
    </div>
  <?php endif;?>
</div>
<script>
  // $(document).ready(function(){
    var csrfToken = <?= json_encode($this->request->getParam('_csrfToken')) ?>;
    var xhr3, xhr4, xhr5;
    var crec_number = 0, sost_number = 0, mec_number = 0;
    if(xhr3 && xhr3.readyState != 4){
        xhr3.abort();
    }
      xhr3 = $.ajax({
      headers:{
        'X-CSRF-Token':csrfToken
      },
      method: "GET",
      dataType: "json",
      url: "<?php echo $this->Url->build(['controller'=>'Navbar','action'=>'company-crec']);?>",
      data: {"user_id" : "<?=$current_user["V_ID_P_USER"]?>", "eps_id" : "<?=$eps_id?>"},
      cache: true,
      beforeSend: function(xhr) {
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      },
      success: function(response){
        $.each(response, function() {
          crec_number = this.crec_number;
          $('.crec-number').text(crec_number);
          total_projects();
        });
      }
    });
    if(xhr4 && xhr4.readyState != 4){
        xhr4.abort();
    }
      xhr4 = $.ajax({
      headers:{
        'X-CSRF-Token':csrfToken
      },
      method: "GET",
      dataType: "json",
      url: "<?php echo $this->Url->build(['controller'=>'Navbar','action'=>'company-sost']);?>",
      data: {"user_id" : "<?=$current_user["V_ID_P_USER"]?>", "eps_id" : "<?=$eps_id?>"},
      cache: true,
      beforeSend: function(xhr) {
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      },
      success: function(response){
        $.each(response, function() {
          sost_number = this.sost_number;
          $('.sost-number').text(sost_number);
          total_projects();
        });
      }
    });
    if(xhr5 && xhr5.readyState != 4){
        xhr5.abort();
    }
      xhr5 = $.ajax({
      headers:{
        'X-CSRF-Token':csrfToken
      },
      method: "GET",
      dataType: "json",
      url: "<?php echo $this->Url->build(['controller'=>'Navbar','action'=>'company-mec']);?>",
      data: {"user_id" : "<?=$current_user["V_ID_P_USER"]?>", "eps_id" : "<?=$eps_id?>"},
      cache: true,
      beforeSend: function(xhr) {
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      },
      success: function(response){
        $.each(response, function() {
          mec_number = this.mec_number;
          $('.mec-number').text(mec_number);
          total_projects();
        });
      }
    });
    function total_projects(){
      $('.total-number').text(mec_number + sost_number + crec_number);
    }
  // });
  // $(document).ready(function(){
  //   $('.total-number').text(mec_number + sost_number + crec_number);
  // });
</script>
