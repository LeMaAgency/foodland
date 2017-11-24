<?php
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();

use \WM\Common\Helper;

//collect all section ids for select from iblock
$sections = array();
foreach($arResult['ITEMS'] as $k => $arItem)
{
    if(Helper::propFilled('CATALOG_SECTIONS', $arItem))
        $sections = array_merge($sections, Helper::propValue('CATALOG_SECTIONS', $arItem));
}
//remove duples
$sections = array_unique($sections);
//reorganize array data
$sections = array_fill_keys($sections, array());

//search sections by its id
$iblockSections = \WM\IBlock\Section::getList(3, array(
    'filter' => array('ACTIVE' => 'Y', 'ID' => array_keys($sections)),
    'arSelect' => array('ID', 'NAME', 'SECTION_PAGE_URL'),
));
//collect section data
foreach($iblockSections as $section)
{
    $sections[$section['ID']] = array(
        'NAME' => $section['NAME'],
        'CODE' => $section['CODE'],
        'URL' => $section['SECTION_PAGE_URL'],
    );
}
//add section data to items
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