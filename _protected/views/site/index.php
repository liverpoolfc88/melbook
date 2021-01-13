<?

use yii\helpers\Url;
use yii\widgets\ActiveForm;

?>
<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center">
        <div class="logo mr-auto">
            <h1 class="text-light"><a
                        href="<?= Url::to(['/admin/index']) ?>"><img style="max-height: unset; height: 50px" src="/themes/logo.png"></a>
            </h1>
        </div>
    </div>
</header><!-- End Header -->
<!-- ======= Hero Section ======= -->
<section id="hero">

    <div class="container">
        <div class="row">
            <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
                <div data-aos="zoom-out">
                        <span><?=empty($wordstwo)?'':$wordstwo?></span></h1>
                    <h2><?=$word2?></h2>
                    <div class="text-center text-lg-left">
                        <a href="#form" class="btn-get-started scrollto">BUYURTMA BERISH</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
                <img src="/themes/Bootslander/assets/img/kitob1.png" class="img-fluid animated" alt="">
            </div>
        </div>
    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
         viewBox="0 24 150 28 " preserveAspectRatio="none">
        <defs>
            <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
        </defs>
        <g class="wave1">
            <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
        </g>
        <g class="wave2">
            <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
        </g>
        <g class="wave3">
            <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
        </g>
    </svg>

</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section class="about">
        <div class="container">

            <div style="padding: unset" class="section-title" data-aos="fade-up">
                <p style="text-align: center; font-size: 20px">Endi siz tillarni</p>
            </div>

            <div class="row">
                <div style="padding-bottom: 0px !important; padding-top: 0px !important;"  class="col-xl-6 col-lg-6 col-md-6 col-sm-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5"
                     data-aos="fade-left">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                        <div style="padding: unset" class="icon"><i class="bx bx-music"></i></div>
                        <h4 class="title"><a href="">Sifatli 3D audio orqali</a></h4>
                    </div>

                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                        <div style="padding: unset" class="icon"><i class="bx bx-edit"></i></div>
                        <h4 class="title"><a href="">Hech qanday grammatik qoidalarsiz</a></h4>
                    </div>
                </div>
                <div style="padding-bottom: 0px !important; padding-top: 0px !important;" class="col-xl-6 col-lg-6 col-md-6 col-sm-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5"
                     data-aos="fade-left">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
                        <div style="padding: unset" class="icon"><i class="bx bx-tired"></i></div>
                        <h4 class="title"><a href="">So`z yodlashlarsiz</a></h4>
                    </div>

                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="400">
                        <div style="padding: unset" class="icon"><i class="bx bx-location-plus"></i></div>
                        <h4 class="title"><a href="">Istalgan joyda va istalgan vaqtda</a></h4>
                    </div>

                </div>
            </div>

            <div style="padding: 10px 0 10px 0" class="section-title" data-aos="fade-up">
                <p style="text-align: center; font-size: 20px">O`rganishingiz mumkin</p>
            </div>

        </div>
    </section><!-- End About Section -->
    <hr>

    <!-- ======= Details Section ======= -->
    <section class="details">
        <div  class="container">


            <div class="row  flex-row content height-300">

                <div style="order: 2" class="disflex-posrel col-md-4 order-1 order-md-2 img-fluid" data-aos="fade-left">
                    <div class="one-img">
                        <img src="<?=(empty($photo3)?'':$photo3)?>" class="img-fluid" alt="">
                    </div>
