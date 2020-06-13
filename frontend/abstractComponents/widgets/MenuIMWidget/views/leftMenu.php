<?php if ($this->beginCache('filtter/leftMenu')): ?>
    <div class="widget-filters__item">
        <div class="filter filter--opened" data-collapse-item>
            <button type="button" class="filter__title" data-collapse-trigger>
                Категории
                <svg class="filter__arrow" width="12px" height="7px">
                    <use xlink:href="/template/red_stroyka/images/sprite.svg#arrow-rounded-down-12x7"></use>
                </svg>
            </button>
            <div class="filter__body" data-collapse-content>
                <div class="filter__container">
                    <div class="filter-categories">
                        <ul class="filter-categories__list">
                            <?php foreach ($menuItem as $item): ?>
                                <?php
                                $urlCat = "/catalog/$item->slug/";
                                ?>
                                <li class="filter-categories__item filter-categories__item--parent">
                                    <svg class="filter-categories__arrow" width="6px" height="9px">
                                        <use xlink:href="/template/red_stroyka/images/sprite.svg#arrow-rounded-left-6x9"></use>
                                    </svg>
                                    <a href="<?= $urlCat; ?>"><?= $item->name; ?></a>
                                    <div class="filter-categories__counter"><?= $item->countItems; ?></div>
                                </li>

                                <ul class="submenu-cat">
                                    <?php foreach ($item->subMenu as $subItem): ?>
                                        <?php if ($subItem->countItems): ?>
                                            <?php if ($subItem->slug == 'yaponskie-seks-igrushki'): ?>
                                            <?php endif; ?>
                                            <li class="filter-categories__item filter-categories__item--child">
                                                <a href="<?= "/catalog/$subItem->slug/"; ?>"><?= $subItem->name; ?></a>
                                                <div class="filter-categories__counter"><?= $subItem->countItems; ?></div>
                                            </li>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </ul>


                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->endCache(); ?>
<?php endif; ?>


