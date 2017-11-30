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
            'https://fonts.googleapis.com/css?family=Comfortaa:400,700|Open+Sans:300,400,600',
            'https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css',
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
<div class="wrap">
    <header>
        <div class="header <?$APPLICATION->ShowViewContent('header_class');?>">
            <? $APPLICATION->ShowPanel(); ?>
            <div class="header__logo">
                <? if($APPLICATION->GetCurDir() == SITE_DIR): ?>
                    <img src="/assets/images/logo.png" alt="<?=Loc::getMessage('LEMA_HEADER_LOGO_TITLE');?>">
                <? else: ?>
                    <a href="<?=SITE_DIR;?>"><img src="/assets/images/logo.png" alt="<?=Loc::getMessage('LEMA_HEADER_LOGO_TITLE');?>"></a>
                <? endif; ?>
            </div>
            <nav class="header__nav nav" data-resize="nav" data-resize-width="1000">
                <? $APPLICATION->IncludeComponent('bitrix:menu', 'top_menu', Array(
                        'ROOT_MENU_TYPE' => 'top',
                        'MAX_LEVEL' => '1',
                        'CHILD_MENU_TYPE' => 'top',
                        'USE_EXT' => 'N',
                        'DELAY' => 'N',
                        'ALLOW_MULTI_SELECT' => 'N',
                        'MENU_CACHE_TYPE' => 'A',
                        'MENU_CACHE_TIME' => '3600',
                        'MENU_CACHE_USE_GROUPS' => 'N',
                        'MENU_CACHE_GET_VARS' => '',
                    )
                ); ?>
            </nav>
            <div class="header__modal">
                <svg class="header__modal__close" width="30px" height="30px" viewBox="0 0 357 357">
                    <polygon
                            points="357,35.7 321.3,0 178.5,142.8 35.7,0 0,35.7 142.8,178.5 0,321.3 35.7,357 178.5,214.2 321.3,357 357,321.3 214.2,178.5"></polygon>
                </svg>
                <div class="menu-site-map">
                    <div class="header__modal_mobile">
                        <div class="menu-site-map__title"><?=Loc::getMessage('LEMA_HEADER_MENU_TITLE');?></div>
                        <ul class="menu-site-map__nav nav" data-resize-after="nav"></ul>
                    </div>
                    <? $APPLICATION->IncludeComponent('bitrix:main.map', 'sitemap', array(
                        'LEVEL' => '0',
                        'COL_NUM' => '1',
                        'SHOW_DESCRIPTION' => 'N',
                        'SET_TITLE' => 'N',
                        'CACHE_TYPE' => 'A',
                        'CACHE_TIME' => '3600',
                    )); ?>
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
                    <span><? $APPLICATION->IncludeFile(SITE_DIR . 'include/header/scheme_title.php'); ?></span>
                </a>
            </div>
        </div>
    </header>
