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
$this->setFrameMode(true);
?>
<div class="container-aside">
    <div class="filter">
        <div class="filter__title"><span>Настройка<br>поиска</span></div>
        <form name="<? echo $arResult["FILTER_NAME"] . "_form" ?>" action="<? echo $arResult["FORM_ACTION"] ?>" method="get">
            <? foreach($arResult["ITEMS"] as $arItem):
                if(array_key_exists("HIDDEN", $arItem)):
                    echo $arItem["INPUT"];
                endif;
            endforeach; ?>
            <? foreach($arResult["ITEMS"] as $arItem): ?>
                <? if(!array_key_exists("HIDDEN", $arItem)):?>
                    <div class="filter__item">
                        <div class="filter__item__name">Особенности</div>
                        <div class="filter__item__select">
                            <select class="cs-select cs-skin-border">
                                <option value="" disabled selected>Все</option>
                                <option value="email">Россия</option>
                                <option value="twitter">Ростов</option>
                                <option value="linkedin">США</option>
                            </select>
                        </div>
                    </div>
                <? endif ?>
            <? endforeach; ?>
            <div class="filter__button">
                <input type="submit" name="set_filter" value="<?=GetMessage("IBLOCK_SET_FILTER")?>"/>
                <input type="hidden" name="set_filter" value="Y"/>
                <input type="submit" name="del_filter" value="<?=GetMessage("IBLOCK_DEL_FILTER")?>"/>
            </div>
        </form>


        <div class="filter__button">
            <a href="" title="" class="button-orange"><span>Показать</span></a>
        </div>
    </div>
</div>