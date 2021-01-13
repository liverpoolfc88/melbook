<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Questionanswer */

$this->title = 'Foizni o`zgartirish' . $model->id;
?>
<div class="questionanswer-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_formpercent', [
        'model' => $model,
    ]) ?>

</div>
