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
                   min="1"
                   value="<?= Yii::$app->cart->countById($good->id); ?>">
            <div class="input-number__add"></div>
            <div class="input-number__sub"></div>
        </div>
    </td>
    <td class="cart-table__column cart-table__column--total" data-title="Итого">
        <?= \frontend\abstractComponents\helpers\CommonHelper::formatPrice(\Yii::$app->cart->getFullPriceOneGood($good->id)); ?>
        руб.
    </td>
    <td class="cart-table__column cart-table__column--remove">
        <button type="button" class="btn btn-light btn-sm btn-svg-icon">
            <svg width="12px" height="12px">
                <use xlink:href="/template/red_stroyka/images/sprite.svg#cross-12"></use>
            </svg>
        </button>
    </td>
</tr>