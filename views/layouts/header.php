<?php
use yii\bootstrap\NavBar;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use app\models\maxpirali\Menu;
use yii\helpers\Url;
use app\models\Lang;
// use app\models\dilshod\Menu;

// $menu = Menu::menus();
?>

<!-- Header _________________________________ -->
<header class="main-header">


    <div class="top-header">
        <div class="container">
            <div class="left-side float-left">
                <ul>
                    <li><span class="icon round-border"><i class="ficon flaticon-signs"></i></span> <a href="" class="tran3s">45/12 Best Avenue Street, UK 2450, US</a></li>
                    <li><span class="icon round-border"><i class="ficon flaticon-multimedia"></i></span> <a href="" class="tran3s">info@edutech.com</a></li>
                    <li><span class="icon round-border"><i class="ficon flaticon-technology"></i></span> <a href="" class="tran3s">+8801712570051</a></li>
                    <li><span class="icon round-border"><i class="ficon flaticon-translation"></i></span>
                        <?= Html::a(Lang::t('Uz'), ['site/lang',['id'=>'uz-UZ', 'url'=>Url::current()]]) ?>
                                <span> | </span>
                                <?= Html::a(Lang::t('Ru'), ['site/lang',['id'=>'ru-RU', 'url'=>Url::current()]]) ?>
                    </li>
                </ul>
            </div> <!-- /.left-side -->
            <div class="right-side float-right">
                <ul>
                    <li><a href="#" class="tran3s round-border icon"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="tran3s round-border icon"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="tran3s round-border icon"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="tran3s round-border icon"><i class="fa fa-paper-plane" aria-hidden="true"></i></a></li>
                </ul>
            </div> <!-- /.right-side -->
        </div>
    </div> <!-- /.top-header -->

    <!-- _______________________ Theme Menu _____________________ -->

    <div class="container">
        <div class="main-menu-wrapper clear-fix">
            <div class="container">
                <div class="logo float-left"><a href="index.html" style="vertical-align:middle;"><img src="" alt="LOGO"></a></div>

                <form action="#" class="float-right">
                    <input type="text" placeholder="<?=Lang::t('Search')?>">
                    <button><i class="fa fa-search-minus" aria-hidden="true"></i></button>
                </form>

                <!-- Menu -->
                <nav class="navbar float-right">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="dropdown-holder current-page-item"><a href="<?=Url::to('/')?>"><?=Lang::t('bosh sahifa')?></a>
                
                            </li>
                            <?php PrintMenu(Menu::menus()); ?>
                          
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </nav>
            </div>
        </div> <!-- /.main-menu-wrapper -->
    </div>
</header>
<?php function PrintMenu($menu){ ?>
    <? foreach ($menu as $value) { ?>
        <li class="dropdown-holder"><a href="<?=Url::to(['site/index', 'slug' => $value['slug']])?>"><?=$value['title']?></a>
            <?// if ($value['children']) { ?>
                <!-- <ul class="sub-menu"> -->
                    <? //PrintMenu($value['children']); ?>
                <!-- </ul> -->
            <?//} ?>
        </li>
        <? } ?>  
   <? }?>
