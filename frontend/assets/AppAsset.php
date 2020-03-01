<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $css = [
        'https://use.fontawesome.com/releases/v5.8.1/css/all.css',
        'https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css',
        'css/site.css',
        'css/sexgod.css',
        'css/im_video.css',
        'css/fonts/pt-sans/stylesheet.css',
    ];
    public $baseUrl = '@web';
    public $js = [
        'js/jquery.maskedinput.min.js',
        'js/cart.js',
        'js/main.js',
        'https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
