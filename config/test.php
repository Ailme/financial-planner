<?php

Yii::setAlias('@tests', dirname(__DIR__) . '/tests');

return [
    'id' => 'app-test',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'app\commands',
];
