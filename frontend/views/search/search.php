<h2>Результаты поиска по запросу <?= $search->search; ?>:</h2>

<?php if ($products): ?>
    <?php foreach ($products as $product): ?>
        <?= $this->render('/site/goods/_item-for-search', [
            'product' => $product
        ]);?>
    <?php endforeach; ?>
<?php endif; ?>