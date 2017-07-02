<?php

namespace app\modules\fin;

use yii\base\BootstrapInterface;

/**
 * Class Bootstrap
 *
 * @package app\modules\fin
 */
class Bootstrap implements BootstrapInterface
{
    /**
     * @param \yii\base\Application $app
     */
    public function bootstrap($app)
    {
        $app->i18n->translations['modules/fin/*'] = [
            'class' => 'yii\i18n\PhpMessageSource',
            'forceTranslation' => true,
            'basePath' => '@app/modules/fin/messages',
            'fileMap' => [
                'modules/fin/module' => 'module.php',
            ],
        ];
    }
}
