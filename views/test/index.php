<h1>Test index page</h1>
<?= $this->render('//inc/inc') . $var ?>
</br>
<?= $this->context->my_var ?></br>
<?= $this->params['t1'] ?>

<?php
debug($this->params);
?>


<?php $this->beginBlock('block1'); ?>

...содержимое блока 1...

<?php $this->endBlock(); ?>