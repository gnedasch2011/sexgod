<?php

use backend\assets\AppAsset;
use frontend\assets\LightBoxAsset;
use frontend\assets\MaskAsset;
use yii\web\View;
use yii\widgets\Breadcrumbs;

?>
<div class="block">
    <div class="container">
        <div class="product product--layout--standard" data-layout="standard">
            <div class="product__content">
                <!-- .product__gallery -->
                <div class="product__gallery">
                    <div class="product-gallery">
                        <div class="product-gallery__featured">
                            <button class="product-gallery__zoom">
                                <svg width="24px" height="24px">
                                    <use xlink:href="/template/red_stroyka/images/products/sprite.svg#zoom-in-24"></use>
                                </svg>
                            </button>
                            <div class="owl-carousel" id="product-image">
                                <a href="<?= $good->mainImg; ?>" target="_blank">
                                    <img src="https://yamaguchi.ru//images/product/axiom/landing/cards/01.jpg" alt="">
                                </a>

                                <?php foreach ($good->images as $imgMini): ?>
                                    <a href="<?= $imgMini; ?>" target="_blank">
                                        <img src="<?= $imgMini; ?>" alt="">
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="product-gallery__carousel">
                            <div class="owl-carousel" id="product-carousel">
                                <a href="<?= $good->mainImg; ?>" target="_blank"
                                   title="<?= $good->name; ?>">
                                    <img src="<?= $good->mainImg; ?>" alt="<?= $good->name; ?>">
                                </a>
                                <?php foreach ($good->images as $imgMini): ?>
                                    <a href="<?= $imgMini; ?>" target="_blank"
                                       title="<?= $good->name; ?>">
                                        <img src="<?= $imgMini; ?>" alt="<?= $good->name; ?>">
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .product__gallery / end -->
                <!-- .product__info -->
                <div class="product__info">
                    <div class="product__wishlist-compare">
                        <button type="button" class="btn btn-sm btn-light btn-svg-icon"
                                data-toggle="tooltip" data-placement="right" title="Wishlist">
                            <svg width="16px" height="16px">
                                <use xlink:href="/template/red_stroyka/images/sprite.svg#wishlist-16"></use>
                            </svg>
                        </button>
                        <button type="button" class="btn btn-sm btn-light btn-svg-icon"
                                data-toggle="tooltip" data-placement="right" title="Compare">
                            <svg width="16px" height="16px">
                                <use xlink:href="/template/red_stroyka/images/sprite.svg#compare-16"></use>
                            </svg>
                        </button>
                    </div>
                    <h1 class="product__name">Test</h1>
                    <?php /*?>

                    <div class="product__rating">
                        <div class="product__rating-stars">
                            <div class="rating">
                                <div class="rating__body">
                                    <svg class="rating__star rating__star--active" width="13px" height="12px">
                                        <g class="rating__fill">
                                            <use xlink:href="/template/red_stroyka/images/products/sprite.svg#star-normal"></use>
                                        </g>
                                        <g class="rating__stroke">
                                            <use xlink:href="/template/red_stroyka/images/products/sprite.svg#star-normal-stroke"></use>
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
                                    <svg class="rating__star rating__star--active" width="13px" height="12px">
                                        <g class="rating__fill">
                                            <use xlink:href="/template/red_stroyka/images/products/sprite.svg#star-normal"></use>
                                        </g>
                                        <g class="rating__stroke">
                                            <use xlink:href="/template/red_stroyka/images/products/sprite.svg#star-normal-stroke"></use>
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
                                    <svg class="rating__star rating__star--active" width="13px" height="12px">
                                        <g class="rating__fill">
                                            <use xlink:href="/template/red_stroyka/images/products/sprite.svg#star-normal"></use>
                                        </g>
                                        <g class="rating__stroke">
                                            <use xlink:href="/template/red_stroyka/images/products/sprite.svg#star-normal-stroke"></use>
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
                                    <svg class="rating__star rating__star--active" width="13px" height="12px">
                                        <g class="rating__fill">
                                            <use xlink:href="/template/red_stroyka/images/products/sprite.svg#star-normal"></use>
                                        </g>
                                        <g class="rating__stroke">
                                            <use xlink:href="/template/red_stroyka/images/products/sprite.svg#star-normal-stroke"></use>
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
                                    <svg class="rating__star rating__star--active" width="13px" height="12px">
                                        <g class="rating__fill">
                                            <use xlink:href="/template/red_stroyka/images/products/sprite.svg#star-normal"></use>
                                        </g>
                                        <g class="rating__stroke">
                                            <use xlink:href="/template/red_stroyka/images/products/sprite.svg#star-normal-stroke"></use>
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
                                </div>
                            </div>
                        </div>
                        <div class="product__rating-legend">
                            <a href="">7 Reviews</a><span>/</span><a href="">Write A Review</a>
                        </div>
                    </div>
                             <?php */ ?>

                    <div class="product__description">
                        <?= $good->description; ?>
                    </div>
                    <ul class="product__meta">
                        <li class="product__meta-availability">Наличие: <span
                                    class="text-success"><?= $good->Availibilty ?></span>
                        </li>
                        <li>Бренд: <a
                                    href="<?= $good->urlOnBrandInGood; ?>"><?= $good->Vendor; ?></a>
                        </li>
                        <li>Артикул товара: <?= $good->aID; ?></li>
                    </ul>
                </div>
                <!-- .product__info / end -->
                <!-- .product__sidebar -->
                <div class="product__sidebar">
                    <div class="product__availability">
                        Наличие: <span class="text-success"><?= $good->Availibilty ?></span>
                    </div>
                    <div class="product__prices">
                        <?= $good->formatPrice ?>
                    </div>
                    <!-- .product__options -->


                    <form class="product__options">
                        <?php /*?>

                            <div class="form-group product__option">
                                <label class="product__option-label">Color</label>
                                <div class="input-radio-color">
                                    <div class="input-radio-color__list">
                                        <label class="input-radio-color__item input-radio-color__item--white"
                                               style="color: #fff;" data-toggle="tooltip"
                                               title="White">
                                            <input type="radio" name="color">
                                            <span></span>
                                        </label>
                                        <label class="input-radio-color__item"
                                               style="color: #ffd333;"
                                               data-toggle="tooltip" title="Yellow">
                                            <input type="radio" name="color">
                                            <span></span>
                                        </label>
                                        <label class="input-radio-color__item"
                                               style="color: #ff4040;"
                                               data-toggle="tooltip" title="Red">
                                            <input type="radio" name="color">
                                            <span></span>
                                        </label>
                                        <label class="input-radio-color__item input-radio-color__item--disabled"
                                               style="color: #4080ff;" data-toggle="tooltip"
                                               title="Blue">
                                            <input type="radio" name="color" disabled>
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
    <?php */ ?>
                        <?php /*?>

                        <div class="form-group product__option">
                            <label class="product__option-label">Material</label>
                            <div class="input-radio-label">
                                <div class="input-radio-label__list">
                                    <label>
                                        <input type="radio" name="material">
                                        <span>Metal</span>
                                    </label>
                                    <label>
                                        <input type="radio" name="material">
                                        <span>Wood</span>
                                    </label>
                                    <label>
                                        <input type="radio" name="material" disabled>
                                        <span>Plastic</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                         <?php */ ?>
                        <div class="form-group product__option">
                            <label class="product__option-label"
                                   for="product-quantity">Количество</label>
                            <div class="product__actions">
                                <div class="product__actions-item">
                                    <div class="input-number product__quantity"
                                         data-id="<?= $good->aID; ?>"
                                    >
                                        <input id="product-quantity"
                                               class="input-number__input form-control form-control-lg"
                                               type="number" min="1"
                                               value="<?= Yii::$app->cart->countById($good->id); ?>">
                                        <div class="input-number__add"></div>
                                        <div class="input-number__sub"></div>
                                    </div>
                                </div>
                                <div class="product__actions-item product__actions-item--addtocart">
                                    <button
                                            data-id="<?= $good->aID; ?>"
                                            class="btn btn-primary btn-lg addInCartJs oneClickAndDisabled <?= \Yii::$app->cart->checkGoodsInCart($good->id) ? 'goodsInCart' : ''; ?>"><?= \Yii::$app->cart->checkGoodsInCart($good->id) ? 'Добавлено' : 'Добавить в корзину'; ?>
                                    </button>
                                </div>
                                <div class="product__actions-item product__actions-item--wishlist">
                                    <button type="button"
                                            class="btn btn-secondary btn-svg-icon btn-lg"
                                            data-toggle="tooltip" title="Избранное">
                                        <svg width="16px" height="16px">
                                            <use xlink:href="/template/red_stroyka/images/sprite.svg#wishlist-16"></use>
                                        </svg>
                                    </button>
                                </div>
                                <div class="product__actions-item product__actions-item--compare">
                                    <button type="button"
                                            class="btn btn-secondary btn-svg-icon btn-lg"
                                            data-toggle="tooltip" title="Сравнение">
                                        <svg width="16px" height="16px">
                                            <use xlink:href="/template/red_stroyka/images/sprite.svg#compare-16"></use>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>

                    <!-- .product__options / end -->
                </div>
                <!-- .product__end -->
                <div class="product__footer">
                    <div class="product__tags tags">
                        <div class="tags__list">
                            <?php foreach ($good->goodsCategory as $linkCat): ?>
                                <?php if (isset($linkCat->category->fullUrl)): ?>
                                    <a href="<?= $linkCat->category->fullUrl ?>"><?= $linkCat->category->name; ?></a>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="product__share-links share-links">
                        <ul class="share-links__list">
                            <li class="share-links__item share-links__item--type--like"><a
                                        href="">Like</a>
                            </li>
                            <li class="share-links__item share-links__item--type--tweet"><a
                                        href="">Tweet</a>
                            </li>
                            <li class="share-links__item share-links__item--type--pin"><a
                                        href="">Pin
                                    It</a></li>
                            <li class="share-links__item share-links__item--type--counter"><a
                                        href="">4K</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-tabs ">
            <div class="product-tabs__list">
                <a href="#tab-description"
                   class="product-tabs__item product-tabs__item--active">Описание</a>
                <a href="#tab-specification" class="product-tabs__item">Характеристики</a>
                <?php /*?>
                <a href="#tab-reviews" class="product-tabs__item">Отзывы</a>
                 <?php */ ?>
            </div>
            <div class="product-tabs__content">
                <div class="product-tabs__pane product-tabs__pane--active" id="tab-description">
                    <?= $good->Description; ?>
                </div>
                <div class="product-tabs__pane" id="tab-specification">
                    <div class="spec">
                        <div class="spec__section">
                            <?php foreach ($good->attrProduct as $attr): ?>
                                <?php if ($attr->value): ?>
                                    <div class="spec__row">
                                        <div class="spec__name"><?= $attr->fullProps->name; ?></div>
                                        <div class="spec__value"><?= $attr->value; ?> <?= $attr->fullProps->unit; ?></div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <?php /*?>
                <div class="product-tabs__pane" id="tab-reviews">
                    <div class="reviews-view">
                        <div class="reviews-view__list">
                            <h3 class="reviews-view__header">Customer Reviews</h3>
                            <div class="reviews-list">
                                <ol class="reviews-list__content">
                                    <li class="reviews-list__item">
                                        <div class="review">
                                            <div class="review__avatar"><img
                                                        src="/template/red_stroyka/images/products/avatars/avatar-1.jpg"
                                                        alt=""></div>
                                            <div class="review__content">
                                                <div class="review__author">Samantha Smith</div>
                                                <div class="review__rating">
                                                    <div class="rating">
                                                        <div class="rating__body">
                                                            <svg class="rating__star rating__star--active"
                                                                 width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="/template/red_stroyka/images/products/sprite.svg#star-normal"></use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use xlink:href="/template/red_stroyka/images/products/sprite.svg#star-normal-stroke"></use>
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
                                                            <svg class="rating__star rating__star--active"
                                                                 width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="/template/red_stroyka/images/products/sprite.svg#star-normal"></use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use xlink:href="/template/red_stroyka/images/products/sprite.svg#star-normal-stroke"></use>
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
                                                            <svg class="rating__star rating__star--active"
                                                                 width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="/template/red_stroyka/images/products/sprite.svg#star-normal"></use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use xlink:href="/template/red_stroyka/images/products/sprite.svg#star-normal-stroke"></use>
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
                                                            <svg class="rating__star rating__star--active"
                                                                 width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="/template/red_stroyka/images/products/sprite.svg#star-normal"></use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use xlink:href="/template/red_stroyka/images/products/sprite.svg#star-normal-stroke"></use>
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
                                                            <svg class="rating__star " width="13px"
                                                                 height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="/template/red_stroyka/images/products/sprite.svg#star-normal"></use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use xlink:href="/template/red_stroyka/images/products/sprite.svg#star-normal-stroke"></use>
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
                                                <div class="review__text">Phasellus id mattis nulla.
                                                    Mauris velit nisi, imperdiet vitae sodales in,
                                                    maximus ut lectus. Vivamus commodo scelerisque
                                                    lacus, at porttitor dui iaculis id. Curabitur
                                                    imperdiet ultrices fermentum.
                                                </div>
                                                <div class="review__date">27 May, 2018</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="reviews-list__item">
                                        <div class="review">
                                            <div class="review__avatar"><img
                                                        src="/template/red_stroyka/images/products/avatars/avatar-2.jpg"
                                                        alt=""></div>
                                            <div class="review__content">
                                                <div class="review__author">Adam Taylor</div>
                                                <div class="review__rating">
                                                    <div class="rating">
                                                        <div class="rating__body">
                                                            <svg class="rating__star rating__star--active"
                                                                 width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="/template/red_stroyka/images/products/sprite.svg#star-normal"></use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use xlink:href="/template/red_stroyka/images/products/sprite.svg#star-normal-stroke"></use>
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
                                                            <svg class="rating__star rating__star--active"
                                                                 width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="/template/red_stroyka/images/products/sprite.svg#star-normal"></use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use xlink:href="/template/red_stroyka/images/products/sprite.svg#star-normal-stroke"></use>
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
                                                            <svg class="rating__star rating__star--active"
                                                                 width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="/template/red_stroyka/images/products/sprite.svg#star-normal"></use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use xlink:href="/template/red_stroyka/images/products/sprite.svg#star-normal-stroke"></use>
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
                                                            <svg class="rating__star " width="13px"
                                                                 height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="/template/red_stroyka/images/products/sprite.svg#star-normal"></use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use xlink:href="/template/red_stroyka/images/products/sprite.svg#star-normal-stroke"></use>
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
                                                            <svg class="rating__star " width="13px"
                                                                 height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="/template/red_stroyka/images/products/sprite.svg#star-normal"></use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use xlink:href="/template/red_stroyka/images/products/sprite.svg#star-normal-stroke"></use>
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
                                                <div class="review__text">Aenean non lorem nisl.
                                                    Duis tempor sollicitudin orci, eget tincidunt ex
                                                    semper sit amet. Nullam neque justo, sodales
                                                    congue feugiat ac, facilisis a augue. Donec
                                                    tempor sapien et fringilla facilisis. Nam
                                                    maximus consectetur diam. Nulla ut ex mollis,
                                                    volutpat tellus vitae, accumsan ligula.
                                                </div>
                                                <div class="review__date">12 April, 2018</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="reviews-list__item">
                                        <div class="review">
                                            <div class="review__avatar"><img
                                                        src="/template/red_stroyka/images/products/avatars/avatar-3.jpg"
                                                        alt=""></div>
                                            <div class="review__content">
                                                <div class="review__author">Helena Garcia</div>
                                                <div class="review__rating">
                                                    <div class="rating">
                                                        <div class="rating__body">
                                                            <svg class="rating__star rating__star--active"
                                                                 width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="/template/red_stroyka/images/products/sprite.svg#star-normal"></use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use xlink:href="/template/red_stroyka/images/products/sprite.svg#star-normal-stroke"></use>
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
                                                            <svg class="rating__star rating__star--active"
                                                                 width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="/template/red_stroyka/images/products/sprite.svg#star-normal"></use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use xlink:href="/template/red_stroyka/images/products/sprite.svg#star-normal-stroke"></use>
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
                                                            <svg class="rating__star rating__star--active"
                                                                 width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="/template/red_stroyka/images/products/sprite.svg#star-normal"></use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use xlink:href="/template/red_stroyka/images/products/sprite.svg#star-normal-stroke"></use>
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
                                                            <svg class="rating__star rating__star--active"
                                                                 width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="/template/red_stroyka/images/products/sprite.svg#star-normal"></use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use xlink:href="/template/red_stroyka/images/products/sprite.svg#star-normal-stroke"></use>
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
                                                            <svg class="rating__star rating__star--active"
                                                                 width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="/template/red_stroyka/images/products/sprite.svg#star-normal"></use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use xlink:href="/template/red_stroyka/images/products/sprite.svg#star-normal-stroke"></use>
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
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="review__text">Duis ac lectus scelerisque
                                                    quam blandit egestas. Pellentesque hendrerit
                                                    eros laoreet suscipit ultrices.
                                                </div>
                                                <div class="review__date">2 January, 2018</div>
                                            </div>
                                        </div>
                                    </li>
                                </ol>
                                <div class="reviews-list__pagination">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item disabled">
                                            <a class="page-link page-link--with-arrow" href=""
                                               aria-label="Previous">
                                                <svg class="page-link__arrow page-link__arrow--left"
                                                     aria-hidden="true" width="8px" height="13px">
                                                    <use xlink:href="/template/red_stroyka/images/products/sprite.svg#arrow-rounded-left-8x13"></use>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="">1</a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="">2
                                                <span class="sr-only">(current)</span></a></li>
                                        <li class="page-item"><a class="page-link" href="">3</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link page-link--with-arrow" href=""
                                               aria-label="Next">
                                                <svg class="page-link__arrow page-link__arrow--right"
                                                     aria-hidden="true" width="8px" height="13px">
                                                    <use xlink:href="/template/red_stroyka/images/products/sprite.svg#arrow-rounded-right-8x13"></use>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <form class="reviews-view__form">
                            <h3 class="reviews-view__header">Write A Review</h3>
                            <div class="row">
                                <div class="col-12 col-lg-9 col-xl-8">
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="review-stars">Review Stars</label>
                                            <select id="review-stars" class="form-control">
                                                <option>5 Stars Rating</option>
                                                <option>4 Stars Rating</option>
                                                <option>3 Stars Rating</option>
                                                <option>2 Stars Rating</option>
                                                <option>1 Stars Rating</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="review-author">Your Name</label>
                                            <input type="text" class="form-control"
                                                   id="review-author" placeholder="Your Name">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="review-email">Email Address</label>
                                            <input type="text" class="form-control"
                                                   id="review-email" placeholder="Email Address">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="review-text">Your Review</label>
                                        <textarea class="form-control" id="review-text"
                                                  rows="6"></textarea>
                                    </div>
                                    <div class="form-group mb-0">
                                        <button type="submit" class="btn btn-primary btn-lg">Post
                                            Your Review
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
  <?php */ ?>
            </div>
        </div>
    </div>
</div>

