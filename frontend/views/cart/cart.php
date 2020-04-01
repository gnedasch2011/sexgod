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
                    <tr class="cart-table__row" data-id=<?= $good->id; ?>>
                        <td class="cart-table__column cart-table__column--image">
                            <a href="<?= $good->detailUrl; ?>"><img src="<?= $good->mainImg; ?>"
                                                                    alt=""></a>
                        </td>
                        <td class="cart-table__column cart-table__column--product">
                            <a href="<?= $good->detailUrl; ?>"
                               class="cart-table__product-name"><?= $good->name; ?></a>
                            <ul class="cart-table__options">
                                <li>Color: Yellow</li>
                                <li>Material: еуые</li>
                            </ul>
                        </td>
                        <td class="cart-table__column cart-table__column--price" data-title="Price">
                            <?= $good->formatPrice; ?>
                        </td>
                        <td class="cart-table__column cart-table__column--quantity"
                            data-title="Quantity">
                            <div class="input-number"
                                 data-id="<?= $good->aID; ?>"
                            >
                                <input class="form-control input-number__input" type="number"
                                       min="1" value="<?= Yii::$app->cart->countById($good->id); ?>">
                                <div class="input-number__add"></div>
                                <div class="input-number__sub"></div>
                            </div>
                        </td>
                        <td class="cart-table__column cart-table__column--total" data-title="Итого">
                            <?= \frontend\abstractComponents\helpers\CommonHelper::formatPrice($cart->getFullPriceOneGood($good->id)); ?>
                            руб.
                        </td>
                        <td class="cart-table__column cart-table__column--remove">
                            <button type="button" class="btn btn-light btn-sm btn-svg-icon">
                                <svg width="12px" height="12px">
                                    <use xlink:href="images/sprite.svg#cross-12"></use>
                                </svg>
                            </button>
                        </td>
                    </tr>


                <?php endforeach; ?>
                </tbody>
            </table>
            <div class="cart__actions">
                <form class="cart__coupon-form">
                    <label for="input-coupon-code" class="sr-only">Password</label>
                    <input type="text" class="form-control" id="input-coupon-code"
                           placeholder="Код купона">
                    <button type="submit" class="btn btn-primary">Применить купон</button>
                </form>
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
                                    <td class="fullTotalCartClass"><?= \frontend\abstractComponents\helpers\CommonHelper::formatPrice($cart->returnCartFullPrice()) ?>
                                        руб.
                                    </td>
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
                                    <td class="fullTotalCartClass"><?= \frontend\abstractComponents\helpers\CommonHelper::formatPrice($cart->returnCartFullPrice()) ?>
                                        руб.
                                    </td>
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
        <div class="container">
            <div class="row">
                <div class="col-12 mb-3">
                    <div class="alert alert-lg alert-primary">Returning customer? <a href="">Click
                            here to login</a></div>
                </div>
                <div class="col-12 col-lg-6 col-xl-7">
                    <div class="card mb-lg-0">
                        <div class="card-body">
                            <h3 class="card-title">Billing details</h3>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="checkout-first-name">First Name</label>
                                    <input type="text" class="form-control" id="checkout-first-name"
                                           placeholder="First Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="checkout-last-name">Last Name</label>
                                    <input type="text" class="form-control" id="checkout-last-name"
                                           placeholder="Last Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="checkout-company-name">Company Name <span
                                            class="text-muted">(Optional)</span></label>
                                <input type="text" class="form-control" id="checkout-company-name"
                                       placeholder="Company Name">
                            </div>
                            <div class="form-group">
                                <label for="checkout-country">Country</label>
                                <select id="checkout-country"
                                        class="form-control form-control-select2">
                                    <option>Select a country...</option>
                                    <option>United States</option>
                                    <option>Russia</option>
                                    <option>Italy</option>
                                    <option>France</option>
                                    <option>Ukraine</option>
                                    <option>Germany</option>
                                    <option>Australia</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="checkout-street-address">Street Address</label>
                                <input type="text" class="form-control" id="checkout-street-address"
                                       placeholder="Street Address">
                            </div>
                            <div class="form-group">
                                <label for="checkout-address">Apartment, suite, unit etc. <span
                                            class="text-muted">(Optional)</span></label>
                                <input type="text" class="form-control" id="checkout-address">
                            </div>
                            <div class="form-group">
                                <label for="checkout-city">Town / City</label>
                                <input type="text" class="form-control" id="checkout-city">
                            </div>
                            <div class="form-group">
                                <label for="checkout-state">State / County</label>
                                <input type="text" class="form-control" id="checkout-state">
                            </div>
                            <div class="form-group">
                                <label for="checkout-postcode">Postcode / ZIP</label>
                                <input type="text" class="form-control" id="checkout-postcode">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="checkout-email">Email address</label>
                                    <input type="email" class="form-control" id="checkout-email"
                                           placeholder="Email address">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="checkout-phone">Phone</label>
                                    <input type="text" class="form-control" id="checkout-phone"
                                           placeholder="Phone">
                                </div>
                            </div>
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
                        </div>
                        <div class="card-divider"></div>
                        <div class="card-body">
                            <h3 class="card-title">Shipping Details</h3>
                            <div class="form-group">
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
                            </div>
                            <div class="form-group">
                                <label for="checkout-comment">Order notes <span class="text-muted">(Optional)</span></label>
                                <textarea id="checkout-comment" class="form-control"
                                          rows="4"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-5 mt-4 mt-lg-0">
                    <div class="card mb-0">
                        <div class="card-body">
                            <h3 class="card-title">Your Order</h3>
                            <table class="checkout__totals">
                                <thead class="checkout__totals-header">
                                <tr>
                                    <th>Product</th>
                                    <th>Total</th>
                                </tr>
                                </thead>
                                <tbody class="checkout__totals-products">
                                <tr>
                                    <td>Electric Planer Brandix KL370090G 300 Watts × 2</td>
                                    <td>$1,398.00</td>
                                </tr>
                                <tr>
                                    <td>Undefined Tool IRadix DPS3000SY 2700 watts × 1</td>
                                    <td>$849.00</td>
                                </tr>
                                <tr>
                                    <td>Brandix Router Power Tool 2017ERXPK × 3</td>
                                    <td>$3,630.00</td>
                                </tr>
                                </tbody>
                                <tbody class="checkout__totals-subtotals">
                                <tr>
                                    <th>Subtotal</th>
                                    <td>$5,877.00</td>
                                </tr>
                                <tr>
                                    <th>Store Credit</th>
                                    <td>$-20.00</td>
                                </tr>
                                <tr>
                                    <th>Shipping</th>
                                    <td>$25.00</td>
                                </tr>
                                </tbody>
                                <tfoot class="checkout__totals-footer">
                                <tr>
                                    <th>Total</th>
                                    <td>$5,882.00</td>
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
                                                                   name="checkout_payment_method"
                                                                   type="radio" checked>
                                                            <span class="input-radio__circle"></span>
                                                        </span>
                                                    </span>
                                            <span class="payment-methods__item-title">Direct bank transfer</span>
                                        </label>
                                        <div class="payment-methods__item-container">
                                            <div class="payment-methods__item-description text-muted">
                                                Make your payment directly into our bank account.
                                                Please use your Order ID as the payment
                                                reference. Your order will not be shipped until the
                                                funds have cleared in our account.
                                            </div>
                                        </div>
                                    </li>
                                    <li class="payment-methods__item">
                                        <label class="payment-methods__item-header">
                                                    <span class="payment-methods__item-radio input-radio">
                                                        <span class="input-radio__body">
                                                            <input class="input-radio__input"
                                                                   name="checkout_payment_method"
                                                                   type="radio">
                                                            <span class="input-radio__circle"></span>
                                                        </span>
                                                    </span>
                                            <span class="payment-methods__item-title">Check payments</span>
                                        </label>
                                        <div class="payment-methods__item-container">
                                            <div class="payment-methods__item-description text-muted">
                                                Please send a check to Store Name, Store Street,
                                                Store Town, Store State / County, Store Postcode.
                                            </div>
                                        </div>
                                    </li>
                                    <li class="payment-methods__item">
                                        <label class="payment-methods__item-header">
                                                    <span class="payment-methods__item-radio input-radio">
                                                        <span class="input-radio__body">
                                                            <input class="input-radio__input"
                                                                   name="checkout_payment_method"
                                                                   type="radio">
                                                            <span class="input-radio__circle"></span>
                                                        </span>
                                                    </span>
                                            <span class="payment-methods__item-title">Cash on delivery</span>
                                        </label>
                                        <div class="payment-methods__item-container">
                                            <div class="payment-methods__item-description text-muted">
                                                Pay with cash upon delivery.
                                            </div>
                                        </div>
                                    </li>
                                    <li class="payment-methods__item">
                                        <label class="payment-methods__item-header">
                                                    <span class="payment-methods__item-radio input-radio">
                                                        <span class="input-radio__body">
                                                            <input class="input-radio__input"
                                                                   name="checkout_payment_method"
                                                                   type="radio">
                                                            <span class="input-radio__circle"></span>
                                                        </span>
                                                    </span>
                                            <span class="payment-methods__item-title">PayPal</span>
                                        </label>
                                        <div class="payment-methods__item-container">
                                            <div class="payment-methods__item-description text-muted">
                                                Pay via PayPal; you can pay with your credit card if
                                                you don’t have a PayPal account.
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="checkout__agree form-group">
                                <div class="form-check">
                                            <span class="form-check-input input-check">
                                                <span class="input-check__body">
                                                    <input class="input-check__input"
                                                           type="checkbox" id="checkout-terms">
                                                    <span class="input-check__box"></span>
                                                    <svg class="input-check__icon" width="9px"
                                                         height="7px">
                                                        <use xlink:href="images/sprite.svg#check-9x7"></use>
                                                    </svg>
                                                </span>
                                            </span>
                                    <label class="form-check-label" for="checkout-terms">
                                        I have read and agree to the website <a target="_blank"
                                                                                href="terms-and-conditions.html">terms
                                            and conditions</a>*
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-xl btn-block">Place
                                Order
                            </button>
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