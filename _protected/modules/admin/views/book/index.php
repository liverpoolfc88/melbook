<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

use yii\bootstrap\Modal;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BookSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

//$this->title = Yii::t('app', 'Books');
$this->title = Yii::t('app', 'Kitob');
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    #w0 {
        overflow-x: auto;
    }
</style>

<div class="book-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
<!--        --><?//= Html::a(Yii::t('app', 'Create Book'), ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a(Yii::t('app', 'Kitob qo`shish'), ['create'], ['class' => 'btn btn-success create']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'layout' => '{items}{pager}',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn', 'header'=>'t/r'],

//            'id',
            'name',
            'kod',
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
                                'class' => 'fas fa-eye bank create'
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

<script src="/themes/jquery/jquery.min.js"></script>
<script>
    $(".create").click(function(e){
        e.preventDefault();
        // alert('sasasa');
        $("#modal").modal('show')
            .find('#modalContent')
            .load($(this).attr("href"));
    });
</script>