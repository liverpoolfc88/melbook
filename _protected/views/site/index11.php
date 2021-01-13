<?php
/* @var $this yii\web\View */

$this->title = Yii::t('app', Yii::$app->name);

use yii\helpers\Html;
use yii\widgets\ActiveForm; ?>

<div class="site-index">

    <div class=" row jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully installed Yii2 improved application template</p>
        <?php $form = ActiveForm::begin(); ?>
        <div id="sasa" style="display: flex">
            <? foreach ($book as $key => $val): ?>

                <div>
                    <input class="chek" type="checkbox" id="<?= $val->id ?>" data-kod="<?= $val->kod ?>"
                           data-name="<?= $val->name ?>">
                    <label for="scales"><?= $val->name ?></label>
                </div>
            <? endforeach; ?>
        </div>
        <div class="col-md-3"></div>
        <div class="col-md-3">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3"></div>
        <div class="form-group">
            <button id="ok">save</button>
        </div>
        <?php ActiveForm::end(); ?>
        <? if (isset($sms)) { ?>
            <H1><?= $sms ?></H1>
        <? } ?>
    </div>

    <section>
        <div class="container">
            <div class="row">
                <? $youtube = \app\models\Youtube::find()->all();
                foreach ($youtube as $val): ?>
                    <!--                --><? // var_dump($val->link); ?>
                    <div class="col-md-4">
                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?= $val->link ?>"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen>
                        </iframe>
                    </div>
                <? endforeach; ?>
            </div>
        </div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(function () {
            $('button#ok').click(function (e) {
                e.preventDefault();
                var name = $("input#client-name").val();
                var phone = $("input#client-phone").val();
                var chek = [];

                $('.chek').each(function (i) {

                    var id = $(this).attr('id');
                    if ($(this).prop('checked')) {
                        chek.push(
                            $(this).attr('id'),
                        )
                    }
                })
                $.post("/site/client", {name: name, phone: phone}, function (response) {
                    var id = response.id;
                    if (response.data == 'success') {
                        $.post("/site/order", {chek: chek, id: id}, function (res) {
                            console.log(res);

                            alert('Sizning so`rovingiz yuborildi! tez orada siz bilan bog`lanishadi');

                            $('input#client-name').val('');
                            $('input#client-phone').val('');
                            $('input.chek').each(function () {
                                this.checked = false;
                            });
                        })
                    }
                })
            })
        })
    </script>
</div>