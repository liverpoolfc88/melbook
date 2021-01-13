<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\bootstrap\Modal;

/* @var $this yii\web\View */
/* @var $searchModel app\models\YoutubeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Youtube');
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    #w0 {
        overflow-x: auto;
    }
</style>
<div class="youtube-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Youtube qo`shish'), ['create'], ['class' => 'btn btn-success create']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'layout' => '{items}{pager}',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn','header'=>'t/r'],

            // 'id',
            'name',
            'link',
            'create_at',
            'update_at',
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
                                'class' => 'fas fa-pencil-alt create'
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    $(".create").click(function(e){
        e.preventDefault();
        $("#modal").modal('show')
            .find('#modalContent')
            .load($(this).attr("href"));
    });
</script>