<?php
$this->title = 'My randon page';
var_dump($this->context->my_var);
?>


<?php
$this->registerMetaTag(['name' => 'description', 'content' => 'мета-описание...'], 'description');
$this->registerMetaTag(['name' => 'description', 'content' => 'мета-описание...'], 'description');
?>

<?php
// $this->registerJsFile('@web/js/scripts.js', ['depends' => 'yii\web\YiiAsset'])

$js = <<<JS
alert('Hello');
JS;


$this->registerJs($js, \yii\web\View::POS_LOAD);

?>


<p><code><?= __FILE__ ?></code></p>