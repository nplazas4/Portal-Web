<div class="section home">
  <!--Estructura en lenguaje cakePHP del Portal Proyectos-->
    <?php echo $this->Html->tag(
    'section',
    $this->Html->link('', array('controller'=>'Projects','action'=>'PortalProjects'), array('class'=>'tooltipped','data-position'=>'right','data-tooltip'=>'Visualice información presupuestal y de avance de los Proyectos de GEB.','data-background-color'=>'red lighten-3')).
        $this->Html->tag(
            'div',
            $this->Html->tag('h2', 'Portal proyectos'),
            array('class'=>'home-item-title')
        ).
              $this->Html->tag('figure', $this->Html->image('icons/portal-proyectos.svg')).
                $this->Html->tag(
                    'div',
                    $this->Html->image('photos/portal-proyectos.png'),
                    array('class'=>'home-item-banner')
                ).
                $this->Html->tag('div', '', array('class'=>'home-item-overlay accent')),
<<<<<<< HEAD
    array('class'=>'home-item'),
    array('escape' => false)
);?>
=======
                array('class'=>'home-item'),
                array('escape' => false)
  );?>
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
<!--Estructura en lenguaje cakePHP del RYOS-->
<?php echo $this->Html->tag(
    'section',
    $this->Html->link('', array('controller'=>'Ryos','action'=>'index'), array('class'=>'tooltipped','data-position'=>'left','data-tooltip'=>'Queremos conocer tus ideas.')).
          $this->Html->tag(
              'div',
              $this->Html->tag('h2', 'RYOS'),
              array('class'=>'home-item-title')
          ).
          $this->Html->tag('figure', $this->Html->image('icons/ryos.svg')).
          $this->Html->tag(
              'div',
              $this->Html->image('photos/RYOS.png'),
              array('class'=>'home-item-banner')
          ).
          $this->Html->tag('div', '', array('class'=>'home-item-overlay tertiary')),
                              array('class'=>'home-item'),
                              array('escape' => false)
              )?>
    <!--Estructura en lenguaje cakePHP del Portafolio-->
    <?php echo $this->Html->tag(
                  'section',
                  $this->Html->link(
                  '',
                  array('controller'=>'Events','action'=>'index'),
<<<<<<< HEAD
                  array('class'=>'tooltipped','data-position'=>'right','data-tooltip'=>'Creación y visualización de las Lecciones Aprendidas del GEB.')
=======
                  array('class'=>'tooltipped','data-position'=>'right','data-tooltip'=>'Información del Portafolio de GEB y sus filiales.')
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
              ).
              $this->Html->tag(
                  'div',
                  $this->Html->tag('h2', 'Lecciones aprendidas'),
                  array('class'=>'home-item-title')
              ).
              $this->Html->tag('figure', $this->Html->image('icons/portafolio.svg')).
              $this->Html->tag(
                  'div',
                  $this->Html->image('photos/portafolio.jpg'),
                  array('class'=>'home-item-banner')
              ).
              $this->Html->tag('div', '', array('class'=>'home-item-overlay primary')),
                  array('class'=>'home-item'),
                  array('escape' => false)
          )?>
    <!--Estructura en lenguaje cakePHP del Documentación-->
    <?php echo $this->Html->tag(
              'section',
              $this->Html->link(
                      '',
<<<<<<< HEAD
                      array('controller'=>'Documents','action'=>'index'),
=======
                      array('controller'=>'Projects','action'=>'PortalProjects'),
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
                      array('class'=>'tooltipped','data-position'=>'left','data-tooltip'=>'Información a la mano de Programas y Proyectos en GEB.')
                  ).
              $this->Html->tag(
                  'div',
                  $this->Html->tag('h2', 'Documentos gestión de programas y proyectos'),
                  array('class'=>'home-item-title')
              ).
              $this->Html->tag('figure', $this->Html->image('icons/documentos-gestion.svg')).
              $this->Html->tag(
                  'div',
                  $this->Html->image('photos/documentos.jpg'),
                  array('class'=>'home-item-banner')
              ).
              $this->Html->tag('div', '', array('class'=>'home-item-overlay secondary')),
              array('class'=>'home-item'),
              array('escape' => false)
              )?>
</div>
