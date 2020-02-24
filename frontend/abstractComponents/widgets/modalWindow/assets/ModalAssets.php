<?php


namespace frontend\abstractComponents\widgets\modalWindow\assets;


use yii\web\AssetBundle;

class ModalAssets extends AssetBundle
{
    public $basePath = '@app';
    public $css = [

    ];
    public $baseUrl = '/frontend/abstractComponents/widgets/modalWindow';

    public $js = [
        'js/modal.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}