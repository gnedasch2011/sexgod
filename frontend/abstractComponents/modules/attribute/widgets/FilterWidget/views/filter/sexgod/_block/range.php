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
                <div class="filter-price"
                     data-min="<?= $attr->getValueInAttrProductAndInChildCat($category->id, 'min') ;?>"
                     data-max="<?= $attr->getValueInAttrProductAndInChildCat($category->id, 'max') ;?>" data-from="<?= $attr->getValueInAttrProductAndInChildCat($category->id, 'min') ;?>" data-to="<?= $attr->getValueInAttrProductAndInChildCat($category->id, 'max') ;?>">
                    <div class="filter-price__slider"></div>
                    <div class="filter-price__title"><?= $attr->name; ?>: <span
                                class="filter-price__min-value"></span> <?= $attr->unit ;?>.
                        – <span
                                class="filter-price__max-value"></span> <?= $attr->unit ;?>.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>