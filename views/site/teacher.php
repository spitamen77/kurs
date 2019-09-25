<?php
/**
 * Created by PhpStorm.
 * Author: Abdujalilov Dilshod
 * Telegram: https://t.me/coloterra
 * Web: http://www.websar.uz
 * Project: kurs
 * Date: 21.09.2019 22:40
 */
use yii\helpers\Url;
use app\models\Lang;
$this->title = Lang::t('Teacher')." - ".$model->name;
$this->params['desc']=$this->title;
$this->params['img'] = $model->photo;
?>
<!-- Page Breadcrum __________________________ -->
<div class="page-breadcrum">
    <div class="container">
        <ul>
            <li><a href="<?=Url::to('/')?>"><?=Lang::t('Home')?></a></li>
            <li>-</li>
            <li><?=Lang::t('Teacher Profile')?></li>
        </ul>
    </div> <!-- /.container -->
</div> <!-- /.page-breadcrum -->


<!-- Teacher Profile Page  ___________________ -->
<div class="teacher-profile">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 float-right">
                <div class="text-warpper">
                    <h4><?=Lang::t('BIOGRAPHY')?></h4>
                    <p class="mmfix"><?=$model->biography?></p>
                </div> <!-- /.text-wrapper -->
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 teacher-sidebar float-left wow fadeInUp">
                <div class="img-holder theme-bg-color"><img src="../web/<?=$model->photo?>" alt="<?=$model->name?>"></div>
                <div class="teachers-bio p-color-bg">
                    <h6><?=$model->name?></h6>
                    <p><i class="fa fa-pencil-square-o" aria-hidden="true"></i> <?=$model->fan?></p>
                    <p><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="#"><?=$model->email?></a></p>
                    <p><i class="fa fa-phone" aria-hidden="true"></i> <a href="#"><?=$model->phone?></a></p>
                    <p><i class="fa fa-facebook" aria-hidden="true"></i> <a href="<?=$model->facebook?>" target="_blank"><?=$model->facebook?></a></p>


                </div> <!-- /.teachers-bio -->
            </div> <!-- /.teacher-sidebar -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</div> <!-- /.teacher-profile -->



<!-- Our Teacher ________________________ -->
<div class="our-teacher wow fadeInUp">
    <div class="container">
        <h4 class="text-center"><?=Lang::t('Our Most Talent Teacher')?></h4>

        <div class="row">
            <div class="theme-slider">
                <?php foreach ($teacher as $item) :?>
                <div class="item">
                    <div class="item-wrapper theme-bg-color tran3s hvr-float-shadow">
                        <div class="img-holder round-border">
                            <img src="../web/<?=$item->photo?>" alt="<?=$item->name?>">
                            <div class="overlay round-border tran4s">
                                <ul>
                                    <li><a href="<?=$item->facebook?>" target="_blank" class="tran3s round-border icon"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="mailto:<?=$item->email?>" class="tran3s round-border icon"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                                    <li><a href="tel:<?=$item->phone?>" class="tran3s round-border icon"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div> <!-- /.img-holder -->
                        <a href="<?=Url::to('/site/teacher?id='.$item->id)?>"><h6><?=$item->name?></h6></a>
                        <p><?=$item->fan?></p>
                    </div>
                </div> <!-- /.item -->
                <?php endforeach; ?>


            </div>
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</div> <!-- /.our-teacher -->
<br>