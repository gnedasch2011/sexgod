<?php foreach ($items as $item): ?>
    <div class="block-features__item">
        <div class="block-features__icon">
            <svg width="48px" height="48px">
                <use xlink:href="<?= $item['img'] ;?>"></use>
            </svg>
        </div>
        <div class="block-features__content">
            <div class="block-features__title"><?= $item['slideTitle'] ;?></div>
            <div class="block-features__subtitle"><?= $item['slideText'] ;?></div>
        </div>
    </div>
    <div class="block-features__divider"></div>
<?php endforeach; ?>
