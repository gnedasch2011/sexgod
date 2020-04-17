<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>

<?php if ($goodsInCart): ?>
    <div class="cart block cartBlockJs">

        <div class="container">
            <table class="cart__table cart-table">
                <thead class="cart-table__head">
                <tr class="cart-table__row">
                    <th class="cart-table__column cart-table__column--image">Изображение</th>
                    <th class="cart-table__column cart-table__column--product">Название</th>
                    <th class="cart-table__column cart-table__column--price">Цена</th>
                    <th class="cart-table__column cart-table__column--quantity">Кол-во</th>
                    <th class="cart-table__column cart-table__column--total">Итого</th>
                    <th class="cart-table__column cart-table__column--remove"></th>
                </tr>
                </thead>
                <tbody class="cart-table__body">
                <?php foreach ($goodsInCart as $good): ?>
                    <?php
                    echo $this->render('@frontend/views/site/sexgod/good/_in_cart_tr', [
                        'good' => $good
                    ]);
                    ?>
                <?php endforeach; ?>
                </tbody>
            </table>
            <div class="cart__actions">
                <!--                <form class="cart__coupon-form">-->
                <!--                    <label for="input-coupon-code" class="sr-only">Password</label>-->
                <!--                    <input type="text" class="form-control" id="input-coupon-code"-->
                <!--                           placeholder="Код купона">-->
                <!--                    <button type="submit" class="btn btn-primary">Применить купон</button>-->
                <!--                </form>-->
                <div class="cart__buttons">
                    <a href="/catalog/seks-igrushki/" class="btn btn-light">Продолжить покупки</a>
                    <!--                    <a href="" class="btn btn-primary cart__update-button">Update Cart</a>-->
                </div>
            </div>
            <div class="row justify-content-end pt-5">
                <div class="col-12 col-md-7 col-lg-6 col-xl-5">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Итого:</h3>
                            <table class="cart__totals">
                                <thead class="cart__totals-header">
                                <tr>
                                    <th>Промежуточный итог:</th>
                                    <td class="fullTotalCartClass"><?= \frontend\abstractComponents\helpers\CommonHelper::formatPrice(Yii::$app->cart->returnCartFullPrice()) ?></td>
                                </tr>
                                </thead>
                                <tbody class="cart__totals-body">
                                <tr>
                                    <th>Доставка:</th>
                                    <td>
                                        0 руб.
                                        <div class="cart__calc-shipping"><a href="#">Посчитать
                                                доставку</a></div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Налог:</th>
                                    <td>
                                        0 руб.
                                    </td>
                                </tr>
                                </tbody>
                                <tfoot class="cart__totals-footer">
                                <tr>
                                    <th>Итого:</th>
                                    <td class="fullTotalCartClass"><?= \frontend\abstractComponents\helpers\CommonHelper::formatPrice(\Yii::$app->cart->returnCartFullPrice()) ?></td>
                                </tr>
                                </tfoot>
                            </table>
                            <a class="btn btn-primary btn-xl btn-block cart__checkout-button openCheckoutJs"
                               href="#">Оформить заказ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php else: ?>
    <div class="block-empty__body">
        <div class="block-empty__message">Ваша корзина пока ещё пуста!</div>
        <div class="block-empty__actions">
            <a class="btn btn-primary btn-sm" href="/">Продолжить</a>
        </div>
    </div>
