<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
use Bitrix\Main\Page\Asset;
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>


    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title><?$APPLICATION->ShowTitle();?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="<?= SITE_TEMPLATE_PATH ?>/assets/img/favicon.png">

    <!-- Шрифты -->
    <!-- google fonts -->



    <!-- Стили (CSS) -->
    <!-- bootstrap css -->
    <?
    Asset::getInstance()->addString('<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH. '/assets/css/bootstrap.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH. '/assets/css/owl.carousel.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH. '/assets/css/animate-text.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH. '/assets/css/magnific-popup.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH. '/assets/css/et-line.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH. '/assets/css/pe-icon-7-stroke.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH. '/assets/css/shortcode/shortcodes.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH. '/assets/css/meanmenu.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH. '/assets/css/font-awesome.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH. '/assets/style.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH. '/assets/css/responsive.css');

    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH. '/assets/js/vendor/modernizr-2.8.3.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH. '/assets/js/vendor/jquery-1.12.0.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH. '/assets/js/bootstrap.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH. '/assets/js/owl.carousel.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH. '/assets/js/jquery.counterup.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH. '/assets/js/waypoints.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH. '/assets/js/jquery.magnific-popup.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH. '/assets/js/jquery.mixitup.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH. '/assets/js/jquery.meanmenu.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH. '/assets/js/jquery.nav.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH. '/assets/js/jquery.parallax-1.1.3.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH. '/assets/js/animate-text.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH. '/assets/js/plugins.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH. '/assets/js/main.js');

    ?>


    <?$APPLICATION->ShowHead();?>
</head>
<body>
<div id="panel">
    <?$APPLICATION->ShowPanel();?>
</div>
<!--[if lt IE 8]>
<p class="browserupgrade">Вы используете <strong>устаревший</strong> браузер. Пожалуйста
    <a href="http://browsehappy.com/">обновите его</a>
</p>
<![endif]-->



<!-- Шапка сайта (меню) -->
<header id="sticky-header" class="header-area header-wrapper white-bg">
    <!-- Меню (для десктопа) -->
    <div class="header-middle-area full-width">
        <div class="container">
            <div class="full-width-mega-dropdown">
                <div class="row">
                    <!-- Логотип -->
                    <div class="col-md-2 col-sm-3 col-xs-8">
                        <div class="logo ptb-22">
                            <a href="/">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/logo/logo.jpg" alt="main logo">
                            </a>
                        </div>
                    </div>

                    <!-- Меню (основное) -->
                    <div class="col-md-10 col-sm-9 col-xs-4 text-right dark-menu">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "topmenu",
                            Array(
                                "ALLOW_MULTI_SELECT" => "N",
                                "CHILD_MENU_TYPE" => "",
                                "DELAY" => "N",
                                "MAX_LEVEL" => "1",
                                "MENU_CACHE_GET_VARS" => array(""),
                                "MENU_CACHE_TIME" => "3600",
                                "MENU_CACHE_TYPE" => "N",
                                "MENU_CACHE_USE_GROUPS" => "Y",
                                "ROOT_MENU_TYPE" => "top",
                                "USE_EXT" => "N"
                            )
                        );?>


                    </div>
                </div>
            </div>
        </div>
    </div>


</header>

<!-- Хлебные крошки (навигация) -->
<div class="breadcrumb-area brand-bg ptb-100">
    <div class="container width-100">
        <div class="row z-index">
            <div class="col-md-7 col-sm-6">
                <div class="breadcrumb-title">
                    <h2 class="white-text">Новостной сайт товаров</h2>
                </div>
            </div>
            <div class="col-md-5 col-sm-6">
                <div class="breadcrumb-menu">
                    <ol class="breadcrumb text-right">
                        <li>
                            <a href="index.html">Главная</a>
                        </li>
                        <li>
                            <a href="/news">Новости</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .bx-newslist-date{
        display:none;
    }
    </style>
	
						