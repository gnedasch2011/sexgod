<?php foreach ($childsCurrentCategory as $slug => $name): ?>
    <a href="<?= $path . $slug; ?>/" class="tagCategory"><?= $name; ?></a>
<?php endforeach; ?>
