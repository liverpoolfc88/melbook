<?php
/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */

/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<!--<div class="site-error">-->
<!--    <div style="background-image: url('/themes/404.png');" class="site-error">-->
<!---->
<!--    <h1>--><? //= Html::encode($this->title) ?><!--</h1>-->
<!---->
<!--    <div class="alert alert-danger">-->
<!--        --><? //= nl2br(Html::encode($message)) ?>
<!--    </div>-->
<!---->
<!--    <p> --><? //= Yii::t('app', 'The above error occurred while the Web server was processing your request.') ?><!-- </p>-->
<!--    <p> --><? //= Yii::t('app', 'Please contact us if you think this is a server error. Thank you.') ?><!-- </p>-->
<!---->
<!--</div>-->
<section>
    <div class="container">
        <div class="row">
            <marquee><h3 style="color: #0b58a2">Saxifa topilmadi!</h3></marquee>
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <a href="https://www.melbook.uz">
                    <img style="width: 100%" src="/themes/404.png">
                </a>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</section>