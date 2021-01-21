<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use yii\bootstrap\Modal;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ClientSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

//$this->title = Yii::t('app', 'Clients');
$this->title = Yii::t('app', 'Mijozlar');
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    .btn-default:hover {
        color: green;
    }
    #w0 {
        overflow-x: auto;
    }
</style>

<div class="client-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Klient qo`shish'), ['create'], ['class' => 'btn btn-success create']) ?>
        <!--        --><? //= Html::a(Yii::t('app', 'Create Client'), ['create'], ['class' => 'btn btn-success']) ?>
        <button id="ref" class="btn btn-default">Refresh</button>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'layout' => '{items}{pager}',

        'columns' => [
            ['class' => 'yii\grid\SerialColumn', 'header'=>'t/r'],

            // 'id',
            'name',
            'phone',
            'count_contact',
            [
                'attribute' => 'user_id',
                'value' => function ($data) {
                    return (empty($data->user->username)) ? "bog`lanmagan" : $data->user->username;
                },
                'filter' => ArrayHelper::map(\app\models\User::find()->all(), 'id', 'username'),
            ],
            // 'user.username',
            'create_at',
//            'connect_at',
            [
                'attribute' => 'connect_at',
                'value' => function ($data) {
                    return $data->connect_at == null ? "bog`lanmagan" : $data->connect_at;
                },
            ],


            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view}  {update}  {delete}',
                'buttons' => [
                    'view' => function ($url, $model) {
                        return Html::a('', $url,
                            [
                                'title' => Yii::t('app', 'Кўриш'),
                                'class' => 'fas fa-eye create'
                            ]);
                    },
                    'update' => function ($url, $model) {
                        return Html::a('', $url,
                            [
                                'title' => Yii::t('app', 'Тахрирлаш'),
                                'class' => 'create fas fa-pencil-alt '
                            ]);
                    },
                    'delete' => function ($url, $model) {
                        return Html::a('', ['delete', 'id' => $model->id], [
                            'class' => 'fas fa-cut',
                            'data' => [
                                'confirm' => 'Ўчириб юборилсинми?',
                                'method' => 'post',
                            ],
                        ]);
                    },

                ],
                'urlCreator' => function ($action, $model, $key, $index) {
                    if ($action === 'view') {
                        return Url::to(['view', 'id' => $model->id]);
                    }
                    if ($action === 'update') {
                        return Url::to(['update', 'id' => $model->id]);
                    }

                }
            ],
        ],
    ]); ?>

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

</div>
<script src="/themes/jquery/jquery.min.js"></script>
<script>
    $(function () {
        $('#ref').click(function () {
            // alert('sasa');
            location.reload();
        })
    })
</script>

<script>
    $(".create").click(function(e){
        e.preventDefault();
        $("#modal").modal('show')
            .find('#modalContent')
            .load($(this).attr("href"));
    });
</script>