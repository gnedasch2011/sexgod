<?php
if (count($items) > 9) {
    $itemsBegin = array_slice($items, 0, 9);
    $itemsHidden = array_slice($items, 9);
}

?>
<div class="block-categories__list">
    <?php foreach ($itemsBegin as $item): ?>
        <div class="block-categories__item category-card category-card--layout--compact">
            <div class="category-card__body">
                <div class="category-card__image">
                    <a href="<?= $item->getDetailUrl(); ?>">
                        <?= \frontend\abstractComponents\modules\images\widgets\ImageOutputWidget\ImageOutputWidget::widget([
                            'item' => $item->imgItems,
                            'template' => 'default',
                        ]); ?>
                        <img
                                src="/template/red_stroyka/images/categories/category-1.jpg"
                                alt=""></a>

                </div>
                <div class="category-card__content">
                    <div class="category-card__name">
                        <a href="<?= $item->getDetailUrl(); ?>"><?= $item->name; ?></a>
                    </div>
                    <ul class="category-card__links">
                        <li><a href="<?= $item->getDetailUrl(); ?>">Screwdrivers</a></li>
                        <li><a href="">Milling Cutters</a></li>
                        <li><a href="">Sanding Machines</a></li>
                        <li><a href="">Wrenches</a></li>
                        <li><a href="">Drills</a></li>
                    </ul>
                    <div class="category-card__all">
                        <a href="">Show All</a>
                    </div>
                    <div class="category-card__products">
                        <?= $item->countItems; ?> продуктов
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<div class="block-categories__list hiddenItemsCssCategory">
    <?php foreach ($itemsHidden as $item): ?>
        <div class="block-categories__item category-card category-card--layout--compact"

        >
            <div class="category-card__body">
                <div class="category-card__image">
                    <a href="<?= $item->getDetailUrl(); ?>">
                        <?= \frontend\abstractComponents\modules\images\widgets\ImageOutputWidget\ImageOutputWidget::widget([
                            'item' => $item->imgItems,
                            'template' => 'default',
                        ]); ?>
                        <img
                                src="/template/red_stroyka/images/categories/category-1.jpg"
                                alt=""></a>

                </div>
                <div class="category-card__content">
                    <div class="category-card__name">
                        <a href="<?= $item->getDetailUrl(); ?>"><?= $item->name; ?></a>
                    </div>
                    <ul class="category-card__links">
                        <li><a href="<?= $item->getDetailUrl(); ?>">Screwdrivers</a></li>
                        <li><a href="">Milling Cutters</a></li>
                        <li><a href="">Sanding Machines</a></li>
                        <li><a href="">Wrenches</a></li>
                        <li><a href="">Drills</a></li>
                    </ul>
                    <div class="category-card__all">
                        <a href="">Show All</a>
                    </div>
                    <div class="category-card__products">
                        <?= $item->countItems; ?> продуктов
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<div class="text-right">
    <p>
        <a href="#" class="openHiddenItemsJs">Показать больше</a>
    </p>
</div>