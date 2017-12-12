<?php
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();

use \WM\Common\Helper;

if(Helper::propFilled('MORE_PHOTO', $arResult))
{
    $arResult['PROPERTIES']['MORE_PHOTO']['VALUE_SRC'] = array();
    foreach($arResult['PROPERTIES']['MORE_PHOTO']['VALUE'] as $imgId)
        $arResult['PROPERTIES']['MORE_PHOTO']['VALUE_SRC'][] = \CFile::GetPath($imgId);
}
if(Helper::propFilled('SHOPS', $arResult))
{
    $shops = array();
    $res = \CIBlockElement::GetProperty(
        $arParams['IBLOCK_ID'],
        $arResult['ID'],
        '',
        '',
        array('CODE' => 'SHOPS')
    );
    while($row = $res->Fetch())
        $shops[$row['VALUE']] = array();
}
global $productShopSliderFilter;
$productShopSliderFilter = array('=ID' => (empty($shops) ? array() : array_keys($shops)));