<?php
    // Breadcrumb
    $breadcrumb = [
        [ 'Inicio', 'home','Pages'],
        [ 'Portal Proyectos', 'portalProjects','Projects'],
    ];
?>
<!--Estructura del breadcrumb-->
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
    <div class="portal-projects-menu">
        <a class="portal-projects-menu-item secondary-text" id="a-corp">
            <figure>
                <?= $this->Html->image('logo-vert.svg') ?>
            </figure>
            <h2>Grupo Energía Bogotá</h2>
        </a>
        <a class="portal-projects-menu-item indigo-text text-darken-4" id="a-dist">
            <figure>
                <?= $this->Html->image('logos/23307.png') ?>
            </figure>
            <h2>Distribución</h2>
        </a>
        <a class="portal-projects-menu-item orange-text" id="a-trans">
            <figure>
                <?= $this->Html->image('logos/23306.png') ?>
            </figure>
            <h2>Transmisión y transporte</h2>
        </a>
        <a class="portal-projects-menu-item light-green-text text-darken-1" id="a-gen">
            <figure>
                <?= $this->Html->image('logos/23308.png') ?>
            </figure>
            <h2>Generación</h2>
        </a>
    </div>
</div>
<script>
<<<<<<< HEAD
=======
    //Ajax que se encarga de cargar portal projects (EPS LVL 1)
    // $(document).ready(function(){
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
      var csrfToken = <?= json_encode($this->request->getParam('_csrfToken')) ?>;
      var xhr2 = $.ajax({
        headers:{
          'X-CSRF-Token':csrfToken
        },
        method: "GET",
        dataType: "json",
        url: "<?php echo $this->Url->build(['controller'=>'Navbar','action'=>'portalProjects']);?>",
        cache: false,
        beforeSend: function(xhr) {
          xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        }
      }).fail(function(response, errorThrown){
        console.log('php controller status code: '+response.status+", "+errorThrown);
      })
      .done(function(response){
        $.each(response, function() {
          if (this.eps_id == '23305') {
              $('#a-corp').attr('href', '/Portal-Web/projects/company/'+btoa(unescape(encodeURIComponent(JSON.stringify(this)))));
          } else if (this.eps_id == '23306') {
              $('#a-trans').attr('href', '/Portal-Web/projects/companies/'+btoa(unescape(encodeURIComponent(JSON.stringify(this)))));
          } else if (this.eps_id == '23307') {
              $('#a-dist').attr('href', '/Portal-Web/projects/companies/'+btoa(unescape(encodeURIComponent(JSON.stringify(this)))));
          } else if (this.eps_id == '23308') {
              $('#a-gen').attr('href', '/Portal-Web/projects/companies/'+btoa(unescape(encodeURIComponent(JSON.stringify(this)))));
          }
        });
      });
<<<<<<< HEAD
=======
    // });
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
</script>
