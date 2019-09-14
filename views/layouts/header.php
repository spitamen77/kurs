<?php
use yii\bootstrap\NavBar;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use app\models\maxpirali\Menu;
// use app\models\dilshod\Menu;

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
                        <select class="selectpicker">
                            <option>English</option>
                            <option>Spanish</option>
                            <option>L'italiano</option>
                        </select>
                    </li>
                </ul>
            </div> <!-- /.left-side -->
            <div class="right-side float-right">
                <ul>
                    <li><a href="#" class="tran3s round-border icon"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="tran3s round-border icon"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="tran3s round-border icon"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="tran3s round-border icon"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
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
                    <input type="text" placeholder="Search">
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
                            <li class="dropdown-holder current-page-item"><a href="index.html">Home</a>
                                <ul class="sub-menu">
                                    <li><a href="index.html" class="tran3s">Home Version One</a></li>
                                    <li><a href="index-2.html" class="tran3s">Home Version Two</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-holder"><a href="about-us.html">About</a>
                                <ul class="sub-menu">
                                    <li><a href="about-us.html" class="tran3s">About Us V1</a></li>
                                    <li><a href="about-us-v2.html" class="tran3s">About Us V2</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-holder"><a href="#">Event</a>
                                <ul class="sub-menu">
                                    <li><a href="event.html" class="tran3s">Event Single</a></li>
                                    <li><a href="event-details.html" class="tran3s">Event Details</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-holder"><a href="#">courses</a>
                                <ul class="sub-menu">
                                    <li><a href="course-v1.html" class="tran3s">Course Version One</a></li>
                                    <li><a href="course-v2.html" class="tran3s">Course Version Two</a></li>
                                    <li><a href="course-details.html" class="tran3s">Course Details Page</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-holder"><a href="#">features</a>
                                <ul class="sub-menu">
                                    <li><a href="our-teacher.html" class="tran3s">Our Teacher</a></li>
                                    <li><a href="teacher-profile.html" class="tran3s">Teacher Profile</a></li>
                                    <li><a href="faq.html" class="tran3s">faq</a></li>
                                    <li><a href="404.html" class="tran3s">Error Page</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-holder"><a href="#">blog</a>
                                <ul class="sub-menu">
                                    <li><a href="blog-v1.html" class="tran3s">blog Version One</a></li>
                                    <li><a href="blog-v2.html" class="tran3s">blog Version Two</a></li>
                                    <li><a href="blog-details.html" class="tran3s">blog Details Page</a></li>
                                </ul>
                            </li>
                            <li><a href="contact-us.html">contact</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </nav>
            </div>
        </div> <!-- /.main-menu-wrapper -->
    </div>
</header>