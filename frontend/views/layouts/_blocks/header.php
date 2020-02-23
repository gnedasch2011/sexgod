<?php

use yii\bootstrap\Nav;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use app\widgets\MenuIMWidget;
use app\models\shop\Cart;
use app\widgets\CartHeaderDetailWidget;

use app\models\shop\search\Search;

//$search = new Search();
?>
    <!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <link href="/css/images/main/favicon.png" rel="shortcut icon" type="image/x-icon"/>
        <!-- Yandex.Metrika counter -->
        <script type="text/javascript">
            (function (m, e, t, r, i, k, a) {
                m[i] = m[i] || function () {
                    (m[i].a = m[i].a || []).push(arguments)
                };
                m[i].l = 1 * new Date();
                k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
            })
            (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

            ym(53931271, "init", {
                clickmap: true,
                trackLinks: true,
                accurateTrackBounce: true,
                webvisor: true
            });
        </script>
        <noscript>
            <div><img src="https://mc.yandex.ru/watch/53931271"
                      style="position:absolute; left:-9999px;" alt=""/></div>
        </noscript>
        <!-- /Yandex.Metrika counter -->
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->context->title) ?></title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
              integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
              crossorigin="anonymous">
        <?php $this->head() ?>
    </head>
<body>
<?php $this->beginBody() ?>

    <div class="container">
        <div class="row fx headerLine">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 hidden-xs">
                <a href="/" class="">
                    <img src="/css/images/main/logo-ms-12001.png" alt="" class="logo">
                </a>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                <span class="telHeader"><?= Yii::$app->params['phone']; ?></span>
                <span class="telHeader email_adress_fuck_bot"><?= Yii::$app->params['email']; ?></span>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12  hidden-xs">
                <div>
                    <form action="/search" method="post">
                        <input class="findProduct" name="Search[search]"
                               placeholder="JVS-V700IP Wi Fi..">
                        <input type="hidden" name="_csrf"
                               value="ZEZ6Y0xrY3ARGS42fTwhMQgkDgF6BC EGEx4SMXQMBR4CPy0iPCIwNQ==">
                        <button class="buttonFindProduct"><i
                                    class="glyphicon glyphicon-search color-icon"></i></button>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <a href="#" class="form__call_modal buttonCallBack  buttonFindProduct">Оставить
                            заявку</a>
                    </div>
                    <!--                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">-->
                    <!--                    <a href="" class="buttonCallBack buttonFindProduct">Кабинет</a>-->
                    <!--                </div>-->

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 jsHeaderCart">

                        <?= CartHeaderDetailWidget::widget(); ?>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

        
                <?php
                $categorys = \frontend\abstractComponents\models\CategoryAbstract::getAllCategoryForMenu();
                foreach ($categorys as $slug => $title) {
                    $menuCategory[] = ['label' => $title, 'url' => '/products/' . $slug];
                }


                $menuItems = [
                    ['label' => 'Главная', 'url' => ['/']],
                ];

                if (!Yii::$app->user->isGuest) {
                    $menuItems[] = [// первый уровень
                        'label' => 'Выйти (' . Yii::$app->user->identity->username . ')',
                        'url' => Url::to(['/user/default/logout']),
                        'linkOptions' => ['data-method' => 'post']
                    ];
                }

                $menuItems[] = ['label' => 'Продукты', 'items' => $menuCategory
                ];

                $menuItems[] = ['label' => 'Подбор', 'url' => ['/']];
                //                $menuItems[] = ['label' => 'Где купить', 'url' => ['/']];
                //                $menuItems[] = ['label' => 'Новости', 'url' => ['/']];
                //                $menuItems[] = ['label' => 'Тренинги', 'url' => ['/']];
                $menuItems[] = ['label' => 'Контакты', 'url' => ['/site/contacts']];

                echo Nav::widget([
                    'options' => ['class' => 'navbar-nav navbar-left menuTop'],
                    'items' => $menuItems,
                ]); ?>


            </div>
        </div>
    </div>
<?= Breadcrumbs::widget([
    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
]) ?>

<div class="container mt20">
    <!--    <h1 class="categoryH1">Категория</h1>-->
<?php
$url = Yii::$app->request->url;


if (strpos($url, 'products') || strpos($url, 'product') || $url == "/"):?>
    <div class="col-lg-3 col-md-3 hidden-sm  hidden-xs col-xs-12">
        <sidebar>
            <?= MenuIMWidget::widget([
                "categoryName" => $this->context->categoryName
            ]) ?>

<!--            --><?//= FilterIMWidget::widget([
//                "categoryName" => $this->context->categoryName
//            ]) ?>

        </sidebar>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
<?php else: ?>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<?php endif; ?>