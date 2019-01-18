<div class="section home">
    <div class="home-menu">
        <!-- <a href="/portal-projects" class="home-menu-item">
            <figure class="accent accent-text">
                <?//= $this->Html->image('icons/portal-proyectos.svg') ?>
            </figure>
            <h2 class="accent">Portal proyectos</h2>
        </a> -->
        <?php echo $this->Html->link(
          $this->Html->tag('figure',$this->Html->image('icons/portal-proyectos.svg'), array('class' => 'accent accent-text')).
          $this->Html->tag('h2','Portal proyectos',array('class' => 'accent')),
          array('controller'=>'PortalProjects','action'=>'index'),
          array('escape' => false,'class'=>'home-menu-item'))?>
        <!-- <a href="" class="home-menu-item">
            <figure class="tertiary tertiary-text">
                <?//= $this->Html->image('icons/ryos.svg') ?>
            </figure>
            <h2 class="tertiary">RyOS</h2>
        </a> -->
        <?php echo $this->Html->link(
          $this->Html->tag('figure',$this->Html->image('icons/ryos.svg'), array('class' => 'tertiary tertiary-text')).
          $this->Html->tag('h2','RyOS',array('class' => 'tertiary')),
          array('controller'=>'PortalProjects','action'=>'index'),
          array('escape' => false,'class'=>'home-menu-item'))?>
        <!-- <a href="" class="home-menu-item">
            <figure class="primary primary-text">
                <?//= $this->Html->image('icons/portafolio.svg') ?>
            </figure>
            <h2 class="primary">PORTAFOLIO</h2>
        </a> -->
        <?php echo $this->Html->link(
          $this->Html->tag('figure',$this->Html->image('icons/portafolio.svg'), array('class' => 'primary primary-text')).
          $this->Html->tag('h2','PORTAFOLIO',array('class' => 'primary')),
          array('controller'=>'PortalProjects','action'=>'index'),
          array('escape' => false,'class'=>'home-menu-item'))?>
        <!-- <a href="" class="home-menu-item">
            <figure class="secondary secondary-text">
                <?//= $this->Html->image('icons/documentos-gestion.svg') ?>
            </figure>
            <h2 class="secondary">DOCUMENTOS GESTIÓN DE PROGRAMAS Y PROYECTOS</h2>
        </a> -->
        <?php echo $this->Html->link(
          $this->Html->tag('figure',$this->Html->image('icons/documentos-gestion.svg'), array('class' => 'secondary secondary-text')).
          $this->Html->tag('h2','DOCUMENTOS GESTIÓN DE PROGRAMAS Y PROYECTOS',array('class' => 'secondary')),
          array('controller'=>'PortalProjects','action'=>'index'),
          array('escape' => false,'class'=>'home-menu-item'))?>
        <figure class="home-menu-logo"><?= $this->Html->image('isotype.svg') ?></figure>
    </div>
</div>
