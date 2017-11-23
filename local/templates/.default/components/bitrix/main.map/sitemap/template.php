<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

if(!is_array($arResult["arMap"]) || count($arResult["arMap"]) < 1)
    return;
?>

<div class="menu-site-map__title">Карта сайта</div>
<ul class="menu-site-map__nav">
    <?
    foreach($arResult["arMap"] as $index => $arItem):
        $arItem["FULL_PATH"] = htmlspecialcharsbx($arItem["FULL_PATH"], ENT_COMPAT, false);
        $arItem["NAME"] = htmlspecialcharsbx($arItem["NAME"], ENT_COMPAT, false);
        $arItem["DESCRIPTION"] = htmlspecialcharsbx($arItem["DESCRIPTION"], ENT_COMPAT, false);
        ?>
        <li><a href="<?=$arItem['FULL_PATH'];?>"><?=$arItem['NAME'];?></a></li>
    <? endforeach; ?>
</ul>