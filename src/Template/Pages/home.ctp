<div class="section home">
    <!-- <section class="home-item">
        <a href="/portal-projects" class="tooltipped" data-position="bottom" data-tooltip="Visualice información presupuestal y de avance de los Proyectos de GEB.
"></a>
        <div class="home-item-title">
            <h2>Portal proyectos</h2>
        </div>
        <figure>
          </?= $this->Html->image('icons/portal-proyectos.svg') ?>
        </figure>
        <div class="home-item-banner">
            </?= $this->Html->image('photos/energia.jpg') ?>
        </div>
        <div class="home-item-overlay accent"></div>
    </section> -->
    <?php echo $this->Html->tag('section',$this->Html->link('',array('controller'=>'PortalProjects','action'=>'index'), array('class'=>'tooltipped','data-position'=>'right','data-tooltip'=>'Visualice información presupuestal y de avance de los Proyectos de GEB.','data-background-color'=>'red lighten-3')).
              $this->Html->tag('div',$this->Html->tag('h2','Portal proyectos'),
              array('class'=>'home-item-title')).
              $this->Html->tag('figure',$this->Html->image('icons/portal-proyectos.svg')).
              $this->Html->tag('div',$this->Html->image('photos/foto_IDM.png'),
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
                  </?= $this->Html->image('icons/ryos.svg') ?>
              </figure>
              <div class="home-item-banner">
                  </?= $this->Html->image('photos/energia.jpg') ?>
              </div>
              <div class="home-item-overlay tertiary">
                <h5 class="text-desc">Queremos conocer tus ideas</h5>
              </div>
          </section> -->


<?php echo $this->Html->tag('section',$this->Html->link('',array('controller'=>'PortalProjects','action'=>'index'), array('class'=>'tooltipped','data-position'=>'left','data-tooltip'=>'Queremos conocer tus ideas.
')).
          $this->Html->tag('div',$this->Html->tag('h2','RYOS'),
          array('class'=>'home-item-title')).
          $this->Html->tag('figure',$this->Html->image('icons/ryos.svg')).
          $this->Html->tag('div',$this->Html->image('photos/Foto_Transmisión.png'),
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
    <?php echo $this->Html->tag('section',$this->Html->link('',array('controller'=>'PortalProjects','action'=>'index'), array('class'=>'tooltipped','data-position'=>'right','data-tooltip'=>'Información del Portafolio de GEB y sus filiales
.')).
              $this->Html->tag('div',$this->Html->tag('h2','Portafolio'),
              array('class'=>'home-item-title')).
              $this->Html->tag('figure',$this->Html->image('icons/portafolio.svg')).
              $this->Html->tag('div',$this->Html->image('photos/fondo7.jpg'),
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
    <?php echo $this->Html->tag('section',$this->Html->link('',array('controller'=>'PortalProjects','action'=>'index'), array('class'=>'tooltipped','data-position'=>'left','data-tooltip'=>'Información a la mano de Programas y Proyectos en GEB.')).
              $this->Html->tag('div',$this->Html->tag('h2','Documentos gestión de programas y proyectos'),
              array('class'=>'home-item-title')).
              $this->Html->tag('figure',$this->Html->image('icons/documentos-gestion.svg')).
              $this->Html->tag('div',$this->Html->image('photos/fondo8.jpg'),
              array('class'=>'home-item-banner')).
              $this->Html->tag('div','',array('class'=>'home-item-overlay secondary')),
              array('class'=>'home-item'),
              array('escape' => false))?>
</div>
