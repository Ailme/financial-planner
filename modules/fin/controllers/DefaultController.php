<?php

namespace app\modules\fin\controllers;

use yii\web\Controller;

/**
 * Default controller for the `fin` module
 */
class DefaultController extends Controller
{
    /**
     * @var \app\modules\fin\Module
     */
    public $module;


    /**
     * @return \yii\web\Response
     */
    public function actionIndex()
    {
        return $this->render('index');
    }


}
