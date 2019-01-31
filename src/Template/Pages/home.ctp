<div class="section home">
    <!-- <section class="home-item">
        <a href="/portal-projects"></a>
        <div class="home-item-title">
            <h2>Portal proyectos</h2>
        </div>
        <figure>
            <//?//= $this->Html->image('icons/portal-proyectos.svg') ?>
        </figure>
        <div class="home-item-banner">
            <//?= $this->Html->image('photos/energia.jpg') ?>
        </div>
        <div class="home-item-overlay accent"></div>
    </section> -->

    <?php echo $this->Html->tag('section',$this->Html->link('',array('controller'=>'PortalProjects','action'=>'index')).
              $this->Html->tag('div',$this->Html->tag('h2','Portal proyectos'),
              array('class'=>'home-item-title')).
              $this->Html->tag('figure',$this->Html->image('icons/portal-proyectos.svg')).
              $this->Html->tag('div',$this->Html->image('photos/energia.jpg'),
              array('class'=>'home-item-banner')).
              $this->Html->tag('div','',array('class'=>'home-item-overlay accent')),
              array('class'=>'home-item'),
              array('escape' => false))?>

          <!-- <section class="home-item">
              <a href=""></a>
              <div class="home-item-title">
                  <h2>RYOS</h2>
              </div>
              <figure>
                  <//?= $this->Html->image('icons/ryos.svg') ?>
              </figure>
              <div class="home-item-banner">
                  <//?= $this->Html->image('photos/energia.jpg') ?>
              </div>
              <div class="home-item-overlay tertiary"></div>
          </section> -->


<?php echo $this->Html->tag('section',$this->Html->link('',array('controller'=>'PortalProjects','action'=>'index')).
          $this->Html->tag('div',$this->Html->tag('h2','RYOS'),
          array('class'=>'home-item-title')).
          $this->Html->tag('figure',$this->Html->image('icons/ryos.svg')).
          $this->Html->tag('div',$this->Html->image('photos/energia.jpg'),
          array('class'=>'home-item-banner')).
          $this->Html->tag('div','',array('class'=>'home-item-overlay tertiary')),
          array('class'=>'home-item'),
          array('escape' => false))?>

    <!-- <section class="home-item">
        <a href=""></a>
        <div class="home-item-title">
            <h2>Portafolio</h2>
        </div>
        <figure>
            <//?= $this->Html->image('icons/portafolio.svg') ?>
        </figure>
        <div class="home-item-banner">
            <//?= $this->Html->image('photos/energia.jpg') ?>
        </div>
        <div class="home-item-overlay primary"></div>
    </section> -->
    <?php echo $this->Html->tag('section',$this->Html->link('',array('controller'=>'PortalProjects','action'=>'index')).
              $this->Html->tag('div',$this->Html->tag('h2','Portafolio'),
              array('class'=>'home-item-title')).
              $this->Html->tag('figure',$this->Html->image('icons/portafolio.svg')).
              $this->Html->tag('div',$this->Html->image('photos/energia.jpg'),
              array('class'=>'home-item-banner')).
              $this->Html->tag('div','',array('class'=>'home-item-overlay primary')),
              array('class'=>'home-item'),
              array('escape' => false))?>

    <!-- <section class="home-item">
        <a href=""></a>
        <div class="home-item-title">
            <h2>Documentos gestión de programas y proyectos</h2>
        </div>
        <figure>
            <//?= $this->Html->image('icons/documentos-gestion.svg') ?>
        </figure>
        <div class="home-item-banner">
            <?//= $this->Html->image('photos/energia.jpg') ?>
        </div>
        <div class="home-item-overlay secondary"></div>
    </section> -->
    <?php echo $this->Html->tag('section',$this->Html->link('',array('controller'=>'PortalProjects','action'=>'index')).
              $this->Html->tag('div',$this->Html->tag('h2','Documentos gestión de programas y proyectos'),
              array('class'=>'home-item-title')).
              $this->Html->tag('figure',$this->Html->image('icons/documentos-gestion.svg')).
              $this->Html->tag('div',$this->Html->image('photos/energia.jpg'),
              array('class'=>'home-item-banner')).
              $this->Html->tag('div','',array('class'=>'home-item-overlay secondary')),
              array('class'=>'home-item'),
              array('escape' => false))?>
</div>
