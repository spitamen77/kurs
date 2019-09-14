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
        '/themes/edutech/css/style.css',
        '/themes/edutech/css/responsive.css',
        
       

    ];
    public $js = [
//        '/themes/edutech/js/jquery-3.2.1.min.js',
        '/themes/edutech/js/jquery-2.1.4.js',
        '/themes/edutech/js/bootstrap.min.js',
        '/themes/edutech/js/jquery.themepunch.tools.min.js',
        '/themes/edutech/js/jquery.themepunch.revolution.min.js',
        '/themes/edutech/js/revolution.extension.slideanims.min.js',
        '/themes/edutech/js/revolution.extension.layeranimation.min.js',
        '/themes/edutech/js/revolution.extension.navigation.min.js',
        '/themes/edutech/js/revolution.extension.kenburn.min.js',
        '/themes/edutech/js/revolution.extension.actions.min.js',
        '/themes/edutech/js/gmap.js',
        '/themes/edutech/js/bootstrap-select.js',
        
        '/themes/edutech/js/jquery.timepicker.min.js',
        '/themes/edutech/js/wow.min.js',
        '/themes/edutech/js/owl.carousel.min.js',
        '/themes/edutech/js/jquery.appear.js',
        '/themes/edutech/js/jquery.countTo.js',
        '/themes/edutech/js/theme.js',
    ];
    public $depends = [
        // 'yii\web\YiiAsset',
        // 'yii\bootstrap\BootstrapAsset',
    ];
     public $jsOptions = [ 'position' => \yii\web\View::POS_END ];
}
