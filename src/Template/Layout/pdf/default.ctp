 <!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset();?>
    <!-- <title>
        </?= $this->fetch('title') ?>
    </title> -->
    <!-- <//?= $this->Html->css('materialize.css', ['fullBase' => true]) ?> -->

    <?=$this->Html->meta('viewport','width=device-width, initial-scale=1.0', ['fullBase' => true])?>
    <?= $this->Html->meta('icon', ['fullBase' => true]) ?>
    <?= $this->Html->script(['jquery-3.3.1.min.js','fullBase' => true]) ?>
    <?= $this->Html->css('materialize.css', ['fullBase' => true]) ?>
    <?= $this->Html->script(['dynamic-charts.js','fullBase' => true]) ?>
    <?= $this->Html->css('https://fonts.googleapis.com/icon?family=Material+Icons', ['fullBase' => true]);?>
    <?= $this->Html->meta('icon', ['fullBase' => true]) ?>
</head>
<body>
    <!-- <div>-->
        <div class="container clearfix" style="position: relative; top: 0mm; left: 0mm; width: 210mm; height: 297mm;">
            <?= $this->fetch('content') ?>
        </div>
    <!--</div> -->
  </body>
</html>
