<?php

use yii\helpers\Html;

?>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <?php foreach ($categoryList as $category): ?>

            <?= Html::a($category->name, ['/category/' . $category->translate_name]) ?>
            <br>
        <?php endforeach; ?>
    </div>
</div>