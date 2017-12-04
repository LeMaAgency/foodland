<?php
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();

use \WM\Common\Helper;

foreach($arResult['ITEMS'] as $k => $arItem)
{
    //show or not like block
    $arResult['ITEMS'][$k]['SHOW_LIKE'] = Helper::propValue('SHOW_LIKE', $arItem) == 'Y';
    //one row or two?
    $arResult['ITEMS'][$k]['TWO_COLUMNS'] = Helper::propValue('TWO_COLUMNS', $arItem) == 'Y';
    //show text in top block
    $arResult['ITEMS'][$k]['TEXT_IN_TOP_BLOCK'] = Helper::propValue('TEXT_IN_TOP_BLOCK', $arItem) == 'Y';

    //type of line
    switch($arItem['PROPERTIES']['LINE_ORIENTATION']['VALUE_XML_ID'])
    {
        case 'down':
            $arResult['ITEMS'][$k]['ITEM_CLASS'] = 'recommendation__block__line_down';
        break;
        case 'bottom':
            $arResult['ITEMS'][$k]['ITEM_CLASS'] = 'recommendation__block__line_bottom';
        break;
        case 'right_top':
            $arResult['ITEMS'][$k]['ITEM_CLASS'] = 'recommendation__block__line_right-top';
        break;
        case 'right':
            $arResult['ITEMS'][$k]['ITEM_CLASS'] = 'recommendation__block__line_right';
        break;
        default:
            $arResult['ITEMS'][$k]['ITEM_CLASS'] = '';
    }
}

//show or not wrapper
$arResult['SHOW_WRAPPER'] = empty($arParams['SHOW_WRAPPER']) || $arParams['SHOW_WRAPPER'] != 'N';