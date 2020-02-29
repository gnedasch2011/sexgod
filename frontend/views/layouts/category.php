<?php

/* @var $this \yii\web\View */

/* @var $content string */

use frontend\assets\AppAsset;
use frontend\assets\MetricaAsset;

AppAsset::register($this);
MetricaAsset::register($this);

?>
<?php $this->beginPage() ?>
<?= $this->render('_blocks/header') ?>
<!-- Google Tag Manager (noscript) -->

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?= \Yii::$app->params['gtm'] ;?>"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

        <?= $content ?>
<?= $this->render('_blocks/footer') ?>

<?php $this->endBody() ?>
<!--<script type="text/javascript" src="//api.venyoo.ru/wnew.js?wc=venyoo/default/science&widget_id=5352796282028032"></script>-->
</body>
</html>
<?php $this->endPage() ?>
