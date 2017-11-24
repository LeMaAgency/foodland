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
<div class="popular ">
    <div class="back-img back-img__maslo"></div>
    <div class="container">
        <div class="title-big">Самые популярные<br>продукты</div>
        <div class="popular__carousel">
            <? foreach($arResult["ITEMS"] as $arItem): ?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], $strEditLink);
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], $strDeleteLink, $confirmDelete);
                ?>
                <a href="<?=$arItem['DETAIL_PAGE_URL'];?>" title="<?=$arItem['NAME'];?>">
                    <div class="popular__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                        <div class="popular__item__image">
                            <img src="<?=$arItem['PREVIEW_PICTURE']['SRC'];?>" alt="<?=$arItem['NAME'];?>">
                        </div>
                        <div class="popular__item__name"><b><?=$arItem['NAME'];?></b></div>
                        <div class="popular__item__text">
                            <span><?=$arItem['PROPERTIES']['BRAND']['LINKED_NAME'];?></span><br>
                            <? if(Helper::propFilled('FATNESS', $arItem)): ?>
                                <span>
                                    <?=$arItem['PROPERTIES']['FATNESS']['NAME'];?>:
                                    <b><?=Helper::escPropValue('FATNESS', $arItem);?></b>
                                </span><br>
                            <? endif; ?>
                            <? if(Helper::propFilled('ARTICLE', $arItem)): ?>
                                <span>
                                    <?=$arItem['PROPERTIES']['ARTICLE']['NAME'];?>:
                                    <b><?=Helper::escPropValue('ARTICLE', $arItem);?></b>
                                </span><br>
                            <? endif; ?>
                        </div>
                        <div class="popular__item__description">
                            <p><?=$arItem['PREVIEW_TEXT'];?></p>
                        </div>
                    </div>
                </a>
            <? endforeach; ?>
        </div>
    </div>
</div>