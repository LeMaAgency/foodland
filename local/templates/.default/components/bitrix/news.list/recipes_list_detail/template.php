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

?>
    <div class="product-use-carousel product-use-carousel_margin-bottom">
        <div class="container">
            <h2 class="h2 h2_one-recipe"><?=Loc::getMessage('LEMA_RECIPE_DETAIL_TITLE');?></h2>
            <div class="product-use-carousel_4__carousel">
                <? foreach($arResult['SECTIONS_WITH_ITEMS'] as $arSection): ?>
                    <? if(empty($arSection['ITEMS']))
                        continue;
                    ?>
                    <div class="product-use-carousel__carousel__item product-use-carousel_4__carousel__item">
                        <div class="product-use-carousel_4__carousel__item__wrap product-use-carousel_4__carousel__item__wrap_m-h">
                            <div class="product-use-carousel__carousel product-use-carousel__carousel_p-0">
                                <? foreach($arSection['ITEMS'] as $arItem): ?>
                                    <?
                                    $editId = $arSection['ID'] . '_' . $arItem['ID'];
                                    $this->AddEditAction($editId, $arItem['EDIT_LINK'], $strEditLink);
                                    $this->AddDeleteAction($editId, $strDeleteLink, $confirmDelete);
                                    ?>
                                    <div class="product-use-carousel__carousel__item product-use-carousel__carousel__item_pb-20"
                                         id="<?=$this->GetEditAreaId($editId);?>">
                                        <img src="<?=$arItem['PREVIEW_PICTURE']['SRC'];?>" alt="<?=$arItem['NAME'];?>">
                                        <div class="product-use-carousel__carousel__item__name product-use-carousel__carousel__item__name_recipes">
                                            <?=$arItem['NAME'];?>
                                        </div>
                                        <div class="product-use-carousel__carousel__item__info">
                                            <? if(Helper::propFilled('TIME', $arItem)): ?>
                                                <div class="product-use-carousel__carousel__item__info__time">
                                                    <span><?=Helper::propvalue('TIME', $arItem);?></span>
                                                    <?=Loc::getMessage('LEMA_RECIPE_TIME');?>
                                                </div>
                                            <? endif; ?>
                                            <? if(Helper::propFilled('CCAL', $arItem)): ?>
                                                <div class="product-use-carousel__carousel__item__info__calories">
                                                    <span><?=Helper::propvalue('CCAL', $arItem);?></span>
                                                    <?=Loc::getMessage('LEMA_RECIPE_CCAL');?>
                                                </div>
                                            <? endif; ?>
                                        </div>
                                        <div class="product-use-carousel__carousel__item__block-link">
                                            <a href="<?=$arItem['DETAIL_PAGE_URL'];?>"
                                               title="<?=$arItem['NAME'];?>"><span><?=Loc::getMessage('LEMA_RECIPES_MORE_TEXT');?></span></a>
                                        </div>
                                    </div>
                                <? endforeach; ?>
                            </div>
                        </div>
                    </div>
                <? endforeach; ?>
            </div>
        </div>
    </div>
<? if($arParams['DISPLAY_BOTTOM_PAGER'] == 'Y'): ?>
    <?=$arResult['NAV_STRING'];?>
<? endif; ?>