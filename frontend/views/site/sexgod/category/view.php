<?php

use yii\helpers\Html;
use yii\web\View;
use yii\widgets\Breadcrumbs;

/* @var $this yii\web\View */

?>
<div class="container">
    <div class="shop-layout shop-layout--sidebar--start">
        <div class="shop-layout__sidebar">
            <div class="block block-sidebar block-sidebar--offcanvas--mobile">
                <div class="block-sidebar__backdrop"></div>
                <div class="block-sidebar__body">
                    <div class="block-sidebar__header">
                        <div class="block-sidebar__title">Фильтры</div>
                        <button class="block-sidebar__close" type="button">
                            <svg width="20px" height="20px">
                                <use xlink:href="template/red_stroyka/images/sprite.svg#cross-20"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="block-sidebar__item">
                        <div class="widget-filters widget widget-filters--offcanvas--mobile"
                             data-collapse data-collapse-opened-class="filter--opened">
                            <h4 class="widget-filters__title widget__title">Фильтры</h4>
                            <div class="widget-filters__list">

                                <?php /*?>

                                    <div class="widget-filters__item">
                                        <div class="filter filter--opened" data-collapse-item>
                                            <button type="button" class="filter__title" data-collapse-trigger>
                                                Categories
                                                <svg class="filter__arrow" width="12px" height="7px">
                                                    <use xlink:href="template/red_stroyka/images/sprite.svg#arrow-rounded-down-12x7"></use>
                                                </svg>
                                            </button>
                                            <div class="filter__body" data-collapse-content>
                                                <div class="filter__container">
                                                    <div class="filter-categories">
                                                        <ul class="filter-categories__list">
                                                            <li class="filter-categories__item filter-categories__item--parent">
                                                                <svg class="filter-categories__arrow" width="6px" height="9px">
                                                                    <use xlink:href="template/red_stroyka/images/sprite.svg#arrow-rounded-left-6x9"></use>
                                                                </svg>
                                                                <a href="">Construction & Repair</a>
                                                                <div class="filter-categories__counter">254</div>
                                                            </li>
                                                            <li class="filter-categories__item filter-categories__item--parent">
                                                                <svg class="filter-categories__arrow" width="6px" height="9px">
                                                                    <use xlink:href="template/red_stroyka/images/sprite.svg#arrow-rounded-left-6x9"></use>
                                                                </svg>
                                                                <a href="">Instruments</a>
                                                                <div class="filter-categories__counter">75</div>
                                                            </li>
                                                            <li class="filter-categories__item filter-categories__item--current">
                                                                <a href="">Power Tools</a>
                                                                <div class="filter-categories__counter">21</div>
                                                            </li>
                                                            <li class="filter-categories__item filter-categories__item--child">
                                                                <a href="">Drills & Mixers</a>
                                                                <div class="filter-categories__counter">15</div>
                                                            </li>
                                                            <li class="filter-categories__item filter-categories__item--child">
                                                                <a href="">Cordless Screwdrivers</a>
                                                                <div class="filter-categories__counter">2</div>
                                                            </li>
                                                            <li class="filter-categories__item filter-categories__item--child">
                                                                <a href="">Screwdrivers</a>
                                                                <div class="filter-categories__counter">30</div>
                                                            </li>
                                                            <li class="filter-categories__item filter-categories__item--child">
                                                                <a href="">Wrenches</a>
                                                                <div class="filter-categories__counter">7</div>
                                                            </li>
                                                            <li class="filter-categories__item filter-categories__item--child">
                                                                <a href="">Grinding Machines</a>
                                                                <div class="filter-categories__counter">5</div>
                                                            </li>
                                                            <li class="filter-categories__item filter-categories__item--child">
                                                                <a href="">Milling Cutters</a>
                                                                <div class="filter-categories__counter">2</div>
                                                            </li>
                                                            <li class="filter-categories__item filter-categories__item--child">
                                                                <a href="">Electric Spray Guns</a>
                                                                <div class="filter-categories__counter">9</div>
                                                            </li>
                                                            <li class="filter-categories__item filter-categories__item--child">
                                                                <a href="">Jigsaws</a>
                                                                <div class="filter-categories__counter">4</div>
                                                            </li>
                                                            <li class="filter-categories__item filter-categories__item--child">
                                                                <a href="">Jackhammers</a>
                                                                <div class="filter-categories__counter">0</div>
                                                            </li>
                                                            <li class="filter-categories__item filter-categories__item--child">
                                                                <a href="">Planers</a>
                                                                <div class="filter-categories__counter">12</div>
                                                            </li>
                                                            <li class="filter-categories__item filter-categories__item--child">
                                                                <a href="">Glue Guns</a>
                                                                <div class="filter-categories__counter">7</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                     <?php */ ?>
                                <?= \app\abstractComponents\widgets\MenuIMWidget\MenuIMWidget::widget([
                                    'categoryName' => 'seks-igrushki',
                                ]); ?>


                                <?php /*?>

                                    <div class="widget-filters__item">
                                        <div class="filter filter--opened" data-collapse-item>
                                            <button type="button" class="filter__title" data-collapse-trigger>
                                                Categories Alt
                                                <svg class="filter__arrow" width="12px" height="7px">
                                                    <use xlink:href="template/red_stroyka/images/sprite.svg#arrow-rounded-down-12x7"></use>
                                                </svg>
                                            </button>
                                            <div class="filter__body" data-collapse-content>
                                                <div class="filter__container">
                                                    <div class="filter-categories-alt">
                                                        <ul class="filter-categories-alt__list filter-categories-alt__list--level--1" data-collapse-opened-class="filter-categories-alt__item--open">
                                                            <li class="filter-categories-alt__item" data-collapse-item>
                                                                <a href="">Clothes & PPE</a>
                                                            </li>
                                                            <li class="filter-categories-alt__item" data-collapse-item>
                                                                <button class="filter-categories-alt__expander" data-collapse-trigger></button>
                                                                <a href="">Power Tools</a>
                                                                <div class="filter-categories-alt__children" data-collapse-content>
                                                                    <ul class="filter-categories-alt__list filter-categories-alt__list--level--2">
                                                                        <li class="filter-categories-alt__item" data-collapse-item>
                                                                            <a href="">Engravers</a>
                                                                        </li>
                                                                        <li class="filter-categories-alt__item" data-collapse-item>
                                                                            <a href="">Drills</a>
                                                                        </li>
                                                                        <li class="filter-categories-alt__item" data-collapse-item>
                                                                            <a href="">Wrenches</a>
                                                                        </li>
                                                                        <li class="filter-categories-alt__item" data-collapse-item>
                                                                            <a href="">Plumbing</a>
                                                                        </li>
                                                                        <li class="filter-categories-alt__item" data-collapse-item>
                                                                            <a href="">Wall Chaser</a>
                                                                        </li>
                                                                        <li class="filter-categories-alt__item" data-collapse-item>
                                                                            <a href="">Pneumatic Tools</a>
                                                                        </li>
                                                                        <li class="filter-categories-alt__item" data-collapse-item>
                                                                            <a href="">Milling Cutters</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li class="filter-categories-alt__item filter-categories-alt__item--open filter-categories-alt__item--current" data-collapse-item>
                                                                <button class="filter-categories-alt__expander" data-collapse-trigger></button>
                                                                <a href="">Hand Tools</a>
                                                                <div class="filter-categories-alt__children" data-collapse-content>
                                                                    <ul class="filter-categories-alt__list filter-categories-alt__list--level--2">
                                                                        <li class="filter-categories-alt__item" data-collapse-item>
                                                                            <a href="">Screwdrivers</a>
                                                                        </li>
                                                                        <li class="filter-categories-alt__item filter-categories-alt__item--current" data-collapse-item>
                                                                            <button class="filter-categories-alt__expander" data-collapse-trigger></button>
                                                                            <a href="">Handsaws</a>
                                                                            <div class="filter-categories-alt__children" data-collapse-content>
                                                                                <ul class="filter-categories-alt__list filter-categories-alt__list--level--3">
                                                                                    <li class="filter-categories-alt__item" data-collapse-item>
                                                                                        <a href="">Power Saws</a>
                                                                                    </li>
                                                                                    <li class="filter-categories-alt__item" data-collapse-item>
                                                                                        <a href="">Hacksaws</a>
                                                                                    </li>
                                                                                    <li class="filter-categories-alt__item filter-categories-alt__item--current" data-collapse-item>
                                                                                        <button class="filter-categories-alt__expander" data-collapse-trigger></button>
                                                                                        <a href="">Deep Dive</a>
                                                                                        <div class="filter-categories-alt__children" data-collapse-content>
                                                                                            <ul class="filter-categories-alt__list filter-categories-alt__list--level--4">
                                                                                                <li class="filter-categories-alt__item" data-collapse-item>
                                                                                                    <a href="">Submarines</a>
                                                                                                </li>
                                                                                                <li class="filter-categories-alt__item" data-collapse-item>
                                                                                                    <a href="">Silt In Bags</a>
                                                                                                </li>
                                                                                                <li class="filter-categories-alt__item" data-collapse-item>
                                                                                                    <a href="">Black Pearl</a>
                                                                                                </li>
                                                                                                <li class="filter-categories-alt__item" data-collapse-item>
                                                                                                    <a href="">Krakens</a>
                                                                                                </li>
                                                                                                <li class="filter-categories-alt__item" data-collapse-item>
                                                                                                    <a href="">Nautilus</a>
                                                                                                </li>
                                                                                                <li class="filter-categories-alt__item" data-collapse-item>
                                                                                                    <a href="">Mariana Trench</a>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="filter-categories-alt__item" data-collapse-item>
                                                                                        <a href="">Chain Saws</a>
                                                                                    </li>
                                                                                    <li class="filter-categories-alt__item" data-collapse-item>
                                                                                        <a href="">Two-handed Saws</a>
                                                                                    </li>
                                                                                    <li class="filter-categories-alt__item" data-collapse-item>
                                                                                        <a href="">Other</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </li>
                                                                        <li class="filter-categories-alt__item" data-collapse-item>
                                                                            <a href="">Knives</a>
                                                                        </li>
                                                                        <li class="filter-categories-alt__item" data-collapse-item>
                                                                            <a href="">Axes</a>
                                                                        </li>
                                                                        <li class="filter-categories-alt__item" data-collapse-item>
                                                                            <a href="">Multitools</a>
                                                                        </li>
                                                                        <li class="filter-categories-alt__item" data-collapse-item>
                                                                            <a href="">Paint Tools</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li class="filter-categories-alt__item" data-collapse-item>
                                                                <a href="">Measurement</a>
                                                            </li>
                                                            <li class="filter-categories-alt__item" data-collapse-item>
                                                                <button class="filter-categories-alt__expander" data-collapse-trigger></button>
                                                                <a href="">Garden Equipment</a>
                                                                <div class="filter-categories-alt__children" data-collapse-content>
                                                                    <ul class="filter-categories-alt__list filter-categories-alt__list--level--2">
                                                                        <li class="filter-categories-alt__item" data-collapse-item>
                                                                            <a href="">Motor Pumps</a>
                                                                        </li>
                                                                        <li class="filter-categories-alt__item" data-collapse-item>
                                                                            <a href="">Chainsaws</a>
                                                                        </li>
                                                                        <li class="filter-categories-alt__item" data-collapse-item>
                                                                            <a href="">Electric Saws</a>
                                                                        </li>
                                                                        <li class="filter-categories-alt__item" data-collapse-item>
                                                                            <a href="">Brush Cutters</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
      <?php */ ?>
                                <div class="widget-filters__item">
                                    <div class="filter filter--opened" data-collapse-item>
                                        <button type="button" class="filter__title"
                                                data-collapse-trigger>
                                            Price
                                            <svg class="filter__arrow" width="12px" height="7px">
                                                <use xlink:href="template/red_stroyka/images/sprite.svg#arrow-rounded-down-12x7"></use>
                                            </svg>
                                        </button>
                                        <div class="filter__body" data-collapse-content>
                                            <div class="filter__container">
                                                <div class="filter-price" data-min="500"
                                                     data-max="1500" data-from="590" data-to="1130">
                                                    <div class="filter-price__slider"></div>
                                                    <div class="filter-price__title">Price: $<span
                                                                class="filter-price__min-value"></span>
                                                        – $<span
                                                                class="filter-price__max-value"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-filters__item">
                                    <div class="filter filter--opened" data-collapse-item>
                                        <button type="button" class="filter__title"
                                                data-collapse-trigger>
                                            Brand
                                            <svg class="filter__arrow" width="12px" height="7px">
                                                <use xlink:href="template/red_stroyka/images/sprite.svg#arrow-rounded-down-12x7"></use>
                                            </svg>
                                        </button>
                                        <div class="filter__body" data-collapse-content>
                                            <div class="filter__container">
                                                <div class="filter-list">
                                                    <div class="filter-list__list">
                                                        <label class="filter-list__item ">
                                                                        <span class="filter-list__input input-check">
                                                                            <span class="input-check__body">
                                                                                <input class="input-check__input"
                                                                                       type="checkbox">
                                                                                <span class="input-check__box"></span>
                                                                                <svg class="input-check__icon"
                                                                                     width="9px"
                                                                                     height="7px">
                                                                                    <use xlink:href="template/red_stroyka/images/sprite.svg#check-9x7"></use>
                                                                                </svg>
                                                                            </span>
                                                                        </span>
                                                            <span class="filter-list__title">
                                                                            Wakita
                                                                        </span>
                                                            <span class="filter-list__counter">7</span>
                                                        </label>
                                                        <label class="filter-list__item ">
                                                                        <span class="filter-list__input input-check">
                                                                            <span class="input-check__body">
                                                                                <input class="input-check__input"
                                                                                       type="checkbox"
                                                                                       checked>
                                                                                <span class="input-check__box"></span>
                                                                                <svg class="input-check__icon"
                                                                                     width="9px"
                                                                                     height="7px">
                                                                                    <use xlink:href="template/red_stroyka/images/sprite.svg#check-9x7"></use>
                                                                                </svg>
                                                                            </span>
                                                                        </span>
                                                            <span class="filter-list__title">
                                                                            Zosch
                                                                        </span>
                                                            <span class="filter-list__counter">42</span>
                                                        </label>
                                                        <label class="filter-list__item  filter-list__item--disabled ">
                                                                        <span class="filter-list__input input-check">
                                                                            <span class="input-check__body">
                                                                                <input class="input-check__input"
                                                                                       type="checkbox"
                                                                                       checked
                                                                                       disabled>
                                                                                <span class="input-check__box"></span>
                                                                                <svg class="input-check__icon"
                                                                                     width="9px"
                                                                                     height="7px">
                                                                                    <use xlink:href="template/red_stroyka/images/sprite.svg#check-9x7"></use>
                                                                                </svg>
                                                                            </span>
                                                                        </span>
                                                            <span class="filter-list__title">
                                                                            WeVALT
                                                                        </span>
                                                        </label>
                                                        <label class="filter-list__item  filter-list__item--disabled ">
                                                                        <span class="filter-list__input input-check">
                                                                            <span class="input-check__body">
                                                                                <input class="input-check__input"
                                                                                       type="checkbox"
                                                                                       disabled>
                                                                                <span class="input-check__box"></span>
                                                                                <svg class="input-check__icon"
                                                                                     width="9px"
                                                                                     height="7px">
                                                                                    <use xlink:href="template/red_stroyka/images/sprite.svg#check-9x7"></use>
                                                                                </svg>
                                                                            </span>
                                                                        </span>
                                                            <span class="filter-list__title">
                                                                            Hammer
                                                                        </span>
                                                        </label>
                                                        <label class="filter-list__item ">
                                                                        <span class="filter-list__input input-check">
                                                                            <span class="input-check__body">
                                                                                <input class="input-check__input"
                                                                                       type="checkbox">
                                                                                <span class="input-check__box"></span>
                                                                                <svg class="input-check__icon"
                                                                                     width="9px"
                                                                                     height="7px">
                                                                                    <use xlink:href="template/red_stroyka/images/sprite.svg#check-9x7"></use>
                                                                                </svg>
                                                                            </span>
                                                                        </span>
                                                            <span class="filter-list__title">
                                                                            Mitasia
                                                                        </span>
                                                            <span class="filter-list__counter">1</span>
                                                        </label>
                                                        <label class="filter-list__item ">
                                                                        <span class="filter-list__input input-check">
                                                                            <span class="input-check__body">
                                                                                <input class="input-check__input"
                                                                                       type="checkbox">
                                                                                <span class="input-check__box"></span>
                                                                                <svg class="input-check__icon"
                                                                                     width="9px"
                                                                                     height="7px">
                                                                                    <use xlink:href="template/red_stroyka/images/sprite.svg#check-9x7"></use>
                                                                                </svg>
                                                                            </span>
                                                                        </span>
                                                            <span class="filter-list__title">
                                                                            Metaggo
                                                                        </span>
                                                            <span class="filter-list__counter">25</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-filters__item">
                                    <div class="filter filter--opened" data-collapse-item>
                                        <button type="button" class="filter__title"
                                                data-collapse-trigger>
                                            Brand
                                            <svg class="filter__arrow" width="12px" height="7px">
                                                <use xlink:href="template/red_stroyka/images/sprite.svg#arrow-rounded-down-12x7"></use>
                                            </svg>
                                        </button>
                                        <div class="filter__body" data-collapse-content>
                                            <div class="filter__container">
                                                <div class="filter-list">
                                                    <div class="filter-list__list">
                                                        <label class="filter-list__item ">
                                                                        <span class="filter-list__input input-radio">
                                                                            <span class="input-radio__body">
                                                                                <input class="input-radio__input"
                                                                                       name="filter_radio"
                                                                                       type="radio">
                                                                                <span class="input-radio__circle"></span>
                                                                            </span>
                                                                        </span>
                                                            <span class="filter-list__title">
                                                                            Wakita
                                                                        </span>
                                                            <span class="filter-list__counter">7</span>
                                                        </label>
                                                        <label class="filter-list__item ">
                                                                        <span class="filter-list__input input-radio">
                                                                            <span class="input-radio__body">
                                                                                <input class="input-radio__input"
                                                                                       name="filter_radio"
                                                                                       type="radio">
                                                                                <span class="input-radio__circle"></span>
                                                                            </span>
                                                                        </span>
                                                            <span class="filter-list__title">
                                                                            Zosch
                                                                        </span>
                                                            <span class="filter-list__counter">42</span>
                                                        </label>
                                                        <label class="filter-list__item  filter-list__item--disabled ">
                                                                        <span class="filter-list__input input-radio">
                                                                            <span class="input-radio__body">
                                                                                <input class="input-radio__input"
                                                                                       name="filter_radio"
                                                                                       type="radio"
                                                                                       checked
                                                                                       disabled>
                                                                                <span class="input-radio__circle"></span>
                                                                            </span>
                                                                        </span>
                                                            <span class="filter-list__title">
                                                                            WeVALT
                                                                        </span>
                                                        </label>
                                                        <label class="filter-list__item  filter-list__item--disabled ">
                                                                        <span class="filter-list__input input-radio">
                                                                            <span class="input-radio__body">
                                                                                <input class="input-radio__input"
                                                                                       name="filter_radio"
                                                                                       type="radio"
                                                                                       disabled>
                                                                                <span class="input-radio__circle"></span>
                                                                            </span>
                                                                        </span>
                                                            <span class="filter-list__title">
                                                                            Hammer
                                                                        </span>
                                                        </label>
                                                        <label class="filter-list__item ">
                                                                        <span class="filter-list__input input-radio">
                                                                            <span class="input-radio__body">
                                                                                <input class="input-radio__input"
                                                                                       name="filter_radio"
                                                                                       type="radio">
                                                                                <span class="input-radio__circle"></span>
                                                                            </span>
                                                                        </span>
                                                            <span class="filter-list__title">
                                                                            Mitasia
                                                                        </span>
                                                            <span class="filter-list__counter">1</span>
                                                        </label>
                                                        <label class="filter-list__item ">
                                                                        <span class="filter-list__input input-radio">
                                                                            <span class="input-radio__body">
                                                                                <input class="input-radio__input"
                                                                                       name="filter_radio"
                                                                                       type="radio">
                                                                                <span class="input-radio__circle"></span>
                                                                            </span>
                                                                        </span>
                                                            <span class="filter-list__title">
                                                                            Metaggo
                                                                        </span>
                                                            <span class="filter-list__counter">25</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-filters__item">
                                    <div class="filter filter--opened" data-collapse-item>
                                        <button type="button" class="filter__title"
                                                data-collapse-trigger>
                                            Color
                                            <svg class="filter__arrow" width="12px" height="7px">
                                                <use xlink:href="template/red_stroyka/images/sprite.svg#arrow-rounded-down-12x7"></use>
                                            </svg>
                                        </button>
                                        <div class="filter__body" data-collapse-content>
                                            <div class="filter__container">
                                                <div class="filter-color">
                                                    <div class="filter-color__list">
                                                        <label class="filter-color__item">
                                                                        <span class="filter-color__check input-check-color  input-check-color--white  "
                                                                              style="color: #fff;">
                                                                            <label class="input-check-color__body">
                                                                                <input class="input-check-color__input"
                                                                                       type="checkbox">
                                                                                <span class="input-check-color__box"></span>
                                                                                <svg class="input-check-color__icon"
                                                                                     width="12px"
                                                                                     height="9px">
                                                                                    <use xlink:href="template/red_stroyka/images/sprite.svg#check-12x9"></use>
                                                                                </svg>
                                                                                <span class="input-check-color__stick"></span>
                                                                            </label>
                                                                        </span>
                                                        </label>
                                                        <label class="filter-color__item">
                                                                        <span class="filter-color__check input-check-color   input-check-color--light "
                                                                              style="color: #d9d9d9;">
                                                                            <label class="input-check-color__body">
                                                                                <input class="input-check-color__input"
                                                                                       type="checkbox">
                                                                                <span class="input-check-color__box"></span>
                                                                                <svg class="input-check-color__icon"
                                                                                     width="12px"
                                                                                     height="9px">
                                                                                    <use xlink:href="template/red_stroyka/images/sprite.svg#check-12x9"></use>
                                                                                </svg>
                                                                                <span class="input-check-color__stick"></span>
                                                                            </label>
                                                                        </span>
                                                        </label>
                                                        <label class="filter-color__item">
                                                                        <span class="filter-color__check input-check-color  "
                                                                              style="color: #b3b3b3;">
                                                                            <label class="input-check-color__body">
                                                                                <input class="input-check-color__input"
                                                                                       type="checkbox">
                                                                                <span class="input-check-color__box"></span>
                                                                                <svg class="input-check-color__icon"
                                                                                     width="12px"
                                                                                     height="9px">
                                                                                    <use xlink:href="template/red_stroyka/images/sprite.svg#check-12x9"></use>
                                                                                </svg>
                                                                                <span class="input-check-color__stick"></span>
                                                                            </label>
                                                                        </span>
                                                        </label>
                                                        <label class="filter-color__item">
                                                                        <span class="filter-color__check input-check-color  "
                                                                              style="color: #808080;">
                                                                            <label class="input-check-color__body">
                                                                                <input class="input-check-color__input"
                                                                                       type="checkbox">
                                                                                <span class="input-check-color__box"></span>
                                                                                <svg class="input-check-color__icon"
                                                                                     width="12px"
                                                                                     height="9px">
                                                                                    <use xlink:href="template/red_stroyka/images/sprite.svg#check-12x9"></use>
                                                                                </svg>
                                                                                <span class="input-check-color__stick"></span>
                                                                            </label>
                                                                        </span>
                                                        </label>
                                                        <label class="filter-color__item">
                                                                        <span class="filter-color__check input-check-color  "
                                                                              style="color: #666;">
                                                                            <label class="input-check-color__body">
                                                                                <input class="input-check-color__input"
                                                                                       type="checkbox">
                                                                                <span class="input-check-color__box"></span>
                                                                                <svg class="input-check-color__icon"
                                                                                     width="12px"
                                                                                     height="9px">
                                                                                    <use xlink:href="template/red_stroyka/images/sprite.svg#check-12x9"></use>
                                                                                </svg>
                                                                                <span class="input-check-color__stick"></span>
                                                                            </label>
                                                                        </span>
                                                        </label>
                                                        <label class="filter-color__item">
                                                                        <span class="filter-color__check input-check-color  "
                                                                              style="color: #4d4d4d;">
                                                                            <label class="input-check-color__body">
                                                                                <input class="input-check-color__input"
                                                                                       type="checkbox">
                                                                                <span class="input-check-color__box"></span>
                                                                                <svg class="input-check-color__icon"
                                                                                     width="12px"
                                                                                     height="9px">
                                                                                    <use xlink:href="template/red_stroyka/images/sprite.svg#check-12x9"></use>
                                                                                </svg>
                                                                                <span class="input-check-color__stick"></span>
                                                                            </label>
                                                                        </span>
                                                        </label>
                                                        <label class="filter-color__item">
                                                                        <span class="filter-color__check input-check-color  "
                                                                              style="color: #262626;">
                                                                            <label class="input-check-color__body">
                                                                                <input class="input-check-color__input"
                                                                                       type="checkbox">
                                                                                <span class="input-check-color__box"></span>
                                                                                <svg class="input-check-color__icon"
                                                                                     width="12px"
                                                                                     height="9px">
                                                                                    <use xlink:href="template/red_stroyka/images/sprite.svg#check-12x9"></use>
                                                                                </svg>
                                                                                <span class="input-check-color__stick"></span>
                                                                            </label>
                                                                        </span>
                                                        </label>
                                                        <label class="filter-color__item">
                                                                        <span class="filter-color__check input-check-color  "
                                                                              style="color: #ff4040;">
                                                                            <label class="input-check-color__body">
                                                                                <input class="input-check-color__input"
                                                                                       type="checkbox"
                                                                                       checked>
                                                                                <span class="input-check-color__box"></span>
                                                                                <svg class="input-check-color__icon"
                                                                                     width="12px"
                                                                                     height="9px">
                                                                                    <use xlink:href="template/red_stroyka/images/sprite.svg#check-12x9"></use>
                                                                                </svg>
                                                                                <span class="input-check-color__stick"></span>
                                                                            </label>
                                                                        </span>
                                                        </label>
                                                        <label class="filter-color__item">
                                                                        <span class="filter-color__check input-check-color  "
                                                                              style="color: #ff8126;">
                                                                            <label class="input-check-color__body">
                                                                                <input class="input-check-color__input"
                                                                                       type="checkbox">
                                                                                <span class="input-check-color__box"></span>
                                                                                <svg class="input-check-color__icon"
                                                                                     width="12px"
                                                                                     height="9px">
                                                                                    <use xlink:href="template/red_stroyka/images/sprite.svg#check-12x9"></use>
                                                                                </svg>
                                                                                <span class="input-check-color__stick"></span>
                                                                            </label>
                                                                        </span>
                                                        </label>
                                                        <label class="filter-color__item">
                                                                        <span class="filter-color__check input-check-color   input-check-color--light "
                                                                              style="color: #ffd440;">
                                                                            <label class="input-check-color__body">
                                                                                <input class="input-check-color__input"
                                                                                       type="checkbox">
                                                                                <span class="input-check-color__box"></span>
                                                                                <svg class="input-check-color__icon"
                                                                                     width="12px"
                                                                                     height="9px">
                                                                                    <use xlink:href="template/red_stroyka/images/sprite.svg#check-12x9"></use>
                                                                                </svg>
                                                                                <span class="input-check-color__stick"></span>
                                                                            </label>
                                                                        </span>
                                                        </label>
                                                        <label class="filter-color__item">
                                                                        <span class="filter-color__check input-check-color   input-check-color--light "
                                                                              style="color: #becc1f;">
                                                                            <label class="input-check-color__body">
                                                                                <input class="input-check-color__input"
                                                                                       type="checkbox">
                                                                                <span class="input-check-color__box"></span>
                                                                                <svg class="input-check-color__icon"
                                                                                     width="12px"
                                                                                     height="9px">
                                                                                    <use xlink:href="template/red_stroyka/images/sprite.svg#check-12x9"></use>
                                                                                </svg>
                                                                                <span class="input-check-color__stick"></span>
                                                                            </label>
                                                                        </span>
                                                        </label>
                                                        <label class="filter-color__item">
                                                                        <span class="filter-color__check input-check-color  "
                                                                              style="color: #8fcc14;">
                                                                            <label class="input-check-color__body">
                                                                                <input class="input-check-color__input"
                                                                                       type="checkbox"
                                                                                       checked>
                                                                                <span class="input-check-color__box"></span>
                                                                                <svg class="input-check-color__icon"
                                                                                     width="12px"
                                                                                     height="9px">
                                                                                    <use xlink:href="template/red_stroyka/images/sprite.svg#check-12x9"></use>
                                                                                </svg>
                                                                                <span class="input-check-color__stick"></span>
                                                                            </label>
                                                                        </span>
                                                        </label>
                                                        <label class="filter-color__item">
                                                                        <span class="filter-color__check input-check-color  "
                                                                              style="color: #47cc5e;">
                                                                            <label class="input-check-color__body">
                                                                                <input class="input-check-color__input"
                                                                                       type="checkbox">
                                                                                <span class="input-check-color__box"></span>
                                                                                <svg class="input-check-color__icon"
                                                                                     width="12px"
                                                                                     height="9px">
                                                                                    <use xlink:href="template/red_stroyka/images/sprite.svg#check-12x9"></use>
                                                                                </svg>
                                                                                <span class="input-check-color__stick"></span>
                                                                            </label>
                                                                        </span>
                                                        </label>
                                                        <label class="filter-color__item">
                                                                        <span class="filter-color__check input-check-color  "
                                                                              style="color: #47cca0;">
                                                                            <label class="input-check-color__body">
                                                                                <input class="input-check-color__input"
                                                                                       type="checkbox">
                                                                                <span class="input-check-color__box"></span>
                                                                                <svg class="input-check-color__icon"
                                                                                     width="12px"
                                                                                     height="9px">
                                                                                    <use xlink:href="template/red_stroyka/images/sprite.svg#check-12x9"></use>
                                                                                </svg>
                                                                                <span class="input-check-color__stick"></span>
                                                                            </label>
                                                                        </span>
                                                        </label>
                                                        <label class="filter-color__item">
                                                                        <span class="filter-color__check input-check-color  "
                                                                              style="color: #47cccc;">
                                                                            <label class="input-check-color__body">
                                                                                <input class="input-check-color__input"
                                                                                       type="checkbox">
                                                                                <span class="input-check-color__box"></span>
                                                                                <svg class="input-check-color__icon"
                                                                                     width="12px"
                                                                                     height="9px">
                                                                                    <use xlink:href="template/red_stroyka/images/sprite.svg#check-12x9"></use>
                                                                                </svg>
                                                                                <span class="input-check-color__stick"></span>
                                                                            </label>
                                                                        </span>
                                                        </label>
                                                        <label class="filter-color__item">
                                                                        <span class="filter-color__check input-check-color  "
                                                                              style="color: #40bfff;">
                                                                            <label class="input-check-color__body">
                                                                                <input class="input-check-color__input"
                                                                                       type="checkbox"
                                                                                       disabled>
                                                                                <span class="input-check-color__box"></span>
                                                                                <svg class="input-check-color__icon"
                                                                                     width="12px"
                                                                                     height="9px">
                                                                                    <use xlink:href="template/red_stroyka/images/sprite.svg#check-12x9"></use>
                                                                                </svg>
                                                                                <span class="input-check-color__stick"></span>
                                                                            </label>
                                                                        </span>
                                                        </label>
                                                        <label class="filter-color__item">
                                                                        <span class="filter-color__check input-check-color  "
                                                                              style="color: #3d6dcc;">
                                                                            <label class="input-check-color__body">
                                                                                <input class="input-check-color__input"
                                                                                       type="checkbox"
                                                                                       checked>
                                                                                <span class="input-check-color__box"></span>
                                                                                <svg class="input-check-color__icon"
                                                                                     width="12px"
                                                                                     height="9px">
                                                                                    <use xlink:href="template/red_stroyka/images/sprite.svg#check-12x9"></use>
                                                                                </svg>
                                                                                <span class="input-check-color__stick"></span>
                                                                            </label>
                                                                        </span>
                                                        </label>
                                                        <label class="filter-color__item">
                                                                        <span class="filter-color__check input-check-color  "
                                                                              style="color: #7766cc;">
                                                                            <label class="input-check-color__body">
                                                                                <input class="input-check-color__input"
                                                                                       type="checkbox">
                                                                                <span class="input-check-color__box"></span>
                                                                                <svg class="input-check-color__icon"
                                                                                     width="12px"
                                                                                     height="9px">
                                                                                    <use xlink:href="template/red_stroyka/images/sprite.svg#check-12x9"></use>
                                                                                </svg>
                                                                                <span class="input-check-color__stick"></span>
                                                                            </label>
                                                                        </span>
                                                        </label>
                                                        <label class="filter-color__item">
                                                                        <span class="filter-color__check input-check-color  "
                                                                              style="color: #b852cc;">
                                                                            <label class="input-check-color__body">
                                                                                <input class="input-check-color__input"
                                                                                       type="checkbox">
                                                                                <span class="input-check-color__box"></span>
                                                                                <svg class="input-check-color__icon"
                                                                                     width="12px"
                                                                                     height="9px">
                                                                                    <use xlink:href="template/red_stroyka/images/sprite.svg#check-12x9"></use>
                                                                                </svg>
                                                                                <span class="input-check-color__stick"></span>
                                                                            </label>
                                                                        </span>
                                                        </label>
                                                        <label class="filter-color__item">
                                                                        <span class="filter-color__check input-check-color  "
                                                                              style="color: #e53981;">
                                                                            <label class="input-check-color__body">
                                                                                <input class="input-check-color__input"
                                                                                       type="checkbox">
                                                                                <span class="input-check-color__box"></span>
                                                                                <svg class="input-check-color__icon"
                                                                                     width="12px"
                                                                                     height="9px">
                                                                                    <use xlink:href="template/red_stroyka/images/sprite.svg#check-12x9"></use>
                                                                                </svg>
                                                                                <span class="input-check-color__stick"></span>
                                                                            </label>
                                                                        </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-filters__actions d-flex">
                                <button class="btn btn-primary btn-sm">Filter</button>
                                <button class="btn btn-secondary btn-sm">Reset</button>
                            </div>
                        </div>
                    </div>
                    <div class="block-sidebar__item d-none d-lg-block">
                        <div class="widget-products widget">
                            <h4 class="widget__title">Latest Products</h4>
                            <div class="widget-products__list">
                                <div class="widget-products__item">
                                    <div class="widget-products__image">
                                        <a href="product.html"><img
                                                    src="template/red_stroyka/images/products/product-1.jpg"
                                                    alt=""></a>
                                    </div>
                                    <div class="widget-products__info">
                                        <div class="widget-products__name">
                                            <a href="product.html">Electric Planer Brandix KL370090G
                                                300 Watts</a>
                                        </div>
                                        <div class="widget-products__prices">
                                            $749.00
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-products__item">
                                    <div class="widget-products__image">
                                        <a href="product.html"><img
                                                    src="template/red_stroyka/images/products/product-2.jpg"
                                                    alt=""></a>
                                    </div>
                                    <div class="widget-products__info">
                                        <div class="widget-products__name">
                                            <a href="product.html">Undefined Tool IRadix DPS3000SY
                                                2700 Watts</a>
                                        </div>
                                        <div class="widget-products__prices">
                                            $1,019.00
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-products__item">
                                    <div class="widget-products__image">
                                        <a href="product.html"><img
                                                    src="template/red_stroyka/images/products/product-3.jpg"
                                                    alt=""></a>
                                    </div>
                                    <div class="widget-products__info">
                                        <div class="widget-products__name">
                                            <a href="product.html">Drill Screwdriver Brandix ALX7054
                                                200 Watts</a>
                                        </div>
                                        <div class="widget-products__prices">
                                            $850.00
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-products__item">
                                    <div class="widget-products__image">
                                        <a href="product.html"><img
                                                    src="template/red_stroyka/images/products/product-4.jpg"
                                                    alt=""></a>
                                    </div>
                                    <div class="widget-products__info">
                                        <div class="widget-products__name">
                                            <a href="product.html">Drill Series 3 Brandix KSR4590PQS
                                                1500 Watts</a>
                                        </div>
                                        <div class="widget-products__prices">
                                            <span class="widget-products__new-price">$949.00</span>
                                            <span class="widget-products__old-price">$1189.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-products__item">
                                    <div class="widget-products__image">
                                        <a href="product.html"><img
                                                    src="template/red_stroyka/images/products/product-5.jpg"
                                                    alt=""></a>
                                    </div>
                                    <div class="widget-products__info">
                                        <div class="widget-products__name">
                                            <a href="product.html">Brandix Router Power Tool
                                                2017ERXPK</a>
                                        </div>
                                        <div class="widget-products__prices">
                                            $1,700.00
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shop-layout__content">
            <div class="block">
                <div class="products-view">
                    <div class="products-view__options">
                        <div class="view-options view-options--offcanvas--mobile">
                            <div class="view-options__filters-button">
                                <button type="button" class="filters-button">
                                    <svg class="filters-button__icon" width="16px" height="16px">
                                        <use xlink:href="template/red_stroyka/images/sprite.svg#filters-16"></use>
                                    </svg>
                                    <span class="filters-button__title">Filters</span>
                                    <span class="filters-button__counter">3</span>
                                </button>
                            </div>
                            <div class="view-options__layout">
                                <div class="layout-switcher">
                                    <div class="layout-switcher__list">
                                        <button data-layout="grid-3-sidebar"
                                                data-with-features="false" title="Grid"
                                                type="button"
                                                class="layout-switcher__button  layout-switcher__button--active ">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="template/red_stroyka/images/sprite.svg#layout-grid-16x16"></use>
                                            </svg>
                                        </button>
                                        <button data-layout="grid-3-sidebar"
                                                data-with-features="true" title="Grid With Features"
                                                type="button" class="layout-switcher__button ">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="template/red_stroyka/images/sprite.svg#layout-grid-with-details-16x16"></use>
                                            </svg>
                                        </button>
                                        <button data-layout="list" data-with-features="false"
                                                title="List" type="button"
                                                class="layout-switcher__button ">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="template/red_stroyka/images/sprite.svg#layout-list-16x16"></use>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="view-options__legend">Showing 6 of 98 products</div>
                            <div class="view-options__divider"></div>
                            <div class="view-options__control">
                                <label for="">Sort By</label>
                                <div>
                                    <select class="form-control form-control-sm" name="" id="">
                                        <option value="">Default</option>
                                        <option value="">Name (A-Z)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="view-options__control">
                                <label for="">Show</label>
                                <div>
                                    <select class="form-control form-control-sm" name="" id="">
                                        <option value="">12</option>
                                        <option value="">24</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="products-view__list products-list" data-layout="grid-3-sidebar"
                         data-with-features="false" data-mobile-grid-columns="2">
                        <div class="products-list__body">
                            <?php foreach ($goods as $good): ?>
                                <?= $this->render('@currentSiteView/good/_item', ['good' => $good]); ?>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <div class="products-view__pagination">
                        <?= \yii\widgets\LinkPager::widget([
                            'pagination' => $pages,
                            'activePageCssClass' => 'page-item active',
                            'options' => [
                                'class' => 'pagination justify-content-center'//for ul
                            ],
                            'linkOptions'=>[
                                    'class'=>'page-link'
                            ]

                        ]); ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<?php /*?>

<? //= Breadcrumbs::widget(['links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],]);; ?>
<?= Breadcrumbs::widget([
        'links' => isset($breadcrumbs) ? $breadcrumbs : [],
        'homeLink' => ['label' => 'Главная', 'url' => '/'],
    ]
); ?>
<?php if ($category->advantages): ?>
    <?= $category->advantages; ?>
<?php else: ?>

    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            <div class="why-we__block">
                <img class="why-we__img"
                     src="https://xn----7sbabxbe8akco3bgai8m.xn--p1ai/images/main/schedule.svg"
                     alt="10 лет работы на рынке">
                <div class="why-we__text-block">
                    <p class="why-we__caption">11 лет</p>
                    <p class="why-we__text">Бесплатная доставка при покупке от 3000 руб.</p>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            <div class="why-we__block">
                <img class="why-we__img"
                     src="https://xn----7sbabxbe8akco3bgai8m.xn--p1ai/images/main/schedule.svg"
                     alt="10 лет работы на рынке">
                <div class="why-we__text-block">
                    <p class="why-we__caption">11 лет</p>
                    <p class="why-we__text">Вся продукция сертифицирована</p>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            <div class="why-we__block">
                <img class="why-we__img"
                     src="https://xn----7sbabxbe8akco3bgai8m.xn--p1ai/images/main/schedule.svg"
                     alt="10 лет работы на рынке">
                <div class="why-we__text-block">
                    <p class="why-we__caption">11 лет</p>
                    <p class="why-we__text"> Полная конфиденциальность</p>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            <div class="why-we__block">
                <img class="why-we__img"
                     src="https://xn----7sbabxbe8akco3bgai8m.xn--p1ai/images/main/schedule.svg"
                     alt="10 лет работы на рынке">
                <div class="why-we__text-block">
                    <p class="why-we__caption">11 лет</p>
                    <p class="why-we__text">Подарок при первом заказе</p>
                </div>
            </div>
        </div>
    </div>

<?php endif; ?>


    <h2 class="currentCategory"><?= \Yii::$app->controller->title; ?></h2>


    <div class="row categoryBlock">

        <?php
        if (isset($allCategory) && count($allCategory) > 3) {
            $catBegin = array_slice($allCategory, 0, 3);
            $catOther = array_slice($allCategory, 3);

        }
        ?>
        <?php foreach ($allCategory as $category): ?>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <a href="/catalog/<?= $category->slug; ?>"
                   class="subCategoryA"><?= $category->name; ?></a>
            </div>
        <?php endforeach; ?>

    </div>

    <div class="row productsList">
        <?php foreach ($goods as $good): ?>
            <?= $this->render('@currentSiteView/good/_item', ['good' => $good]); ?>
        <?php endforeach; ?>

    </div>
<?php /* ;?>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <?= \Yii::$app->cart->itemCount(); ?>
    </div>
</div>
<div class="row">LinkPager
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h1>Корзина</h1>
        <hr><hr>
    </div>
    <?php foreach (\Yii::$app->cart->allItems() as $item): ?>
        <h2><?= $item['name']; ?></h2>
        <h2><?= $item['quentity']; ?></h2>
        <hr>
    <?php endforeach; ?>
</div>

 */; ?>


<?php if ($category->desc): ?>
    <?= $category->desc; ?>
<?php endif; ?>

