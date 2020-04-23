<?php

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use frontend\abstractComponents\models\CategoryAbstract;

?>


<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">

    <link rel="canonical" href="#"/>

    <link rel="icon" type="image/png" href="/template/red_stroyka/images/favicon.png">
    <link href="/template/red_stroyka/images/favicon.png" rel="shortcut icon" type="image/x-icon"/>
    <title>
        <?php if (isset($this->context->title)): ?>
            <?= Html::encode($this->context->title) ?>
        <?php else: ?>
        <?php endif; ?>

    </title>
    <!-- /Yandex.Metrika counter -->
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
          integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
          crossorigin="anonymous">
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<body>
<!-- site -->
<div class="site">
    <!-- mobile site__header -->
    <header class="site__header d-lg-none">
        <!-- data-sticky-mode - one of [pullToShow, alwaysOnTop] -->
        <div class="mobile-header mobile-header--sticky" data-sticky-mode="pullToShow">
            <div class="mobile-header__panel">
                <div class="container">
                    <div class="mobile-header__body">
                        <button class="mobile-header__menu-button">
                            <svg width="18px" height="14px">
                                <use xlink:href="/template/red_stroyka/images/sprite.svg#menu-18x14"></use>
                            </svg>
                        </button>
                        <a class="mobile-header__logo" href="/">
                            <img class="logo-main_xs"
                                 src="/template/red_stroyka/images/main/SEXGOD_Logo_forBG.svg"
                                 alt="">
                            <?php /*?><svg xmlns="http://www.w3.org/2000/svg" width="120px" height="20px">
                                <path d="M118.5,20h-1.1c-0.6,0-1.2-0.4-1.4-1l-1.5-4h-6.1l-1.5,4c-0.2,0.6-0.8,1-1.4,1h-1.1c-1,0-1.8-1-1.4-2l1.1-3
                                 l1.5-4l3.6-10c0.2-0.6,0.8-1,1.4-1h1.6c0.6,0,1.2,0.4,1.4,1l3.6,10l1.5,4l1.1,3C120.3,19,119.5,20,118.5,20z M111.5,6.6l-1.6,4.4
                                 h3.2L111.5,6.6z M99.5,20h-1.4c-0.4,0-0.7-0.2-0.9-0.5L94,14l-2,3.5v1c0,0.8-0.7,1.5-1.5,1.5h-1c-0.8,0-1.5-0.7-1.5-1.5v-17
                                 C88,0.7,88.7,0,89.5,0h1C91.3,0,92,0.7,92,1.5v8L94,6l3.2-5.5C97.4,0.2,97.7,0,98.1,0h1.4c1.2,0,1.9,1.3,1.3,2.3L96.3,10l4.5,7.8
                                 C101.4,18.8,100.7,20,99.5,20z M80.3,11.8L80,12.3v6.2c0,0.8-0.7,1.5-1.5,1.5h-1c-0.8,0-1.5-0.7-1.5-1.5v-6.2l-0.3-0.5l-5.5-9.5
                                 c-0.6-1,0.2-2.3,1.3-2.3h1.4c0.4,0,0.7,0.2,0.9,0.5L76,4.3l2,3.5l2-3.5l2.2-3.8C82.4,0.2,82.7,0,83.1,0h1.4c1.2,0,1.9,1.3,1.3,2.3
                                 L80.3,11.8z M60,20c-5.5,0-10-4.5-10-10S54.5,0,60,0s10,4.5,10,10S65.5,20,60,20z M60,4c-3.3,0-6,2.7-6,6s2.7,6,6,6s6-2.7,6-6
                                 S63.3,4,60,4z M47.8,17.8c0.6,1-0.2,2.3-1.3,2.3h-2L41,14h-4v4.5c0,0.8-0.7,1.5-1.5,1.5h-1c-0.8,0-1.5-0.7-1.5-1.5v-17
                                 C33,0.7,33.7,0,34.5,0H41c0.3,0,0.7,0,1,0.1c3.4,0.5,6,3.4,6,6.9c0,2.4-1.2,4.5-3.1,5.8L47.8,17.8z M42,4.2C41.7,4.1,41.3,4,41,4h-3
                                 c-0.6,0-1,0.4-1,1v4c0,0.6,0.4,1,1,1h3c0.3,0,0.7-0.1,1-0.2c0.3-0.1,0.6-0.3,0.9-0.5C43.6,8.8,44,7.9,44,7C44,5.7,43.2,4.6,42,4.2z
                                  M29.5,4H25v14.5c0,0.8-0.7,1.5-1.5,1.5h-1c-0.8,0-1.5-0.7-1.5-1.5V4h-4.5C15.7,4,15,3.3,15,2.5v-1C15,0.7,15.7,0,16.5,0h13
                                 C30.3,0,31,0.7,31,1.5v1C31,3.3,30.3,4,29.5,4z M6.5,20c-2.8,0-5.5-1.7-6.4-4c-0.4-1,0.3-2,1.3-2h1c0.5,0,0.9,0.3,1.2,0.7
                                 c0.2,0.3,0.4,0.6,0.8,0.8C4.9,15.8,5.8,16,6.5,16c1.5,0,2.8-0.9,2.8-2c0-0.7-0.5-1.3-1.2-1.6C7.4,12,7,11,7.4,10.3l0.4-0.9
                                 c0.4-0.7,1.2-1,1.8-0.6c0.6,0.3,1.2,0.7,1.6,1.2c1,1.1,1.7,2.5,1.7,4C13,17.3,10.1,20,6.5,20z M11.6,6h-1c-0.5,0-0.9-0.3-1.2-0.7
                                 C9.2,4.9,8.9,4.7,8.6,4.5C8.1,4.2,7.2,4,6.5,4C5,4,3.7,4.9,3.7,6c0,0.7,0.5,1.3,1.2,1.6C5.6,8,6,9,5.6,9.7l-0.4,0.9
                                 c-0.4,0.7-1.2,1-1.8,0.6c-0.6-0.3-1.2-0.7-1.6-1.2C0.6,8.9,0,7.5,0,6c0-3.3,2.9-6,6.5-6c2.8,0,5.5,1.7,6.4,4C13.3,4.9,12.6,6,11.6,6
                                 z"></path>
                            </svg>
    <?php */ ?>
                        </a>
                        <div class="search search--location--mobile-header mobile-header__search">
                            <div class="search__body">
                                <form class="search__form" action="">
                                    <input class="search__input" name="search"
                                           placeholder="Более 18000 товаров для вашего удовольствия"
                                           aria-label="Site search" type="text" autocomplete="off">
                                    <button class="search__button search__button--type--submit"
                                            type="submit">
                                        <svg width="20px" height="20px">
                                            <use xlink:href="/template/red_stroyka/images/sprite.svg#search-20"></use>
                                        </svg>
                                    </button>
                                    <button class="search__button search__button--type--close"
                                            type="button">
                                        <svg width="20px" height="20px">
                                            <use xlink:href="/template/red_stroyka/images/sprite.svg#cross-20"></use>
                                        </svg>
                                    </button>
                                    <div class="search__border"></div>
                                </form>
                                <div class="search__suggestions suggestions suggestions--location--mobile-header"></div>
                            </div>
                        </div>
                        <div class="mobile-header__indicators">
                            <div class="indicator indicator--mobile-search indicator--mobile d-md-none">
                                <button class="indicator__button">
                                        <span class="indicator__area">
                                            <svg width="20px" height="20px">
                                                <use xlink:href="/template/red_stroyka/images/sprite.svg#search-20"></use>
                                            </svg>
                                        </span>
                                </button>
                            </div>
                            <div class="indicator indicator--mobile d-sm-flex d-none">
                                <a href="#" class="indicator__button">
                                        <span class="indicator__area">
                                            <svg width="20px" height="20px">
                                                <use xlink:href="/template/red_stroyka/images/sprite.svg#heart-20"></use>
                                            </svg>
                                            <span class="indicator__value">0</span>
                                        </span>
                                </a>
                            </div>
                            <div class="indicator indicator--mobile">
                                <a href="/cart/" class="indicator__button">
                                        <span class="indicator__area">
                                            <svg width="20px" height="20px">
                                                <use xlink:href="/template/red_stroyka/images/sprite.svg#cart-20"></use>
                                            </svg>
                                            <span class="indicator__value">3</span>
                                        </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- mobile site__header / end -->
    <!-- desktop site__header -->
    <header class="site__header d-lg-block d-none">
        <div class="site-header">
            <!-- .topbar -->
            <div class="site-header__topbar topbar">
                <div class="topbar__container container">
                    <div class="topbar__row">
                        <div class="topbar__item topbar__item--link">
                            <a class="topbar-link" href="/about/">О нас</a>
                        </div>

                        <div class="topbar__item topbar__item--link">
                            <a class="topbar-link" href="/contacts/">Контакты</a>
                        </div>
                        <div class="topbar__item topbar__item--link">
                            <a class="topbar-link" href="/dostavka/">Доставка</a>
                        </div>
                        <div class="topbar__item topbar__item--link">
                            <a class="topbar-link" href="/oplata/">Оплата</a>
                        </div>
                        <div class="topbar__item topbar__item--link">
                            <a class="topbar-link" href="/anonimnost/">Анонимность</a>
                        </div>

      <div class="topbar__item topbar__item--link">
                            <a class="topbar-link" href="/garantiya/">Гарантия</a>
                        </div>

                        <div class="topbar__spring"></div>
                        <div class="topbar__item">
                            <div class="topbar-dropdown">
                                <?php /*?>

                                <button class="topbar-dropdown__btn" type="button">
                                    Личный кабинет
                                    <svg width="7px" height="5px">
                                        <use xlink:href="/template/red_stroyka/images/sprite.svg#arrow-rounded-down-7x5"></use>
                                    </svg>
                                </button>
                                 <?php */ ?>
                                <div class="topbar-dropdown__body">
                                    <!-- .menu -->
                                    <div class="menu menu--layout--topbar ">
                                        <div class="menu__submenus-container"></div>
                                        <ul class="menu__list">
                                            <li class="menu__item">
                                                <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                <div class="menu__item-submenu-offset"></div>
                                                <a class="menu__item-link"
                                                   href="#">
                                                    Dashboard
                                                </a>
                                            </li>
                                            <li class="menu__item">
                                                <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                <div class="menu__item-submenu-offset"></div>
                                                <a class="menu__item-link"
                                                   href="#">
                                                    Edit Profile
                                                </a>
                                            </li>
                                            <li class="menu__item">
                                                <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                <div class="menu__item-submenu-offset"></div>
                                                <a class="menu__item-link"
                                                   href="#">
                                                    Order History
                                                </a>
                                            </li>
                                            <li class="menu__item">
                                                <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                <div class="menu__item-submenu-offset"></div>
                                                <a class="menu__item-link"
                                                   href="#">
                                                    Addresses
                                                </a>
                                            </li>
                                            <li class="menu__item">
                                                <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                <div class="menu__item-submenu-offset"></div>
                                                <a class="menu__item-link"
                                                   href="#">
                                                    Password
                                                </a>
                                            </li>
                                            <li class="menu__item">
                                                <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                <div class="menu__item-submenu-offset"></div>
                                                <a class="menu__item-link"
                                                   href="#">
                                                    Logout
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- .menu / end -->
                                </div>
                            </div>
                        </div>
                        <div class="topbar__item">
                        </div>
                        <div class="topbar__item">
                            <div class="topbar-dropdown">
                                <button class="topbar-dropdown__btn" type="button">
                                    Город: <span class="topbar__item-value">Москва</span>
                                    <svg width="7px" height="5px">
                                        <use xlink:href="/template/red_stroyka/images/sprite.svg#arrow-rounded-down-7x5"></use>
                                    </svg>
                                </button>
                                <div class="topbar-dropdown__body">
                                    <!-- .menu -->
                                    <div class="menu menu--layout--topbar  menu--with-icons ">
                                        <div class="menu__submenus-container"></div>
                                        <ul class="menu__list">
                                            <li class="menu__item">
                                                <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                <div class="menu__item-submenu-offset"></div>
                                                <a class="menu__item-link" href="">
                                                    <div class="menu__item-icon"><img
                                                                srcset="/template/red_stroyka/images/languages/language-1.png 1x, images/languages/language-1@2x.png 2x"
                                                                src="/template/red_stroyka/images/languages/language-1.png"
                                                                alt=""></div>
                                                    Москва
                                                </a>
                                            </li>
                                            <li class="menu__item">
                                                <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                <div class="menu__item-submenu-offset"></div>
                                                <a class="menu__item-link" href="">
                                                    <div class="menu__item-icon"><img
                                                                srcset="/template/red_stroyka/images/languages/language-2.png 1x, images/languages/language-2@2x.png 2x"
                                                                src="/template/red_stroyka/images/languages/language-2.png"
                                                                alt=""></div>
                                                    Санкт-Петербург
                                                </a>
                                            </li>
                                            <li class="menu__item">
                                                <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                <div class="menu__item-submenu-offset"></div>
                                                <a class="menu__item-link" href="">
                                                    <div class="menu__item-icon"><img
                                                                srcset="/template/red_stroyka/images/languages/language-3.png 1x, images/languages/language-3@2x.png 2x"
                                                                src="/template/red_stroyka/images/languages/language-3.png"
                                                                alt=""></div>
                                                    Нижний Новгород
                                                </a>
                                            </li>
                                            <li class="menu__item">
                                                <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                <div class="menu__item-submenu-offset"></div>
                                                <a class="menu__item-link" href="">
                                                    <div class="menu__item-icon"><img
                                                                srcset="/template/red_stroyka/images/languages/language-4.png 1x, images/languages/language-4@2x.png 2x"
                                                                src="/template/red_stroyka/images/languages/language-4.png"
                                                                alt=""></div>
                                                    Казань
                                                </a>
                                            </li>
                                            <li class="menu__item">
                                                <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                <div class="menu__item-submenu-offset"></div>
                                                <a class="menu__item-link" href="">
                                                    <div class="menu__item-icon"><img
                                                                srcset="/template/red_stroyka/images/languages/language-5.png 1x, images/languages/language-5@2x.png 2x"
                                                                src="/template/red_stroyka/images/languages/language-5.png"
                                                                alt=""></div>
                                                    Ярославль
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- .menu / end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .topbar / end -->
            <div class="site-header__middle container">
                <div class="site-header__logo">
                    <a href="/">
                        <img class="logo-main"
                             src="/template/red_stroyka/images/main/SEXGOD_Logo.svg" alt="">
                        <?php /*?>
                        <svg xmlns="http://www.w3.org/2000/svg" width="196px" height="26px">
                            <path d="M194.797,18 L184,18 C184,18.552 183.552,19 183,19 L182,19 C181.448,19 181,18.552 181,18 L181,16 L178.377,16 C177.708,16 177.119,15.556 176.935,14.912 L173.246,2 L168,2 L168,4 L168.500,4 C169.328,4 170,4.672 170,5.500 L170,24.500 C170,25.328 169.328,26 168.500,26 L165.500,26 C164.672,26 164,25.328 164,24.500 L164,5.500 C164,4.672 164.672,4 165.500,4 L166,4 L166,1.500 C166,0.672 166.672,0 167.500,0 L173.622,0 C174.292,0 174.881,0.444 175.065,1.088 L178.754,14 L181,14 L181,13 C181,12.448 181.448,12 182,12 L183,12 C183.552,12 184,12.448 184,13 L194.797,13 C195.461,13 196,13.539 196,14.203 L196,16.797 C196,17.461 195.461,18 194.797,18 ZM156.783,26 L154.483,26 C153.767,26 153.129,25.552 152.884,24.878 L150.437,18.135 C150.407,18.054 150.331,18 150.245,18 L142.768,18 C142.682,18 142.606,18.054 142.576,18.135 L140.129,24.878 C139.884,25.552 139.245,26 138.530,26 L136.230,26 C135.395,26 134.815,25.169 135.100,24.383 L143.445,1.122 C143.690,0.448 144.328,0 145.044,0 L147.969,0 C148.685,0 149.323,0.448 149.568,1.122 L157.913,24.383 C158.198,25.169 157.618,26 156.783,26 ZM148.472,12.725 L146.698,7.848 C146.633,7.668 146.380,7.668 146.315,7.848 L144.541,12.725 C144.492,12.859 144.591,13 144.733,13 L148.280,13 C148.422,13 148.521,12.859 148.472,12.725 ZM130.493,26 L128.090,26 C127.555,26 127.060,25.714 126.792,25.250 L122.610,18 L120.003,22.520 L120.003,24.500 C120.003,25.328 119.333,26 118.505,26 L116.507,26 C115.680,26 115.009,25.328 115.009,24.500 L115.009,1.500 C115.009,0.672 115.680,0 116.507,0 L118.505,0 C119.333,0 120.003,0.672 120.003,1.500 L120.003,12.520 L126.792,0.750 C127.060,0.286 127.555,0 128.090,0 L130.493,0 C131.646,0 132.367,1.250 131.791,2.250 L125.487,13 L131.791,23.750 C132.367,24.750 131.646,26 130.493,26 ZM103.987,15.775 L103.987,24.500 C103.987,25.328 103.315,26 102.486,26 L100.485,26 C99.656,26 98.984,25.328 98.984,24.500 L98.984,15.775 L98.594,15.100 L91.180,2.250 C90.610,1.250 91.330,0 92.481,0 L94.792,0 C95.322,0 95.823,0.290 96.093,0.750 L101.486,10.090 L106.879,0.750 C107.149,0.290 107.649,0 108.179,0 L110.491,0 C111.641,0 112.362,1.250 111.791,2.250 L103.987,15.775 ZM79,26 C71.821,26 66,20.179 66,13 C66,5.820 71.821,-0.001 79,-0.001 C86.180,-0.001 92.001,5.820 92.001,13 C92.001,20.179 86.180,26 79,26 ZM79,5 C74.582,5 71,8.582 71,13 C71,17.418 74.582,21 79,21 C83.418,21 87,17.418 87,13 C87,8.582 83.418,5 79,5 ZM62.793,23.750 C63.362,24.750 62.643,26 61.494,26 L59.186,26 C58.656,26 58.157,25.710 57.887,25.250 L53.711,18 L49.005,18 L49.005,24.500 C49.005,25.330 48.335,26 47.506,26 L45.508,26 C44.679,26 44.009,25.330 44.009,24.500 L44.009,1.500 C44.009,0.670 44.679,0 45.508,0 L54,0 C58.966,0 62.992,4.030 62.992,9 C62.992,12.240 61.274,15.090 58.706,16.670 L62.793,23.750 ZM54,5 L50.004,5 C49.454,5 49.005,5.450 49.005,6 L49.005,12 C49.005,12.550 49.454,13 50.004,13 L54,13 C56.208,13 57.997,11.210 57.997,9 C57.997,6.790 56.208,5 54,5 ZM39.500,5 L33,5 L33,24.500 C33,25.328 32.328,26 31.500,26 L29.500,26 C28.672,26 28,25.328 28,24.500 L28,5 L21.500,5 C20.672,5 20,4.328 20,3.500 L20,1.500 C20,0.672 20.672,0 21.500,0 L39.500,0 C40.328,0 41,0.672 41,1.500 L41,3.500 C41,4.328 40.328,5 39.500,5 ZM16.487,8 L14.181,8 C13.565,8 13.040,7.611 12.790,7.048 C12.261,5.856 10.765,5 9,5 C6.793,5 5.005,6.340 5.005,8 C5.005,8.940 5.575,9.780 6.483,10.320 C6.706,10.455 6.948,10.574 7.206,10.673 C8.059,11 8.412,12.020 7.955,12.812 L6.948,14.558 C6.573,15.208 5.768,15.499 5.080,15.201 C3.872,14.679 2.815,13.924 1.989,13 C0.751,11.630 0.012,9.890 0.012,8 C0.012,3.580 4.037,0 9,0 C13.254,0 17.017,2.629 17.950,6.163 C18.196,7.095 17.450,8 16.487,8 ZM1.513,18 L3.820,18 C4.435,18 4.960,18.389 5.210,18.952 C5.739,20.144 7.236,21 9,21 C11.207,21 12.995,19.660 12.995,18 C12.995,17.060 12.426,16.220 11.517,15.680 C11.294,15.544 11.052,15.426 10.794,15.327 C9.941,14.999 9.588,13.980 10.045,13.188 L11.053,11.442 C11.427,10.792 12.233,10.501 12.920,10.799 C14.128,11.320 15.185,12.075 16.011,13 C17.249,14.370 17.988,16.110 17.988,18 C17.988,22.420 13.964,26 9,26 C4.747,26 0.983,23.371 0.050,19.837 C-0.196,18.905 0.550,18 1.513,18 Z"></path>
                        </svg>
    <?php */ ?>
                    </a>
                </div>
                <div class="site-header__search">
                    <div class="search search--location--header ">
                        <div class="search__body">
                            <form class="search__form" action="">
                                <input class="search__input" name="search"
                                       placeholder="Более 18000 товаров для вашего удовольствия"
                                       aria-label="Site search" type="text" autocomplete="off">
                                <button class="search__button search__button--type--submit"
                                        type="submit">
                                    <svg width="20px" height="20px">
                                        <use xlink:href="/template/red_stroyka/images/sprite.svg#search-20"></use>
                                    </svg>
                                </button>
                                <div class="search__border"></div>
                            </form>
                            <div class="search__suggestions suggestions suggestions--location--header"></div>
                        </div>
                    </div>
                </div>
                <div class="site-header__phone">
                    <div class="site-header__phone-title">Время работы: Ежедневно с 10:00 до 18:00
                    </div>
                    <div class="site-header__phone-number"><a
                                href="tel:<?= Yii::$app->params['phone']; ?>"><?= Yii::$app->params['phone']; ?>
                            <a/></div>
                </div>
            </div>
            <div class="site-header__nav-panel">
                <!-- data-sticky-mode - one of [pullToShow, alwaysOnTop] -->
                <div class="nav-panel nav-panel--sticky" data-sticky-mode="pullToShow">
                    <div class="nav-panel__container container">
                        <div class="nav-panel__row">
                            <div class="nav-panel__departments">
                                <!-- .departments -->
                                <div class="departments " data-departments-fixed-by="">
                                    <div class="departments__body">
                                        <div class="departments__links-wrapper">
                                            <div class="departments__submenus-container"></div>
                                            <ul class="departments__links">
                                                <li class="departments__item">
                                                    <a class="departments__item-link"
                                                       href="<?= CategoryAbstract::getLinkById(269); ?>">
                                                        <?= CategoryAbstract::getNameById(269); ?>
                                                        <svg class="departments__item-arrow"
                                                             width="6px" height="9px">
                                                            <use xlink:href="/template/red_stroyka/images/sprite.svg#arrow-rounded-right-6x9"></use>
                                                        </svg>
                                                    </a>
                                                    <div class="departments__submenu departments__submenu--type--megamenu departments__submenu--size--xl">
                                                        <!-- .megamenu -->
                                                        <div class="megamenu  megamenu--departments ">
                                                            <div class="megamenu__body"
                                                                 style="">
                                                                <div class="row">
                                                                    <div class="col-3">
                                                                        <ul class="megamenu__links megamenu__links--level--0">
                                                                            <li class="megamenu__item  megamenu__item--with-submenu ">
                                                                                По длине
                                                                                <ul class="megamenu__links megamenu__links--level--1">
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(309); ?>">
                                                                                            <?= CategoryAbstract::getNameById(309); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(294); ?>">
                                                                                            <?= CategoryAbstract::getNameById(294); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(287); ?>">
                                                                                            <?= CategoryAbstract::getNameById(287); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(288); ?>">
                                                                                            <?= CategoryAbstract::getNameById(288); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(302); ?>">
                                                                                            <?= CategoryAbstract::getNameById(302); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(308); ?>">
                                                                                            <?= CategoryAbstract::getNameById(308); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(297); ?>">
                                                                                            <?= CategoryAbstract::getNameById(297); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(295); ?>">
                                                                                            <?= CategoryAbstract::getNameById(295); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(285); ?>">
                                                                                            <?= CategoryAbstract::getNameById(285); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(286); ?>">
                                                                                            <?= CategoryAbstract::getNameById(286); ?></a>
                                                                                    </li>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>

                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <ul class="megamenu__links megamenu__links--level--0">
                                                                            <li class="megamenu__item  megamenu__item--with-submenu ">
                                                                                По цвету
                                                                                <ul class="megamenu__links megamenu__links--level--1">
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(314); ?>">
                                                                                            <?= CategoryAbstract::getNameById(314); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(383); ?>">
                                                                                            <?= CategoryAbstract::getNameById(383); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(348); ?>">
                                                                                            <?= CategoryAbstract::getNameById(348); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(364); ?>">
                                                                                            <?= CategoryAbstract::getNameById(364); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(386); ?>">
                                                                                            <?= CategoryAbstract::getNameById(386); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(333); ?>">
                                                                                            <?= CategoryAbstract::getNameById(333); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(367); ?>">
                                                                                            <?= CategoryAbstract::getNameById(367); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(391); ?>">
                                                                                            <?= CategoryAbstract::getNameById(391); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(363); ?>">
                                                                                            <?= CategoryAbstract::getNameById(363); ?></a>
                                                                                    </li>
                                                                                </ul>

                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <ul class="megamenu__links megamenu__links--level--0">
                                                                            <li class="megamenu__item  megamenu__item--with-submenu ">
                                                                                По материалу
                                                                                <ul class="megamenu__links megamenu__links--level--1">
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(349); ?>">
                                                                                            <?= CategoryAbstract::getNameById(349); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(323); ?>">
                                                                                            <?= CategoryAbstract::getNameById(323); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(368); ?>">
                                                                                            <?= CategoryAbstract::getNameById(368); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(353); ?>">
                                                                                            <?= CategoryAbstract::getNameById(353); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(316); ?>">
                                                                                            <?= CategoryAbstract::getNameById(316); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(281); ?>">
                                                                                            <?= CategoryAbstract::getNameById(281); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(346); ?>">
                                                                                            <?= CategoryAbstract::getNameById(346); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(280); ?>">
                                                                                            <?= CategoryAbstract::getNameById(280); ?></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <ul class="megamenu__links megamenu__links--level--0">
                                                                            <li class="megamenu__item  megamenu__item--with-submenu ">
                                                                                <a href="">По
                                                                                    типу</a>
                                                                                <ul class="megamenu__links megamenu__links--level--1">
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(328); ?>">
                                                                                            <?= CategoryAbstract::getNameById(328); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(283); ?>">
                                                                                            <?= CategoryAbstract::getNameById(283); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(365); ?>">
                                                                                            <?= CategoryAbstract::getNameById(365); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(357); ?>">
                                                                                            <?= CategoryAbstract::getNameById(357); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(271); ?>">
                                                                                            <?= CategoryAbstract::getNameById(271); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(351); ?>">
                                                                                            <?= CategoryAbstract::getNameById(351); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(313); ?>">
                                                                                            <?= CategoryAbstract::getNameById(313); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(337); ?>">
                                                                                            <?= CategoryAbstract::getNameById(337); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(321); ?>">
                                                                                            <?= CategoryAbstract::getNameById(321); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(327); ?>">
                                                                                            <?= CategoryAbstract::getNameById(327); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(334); ?>">
                                                                                            <?= CategoryAbstract::getNameById(334); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(326); ?>">
                                                                                            <?= CategoryAbstract::getNameById(326); ?></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- .megamenu / end -->
                                                    </div>
                                                </li>
                                                <li class="departments__item">
                                                    <a class="departments__item-link"
                                                       href="<?= CategoryAbstract::getLinkById(163); ?>">
                                                        <?= CategoryAbstract::getNameById(163); ?>
                                                        <svg class="departments__item-arrow"
                                                             width="6px" height="9px">
                                                            <use xlink:href="/template/red_stroyka/images/sprite.svg#arrow-rounded-right-6x9"></use>
                                                        </svg>
                                                    </a>
                                                    <div class="departments__submenu departments__submenu--type--megamenu departments__submenu--size--lg">
                                                        <!-- .megamenu -->
                                                        <div class="megamenu  megamenu--departments ">
                                                            <div class="megamenu__body"
                                                                 style="">

                                                                <div class="row">
                                                                    <div class="col-3">
                                                                        <ul class="megamenu__links megamenu__links--level--0">
                                                                            <li class="megamenu__item  megamenu__item--with-submenu ">
                                                                                По размеру
                                                                                <ul class="megamenu__links megamenu__links--level--1">
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(174); ?>">
                                                                                            <?= CategoryAbstract::getNameById(174); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(183); ?>">
                                                                                            <?= CategoryAbstract::getNameById(183); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(172); ?>">
                                                                                            <?= CategoryAbstract::getNameById(172); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(179); ?>">
                                                                                            <?= CategoryAbstract::getNameById(179); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(181); ?>">
                                                                                            <?= CategoryAbstract::getNameById(181); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(182); ?>">
                                                                                            <?= CategoryAbstract::getNameById(182); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(175); ?>">
                                                                                            <?= CategoryAbstract::getNameById(175); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(170); ?>">
                                                                                            <?= CategoryAbstract::getNameById(170); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(184); ?>">
                                                                                            <?= CategoryAbstract::getNameById(184); ?></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                            <li class="megamenu__item  megamenu__item--with-submenu ">
                                                                                Спецпредложения
                                                                                <ul class="megamenu__links megamenu__links--level--1">
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(166); ?>">
                                                                                            <?= CategoryAbstract::getNameById(166); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(259); ?>">
                                                                                            <?= CategoryAbstract::getNameById(259); ?></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <ul class="megamenu__links megamenu__links--level--0">
                                                                            <li class="megamenu__item  megamenu__item--with-submenu ">
                                                                                По цвету
                                                                                <ul class="megamenu__links megamenu__links--level--1">
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(186); ?>">
                                                                                            <?= CategoryAbstract::getNameById(186); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(192); ?>">
                                                                                            <?= CategoryAbstract::getNameById(192); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(210); ?>">
                                                                                            <?= CategoryAbstract::getNameById(210); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(169); ?>">
                                                                                            <?= CategoryAbstract::getNameById(169); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(187); ?>">
                                                                                            <?= CategoryAbstract::getNameById(187); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(185); ?>">
                                                                                            <?= CategoryAbstract::getNameById(185); ?></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <ul class="megamenu__links megamenu__links--level--0">
                                                                            <li class="megamenu__item  megamenu__item--with-submenu ">
                                                                                По материалу
                                                                                <ul class="megamenu__links megamenu__links--level--1">
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(248); ?>">
                                                                                            <?= CategoryAbstract::getNameById(248); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(238); ?>">
                                                                                            <?= CategoryAbstract::getNameById(238); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(167); ?>">
                                                                                            <?= CategoryAbstract::getNameById(167); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(196); ?>">
                                                                                            <?= CategoryAbstract::getNameById(196); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(255); ?>">
                                                                                            <?= CategoryAbstract::getNameById(255); ?></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <ul class="megamenu__links megamenu__links--level--0">
                                                                            <li class="megamenu__item  megamenu__item--with-submenu ">
                                                                                По типу
                                                                                <ul class="megamenu__links megamenu__links--level--1">
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(204); ?>">
                                                                                            <?= CategoryAbstract::getNameById(204); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(245); ?>">
                                                                                            <?= CategoryAbstract::getNameById(245); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(224); ?>">
                                                                                            <?= CategoryAbstract::getNameById(224); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(253); ?>">
                                                                                            <?= CategoryAbstract::getNameById(253); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(255); ?>">
                                                                                            <?= CategoryAbstract::getNameById(255); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(208); ?>">
                                                                                            <?= CategoryAbstract::getNameById(208); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(193); ?>">
                                                                                            <?= CategoryAbstract::getNameById(193); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(200); ?>">
                                                                                            <?= CategoryAbstract::getNameById(200); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(168); ?>">
                                                                                            <?= CategoryAbstract::getNameById(168); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(233); ?>">
                                                                                            <?= CategoryAbstract::getNameById(233); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(242); ?>">
                                                                                            <?= CategoryAbstract::getNameById(242); ?></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- .megamenu / end -->
                                                    </div>
                                                </li>
                                                <li class="departments__item">
                                                    <a class="departments__item-link"
                                                       href="<?= CategoryAbstract::getLinkById(492); ?>">
                                                        <?= CategoryAbstract::getNameById(492); ?>
                                                        <svg class="departments__item-arrow"
                                                             width="6px" height="9px">
                                                            <use xlink:href="/template/red_stroyka/images/sprite.svg#arrow-rounded-right-6x9"></use>
                                                        </svg>
                                                    </a>
                                                    <div class="departments__submenu departments__submenu--type--megamenu departments__submenu--size--sm">
                                                        <!-- .megamenu -->
                                                        <div class="megamenu  megamenu--departments ">
                                                            <div class="megamenu__body"
                                                                 style="">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <ul class="megamenu__links megamenu__links--level--0">
                                                                            <li class="megamenu__item  megamenu__item--with-submenu ">
                                                                                Бренды
                                                                                <ul class="megamenu__links megamenu__links--level--1">
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(497); ?>">
                                                                                            <?= CategoryAbstract::getNameById(497); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(496); ?>">
                                                                                            <?= CategoryAbstract::getNameById(496); ?></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                            <li class="megamenu__item  megamenu__item--with-submenu ">
                                                                                По типу
                                                                                <ul class="megamenu__links megamenu__links--level--1">
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(495); ?>">
                                                                                            <?= CategoryAbstract::getNameById(495); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(500); ?>">
                                                                                            <?= CategoryAbstract::getNameById(500); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(502); ?>">
                                                                                            <?= CategoryAbstract::getNameById(502); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(506); ?>">
                                                                                            <?= CategoryAbstract::getNameById(506); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(508); ?>">
                                                                                            <?= CategoryAbstract::getNameById(508); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(518); ?>">
                                                                                            <?= CategoryAbstract::getNameById(518); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(519); ?>">
                                                                                            <?= CategoryAbstract::getNameById(519); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(520); ?>">
                                                                                            <?= CategoryAbstract::getNameById(520); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(521); ?>">
                                                                                            <?= CategoryAbstract::getNameById(521); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(524); ?>">
                                                                                            <?= CategoryAbstract::getNameById(524); ?></a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="<?= CategoryAbstract::getLinkById(533); ?>">
                                                                                            <?= CategoryAbstract::getNameById(533); ?></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- .megamenu / end -->
                                                    </div>
                                                </li>
                                                <li class="departments__item">
                                                    <a class="departments__item-link"
                                                       href="<?= CategoryAbstract::getLinkById(685); ?>">
                                                        <?= CategoryAbstract::getNameById(685); ?></a>
                                                    <svg class="departments__item-arrow"
                                                         width="6px" height="9px">
                                                        <use xlink:href="/template/red_stroyka/images/sprite.svg#arrow-rounded-right-6x9"></use>
                                                    </svg>
                                                    </a>
                                                    <div class="departments__submenu departments__submenu--type--megamenu departments__submenu--size--sm">
                                                        <!-- .megamenu -->
                                                        <div class="megamenu  megamenu--departments ">
                                                            <div class="megamenu__body">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <ul class="megamenu__links megamenu__links--level--0">
                                                                            <li class="megamenu__item  megamenu__item--with-submenu ">
                                                                                <a href="">Hand
                                                                                    Tools</a>
                                                                                <ul class="megamenu__links megamenu__links--level--1">
                                                                                    <li class="megamenu__item">
                                                                                        <a href="">Screwdrivers</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="">Handsaws</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="">Knives</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="">Axes</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="">Multitools</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="">Paint
                                                                                            Tools</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                            <li class="megamenu__item  megamenu__item--with-submenu ">
                                                                                <a href="">Garden
                                                                                    Equipment</a>
                                                                                <ul class="megamenu__links megamenu__links--level--1">
                                                                                    <li class="megamenu__item">
                                                                                        <a href="">Motor
                                                                                            Pumps</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="">Chainsaws</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="">Electric
                                                                                            Saws</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item">
                                                                                        <a href="">Brush
                                                                                            Cutters</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- .megamenu / end -->
                                                    </div>
                                                </li>
                                                <li class="departments__item">
                                                    <a class="departments__item-link"
                                                       href="<?= CategoryAbstract::getLinkById(449); ?>">
                                                        <?= CategoryAbstract::getNameById(449); ?>
                                                        <svg class="departments__item-arrow"
                                                             width="6px" height="9px">
                                                            <use xlink:href="/template/red_stroyka/images/sprite.svg#arrow-rounded-right-6x9"></use>
                                                        </svg>
                                                    </a>
                                                    <div class="departments__submenu departments__submenu--type--menu">
                                                        <!-- .menu -->
                                                        <div class="menu menu--layout--classic ">
                                                            <div class="menu__submenus-container"></div>
                                                            <ul class="menu__list">
                                                                <li class="menu__item">
                                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                                    <div class="menu__item-submenu-offset"></div>
                                                                    <a class="menu__item-link"
                                                                       href="<?= CategoryAbstract::getLinkById(450); ?>">
                                                                        <?= CategoryAbstract::getNameById(450); ?>
                                                                    </a>
                                                                </li>
                                                                <li class="menu__item">
                                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                                    <div class="menu__item-submenu-offset"></div>
                                                                    <a class="menu__item-link"
                                                                       href="<?= CategoryAbstract::getLinkById(451); ?>">
                                                                        <?= CategoryAbstract::getNameById(451); ?>
                                                                    </a>
                                                                </li>
                                                                <li class="menu__item">
                                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                                    <div class="menu__item-submenu-offset"></div>
                                                                    <a class="menu__item-link"
                                                                       href="<?= CategoryAbstract::getLinkById(452); ?>">
                                                                        <?= CategoryAbstract::getNameById(452); ?>
                                                                    </a>
                                                                </li>
                                                                <li class="menu__item">
                                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                                    <div class="menu__item-submenu-offset"></div>
                                                                    <a class="menu__item-link"
                                                                       href="<?= CategoryAbstract::getLinkById(453); ?>">
                                                                        <?= CategoryAbstract::getNameById(453); ?>
                                                                    </a>
                                                                </li>
                                                                <li class="menu__item">
                                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                                    <div class="menu__item-submenu-offset"></div>
                                                                    <a class="menu__item-link"
                                                                       href="<?= CategoryAbstract::getLinkById(454); ?>">
                                                                        <?= CategoryAbstract::getNameById(454); ?>
                                                                    </a>
                                                                </li>
                                                                <li class="menu__item">
                                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                                    <div class="menu__item-submenu-offset"></div>
                                                                    <a class="menu__item-link"
                                                                       href="<?= CategoryAbstract::getLinkById(455); ?>">
                                                                        <?= CategoryAbstract::getNameById(455); ?>
                                                                    </a>
                                                                </li>
                                                                <li class="menu__item">
                                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                                    <div class="menu__item-submenu-offset"></div>
                                                                    <a class="menu__item-link"
                                                                       href="<?= CategoryAbstract::getLinkById(456); ?>">
                                                                        <?= CategoryAbstract::getNameById(456); ?>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <!-- .menu / end -->
                                                    </div>
                                                </li>
                                                <li class="departments__item">
                                                    <a class="departments__item-link"
                                                       href="<?= CategoryAbstract::getLinkById(269); ?>">
                                                        <?= CategoryAbstract::getNameById(269); ?>
                                                    </a>
                                                </li>
                                                <li class="departments__item">
                                                    <a class="departments__item-link"
                                                       href="<?= CategoryAbstract::getLinkById(457); ?>">
                                                        <?= CategoryAbstract::getNameById(457); ?>
                                                    </a>
                                                </li>
                                                <li class="departments__item">
                                                    <a class="departments__item-link"
                                                       href="<?= CategoryAbstract::getLinkById(468); ?>">
                                                        <?= CategoryAbstract::getNameById(468); ?>
                                                    </a>
                                                </li>
                                                <li class="departments__item">
                                                    <a class="departments__item-link"
                                                       href="<?= CategoryAbstract::getLinkById(478); ?>">
                                                        <?= CategoryAbstract::getNameById(478); ?>
                                                    </a>
                                                </li>
                                                <li class="departments__item">
                                                    <a class="departments__item-link"
                                                       href="<?= CategoryAbstract::getLinkById(484); ?>">
                                                        <?= CategoryAbstract::getNameById(484); ?>
                                                    </a>
                                                </li>
                                                <li class="departments__item">
                                                    <a class="departments__item-link"
                                                       href="<?= CategoryAbstract::getLinkById(490); ?>">
                                                        <?= CategoryAbstract::getNameById(490); ?>
                                                    </a>
                                                </li>
                                                <li class="departments__item">
                                                    <a class="departments__item-link"
                                                       href="<?= CategoryAbstract::getLinkById(491); ?>">
                                                        <?= CategoryAbstract::getNameById(491); ?>
                                                    </a>
                                                </li>
                                                <li class="departments__item">
                                                    <a class="departments__item-link"
                                                       href="<?= CategoryAbstract::getLinkById(100); ?>">
                                                        <?= CategoryAbstract::getNameById(100); ?>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <button class="departments__button">
                                        <svg class="departments__button-icon" width="18px"
                                             height="14px">
                                            <use xlink:href="/template/red_stroyka/images/sprite.svg#menu-18x14"></use>
                                        </svg>
                                        Секс-Игрушки
                                        <svg class="departments__button-arrow" width="9px"
                                             height="6px">
                                            <use xlink:href="/template/red_stroyka/images/sprite.svg#arrow-rounded-down-9x6"></use>
                                        </svg>
                                    </button>
                                </div>
                                <!-- .departments / end -->
                            </div>
                            <!-- .nav-links -->
                            <div class="nav-panel__nav-links nav-links">
                                <ul class="nav-links__list">
                                    <li class="nav-links__item  nav-links__item--has-submenu ">
                                        <a class="nav-links__item-link">
                                            <div class="nav-links__item-body">
                                                Женщинам
                                                <svg class="nav-links__item-arrow" width="9px"
                                                     height="6px">
                                                    <use xlink:href="/template/red_stroyka/images/sprite.svg#arrow-rounded-down-9x6"></use>
                                                </svg>
                                            </div>
                                        </a>
                                        <div class="nav-links__submenu nav-links__submenu--type--menu">
                                            <!-- .menu -->
                                            <div class="menu menu--layout--classic ">
                                                <div class="menu__submenus-container"></div>
                                                <ul class="menu__list">
                                                    <li class="menu__item">
                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                        <div class="menu__item-submenu-offset"></div>
                                                        <a class="menu__item-link"
                                                           href="<?= CategoryAbstract::getLinkById(269); ?>">
                                                            <?= CategoryAbstract::getNameById(269); ?>
                                                        </a>
                                                    </li>
                                                    <li class="menu__item">
                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                        <div class="menu__item-submenu-offset"></div>
                                                        <a class="menu__item-link"
                                                           href="<?= CategoryAbstract::getLinkById(163); ?>">
                                                            <?= CategoryAbstract::getNameById(163); ?>
                                                        </a>
                                                    </li>
                                                    <li class="menu__item">
                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                        <div class="menu__item-submenu-offset"></div>
                                                        <a class="menu__item-link"
                                                           href="<?= CategoryAbstract::getLinkById(717); ?>">
                                                            <?= CategoryAbstract::getNameById(717); ?>
                                                        </a>
                                                    </li>
                                                    <li class="menu__item">
                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                        <div class="menu__item-submenu-offset"></div>
                                                        <a class="menu__item-link"
                                                           href="<?= CategoryAbstract::getLinkById(592); ?>">
                                                            <?= CategoryAbstract::getNameById(592); ?>
                                                        </a>
                                                    </li>
                                                    <li class="menu__item">
                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                        <div class="menu__item-submenu-offset"></div>
                                                        <a class="menu__item-link"
                                                           href="<?= CategoryAbstract::getLinkById(101); ?>">
                                                            <?= CategoryAbstract::getNameById(101); ?>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- .menu / end -->
                                        </div>
                                    </li>
                                    <li class="nav-links__item  nav-links__item--has-submenu ">
                                        <a class="nav-links__item-link" href="">
                                            <div class="nav-links__item-body">
                                                Мужчинам
                                                <svg class="nav-links__item-arrow" width="9px"
                                                     height="6px">
                                                    <use xlink:href="/template/red_stroyka/images/sprite.svg#arrow-rounded-down-9x6"></use>
                                                </svg>
                                            </div>
                                        </a>
                                        <div class="nav-links__submenu nav-links__submenu--type--megamenu nav-links__submenu--size--nl">
                                            <!-- .megamenu -->
                                            <div class="megamenu ">
                                                <div class="megamenu__body">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <ul class="megamenu__links megamenu__links--level--0">
                                                                <li class="megamenu__item  megamenu__item--with-submenu ">
                                                                    <a href="">Power Tools</a>
                                                                    <ul class="megamenu__links megamenu__links--level--1">
                                                                        <li class="megamenu__item">
                                                                            <a href="">Engravers</a>
                                                                        </li>
                                                                        <li class="megamenu__item">
                                                                            <a href="">Wrenches</a>
                                                                        </li>
                                                                        <li class="megamenu__item">
                                                                            <a href="">Wall
                                                                                Chaser</a></li>
                                                                        <li class="megamenu__item">
                                                                            <a href="">Pneumatic
                                                                                Tools</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="megamenu__item  megamenu__item--with-submenu ">
                                                                    <a href="">Machine Tools</a>
                                                                    <ul class="megamenu__links megamenu__links--level--1">
                                                                        <li class="megamenu__item">
                                                                            <a href="">Thread
                                                                                Cutting</a></li>
                                                                        <li class="megamenu__item">
                                                                            <a href="">Chip
                                                                                Blowers</a></li>
                                                                        <li class="megamenu__item">
                                                                            <a href="">Sharpening
                                                                                Machines</a></li>
                                                                        <li class="megamenu__item">
                                                                            <a href="">Pipe
                                                                                Cutters</a></li>
                                                                        <li class="megamenu__item">
                                                                            <a href="">Slotting
                                                                                machines</a></li>
                                                                        <li class="megamenu__item">
                                                                            <a href="">Lathes</a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-6">
                                                            <ul class="megamenu__links megamenu__links--level--0">
                                                                <li class="megamenu__item  megamenu__item--with-submenu ">
                                                                    <a href="">Hand Tools</a>
                                                                    <ul class="megamenu__links megamenu__links--level--1">
                                                                        <li class="megamenu__item">
                                                                            <a href="">Screwdrivers</a>
                                                                        </li>
                                                                        <li class="megamenu__item">
                                                                            <a href="">Handsaws</a>
                                                                        </li>
                                                                        <li class="megamenu__item">
                                                                            <a href="">Knives</a>
                                                                        </li>
                                                                        <li class="megamenu__item">
                                                                            <a href="">Axes</a></li>
                                                                        <li class="megamenu__item">
                                                                            <a href="">Multitools</a>
                                                                        </li>
                                                                        <li class="megamenu__item">
                                                                            <a href="">Paint
                                                                                Tools</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="megamenu__item  megamenu__item--with-submenu ">
                                                                    <a href="">Garden Equipment</a>
                                                                    <ul class="megamenu__links megamenu__links--level--1">
                                                                        <li class="megamenu__item">
                                                                            <a href="">Motor
                                                                                Pumps</a></li>
                                                                        <li class="megamenu__item">
                                                                            <a href="">Chainsaws</a>
                                                                        </li>
                                                                        <li class="megamenu__item">
                                                                            <a href="">Electric
                                                                                Saws</a></li>
                                                                        <li class="megamenu__item">
                                                                            <a href="">Brush
                                                                                Cutters</a></li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- .megamenu / end -->
                                        </div>
                                    </li>
                                    <li class="nav-links__item  nav-links__item--has-submenu ">
                                        <a class="nav-links__item-link"
                                           href="#">
                                            <div class="nav-links__item-body">
                                                Парам
                                                <svg class="nav-links__item-arrow" width="9px"
                                                     height="6px">
                                                    <use xlink:href="/template/red_stroyka/images/sprite.svg#arrow-rounded-down-9x6"></use>
                                                </svg>
                                            </div>
                                        </a>
                                        <div class="nav-links__submenu nav-links__submenu--type--menu">
                                            <!-- .menu -->
                                            <div class="menu menu--layout--classic ">
                                                <div class="menu__submenus-container"></div>
                                                <ul class="menu__list">
                                                    <li class="menu__item">
                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                        <div class="menu__item-submenu-offset"></div>
                                                        <a class="menu__item-link"
                                                           href="#">
                                                            Shop Grid
                                                            <svg class="menu__item-arrow"
                                                                 width="6px" height="9px">
                                                                <use xlink:href="/template/red_stroyka/images/sprite.svg#arrow-rounded-right-6x9"></use>
                                                            </svg>
                                                        </a>
                                                        <div class="menu__submenu">
                                                            <!-- .menu -->
                                                            <div class="menu menu--layout--classic ">
                                                                <div class="menu__submenus-container"></div>
                                                                <ul class="menu__list">
                                                                    <li class="menu__item">
                                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                                        <div class="menu__item-submenu-offset"></div>
                                                                        <a class="menu__item-link"
                                                                           href="#">
                                                                            3 Columns Sidebar
                                                                        </a>
                                                                    </li>
                                                                    <li class="menu__item">
                                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                                        <div class="menu__item-submenu-offset"></div>
                                                                        <a class="menu__item-link"
                                                                           href="#">
                                                                            4 Columns Full
                                                                        </a>
                                                                    </li>
                                                                    <li class="menu__item">
                                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                                        <div class="menu__item-submenu-offset"></div>
                                                                        <a class="menu__item-link"
                                                                           href="#">
                                                                            5 Columns Full
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <!-- .menu / end -->
                                                        </div>
                                                    </li>
                                                    <li class="menu__item">
                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                        <div class="menu__item-submenu-offset"></div>
                                                        <a class="menu__item-link"
                                                           href="#">
                                                            Shop List
                                                        </a>
                                                    </li>
                                                    <li class="menu__item">
                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                        <div class="menu__item-submenu-offset"></div>
                                                        <a class="menu__item-link"
                                                           href="#">
                                                            Shop Right Sidebar
                                                        </a>
                                                    </li>
                                                    <li class="menu__item">
                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                        <div class="menu__item-submenu-offset"></div>
                                                        <a class="menu__item-link"
                                                           href="#">
                                                            Product
                                                            <svg class="menu__item-arrow"
                                                                 width="6px" height="9px">
                                                                <use xlink:href="/template/red_stroyka/images/sprite.svg#arrow-rounded-right-6x9"></use>
                                                            </svg>
                                                        </a>
                                                        <div class="menu__submenu">
                                                            <!-- .menu -->
                                                            <div class="menu menu--layout--classic ">
                                                                <div class="menu__submenus-container"></div>
                                                                <ul class="menu__list">
                                                                    <li class="menu__item">
                                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                                        <div class="menu__item-submenu-offset"></div>
                                                                        <a class="menu__item-link"
                                                                           href="#">
                                                                            Product
                                                                        </a>
                                                                    </li>
                                                                    <li class="menu__item">
                                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                                        <div class="menu__item-submenu-offset"></div>
                                                                        <a class="menu__item-link"
                                                                           href="#">
                                                                            Product Alt
                                                                        </a>
                                                                    </li>
                                                                    <li class="menu__item">
                                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                                        <div class="menu__item-submenu-offset"></div>
                                                                        <a class="menu__item-link"
                                                                           href="#">
                                                                            Product Sidebar
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <!-- .menu / end -->
                                                        </div>
                                                    </li>
                                                    <li class="menu__item">
                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                        <div class="menu__item-submenu-offset"></div>
                                                        <a class="menu__item-link" href="/cart/">
                                                            Cart
                                                        </a>
                                                    </li>
                                                    <li class="menu__item">
                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                        <div class="menu__item-submenu-offset"></div>
                                                        <a class="menu__item-link"
                                                           href="#">
                                                            Cart Empty
                                                        </a>
                                                    </li>
                                                    <li class="menu__item">
                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                        <div class="menu__item-submenu-offset"></div>
                                                        <a class="menu__item-link"
                                                           href="#">
                                                            Checkout
                                                        </a>
                                                    </li>
                                                    <li class="menu__item">
                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                        <div class="menu__item-submenu-offset"></div>
                                                        <a class="menu__item-link"
                                                           href="#">
                                                            Order Success
                                                        </a>
                                                    </li>
                                                    <li class="menu__item">
                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                        <div class="menu__item-submenu-offset"></div>
                                                        <a class="menu__item-link"
                                                           href="#">
                                                            Wishlist
                                                        </a>
                                                    </li>
                                                    <li class="menu__item">
                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                        <div class="menu__item-submenu-offset"></div>
                                                        <a class="menu__item-link"
                                                           href="#">
                                                            Compare
                                                        </a>
                                                    </li>
                                                    <li class="menu__item">
                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                        <div class="menu__item-submenu-offset"></div>
                                                        <a class="menu__item-link"
                                                           href="#">
                                                            Track Order
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- .menu / end -->
                                        </div>
                                    </li>
                                    <li class="nav-links__item  nav-links__item--has-submenu ">
                                        <a class="nav-links__item-link" href="#">
                                            <div class="nav-links__item-body">
                                                BDSM
                                                <svg class="nav-links__item-arrow" width="9px"
                                                     height="6px">
                                                    <use xlink:href="/template/red_stroyka/images/sprite.svg#arrow-rounded-down-9x6"></use>
                                                </svg>
                                            </div>
                                        </a>
                                        <div class="nav-links__submenu nav-links__submenu--type--menu">
                                            <!-- .menu -->
                                            <div class="menu menu--layout--classic ">
                                                <div class="menu__submenus-container"></div>
                                                <ul class="menu__list">
                                                    <li class="menu__item">
                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                        <div class="menu__item-submenu-offset"></div>
                                                        <a class="menu__item-link"
                                                           href="#">
                                                            Login
                                                        </a>
                                                    </li>
                                                    <li class="menu__item">
                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                        <div class="menu__item-submenu-offset"></div>
                                                        <a class="menu__item-link"
                                                           href="#">
                                                            Dashboard
                                                        </a>
                                                    </li>
                                                    <li class="menu__item">
                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                        <div class="menu__item-submenu-offset"></div>
                                                        <a class="menu__item-link"
                                                           href="#">
                                                            Edit Profile
                                                        </a>
                                                    </li>
                                                    <li class="menu__item">
                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                        <div class="menu__item-submenu-offset"></div>
                                                        <a class="menu__item-link"
                                                           href="#">
                                                            Order History
                                                        </a>
                                                    </li>
                                                    <li class="menu__item">
                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                        <div class="menu__item-submenu-offset"></div>
                                                        <a class="menu__item-link"
                                                           href="#">
                                                            Order Details
                                                        </a>
                                                    </li>
                                                    <li class="menu__item">
                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                        <div class="menu__item-submenu-offset"></div>
                                                        <a class="menu__item-link"
                                                           href="#">
                                                            Address Book
                                                        </a>
                                                    </li>
                                                    <li class="menu__item">
                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                        <div class="menu__item-submenu-offset"></div>
                                                        <a class="menu__item-link"
                                                           href="#">
                                                            Edit Address
                                                        </a>
                                                    </li>
                                                    <li class="menu__item">
                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                        <div class="menu__item-submenu-offset"></div>
                                                        <a class="menu__item-link"
                                                           href="#">
                                                            Change Password
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- .menu / end -->
                                        </div>
                                    </li>
                                    <li class="nav-links__item  nav-links__item--has-submenu ">
                                        <a class="nav-links__item-link" href="#">
                                            <div class="nav-links__item-body">
                                                Одежда
                                                <svg class="nav-links__item-arrow" width="9px"
                                                     height="6px">
                                                    <use xlink:href="/template/red_stroyka/images/sprite.svg#arrow-rounded-down-9x6"></use>
                                                </svg>
                                            </div>
                                        </a>
                                        <div class="nav-links__submenu nav-links__submenu--type--menu">
                                            <!-- .menu -->
                                            <div class="menu menu--layout--classic ">
                                                <div class="menu__submenus-container"></div>
                                                <ul class="menu__list">
                                                    <li class="menu__item">
                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                        <div class="menu__item-submenu-offset"></div>
                                                        <a class="menu__item-link"
                                                           href="#">
                                                            Blog Classic
                                                        </a>
                                                    </li>
                                                    <li class="menu__item">
                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                        <div class="menu__item-submenu-offset"></div>
                                                        <a class="menu__item-link"
                                                           href="#">
                                                            Blog Grid
                                                        </a>
                                                    </li>
                                                    <li class="menu__item">
                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                        <div class="menu__item-submenu-offset"></div>
                                                        <a class="menu__item-link"
                                                           href="#">
                                                            Blog List
                                                        </a>
                                                    </li>
                                                    <li class="menu__item">
                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                        <div class="menu__item-submenu-offset"></div>
                                                        <a class="menu__item-link"
                                                           href="#">
                                                            Blog Left Sidebar
                                                        </a>
                                                    </li>
                                                    <li class="menu__item">
                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                        <div class="menu__item-submenu-offset"></div>
                                                        <a class="menu__item-link" href="#">
                                                            Post Page
                                                        </a>
                                                    </li>
                                                    <li class="menu__item">
                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                        <div class="menu__item-submenu-offset"></div>
                                                        <a class="menu__item-link"
                                                           href="#">
                                                            Post Without Sidebar
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- .menu / end -->
                                        </div>
                                    </li>
                                    <li class="nav-links__item  nav-links__item--has-submenu ">
                                        <a class="nav-links__item-link" href="">
                                            <div class="nav-links__item-body">
                                                Смазки
                                                <svg class="nav-links__item-arrow" width="9px"
                                                     height="6px">
                                                    <use xlink:href="/template/red_stroyka/images/sprite.svg#arrow-rounded-down-9x6"></use>
                                                </svg>
                                            </div>
                                        </a>
                                        <div class="nav-links__submenu nav-links__submenu--type--menu">
                                            <!-- .menu -->
                                            <div class="menu menu--layout--classic ">
                                                <div class="menu__submenus-container"></div>
                                                <ul class="menu__list">
                                                    <li class="menu__item">
                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                        <div class="menu__item-submenu-offset"></div>
                                                        <a class="menu__item-link"
                                                           href="#">
                                                            About Us
                                                        </a>
                                                    </li>
                                                    <li class="menu__item">
                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                        <div class="menu__item-submenu-offset"></div>
                                                        <a class="menu__item-link"
                                                           href="#">
                                                            Contact Us
                                                        </a>
                                                    </li>
                                                    <li class="menu__item">
                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                        <div class="menu__item-submenu-offset"></div>
                                                        <a class="menu__item-link"
                                                           href="#">
                                                            Contact Us Alt
                                                        </a>
                                                    </li>
                                                    <li class="menu__item">
                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                        <div class="menu__item-submenu-offset"></div>
                                                        <a class="menu__item-link" href="#">
                                                            404
                                                        </a>
                                                    </li>
                                                    <li class="menu__item">
                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                        <div class="menu__item-submenu-offset"></div>
                                                        <a class="menu__item-link"
                                                           href="#">
                                                            Terms And Conditions
                                                        </a>
                                                    </li>
                                                    <li class="menu__item">
                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                        <div class="menu__item-submenu-offset"></div>
                                                        <a class="menu__item-link" href="#">
                                                            FAQ
                                                        </a>
                                                    </li>
                                                    <li class="menu__item">
                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                        <div class="menu__item-submenu-offset"></div>
                                                        <a class="menu__item-link"
                                                           href="#">
                                                            Components
                                                        </a>
                                                    </li>
                                                    <li class="menu__item">
                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                        <div class="menu__item-submenu-offset"></div>
                                                        <a class="menu__item-link"
                                                           href="#">
                                                            Typography
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- .menu / end -->
                                        </div>
                                    </li>
                                    <li class="nav-links__item  nav-links__item--has-submenu ">
                                        <a class="nav-links__item-link" href="">
                                            <div class="nav-links__item-body">
                                                Полезное
                                                <svg class="nav-links__item-arrow" width="9px"
                                                     height="6px">
                                                    <use xlink:href="/template/red_stroyka/images/sprite.svg#arrow-rounded-down-9x6"></use>
                                                </svg>
                                            </div>
                                        </a>
                                        <div class="nav-links__submenu nav-links__submenu--type--menu">
                                            <!-- .menu -->
                                            <div class="menu menu--layout--classic ">
                                                <div class="menu__submenus-container"></div>
                                                <ul class="menu__list">
                                                    <li class="menu__item">
                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                        <div class="menu__item-submenu-offset"></div>
                                                        <a class="menu__item-link"
                                                           href="#">
                                                            Презервативы
                                                        </a>
                                                    </li>
                                                    <li class="menu__item">
                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                        <div class="menu__item-submenu-offset"></div>
                                                        <a class="menu__item-link"
                                                           href="#">
                                                            Сувениры
                                                        </a>
                                                    </li>
                                                    <li class="menu__item">
                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                        <div class="menu__item-submenu-offset"></div>
                                                        <a class="menu__item-link"
                                                           href="#">
                                                            Эротические игры
                                                        </a>
                                                    </li>
                                                    <li class="menu__item">
                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                        <div class="menu__item-submenu-offset"></div>
                                                        <a class="menu__item-link" href="#">
                                                            Секс-Мебель
                                                        </a>
                                                    </li>
                                                    <li class="menu__item">
                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                        <div class="menu__item-submenu-offset"></div>
                                                        <a class="menu__item-link"
                                                           href="#">
                                                            Возбуждающие средства
                                                        </a>
                                                    </li>
                                                    <li class="menu__item">
                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                        <div class="menu__item-submenu-offset"></div>
                                                        <a class="menu__item-link" href="#">
                                                            Феромоны
                                                        </a>
                                                    </li>
                                                    <li class="menu__item">
                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                        <div class="menu__item-submenu-offset"></div>
                                                        <a class="menu__item-link"
                                                           href="#">
                                                            Интимная гигиена
                                                        </a>
                                                    </li>
                                                    <li class="menu__item">
                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                        <div class="menu__item-submenu-offset"></div>
                                                        <a class="menu__item-link"
                                                           href="#">
                                                            Typography
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- .menu / end -->
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- .nav-links / end -->
                            <div class="nav-panel__indicators">
                                <div class="indicator">
                                    <a href="#" class="indicator__button">
                                            <span class="indicator__area">
                                                <svg width="20px" height="20px">
                                                    <use xlink:href="/template/red_stroyka/images/sprite.svg#heart-20"></use>
                                                </svg>
                                                <span class="indicator__value">0</span>
                                            </span>
                                    </a>
                                </div>
                                <div class="indicator indicator--trigger--click">
                                    <a href="/cart/" class="indicator__button">
                                            <span class="indicator__area">
                                                <svg width="20px" height="20px">
                                                    <use xlink:href="/template/red_stroyka/images/sprite.svg#cart-20"></use>
                                                </svg>
                                                <span class="indicator__value getCountItems"><?= Yii::$app->cart->countItems; ?></span>
                                            </span>
                                    </a>
                                    <div class="indicator__dropdown">
                                        <!-- .dropcart -->
                                        <div class="dropcart dropcart--style--dropdown">
                                            <div class="dropcart__body">
                                                <div class="dropcart__products-list">
                                                    <?php if (\Yii::$app->cart->returnProductModelsInCart()): ?>
                                                        <?= $this->render('@frontend/views/site/sexgod/good/_item_in_drop_cart', [
                                                            'products' => \Yii::$app->cart->returnProductModelsInCart()
                                                        ]); ?>

                                                    <?php endif; ?>
                                                </div>

                                                <div class="dropcart__totals">
                                                    <table>
                                                        <!--                                                        <tr>-->
                                                        <!--                                                            <th>Подитог:</th>-->
                                                        <!--                                                            <td>$5,877.00</td>-->
                                                        <!--                                                        </tr>-->
                                                        <tr>
                                                            <th>Доставка:</th>
                                                            <td>0 руб.</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Итого:</th>
                                                            <td class="fullTotalCartClass"><?= \frontend\abstractComponents\helpers\CommonHelper::formatPrice(Yii::$app->cart->returnCartFullPrice()); ?></td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <div class="dropcart__buttons">
                                                    <a class="btn btn-secondary" href="/cart/">Корзина</a>
                                                    <a class="btn btn-primary" href="/cart/"">Оформить</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .dropcart / end -->
                                    </div>
                                </div>
                                <div class="indicator indicator--trigger--click">
                                    <a href="/cart/" class="indicator__button">
                                            <span class="indicator__area">
                                                <svg width="20px" height="20px">
                                                    <use xlink:href="/template/red_stroyka/images/sprite.svg#person-20"></use>
                                                </svg>
                                            </span>
                                    </a>
                                    <div class="indicator__dropdown">
                                        <div class="account-menu">
                                            <form class="account-menu__form">
                                                <div class="account-menu__form-title">Log In to Your
                                                    Account
                                                </div>
                                                <div class="form-group">
                                                    <label for="header-signin-email"
                                                           class="sr-only">Email address</label>
                                                    <input id="header-signin-email" type="email"
                                                           class="form-control form-control-sm"
                                                           placeholder="Email address">
                                                </div>
                                                <div class="form-group">
                                                    <label for="header-signin-password"
                                                           class="sr-only">Password</label>
                                                    <div class="account-menu__form-forgot">
                                                        <input id="header-signin-password"
                                                               type="password"
                                                               class="form-control form-control-sm"
                                                               placeholder="Password">
                                                        <a href=""
                                                           class="account-menu__form-forgot-link">Forgot?</a>
                                                    </div>
                                                </div>
                                                <div class="form-group account-menu__form-button">
                                                    <button type="submit"
                                                            class="btn btn-primary btn-sm">Login
                                                    </button>
                                                </div>
                                                <div class="account-menu__form-link"><a
                                                            href="#">Create An
                                                        Account</a></div>
                                            </form>
                                            <div class="account-menu__divider"></div>
                                            <a href="#"
                                               class="account-menu__user">
                                                <div class="account-menu__user-avatar">
                                                    <img src="/template/red_stroyka/images/avatars/avatar-3.jpg"
                                                         alt="">
                                                </div>
                                                <div class="account-menu__user-info">
                                                    <div class="account-menu__user-name">Helena
                                                        Garcia
                                                    </div>
                                                    <div class="account-menu__user-email">
                                                        stroyka@example.com
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="account-menu__divider"></div>
                                            <ul class="account-menu__links">
                                                <li><a href="#">Edit Profile</a>
                                                </li>
                                                <li><a href="#">Order History</a>
                                                </li>
                                                <li><a href="#">Addresses</a>
                                                </li>
                                                <li><a href="#">Password</a>
                                                </li>
                                            </ul>
                                            <div class="account-menu__divider"></div>
                                            <ul class="account-menu__links">
                                                <li><a href="#">Logout</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="site__body">

        <div class="page-header__container container">
            <div class="page-header__breadcrumb">
                <?= Breadcrumbs::widget([
                        'itemTemplate' => "<li class=\"breadcrumb-item\">{link}</li>\n", // template for all links
                        'activeItemTemplate' => "<li class=\"breadcrumb-item active\">{link}</li>\n", // template for all links

                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                        'homeLink' => ['label' => 'Главная', 'url' => '/'],
                        'options' => [
                            'class' => 'breadcrumb',//этот класс стоит по умолчанию
                        ],
                    ]
                ); ?>
            </div>
            <?php if (isset($this->params['h1'])): ?>
                <div class="page-header__title">
                    <h1><?= Html::encode($this->params['h1']) ?></h1>
                </div>
            <?php endif; ?>

        </div>


