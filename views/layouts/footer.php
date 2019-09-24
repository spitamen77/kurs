<?php
use app\models\maxpirali\Menu;
use yii\helpers\Url;
use app\models\Lang;
?>
<!-- Footer ______________________________ -->
<footer>
    <div class="top-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 footer-about">
                    <h4><?=Lang::t('About us')?></h4>
                    <p>EDUTECH Mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the sys- tem, and expound the actual teachings of the great explorer</p>
                    <a href="<?=Url::to('/site/about')?>" class="tran3s"><i class="fa fa-caret-right" aria-hidden="true"></i> <?=Lang::t('About us')?></a>
                    <a href="our-teacher.html" class="tran3s"><i class="fa fa-caret-right" aria-hidden="true"></i> Team Member</a>
                    <ul>
                        <li><a href="https://www.facebook.com/groups/934843233533389/" target="_blank" class="tran3s round-border icon"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                       
                        <li><a href="https://t.me/outcometree" target="_blank" class="tran3s round-border icon"><i class="fa fa-paper-plane" aria-hidden="true"></i></a></li>
                    </ul>
                </div> <!-- /.footer-about -->

                <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12 footer-quick-link">
                    <h4><?=Lang::t('Quick link')?></h4>
                    <ul>
                        <?php PrintMenu2(Menu::menus()); ?>

                    </ul>
                </div> <!-- /.footer-quick-link -->

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 footer-event">
                    <h4><?=Lang::t('Latest events')?></h4>

                    <div id="footer-event-carousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#footer-event-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#footer-event-carousel" data-slide-to="1"></li>
                            <li data-target="#footer-event-carousel" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <ul>
                                    <li>
                                        <div class="date p-color-bg">27 <span>Dec</span></div>
                                        <a href="event-details.html"><h6>Learning Management</h6></a>
                                        <ul>
                                            <li><i class="fa fa-clock-o" aria-hidden="true"></i> 10am - 05pm</li>
                                            <li><i class="fa fa-tags" aria-hidden="true"></i> Gpur Academy</li>
                                        </ul>
                                    </li>

                                    <li>
                                        <div class="date p-color-bg">19 <span>Dec</span></div>
                                        <a href="event-details.html"><h6>LEARN COUSES ONLINE</h6></a>
                                        <ul>
                                            <li><i class="fa fa-clock-o" aria-hidden="true"></i> 10am - 05pm</li>
                                            <li><i class="fa fa-tags" aria-hidden="true"></i> Gpur Academy</li>
                                        </ul>
                                    </li>

                                    <li>
                                        <div class="date p-color-bg">07 <span>Dec</span></div>
                                        <a href="event-details.html"><h6>COURSES FOR FREE GED</h6></a>
                                        <ul>
                                            <li><i class="fa fa-clock-o" aria-hidden="true"></i> 10am - 05pm</li>
                                            <li><i class="fa fa-tags" aria-hidden="true"></i> Gpur Academy</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div> <!-- /.item -->

                            <div class="item">
                                <ul>
                                    <li>
                                        <div class="date p-color-bg">27 <span>Dec</span></div>
                                        <a href="event-details.html"><h6>Learning Management</h6></a>
                                        <ul>
                                            <li><i class="fa fa-clock-o" aria-hidden="true"></i> 10am - 05pm</li>
                                            <li><i class="fa fa-tags" aria-hidden="true"></i> Gpur Academy</li>
                                        </ul>
                                    </li>

                                    <li>
                                        <div class="date p-color-bg">19 <span>Dec</span></div>
                                        <a href="event-details.html"><h6>LEARN COUSES ONLINE</h6></a>
                                        <ul>
                                            <li><i class="fa fa-clock-o" aria-hidden="true"></i> 10am - 05pm</li>
                                            <li><i class="fa fa-tags" aria-hidden="true"></i> Gpur Academy</li>
                                        </ul>
                                    </li>

                                    <li>
                                        <div class="date p-color-bg">07 <span>Dec</span></div>
                                        <a href="event-details.html"><h6>COURSES FOR FREE GED</h6></a>
                                        <ul>
                                            <li><i class="fa fa-clock-o" aria-hidden="true"></i> 10am - 05pm</li>
                                            <li><i class="fa fa-tags" aria-hidden="true"></i> Gpur Academy</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div> <!-- /.item -->

                            <div class="item">
                                <ul>
                                    <li>
                                        <div class="date p-color-bg">27 <span>Dec</span></div>
                                        <a href="event-details.html"><h6>Learning Management</h6></a>
                                        <ul>
                                            <li><i class="fa fa-clock-o" aria-hidden="true"></i> 10am - 05pm</li>
                                            <li><i class="fa fa-tags" aria-hidden="true"></i> Gpur Academy</li>
                                        </ul>
                                    </li>

                                    <li>
                                        <div class="date p-color-bg">19 <span>Dec</span></div>
                                        <a href="event-details.html"><h6>LEARN COUSES ONLINE</h6></a>
                                        <ul>
                                            <li><i class="fa fa-clock-o" aria-hidden="true"></i> 10am - 05pm</li>
                                            <li><i class="fa fa-tags" aria-hidden="true"></i> Gpur Academy</li>
                                        </ul>
                                    </li>

                                    <li>
                                        <div class="date p-color-bg">07 <span>Dec</span></div>
                                        <a href="event-details.html"><h6>COURSES FOR FREE GED</h6></a>
                                        <ul>
                                            <li><i class="fa fa-clock-o" aria-hidden="true"></i> 10am - 05pm</li>
                                            <li><i class="fa fa-tags" aria-hidden="true"></i> Gpur Academy</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div> <!-- /.item -->
                        </div>
                    </div> <!-- /#footer-event-carousel -->
                </div> <!-- /.footer-event -->

                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 footer-contact">
                    <h4><?=Lang::t('Contact us')?></h4>
                    <ul>
                        <li>
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            <a href="mailto:<?=Lang::t('emailto')?>" class="tran3s"><?=Lang::t('emailto')?></a>
                        </li>
                        <li>
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <a href="tel:<?=Lang::t('telefon')?>" class="tran3s"><?=Lang::t('telefon')?></a>
                        </li>
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i><?=Lang::t('Address')?></li>
                    </ul>
                </div> <!-- /.footer-contact -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.top-footer -->

   
</footer>

<!-- Scroll Top Button -->
<button class="scroll-top tran3s p-color-bg">
    <i class="fa fa-angle-up" aria-hidden="true"></i>
</button>
<!-- pre loader  -->
<div id="loader-wrapper">
    <div id="loader"></div>
</div>
<?php function PrintMenu2($menu){ ?>
    <? foreach ($menu as $value) { ?>
        <li><a href="<?=Url::to(['site/index', 'slug' => $value['slug']])?>"><i class="fa fa-caret-right" aria-hidden="true"></i>
            <?=$value['title']?></a>
            <?// if ($value['children']) { ?>
                <!-- <ul class="sub-menu"> -->
                    <? //PrintMenu($value['children']); ?>
                <!-- </ul> -->
            <?//} ?>
        </li>
        <? } ?>  
   <? }?>
   <script>
window.replainSettings = { id: '5da0916d-0c87-4369-8595-7f2bab0612f7' };
(function(u){var s=document.createElement('script');s.type='text/javascript';s.async=true;s.src=u;
var x=document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);
})('https://widget.replain.cc/dist/client.js');
</script>