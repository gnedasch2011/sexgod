
<?php foreach ($products as $good): ?>
    <div class="dropcart__product dropBlockForRemove"
         data-id="<?= $good->aID; ?>"
    >
        <div class="dropcart__product-image">
            <a href="<?= $good->detailUrl; ?>"><img
                        src="<?= $good->mainImg; ?>"
                        alt=""></a>
        </div>
        <div class="dropcart__product-info">
            <div class="dropcart__product-name"><a
                        href="<?= $good->detailUrl; ?>"><?= $good->name; ?></a></div>
            <!--            <ul class="dropcart__product-options">-->
            <!--                <li>Color: Yellow</li>-->
            <!--                <li>Material: Aluminium</li>-->
            <!--            </ul>-->
            <div class="dropcart__product-meta">
                <span class="dropcart__product-quantity"><?= Yii::$app->cart->countById($good->id); ?></span>
                ×
                <span class="dropcart__product-price"> <?= $good->formatPrice; ?></span>
            </div>
        </div>
        <button type="button"
                data-id="<?= $good->aID; ?>"
                class="dropcart__product-remove btn btn-light btn-sm btn-svg-icon cartDeleteItemClass">
            <svg width="10px" height="10px">
                <use xlink:href="/template/red_stroyka/images/sprite.svg#cross-10"></use>
            </svg>
        </button>
    </div>
<?php endforeach; ?>


