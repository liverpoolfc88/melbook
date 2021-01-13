<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Questionanswer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="questionanswer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'percent')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'summ')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Saqlash', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
