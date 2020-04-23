<?php
if (count($items) > 9) {
    $itemsBegin = array_slice($items, 0, 9);
    $itemsHidden = array_slice($items, 9);
}
?>
<div class="block-categories__list">
    <?php foreach ($itemsBegin as $item): ?>

    <?php endforeach; ?>
</div>

<div class="block-categories__list hiddenItemsCssCategory">
    <?php foreach ($itemsHidden as $item): ?>

    <?php endforeach; ?>
</div>

<div class="text-right">
    <p>
        <a href="#" class="openHiddenItemsJs">Показать больше</a>
    </p>
</div>