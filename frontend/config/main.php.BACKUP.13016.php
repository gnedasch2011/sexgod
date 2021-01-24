<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);


return [
    'id' => 'app-frontend',
    'aliases' => [
        '@currentSiteView' => '@app/views/site/sexgod',
    ],
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',

    'modules' => [
        'gii' => [
            'class' => 'yii\gii\Module',
            'allowedIPs' => ['*'],
        ],
        'attribute' => [
            'class' => 'frontend\abstractComponents\modules\attribute\Module',
        ],

        'parsers' => [
            'class' => 'frontend\abstractComponents\modules\parsers\Module',
        ],

        'category' => [
            'class' => 'frontend\abstractComponents\modules\category\Module',
        ],
        'site' => [
            'class' => 'frontend\abstractComponents\modules\site\Module',
        ],
        'order' => [
            'class' => 'frontend\abstractComponents\modules\order\Module',
        ],
        'good' => [
            'class' => 'frontend\abstractComponents\modules\good\Module',
        ],

        'brand' => [
            'class' => 'frontend\abstractComponents\modules\brand\Module',
        ],
        'page' => [
            'class' => 'frontend\abstractComponents\modules\page\Module',
        ],
        'debug' => [
            'class' => 'yii\debug\Module',
            'allowedIPs' => ['*'],
        ],
//        'search' => [
//            'class' => 'app\modules\search\Module',
//        ],
    ],

    'components' => [
        'cart' => [
            'class' => 'frontend\abstractComponents\modules\cart\components\Cart'
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache', // Используем хранилище yii\caching\FileCache
            'cachePath' => '@frontend/runtime/cache' // Храним кэш в common/runtime/cache
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            'useFileTransport' => false,
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'mail.nic.ru',
                'username' => 'info@m-s-cam.ru',
                'password' => '8fpqQQjjf9',
                'port' => '587',
//                'encryption' => 'tls',
            ],
        ],

        'request' => [
            'baseUrl' => '',
            'enableCookieValidation' => false,
            'enableCsrfValidation' => false,
            'csrfParam' => '_csrf-frontend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],

        'urlManager' => [
            'suffix' => '/',
            'normalizer' => [
                'class' => 'yii\web\UrlNormalizer',
                'normalizeTrailingSlash' => true,
                'collapseSlashes' => true,
            ],
            'baseUrl' => '/',
            'enablePrettyUrl' => true,
            'showScriptName' => false,

            'rules' => [

                "sitemap/otherUrls/" => "site/site/sitemap-other-urls",
                "sitemap/<SitemapPage:\w+>/" => "site/site/sitemap-page",
                "search" => "search/index",
                "brand/<brandName:\S+>/" => "brand/site/index",
//
//                "catalog/<categoryName:\S+>/" => 'category/site/category',

                "product/<slugItem:\S+>" => 'good/site/detail-item',
                "support" => 'site/support',

                "about" => "page/site/about",
                "contacts" => "page/site/contacts",
                "dostavka" => "page/site/dostavka",
                "oplata" => "page/site/oplata",
                "anonimnost" => "page/site/anonimnost",
                "garantiya" => "page/site/garantiya",
                "" => "site/site/index",
                "sitemap.xml/" => "site/site/sitemap",
<<<<<<< HEAD
                "test/" => "site/site/test",
=======

                [
                    // ...настройка других параметров правила...
                    'class' => '\frontend\abstractComponents\modules\url\components\UrlRules',
                ],

                "<controller:\w+>/<action:\w+>/" => "<controller>/<action>",
                "<module:\w+>/<controller:\w+>/<action:\w+>/" => "<module>/<controller>/<action>",

>>>>>>> 7b4b26f368bef4267b56b99342d7b39d4cf6ff98
            ],

        ],

    ],

    'params' => $params,
];