<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class BaseAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        // '/asset/css/bootstrap.min.css',
        'css/site.css',
        // '/css/settings.css',
        // '/css/font-awesome.min.css',
        // '/css/slicknav.css',
        // '/css/style.css',
        // '/css/responsive.css',
        // '/css/animate.css',
        // '/css/colors/red.css',
       

    ];
    public $js = [

        // "js/jquery-2.1.4.min.js",
        // "js/jquery.migrate.js",
        // "js/modernizrr.js",
        // "asset/js/bootstrap.min.js",
        // "js/jquery.fitvids.js",
        // "js/owl.carousel.min.js",
        // "js/nivo-lightbox.min.js",
        // "js/jquery.isotope.min.js",
        // "js/jquery.appear.js",
        // "js/count-to.js",
        // "js/jquery.textillate.js",
        // "js/jquery.lettering.js",
        // "js/jquery.easypiechart.min.js",
        // "js/smooth-scroll.js",
        // "js/skrollr.js",
        // "js/jquery.parallax.js",
        // "js/mediaelement-and-player.js",
        // "js/jquery.slicknav.js",
        // 'js/create.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
     public $jsOptions = [ 'position' => \yii\web\View::POS_HEAD ];
}
