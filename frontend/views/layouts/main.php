<?php

/* @var $this \yii\web\View */

/* @var $content string */

use frontend\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<?= $this->render('_blocks_main/header') ?>


<?= $content ?>
<?= $this->render('_blocks_main/footer') ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
