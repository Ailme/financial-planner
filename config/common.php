<?php

use yii\helpers\ArrayHelper;

$params = ArrayHelper::merge(
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'name' => 'Demo Application',
    'language' => 'ru',
    'sourceLanguage' => 'ru',
    'basePath' => dirname(__DIR__),
    'bootstrap' => [
        'log',
        'app\modules\admin\Bootstrap',
        'app\modules\main\Bootstrap',
        'app\modules\user\Bootstrap',
        'app\modules\fin\Bootstrap',
    ],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
    ],
    'modules' => [
        'main' => [
            'class' => 'app\modules\main\Module',
        ],
        'user' => [
            'class' => 'app\modules\user\Module',
        ],
        'admin' => [
            'class' => 'app\modules\admin\Module',
        ],
        'fin' => [
            'class' => 'app\modules\fin\Module',
        ],
    ],
    'components' => [
        'formatter' => [
            'class' => 'yii\i18n\Formatter',
            'defaultTimeZone' => 'Europe/Moscow',
            'timeZone' => 'Europe/Moscow',
        ],
        'i18n' => [
            'translations' => [
                'app' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'forceTranslation' => true,
                ],
            ],
        ],
        'db' => [
            'class' => 'yii\db\Connection',
            'charset' => 'utf8',
        ],
        'urlManager' => [
            'class' => 'yii\web\UrlManager',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '' => 'main/default/index',
                '<_a:error>' => 'main/default/<_a>',
                '<_a:(login|logout|signup|email-confirm|request-password-reset|password-reset)>' => 'user/default/<_a>',

                '<_m:[\w\-]+>/<_c:[\w\-]+>/<id:\d+>' => '<_m>/<_c>/view',
                '<_m:[\w\-]+>/<_c:[\w\-]+>/<id:\d+>/<_a:[\w\-]+>' => '<_m>/<_c>/<_a>',
                '<_m:[\w\-]+>' => '<_m>/main/index',
                '<_m:[\w\-]+>/<_c:[\w\-]+>' => '<_m>/<_c>/index',
            ],
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
        ],
        'cache' => [
            'class' => 'yii\caching\DummyCache',
        ],
        'log' => [
            'class' => 'yii\log\Dispatcher',
        ],
    ],
    'params' => $params,
];
