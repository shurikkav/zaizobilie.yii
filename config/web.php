<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';
$dbCatalog = require __DIR__ . '/db_catalog.php';

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'KLJadiaioSD342aouIQkjwjkHWLIEUT',
            'BaseUrl'=>'',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
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
        'db' => $db,
        'dbCatalog' => $dbCatalog,

        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'enableStrictParsing' => false,
            'rules' => [
                'news/index'=>'news/index',
                'news/list'=>'news/index',
                'news/page/<page:\d+>/'=>'news/index',
                'news/view/<id:\d+>/'=>'news/view',
                'page/<id:\d+>/'=>'site/page',
                'articles/rubrics/<id:\d+>/'=>'articles/rubrics',
                'articles/rubrics/<id:\d+>/page/<page:\d+>/'=>'articles/rubrics',
                'articles/view/<id:\d+>/'=>'articles/view',
                'articles/issue/<id:\d+>/'=>'articles/issue',
                'articles/issues/'=>'articles/issues',
                'articles/issues/<page:\d+>/'=>'articles/issues',
                'contact/'=>'site/contact',
                'contact'=>'site/contact',
                'login'=>'site/login',
                'subscibe/index'=>'subscibe/index',
                'subscibe/unsubscibe'=>'subscibe/unsubscibe',
            ],
        ],
        ''

    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
