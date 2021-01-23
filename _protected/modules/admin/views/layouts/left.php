<?

use yii\helpers\Url;
$controlleraction = Yii::$app->controller->action->id;
$action = Yii::$app->controller->id;
?>
<aside style="background-color: white; border: #0E0EFF solid 1px" class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <a href="<?= Url::to(['/admin/index/index']) ?>">
                    <p class="white" style="font-size: 15px"><?=Yii::$app->user->identity->username?></p>
                </a>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>



        <ul  class="sidebar-menu tree" data-widget="tree">
            <li style="background-color: rgba(1, 4, 136, 0.9); color: white" class="header"><span><span>Menu </span></span></li>
            <li ><a class="white <?=($controlleraction == 'work')? 'active': ''?>"
                    href="<?= Url::to(['/admin/default/work']) ?>"><i class="fa fa-file-code-o"></i> <span>Mening ishlarim</span></a></li>
            <li ><a class="white <?=($controlleraction == 'index' && $action == 'default')? 'active': ''?>"
                    href="<?= Url::to(['/admin/default/index']) ?>"><i class="fa fa-file-code-o"></i> <span>Mijozlar</span></a></li>

            <?  if ((Yii::$app->user->can('theCreator'))) { ?>

            <li ><a class="white <?=($action == 'client')? 'active': ''?>"
                    href="<?= Url::to(['/admin/client/index']) ?>"><i class="fa fa-file-code-o"></i> <span>Barcha mijozlar</span></a></li>
            <li ><a class="white <?=($action == 'user' && $controlleraction == 'index')? 'active': ''?>"
                    href="<?= Url::to(['/admin/user/index']) ?>"><i class="fa fa-file-code-o"></i> <span>Ishchilar</span></a></li>
            <li ><a class="white <?=($controlleraction == 'table')? 'active': ''?>"
                    href="<?= Url::to(['/admin/user/table']) ?>"><i class="fa fa-file-code-o"></i> <span>Qilingan ishlar</span></a></li>
            <li ><a class="white <?=($action == 'book')? 'active': ''?>"
                    href="<?= Url::to(['/admin/book/index']) ?>"><i class="fa fa-file-code-o"></i> <span>Kitob qo`shish</span></a></li>
            <li ><a class="white <?=($action == 'youtube')? 'active': ''?>"
                    href="<?= Url::to(['/admin/youtube/index']) ?>"><i class="fa fa-file-code-o"></i> <span>Youtube link</span></a></li>
           
            <li style="background-color: rgba(1, 4, 136, 0.9); color: white" class="header"><span><span>O`zgartirishlar</span></span></li>
            <li ><a class="white <?=($action == 'questionanswer')? 'active': ''?>"
                    href="<?= Url::to(['/admin/questionanswer/index']) ?>"><i class="fa fa-file-code-o"></i> <span>Savol javblar</span></a></li>
            <li ><a class="white <?=($action == 'changes')? 'active': ''?>"
                    href="<?= Url::to(['/admin/changes/index']) ?>"><i class="fa fa-file-code-o"></i> <span>O`zgarishlar</span></a></li>

            <?}?>

        </ul>

    </section>

</aside>
<style>
    .white{
        color: rgba(1, 4, 136, 0.9) !important;
        /*border: #0E0EFF solid 1px;*/
    }
    .active{
        color: white !important;
        background-color: rgba(1, 4, 136, 0.9) !important;
    }
    .white:hover{
        color: white !important;
        background-color: rgba(1, 4, 136, 0.9) !important;
    }

    /*:hover{*/
    /*    background-color: white;*/
    /*}*/
</style>

<script src="/themes/jquery/jquery.min.js"></script>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
<script>
    $(function () {
        $('.white').click(function () {
            // alert('sasa');
            $(this).addClass("active")

        })
    })
</script>