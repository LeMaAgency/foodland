<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();

use \Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);

?><!DOCTYPE html>
<html lang="<?=LANGUAGE_ID;?>">
<head>
    <? $APPLICATION->ShowHead(); ?>

    <title><? $APPLICATION->ShowTitle(); ?></title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport'/>

    <?php
    //init js & css
    $assetManager = new \WM\Common\AssetManager();

    $assetManager
        ->addCssArray(array(
            '//maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css',
            '/assets/css/style.css',
            '/assets/css/custom.css',
        ))
        ->init(array('fx'))
        ->addJsArray(array(
            '/assets/js/libs/jquery.min.js',
            '/assets/js/libs/slick.js',
            '/assets/js/libs/anime.js',
            '/assets/js/libs/scroll/jquery.mousewheel.js',
            '/assets/js/libs/scroll/jquery.jscrollpane.min.js',
            '/assets/js/scripts.min.js',
            '/assets/js/custom.js',
        ));
    ?>

</head>
<body>
<? $APPLICATION->ShowPanel(); ?>
<div class="wrap">
    <header>
        <div class="header">
            <div class="header__logo">
                <? if($APPLICATION->GetCurDir() == SITE_DIR): ?>
                    <img src="/assets/images/logo.png" alt="Логотип">
                <? else: ?>
                    <a href="<?=SITE_DIR;?>"><img src="/assets/images/logo.png" alt="Логотип"></a>
                <? endif; ?>
            </div>
            <nav class="header__nav nav" data-resize="nav" data-resize-width="1000">
                <ul>
                    <li><a href="" title="">о компании</a></li>
                    <li><a href="" title="">собственное производство</a></li>
                    <li><a href="" title="">каталог товаров</a></li>
                </ul>
            </nav>
            <div class="header__modal">
                <svg class="header__modal__close" width="30px" height="30px" viewBox="0 0 357 357">
                    <polygon
                            points="357,35.7 321.3,0 178.5,142.8 35.7,0 0,35.7 142.8,178.5 0,321.3 35.7,357 178.5,214.2 321.3,357 357,321.3 214.2,178.5"></polygon>
                </svg>
                <div class="menu-site-map">
                    <div class="header__modal_mobile">
                        <div class="menu-site-map__title">Меню</div>
                        <ul class="menu-site-map__nav nav" data-resize-after="nav"></ul>
                    </div>
                    <div class="menu-site-map__title">Карта сайта</div>
                    <ul class="menu-site-map__nav">
                        <li><a href="" title="">о нас</a></li>
                        <li><a href="" title="">рецепты</a></li>
                        <li><a href="" title="">возможности</a></li>
                        <li><a href="" title="">товары для разницы</a></li>
                        <li><a href="" title="">топ-10 продукции</a></li>
                        <li><a href="" title="">события</a></li>
                        <li><a href="" title="">упаковка</a></li>
                        <li><a href="" title="">преимущества</a></li>
                        <li><a href="" title="">для сегмента HoReCa</a></li>
                        <li><a href="" title="">торговые марки</a></li>
                        <li><a href="" title="">предложения</a></li>
                        <li><a href="" title="">новинки</a></li>
                        <li><a href="" title="">что прозводим</a></li>
                        <li><a href="" title="">для производства</a></li>
                    </ul>
                </div>
            </div>
            <svg class="header__nav-btn" width="30" height="23" viewBox="0 0 30 23">
                <g transform="translate(-1750 -38)">
                    <path d="M1751.5 48h27a1.5 1.5 0 1 1 0 3h-27a1.5 1.5 0 1 1 0-3zm0-10h27a1.5 1.5 0 1 1 0 3h-27a1.5 1.5 0 1 1 0-3zm0 20h27a1.5 1.5 0 1 1 0 3h-27a1.5 1.5 0 1 1 0-3z"></path>
                </g>
            </svg>
            <div class="header__map-btn">
                <a href="" title="">
                    <svg class="svg" width="27" height="37" viewBox="0 0 27 37">
                        <g transform="translate(-1857 -16)">
                            <path d="M1884 29.5c0 7.46-12.82 23.5-13.5 23.5-.98 0-13.5-16.04-13.5-23.5a13.5 13.5 0 1 1 27 0zm-19 0a5.5 5.5 0 1 0 11 0 5.5 5.5 0 0 0-11 0z"></path>
                        </g>
                    </svg>
                    <br>
                    <span>Схема<br>проезда</span>
                </a>
            </div>
        </div>
    </header>
