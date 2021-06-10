<?php

use yii\helpers\Html;

?>
    <div class="products-list__item">
        <div class="product-card">
            <?php /*?>

            <button class="product-card__quickview" type="button">
                <svg width="16px" height="16px">
                    <use xlink:href="/template/red_stroyka/images/sprite.svg#quickview-16"></use>
                </svg>
                <span class="fake-svg-icon"></span>
            </button>
    <?php */ ?>
            <div class="product-card__badges-list">
                <div class="product-card__badge product-card__badge--new"><?= $good->productStatus; ?></div>
            </div>

            <div class="product-card__image">
                <a href="<?= $good->getDetailUrl(); ?>"><img
                            title="<?= $good->name; ?>"
                            class="sexgod_item_img"
                            src="/"
                            alt="<?= $good->name; ?>"

                    ></a>
            </div>
            <div class="product-card__info">
                <div class="product-card__name">
                    <a
                            href="<?= $good->getDetailUrl(); ?>"
                            alt="<?= $good->name; ?>"
                    ><?= $good->name; ?></a>
                </div>
                <div class="product-card__rating">
                    <div class="product-card__rating-stars">
                        <div class="rating">
                            <div class="rating__body">
                                <svg class="rating__star rating__star--active" width="13px"
                                     height="12px">
                                    <g class="rating__fill">
                                        <use xlink:href="/template/red_stroyka/images/sprite.svg#star-normal"></use>
                                    </g>
                                    <g class="rating__stroke">
                                        <use xlink:href="/template/red_stroyka/images/sprite.svg#star-normal-stroke"></use>
                                    </g>
                                </svg>
                                <div class="rating__star rating__star--only-edge rating__star--active">
                                    <div class="rating__fill">
                                        <div class="fake-svg-icon"></div>
                                    </div>
                                    <div class="rating__stroke">
                                        <div class="fake-svg-icon"></div>
                                    </div>
                                </div>
                                <svg class="rating__star rating__star--active" width="13px"
                                     height="12px">
                                    <g class="rating__fill">
                                        <use xlink:href="/template/red_stroyka/images/sprite.svg#star-normal"></use>
                                    </g>
                                    <g class="rating__stroke">
                                        <use xlink:href="/template/red_stroyka/images/sprite.svg#star-normal-stroke"></use>
                                    </g>
                                </svg>
                                <div class="rating__star rating__star--only-edge rating__star--active">
                                    <div class="rating__fill">
                                        <div class="fake-svg-icon"></div>
                                    </div>
                                    <div class="rating__stroke">
                                        <div class="fake-svg-icon"></div>
                                    </div>
                                </div>
                                <svg class="rating__star rating__star--active" width="13px"
                                     height="12px">
                                    <g class="rating__fill">
                                        <use xlink:href="/template/red_stroyka/images/sprite.svg#star-normal"></use>
                                    </g>
                                    <g class="rating__stroke">
                                        <use xlink:href="/template/red_stroyka/images/sprite.svg#star-normal-stroke"></use>
                                    </g>
                                </svg>
                                <div class="rating__star rating__star--only-edge rating__star--active">
                                    <div class="rating__fill">
                                        <div class="fake-svg-icon"></div>
                                    </div>
                                    <div class="rating__stroke">
                                        <div class="fake-svg-icon"></div>
                                    </div>
                                </div>
                                <svg class="rating__star rating__star--active" width="13px"
                                     height="12px">
                                    <g class="rating__fill">
                                        <use xlink:href="/template/red_stroyka/images/sprite.svg#star-normal"></use>
                                    </g>
                                    <g class="rating__stroke">
                                        <use xlink:href="/template/red_stroyka/images/sprite.svg#star-normal-stroke"></use>
                                    </g>
                                </svg>
                                <div class="rating__star rating__star--only-edge rating__star--active">
                                    <div class="rating__fill">
                                        <div class="fake-svg-icon"></div>
                                    </div>
                                    <div class="rating__stroke">
                                        <div class="fake-svg-icon"></div>
                                    </div>
                                </div>
                                <svg class="rating__star " width="13px" height="12px">
                                    <g class="rating__fill">
                                        <use xlink:href="/template/red_stroyka/images/sprite.svg#star-normal"></use>
                                    </g>
                                    <g class="rating__stroke">
                                        <use xlink:href="/template/red_stroyka/images/sprite.svg#star-normal-stroke"></use>
                                    </g>
                                </svg>
                                <div class="rating__star rating__star--only-edge ">
                                    <div class="rating__fill">
                                        <div class="fake-svg-icon"></div>
                                    </div>
                                    <div class="rating__stroke">
                                        <div class="fake-svg-icon"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-card__rating-legend">0 отзывов</div>
                </div>
                <ul class="product-card__features-list">
                    <?php foreach ($good->attrProductForCat as $attr): ?>
                        <?php if ($attr->value): ?>
                            <li><?= $attr->fullProps->name; ?>: <?= $attr->value; ?></li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="product-card__actions">
                <div class="product-card__availability">
                    <span class="text-success"><?= $good->Availibilty ?></span>
                </div>
                <div class="product-card__prices">
                    <?= $good->price; ?> руб.
                </div>
                <div class="product-card__buttons">
                    <button class="btn btn-primary prod1uct-card__addtocart addInCartJs oneClickAndDisabled <?= \Yii::$app->cart->checkGoodsInCart($good->id) ? 'goodsInCart' : ''; ?>"
                            data-id="<?= $good->aID; ?>"
                            type="button"><?= \Yii::$app->cart->checkGoodsInCart($good->id) ? 'Добавлено' : 'Купить'; ?>
                    </button>
                    <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                            type="button">
                        <svg width="16px" height="16px">
                            <use xlink:href="/template/red_stroyka/images/sprite.svg#wishlist-16"></use>
                        </svg>
                        <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span>
                    </button>
                    <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                            type="button">
                        <svg width="16px" height="16px">
                            <use xlink:href="/template/red_stroyka/images/sprite.svg#compare-16"></use>
                        </svg>
                        <span class="fake-svg-icon fake-svg-icon--compare-16"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
<?php /*?>

    <div class="sexgodItem">
        <div class="itemSexGod" data-id="<?= $good->aID; ?>">
            <a href="/product/<?= $good->getDetailUrl(); ?>" class="">
                <div class="wrapForName">
                    <img width="100%"
                         title="<?= $good->name; ?>"
                         class="sexgod_item_img"
                         src="<?= $good->previewImg; ?>"
                         alt="<?= $good->name; ?>"
 >
                </div>
            </a>
            <div class="itemSexGod__a">
                <a href="/product/<?= $good->getDetailUrl(); ?>" class="">
                    <span class="sex_good_item_name"><?= $good->name; ?></span>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-left">
                <span class="textPrice">Цена:</span>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <span class="sexgodItem__price_action"> <?= $good->price + ($good->price*.02); ?> руб.</span>
                <span class="sexgodItem__price"> <?= $good->price; ?> руб.</span>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 blockButtonInCart border_bottom">
                    <div class="gp-buttons itemCart" data-id=<?= $good->aID; ?>>
                        <span class="gp-minus">-</span>
                        <span class="gp-count" contenteditable="true">1</span>
                        <span class="gp-plus">+</span>
                    </div>


 */ ?>