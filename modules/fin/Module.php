<?php

namespace app\modules\fin;

use app\modules\fin\repositories\SqlWalletRepository;
use app\modules\fin\repositories\WalletRepositoryInterface;
use app\modules\fin\services\WalletService;
use app\modules\fin\services\WalletServiceInterface;
use Yii;
use yii\console\Application as ConsoleApplication;

/**
 * user module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'app\modules\fin\controllers';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        if (Yii::$app instanceof ConsoleApplication) {
            $this->controllerNamespace = 'app\modules\fin\commands';
        }

        Yii::$container->set(WalletRepositoryInterface::class, SqlWalletRepository::class);
        Yii::$container->set(WalletServiceInterface::class, WalletService::class);
    }

    /**
     * @param $category
     * @param $message
     * @param array $params
     * @param null $language
     *
     * @return string
     */
    public static function t($category, $message, $params = [], $language = null)
    {
        return Yii::t('modules/fin/' . $category, $message, $params, $language);
    }
}
