<?php

use yii\helpers\ArrayHelper;

$params = ArrayHelper::merge(
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'name' => 'Financial Planner',
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
            'class' => \app\modules\main\Module::class,
        ],
        'user' => [
            'class' => \app\modules\user\Module::class,
        ],
        'admin' => [
            'class' => \app\modules\admin\Module::class,
        ],
        'fin' => [
            'class' => \app\modules\fin\Module::class,
        ],
    ],
    'components' => [
        'formatter' => [
            'class' => \yii\i18n\Formatter::class,
            'defaultTimeZone' => 'Europe/Moscow',
            'timeZone' => 'Europe/Moscow',
        ],
        'i18n' => [
            'translations' => [
                'app' => [
                    'class' => \yii\i18n\PhpMessageSource::class,
                    'forceTranslation' => true,
                ],
            ],
        ],
        'db' => [
            'class' => \yii\db\Connection::class,
            'charset' => 'utf8',
        ],
        'urlManager' => [
            'class' => \yii\web\UrlManager::class,
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
            'class' => \yii\swiftmailer\Mailer::class,
        ],
        'cache' => [
            'class' => \yii\caching\MemCache::class,
            'useMemcached' => true,
        ],
        'log' => [
            'class' => \yii\log\Dispatcher::class,
        ],
    ],
    'container' => require(__DIR__ . '/containers.php'),
    'params' => $params,
];
