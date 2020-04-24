<?php

use yii\helpers\Html;

?>
<div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
    <a href="/product/<?= $product->slug; ?>" class="">
        <div class="item" data-id="<?= $product->id; ?>">
            <img width="100%"
                 src="<?= $product->imagesone; ?>"
                 alt="">
            <span class="item_name"><?= $product->name; ?></span>

            <? //= Html::a('В корзину', ['/cart/add-product/', 'id' => $product->id], ['class' => 'addInCart']); ?>
        </div>
    </a>
</div>