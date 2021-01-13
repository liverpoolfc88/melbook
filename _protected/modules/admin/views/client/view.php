<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Client */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mijoz'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="client-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'O`zgartirish'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'O`chirish'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Ўчириб юборилсинми?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'phone',
//            'user_id',
            [
                'attribute' => 'user_id',
                'value' => function ($data) {
                    return $data->user->username == null ? "bog`lanmagan" : $data->user->username;
                },
                'filter' => ArrayHelper::map(\app\models\User::find()->all(), 'id', 'username'),
            ],
            'create_at',
//            'connect_at',
            [
                'attribute' => 'connect_at',
                'value' => function ($data) {
                    return $data->connect_at == null ? "bog`lanmagan" : $data->connect_at;
                },
            ],
        ],
    ]) ?>
    <div class="alert alert-info" role="alert">
    Sotib olgan kitoblari: <? foreach($orders as $val):?> | <span style="color:black"><?=$val->book->name?>;</span>   <? endforeach; ?>
    </div>
</div>

