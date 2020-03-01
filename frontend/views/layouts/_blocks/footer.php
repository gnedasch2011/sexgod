<?php

use app\components\ModalWindowWidget;
use yii\helpers\Html;

?><!-- модальное окно -->


<div class="container-fluid">
    <div class="row footerMain">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="socNet">

                    </div>
                    <p class="subscibeP">Подписаться на рассылку</p>
                    <form id="mdsubscribe" method="post" action="" class="uk-form">

                        <div class="uk-form-controls">
                            <input class="uk-form-small" type="email" id="email" name="email"
                                   placeholder="Email" required="" value="">
                            <button id="bsubscribe" class="uk-button uk-button-small"
                                    type="button">Подписаться
                            </button>
                        </div>

                    </form>

                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="callmeP">
                        <a href="" class="callmeA">Связаться с нами</a>
                        <br>
                        <br>
                        <p>Политика конфиденциальности</p>
                        <p>Информация на сайте не является публичной офертой.</p>
                        <p>Описание товара носит справочный характер.</p>
                        <p>Производитель оставляет за собой право изменять внешний вид и
                            характеристики
                            товара
                            без предварительного уведомления.</p>
                        <p> © COPYRIGHT, Hikvision Digital Technology Co., Ltd.. ALL
                            RIGHTS RESERVED.</p>

                    </div>

                </div>
            </div>
        </div>


    </div>
</div>
<?= ModalWindowWidget::widget(); ?>
<?= \frontend\abstractComponents\widgets\modalWindow\ModalWindowWidget::widget([
    'template'=>'sexGodBuyOneClick',
]); ?>
