<?php

use app\helpers\CssHelper;
use yii\helpers\Html;
use yii\grid\GridView;

use yii\bootstrap\Modal;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

//$this->title = Yii::t('app', 'Users');
$this->title = Yii::t('app', 'Ishchilar     ');
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    #w0 {
        overflow-x: auto;
    }
</style>
<div class=" user-index">

    <h1>
        <?= Html::encode($this->title) ?>
        <p>
<!--            --><?//= Html::a(Yii::t('app', 'Create User'), ['create'], ['class' => 'btn btn-success']) ?>
            <?= Html::a(Yii::t('app', 'Ishchi qo`shish'), ['create'], ['class' => 'create btn btn-success']) ?>
        </p>
    </h1>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'summary' => false,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'username',
            'email:email',
            // status
            [
                'attribute' => 'status',
                'filter' => $searchModel->statusList,
                'value' => function ($data) {
                    return $data->getStatusName($data->status);
                },
                'contentOptions' => function ($model, $key, $index, $column) {
                    return ['class' => CssHelper::userStatusCss($model->status)];
                }
            ],
            // role
            [
                'attribute' => 'item_name',
                'filter' => $searchModel->rolesList,
                'value' => function ($data) {
                    return $data->roleName;
                },
                'contentOptions' => function ($model, $key, $index, $column) {
                    return ['class' => CssHelper::roleCss($model->roleName)];
                }
            ],
            // buttons
            [
                'class' => 'yii\grid\ActionColumn',
                'header' => "Amal",
                'template' => '{view} {update} {delete}',
                'buttons' => [
                    'view' => function ($url, $model, $key) {
                        return Html::a('', $url, ['title' => 'View user', 'class' => 'fas fa-eye create']);
                    },
                    'update' => function ($url, $model, $key) {
                        return Html::a('', $url, 
                        ['title' => 'Manage user', 'class' => 'create fas fa-pencil-alt']);
                    },
                    'delete' => function ($url, $model, $key) {
                        return Html::a('', $url,
                            ['title' => 'Delete user',
                                'class' => 'fas fa-cut',
                                'data' => [
                                    'confirm' => Yii::t('app', 'Ўчириб юборилсинми?'),
                                    'method' => 'post']
                            ]);
                    }
                ]

            ], // ActionColumn

        ], // columns

    ]); ?>
<!--    <code>--><?//= __FILE__; ?><!--</code>-->

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<?
    Modal::begin([
        'id' => 'modal',
    ]);
    ?>
    <div id="modalContent">

    </div>
    <?php
    Modal::end();
    ?>

<script>
    $(".create").click(function(e){
        e.preventDefault();
        $("#modal").modal('show')
            .find('#modalContent')
            .load($(this).attr("href"));
    });
</script>