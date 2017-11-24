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

use \WM\Common\Helper;

$this->setFrameMode(true);

if(empty($arResult['ITEMS']))
    return;

$strEditLink = \CIBlock::GetArrayByID($arParams['IBLOCK_ID'], 'ELEMENT_EDIT');
$strDeleteLink = \CIBlock::GetArrayByID($arParams['IBLOCK_ID'], 'ELEMENT_DELETE');
$confirmDelete = array('CONFIRM' => \GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM'));

?>
<div class="slider slider__carousel container-fluid">
    <? if($arParams["DISPLAY_TOP_PAGER"]): ?>
        <?=$arResult["NAV_STRING"]?><br/>
    <? endif; ?>
    <? foreach($arResult["ITEMS"] as $arItem): ?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], $strEditLink);
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], $strDeleteLink, $confirmDelete);
        ?>
        <div class="slider__item" style="background-image: url('<?=$arItem['PREVIEW_PICTURE']['SRC'];?>');">
            <div class="container">
                <div class="row" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                    <div class="slider__item__images col-12 col-lg-24 css-text-right col-lg-css-text-center">
                        <? if(Helper::propFilled('LOGO_IMG', $arItem)): ?>
                            <img src="<?=$arItem['PROPERTIES']['LOGO_IMG']['VALUE_SRC'];?>" alt="<?=$arItem['NAME'];?>"><br>
                        <? endif; ?>
                        <? if(Helper::propFilled('LOGO_TITLE_IMG', $arItem)): ?>
                            <img src="<?=$arItem['PROPERTIES']['LOGO_TITLE_IMG']['VALUE_SRC'];?>" alt="<?=$arItem['NAME'];?>">
                        <? endif; ?>
                    </div>
                    <div class="col-12 col-lg-24 col-lg-css-center">
                        <div class="slider__item__text">
                            <span><?=htmlspecialcharsback($arItem['NAME']);?></span>
                            <p><?=$arItem['PREVIEW_TEXT'];?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <? endforeach; ?>
    <? if($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
        <br/><?=$arResult["NAV_STRING"]?>
    <? endif; ?>
</div>