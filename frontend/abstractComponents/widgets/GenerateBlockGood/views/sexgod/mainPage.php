<div class="row">
    <?php foreach ($items as $product): ?>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
            <?= $this->render('@frontend/abstractComponents/modules/good/views/site/sexgod/good/_item', ['good' => $product]); ?>
        </div>
    <?php endforeach; ?>
</div>
