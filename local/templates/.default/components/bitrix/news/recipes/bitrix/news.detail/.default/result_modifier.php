<?php
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();

use \WM\Common\Helper;

//load ingredients
if(Helper::propFilled('INGREDIENTS', $arResult))
{
    $elements = array();
    $res = \CIBlockElement::GetProperty(
        $arParams['IBLOCK_ID'],
        $arResult['ID'],
        '',
        '',
        array('CODE' => 'INGREDIENTS')
    );
    while($row = $res->Fetch())
        $elements[$row['VALUE']] = array();
    $arResult['INGREDIENTS'] = \WM\IBlock\Element::getAll($arResult['PROPERTIES']['INGREDIENTS']['LINK_IBLOCK_ID'], array(
        'filter' => array('ID' => array_keys($elements)),
        'arSelect' => array('ID', 'NAME', 'PREVIEW_PICTURE', 'PROPERTY_MEASURE', 'PROPERTY_PRODUCT', 'PROPERTY_COUNT'),
    ));
    $arResult['INGREDIENTS_IMAGES'] = array();
    //get path of picture
    foreach($arResult['INGREDIENTS'] as $k => $ingredient)
    {
        if(!empty($ingredient['PREVIEW_PICTURE']))
            $arResult['INGREDIENTS_IMAGES'][$k] = \CFile::GetPath($ingredient['PREVIEW_PICTURE']);
    }
}