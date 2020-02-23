<?php

/* @var $this \yii\web\View */

/* @var $content string */

use frontend\assets\AppAsset;


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<?= $this->render('_blocks/header') ?>
        <?= $content ?>
<?= $this->render('_blocks/footer') ?>

<?php $this->endBody() ?>
<!--<script type="text/javascript" src="//api.venyoo.ru/wnew.js?wc=venyoo/default/science&widget_id=5352796282028032"></script>-->
</body>
</html>
<?php $this->endPage() ?>
