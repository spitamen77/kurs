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
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        '/themes/margo-shop/css/font-awesome.min.css',
        '/themes/margo-shop/css/ionicons.min.css',
        '/themes/margo-shop/css/linearicons.css',
        '/themes/margo-shop/css/nice-select.css',
        '/themes/margo-shop/css/jquery.fancybox.css',
        '/themes/margo-shop/css/jquery-ui.min.css',
        '/themes/margo-shop/css/meanmenu.min.css',
        '/themes/margo-shop/css/nivo-slider.css',
        '/themes/margo-shop/css/owl.carousel.min.css',
        '/themes/margo-shop/css/bootstrap.min.css',
        '/themes/margo-shop/css/default.css',
        '/themes/margo-shop/css/style.css',
        '/themes/margo-shop/css/responsive.css',
        
       

    ];
    public $js = [
        '/themes/margo-shop/js/modernizr-3.5.0.min.js',
        '/themes/margo-shop/js/jquery-3.2.1.min.js',
        '/themes/margo-shop/js/jquery.countdown.min.js',
        '/themes/margo-shop/js/jquery.meanmenu.min.js',
        '/themes/margo-shop/js/jquery.scrollUp.js',
        '/themes/margo-shop/js/jquery.nivo.slider.js',
        '/themes/margo-shop/js/jquery.fancybox.min.js',
        '/themes/margo-shop/js/jquery.nice-select.min.js',
        '/themes/margo-shop/js/jquery-ui.min.js',
        '/themes/margo-shop/js/owl.carousel.min.js',
        '/themes/margo-shop/js/popper.min.js',
        '/themes/margo-shop/js/bootstrap.min.js',
        '/themes/margo-shop/js/plugins.js',
        '/themes/margo-shop/js/main.js',
    ];
    public $depends = [
        // 'yii\web\YiiAsset',
        // 'yii\bootstrap\BootstrapAsset',
    ];
     public $jsOptions = [ 'position' => \yii\web\View::POS_END ];
}
