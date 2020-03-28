<?php

namespace frontend\abstractComponents\widgets\TagTile\assets;

use yii\web\AssetBundle;

class TagAssets extends AssetBundle
{
    public $basePath = '@frontend';
//    public $baseUrl = '@web';
    public $css = [
    '/frontend/abstractComponents/widgets/TagTile/css/tag.css',
];

    public $js = [
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}