<!--                    <div class="one-img">-->
<!--                        <img src="/themes/Bootslander/assets/img/ingliz.png" class="img-fluid" alt="">-->
<!--                    </div>-->
<!--                    <div class="two-img">-->
<!--                        <img src="/themes/Bootslander/assets/img/rus.png" class="img-fluid" alt="">-->
<!--                    </div>-->
                </div>

                <div style="order: 1" class=" sasa1 col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
                    <h3><?=$word3?></h3>
                    <!-- <h3>123</h3> -->
                </div>

            </div>

            <div  class="row content mt-3">
                <div class="sasa3 col-md-12 pt-4" data-aos="fade-up">
                    <h3>AUDIO KURS NARXI : <a style=" text-decoration: line-through;"><?=$summ?> so`m</a></h3>
                    <h1>SIZNING CHEGIRMANGIZ <span class="sasa4"><?=$percent?>%</span>
                        <p class="sasa5"><?=$summ-($summ*$percent)/100?> so`m</p></h1>
                    <h1>SIZNING FOYDANGIZ<p class="sasa6"><?=($summ*$percent)/100?> so`m</p></h1>

                </div>
            </div>

        </div>
    </section><!-- End Details Section -->
    <hr>
    <section id="form" class="form contact">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
<!--                <h2>Sovg'ani qo'lga kiriting</h2>-->
                <p>BUYURTMA BERISH UCHUN FORMANI TO`LDIRING</p>
            </div>

            <div class="row">
                <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
                    <? foreach ($book as $key => $val): ?>
                        <div class="info">
                            <div class="sasa2 address">
                                <i> <input class="chek" type="checkbox" id="<?= $val->id ?>" data-kod="<?= $val->kod ?>"
                                           data-name="<?= $val->name ?>" required></i>
                                <h4><?= $val->name ?></h4>
                            </div>
                        </div>
                    <? endforeach; ?>
                </div>

                <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">
                    <?php $form = ActiveForm::begin(['options' => ['class' => 'php-email-form']]); ?>
                    <div class="form-row">
                        <div class="col-md-6 form-group">
                            <?= $form->field($model, 'name')->textInput(['maxlength' => true, 'placeholder' => 'Ismingizni kiriting'])->label(false) ?>
                        </div>
                        <div class="col-md-6 form-group">
                            <?= $form->field($model, 'phone')->textInput(['maxlength' => true, 'placeholder' => 'Telefon raqamingizni kiriting'])->label(false) ?>
                        </div>
                    </div>
                    <div class="text-center">
                        <a type="submit" class="ok btn btn-success sasa25">Jo`natish</a>
                    </div>
                    <?php ActiveForm::end(); ?>


                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->
    <!-- ======= Features Section ======= -->


    <!-- ======= Details Section ======= -->
    <section class="details">
        <div class="container">
            <div class="row content">
                <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
                    <img src="<?=(empty($photo4)?'':$photo4)?>" class="img-fluid" alt="">
                </div>
                <div class="sasa1 col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
                    <h3><?=$word41?><p><b><?=$word42?></b>
                        </p></h3>

                </div>
            </div>
        </div>
    </section><!-- End Details Section -->


    <!-- ======= Testimonials Section ======= -->
    <section class=" testimonials">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2 class="sasa7">MELBOOK</h2>
                <p id="sasa7">KOMPANIYA HAQIDA</p>
            </div>
            <div class="row content">
                <div class="sasa2 col-md-4" data-aos="fade-right">
                    <img src="/themes/Bootslander/assets/img/team.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8 pt-4" data-aos="fade-up">
                    <h5 class="sasa7"><?=$word51?></h5>
                    <p class="sasa7 font-italic">
                       <?=$word51?>
                    </p>
                   </div>
            </div>

        </div>
    </section><!-- End Testimonials Section -->

    <section class="features">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Tavsiya</h2>
                <p>QUYIDAGI MUAMMOLAR SIZGA TANISHMI?</p>
            </div>
            <div class="row" data-aos="fade-left">

                <div class="col-lg-4 col-md-4  mt-4">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
                        <i class="bx bx-chevron-right-circle sasa8"></i>
                        <h3><a href="">
                                Yillar davomida tillarni o`rganib, haligacha gapirishda qiynalmoqdasiz</a></h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 mt-4">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                        <i class="bx bx-chevron-right-circle sasa9"></i>
                        <h3><a href="">
                                Grammatik qoidalar sizni charchatmoqda</a></h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 mt-4 ">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="150">
                        <i class="bx bx-chevron-right-circle sasa10"></i>
                        <h3><a href="">Qiyin va tushunarsiz so`zlarni qayta-qayta yodlash sizni zeriktirmoqda</a></h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 mt-4 ">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                        <i class="bx bx-chevron-right-circle sasa11"></i>
                        <h3><a href="">
                                Chet el bestseller kitoblarini o`qishni xohlaysiz, lekin tushunmaysiz</a></h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 mt-4 ">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="250">
                        <i class="bx bx-chevron-right-circle sasa12"></i>
                        <h3><a href="">Erkin sayohat qilishni istaysiz, ammo chet tilini bilmasligingiz bunga halaqit
                                qilmoqda</a></h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 mt-4">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
                        <i class="bx bx-chevron-right-circle sasa13"></i>
                        <h3><a href="">
                                Tilni bilmasligingiz sababli ishingizda yuqori lavozimga ko`tarila olmayapsiz</a></h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 mt-4">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="350">
                        <i class="bx bx-chevron-right-circle sasa14"></i>
                        <h3><a href="">Tilini bilmasligingiz tufayli muhim mijozlar bilan ishlashda qiynalmoqdasiz</a>
                        </h3>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 mt-4">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="450">
                        <i class="bx bx-chevron-right-circle sasa15"></i>
                        <h3><a href="">
                                Biznesingiz rivoji uchun xorijiy tillarni mukammal bilish talab etilmoqda</a></h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 mt-4">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="500">
                        <i class="bx bx-chevron-right-circle sasa16"></i>
                        <h3><a href="">
                                Hamkorlar bilan muzokarada ingliz yoki rus tilida fikringizni tushuntirishda
                                qiynalmoqdasiz</a></h3>
                    </div>
                </div>
            </div>
            <div class="sasa17">
                <a href="#form" class="scrollto sasa18">
                    Buyurtma berish
                </a>
            </div>

        </div>
    </section><!-- End Features Section -->

    <!-- ======= Testimonials Section ======= -->
    <section class="testimonials counts">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2 class="sasa7">MELBOOK</h2>
                <p id="sasaa7">AUDIO KURS KIMLAR UCHUN FOYDALI?</p>
            </div>
            <div class="row" data-aos="fade-up">
                <span class="iconify" data-icon="bx:bxs-select-multiple" data-inline="false"></span>
                <div class="col-lg-4 col-md-6 mt-5">
                    <div class="count-box">
                        <i class="sasa19 bx bx-select-multiple"></i>
                        <p class="sasa20">Chet tillarni
                            o`rganishni istaganlar</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-5">
                    <div class="count-box">
                        <i class="sasa19 bx bx-user-voice"></i>
                        <p class="sasa20">Tadbirkor va biznes egalari</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-5">
                    <div class="count-box">
                        <i class="sasa19 bx bxs-shopping-bags"></i>
                        <p class="sasa20">Kompaniya hodimlari</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-5">
                    <div class="count-box">
                        <i class="sasa19 bx bxs-map"></i>
                        <p class="sasa20">Chet elga ishga va o`qishga boruvchilar</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-5">
                    <div class="count-box">
                        <i class="sasa19 bx bxs-plane-alt"></i>
                        <p class="sasa20">Chet elga sayohat qilmoqchi bo`lganlar</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-5">
                    <div class="count-box">
                        <i class="sasa19 bx bxs-book-reader"></i>
                        <p class="sasa20">Barcha o`quvchi va talabalar</p>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Testimonials Section -->


    <!-- ======= F.A.Q Section ======= -->
    <section class="faq section-bg">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>MELBOOK</h2>
                <p>NEGA AYNAN USHBU AUDIO KURS?</p>
            </div>

            <div class="faq-list">
                <div class="row">
                    <div class="col-md-6">
                        <ul>
                            <li data-aos="fade-up">
                                <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse"
                                                                               href="#faq-list-a">№1 METODIKA <i
                                            class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                <div id="faq-list-a" class="collapse show" data-parent=".faq-list">
                                    <p> Dunyo bo`yicha chet tillarni o`rganish metodikalari reytingida №1 metodika
                                        sifatida tan olingan</p>
                                </div>
                            </li>

                            <li data-aos="fade-up" data-aos-delay="100">
                                <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-b"
                                                                               class="collapsed">QISQA MUDDAT <i
                                            class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                <div id="faq-list-b" class="collapse" data-parent=".faq-list">
                                    <p>Kuniga 3 soat vaqt ajratib 5 oy ichida ingliz va rus tillarida erkin gaplasha
                                        oladigan bo`lasiz</p>
                                </div>
                            </li>

                            <li data-aos="fade-up" data-aos-delay="200">
                                <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-c"
                                                                               class="collapsed">SIFATLI 3D AUDIO <i
                                            class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                <div id="faq-list-c" class="collapse" data-parent=".faq-list">
                                    <p>Siz audiodarsliklarni tinglayotganingizda 3D audio effektlar orqali matnda
                                        tasvirlangan muhitga tushib qolasiz</p>
                                </div>
                            </li>

                            <li data-aos="fade-up" data-aos-delay="300">
                                <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-d"
                                                                               class="collapsed">SO`Z YODLASHLARSIZ<i
                                            class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                <div id="faq-list-d" class="collapse" data-parent=".faq-list">
                                    <p>Tushunarsiz va qiyin so`zlarni yodlashdan to`xtang. Audio kurs orqali gaplarni
                                        tabiiy ravishda o`rganasiz</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul>
                            <li data-aos="fade-up">
                                <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse"
                                                                               href="#faq-list-a1"> GRAMMATIK
                                    QOIDALARSIZ <i class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                <div id="faq-list-a1" class="collapse show" data-parent=".faq-list">
                                    <p>Faqat eshitish orqali tillarni tabiiy ravishda oddiy 12 ta modul orqali
                                        o`rganasiz</p>
                                </div>
                            </li>

                            <li data-aos="fade-up" data-aos-delay="100">
                                <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse"
                                                                               href="#faq-list-b1" class="collapsed">10-50
                                    YOSH<i class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                <div id="faq-list-b1" class="collapse" data-parent=".faq-list">
                                    <p>Dunyo bo`yicha chet tillarni o`rganish metodikalari reytingida №1 metodika
                                        sifatida tan olingan</p>
                                </div>
                            </li>

                            <li data-aos="fade-up" data-aos-delay="200">
                                <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse"
                                                                               href="#faq-list-c1" class="collapsed">MAHALLIY
                                    SPIKER<i class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                <div id="faq-list-c1" class="collapse" data-parent=".faq-list">
                                    <p>Audio kurslarni NATIVE spikerlar dublyaj qilgan. Bu esa huddi inglizlar yoki
                                        ruslardek oson tushunish va erkin gapira olishingizga imkon beradi</p>
                                </div>
                            </li>

                            <li data-aos="fade-up" data-aos-delay="300">
                                <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse"
                                                                               href="#faq-list-d1" class="collapsed">QISQA
                                    MUDDAT <i class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                <div id="faq-list-d1" class="collapse" data-parent=".faq-list">
                                    <p>Kuniga 3 soat vaqt ajratib 5 oy ichida ingliz va rus tillarida erkin gaplasha
                                        oladigan bo`lasiz</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="sasa17">
                <a href="#form" class=" scrollto sasa18">
                    Buyurtma berish
                </a>
            </div>

        </div>
    </section><!-- End F.A.Q Section -->

    <!-- ======= Testimonials Section ======= -->
    <section class="sasa21 testimonials counts">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2 class="sasa7">MELBOOK</h2>
                <p id="sasa7" class="pb-50">INNOVATSION METOD BILAN
                    HAYOTINGIZDA QANDAY O`ZGARISHLAR BO`LADI?</p>
            </div>
        </div>
    </section><!-- End Testimonials Section -->

    <section class="contact">
        <div class="container">

            <div class="row">

                <div class="col-lg-12" data-aos="fade-right" data-aos-delay="100">
                    <div class="info">
                        <div class="sasa22">
                            <i class="icofont-check-circled"></i>
                            <h4>Chet tillarda 5 oydan so`ng hech qanday muammolarsiz erkin va avtomatik gapirasiz</h4>
                        </div>

                        <div class="sasa22">
                            <i class="icofont-check-circled"></i>
                            <h4>Yuqori daromadli ishda ishlash imkoniyati</h4>
                        </div>

                        <div class="sasa22">
                            <i class="icofont-check-circled"></i>
                            <h4>Xorijiy tilni bilganingiz tufayli istalgan joyga erkin sayohat qilishingiz mumkin</h4>
                        </div>

                        <div class="sasa22">
                            <i class="icofont-check-circled"></i>
                            <h4>Dunyoning TOP mamlakatlarida o`qish va ishlash imkoniyati</h4>
                        </div>

                        <div class="sasa22">
                            <i class="icofont-check-circled"></i>
                            <h4>Keng qamrovli biznes ochish imkoniyati</h4>
                        </div>

                    </div>

                </div>


            </div>

        </div>
    </section><!-- End Contact Section -->
    <hr>
    <!-- ======= Details Section ======= -->
    <section class="details">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>MELBOOK</h2>
                <p>QANDAY QILIB BUGUNOQ SOTIB OLSAM BO`LADI?</p>
            </div>

            <div class="row content">
                <div class="col-md-3" data-aos="fade-right">
                    <img src="/themes/Bootslander/assets/img/point-1.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-9 pt-4" data-aos="fade-up">
                    <h3>BUYURTMA QOLDIRING</h3>
                    <p class="font-italic">
                        Ko`rsatilgan formani to`ldirib, oson buyurtma bering
                    </p>

                </div>
            </div>

            <div class="row content">
                <div class="col-md-3" data-aos="fade-right">
                    <img src="/themes/Bootslander/assets/img/point-2.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-9 pt-4" data-aos="fade-up">
                    <h3>BIZ BOG`LANAMIZ</h3>
                    <p class="font-italic">
                        24 soat ichida menejerimiz siz bilan bog`lanib, buyurtmangizni rasmiylashtiradi
                    </p>

                </div>
            </div>

            <div class="row content">
                <div class="col-md-3" data-aos="fade-right">
                    <img src="/themes/Bootslander/assets/img/point-3.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-9 pt-4" data-aos="fade-up">
                    <h3>QABUL QILIB OLING</h3>
                    <p class="font-italic">
                        Siz aytgan manzilga O`zbekiston bo`ylab 48 soat ichida bepul yetkazib beriladi
                    </p>

                </div>
            </div>


        </div>

        <div class="sasa17">
            <a href="#form" class="scrollto sasa18">
                Buyurtma berish
            </a>
        </div>
    </section><!-- End Details Section -->
    <hr>


    <section class="details">
        <div class="container">


            <div class="row  flex-row content height-300">
                <div class="sasa1 col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
                    <h3><?=$word3?></h3>
                </div>
                <div class="disflex-posrel col-md-4 order-1 order-md-2 img-fluid" data-aos="fade-left">
                    <div class="one-img">
                        <img src="<?=(empty($photo3)?'':$photo3)?>" class="img-fluid" alt="">
                    </div>
<!--                    <div class="one-img">-->
<!--                        <img src="/themes/Bootslander/assets/img/ingliz.png" class="img-fluid" alt="">-->
<!--                    </div>-->
<!--                    <div class="two-img">-->
<!--                        <img src="/themes/Bootslander/assets/img/rus.png" class="img-fluid" alt="">-->
<!--                    </div>-->
                </div>

            </div>

            <div class="row content mt-3">
                <div class="sasa3 col-md-12 pt-4" data-aos="fade-up">
                    <h3>AUDIO KURS NARXI : <a style=" text-decoration: line-through;"><?=$summ?> so`m</a></h3>
                    <h1>SIZNING CHEGIRMANGIZ <span class="sasa4"><?=$percent?>%</span>
                        <p class="sasa5"><?=$summ-($summ*$percent)/100?> so`m</p></h1>
                    <h1>SIZNING FOYDANGIZ<p class="sasa6"><?=($summ*$percent)/100?> so`m</p></h1>

                </div>
            </div>



        </div>
    </section><!-- End Details Section -->
    <hr>


    <!-- ======= Details Section ======= -->
    <section class="details">
        <div class="container">
            <div class="row content">
                <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
                    <img src="<?=(empty($photo4)?'':$photo4)?>" class="img-fluid" alt="">
                </div>
                <div class="sasa1 col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
                    <h3><?=$word41?><p><b><?=$word42?></b>
                </div>
            </div>
        </div>
    </section><!-- End Details Section -->


    <!--    chegara-->


    <!-- ======= Counts Section ======= -->
    <section class="counts">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>MELBOOK</h2>
                <p>KO`P BERILADIGAN SAVOLLAR</p>
            </div>
            <!--ss-->
            <? foreach($questionanswer as $key=>$value): ?>
            <div class="row">
                <div class="col-md-6 font-italic question" data-aos="fade-right">
                    <?=$value->question?>
                </div>
                <div class="col-md-6 font-italic answer" data-aos="fade-left">
                <?=$value->answer?>
                </div>
            </div>
            <? endforeach; ?>
        </div>

        <div class="sasa17">
            <a href="#form" class=" scrollto sasa18">
                Buyurtma berish
            </a>
        </div>
    </section><!-- End Counts Section -->


    <!-- ======= Team Section ======= -->
    <section class="team">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>MELBOOK</h2>
                <p>Bizning hamkorlarimiz</p>
            </div>

            <div class="row" data-aos="fade-left">

                <div class="col-lg-3 col-md-6">
                    <div class="member" data-aos="zoom-in" data-aos-delay="100">
                        <div class="pic"><img src="/themes/Bootslander/assets/img/homiy/11.jpg" class="sasa23 img-fluid"
                                              alt=""></div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                    <div class="member" data-aos="zoom-in" data-aos-delay="200">
                        <div class="pic"><img src="/themes/Bootslander/assets/img/homiy/22.jpg" class="sasa23 img-fluid"
                                              alt=""></div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                    <div class="member" data-aos="zoom-in" data-aos-delay="300">
                        <div class="pic"><img src="/themes/Bootslander/assets/img/homiy/33.jpg" class="sasa23 img-fluid"
                                              alt=""></div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                    <div class="member" data-aos="zoom-in" data-aos-delay="400">
                        <div class="pic"><img src="/themes/Bootslander/assets/img/homiy/44.jpg" class="sasa23 img-fluid"
                                              alt=""></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="member" data-aos="zoom-in" data-aos-delay="100">
                        <div class="pic"><img src="/themes/Bootslander/assets/img/homiy/55.jpg" class="sasa23 img-fluid"
                                              alt=""></div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                    <div class="member" data-aos="zoom-in" data-aos-delay="200">
                        <div class="pic"><img src="/themes/Bootslander/assets/img/homiy/66.jpg" class="sasa23 img-fluid"
                                              alt=""></div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                    <div class="member" data-aos="zoom-in" data-aos-delay="300">
                        <div class="pic"><img src="/themes/Bootslander/assets/img/homiy/77.jpg" class="sasa23 img-fluid"
                                              alt=""></div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                    <div class="member" data-aos="zoom-in" data-aos-delay="400">
                        <div class="pic"><img src="/themes/Bootslander/assets/img/homiy/88.jpg" class="sasa23 img-fluid"
                                              alt=""></div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Team Section -->


    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container">

            <div class="row" data-aos="fade-up">

                <div class="col-lg-3 col-md-6 mt-5 ">
                    <div class="count-box">
                        <img class="sasa24" src="/themes/Bootslander/assets/img/ijtimoiy/facebook.png">
                        <span data-toggle="counter-up">99</span>
                        <p>Facebook</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-5 ">
                    <div class="count-box">
                        <img class="sasa24" src="/themes/Bootslander/assets/img/ijtimoiy/instagram.png">
                        <span data-toggle="counter-up">232</span>
                        <p>Instagram</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-5 ">
                    <div class="count-box">
                        <img class="sasa24" src="/themes/Bootslander/assets/img/ijtimoiy/telegram.png">
                        <span data-toggle="counter-up">125</span>
                        <p>Telegram</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 ">
                    <div class="count-box">
                        <img class="sasa24" src="/themes/Bootslander/assets/img/ijtimoiy/youtube.png">
                        <span data-toggle="counter-up">314</span>
                        <p>YouTube</p>
                    </div>
                </div>

            </div>


        </div>
    </section><!-- End Counts Section -->


</main><!-- End #main -->

<div class="btns" id="btns">
    <a href="tel:+998882171717" target="_blank" class="wh"><img alt="Melbook phone" src="/themes/phone.svg" width="60"/></a>
</div>

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container">
        <div class="row">
            <div style="text-align: center; display: flex" class="col-md-6">
                <img style="height: 70px; padding: 10px 10px 0 0" src="/themes/logo.png">
                <div class="copyright"><h6> -  2021</h6></div>
            </div>
            <div style="text-align: center" class="col-md-6">
                <div class="copyright">
                    &copy; Copyright <strong><span><a href="https://www.websar.uz" target="_blank">websar.uz</a></span></strong>. Barcha huquqlar ximoyalangan
                </div>
                <div class="credits">
                    <?=date('d.m.Y')?> <a href="https://www.websar.uz/">Toshkent</a>
                </div>
            </div>

        </div>


    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
<div id="preloader"></div>

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
<script src="/themes/jquery/jquery.min.js"></script>
<script>
    $(function () {

        $('a.ok').click(function (e) {
            e.preventDefault();
            var name = $("input#client-name").val();
            var phone = $("input#client-phone").val();
            // alert(name + phone);
            var chek = [];

            $('.chek').each(function (i) {

                var id = $(this).attr('id');
                if ($(this).prop('checked')) {
                    chek.push(
                        $(this).attr('id'),
                    )
                }
            })
            if (chek.length > 0) {
                if ((name == "") && (phone == "")) {
                    alert('formani to`ldiring!');
                } else {
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
                }
            } else {
                alert('Kitob tanlang!');
            }
        })
    })
</script>