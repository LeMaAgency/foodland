<?php
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();

$arResult['SECTIONS_WITH_ITEMS'] = $items = array();

foreach($arResult['ITEMS'] as $k => $arItem)
{
    if(!empty($arItem['IBLOCK_SECTION_ID']))
        $arResult['SECTIONS_WITH_ITEMS'][$arItem['IBLOCK_SECTION_ID']]['ITEMS'][] = $arItem;
    $items[$arItem['ID']] = $arItem;
}

\Bitrix\Main\Loader::includeModule('iblock');

$arResult['SECTIONS_WITH_ITEMS'] = \WM\IBlock\Section::getAllD7($arParams['IBLOCK_ID'], array(
    'select' => array('ID', 'NAME'),
));
foreach($arResult['SECTIONS_WITH_ITEMS'] as $sectionId => $data)
{
    $sectionItems = \WM\IBlock\Element::getAll($arParams['IBLOCK_ID'], array(
        'filter' => array('IBLOCK_SECTION' => $sectionId),
        'select' => array('ID'),
    ));
    foreach($sectionItems as $itemId => $itemInfo)
    {
        if(isset($items[$itemId]))
            $arResult['SECTIONS_WITH_ITEMS'][$sectionId]['ITEMS'][$itemId] = $items[$itemId];
    }
}