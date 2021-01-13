<?php

namespace app\modules\admin\controllers;

use app\models\Book;
use app\models\Client;
use Yii;
use yii\web\Controller;
use yii\web\Response;
use app\models\Orderclient;

/**
 * Default controller for the `admin` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */

    public function beforeAction($action)
    {
        if ((Yii::$app->user->isGuest)) {
            if (!(Yii::$app->user->can('admin'))){

                return $this->redirect(('/site/login'));
            }
        }
        return parent::beforeAction($action);
    }
    public function actionIndex()
    {
        if (!(Yii::$app->user->isGuest)) {
            $model = Client::find()
                ->where('ISNULL(user_id)')
                ->all();
            return $this->render('index', [
                'model' => $model
            ]);
        }
        return $this->goHome();
    }

    public $enableCsrfValidation = false;

    public function actionIndex2()
    {
        $request = Yii::$app->request;
        $client = Client::find()->where('ISNULL(user_id)')->all();
        $jadval=[];

        foreach ($client as$key=>$value){
            $massiv = [];
            $book = $value->getOrders()->all();
            foreach($book as $k=>$v){
            $massiv[] = $v->book->name;
        }
            $kitoblar = implode(",", $massiv);
            array_push($jadval, (object)
            [
               'connect_at'=> $value->connect_at,
               'create_at'=> $value->create_at,
               'id'=> $value->id,
               'name'=> $value->name,
               'phone'=> $value->phone,
               'user_id'=> $value->user_id,
               'book'=> $kitoblar
            ]);
        }
        \Yii::$app->response->format = Response::FORMAT_JSON;
        return [
            'jadval' => $jadval
        ];
    }

    public function actionWork()
    {
        if (!(Yii::$app->user->isGuest)) {
            $id = Yii::$app->user->identity->id;
            $model = Client::find()->where(['user_id' => $id])->all();

            return $this->render('work', [
                'model' => $model
            ]);
        }
        return $this->goHome();

    }
    public function actionDelete()
    {
        $id = $_GET['id'];
        $model = Client::find()->where(['id'=>$id])->one();

        // var_dump($model); die();
        $model->delete();
        Orderclient::deleteAll([
            'AND',
            'client_id' => $id,           
        ]); 

        // $order = Orderclient::find()->where('client_id'=>$id)->all();
        // $order->delete();

        Yii::$app->response->format = 'json';
        return [
            'result' => 'success',

        ];
    }

    public function actionConnect()
    {
        \Yii::$app->response->format = Response::FORMAT_JSON;
        $get_id = $_GET['id'];
        $id = Yii::$app->user->identity->id;
        // $model = new Client();
        $model = Client::find()->where(['id' => $get_id])->one();
        // var_dump($get_id); die();
        $model->user_id = $id;
        $model->connect_at = date("Y-m-d H:i:s");
        $model->save();

        Yii::$app->response->format = 'json';
        return [
            'result' => 'success',

        ];

    }

}
