<div class="order-success__body">
    <div class="order-success__header">
        <svg class="order-success__icon" width="100" height="100">
            <use xlink:href="images/sprite.svg#check-100"></use>
        </svg>
        <h1 class="order-success__title">Спасибо</h1>
        <div class="order-success__subtitle">Мы получили ваш заказ</div>
        <div class="order-success__actions">
            <a href="/" class="btn btn-xs btn-secondary">На главную</a>
        </div>
    </div>
    <div class="order-success__meta">
        <ul class="order-success__meta-list">
            <li class="order-success__meta-item">
                <span class="order-success__meta-title">Номер заказа:</span>
                <span class="order-success__meta-value"><?= $order->id; ?></span>
            </li>
            <li class="order-success__meta-item">
                <span class="order-success__meta-title">Создан:</span>
                <span class="order-success__meta-value"><?= $order->dateCreate; ?></span>
            </li>
            <li class="order-success__meta-item">
                <span class="order-success__meta-title">Итого:</span>
                <span class="order-success__meta-value"><?= \frontend\abstractComponents\helpers\CommonHelper::formatPrice($totalPrice); ?> руб.</span>
            </li>
            <li class="order-success__meta-item">
                <span class="order-success__meta-title">Метод оплаты:</span>
                <span class="order-success__meta-value"><?= \frontend\abstractComponents\modules\order\models\Order::$payments[$order->payment_method]; ?></span>
            </li>
        </ul>
    </div>
    <div class="card">
        <div class="order-list">
            <table>
                <thead class="order-list__header">
                <tr>
                    <th class="order-list__column-label" colspan="2">Продукты</th>
                    <th class="order-list__column-quantity">Кол-во</th>
                    <th class="order-list__column-total">Итого</th>
                </tr>
                </thead>
                <tbody class="order-list__products">
                <?php foreach ($goodsInCart as $good): ?>
                    <?php
                    echo $this->render('@frontend/views/site/sexgod/good/_in_success_order_tr', [
                        'good' => $good
                    ]);
                    ?>
                <?php endforeach; ?>

                </tbody>
                <tbody class="order-list__subtotals">
                <tr>
                    <th class="order-list__column-label" colspan="3">Подитог</th>
                    <td class="order-list__column-total"><?= \frontend\abstractComponents\helpers\CommonHelper::formatPrice(Yii::$app->cart->returnCartFullPrice()) ?> руб.</td>
                </tr>
                <tr>
                    <th class="order-list__column-label" colspan="3">Доставка</th>
                    <td class="order-list__column-total">0 руб.</td>
                </tr>

                </tbody>
                <tfoot class="order-list__footer">
                <tr>
                    <th class="order-list__column-label" colspan="3">Итого</th>
                    <td class="order-list__column-total"><?= \frontend\abstractComponents\helpers\CommonHelper::formatPrice(Yii::$app->cart->returnCartFullPrice()) ?> руб.</td>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <div class="row mt-3 no-gutters mx-n2">
        <div class="col-sm-6 col-12 px-2">
            <div class="card address-card">
                <div class="address-card__body">
                    <div class="address-card__badge address-card__badge--muted">Адрес доставки
                    </div>
                    <div class="address-card__name"><?= $order->name ;?></div>
                    <div class="address-card__row">
                        <?= $order->name ;?>
                    </div>
                    <div class="address-card__row">
                        <div class="address-card__row-title">Phone Number</div>
                        <div class="address-card__row-content">38 972 588-42-36</div>
                    </div>
                    <div class="address-card__row">
                        <div class="address-card__row-title">Email Address</div>
                        <div class="address-card__row-content">stroyka@example.com</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-12 px-2 mt-sm-0 mt-3">
            <div class="card address-card">
                <div class="address-card__body">
                    <div class="address-card__badge address-card__badge--muted">Billing Address
                    </div>
                    <div class="address-card__name">Helena Garcia</div>
                    <div class="address-card__row">
                        Random Federation<br>
                        115302, Moscow<br>
                        ul. Varshavskaya, 15-2-178
                    </div>
                    <div class="address-card__row">
                        <div class="address-card__row-title">Phone Number</div>
                        <div class="address-card__row-content">38 972 588-42-36</div>
                    </div>
                    <div class="address-card__row">
                        <div class="address-card__row-title">Email Address</div>
                        <div class="address-card__row-content">stroyka@example.com</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>