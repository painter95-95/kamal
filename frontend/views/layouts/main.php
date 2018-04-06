<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?= $this->registerJsFile('@web/js/jquery-ui.js', ['position' => \yii\web\View::POS_HEAD]); ?>
    <?= $this->registerJsFile('@web/js/cart.js', ['position' => \yii\web\View::POS_HEAD]); ?>
    <?= $this->registerJsFile('@web/js/bootstrap.3x.min.js', ['position' => \yii\web\View::POS_HEAD]); ?>
    <?= $this->registerJsFile('@web/js/eu-require-opt-in.js', ['position' => \yii\web\View::POS_HEAD]); ?>
    <?= $this->registerJsFile('@web/js/cookies.js', ['position' => \yii\web\View::POS_HEAD]); ?>
    <?= $this->registerJsFile('@web/js/jquery-1.9.1.min.js', ['position' => \yii\web\View::POS_HEAD]); ?>
    <?= $this->registerJsFile('@web/js/jquery.plugin.js', ['position' => \yii\web\View::POS_HEAD]); ?>
    <?= $this->registerJsFile('@web/js/jquery.owl.carousel.min.js', ['position' => \yii\web\View::POS_HEAD]); ?>
    <?= $this->registerJsFile('@web/js/jquery.jgrowl.min.js', ['position' => \yii\web\View::POS_HEAD]); ?>
    <?= $this->registerJsFile('@web/js/jquery.fancybox.min.js', ['position' => \yii\web\View::POS_HEAD]); ?>
    <?= $this->registerJsFile('@web/js/jquery.elevatezoom.min.js', ['position' => \yii\web\View::POS_HEAD]); ?>
    <?= $this->registerJsFile('@web/js/jquery.easing.1.3.js', ['position' => \yii\web\View::POS_HEAD]); ?>
    <?= $this->registerJsFile('@web/js/jquery.currencies.min.js', ['position' => \yii\web\View::POS_HEAD]); ?>
    <?= $this->registerJsFile('@web/js/jquery.countdown.js', ['position' => \yii\web\View::POS_HEAD]); ?>
    <?= $this->registerJsFile('@web/js/option_selection.js', ['position' => \yii\web\View::POS_HEAD]); ?>
    <?= $this->registerJsFile('@web/js/modernizr.js', ['position' => \yii\web\View::POS_HEAD]); ?>
    <?= $this->registerJsFile('@web/js/rivets-cart.min.js', ['position' => \yii\web\View::POS_HEAD]); ?>
    <?= $this->registerJsFile('@web/js/jquery.bxslider.min.js', ['position' => \yii\web\View::POS_HEAD]); ?>
    <?= $this->registerJsFile('@web/js/api.jquery.js', ['position' => \yii\web\View::POS_HEAD]); ?>
    <?= $this->registerJsFile('@web/js/shop_events_listener.js', ['position' => \yii\web\View::POS_HEAD]); ?>
    <?= $this->registerJsFile('@web/js/spr.js', ['position' => \yii\web\View::POS_HEAD]); ?>
    <?= $this->registerJsFile('@web/js/jquery.swiper.js', ['position' => \yii\web\View::POS_HEAD]); ?>
    <?= $this->registerJsFile('@web/js/express_buttons.js', ['position' => \yii\web\View::POS_HEAD]); ?>
    <?= $this->registerJsFile('@web/js/freeshippingbar.js', ['position' => \yii\web\View::POS_HEAD]); ?>
    <?= $this->registerJsFile('@web/js/currencies.js', ['position' => \yii\web\View::POS_HEAD]); ?>
    <?= $this->registerJsFile('@web/js/bc.wishlist.js', ['position' => \yii\web\View::POS_HEAD]); ?>
    <?= $this->registerJsFile('@web/js/bc.slider.js', ['position' => \yii\web\View::POS_HEAD]); ?>
    <?= $this->registerJsFile('@web/js/bc.script.js', ['position' => \yii\web\View::POS_HEAD]); ?>
    <?= $this->registerJsFile('@web/js/bc.global.js', ['position' => \yii\web\View::POS_HEAD]); ?>
    <?= $this->registerJsFile('@web/js/bc.compare.js', ['position' => \yii\web\View::POS_HEAD]); ?>
    <?= $this->registerJsFile('@web/js/bc.ajax-search.js', ['position' => \yii\web\View::POS_HEAD]); ?>
    <?= $this->registerJsFile('@web/js/eu-cookie-support-opt-in.js', ['position' => \yii\web\View::POS_HEAD]); ?>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<body class="templateIndex">
<?= $this->registerJsFile('http://cdn.jsdelivr.net/npm/fingerprintjs2/dist/fingerprint2.min.js', ['position' => \yii\web\View::POS_BEGIN]); ?>
<script src=""></script>
<script>
    var fp = new Fingerprint2();
    fp.get(function(result, components) {
        console.log(result);
    });
