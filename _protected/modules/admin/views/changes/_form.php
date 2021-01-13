<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Changes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="changes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'words1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'words2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'photo')->fileInput(['style'=>'padding-top:34px']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
