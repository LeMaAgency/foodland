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
$inputValue = isset($arParams['REQUEST_QUERY']) ? htmlspecialcharsbx($arParams['REQUEST_QUERY']) : '';
$additionalClass = isset($arParams['ADDITIONAL_CLASS']) ? htmlspecialcharsbx($arParams['ADDITIONAL_CLASS']) : '';
?>
<div class="search <?=$additionalClass;?>">
    <div class="search__form-mini">
        <form action="<?=$arResult["FORM_ACTION"]?>">
            <? if($arParams["USE_SUGGEST"] === "Y"): ?><? $APPLICATION->IncludeComponent(
                "bitrix:search.suggest.input",
                "",
                array(
                    "NAME" => "q",
                    "VALUE" => "",
                    "INPUT_SIZE" => 15,
                    "DROPDOWN_SIZE" => 10,
                ),
                $component, array("HIDE_ICONS" => "Y")
            ); ?><? else: ?>
                <input class="search__form-mini__input" type="text" name="q" value="<?=$inputValue;?>" size="40" maxlength="50"/>
            <? endif; ?>
            <button class="search__form-mini__button" role="button" type="submit" value="<?=GetMessage("BSF_T_SEARCH_BUTTON");?>">
                <i class="icon search__form_button"></i>
            </button>
        </form>
    </div>
</div>