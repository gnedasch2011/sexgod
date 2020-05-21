<?php

namespace frontend\assets;


use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class RedStroykaAsset extends AssetBundle
{
    public $basePath = '@webroot';

    public $js = [
//        'template/red_stroyka/vendor/jquery/jquery.min.js',
        '/template/red_stroyka/vendor/bootstrap/js/bootstrap.bundle.min.js',
        '/template/red_stroyka/vendor/owl-carousel/owl.carousel.min.js',
        '/template/red_stroyka/vendor/nouislider/nouislider.min.js',
        '/template/red_stroyka/vendor/photoswipe/photoswipe.min.js',
        '/template/red_stroyka/vendor/photoswipe/photoswipe-ui-default.min.js',
        '/template/red_stroyka/vendor/svg4everybody/svg4everybody.min.js',
        '/template/red_stroyka/js/number.js',
        '/template/red_stroyka/vendor/select2/js/select2.min.js',
        '/template/red_stroyka/js/main.js',
        '/template/red_stroyka/js/header.js',

        '/js/main.js',

        //модули
        '/js/cart.js'
    ];
    public $css = [
        'https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i',
        'template/red_stroyka/vendor/bootstrap/css/bootstrap.min.css',
        'template/red_stroyka/vendor/owl-carousel/assets/owl.carousel.min.css',
        'template/red_stroyka/vendor/photoswipe/default-skin/default-skin.css',
        'template/red_stroyka/vendor/fontawesome/css/all.min.css',
        'template/red_stroyka/vendor/select2/css/select2.min.css',
        'template/red_stroyka/fonts/stroyka/stroyka.css',
        'template/red_stroyka/css/sexgod.css',
        'template/red_stroyka/css/style.css',
        'template/red_stroyka/css/abstractForJs.css',
    ];
    public $baseUrl = '@web';
    public $depends = [
        'yii\web\YiiAsset',
        'frontend\assets\AppAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
