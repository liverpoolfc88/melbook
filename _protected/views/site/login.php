<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model \app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = Yii::t('app', 'Login');
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    .field-loginform-username{
        color: white;
    }
    .field-loginform-password {
        color: white;
    }
    .field-loginform-rememberme {
        color: white;
    }
</style>
<div style="padding-top: 50px" class="site-login container">



    <div class="row">
        <div class="col-md-4"></div>
        <div style="background-color: rgba(1, 4, 136, 0.9); border-radius: 10px" class="col-md-4 well bs-component">

            <h1 style="color: white"><?= Html::encode($this->title) ?></h1>

            <p style="color: white"><?= Yii::t('app', 'Please fill out the following fields to login:') ?></p>

            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

            <?php //-- use email or username field depending on model scenario --// ?>
            <?php if ($model->scenario === 'lwe'): ?>

                <?= $form->field($model, 'email')->input('email',
                    ['placeholder' => Yii::t('app', 'Enter your e-mail'), 'autofocus' => true]) ?>

            <?php else: ?>

                <?= $form->field($model, 'username')->textInput(
                    ['placeholder' => Yii::t('app', 'Enter your username'), 'autofocus' => true]) ?>

            <?php endif ?>

            <?= $form->field($model, 'password')->passwordInput(['placeholder' => Yii::t('app', 'Enter your password')]) ?>

            <?= $form->field($model, 'rememberMe')->checkbox() ?>

<!--            <div style="color:#999;margin:1em 0">-->
<!--                --><?//= Yii::t('app', 'If you forgot your password you can') ?>
<!--                --><?//= Html::a(Yii::t('app', 'reset it'), ['site/request-password-reset']) ?><!--.-->
<!--            </div>-->

            <div class="form-group">
                <?= Html::submitButton(Yii::t('app', 'Login'), ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
        <div class="col-md-4"></div>
    </div>


</div>
