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
<?= $this->render('_blocks/_header') ?>
<div class="container mt20">
    <div class="col-lg-3 col-md-3 hidden-sm  hidden-xs col-xs-12">
        <sidebar>
            <?= MenuIMWidget::widget([
                "categoryName" => $this->context->categoryName
            ]) ?>

            <!--            --><? //= \frontend\abstractComponents\widgets\filterCategory\FilterIMWidget::widget([
            //                "categoryName" => $this->context->categoryName,
            //                "model" => "/",
            //            ]) ?>
        </sidebar>

    </div>
    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
        <?= $content ?>
    </div>
</div>

<?= $this->render('_blocks/_footer') ?>

<?php $this->endBody() ?>

</body>
</html>
<?php $this->endPage() ?>