<?php endif; ?>
    <div class="checkout block checkout_block_hidden openCheckoutJs">
        <?php
        $form = ActiveForm::begin([
            'id' => 'checkout-form',
        ]);
        ?>
        <div class="container">
            <div class="row">
                <!--                <div class="col-12 mb-3">-->
                <!--                    <div class="alert alert-lg alert-primary">Returning customer? <a href="">Click-->
                <!--                            here to login</a></div>-->
                <!--                </div>-->
                <div class="col-12 col-lg-6 col-xl-7">
                    <div class="card mb-lg-0">
                        <div class="card-body">
                            <h3 class="card-title">Детали заказа</h3>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <?= $form->field($checkout, 'name', ['errorOptions' => ['class' => 'v-msg']])
                                        ->textInput([
                                            'placeholder' => 'Ваше имя',
                                            'class' => 'form-control',
                                        ])->label('Ваше имя', [
                                            'class' => 'checkout-first-name',
                                        ]); ?>
                                </div>
                                <div class="form-group col-md-6">
                                    <?= $form->field($checkout, 'name', ['errorOptions' => ['class' => 'v-msg']])
                                        ->textInput([
                                            'placeholder' => 'Ваша фамилия',
                                            'class' => 'form-control',
                                        ])->label('Ваша фамилия', [
                                            'class' => 'checkout-first-name',
                                        ]); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <?= $form->field($checkout, 'town', ['errorOptions' => ['class' => 'v-msg']])
                                    ->textInput([
                                        'placeholder' => 'Ваш город',
                                        'class' => 'form-control',
                                    ])->label('Ваш город', [
                                        'class' => 'checkout-first-name',
                                    ]); ?>
                            </div>
                            <div class="form-group">
                                <?= $form->field($checkout, 'address', ['errorOptions' => ['class' => 'v-msg']])
                                    ->textInput([
                                        'placeholder' => 'Ваш адрес',
                                        'class' => 'form-control',
                                    ])->label('Ваш адрес', [
                                        'class' => 'checkout-first-name',
                                    ]); ?>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <?= $form->field($checkout, 'email', ['errorOptions' => ['class' => 'v-msg']])
                                        ->textInput([
                                            'placeholder' => 'Email',
                                            'class' => 'form-control',
                                        ])->label('Email', [
                                            'class' => 'checkout-first-name',
                                        ]); ?>
                                </div>

                                <div class="form-group col-md-6">
                                    <?= $form->field($checkout, 'phone', ['errorOptions' => ['class' => 'v-msg']])
                                        ->textInput([
                                            'placeholder' => 'Ваш телефон',
                                            'class' => 'form-control',
                                        ])->label('Ваш телефон', [
                                            'class' => 'checkout-first-name',
                                        ]); ?>
                                </div>

                            </div>
                            <?php /*?>

                        <div class="form-group">
                            <div class="form-check">
                                            <span class="form-check-input input-check">
                                                <span class="input-check__body">
                                                    <input class="input-check__input"
                                                           type="checkbox"
                                                           id="checkout-create-account">
                                                    <span class="input-check__box"></span>
                                                    <svg class="input-check__icon" width="9px"
                                                         height="7px">
                                                        <use xlink:href="images/sprite.svg#check-9x7"></use>
                                                    </svg>
                                                </span>
                                            </span>
                                <label class="form-check-label" for="checkout-create-account">Create
                                    an account?</label>
                            </div>
                        </div>
  <?php */ ?>
                        </div>
                        <div class="card-divider"></div>
                        <div class="card-body">
                            <h3 class="card-title">Детали доставки</h3>
                            <div class="form-group">
                                <?php /*?>
                            <div class="form-check">
                                            <span class="form-check-input input-check">
                                                <span class="input-check__body">
                                                    <input class="input-check__input"
                                                           type="checkbox"
                                                           id="checkout-different-address">
                                                    <span class="input-check__box"></span>
                                                    <svg class="input-check__icon" width="9px"
                                                         height="7px">
                                                        <use xlink:href="images/sprite.svg#check-9x7"></use>
                                                    </svg>
                                                </span>
                                            </span>
                                <label class="form-check-label"
                                       for="checkout-different-address">Ship to a different
                                    address?</label>
                            </div>
                            <?php */ ?>
                            </div>
                            <div class="form-group">
                                <?= $form->field($checkout, 'comment', ['errorOptions' => ['class' => 'v-msg']])
                                    ->textarea([
                                        'placeholder' => 'Комментарии',
                                        'class' => 'form-control',
                                    ])->label('Комментарии', [
                                        'class' => 'checkout-first-name',
                                    ]); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-5 mt-4 mt-lg-0">
                    <div class="card mb-0">
                        <div class="card-body">
                            <h3 class="card-title">Ваш заказ</h3>
                            <table class="checkout__totals">
                                <thead class="checkout__totals-header">
                                <tr>
                                    <th>Продукт</th>
                                    <th>Итого</th>
                                </tr>
                                </thead>
                                <tbody class="checkout__totals-products">
                                <?php foreach ($goodsInCart as $good): ?>
                                    <?php
                                    echo $this->render('@frontend/views/site/sexgod/good/_in_cart_yours_order', [
                                        'good' => $good
                                    ]);
                                    ?>
                                <?php endforeach; ?>

                                </tbody>
                                <tbody class="checkout__totals-subtotals">
                                <tr>
                                    <th>Подитог</th>
                                    <td class="fullTotalCartClass"><?= \frontend\abstractComponents\helpers\CommonHelper::formatPrice(Yii::$app->cart->returnCartFullPrice()) ?></td>
                                </tr>
                                <tr>
                                    <th>Скидки</th>
                                    <td>0 руб.</td>
                                </tr>
                                <tr>
                                    <th>Доставка</th>
                                    <td>0</td>
                                </tr>
                                </tbody>
                                <tfoot class="checkout__totals-footer">
                                <tr>
                                    <th>Итого</th>
                                    <td class="fullTotalCartClass"><?= \frontend\abstractComponents\helpers\CommonHelper::formatPrice(Yii::$app->cart->returnCartFullPrice()) ?></td>
                                </tr>
                                </tfoot>
                            </table>
                            <div class="payment-methods">
                                <ul class="payment-methods__list">
                                    <li class="payment-methods__item payment-methods__item--active">
                                        <label class="payment-methods__item-header">
                                                    <span class="payment-methods__item-radio input-radio">
                                                        <span class="input-radio__body">
                                                            <input class="input-radio__input"
                                                                   name="Checkout[payment_method]"
                                                                   value="1"
                                                                   type="radio"
                                                                   checked
                                                            >
                                                            <span class="input-radio__circle"></span>
                                                        </span>
                                                    </span>
                                            <span class="payment-methods__item-title">Наличными при получении</span>
                                        </label>
                                        <!--                                    <div class="payment-methods__item-container">-->
                                        <!--                                        <div class="payment-methods__item-description text-muted">-->
                                        <!--                                            Make your payment directly into our bank account.-->
                                        <!--                                            Please use your Order ID as the payment-->
                                        <!--                                            reference. Your order will not be shipped until the-->
                                        <!--                                            funds have cleared in our account.-->
                                        <!--                                        </div>-->
                                        <!--                                    </div>-->
                                    </li>
                                    <li class="payment-methods__item">
                                        <label class="payment-methods__item-header">
                                                    <span class="payment-methods__item-radio input-radio">
                                                        <span class="input-radio__body">
                                                            <input class="input-radio__input"
                                                                   name="Checkout[payment_method]"
                                                                   value="2"
                                                                   type="radio">
                                                            <span class="input-radio__circle"></span>
                                                        </span>
                                                    </span>
                                            <span class="payment-methods__item-title">Картой на сайте</span>
                                        </label>
                                        <div class="payment-methods__item-container">
                                            <div class="payment-methods__item-description text-muted">
                                                Можете оплатить VISA, MASTERCARD
                                            </div>
                                        </div>
                                    </li>
                                    <li class="payment-methods__item">
                                        <label class="payment-methods__item-header">
                                                    <span class="payment-methods__item-radio input-radio">
                                                        <span class="input-radio__body">
                                                            <input class="input-radio__input"
                                                                   name="Checkout[payment_method]"
                                                                   value="3"
                                                                   type="radio">
                                                            <span class="input-radio__circle"></span>
                                                        </span>
                                                    </span>
                                            <span class="payment-methods__item-title">Картой при доставке</span>
                                        </label>
                                        <!--                                    <div class="payment-methods__item-container">-->
                                        <!--                                        <div class="payment-methods__item-description text-muted">-->
                                        <!--                                            Pay with cash upon delivery.-->
                                        <!--                                        </div>-->
                                        <!--                                    </div>-->
                                    </li>

                                </ul>
                            </div>
                            <?php /*?>

                        <div class="checkout__agree form-group">
                            <div class="form-check">
                                            <span class="form-check-input input-check">
                                                <span class="input-check__body">

                                                    <input class="input-check__input"
                                                           type="checkbox" id="checkout-terms"
                                                           name="puboferta"
                                                    >
                                                    <span class="input-check__box"></span>
                                                    <svg class="input-check__icon" width="9px"
                                                         height="7px">
                                                        <use xlink:href="/template/red_stroyka/images/sprite.svg#check-9x7"></use>
                                                    </svg>
                                                </span>
                                            </span>
                                <label class="form-check-label" for="checkout-terms">
                                    Я согласен(a) с политикой конфиденциальности и даю согласие на
                                    обработку персональных
                                </label>
                            </div>
                        </div>    <?php */ ?>

                            <?= Html::submitButton('Оформить заказ', ['class' => 'btn btn-primary btn-xl btn-block checkoutForm']) ?>
                            <?php ActiveForm::end() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php /*?>


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
        <?= $form->field($order, 'address')->textarea()->label('Адрес доставки:') ?>

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

 */ ?>

<?php
$script = <<< JS
  // $('.openCheckoutJs').click();
JS;
//маркер конца строки, обязательно сразу, без пробелов и табуляции
$this->registerJs($script, yii\web\View::POS_READY);
?>
<?php
$script = <<< JS
setTimeout(function() {
  $('.creditButton').click(); 
  setTimeout(function() {
 $("[name='Checkout[name]']").val('test');
 $("[name='Checkout[lname]']").val('test');
  $("[name='Checkout[fname]']").val('test');
  $("[name='Checkout[email]']").val('ya@ya.ru');
  $("[name='Checkout[phone]']").val('71111111111');
  $("[name='Checkout[birthdate]']").val('2011-11-11');
  $("[name='Checkout[city]']").val('moscow2011');
  $("[name='Checkout[password]']").val('11111');
  $("[name='Checkout[password_repeat]']").val('11111');
},1000)
},100)


JS;
//маркер конца строки, обязательно сразу, без пробелов и табуляции
$this->registerJs($script, yii\web\View::POS_READY);
?>