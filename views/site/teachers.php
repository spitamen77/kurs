<?php
/**
 * Created by PhpStorm.
 * Author: Abdujalilov Dilshod
 * Telegram: https://t.me/coloterra
 * Web: http://www.websar.uz
 * Date: 21.09.2019 22:39
 */
use app\models\Lang;
use yii\helpers\Url;
use app\models\maxpirali\MenuItem;
$this->title = Lang::t('Teachers');
$this->params['desc']=$this->title.' - '.$this->title;
?>
<!-- Page Breadcrum __________________________ -->
<div class="page-breadcrum">
    <div class="container">
        <ul>
            <li><a href="<?=Url::to('/')?>"><?=Lang::t('Home')?></a></li>
            <li>-</li>
            <li><?=$this->title?></li>
        </ul>
    </div> <!-- /.container -->
</div> <!-- /.page-breadcrum -->


<!-- Our Teacher ________________________ -->
<div class="our-teacher wow fadeInUp our-teacher-single-page">
    <div class="container">
        <div class="row">
            <div class="theme-slider">
                <?php foreach ($model as $item) :?>
                <div class="item">
                    <div class="item-wrapper theme-bg-color tran3s hvr-float-shadow">
                        <div class="img-holder round-border">
                            <img src="../<?=$item->photo?>" alt="<?=$item->name?>">
                            <div class="overlay round-border tran4s">
                                <ul>
                                    <li><a href="<?=$item->facebook?>" target="_blank" class="tran3s round-border icon"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="tel:<?=$item->phone?>" class="tran3s round-border icon"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
                                    <li><a href="mailto:<?=$item->email?>" class="tran3s round-border icon"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div> <!-- /.img-holder -->
                        <a href="<?=Url::to('/site/teacher?id='.$item->id)?>"><h6><?=$item->name?></h6></a>
                        <p><?=$item->fan?></p>
                    </div>
                </div> <!-- /.item -->
                <?php endforeach;?>
            </div>
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</div> <!-- /.our-teacher -->


<!-- Latest Event Slider Section _______ -->
<div class="latest-event-slider event-section wow fadeInUp">
    <div class="container">
        <h3>Latest Events</h3>

        <div class="row">
            <div class="theme-slider">
                <?php foreach (MenuItem::getXit(12,9) as $item): ?>
                <div class="item hvr-float-shadow">
                    <div class="single-event theme-bg-color">
                        <div class="date p-color"><?=date("j",$item->created_date)?> <span><?=date("M",$item->created_date)?></span></div>
                        <a href="<?=Url::to('/?slug='.$item->template->slug.'&item_slug='.$item->slug)?>"><h6><?=$item->translate->title?></h6></a>
                        <p><?=$item->translate->short?></p>
                        <ul>
                            <li><i class="fa fa-money" aria-hidden="true"></i> <?=number_format($item->price, 0, ',', ' ')?></li>
                            <li><i class="fa fa-clock-o" aria-hidden="true"></i> <?=$item->time?></li>
                        </ul>
                    </div> <!-- /.single-event -->
                </div> <!-- /.item -->
                <?php endforeach;?>
            </div> <!-- /.theme-slider -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</div> <!-- /.latest-event-slider -->
