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

use \WM\Common\Helper,
    \Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

$this->setFrameMode(true);

if(empty($arResult['ITEMS']))
    return;

$strEditLink = \CIBlock::GetArrayByID($arParams['IBLOCK_ID'], 'ELEMENT_EDIT');
$strDeleteLink = \CIBlock::GetArrayByID($arParams['IBLOCK_ID'], 'ELEMENT_DELETE');
$confirmDelete = array('CONFIRM' => \GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM'));

?>
<div class="day-product col-lg-css-margin-none">
    <div class="container">
        <div class="title-big"><?=$arResult['NAME'];?></div>
        <? foreach($arResult["ITEMS"] as $arItem): ?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], $strEditLink);
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], $strDeleteLink, $confirmDelete);
            ?>
            <div class="row" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                <div class="col-12 col-lg-24">
                    <div class="day-product__images-block">
                        <div class="day-product__images-block_images">
                            <img src="<?=$arItem['PREVIEW_PICTURE']['SRC'];?>" alt="<?=$arItem['NAME'];?>">
                        </div>
                        <div class="day-product__images-block_text">
                            <div class="day-product__images-block_name"><?=htmlspecialcharsback($arItem['PROPERTIES']['DISH_TITLE']['VALUE']);?></div>
                            <div class="day-product__images-block_description">
                                <span><?=$arItem['PREVIEW_TEXT'];?></span></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-24">
                    <div class="day-product__product row col-md-css-text-center">
                        <div class="col-10 col-md-24">
                            <div class="day-product__product_name"><?=$arItem['NAME'];?></div>
                            <div class="day-product__product_text">
                                <?=$arItem['DETAIL_TEXT'];?>
                            </div>
                            <div class="day-product__product_button">
                                <a href="<?=Helper::propValue('URL', $arItem);?>" title="<?=Loc::getMessage('LEMA_DAILY_PRODUCT_MORE_LINK');?>"
                                   class="button-cheese">
                                    <span><?=Loc::getMessage('LEMA_DAILY_PRODUCT_MORE_LINK');?></span>
                                </a>
                            </div>
                        </div>
                        <div class="col-14 col-md-24 col-md-css-padding">
                            <div class="day-product__product_images col-md-css-padding-none">
                                <img src="<?=$arItem['DETAIL_PICTURE']['SRC'];?>" alt="<?=$arItem['NAME'];?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <? endforeach; ?>
    </div>
</div>