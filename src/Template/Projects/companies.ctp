<?php
    // Breadcrumb
    $breadcrumb = [
        [ 'Inicio', 'home','Pages' ],
        [ 'Portal Proyectos','portalProjects','Projects'],
    ];
?>

<div class="section companies">
    <div class="breadcrumb-container">
        <a href="javascript:history.back()" class="breadcrumb-back"><i class="material-icons">keyboard_arrow_left</i></a>
        <?php foreach ($breadcrumb as $item): ?>
            <?php echo $this->Html->link(
    $item[0],
    ['controller'=>$item[2], 'action'=>$item[1]],
    ['escape' => false,'class'=>'breadcrumb']
            );?>
        <?php endforeach; ?>
        <?php echo $this->Html->link(
                $array_parents_eps["name"],
                ['controller'=>'Projects', 'action'=>'companies',urlencode(base64_encode($json_parents_eps))],
                ['escape' => false,'class'=>'breadcrumb']
        );?>
    </div>
    <div class="companies-banner" id="slider">
      <ul class="slides">
        <li class="slide"><?= $this->Html->image('photos/companies_8.jpg') ?></li>
        <li class="slide"><?= $this->Html->image('photos/companies_2.jpg') ?></li>
        <li class="slide"><?= $this->Html->image('photos/companies_3.jpg') ?></li>
        <li class="slide"><?= $this->Html->image('photos/companies_4.jpg') ?></li>
        <li class="slide"><?= $this->Html->image('photos/companies_5.jpg') ?></li>
        <li class="slide active"><?= $this->Html->image('photos/companies_7.jpg') ?></li>
      </ul>
    </div>
    <div class="companies-menu">
      <div class="companies-menu" id="div-companies"></div>
    </div>
  </div>
  <script>
$(document).ready(function () {
  //save boolean
  var pause = false;
  //save blocks
  var block=  $('.slide');
  block.hide();
  $('.slide.active').show();
  //variable for counter
  var k =0;
  // interval function works only when pause is false
  setInterval(function () {
  if (!pause) {
    var $this = block.eq(k);
<<<<<<< HEAD
=======
    console.log($this);
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
      block.removeClass('active').fadeOut(3000).eq(k).addClass('active').fadeIn(3000);
      $this.addClass('active');
      k++;
      //if k more then number of blocks on page
      if (k >= block.length ) {
          //rewrite variable to start over
          k = 0;
        }
      }
    //every 1.5 sec
  }, 5000);
});
// $(document).ready(function(){
  var csrfToken = <?= json_encode($this->request->getParam('_csrfToken')) ?>;
  var div_companies = $('#div-companies');
  var xhr2 = $.ajax({
    headers:{
      'X-CSRF-Token':csrfToken
    },
    method: "GET",
    dataType: "json",
    url: "<?php echo $this->Url->build(['controller'=>'Navbar','action'=>'companies']);?>",
    data: {"eps_id" : "<?= $array_parents_eps["eps_id"];?>", "eps_parent_name" : "<?= $array_parents_eps["name"] ?>"},
    cache: true,
    beforeSend: function(xhr) {
      xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    }
  }).done(function(response){
    $.each(response, function() {
      var description = this.description;
      delete this['description'];
      if (this.child_eps_id == 34015 || this.child_eps_id == 34021) {
        div_companies.append([
          $('<a>',{class : 'companies-menu-item', href : '/Portal-Web/projects/company/'+btoa(unescape(encodeURIComponent(JSON.stringify(this))))}).append([
            $('<img>',{src : '/Portal-Web/img/logos/34015.svg'}).append([
              $('<i>',{class : 'material-icons', text : 'keyboard_arrow_right'})
            ])
          ]).append([
            $('<span>',{class : 'item-tooltip', text : description})
          ])
        ]).hide().fadeIn(200);
      } else if (this.child_eps_id != 34015 && this.child_eps_id != 34017 && this.child_eps_id != 34020 && this.child_eps_id != 34021) {
        div_companies.append([
          $('<a>',{class : 'companies-menu-item', href : '/Portal-Web/projects/company/'+btoa(unescape(encodeURIComponent(JSON.stringify(this))))}).append([
            $('<img>',{src : '/Portal-Web/img/logos/'+this.child_eps_id+'.svg'}).append([
              $('<i>',{class : 'material-icons', text : 'keyboard_arrow_right'})
            ])
          ]).append([
            $('<span>',{class : 'item-tooltip', text : description})
          ])
        ]).hide().fadeIn(200);
      } else if(this.child_eps_id == 34020){
        div_companies.append([
          $('<a>',{class : 'companies-menu-item', href : '/Portal-Web/projects/company/'+btoa(unescape(encodeURIComponent(JSON.stringify(this))))}).append([
            $('<img>',{src : '/Portal-Web/img/logos/'+this.child_eps_id+'.png'}).append([
              $('<i>',{class : 'material-icons', text : 'keyboard_arrow_right'})
            ])
          ]).append([
            $('<span>',{class : 'item-tooltip', text : description})
          ])
        ]).hide().fadeIn(200);
<<<<<<< HEAD
=======
      } else if(this.child_eps_id == 34017){
        div_companies.append([
          $('<a>',{class : 'companies-menu-item', href : '/Portal-Web/projects/company/'+btoa(unescape(encodeURIComponent(JSON.stringify(this))))}).append([
            $('<img>',{src : '/Portal-Web/img/logos/'+this.child_eps_id+'.jpg'}).append([
              $('<i>',{class : 'material-icons', text : 'keyboard_arrow_right'})
            ])
          ]).append([
            $('<span>',{class : 'item-tooltip', text : description})
          ])
        ]).hide().fadeIn(200);
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
      }else {
        div_companies.append([
          $('<a>',{class : 'companies-menu-item', href : '/Portal-Web/projects/company/'+btoa(unescape(encodeURIComponent(JSON.stringify(this))))}).append([
            $('<img>',{src : '/Portal-Web/img/logos/34016.svg'}).append([
              $('<i>',{class : 'material-icons', text : 'keyboard_arrow_right'})
            ])
          ]).append([
            $('<span>',{class : 'item-tooltip', text : description})
          ])
        ]).hide().fadeIn(200);
      }
    });
  });
</script>
