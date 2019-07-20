 <!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset();?>
    <!-- <title>
        </?= $this->fetch('title') ?>
    </title> -->
    <?= $this->Html->script(['jquery-3.3.1.min.js','fullBase' => true]) ?>
    <?= $this->Html->css('materialize_pdf.css', ['fullBase' => true]) ?>
    <?= $this->Html->css('https://fonts.googleapis.com/icon?family=Material+Icons', ['fullBase' => true]);?>
    <?= $this->Html->meta('icon', ['fullBase' => true]) ?>
</head>
<body>
    <div>
        <div class="container clearfix" style="width:1920;height:1080;border:0px;">
            <?= $this->fetch('content') ?>
        </div>
    </div>
  </body>
</html>
