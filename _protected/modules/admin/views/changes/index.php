<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Modal;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ChangesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Changes';
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    #w0 {
        overflow-x: auto;
    }

    .short {
        text-overflow: ellipsis;
        white-space: nowrap;
        width: 150px;
        overflow: hidden;
    }
</style>
<div class="changes-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Changes', ['create'], ['class' => 'btn btn-success create']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'layout' => '{items}{pager}',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn', 'header' => 't/r'],
            // 'id',
            [
                'attribute' => 'words1',
//                'header' => ' Тўлов мақсади ',
                'format' => 'raw',
                'value' => function ($data) {
//                    return Html::a(mb_substr($data->detail_purpose_of_payment,0,20).'...',
//                        [Yii::$app->controller->id.'/views','id'=>$data->id],['class'=>'short bank ']);
                    return Html::a(' <div class="short">' . $data->words1 . '</div>');
                }
            ],
            [
                'attribute' => 'words2',
//                'header' => ' Тўлов мақсади ',
                'format' => 'raw',
//                'contentOptions' => ['class' => 'create'],
                'value' => function ($data) {
//                    return Html::a(mb_substr($data->detail_purpose_of_payment,0,20).'...',
//                        [Yii::$app->controller->id.'/views','id'=>$data->id],['class'=>'short bank ']);
                    return Html::a(' <div class="short">' . $data->words2 . '</div>');
                }
            ],
//            [
//                'attribute' => 'words2',
//                'value' => 'words2',
//                'contentOptions' => ['style' => 'width:25%; white-space: normal;'],
//
//            ],
            // 'words1',
            // 'words2',
//            'photo',
            [

                'attribute' => 'photo',

                'format' => 'html',

                'label' => 'ImageColumnLable',

                'value' => function ($data) {

                    return Html::img('/' . $data['photo'],

                        ['width' => '60px']);

                },

            ],
            'created_at',
            'updated_at',
            [
                'class' => 'yii\grid\ActionColumn',
//                'template' => '{view}  {update}  {delete}',
                'template' => '{view}  {update}',
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
                                'class' => 'fas fa-pencil-alt create'
                            ]);
                    },
//                    'delete' => function ($url, $model) {
//                        return Html::a('', ['delete', 'id' => $model->id], [
//                            'class' => 'fas fa-cut',
//                            'data' => [
//                                'confirm' => 'Ўчириб юборилсинми?',
//                                'method' => 'post',
//                            ],
//                        ]);
//                    },
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
    $(".create").click(function (e) {
        e.preventDefault();
        $("#modal").modal('show')
            .find('#modalContent')
            .load($(this).attr("href"));
    });
</script>