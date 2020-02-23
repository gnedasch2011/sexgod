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

        'css/site.css',
        'css/sexgod.css',
        'css/im_video.css',
        'css/fonts/pt-sans/stylesheet.css',
    ];
    public $baseUrl = '@web';
    public $js = [
        'js/jquery.maskedinput.min.js',
        'js/cart.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
