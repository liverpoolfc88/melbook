<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this \yii\web\View */
/* @var $content string */
?>
<style>
    .s_open:hover .dropdown-menu {
        display: block;
    }
    /*.main-header .sidebar-toggle{*/
    /*    padding: unset !important;*/
    /*}*/
</style>
<header class="main-header">
    <? $name = 'MELBOOK' ?>
    <?= Html::a('<span style="background-color: rgba(1, 4, 136, 0.9)" class="logo-mini">' . $name . '</span><span style="background-color: rgba(1, 4, 136, 0.9)" class="logo-lg">' . $name . '</span>', Yii::$app->homeUrl, ['class' => 'logo', 'style' => 'background-color: rgba(1, 4, 136, 0.9)']) ?>

    <nav style="background-color: rgba(1, 4, 136, 0.9)" class="navbar navbar-static-top" role="navigation">

        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">

                <li class="dropdown user user-menu s_open">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="user-image" alt="User Image"/>
                        <span class="hidden-xs"><?= Yii::$app->user->identity->username ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li style="background-color: rgba(1, 4, 136, 0.9)" class="user-header">
                            <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle"
                                 alt="User Image"/>

                            <p>
                                <?= Yii::$app->user->identity->username ?>
                                <small><?= date('d.m.yy') ?></small>
                            </p>
                        </li>

                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="<?= Url::to(['/admin/user/index/']) ?>"
                                   class="btn btn-default btn-flat">users</a>
                            </div>
                            <div class="pull-right">
                                <?= Html::a(
                                    'Sign out',
                                    ['/site/logout'],
                                    ['data-method' => 'post', 'class' => 'btn btn-default btn-flat']
                                ) ?>
                            </div>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </nav>
</header>
