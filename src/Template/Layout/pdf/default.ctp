 <!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset();?>
    <?= $this->Html->script(['jquery-3.3.1.min.js','fullBase' => true]) ?>
    <?= $this->Html->css('materialize.css', ['fullBase' => true]) ?>
    <?= $this->Html->css('https://fonts.googleapis.com/icon?family=Material+Icons', ['fullBase' => true]);?>
    <?= $this->Html->meta('icon', ['fullBase' => true]) ?>
    <?= $this->Html->script('amcharts4/core.js', ['fullBase' => true]) ?>
    <?= $this->Html->script('amcharts4/charts.js', ['fullBase' => true]) ?>
    <?= $this->Html->script('amcharts4/material.js', ['fullBase' => true]) ?>
    <?= $this->Html->script('amcharts4/animated.js', ['fullBase' => true]) ?>
</head>
<body>
    <div>
        <!-- <div class="container"> -->
        <div>
            <?= $this->fetch('content') ?>
        </div>
    </div>
  </body>
</html>