</script>
<div class="boxes-wrapper">
    <!-- Begin Menu Mobile-->
    <div class="mobile-version visible-xs visible-sm">
        <div class="menu-mobile navbar">
            <div class="nav-collapse is-mobile-nav">
                <ul class="main-nav">
                    <li class="li-on-mobile">
                        <span>Все виды </span>
                    </li>
                    <li class="dropdown active">
                        <a href="/" class="dropdown-link">
                            <span>Главная страница </span>
                        </a>
                        <span class="expand">
     <i class="fa fa-angle-down hidden-xs"></i>
     <i class="fa fa-plus visible-xs"></i>
   </span>
                    </li>
                    <li class="dropdown mega-menu">
                        <a href="collections/all.html" class="dropdown-link">
                            <span>мебели </span>
                        </a>
                        <span class="expand">
             <i class="fa fa-angle-down hidden-xs"></i>
             <i class="fa fa-plus visible-xs"></i>
           </span>
                        <div class="dropdown-menu dropdown-menu-1 column-4" style="min-height: 100px; background: #ffffff;">
                            <div class="row">
                                <div class="mega-col mega-col-1 col-sm-3">
                                    <div class="dropdown mega-sub-link ">
                                        <a href="/">
                                            <span>Коллекции </span>
                                        </a>
                                        <span class="expand">
                   <i class="fa fa-angle-down hidden-xs"></i>
                   <i class="fa fa-plus visible-xs"></i>
                 </span>
                                        <ul class="dropdown-menu dropdown-menu-sub fix ">
                                            <li class="bp-item">
                                                <div class="sb-product-head">
                                                    <a href="products/black-fashion-zapda-shoes.html">
                                                        <img src="images/01_270x.jpg" alt="Digital Download Product Example" />
                                                    </a>
                                                </div>
                                                <div class="sb-product-content">
                                                    <div class="bp-content-inner">
                                                        <a href="products/black-fashion-zapda-shoes.html">Мужские Наручные мебели Orient UG1H004W </a>
                                                        <div class="sb-price">
                                                                <span class="price">
         <span class="money">0.00 р.</span>
                                                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mega-col mega-col-2 col-sm-3">
                                    <div class="dropdown mega-sub-link ">
                                        <a href="/">
                                            <span>Продукты </span>
                                        </a>
                                        <span class="expand">
                   <i class="fa fa-angle-down hidden-xs"></i>
                   <i class="fa fa-plus visible-xs"></i>
                 </span>
                                        <ul class="dropdown-menu dropdown-menu-sub fix ">
                                            <li class="bp-item">
                                                <div class="sb-product-head">
                                                    <a href="products/coneco-product-sample.html">
                                                        <img src="images/02_270x.jpg" alt="Coneco Product Sample" />
                                                    </a>
                                                </div>
                                                <div class="sb-product-content">
                                                    <div class="bp-content-inner">
                                                        <a href="products/coneco-product-sample.html">мебели Orient AB00004D </a>
                                                        <div class="sb-price">
                                                                <span class="price">
         <span class="money">910.00 р.</span>
                                                                </span>

                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="mega-col mega-col-3 col-sm-3">
                                    <div class="dropdown mega-sub-link ">
                                        <a href="/">
                                            <span>Bestseller </span>
                                        </a>
                                        <span class="expand">
                   <i class="fa fa-angle-down hidden-xs"></i>
                   <i class="fa fa-plus visible-xs"></i>
                 </span>
                                        <ul class="dropdown-menu dropdown-menu-sub fix ">
                                            <li class="bp-item">

                                                <div class="sb-product-head">
                                                    <a href="products/daltex-product-example.html">
                                                        <img src="images/03_270x.jpg" alt="Daltex Product Example" />
                                                    </a>
                                                </div>

                                                <div class="sb-product-content">
                                                    <div class="bp-content-inner">
                                                        <a href="products/daltex-product-example.html">мебели Orient AB00004D </a>
                                                        <div class="sb-price">
                                                                <span class="price">
         <span class="money">2009.00 р.</span>
                                                                </span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="mega-col mega-col-4 col-sm-3">

                                    <div class="dropdown mega-sub-link ">
                                        <a href="/">
                                            <span>Распродажа </span>
                                        </a>
                                        <span class="expand">
                   <i class="fa fa-angle-down hidden-xs"></i>
                   <i class="fa fa-plus visible-xs"></i>
                 </span>
                                        <ul class="dropdown-menu dropdown-menu-sub fix ">
                                            <li class="bp-item">
                                                <div class="sb-product-head">
                                                    <a href="products/consectetur-nibh-eget.html">
                                                        <img src="images/04_270x.jpg" alt="Digital Download Product with License Key" />
                                                    </a>
                                                </div>
                                                <div class="sb-product-content">
                                                    <div class="bp-content-inner">
                                                        <a href="products/consectetur-nibh-eget.html">Digital Download Product with  Key </a>
                                                        <div class="sb-price">
                                                                <span class="price">
         <span class="money">900.00 р. </span>
                                                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="">
                        <a href="blogs/news.html">
                            <span>Каталог часов </span>
                        </a>
                    </li>

                    <li class="dropdown mega-menu">
                        <a href="collections.html" class="dropdown-link">
                            <span>Бренды </span>
                        </a>

                        <span class="expand">
             <i class="fa fa-angle-down hidden-xs"></i>
             <i class="fa fa-plus visible-xs"></i>
           </span>

                        <div class="dropdown-menu dropdown-menu-2 column-4" style="min-height: 100px; background: #ffffff;">
                            <div class="row">
                                <div class="mega-col mega-col-1 col-sm-3">
                                    <div class="dropdown mega-sub-link ">
                                        <a href="/">
                                            <span>Все виды </span>
                                        </a>
                                        <span class="expand">
                   <i class="fa fa-angle-down hidden-xs"></i>
                   <i class="fa fa-plus visible-xs"></i>
                 </span>
                                        <ul class="dropdown-menu dropdown-menu-sub">
                                            <li><a href="collections/arts-photography.html">Arts & Photography </a></li>
                                            <li><a href="collections/biographies-memoirs.html">Biographies & Memoirs </a></li>
                                            <li><a href="collections/childrens-bookds.html">Children's Bookds </a></li>
                                            <li><a href="collections/cookbook-food-wine.html">Cookbook. Food & Wine </a></li>
                                            <li><a href="collections/history.html">History </a></li>
                                            <li><a href="collections/literature-fiction.html">Literature & Fiction </a></li>
                                            <li><a href="collections/mystery-suspense.html">Mystery & Suspense </a></li>
                                            <li><a href="collections/romance.html">Romance </a></li>
                                            <li><a href="collections/sci-fi-fantasy.html">Sci-Fi & Fantasy </a></li>
                                            <li><a href="collections/teen-young-adult.html">Teen & Young Adult </a></li>
                                        </ul>
                                    </div>

                                </div>

                                <div class="mega-col mega-col-2 col-sm-3">

                                    <div class="dropdown mega-sub-link ">
                                        <a href="/">
                                            <span>Products </span>
                                        </a>
                                        <span class="expand">
                   <i class="fa fa-angle-down hidden-xs"></i>
                   <i class="fa fa-plus visible-xs"></i>
                 </span>

                                        <ul class="dropdown-menu dropdown-menu-sub">

                                            <li><a href="products/black-fashion-zapda-shoes.html">Black Fashion Zapdram </a></li>
                                            <li><a href="products/coneco-product-sample.html">Coneco Product sample </a></li>
                                            <li><a href="products/daltex-product-example.html">Daltex Product Example </a></li>
                                            <li><a href="products/donkix-product-sample.html">Donkix Product Sample </a></li>
                                            <li><a href="products/finity-product-sample.html">Finity Product Sample </a></li>
                                            <li><a href="products/fixair-product-sample.html">Fixair Product Sample </a></li>
                                            <li><a href="products/flexlam-product-sample.html">Flexlam Product Sample </a></li>
                                            <li><a href="products/georgeous-white-bag.html">Geous White Bag </a></li>
                                            <li><a href="products/georgeous-white-dresses.html">Geous White Dresses </a></li>
                                            <li><a href="products/golddax-product-example.html">Golddax Product Example </a></li>

                                        </ul>
                                    </div>

                                </div>

                                <div class="mega-col mega-col-3 col-sm-3">
                                    <div class="dropdown mega-sub-link ">
                                        <a href="/">
                                            <span>General Books </span>
                                        </a>
                                        <span class="expand">
                   <i class="fa fa-angle-down hidden-xs"></i>
                   <i class="fa fa-plus visible-xs"></i>
                 </span>

                                        <ul class="dropdown-menu dropdown-menu-sub">

                                            <li><a href="collections/arts-photography.html">New Releases </a></li>
                                            <li><a href="collections/biographies-memoirs.html">Best Sellers </a></li>
                                            <li><a href="collections/childrens-bookds.html">Our Favourites </a></li>
                                            <li><a href="collections/cookbook-food-wine.html">Reference Guides </a></li>
                                            <li><a href="collections/history.html">Faculty Authors </a></li>
                                            <li><a href="collections/teen-young-adult.html">Medical Books </a></li>
                                            <li><a href="collections/history.html">UBC Exclusive </a></li>
                                            <li><a href="collections/literature-fiction.html">First Nations Studies </a></li>
                                            <li><a href="collections/mystery-suspense.html">High School </a></li>
                                            <li><a href="collections/romance.html">For Librarians and Teachers </a></li>

                                        </ul>
                                    </div>

                                </div>

                                <div class="mega-col mega-col-4 col-sm-3">

                                    <div class="dropdown mega-sub-link banners ">
                                        <a href="/">
                                            <span>Banner Image </span>
                                        </a>
                                        <span class="expand">
                   <i class="fa fa-angle-down hidden-xs"></i>
                   <i class="fa fa-plus visible-xs"></i>
                 </span>

                                        <ul class="dropdown-menu dropdown-menu-sub">
                                            <li>
                                                <a href="collections.html">
                                                    <img src="images/mega_menu_2_image_col_4.jpg" alt="" />
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="">
                        <a href="collections/arts-photography.html">
                            <span>Новые мебели </span>
                        </a>
                    </li>
                    <!---
                        <li class="">
                            <a href="collections/childrens-bookds.html">
                                <span>Recomended </span>
                            </a>
                        </li>--->

                    <li class="">
                        <a href="#">
                            <span>Доставка </span>
                        </a>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-link">
                            <span>Помощь </span>
                        </a>

                        <span class="expand">
     <i class="fa fa-angle-down hidden-xs"></i>
     <i class="fa fa-plus visible-xs"></i>
   </span>

                        <ul class="dropdown-menu">

                            <li><a tabindex="-1" href="pages/contact-us.html"><span>Свяжитесь с нами </span></a></li>
                            <li><a tabindex="-1" href="pages/about-us.html"><span>О нас </span></a></li>
                            <li><a tabindex="-1" href="pages/limited-offer-time.html"><span>Ограниченное время предложения </span></a></li>
                            <li><a tabindex="-1" href="apps/help-center.html"><span>Вопросы и ответы </span></a></li>

                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <!-- End Menu Mobile-->

    <div id="page-body">

        <!-- Begin Header -->

        <header class="header-content style-1 bg-color" data-stick="true">
            <div class="header-container">
                <div class="header-main">
                    <div class="container">

                        <div class="row">
                            <div class="table-row">

                                <div class="header-logo col-lg-3 col-md-3 col-sm-12">
                                    <a href="/" title="Bookshop Theme" class="logo-site">

                                        <img class="logo" src="images/logo.png" alt="ZIM.UZ" />

                                    </a>
                                </div>

                                <div class="searchbox col-lg-6 col-md-6 col-sm-6">
                                    <form id="search" class="navbar-form search" action="/search" method="get">
                                        <input type="hidden" name="type" value="product" />
                                        <input id="bc-product-search" type="text" name="q" class="form-control" placeholder="Search" autocomplete="off" />
                                        <button type="submit" class="search-icon"></button>
                                    </form>

                                    <div id="result-ajax-search" class="hidden-xs">
                                        <ul class="search-results"></ul>
                                    </div>
                                </div>

                                <div class="header-other col-lg-3 col-md-3 col-sm-6">
                                    <div class="header-icons">

                                        <div class="navbar navbar-responsive-menu">
                                            <div class="btn-navbar responsive-menu" data-toggle="offcanvas">
                                                <span class="bar"></span>
                                                <span class="bar"></span>
                                                <span class="bar"></span>
                                            </div>
                                        </div>

                                        <div class="currency dropdown-parent uppercase currency-block">
                                            <a class="currency_wrapper dropdown-toggle" href="javascript:;" data-toggle="dropdown">
                                                <span class="currency_code">Рубль </span>
                                                <i class="fa fa-angle-down"></i>
                                            </a>

                                            <ul class="currencies dropdown-menu">

                                                <li class="currency-RUBL active">
                                                    <a href="javascript:;"><i class="flag-rubl"></i><span>Рубль </span></a>
                                                    <input type="hidden" value="RUBL" />
                                                </li>

                                                <li class="currency-USD">
                                                    <a href="javascript:;"><i class="flag-usd"></i><span>USD </span></a>
                                                    <input type="hidden" value="USD" />
                                                </li>

                                            </ul>

                                            <select class="currencies_src hide" name="currencies">

                                                <option value="RUBL" selected="selected" />Рубль

                                                <option value="USD" />USD


                                            </select>
                                        </div>

                                        <div class="wishlist-target">
                                            <a href="javascript:;" class="num-items-in-wishlist show-wishlist" title="Wishlist">
                                                <span class="wishlist-icon"><span class="number">0 </span></span>
                                            </a>
                                        </div>

                                        <div class="compare-target">
                                            <a href="javascript:;" class="num-items-in-compare show-compare" title="Compare">
                                                <span class="icon icon-compare"></span>
                                                <span class="compare-icon"><span class="number">0 </span></span>
                                            </a>
                                        </div>

                                        <div class="top-cart-holder hover-dropdown">
                                            <div class="cart-target">

                                                <a href="javascript:void(0)" class="basket dropdown-toggle dropdown-link" title="cart" data-toggle="dropdown">
                                                    <span class="number"><span class="n-item">0 </span><span class="item"> item(s) </span></span>
                                                </a>

                                                <div class="cart-dd dropdown-menu">
                                                    <div id="cart-info">
                                                        <div id="cart-content" class="cart-content">
                                                            <div class="loading"></div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="customer-account">
                                            <a href="account/login.html" title="Account"></a>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="horizontal-menu-wrapper">
                <div class="container">
                    <div class="horizontal-menu dropdown-fix">
                        <div class="sidemenu-holder">

                            <div class="navigation">
                                <nav class="navbar">
                                    <div class="collapse navbar-collapse">
                                        <ul class="main-nav">

                                            <li class="dropdown active">
                                                <a href="/" class="dropdown-link">
                                                    <span>Главная страница </span>
                                                </a>

                                                <span class="expand">
     <i class="fa fa-angle-down hidden-xs"></i>
     <i class="fa fa-plus visible-xs"></i>
   </span>

                                                <ul class="dropdown-menu">

                                                    <li><a tabindex="-1" href="/"><span>Home 1 </span></a></li>
                                                    <li><a tabindex="-1" href="/"><span>Home 2 </span></a></li>
                                                    <li><a tabindex="-1" href="/"><span>Home 3 </span></a></li>

                                                </ul>
                                            </li>

                                            <li class="dropdown mega-menu">
                                                <a href="collections/all.html" class="dropdown-link">
                                                    <span>Скидки </span>
                                                </a>
                                                <span class="expand">
             <i class="fa fa-angle-down hidden-xs"></i>
             <i class="fa fa-plus visible-xs"></i>
           </span>

                                                <div class="dropdown-menu dropdown-menu-1 column-4" style="min-height: 100px; background: #ffffff;">
                                                    <div class="row">
                                                        <div class="mega-col mega-col-1 col-sm-3">
                                                            <div class="dropdown mega-sub-link ">
                                                                <a href="/">
                                                                    <span>Коллекции </span>
                                                                </a>
                                                                <span class="expand">
                   <i class="fa fa-angle-down hidden-xs"></i>
                   <i class="fa fa-plus visible-xs"></i>
                 </span>

                                                                <ul class="dropdown-menu dropdown-menu-sub fix ">

                                                                    <li class="bp-item">
                                                                        <div class="sb-product-head">
                                                                            <a href="products/black-fashion-zapda-shoes.html">
                                                                                <img src="/images/01_270x_2015.jpg" alt="Digital Download Product Example" />
                                                                            </a>
                                                                        </div>
                                                                        <div class="sb-product-content">
                                                                            <div class="bp-content-inner">
                                                                                <a href="products/black-fashion-zapda-shoes.html">Пример цифрового продукта </a>
                                                                                <div class="sb-price">
                                                                                        <span class="price">
         <span class="money">900.00 р. </span>

                                                                                        </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <div class="mega-col mega-col-2 col-sm-3">

                                                            <div class="dropdown mega-sub-link ">
                                                                <a href="/">
                                                                    <span>Продукты </span>
                                                                </a>
                                                                <span class="expand">
                   <i class="fa fa-angle-down hidden-xs"></i>
                   <i class="fa fa-plus visible-xs"></i>
                 </span>
                                                                <ul class="dropdown-menu dropdown-menu-sub fix ">

                                                                    <li class="bp-item">
                                                                        <div class="sb-product-head">
                                                                            <a href="products/coneco-product-sample.html">
                                                                                <img src="/images/02_270x.jpg" alt="Coneco Product Sample" />
                                                                            </a>
                                                                        </div>

                                                                        <div class="sb-product-content">
                                                                            <div class="bp-content-inner">

                                                                                <a href="products/coneco-product-sample.html">Coneco Product Sample </a>
                                                                                <div class="sb-price">
                                                                                        <span class="price">
         <span class="money">$310.00 </span>
                                                                                        </span>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>

                                                        </div>

                                                        <div class="mega-col mega-col-3 col-sm-3">

                                                            <div class="dropdown mega-sub-link ">
                                                                <a href="/">
                                                                    <span>Bestseller </span>
                                                                </a>
                                                                <span class="expand">
                   <i class="fa fa-angle-down hidden-xs"></i>
                   <i class="fa fa-plus visible-xs"></i>
                 </span>
                                                                <ul class="dropdown-menu dropdown-menu-sub fix ">

                                                                    <li class="bp-item">
                                                                        <div class="sb-product-head">
                                                                            <a href="products/daltex-product-example.html">
                                                                                <img src="/images/03_1_270x.jpg" alt="Daltex Product Example" />
                                                                            </a>
                                                                        </div>

                                                                        <div class="sb-product-content">
                                                                            <div class="bp-content-inner">
                                                                                <a href="products/daltex-product-example.html">Daltex Product Example </a>
                                                                                <div class="sb-price">
                                                                                        <span class="price">
         <span class="money">$200.00 </span>
                                                                                        </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>

                                                        </div>

                                                        <div class="mega-col mega-col-4 col-sm-3">

                                                            <div class="dropdown mega-sub-link ">
                                                                <a href="/">
                                                                    <span>Clearance Sale </span>
                                                                </a>
                                                                <span class="expand">
                   <i class="fa fa-angle-down hidden-xs"></i>
                   <i class="fa fa-plus visible-xs"></i>
                 </span>
                                                                <ul class="dropdown-menu dropdown-menu-sub fix ">
                                                                    <li class="bp-item">
                                                                        <div class="sb-product-head">
                                                                            <a href="products/consectetur-nibh-eget.html">
                                                                                <img src="/images/04_270x.jpg" alt="Digital Download Product with License Key" />
                                                                            </a>
                                                                        </div>

                                                                        <div class="sb-product-content">
                                                                            <div class="bp-content-inner">
                                                                                <a href="products/consectetur-nibh-eget.html">Digital Download Product with  Key </a>
                                                                                <div class="sb-price">
                                                                                        <span class="price">
         <span class="money">900.00 р. </span>
                                                                                        </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="">
                                                <a href="blogs/news.html">
                                                    <span>Каталог часов </span>
                                                </a>
                                            </li>

                                            <li class="dropdown mega-menu">
                                                <a href="collections.html" class="dropdown-link">
                                                    <span>Бренды </span>
                                                </a>

                                                <span class="expand">
             <i class="fa fa-angle-down hidden-xs"></i>
             <i class="fa fa-plus visible-xs"></i>
           </span>
                                                <div class="dropdown-menu dropdown-menu-2 column-4" style="min-height: 100px; background: #ffffff;">
                                                    <div class="row">
                                                        <div class="mega-col mega-col-1 col-sm-3">
                                                            <div class="dropdown mega-sub-link ">
                                                                <a href="/">
                                                                    <span>Все виды </span>
                                                                </a>
                                                                <span class="expand">
                   <i class="fa fa-angle-down hidden-xs"></i>
                   <i class="fa fa-plus visible-xs"></i>
                 </span>

                                                                <ul class="dropdown-menu dropdown-menu-sub">

                                                                    <li><a href="collections/arts-photography.html">Arts & Photography </a></li>
                                                                    <li><a href="collections/biographies-memoirs.html">Biographies & Memoirs </a></li>
                                                                    <li><a href="collections/childrens-bookds.html">Children's Bookds </a></li>
                                                                    <li><a href="collections/cookbook-food-wine.html">Cookbook. Food & Wine </a></li>
                                                                    <li><a href="collections/history.html">History </a></li>
                                                                    <li><a href="collections/literature-fiction.html">Literature & Fiction </a></li>
                                                                    <li><a href="collections/mystery-suspense.html">Mystery & Suspense </a></li>
                                                                    <li><a href="collections/romance.html">Romance </a></li>
                                                                    <li><a href="collections/sci-fi-fantasy.html">Sci-Fi & Fantasy </a></li>
                                                                    <li><a href="collections/teen-young-adult.html">Teen & Young Adult </a></li>

                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <div class="mega-col mega-col-2 col-sm-3">
                                                            <div class="dropdown mega-sub-link ">
                                                                <a href="/">
                                                                    <span>Продукты </span>
                                                                </a>
                                                                <span class="expand">
                   <i class="fa fa-angle-down hidden-xs"></i>
                   <i class="fa fa-plus visible-xs"></i>
                 </span>

                                                                <ul class="dropdown-menu dropdown-menu-sub">

                                                                    <li><a href="products/black-fashion-zapda-shoes.html">Black Fashion Zapdram </a></li>
                                                                    <li><a href="products/coneco-product-sample.html">Coneco Product sample </a></li>
                                                                    <li><a href="products/daltex-product-example.html">Daltex Product Example </a></li>
                                                                    <li><a href="products/donkix-product-sample.html">Donkix Product Sample </a></li>
                                                                    <li><a href="products/finity-product-sample.html">Finity Product Sample </a></li>
                                                                    <li><a href="products/fixair-product-sample.html">Fixair Product Sample </a></li>
                                                                    <li><a href="products/flexlam-product-sample.html">Flexlam Product Sample </a></li>
                                                                    <li><a href="products/georgeous-white-bag.html">Geous White Bag </a></li>
                                                                    <li><a href="products/georgeous-white-dresses.html">Geous White Dresses </a></li>
                                                                    <li><a href="products/golddax-product-example.html">Golddax Product Example </a></li>

                                                                </ul>
                                                            </div>

                                                        </div>

                                                        <div class="mega-col mega-col-3 col-sm-3">
                                                            <div class="dropdown mega-sub-link ">
                                                                <a href="/">
                                                                    <span>Общие мебели </span>
                                                                </a>
                                                                <span class="expand">
                   <i class="fa fa-angle-down hidden-xs"></i>
                   <i class="fa fa-plus visible-xs"></i>
                 </span>
                                                                <ul class="dropdown-menu dropdown-menu-sub">

                                                                    <li><a href="collections/arts-photography.html">New Releases </a></li>
                                                                    <li><a href="collections/biographies-memoirs.html">Best Sellers </a></li>
                                                                    <li><a href="collections/childrens-bookds.html">Our Favourites </a></li>
                                                                    <li><a href="collections/cookbook-food-wine.html">Reference Guides </a></li>
                                                                    <li><a href="collections/history.html">Faculty Authors </a></li>
                                                                    <li><a href="collections/teen-young-adult.html">Medical Books </a></li>
                                                                    <li><a href="collections/history.html">UBC Exclusive </a></li>
                                                                    <li><a href="collections/literature-fiction.html">First Nations Studies </a></li>
                                                                    <li><a href="collections/mystery-suspense.html">High School </a></li>
                                                                    <li><a href="collections/romance.html">For Librarians and Teachers </a></li>

                                                                </ul>
                                                            </div>

                                                        </div>

                                                        <div class="mega-col mega-col-4 col-sm-3">

                                                            <div class="dropdown mega-sub-link banners ">
                                                                <a href="/">
                                                                    <span>Banner Image </span>
                                                                </a>
                                                                <span class="expand">
                   <i class="fa fa-angle-down hidden-xs"></i>
                   <i class="fa fa-plus visible-xs"></i>
                 </span>
                                                                <ul class="dropdown-menu dropdown-menu-sub">
                                                                    <li>
                                                                        <a href="collections.html">
                                                                            <img src="/images/mega_menu_2_image_col_4.jpg" alt="" />
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                            </li>

                                            <li class="">
                                                <a href="collections/arts-photography.html">
                                                    <span>Новые мебели </span>
                                                </a>
                                            </li>
                                            <!---
                                                <li class="">
                                                    <a href="collections/childrens-bookds.html">
                                                        <span>Recomended </span>
                                                    </a>
                                                </li>
												--->
                                            <li class="">
                                                <a href="#">
                                                    <span>Доставка </span>
                                                </a>
                                            </li>

                                            <li class="dropdown">
                                                <a href="#" class="dropdown-link">
                                                    <span>Помощь </span>
                                                </a>
                                                <span class="expand">
     <i class="fa fa-angle-down hidden-xs"></i>
     <i class="fa fa-plus visible-xs"></i>
   </span>
                                                <ul class="dropdown-menu">

                                                    <li><a tabindex="-1" href="pages/contact-us.html"><span>Свяжитесь с нами </span></a></li>
                                                    <li><a tabindex="-1" href="pages/about-us.html"><span>О нас </span></a></li>
                                                    <li><a tabindex="-1" href="pages/limited-offer-time.html"><span>Ограниченное время предложения </span></a></li>
                                                    <li><a tabindex="-1" href="apps/help-center.html"><span>Вопросы и ответы </span></a></li>

                                                </ul>
                                            </li>

                                        </ul>
                                    </div>
                                </nav>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </header>

        <!-- End Header -->

        <div id="body-content">

            <!-- Begin Breadcrumb-->

            <!-- End Breadcrumb-->

            <!-- Begin Main Content -->

            <div id="main-content">
                <div class="main-content">

                    <div id="home-main-content">
                        <!-- BEGIN content_for_index -->
                        <div id="shopify-section-1489575714713" class="shopify-section">
                            <div class="bc-wrapper">

                                <div class="home-slideshow-wrapper swiper-container" data-autoplay="false" data-time="6000" data-animation="slide">
                                    <div id="home-slideshow" class="swiper-wrapper">

                                        <div class="swiper-slide swiper-slide-1489575714713-0" style="background-image:url(/images/slider-1.jpg); width: auto;">
                                            <a href="collections.html"><img src="/images/slider-1.jpg" alt="" /></a>

                                            <div class="container">
                                                <div class="swiper-content text-right slide-1" style="bottom: 20%;">
                                                    <div class="container-box">

                                                        <div class="heading">Кухонные мебели </div>
                                                        <div class="subheading">Специальный <span>50% СКИДКА </span></div>
                                                        <div class="cation">ДЛЯ НАШЕГО СООБЩЕСТВА </div>
                                                        <div class="caption-link">
                                                            <a class="btn btn-default slider-button" href="collections.html">Получить бонус </a>
                                                        </div>

                                                        <style>
                                                            .swiper-slide-1489575714713-0.swiper-slide-active .heading {
                                                                color: #1b8bcc;
                                                                font-size: 22px;
                                                                -webkit-animation-name: moveFromTop;
                                                                animation-name: moveFromTop;
                                                                -webkit-animation-delay: 1s;
                                                                animation-delay: 1s;
                                                            }

                                                            .swiper-slide-1489575714713-0.swiper-slide-active .subheading {
                                                                color: #2b2b2b;
                                                                font-size: 56px;
                                                                -webkit-animation-name: moveFromLeft;
                                                                animation-name: moveFromLeft;
                                                                -webkit-animation-delay: 2s;
                                                                animation-delay: 2s;
                                                            }

                                                            .swiper-slide-1489575714713-0.swiper-slide-active .cation {
                                                                color: #2b2b2b;
                                                                font-size: 28px;
                                                                -webkit-animation-name: moveFromRight;
                                                                animation-name: moveFromRight;
                                                                -webkit-animation-delay: 3s;
                                                                animation-delay: 3s;
                                                            }

                                                            .swiper-slide-1489575714713-0.swiper-slide-active .caption-link {
                                                                -webkit-animation-name: moveFromBottom;
                                                                animation-name: moveFromBottom;
                                                                -webkit-animation-delay: 4s;
                                                                animation-delay: 4s;
                                                            }

                                                            @media (max-width: 1199px) and (min-width: 992px) {
                                                                .swiper-slide-1489575714713-0.swiper-slide-active .heading {
                                                                    font-size: 150%;
                                                                }
                                                                .swiper-slide-1489575714713-0.swiper-slide-active .subheading {
                                                                    font-size: 320%;
                                                                }
                                                                .swiper-slide-1489575714713-0.swiper-slide-active .cation {
                                                                    font-size: 140%;
                                                                }
                                                            }

                                                            @media (max-width: 991px) and (min-width: 768px) {
                                                                .swiper-slide-1489575714713-0.swiper-slide-active .heading {
                                                                    font-size: 130%;
                                                                }
                                                                .swiper-slide-1489575714713-0.swiper-slide-active .subheading {
                                                                    font-size: 250%;
                                                                }
                                                                .swiper-slide-1489575714713-0.swiper-slide-active .cation {
                                                                    font-size: 120%;
                                                                }
                                                            }
                                                        </style>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="swiper-slide has-video swiper-slide-1489575714713-1" style="background-image:url(/images/slider-2.jpg); width: auto;">
                                            <a href="collections.html"><img src="/images/slider-2.jpg" alt="" /></a>

                                            <div class="container">
                                                <div class="swiper-content text-center slide-2" style="bottom: 20%;">
                                                    <div class="container-box">

                                                        <div class="heading">Benefits of Reading </div>
                                                        <div class="subheading">Getting Smart, Thin, Healthy,</div>
                                                        <div class="cation">Lorem ipsum dolor sit , consectetuer adipiscing elit, sed </div>
                                                        <div class="caption-link">
                                                            <a class="btn btn-default slider-button" href="collections.html">View Collection </a>
                                                        </div>

                                                        <style>
                                                            .swiper-slide-1489575714713-1.swiper-slide-active .heading {
                                                                color: #1b8bcc;
                                                                font-size: 22px;
                                                                -webkit-animation-name: moveFromLeft;
                                                                animation-name: moveFromLeft;
                                                                -webkit-animation-delay: 1s;
                                                                animation-delay: 1s;
                                                            }

                                                            .swiper-slide-1489575714713-1.swiper-slide-active .subheading {
                                                                color: #ffffff;
                                                                font-size: 56px;
                                                                -webkit-animation-name: moveFromBottom;
                                                                animation-name: moveFromBottom;
                                                                -webkit-animation-delay: 2s;
                                                                animation-delay: 2s;
                                                            }

                                                            .swiper-slide-1489575714713-1.swiper-slide-active .cation {
                                                                color: #ffffff;
                                                                font-size: 28px;
                                                                -webkit-animation-name: moveFromLeft;
                                                                animation-name: moveFromLeft;
                                                                -webkit-animation-delay: 3s;
                                                                animation-delay: 3s;
                                                            }

                                                            .swiper-slide-1489575714713-1.swiper-slide-active .caption-link {
                                                                -webkit-animation-name: moveFromRight;
                                                                animation-name: moveFromRight;
                                                                -webkit-animation-delay: 4s;
                                                                animation-delay: 4s;
                                                            }

                                                            @media (max-width: 1199px) and (min-width: 992px) {
                                                                .swiper-slide-1489575714713-1.swiper-slide-active .heading {
                                                                    font-size: 150%;
                                                                }
                                                                .swiper-slide-1489575714713-1.swiper-slide-active .subheading {
                                                                    font-size: 320%;
                                                                }
                                                                .swiper-slide-1489575714713-1.swiper-slide-active .cation {
                                                                    font-size: 140%;
                                                                }
                                                            }

                                                            @media (max-width: 991px) and (min-width: 768px) {
                                                                .swiper-slide-1489575714713-1.swiper-slide-active .heading {
                                                                    font-size: 130%;
                                                                }
                                                                .swiper-slide-1489575714713-1.swiper-slide-active .subheading {
                                                                    font-size: 250%;
                                                                }
                                                                .swiper-slide-1489575714713-1.swiper-slide-active .cation {
                                                                    font-size: 120%;
                                                                }
                                                            }
                                                        </style>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="video-slide" style="display: none;">
                                                <video controls="" class="video" autoplay="" loop="" muted="" preload="auto" data-width="0" data-height="0">
                                                    <source src="/videos/video.mp4" type="video/mp4">
                                                    </source>
                                                </video>
                                            </div>

                                        </div>

                                    </div>

                                    <!-- Add Pagination -->

                                    <div class="swiper-pagination swiper-pagination-white"></div>

                                </div>

                                <!-- Add Arrows -->

                                <div class="swiper-button-next swiper-button-white"></div>
                                <div class="swiper-button-prev swiper-button-white"></div>

                            </div>

                            <script>
                                jQuery(document).ready(function($) {

                                    if (bcMsieVersion.MsieVersion() == 0) {
                                        AT_Main.homeSlideshow();
                                    } else {
                                        if (bcMsieVersion.MsieVersion() > 9 || !!navigator.userAgent.match(/Trident.*rv\:11\./)) {
                                            AT_Main.homeIE();
                                        } else {
                                            jQuery('#home-slideshow').owlCarousel({
                                                nav: true,
                                                dots: false,
                                                items: 1,
                                                navText: ['<i class="fa fa-angle-left" title="previous"></i>', '<i class="fa fa-angle-right" title="Next"></i>']
                                            })
                                        }
                                    }

                                });
                            </script>

                        </div>
                        <div id="shopify-section-14895758503340" class="shopify-section">

                            <div class="home-product style-1 home-carousel">
                                <div class="container">
                                    <div class="product-list product-list-14895758503340 explore-categories text-center">

                                        <div class="product-wrapper">
                                            <a class="category" href="/sofas-by-material?src=explore_categories"><svg data-name="Layer 1" viewBox="0 0 30 30" class="category-icon"><title>UL_CATEGORY_ICONS</title><path d="M27.5 19.4H27v-1a4 4 0 0 0-4-4H7a4 4 0 0 0-4 4v1h-.5A2.48 2.48 0 0 0 0 21.9v4a2.48 2.48 0 0 0 2.5 2.5h.2v1.1a.47.47 0 0 0 .5.5H5a.47.47 0 0 0 .5-.5v-1.1h19.2v1.1a.47.47 0 0 0 .5.5H27a.47.47 0 0 0 .5-.5v-1.1h.1a2.48 2.48 0 0 0 2.5-2.5v-4a2.63 2.63 0 0 0-2.6-2.5zM4 18.4a3 3 0 0 1 3-3h16a3 3 0 0 1 3 3v1.5a2.61 2.61 0 0 0-1 2v1.5H5v-1.5a2.61 2.61 0 0 0-1-2v-1.5zM4.4 29h-.8v-.6h.8v.6zm22 0h-.8v-.6h.8v.6zm2.6-3.1a1.54 1.54 0 0 1-1.5 1.5h-25A1.54 1.54 0 0 1 1 25.9v-4a1.54 1.54 0 0 1 1.5-1.5A1.54 1.54 0 0 1 4 21.9v2a.47.47 0 0 0 .5.5h21a.47.47 0 0 0 .5-.5v-2a1.5 1.5 0 0 1 3 0v4z"></path><circle cx="8.6" cy="19.2" r=".4"></circle><circle cx="15" cy="19.2" r=".4"></circle><circle cx="21.4" cy="19.2" r=".4"></circle></svg>
                                                <span class="no-padding category-name">Sofas</span>
                                            </a>
                                        </div>

                                        <div class="product-wrapper">
                                            <a class="category" href="/bed?src=explore_categories"><svg data-name="Layer 1" viewBox="0 0 30 30" class="category-icon"><title>UL_CATEGORY_ICONS</title><path d="M28 24h-.5v-2a2 2 0 0 0-2-2h-20v-5a2 2 0 0 0-4 0v12.5a.47.47 0 0 0 .5.5h1.5v1.5a.47.47 0 0 0 .5.5h2a.47.47 0 0 0 .5-.5V28h17v1.5a.47.47 0 0 0 .5.5h2a.47.47 0 0 0 .5-.5V28H28a.47.47 0 0 0 .5-.5v-3a.47.47 0 0 0-.5-.5zM5.5 21h20a1 1 0 0 1 1 1v2h-21v-3zm-3-6a1.08 1.08 0 0 1 1-1 1 1 0 0 1 1 1v9h-2v-9zm3 14h-1v-1h1v1zm20 0h-1v-1h1v1zm2-2h-25v-2h25v2z"></path></svg>
                                                <span class="no-padding category-name">Beds</span>
                                            </a>
                                        </div>
                                        <div class="product-wrapper">
                                            <a class="category" href="/dining-table-set?src=explore_categories"><svg data-name="Layer 1" viewBox="0 0 30 30" class="category-icon"><title>UL_CATEGORY_ICONS</title><path d="M30 10.5v19a.5.5 0 0 1-1 0V21h-3v-1h3v-9.5a.5.5 0 0 1 1 0zM4 20v1H1v8.5a.47.47 0 0 1-.5.5.47.47 0 0 1-.5-.5v-19a.47.47 0 0 1 .5-.5.47.47 0 0 1 .5.5V20h3z"></path><path d="M26.5 15h-23a.47.47 0 0 0-.5.5v2a.47.47 0 0 0 .5.5H5v11.5a.47.47 0 0 0 .5.5.47.47 0 0 0 .5-.5V21h1v8.5a.5.5 0 0 0 1 0V20H6v-2h18v2h-2v9.5a.5.5 0 0 0 1 0V21h1v8.5a.5.5 0 0 0 1 0V18h1.5a.47.47 0 0 0 .5-.5v-2a.47.47 0 0 0-.5-.5zm-.5 2H4v-1h22v1z"></path></svg>
                                                <spanspan class="no-padding category-name">Dining</spanspan>
                                            </a>
                                        </div>
                                        <div class="product-wrapper">
                                            <a class="category" href="/tv-units?src=explore_categories"><svg data-name="Layer 1" viewBox="0 0 30 30" class="category-icon"><title>UL_CATEGORY_ICONS</title><path d="M28.5 17h-13v-1H24a.47.47 0 0 0 .5-.5v-9A.47.47 0 0 0 24 6H6a.47.47 0 0 0-.5.5v9a.47.47 0 0 0 .5.5h8.5v1h-13a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h1v1.5a.47.47 0 0 0 .5.5h2a.47.47 0 0 0 .5-.5V28h19v1.5a.47.47 0 0 0 .5.5h2a.47.47 0 0 0 .5-.5V28h1a1 1 0 0 0 1-1v-9a1.08 1.08 0 0 0-1-1zm-24 12h-1v-1h1v1zm10-2h-13v-9h13v9zm-8-12V7h17v8h-17zm20 14h-1v-1h1v1zm2-2h-13v-9h13v9z"></path><path d="M17.5 21.5v2a.5.5 0 0 1-1 0v-2a.5.5 0 0 1 1 0zM13.5 21.5v2a.5.5 0 0 1-1 0v-2a.5.5 0 0 1 1 0z"></path></svg>
                                                <span class="no-padding category-name">TV Units</span>
                                            </a>
                                        </div>
                                        <div class="product-wrapper">
                                            <a class="category" href="/mattresses-bedding?src=explore_categories"><svg data-name="Layer 1" viewBox="0 0 30 30" class="category-icon"><title>UL_CATEGORY_ICONS</title><path d="M29 19.4a1.8 1.8 0 0 0-.2-1 2 2 0 0 0-1.8-.8h-1.7a3.64 3.64 0 0 0-1.6.3 6.36 6.36 0 0 0-1.5-.3h-3.9a3.87 3.87 0 0 0-1.6.3 6.93 6.93 0 0 0-1.6-.3h-3.9a3.64 3.64 0 0 0-1.6.3 6.46 6.46 0 0 0-1.9-.3h-2a3.13 3.13 0 0 0-2.4 1.3l-2.1 3.4a1.9 1.9 0 0 0-.3 1.4v4.9a1.42 1.42 0 0 0 .2.6c.3.7 1.3.8 2 .8h21.1a3.36 3.36 0 0 0 3.2-1.5l1.5-2.5v-.1a4.54 4.54 0 0 0 .2-.8zm-.9 5.8a2.27 2.27 0 0 1-.1.4s-1.2 2-1.5 2.4c-.2.2-.4 1-2.3 1H3.62c-1.4 0-1.7-.2-1.8-.3v-4a3.25 3.25 0 0 0 1.3.1h.7a6 6 0 0 1 1.8.3l.2.1h.1a2.91 2.91 0 0 1 1.4-.3h3.6a6 6 0 0 1 1.8.3l.2.1.2-.1a2.91 2.91 0 0 1 1.4-.3h4a5 5 0 0 1 1.4.3l.2.1.2-.1a2.91 2.91 0 0 1 1.4-.3h2.1c2.2 0 2.1-.3 2.7-.9l.6-.8.3-.4.8-1.3v3.7h-.1zm-.1-5.8a.37.37 0 0 1-.1.3l-1.9 3a2.66 2.66 0 0 1-1.1 1 4.44 4.44 0 0 1-1.3.2h-2.1a3.64 3.64 0 0 0-1.6.3 6.36 6.36 0 0 0-1.5-.3h-4a3.64 3.64 0 0 0-1.6.3 6.93 6.93 0 0 0-1.6-.3H7.42a3.64 3.64 0 0 0-1.6.3A9.22 9.22 0 0 0 4 23.9h-.28a5.84 5.84 0 0 1-1.9-.2 1.26 1.26 0 0 1 .1-.8L4 19.5a2 2 0 0 1 1.5-.8h2a6 6 0 0 1 1.8.3l.2.1.2-.1a2.91 2.91 0 0 1 1.4-.3h3.6a6 6 0 0 1 1.8.3l.2.1.2-.1a2.91 2.91 0 0 1 1.4-.3h3.8a6.36 6.36 0 0 1 1.5.3l.2.1.2-.1a2.91 2.91 0 0 1 1.4-.3H27a1.18 1.18 0 0 1 1 .3.53.53 0 0 1 0 .4z"></path></svg>
                                                <span class="no-padding category-name">Mattresses</span>
                                            </a>
                                        </div>
                                        <div class="product-wrapper">
                                            <a class="category" href="/living-chairs?src=explore_categories"><svg data-name="Layer 1" viewBox="0 0 30 30" class="category-icon"><title>UL_CATEGORY_ICONS</title><path d="M20.3 22.5a.52.52 0 0 0 .2-.4v-.3a2.75 2.75 0 0 0-1.2-2.2v-7.1a1.32 1.32 0 0 0-1.3-1.3h-6.2a1.26 1.26 0 0 0-1.3 1.3v7.1a2.51 2.51 0 0 0-1.2 2.2v.3a.52.52 0 0 0 .2.4l-.8 7.1a.35.35 0 0 0 .4.4h.8a.66.66 0 0 0 .5-.4l1.7-7.1h5.8l1.7 7.1a.54.54 0 0 0 .5.4h.8a.35.35 0 0 0 .4-.4zm-.12 6.7l-1.49-6.7h.9l.94 6.7h-.35zm-9-16.7a.47.47 0 0 1 .5-.5h6.2a.47.47 0 0 1 .5.5v6.8a1.31 1.31 0 0 0-.5-.1H11.7a.9.9 0 0 0-.5.1v-6.8zM9.75 29.2H9.5l.89-6.7h.9zm.15-7.5a1.77 1.77 0 0 1 1.8-1.7h6.2a1.84 1.84 0 0 1 1.8 1.7H9.9z"></path></svg>
                                                <span class="no-padding category-name">Seating</span>
                                            </a>
                                        </div>
                                        <div class="product-wrapper">
                                            <a class="category" href="/coffee-table?src=explore_categories"><svg data-name="Layer 1" viewBox="0 0 30 30" class="category-icon"><title>UL_CATEGORY_ICONS</title><path d="M27 19.6H2.85a.47.47 0 0 0-.5.5v9.4a.47.47 0 0 0 .5.5h3.8a.47.47 0 0 0 .5-.5v-5.7h15.8v5.7a.47.47 0 0 0 .5.5h3.7a.47.47 0 0 0 .5-.5v-9.4a.77.77 0 0 0-.65-.5zm-.45 9.4h-2.7v-5.7a.47.47 0 0 0-.5-.5H6.65a.47.47 0 0 0-.5.5V29h-2.8v-8.4h23.2V29z"></path></svg>
                                                <span class="no-padding category-name">Coffee Tables</span>
                                            </a>
                                        </div>
                                        <div class="product-wrapper">
                                            <a class="category" href="https://www.urbanladder.com/cupboards?src=explore_categories"><svg data-name="Layer 1" viewBox="0 0 30 30" class="category-icon"><title>UL_CATEGORY_ICONS</title><path d="M25.5 2a1 1 0 0 0-1-1h-19a1 1 0 0 0-1 1v27a1 1 0 0 0 1 1h19a1 1 0 0 0 1-1V2zm-11 27h-9V8h9v21zm0-22h-9V2h9v5zm10 22h-9V8h9v21zm0-22h-9V2h9v5z"></path><path d="M17.5 16.5v2a.5.5 0 0 1-1 0v-2a.5.5 0 0 1 1 0zM13.5 16.5v2a.5.5 0 0 1-1 0v-2a.5.5 0 0 1 1 0zM17.5 4.5v1a.5.5 0 0 1-1 0v-1a.5.5 0 1 1 1 0zM13.5 4.5v1a.5.5 0 0 1-1 0v-1a.5.5 0 1 1 1 0z"></path></svg>
                                                <span class="no-padding category-name">Cupboards</span>
                                            </a>
                                        </div>
                                        <div class="product-wrapper">
                                            <a class="category" href="https://www.urbanladder.com/recliners?src=explore_categories"><svg data-name="Layer 1" viewBox="0 0 30 30" class="category-icon"><title>UL_CATEGORY_ICONS</title><path d="M24.73 23.1h-2.2v-1.6a1.5 1.5 0 0 0-1.6-1.5h-8.3l-4-5.9a3.8 3.8 0 0 0-5.2-1 .76.76 0 0 0-.2.4.37.37 0 0 0 .1.3l6.9 10.1V27a1.52 1.52 0 0 0 1.4 1.5v1a.47.47 0 0 0 .5.5h1.5a.47.47 0 0 0 .5-.5v-1h4.2v1a.47.47 0 0 0 .5.5h1.5a.47.47 0 0 0 .5-.5v-1h.1a1.51 1.51 0 0 0 1.5-1.3h3.7a.65.65 0 0 0 .6-.6v-1.5a1.91 1.91 0 0 0-2-2zM11 20.2a1.43 1.43 0 0 0-.7 1v1.11l-6-8.71a3.09 3.09 0 0 1 3.6 1l3.7 5.4a2 2 0 0 0-.6.2zm2.2 8.8h-.6v-.5h.64v.5zm6.7 0h-.59v-.5h.62v.5zm1.6-1.8a.55.55 0 0 1-.5.3h-9.2a.65.65 0 0 1-.6-.6v-4h10.3V27m.1-5H11.34v-.5a.51.51 0 0 1 .6-.5h9.2a.56.56 0 0 1 .6.5v.5h-.1zm4.3 4.2h-3.41V24h2.35a1.11 1.11 0 0 1 1.1 1.1v1.1z"></path></svg>
                                                <span class="no-padding category-name">Recliners</span>
                                            </a>
                                        </div>
                                        <div class="product-wrapper">
                                            <a class="category" href="/living-storage?src=explore_categories"><svg data-name="Layer 1" viewBox="0 0 30 30" class="category-icon"><title>UL_CATEGORY_ICONS</title><path d="M16 25h-2a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 0h-2a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 0h-2a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 0h-2a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 0h-2a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 0h-2a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 0h-2a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm8.5-19h-19a1 1 0 0 0-1 1v20a1 1 0 0 0 1 1h1v1.5a.47.47 0 0 0 .5.5h2a.47.47 0 0 0 .5-.5V28h11v1.5a.47.47 0 0 0 .5.5h2a.47.47 0 0 0 .5-.5V28h1a1 1 0 0 0 1-1V7a1.08 1.08 0 0 0-1-1zm-16 23h-1v-1h1v1zm14 0h-1v-1h1v1zm2-2h-19v-8h19v8zm0-9h-19v-5h19v5zm0-6h-19V7h19v5zM14 26h2a.5.5 0 0 0 0-1h-2a.5.5 0 0 0 0 1zm2-1h-2a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 0h-2a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 0h-2a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 0h-2a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 0h-2a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1z"></path><path d="M16.5 10.5a.47.47 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.47.47 0 0 1 .5.5zM16.5 16.5a.47.47 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.47.47 0 0 1 .5.5z"></path></svg>

                                                <span class="no-padding category-name">Storage</span>
                                            </a>
                                        </div>
                                        <div class="product-wrapper">
                                            <a class="category" href="/tables-study?src=explore_categories"><svg data-name="Layer 1" viewBox="0 0 30 30" class="category-icon"><title>UL_CATEGORY_ICONS</title><path d="M29 12H1a.47.47 0 0 0-.5.5v2a.47.47 0 0 0 .5.5h1.5v14.5a.47.47 0 0 0 .5.5.47.47 0 0 0 .5-.5V19h11v8h12v2.5a.5.5 0 0 0 1 0V15H29a.47.47 0 0 0 .5-.5v-2a.47.47 0 0 0-.5-.5zm-2.5 14h-11v-7h11v7zm0-8h-23v-3h23v3zm2-4h-27v-1h27v1z"></path><path d="M16.5 16.5a.47.47 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.47.47 0 0 1 .5.5zM22.5 22.5a.47.47 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.47.47 0 0 1 .5.5z"></path></svg>

                                                <span class="no-padding category-name">Study</span>
                                            </a>
                                        </div>
                                        <div class="product-wrapper">
                                            <a class="category" href="/bookshelf?src=explore_categories"><svg data-name="Layer 1" viewBox="0 0 30 30" class="category-icon"><title>UL_CATEGORY_ICONS</title><path d="M17 22a.47.47 0 0 0-.5.5v2a.5.5 0 0 0 1 0v-2a.47.47 0 0 0-.5-.5zm-9.5-3.7l-.9-3.9A.49.49 0 0 0 6 14a.55.55 0 0 0-.4.6l.9 3.9a.55.55 0 0 0 .6.4.51.51 0 0 0 .4-.6zm2-.2l-1.6-3.6a.54.54 0 0 0-1 .4l1.6 3.7a.43.43 0 0 0 .7.2.55.55 0 0 0 .3-.7zm0-8L7.9 6.5a.54.54 0 0 0-1 .4l1.6 3.7a.43.43 0 0 0 .7.2.55.55 0 0 0 .3-.7zm-2 8.2l-.9-3.9A.49.49 0 0 0 6 14a.55.55 0 0 0-.4.6l.9 3.9a.55.55 0 0 0 .6.4.51.51 0 0 0 .4-.6zm2-.2l-1.6-3.6a.54.54 0 0 0-1 .4l1.6 3.7a.43.43 0 0 0 .7.2.55.55 0 0 0 .3-.7zM17 22a.47.47 0 0 0-.5.5v2a.5.5 0 0 0 1 0v-2a.47.47 0 0 0-.5-.5zm0 0a.47.47 0 0 0-.5.5v2a.5.5 0 0 0 1 0v-2a.47.47 0 0 0-.5-.5zm-7.5-3.9l-1.6-3.6a.54.54 0 0 0-1 .4l1.6 3.7a.43.43 0 0 0 .7.2.55.55 0 0 0 .3-.7zm-2 .2l-.9-3.9A.49.49 0 0 0 6 14a.55.55 0 0 0-.4.6l.9 3.9a.55.55 0 0 0 .6.4.51.51 0 0 0 .4-.6zm0 0l-.9-3.9A.49.49 0 0 0 6 14a.55.55 0 0 0-.4.6l.9 3.9a.55.55 0 0 0 .6.4.51.51 0 0 0 .4-.6zm2-.2l-1.6-3.6a.54.54 0 0 0-1 .4l1.6 3.7a.43.43 0 0 0 .7.2.55.55 0 0 0 .3-.7zm0-8L7.9 6.5a.54.54 0 0 0-1 .4l1.6 3.7a.43.43 0 0 0 .7.2.55.55 0 0 0 .3-.7zM17 22a.47.47 0 0 0-.5.5v2a.5.5 0 0 0 1 0v-2a.47.47 0 0 0-.5-.5zm0 0a.47.47 0 0 0-.5.5v2a.5.5 0 0 0 1 0v-2a.47.47 0 0 0-.5-.5zM9.5 10.1L7.9 6.5a.54.54 0 0 0-1 .4l1.6 3.7a.43.43 0 0 0 .7.2.55.55 0 0 0 .3-.7zm0 8l-1.6-3.6a.54.54 0 0 0-1 .4l1.6 3.7a.43.43 0 0 0 .7.2.55.55 0 0 0 .3-.7zm-2 .2l-.9-3.9A.49.49 0 0 0 6 14a.55.55 0 0 0-.4.6l.9 3.9a.55.55 0 0 0 .6.4.51.51 0 0 0 .4-.6zm0 0l-.9-3.9A.49.49 0 0 0 6 14a.55.55 0 0 0-.4.6l.9 3.9a.55.55 0 0 0 .6.4.51.51 0 0 0 .4-.6zm2-.2l-1.6-3.6a.54.54 0 0 0-1 .4l1.6 3.7a.43.43 0 0 0 .7.2.55.55 0 0 0 .3-.7zm0-8L7.9 6.5a.54.54 0 0 0-1 .4l1.6 3.7a.43.43 0 0 0 .7.2.55.55 0 0 0 .3-.7zM17 22a.47.47 0 0 0-.5.5v2a.5.5 0 0 0 1 0v-2a.47.47 0 0 0-.5-.5zm-9.5-3.7l-.9-3.9A.49.49 0 0 0 6 14a.55.55 0 0 0-.4.6l.9 3.9a.55.55 0 0 0 .6.4.51.51 0 0 0 .4-.6zm2-.2l-1.6-3.6a.54.54 0 0 0-1 .4l1.6 3.7a.43.43 0 0 0 .7.2.55.55 0 0 0 .3-.7zm0-8L7.9 6.5a.54.54 0 0 0-1 .4l1.6 3.7a.43.43 0 0 0 .7.2.55.55 0 0 0 .3-.7zM17 22a.47.47 0 0 0-.5.5v2a.5.5 0 0 0 1 0v-2a.47.47 0 0 0-.5-.5zm0 0a.47.47 0 0 0-.5.5v2a.5.5 0 0 0 1 0v-2a.47.47 0 0 0-.5-.5zM9.5 10.1L7.9 6.5a.54.54 0 0 0-1 .4l1.6 3.7a.43.43 0 0 0 .7.2.55.55 0 0 0 .3-.7zm0 8l-1.6-3.6a.54.54 0 0 0-1 .4l1.6 3.7a.43.43 0 0 0 .7.2.55.55 0 0 0 .3-.7zm-2 .2l-.9-3.9A.49.49 0 0 0 6 14a.55.55 0 0 0-.4.6l.9 3.9a.55.55 0 0 0 .6.4.51.51 0 0 0 .4-.6zm0 0l-.9-3.9A.49.49 0 0 0 6 14a.55.55 0 0 0-.4.6l.9 3.9a.55.55 0 0 0 .6.4.51.51 0 0 0 .4-.6zm2-.2l-1.6-3.6a.54.54 0 0 0-1 .4l1.6 3.7a.43.43 0 0 0 .7.2.55.55 0 0 0 .3-.7zm0-8L7.9 6.5a.54.54 0 0 0-1 .4l1.6 3.7a.43.43 0 0 0 .7.2.55.55 0 0 0 .3-.7zM17 22a.47.47 0 0 0-.5.5v2a.5.5 0 0 0 1 0v-2a.47.47 0 0 0-.5-.5zm0 0a.47.47 0 0 0-.5.5v2a.5.5 0 0 0 1 0v-2a.47.47 0 0 0-.5-.5zM9.5 10.1L7.9 6.5a.54.54 0 0 0-1 .4l1.6 3.7a.43.43 0 0 0 .7.2.55.55 0 0 0 .3-.7zm0 8l-1.6-3.6a.54.54 0 0 0-1 .4l1.6 3.7a.43.43 0 0 0 .7.2.55.55 0 0 0 .3-.7zm-2 .2l-.9-3.9A.49.49 0 0 0 6 14a.55.55 0 0 0-.4.6l.9 3.9a.55.55 0 0 0 .6.4.51.51 0 0 0 .4-.6zM17 22a.47.47 0 0 0-.5.5v2a.5.5 0 0 0 1 0v-2a.47.47 0 0 0-.5-.5zm0 0a.47.47 0 0 0-.5.5v2a.5.5 0 0 0 1 0v-2a.47.47 0 0 0-.5-.5zm0 0a.47.47 0 0 0-.5.5v2a.5.5 0 0 0 1 0v-2a.47.47 0 0 0-.5-.5zm-9.5-3.7l-.9-3.9A.49.49 0 0 0 6 14a.55.55 0 0 0-.4.6l.9 3.9a.55.55 0 0 0 .6.4.51.51 0 0 0 .4-.6zm2-.2l-1.6-3.6a.54.54 0 0 0-1 .4l1.6 3.7a.43.43 0 0 0 .7.2.55.55 0 0 0 .3-.7zm0-8L7.9 6.5a.54.54 0 0 0-1 .4l1.6 3.7a.43.43 0 0 0 .7.2.55.55 0 0 0 .3-.7z"></path><path d="M24.5 3h-19a1 1 0 0 0-1 1v23a1 1 0 0 0 1 1h1v1.5a.5.5 0 0 0 1 0V28h15v1.5a.5.5 0 0 0 1 0V28h1a1 1 0 0 0 1-1V4a1.08 1.08 0 0 0-1-1zm-10 24h-9v-7h9v7zm0-8h-9v-7h9v7zm0-8h-9V4h9v7zm10 16h-9v-7h9v7zm0-8h-9v-7h9v7zm0-8h-9V4h9v7z"></path><path d="M7.2 10.9a.47.47 0 0 1-.6-.4l-.9-3.9a.47.47 0 0 1 .4-.6.47.47 0 0 1 .6.4l.9 3.9a.82.82 0 0 1-.4.6zM24.3 7l-1.6 3.7a.43.43 0 0 1-.7.2.55.55 0 0 1-.3-.7l1.6-3.7a.43.43 0 0 1 .7-.2.52.52 0 0 1 .3.7z"></path><path d="M22.9 7.5l-2.4 3.2a.5.5 0 1 1-.8-.6l2.4-3.2a.49.49 0 0 1 .7-.1.56.56 0 0 1 .1.7zM24.2 14.8l-1.6 3.7a.36.36 0 0 1-.6.2.61.61 0 0 1-.3-.7l1.6-3.7a.52.52 0 0 1 .7-.3.88.88 0 0 1 .2.8zM22.2 14.7l-.9 3.9a.51.51 0 0 1-1-.2l.9-3.9a.55.55 0 0 1 .6-.4.49.49 0 0 1 .4.6zM11.4 18.7a.49.49 0 0 1-.7-.1l-2.2-3.3a.62.62 0 0 1 .1-.7.49.49 0 0 1 .7.1l2.2 3.3a.47.47 0 0 1-.1.7zM13.5 22.5v2a.5.5 0 0 1-1 0v-2a.5.5 0 0 1 1 0z"></path></svg>
                                                <span class="no-padding category-name">Bookshelves</span>
                                            </a>
                                        </div>
                                        <div class="product-wrapper">
                                            <a class="category" href="/bookshelf?src=explore_categories"><svg data-name="Layer 1" viewBox="0 0 30 30" class="category-icon"><title>UL_CATEGORY_ICONS</title><path d="M17 22a.47.47 0 0 0-.5.5v2a.5.5 0 0 0 1 0v-2a.47.47 0 0 0-.5-.5zm-9.5-3.7l-.9-3.9A.49.49 0 0 0 6 14a.55.55 0 0 0-.4.6l.9 3.9a.55.55 0 0 0 .6.4.51.51 0 0 0 .4-.6zm2-.2l-1.6-3.6a.54.54 0 0 0-1 .4l1.6 3.7a.43.43 0 0 0 .7.2.55.55 0 0 0 .3-.7zm0-8L7.9 6.5a.54.54 0 0 0-1 .4l1.6 3.7a.43.43 0 0 0 .7.2.55.55 0 0 0 .3-.7zm-2 8.2l-.9-3.9A.49.49 0 0 0 6 14a.55.55 0 0 0-.4.6l.9 3.9a.55.55 0 0 0 .6.4.51.51 0 0 0 .4-.6zm2-.2l-1.6-3.6a.54.54 0 0 0-1 .4l1.6 3.7a.43.43 0 0 0 .7.2.55.55 0 0 0 .3-.7zM17 22a.47.47 0 0 0-.5.5v2a.5.5 0 0 0 1 0v-2a.47.47 0 0 0-.5-.5zm0 0a.47.47 0 0 0-.5.5v2a.5.5 0 0 0 1 0v-2a.47.47 0 0 0-.5-.5zm-7.5-3.9l-1.6-3.6a.54.54 0 0 0-1 .4l1.6 3.7a.43.43 0 0 0 .7.2.55.55 0 0 0 .3-.7zm-2 .2l-.9-3.9A.49.49 0 0 0 6 14a.55.55 0 0 0-.4.6l.9 3.9a.55.55 0 0 0 .6.4.51.51 0 0 0 .4-.6zm0 0l-.9-3.9A.49.49 0 0 0 6 14a.55.55 0 0 0-.4.6l.9 3.9a.55.55 0 0 0 .6.4.51.51 0 0 0 .4-.6zm2-.2l-1.6-3.6a.54.54 0 0 0-1 .4l1.6 3.7a.43.43 0 0 0 .7.2.55.55 0 0 0 .3-.7zm0-8L7.9 6.5a.54.54 0 0 0-1 .4l1.6 3.7a.43.43 0 0 0 .7.2.55.55 0 0 0 .3-.7zM17 22a.47.47 0 0 0-.5.5v2a.5.5 0 0 0 1 0v-2a.47.47 0 0 0-.5-.5zm0 0a.47.47 0 0 0-.5.5v2a.5.5 0 0 0 1 0v-2a.47.47 0 0 0-.5-.5zM9.5 10.1L7.9 6.5a.54.54 0 0 0-1 .4l1.6 3.7a.43.43 0 0 0 .7.2.55.55 0 0 0 .3-.7zm0 8l-1.6-3.6a.54.54 0 0 0-1 .4l1.6 3.7a.43.43 0 0 0 .7.2.55.55 0 0 0 .3-.7zm-2 .2l-.9-3.9A.49.49 0 0 0 6 14a.55.55 0 0 0-.4.6l.9 3.9a.55.55 0 0 0 .6.4.51.51 0 0 0 .4-.6zm0 0l-.9-3.9A.49.49 0 0 0 6 14a.55.55 0 0 0-.4.6l.9 3.9a.55.55 0 0 0 .6.4.51.51 0 0 0 .4-.6zm2-.2l-1.6-3.6a.54.54 0 0 0-1 .4l1.6 3.7a.43.43 0 0 0 .7.2.55.55 0 0 0 .3-.7zm0-8L7.9 6.5a.54.54 0 0 0-1 .4l1.6 3.7a.43.43 0 0 0 .7.2.55.55 0 0 0 .3-.7zM17 22a.47.47 0 0 0-.5.5v2a.5.5 0 0 0 1 0v-2a.47.47 0 0 0-.5-.5zm-9.5-3.7l-.9-3.9A.49.49 0 0 0 6 14a.55.55 0 0 0-.4.6l.9 3.9a.55.55 0 0 0 .6.4.51.51 0 0 0 .4-.6zm2-.2l-1.6-3.6a.54.54 0 0 0-1 .4l1.6 3.7a.43.43 0 0 0 .7.2.55.55 0 0 0 .3-.7zm0-8L7.9 6.5a.54.54 0 0 0-1 .4l1.6 3.7a.43.43 0 0 0 .7.2.55.55 0 0 0 .3-.7zM17 22a.47.47 0 0 0-.5.5v2a.5.5 0 0 0 1 0v-2a.47.47 0 0 0-.5-.5zm0 0a.47.47 0 0 0-.5.5v2a.5.5 0 0 0 1 0v-2a.47.47 0 0 0-.5-.5zM9.5 10.1L7.9 6.5a.54.54 0 0 0-1 .4l1.6 3.7a.43.43 0 0 0 .7.2.55.55 0 0 0 .3-.7zm0 8l-1.6-3.6a.54.54 0 0 0-1 .4l1.6 3.7a.43.43 0 0 0 .7.2.55.55 0 0 0 .3-.7zm-2 .2l-.9-3.9A.49.49 0 0 0 6 14a.55.55 0 0 0-.4.6l.9 3.9a.55.55 0 0 0 .6.4.51.51 0 0 0 .4-.6zm0 0l-.9-3.9A.49.49 0 0 0 6 14a.55.55 0 0 0-.4.6l.9 3.9a.55.55 0 0 0 .6.4.51.51 0 0 0 .4-.6zm2-.2l-1.6-3.6a.54.54 0 0 0-1 .4l1.6 3.7a.43.43 0 0 0 .7.2.55.55 0 0 0 .3-.7zm0-8L7.9 6.5a.54.54 0 0 0-1 .4l1.6 3.7a.43.43 0 0 0 .7.2.55.55 0 0 0 .3-.7zM17 22a.47.47 0 0 0-.5.5v2a.5.5 0 0 0 1 0v-2a.47.47 0 0 0-.5-.5zm0 0a.47.47 0 0 0-.5.5v2a.5.5 0 0 0 1 0v-2a.47.47 0 0 0-.5-.5zM9.5 10.1L7.9 6.5a.54.54 0 0 0-1 .4l1.6 3.7a.43.43 0 0 0 .7.2.55.55 0 0 0 .3-.7zm0 8l-1.6-3.6a.54.54 0 0 0-1 .4l1.6 3.7a.43.43 0 0 0 .7.2.55.55 0 0 0 .3-.7zm-2 .2l-.9-3.9A.49.49 0 0 0 6 14a.55.55 0 0 0-.4.6l.9 3.9a.55.55 0 0 0 .6.4.51.51 0 0 0 .4-.6zM17 22a.47.47 0 0 0-.5.5v2a.5.5 0 0 0 1 0v-2a.47.47 0 0 0-.5-.5zm0 0a.47.47 0 0 0-.5.5v2a.5.5 0 0 0 1 0v-2a.47.47 0 0 0-.5-.5zm0 0a.47.47 0 0 0-.5.5v2a.5.5 0 0 0 1 0v-2a.47.47 0 0 0-.5-.5zm-9.5-3.7l-.9-3.9A.49.49 0 0 0 6 14a.55.55 0 0 0-.4.6l.9 3.9a.55.55 0 0 0 .6.4.51.51 0 0 0 .4-.6zm2-.2l-1.6-3.6a.54.54 0 0 0-1 .4l1.6 3.7a.43.43 0 0 0 .7.2.55.55 0 0 0 .3-.7zm0-8L7.9 6.5a.54.54 0 0 0-1 .4l1.6 3.7a.43.43 0 0 0 .7.2.55.55 0 0 0 .3-.7z"></path><path d="M24.5 3h-19a1 1 0 0 0-1 1v23a1 1 0 0 0 1 1h1v1.5a.5.5 0 0 0 1 0V28h15v1.5a.5.5 0 0 0 1 0V28h1a1 1 0 0 0 1-1V4a1.08 1.08 0 0 0-1-1zm-10 24h-9v-7h9v7zm0-8h-9v-7h9v7zm0-8h-9V4h9v7zm10 16h-9v-7h9v7zm0-8h-9v-7h9v7zm0-8h-9V4h9v7z"></path><path d="M7.2 10.9a.47.47 0 0 1-.6-.4l-.9-3.9a.47.47 0 0 1 .4-.6.47.47 0 0 1 .6.4l.9 3.9a.82.82 0 0 1-.4.6zM24.3 7l-1.6 3.7a.43.43 0 0 1-.7.2.55.55 0 0 1-.3-.7l1.6-3.7a.43.43 0 0 1 .7-.2.52.52 0 0 1 .3.7z"></path><path d="M22.9 7.5l-2.4 3.2a.5.5 0 1 1-.8-.6l2.4-3.2a.49.49 0 0 1 .7-.1.56.56 0 0 1 .1.7zM24.2 14.8l-1.6 3.7a.36.36 0 0 1-.6.2.61.61 0 0 1-.3-.7l1.6-3.7a.52.52 0 0 1 .7-.3.88.88 0 0 1 .2.8zM22.2 14.7l-.9 3.9a.51.51 0 0 1-1-.2l.9-3.9a.55.55 0 0 1 .6-.4.49.49 0 0 1 .4.6zM11.4 18.7a.49.49 0 0 1-.7-.1l-2.2-3.3a.62.62 0 0 1 .1-.7.49.49 0 0 1 .7.1l2.2 3.3a.47.47 0 0 1-.1.7zM13.5 22.5v2a.5.5 0 0 1-1 0v-2a.5.5 0 0 1 1 0z"></path></svg>
                                                <span class="no-padding category-name">Bookshelves</span>
                                            </a>
                                        </div>
                                        <div class="product-wrapper">
                                            <a class="category" href="/shoe-rack?src=explore_categories"><svg data-name="Layer 1" viewBox="0 0 30 30" class="category-icon"><title>UL_CATEGORY_ICONS</title><path d="M28.5 17h-27a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h1v1.5a.47.47 0 0 0 .5.5h2a.47.47 0 0 0 .5-.5V28h19v1.5a.47.47 0 0 0 .5.5h2a.47.47 0 0 0 .5-.5V28h1a1 1 0 0 0 1-1v-9a1.08 1.08 0 0 0-1-1zm-24 12h-1v-1h1v1zm10-2h-13v-9h13v9zm12 2h-1v-1h1v1zm2-2h-13v-9h13v9z"></path><path d="M17.5 21.5v2a.5.5 0 0 1-1 0v-2a.5.5 0 0 1 1 0zM13.5 21.5v2a.5.5 0 0 1-1 0v-2a.5.5 0 0 1 1 0z"></path></svg>
                                                <span class="no-padding category-name">Shoe Racks</span>
                                            </a>
                                        </div>
                                        <div class="product-wrapper">
                                            <a class="category" href="https://www.urbanladder.com/home-decor?src=explore_categories"><svg data-name="Layer 1" viewBox="0 0 30 30" class="category-icon"><title>UL_CATEGORY_ICONS</title><path d="M20.88 10l-2-7.6a.63.63 0 0 0-.6-.5h-6.6a.56.56 0 0 0-.6.5l-2 7.6a.78.78 0 0 0 .7 1h4.7v18H13a.5.5 0 0 0 0 1h4a.5.5 0 1 0 0-1h-1.5V11h2v4.1a1.5 1.5 0 0 0-1 1.4 1.5 1.5 0 0 0 3 0 1.41 1.41 0 0 0-1-1.4V11h1.7a.68.68 0 0 0 .68-1zm-2.2 6.5a.7.7 0 1 1-.7-.7.68.68 0 0 1 .7.7zm-8.6-6.5L12 3h6.1l1.9 7h-9.9z"></path></svg>
                                                <span class="no-padding category-name">Decor</span>
                                            </a>
                                        </div>
                                        <div class="product-wrapper">
                                            <a class="category" href="https://www.urbanladder.com/exchange-your-old-furniture?src=explore_categories"><svg id="Layer_1" data-name="Layer 1" viewBox="0 0 30 30" class="category-icon"><title>icons</title><path d="M15,27.5A12.5,12.5,0,1,1,27.5,15,12.51,12.51,0,0,1,15,27.5Zm0-24A11.5,11.5,0,1,0,26.5,15,11.51,11.51,0,0,0,15,3.5Zm1.28,20.83L8.35,22.87,11,15.27,12.61,18l6.11-3.54,2.1,3.64-6.11,3.53ZM9.68,22l4.65,0.86-1-1.7,6.11-3.53-1.1-1.91-6.11,3.53-1-1.7Zm1-6.6L8.61,11.8l6.11-3.54-1.56-2.7L21.09,7l-2.7,7.6-1.56-2.7ZM10,12.17l1.09,1.9,6.12-3.53,1,1.7,1.58-4.45-4.65-.85,1,1.7Z"></path></svg>
                                                <span class="no-padding category-name">Furniture Exchange</span>
                                            </a>
                                        </div>
                                        <div class="product-wrapper">
                                            <a class="category" href="https://www.urbanladder.com/interior-design-consultation?src=explore-categories&amp;src=explore_categories"><svg id="Layer_1" data-name="Layer 1" viewBox="0 0 30 30" class="category-icon"><title>UL_CATEGORY_ICONS_Interiors</title><path d="M15.5,19.4H15v-1a4,4,0,0,0-4-4H7a4,4,0,0,0-4,4v1H2.5A2.48,2.48,0,0,0,0,21.9v4a2.48,2.48,0,0,0,2.5,2.5H2.7v1.1a0.47,0.47,0,0,0,.5.5H5a0.47,0.47,0,0,0,.5-0.5V28.4h7.2v1.1a0.47,0.47,0,0,0,.5.5H15a0.47,0.47,0,0,0,.5-0.5V28.4h0.1a2.48,2.48,0,0,0,2.5-2.5v-4A2.63,2.63,0,0,0,15.5,19.4ZM4,18.4a3,3,0,0,1,3-3h4a3,3,0,0,1,3,3v1.5a2.61,2.61,0,0,0-1,2v1.5H5V21.9a2.61,2.61,0,0,0-1-2V18.4ZM4.4,29H3.6V28.4H4.4V29Zm10,0H13.6V28.4h0.8V29ZM17,25.9a1.54,1.54,0,0,1-1.5,1.5H2.5A1.54,1.54,0,0,1,1,25.9v-4a1.54,1.54,0,0,1,1.5-1.5A1.54,1.54,0,0,1,4,21.9v2a0.47,0.47,0,0,0,.5.5h9a0.47,0.47,0,0,0,.5-0.5v-2a1.5,1.5,0,0,1,3,0v4Z" transform="translate(0 0)"></path><path d="M30,2a1,1,0,0,0-1-1H20a1,1,0,0,0-1,1V29a1,1,0,0,0,1,1h9a1,1,0,0,0,1-1V2ZM29,29H20V8h9V29ZM29,7H20V2h9V7Z" transform="translate(0 0)"></path><path d="M22,15.5v2a0.5,0.5,0,0,1-1,0v-2A0.5,0.5,0,0,1,22,15.5Z" transform="translate(0 0)"></path><path d="M22,3.5v1a0.5,0.5,0,0,1-1,0v-1A0.5,0.5,0,0,1,22,3.5Z" transform="translate(0 0)"></path><path d="M5.62,9H8.22a0.38,0.38,0,0,0,.39-0.55L7.5,4.28A0.35,0.35,0,0,0,7.17,4H5.85V0h-1l0,4H3.51a0.31,0.31,0,0,0-.33.28L2.07,8.49A0.43,0.43,0,0,0,2.46,9H5.62ZM3.08,8.15L3.93,4.88H6.78L7.63,8.15H3.08Z" transform="translate(0 0)"></path></svg>
                                                <span class="no-padding category-name">Interior Design</span>
                                            </a>
                                        </div>

                                    </div>

                                    <script>
                                        jQuery(document).ready(function($) {

                                            jQuery(".product-list-1489575850334").length && jQuery('.product-list-1489575850334').owlCarousel({
                                                nav: true,
                                                dots: false,
                                                items: 6,
                                                margin: 30,
                                                responsive: {
                                                    0: {
                                                        items: 1
                                                    },
                                                    320: {
                                                        items: 2
                                                    },
                                                    768: {
                                                        items: 4
                                                    },
                                                    992: {
                                                        items: 5
                                                    },
                                                    1200: {
                                                        items: 6
                                                    }
                                                },
                                                navText: ['<span class="button-prev"></span>', '<span class="button-next"></span>']
                                            });

                                        });
                                    </script>

                                    <script>
                                        jQuery(document).ready(function($) {

                                            jQuery(".product-list-14895758503340").length && jQuery('.product-list-14895758503340').owlCarousel({

                                                items: 8,
                                                loop:true,
                                                margin:10,
                                                autoplay:true,
                                                autoplayTimeout:2500,
                                                autoplayHoverPause:false,
                                                responsive: {
                                                    0: {
                                                        items: 1
                                                    },
                                                    320: {
                                                        items: 2
                                                    },
                                                    768: {
                                                        items: 4
                                                    },
                                                    992: {
                                                        items: 6
                                                    },
                                                    1200: {
                                                        items: 8
                                                    }
                                                },
                                                navText: ['<span class="button-prev"></span>', '<span class="button-next"></span>']
                                            });

                                        });
                                    </script>

                                </div>
                            </div>

                        </div>
                        <div id="shopify-section-1489629569771" class="shopify-section">
                            <div class="home-service-bar">
                                <div class="container">
                                    <div class="service-bar">
                                        <div class="service-list-item">

                                            <div class="service-item">
                                                <div class="service-img"><img src="/images/bs-1_45x.png" alt="" /></div>

                                                <div class="text" style="color: #1b8bcc;">
                                                    <div class="title">Быстрая доставка </div>
                                                    <div class="caption">Lorem ipsum dolor sit , consectetuer adipiscing elit. </div>
                                                </div>

                                            </div>

                                            <div class="service-item">
                                                <div class="service-img"><img src="/images/bs-2_45x.png" alt="" /></div>

                                                <div class="text" style="color: #1b8bcc;">
                                                    <div class="title">Платите легко </div>
                                                    <div class="caption">Lorem ipsum dolor sit , consectetuer adipiscing elit. </div>
                                                </div>

                                            </div>

                                            <div class="service-item">
                                                <div class="service-img"><img src="/images/bs-3_45x.png" alt="" /></div>

                                                <div class="text" style="color: #1b8bcc;">
                                                    <div class="title">Лучшее предложение </div>
                                                    <div class="caption">Lorem ipsum dolor sit , consectetuer adipiscing elit. </div>
                                                </div>

                                            </div>

                                            <div class="service-item">
                                                <div class="service-img"><img src="/images/bs-4_45x.png" alt="" /></div>

                                                <div class="text" style="color: #1b8bcc;">
                                                    <div class="title">Безопасная оплата </div>
                                                    <div class="caption">Lorem ipsum dolor sit , consectetuer adipiscing elit. </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div id="shopify-section-1494823139087" class="shopify-section">
                            <div class="section-separator section-separator-1494823139087">
                                <div class="separator separator-1494823139087">
                                    <div class="spacing" style="margin-bottom: 75px">
                                        <style type="text/css">
                                            @media (max-width: 767px) {
                                                .spacing {
                                                    margin-bottom: 40px !important;
                                                }
                                            }
                                        </style>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <!--ICONS-->
                        <div class="container">
                            <div class="row">
                                <div class="b-box">
                                    <div>
                                        <ul class="list tiles">

                                            <li class="tile">
                                                <a href="/find-a-pro/c/architect-consultant/" title="Architect / Consultant">
                                                    <div class="icon">
                                                        <svg data-name="Layer 1" viewBox="0 0 30 30" class="category-icon"><title>UL_CATEGORY_ICONS</title><path d="M25.5 2a1 1 0 0 0-1-1h-19a1 1 0 0 0-1 1v27a1 1 0 0 0 1 1h19a1 1 0 0 0 1-1V2zm-11 27h-9V8h9v21zm0-22h-9V2h9v5zm10 22h-9V8h9v21zm0-22h-9V2h9v5z"></path><path d="M17.5 16.5v2a.5.5 0 0 1-1 0v-2a.5.5 0 0 1 1 0zM13.5 16.5v2a.5.5 0 0 1-1 0v-2a.5.5 0 0 1 1 0zM17.5 4.5v1a.5.5 0 0 1-1 0v-1a.5.5 0 1 1 1 0zM13.5 4.5v1a.5.5 0 0 1-1 0v-1a.5.5 0 1 1 1 0z"></path></svg>
                                                    </div>
                                                    <span class="">Builder</span>
                                                </a>
                                            </li>

                                            <li class="tile">
                                                <a href="/find-a-pro/c/builder/" title="Builder">
                                                    <div class="icon">
                                                        <svg data-name="Layer 1" viewBox="0 0 30 30" class="category-icon"><title>UL_CATEGORY_ICONS</title><path d="M24.73 23.1h-2.2v-1.6a1.5 1.5 0 0 0-1.6-1.5h-8.3l-4-5.9a3.8 3.8 0 0 0-5.2-1 .76.76 0 0 0-.2.4.37.37 0 0 0 .1.3l6.9 10.1V27a1.52 1.52 0 0 0 1.4 1.5v1a.47.47 0 0 0 .5.5h1.5a.47.47 0 0 0 .5-.5v-1h4.2v1a.47.47 0 0 0 .5.5h1.5a.47.47 0 0 0 .5-.5v-1h.1a1.51 1.51 0 0 0 1.5-1.3h3.7a.65.65 0 0 0 .6-.6v-1.5a1.91 1.91 0 0 0-2-2zM11 20.2a1.43 1.43 0 0 0-.7 1v1.11l-6-8.71a3.09 3.09 0 0 1 3.6 1l3.7 5.4a2 2 0 0 0-.6.2zm2.2 8.8h-.6v-.5h.64v.5zm6.7 0h-.59v-.5h.62v.5zm1.6-1.8a.55.55 0 0 1-.5.3h-9.2a.65.65 0 0 1-.6-.6v-4h10.3V27m.1-5H11.34v-.5a.51.51 0 0 1 .6-.5h9.2a.56.56 0 0 1 .6.5v.5h-.1zm4.3 4.2h-3.41V24h2.35a1.11 1.11 0 0 1 1.1 1.1v1.1z"></path></svg>
                                                    </div>
                                                    <span class="">Builder</span>
                                                </a>
                                            </li>

                                            <li class="tile">
                                                <a href="/find-a-pro/c/carpenter-joiner/" title="Carpenter / Joiner">
                                                    <div class="icon">
                                                        <svg id="Layer_1" data-name="Layer 1" viewBox="0 0 30 30" class="category-icon"><title>UL_CATEGORY_ICONS_Interiors</title><path d="M15.5,19.4H15v-1a4,4,0,0,0-4-4H7a4,4,0,0,0-4,4v1H2.5A2.48,2.48,0,0,0,0,21.9v4a2.48,2.48,0,0,0,2.5,2.5H2.7v1.1a0.47,0.47,0,0,0,.5.5H5a0.47,0.47,0,0,0,.5-0.5V28.4h7.2v1.1a0.47,0.47,0,0,0,.5.5H15a0.47,0.47,0,0,0,.5-0.5V28.4h0.1a2.48,2.48,0,0,0,2.5-2.5v-4A2.63,2.63,0,0,0,15.5,19.4ZM4,18.4a3,3,0,0,1,3-3h4a3,3,0,0,1,3,3v1.5a2.61,2.61,0,0,0-1,2v1.5H5V21.9a2.61,2.61,0,0,0-1-2V18.4ZM4.4,29H3.6V28.4H4.4V29Zm10,0H13.6V28.4h0.8V29ZM17,25.9a1.54,1.54,0,0,1-1.5,1.5H2.5A1.54,1.54,0,0,1,1,25.9v-4a1.54,1.54,0,0,1,1.5-1.5A1.54,1.54,0,0,1,4,21.9v2a0.47,0.47,0,0,0,.5.5h9a0.47,0.47,0,0,0,.5-0.5v-2a1.5,1.5,0,0,1,3,0v4Z" transform="translate(0 0)"></path><path d="M30,2a1,1,0,0,0-1-1H20a1,1,0,0,0-1,1V29a1,1,0,0,0,1,1h9a1,1,0,0,0,1-1V2ZM29,29H20V8h9V29ZM29,7H20V2h9V7Z" transform="translate(0 0)"></path><path d="M22,15.5v2a0.5,0.5,0,0,1-1,0v-2A0.5,0.5,0,0,1,22,15.5Z" transform="translate(0 0)"></path><path d="M22,3.5v1a0.5,0.5,0,0,1-1,0v-1A0.5,0.5,0,0,1,22,3.5Z" transform="translate(0 0)"></path><path d="M5.62,9H8.22a0.38,0.38,0,0,0,.39-0.55L7.5,4.28A0.35,0.35,0,0,0,7.17,4H5.85V0h-1l0,4H3.51a0.31,0.31,0,0,0-.33.28L2.07,8.49A0.43,0.43,0,0,0,2.46,9H5.62ZM3.08,8.15L3.93,4.88H6.78L7.63,8.15H3.08Z" transform="translate(0 0)"></path></svg>
                                                    </div>
                                                    <span class="">Carpenter</span>
                                                </a>
                                            </li>

                                            <li class="tile">
                                                <a href="/find-a-pro/c/conveyancer/" title="Conveyancer">
                                                    <div class="icon">
                                                        <svg data-name="Layer 1" viewBox="0 0 30 30" class="category-icon"><title>UL_CATEGORY_ICONS</title><path d="M20.3 22.5a.52.52 0 0 0 .2-.4v-.3a2.75 2.75 0 0 0-1.2-2.2v-7.1a1.32 1.32 0 0 0-1.3-1.3h-6.2a1.26 1.26 0 0 0-1.3 1.3v7.1a2.51 2.51 0 0 0-1.2 2.2v.3a.52.52 0 0 0 .2.4l-.8 7.1a.35.35 0 0 0 .4.4h.8a.66.66 0 0 0 .5-.4l1.7-7.1h5.8l1.7 7.1a.54.54 0 0 0 .5.4h.8a.35.35 0 0 0 .4-.4zm-.12 6.7l-1.49-6.7h.9l.94 6.7h-.35zm-9-16.7a.47.47 0 0 1 .5-.5h6.2a.47.47 0 0 1 .5.5v6.8a1.31 1.31 0 0 0-.5-.1H11.7a.9.9 0 0 0-.5.1v-6.8zM9.75 29.2H9.5l.89-6.7h.9zm.15-7.5a1.77 1.77 0 0 1 1.8-1.7h6.2a1.84 1.84 0 0 1 1.8 1.7H9.9z"></path></svg>
                                                    </div>
                                                    <span class="">Conveyancer</span>
                                                </a>
                                            </li>

                                            <li class="tile">
                                                <a href="/find-a-pro/c/electrician/" title="Electrician">
                                                    <div class="icon">
                                                        <svg data-name="Layer 1" viewBox="0 0 30 30" class="category-icon"><title>UL_CATEGORY_ICONS</title><path d="M16 25h-2a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 0h-2a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 0h-2a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 0h-2a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 0h-2a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 0h-2a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 0h-2a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm8.5-19h-19a1 1 0 0 0-1 1v20a1 1 0 0 0 1 1h1v1.5a.47.47 0 0 0 .5.5h2a.47.47 0 0 0 .5-.5V28h11v1.5a.47.47 0 0 0 .5.5h2a.47.47 0 0 0 .5-.5V28h1a1 1 0 0 0 1-1V7a1.08 1.08 0 0 0-1-1zm-16 23h-1v-1h1v1zm14 0h-1v-1h1v1zm2-2h-19v-8h19v8zm0-9h-19v-5h19v5zm0-6h-19V7h19v5zM14 26h2a.5.5 0 0 0 0-1h-2a.5.5 0 0 0 0 1zm2-1h-2a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 0h-2a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 0h-2a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 0h-2a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 0h-2a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1z"></path><path d="M16.5 10.5a.47.47 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.47.47 0 0 1 .5.5zM16.5 16.5a.47.47 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.47.47 0 0 1 .5.5z"></path></svg>
                                                    </div>
                                                    <span class="">Electrician</span>
                                                </a>
                                            </li>

                                            <li class="tile">
                                                <a href="/find-a-pro/c/gardener-landscaper/" title="Gardener / Landscaper">
                                                    <div class="icon">
                                                        <svg data-name="Layer 1" viewBox="0 0 30 30" class="category-icon"><title>UL_CATEGORY_ICONS</title><path d="M20.88 10l-2-7.6a.63.63 0 0 0-.6-.5h-6.6a.56.56 0 0 0-.6.5l-2 7.6a.78.78 0 0 0 .7 1h4.7v18H13a.5.5 0 0 0 0 1h4a.5.5 0 1 0 0-1h-1.5V11h2v4.1a1.5 1.5 0 0 0-1 1.4 1.5 1.5 0 0 0 3 0 1.41 1.41 0 0 0-1-1.4V11h1.7a.68.68 0 0 0 .68-1zm-2.2 6.5a.7.7 0 1 1-.7-.7.68.68 0 0 1 .7.7zm-8.6-6.5L12 3h6.1l1.9 7h-9.9z"></path></svg>
                                                    </div>
                                                    <span class="">Gardener</span>
                                                </a>
                                            </li>

                                            <li class="tile">
                                                <a href="/find-a-pro/c/heating-boiler-engineer/" title="Heating / Boiler Engineer">
                                                    <div class="icon">
                                                        <svg data-name="Layer 1" viewBox="0 0 30 30" class="category-icon"><title>UL_CATEGORY_ICONS</title><path d="M28.5 17h-13v-1H24a.47.47 0 0 0 .5-.5v-9A.47.47 0 0 0 24 6H6a.47.47 0 0 0-.5.5v9a.47.47 0 0 0 .5.5h8.5v1h-13a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h1v1.5a.47.47 0 0 0 .5.5h2a.47.47 0 0 0 .5-.5V28h19v1.5a.47.47 0 0 0 .5.5h2a.47.47 0 0 0 .5-.5V28h1a1 1 0 0 0 1-1v-9a1.08 1.08 0 0 0-1-1zm-24 12h-1v-1h1v1zm10-2h-13v-9h13v9zm-8-12V7h17v8h-17zm20 14h-1v-1h1v1zm2-2h-13v-9h13v9z"></path><path d="M17.5 21.5v2a.5.5 0 0 1-1 0v-2a.5.5 0 0 1 1 0zM13.5 21.5v2a.5.5 0 0 1-1 0v-2a.5.5 0 0 1 1 0z"></path></svg>
                                                    </div>
                                                    <span class="">Heating</span>
                                                </a>
                                            </li>

                                            <li class="tile">
                                                <a href="/find-a-pro/c/locksmith/" title="Locksmith">
                                                    <div class="icon">
                                                        <svg data-name="Layer 1" viewBox="0 0 30 30" class="category-icon"><title>UL_CATEGORY_ICONS</title><path d="M25.5 2a1 1 0 0 0-1-1h-19a1 1 0 0 0-1 1v27a1 1 0 0 0 1 1h19a1 1 0 0 0 1-1V2zm-11 27h-9V8h9v21zm0-22h-9V2h9v5zm10 22h-9V8h9v21zm0-22h-9V2h9v5z"></path><path d="M17.5 16.5v2a.5.5 0 0 1-1 0v-2a.5.5 0 0 1 1 0zM13.5 16.5v2a.5.5 0 0 1-1 0v-2a.5.5 0 0 1 1 0zM17.5 4.5v1a.5.5 0 0 1-1 0v-1a.5.5 0 1 1 1 0zM13.5 4.5v1a.5.5 0 0 1-1 0v-1a.5.5 0 1 1 1 0z"></path></svg>
                                                    </div>
                                                    <span class="">Locksmith</span>
                                                </a>
                                            </li>

                                            <li class="tile">
                                                <a href="/find-a-pro/c/painter/" title="Painter">
                                                    <div class="icon">
                                                        <svg data-name="Layer 1" viewBox="0 0 30 30" class="category-icon"><title>UL_CATEGORY_ICONS</title><path d="M29 12H1a.47.47 0 0 0-.5.5v2a.47.47 0 0 0 .5.5h1.5v14.5a.47.47 0 0 0 .5.5.47.47 0 0 0 .5-.5V19h11v8h12v2.5a.5.5 0 0 0 1 0V15H29a.47.47 0 0 0 .5-.5v-2a.47.47 0 0 0-.5-.5zm-2.5 14h-11v-7h11v7zm0-8h-23v-3h23v3zm2-4h-27v-1h27v1z"></path><path d="M16.5 16.5a.47.47 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.47.47 0 0 1 .5.5zM22.5 22.5a.47.47 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.47.47 0 0 1 .5.5z"></path></svg>
                                                    </div>
                                                    <span class="">Painter</span>
                                                </a>
                                            </li>

                                            <li class="tile">
                                                <a href="/find-a-pro/c/plumber/" title="Plumber">
                                                    <div class="icon">
                                                        <svg id="Layer_1" data-name="Layer 1" viewBox="0 0 30 30" class="category-icon"><title>icons</title><path d="M15,27.5A12.5,12.5,0,1,1,27.5,15,12.51,12.51,0,0,1,15,27.5Zm0-24A11.5,11.5,0,1,0,26.5,15,11.51,11.51,0,0,0,15,3.5Zm1.28,20.83L8.35,22.87,11,15.27,12.61,18l6.11-3.54,2.1,3.64-6.11,3.53ZM9.68,22l4.65,0.86-1-1.7,6.11-3.53-1.1-1.91-6.11,3.53-1-1.7Zm1-6.6L8.61,11.8l6.11-3.54-1.56-2.7L21.09,7l-2.7,7.6-1.56-2.7ZM10,12.17l1.09,1.9,6.12-3.53,1,1.7,1.58-4.45-4.65-.85,1,1.7Z"></path></svg>
                                                    </div>
                                                    <span class="">Plumber</span>
                                                </a>
                                            </li>

                                            <li class="tile">
                                                <a href="/find-a-pro/c/structural-engineer/" title="Structural Engineer">
                                                    <div class="icon">
                                                        <svg data-name="Layer 1" viewBox="0 0 30 30" class="category-icon"><title>UL_CATEGORY_ICONS</title><path d="M30 10.5v19a.5.5 0 0 1-1 0V21h-3v-1h3v-9.5a.5.5 0 0 1 1 0zM4 20v1H1v8.5a.47.47 0 0 1-.5.5.47.47 0 0 1-.5-.5v-19a.47.47 0 0 1 .5-.5.47.47 0 0 1 .5.5V20h3z"></path><path d="M26.5 15h-23a.47.47 0 0 0-.5.5v2a.47.47 0 0 0 .5.5H5v11.5a.47.47 0 0 0 .5.5.47.47 0 0 0 .5-.5V21h1v8.5a.5.5 0 0 0 1 0V20H6v-2h18v2h-2v9.5a.5.5 0 0 0 1 0V21h1v8.5a.5.5 0 0 0 1 0V18h1.5a.47.47 0 0 0 .5-.5v-2a.47.47 0 0 0-.5-.5zm-.5 2H4v-1h22v1z"></path></svg>
                                                    </div>
                                                    <span class="">Structural</span>
                                                </a>
                                            </li>

                                            <li class="tile">
                                                <a href="/find-a-pro/c/surveyor/" title="Surveyor">
                                                    <div class="icon">
                                                        <svg data-name="Layer 1" viewBox="0 0 30 30" class="category-icon"><title>UL_CATEGORY_ICONS</title><path d="M20.3 22.5a.52.52 0 0 0 .2-.4v-.3a2.75 2.75 0 0 0-1.2-2.2v-7.1a1.32 1.32 0 0 0-1.3-1.3h-6.2a1.26 1.26 0 0 0-1.3 1.3v7.1a2.51 2.51 0 0 0-1.2 2.2v.3a.52.52 0 0 0 .2.4l-.8 7.1a.35.35 0 0 0 .4.4h.8a.66.66 0 0 0 .5-.4l1.7-7.1h5.8l1.7 7.1a.54.54 0 0 0 .5.4h.8a.35.35 0 0 0 .4-.4zm-.12 6.7l-1.49-6.7h.9l.94 6.7h-.35zm-9-16.7a.47.47 0 0 1 .5-.5h6.2a.47.47 0 0 1 .5.5v6.8a1.31 1.31 0 0 0-.5-.1H11.7a.9.9 0 0 0-.5.1v-6.8zM9.75 29.2H9.5l.89-6.7h.9zm.15-7.5a1.77 1.77 0 0 1 1.8-1.7h6.2a1.84 1.84 0 0 1 1.8 1.7H9.9z"></path></svg>
                                                    </div>
                                                    <span class="">Surveyor</span>
                                                </a>
                                            </li>

                                            <li class="tile">
                                                <a href="/find-a-pro/c/surveyor/" title="Surveyor">
                                                    <div class="icon">
                                                        <svg data-name="Layer 1" viewBox="0 0 30 30" class="category-icon"><title>UL_CATEGORY_ICONS</title><path d="M20.3 22.5a.52.52 0 0 0 .2-.4v-.3a2.75 2.75 0 0 0-1.2-2.2v-7.1a1.32 1.32 0 0 0-1.3-1.3h-6.2a1.26 1.26 0 0 0-1.3 1.3v7.1a2.51 2.51 0 0 0-1.2 2.2v.3a.52.52 0 0 0 .2.4l-.8 7.1a.35.35 0 0 0 .4.4h.8a.66.66 0 0 0 .5-.4l1.7-7.1h5.8l1.7 7.1a.54.54 0 0 0 .5.4h.8a.35.35 0 0 0 .4-.4zm-.12 6.7l-1.49-6.7h.9l.94 6.7h-.35zm-9-16.7a.47.47 0 0 1 .5-.5h6.2a.47.47 0 0 1 .5.5v6.8a1.31 1.31 0 0 0-.5-.1H11.7a.9.9 0 0 0-.5.1v-6.8zM9.75 29.2H9.5l.89-6.7h.9zm.15-7.5a1.77 1.77 0 0 1 1.8-1.7h6.2a1.84 1.84 0 0 1 1.8 1.7H9.9z"></path></svg>
                                                    </div>
                                                    <span class="">Surveyor</span>
                                                </a>
                                            </li>

                                            <li class="tile">
                                                <a href="/find-a-pro/c/surveyor/" title="Surveyor">
                                                    <div class="icon">
                                                        <svg data-name="Layer 1" viewBox="0 0 30 30" class="category-icon"><title>UL_CATEGORY_ICONS</title><path d="M20.3 22.5a.52.52 0 0 0 .2-.4v-.3a2.75 2.75 0 0 0-1.2-2.2v-7.1a1.32 1.32 0 0 0-1.3-1.3h-6.2a1.26 1.26 0 0 0-1.3 1.3v7.1a2.51 2.51 0 0 0-1.2 2.2v.3a.52.52 0 0 0 .2.4l-.8 7.1a.35.35 0 0 0 .4.4h.8a.66.66 0 0 0 .5-.4l1.7-7.1h5.8l1.7 7.1a.54.54 0 0 0 .5.4h.8a.35.35 0 0 0 .4-.4zm-.12 6.7l-1.49-6.7h.9l.94 6.7h-.35zm-9-16.7a.47.47 0 0 1 .5-.5h6.2a.47.47 0 0 1 .5.5v6.8a1.31 1.31 0 0 0-.5-.1H11.7a.9.9 0 0 0-.5.1v-6.8zM9.75 29.2H9.5l.89-6.7h.9zm.15-7.5a1.77 1.77 0 0 1 1.8-1.7h6.2a1.84 1.84 0 0 1 1.8 1.7H9.9z"></path></svg>
                                                    </div>
                                                    <span class="">Surveyor</span>
                                                </a>
                                            </li>

                                            <li class="tile">
                                                <a href="/find-a-pro/c/surveyor/" title="Surveyor">
                                                    <div class="icon">
                                                        <svg data-name="Layer 1" viewBox="0 0 30 30" class="category-icon"><title>UL_CATEGORY_ICONS</title><path d="M20.3 22.5a.52.52 0 0 0 .2-.4v-.3a2.75 2.75 0 0 0-1.2-2.2v-7.1a1.32 1.32 0 0 0-1.3-1.3h-6.2a1.26 1.26 0 0 0-1.3 1.3v7.1a2.51 2.51 0 0 0-1.2 2.2v.3a.52.52 0 0 0 .2.4l-.8 7.1a.35.35 0 0 0 .4.4h.8a.66.66 0 0 0 .5-.4l1.7-7.1h5.8l1.7 7.1a.54.54 0 0 0 .5.4h.8a.35.35 0 0 0 .4-.4zm-.12 6.7l-1.49-6.7h.9l.94 6.7h-.35zm-9-16.7a.47.47 0 0 1 .5-.5h6.2a.47.47 0 0 1 .5.5v6.8a1.31 1.31 0 0 0-.5-.1H11.7a.9.9 0 0 0-.5.1v-6.8zM9.75 29.2H9.5l.89-6.7h.9zm.15-7.5a1.77 1.77 0 0 1 1.8-1.7h6.2a1.84 1.84 0 0 1 1.8 1.7H9.9z"></path></svg>
                                                    </div>
                                                    <span class="">Surveyor</span>
                                                </a>
                                            </li>

                                            <li class="tile">
                                                <a href="/find-a-pro/c/surveyor/" title="Surveyor">
                                                    <div class="icon">
                                                        <svg data-name="Layer 1" viewBox="0 0 30 30" class="category-icon"><title>UL_CATEGORY_ICONS</title><path d="M20.3 22.5a.52.52 0 0 0 .2-.4v-.3a2.75 2.75 0 0 0-1.2-2.2v-7.1a1.32 1.32 0 0 0-1.3-1.3h-6.2a1.26 1.26 0 0 0-1.3 1.3v7.1a2.51 2.51 0 0 0-1.2 2.2v.3a.52.52 0 0 0 .2.4l-.8 7.1a.35.35 0 0 0 .4.4h.8a.66.66 0 0 0 .5-.4l1.7-7.1h5.8l1.7 7.1a.54.54 0 0 0 .5.4h.8a.35.35 0 0 0 .4-.4zm-.12 6.7l-1.49-6.7h.9l.94 6.7h-.35zm-9-16.7a.47.47 0 0 1 .5-.5h6.2a.47.47 0 0 1 .5.5v6.8a1.31 1.31 0 0 0-.5-.1H11.7a.9.9 0 0 0-.5.1v-6.8zM9.75 29.2H9.5l.89-6.7h.9zm.15-7.5a1.77 1.77 0 0 1 1.8-1.7h6.2a1.84 1.84 0 0 1 1.8 1.7H9.9z"></path></svg>
                                                    </div>
                                                    <span class="">Surveyor</span>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--ICONS END-->
                        <div id="shopify-section" class="shopify-section">

                            <div class="container">
                                <div class="row">

                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div style="margin:100px 0;" class="statistic-img"><img src="/images/Marketing_Banner.jpg" alt="" /></div>

                                        <div class="text" style="color: #1b8bcc;">
                                            <div class="title">138,098 </div>
                                            <div class="caption">Счастливые клиенты </div>
                                        </div>
                                    </div>

                                </div>
                            </div>


                        </div>
                        <div id="shopify-section-14895758503399" class="shopify-section">

                            <div class="home-product style-1 home-carousel">
                                <div class="container">

                                    <div class="title-wrapper">
                                        <h3>Современные мебели </h3>
                                        <a class="view-all" href="collections/arts-photography.html"><span>Посмотреть все </span></a>
                                    </div>
                                    <div class="product-list product-list-14895758503399">
                                        <div class="product-wrapper">
                                            <div class="product-head">
                                                <div class="product-image">
                                                    <div class="featured-img">
                                                        <a href="collections/arts-photography/products/black-fashion-zapda-shoes.html">
                                                            <img class="featured-image front" src="/images/01_270x_2015.jpg" alt="Digital Download Product Example" />
                                                            <span class="product-label">
         <span class="label-new">
           <span class="new-text">Новые </span>
                                                                </span>
                                                                </span>
                                                        </a>
                                                    </div>

                                                    <div class="product-button">
                                                        <div class="product-wishlist">
                                                            <a class="btn btn-default add-to-wishlist add-product-wishlist" data-handle-product="black-fashion-zapda-shoes" href="javascript:void(0);" title="Add to wishlist"><i class="fa fa-heart"></i></a>
                                                        </div>

                                                        <div data-handle="black-fashion-zapda-shoes" data-target="#quick-shop-popup" class="quick_shop quick-shop-button hidden-sm hidden-xs" data-toggle="modal" title="Quick View">
                                                            <span class="quick-view-icon"></span>
                                                            <span class="json hide">{"id":8999716097,"title":"Digital Download Product Example","handle":"black-fashion-zapda-shoes","description":"\u003ch5\u003eDescription\u003c\/h5\u003e\n\u003cp\u003e\u003cspan\u003eOur\u003c\/span\u003e\u003cb\u003eHPB12 \/ A12\u003c\/b\u003e\u003cb\u003e battery\u003c\/b\u003e\u003cspan\u003e  rated at 2000mAh andto power up BlackDecker \/ FireStorm line  12V tools allowing users  run multiple devices offsame battery pack. The12 is compatible with the  Black and Decker power  models\u003c\/span\u003e\u003c\/p\u003e\n\u003ch5\u003e\u003cspan\u003eSpecifications\u003c\/span\u003e\u003c\/h5\u003e\n\u003cul\u003e\n\u003cli\u003eChemistry: Ni-CD\u003c\/li\u003e\n\u003cli\u003eVoltage: 12V\u003c\/li\u003e\n\u003cli\u003eAmpHours: 2000mAh\u003c\/li\u003e\n\u003cli\u003eDimensions: 109.75_79.55_62.20\_003_\/\_003_\_\_003_\/\_003_\_\_0035\_003\_003_\/_5\_003_\_\_003\_003_\_003 src=\"\/\/www.youtube.com\/embed\/QZd7015XaTQ\" height=\"315\" width=\"560\"\u003e \u003c\/iframe\u003e\u003c\/p\u003e","published_at":"2017-03-13T03:48:00-04:00","created_at":"2017-03-13T03:48:44-04:00","vendor":"Armani","type":"Classic","tags":["Brand_Accesi","Color_Black","Color_Gold","label"," $300"],"price":0,"price_min":0,"price_max":0,"available":true,"price_varies":false,"compare_at_price":null,"compare_at_price_min":0,"compare_at_price_max":0,"compare_at_price_varies":false,"variants":[{"id":31822300353,"title":"Default Title","option1":"Default Title","option2":null,"option3":null,"sku":"georgeous-black-zapda-8xz1","requires_shipping":false,"taxable":false,"featured_image":null,"available":true,"name":"Digital Download  Example","public_title":null,"options":["Default Title"],"price":0,"weight":0,"compare_at_price":null,"inventory_quantity":-52,"inventory_management":null,"inventory_policy":"deny","barcode":"9789797807214"}],"images":["\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/01.jpg?v=1494839968"],"featured_image":"\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/01.jpg?v=1494839968","options":["Title"],"content":"\u003ch5\u003eDescription\u003c\/h5\u003e\n\u003cp\u003e\u003cspan\u003eOur new \u003c\/span\u003e\u003cb\u003eHPB12 \/ A12\u003c\/b\u003e\u003cb\u003e battery\u003c\/b\u003e\u003cspan\u003e is rated  2000mAh and designed toup Black and Decker \/ FireStorm line of 12Vallowing users to rundevices off the same  pack. The HPB12 iswith the following BlackDecker power tool models\u003c\/span\u003e\u003c\/p\u003e\n\u003ch5\u003e\u003cspan\u003eSpecifications\u003c\/span\u003e\u003c\/h5\u003e\n\u003cul\u003e\n\u003cli\u003eChemistry: -\_003_\/\_003_\_\_003_\_003_: 12V\u003c\/li\u003e\n\u003cli\u003eAmpHours: 2000mAh\u003c\/li\u003e\n\u003cli\u003eDimensions: 109.75x79.55x62.20mm\u003c\/li\u003e\n\u003c\/ul\u003e\n\u003ch5\u003eVideo\u003c\/h5\u003e\n\u003cp\u003e\u003ciframe src=\"\/\/www.youtube.com\/embed\/QZd7015XaTQ\" =\"315\" width=\"560\"\u003e \u003c\/iframe\u003e\u003c\/p\u003e"} </span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product-content">
                                                <div class="pc-inner">

                                                    <h3 class="noti-title" style="display: none;">Вам также может понравиться: </h3>
                                                    <h5 class="product-name">
                                                        <a href="collections/arts-photography/products/black-fashion-zapda-shoes.html">Пример цифрового продукта </a>
                                                    </h5>
                                                    <div class="product-price">
                                                            <span class="price">
                 <span class="money">900.00 р. </span>
                                                            </span>
                                                    </div>

                                                    <div class="product-review">
                                                        <span class="shopify-product-reviews-badge" data-id="8999716097"></span>
                                                    </div>

                                                    <div class="product-description only-list">
                                                        Descriptionnew HPB12 / A12  is rated at 2000mAhdesigned to power upand Decker /...
                                                    </div>

                                                    <div class="add-cart-button">
                                                        <form action="/cart/add" method="post" enctype="multipart/form-data">
                                                            <a href="collections/arts-photography/products/black-fashion-zapda-shoes.html" class="btn-default add-to-cart" title="Добавить в корзину"><i class="fa fa-shopping-cart"></i>Добавить в корзину </a>
                                                            <select class="hide" name="id">
                                                                <option value="31822300353" />Заголовок по умолчанию
                                                            </select>
                                                        </form>

                                                    </div>

                                                </div>
                                            </div>

                                        </div>

                                        <div class="product-wrapper">

                                            <div class="product-head">
                                                <div class="product-image">
                                                    <div class="featured-img">
                                                        <a href="collections/arts-photography/products/consectetur-nibh-eget.html">
                                                            <img class="featured-image front" src="/images/04_270x.jpg" alt="Digital Download Product with License Key" />
                                                            <span class="product-label">
         <span class="label-bp">
           <span class="bp-text">Лучшая цена </span>
                                                                </span>
                                                                </span>
                                                        </a>
                                                    </div>

                                                    <div class="product-button">
                                                        <div class="product-wishlist">
                                                            <a class="btn btn-default add-to-wishlist add-product-wishlist" data-handle-product="consectetur-nibh-eget" href="javascript:void(0);" title="Add to wishlist"><i class="fa fa-heart"></i></a>
                                                        </div>

                                                        <div data-handle="consectetur-nibh-eget" data-target="#quick-shop-popup" class="quick_shop quick-shop-button hidden-sm hidden-xs" data-toggle="modal" title="Quick View">
                                                            <span class="quick-view-icon"></span>
                                                            <span class="json hide">{"id":8999716801,"title":"Digital Download Product with  Key","handle":"consectetur-nibh-eget","description":"\u003ch5\u003eDescription\u003c\/h5\u003e\n\u003cp\u003e\u003cspan\u003eOur new \u003c\/span\u003e\u003cb\u003eHPB12 \/12\_003_\/_\_003_\_003\_003_ battery\u003c\/b\u003e\u003cspan\u003e is rated at 2000_ and designed to power  Black and Decker \/  line of 12V toolsusers to run multiple  off the same battery . The HPB12 is compatible  the following Black and  power tool models\u003c\/span\u003e\u003c\/p\u003e\n\u003ch5\u003e\u003cspan\u003eSpecifications\u003c\/span\u003e\u003c\/h5\u003e\n\u003cul\u003e\n\u003cli\u003eChemistry: Ni-CD\u003c\/li\u003e\n\u003cli\u003eVoltage: 12_\_003_\/\_003_\_\_003_\_003: 2000mAh\u003c\/li\u003e\n\u003cli\u003eDimensions: 109.75x79.55x62.20mm\u003c\/li\u003e\n\u003c\/ul\u003e\n\u003ch5\u003eVideo\u003c\/h5\u003e\n\u003cp\u003e\u003ciframe src=\"\/\/www.youtube.com\/embed\/QZd7015XaTQ\" height=\"315\"=\"560\"\_003_ \u003c\/iframe\u003e\u003c\/p\u003e","published_at":"2017-03-13T03:48:00-04:00","created_at":"2017-03-13T03:48:54-04:00","vendor":"Givenchy","type":"Classic","tags":["Brand_Accesi","Color_Black","label best price","Price_Above $300","Size_L"],"price":0,"price_min":0,"price_max":0,"available":false,"price_varies":false,"compare_at_price":null,"compare_at_price_min":0,"compare_at_price_max":0,"compare_at_price_varies":false,"variants":[{"id":31822304449,"title":"Default","1":" Title","option2":null,"option3":null,"sku":"93Z01","requires_shipping":false,"taxable":true,"featured_image":null,"available":false,"name":"Digital Download Product with  Key","public_title":null,"options":["Default Title"],"price":0,"weight":0,"compare_at_price":null,"inventory_quantity":0,"inventory_management":"shopify","inventory_policy":"deny","barcode":""}],"images":["\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/04.jpg?v=1494840081"],"featured_image":"\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/04.jpg?v=1494840081","options":["Title"],"content":"\u003ch5\u003eDescription\u003c\/h5\u003e\n\u003cp\u003e\u003cspan\u003eOur new \u003c\/span\u003e\u003cb\u003eHPB12 \/ A12\u003c\/b\u003e\u003cb\u003e battery\u003c\/b\u003e\u003cspan\u003e is rated  2000mAh and designed toup Black and Decker \/ FireStorm line of 12Vallowing users to rundevices off the same  pack. The HPB12 iswith the following BlackDecker power tool models\u003c\/span\u003e\u003c\/p\u003e\n\u003ch5\u003e\u003cspan\u003eSpecifications\u003c\/span\u003e\u003c\/h5\u003e\n\u003cul\u003e\n\u003cli\u003eChemistry: -\_003_\/\_003_\_\_003_\_003_: 12V\u003c\/li\u003e\n\u003cli\u003eAmpHours: 2000mAh\u003c\/li\u003e\n\u003cli\u003eDimensions: 109.75x79.55x62.20mm\u003c\/li\u003e\n\u003c\/ul\u003e\n\u003ch5\u003eVideo\u003c\/h5\u003e\n\u003cp\u003e\u003ciframe src=\"\/\/www.youtube.com\/embed\/QZd7015XaTQ\" =\"315\" width=\"560\"\u003e \u003c\/iframe\u003e\u003c\/p\u003e"} </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product-content">
                                                <div class="pc-inner">

                                                    <h3 class="noti-title" style="display: none;">Вам также может понравиться: </h3>
                                                    <h5 class="product-name">
                                                        <a href="collections/arts-photography/products/consectetur-nibh-eget.html">Digital Download Product with  Key </a>
                                                    </h5>
                                                    <div class="product-price">
                                                        <span class="sold-out">Продано </span>
                                                    </div>

                                                    <div class="product-review">
                                                        <span class="shopify-product-reviews-badge" data-id="8999716801"></span>
                                                    </div>

                                                    <div class="product-description only-list">
                                                        Descriptionnew HPB12 / A12  is rated at 2000mAhdesigned to power upand Decker /...
                                                    </div>

                                                    <div class="add-cart-button">
                                                        <a href="collections/arts-photography/products/consectetur-nibh-eget.html" class="btn-default add-to-cart disabled" title="Добавить в корзину"><i class="fa fa-shopping-cart"></i>Добавить в корзину </a>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>

                                        <div class="product-wrapper">

                                            <div class="product-head">
                                                <div class="product-image">

                                                    <div class="featured-img">
                                                        <a href="collections/arts-photography/products/golddax-product-example.html">
                                                            <img class="featured-image front" src="/images/16_270x.jpg" alt="Golddax Product Example" />
                                                            <span class="product-label"></span>
                                                        </a>
                                                    </div>

                                                    <div class="product-button">
                                                        <div class="product-wishlist">
                                                            <a class="btn btn-default add-to-wishlist add-product-wishlist" data-handle-product="golddax-product-example" href="javascript:void(0);" title="Add to wishlist"><i class="fa fa-heart"></i></a>
                                                        </div>

                                                        <div data-handle="golddax-product-example" data-target="#quick-shop-popup" class="quick_shop quick-shop-button hidden-sm hidden-xs" data-toggle="modal" title="Quick View">
                                                            <span class="quick-view-icon"></span>
                                                            <span class="json hide">{"id":8999719297,"title":"Golddax Product Example","handle":"golddax-product-example","description":"\u003ch5\u003eDescription\u003c\/h5\u003e\n\u003cp\u003e\u003cspan\u003eOur new \_003_\/\_003_\_003\_00312 \/ A12\u003c\/b\u003e\u003cb\u003e battery\u003c\/b\u003e\u003cspan\u003e isat 2000mAh and designed  power up Black and  \/ FireStorm line of 12_ tools allowing users tomultiple devices off the  battery pack. The HPB12  compatible with the followingand Decker power tool \_003_\/\_003_\_003_\/_\_003_\_\_0035\_003_\_003_\_003_\_003_\/\_003_\_003_\/_5\_003_\_\_003_\_003_\_\_003_\_003_: Ni-CD\u003c\/li\u003e\n\u003cli\u003eVoltage: 12V\u003c\/li\u003e\n\u003cli\u003eAmpHours: 2000mAh\u003c\/li\u003e\n\u003cli\u003eDimensions: 109.75x79.55x62.20mm\u003c\/li\u003e\n\u003c\/ul\u003e\n\u003ch5\u003eVideo\u003c\/h5\u003e\n\u003cp\u003e\u003ciframe=\"\/\/_.._\/_\/_7015\" height=\"315\" width=\"560\"\u003e \u003c\/iframe\u003e\u003c\/p\u003e","published_at":"2017-03-13T03:49:00-04:00","created_at":"2017-03-13T03:49:29-04:00","vendor":"Christian Dior","type":"Party","tags":["Brand_Godo","Color_Black","Color_Brown","Price_$100-$300","Size_L","Size_M","Size_X","Size_XL"],"price":12000,"price_min":12000,"price_max":22000,"available":true,"price_varies":true,"compare_at_price":null,"compare_at_price_min":0,"compare_at_price_max":0,"compare_at_price_varies":false,"variants":[{"id":31822334401,"title":"M \/ Brown","option1":"M","option2":"Brown","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":null,"available":true,"name":"Golddax Product Example -\/ Brown","public_title":"M \/ Brown","options":["M","Brown"],"price":12000,"weight":0,"compare_at_price":null,"inventory_quantity":-4,"inventory_management":null,"inventory_policy":"deny","barcode":null},{"id":31822334529,"title":"M \/ Black","option1":"M","option2":"Black","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":null,"available":true,"name":"Golddax Product Example -\/ Black","public_title":"M \/ Black","options":["M","Black"],"price":15000,"weight":0,"compare_at_price":null,"inventory_quantity":-4,"inventory_management":null,"inventory_policy":"deny","barcode":null},{"id":31822334657,"title":"L \/ Brown","option1":"L","option2":"Brown","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":null,"available":true,"name":"Golddax Product Example -\/ Brown","public_title":"L \/ Brown","options":["L","Brown"],"price":20000,"weight":0,"compare_at_price":null,"inventory_quantity":-4,"inventory_management":null,"inventory_policy":"deny","barcode":null},{"id":31822334785,"title":"L \/ Black","option1":"L","option2":"Black","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":null,"available":true,"name":"Golddax Product Example -\/ Black","public_title":"L \/ Black","options":["L","Black"],"price":14000,"weight":0,"compare_at_price":null,"inventory_quantity":-4,"inventory_management":null,"inventory_policy":"deny","barcode":null},{"id":31822334913,"title":"X \/ Brown","option1":"X","option2":"Brown","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":null,"available":true,"name":"Golddax Product Example -\/ Brown","public_title":"X \/ Brown","options":["X","Brown"],"price":18000,"weight":0,"compare_at_price":null,"inventory_quantity":-4,"inventory_management":null,"inventory_policy":"deny","barcode":null},{"id":31822335041,"title":"X \/ Black","option1":"X","option2":"Black","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":null,"available":true,"name":"Golddax Product Example -\/ Black","public_title":"X \/ Black","options":["X","Black"],"price":22000,"weight":0,"compare_at_price":null,"inventory_quantity":-4,"inventory_management":null,"inventory_policy":"deny","barcode":null}],"images":["\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/16.jpg?v=1494838915"],"featured_image":"\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/16.jpg?v=1494838915","options":["Size","Color"],"content":"\u003ch5\u003eDescription\u003c\/h5\u003e\n\u003cp\u003e\u003cspan\u003eOur\u003c\/span\u003e\u003cb\u003eHPB12 \/ A12\u003c\/b\u003e\u003cb\u003e battery\u003c\/b\u003e\u003cspan\u003e  rated at 2000mAh andto power up BlackDecker \/ FireStorm line  12V tools allowing users  run multiple devices offsame battery pack. The12 is compatible with the  Black and Decker power  models\u003c\/span\u003e\u003c\/p\u003e\n\u003ch5\u003e\u003cspan\u003eSpecifications\u003c\/span\u003e\u003c\/h5\u003e\n\u003cul\u003e\n\u003cli\u003eChemistry: Ni-CD\u003c\/li\u003e\n\u003cli\u003eVoltage: 12V\u003c\/li\u003e\n\u003cli\u003eAmpHours: 2000mAh\u003c\/li\u003e\n\u003cli\u003eDimensions: 109.75_79.55_62.20\_003_\/\_003_\_\_003_\/\_003_\_\_0035\_003\_003_\/_5\_003_\_\_003\_003_\_003 src=\"\/\/www.youtube.com\/embed\/QZd7015XaTQ\" height=\"315\" width=\"560\"\u003e \u003c\/iframe\u003e\u003c\/p\u003e"} </span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="product-content">
                                                <div class="pc-inner">

                                                    <h3 class="noti-title" style="display: none;">You may also like: </h3>
                                                    <h5 class="product-name">
                                                        <a href="collections/arts-photography/products/golddax-product-example.html">Golddax Product Example </a>
                                                    </h5>
                                                    <div class="product-price">
                                                            <span class="price">
                 <span class="money">1208.00 р.</span>
                                                            </span>
                                                    </div>

                                                    <div class="product-review">
                                                        <span class="shopify-product-reviews-badge" data-id="8999719297"></span>
                                                    </div>

                                                    <div class="product-description only-list">
                                                        Descriptionnew HPB12 / A12  is rated at 2000mAhdesigned to power upand Decker /...
                                                    </div>

                                                    <div class="add-cart-button">
                                                        <a href="collections/arts-photography/products/golddax-product-example.html" class="btn-default select-options" title="Выберите параметры"><i class="fa fa-shopping-cart"></i>Выберите параметры </a>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>

                                        <div class="product-wrapper">

                                            <div class="product-head">
                                                <div class="product-image">
                                                    <div class="featured-img">
                                                        <a href="collections/arts-photography/products/fixair-product-sample.html">
                                                            <img class="featured-image front" src="/images/09_1_270x.jpg" alt="Fixair Product Sample" />
                                                            <span class="product-label"> </span>
                                                        </a>
                                                    </div>

                                                    <div class="product-button">

                                                        <div class="product-wishlist">
                                                            <a class="btn btn-default add-to-wishlist add-product-wishlist" data-handle-product="fixair-product-sample" href="javascript:void(0);" title="Добавить в список желаний"><i class="fa fa-heart"></i></a>
                                                        </div>

                                                        <div data-handle="fixair-product-sample" data-target="#quick-shop-popup" class="quick_shop quick-shop-button hidden-sm hidden-xs" data-toggle="modal" title="Quick View">
                                                            <span class="quick-view-icon"></span>
                                                            <span class="json hide">{"id":8999717697,"title":"Fixair Product Sample","handle":"fixair-product-sample","description":"\u003ch5\u003eDescription\u003c\/h5\u003e\n\u003cp\u003e\u003cspan\u003eOur new \_003_\/\_003_\_003\_00312 \/ A12\u003c\/b\u003e\u003cb\u003e battery\u003c\/b\u003e\u003cspan\u003e isat 2000mAh and designed  power up Black and  \/ FireStorm line of 12_ tools allowing users tomultiple devices off the  battery pack. The HPB12  compatible with the followingand Decker power tool \_003_\/\_003_\_003_\/_\_003_\_\_003_\_003_\_\_003_\_003_: Ni-CD\u003c\/li\u003e\n\u003cli\u003eVoltage: 12V\u003c\/li\u003e\n\u003cli\u003eAmpHours: 2000mAh\u003c\/li\u003e\n\u003cli\u003eDimensions: 109.75x79.55x62.20mm\u003c\/li\u003e\n\u003c\/ul\u003e\n\u003ch5\u003eVideo\u003c\/h5\u003e\n\u003cp\u003e\u003ciframe=\"\/\/_.._\/_\/_7015\" height=\"315\" width=\"560\"\u003e \u003c\/iframe\u003e\u003c\/p\u003e","published_at":"2017-03-13T03:49:00-04:00","created_at":"2017-03-13T03:49:05-04:00","vendor":"Dolce \u0026 ","":"","":["_","","_","_","","_","","_","","_","_","","","_","$100-$300"," $300","Price_Under $100","Size_L","Size_M","Size_X","Size_XL"],"price":21000,"price_min":21000,"price_max":33000,"available":true,"price_varies":true,"compare_at_price":null,"compare_at_price_min":0,"compare_at_price_max":0,"compare_at_price_varies":false,"variants":[{"id":31822311937,"title":"M \/ White","option1":"M","option2":"White","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":{"id":22042712129,"product_id":8999717697,"position":1,"created_at":"2017-05-15T04:37:50-04:00","updated_at":"2017-05-15T04:38:10-04:00","alt":null,"width":724,"height":1020,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/09_50f679f9-cd1e-4e7d-8cdd-17df1d26ec30.jpg?v=1494837490","variant_ids":[31822311937,31822312001]},"available":true,"name":"Fixair  Sample - M \/","_":"_ \/ White","options":["M","White"],"price":21000,"weight":0,"compare_at_price":null,"inventory_quantity":-5,"inventory_management":null,"inventory_policy":"deny","barcode":null},{"id":31822312001,"title":"M \/ Pink","option1":"M","option2":"Pink","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":{"id":22042712129,"product_id":8999717697,"position":1,"created_at":"2017-05-15T04:37:50-04:00","updated_at":"2017-05-15T04:38:10-04:00","alt":null,"width":724,"height":1020,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/09_50f679f9-cd1e-4e7d-8cdd-17df1d26ec30.jpg?v=1494837490","variant_ids":[31822311937,31822312001]},"available":true,"name":"Fixair  Sample - M \/ ","_":"_ \/ Pink","options":["M","Pink"],"price":22000,"weight":0,"compare_at_price":null,"inventory_quantity":-4,"inventory_management":null,"inventory_policy":"deny","barcode":null},{"id":31822312065,"title":"L \/ White","option1":"L","option2":"White","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":{"id":22042712257,"product_id":8999717697,"position":2,"created_at":"2017-05-15T04:37:52-04:00","updated_at":"2017-05-15T04:38:10-04:00","alt":null,"width":724,"height":1020,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/10_a21d9138-1b22-4c74-a9aa-5de2559bee45.jpg?v=1494837490","variant_ids":[31822312065]},"available":true,"name":"Fixair  Sample - L \/","_":"_ \/ White","options":["L","White"],"price":21500,"weight":0,"compare_at_price":null,"inventory_quantity":-5,"inventory_management":null,"inventory_policy":"deny","barcode":null},{"id":31822312129,"title":"X \/ White","option1":"X","option2":"White","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":{"id":22042712385,"product_id":8999717697,"position":3,"created_at":"2017-05-15T04:37:53-04:00","updated_at":"2017-05-15T04:38:10-04:00","alt":null,"width":724,"height":1020,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/11_532c1d09-05c2-4536-88a2-487c33fc9943.jpg?v=1494837490","variant_ids":[31822312129]},"available":true,"name":"Fixair  Sample - X \/","_":"_ \/ White","options":["X","White"],"price":21000,"weight":0,"compare_at_price":null,"inventory_quantity":-4,"inventory_management":null,"inventory_policy":"deny","barcode":null},{"id":31822312193,"title":"X \/ Pink","option1":"X","option2":"Pink","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":{"id":22042712513,"product_id":8999717697,"position":4,"created_at":"2017-05-15T04:37:54-04:00","updated_at":"2017-05-15T04:38:10-04:00","alt":null,"width":724,"height":1020,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/12.jpg?v=1494837490","variant_ids":[31822312193,31822312321]},"available":true,"name":"Fixair  Sample - X \/ ","_":"_ \/ Pink","options":["X","Pink"],"price":22000,"weight":0,"compare_at_price":null,"inventory_quantity":-4,"inventory_management":null,"inventory_policy":"deny","barcode":null},{"id":31822312321,"title":"XL \/ White","option1":"XL","option2":"White","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":{"id":22042712513,"product_id":8999717697,"position":4,"created_at":"2017-05-15T04:37:54-04:00","updated_at":"2017-05-15T04:38:10-04:00","alt":null,"width":724,"height":1020,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/12.jpg?v=1494837490","variant_ids":[31822312193,31822312321]},"available":true,"name":"Fixair  Sample - XL \/","_":" \/ White","options":["XL","White"],"price":23000,"weight":0,"compare_at_price":null,"inventory_quantity":-4,"inventory_management":null,"inventory_policy":"deny","barcode":null},{"id":31822312449,"title":"XL \/ Pink","option1":"XL","option2":"Pink","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":{"id":22042710785,"product_id":8999717697,"position":5,"created_at":"2017-05-15T04:37:48-04:00","updated_at":"2017-05-15T04:38:10-04:00","alt":null,"width":724,"height":1020,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/13.jpg?v=1494837490","variant_ids":[31822312449,31822312577]},"available":true,"name":"Fixair  Sample - XL \/ ","_":" \/ Pink","options":["XL","Pink"],"price":33000,"weight":0,"compare_at_price":null,"inventory_quantity":-4,"inventory_management":null,"inventory_policy":"deny","barcode":null},{"id":31822312577,"title":"L \/ Pink","option1":"L","option2":"Pink","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":{"id":22042710785,"product_id":8999717697,"position":5,"created_at":"2017-05-15T04:37:48-04:00","updated_at":"2017-05-15T04:38:10-04:00","alt":null,"width":724,"height":1020,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/13.jpg?v=1494837490","variant_ids":[31822312449,31822312577]},"available":true,"name":"Fixair  Sample - L \/ ","_":"_ \/ Pink","options":["L","Pink"],"price":21000,"weight":0,"compare_at_price":null,"inventory_quantity":1,"inventory_management":null,"inventory_policy":"deny","barcode":null}],"images":["\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/09_50f679f9-cd1e-4e7d-8cdd-17df1d26ec30.jpg?v=1494837490","\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/10_a21d9138-1b22-4c74-a9aa-5de2559bee45.jpg?v=1494837490","\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/11_532c1d09-05c2-4536-88a2-487c33fc9943.jpg?v=1494837490","\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/12.jpg?v=1494837490","\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/13.jpg?v=1494837490"],"featured_image":"\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/09_50f679f9-cd1e-4e7d-8cdd-17df1d26ec30.jpg?v=1494837490","options":["Size","Color"],"content":"\u003ch5\u003eDescription\u003c\/h5\u003e\n\u003cp\u003e\u003cspan\u003eOur new \u003c\/span\u003e\u003cb\u003eHPB12 \/ A12\u003c\/b\u003e\u003cb\u003e battery\u003c\/b\u003e\u003cspan\u003e is rated  2000mAh and designed toup Black and Decker \/ FireStorm line of 12Vallowing users to rundevices off the same  pack. The HPB12 iswith the following BlackDecker power tool models\u003c\/span\u003e\u003c\/p\u003e\n\u003cul\u003e\n\u003cli\u003eChemistry: -\_003_\/\_003_\_\_003_\_003_: 12V\u003c\/li\u003e\n\u003cli\u003eAmpHours: 2000mAh\u003c\/li\u003e\n\u003cli\u003eDimensions: 109.75x79.55x62.20mm\u003c\/li\u003e\n\u003c\/ul\u003e\n\u003ch5\u003eVideo\u003c\/h5\u003e\n\u003cp\u003e\u003ciframe src=\"\/\/www.youtube.com\/embed\/QZd7015XaTQ\" =\"315\" width=\"560\"\u003e \u003c\/iframe\u003e\u003c\/p\u003e"} </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product-content">
                                                <div class="pc-inner">

                                                    <h3 class="noti-title" style="display: none;">You may also like: </h3>
                                                    <h5 class="product-name">
                                                        <a href="collections/arts-photography/products/fixair-product-sample.html">Fixair Product Sample </a>
                                                    </h5>
                                                    <div class="product-price">
                                                            <span class="price">
                 <span class="money">2140.00 р. </span>

                                                            </span>
                                                    </div>

                                                    <div class="product-review">
                                                        <span class="shopify-product-reviews-badge" data-id="8999717697"></span>
                                                    </div>

                                                    <div class="product-description only-list">
                                                        Descriptionnew HPB12 / A12  is rated at 2000mAhdesigned to power upand Decker /...
                                                    </div>

                                                    <div class="add-cart-button">
                                                        <a href="collections/arts-photography/products/fixair-product-sample.html" class="btn-default select-options" title="Выберите параметры"><i class="fa fa-shopping-cart"></i>Выберите параметры </a>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>

                                        <div class="product-wrapper">

                                            <div class="product-head">
                                                <div class="product-image">

                                                    <div class="featured-img">
                                                        <a href="collections/arts-photography/products/donkix-product-sample.html">
                                                            <img class="featured-image front" src="/images/06_270x.jpg" alt="Donkix Product Sample" />
                                                            <span class="product-label">
 </span>
                                                        </a>
                                                    </div>

                                                    <div class="product-button">

                                                        <div class="product-wishlist">
                                                            <a class="btn btn-default add-to-wishlist add-product-wishlist" data-handle-product="donkix-product-sample" href="javascript:void(0);" title="Добавить в список желаний"><i class="fa fa-heart"></i></a>
                                                        </div>

                                                        <div data-handle="donkix-product-sample" data-target="#quick-shop-popup" class="quick_shop quick-shop-button hidden-sm hidden-xs" data-toggle="modal" title="Quick View">
                                                            <span class="quick-view-icon"></span>
                                                            <span class="json hide">{"id":8999717185,"title":"Donkix Product Sample","handle":"donkix-product-sample","description":"\u003ch5\u003eDescription\u003c\/h5\u003e\n\u003cp\u003e\u003cspan\u003eOur new \_003_\/\_003_\_003\_00312 \/ A12\u003c\/b\u003e\u003cb\u003e battery\u003c\/b\u003e\u003cspan\u003e isat 2000mAh and designed  power up Black and  \/ FireStorm line of 12_ tools allowing users tomultiple devices off the  battery pack. The HPB12  compatible with the followingand Decker power tool \_003_\/\_003_\_003_\/_\_003_\_\_0035\_003_\_003_\_003_\_003_\/\_003_\_003_\/_5\_003_\_\_003_\_003_\_\_003_\_003_: Ni-CD\u003c\/li\u003e\n\u003cli\u003eVoltage: 12V\u003c\/li\u003e\n\u003cli\u003eAmpHours: 2000mAh\u003c\/li\u003e\n\u003cli\u003eDimensions: 109.75x79.55x62.20mm\u003c\/li\u003e\n\u003c\/ul\u003e\n\u003ch5\u003eVideo\u003c\/h5\u003e\n\u003cp\u003e\u003ciframe=\"\/\/_.._\/_\/_7015\" height=\"315\" width=\"560\"\u003e \u003c\/iframe\u003e\u003c\/p\u003e","published_at":"2017-03-13T03:48:00-04:00","created_at":"2017-03-13T03:48:59-04:00","vendor":"Armani","type":"Modern","tags":["Color_Red","Price_Under $100","Size_L","Size_M"],"price":6000,"price_min":6000,"price_max":6500,"available":true,"price_varies":true,"compare_at_price":null,"compare_at_price_min":0,"compare_at_price_max":0,"compare_at_price_varies":false,"variants":[{"id":31822306113,"title":"M \/ Red","option1":"M","option2":"Red","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":{"id":22042674497,"product_id":8999717185,"position":1,"created_at":"2017-05-15T04:34:37-04:00","updated_at":"2017-05-15T04:34:37-04:00","alt":null,"width":724,"height":1020,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/06.jpg?v=1494837277","variant_ids":[31822306113]},"available":true,"name":"Donkix Product Sample -\/ Red","public_title":"M \/ Red","options":["M","Red"],"price":6000,"weight":0,"compare_at_price":null,"inventory_quantity":-1,"inventory_management":null,"inventory_policy":"deny","barcode":""},{"id":31822306241,"title":"L \/ Red","option1":"L","option2":"Red","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":{"id":22042674881,"product_id":8999717185,"position":2,"created_at":"2017-05-15T04:34:39-04:00","updated_at":"2017-05-15T04:34:39-04:00","alt":null,"width":724,"height":1020,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/07.jpg?v=1494837279","variant_ids":[31822306241]},"available":true,"name":"Donkix Product Sample -\/ Red","public_title":"L \/ Red","options":["L","Red"],"price":6500,"weight":0,"compare_at_price":null,"inventory_quantity":1,"inventory_management":null,"inventory_policy":"deny","barcode":""}],"images":["\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/06.jpg?v=1494837277","\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/07.jpg?v=1494837279"],"featured_image":"\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/06.jpg?v=1494837277","options":["Size","Color"],"content":"\u003ch5\u003eDescription\u003c\/h5\u003e\n\u003cp\u003e\u003cspan\u003eOur\u003c\/span\u003e\u003cb\u003eHPB12 \/ A12\u003c\/b\u003e\u003cb\u003e battery\u003c\/b\u003e\u003cspan\u003e  rated at 2000mAh andto power up BlackDecker \/ FireStorm line  12V tools allowing users  run multiple devices offsame battery pack. The12 is compatible with the  Black and Decker power  models\u003c\/span\u003e\u003c\/p\u003e\n\u003ch5\u003e\u003cspan\u003eSpecifications\u003c\/span\u003e\u003c\/h5\u003e\n\u003cul\u003e\n\u003cli\u003eChemistry: Ni-CD\u003c\/li\u003e\n\u003cli\u003eVoltage: 12V\u003c\/li\u003e\n\u003cli\u003eAmpHours: 2000mAh\u003c\/li\u003e\n\u003cli\u003eDimensions: 109.75_79.55_62.20\_003_\/\_003_\_\_003_\/\_003_\_\_0035\_003\_003_\/_5\_003_\_\_003\_003_\_003 src=\"\/\/www.youtube.com\/embed\/QZd7015XaTQ\" height=\"315\" width=\"560\"\u003e \u003c\/iframe\u003e\u003c\/p\u003e"} </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product-content">
                                                <div class="pc-inner">

                                                    <h3 class="noti-title" style="display: none;">You may also like: </h3>

                                                    <h5 class="product-name">
                                                        <a href="collections/arts-photography/products/donkix-product-sample.html">Donkix Product Sample </a>
                                                    </h5>

                                                    <div class="product-price">

                                                            <span class="price">

                 <span class="money">60.00 р. </span>

                                                            </span>

                                                    </div>

                                                    <div class="product-review">
                                                        <span class="shopify-product-reviews-badge" data-id="8999717185"></span>
                                                    </div>

                                                    <div class="product-description only-list">
                                                        Descriptionnew HPB12 / A12  is rated at 2000mAhdesigned to power upand Decker /...
                                                    </div>

                                                    <div class="add-cart-button">

                                                        <a href="collections/arts-photography/products/donkix-product-sample.html" class="btn-default select-options" title="Выберите параметры"><i class="fa fa-shopping-cart"></i>Выберите параметры </a>

                                                    </div>

                                                </div>
                                            </div>

                                        </div>

                                        <div class="product-wrapper">

                                            <div class="product-head">
                                                <div class="product-image">

                                                    <div class="featured-img">
                                                        <a href="collections/arts-photography/products/quisque-placerat-libero.html">
                                                            <img class="featured-image front" src="/images/05_270x.jpg" alt="Dentotam Product Sample" />
                                                            <span class="product-label">

 </span>
                                                        </a>
                                                    </div>

                                                    <div class="product-button">

                                                        <div class="product-wishlist">
                                                            <a class="btn btn-default add-to-wishlist add-product-wishlist" data-handle-product="quisque-placerat-libero" href="javascript:void(0);" title="Добавить в список желаний"><i class="fa fa-heart"></i></a>
                                                        </div>

                                                        <div data-handle="quisque-placerat-libero" data-target="#quick-shop-popup" class="quick_shop quick-shop-button hidden-sm hidden-xs" data-toggle="modal" title="Quick View">
                                                            <span class="quick-view-icon"></span>
                                                            <span class="json hide">{"id":8999721217,"title":"Dentotam Product Sample","handle":"quisque-placerat-libero","description":"\u003ch5\u003eDescription\u003c\/h5\u003e\n\u003cp\u003e\u003cspan\u003eOur new \_003_\/\_003_\_003\_00312 \/ A12\u003c\/b\u003e\u003cb\u003e battery\u003c\/b\u003e\u003cspan\u003e isat 2000mAh and designed  power up Black and  \/ FireStorm line of 12_ tools allowing users tomultiple devices off the  battery pack. The HPB12  compatible with the followingand Decker power tool \_003_\/\_003_\_003_\/_\_003_\_\_0035\_003_\_003_\_003_\_003_\/\_003_\_003_\/_5\_003_\_\_003_\_003_\_\_003_\_003_: Ni-CD\u003c\/li\u003e\n\u003cli\u003eVoltage: 12V\u003c\/li\u003e\n\u003cli\u003eAmpHours: 2000mAh\u003c\/li\u003e\n\u003cli\u003eDimensions: 109.75x79.55x62.20mm\u003c\/li\u003e\n\u003c\/ul\u003e\n\u003ch5\u003eVideo\u003c\/h5\u003e\n\u003cp\u003e\u003ciframe=\"\/\/_.._\/_\/_7015\" height=\"315\" width=\"560\"\u003e \u003c\/iframe\u003e\u003c\/p\u003e","published_at":"2017-03-13T03:49:00-04:00","created_at":"2017-03-13T03:50:00-04:00","vendor":"Donna Karan","type":"Modern","tags":["Color_Blue","Color_Brown","Color_Pink","Price_Under $100"],"_":2000,"":2000,"":2500,"":,"_":,"":,"":0,"":0,"":_,"_":[{"":31822351681,"_":"_ \/ Brown","option1":"M","option2":"Brown","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":null,"available":true,"name":"Dentotam Product Sample - M \/ Brown","public_title":"M \/","":["_","_"],"_":2000,"":0,"":,"":-9,"":,"":"","":""},{"":31822351745,"_":"_ \/ Blue","option1":"M","option2":"Blue","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":null,"available":true,"name":"Dentotam Product Sample - M \/ Blue","public_title":"M \/ ","":["_",""],"_":2200,"":0,"":,"":1,"":,"":"","":""},{"":31822351809,"_":"_ \/ Pink","option1":"M","option2":"Pink","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":null,"available":true,"name":"Dentotam Product Sample - M \/ Pink","public_title":"M \/ ","":["_",""],"_":2500,"":0,"":,"":1,"":,"":"","":""}],"":["\/\/_.._\/_\/_\/1\/1836\/0759\/_\/05._?_=1494840068"],"":"\/\/_.._\/_\/_\/1\/1836\/0759\/_\/05._?_=1494840068","":["","_"],"":"\_0035\_003_\_003_\/_5\_003_\_\_003\_003_\_003_\_003 new \u003c\/span\u003e\u003cb\u003eHPB12 \/ A12\u003c\/b\u003e\u003cb\u003e \_003_\/_\_003_\_003_\_003_ is rated at 2000mAhdesigned to power upand Decker \/ FireStorm  of 12V tools allowingto run multiple devicesthe same battery pack.HPB12 is compatible withfollowing Black and Deckertool models\u003c\/span\u003e\u003c\/p\u003e\n\u003ch5\u003e\u003cspan\u003eSpecifications\u003c\/span\u003e\u003c\/h5\u003e\n\u003cul\u003e\n\u003cli\u003eChemistry: Ni-CD\u003c\/li\u003e\n\u003cli\u003eVoltage: 12V\u003c\/li\u003e\n\u003cli\u003eAmpHours: 2000_\_003_\/\_003_\_\_003_\_003: 109.75x79.55x62.20mm\u003c\/li\u003e\n\u003c\/ul\u003e\n\u003ch5\u003eVideo\u003c\/h5\u003e\n\u003cp\u003e\u003ciframe src=\"\/\/www.youtube.com\/embed\/QZd7015XaTQ\" height=\"315\" width=\"560\"\u003e \_003_\/\_003_\_003_\/_\_003_"} </span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>

                                            <div class="product-content">
                                                <div class="pc-inner">

                                                    <h3 class="noti-title" style="display: none;">You may also like: </h3>

                                                    <h5 class="product-name">
                                                        <a href="collections/arts-photography/products/quisque-placerat-libero.html">Dentotam Product Sample </a>
                                                    </h5>

                                                    <div class="product-price">

                                                            <span class="price">

                 <span class="money">20.00 р.</span>

                                                            </span>

                                                    </div>

                                                    <div class="product-review">
                                                        <span class="shopify-product-reviews-badge" data-id="8999721217"></span>
                                                    </div>

                                                    <div class="product-description only-list">
                                                        Descriptionnew HPB12 / A12  is rated at 2000mAhdesigned to power upand Decker /...
                                                    </div>

                                                    <div class="add-cart-button">

                                                        <a href="collections/arts-photography/products/quisque-placerat-libero.html" class="btn-default select-options" title="Выберите параметры"><i class="fa fa-shopping-cart"></i>Выберите параметры </a>

                                                    </div>

                                                </div>
                                            </div>

                                        </div>

                                        <div class="product-wrapper">

                                            <div class="product-head">
                                                <div class="product-image">

                                                    <div class="featured-img">
                                                        <a href="collections/arts-photography/products/daltex-product-example.html">
                                                            <img class="featured-image front" src="/images/03_270x.jpg" alt="Daltex Product Example" />
                                                            <span class="product-label">

 </span>
                                                        </a>
                                                    </div>

                                                    <div class="product-button">

                                                        <div class="product-wishlist">
                                                            <a class="btn btn-default add-to-wishlist add-product-wishlist" data-handle-product="daltex-product-example" href="javascript:void(0);" title="Добавить в список желаний"><i class="fa fa-heart"></i></a>
                                                        </div>

                                                        <div data-handle="daltex-product-example" data-target="#quick-shop-popup" class="quick_shop quick-shop-button hidden-sm hidden-xs" data-toggle="modal" title="Quick View">
                                                            <span class="quick-view-icon"></span>
                                                            <span class="json hide">{"id":8999716993,"title":"Daltex Product Example","handle":"daltex-product-example","description":"\u003ch5\u003eDescription\u003c\/h5\u003e\n\u003cp\u003e\u003cspan\u003eOur new \_003_\/\_003_\_003\_00312 \/ A12\u003c\/b\u003e\u003cb\u003e battery\u003c\/b\u003e\u003cspan\u003e isat 2000mAh and designed  power up Black and  \/ FireStorm line of 12_ tools allowing users tomultiple devices off the  battery pack. The HPB12  compatible with the followingand Decker power tool \_003_\/\_003_\_003_\/_\_003_\_\_0035\_003_\_003_\_003_\_003_\/\_003_\_003_\/_5\_003_\_\_003_\_003_\_\_003_\_003_: Ni-CD\u003c\/li\u003e\n\u003cli\u003eVoltage: 12V\u003c\/li\u003e\n\u003cli\u003eAmpHours: 2000mAh\u003c\/li\u003e\n\u003cli\u003eDimensions: 109.75x79.55x62.20mm\u003c\/li\u003e\n\u003c\/ul\u003e\n\u003ch5\u003eVideo\u003c\/h5\u003e\n\u003cp\u003e\u003ciframe=\"\/\/_.._\/_\/_7015\" height=\"315\" width=\"560\"\u003e \u003c\/iframe\u003e\u003c\/p\u003e","published_at":"2017-03-13T03:48:00-04:00","created_at":"2017-03-13T03:48:58-04:00","vendor":"Dolce \u0026 ","":"","":["_","","_","_","","_","","_","","_","_","","","_","$100-$300"," $300","Price_Under $100","Size_L","Size_M","Size_X","Size_XL"],"price":20000,"price_min":20000,"price_max":20000,"available":true,"price_varies":false,"compare_at_price":null,"compare_at_price_min":0,"compare_at_price_max":0,"compare_at_price_varies":false,"variants":[{"id":31822305025,"title":"Default Title","option1":"Default Title","option2":null,"option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":null,"available":true,"name":"Daltex  Example","public_title":null,"options":["Default Title"],"price":20000,"weight":0,"compare_at_price":null,"inventory_quantity":-36,"inventory_management":null,"inventory_policy":"deny","barcode":""}],"images":["\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/03_3e3a0973-9713-40a2-80f7-22ca55887b2f.jpg?v=1494840049"],"featured_image":"\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/03_3e3a0973-9713-40a2-80f7-22ca55887b2f.jpg?v=1494840049","options":["Title"],"content":"\u003ch5\u003eDescription\u003c\/h5\u003e\n\u003cp\u003e\u003cspan\u003eOur new \u003c\/span\u003e\u003cb\u003eHPB12 \/ A12\u003c\/b\u003e\u003cb\u003e battery\u003c\/b\u003e\u003cspan\u003e is rated  2000mAh and designed toup Black and Decker \/ FireStorm line of 12Vallowing users to rundevices off the same  pack. The HPB12 iswith the following BlackDecker power tool models\u003c\/span\u003e\u003c\/p\u003e\n\u003ch5\u003e\u003cspan\u003eSpecifications\u003c\/span\u003e\u003c\/h5\u003e\n\u003cul\u003e\n\u003cli\u003eChemistry: -\_003_\/\_003_\_\_003_\_003_: 12V\u003c\/li\u003e\n\u003cli\u003eAmpHours: 2000mAh\u003c\/li\u003e\n\u003cli\u003eDimensions: 109.75x79.55x62.20mm\u003c\/li\u003e\n\u003c\/ul\u003e\n\u003ch5\u003eVideo\u003c\/h5\u003e\n\u003cp\u003e\u003ciframe src=\"\/\/www.youtube.com\/embed\/QZd7015XaTQ\" =\"315\" width=\"560\"\u003e \u003c\/iframe\u003e\u003c\/p\u003e"} </span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>

                                            <div class="product-content">
                                                <div class="pc-inner">

                                                    <h3 class="noti-title" style="display: none;">You may also like: </h3>

                                                    <h5 class="product-name">
                                                        <a href="collections/arts-photography/products/daltex-product-example.html">Daltex Product Example </a>
                                                    </h5>

                                                    <div class="product-price">

                                                            <span class="price">

                 <span class="money">200.00 р.</span>

                                                            </span>

                                                    </div>

                                                    <div class="product-review">
                                                        <span class="shopify-product-reviews-badge" data-id="8999716993"></span>
                                                    </div>

                                                    <div class="product-description only-list">
                                                        Descriptionnew HPB12 / A12  is rated at 2000mAhdesigned to power upand Decker /...
                                                    </div>

                                                    <div class="add-cart-button">

                                                        <form action="/cart/add" method="post" enctype="multipart/form-data">
                                                            <a href="collections/arts-photography/products/daltex-product-example.html" class="btn-default add-to-cart" title="Добавить в корзину"><i class="fa fa-shopping-cart"></i>Добавить в корзину </a>
                                                            <select class="hide" name="id">

                                                                <option value="31822305025" />Default Title

                                                            </select>
                                                        </form>

                                                    </div>

                                                </div>
                                            </div>

                                        </div>

                                        <div class="product-wrapper">

                                            <div class="product-head">
                                                <div class="product-image">

                                                    <div class="featured-img">
                                                        <a href="collections/arts-photography/products/coneco-product-sample.html">
                                                            <img class="featured-image front" src="/images/02_270x.jpg" alt="Coneco Product Sample" />
                                                            <span class="product-label">

 </span>
                                                        </a>
                                                    </div>

                                                    <div class="product-button">

                                                        <div class="product-wishlist">
                                                            <a class="btn btn-default add-to-wishlist add-product-wishlist" data-handle-product="coneco-product-sample" href="javascript:void(0);" title="Add to wishlist"><i class="fa fa-heart"></i></a>
                                                        </div>

                                                        <div data-handle="coneco-product-sample" data-target="#quick-shop-popup" class="quick_shop quick-shop-button hidden-sm hidden-xs" data-toggle="modal" title="Quick View">
                                                            <span class="quick-view-icon"></span>
                                                            <span class="json hide">{"id":8999716417,"title":"Coneco Product Sample","handle":"coneco-product-sample","description":"\u003ch5\u003e\u003cspan\u003eDescription\u003c\/span\u003e\u003c\/h5\u003e\n\u003cp\u003e\u003cspan\u003eOur new \_003_\/\_003_\_003\_00312 \/ A12\u003c\/b\u003e\u003cb\u003e battery\u003c\/b\u003e\u003cspan\u003e isat 2000mAh and designed  power up Black and  \/ FireStorm line of 12_ tools allowing users tomultiple devices off the  battery pack. The HPB12  compatible with the followingand Decker power tool \_003_\/\_003_\_003_\/_\_003_\_\_0035\_003_\_003_\_003_\_003_\/\_003_\_003_\/_5\_003_\_\_003_\_003_\_\_003_\_003_: Ni-CD\u003c\/li\u003e\n\u003cli\u003eVoltage: 12V\u003c\/li\u003e\n\u003cli\u003eAmpHours: 2000mAh\u003c\/li\u003e\n\u003cli\u003eDimensions: 109.75x79.55x62.20mm\u003c\/li\u003e\n\u003c\/ul\u003e\n\u003ch5\u003eVideo\u003c\/h5\u003e\n\u003cp\u003e\u003ciframe=\"\/\/_.._\/_\/_7015\" height=\"315\" width=\"560\"\u003e \u003c\/iframe\u003e\u003c\/p\u003e","published_at":"2017-03-13T03:48:00-04:00","created_at":"2017-03-13T03:48:48-04:00","vendor":"Christian Dior","type":"Classic","tags":["Brand_Bikis","Color_Brown","Price_Above $300","","","",""],"_":31000,"":31000,"":38000,"":,"_":,"":,"":0,"":0,"":_,"_":[{"":31822303233,"_":"_","1":"_","2":,"3":,"_":"","_":,"":,"":{"":22042623297,"_":8999716417,"_":2,"_":"2017-05-15_04:30:09-04:00","_":"2017-05-15_05:20:02-04:00","_":,"_":486,"":681,"_":"_:\/\/_.._\/_\/_\/1\/1836\/0759\/_\/01_82_54644-70_1-4022--70_62234_76_._?_=1494840002","":[31822303233]},"":,"":" Product Sample - M","public_title":"M","options":["M"],"price":31000,"weight":0,"compare_at_price":null,"inventory_quantity":-30,"inventory_management":null,"inventory_policy":"deny","barcode":"9789797807214"},{"id":31822303297,"title":"L","option1":"L","option2":null,"option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":{"id":22042623489,"product_id":8999716417,"position":3,"created_at":"2017-05-15T04:30:11-04:00","updated_at":"2017-05-15T05:20:02-04:00","alt":null,"width":987,"height":1405,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/02_a41c85e0-706c-49f5-ac80-99e798f36293.jpg?v=1494840002","variant_ids":[31822303297]},"available":true,"name":"Coneco  Sample - L","public_title":"L","options":["L"],"price":32000,"weight":0,"compare_at_price":null,"inventory_quantity":-6,"inventory_management":null,"inventory_policy":"deny","barcode":"999797807214"},{"id":31822303361,"title":"X","option1":"X","option2":null,"option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":{"id":22042623681,"product_id":8999716417,"position":4,"created_at":"2017-05-15T04:30:12-04:00","updated_at":"2017-05-15T05:20:02-04:00","alt":null,"width":1009,"height":1415,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/03.jpg?v=1494840002","variant_ids":[31822303361]},"available":true,"name":"Coneco Product  - X","public_title":"X","options":["X"],"price":35000,"weight":0,"compare_at_price":null,"inventory_quantity":-12,"inventory_management":null,"inventory_policy":"deny","barcode":"6879797807214"},{"id":31822303425,"title":"Xl","option1":"Xl","option2":null,"option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":{"id":22042623745,"product_id":8999716417,"position":5,"created_at":"2017-05-15T04:30:13-04:00","updated_at":"2017-05-15T05:20:02-04:00","alt":null,"width":654,"height":923,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/04_6025005a-2f33-469a-ae19-829cc0f9af9c.jpg?v=1494840002","variant_ids":[31822303425]},"available":true,"name":"Coneco Product Sample - Xl","public_title":"Xl","options":["Xl"],"price":38000,"weight":0,"compare_at_price":null,"inventory_quantity":-4,"inventory_management":null,"inventory_policy":"deny","barcode":""}],"images":["\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/02.jpg?v=1494840002","\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/01_82b54644-70b1-4022-abda-70e62234c76e.jpg?v=1494840002","\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/02_a41c85e0-706c-49f5-ac80-99e798f36293.jpg?v=1494840002","\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/03.jpg?v=1494840002","\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/04_6025005a-2f33-469a-ae19-829cc0f9af9c.jpg?v=1494840002"],"featured_image":"\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/02.jpg?v=1494840002","options":["Size"],"content":"\u003ch5\u003e\u003cspan\u003eDescription\u003c\/span\u003e\u003c\/h5\u003e\n\u003cp\u003e\u003cspan\u003eOur new \u003c\/span\u003e\u003cb\u003eHPB12 \/12\_003_\/_\_003_\_003\_003_ battery\u003c\/b\u003e\u003cspan\u003e is rated at 2000_ and designed to power  Black and Decker \/  line of 12V toolsusers to run multiple  off the same battery . The HPB12 is compatible  the following Black and  power tool models\u003c\/span\u003e\u003c\/p\u003e\n\u003ch5\u003e\u003cspan\u003eSpecifications\u003c\/span\u003e\u003c\/h5\u003e\n\u003cul\u003e\n\u003cli\u003eChemistry: Ni-CD\u003c\/li\u003e\n\u003cli\u003eVoltage: 12_\_003_\/\_003_\_\_003_\_003: 2000mAh\u003c\/li\u003e\n\u003cli\u003eDimensions: 109.75x79.55x62.20mm\u003c\/li\u003e\n\u003c\/ul\u003e\n\u003ch5\u003eVideo\u003c\/h5\u003e\n\u003cp\u003e\u003ciframe src=\"\/\/www.youtube.com\/embed\/QZd7015XaTQ\" height=\"315\"=\"560\"\_003_ \u003c\/iframe\u003e\u003c\/p\u003e"} </span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>

                                            <div class="product-content">
                                                <div class="pc-inner">

                                                    <h3 class="noti-title" style="display: none;">You may also like: </h3>

                                                    <h5 class="product-name">
                                                        <a href="collections/arts-photography/products/coneco-product-sample.html">Coneco Product Sample </a>
                                                    </h5>

                                                    <div class="product-price">

                                                            <span class="price">

                 <span class="money">3140.00 р.</span>

                                                            </span>

                                                    </div>

                                                    <div class="product-review">
                                                        <span class="shopify-product-reviews-badge" data-id="8999716417"></span>
                                                    </div>

                                                    <div class="product-description only-list">
                                                        Descriptionnew HPB12 / A12  is rated at 2000mAhdesigned to power upand Decker /...
                                                    </div>

                                                    <div class="add-cart-button">

                                                        <a href="collections/arts-photography/products/coneco-product-sample.html" class="btn-default select-options" title="Выберите параметры"><i class="fa fa-shopping-cart"></i>Выберите параметры </a>

                                                    </div>

                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <script>
                                        jQuery(document).ready(function($) {

                                            jQuery(".product-list-14895758503399").length && jQuery('.product-list-14895758503399').owlCarousel({
                                                nav: true,
                                                dots: false,
                                                items: 4,
                                                margin: 20,
                                                responsive: {
                                                    0: {
                                                        items: 1
                                                    },
                                                    320: {
                                                        items: 2
                                                    },
                                                    768: {
                                                        items: 3
                                                    },
                                                    992: {
                                                        items: 4
                                                    },
                                                    1200: {
                                                        items: 4
                                                    }
                                                },
                                                navText: ['<span class="button-prev"></span>', '<span class="button-next"></span>']
                                            });

                                        });
                                    </script>

                                </div>
                            </div>

                        </div>
                        <div id="shopify-section-1494823229280" class="shopify-section">
                            <div class="section-separator section-separator-1494823229280">
                                <div class="separator separator-1494823229280">
                                    <div class="spacing" style="margin-bottom: 75px">
                                        <style type="text/css">
                                            @media (max-width: 767px) {
                                                .spacing {
                                                    margin-bottom: 40px !important;
                                                }
                                            }
                                        </style>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div id="shopify-section-1489575888904" class="shopify-section">

                            <div class="home-product style-1 home-carousel">
                                <div class="container">

                                    <div class="title-wrapper">
                                        <h3>Топ лучшей мебели </h3>
                                        <a class="view-all" href="collections/biographies-memoirs.html"><span>Посмотреть все </span></a>

                                    </div>

                                    <div class="product-list product-list-1489575888904">

                                        <div class="product-wrapper">

                                            <div class="product-head">
                                                <div class="product-image">

                                                    <div class="featured-img">
                                                        <a href="collections/biographies-memoirs/products/hot-com-product-sample.html">
                                                            <img class="featured-image front" src="/images/17_270x.jpg" alt="Hot Com Product Sample" />
                                                            <span class="product-label">

 </span>
                                                        </a>
                                                    </div>

                                                    <div class="product-button">

                                                        <div class="product-wishlist">
                                                            <a class="btn btn-default add-to-wishlist add-product-wishlist" data-handle-product="hot-com-product-sample" href="javascript:void(0);" title="Add to wishlist"><i class="fa fa-heart"></i></a>
                                                        </div>

                                                        <div data-handle="hot-com-product-sample" data-target="#quick-shop-popup" class="quick_shop quick-shop-button hidden-sm hidden-xs" data-toggle="modal" title="Quick View">
                                                            <span class="quick-view-icon"></span>
                                                            <span class="json hide">{"id":8999719553,"title":"Hot Com Product Sample","handle":"hot-com-product-sample","description":"\u003ch5\u003eDescription\u003c\/h5\u003e\n\u003cp\u003e\u003cspan\u003eOur\u003c\/span\u003e\u003cb\u003eHPB12 \/ A12\u003c\/b\u003e\u003cb\u003e battery\u003c\/b\u003e\u003cspan\u003e  rated at 2000mAh andto power up BlackDecker \/ FireStorm line  12V tools allowing users  run multiple devices offsame battery pack. The12 is compatible with the  Black and Decker power  models\u003c\/span\u003e\u003c\/p\u003e\n\u003ch5\u003e\u003cspan\u003eSpecifications\u003c\/span\u003e\u003c\/h5\u003e\n\u003cul\u003e\n\u003cli\u003eChemistry: Ni-CD\u003c\/li\u003e\n\u003cli\u003eVoltage: 12V\u003c\/li\u003e\n\u003cli\u003eAmpHours: 2000mAh\u003c\/li\u003e\n\u003cli\u003eDimensions: 109.75_79.55_62.20\_003_\/\_003_\_\_003_\/\_003_\_\_0035\_003\_003_\/_5\_003_\_\_003\_003_\_003 src=\"\/\/www.youtube.com\/embed\/QZd7015XaTQ\" height=\"315\" width=\"560\"\u003e \u003c\/iframe\u003e\u003c\/p\u003e","published_at":"2017-03-13T03:49:00-04:00","created_at":"2017-03-13T03:49:33-04:00","vendor":"Givenchy","type":"Party","tags":["Brand_Jeana","Price_$100-$300","Size_L","Size_M","Size_X"],"price":22500,"price_min":22500,"price_max":22500,"available":true,"price_varies":false,"compare_at_price":null,"compare_at_price_min":0,"compare_at_price_max":0,"compare_at_price_varies":false,"variants":[{"id":31822338241,"title":"Default","1":" Title","option2":null,"option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":null,"available":true,"name":"Hot Com Product Sample","public_title":null,"options":["Default"],"_":22500,"":0,"":,"":-6,"":,"":"","":""}],"":["\/\/_.._\/_\/_\/1\/1836\/0759\/_\/17._?_=1494838928"],"":"\/\/_.._\/_\/_\/1\/1836\/0759\/_\/17._?_=1494838928","":["_"],"":"\_0035\_003_\_003_\/_5\_003_\_\_003\_003_\_003_\_003 new \u003c\/span\u003e\u003cb\u003eHPB12 \/ A12\u003c\/b\u003e\u003cb\u003e \_003_\/_\_003_\_003_\_003_ is rated at 2000mAhdesigned to power upand Decker \/ FireStorm  of 12V tools allowingto run multiple devicesthe same battery pack.HPB12 is compatible withfollowing Black and Deckertool models\u003c\/span\u003e\u003c\/p\u003e\n\u003ch5\u003e\u003cspan\u003eSpecifications\u003c\/span\u003e\u003c\/h5\u003e\n\u003cul\u003e\n\u003cli\u003eChemistry: Ni-CD\u003c\/li\u003e\n\u003cli\u003eVoltage: 12V\u003c\/li\u003e\n\u003cli\u003eAmpHours: 2000_\_003_\/\_003_\_\_003_\_003: 109.75x79.55x62.20mm\u003c\/li\u003e\n\u003c\/ul\u003e\n\u003ch5\u003eVideo\u003c\/h5\u003e\n\u003cp\u003e\u003ciframe src=\"\/\/www.youtube.com\/embed\/QZd7015XaTQ\" height=\"315\" width=\"560\"\u003e \_003_\/\_003_\_003_\/_\_003_"} </span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>

                                            <div class="product-content">
                                                <div class="pc-inner">

                                                    <h3 class="noti-title" style="display: none;">You may also like: </h3>

                                                    <h5 class="product-name">
                                                        <a href="collections/biographies-memoirs/products/hot-com-product-sample.html">Hot Com Product Sample </a>
                                                    </h5>

                                                    <div class="product-price">

                                                            <span class="price">

                 <span class="money">1225.00 р.</span>

                                                            </span>

                                                    </div>

                                                    <div class="product-review">
                                                        <span class="shopify-product-reviews-badge" data-id="8999719553"></span>
                                                    </div>

                                                    <div class="product-description only-list">
                                                        Descriptionnew HPB12 / A12  is rated at 2000mAhdesigned to power upand Decker /...
                                                    </div>

                                                    <div class="add-cart-button">

                                                        <form action="/cart/add" method="post" enctype="multipart/form-data">
                                                            <a href="collections/biographies-memoirs/products/hot-com-product-sample.html" class="btn-default add-to-cart" title="Добавить в корзину"><i class="fa fa-shopping-cart"></i>Добавить в корзину </a>
                                                            <select class="hide" name="id">

                                                                <option value="31822338241" />Default Title

                                                            </select>
                                                        </form>

                                                    </div>

                                                </div>
                                            </div>

                                        </div>

                                        <div class="product-wrapper">

                                            <div class="product-head">
                                                <div class="product-image">

                                                    <div class="featured-img">
                                                        <a href="collections/biographies-memoirs/products/irene-royal-product.html">
                                                            <img class="featured-image front" src="/images/19_270x.jpg" alt="Irene Royal Product" />
                                                            <span class="product-label">

 </span>
                                                        </a>
                                                    </div>

                                                    <div class="product-button">

                                                        <div class="product-wishlist">
                                                            <a class="btn btn-default add-to-wishlist add-product-wishlist" data-handle-product="irene-royal-product" href="javascript:void(0);" title="Add to wishlist"><i class="fa fa-heart"></i></a>
                                                        </div>

                                                        <div data-handle="irene-royal-product" data-target="#quick-shop-popup" class="quick_shop quick-shop-button hidden-sm hidden-xs" data-toggle="modal" title="Quick View">
                                                            <span class="quick-view-icon"></span>
                                                            <span class="json hide">{"id":8999719809,"title":"Irene Royal Product","handle":"irene-royal-product","description":"\u003ch5\u003eDescription\u003c\/h5\u003e\n\u003cp\u003e\u003cspan\u003eOur new \_003_\/\_003_\_003\_00312 \/ A12\u003c\/b\u003e\u003cb\u003e battery\u003c\/b\u003e\u003cspan\u003e isat 2000mAh and designed  power up Black and  \/ FireStorm line of 12_ tools allowing users tomultiple devices off the  battery pack. The HPB12  compatible with the followingand Decker power tool \_003_\/\_003_\_003_\/_\_003_\_\_0035\_003_\_003_\_003_\_003_\/\_003_\_003_\/_5\_003_\_\_003_\_003_\_\_003_\_003_: Ni-CD\u003c\/li\u003e\n\u003cli\u003eVoltage: 12V\u003c\/li\u003e\n\u003cli\u003eAmpHours: 2000mAh\u003c\/li\u003e\n\u003cli\u003eDimensions: 109.75x79.55x62.20mm\u003c\/li\u003e\n\u003c\/ul\u003e\n\u003ch5\u003eVideo\u003c\/h5\u003e\n\u003cp\u003e\u003ciframe=\"\/\/_.._\/_\/_7015\" height=\"315\" width=\"560\"\u003e \u003c\/iframe\u003e\u003c\/p\u003e","published_at":"2017-03-13T03:49:00-04:00","created_at":"2017-03-13T03:49:38-04:00","vendor":"Armani","type":"Party","tags":["Brand_Ladora","Color_Grey","Price_$100-$300","Size_L","Size_M","Size_X","Size_XL"],"price":15000,"price_min":15000,"price_max":28000,"available":true,"price_varies":true,"compare_at_price":null,"compare_at_price_min":0,"compare_at_price_max":0,"compare_at_price_varies":false,"variants":[{"id":31822338881,"title":"M \/ ","1":"_","2":"","3":,"_":"","_":,"":,"":,"":,"":"_ Royal Product - M \/ Grey","public_title":"M \/ Grey","options":["M","Grey"],"price":15000,"weight":0,"compare_at_price":null,"inventory_quantity":-4,"inventory_management":null,"inventory_policy":"deny","barcode":null},{"id":31822338945,"title":"L \/ ","1":"_","2":"","3":,"_":"","_":,"":,"":,"":,"":"_ Royal Product - L \/ Grey","public_title":"L \/ Grey","options":["L","Grey"],"price":18000,"weight":0,"compare_at_price":null,"inventory_quantity":1,"inventory_management":null,"inventory_policy":"deny","barcode":null},{"id":31822339009,"title":"X \/ ","1":"_","2":"","3":,"_":"","_":,"":,"":,"":,"":"_ Royal Product - X \/ Grey","public_title":"X \/ Grey","options":["X","Grey"],"price":25000,"weight":0,"compare_at_price":null,"inventory_quantity":1,"inventory_management":null,"inventory_policy":"deny","barcode":null},{"id":31822339073,"title":"XL \/ ","1":"","2":"","3":,"_":"","_":,"":,"":,"":,"":"_ Royal Product - XL \/ Grey","public_title":"XL \/ Grey","options":["XL","Grey"],"price":28000,"weight":0,"compare_at_price":null,"inventory_quantity":1,"inventory_management":null,"inventory_policy":"deny","barcode":null}],"images":["\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/19.jpg?v=1494838958"],"featured_image":"\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/19.jpg?v=1494838958","options":["Size","Color"],"content":"\u003ch5\u003eDescription\u003c\/h5\u003e\n\u003cp\u003e\u003cspan\u003eOur new \_003_\/\_003_\_003\_00312 \/ A12\u003c\/b\u003e\u003cb\u003e battery\u003c\/b\u003e\u003cspan\u003e isat 2000mAh and designed  power up Black and  \/ FireStorm line of 12_ tools allowing users tomultiple devices off the  battery pack. The HPB12  compatible with the followingand Decker power tool \_003_\/\_003_\_003_\/_\_003_\_\_0035\_003_\_003_\_003_\_003_\/\_003_\_003_\/_5\_003_\_\_003_\_003_\_\_003_\_003_: Ni-CD\u003c\/li\u003e\n\u003cli\u003eVoltage: 12V\u003c\/li\u003e\n\u003cli\u003eAmpHours: 2000mAh\u003c\/li\u003e\n\u003cli\u003eDimensions: 109.75x79.55x62.20mm\u003c\/li\u003e\n\u003c\/ul\u003e\n\u003ch5\u003eVideo\u003c\/h5\u003e\n\u003cp\u003e\u003ciframe=\"\/\/_.._\/_\/_7015\" height=\"315\" width=\"560\"\u003e \u003c\/iframe\u003e\u003c\/p\u003e"} </span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>

                                            <div class="product-content">
                                                <div class="pc-inner">

                                                    <h3 class="noti-title" style="display: none;">You may also like: </h3>

                                                    <h5 class="product-name">
                                                        <a href="collections/biographies-memoirs/products/irene-royal-product.html">Irene Royal Product </a>
                                                    </h5>

                                                    <div class="product-price">

                                                            <span class="price">

                 <span class="money">5150.00 р.</span>

                                                            </span>

                                                    </div>

                                                    <div class="product-review">
                                                        <span class="shopify-product-reviews-badge" data-id="8999719809"></span>
                                                    </div>

                                                    <div class="product-description only-list">
                                                        Descriptionnew HPB12 / A12  is rated at 2000mAhdesigned to power upand Decker /...
                                                    </div>

                                                    <div class="add-cart-button">

                                                        <a href="collections/biographies-memoirs/products/irene-royal-product.html" class="btn-default select-options" title="Выберите параметры"><i class="fa fa-shopping-cart"></i>Выберите параметры </a>

                                                    </div>

                                                </div>
                                            </div>

                                        </div>

                                        <div class="product-wrapper">

                                            <div class="product-head">
                                                <div class="product-image">

                                                    <div class="featured-img">
                                                        <a href="collections/biographies-memoirs/products/magna-elementum-odio.html">
                                                            <img class="featured-image front" src="/images/19_270x.jpg" alt="Kaydex Product Sample" />
                                                            <span class="product-label">

 </span>
                                                        </a>
                                                    </div>

                                                    <div class="product-button">

                                                        <div class="product-wishlist">
                                                            <a class="btn btn-default add-to-wishlist add-product-wishlist" data-handle-product="magna-elementum-odio" href="javascript:void(0);" title="Add to wishlist"><i class="fa fa-heart"></i></a>
                                                        </div>

                                                        <div data-handle="magna-elementum-odio" data-target="#quick-shop-popup" class="quick_shop quick-shop-button hidden-sm hidden-xs" data-toggle="modal" title="Quick View">
                                                            <span class="quick-view-icon"></span>
                                                            <span class="json hide">{"id":8999720833,"title":"Kaydex Product Sample","handle":"magna-elementum-odio","description":"\u003ch5\u003eDescription\u003c\/h5\u003e\n\u003cp\u003e\u003cspan\u003eOur new \_003_\/\_003_\_003\_00312 \/ A12\u003c\/b\u003e\u003cb\u003e battery\u003c\/b\u003e\u003cspan\u003e isat 2000mAh and designed  power up Black and  \/ FireStorm line of 12_ tools allowing users tomultiple devices off the  battery pack. The HPB12  compatible with the followingand Decker power tool \_003_\/\_003_\_003_\/_\_003_\_\_0035\_003_\_003_\_003_\_003_\/\_003_\_003_\/_5\_003_\_\_003_\_003_\_\_003_\_003_: Ni-CD\u003c\/li\u003e\n\u003cli\u003eVoltage: 12V\u003c\/li\u003e\n\u003cli\u003eAmpHours: 2000mAh\u003c\/li\u003e\n\u003cli\u003eDimensions: 109.75x79.55x62.20mm\u003c\/li\u003e\n\u003c\/ul\u003e\n\u003ch5\u003eVideo\u003c\/h5\u003e\n\u003cp\u003e\u003ciframe=\"\/\/_.._\/_\/_7015\" height=\"315\" width=\"560\"\u003e \u003c\/iframe\u003e\u003c\/p\u003e","published_at":"2017-03-13T03:49:00-04:00","created_at":"2017-03-13T03:49:55-04:00","vendor":"Bulgari","type":"Party","tags":["Brand_Accesi","Color_Black","Color_Brown","Price_Above $300","Size_M"],"price":45000,"price_min":45000,"price_max":45000,"available":true,"price_varies":false,"compare_at_price":null,"compare_at_price_min":0,"compare_at_price_max":0,"compare_at_price_varies":false,"variants":[{"id":31822344385,"title":"Default","1":" Title","option2":null,"option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":null,"available":true,"name":"Kaydex Product Sample","public_title":null,"options":["Default Title"],"price":45000,"weight":0,"compare_at_price":null,"inventory_quantity":-21,"inventory_management":null,"inventory_policy":"deny","barcode":""}],"images":["\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/21.jpg?v=1494839044"],"featured_image":"\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/21.jpg?v=1494839044","options":["Title"],"content":"\u003ch5\u003eDescription\u003c\/h5\u003e\n\u003cp\u003e\u003cspan\u003eOur\u003c\/span\u003e\u003cb\u003eHPB12 \/ A12\u003c\/b\u003e\u003cb\u003e battery\u003c\/b\u003e\u003cspan\u003e  rated at 2000mAh andto power up BlackDecker \/ FireStorm line  12V tools allowing users  run multiple devices offsame battery pack. The12 is compatible with the  Black and Decker power  models\u003c\/span\u003e\u003c\/p\u003e\n\u003ch5\u003e\u003cspan\u003eSpecifications\u003c\/span\u003e\u003c\/h5\u003e\n\u003cul\u003e\n\u003cli\u003eChemistry: Ni-CD\u003c\/li\u003e\n\u003cli\u003eVoltage: 12V\u003c\/li\u003e\n\u003cli\u003eAmpHours: 2000mAh\u003c\/li\u003e\n\u003cli\u003eDimensions: 109.75_79.55_62.20\_003_\/\_003_\_\_003_\/\_003_\_\_0035\_003\_003_\/_5\_003_\_\_003\_003_\_003 src=\"\/\/www.youtube.com\/embed\/QZd7015XaTQ\" height=\"315\" width=\"560\"\u003e \u003c\/iframe\u003e\u003c\/p\u003e"} </span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>

                                            <div class="product-content">
                                                <div class="pc-inner">

                                                    <h3 class="noti-title" style="display: none;">You may also like: </h3>

                                                    <h5 class="product-name">
                                                        <a href="collections/biographies-memoirs/products/magna-elementum-odio.html">Kaydex Product Sample </a>
                                                    </h5>

                                                    <div class="product-price">

                                                            <span class="price">

                 <span class="money">5450.00 р.</span>

                                                            </span>

                                                    </div>

                                                    <div class="product-review">
                                                        <span class="shopify-product-reviews-badge" data-id="8999720833"></span>
                                                    </div>

                                                    <div class="product-description only-list">
                                                        Descriptionnew HPB12 / A12  is rated at 2000mAhdesigned to power upand Decker /...
                                                    </div>

                                                    <div class="add-cart-button">

                                                        <form action="/cart/add" method="post" enctype="multipart/form-data">
                                                            <a href="collections/biographies-memoirs/products/magna-elementum-odio.html" class="btn-default add-to-cart" title="Добавить в корзину"><i class="fa fa-shopping-cart"></i>Добавить в корзину </a>
                                                            <select class="hide" name="id">

                                                                <option value="31822344385" />Default Title

                                                            </select>
                                                        </form>

                                                    </div>

                                                </div>
                                            </div>

                                        </div>

                                        <div class="product-wrapper">

                                            <div class="product-head">
                                                <div class="product-image">

                                                    <div class="featured-img">
                                                        <a href="collections/biographies-memoirs/products/kelend-product-sample.html">
                                                            <img class="featured-image front" src="/images/19_270x.jpg" alt="Kelend Metus Sample" />
                                                            <span class="product-label">

 </span>
                                                        </a>
                                                    </div>

                                                    <div class="product-button">

                                                        <div class="product-wishlist">
                                                            <a class="btn btn-default add-to-wishlist add-product-wishlist" data-handle-product="kelend-product-sample" href="javascript:void(0);" title="Add to wishlist"><i class="fa fa-heart"></i></a>
                                                        </div>

                                                        <div data-handle="kelend-product-sample" data-target="#quick-shop-popup" class="quick_shop quick-shop-button hidden-sm hidden-xs" data-toggle="modal" title="Quick View">
                                                            <span class="quick-view-icon"></span>
                                                            <span class="json hide">{"id":8999719937,"title":"Kelend Metus Sample","handle":"kelend-product-sample","description":"\u003ch5\u003eDescription\u003c\/h5\u003e\n\u003cp\u003e\u003cspan\u003eOur new \_003_\/\_003_\_003\_00312 \/ A12\u003c\/b\u003e\u003cb\u003e battery\u003c\/b\u003e\u003cspan\u003e isat 2000mAh and designed  power up Black and  \/ FireStorm line of 12_ tools allowing users tomultiple devices off the  battery pack. The HPB12  compatible with the followingand Decker power tool \_003_\/\_003_\_003_\/_\_003_\_\_0035\_003_\_003_\_003_\_003_\/\_003_\_003_\/_5\_003_\_\_003_\_003_\_\_003_\_003_: Ni-CD\u003c\/li\u003e\n\u003cli\u003eVoltage: 12V\u003c\/li\u003e\n\u003cli\u003eAmpHours: 2000mAh\u003c\/li\u003e\n\u003cli\u003eDimensions: 109.75x79.55x62.20mm\u003c\/li\u003e\n\u003c\/ul\u003e\n\u003ch5\u003eVideo\u003c\/h5\u003e\n\u003cp\u003e\u003ciframe=\"\/\/_.._\/_\/_7015\" height=\"315\" width=\"560\"\u003e \u003c\/iframe\u003e\u003c\/p\u003e","published_at":"2017-03-13T03:49:00-04:00","created_at":"2017-03-13T03:49:41-04:00","vendor":"Donna Karan","type":"Party","tags":["Brand_Bikis","Brand_Godo","Color_Black","Price_Above $300","","","",""],"_":33000,"":33000,"":39000,"":,"_":,"":,"":0,"":0,"":_,"_":[{"":31822339393,"_":"_ \/ Black","option1":"M","option2":"Black","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":null,"available":true,"name":"Kelend Metus Sample - M \/ Black","public_title":"M \/","":["_","_"],"_":33000,"":0,"":,"":-12,"":,"":"","":""},{"":31822339457,"_":"_ \/ Black","option1":"L","option2":"Black","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":null,"available":true,"name":"Kelend Metus Sample - L \/ Black","public_title":"L \/","":["_","_"],"_":35000,"":0,"":,"":-10,"":,"":"","":},{"":31822339521,"_":" \/ Black","option1":"XL","option2":"Black","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":null,"available":true,"name":"Kelend Metus Sample - XL \/ Black","public_title":"XL \/","":["","_"],"_":39000,"":0,"":,"":-12,"":,"":"","":}],"":["\/\/_.._\/_\/_\/1\/1836\/0759\/_\/22._?_=1494839069"],"":"\/\/_.._\/_\/_\/1\/1836\/0759\/_\/22._?_=1494839069","":["","_"],"":"\_0035\_003_\_003_\/_5\_003_\_\_003\_003_\_003_\_003 new \u003c\/span\u003e\u003cb\u003eHPB12 \/ A12\u003c\/b\u003e\u003cb\u003e \_003_\/_\_003_\_003_\_003_ is rated at 2000mAhdesigned to power upand Decker \/ FireStorm  of 12V tools allowingto run multiple devicesthe same battery pack.HPB12 is compatible withfollowing Black and Deckertool models\u003c\/span\u003e\u003c\/p\u003e\n\u003ch5\u003e\u003cspan\u003eSpecifications\u003c\/span\u003e\u003c\/h5\u003e\n\u003cul\u003e\n\u003cli\u003eChemistry: Ni-CD\u003c\/li\u003e\n\u003cli\u003eVoltage: 12V\u003c\/li\u003e\n\u003cli\u003eAmpHours: 2000_\_003_\/\_003_\_\_003_\_003: 109.75x79.55x62.20mm\u003c\/li\u003e\n\u003c\/ul\u003e\n\u003ch5\u003eVideo\u003c\/h5\u003e\n\u003cp\u003e\u003ciframe src=\"\/\/www.youtube.com\/embed\/QZd7015XaTQ\" height=\"315\" width=\"560\"\u003e \_003_\/\_003_\_003_\/_\_003_"} </span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>

                                            <div class="product-content">
                                                <div class="pc-inner">

                                                    <h3 class="noti-title" style="display: none;">You may also like: </h3>

                                                    <h5 class="product-name">
                                                        <a href="collections/biographies-memoirs/products/kelend-product-sample.html">Kelend Metus Sample </a>
                                                    </h5>

                                                    <div class="product-price">

                                                            <span class="price">

                 <span class="money">5330.00 р.</span>

                                                            </span>

                                                    </div>

                                                    <div class="product-review">
                                                        <span class="shopify-product-reviews-badge" data-id="8999719937"></span>
                                                    </div>

                                                    <div class="product-description only-list">
                                                        Descriptionnew HPB12 / A12  is rated at 2000mAhdesigned to power upand Decker /...
                                                    </div>

                                                    <div class="add-cart-button">

                                                        <a href="collections/biographies-memoirs/products/kelend-product-sample.html" class="btn-default select-options" title="Выберите параметры"><i class="fa fa-shopping-cart"></i>Выберите параметры </a>

                                                    </div>

                                                </div>
                                            </div>

                                        </div>

                                        <div class="product-wrapper">

                                            <div class="product-head">
                                                <div class="product-image">

                                                    <div class="featured-img">
                                                        <a href="collections/biographies-memoirs/products/kinair-product-sample.html">
                                                            <img class="featured-image front" src="/images/19_270x.jpg" alt="Kinair Product Sample" />
                                                            <span class="product-label">

 </span>
                                                        </a>
                                                    </div>

                                                    <div class="product-button">

                                                        <div class="product-wishlist">
                                                            <a class="btn btn-default add-to-wishlist add-product-wishlist" data-handle-product="kinair-product-sample" href="javascript:void(0);" title="Add to wishlist"><i class="fa fa-heart"></i></a>
                                                        </div>

                                                        <div data-handle="kinair-product-sample" data-target="#quick-shop-popup" class="quick_shop quick-shop-button hidden-sm hidden-xs" data-toggle="modal" title="Quick View">
                                                            <span class="quick-view-icon"></span>
                                                            <span class="json hide">{"id":8999720193,"title":"Kinair Product Sample","handle":"kinair-product-sample","description":"\u003ch5\u003eDescription\u003c\/h5\u003e\n\u003cp\u003e\u003cspan\u003eOur new \_003_\/\_003_\_003\_00312 \/ A12\u003c\/b\u003e\u003cb\u003e battery\u003c\/b\u003e\u003cspan\u003e isat 2000mAh and designed  power up Black and  \/ FireStorm line of 12_ tools allowing users tomultiple devices off the  battery pack. The HPB12  compatible with the followingand Decker power tool \_003_\/\_003_\_003_\/_\_003_\_\_0035\_003_\_003_\_003_\_003_\/\_003_\_003_\/_5\_003_\_\_003_\_003_\_\_003_\_003_: Ni-CD\u003c\/li\u003e\n\u003cli\u003eVoltage: 12V\u003c\/li\u003e\n\u003cli\u003eAmpHours: 2000mAh\u003c\/li\u003e\n\u003cli\u003eDimensions: 109.75x79.55x62.20mm\u003c\/li\u003e\n\u003c\/ul\u003e\n\u003ch5\u003eVideo\u003c\/h5\u003e\n\u003cp\u003e\u003ciframe=\"\/\/_.._\/_\/_7015\" height=\"315\" width=\"560\"\u003e \u003c\/iframe\u003e\u003c\/p\u003e","published_at":"2017-03-13T03:49:00-04:00","created_at":"2017-03-13T03:49:45-04:00","vendor":"Donna Karan","type":"Sport","tags":["Brand_Accesi","Color_Black","Color_Yellow","Price_Above $300","","",""],"_":32000,"":32000,"":45000,"":,"_":,"":,"":0,"":0,"":_,"_":[{"":31822340609,"_":"_ \/ Black","option1":"M","option2":"Black","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":null,"available":true,"name":"Kinair Product Sample - M \/ Black","public_title":"M \/","":["_","_"],"_":32000,"":0,"":,"":-7,"":,"":"","":},{"":31822340737,"_":"_ \/ Red","option1":"M","option2":"Red","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":null,"available":true,"name":"Kinair Product Sample - M \/ Red","public_title":"M \/","":["_","_"],"_":35000,"":0,"":,"":0,"":,"":"","":},{"":31822340865,"_":"_ \/ Yellow","option1":"M","option2":"Yellow","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":null,"available":true,"name":"Kinair Product Sample - M \/ Yellow","public_title":"M \/ ","":["_",""],"_":38000,"":0,"":,"":0,"":,"":"","":},{"":31822340993,"_":"_ \/ White","option1":"M","option2":"White","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":null,"available":true,"name":"Kinair Product Sample - M \/ White","public_title":"M \/","":["_","_"],"_":45000,"":0,"":,"":1,"":,"":"","":}],"":["\/\/_.._\/_\/_\/1\/1836\/0759\/_\/23._?_=1494839081"],"":"\/\/_.._\/_\/_\/1\/1836\/0759\/_\/23._?_=1494839081","":["","_"],"":"\_0035\_003_\_003_\/_5\_003_\_\_003\_003_\_003_\_003 new \u003c\/span\u003e\u003cb\u003eHPB12 \/ A12\u003c\/b\u003e\u003cb\u003e \_003_\/_\_003_\_003_\_003_ is rated at 2000mAhdesigned to power upand Decker \/ FireStorm  of 12V tools allowingto run multiple devicesthe same battery pack.HPB12 is compatible withfollowing Black and Deckertool models\u003c\/span\u003e\u003c\/p\u003e\n\u003ch5\u003e\u003cspan\u003eSpecifications\u003c\/span\u003e\u003c\/h5\u003e\n\u003cul\u003e\n\u003cli\u003eChemistry: Ni-CD\u003c\/li\u003e\n\u003cli\u003eVoltage: 12V\u003c\/li\u003e\n\u003cli\u003eAmpHours: 2000_\_003_\/\_003_\_\_003_\_003: 109.75x79.55x62.20mm\u003c\/li\u003e\n\u003c\/ul\u003e\n\u003ch5\u003eVideo\u003c\/h5\u003e\n\u003cp\u003e\u003ciframe src=\"\/\/www.youtube.com\/embed\/QZd7015XaTQ\" height=\"315\" width=\"560\"\u003e \_003_\/\_003_\_003_\/_\_003_"} </span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>

                                            <div class="product-content">
                                                <div class="pc-inner">

                                                    <h3 class="noti-title" style="display: none;">You may also like: </h3>

                                                    <h5 class="product-name">
                                                        <a href="collections/biographies-memoirs/products/kinair-product-sample.html">Kinair Product Sample </a>
                                                    </h5>

                                                    <div class="product-price">

                                                            <span class="price">

                 <span class="money">1320.00 р.</span>

                                                            </span>

                                                    </div>

                                                    <div class="product-review">
                                                        <span class="shopify-product-reviews-badge" data-id="8999720193"></span>
                                                    </div>

                                                    <div class="product-description only-list">
                                                        Descriptionnew HPB12 / A12  is rated at 2000mAhdesigned to power upand Decker /...
                                                    </div>

                                                    <div class="add-cart-button">

                                                        <a href="collections/biographies-memoirs/products/kinair-product-sample.html" class="btn-default select-options" title="Выберите параметры"><i class="fa fa-shopping-cart"></i>Выберите параметры </a>

                                                    </div>

                                                </div>
                                            </div>

                                        </div>

                                        <div class="product-wrapper">

                                            <div class="product-head">
                                                <div class="product-image">

                                                    <div class="featured-img">
                                                        <a href="collections/biographies-memoirs/products/sedcus-faucibus-sullamcorper.html">
                                                            <img class="featured-image front" src="/images/19_270x.jpg" alt="Lexiit Product Sample" />
                                                            <span class="product-label">

 </span>
                                                        </a>
                                                    </div>

                                                    <div class="product-button">

                                                        <div class="product-wishlist">
                                                            <a class="btn btn-default add-to-wishlist add-product-wishlist" data-handle-product="sedcus-faucibus-sullamcorper" href="javascript:void(0);" title="Add to wishlist"><i class="fa fa-heart"></i></a>
                                                        </div>

                                                        <div data-handle="sedcus-faucibus-sullamcorper" data-target="#quick-shop-popup" class="quick_shop quick-shop-button hidden-sm hidden-xs" data-toggle="modal" title="Quick View">
                                                            <span class="quick-view-icon"></span>
                                                            <span class="json hide">{"id":8999721281,"title":"Lexiit Product Sample","handle":"sedcus-faucibus-sullamcorper","description":"\u003ch5\u003eDescription\u003c\/h5\u003e\n\u003cp\u003e\u003cspan\u003eOur new \_003_\/\_003_\_003\_00312 \/ A12\u003c\/b\u003e\u003cb\u003e battery\u003c\/b\u003e\u003cspan\u003e isat 2000mAh and designed  power up Black and  \/ FireStorm line of 12_ tools allowing users tomultiple devices off the  battery pack. The HPB12  compatible with the followingand Decker power tool \_003_\/\_003_\_003_\/_\_003_\_\_0035\_003_\_003_\_003_\_003_\/\_003_\_003_\/_5\_003_\_\_003_\_003_\_\_003_\_003_: Ni-CD\u003c\/li\u003e\n\u003cli\u003eVoltage: 12V\u003c\/li\u003e\n\u003cli\u003eAmpHours: 2000mAh\u003c\/li\u003e\n\u003cli\u003eDimensions: 109.75x79.55x62.20mm\u003c\/li\u003e\n\u003c\/ul\u003e\n\u003ch5\u003eVideo\u003c\/h5\u003e\n\u003cp\u003e\u003ciframe=\"\/\/_.._\/_\/_7015\" height=\"315\" width=\"560\"\u003e \u003c\/iframe\u003e\u003c\/p\u003e","published_at":"2017-03-13T03:50:00-04:00","created_at":"2017-03-13T03:50:02-04:00","vendor":"Christian Dior","type":"Sport","tags":["Brand_Elle","Color_Red","Price_$100-$300"],"price":20000,"price_min":20000,"price_max":20000,"available":true,"price_varies":false,"compare_at_price":null,"compare_at_price_min":0,"compare_at_price_max":0,"compare_at_price_varies":false,"variants":[{"id":31822351873,"title":"Default","1":" Title","option2":null,"option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":null,"available":true,"name":"Lexiit Product Sample","public_title":null,"options":["Default Title"],"price":20000,"weight":0,"compare_at_price":null,"inventory_quantity":-4,"inventory_management":null,"inventory_policy":"deny","barcode":""}],"images":["\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/27.jpg?v=1494839222"],"featured_image":"\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/27.jpg?v=1494839222","options":["Title"],"content":"\u003ch5\u003eDescription\u003c\/h5\u003e\n\u003cp\u003e\u003cspan\u003eOur\u003c\/span\u003e\u003cb\u003eHPB12 \/ A12\u003c\/b\u003e\u003cb\u003e battery\u003c\/b\u003e\u003cspan\u003e  rated at 2000mAh andto power up BlackDecker \/ FireStorm line  12V tools allowing users  run multiple devices offsame battery pack. The12 is compatible with the  Black and Decker power  models\u003c\/span\u003e\u003c\/p\u003e\n\u003ch5\u003e\u003cspan\u003eSpecifications\u003c\/span\u003e\u003c\/h5\u003e\n\u003cul\u003e\n\u003cli\u003eChemistry: Ni-CD\u003c\/li\u003e\n\u003cli\u003eVoltage: 12V\u003c\/li\u003e\n\u003cli\u003eAmpHours: 2000mAh\u003c\/li\u003e\n\u003cli\u003eDimensions: 109.75_79.55_62.20\_003_\/\_003_\_\_003_\/\_003_\_\_0035\_003\_003_\/_5\_003_\_\_003\_003_\_003 src=\"\/\/www.youtube.com\/embed\/QZd7015XaTQ\" height=\"315\" width=\"560\"\u003e \u003c\/iframe\u003e\u003c\/p\u003e"} </span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>

                                            <div class="product-content">
                                                <div class="pc-inner">

                                                    <h3 class="noti-title" style="display: none;">You may also like: </h3>

                                                    <h5 class="product-name">
                                                        <a href="collections/biographies-memoirs/products/sedcus-faucibus-sullamcorper.html">Lexiit Product Sample </a>
                                                    </h5>

                                                    <div class="product-price">

                                                            <span class="price">

                 <span class="money">1200.00 р.</span>

                                                            </span>

                                                    </div>

                                                    <div class="product-review">
                                                        <span class="shopify-product-reviews-badge" data-id="8999721281"></span>
                                                    </div>

                                                    <div class="product-description only-list">
                                                        Descriptionnew HPB12 / A12  is rated at 2000mAhdesigned to power upand Decker /...
                                                    </div>

                                                    <div class="add-cart-button">

                                                        <form action="/cart/add" method="post" enctype="multipart/form-data">
                                                            <a href="collections/biographies-memoirs/products/sedcus-faucibus-sullamcorper.html" class="btn-default add-to-cart" title="Добавить в корзину"><i class="fa fa-shopping-cart"></i>Добавить в корзину </a>
                                                            <select class="hide" name="id">

                                                                <option value="31822351873" />Default Title

                                                            </select>
                                                        </form>

                                                    </div>

                                                </div>
                                            </div>

                                        </div>

                                        <div class="product-wrapper">

                                            <div class="product-head">
                                                <div class="product-image">

                                                    <div class="featured-img">
                                                        <a href="collections/biographies-memoirs/products/lexiwarm-product-sample.html">
                                                            <img class="featured-image front" src="/images/19_270x.jpg" alt="Lexiwarm Product Sample" />
                                                            <span class="product-label">

 </span>
                                                        </a>
                                                    </div>

                                                    <div class="product-button">

                                                        <div class="product-wishlist">
                                                            <a class="btn btn-default add-to-wishlist add-product-wishlist" data-handle-product="lexiwarm-product-sample" href="javascript:void(0);" title="Add to wishlist"><i class="fa fa-heart"></i></a>
                                                        </div>

                                                        <div data-handle="lexiwarm-product-sample" data-target="#quick-shop-popup" class="quick_shop quick-shop-button hidden-sm hidden-xs" data-toggle="modal" title="Quick View">
                                                            <span class="quick-view-icon"></span>
                                                            <span class="json hide">{"id":8999720769,"title":"Lexiwarm Product Sample","handle":"lexiwarm-product-sample","description":"\u003ch5\u003eDescription\u003c\/h5\u003e\n\u003cp\u003e\u003cspan\u003eOur new \_003_\/\_003_\_003\_00312 \/ A12\u003c\/b\u003e\u003cb\u003e battery\u003c\/b\u003e\u003cspan\u003e isat 2000mAh and designed  power up Black and  \/ FireStorm line of 12_ tools allowing users tomultiple devices off the  battery pack. The HPB12  compatible with the followingand Decker power tool \_003_\/\_003_\_003_\/_\_003_\_\_0035\_003_\_003_\_003_\_003_\/\_003_\_003_\/_5\_003_\_\_003_\_003_\_\_003_\_003_: Ni-CD\u003c\/li\u003e\n\u003cli\u003eVoltage: 12V\u003c\/li\u003e\n\u003cli\u003eAmpHours: 2000mAh\u003c\/li\u003e\n\u003cli\u003eDimensions: 109.75x79.55x62.20mm\u003c\/li\u003e\n\u003c\/ul\u003e\n\u003ch5\u003eVideo\u003c\/h5\u003e\n\u003cp\u003e\u003ciframe=\"\/\/_.._\/_\/_7015\" height=\"315\" width=\"560\"\u003e \u003c\/iframe\u003e\u003c\/p\u003e","published_at":"2017-03-13T03:49:00-04:00","created_at":"2017-03-13T03:49:54-04:00","vendor":"Christian Dior","type":"Fashion","tags":["Brand_Elle","Color_Black","Color_Blue","Color_Brown","Color_Pink","Color_White","Price_Under $100",""],"_":3500,"":3500,"":4000,"":,"_":,"":,"":0,"":0,"":_,"_":[{"":31822342785,"_":"_ \/ White","option1":"L","option2":"White","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":null,"available":true,"name":"Lexiwarm Product Sample - L \/ White","public_title":"L \/","":["_","_"],"_":3500,"":0,"":,"":-6,"":,"":"","":},{"":31822342849,"_":"_ \/ Brown","option1":"L","option2":"Brown","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":null,"available":true,"name":"Lexiwarm Product Sample - L \/ Brown","public_title":"L \/","":["_","_"],"_":4000,"":0,"":,"":1,"":,"":"","":},{"":31822342913,"_":"_ \/ Blue","option1":"L","option2":"Blue","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":null,"available":true,"name":"Lexiwarm Product Sample - L \/ Blue","public_title":"L \/ ","":["_",""],"_":4000,"":0,"":,"":1,"":,"":"","":},{"":31822342977,"_":"_ \/ Black","option1":"L","option2":"Black","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":null,"available":true,"name":"Lexiwarm Product Sample - L \/ Black","public_title":"L \/","":["_","_"],"_":4000,"":0,"":,"":1,"":,"":"","":}],"":["\/\/_.._\/_\/_\/1\/1836\/0759\/_\/26._?_=1494839214"],"":"\/\/_.._\/_\/_\/1\/1836\/0759\/_\/26._?_=1494839214","":["","_"],"":"\_0035\_003_\_003_\/_5\_003_\_\_003\_003_\_003_\_003 new \u003c\/span\u003e\u003cb\u003eHPB12 \/ A12\u003c\/b\u003e\u003cb\u003e \_003_\/_\_003_\_003_\_003_ is rated at 2000mAhdesigned to power upand Decker \/ FireStorm  of 12V tools allowingto run multiple devicesthe same battery pack.HPB12 is compatible withfollowing Black and Deckertool models\u003c\/span\u003e\u003c\/p\u003e\n\u003ch5\u003e\u003cspan\u003eSpecifications\u003c\/span\u003e\u003c\/h5\u003e\n\u003cul\u003e\n\u003cli\u003eChemistry: Ni-CD\u003c\/li\u003e\n\u003cli\u003eVoltage: 12V\u003c\/li\u003e\n\u003cli\u003eAmpHours: 2000_\_003_\/\_003_\_\_003_\_003: 109.75x79.55x62.20mm\u003c\/li\u003e\n\u003c\/ul\u003e\n\u003ch5\u003eVideo\u003c\/h5\u003e\n\u003cp\u003e\u003ciframe src=\"\/\/www.youtube.com\/embed\/QZd7015XaTQ\" height=\"315\" width=\"560\"\u003e \_003_\/\_003_\_003_\/_\_003_"} </span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>

                                            <div class="product-content">
                                                <div class="pc-inner">

                                                    <h3 class="noti-title" style="display: none;">You may also like: </h3>

                                                    <h5 class="product-name">
                                                        <a href="collections/biographies-memoirs/products/lexiwarm-product-sample.html">Lexiwarm Product Sample </a>
                                                    </h5>

                                                    <div class="product-price">

                                                            <span class="price">

                 <span class="money">135.00 р.</span>

                                                            </span>

                                                    </div>

                                                    <div class="product-review">
                                                        <span class="shopify-product-reviews-badge" data-id="8999720769"></span>
                                                    </div>

                                                    <div class="product-description only-list">
                                                        Descriptionnew HPB12 / A12  is rated at 2000mAhdesigned to power upand Decker /...
                                                    </div>

                                                    <div class="add-cart-button">

                                                        <a href="collections/biographies-memoirs/products/lexiwarm-product-sample.html" class="btn-default select-options" title="Выберите параметры"><i class="fa fa-shopping-cart"></i>Выберите параметры </a>

                                                    </div>

                                                </div>
                                            </div>

                                        </div>

                                        <div class="product-wrapper">

                                            <div class="product-head">
                                                <div class="product-image">

                                                    <div class="featured-img">
                                                        <a href="collections/biographies-memoirs/products/soltone-product-sample.html">
                                                            <img class="featured-image front" src="/images/19_270x.jpg" alt="Soltone Product Sample" />
                                                            <span class="product-label">

 </span>
                                                        </a>
                                                    </div>

                                                    <div class="product-button">

                                                        <div class="product-wishlist">
                                                            <a class="btn btn-default add-to-wishlist add-product-wishlist" data-handle-product="soltone-product-sample" href="javascript:void(0);" title="Add to wishlist"><i class="fa fa-heart"></i></a>
                                                        </div>

                                                        <div data-handle="soltone-product-sample" data-target="#quick-shop-popup" class="quick_shop quick-shop-button hidden-sm hidden-xs" data-toggle="modal" title="Quick View">
                                                            <span class="quick-view-icon"></span>
                                                            <span class="json hide">{"id":8999721409,"title":"Soltone Product Sample","handle":"soltone-product-sample","description":"\u003ch5\u003eDescription\u003c\/h5\u003e\n\u003cp\u003e\u003cspan\u003eOur new \_003_\/\_003_\_003\_00312 \/ A12\u003c\/b\u003e\u003cb\u003e battery\u003c\/b\u003e\u003cspan\u003e isat 2000mAh and designed  power up Black and  \/ FireStorm line of 12_ tools allowing users tomultiple devices off the  battery pack. The HPB12  compatible with the followingand Decker power tool \_003_\/\_003_\_003_\/_\_003_\_\_0035\_003_\_003_\_003_\_003_\/\_003_\_003_\/_5\_003_\_\_003_\_003_\_\_003_\_003_: Ni-CD\u003c\/li\u003e\n\u003cli\u003eVoltage: 12V\u003c\/li\u003e\n\u003cli\u003eAmpHours: 2000mAh\u003c\/li\u003e\n\u003cli\u003eDimensions: 109.75x79.55x62.20mm\u003c\/li\u003e\n\u003c\/ul\u003e\n\u003ch5\u003eVideo\u003c\/h5\u003e\n\u003cp\u003e\u003ciframe=\"\/\/_.._\/_\/_7015\" height=\"315\" width=\"560\"\u003e \u003c\/iframe\u003e\u003c\/p\u003e","published_at":"2017-03-13T03:50:00-04:00","created_at":"2017-03-13T03:50:02-04:00","vendor":"Armani","type":"Fashion","tags":["Brand_Ladora","Color_Blue","Price_$100-$300","Size_XL"],"price":28000,"price_min":28000,"price_max":28000,"available":true,"price_varies":false,"compare_at_price":null,"compare_at_price_min":0,"compare_at_price_max":0,"compare_at_price_varies":false,"variants":[{"id":31822352961,"title":"Default Title","option1":"Default","2":,"3":,"_":"","_":,"":,"":,"":,"":" Product Sample","public_title":null,"options":["Default Title"],"price":28000,"weight":0,"compare_at_price":null,"inventory_quantity":0,"inventory_management":null,"inventory_policy":"deny","barcode":""}],"images":["\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/28.jpg?v=1494839416"],"featured_image":"\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/28.jpg?v=1494839416","options":["Title"],"content":"\u003ch5\u003eDescription\u003c\/h5\u003e\n\u003cp\u003e\u003cspan\u003eOur new \_003_\/\_003_\_003\_00312 \/ A12\u003c\/b\u003e\u003cb\u003e battery\u003c\/b\u003e\u003cspan\u003e isat 2000mAh and designed  power up Black and  \/ FireStorm line of 12_ tools allowing users tomultiple devices off the  battery pack. The HPB12  compatible with the followingand Decker power tool \_003_\/\_003_\_003_\/_\_003_\_\_0035\_003_\_003_\_003_\_003_\/\_003_\_003_\/_5\_003_\_\_003_\_003_\_\_003_\_003_: Ni-CD\u003c\/li\u003e\n\u003cli\u003eVoltage: 12V\u003c\/li\u003e\n\u003cli\u003eAmpHours: 2000mAh\u003c\/li\u003e\n\u003cli\u003eDimensions: 109.75x79.55x62.20mm\u003c\/li\u003e\n\u003c\/ul\u003e\n\u003ch5\u003eVideo\u003c\/h5\u003e\n\u003cp\u003e\u003ciframe=\"\/\/_.._\/_\/_7015\" height=\"315\" width=\"560\"\u003e \u003c\/iframe\u003e\u003c\/p\u003e"} </span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>

                                            <div class="product-content">
                                                <div class="pc-inner">

                                                    <h3 class="noti-title" style="display: none;">You may also like: </h3>

                                                    <h5 class="product-name">
                                                        <a href="collections/biographies-memoirs/products/soltone-product-sample.html">Soltone Product Sample </a>
                                                    </h5>

                                                    <div class="product-price">

                                                            <span class="price">

                 <span class="money">1280.00 р.</span>

                                                            </span>

                                                    </div>

                                                    <div class="product-review">
                                                        <span class="shopify-product-reviews-badge" data-id="8999721409"></span>
                                                    </div>

                                                    <div class="product-description only-list">
                                                        Descriptionnew HPB12 / A12  is rated at 2000mAhdesigned to power upand Decker /...
                                                    </div>

                                                    <div class="add-cart-button">

                                                        <form action="/cart/add" method="post" enctype="multipart/form-data">
                                                            <a href="collections/biographies-memoirs/products/soltone-product-sample.html" class="btn-default add-to-cart" title="Добавить в корзину"><i class="fa fa-shopping-cart"></i>Добавить в корзину </a>
                                                            <select class="hide" name="id">

                                                                <option value="31822352961" />Default Title

                                                            </select>
                                                        </form>

                                                    </div>

                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <script>
                                        jQuery(document).ready(function($) {

                                            jQuery(".product-list-1489575888904").length && jQuery('.product-list-1489575888904').owlCarousel({
                                                nav: true,
                                                dots: false,
                                                items: 4,
                                                margin: 30,
                                                responsive: {
                                                    0: {
                                                        items: 1
                                                    },
                                                    320: {
                                                        items: 2
                                                    },
                                                    768: {
                                                        items: 4
                                                    },
                                                    992: {
                                                        items: 4
                                                    },
                                                    1200: {
                                                        items: 4
                                                    }
                                                },
                                                navText: ['<span class="button-prev"></span>', '<span class="button-next"></span>']
                                            });

                                        });
                                    </script>

                                </div>
                            </div>

                        </div>
                        <div id="shopify-section-1494823259340" class="shopify-section">
                            <div class="section-separator section-separator-1494823259340">
                                <div class="separator separator-1494823259340">
                                    <div class="spacing" style="margin-bottom: 75px">
                                        <style type="text/css">
                                            @media (max-width: 767px) {
                                                .spacing {
                                                    margin-bottom: 40px !important;
                                                }
                                            }
                                        </style>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div id="shopify-section-1489575914326" class="shopify-section">
                            <div class="home-special-products">
                                <div class="special-products-list" style="color: #ffffff;">
                                    <div class="swiper-container-special">

                                        <div class="swiper-wrapper">

                                            <div class="special-product-item swiper-slide" style="background-image:url(/images/1_5.jpg);">

                                                <div class="special-product-wrapper">
                                                    <div class="product-image">
                                                        <a href="products/black-fashion-zapda-shoes.html">
                                                            <img class="featured-image" src="/images/img-product-1_225x.jpg" alt="Digital Download Product Example" />
                                                        </a>
                                                    </div>

                                                    <div class="product-content">
                                                        <div class="pc-inner">

                                                            <h3><a style="color: #ffffff;" href="products/black-fashion-zapda-shoes.html">Digital Download Product Example </a></h3>

                                                            <div class="product-price-review">

                                                                <div class="product-price" style="color: #ffffff;">

                                                                        <span class="price" style="color: #ffffff;">

                   <span class="money">900.00 р. </span>

                                                                        </span>

                                                                </div>

                                                                <div class="product-review" style="color: #ffffff;">
                                                                    <span class="shopify-product-reviews-badge" data-id="8999716097"></span>
                                                                </div>

                                                            </div>

                                                            <div class="product-author" style="color: #ffffff;"><span>Author: </span>Armani </div>

                                                            <div class="view-detail" style="color: #ffffff;">
                                                                <a href="products/black-fashion-zapda-shoes.html" class="btn btn-primary">Посмотреть подробности </a>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>

                                            </div>

                                            <div class="special-product-item swiper-slide" style="background-image:url(/images/background_1170x.jpg);">

                                                <div class="special-product-wrapper">
                                                    <div class="product-image">
                                                        <a href="products/magna-elementum-odio.html">
                                                            <img class="featured-image" src="/images/lean-in_sheryl-sandberg_cover.jpg" alt="Kaydex Product Sample" />
                                                        </a>
                                                    </div>

                                                    <div class="product-content">
                                                        <div class="pc-inner">

                                                            <h3><a style="color: #ffffff;" href="products/magna-elementum-odio.html">Kaydex Product Sample </a></h3>

                                                            <div class="product-price-review">

                                                                <div class="product-price" style="color: #ffffff;">

                                                                        <span class="price" style="color: #ffffff;">

                   <span class="money">5450.00 р.</span>

                                                                        </span>

                                                                </div>

                                                                <div class="product-review" style="color: #ffffff;">
                                                                    <span class="shopify-product-reviews-badge" data-id="8999720833"></span>
                                                                </div>

                                                            </div>

                                                            <div class="product-author" style="color: #ffffff;"><span>Author: </span>Bulgari </div>

                                                            <div class="view-detail" style="color: #ffffff;">
                                                                <a href="products/magna-elementum-odio.html" class="btn btn-primary">Посмотреть подробности </a>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>

                                            </div>

                                            <div class="special-product-item swiper-slide" style="background-image:url(/images/1-3.jpg);">

                                                <div class="special-product-wrapper">
                                                    <div class="product-image">
                                                        <a href="products/coneco-product-sample.html">
                                                            <img class="featured-image" src="/images/coverc_225x.jpg" alt="Coneco Product Sample" />
                                                        </a>
                                                    </div>

                                                    <div class="product-content">
                                                        <div class="pc-inner">

                                                            <h3><a style="color: #ffffff;" href="products/coneco-product-sample.html">Coneco Product Sample </a></h3>

                                                            <div class="product-price-review">

                                                                <div class="product-price" style="color: #ffffff;">

                                                                        <span class="price" style="color: #ffffff;">

                   <span class="money">310.00 р.</span>

                                                                        </span>

                                                                </div>

                                                                <div class="product-review" style="color: #ffffff;">
                                                                    <span class="shopify-product-reviews-badge" data-id="8999716417"></span>
                                                                </div>

                                                            </div>

                                                            <div class="product-author" style="color: #ffffff;"><span>Author: </span>Christian Dior </div>

                                                            <div class="view-detail" style="color: #ffffff;">
                                                                <a href="products/coneco-product-sample.html" class="btn btn-primary">Посмотреть подробности </a>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="swiper-button-next swiper-button-white"></div>
                                        <div class="swiper-button-prev swiper-button-white"></div>

                                    </div>
                                </div>
                            </div>

                            <style style="text/css">
                                .special-product-item .spr-icon.spr-icon-star-empty,
                                .special-product-item .spr-icon.spr-icon-star-half-alt {
                                color: #ffffff;
                                }
                            </style>

                            <script>
                            jQuery(document).ready(function($) {
                            var swiper = new Swiper('.swiper-container-special', {
                                loop: true,
                                nextButton: '.swiper-button-next',
                                prevButton: '.swiper-button-prev',
                                grabCursor: true,
                                centeredSlides: true,
                                slidesPerView: 'auto'
                            });
                            })
                            </script>

                              </div>
                                <div id="shopify-section-1494823324309" class="shopify-section">
                                                                                               <div class="section-separator section-separator-1494823324309">
                                                                                                                                                             <div class="separator separator-1494823324309">
                                                                                                                                                                                                           <div class="spacing" style="margin-bottom: 75px">
                                                                                                                                                                                                                                                           <style type="text/css">
                            @media (max-width: 767px) {
                                .spacing {
                                    margin-bottom: 40px !important;
                                }
                            }
                            </style>
                        </div>
                    </div>

                </div>

            </div>
            <div id="shopify-section-1489645398613" class="shopify-section">

                <div class="home-product style-2">
                    <div class="container">

                        <div class="title-wrapper">
                            <h3>ОГРАНИЧЕННОЕ ПО ВРЕМЕНИ ПРЕДЛОЖЕНИЯ</h3>

                            <div class="wrapper-countdown">
                                <div class="countdown_section"></div>
                            </div>

                            <script type="text/javascript">
                                jQuery(document).ready(function($) {

                                    var currentDate = new Date();
                                    var dueDate = new Date(2018, 12 - 1, 1);
                                    if (currentDate < dueDate) {
                                        $('.countdown_section').countdown({
                                            until: dueDate,
                                            format: 'DHMS'
                                        });
                                    }
                                })
                            </script>

                        </div>

                        <div class="product-list product-list-1489645398613">
                            <div class="row">

                                <div class="product-grid-item number-6">
                                    <div class="product-wrapper">

                                        <div class="product-head">
                                            <div class="product-image">

                                                <div class="featured-img">
                                                    <a href="collections/sci-fi-fantasy/products/donkix-product-sample.html">
                                                        <img class="featured-image front" src="/images/06_270x.jpg" alt="Donkix Product Sample" />
                                                        <span class="product-label">

 </span>
                                                    </a>
                                                </div>

                                                <div class="product-button">

                                                    <div class="product-wishlist">
                                                        <a class="btn btn-default add-to-wishlist add-product-wishlist" data-handle-product="donkix-product-sample" href="javascript:void(0);" title="Add to wishlist"><i class="fa fa-heart"></i></a>
                                                    </div>

                                                    <div data-handle="donkix-product-sample" data-target="#quick-shop-popup" class="quick_shop quick-shop-button hidden-sm hidden-xs" data-toggle="modal" title="Quick View">
                                                        <span class="quick-view-icon"></span>
                                                        <span class="json hide">{"id":8999717185,"title":"Donkix Product Sample","handle":"donkix-product-sample","description":"\u003ch5\u003eDescription\u003c\/h5\u003e\n\u003cp\u003e\u003cspan\u003eOur new \_003_\/\_003_\_003\_00312 \/ A12\u003c\/b\u003e\u003cb\u003e battery\u003c\/b\u003e\u003cspan\u003e isat 2000mAh and designed  power up Black and  \/ FireStorm line of 12_ tools allowing users tomultiple devices off the  battery pack. The HPB12  compatible with the followingand Decker power tool \_003_\/\_003_\_003_\/_\_003_\_\_0035\_003_\_003_\_003_\_003_\/\_003_\_003_\/_5\_003_\_\_003_\_003_\_\_003_\_003_: Ni-CD\u003c\/li\u003e\n\u003cli\u003eVoltage: 12V\u003c\/li\u003e\n\u003cli\u003eAmpHours: 2000mAh\u003c\/li\u003e\n\u003cli\u003eDimensions: 109.75x79.55x62.20mm\u003c\/li\u003e\n\u003c\/ul\u003e\n\u003ch5\u003eVideo\u003c\/h5\u003e\n\u003cp\u003e\u003ciframe=\"\/\/_.._\/_\/_7015\" height=\"315\" width=\"560\"\u003e \u003c\/iframe\u003e\u003c\/p\u003e","published_at":"2017-03-13T03:48:00-04:00","created_at":"2017-03-13T03:48:59-04:00","vendor":"Armani","type":"Modern","tags":["Color_Red","Price_Under $100","Size_L","Size_M"],"price":6000,"price_min":6000,"price_max":6500,"available":true,"price_varies":true,"compare_at_price":null,"compare_at_price_min":0,"compare_at_price_max":0,"compare_at_price_varies":false,"variants":[{"id":31822306113,"title":"M \/ Red","option1":"M","option2":"Red","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":{"id":22042674497,"product_id":8999717185,"position":1,"created_at":"2017-05-15T04:34:37-04:00","updated_at":"2017-05-15T04:34:37-04:00","alt":null,"width":724,"height":1020,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/06.jpg?v=1494837277","variant_ids":[31822306113]},"available":true,"name":"Donkix Product Sample -\/ Red","public_title":"M \/ Red","options":["M","Red"],"price":6000,"weight":0,"compare_at_price":null,"inventory_quantity":-1,"inventory_management":null,"inventory_policy":"deny","barcode":""},{"id":31822306241,"title":"L \/ Red","option1":"L","option2":"Red","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":{"id":22042674881,"product_id":8999717185,"position":2,"created_at":"2017-05-15T04:34:39-04:00","updated_at":"2017-05-15T04:34:39-04:00","alt":null,"width":724,"height":1020,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/07.jpg?v=1494837279","variant_ids":[31822306241]},"available":true,"name":"Donkix Product Sample -\/ Red","public_title":"L \/ Red","options":["L","Red"],"price":6500,"weight":0,"compare_at_price":null,"inventory_quantity":1,"inventory_management":null,"inventory_policy":"deny","barcode":""}],"images":["\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/06.jpg?v=1494837277","\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/07.jpg?v=1494837279"],"featured_image":"\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/06.jpg?v=1494837277","options":["Size","Color"],"content":"\u003ch5\u003eDescription\u003c\/h5\u003e\n\u003cp\u003e\u003cspan\u003eOur\u003c\/span\u003e\u003cb\u003eHPB12 \/ A12\u003c\/b\u003e\u003cb\u003e battery\u003c\/b\u003e\u003cspan\u003e  rated at 2000mAh andto power up BlackDecker \/ FireStorm line  12V tools allowing users  run multiple devices offsame battery pack. The12 is compatible with the  Black and Decker power  models\u003c\/span\u003e\u003c\/p\u003e\n\u003ch5\u003e\u003cspan\u003eSpecifications\u003c\/span\u003e\u003c\/h5\u003e\n\u003cul\u003e\n\u003cli\u003eChemistry: Ni-CD\u003c\/li\u003e\n\u003cli\u003eVoltage: 12V\u003c\/li\u003e\n\u003cli\u003eAmpHours: 2000mAh\u003c\/li\u003e\n\u003cli\u003eDimensions: 109.75_79.55_62.20\_003_\/\_003_\_\_003_\/\_003_\_\_0035\_003\_003_\/_5\_003_\_\_003\_003_\_003 src=\"\/\/www.youtube.com\/embed\/QZd7015XaTQ\" height=\"315\" width=\"560\"\u003e \u003c\/iframe\u003e\u003c\/p\u003e"} </span>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>

                                        <div class="product-content">
                                            <div class="pc-inner">

                                                <h3 class="noti-title" style="display: none;">You may also like: </h3>

                                                <h5 class="product-name">
                                                    <a href="collections/sci-fi-fantasy/products/donkix-product-sample.html">Donkix Product Sample </a>
                                                </h5>

                                                <div class="product-price">

                                                                    <span class="price">

                 <span class="money">$60.00 </span>

                                                                    </span>

                                                </div>

                                                <div class="product-review">
                                                    <span class="shopify-product-reviews-badge" data-id="8999717185"></span>
                                                </div>

                                                <div class="product-description only-list">
                                                    Descriptionnew HPB12 / A12  is rated at 2000mAhdesigned to power upand Decker /...
                                                </div>

                                                <div class="add-cart-button">

                                                    <a href="collections/sci-fi-fantasy/products/donkix-product-sample.html" class="btn-default select-options" title="Выберите параметры"><i class="fa fa-shopping-cart"></i>Выберите параметры </a>

                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="product-grid-item number-6">
                                    <div class="product-wrapper">

                                        <div class="product-head">
                                            <div class="product-image">

                                                <div class="featured-img">
                                                    <a href="collections/sci-fi-fantasy/products/faxtex-product-sample.html">
                                                        <img class="featured-image front" src="/images/07_8_270x.jpg" alt="Faxtex Product Sample" />
                                                        <span class="product-label">

       <span class="label-sale">

         <span class="sale-text">32% Off </span>
                                                                        </span>

                                                                        </span>
                                                    </a>
                                                </div>

                                                <div class="product-button">

                                                    <div class="product-wishlist">
                                                        <a class="btn btn-default add-to-wishlist add-product-wishlist" data-handle-product="faxtex-product-sample" href="javascript:void(0);" title="Add to wishlist"><i class="fa fa-heart"></i></a>
                                                    </div>

                                                    <div data-handle="faxtex-product-sample" data-target="#quick-shop-popup" class="quick_shop quick-shop-button hidden-sm hidden-xs" data-toggle="modal" title="Quick View">
                                                        <span class="quick-view-icon"></span>
                                                        <span class="json hide">{"id":8999717441,"title":"Faxtex Product Sample","handle":"faxtex-product-sample","description":"\u003ch5\u003eDescription\u003c\/h5\u003e\n\u003cp\u003e\u003cspan\u003eOur new \_003_\/\_003_\_003\_00312 \/ A12\u003c\/b\u003e\u003cb\u003e battery\u003c\/b\u003e\u003cspan\u003e isat 2000mAh and designed  power up Black and  \/ FireStorm line of 12_ tools allowing users tomultiple devices off the  battery pack. The HPB12  compatible with the followingand Decker power tool \_003_\/\_003_\_003_\/_\_003_\_\_0035\_003_\_003_\_003_\_003_\/\_003_\_003_\/_5\_003_\_\_003_\_003_\_\_003_\_003_: Ni-CD\u003c\/li\u003e\n\u003cli\u003eVoltage: 12V\u003c\/li\u003e\n\u003cli\u003eAmpHours: 2000mAh\u003c\/li\u003e\n\u003cli\u003eDimensions: 109.75x79.55x62.20mm\u003c\/li\u003e\n\u003c\/ul\u003e\n\u003ch5\u003eVideo\u003c\/h5\u003e\n\u003cp\u003e\u003ciframe=\"\/\/_.._\/_\/_7015\" height=\"315\" width=\"560\"\u003e \u003c\/iframe\u003e\u003c\/p\u003e","published_at":"2017-03-13T03:49:00-04:00","created_at":"2017-03-13T03:49:02-04:00","vendor":"Bulgari","type":"Modern","tags":["Color_Blue","Price_$100-$300","Size_L","Size_M","Size_X","Size_XL"],"price":11000,"price_min":11000,"price_max":12000,"available":true,"price_varies":true,"compare_at_price":16000,"compare_at_price_min":16000,"compare_at_price_max":16000,"compare_at_price_varies":false,"variants":[{"id":31822308225,"title":"M \/ ","1":"_","2":"","3":,"_":"4827521","_":,"":,"":,"":,"":" Product Sample - M \/ Blue","public_title":"M \/ Blue","options":["M","Blue"],"price":11000,"weight":0,"compare_at_price":16000,"inventory_quantity":-4,"inventory_management":null,"inventory_policy":"deny","barcode":""},{"id":31822308289,"title":"L \/ ","1":"_","2":"","3":,"_":"4827521","_":,"":,"":,"":,"":" Product Sample - L \/ Blue","public_title":"L \/ Blue","options":["L","Blue"],"price":12000,"weight":0,"compare_at_price":16000,"inventory_quantity":1,"inventory_management":null,"inventory_policy":"deny","barcode":""},{"id":31822308353,"title":"X \/ ","1":"_","2":"","3":,"_":"4827521","_":,"":,"":,"":,"":" Product Sample - X \/ Blue","public_title":"X \/ Blue","options":["X","Blue"],"price":11000,"weight":0,"compare_at_price":16000,"inventory_quantity":-1,"inventory_management":null,"inventory_policy":"deny","barcode":""},{"id":31822308417,"title":"XL \/ ","1":"","2":"","3":,"_":"4827521","_":,"":,"":,"":,"":" Product Sample - XL \/ Blue","public_title":"XL \/ Blue","options":["XL","Blue"],"price":11000,"weight":0,"compare_at_price":16000,"inventory_quantity":1,"inventory_management":null,"inventory_policy":"deny","barcode":""}],"images":["\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/07_8196db4d-bbcf-4f99-a08d-ad16253e1334.jpg?v=1494837334"],"featured_image":"\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/07_8196db4d-bbcf-4f99-a08d-ad16253e1334.jpg?v=1494837334","options":["Size","Color"],"content":"\u003ch5\u003eDescription\u003c\/h5\u003e\n\u003cp\u003e\u003cspan\u003eOur new \_003_\/\_003_\_003\_00312 \/ A12\u003c\/b\u003e\u003cb\u003e battery\u003c\/b\u003e\u003cspan\u003e isat 2000mAh and designed  power up Black and  \/ FireStorm line of 12_ tools allowing users tomultiple devices off the  battery pack. The HPB12  compatible with the followingand Decker power tool \_003_\/\_003_\_003_\/_\_003_\_\_0035\_003_\_003_\_003_\_003_\/\_003_\_003_\/_5\_003_\_\_003_\_003_\_\_003_\_003_: Ni-CD\u003c\/li\u003e\n\u003cli\u003eVoltage: 12V\u003c\/li\u003e\n\u003cli\u003eAmpHours: 2000mAh\u003c\/li\u003e\n\u003cli\u003eDimensions: 109.75x79.55x62.20mm\u003c\/li\u003e\n\u003c\/ul\u003e\n\u003ch5\u003eVideo\u003c\/h5\u003e\n\u003cp\u003e\u003ciframe=\"\/\/_.._\/_\/_7015\" height=\"315\" width=\"560\"\u003e \u003c\/iframe\u003e\u003c\/p\u003e"} </span>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>

                                        <div class="product-content">
                                            <div class="pc-inner">

                                                <h3 class="noti-title" style="display: none;">You may also like: </h3>

                                                <h5 class="product-name">
                                                    <a href="collections/sci-fi-fantasy/products/faxtex-product-sample.html">Faxtex Product Sample </a>
                                                </h5>

                                                <div class="product-price">

                                                    <span class="price-compare">  <span class="money">$160.00 </span></span>
                                                    <span class="price-sale"><span class="money">$110.00 </span></span>

                                                </div>

                                                <div class="product-review">
                                                    <span class="shopify-product-reviews-badge" data-id="8999717441"></span>
                                                </div>

                                                <div class="product-description only-list">
                                                    Descriptionnew HPB12 / A12  is rated at 2000mAhdesigned to power upand Decker /...
                                                </div>

                                                <div class="add-cart-button">

                                                    <a href="collections/sci-fi-fantasy/products/faxtex-product-sample.html" class="btn-default select-options" title="Выберите параметры"><i class="fa fa-shopping-cart"></i>Выберите параметры </a>

                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="product-grid-item number-6">
                                    <div class="product-wrapper">

                                        <div class="product-head">
                                            <div class="product-image">

                                                <div class="featured-img">
                                                    <a href="collections/sci-fi-fantasy/products/finity-product-sample.html">
                                                        <img class="featured-image front" src="/images/08_270x.jpg" alt="Finity Product Sample" />
                                                        <span class="product-label">

       <span class="label-sale">

         <span class="sale-text">25% Off </span>
                                                                        </span>

                                                                        </span>
                                                    </a>
                                                </div>

                                                <div class="product-button">

                                                    <div class="product-wishlist">
                                                        <a class="btn btn-default add-to-wishlist add-product-wishlist" data-handle-product="finity-product-sample" href="javascript:void(0);" title="Add to wishlist"><i class="fa fa-heart"></i></a>
                                                    </div>

                                                    <div data-handle="finity-product-sample" data-target="#quick-shop-popup" class="quick_shop quick-shop-button hidden-sm hidden-xs" data-toggle="modal" title="Quick View">
                                                        <span class="quick-view-icon"></span>
                                                        <span class="json hide">{"id":8999717569,"title":"Finity Product Sample","handle":"finity-product-sample","description":"\u003ch5\u003eDescription\u003c\/h5\u003e\n\u003cp\u003e\u003cspan\u003eOur new \_003_\/\_003_\_003\_00312 \/ A12\u003c\/b\u003e\u003cb\u003e battery\u003c\/b\u003e\u003cspan\u003e isat 2000mAh and designed  power up Black and  \/ FireStorm line of 12_ tools allowing users tomultiple devices off the  battery pack. The HPB12  compatible with the followingand Decker power tool \_003_\/\_003_\_003_\/_\_003_\_\_0035\_003_\_003_\_003_\_003_\/\_003_\_003_\/_5\_003_\_\_003_\_003_\_\_003_\_003_: Ni-CD\u003c\/li\u003e\n\u003cli\u003eVoltage: 12V\u003c\/li\u003e\n\u003cli\u003eAmpHours: 2000mAh\u003c\/li\u003e\n\u003cli\u003eDimensions: 109.75x79.55x62.20mm\u003c\/li\u003e\n\u003c\/ul\u003e\n\u003ch5\u003eVideo\u003c\/h5\u003e\n\u003cp\u003e\u003ciframe=\"\/\/_.._\/_\/_7015\" height=\"315\" width=\"560\"\u003e \u003c\/iframe\u003e\u003c\/p\u003e","published_at":"2017-03-13T03:49:00-04:00","created_at":"2017-03-13T03:49:03-04:00","vendor":"Christian Dior","type":"Modern","tags":["Color_Blue","Color_Brown","Color_Grey","Color_Pink","Color_Red","Color_White","Color_Yellow","Price_$100-$300","Price_Above $300"," $100","Size_L","Size_M","Size_X","Size_XL"],"price":9000,"price_min":9000,"price_max":11000,"available":true,"price_varies":true,"compare_at_price":12000,"compare_at_price_min":12000,"compare_at_price_max":12000,"compare_at_price_varies":false,"variants":[{"id":31822308737,"title":"Red","option1":"Red","option2":null,"option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":{"id":22042694913,"product_id":8999717569,"position":1,"created_at":"2017-05-15T04:36:20-04:00","updated_at":"2017-05-15T04:36:20-04:00","alt":null,"width":724,"height":1020,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/08.jpg?v=1494837380","variant_ids":[31822308737]},"available":true,"name":"Finity Product Sample -","_":"_","":["_"],"_":9000,"":0,"":12000,"":-10,"":,"":"","":},{"":31822308801,"_":"","1":"","2":,"3":,"_":"","_":,"":,"":{"":22042695105,"_":8999717569,"_":2,"_":"2017-05-15_04:36:22-04:00","_":"2017-05-15_04:36:22-04:00","_":,"_":724,"":1020,"_":"_:\/\/_.._\/_\/_\/1\/1836\/0759\/_\/09._?_=1494837382","":[31822308801]},"":,"":" Product Sample - Pink","public_title":"Pink","options":["Pink"],"price":10000,"weight":0,"compare_at_price":12000,"inventory_quantity":1,"inventory_management":null,"inventory_policy":"deny","barcode":null},{"id":31822308865,"title":"Blue","option1":"Blue","option2":null,"option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":{"id":22042695553,"product_id":8999717569,"position":3,"created_at":"2017-05-15T04:36:23-04:00","updated_at":"2017-05-15T04:36:23-04:00","alt":null,"width":724,"height":1020,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/10.jpg?v=1494837383","variant_ids":[31822308865]},"available":true,"name":"Finity  Sample - Blue","public_title":"Blue","options":["Blue"],"price":11000,"weight":0,"compare_at_price":12000,"inventory_quantity":1,"inventory_management":null,"inventory_policy":"deny","barcode":null},{"id":31822308929,"title":"Yellow","option1":"Yellow","option2":null,"option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":{"id":22042695681,"product_id":8999717569,"position":4,"created_at":"2017-05-15T04:36:24-04:00","updated_at":"2017-05-15T04:36:24-04:00","alt":null,"width":724,"height":1020,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/11.jpg?v=1494837384","variant_ids":[31822308929]},"available":true,"name":"Finity Product  - Yellow","public_title":"Yellow","options":["Yellow"],"price":11000,"weight":0,"compare_at_price":12000,"inventory_quantity":1,"inventory_management":null,"inventory_policy":"deny","barcode":null}],"images":["\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/08.jpg?v=1494837380","\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/09.jpg?v=1494837382","\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/10.jpg?v=1494837383","\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/11.jpg?v=1494837384"],"featured_image":"\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/08.jpg?v=1494837380","options":["Color"],"content":"\u003ch5\u003eDescription\u003c\/h5\u003e\n\u003cp\u003e\u003cspan\u003eOur new \u003c\/span\u003e\u003cb\u003eHPB12 \/ A12\u003c\/b\u003e\u003cb\u003e battery\u003c\/b\u003e\u003cspan\u003e is rated  2000mAh and designed toup Black and Decker \/ FireStorm line of 12Vallowing users to rundevices off the same  pack. The HPB12 iswith the following BlackDecker power tool models\u003c\/span\u003e\u003c\/p\u003e\n\u003ch5\u003e\u003cspan\u003eSpecifications\u003c\/span\u003e\u003c\/h5\u003e\n\u003cul\u003e\n\u003cli\u003eChemistry: -\_003_\/\_003_\_\_003_\_003_: 12V\u003c\/li\u003e\n\u003cli\u003eAmpHours: 2000mAh\u003c\/li\u003e\n\u003cli\u003eDimensions: 109.75x79.55x62.20mm\u003c\/li\u003e\n\u003c\/ul\u003e\n\u003ch5\u003eVideo\u003c\/h5\u003e\n\u003cp\u003e\u003ciframe src=\"\/\/www.youtube.com\/embed\/QZd7015XaTQ\" =\"315\" width=\"560\"\u003e \u003c\/iframe\u003e\u003c\/p\u003e"} </span>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>

                                        <div class="product-content">
                                            <div class="pc-inner">

                                                <h3 class="noti-title" style="display: none;">You may also like: </h3>

                                                <h5 class="product-name">
                                                    <a href="collections/sci-fi-fantasy/products/finity-product-sample.html">Finity Product Sample </a>
                                                </h5>

                                                <div class="product-price">

                                                    <span class="price-compare">  <span class="money">$120.00 </span></span>
                                                    <span class="price-sale"><span class="money">$90.00 </span></span>

                                                </div>

                                                <div class="product-review">
                                                    <span class="shopify-product-reviews-badge" data-id="8999717569"></span>
                                                </div>

                                                <div class="product-description only-list">
                                                    Descriptionnew HPB12 / A12  is rated at 2000mAhdesigned to power upand Decker /...
                                                </div>

                                                <div class="add-cart-button">

                                                    <a href="collections/sci-fi-fantasy/products/finity-product-sample.html" class="btn-default select-options" title="Выберите параметры"><i class="fa fa-shopping-cart"></i>Выберите параметры </a>

                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="product-grid-item number-6">
                                    <div class="product-wrapper">

                                        <div class="product-head">
                                            <div class="product-image">

                                                <div class="featured-img">
                                                    <a href="collections/sci-fi-fantasy/products/fixair-product-sample.html">
                                                        <img class="featured-image front" src="/images/02_270x.jpg" alt="Fixair Product Sample" />
                                                        <span class="product-label">

 </span>
                                                    </a>
                                                </div>

                                                <div class="product-button">

                                                    <div class="product-wishlist">
                                                        <a class="btn btn-default add-to-wishlist add-product-wishlist" data-handle-product="fixair-product-sample" href="javascript:void(0);" title="Add to wishlist"><i class="fa fa-heart"></i></a>
                                                    </div>

                                                    <div data-handle="fixair-product-sample" data-target="#quick-shop-popup" class="quick_shop quick-shop-button hidden-sm hidden-xs" data-toggle="modal" title="Quick View">
                                                        <span class="quick-view-icon"></span>
                                                        <span class="json hide">{"id":8999717697,"title":"Fixair Product Sample","handle":"fixair-product-sample","description":"\u003ch5\u003eDescription\u003c\/h5\u003e\n\u003cp\u003e\u003cspan\u003eOur new \_003_\/\_003_\_003\_00312 \/ A12\u003c\/b\u003e\u003cb\u003e battery\u003c\/b\u003e\u003cspan\u003e isat 2000mAh and designed  power up Black and  \/ FireStorm line of 12_ tools allowing users tomultiple devices off the  battery pack. The HPB12  compatible with the followingand Decker power tool \_003_\/\_003_\_003_\/_\_003_\_\_003_\_003_\_\_003_\_003_: Ni-CD\u003c\/li\u003e\n\u003cli\u003eVoltage: 12V\u003c\/li\u003e\n\u003cli\u003eAmpHours: 2000mAh\u003c\/li\u003e\n\u003cli\u003eDimensions: 109.75x79.55x62.20mm\u003c\/li\u003e\n\u003c\/ul\u003e\n\u003ch5\u003eVideo\u003c\/h5\u003e\n\u003cp\u003e\u003ciframe=\"\/\/_.._\/_\/_7015\" height=\"315\" width=\"560\"\u003e \u003c\/iframe\u003e\u003c\/p\u003e","published_at":"2017-03-13T03:49:00-04:00","created_at":"2017-03-13T03:49:05-04:00","vendor":"Dolce \u0026 ","":"","":["_","","_","_","","_","","_","","_","_","","","_","$100-$300"," $300","Price_Under $100","Size_L","Size_M","Size_X","Size_XL"],"price":21000,"price_min":21000,"price_max":33000,"available":true,"price_varies":true,"compare_at_price":null,"compare_at_price_min":0,"compare_at_price_max":0,"compare_at_price_varies":false,"variants":[{"id":31822311937,"title":"M \/ White","option1":"M","option2":"White","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":{"id":22042712129,"product_id":8999717697,"position":1,"created_at":"2017-05-15T04:37:50-04:00","updated_at":"2017-05-15T04:38:10-04:00","alt":null,"width":724,"height":1020,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/09_50f679f9-cd1e-4e7d-8cdd-17df1d26ec30.jpg?v=1494837490","variant_ids":[31822311937,31822312001]},"available":true,"name":"Fixair  Sample - M \/","_":"_ \/ White","options":["M","White"],"price":21000,"weight":0,"compare_at_price":null,"inventory_quantity":-5,"inventory_management":null,"inventory_policy":"deny","barcode":null},{"id":31822312001,"title":"M \/ Pink","option1":"M","option2":"Pink","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":{"id":22042712129,"product_id":8999717697,"position":1,"created_at":"2017-05-15T04:37:50-04:00","updated_at":"2017-05-15T04:38:10-04:00","alt":null,"width":724,"height":1020,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/09_50f679f9-cd1e-4e7d-8cdd-17df1d26ec30.jpg?v=1494837490","variant_ids":[31822311937,31822312001]},"available":true,"name":"Fixair  Sample - M \/ ","_":"_ \/ Pink","options":["M","Pink"],"price":22000,"weight":0,"compare_at_price":null,"inventory_quantity":-4,"inventory_management":null,"inventory_policy":"deny","barcode":null},{"id":31822312065,"title":"L \/ White","option1":"L","option2":"White","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":{"id":22042712257,"product_id":8999717697,"position":2,"created_at":"2017-05-15T04:37:52-04:00","updated_at":"2017-05-15T04:38:10-04:00","alt":null,"width":724,"height":1020,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/10_a21d9138-1b22-4c74-a9aa-5de2559bee45.jpg?v=1494837490","variant_ids":[31822312065]},"available":true,"name":"Fixair  Sample - L \/","_":"_ \/ White","options":["L","White"],"price":21500,"weight":0,"compare_at_price":null,"inventory_quantity":-5,"inventory_management":null,"inventory_policy":"deny","barcode":null},{"id":31822312129,"title":"X \/ White","option1":"X","option2":"White","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":{"id":22042712385,"product_id":8999717697,"position":3,"created_at":"2017-05-15T04:37:53-04:00","updated_at":"2017-05-15T04:38:10-04:00","alt":null,"width":724,"height":1020,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/11_532c1d09-05c2-4536-88a2-487c33fc9943.jpg?v=1494837490","variant_ids":[31822312129]},"available":true,"name":"Fixair  Sample - X \/","_":"_ \/ White","options":["X","White"],"price":21000,"weight":0,"compare_at_price":null,"inventory_quantity":-4,"inventory_management":null,"inventory_policy":"deny","barcode":null},{"id":31822312193,"title":"X \/ Pink","option1":"X","option2":"Pink","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":{"id":22042712513,"product_id":8999717697,"position":4,"created_at":"2017-05-15T04:37:54-04:00","updated_at":"2017-05-15T04:38:10-04:00","alt":null,"width":724,"height":1020,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/12.jpg?v=1494837490","variant_ids":[31822312193,31822312321]},"available":true,"name":"Fixair  Sample - X \/ ","_":"_ \/ Pink","options":["X","Pink"],"price":22000,"weight":0,"compare_at_price":null,"inventory_quantity":-4,"inventory_management":null,"inventory_policy":"deny","barcode":null},{"id":31822312321,"title":"XL \/ White","option1":"XL","option2":"White","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":{"id":22042712513,"product_id":8999717697,"position":4,"created_at":"2017-05-15T04:37:54-04:00","updated_at":"2017-05-15T04:38:10-04:00","alt":null,"width":724,"height":1020,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/12.jpg?v=1494837490","variant_ids":[31822312193,31822312321]},"available":true,"name":"Fixair  Sample - XL \/","_":" \/ White","options":["XL","White"],"price":23000,"weight":0,"compare_at_price":null,"inventory_quantity":-4,"inventory_management":null,"inventory_policy":"deny","barcode":null},{"id":31822312449,"title":"XL \/ Pink","option1":"XL","option2":"Pink","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":{"id":22042710785,"product_id":8999717697,"position":5,"created_at":"2017-05-15T04:37:48-04:00","updated_at":"2017-05-15T04:38:10-04:00","alt":null,"width":724,"height":1020,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/13.jpg?v=1494837490","variant_ids":[31822312449,31822312577]},"available":true,"name":"Fixair  Sample - XL \/ ","_":" \/ Pink","options":["XL","Pink"],"price":33000,"weight":0,"compare_at_price":null,"inventory_quantity":-4,"inventory_management":null,"inventory_policy":"deny","barcode":null},{"id":31822312577,"title":"L \/ Pink","option1":"L","option2":"Pink","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":{"id":22042710785,"product_id":8999717697,"position":5,"created_at":"2017-05-15T04:37:48-04:00","updated_at":"2017-05-15T04:38:10-04:00","alt":null,"width":724,"height":1020,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/13.jpg?v=1494837490","variant_ids":[31822312449,31822312577]},"available":true,"name":"Fixair  Sample - L \/ ","_":"_ \/ Pink","options":["L","Pink"],"price":21000,"weight":0,"compare_at_price":null,"inventory_quantity":1,"inventory_management":null,"inventory_policy":"deny","barcode":null}],"images":["\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/09_50f679f9-cd1e-4e7d-8cdd-17df1d26ec30.jpg?v=1494837490","\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/10_a21d9138-1b22-4c74-a9aa-5de2559bee45.jpg?v=1494837490","\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/11_532c1d09-05c2-4536-88a2-487c33fc9943.jpg?v=1494837490","\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/12.jpg?v=1494837490","\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/13.jpg?v=1494837490"],"featured_image":"\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/09_50f679f9-cd1e-4e7d-8cdd-17df1d26ec30.jpg?v=1494837490","options":["Size","Color"],"content":"\u003ch5\u003eDescription\u003c\/h5\u003e\n\u003cp\u003e\u003cspan\u003eOur new \u003c\/span\u003e\u003cb\u003eHPB12 \/ A12\u003c\/b\u003e\u003cb\u003e battery\u003c\/b\u003e\u003cspan\u003e is rated  2000mAh and designed toup Black and Decker \/ FireStorm line of 12Vallowing users to rundevices off the same  pack. The HPB12 iswith the following BlackDecker power tool models\u003c\/span\u003e\u003c\/p\u003e\n\u003cul\u003e\n\u003cli\u003eChemistry: -\_003_\/\_003_\_\_003_\_003_: 12V\u003c\/li\u003e\n\u003cli\u003eAmpHours: 2000mAh\u003c\/li\u003e\n\u003cli\u003eDimensions: 109.75x79.55x62.20mm\u003c\/li\u003e\n\u003c\/ul\u003e\n\u003ch5\u003eVideo\u003c\/h5\u003e\n\u003cp\u003e\u003ciframe src=\"\/\/www.youtube.com\/embed\/QZd7015XaTQ\" =\"315\" width=\"560\"\u003e \u003c\/iframe\u003e\u003c\/p\u003e"} </span>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>

                                        <div class="product-content">
                                            <div class="pc-inner">

                                                <h3 class="noti-title" style="display: none;">You may also like: </h3>

                                                <h5 class="product-name">
                                                    <a href="collections/sci-fi-fantasy/products/fixair-product-sample.html">Fixair Product Sample </a>
                                                </h5>

                                                <div class="product-price">

                                                                    <span class="price">

                 <span class="money">$210.00 </span>

                                                                    </span>

                                                </div>

                                                <div class="product-review">
                                                    <span class="shopify-product-reviews-badge" data-id="8999717697"></span>
                                                </div>

                                                <div class="product-description only-list">
                                                    Descriptionnew HPB12 / A12  is rated at 2000mAhdesigned to power upand Decker /...
                                                </div>

                                                <div class="add-cart-button">

                                                    <a href="collections/sci-fi-fantasy/products/fixair-product-sample.html" class="btn-default select-options" title="Выберите параметры"><i class="fa fa-shopping-cart"></i>Выберите параметры </a>

                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="product-grid-item number-6">
                                    <div class="product-wrapper">

                                        <div class="product-head">
                                            <div class="product-image">

                                                <div class="featured-img">
                                                    <a href="collections/sci-fi-fantasy/products/flexlam-product-sample.html">
                                                        <img class="featured-image front" src="/images/02_270x.jpg" alt="Flexlam Product Sample" />
                                                        <span class="product-label">

       <span class="label-sale">

         <span class="sale-text">40% Off </span>
                                                                        </span>

                                                                        </span>
                                                    </a>
                                                </div>

                                                <div class="product-button">

                                                    <div class="product-wishlist">
                                                        <a class="btn btn-default add-to-wishlist add-product-wishlist" data-handle-product="flexlam-product-sample" href="javascript:void(0);" title="Add to wishlist"><i class="fa fa-heart"></i></a>
                                                    </div>

                                                    <div data-handle="flexlam-product-sample" data-target="#quick-shop-popup" class="quick_shop quick-shop-button hidden-sm hidden-xs" data-toggle="modal" title="Quick View">
                                                        <span class="quick-view-icon"></span>
                                                        <span class="json hide">{"id":8999718081,"title":"Flexlam Product Sample","handle":"flexlam-product-sample","description":"\u003ch5\u003eDescription\u003c\/h5\u003e\n\u003cp\u003e\u003cspan\u003eOur new \_003_\/\_003_\_003\_00312 \/ A12\u003c\/b\u003e\u003cb\u003e battery\u003c\/b\u003e\u003cspan\u003e isat 2000mAh and designed  power up Black and  \/ FireStorm line of 12_ tools allowing users tomultiple devices off the  battery pack. The HPB12  compatible with the followingand Decker power tool \_003_\/\_003_\_003_\/_\_003_\_\_0035\_003_\_003_\_003_\_003_\/\_003_\_003_\/_5\_003_\_\_003_\_003_\_\_003_\_003_: Ni-CD\u003c\/li\u003e\n\u003cli\u003eVoltage: 12V\u003c\/li\u003e\n\u003cli\u003eAmpHours: 2000mAh\u003c\/li\u003e\n\u003cli\u003eDimensions: 109.75x79.55x62.20mm\u003c\/li\u003e\n\u003c\/ul\u003e\n\u003ch5\u003eVideo\u003c\/h5\u003e\n\u003cp\u003e\u003ciframe=\"\/\/_.._\/_\/_7015\" height=\"315\" width=\"560\"\u003e \u003c\/iframe\u003e\u003c\/p\u003e","published_at":"2017-03-13T03:49:00-04:00","created_at":"2017-03-13T03:49:10-04:00","vendor":"Givenchy","type":"Office","tags":["Color_Grey","Price_$100-$300","Size_L","Size_M","Size_X","Size_XL"],"price":15000,"price_min":15000,"price_max":20000,"available":true,"price_varies":true,"compare_at_price":25000,"compare_at_price_min":25000,"compare_at_price_max":25000,"compare_at_price_varies":false,"variants":[{"id":31822315393,"title":"M \/ ","1":"_","2":"","3":,"_":"123456","_":,"":,"":,"":,"":" Product Sample - M \/ Grey","public_title":"M \/ Grey","options":["M","Grey"],"price":15000,"weight":0,"compare_at_price":25000,"inventory_quantity":-8,"inventory_management":null,"inventory_policy":"deny","barcode":null},{"id":31822315457,"title":"L \/ ","1":"_","2":"","3":,"_":"123456","_":,"":,"":,"":,"":" Product Sample - L \/ Grey","public_title":"L \/ Grey","options":["L","Grey"],"price":18000,"weight":0,"compare_at_price":25000,"inventory_quantity":1,"inventory_management":null,"inventory_policy":"deny","barcode":null},{"id":31822315521,"title":"X \/ ","1":"_","2":"","3":,"_":"123456","_":,"":,"":,"":,"":" Product Sample - X \/ Grey","public_title":"X \/ Grey","options":["X","Grey"],"price":19000,"weight":0,"compare_at_price":25000,"inventory_quantity":0,"inventory_management":null,"inventory_policy":"deny","barcode":null},{"id":31822315585,"title":"XL \/ ","1":"","2":"","3":,"_":"123456","_":,"":,"":,"":,"":" Product Sample - XL \/ Grey","public_title":"XL \/ Grey","options":["XL","Grey"],"price":20000,"weight":0,"compare_at_price":25000,"inventory_quantity":0,"inventory_management":null,"inventory_policy":"deny","barcode":null}],"images":["\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/10_27bae425-6a06-4494-8e33-5ab606dfd898.jpg?v=1494838358","\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/11_406cdc96-bb60-4f6d-8d1d-29b3c26f4dfc.jpg?v=1494838359","\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/12_5a301c07-5545-4a87-bacf-d1a00c0e34a3.jpg?v=1494838360"],"featured_image":"\/\/cdn.shopify.com\/s\/files\/1\/1836\/0759\/products\/10_27bae425-6a06-4494-8e33-5ab606dfd898.jpg?v=1494838358","options":["Size","Color"],"content":"\u003ch5\u003eDescription\u003c\/h5\u003e\n\u003cp\u003e\u003cspan\u003eOur new \_003_\/\_003_\_003\_00312 \/ A12\u003c\/b\u003e\u003cb\u003e battery\u003c\/b\u003e\u003cspan\u003e isat 2000mAh and designed  power up Black and  \/ FireStorm line of 12_ tools allowing users tomultiple devices off the  battery pack. The HPB12  compatible with the followingand Decker power tool \_003_\/\_003_\_003_\/_\_003_\_\_0035\_003_\_003_\_003_\_003_\/\_003_\_003_\/_5\_003_\_\_003_\_003_\_\_003_\_003_: Ni-CD\u003c\/li\u003e\n\u003cli\u003eVoltage: 12V\u003c\/li\u003e\n\u003cli\u003eAmpHours: 2000mAh\u003c\/li\u003e\n\u003cli\u003eDimensions: 109.75x79.55x62.20mm\u003c\/li\u003e\n\u003c\/ul\u003e\n\u003ch5\u003eVideo\u003c\/h5\u003e\n\u003cp\u003e\u003ciframe=\"\/\/_.._\/_\/_7015\" height=\"315\" width=\"560\"\u003e \u003c\/iframe\u003e\u003c\/p\u003e"} </span>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>

                                        <div class="product-content">
                                            <div class="pc-inner">

                                                <h3 class="noti-title" style="display: none;">You may also like: </h3>

                                                <h5 class="product-name">
                                                    <a href="collections/sci-fi-fantasy/products/flexlam-product-sample.html">Flexlam Product Sample </a>
                                                </h5>

                                                <div class="product-price">

                                                    <span class="price-compare">  <span class="money">$250.00 </span></span>
                                                    <span class="price-sale"><span class="money">$150.00 </span></span>

                                                </div>

                                                <div class="product-review">
                                                    <span class="shopify-product-reviews-badge" data-id="8999718081"></span>
                                                </div>

                                                <div class="product-description only-list">
                                                    Descriptionnew HPB12 / A12  is rated at 2000mAhdesigned to power upand Decker /...
                                                </div>

                                                <div class="add-cart-button">

                                                    <a href="collections/sci-fi-fantasy/products/flexlam-product-sample.html" class="btn-default select-options" title="Выберите параметры"><i class="fa fa-shopping-cart"></i>Выберите параметры </a>

                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="product-grid-item number-6">
                                    <div class="product-wrapper">

                                        <div class="product-head">
                                            <div class="product-image">

                                                <div class="featured-img">
                                                    <a href="collections/sci-fi-fantasy/products/aommodo-ligula.html">
                                                        <img class="featured-image front" src="/images/01_270x.jpg" alt="Freecof Product Sample" />
                                                        <span class="product-label">

 </span>
                                                    </a>
                                                </div>

                                                <div class="product-button">

                                                    <div class="product-wishlist">
                                                        <a class="btn btn-default add-to-wishlist add-product-wishlist" data-handle-product="aommodo-ligula" href="javascript:void(0);" title="Add to wishlist"><i class="fa fa-heart"></i></a>
                                                    </div>

                                                    <div data-handle="aommodo-ligula" data-target="#quick-shop-popup" class="quick_shop quick-shop-button hidden-sm hidden-xs" data-toggle="modal" title="Quick View">
                                                        <span class="quick-view-icon"></span>
                                                        <span class="json hide">{"id":8999715777,"title":"Freecof Product Sample","handle":"aommodo-ligula","description":"\u003ch5\u003eDescription\u003c\/h5\u003e\n\u003cp\u003e\u003cspan\u003eOur new \_003_\/\_003_\_003\_00312 \/ A12\u003c\/b\u003e\u003cb\u003e battery\u003c\/b\u003e\u003cspan\u003e isat 2000mAh and designed  power up Black and  \/ FireStorm line of 12_ tools allowing users tomultiple devices off the  battery pack. The HPB12  compatible with the followingand Decker power tool \_003_\/\_003_\_003_\/_\_003_\_\_0035\_003_\_003_\_003_\_003_\/\_003_\_003_\/_5\_003_\_\_003_\_003_\_\_003_\_003_: Ni-CD\u003c\/li\u003e\n\u003cli\u003eVoltage: 12V\u003c\/li\u003e\n\u003cli\u003eAmpHours: 2000mAh\u003c\/li\u003e\n\u003cli\u003eDimensions: 109.75x79.55x62.20mm\u003c\/li\u003e\n\u003c\/ul\u003e\n\u003ch5\u003eVideo\u003c\/h5\u003e\n\u003cp\u003e\u003ciframe=\"\/\/_.._\/_\/_7015\" height=\"315\" width=\"560\"\u003e \u003c\/iframe\u003e\u003c\/p\u003e","published_at":"2017-03-13T03:48:00-04:00","created_at":"2017-03-13T03:48:41-04:00","vendor":"Donna Karan","type":"Office","tags":["Brand_Accesi","Color_Black","Color_Blue","Color_Red","Color_White","Price_Above $300","","","",""],"_":45000,"":45000,"":45000,"":,"_":_,"":,"":0,"":0,"":_,"_":[{"":31822289665,"_":" Title","option1":"Default Title","option2":null,"option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":null,"available":true,"name":"Freecof Product Sample","public_title":null,"options":["Default"],"_":45000,"":0,"":,"":-12,"":,"":"","":""}],"":["\/\/_.._\/_\/_\/1\/1836\/0759\/_\/117_2-_9-442_-_24_-2_141295_3._?_=1494838391"],"":"\/\/_.._\/_\/_\/1\/1836\/0759\/_\/117_2-_9-442_-_24_-2_141295_3._?_=1494838391","":["_"],"":"\_0035\_003_\_003_\/_5\_003_\_\_003\_003_\_003_\_003 new \u003c\/span\u003e\u003cb\u003eHPB12 \/ A12\u003c\/b\u003e\u003cb\u003e \_003_\/_\_003_\_003_\_003_ is rated at 2000mAhdesigned to power upand Decker \/ FireStorm  of 12V tools allowingto run multiple devicesthe same battery pack.HPB12 is compatible withfollowing Black and Deckertool models\u003c\/span\u003e\u003c\/p\u003e\n\u003ch5\u003e\u003cspan\u003eSpecifications\u003c\/span\u003e\u003c\/h5\u003e\n\u003cul\u003e\n\u003cli\u003eChemistry: Ni-CD\u003c\/li\u003e\n\u003cli\u003eVoltage: 12V\u003c\/li\u003e\n\u003cli\u003eAmpHours: 2000_\_003_\/\_003_\_\_003_\_003: 109.75x79.55x62.20mm\u003c\/li\u003e\n\u003c\/ul\u003e\n\u003ch5\u003eVideo\u003c\/h5\u003e\n\u003cp\u003e\u003ciframe src=\"\/\/www.youtube.com\/embed\/QZd7015XaTQ\" height=\"315\" width=\"560\"\u003e \_003_\/\_003_\_003_\/_\_003_"} </span>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>

                                        <div class="product-content">
                                            <div class="pc-inner">

                                                <h3 class="noti-title" style="display: none;">You may also like: </h3>

                                                <h5 class="product-name">
                                                    <a href="collections/sci-fi-fantasy/products/aommodo-ligula.html">Freecof Product Sample </a>
                                                </h5>

                                                <div class="product-price">

                                                                    <span class="price">

                 <span class="money">$450.00 </span>

                                                                    </span>

                                                </div>

                                                <div class="product-review">
                                                    <span class="shopify-product-reviews-badge" data-id="8999715777"></span>
                                                </div>

                                                <div class="product-description only-list">
                                                    Descriptionnew HPB12 / A12  is rated at 2000mAhdesigned to power upand Decker /...
                                                </div>

                                                <div class="add-cart-button">

                                                    <form action="/cart/add" method="post" enctype="multipart/form-data">
                                                        <a href="collections/sci-fi-fantasy/products/aommodo-ligula.html" class="btn-default add-to-cart" title="Добавить в корзину"><i class="fa fa-shopping-cart"></i>Добавить в корзину </a>
                                                        <select class="hide" name="id">

                                                            <option value="31822289665" />Default Title

                                                        </select>
                                                    </form>

                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div id="shopify-section-1494823339592" class="shopify-section">
                <div class="section-separator section-separator-1494823339592">
                    <div class="separator separator-1494823339592">
                        <div class="spacing" style="margin-bottom: 75px">
                            <style type="text/css">
                                @media (max-width: 767px) {
                                    .spacing {
                                        margin-bottom: 40px !important;
                                    }
                                }
                            </style>
                        </div>
                    </div>

                </div>

            </div>

            <div id="shopify-section-1489575833562" class="shopify-section">

                <div class="blog-container">
                    <div class="container">
                        <div class="title-wrapper">
                            <h3>НАШИ ПОСЛЕДНИЕ НОВОСТИ </h3>
                        </div>

                        <div class="row">

                            <div class="post-item col-md-4 col-sm-4 col-xs-12">

                                <div class="post-item-inner">
                                    <div class="post-image">

                                        <a href="blogs/news/lorem-ipsum-dolor-sit-amet-consectetuer-adipiscing-elit-sed-diam.html" title=""><img src="/images/1_large.jpg" alt="Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam" /></a>

                                    </div>

                                    <div class="post-content">
                                        <div class="meta-data"><span class="date">Mar 13, 2017 </span></div>
                                        <a class="post-title" href="blogs/news/lorem-ipsum-dolor-sit-amet-consectetuer-adipiscing-elit-sed-diam.html">Lorem ipsum dolor sit , consectetuer adipiscing elit, sed  </a>
                                        <p>Lorem ipsum dolor sit , consectetur adipiscing elit, sed  eiusmod tempor incididunt ut  et dolore magna aliqua. ... </p>
                                        <a class="link-to-post" href="blogs/news/lorem-ipsum-dolor-sit-amet-consectetuer-adipiscing-elit-sed-diam.html" title="Continue Reading">Continue Reading </a>
                                    </div>
                                </div>
                            </div>

                            <div class="post-item col-md-4 col-sm-4 col-xs-12">

                                <div class="post-item-inner">
                                    <div class="post-image">

                                        <a href="blogs/news/ut-wisi-enim-ad-minim-veniam-quis-nostrud-exerci-tation-ullamcorper-1.html" title=""><img src="/images/2_large.jpg" alt="Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper" /></a>

                                    </div>

                                    <div class="post-content">
                                        <div class="meta-data"><span class="date">Mar 13, 2017 </span></div>
                                        <a class="post-title" href="blogs/news/ut-wisi-enim-ad-minim-veniam-quis-nostrud-exerci-tation-ullamcorper-1.html">Ut wisi enim adveniam, quis nostrud exerci  ullamcorper </a>
                                        <p>Lorem ipsum dolor sit , consectetur adipiscing elit, sed  eiusmod tempor incididunt ut  et dolore magna aliqua. ... </p>
                                        <a class="link-to-post" href="blogs/news/ut-wisi-enim-ad-minim-veniam-quis-nostrud-exerci-tation-ullamcorper-1.html" title="Continue Reading">Continue Reading </a>
                                    </div>
                                </div>
                            </div>

                            <div class="post-item col-md-4 col-sm-4 col-xs-12">

                                <div class="post-item-inner">
                                    <div class="post-image">

                                        <a href="blogs/news/why-reading-is-important-for-our-children-2.html" title=""><img src="/images/3_large.jpg" alt="Why Reading is Important for Our Children" /></a>

                                    </div>

                                    <div class="post-content">
                                        <div class="meta-data"><span class="date">Mar 13, 2017 </span></div>
                                        <a class="post-title" href="blogs/news/why-reading-is-important-for-our-children-2.html">Why Reading is ImportantOur Children </a>
                                        <p>Lorem ipsum dolor sit , consectetur adipiscing elit, sed  eiusmod tempor incididunt ut  et dolore magna aliqua. ... </p>
                                        <a class="link-to-post" href="blogs/news/why-reading-is-important-for-our-children-2.html" title="Continue Reading">Continue Reading </a>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="view-all">
                            <a href="blogs/news.html">Посмотреть все News </a>
                        </div>

                    </div>
                </div>

            </div>
            <div id="shopify-section-1494823362894" class="shopify-section">
                <div class="section-separator section-separator-1494823362894">
                    <div class="separator separator-1494823362894">
                        <div class="spacing" style="margin-bottom: 75px">
                            <style type="text/css">
                                @media (max-width: 767px) {
                                    .spacing {
                                        margin-bottom: 40px !important;
                                    }
                                }
                            </style>
                        </div>
                    </div>

                </div>

            </div>
            <div id="shopify-section-1489638251154" class="shopify-section">
                <script src="/js/jquery.bxslider.min.js" defer=""></script>
                <link href="/css/jquery.bxslider.min.css" rel="stylesheet" type="text/css" media="all" />

                <div class="home-customer-review">
                    <div class="container">
                        <div class="title-wrapper">
                            <h3>НАШИ СЧАСТЛИВЫЕ КЛИЕНТЫ </h3>
                        </div>

                        <div class="slider" style="color: #fff;">

                            <ul class="bxslider">

                                <li>Shopping mebel in zim.uz  very easy. Quick deliverycustomer service is awesome!.ipsum dolor sit amet,adipiscing elit, sed diam  nibh euismod tincidunt ut  dolore magna aliquam erat. </li>

                                <li>Shopping mebel in zim.uz  very easy. Quick deliverycustomer service is awesome!.ipsum dolor sit amet,adipiscing elit, sed diam  nibh euismod tincidunt ut  dolore magna aliquam erat. </li>

                                <li>Shopping mebel in zim.uz  very easy. Quick deliverycustomer service is awesome!.ipsum dolor sit amet,adipiscing elit, sed diam  nibh euismod tincidunt ut  dolore magna aliquam erat. </li>

                            </ul>

                            <div id="bx-pager">

                                <a data-slide-index="0" href="/">
                                    <span class="author-img"><img src="/images/team-1_90x.jpg" alt="" /></span>
                                    <span class="name">Тест </span>
                                    <span class="collector">Тест </span>
                                </a>

                                <a data-slide-index="1" href="/">
                                    <span class="author-img"><img src="/images/team-2_90x.jpg" alt="" /></span>
                                    <span class="name">Тест </span>
                                    <span class="collector">Тест </span>
                                </a>

                                <a data-slide-index="2" href="/">
                                    <span class="author-img"><img src="/images/team-3_90x.jpg" alt="" /></span>
                                    <span class="name">Тест </span>
                                    <span class="collector"> Тест </span>
                                </a>

                            </div>

                        </div>

                    </div>
                </div>

                <script>
                    jQuery(document).ready(function($) {
                        $('.bxslider').bxSlider({
                            pagerCustom: '#bx-pager',
                            mode: 'fade'
                        });
                    })
                </script>

            </div>
            <div id="shopify-section-1494823382354" class="shopify-section">
                <div class="section-separator section-separator-1494823382354">
                    <div class="separator separator-1494823382354">
                        <div class="spacing" style="margin-bottom: 75px">
                            <style type="text/css">
                                @media (max-width: 767px) {
                                    .spacing {
                                        margin-bottom: 40px !important;
                                    }
                                }
                            </style>
                        </div>
                    </div>

                </div>

            </div>
            <div id="shopify-section-1489645109119" class="shopify-section">
                <div class="home-video static-surround" style="background-image:url(/images/bg_video_1.jpg)">
                    <div class="static-surround-inner">

                        <div class="static-wrap">
                            <video id="static_video" class="bg-video js-is-active" loop="">
                                <source src="/videos/The_Joy_of_Books.mp4" type="video/mp4">
                                </source>
                            </video>
                        </div>

                        <div class="static-content container">
                            <span class="static-control" style="background-image:url(/images/icons/icon-play_70x.png)"></span>
                            <div class="text" style="color: #fff;">EXPLORE OUR NEW LIBRARY </div>
                        </div>

                    </div>
                </div>

                <script>
                    jQuery('.static-control').click(function() {
                        var t = jQuery(this).closest('.static-surround');
                        if (t.hasClass('is_play')) {
                            document.getElementById('static_video').pause();
                            t.removeClass('is_play');
                        } else {
                            document.getElementById('static_video').play();
                            t.addClass('is_play');
                        }
                    });
                </script>

            </div>
            <div id="shopify-section-1494823400496" class="shopify-section">
                <div class="section-separator section-separator-1494823400496">
                    <div class="separator separator-1494823400496">
                        <div class="spacing" style="margin-bottom: 75px">
                            <style type="text/css">
                                @media (max-width: 767px) {
                                    .spacing {
                                        margin-bottom: 40px !important;
                                    }
                                }
                            </style>
                        </div>
                    </div>

                </div>

            </div>
            <div id="shopify-section-1489645210033" class="shopify-section">
                <div class="home-statistic">
                    <div class="container">
                        <div class="row">

                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="statistic-item">

                                    <div class="statistic-img"><img src="/images/icons/icon-custom32x.png" alt="" /></div>

                                    <div class="text" style="color: #1b8bcc;">
                                        <div class="title">138,098 </div>
                                        <div class="caption">Счастливые клиенты </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="statistic-item">

                                    <div class="statistic-img"><img src="/images/icons/icon_book.png" alt="" /></div>

                                    <div class="text" style="color: #1b8bcc;">
                                        <div class="title">30,000K </div>
                                        <div class="caption">Каталог мебели</div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="statistic-item">

                                    <div class="statistic-img"><img src="/images/icons/icon_map.png" alt="" /></div>

                                    <div class="text" style="color: #1b8bcc;">
                                        <div class="title">1,269 </div>
                                        <div class="caption">Наш магазин вокруг</div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <div id="shopify-section-1494817065155" class="shopify-section">
                <div class="section-separator section-separator-1494817065155">
                    <div class="separator separator-1494817065155">
                        <div class="spacing" style="margin-bottom: 75px">
                            <style type="text/css">
                                @media (max-width: 767px) {
                                    .spacing {
                                        margin-bottom: 40px !important;
                                    }
                                }
                            </style>
                        </div>
                    </div>

                </div>

            </div>
            <!-- END content_for_index -->
        </div>

    </div>
</div>

<!-- End Main Content -->

</div>

<!-- Begin Bottom -->

<div id="bottom" class="bottom-container">
    <div class="container">
        <div class="row">

        </div>
    </div>
</div>

<!-- End Bottom -->

<!-- Begin Footer -->

<footer id="footer-content">

    <div id="widget-newsletter">
        <div class="container">

            <div class="widget-newsletter">

                <h3>Подписывайтесь на нашу новостную рассылку </h3>

                <form action="//bitcode.us10.list-manage.com/subscribe/post?u=55ec8b9611a3d9c0ad6f3fc62&amp;id=1cbb85b057" method="post" id="mc-embedded-subscribe-form" class="form-inline form-subscribe" name="mc-embedded-subscribe-form" target="_blank">
                    <input class="form-control" type="email" required="" name="EMAIL" id="email-input" placeholder="Введите ваш адрес электронной почты" />
                    <button id="email-submit" type="submit" title="Subscribe" class="btn btn-default">Подписывайся </button>
                </form>
            </div>

        </div>
    </div>

    <!-- Begin Footer Widgets -->

    <div class="footer-widgets">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-sm-6 col-md-3 footer-col">
                    <div class="footer-block footer-block-1">

                        <img class="logo" src="/images/icons/footer_logo.png" alt="Bookshop Theme" />

                        <div class="content">
                            <div class="text">
                                ZIM.UZ — интернет-магазин мебели в Узбекистане. Мы предлагаем исключительно оригинальные аксессуары по низким ценам, с реальной гарантией. Мы будем рады помочь Вам в выборе мебели.
                            </div>
                            <a class="learn-more" href="/">Узнать больше о нас </a>
                        </div>

                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3 footer-col">
                    <div class="footer-block footer-block-2">

                        <h4>
                            <span class="icon"></span>главный офис
                        </h4>

                        <div class="content">
                            <div class="text">Уфа, Россия: Почта индекс: 553204 Тел: (+7905) 9983 73 84 Mail: info@ZIM.UZ</div>
                        </div>

                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3 footer-col">
                    <div class="footer-block footer-block-3">

                        <h4>
                            <span class="icon"></span> Следите за
                        </h4>

                        <div class="content">
                            <ul class="widget-social-icon">

                                <li>
                                    <a target="_blank" href="#" class="social-icon-inner facebook" title="Facebook">
                                        <i class="fa fa-facebook"></i><span>Facebook </span>
                                    </a>
                                </li>

                                <li>
                                    <a target="_blank" href="#" class="social-icon-inner twitter" title="Twitter">
                                        <i class="fa fa-twitter"></i><span>Twitter </span>
                                    </a>
                                </li>

                                <li>
                                    <a target="_blank" href="#" class="social-icon-inner google" title="Google Plus">
                                        <i class="fa fa-google-plus"></i><span>Google Plus </span>
                                    </a>
                                </li>

                                <li>
                                    <a target="_blank" href="#" class="social-icon-inner instagram" title="Instagram">
                                        <i class="fa fa-instagram"></i><span>Instagram </span>
                                    </a>
                                </li>

                            </ul>
                        </div>

                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3 footer-col">
                    <div class="footer-block footer-block-4">

                        <h4>
                            <span class="icon"></span>
                        </h4>

                        <div class="content">
                            <ul class="footer-menu">

                                <li><a href="pages/about-us.html">О нас </a></li>

                                <li><a href="#">Условия и положения </a></li>

                                <li><a href="pages/contact-us.html">Свяжитесь с нами</a></li>

                                <li><a href="#">Мой аккаунт </a></li>

                                <li><a href="apps/help-center.html">FAQ </a></li>

                                <li><a href="blogs/news.html">Новости </a></li>

                            </ul>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- End Footer Widgets -->

    <!-- Begin Footer Copyright -->

    <div class="footer-copyright">
        <div class="container">
            <div class="row">

                <div class="col-sm-12 col-xs-12">
                    <div class="copyright">
                        <p> 2018 &copy; ZIM.UZ by <a href="https://t.me/davron112">Achilov D. S. </a>. Все права защищены </p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- End Footer Copyright -->

    <div id="checkLayout">
        <span class="visible-xs-block"></span>
        <span class="visible-sm-block"></span>
        <span class="visible-md-block"></span>
        <span class="visible-lg-block"></span>
    </div>
</footer>

<!-- End Footer -->

</div>

<div id="scroll-to-top" title="Back To Top">
    <a href="javascript:;"><i class="fa fa-angle-up"></i></a>
</div>

<div class="loading" style="display: none;"></div>

<script src="js/api.jquery.js" type="text/javascript"></script>

<script type="text/javascript">
    Shopify.updateCartInfo = function(cart, cart_summary_id, cart_count_id) {
        if ((typeof cart_summary_id) === 'string') {
            var cart_summary = jQuery(cart_summary_id);
            if (cart_summary.length) {

                cart_summary.empty();

                jQuery.each(cart, function(key, value) {
                    if (key === 'items') {

                        if (value.length) {

                            jQuery('<div class="items"></div>').appendTo(cart_summary);
                            var table = jQuery(cart_summary_id + ' div.items');

                            jQuery.each(value, function(i, item) {

                                jQuery('<div class="items-inner"> \
                                    <div class="cart-item-image"> \
                                        <a href="' + item.url + '">\
                                            <img src="' + Shopify.resizeImage(item.image, '90x') + '" alt="" />\
                                        </a>\
                                    </div>\
                                    <div class="cart-item-info">\
                                        <div class="cart-item-title">\
                                            <a href="' + item.url + '">' + item.product_title + '</a>\
                                        </div>\
                                        <div class="cart-item-price">' + item.quantity + '<span class="x"> x </span>' + Shopify.formatMoney(item.price, '<span class="money">${{amount}}</span>') + '</div>\
                                    </div>\
									<a class="cart-close" title="Remove" href="javascript:;" data-cart-remove="' + (i + 1) + '"></a>\
                                    </div>').appendTo(table);
                            });

                            jQuery('<div class="subtotal"><span>Total</span><span class="cart-item-total-price">' + Shopify.formatMoney(cart.total_price, '<span class="money">${{amount}}</span>') + '</span></div>').appendTo(cart_summary);
                            jQuery('<div class="action"><a href="/cart\" class="btn btn-primary">Cart</a><br /><button class="btn btn-default" onclick="window.location=\'/checkout\'">Checkout</button></div>').appendTo(cart_summary);

                        } else {
                            jQuery('<div class="cart-item-empty"><p>Your shopping cart is empty.</p></div>').appendTo(cart_summary);
                        }
                    }
                });

            }
        }

        updateCartDesc(cart);
    };

    function updateCartDesc(data) {
        var $cartLinkText = $('.cart-target .number');
        var $cartPrice = ' - ' + Shopify.formatMoney(data.total_price, '<span class="money">${{amount}}</span>');

        switch (data.item_count) {
            case 0:
                $cartLinkText.html('<span class="n-item">0</span>');
                break;
            case 1:
                $cartLinkText.html('<span class="n-item">1</span>');
                break;
            default:
                $cartLinkText.html('<span class="n-item">' + data.item_count + '</span>');
                break;
        }

        $('.addcart-modal-subtotal').html("<strong>Grand Total:</strong>" + Shopify.formatMoney(data.total_price, '<span class="money">${{amount}}</span>'));

        currenciesCallbackSpecial('#cart-info span.money');
        currenciesCallbackSpecial('#layer-addcart-modal span.money');

    }

    Shopify.onCartUpdate = function(cart) {
        Shopify.updateCartInfo(cart, '#cart-info #cart-content', 'shopping-cart');
    };

    $(window).load(function() {

        Shopify.getCart(function(cart) {

            Shopify.updateCartInfo(cart, '#cart-info #cart-content');

        });
    });
</script>

<div id="quick-shop-popup" class="modal fade" role="dialog" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <span class="close" title="Close" data-dismiss="modal" aria-hidden="true"></span>
            </div>

            <div class="modal-body">
                <div class="row">

                    <div class="col-md-5 product-image">
                        <div id="qs-product-image" class="product-image-inner"></div>
                    </div>

                    <div class="col-md-7 product-info">

                        <h2 id="qs-product-title">Sample Product </h2>

                        <div id="qs-product-author"></div>

                        <div class="qs-price-review-wrapper">
                            <div id="qs-rating"></div>
                            <div id="qs-product-price" class="detail-price"></div>
                        </div>

                        <div id="qs-action-wrapper">

                            <form action="/cart/add" method="post" class="variants" id="qs-product-action" enctype="multipart/form-data">

                                <div id="qs-product-variants" class="variants-wrapper"></div>

                                <div class="quantity-product qs-quantity-product">
                                    <div class="quantity qs-quantity"></div>
                                </div>

                                <div class="qs-product-button">
                                    <div class="qs-action">
                                        <button id="qs-add-cart" class="btn btn-default add-to-cart" type="submit" name="add">Добавить в корзину </button>
                                    </div>
                                </div>

                            </form>

                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

<script>
    jQuery(document).ready(function($) {

        $('#quick-shop-popup').on('shown.bs.modal', function() {

            $('#quick-shop-popup', function() {

                // add zoom effect to featured image
                var zoomImage = $('.zoom-qs .zoom-image');

                zoomImage.elevateZoom({
                    gallery: 'gallery-qs-image',
                    galleryActiveClass: 'active',
                    zoomType: 'lens',
                    cursor: 'pointer',
                    lensShape: "round",
                    lensSize: 300
                });

            });

            // update review
            AT_Main.handleReviews();

        });

        $('#quick-shop-popup').on('hide.bs.modal', function() {
            $(".zoomContainer").remove();
            AT_Main.refreshZoom();
        });

        //Fix page content slight move
        $('#quick-shop-popup').on('hidden.bs.modal', function() {
            AT_Main.fixReturnScroll();
        });

        var productQty = $('.qs-quantity');
        var productImage = $('#qs-product-image');
        var productRating = $('#qs-rating');
        var productTitle = $('#qs-product-title');
        var productAuthor = $('#qs-product-author');
        var productVariantWrapper = $('#qs-product-variants');
        var productPrice = $('#qs-product-price');
        var productAddCart = $('#qs-add-cart');

        $('body').on('click', '.quick_shop:not(.unavailable)', function(event) {

            AT_Main.fixNoScroll();

            var $this = $(this);
            var json_product = $this.find('.json').html();

            // Product data
            var productSelect = JSON.parse(json_product);
            var productSelectID = productSelect.id;

            // Update add cart button
            productAddCart.data('product-id', productSelectID);

            // Update product quantity

            productQty.html('<input type="text" id="qs-quantity" class="' + productSelect.handle + 'item-quantity" name="quantity" value="1" /><span class="qty-wrapper"><span class="qty-inner qs-qty-inner"><span class="qty-up" title="Increase" data-src="#qs-quantity"><i class="fa fa-plus"></i></span><span class="qty-down" title="Decrease" data-src="#qs-quantity"><i class="fa fa-minus"></i></span></span></span>')

            $(".qty-inner .qty-up").on("click", function() {
                var oldValue = $("#qs-quantity").val(),
                    newVal = 1;
                newVal = parseInt(oldValue) + 1;
                $("#qs-quantity").val(newVal);
                console.log(newVal);
            });
            $(".qty-inner .qty-down").on("click", function() {
                var oldValue = $("#qs-quantity").val();
                if (oldValue > 1) {
                    newVal = 1;
                    newVal = parseInt(oldValue) - 1;
                    $("#qs-quantity").val(newVal);
                }
            });

            // Update product image
            productImage.html('');
            var qs_images = productSelect.images;
            if (qs_images.length >= 1) {
                productImage.html('<a class="featured-image zoom-qs"><img class="zoom-image" src="' + Shopify.resizeImage(productSelect.featured_image, "385x") + '" data-zoom-image="' + productSelect.featured_image + '" alt="" /></a>');
            } else {
                productImage.html('<a class="featured-image"><img src="/images/default-image.jpg" alt="" /></a>');
            }

            /*
                     productImage.append('<div class="col-md-1"><div id="gallery-qs-image" class="gallery-thumb-img no-slider"></div></div>');

                     $.each(qs_images, function(index, value) {
                     if(index)
                     productImage.find('#gallery-qs-image').append('<a class="thumb-img" href="'+value+'" data-image="'+ Shopify.resizeImage(value, 'original') +'" data-zoom-image="'+ Shopify.resizeImage(value, 'original') +'"><i class="fa fa-circle"></i></a>');
                     else
                     productImage.find('#gallery-qs-image').append('<a class="thumb-img active" href="'+value+'" data-image="'+ Shopify.resizeImage(value, 'original') +'" data-zoom-image="'+ Shopify.resizeImage(value, 'original') +'"><i class="fa fa-circle"></i></a>');
                     });
                     */

            productRating.html('<div class="shopify-product-reviews-badge" data-id="' + productSelectID + '"></div>')

            // Update product title
            productTitle.html('<a href="/products/' + productSelect.handle + '">' + productSelect.title + '</a>');

            // Update product author
            productAuthor.html('Author&nbsp;' + productSelect.vendor);

            // Produc variants
            var productVariants = productSelect.variants;
            var productVariantsCount = productVariants.length;

            productPrice.html('');
            productVariantWrapper.html('');
            productAddCart.removeAttr('disabled').fadeTo(200, 1);

            if (productVariantsCount > 1) {

                // Show Variants
                productVariantWrapper.show();

                // Variants element
                var productVariantElement = $('<select>', {
                    'id': ('#quick-shop-variants-' + productSelectID),
                    'name': 'id'
                });
                var productVariantOptions = '';

                for (var i = 0; i < productVariantsCount; i++) {
                    productVariantOptions += '<option value="' + productVariants[i].id + '">' + productVariants[i].title + '</option>'
                };

                // Add variants element on page
                productVariantElement.append(productVariantOptions);
                productVariantWrapper.append(productVariantElement);

                // Bind variants to option_selection JS
                new Shopify.OptionSelectors(('#quick-shop-variants-' + productSelectID), {
                    product: productSelect,
                    onVariantSelected: selectQSOptionCallback
                });

                // Add label if only one product option
                if (productSelect.options.length == 1) {
                    $('#qs-product-action .selector-wrapper:eq(0)').prepend('<label>' + productSelect.options[0] + '</label>');
                }

                // Select first variant on page
                var found_one_in_stock = false;
                for (var i = 0; i < productSelect.variants.length; i++) {

                    var variant = productSelect.variants[i];
                    if (variant.available && found_one_in_stock == false) {

                        found_one_in_stock = true;
                        for (var j = 0; j < variant.options.length; j++) {

                            $('.single-option-selector:eq(' + j + ')').val(variant.options[j]).trigger('change');

                        }
                    }
                }

            } else {

                // Hide unnecessary variants
                productVariantWrapper.hide();

                // Build variants element
                var productVariantElement = $('<select>', {
                    'id': ('#quick-shop-variants-' + productSelectID),
                    'name': 'id'
                });
                var productVariantOptions = '';

                for (var i = 0; i < productVariantsCount; i++) {
                    productVariantOptions += '<option value="' + productVariants[i].id + '">' + productVariants[i].title + '</option>'
                };

                // Add variants element on page
                productVariantElement.append(productVariantOptions);
                productVariantWrapper.append(productVariantElement);

                // Update the add button to variant id
                productAddCart.data('variant-id', productVariants[0].id);

                // Check product is on sale
                if (productVariants[0].compare_at_price > 0 && productVariants[0].compare_at_price > productVariants[0].price) {
                    productPrice.html('<del class="price-compare">' + Shopify.formatMoney(productVariants[0].compare_at_price, '<span class="money">${{amount}}</span>') + '</del>' + '<span class="price-sale">' + Shopify.formatMoney(productVariants[0].price, '<span class="money">${{amount}}</span>') + '</span>');
                } else {
                    productPrice.html('<span class="price">' + Shopify.formatMoney(productVariants[0].price, '<span class="money">${{amount}}</span>') + '</span>');
                }

            }

            currenciesCallbackSpecial('#quick-shop-popup span.money');

        });

        // selectQSOptionCallback
        var selectQSOptionCallback = function(variant, selector) {

            // selected a valid and in stock variant
            if (variant && variant.available) {

                // Update variant image
                if (variant.featured_image) {
                    var originalImage = $("#qs-product-image .zoom-qs img");
                    var newImage = variant.featured_image;
                    var element = originalImage[0];
                    Shopify.Image.switchImage(newImage, element, function(newImageSizedSrc, newImage, element) {
                        $(element).attr('src', newImageSizedSrc);
                        $(element).attr('data-image', newImageSizedSrc);
                        $('.zoomWindowContainer div').stop().css("background-image", "url(" + newImageSizedSrc + ")");
                    });
                }

                productAddCart.data('variant-id', variant.id);

                productAddCart.removeAttr('disabled').fadeTo(200, 1);

                // check if variant is on sale
                if (variant.compare_at_price > 0 && variant.compare_at_price > variant.price) {
                    productPrice.html('<span class="price-sale">' + Shopify.formatMoney(variant.price, '<span class="money">${{amount}}</span>') + '</span>' + '<del class="price-compare">' + Shopify.formatMoney(variant.compare_at_price, '<span class="money">${{amount}}</span>') + '</del>');
                } else {
                    productPrice.html('<span class="price">' + Shopify.formatMoney(variant.price, '<span class="money">${{amount}}</span>') + '</span>');
                };

                // selected an invalid or out of stock variant
            } else {

                // disabled variant doesn't exist
                productAddCart.attr('disabled', 'disabled').fadeTo(200, 0.5);

                var message = variant ? "Sold Out" : "Sold Out";
                productPrice.html('<span class="unavailable">' + message + '</span>');

            }

            currenciesCallbackSpecial('#quick-shop-popup span.money');

        }

    });
</script>

<div id="layer-addcart-modal" style="display: none; position: fixed;  top: 0%; left: 0%; width: 100%; height: 100%; ">
    <div class="layer-addcart-modal">

        <div class="addcart-overlay"></div>

        <div class="addcart-modal-box" style="display: none;">

            <div class="addcart-modal-content">
                <p class="note">
                    <i class="fa fa-check"></i> Product successfully added to  Shopping Cart
                </p>

                <div class="addcart-modal-product">
                    <div class="addcart-modal-image"></div>
                    <div class="addcart-modal-info">
                        <div class="addcart-modal-title"></div>
                        <div class="addcart-modal-variant"></div>
                        <div class="addcart-modal-qty"></div>
                        <div class="addcart-modal-price"></div>
                    </div>
                </div>

                <div class="addcart-modal-action">
                    <div class="addcart-modal-number"></div>
                    <div class="addcart-modal-subtotal"></div>
                    <div class="addcart-modal-button">
                        <div class="addcart-modal-continue">
                            <a href="javascript:void(null)" onclick="addcartModalHide()" class="btn btn-custom btn-continue">Continue Shopping </a>
                        </div>
                        <div class="addcart-modal-checkout">
                            <a class="btn btn-default" href="cart.html">Proceed to Checkout </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="addcart-modal-close" onclick="addcartModalHide()" title="Close"><i class="fa fa-times"></i></div>

        </div>

    </div>
</div>

<div id="wishlist-popup" class="modal fade" role="dialog" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <button class="close cp-close" aria-label="Close" data-dismiss="modal" type="button">
                <span aria-hidden="true">&#xD7; </span>
            </button>

            <div class="content-wrapper row">
                <div class="row">

                    <div class="product-wishlist-template-wrapper hidden" id="product-wishlist-template-wrapper">
                        <table class="table table-bordered product_wishlist_template">
                            <tbody>

                            <tr class="features">
                                <td class="heading-col feature-features"> <span>Features </span></td>
                                <td class="product-col wishlist_features product-_product_id_">
                                    <div class="remove">
                                        <a class="wishlist_remove remove-product-wishlist" href="#" title="Remove" data-handle-product="_product_handle_" data-id-product="_product_id_"> <i class="fa fa-trash"></i> </a>
                                    </div>
                                    <div class="product-image-block">
                                        <a class="product_image" href="_product_url_" title="_product_title_"> <img class="img-responsive cmp-product-image" att-image-src="_product_image_" alt="_product_title_" /> </a>
                                    </div>
                                    <h5 class="product-name"> <a class="product-title" href="_product_url_" title="_product_title_">_product_title_ </a></h5>
                                    <div class="product-price"><span class="price price-wishlist product-old-price hidden">_product_old_price_ </span><span class="price">_product_price_ </span></div>
                                    <div class="wishlist_product_infos">
                                        <div class="clearfix">
                                            <div class="button-container">
                                                <form action="/cart/add" method="post" class="product-action variants" enctype="multipart/form-data">
                                                    <button type="button" class="add-to-cart btn btn-default" id="add-to-cart">Добавить в корзину </button>
                                                    <input type="text" value="1" min="1" name="quantity" class="item-quantity hidden" id="quantity" />
                                                    <input class="hidden" type="hidden" name="id" id="product-select-_product_variant_id_" value="_product_variant_id_" />
                                                </form>
                                                <a class="button lnk_view btn btn-primary" href="_product_url_" title="View"> <span>View </span> </a>
                                            </div>
                                        </div>
                                    </div>
                                </td>

                            </tr>

                            <tr class="availability">
                                <td class="heading-col feature-availability"> <strong>Availability </strong></td>
                                <td class="product-col wishlist_availability product-_product_id_">_product_availability_ </td>
                            </tr>

                            <tr class="options">
                                <td class="heading-col feature-options"> <strong>Options </strong></td>
                                <td class="product-col wishlist_options product-_product_id_">_product_options_ </td>
                            </tr>
                            <tr class="vendor">
                                <td class="heading-col feature-vendor"> <strong>Author </strong></td>
                                <td class="product-col wishlist_vendor product-_product_id_">_product_vendor_ </td>
                            </tr>
                            <tr class="collection">
                                <td class="heading-col feature-collection"> <strong>Collection </strong></td>
                                <td class="product-col wishlist_collection product-_product_id_">_product_collection_ </td>
                            </tr>

                            <tr class="rating">
                                <td class="heading-col feature-rating"> <strong>Rating </strong></td>
                                <td class="product-col wishlist_rating product-_product_id_">_product_rating_ </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                    <div id="product-wishlist"></div>

                </div>
            </div>

        </div>
    </div>
</div>

<script src="/js/bc.wishlist.js"></script>
<script>
    jQuery(document).ready(function($) {
        Shopify.Wishlist.initWishlist();
    });
</script>

<div id="compare-popup" class="modal fade" role="dialog" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <button class="close" aria-label="Close" data-dismiss="modal" type="button">
                <span aria-hidden="true">&#xD7; </span>
            </button>

            <div class="content-wrapper row">
                <div class="row">

                    <div class="product-comparison-template-wrapper hidden" id="product-comparison-template-wrapper">
                        <table class="table table-bordered product_comparison_template">
                            <tbody>

                            <tr class="features ">
                                <td class="heading-col feature-features"> <span>Features </span></td>
                                <td class="product-col comparison_features product-___product_id___">
                                    <div class="remove">
                                        <a class="compare_remove remove-product-compare" href="#" title="Remove" data-handle-product="___product_handle___" data-id-product="___product_id___"> <i class="fa fa-trash"></i> </a>
                                    </div>
                                    <div class="product-image-block">
                                        <a class="product_image" href="___product_url___" title="___product_title___"> <img class="img-responsive cmp-product-image" att-image-src="___product_image___" alt="___product_title___" /> </a>
                                        <div class="label-box">___product_label_sale___ ___product_label_new___ </div>
                                    </div>
                                    <h5 class="product-name">  <a class="product-title" href="___product_url___" title="___product_title___">___product_title___ </a></h5>
                                    <div class="product-price"><span class="price price-compare product-old-price hidden">___product_old_price___ </span><span class="price">___product_price___ </span></div>
                                    <div class="comparison_product_infos">
                                        <p class="comparison_availability_statut"> <span class="availability_label">Availability  </span> <span class="availability_value"> ___product_availability___  </span></p>
                                        <div class="clearfix">
                                            <div class="button-container">
                                                <form action="/cart/add" method="post" class="product-action variants" enctype="multipart/form-data">
                                                    <button type="button" class="add-to-cart btn btn-primary" id="add-to-cart">Add to cart </button>
                                                    <input type="text" value="1" min="1" name="quantity" class="item-quantity hidden" id="quantity" />
                                                    <input class="hidden" type="hidden" name="id" id="product-select-___product_variant_id___" value="___product_variant_id___" />
                                                </form>
                                                <a class="button lnk_view btn btn-default" href="___product_url___" title="View"> <span>View </span> </a>
                                            </div>
                                        </div>
                                    </div>
                                </td>

                            </tr>

                            <tr class="availability ">
                                <td class="heading-col feature-availability"> <strong>Availability </strong></td>
                                <td class="product-col comparison_availability product-___product_id___">___product_availability___ </td>
                            </tr>

                            <tr class="options ">
                                <td class="heading-col feature-options"> <strong>Options </strong></td>
                                <td class="product-col comparison_options product-___product_id___">___product_options___ </td>
                            </tr>
                            <tr class="vendor ">
                                <td class="heading-col feature-vendor"> <strong>Author </strong></td>
                                <td class="product-col comparison_vendor product-___product_id___">___product_vendor___ </td>
                            </tr>
                            <tr class="collection ">
                                <td class="heading-col feature-collection"> <strong>Collection </strong></td>
                                <td class="product-col comparison_collection product-___product_id___">___product_collection___ </td>
                            </tr>

                            <tr class="rating ">
                                <td class="heading-col feature-rating"> <strong>Rating </strong></td>
                                <td class="product-col comparison_rating product-___product_id___">___product_rating___ </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                    <div id="product-compare"></div>

                </div>
            </div>

        </div>
    </div>
</div>

<script src="/js/bc.compare.js"></script>
<script>
    jQuery(document).ready(function($) {
        Shopify.Compare.initCompare();
    });
</script>

<script src="/js/currencies.js"></script>
<script src="/js/jquery.currencies.min.js"></script>

<script type="text/javascript">
    jQuery('.currencies li').on('click', function() {
        jQuery('.currencies li').removeClass('active');
        jQuery(this).addClass('active');

        var selectedValue = jQuery(this).find('input[type=hidden]').val();

        jQuery('.currencies_src option').attr('selected', false);
        jQuery('.currencies_src option[value=' + selectedValue + ']').attr('selected', true);

        Currency.convertAll(Currency.currentCurrency, selectedValue);

        jQuery('.currency_code').html($(this).find('a span').html());
    });

    var shopCurrency = '',
        defaultCurrency = '',
        cookieCurrency = '';
    currenciesCallback();

    function currenciesCallback() {

        Currency.format = 'money_format';

        shopCurrency = 'USD';

        /* Sometimes merchants change their shop currency, let's tell our JavaScript file */
        Currency.money_with_currency_format[shopCurrency] = "${{amount}} USD";
        Currency.money_format[shopCurrency] = "${{amount}}";

        /* Default currency */
        defaultCurrency = 'USD' || shopCurrency;

        /* Cookie currency */
        cookieCurrency = Currency.cookie.read();

        /* Fix for customer account pages */
        jQuery('span.money span.money').each(function() {
            jQuery(this).parents('span.money').removeClass('money');
        });

        /* Saving the current price */
        jQuery('span.money').each(function() {
            jQuery(this).attr('data-currency-USD', jQuery(this).html());
        });

        // If there's no cookie.
        if (cookieCurrency == null) {
            if (shopCurrency !== defaultCurrency) {
                Currency.convertAll(shopCurrency, defaultCurrency);
            } else {
                Currency.currentCurrency = defaultCurrency;
            }
            Currency.cookie.write(defaultCurrency);
        }
        // If the cookie value does not correspond to any value in the currency dropdown.
        else if (jQuery('[name=currencies]').size() && jQuery('[name=currencies] option[value=' + cookieCurrency + ']').size() === 0) {
            Currency.currentCurrency = shopCurrency;
            Currency.cookie.write(shopCurrency);
        } else if (cookieCurrency === shopCurrency) {
            Currency.currentCurrency = shopCurrency;
        } else {
            Currency.convertAll(shopCurrency, cookieCurrency);

            jQuery('.currencies li').removeClass('active');
            jQuery('.currencies .currency-' + cookieCurrency).addClass('active');
            jQuery('.currency_code').html(jQuery('.currencies .currency-' + cookieCurrency).find('a span').html());
        }

        jQuery('.currencies_src').on("change", function(e) {

            var newCurrency = jQuery(e.currentTarget).find(':selected').attr('value');
            jQuery('.selected-currency').text(Currency.currentCurrency);
            if ($('.templateProduct').length != 0)
                updatePricing();

        });
    }

    function currenciesCallbackSpecial(id) {
        /* Saving the current price */
        jQuery(id).each(function() {
            jQuery(this).attr('data-currency-USD', jQuery(this).html());
        });

        /* Update currency */
        Currency.convertAll(shopCurrency, Currency.cookie.read(), id, 'money_format');
    }
</script>

<div id="mailchimp-popup" style="display:none;" data-expires="1">

    <div class="mailchimp-popup-content">

        <h4 class="title">Join Our Newsletter </h4>

        <div class="mailchimp-caption-1">
            <span>Subscribe to the BookShop __________ to receive timely updates ____ your favorite products. </span>
        </div>

        <form id="mc-form" action="//bitcode.us10.list-manage.com/subscribe/post?u=55ec8b9611a3d9c0ad6f3fc62&amp;id=1cbb85b057" method="post" name="mc-embedded-subscribe-form" target="_blank">
            <i class="fa fa-envelope"></i>
            <input id="mc-email" class="input-block-level" type="email" name="EMAIL" placeholder="Enter your e-mail address" required="" />
            <button class="btn btn-default" type="submit">Subscribe </button>
        </form>
    </div>

    <div class="mailchimp-popup-img">
        <img alt="" src="/images/mailchip_popup_bg.jpg" />
    </div>

</div>

<script type="text/javascript">
    // (c) Copyright 2014 Caroline Schnapp. All Rights Reserved. Contact: mllegeorgesand@gmail.com
    // See http://docs.shopify.com/manual/configuration/store-customization/advanced-navigation/linked-product-options

    var Shopify = Shopify || {};

    Shopify.optionsMap = {};

    Shopify.updateOptionsInSelector = function(selectorIndex) {

        switch (selectorIndex) {
            case 0:
                var key = 'root';
                var selector = jQuery('.single-option-selector:eq(0)');
                break;
            case 1:
                var key = jQuery('.single-option-selector:eq(0)').val();
                var selector = jQuery('.single-option-selector:eq(1)');
                break;
            case 2:
                var key = jQuery('.single-option-selector:eq(0)').val();
                key += ' / ' + jQuery('.single-option-selector:eq(1)').val();
                var selector = jQuery('.single-option-selector:eq(2)');
        }

        var initialValue = selector.val();
        selector.empty();
        var availableOptions = Shopify.optionsMap[key];
        for (var i = 0; i < availableOptions.length; i++) {
            var option = availableOptions[i];
            var newOption = jQuery('<option></option>').val(option).html(option);
            selector.append(newOption);
        }
        jQuery('.swatch[data-option-index="' + selectorIndex + '"] .swatch-element').each(function() {
            if (jQuery.inArray($(this).attr('data-value'), availableOptions) !== -1) {
                $(this).removeClass('soldout').show().find(':radio').removeAttr('disabled', 'disabled').removeAttr('checked');
            } else {
                $(this).addClass('soldout').hide().find(':radio').removeAttr('checked').attr('disabled', 'disabled');
            }
        });
        if (jQuery.inArray(initialValue, availableOptions) !== -1) {
            selector.val(initialValue);
        }
        selector.trigger('change');

    };

    Shopify.linkOptionSelectors = function(product) {
        // Building our mapping object.
        for (var i = 0; i < product.variants.length; i++) {
            var variant = product.variants[i];
            if (variant.available) {
                // Gathering values for the 1st drop-down.
                Shopify.optionsMap['root'] = Shopify.optionsMap['root'] || [];
                Shopify.optionsMap['root'].push(variant.option1);
                Shopify.optionsMap['root'] = Shopify.uniq(Shopify.optionsMap['root']);
                // Gathering values for the 2nd drop-down.
                if (product.options.length > 1) {
                    var key = variant.option1;
                    Shopify.optionsMap[key] = Shopify.optionsMap[key] || [];
                    Shopify.optionsMap[key].push(variant.option2);
                    Shopify.optionsMap[key] = Shopify.uniq(Shopify.optionsMap[key]);
                }
                // Gathering values for the 3rd drop-down.
                if (product.options.length === 3) {
                    var key = variant.option1 + ' / ' + variant.option2;
                    Shopify.optionsMap[key] = Shopify.optionsMap[key] || [];
                    Shopify.optionsMap[key].push(variant.option3);
                    Shopify.optionsMap[key] = Shopify.uniq(Shopify.optionsMap[key]);
                }
            }
        }
        // Update options right away.
        Shopify.updateOptionsInSelector(0);
        if (product.options.length > 1) Shopify.updateOptionsInSelector(1);
        if (product.options.length === 3) Shopify.updateOptionsInSelector(2);
        // When there is an update in the first dropdown.
        jQuery(".single-option-selector:eq(0)").change(function() {
            Shopify.updateOptionsInSelector(1);
            if (product.options.length === 3) Shopify.updateOptionsInSelector(2);
            return true;
        });
        // When there is an update in the second dropdown.
        jQuery(".single-option-selector:eq(1)").change(function() {
            if (product.options.length === 3) Shopify.updateOptionsInSelector(2);
            return true;
        });

    };
</script>

<script type="text/javascript">
    var _bc_config = {
        "home_slideshow_auto_delay": "7000",
        "show_multiple_currencies": "true",
        "money_format": '<span class="money">${{amount}}</span>',
        "enable_image_blance": "false",
        "image_blance_width": "270",
        "image_blance_height": "380",
        "enable_title_blance": "true"
    };
</script>

<script type="text/javascript">
    jQuery(function() {
        CartJS.init({
            "token": "24ac195b206b145bbce0db4046717de8",
            "note": null,
            "attributes": {},
            "original_total_price": 0,
            "total_price": 0,
            "total_discount": 0,
            "total_weight": 0,
            "item_count": 0,
            "items": [],
            "requires_shipping": false
        }, {
            dataAPI: true,
            moneyFormat: '<span class="money">${{amount}}</span>',
            moneyWithCurrencyFormat: '<span class="money">${{amount}} USD</span>',
            requestBodyClass: "cart-loading"
        });

    });
</script>

<script type="text/javascript" src="/js/eu-cookie-support-opt-in.js"></script>
<script type="text/javascript" src="/js/eu-require-opt-in.js"></script>
<script >$(document).ready(function(){
        var i = 1;
        var active = "";
        var current = "";

        $('.image1').click(function(event) {
            event.preventDefault();
            $(".timage").fadeIn(300).addClass('active-slide').addClass('timagec');
        });
        $('.image2').click(function(event) {
            event.preventDefault();
            $(".timage").fadeIn(300).addClass('active-slide').removeClass('timageb').removeClass('timagec').addClass('timagea');
        });
        $('.image3').click(function(event) {
            event.preventDefault();
            $(".timage").fadeIn(300).addClass('active-slide').removeClass('timagec').addClass('timageb');
        });
        $('.timage').on('click', function(){
            $(".timage").fadeOut(300).removeClass('active-slide');
        });

        $('#wrapper a').bind('click', function(e){
            current = $(this).attr("href");

            if($('#hiddenMobileTest').css('float') === 'left'){
                if(active === current){
                    console.log(active, current);
                }
                else{
                    e.preventDefault();
                    console.log(active, current);
                    active = $(this).attr("href");
                }
            }
        });

    });



    $(window).on('load resize', function () {
        var div = $('.smallBox');
        var div2 = $('.bigBox');
        var div4 = $('.tinyBox');
        var timage = $('.timage');
        var width = div.width();
        var div3 = $('#wrapper');
        var marginL = div3.css('margin-left').replace("px", "");
        var width3 = div4.width();
        var margin = marginL / 2;
        var timageS = width*2;

        var getMargin = +div.css('margin-left').replace("px", "");

        div4.css('height', width3);
        div3.css('marginTop', margin + "px");
        div3.css('marginBottom', margin + "px");
        div.css('height', width);
        div2.css('height', width);
        timage.css('margin', getMargin + "px")
        timage.css('height', ((width + getMargin)*2));
        timage.css('width', ((width + getMargin)*2));
    });
    //# sourceURL=pen.js
</script>
</div>

</body>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
