<?php foreach ($items as $item): ?>
    <div class="block-features__item">
        <div class="block-features__icon">
            <object type="image/svg+xml" data="<?= $item['img'] ;?>" width="60px" height="60px" >

            </object>
        </div>
        <div class="block-features__content">
            <div class="block-features__title"><?= $item['slideTitle'] ;?></div>
            <div class="block-features__subtitle"><?= $item['slideText'] ;?></div>
        </div>
    </div>
    <div class="block-features__divider"></div>
<?php endforeach; ?>
