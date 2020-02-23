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
        'parsers' => [
            'class' => 'frontend\abstractComponents\modules\parsers\Module',
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
        'cache' => [
            'class' => 'yii\caching\FileCache', // Используем хранилище yii\caching\FileCache
            'cachePath' => '@common/runtime/cache' // Храним кэш в common/runtime/cache
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

        'cart' => [
            'class' => 's\components\CartComponent',
        ],
        'request' => [
            'baseUrl' => '',
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
            'baseUrl' => '/',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                "search"=>"search/index",
                "products/<categoryName:\S+>" => 'site/category',
                "product/<slugItem:\S+>" => 'site/detail-item',
                "support" => 'site/support',
                "<controller:\w+>/<action:\w+>/" => "<controller>/<action>",
                "<module:\w+>/<controller:\w+>/<action:\w+>/" => "<module>/<controller>/<action>",
            ],


        ],

    ],
    'params' => $params,
];
