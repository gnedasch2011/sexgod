<?php foreach ($items as $item): ?>
    <div class="block-brands__item">
        <a href="/brand/<?= $item->url; ?>"><img src="/template/red_stroyka/images/brands/<?= $item->path_img; ?>" alt="<?= $item->name; ?>"></a>
    </div>
<?php endforeach; ?>

