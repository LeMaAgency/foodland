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

use \Bitrix\Main\Localization\Loc,
    \WM\Common\Helper;

Loc::loadMessages(__FILE__);

$this->setFrameMode(true);

if(empty($arResult['ITEMS']))
    return;

$strEditLink = \CIBlock::GetArrayByID($arParams['IBLOCK_ID'], 'ELEMENT_EDIT');
$strDeleteLink = \CIBlock::GetArrayByID($arParams['IBLOCK_ID'], 'ELEMENT_DELETE');
$confirmDelete = array('CONFIRM' => \GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM'));

$maxStars = 3;

?>
    <section class="product-use-carousel_recipes">
        <div class="container-fluid">
            <div class="row">
                <? foreach($arResult['SECTIONS_WITH_ITEMS'] as $arSection): ?>
                    <? if(empty($arSection['ITEMS']))
                        continue;
                    ?>
                    <div class="product-use-carousel__wrap product-use-carousel__wrap_recipes">
                        <div class="product-use-carousel__carousel">
                            <? foreach($arSection['ITEMS'] as $arItem): ?>
                                <?
                                $editId = $arSection['ID'] . '_' . $arItem['ID'];
                                $this->AddEditAction($editId, $arItem['EDIT_LINK'], $strEditLink);
                                $this->AddDeleteAction($editId, $strDeleteLink, $confirmDelete);
                                ?>
                                <div class="product-use-carousel__carousel__item" id="<?=$this->GetEditAreaId($editId);?>">
                                    <img src="<?=$arItem['PREVIEW_PICTURE']['SRC'];?>" alt="<?=$arItem['NAME'];?>">
                                    <div class="product-use-carousel__carousel__item__name product-use-carousel__carousel__item__name_recipes">
                                        <?=$arItem['NAME'];?>
                                    </div>
                                    <div class="product-use-carousel__carousel__item__info">
                                        <div class="product-use-carousel__carousel__item__info__time">
                                            <span><?=Helper::propvalue('TIME', $arItem);?></span> <?=Loc::getMessage('LEMA_RECIPES_TIME');?>
                                        </div>
                                        <div class="product-use-carousel__carousel__item__info__rating">
                                            <? $complexity = (int) $arItem['PROPERTIES']['COMPLEXITY']['VALUE_XML_ID'];
                                            if($complexity > $maxStars)
                                                $complexity = $maxStars; ?>
                                            <? for($i = 0; $i < $maxStars; ++$i): ?>
                                                <span class="rating-star<? if($i < $complexity) { ?>_active<? } ?>"></span>
                                            <? endfor; ?>
                                        </div>
                                    </div>
                                    <div class="product-use-carousel__carousel__item__block-link">
                                        <a href="<?=$arItem['DETAIL_PAGE_URL'];?>" title="<?=$arItem['NAME'];?>">
                                            <span><?=Loc::getMessage('LEMA_RECIPES_MORE_TEXT');?></span>
                                        </a>
                                    </div>
                                </div>
                            <? endforeach; ?>
                        </div>
                    </div>
                <? endforeach; ?>
            </div>
        </div>
    </section>
<? if($arParams['DISPLAY_BOTTOM_PAGER'] == 'Y'): ?>
    <?=$arResult['NAV_STRING'];?>
<? endif; ?>