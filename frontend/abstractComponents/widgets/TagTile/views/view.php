<?php

use frontend\abstractComponents\widgets\TagTile\assets\TagAssets;

TagAssets::register($this);
?>

<?php foreach ($childsCurrentCategory as $slug => $name): ?>
    <a href="<?= $path . $slug; ?>/" class="tagCategory"><?= $name; ?></a>
<?php endforeach; ?>
