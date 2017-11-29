<?php
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();

foreach($arResult['ITEMS'] as $k => $arItem)
{
    $arResult['ITEMS'][$k]['DATE_CREATE_FORMATTED'] = \FormatDate('d F Y', \MakeTimeStamp($arItem['DATE_CREATE']));
}