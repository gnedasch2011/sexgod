<?php

use yii\helpers\Html;

?>
<div class="widget-filters__item">
    <div class="filter <?= $attr->cssFilterOpened; ?>" data-collapse-item>
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
                     data-min="<?= $attr->getValueInAttrProductAndInChildCat($category->id, 'min'); ?>"
                     data-max="<?= $attr->getValueInAttrProductAndInChildCat($category->id, 'max'); ?>"
                     data-from="<?= $attr->getValueInAttrProductAndInChildCat($category->id, 'min'); ?>"
                     data-to="<?= $attr->getValueInAttrProductAndInChildCat($category->id, 'max'); ?>">
                    <div class="filter-price__slider"></div>

                    <div class="filter-price__title"><?= $attr->name; ?>: <span
                                class="filter-price__min-value"></span> <?= $attr->unit; ?>.
                        – <span
                                class="filter-price__max-value"></span> <?= $attr->unit; ?>.
                    </div>

                    <?= Html::hiddenInput("attrs[{$attr->id}][range][min]", $attr->getValueInAttrProductAndInChildCat($category->id, 'min'), [
                        'class' => 'range_filter-price__min-value'
                    ]); ?>

                    <?= Html::hiddenInput("attrs[{$attr->id}][range][max]", $attr->getValueInAttrProductAndInChildCat($category->id, 'max'), [
                        'class' => 'range_filter-price__max-value'
                    ]); ?>

                </div>
            </div>
        </div>
    </div>
</div>