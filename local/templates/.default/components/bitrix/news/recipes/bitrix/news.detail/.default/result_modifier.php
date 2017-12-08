<?php
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();

use \WM\Common\Helper;

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
        'arSelect' => array('ID', 'NAME', 'PROPERTY_MEASURE', 'PROPERTY_PRODUCT', 'PROPERTY_COUNT'),
    ));
}