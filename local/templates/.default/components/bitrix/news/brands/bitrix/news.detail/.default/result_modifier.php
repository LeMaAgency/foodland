<?php
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();

use \WM\Common\Helper;

if(Helper::propFilled('URL', $arResult))
{
    $url = Helper::propValue('URL', $arResult);
    if(preg_match('~^https?://(.+)$~iu', $url, $m))
    {
        $arResult['PROPERTIES']['URL']['VALUE'] = $m[0];
    }
    else
    {
        $arResult['PROPERTIES']['URL']['VALUE'] = '//' . $url;
    }
    if(empty($arResult['PROPERTIES']['URL']['DESCRIPTION']))
        $arResult['PROPERTIES']['URL']['DESCRIPTION'] = empty($m[1]) ? $url : $m[1];
}