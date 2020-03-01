<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\widgets\MenuIMWidget;
use frontend\assets\AppAsset;
use frontend\assets\MetricaAsset;

AppAsset::register($this);
MetricaAsset::register($this);

?>
<?php $this->beginPage() ?>

<?= $this->render('_blocks/header') ?>
<div class="container mt20">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <?= $content ?>
        </div>
    </div>
</div>
<?= $this->render('_blocks/footer') ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
