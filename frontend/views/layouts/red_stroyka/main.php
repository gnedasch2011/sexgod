<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\widgets\MenuIMWidget;

use frontend\assets\RedStroykaAsset;
use frontend\assets\MetricaAsset;

RedStroykaAsset::register($this);
MetricaAsset::register($this);

?>
<?php $this->beginPage() ?>
<?= $this->render('_blocks/_header') ?>

<?= $content ?>

<?= $this->render('_blocks/_footer') ?>

<?php $this->endBody() ?>

<?php $this->endPage() ?>
