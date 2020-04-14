<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
?>

<!-- .block-slideshow -->
<div class="block-slideshow block-slideshow--layout--full block">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="block-slideshow__body">
                    <div class="owl-carousel">
                        <?= \frontend\abstractComponents\widgets\MainBanner\MainBanner::widget([
                            'path' => '/template/red_stroyka/images/banners',
                            'items' => [
                                [
                                    'desctopImg' => '/spring/1/1140-400.jpg',
                                    'mobileImg' => '/spring/1/1140-400.jpg',
                                    'slideTitle' => 'Весна  — SALE» скидка 10% на 3000 товаров',
                                    'slideText' => 'Весна  — SALE» скидка 10% на 3000 товаров',
                                    'linkByAction' => '/catalog/',
                                ],
                                [
                                    'desctopImg' => '/main/1/sexy-shop-1-1140.jpg',
                                    'mobileImg' => '/main/1/sexy-shop-1-870.jpg',
                                    'slideTitle' => 'Весна  — SALE» скидка 10% на 3000 товаров',
                                    'slideText' => 'Весна  — SALE» скидка 10% на 3000 товаров',
                                    'linkByAction' => '/catalog/',
                                ],
                            ]
                        ]); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- .block-slideshow / end -->
<!-- .block-features -->
<div class="block block-features block-features--layout--boxed">
    <div class="container">
        <div class="block-features__list">
            <?= \frontend\abstractComponents\widgets\Icons\Icons::widget([
                'items' => [
                    [
                        'img' => '/template/red_stroyka/images/icons/anon.svg',
                        'slideTitle' => 'Free Shipping',
                        'slideText' => 'For orders from $50',
                    ],

                    [
                        'img' => '/template/red_stroyka/images/icons/free-shipping.svg',
                        'slideTitle' => 'Support 24/7',
                        'slideText' => 'Call us anytime',
                    ],
                    [
                        'img' => '/template/red_stroyka/images/icons/gift.svg',
                        'slideTitle' => '100% Safety',
                        'slideText' => 'Only secure payments',
                    ], [
                        'img' => '/template/red_stroyka/images/icons/medal.svg',
                        'slideTitle' => 'Hot Offers',
                        'slideText' => 'Discounts up to 90%',
                    ],

                ]
            ]); ?>

        </div>
    </div>
</div>
<!-- .block-features / end -->

<!-- .block-products-carousel -->
<div class="block block-products-carousel" data-layout="grid-4">
    <div class="container">
        <div class="block-header">
            <h3 class="block-header__title">Популярные продукты</h3>
            <div class="block-header__divider"></div>
            <ul class="block-header__groups-list">
                <li>
                    <button type="button" class="block-header__group block-header__group--active
getProducts"
                            data-id-category="101"
                            data-getProductsParams='{
                               "limit":"4",
                                "Bestseller":"1",
                               "categoryId":"101",
                               "random":"1",
                               "classForResult":".getProductsResultPopulars"
                               }'
                    >
                        Все
                    </button>
                </li>
                <li>
                    <button type="button" class="block-header__group
getProducts"
                            data-id-category="636"
                            data-getProductsParams='{
                               "limit":"4",
                               "Bestseller":"1",
                               "categoryId":"636",
                               "random":"1",
                               "classForResult":".getProductsResultPopulars"
                               }'
                    ><?= \frontend\abstractComponents\models\CategoryAbstract::getNameById(636); ?>
                    </button>
                </li>
                <li>
                    <a type="button" class="block-header__group
getProducts"
                       data-id-category="683"
                       data-getProductsParams='{
                               "limit":"4",
                                   "Bestseller":"1",
                               "categoryId":"683",
                               "random":"1",
                               "classForResult":".getProductsResultPopulars"
                               }'
                    ><?= \frontend\abstractComponents\models\CategoryAbstract::getNameById(683); ?>
                    </a>
                </li>

            </ul>
            <div class="block-header__arrows-list">
                <button class="block-header__arrow block-header__arrow--left getRandomProducts"
                        data-getProductsParams='{
                               "limit":"4",
                               "Bestseller":"1",
                               "random":"1",
                               "classForResult":".getProductsResultPopulars"
                               }'
                        type="button">
                    <svg width="7px" height="11px">
                        <use xlink:href="/template/red_stroyka/images/sprite.svg#arrow-rounded-left-7x11"></use>
                    </svg>
                </button>
                <button class="block-header__arrow block-header__arrow--right getRandomProducts"
                        data-getProductsParams='{
                               "limit":"4",
                                "Bestseller":"1",
                               "random":"1",
                               "classForResult":".getProductsResultPopulars"
                               }'
                        type="button">
                    <svg width="7px" height="11px">
                        <use xlink:href="/template/red_stroyka/images/sprite.svg#arrow-rounded-right-7x11"></use>
                    </svg>
                </button>
            </div>
        </div>
        <div class="block-products-carousel__slider">
            <div class="block-products-carousel__preloader"></div>
            <div class="getProductsResultPopulars">
                <?= \frontend\abstractComponents\widgets\GenerateBlockGood\GenerateBlockGood::widget([
                    'items' => \app\models\sexgod\good\Goods::getProducts([
                        'categoryId' => 101,
                        'limit' => 4,
                    ])
                ]); ?>
            </div>
        </div>
    </div>
</div>
<!-- .block-products-carousel / end -->

