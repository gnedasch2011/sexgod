<?php
$numItems = 16;
$itemsBegin = $itemsHidden = [];
if (count($items) > $numItems) {
    $itemsBegin = array_slice($items, 0, $numItems);
    $itemsHidden = array_slice($items, $numItems);
} else {
    $itemsBegin = $items;
}
?>

<?php foreach ($itemsBegin as $cat): ?>
    <a href="<?= $cat->fullUrl; ?>" class="tagCategory"><?= $cat->name; ?></a>
<?php endforeach; ?>
<div class="block-categories__list hiddenItemsCssCategory">
    <?php foreach ($itemsHidden as $cat): ?>
        <a href="<?= $cat->fullUrl; ?>" class="tagCategory"><?= $cat->name; ?></a>
    <?php endforeach; ?>
</div>

<?php if (count($items)): ?>
    <div class="text-right">
        <p>
            <a href="#" class="openHiddenItemsJs">Показать больше</a>
        </p>
    </div>
<?php endif; ?>
