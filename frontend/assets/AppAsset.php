<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bc.style.scss.css',
        'css/ico.css',
        'css/css.css',
        'css/bc.responsive.scss.css',
        'css/jquery.owl.carousel.css',
        'css/jquery.plugin.css',
        'css/font-awesome.min.css',
        'css/jquery.swiper.css',
        'css/jquery.bxslider.min.css',
        'css/jquery-ui.css',
        'css/bootstrap.3x.css',
    ];
    public $js = [

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
