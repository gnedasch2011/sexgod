<div class="widget-filters__item">
    <div class="filter filter--opened" data-collapse-item>
        <button type="button" class="filter__title"
                data-collapse-trigger>
            <?= $attr->name; ?>
            <svg class="filter__arrow" width="12px" height="7px">
                <use xlink:href="/template/red_stroyka/images/sprite.svg#arrow-rounded-down-12x7"></use>
            </svg>
        </button>

        <div class="filter__body" data-collapse-content>
            <div class="filter__container">
                <div class="filter-list">
                    <div class="filter-list__list">
                        <!--                        Здесь надо вывести, все значения атрибута, встречающегося в этой категории-->
                    <?php foreach($attr->getValueInAttrProductAndInChildCat(101, 'distinct') as $value):?>

                        <label class="filter-list__item ">
                                                                        <span class="filter-list__input input-check">
                                                                            <span class="input-check__body">
                                                                                <input class="input-check__input"
                                                                                       type="checkbox">
                                                                                <span class="input-check__box"></span>
                                                                                <svg class="input-check__icon"
                                                                                     width="9px"
                                                                                     height="7px">
                                                                                    <use xlink:href="/template/red_stroyka/images/sprite.svg#check-9x7"></use>
                                                                                </svg>
                                                                            </span>
                                                                        </span>
                            <span class="filter-list__title">
                                                                            <?= $value['name'] ;?>
                                                                        </span>
<!--                            todo добавить возврат количества//-->
                            <span class="filter-list__counter">  <?= $value['countItems'] ;?></span>
                        </label>
                    <?php endforeach;?>
<!--                        filter-list__item--disabled-->

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>