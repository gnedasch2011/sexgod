<h3 class="cartH2">Ваш заказ</h3>
<table class="cart__goods">
    <thead>
    <tr class="cartHead">
        <th>Наименование</th>
        <th>Цена</th>
        <th>Кол-во</th>
        <th>Удалить</th>
    </tr>
    </thead>

    </thead>
    <?php foreach ($goodsInCart as $good): ?>
        <tr data-id=<?= $good->id; ?> class="itemCart">
            <td><?= $good->name; ?></td>
            <td>
                <?= $good->renderPrice; ?></td>
            <td>
                <div class="gp-buttons">
                    <span class="gp-minus">-</span>
                    <span class="gp-count"
                          contenteditable="true"> <?= $cart->countById($good->id); ?></span>
                    <span class="gp-plus">+</span>
                </div>
            </td>
            <td><i class="fa fa-trash cartDeleteItem" aria-hidden="true"></i></td>
        </tr>
    <?php endforeach; ?>
</table>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-right fullPriceInCartWrap">
    <p>Итого: <span class="fullPriceInCart"><?= $cart->returnFormatFullPrice(); ?> </span>руб.</p>
</div>

<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <h3 class="cartH2">Данные для доставки</h3>

        <?php

        use yii\helpers\Html;
        use yii\widgets\ActiveForm;

        $form = ActiveForm::begin([
            'id' => 'login-form',
            'options' => ['class' => 'form-horizontal'],
        ]) ?>
        <?= $form->field($order, 'phone')->label('Контактный телефон:') ?>
        <?= $form->field($order, 'adress')->textarea()->label('Адрес доставки:') ?>

        <div class="form-group">
            <div class="col-lg-offset-1 col-lg-12">
                <?= Html::submitButton('Оформить заказ', ['class' => 'btn btn-primary buttonCallBack']) ?>
            </div>
        </div>

    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <h3 class="cartH2">Способ оплаты</h3>
        <table class="cartPayment">
            <tr>
                <td>       <?= $form->field($order, 'payment_method')->radioList([
                        'nal' => '',
                    ],
                        [
                            'id' => 'payHand',
                            'class' => 'cart-radio',

                        ]
                    )->label("") ?></td>
                <td>

                    <p><b><label for="payHand"></label>Наличными при получении</b></p>
                    <p> Рассчитаться можно с курьером наличными по факту получения товара</p>
                </td>
            </tr>

            <tr>
                <td>       <?= $form->field($order, 'payment_method')->radioList([
                        'beznal' => '',
                    ],
                        [
                            'id' => 'blog_type',
                            'class' => 'cart-radio',

                        ]
                    )->label("") ?></td>
                <td>

                    <p><b>Безналичный по реквизитам</b></p>
                    <p>После оформления заказа скиньте реквизиты в почтовую форму с номером заказа
                        на странице контакты. Наш менеджер свяжется с вами в ближайшее время.</p>
                </td>
            </tr>
        </table>

    </div>
    <?php ActiveForm::end() ?>
</div>

