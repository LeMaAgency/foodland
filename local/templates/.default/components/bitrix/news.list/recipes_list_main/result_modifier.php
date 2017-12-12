<?php
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();

/**
 * @TODO Find a way for make it without cycle requests..
 */

$arResult['SECTIONS_WITH_ITEMS'] = $items = array();

foreach($arResult['ITEMS'] as $k => $arItem)
{
    if(!empty($arItem['IBLOCK_SECTION_ID']))
        $arResult['SECTIONS_WITH_ITEMS'][$arItem['IBLOCK_SECTION_ID']]['ITEMS'][] = $arItem;
    $items[$arItem['ID']] = $arItem;
}

\Bitrix\Main\Loader::includeModule('iblock');

//get all sections
$arResult['SECTIONS_WITH_ITEMS'] = \WM\IBlock\Section::getAllD7($arParams['IBLOCK_ID'], array(
    'select' => array('ID', 'NAME'),
));
//search elements by each section
foreach($arResult['SECTIONS_WITH_ITEMS'] as $sectionId => $data)
{
    $sectionItems = \WM\IBlock\Element::getAll($arParams['IBLOCK_ID'], array(
        'filter' => array('SECTION_ID' => $sectionId),
        'select' => array('ID'),
    ));
    foreach($sectionItems as $itemId => $itemInfo)
    {
        if(isset($items[$itemId]))
            $arResult['SECTIONS_WITH_ITEMS'][$sectionId]['ITEMS'][$itemId] = $items[$itemId];
    }
}