<?php
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();

if(!empty($arResult['SECTION']['PATH'][0]['NAME']))
    $GLOBALS['APPLICATION']->SetPageProperty('title', $arResult['SECTION']['PATH'][0]['NAME']);