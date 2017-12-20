<?php
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();

use \WM\Common\Helper;

foreach($arResult['ITEMS'] as $k => $arItem)
{
    if(Helper::propFilled('LOGO_IMG', $arItem))
        $arResult['ITEMS'][$k]['PROPERTIES']['LOGO_IMG']['VALUE_SRC'] = \CFile::GetPath(Helper::propValue('LOGO_IMG', $arItem));
}
$arDir = explode('/',$APPLICATION->GetCurDir());
$iCount = null;
for($i=0;$i<=2;$i++){
    if($arDir[2] == $arResult['ITEMS'][$i]['CODE']){
        $iCount = $i;
    }
}
while($iCount <> 0){
    $arMass = null;
    $arMass = array_shift($arResult['ITEMS']);
    array_push($arResult['ITEMS'], $arMass);
    $iCount--;
}