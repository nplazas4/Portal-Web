<?php
    // Breadcrumb
    $breadcrumb = [
        [ 'Inicio', 'home','Pages' ],
        [ 'Portal Proyectos', 'portalProjects','Projects']
    ];
    $child_eps_id = null;
    $child_eps_name = null;
    if (isset($array_company["child_eps_id"])) {
      $child_eps_id = $array_company["child_eps_id"];
      $child_eps_name = $array_company["child_name"];
    } elseif ($array_company["eps_id"] == 23305) {
      $child_eps_id = 23305;
    }
    else {
      $child_eps_id = 0;
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
  <?php if($child_eps_id != 34013 && $child_eps_id != 34021 && $child_eps_id != 34015 && $child_eps_id != 34017):?>
    <div class="company-towers-content">
        <div class="company-towers-content-data">
            <?php if($child_eps_id != 34020):?>
              <?= $this->Html->image('logos/'.$child_eps_id.'.svg') ?>
            <?php else:?>
              <?= $this->Html->image('logos/'.$child_eps_id.'.png') ?>
            <?php endif;?>
            <div class="number">
                <h2 class="total-number"></h2>
            </div>
            <span>Proyectos</span>
        </div>
        <a href="" class="sost-url company-towers-content-tower sustenance">
            <?= $this->Html->image('icons/torre-sostenimiento.svg') ?>
            <div class="number">
                <h3 class="sost-number"></h3>
            </div>
            <h2>Sostenimiento</h2>
        </a>
          <a class="mec-url company-towers-content-tower pec">
              <?php if ($array_company['eps_id'] == 23305):?>
            <!-- <?= $this->Html->image('icons/torre-crecimiento.svg') ?> -->
              <div class="number">
                  <h3 class="mec-number"></h3>
              </div>
              <h2>MEC</h2>
              <?php endif;?>
          </a>
        <a class="crec-url company-towers-content-tower increase">
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
<<<<<<< HEAD
            <?= $this->Html->image('logos/'.$child_eps_id.'.svg') ?>
=======
          <?php if($child_eps_id == 34017):?>
            <?= $this->Html->image('logos/'.$child_eps_id.'.jpg') ?>
          <?php else:?>
            <?= $this->Html->image('logos/'.$child_eps_id.'.svg') ?>
          <?php endif;?>
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
        </figure>
        <div class="company-content-data">
            <figure class="company-content-data-station">
                <?= $this->Html->image('icons/estacion-compresion.svg') ?>
            </figure>
            <div class="number">
                <h2 class="total-number"></h2>
            </div>
        </div>
        <a class="crec-url company-content-valve increase">
            <?= $this->Html->image('icons/valvula-crecimiento.svg') ?>
            <div class="number">
                <h3 class="crec-number"></h3>
            </div>
            <h2>Crecimiento</h2>
        </a>
        <!-- <a class="mec-url company-content-valve pec">
          </?= $this->Html->image('icons/valvula-pec.svg') ?>
          <h2>MEC</h2>
          <div class="number">
            <h3 class="mec-number"></h3>
          </div>
        </a> -->
        <a class="sost-url company-content-valve sustenance">
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
    var xhr3, xhr4, xhr5, crec_item = $('.crec-url'), crec_item_number = $('.crec-number'), total_item_number = $('.total-number');
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
      data: {"user_id" : "<?=$current_user["V_ID_P_USER"]?>", "child_eps_id" : "<?=$child_eps_id?>", "name" : "<?=$array_company["name"]?>", "child_name" : "<?=$child_eps_name?>", "eps_id" : "<?=$array_company["eps_id"]?>"},
      cache: true,
      beforeSend: function(xhr) {
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      },
      success: function(response){
        $.each(response, function() {
          crec_item.attr("href", "/Portal-Web/projects/projects/"+btoa(unescape(encodeURIComponent(JSON.stringify(this)))));
          crec_number = this.proj_number;
          crec_item_number.text(crec_number);
          total_projects();
        });
      }
    });
    var sost_item = $('.sost-url'), sost_item_number = $('.sost-number');
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
      data: {"user_id" : "<?=$current_user["V_ID_P_USER"]?>", "child_eps_id" : "<?=$child_eps_id?>", "name" : "<?=$array_company["name"]?>", "child_name" : "<?=$child_eps_name?>", "eps_id" : "<?=$array_company["eps_id"]?>"},
      cache: true,
      beforeSend: function(xhr) {
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      },
      success: function(response){
        $.each(response, function() {
          sost_item.attr("href", "/Portal-Web/projects/projects/"+btoa(unescape(encodeURIComponent(JSON.stringify(this)))));
          sost_number = this.proj_number;
          sost_item_number.text(sost_number);
          total_projects();
        });
      }
    });
    var mec_item = $('.mec-url'), mec_item_number = $('.mec-number');
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
      data: {"user_id" : "<?=$current_user["V_ID_P_USER"]?>", "child_eps_id" : "<?=$child_eps_id?>", "name" : "<?=$array_company["name"]?>", "child_name" : "<?=$child_eps_name?>", "eps_id" : "<?=$array_company["eps_id"]?>"},
      cache: true,
      beforeSend: function(xhr) {
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      },
      success: function(response){
        $.each(response, function() {
          mec_item.attr("href", "/Portal-Web/projects/projects/"+btoa(unescape(encodeURIComponent(JSON.stringify(this)))));
          mec_number = this.proj_number;
          mec_item_number.text(mec_number);
          total_projects();
        });
      }
    });
    function total_projects(){
      total_item_number.text(mec_number + sost_number + crec_number);
    }
</script>
