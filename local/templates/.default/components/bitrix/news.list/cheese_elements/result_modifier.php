<?php
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();

use \WM\Common\Helper;

$sections = array();
foreach($arResult['ITEMS'] as $k => $arItem)
{
    if(Helper::propFilled('CATALOG_SECTIONS', $arItem))
        $sections = array_merge($sections, Helper::propValue('CATALOG_SECTIONS', $arItem));
}
$sections = array_unique($sections);
$sections = array_fill_keys($sections, array());

$iblockSections = \WM\IBlock\Section::getList(3, array(
    'filter' => array('ACTIVE' => 'Y', 'ID' => array_keys($sections)),
    'arSelect' => array('ID', 'NAME', 'SECTION_PAGE_URL'),
));

foreach($iblockSections as $section)
{
    $sections[$section['ID']] = array(
        'NAME' => $section['NAME'],
        'CODE' => $section['CODE'],
        'URL' => $section['SECTION_PAGE_URL'],
    );
}

foreach($arResult['ITEMS'] as $k => $arItem)
{
    $itemSections = array();
    if(Helper::propFilled('CATALOG_SECTIONS', $arItem))
    {
        foreach(Helper::propValue('CATALOG_SECTIONS', $arItem) as $sectionId)
        {
            if(isset($sections[$sectionId]))
                $itemSections[] = $sections[$sectionId];
        }
    }
    $arResult['ITEMS'][$k]['SECTIONS'] = $itemSections;
}