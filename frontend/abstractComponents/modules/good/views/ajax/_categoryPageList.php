<?php foreach ($goods as $good): ?>
    <?= $this->render('@frontend/abstractComponents/modules/good/views/site/sexgod/good/_item', ['good' => $good]); ?>
<?php endforeach; ?>
</div>
