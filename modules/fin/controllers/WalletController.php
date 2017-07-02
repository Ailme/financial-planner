<?php

namespace app\modules\fin\controllers;

use app\modules\fin\services\WalletService;
use app\modules\fin\services\WalletServiceInterface;
use Yii;
use yii\web\Controller;

/**
 * Class WalletController
 *
 * @package app\modules\fin\controllers
 */
class WalletController extends Controller
{
    /**
     * @var \app\modules\fin\Module
     */
    public $module;

    /**
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * @param $id
     *
     * @return string
     */
    public function actionView($id)
    {
        /** @var WalletService $service */
        $service = Yii::$container->get(WalletServiceInterface::class);
        $model = $service->get($id);

        return $this->render('view', compact('model'));
    }
}
