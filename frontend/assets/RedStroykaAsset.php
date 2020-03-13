<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class RedStroykaAsset extends AssetBundle
{
    public $basePath = '@webroot';

    public $css = [
        'https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i',
        'template/red_stroyka/vendor/bootstrap/css/bootstrap.min.css',
        'template/red_stroyka/vendor/owl-carousel/assets/owl.carousel.min.css',
        'template/red_stroyka/vendor/photoswipe/default-skin/default-skin.css',
        'template/red_stroyka/vendor/fontawesome/css/all.min.css',
        'template/red_stroyka/vendor/select2/css/select2.min.css',
        'template/red_stroyka/fonts/stroyka/stroyka.css',
        'template/red_stroyka/css/style.css',
    ];
    public $baseUrl = '@web';
    public $js = [
//        'js/jquery.maskedinput.min.js',
//        'js/cart.js',
//        'js/main.js',
//        'https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
