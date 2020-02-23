<?php

use yii\helpers\Html;

?>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="sexgodItem">

        <div class="itemSexGod" data-id="<?= $good->id; ?>">
            <a href="/product/<?= $good->slug; ?>" class="">
                <div class="wrapForName">
                    <img width="100%"
                         class="sexgod_item_img"
                         src="<?= $good->previewImg; ?>"
                         alt="">
                </div>
            </a>
            <div class="itemSexGod__a">
                <a href="/product/<?= $good->slug; ?>" class="">
                    <span class="sex_good_item_name"><?= $good->name; ?></span>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-left">
                <span class="textPrice">Цена:</span>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <span class="sexgodItem__price"> <?= $good->price; ?> руб.</span>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 blockButtonInCart border_bottom">
                    <div class="gp-buttons itemCart" data-id=<?= $good->id; ?>>
                        <span class="gp-minus">-</span>
                        <span class="gp-count" contenteditable="true">1</span>
                        <span class="gp-plus">+</span>
                    </div>

                </div>
            </div>
            <?php
            $goodExist = false;
            if (\Yii::$app->cart->checkGoodsInCart($good->id)) {
                $goodExist = true;
            }
            ?>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <a data-id="<?= $good->id; ?>"
                   class="
                   buttonFindProduct buttonInCart addInCart buttonInCategory oneClickAndDisabled <?= ($goodExist) ? 'goodsInCart' : ''; ?>" >
                    <?= ($goodExist) ? 'Добавлено' : 'Купить'; ?></a>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <a class="buyOneClick" href="#">Купить в 1 клик </a>
            </div>
        </div>
    </div>
</div>

