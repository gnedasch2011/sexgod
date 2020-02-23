<?php


namespace frontend\assets;
use yii\web\AssetBundle;

class MaskAsset extends AssetBundle
{
    public $basePath = '@webroot';

    public $baseUrl = '@web';
    public $js = [
        '/js/jquery.maskedinput.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}