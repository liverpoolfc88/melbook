<?php
use yii\helpers\Url;
use app\models\Catalog;
$menu = Catalog::find()->all();
?>
<!-- ======= Header ======= -->
<header id="header">
    <div class="container d-flex">

        <div class="logo mr-auto">
            <h1 class="text-light"><a href="index.html"><span>Shuffle</span></a></h1>
            <!-- Uncomment below if you prefer to use anuse yii\helpers\Url; image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="active"><a href="index.html">Home</a></li>
                <? foreach ($menu as $key=>$value): ?>
                <li><a href="#about"><?=$value->name?></a></li>
                <? endforeach;?>

                <li><a href="<?=Url::to(['/user/index'])?>">Admin</a></li>

            </ul>
        </nav><!-- .nav-menu -->

    </div>
</header><!-- End Header -->