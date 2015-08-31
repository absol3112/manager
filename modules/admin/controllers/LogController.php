<?php

namespace app\modules\admin\controllers;

use app\modules\admin\models\Log;
use app\modules\admin\models\Product;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Url;

class LogController extends \yii\web\Controller
{
    public function actionIndex()
    {
    	$LogModel = new Log;
    	$logResult = $LogModel->find()->joinWith('product', false, 'INNER JOIN')->all();
        return $this->render('index',[
        	'result'=>$logResult,
        	]);
    }
    public function actionList()
    {
    	return $this->render('list');
    }

}

