<?php

namespace app\modules\admin\controllers;

use Yii;
use app\models\Changes;
use app\models\ChangesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ChangesController implements the CRUD actions for Changes model.
 */
class ChangesController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function beforeAction($action)
    {
        if ((Yii::$app->user->isGuest)) {
            return $this->redirect(('/site/login'));
        }
        if (!(Yii::$app->user->can('theCreator'))) {

            return $this->redirect(('/site/login'));
        }

        return parent::beforeAction($action);
    }
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Changes models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ChangesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Changes model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->renderAjax('view', [
            'model' => $this->findModel($id),
        ]);
    }
    public function actionFull($id)
    {
        return $this->renderAjax('full', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Changes model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Changes();

        if ($model->load(Yii::$app->request->post()) ) {

            function rasm($model,$qiymat){
                $file = UploadedFile::getInstance($model, $qiymat);
                if (isset($file))
                {
                    $filename = uniqid() . '.' . $file->extension;
                    $path = 'uploads/';
                    if (!file_exists($path)) {
                        mkdir($path,0777,true);
                    }
                    $path = 'uploads/' . $filename;
                    if ($file->saveAs($path))
                    {
                        return $path;
                    }
                }
            }
            $model->photo = rasm($model, 'photo');
            $model->save();

            return $this->redirect(['index']);
        }

        return $this->renderAjax('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Changes model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $model2 = clone $model;

        if ($model->load(Yii::$app->request->post()) ) {
            function qayta($model,$rasm, $model2){
                $file = UploadedFile::getInstance($model, $rasm);
                if ($model2->photo==null || $file!=null) {
                    if (isset($file))
                    {
                        $filename = uniqid() . '.' . $file->extension;
                        $path = 'uploads/' . $filename;
                        $path2 = 'uploads/' . $model2->photo;

                        if (is_file($path2)) {
                            @unlink($path2);
                        }
                        if ($file->saveAs($path))
                        {
                            return $path;
                        }
                    }
                    else return $model2->photo;
                }
                else return $model2->photo;
            }
            $model->photo = qayta($model, 'photo', $model2);
            $model->save();
            return $this->redirect(['index']);
        }

        return $this->renderAjax('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Changes model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Changes model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Changes the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Changes::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
