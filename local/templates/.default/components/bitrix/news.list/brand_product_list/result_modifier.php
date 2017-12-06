<?php
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();

use \WM\Common\Helper;

$brandIblock = null;

$brands = array();

foreach($arResult['ITEMS'] as $k => $arItem)
{
    //set iblock id for brands (from property)
    if(!isset($brandIblock))
        $brandIblock = (int) $arItem['PROPERTIES']['BRAND']['LINK_IBLOCK_ID'];
    //collect brands id
    if(Helper::propFilled('BRAND', $arItem))
        $brands[Helper::propValue('BRAND', $arItem)] = array();

    $arResult['ITEMS'][$k]['PROPERTIES']['BRAND']['LINKED_NAME'] = '';
}

if(!empty($brands))
{
    //search brands by its id
    $brands = \WM\IBlock\Element::getList($brandIblock, array(
        'filter' => array('ID' => array_keys($brands), 'ACTIVE' => 'Y'),
        'arSelect' => array('ID', 'NAME'),
    ));
    //add brands data to items
    foreach($arResult['ITEMS'] as $k => $arItem)
    {
        if(Helper::propFilled('BRAND', $arItem) && isset($brands[Helper::propValue('BRAND', $arItem)]['NAME']))
            $arResult['ITEMS'][$k]['PROPERTIES']['BRAND']['LINKED_NAME'] = $brands[Helper::propValue('BRAND', $arItem)]['NAME'];
    }
}