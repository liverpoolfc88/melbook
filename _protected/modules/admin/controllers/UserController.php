<?php
namespace app\modules\admin\controllers;

use app\models\User;
use app\models\UserSearch;
use yii\web\NotFoundHttpException;
use yii\web\ServerErrorHttpException;
use Yii;

/**
 * UserController implements the CRUD actions for User model.
 */
//class UserController extends AppController
class UserController extends \yii\web\Controller
{
    /**
     * How many users we want to display per page.
     * @var int
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
    protected $_pageSize = 11;

    /**
     * Lists all User models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new UserSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams, $this->_pageSize);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single User model.
     *
     * @param  integer $id The user id.
     * @return string
     *
     * @throws NotFoundHttpException
     */
    public function actionView($id)
    {
        return $this->renderAjax('view', ['model' => $this->findModel($id)]);
    }

    /**
     * Creates a new User model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     *
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $user = new User(['scenario' => 'create']);

        if (!$user->load(Yii::$app->request->post())) {
            return $this->renderAjax('create', ['user' => $user]);
        }

        $user->setPassword($user->password);
        $user->generateAuthKey();

        if (!$user->save()) {
            return $this->renderAjax('create', ['user' => $user]);
        }

        $auth = Yii::$app->authManager;
        $role = $auth->getRole($user->item_name);
        $info = $auth->assign($role, $user->getId());

        if (!$info) {
            Yii::$app->session->setFlash('error', Yii::t('app', 'There was some error while saving user role.'));
        }

        return $this->redirect('index');
    }

    public function actionTable(){

        $model = User::find()->all();
        

         return $this->render('table',[
             'model' => $model
         ]);

    }

    /**
     * Updates an existing User and Role models.
     * If update is successful, the browser will be redirected to the 'view' page.
     *
     * @param  integer $id The user id.
     * @return string|\yii\web\Response
     *
     * @throws NotFoundHttpException
     */
    public function actionUpdate($id)
    {
//        $user = User::find()->where(['id'=> 1])->one();
        if ($id == 1){
            return $this->goHome();
        }
        // load user data
        $user = $this->findModel($id);

        $auth = Yii::$app->authManager;

        // get user role if he has one
        if ($roles = $auth->getRolesByUser($id)) {
            // it's enough for us the get first assigned role name
            $role = array_keys($roles)[0];
        }

        // if user has role, set oldRole to that role name, else offer 'member' as sensitive default
        $oldRole = (isset($role)) ? $auth->getRole($role) : $auth->getRole('member');

        // set property item_name of User object to this role name, so we can use it in our form
        $user->item_name = $oldRole->name;

        if (!$user->load(Yii::$app->request->post())) {
            return $this->renderAjax('update', ['user' => $user, 'role' => $user->item_name]);
        }

        // only if user entered new password we want to hash and save it
        if ($user->password) {
            $user->setPassword($user->password);
        }

        // if admin is activating user manually we want to remove account activation token
        if ($user->status == User::STATUS_ACTIVE && $user->account_activation_token != null) {
            $user->removeAccountActivationToken();
        }

        if (!$user->save()) {
            return $this->renderAjax('update', ['user' => $user, 'role' => $user->item_name]);
        }

        // take new role from the form
        $newRole = $auth->getRole($user->item_name);
        // get user id too
        $userId = $user->getId();

        // we have to revoke the old role first and then assign the new one
        // this will happen if user actually had something to revoke
        if ($auth->revoke($oldRole, $userId)) {
            $info = $auth->assign($newRole, $userId);
        }

        // in case user didn't have role assigned to him, then just assign new one
        if (!isset($role)) {
            $info = $auth->assign($newRole, $userId);
        }

        if (!$info) {
            Yii::$app->session->setFlash('error', Yii::t('app', 'There was some error while saving user role.'));
        }

        return $this->redirect(['index']);
    }

    /**
     * Deletes an existing User model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     *
     * @param  integer $id The user id.
     * @return \yii\web\Response
     *
     * @throws NotFoundHttpException
     */
    public function actionDelete($id)
    {
        $user = User::find()->where(['id'=> $id])->one();
        if ($user->roleName == 'theCreator'){

            return $this->goHome();
        }
        // delete user or throw exception if could not
        if (!$this->findModel($id)->delete()) {
            throw new ServerErrorHttpException(Yii::t('app', 'We could not delete this user.'));
        }

        $auth = Yii::$app->authManager;
        $info = true; // monitor info status

        // get user role if he has one
        if ($roles = $auth->getRolesByUser($id)) {
            // it's enough for us the get first assigned role name
            $role = array_keys($roles)[0];
        }

        // remove role if user had it
        if (isset($role)) {
            $info = $auth->revoke($auth->getRole($role), $id);
        }

        if (!$info) {
            Yii::$app->session->setFlash('error', Yii::t('app', 'There was some error while deleting user role.'));
            return $this->redirect(['index']);
        }

        Yii::$app->session->setFlash('success', Yii::t('app', 'You have successfuly deleted user and his role.'));

        return $this->redirect(['index']);
    }

    /**
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     *
     * @param  integer $id The user id.
     * @return User The loaded model.
     *
     * @throws NotFoundHttpException if the model cannot be found.
     */
    protected function findModel($id)
    {
        $model = User::findOne($id);

        if (is_null($model)) {
            throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
        }

        return $model;
    }
}
