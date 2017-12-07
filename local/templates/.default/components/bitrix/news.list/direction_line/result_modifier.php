<?php
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();

use \WM\Common\Helper;

foreach($arResult['ITEMS'] as $k => $arItem)
{
    if(Helper::propFilled('ORIENTATION', $arItem))
    {
        switch($arItem['PROPERTIES']['ORIENTATION']['VALUE_XML_ID'])
        {
            case 'left':
                $arResult['ITEMS'][$k]['ITEM_CLASS'] = 'structure-company__wrap_pad-left';
            break;
            case 'middle':
                $arResult['ITEMS'][$k]['ITEM_CLASS'] = '';
            break;
            case 'right':
                $arResult['ITEMS'][$k]['ITEM_CLASS'] = 'structure-company__wrap_pad-right';
            break;
        }
    }
    else
        $arResult['ITEMS'][$k]['ITEM_CLASS'] = '';
}

usort($arResult['ITEMS'], function($x, $y) {
    return $x['PROPERTIES']['ORIENTATION']['VALUE_XML_ID'] > $y['PROPERTIES']['ORIENTATION']['VALUE_XML_ID'];
});