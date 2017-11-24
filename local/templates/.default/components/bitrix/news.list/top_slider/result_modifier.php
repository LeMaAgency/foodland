<?php
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();

use \WM\Common\Helper;

foreach($arResult['ITEMS'] as $k => $arItem)
{
    if(Helper::propFilled('LOGO_IMG', $arItem))
        $arResult['ITEMS'][$k]['PROPERTIES']['LOGO_IMG']['VALUE_SRC'] = \CFile::GetPath(Helper::propValue('LOGO_IMG', $arItem));
    if(Helper::propFilled('LOGO_TITLE_IMG', $arItem))
        $arResult['ITEMS'][$k]['PROPERTIES']['LOGO_TITLE_IMG']['VALUE_SRC'] = \CFile::GetPath(Helper::propValue('LOGO_TITLE_IMG', $arItem));
}