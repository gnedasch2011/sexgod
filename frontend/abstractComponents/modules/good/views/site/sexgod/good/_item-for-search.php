<?php

use yii\helpers\Html;

?>
<div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
    <a href="/product/<?= $good->slug; ?>" class="">
        <div class="item" data-id="<?= $good->id; ?>">
            <img width="100%"
                 src="/images/products/<?= $good->imagesone->hash_path; ?>"
                 alt="">
            <span class="item_name"><?= $good->name; ?></span>

            <? //= Html::a('В корзину', ['/cart/add-good/', 'id' => $good->id], ['class' => 'addInCart']); ?>
        </div>
    </a>
</div>