<!-- .block-banner -->
<div class="block block-banner">
    <div class="container">
        <a href="" class="block-banner__body">
            <div class="block-banner__image block-banner__image--desktop"
                 style="background-image: url('/template/red_stroyka/images/banners/main/1/sexy-shop-1-1140.jpg')"></div>
            <div class="block-banner__image block-banner__image--mobile"
                 style="background-image: url('/template/red_stroyka/images/banners/main/1/sexy-shop-1-1140.jpg')"></div>
            <div class="block-banner__title">Hundreds <br class="block-banner__mobile-br"> Hand
                Tools
            </div>
            <div class="block-banner__text">Hammers, Chisels, Universal Pliers, Nippers, Jigsaws,
                Saws
            </div>
            <div class="block-banner__button">
                <span class="btn btn-sm btn-primary">Shop Now</span>
            </div>
        </a>
    </div>
</div>
<!-- .block-banner / end -->
<?php /*?>

<!-- .block-products -->
<div class="block block-products-carousel" data-layout="grid-4">
    <div class="container">
        <div class="block-header">
            <h3 class="block-header__title">Товары по скидке</h3>
            <div class="block-header__divider"></div>
            <ul class="block-header__groups-list">
                <li>
                    <button type="button" class="block-header__group block-header__group--active
getProducts"
                            data-id-category="101"
                            data-getProductsParams='{
                               "limit":"4",
                               "Discount_goods":"1",
                               "categoryId":"101",
                               "random":"1",
                               "classForResult":".getProductsDiscountGoods"
                               }'
                    >

                        Все
                    </button>
                </li>

                <li>
                    <button type="button" class="block-header__group
getProducts"
                            data-id-category="636"
                            data-getProductsParams='{
                               "limit":"4",
                               "Discount_goods":"1",
                               "categoryId":"636",
                               "radom":"1",
                               "classForResult":".getProductsDiscountGoods"
                               }'

                    ><?= \frontend\abstractComponents\models\CategoryAbstract::getNameById(636); ?>
                    </button>
                </li>

                <li>
                    <button type="button" class="block-header__group
getProducts"
                            data-id-category="683"
                            data-getProductsParams='{
                               "limit":"4",
                               "Discount_goods":"1",
                               "categoryId":"683",
                               "radom":"1",
                               "classForResult":".getProductsDiscountGoods"
                               }'
                    ><?= \frontend\abstractComponents\models\CategoryAbstract::getNameById(683); ?>
                    </button>
                </li>

            </ul>
            <div class="block-header__arrows-list">
                <button class="block-header__arrow block-header__arrow--left getRandomProducts"
                        data-getProductsParams='{
                               "limit":"4",
                                "Discount_goods":"1",
                               "random":"1",
                               "classForResult":".getProductsDiscountGoods"
                               }'
                        type="button">
                    <svg width="7px" height="11px">
                        <use xlink:href="/template/red_stroyka/images/sprite.svg#arrow-rounded-left-7x11"></use>
                    </svg>
                </button>
                <button class="block-header__arrow block-header__arrow--right getRandomProducts"
                        data-getProductsParams='{
                               "limit":"4",
                                "Discount_goods":"1",
                               "random":"1",
                               "classForResult":".getProductsDiscountGoods"
                               }'

                        type="button">
                    <svg width="7px" height="11px">
                        <use xlink:href="/template/red_stroyka/images/sprite.svg#arrow-rounded-right-7x11"></use>
                    </svg>
                </button>
            </div>
        </div>
        <div class="block-products-carousel__slider">
            <div class="block-products-carousel__preloader"></div>
            <div class="getProductsDiscountGoods">
                <?= \frontend\abstractComponents\widgets\GenerateBlockGood\GenerateBlockGood::widget([
                    'items' => \app\models\sexgod\good\Goods::getProducts([
                        'categoryId' => 101,//101///491
                        'limit' => 8,
                    ])
                ]); ?>
            </div>
        </div>
    </div>
</div>
<!-- .block-products / end -->
<?php */?>
<!-- .block-categories -->
<div class="block block--highlighted block-categories block-categories--layout--compact">
    <div class="container">
        <div class="block-header">
            <h3 class="block-header__title">Популярные категории</h3>
            <div class="block-header__divider"></div>
        </div>

        <?= \frontend\abstractComponents\widgets\CategoryOutputWidget\CategoryOutputWidget::widget([
            'items' => \frontend\abstractComponents\models\CategoryAbstract::getCategoryById([100, 163, 269, 101, 675, 717, 492, 457, 484, 449, 685, 592, 491, 591, 468, 392, 670, 550, 636, 637, 638, 640]),
            'template' => 'mainPagePopularCategory',
        ]); ?>

    </div>
</div>
<!-- .block-categories / end -->
<!-- .block-products-carousel -->
<!-- .block-products-carousel -->
<div class="block block-products-carousel" data-layout="grid-4">
    <div class="container">
        <div class="block-header">
            <h3 class="block-header__title">Новинки</h3>
            <div class="block-header__divider"></div>
            <ul class="block-header__groups-list">
                <li>
                    <button type="button" class="block-header__group block-header__group--active
getProducts"
                            data-id-category="101"
                            data-getProductsParams='{
                               "limit":"4",
                               "Novelties":"1",
                               "categoryId":"101",
                               "radom":"1",
                               "classForResult":".getProductsResultNovelties"
                               }'
                    >
                        Все
                    </button>
                </li>
                <li>
                    <button type="button" class="block-header__group
