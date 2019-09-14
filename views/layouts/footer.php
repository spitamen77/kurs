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
                    <h4>About edutech</h4>
                    <p>EDUTECH Mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the sys- tem, and expound the actual teachings of the great explorer</p>
                    <a href="about-us.html" class="tran3s"><i class="fa fa-caret-right" aria-hidden="true"></i> About us</a>
                    <a href="our-teacher.html" class="tran3s"><i class="fa fa-caret-right" aria-hidden="true"></i> Team Member</a>
                    <ul>
                        <li><a href="#" class="tran3s round-border icon"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="tran3s round-border icon"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="tran3s round-border icon"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="tran3s round-border icon"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                    </ul>
                </div> <!-- /.footer-about -->

                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 footer-contact">
                    <h4>CONTACT US</h4>
                    <ul>
                        <li>
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            <a href="mailto:helpneed@edutech.com" class="tran3s">helpneed@edutech.com</a>
                        </li>
                        <li>
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <a href="tel:+8801712570051" class="tran3s">+8801712570051</a>
                        </li>
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>Edine rode,1234 Plot/RS ,CA</li>
                    </ul>
                </div> <!-- /.footer-contact -->

                <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12 footer-quick-link">
                    <h4>Quick link</h4>
                    <ul>
                        <?php PrintMenu2(Menu::menus()); ?>
                       
                    </ul>
                </div> <!-- /.footer-quick-link -->

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 footer-event">
                    <h4>Latest events</h4>

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
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.top-footer -->

    <div class="bottom-footer">
        <p>Copyright 2019 &copy; <a href="websar.uz" class="p-color" target="_blank">Websar.uz</a> <span></p>
    </div> <!-- /.bottom-footer -->
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