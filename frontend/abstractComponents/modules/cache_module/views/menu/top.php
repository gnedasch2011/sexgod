<?php

use frontend\abstractComponents\models\CategoryAbstract;

?>
<?php if ($this->beginCache('menu/top')): ?>

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
                                        <li class="menu__item">
                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                            <div class="menu__item-submenu-offset"></div>
                                            <a class="menu__item-link"
                                               href="<?= CategoryAbstract::getLinkById(457); ?>">
                                                <?= CategoryAbstract::getNameById(457); ?>
                                            </a>
                                        </li>
                                        <li class="menu__item">
                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                            <div class="menu__item-submenu-offset"></div>
                                            <a class="menu__item-link"
                                               href="<?= CategoryAbstract::getLinkById(484); ?>">
                                                <?= CategoryAbstract::getNameById(484); ?>
                                            </a>
                                        </li>
                                        <li class="menu__item">
                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                            <div class="menu__item-submenu-offset"></div>
                                            <a class="menu__item-link"
                                               href="<?= CategoryAbstract::getLinkById(261); ?>">
                                                <?= CategoryAbstract::getNameById(261); ?>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- .menu / end -->
                            </div>
                        </li>
                        <li class="nav-links__item  nav-links__item--has-submenu ">
                            <a class="nav-links__item-link">
                                <div class="nav-links__item-body">
                                    Мужчинам
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
                                               href="<?= CategoryAbstract::getLinkById(685); ?>">
                                                <?= CategoryAbstract::getNameById(685); ?>
                                            </a>
                                        </li>
                                        <li class="menu__item">
                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                            <div class="menu__item-submenu-offset"></div>
                                            <a class="menu__item-link"
                                               href="<?= CategoryAbstract::getLinkById(449); ?>">
                                                <?= CategoryAbstract::getNameById(449); ?>
                                            </a>
                                        </li>
                                        <li class="menu__item">
                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                            <div class="menu__item-submenu-offset"></div>
                                            <a class="menu__item-link"
                                               href="<?= CategoryAbstract::getLinkById(478); ?>">
                                                <?= CategoryAbstract::getNameById(478); ?>
                                            </a>
                                        </li>
                                        <li class="menu__item">
                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                            <div class="menu__item-submenu-offset"></div>
                                            <a class="menu__item-link"
                                               href="<?= CategoryAbstract::getLinkById(468); ?>">
                                                <?= CategoryAbstract::getNameById(468); ?>
                                            </a>
                                        </li>
                                        <li class="menu__item">
                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                            <div class="menu__item-submenu-offset"></div>
                                            <a class="menu__item-link"
                                               href="<?= CategoryAbstract::getLinkById(675); ?>">
                                                <?= CategoryAbstract::getNameById(675); ?>
                                            </a>
                                        </li>
                                        <li class="menu__item">
                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                            <div class="menu__item-submenu-offset"></div>
                                            <a class="menu__item-link"
                                               href="<?= CategoryAbstract::getLinkById(392); ?>">
                                                <?= CategoryAbstract::getNameById(392); ?>
                                            </a>
                                        </li>
                                        <li class="menu__item">
                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                            <div class="menu__item-submenu-offset"></div>
                                            <a class="menu__item-link"
                                               href="<?= CategoryAbstract::getLinkById(657); ?>">
                                                <?= CategoryAbstract::getNameById(657); ?>
                                            </a>
                                        </li>
                                        <li class="menu__item">
                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                            <div class="menu__item-submenu-offset"></div>
                                            <a class="menu__item-link"
                                               href="<?= CategoryAbstract::getLinkById(492); ?>">
                                                <?= CategoryAbstract::getNameById(492); ?>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- .menu / end -->
                            </div>
                        </li>
                        <li class="nav-links__item  nav-links__item--has-submenu ">
                            <a class="nav-links__item-link">
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
                                               href="<?= CategoryAbstract::getLinkById(431); ?>">
                                                <?= CategoryAbstract::getH1ById(431); ?>
                                            </a>
                                        </li>
                                        <li class="menu__item">
                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                            <div class="menu__item-submenu-offset"></div>
                                            <a class="menu__item-link"
                                               href="<?= CategoryAbstract::getLinkById(212); ?>">
                                                <?= CategoryAbstract::getH1ById(212); ?>
                                            </a>
                                        </li>
                                        <li class="menu__item">
                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                            <div class="menu__item-submenu-offset"></div>
                                            <a class="menu__item-link"
                                               href="<?= CategoryAbstract::getLinkById(542); ?>">
                                                <?= CategoryAbstract::getH1ById(542); ?>
                                            </a>
                                        </li>
                                        <li class="menu__item">
                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                            <div class="menu__item-submenu-offset"></div>
                                            <a class="menu__item-link"
                                               href="<?= CategoryAbstract::getLinkById(424); ?>">
                                                <?= CategoryAbstract::getH1ById(424); ?>
                                            </a>
                                        </li>
                                        <li class="menu__item">
                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                            <div class="menu__item-submenu-offset"></div>
                                            <a class="menu__item-link"
                                               href="<?= CategoryAbstract::getLinkById(677); ?>">
                                                <?= CategoryAbstract::getNameById(677); ?>
                                            </a>
                                        </li>
                                        <li class="menu__item">
                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                            <div class="menu__item-submenu-offset"></div>
                                            <a class="menu__item-link"
                                               href="<?= CategoryAbstract::getLinkById(670); ?>">
                                                <?= CategoryAbstract::getNameById(670); ?>
                                            </a>
                                        </li>
                                        <li class="menu__item">
                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                            <div class="menu__item-submenu-offset"></div>
                                            <a class="menu__item-link"
                                               href="<?= CategoryAbstract::getLinkById(646); ?>">
                                                <?= CategoryAbstract::getNameById(646); ?>
                                            </a>
                                        </li>
                                        <li class="menu__item">
                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                            <div class="menu__item-submenu-offset"></div>
                                            <a class="menu__item-link"
                                               href="<?= CategoryAbstract::getLinkById(673); ?>">
                                                <?= CategoryAbstract::getNameById(673); ?>
                                            </a>
                                        </li>
                                        <li class="menu__item">
                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                            <div class="menu__item-submenu-offset"></div>
                                            <a class="menu__item-link"
                                               href="<?= CategoryAbstract::getLinkById(674); ?>">
                                                <?= CategoryAbstract::getNameById(674); ?>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- .menu / end -->
                            </div>
                        </li>
                        <li class="nav-links__item  nav-links__item--has-submenu ">
                            <a class="nav-links__item-link">
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
                                               href="<?= CategoryAbstract::getLinkById(637); ?>">
                                                <?= CategoryAbstract::getNameById(637); ?>
                                            </a>
                                        </li>
                                        <li class="menu__item">
                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                            <div class="menu__item-submenu-offset"></div>
                                            <a class="menu__item-link"
                                               href="<?= CategoryAbstract::getLinkById(638); ?>">
                                                <?= CategoryAbstract::getNameById(638); ?>
                                            </a>
                                        </li>
                                        <li class="menu__item">
                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                            <div class="menu__item-submenu-offset"></div>
                                            <a class="menu__item-link"
                                               href="<?= CategoryAbstract::getLinkById(639); ?>">
                                                <?= CategoryAbstract::getNameById(639); ?>
                                            </a>
                                        </li>
                                        <li class="menu__item">
                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                            <div class="menu__item-submenu-offset"></div>
                                            <a class="menu__item-link"
                                               href="<?= CategoryAbstract::getLinkById(640); ?>">
                                                <?= CategoryAbstract::getNameById(640); ?>
                                            </a>
                                        </li>
                                        <li class="menu__item">
                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                            <div class="menu__item-submenu-offset"></div>
                                            <a class="menu__item-link"
                                               href="<?= CategoryAbstract::getLinkById(642); ?>">
                                                <?= CategoryAbstract::getNameById(642); ?>
                                            </a>
                                        </li>
                                        <li class="menu__item">
                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                            <div class="menu__item-submenu-offset"></div>
                                            <a class="menu__item-link"
                                               href="<?= CategoryAbstract::getLinkById(645); ?>">
                                                <?= CategoryAbstract::getNameById(645); ?>
                                            </a>
                                        </li>
                                        <li class="menu__item">
                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                            <div class="menu__item-submenu-offset"></div>
                                            <a class="menu__item-link"
                                               href="<?= CategoryAbstract::getLinkById(650); ?>">
                                                <?= CategoryAbstract::getNameById(650); ?>
                                            </a>
                                        </li>
                                        <li class="menu__item">
                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                            <div class="menu__item-submenu-offset"></div>
                                            <a class="menu__item-link"
                                               href="<?= CategoryAbstract::getLinkById(648); ?>">
                                                <?= CategoryAbstract::getNameById(648); ?>
                                            </a>
                                        </li>
                                        <li class="menu__item">
                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                            <div class="menu__item-submenu-offset"></div>
                                            <a class="menu__item-link"
                                               href="<?= CategoryAbstract::getLinkById(663); ?>">
                                                <?= CategoryAbstract::getNameById(663); ?>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- .menu / end -->
                            </div>
                        </li>
                        <li class="nav-links__item  nav-links__item--has-submenu ">
                            <a class="nav-links__item-link">
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
                                               href="<?= CategoryAbstract::getLinkById(669); ?>">
                                                <?= CategoryAbstract::getNameById(669); ?>
                                            </a>
                                        </li>
                                        <li class="menu__item">
                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                            <div class="menu__item-submenu-offset"></div>
                                            <a class="menu__item-link"
                                               href="<?= CategoryAbstract::getLinkById(683); ?>">
                                                <?= CategoryAbstract::getNameById(683); ?>
                                            </a>
                                        </li>
                                        <li class="menu__item">
                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                            <div class="menu__item-submenu-offset"></div>
                                            <a class="menu__item-link"
                                               href="<?= CategoryAbstract::getLinkById(701); ?>">
                                                <?= CategoryAbstract::getNameById(701); ?>
                                            </a>
                                        </li>
                                        <li class="menu__item">
                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                            <div class="menu__item-submenu-offset"></div>
                                            <a class="menu__item-link"
                                               href="<?= CategoryAbstract::getLinkById(697); ?>">
                                                <?= CategoryAbstract::getNameById(697); ?>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- .menu / end -->
                            </div>
                        </li>
                        <li class="nav-links__item  nav-links__item--has-submenu ">
                            <a class="nav-links__item-link">
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
                                               href="<?= CategoryAbstract::getLinkById(593); ?>">
                                                <?= CategoryAbstract::getNameById(593); ?>
                                            </a>
                                        </li>
                                        <li class="menu__item">
                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                            <div class="menu__item-submenu-offset"></div>
                                            <a class="menu__item-link"
                                               href="<?= CategoryAbstract::getLinkById(594); ?>">
                                                <?= CategoryAbstract::getNameById(594); ?>
                                            </a>
                                        </li>
                                        <li class="menu__item">
                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                            <div class="menu__item-submenu-offset"></div>
                                            <a class="menu__item-link"
                                               href="<?= CategoryAbstract::getLinkById(595); ?>">
                                                <?= CategoryAbstract::getNameById(595); ?>
                                            </a>
                                        </li>
                                        <li class="menu__item">
                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                            <div class="menu__item-submenu-offset"></div>
                                            <a class="menu__item-link"
                                               href="<?= CategoryAbstract::getLinkById(598); ?>">
                                                <?= CategoryAbstract::getNameById(598); ?>
                                            </a>
                                        </li>
                                        <li class="menu__item">
                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                            <div class="menu__item-submenu-offset"></div>
                                            <a class="menu__item-link"
                                               href="<?= CategoryAbstract::getLinkById(599); ?>">
                                                <?= CategoryAbstract::getNameById(599); ?>
                                            </a>
                                        </li>
                                        <li class="menu__item">
                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                            <div class="menu__item-submenu-offset"></div>
                                            <a class="menu__item-link"
                                               href="<?= CategoryAbstract::getLinkById(602); ?>">
                                                <?= CategoryAbstract::getNameById(602); ?>
                                            </a>
                                        </li>
                                        <li class="menu__item">
                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                            <div class="menu__item-submenu-offset"></div>
                                            <a class="menu__item-link"
                                               href="<?= CategoryAbstract::getLinkById(600); ?>">
                                                <?= CategoryAbstract::getNameById(600); ?>
                                            </a>
                                        </li>
                                        <li class="menu__item">
                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                            <div class="menu__item-submenu-offset"></div>
                                            <a class="menu__item-link"
                                               href="<?= CategoryAbstract::getLinkById(614); ?>">
                                                <?= CategoryAbstract::getNameById(614); ?>
                                            </a>
                                        </li>
                                        <li class="menu__item">
                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                            <div class="menu__item-submenu-offset"></div>
                                            <a class="menu__item-link"
                                               href="<?= CategoryAbstract::getLinkById(615); ?>">
                                                <?= CategoryAbstract::getNameById(615); ?>
                                            </a>
                                        </li>
                                        <li class="menu__item">
                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                            <div class="menu__item-submenu-offset"></div>
                                            <a class="menu__item-link"
                                               href="<?= CategoryAbstract::getLinkById(616); ?>">
                                                <?= CategoryAbstract::getNameById(616); ?>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- .menu / end -->
                            </div>
                        </li>
                        <li class="nav-links__item  nav-links__item--has-submenu ">
                            <a class="nav-links__item-link">
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
                                               href="<?= CategoryAbstract::getLinkById(675); ?>">
                                                <?= CategoryAbstract::getNameById(675); ?>
                                            </a>
                                        </li>
                                        <li class="menu__item">
                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                            <div class="menu__item-submenu-offset"></div>
                                            <a class="menu__item-link"
                                               href="<?= CategoryAbstract::getLinkById(678); ?>">
                                                <?= CategoryAbstract::getNameById(678); ?>
                                            </a>
                                        </li>
                                        <li class="menu__item">
                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                            <div class="menu__item-submenu-offset"></div>
                                            <a class="menu__item-link"
                                               href="<?= CategoryAbstract::getLinkById(677); ?>">
                                                <?= CategoryAbstract::getNameById(677); ?>
                                            </a>
                                        </li>
                                        <li class="menu__item">
                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                            <div class="menu__item-submenu-offset"></div>
                                            <a class="menu__item-link"
                                               href="<?= CategoryAbstract::getLinkById(668); ?>">
                                                <?= CategoryAbstract::getNameById(668); ?>
                                            </a>
                                        </li>
                                        <li class="menu__item">
                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                            <div class="menu__item-submenu-offset"></div>
                                            <a class="menu__item-link"
                                               href="<?= CategoryAbstract::getLinkById(679); ?>">
                                                <?= CategoryAbstract::getNameById(679); ?>
                                            </a>
                                        </li>
                                        <li class="menu__item">
                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                            <div class="menu__item-submenu-offset"></div>
                                            <a class="menu__item-link"
                                               href="<?= CategoryAbstract::getLinkById(676); ?>">
                                                <?= CategoryAbstract::getNameById(676); ?>
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
                                            <?= $this->render('@frontend/abstractComponents/modules/good/views/site/sexgod/good/_item_in_drop_cart', [
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

    <?php $this->endCache(); ?>
<?php endif; ?>