getProducts"
                            data-id-category="636"
                            data-getProductsParams='{
                               "limit":"8",
                               "Novelties":"1",
                               "categoryId":"636",
                               "classForResult":".getProductsResultNovelties"
                               }'
                    ><?= \frontend\abstractComponents\models\CategoryAbstract::getNameById(636); ?>
                    </button>
                </li>
                <li>
                    <a type="button" class="block-header__group
getProducts"
                       data-id-category="683"
                       data-getProductsParams='{
                               "limit":"8",
                               "Novelties":"1",
                               "categoryId":"683",
                               "classForResult":".getProductsResultNovelties"
                               }'

                    ><?= \frontend\abstractComponents\models\CategoryAbstract::getNameById(683); ?>
                    </a>
                </li>
            </ul>
            <div class="block-header__arrows-list">
                <button class="block-header__arrow block-header__arrow--left getRandomProducts"
                        data-getProductsParams='{
                               "limit":"8",
                               "Novelties":"1",
                               "random":"1",
                               "classForResult":".getProductsResultNovelties"
                               }'
                        type="button">
                    <svg width="7px" height="11px">
                        <use xlink:href="/template/red_stroyka/images/sprite.svg#arrow-rounded-left-7x11"></use>
                    </svg>
                </button>
                <button class="block-header__arrow block-header__arrow--right getRandomProducts"
                        data-getProductsParams='{
                               "limit":"8",
                               "Novelties":"1",
                               "random":"1",
                               "classForResult":".getProductsResultNovelties"
                               }'
                        type="button">
                    <svg width="7px" height="11px">
                        <use xlink:href="/template/red_stroyka/images/sprite.svg#arrow-rounded-right-7x11"></use>
                    </svg>
                </button>
            </div>
        </div>
        <div class="block-products-carousel__slider">
            <div class="block-products-carousel__preloader"></div>
            <div class="productsResult getProductsResultNovelties">
                <?= \frontend\abstractComponents\widgets\GenerateBlockGood\GenerateBlockGood::widget([
                    'items' => \app\models\sexgod\good\Goods::getProducts([
                        'categoryId' => 101,//101///491
                        'limit' => 4,
                    ])
                ]); ?>
            </div>
        </div>
    </div>
</div>

