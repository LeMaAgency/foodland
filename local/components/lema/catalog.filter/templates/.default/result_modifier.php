<?php
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();

$arResult['HAS_ELEMENTS'] = false;

foreach($arResult['ITEMS'] as $arItem)
    if(!array_key_exists('HIDDEN', $arItem))
        $arResult['HAS_ELEMENTS'] = true;