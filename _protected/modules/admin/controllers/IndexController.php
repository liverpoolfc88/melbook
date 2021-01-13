<?php

namespace app\modules\admin\controllers;

use app\models\Client;
use Yii;
use yii\helpers\Url;

class IndexController extends \yii\web\Controller
{


    public function beforeAction($action)
    {
        if ((Yii::$app->user->isGuest)) {
            if (!(Yii::$app->user->can('admin'))){

                return $this->redirect(('/site/login'));
            }
        }
        return parent::beforeAction($action);
    }
//&& ((Yii::$app->user->can('theCreator'))) && ((Yii::$app->user->can('admin')))
    public function actionIndex()
    {
        if ((!(Yii::$app->user->isGuest)) && (Yii::$app->user->can('admin')) ) {
            $model = Client::find()->where('ISNULL(user_id)')->all();
            $count = count($model);

            $model_all = Client::find()->all();
            $count_all = count($model_all);
            $model_connect = Client::find()->where(['not', ['user_id' => null]])->all();
            $count_connect = count($model_connect);

            $percent = empty($count_connect) ? 0 : ($count_connect * 100) / $count_all;
//            var_dump($model_connect); die();
            return $this->render('index', [
                'model' => $model,
                'count' => $count,
                'count_all' => $count_all,
                'count_connect' => $count_connect,
                'percent' => $percent
            ]);
        }
        return $this->redirect(('/site/login'));

    }

}
