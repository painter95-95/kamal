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
        'js/eu-cookie-support-opt-in.js',
        'js/bc.ajax-search.js',
        'js/bc.compare.js',
        'js/bc.global.js',
        'js/bc.script.js',
        'js/bc.slider.js',
        'js/bc.wishlist.js',
        'js/currencies.js',
        'js/freeshippingbar.js',
        'js/express_buttons.js',
        'js/jquery.swiper.js',
        'js/spr.js',
        'js/shop_events_listener.js',
        'js/api.jquery.js',
        'js/jquery.bxslider.min.js',
        'js/rivets-cart.min.js',
        'js/modernizr.js',
        'js/option_selection.js',
        'js/jquery.countdown.js',
        'js/jquery.currencies.min.js',
        'js/.js',
        'js/.js',
        'js/.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
