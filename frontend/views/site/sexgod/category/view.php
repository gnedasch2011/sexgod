<?php

use yii\helpers\Html;
use yii\web\View;

/* @var $this yii\web\View */

$this->title = 'Товары';
?>
<?php if (count($allCategory) == 0): ?>
    <h2 class="currentCategory"><?= \Yii::$app->controller->title; ?></h2>
<?php endif; ?>

<div class="row categoryBlock">
    <?php foreach ($allCategory as $category): ?>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <a href="/catalog/<?= $category->slug; ?>"
               class="subCategoryA"><?= $category->name; ?></a>
        </div>
    <?php endforeach; ?>

</div>

<div class="row">
    <?php foreach ($goods as $good): ?>
        <?= $this->render('@currentSiteView/good/_item', ['good' => $good]); ?>
    <?php endforeach; ?>

</div>
<?php /* ;?>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <?= \Yii::$app->cart->itemCount(); ?>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h1>Корзина</h1>
        <hr><hr>
    </div>
    <?php foreach (\Yii::$app->cart->allItems() as $item): ?>
        <h2><?= $item['name']; ?></h2>
        <h2><?= $item['quentity']; ?></h2>
        <hr>
    <?php endforeach; ?>
</div>

 */; ?>
