<tr>
    <td class="order-list__column-image">
        <a href="<?= $good->detailUrl; ?>">
            <img src="<?= $good->mainImg; ?>" alt="<?= $good->name; ?>">
        </a>
    </td>
    <td class="order-list__column-product">
        <a href="<?= $good->detailUrl; ?>"><?= $good->name; ?></a>
        <div class="order-list__options">
            <ul class="order-list__options-list">
                <li class="order-list__options-item">
                    <span class="order-list__options-label">Color:</span>
                    <span class="order-list__options-value">Yellow</span>
                </li>
                <li class="order-list__options-item">
                    <span class="order-list__options-label">Material:</span>
                    <span class="order-list__options-value">Aluminium</span>
                </li>
            </ul>
        </div>
    </td>
    <td class="order-list__column-quantity" data-title="Qty:"><?= Yii::$app->cart->countById($good->id); ?></td>
    <td class="order-list__column-total"> <?= \frontend\abstractComponents\helpers\CommonHelper::formatPrice(\Yii::$app->cart->getFullPriceOneGood($good->id)); ?>
        руб.</td>
</tr>