<?php /*?>
<!-- .block-posts -->
<div class="block block-posts block-posts--layout--grid-nl" data-layout="grid-nl">
    <div class="container">
        <div class="block-header">
            <h3 class="block-header__title">Latest News</h3>
            <div class="block-header__divider"></div>
            <div class="block-header__arrows-list">
                <button class="block-header__arrow block-header__arrow--left" type="button">
                    <svg width="7px" height="11px">
                        <use xlink:href="/template/red_stroyka/images/sprite.svg#arrow-rounded-left-7x11"></use>
                    </svg>
                </button>
                <button class="block-header__arrow block-header__arrow--right" type="button">
                    <svg width="7px" height="11px">
                        <use xlink:href="/template/red_stroyka/images/sprite.svg#arrow-rounded-right-7x11"></use>
                    </svg>
                </button>
            </div>
        </div>
        <div class="block-posts__slider">
            <div class="owl-carousel">
                <div class="post-card  ">
                    <div class="post-card__image">
                        <a href="">
                            <img src="template/red_stroyka/images/posts/post-1.jpg" alt="">
                        </a>
                    </div>
                    <div class="post-card__info">
                        <div class="post-card__category">
                            <a href="">Special Offers</a>
                        </div>
                        <div class="post-card__name">
                            <a href="">Philosophy That Addresses Topics Such As Goodness</a>
                        </div>
                        <div class="post-card__date">October 19, 2019</div>
                        <div class="post-card__content">
                            In one general sense, philosophy is associated with wisdom,
                            intellectual culture and a search for knowledge.
                            In that sense, all cultures...
                        </div>
                        <div class="post-card__read-more">
                            <a href="" class="btn btn-secondary btn-sm">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="post-card  ">
                    <div class="post-card__image">
                        <a href="">
                            <img src="template/red_stroyka/images/posts/post-2.jpg" alt="">
                        </a>
                    </div>
                    <div class="post-card__info">
                        <div class="post-card__category">
                            <a href="">Latest News</a>
                        </div>
                        <div class="post-card__name">
                            <a href="">Logic Is The Study Of Reasoning And Argument Part 2</a>
                        </div>
                        <div class="post-card__date">September 5, 2019</div>
                        <div class="post-card__content">
                            In one general sense, philosophy is associated with wisdom,
                            intellectual culture and a search for knowledge.
                            In that sense, all cultures...
                        </div>
                        <div class="post-card__read-more">
                            <a href="" class="btn btn-secondary btn-sm">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="post-card  ">
                    <div class="post-card__image">
                        <a href="">
                            <img src="template/red_stroyka/images/posts/post-3.jpg" alt="">
                        </a>
                    </div>
                    <div class="post-card__info">
                        <div class="post-card__category">
                            <a href="">New Arrivals</a>
                        </div>
                        <div class="post-card__name">
                            <a href="">Some Philosophers Specialize In One Or More Historical
                                Periods</a>
                        </div>
                        <div class="post-card__date">August 12, 2019</div>
                        <div class="post-card__content">
                            In one general sense, philosophy is associated with wisdom,
                            intellectual culture and a search for knowledge.
                            In that sense, all cultures...
                        </div>
                        <div class="post-card__read-more">
                            <a href="" class="btn btn-secondary btn-sm">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="post-card  ">
                    <div class="post-card__image">
                        <a href="">
                            <img src="template/red_stroyka/images/posts/post-4.jpg" alt="">
                        </a>
                    </div>
                    <div class="post-card__info">
                        <div class="post-card__category">
                            <a href="">Special Offers</a>
                        </div>
                        <div class="post-card__name">
                            <a href="">A Variety Of Other Academic And Non-Academic Approaches Have
                                Been Explored</a>
                        </div>
                        <div class="post-card__date">Jule 30, 2019</div>
                        <div class="post-card__content">
                            In one general sense, philosophy is associated with wisdom,
                            intellectual culture and a search for knowledge.
                            In that sense, all cultures...
                        </div>
                        <div class="post-card__read-more">
                            <a href="" class="btn btn-secondary btn-sm">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="post-card  ">
                    <div class="post-card__image">
                        <a href="">
                            <img src="template/red_stroyka/images/posts/post-5.jpg" alt="">
                        </a>
                    </div>
                    <div class="post-card__info">
                        <div class="post-card__category">
                            <a href="">New Arrivals</a>
                        </div>
                        <div class="post-card__name">
                            <a href="">Germany Was The First Country To Professionalize
                                Philosophy</a>
                        </div>
                        <div class="post-card__date">June 12, 2019</div>
                        <div class="post-card__content">
                            In one general sense, philosophy is associated with wisdom,
                            intellectual culture and a search for knowledge.
                            In that sense, all cultures...
                        </div>
                        <div class="post-card__read-more">
                            <a href="" class="btn btn-secondary btn-sm">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="post-card  ">
                    <div class="post-card__image">
                        <a href="">
                            <img src="template/red_stroyka/images/posts/post-6.jpg" alt="">
                        </a>
                    </div>
                    <div class="post-card__info">
                        <div class="post-card__category">
                            <a href="">Special Offers</a>
                        </div>
                        <div class="post-card__name">
                            <a href="">Logic Is The Study Of Reasoning And Argument Part 1</a>
                        </div>
                        <div class="post-card__date">May 21, 2019</div>
                        <div class="post-card__content">
                            In one general sense, philosophy is associated with wisdom,
                            intellectual culture and a search for knowledge.
                            In that sense, all cultures...
                        </div>
                        <div class="post-card__read-more">
                            <a href="" class="btn btn-secondary btn-sm">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="post-card  ">
                    <div class="post-card__image">
                        <a href="">
                            <img src="template/red_stroyka/images/posts/post-7.jpg" alt="">
                        </a>
                    </div>
                    <div class="post-card__info">
                        <div class="post-card__category">
                            <a href="">Special Offers</a>
                        </div>
                        <div class="post-card__name">
                            <a href="">Many Inquiries Outside Of Academia Are Philosophical In The
                                Broad Sense</a>
                        </div>
                        <div class="post-card__date">April 3, 2019</div>
                        <div class="post-card__content">
                            In one general sense, philosophy is associated with wisdom,
                            intellectual culture and a search for knowledge.
                            In that sense, all cultures...
                        </div>
                        <div class="post-card__read-more">
                            <a href="" class="btn btn-secondary btn-sm">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="post-card  ">
                    <div class="post-card__image">
                        <a href="">
                            <img src="template/red_stroyka/images/posts/post-8.jpg" alt="">
                        </a>
                    </div>
                    <div class="post-card__info">
                        <div class="post-card__category">
                            <a href="">Latest News</a>
                        </div>
                        <div class="post-card__name">
                            <a href="">An Advantage Of Digital Circuits When Compared To Analog
                                Circuits</a>
                        </div>
                        <div class="post-card__date">Mart 29, 2019</div>
                        <div class="post-card__content">
                            In one general sense, philosophy is associated with wisdom,
                            intellectual culture and a search for knowledge.
                            In that sense, all cultures...
                        </div>
                        <div class="post-card__read-more">
                            <a href="" class="btn btn-secondary btn-sm">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="post-card  ">
                    <div class="post-card__image">
                        <a href="">
                            <img src="template/red_stroyka/images/posts/post-9.jpg" alt="">
                        </a>
                    </div>
                    <div class="post-card__info">
                        <div class="post-card__category">
                            <a href="">New Arrivals</a>
                        </div>
                        <div class="post-card__name">
                            <a href="">A Digital Circuit Is Typically Constructed From Small
                                Electronic Circuits</a>
                        </div>
                        <div class="post-card__date">February 10, 2019</div>
                        <div class="post-card__content">
                            In one general sense, philosophy is associated with wisdom,
                            intellectual culture and a search for knowledge.
                            In that sense, all cultures...
                        </div>
                        <div class="post-card__read-more">
                            <a href="" class="btn btn-secondary btn-sm">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="post-card  ">
                    <div class="post-card__image">
                        <a href="">
                            <img src="template/red_stroyka/images/posts/post-10.jpg" alt="">
                        </a>
                    </div>
                    <div class="post-card__info">
                        <div class="post-card__category">
                            <a href="">Special Offers</a>
                        </div>
                        <div class="post-card__name">
                            <a href="">Engineers Use Many Methods To Minimize Logic Functions</a>
                        </div>
                        <div class="post-card__date">January 1, 2019</div>
                        <div class="post-card__content">
                            In one general sense, philosophy is associated with wisdom,
                            intellectual culture and a search for knowledge.
                            In that sense, all cultures...
                        </div>
                        <div class="post-card__read-more">
                            <a href="" class="btn btn-secondary btn-sm">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- .block-posts / end -->
 <?php */ ?>

