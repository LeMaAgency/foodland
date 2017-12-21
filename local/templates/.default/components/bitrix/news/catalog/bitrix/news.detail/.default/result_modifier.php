<?php
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();

use \WM\Common\Helper;

//additional photo
if(Helper::propFilled('MORE_PHOTO', $arResult))
{
    $arResult['PROPERTIES']['MORE_PHOTO']['VALUE_SRC'] = array();
    foreach($arResult['PROPERTIES']['MORE_PHOTO']['VALUE'] as $imgId)
        $arResult['PROPERTIES']['MORE_PHOTO']['VALUE_SRC'][] = \CFile::GetPath($imgId);
}
//our shops
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

//check product consist
$props = array('FATNESS', 'SHELF_LIFE', 'NETTO', 'COUNT_ATTACHMENTS', 'COUNT_IN_PALLET', 'BARCODE', 'PACKING_OR_WEIGHT');
$arResult['CONTAINS_PROPERTIES'] = array();
foreach($props as $prop)
{
    if(!empty($arResult['PROPERTIES'][$prop]['VALUE']))
        $arResult['CONTAINS_PROPERTIES'][$prop] = $prop;
}