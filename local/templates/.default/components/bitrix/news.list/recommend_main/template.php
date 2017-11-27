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
<? if($arResult['SHOW_WRAPPER']): ?>
    <div class="recommendation__carousel__block">
    <div class="recommendation__list row">
<? endif; ?>

<? foreach($arResult["ITEMS"] as $arItem): ?>
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], $strEditLink);
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], $strDeleteLink, $confirmDelete);
    ?>
    <div class="col-8 col-xl-8 col-lg-8 col-md-12 col-sm-24" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <? if($arItem['TWO_COLUMNS']): ?>
            <div class="row">
                <div class="recommendation__block recommendation__block_col-2"
                     style="background-image: url('<?=$arItem['PREVIEW_PICTURE']['SRC'];?>')">
                    <? if($arItem['SHOW_LIKE']): ?>
                        <div class="icon">
                            <span class="icon__like"></span>
                        </div>
                    <? endif; ?>
                    <a href="<?=Helper::escPropValue('URL', $arItem);?>"
                       class="recommendation__block__title-mini recommendation__block__line <?=$arItem['ITEM_CLASS'];?>">
                        <?=$arItem['NAME'];?>
                    </a>
                </div>
            </div>
        <? else: ?>
            <? if($arItem['TEXT_IN_TOP_BLOCK']): ?>
                <div class="row">
                    <div class="recommendation__block" style="background-image: url('<?=$arItem['PREVIEW_PICTURE']['SRC'];?>')">
                        <? if($arItem['SHOW_LIKE']): ?>
                            <div class="icon">
                                <span class="icon__like"></span>
                            </div>
                        <? endif; ?>
                        <a href="<?=Helper::escPropValue('URL', $arItem);?>" class="recommendation__block__title-mini
                            recommendation__block__line <?=$arItem['ITEM_CLASS'];?>">
                            <?=$arItem['NAME'];?>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <a href="<?=Helper::escPropValue('URL_2', $arItem);?>" class="recommendation__block"
                       style="background-image: url('<?=$arItem['DETAIL_PICTURE']['SRC'];?>')"></a>
                </div>
            <? else: ?>
                <div class="row">
                    <a href="<?=Helper::escPropValue('URL', $arItem);?>" class="recommendation__block"
                       style="background-image: url('<?=$arItem['PREVIEW_PICTURE']['SRC'];?>')"></a>
                </div>
                <div class="row">
                    <div class="recommendation__block" style="background-image: url('<?=$arItem['DETAIL_PICTURE']['SRC'];?>')">
                        <a href="<?=Helper::escPropValue('URL_2', $arItem);?>"
                           class="recommendation__block__title-mini recommendation__block__line <?=$arItem['ITEM_CLASS'];?>">
                            <?=$arItem['NAME'];?>
                        </a>
                    </div>
                </div>
            <? endif; ?>
        <? endif; ?>
    </div>
<? endforeach; ?>

<? if($arResult['SHOW_WRAPPER']): ?>
    </div>
    </div>
<? endif; ?>