<?php


namespace frontend\assets;
use yii\web\AssetBundle;

class LightBoxAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $css = [
        'css/lightbox/lightbox.css',
    ];
    public $baseUrl = '@web';
    public $js = [
        'css/lightbox/lightbox.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}