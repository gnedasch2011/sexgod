<?php

use yii\helpers\Html;
use yii\web\View;
use yii\widgets\Breadcrumbs;

/* @var $this yii\web\View */

?>

<? //= Breadcrumbs::widget(['links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],]);; ?>
<?= Breadcrumbs::widget([
        'links' => isset($breadcrumbs) ? $breadcrumbs : [],
        'homeLink' => ['label' => 'Главная', 'url' => '/'],
    ]
);; ?>
<?php if ($category->advantages): ?>
    <?= $category->advantages; ?>
<?php else: ?>
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            <div class="why-we__block">
                <img class="why-we__img"
                     src="https://xn----7sbabxbe8akco3bgai8m.xn--p1ai/images/main/schedule.svg"
                     alt="10 лет работы на рынке">
                <div class="why-we__text-block">
                    <p class="why-we__caption">11 лет</p>
                    <p class="why-we__text">Бесплатная доставка при покупке от 3000 руб.</p>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            <div class="why-we__block">
                <img class="why-we__img"
                     src="https://xn----7sbabxbe8akco3bgai8m.xn--p1ai/images/main/schedule.svg"
                     alt="10 лет работы на рынке">
                <div class="why-we__text-block">
                    <p class="why-we__caption">11 лет</p>
                    <p class="why-we__text">Вся продукция сертифицирована</p>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            <div class="why-we__block">
                <img class="why-we__img"
                     src="https://xn----7sbabxbe8akco3bgai8m.xn--p1ai/images/main/schedule.svg"
                     alt="10 лет работы на рынке">
                <div class="why-we__text-block">
                    <p class="why-we__caption">11 лет</p>
                    <p class="why-we__text"> Полная конфиденциальность</p>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            <div class="why-we__block">
                <img class="why-we__img"
                     src="https://xn----7sbabxbe8akco3bgai8m.xn--p1ai/images/main/schedule.svg"
                     alt="10 лет работы на рынке">
                <div class="why-we__text-block">
                    <p class="why-we__caption">11 лет</p>
                    <p class="why-we__text">Подарок при первом заказе</p>
                </div>
            </div>
        </div>
    </div>

<?php endif; ?>


    <h2 class="currentCategory"><?= \Yii::$app->controller->title; ?></h2>


    <div class="row categoryBlock">

        <?php
        if (isset($allCategory) && count($allCategory) > 3) {
            $catBegin = array_slice($allCategory, 0, 3);
            $catOther = array_slice($allCategory, 3);

        }
        ?>
        <?php foreach ($allCategory as $category): ?>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <a href="/catalog/<?= $category->slug; ?>"
                   class="subCategoryA"><?= $category->name; ?></a>
            </div>
        <?php endforeach; ?>

    </div>

    <div class="row productsList">
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
<?php if ($category->desc): ?>
    <?= $category->desc; ?>
<?php endif; ?>