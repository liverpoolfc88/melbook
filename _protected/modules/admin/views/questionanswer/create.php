<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Questionanswer */

$this->title = 'Savol-javob qo`shish';
$this->params['breadcrumbs'][] = ['label' => 'Questionanswers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="questionanswer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
