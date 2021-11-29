<?php

use yii\helpers\Html;
?>

<?php $this->beginPage(); 
\app\assets\TestAsset::register(($this));
?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $this->registerCsrfMetaTags() ?>
    <title>
        <?= Html::encode($this->title) ?>
    </title>
    <?php $this->head() ?>
</head>

<body>
    <?php
    $this->beginBody()
    ?>
    <?= $content ?>
    <?php
    $this->endBody()
    ?>
</body>

</html>
<?php
$this->endPage()
?>