<!-- .block-brands -->
<div class="block block-brands">
    <div class="container">
        <div class="block-brands__slider">
            <div class="owl-carousel">
                <div class="block-brands__item">
                    <a href=""><img src="/template/red_stroyka/images/logos/logo-1.png" alt=""></a>
                </div>
                <div class="block-brands__item">
                    <a href=""><img src="/template/red_stroyka/images/logos/logo-2.png" alt=""></a>
                </div>
                <div class="block-brands__item">
                    <a href=""><img src="/template/red_stroyka/images/logos/logo-3.png" alt=""></a>
                </div>
                <div class="block-brands__item">
                    <a href=""><img src="/template/red_stroyka/images/logos/logo-4.png" alt=""></a>
                </div>
                <div class="block-brands__item">
                    <a href=""><img src="/template/red_stroyka/images/logos/logo-5.png" alt=""></a>
                </div>
                <div class="block-brands__item">
                    <a href=""><img src="/template/red_stroyka/images/logos/logo-6.png" alt=""></a>
                </div>
                <div class="block-brands__item">
                    <a href=""><img src="/template/red_stroyka/images/logos/logo-7.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- .block-brands / end -->
<!-- .block-product-columns -->

<?php /*?>
<div class="block block-product-columns d-lg-block d-none">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="block-header">
                    <h3 class="block-header__title">Top Rated Products</h3>
                    <div class="block-header__divider"></div>
                </div>
                <div class="block-product-columns__column">
                    <div class="block-product-columns__item">
                        <div class="product-card product-card--layout--horizontal">
                            <button class="product-card__quickview" type="button">
                                <svg width="16px" height="16px">
                                    <use xlink:href="/template/red_stroyka/images/sprite.svg#quickview-16"></use>
                                </svg>
                                <span class="fake-svg-icon"></span>
                            </button>
                            <div class="product-card__badges-list">
                                <div class="product-card__badge product-card__badge--new">New</div>
                            </div>
                            <div class="product-card__image">
                                <a href="product.html"><img
                                            src="/template/red_stroyka/images/products/product-1.jpg"
                                            alt=""></a>
                            </div>
                            <div class="product-card__info">
                                <div class="product-card__name">
                                    <a href="product.html">Electric Planer Brandix KL370090G 300
                                        Watts</a>
                                </div>
                                <div class="product-card__rating">
                                    <div class="product-card__rating-stars">
                                        <div class="rating">
                                            <div class="rating__body">
                                                <svg class="rating__star rating__star--active"
                                                     width="13px" height="12px">
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
                                                <svg class="rating__star rating__star--active"
                                                     width="13px" height="12px">
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
                                                <svg class="rating__star rating__star--active"
                                                     width="13px" height="12px">
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
                                                <svg class="rating__star rating__star--active"
                                                     width="13px" height="12px">
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
                                                <svg class="rating__star " width="13px"
                                                     height="12px">
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
                                    <div class="product-card__rating-legend">9 Reviews</div>
                                </div>
                                <ul class="product-card__features-list">
                                    <li>Speed: 750 RPM</li>
                                    <li>Power Source: Cordless-Electric</li>
                                    <li>Battery Cell Type: Lithium</li>
                                    <li>Voltage: 20 Volts</li>
                                    <li>Battery Capacity: 2 Ah</li>
                                </ul>
                            </div>
                            <div class="product-card__actions">
                                <div class="product-card__availability">
                                    Availability: <span class="text-success">In Stock</span>
                                </div>
                                <div class="product-card__prices">
                                    $749.00
                                </div>
                                <div class="product-card__buttons">
                                    <button class="btn btn-primary product-card__addtocart"
                                            type="button">Add To Cart
                                    </button>
                                    <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                            type="button">Add To Cart
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
                    <div class="block-product-columns__item">
                        <div class="product-card product-card--layout--horizontal">
                            <button class="product-card__quickview" type="button">
                                <svg width="16px" height="16px">
                                    <use xlink:href="/template/red_stroyka/images/sprite.svg#quickview-16"></use>
                                </svg>
                                <span class="fake-svg-icon"></span>
                            </button>
                            <div class="product-card__badges-list">
                                <div class="product-card__badge product-card__badge--hot">Hot</div>
                            </div>
                            <div class="product-card__image">
                                <a href="product.html"><img
                                            src="/template/red_stroyka/images/products/product-2.jpg"
                                            alt=""></a>
                            </div>
                            <div class="product-card__info">
                                <div class="product-card__name">
                                    <a href="product.html">Undefined Tool IRadix DPS3000SY 2700
                                        Watts</a>
                                </div>
                                <div class="product-card__rating">
                                    <div class="product-card__rating-stars">
                                        <div class="rating">
                                            <div class="rating__body">
                                                <svg class="rating__star rating__star--active"
                                                     width="13px" height="12px">
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
                                                <svg class="rating__star rating__star--active"
                                                     width="13px" height="12px">
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
                                                <svg class="rating__star rating__star--active"
                                                     width="13px" height="12px">
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
                                                <svg class="rating__star rating__star--active"
                                                     width="13px" height="12px">
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
                                                <svg class="rating__star rating__star--active"
                                                     width="13px" height="12px">
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
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-card__rating-legend">11 Reviews</div>
                                </div>
                                <ul class="product-card__features-list">
                                    <li>Speed: 750 RPM</li>
                                    <li>Power Source: Cordless-Electric</li>
                                    <li>Battery Cell Type: Lithium</li>
                                    <li>Voltage: 20 Volts</li>
                                    <li>Battery Capacity: 2 Ah</li>
                                </ul>
                            </div>
                            <div class="product-card__actions">
                                <div class="product-card__availability">
                                    Availability: <span class="text-success">In Stock</span>
                                </div>
                                <div class="product-card__prices">
                                    $1,019.00
                                </div>
                                <div class="product-card__buttons">
                                    <button class="btn btn-primary product-card__addtocart"
                                            type="button">Add To Cart
                                    </button>
                                    <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                            type="button">Add To Cart
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
                    <div class="block-product-columns__item">
                        <div class="product-card product-card--layout--horizontal">
                            <button class="product-card__quickview" type="button">
                                <svg width="16px" height="16px">
                                    <use xlink:href="/template/red_stroyka/images/sprite.svg#quickview-16"></use>
                                </svg>
                                <span class="fake-svg-icon"></span>
                            </button>
                            <div class="product-card__image">
                                <a href="product.html"><img
                                            src="/template/red_stroyka/images/products/product-3.jpg"
                                            alt=""></a>
                            </div>
                            <div class="product-card__info">
                                <div class="product-card__name">
                                    <a href="product.html">Drill Screwdriver Brandix ALX7054 200
                                        Watts</a>
                                </div>
                                <div class="product-card__rating">
                                    <div class="product-card__rating-stars">
                                        <div class="rating">
                                            <div class="rating__body">
                                                <svg class="rating__star rating__star--active"
                                                     width="13px" height="12px">
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
                                                <svg class="rating__star rating__star--active"
                                                     width="13px" height="12px">
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
                                                <svg class="rating__star rating__star--active"
                                                     width="13px" height="12px">
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
                                                <svg class="rating__star rating__star--active"
                                                     width="13px" height="12px">
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
                                                <svg class="rating__star " width="13px"
                                                     height="12px">
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
                                    <div class="product-card__rating-legend">9 Reviews</div>
                                </div>
                                <ul class="product-card__features-list">
                                    <li>Speed: 750 RPM</li>
                                    <li>Power Source: Cordless-Electric</li>
                                    <li>Battery Cell Type: Lithium</li>
                                    <li>Voltage: 20 Volts</li>
                                    <li>Battery Capacity: 2 Ah</li>
                                </ul>
                            </div>
                            <div class="product-card__actions">
                                <div class="product-card__availability">
                                    Availability: <span class="text-success">In Stock</span>
                                </div>
                                <div class="product-card__prices">
                                    $850.00
                                </div>
                                <div class="product-card__buttons">
                                    <button class="btn btn-primary product-card__addtocart"
                                            type="button">Add To Cart
                                    </button>
                                    <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                            type="button">Add To Cart
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
                </div>
            </div>
            <div class="col-4">
                <div class="block-header">
                    <h3 class="block-header__title">Special Offers</h3>
                    <div class="block-header__divider"></div>
                </div>
                <div class="block-product-columns__column">
                    <div class="block-product-columns__item">
                        <div class="product-card product-card--layout--horizontal">
                            <button class="product-card__quickview" type="button">
                                <svg width="16px" height="16px">
                                    <use xlink:href="/template/red_stroyka/images/sprite.svg#quickview-16"></use>
                                </svg>
                                <span class="fake-svg-icon"></span>
                            </button>
                            <div class="product-card__badges-list">
                                <div class="product-card__badge product-card__badge--sale">Sale
                                </div>
                            </div>
                            <div class="product-card__image">
                                <a href="product.html"><img
                                            src="/template/red_stroyka/images/products/product-4.jpg"
                                            alt=""></a>
                            </div>
                            <div class="product-card__info">
                                <div class="product-card__name">
                                    <a href="product.html">Drill Series 3 Brandix KSR4590PQS 1500
                                        Watts</a>
                                </div>
                                <div class="product-card__rating">
                                    <div class="product-card__rating-stars">
                                        <div class="rating">
                                            <div class="rating__body">
                                                <svg class="rating__star rating__star--active"
                                                     width="13px" height="12px">
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
                                                <svg class="rating__star rating__star--active"
                                                     width="13px" height="12px">
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
                                                <svg class="rating__star rating__star--active"
                                                     width="13px" height="12px">
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
                                                <svg class="rating__star " width="13px"
                                                     height="12px">
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
                                                <svg class="rating__star " width="13px"
                                                     height="12px">
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
                                    <div class="product-card__rating-legend">7 Reviews</div>
                                </div>
                                <ul class="product-card__features-list">
                                    <li>Speed: 750 RPM</li>
                                    <li>Power Source: Cordless-Electric</li>
                                    <li>Battery Cell Type: Lithium</li>
                                    <li>Voltage: 20 Volts</li>
                                    <li>Battery Capacity: 2 Ah</li>
                                </ul>
                            </div>
                            <div class="product-card__actions">
                                <div class="product-card__availability">
                                    Availability: <span class="text-success">In Stock</span>
                                </div>
                                <div class="product-card__prices">
                                    <span class="product-card__new-price">$949.00</span>
                                    <span class="product-card__old-price">$1189.00</span>
                                </div>
                                <div class="product-card__buttons">
                                    <button class="btn btn-primary product-card__addtocart"
                                            type="button">Add To Cart
                                    </button>
                                    <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                            type="button">Add To Cart
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
                    <div class="block-product-columns__item">
                        <div class="product-card product-card--layout--horizontal">
                            <button class="product-card__quickview" type="button">
                                <svg width="16px" height="16px">
                                    <use xlink:href="/template/red_stroyka/images/sprite.svg#quickview-16"></use>
                                </svg>
                                <span class="fake-svg-icon"></span>
                            </button>
                            <div class="product-card__image">
                                <a href="product.html"><img
                                            src="/template/red_stroyka/images/products/product-5.jpg"
                                            alt=""></a>
                            </div>
                            <div class="product-card__info">
                                <div class="product-card__name">
                                    <a href="product.html">Brandix Router Power Tool 2017ERXPK</a>
                                </div>
                                <div class="product-card__rating">
                                    <div class="product-card__rating-stars">
                                        <div class="rating">
                                            <div class="rating__body">
                                                <svg class="rating__star rating__star--active"
                                                     width="13px" height="12px">
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
                                                <svg class="rating__star rating__star--active"
                                                     width="13px" height="12px">
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
                                                <svg class="rating__star rating__star--active"
                                                     width="13px" height="12px">
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
                                                <svg class="rating__star rating__star--active"
                                                     width="13px" height="12px">
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
                                                <svg class="rating__star " width="13px"
                                                     height="12px">
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
                                    <div class="product-card__rating-legend">9 Reviews</div>
                                </div>
                                <ul class="product-card__features-list">
                                    <li>Speed: 750 RPM</li>
                                    <li>Power Source: Cordless-Electric</li>
                                    <li>Battery Cell Type: Lithium</li>
                                    <li>Voltage: 20 Volts</li>
                                    <li>Battery Capacity: 2 Ah</li>
                                </ul>
                            </div>
                            <div class="product-card__actions">
                                <div class="product-card__availability">
                                    Availability: <span class="text-success">In Stock</span>
                                </div>
                                <div class="product-card__prices">
                                    $1,700.00
                                </div>
                                <div class="product-card__buttons">
                                    <button class="btn btn-primary product-card__addtocart"
                                            type="button">Add To Cart
                                    </button>
                                    <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                            type="button">Add To Cart
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
                    <div class="block-product-columns__item">
                        <div class="product-card product-card--layout--horizontal">
                            <button class="product-card__quickview" type="button">
                                <svg width="16px" height="16px">
                                    <use xlink:href="/template/red_stroyka/images/sprite.svg#quickview-16"></use>
                                </svg>
                                <span class="fake-svg-icon"></span>
                            </button>
                            <div class="product-card__image">
                                <a href="product.html"><img
                                            src="/template/red_stroyka/images/products/product-6.jpg"
                                            alt=""></a>
                            </div>
                            <div class="product-card__info">
                                <div class="product-card__name">
                                    <a href="product.html">Brandix Drilling Machine DM2019KW4
                                        4kW</a>
                                </div>
                                <div class="product-card__rating">
                                    <div class="product-card__rating-stars">
                                        <div class="rating">
                                            <div class="rating__body">
                                                <svg class="rating__star rating__star--active"
                                                     width="13px" height="12px">
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
                                                <svg class="rating__star rating__star--active"
                                                     width="13px" height="12px">
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
                                                <svg class="rating__star rating__star--active"
                                                     width="13px" height="12px">
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
                                                <svg class="rating__star " width="13px"
                                                     height="12px">
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
                                                <svg class="rating__star " width="13px"
                                                     height="12px">
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
                                    <div class="product-card__rating-legend">7 Reviews</div>
                                </div>
                                <ul class="product-card__features-list">
                                    <li>Speed: 750 RPM</li>
                                    <li>Power Source: Cordless-Electric</li>
                                    <li>Battery Cell Type: Lithium</li>
                                    <li>Voltage: 20 Volts</li>
                                    <li>Battery Capacity: 2 Ah</li>
                                </ul>
                            </div>
                            <div class="product-card__actions">
                                <div class="product-card__availability">
                                    Availability: <span class="text-success">In Stock</span>
                                </div>
                                <div class="product-card__prices">
                                    $3,199.00
                                </div>
                                <div class="product-card__buttons">
                                    <button class="btn btn-primary product-card__addtocart"
                                            type="button">Add To Cart
                                    </button>
                                    <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                            type="button">Add To Cart
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
                </div>
            </div>
            <div class="col-4">
                <div class="block-header">
                    <h3 class="block-header__title">Bestsellers</h3>
                    <div class="block-header__divider"></div>
                </div>
                <div class="block-product-columns__column">
                    <div class="block-product-columns__item">
                        <div class="product-card product-card--layout--horizontal">
                            <button class="product-card__quickview" type="button">
                                <svg width="16px" height="16px">
                                    <use xlink:href="/template/red_stroyka/images/sprite.svg#quickview-16"></use>
                                </svg>
                                <span class="fake-svg-icon"></span>
                            </button>
                            <div class="product-card__image">
                                <a href="product.html"><img
                                            src="/template/red_stroyka/images/products/product-7.jpg"
                                            alt=""></a>
                            </div>
                            <div class="product-card__info">
                                <div class="product-card__name">
                                    <a href="product.html">Brandix Pliers</a>
                                </div>
                                <div class="product-card__rating">
                                    <div class="product-card__rating-stars">
                                        <div class="rating">
                                            <div class="rating__body">
                                                <svg class="rating__star rating__star--active"
                                                     width="13px" height="12px">
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
                                                <svg class="rating__star rating__star--active"
                                                     width="13px" height="12px">
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
                                                <svg class="rating__star " width="13px"
                                                     height="12px">
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
                                                <svg class="rating__star " width="13px"
                                                     height="12px">
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
                                                <svg class="rating__star " width="13px"
                                                     height="12px">
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
                                    <div class="product-card__rating-legend">4 Reviews</div>
                                </div>
                                <ul class="product-card__features-list">
                                    <li>Speed: 750 RPM</li>
                                    <li>Power Source: Cordless-Electric</li>
                                    <li>Battery Cell Type: Lithium</li>
                                    <li>Voltage: 20 Volts</li>
                                    <li>Battery Capacity: 2 Ah</li>
                                </ul>
                            </div>
                            <div class="product-card__actions">
                                <div class="product-card__availability">
                                    Availability: <span class="text-success">In Stock</span>
                                </div>
                                <div class="product-card__prices">
                                    $24.00
                                </div>
                                <div class="product-card__buttons">
                                    <button class="btn btn-primary product-card__addtocart"
                                            type="button">Add To Cart
                                    </button>
                                    <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                            type="button">Add To Cart
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
                    <div class="block-product-columns__item">
                        <div class="product-card product-card--layout--horizontal">
                            <button class="product-card__quickview" type="button">
                                <svg width="16px" height="16px">
                                    <use xlink:href="/template/red_stroyka/images/sprite.svg#quickview-16"></use>
                                </svg>
                                <span class="fake-svg-icon"></span>
                            </button>
                            <div class="product-card__image">
                                <a href="product.html"><img
                                            src="/template/red_stroyka/images/products/product-8.jpg"
                                            alt=""></a>
                            </div>
                            <div class="product-card__info">
                                <div class="product-card__name">
                                    <a href="product.html">Water Hose 40cm</a>
                                </div>
                                <div class="product-card__rating">
                                    <div class="product-card__rating-stars">
                                        <div class="rating">
                                            <div class="rating__body">
                                                <svg class="rating__star rating__star--active"
                                                     width="13px" height="12px">
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
                                                <svg class="rating__star rating__star--active"
                                                     width="13px" height="12px">
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
                                                <svg class="rating__star " width="13px"
                                                     height="12px">
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
                                                <svg class="rating__star " width="13px"
                                                     height="12px">
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
                                                <svg class="rating__star " width="13px"
                                                     height="12px">
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
                                    <div class="product-card__rating-legend">4 Reviews</div>
                                </div>
                                <ul class="product-card__features-list">
                                    <li>Speed: 750 RPM</li>
                                    <li>Power Source: Cordless-Electric</li>
                                    <li>Battery Cell Type: Lithium</li>
                                    <li>Voltage: 20 Volts</li>
                                    <li>Battery Capacity: 2 Ah</li>
                                </ul>
                            </div>
                            <div class="product-card__actions">
                                <div class="product-card__availability">
                                    Availability: <span class="text-success">In Stock</span>
                                </div>
                                <div class="product-card__prices">
                                    $15.00
                                </div>
                                <div class="product-card__buttons">
                                    <button class="btn btn-primary product-card__addtocart"
                                            type="button">Add To Cart
                                    </button>
                                    <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                            type="button">Add To Cart
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
                    <div class="block-product-columns__item">
                        <div class="product-card product-card--layout--horizontal">
                            <button class="product-card__quickview" type="button">
                                <svg width="16px" height="16px">
                                    <use xlink:href="/template/red_stroyka/images/sprite.svg#quickview-16"></use>
                                </svg>
                                <span class="fake-svg-icon"></span>
                            </button>
                            <div class="product-card__image">
                                <a href="product.html"><img
                                            src="/template/red_stroyka/images/products/product-9.jpg"
                                            alt=""></a>
                            </div>
                            <div class="product-card__info">
                                <div class="product-card__name">
                                    <a href="product.html">Spanner Wrench</a>
                                </div>
                                <div class="product-card__rating">
                                    <div class="product-card__rating-stars">
                                        <div class="rating">
                                            <div class="rating__body">
                                                <svg class="rating__star rating__star--active"
                                                     width="13px" height="12px">
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
                                                <svg class="rating__star rating__star--active"
                                                     width="13px" height="12px">
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
                                                <svg class="rating__star rating__star--active"
                                                     width="13px" height="12px">
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
                                                <svg class="rating__star rating__star--active"
                                                     width="13px" height="12px">
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
                                                <svg class="rating__star " width="13px"
                                                     height="12px">
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
                                    <div class="product-card__rating-legend">9 Reviews</div>
                                </div>
                                <ul class="product-card__features-list">
                                    <li>Speed: 750 RPM</li>
                                    <li>Power Source: Cordless-Electric</li>
                                    <li>Battery Cell Type: Lithium</li>
                                    <li>Voltage: 20 Volts</li>
                                    <li>Battery Capacity: 2 Ah</li>
                                </ul>
                            </div>
                            <div class="product-card__actions">
                                <div class="product-card__availability">
                                    Availability: <span class="text-success">In Stock</span>
                                </div>
                                <div class="product-card__prices">
                                    $19.00
                                </div>
                                <div class="product-card__buttons">
                                    <button class="btn btn-primary product-card__addtocart"
                                            type="button">Add To Cart
                                    </button>
                                    <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                            type="button">Add To Cart
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
                </div>
            </div>
        </div>
    </div>
</div>
 <?php */ ?>

<!-- .block-product-columns / end -->

