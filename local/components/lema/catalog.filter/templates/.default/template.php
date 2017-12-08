<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */

/** @var CBitrixComponent $component */

if(!$arResult['HAS_ELEMENTS'])
    return ;

use \Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

$formUrl = isset($arParams['FORM_ACTION']) ? $arParams['FORM_ACTION'] : $arResult['FORM_ACTION'];

$this->setFrameMode(true);
?>
<div class="filter">
    <div class="filter__title"><span><?=Loc::getMessage('LEMA_CATALOG_FILTER_TITLE');?></span></div>
    <form name="<? echo $arResult["FILTER_NAME"] . "_form" ?>" action="<?=$formUrl;?>" method="get">
        <? foreach($arResult["ITEMS"] as $arItem):
            if(array_key_exists("HIDDEN", $arItem)):
                echo $arItem["INPUT"];
            endif;
        endforeach; ?>
        <? foreach($arResult["ITEMS"] as $arItem): ?>
            <? if(!array_key_exists("HIDDEN", $arItem)): ?>
                <div class="filter__item">
                    <div class="filter__item__name"><?=$arItem['NAME'];?></div>
                    <div class="filter__item__select">
                        <?=$arItem["INPUT"]?>
                    </div>
                </div>
            <? endif ?>
        <? endforeach; ?>

        <div class="filter__button">
            <a href="#" title="" class="button-orange js-catalog-filter-btn">
                <span><?=Loc::getMessage('LEMA_CATALOG_FILTER_BTN');?></span>
            </a>
        </div>
        <div class="filter__button" style="display: none;">
            <input type="submit" name="set_filter" value="<?=GetMessage("IBLOCK_SET_FILTER")?>"/>
            <input type="hidden" name="set_filter" value="Y"/>
            <input type="submit" name="del_filter" value="<?=GetMessage("IBLOCK_DEL_FILTER")?>"/>
        </div>
    </form>
</div>
