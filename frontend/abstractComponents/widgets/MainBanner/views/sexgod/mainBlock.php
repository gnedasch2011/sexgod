<?php foreach ($items as $item): ?>
    <?php
    $desctopImg = $path . '/' . $item['desctopImg'];
    $mobileImg = $path . '/' . $item['mobileImg'];
    ?>
    <a class="block-slideshow__slide" href="">
        <div class="block-slideshow__slide-image block-slideshow__slide-image--desktop"
             style="background-image: url('<?= $desctopImg ?>')"></div>
        <div class="block-slideshow__slide-image block-slideshow__slide-image--mobile"
             style="background-image: url('<?= $mobileImg ?>')"></div>
        <div class="block-slideshow__slide-content">
            <div class="block-slideshow__slide-title"><?= $item['slideTitle']; ?></div>
            <div class="block-slideshow__slide-text"><?= $item['slideText']; ?></div>
            <div class="block-slideshow__slide-button">

                <span class="btn btn-primary btn-lg">Перейти в магазин</span>
            </div>
        </div>
    </a>
<?php endforeach; ?>
