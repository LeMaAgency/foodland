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

if(empty($arResult['ITEMS']))
    return;

$strEditLink = \CIBlock::GetArrayByID($arParams['IBLOCK_ID'], 'ELEMENT_EDIT');
$strDeleteLink = \CIBlock::GetArrayByID($arParams['IBLOCK_ID'], 'ELEMENT_DELETE');
$confirmDelete = array('CONFIRM' => \GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM'));

?>
<div class="clients ">
    <div class="back-img back-img__petro back-img__petro_left"></div>
    <div class="back-img back-img__petro back-img__petro_right"></div>
    <div class="container">
        <h3 class="clients__title"><?=$arResult['NAME'];?></h3>
        <div class="clients__carousel">
            <? foreach($arResult["ITEMS"] as $arItem): ?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], $strEditLink);
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], $strDeleteLink, $confirmDelete);
                ?>
                <a href="<?=$arItem['DETAIL_PAGE_URL'];?>" title="<?=$arItem['NAME'];?>">
                    <div class="clients__carousel__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                        <img src="<?=$arItem['PREVIEW_PICTURE']['SRC'];?>" alt="<?=$arItem['NAME'];?>">
                    </div>
                </a>
            <? endforeach; ?>
        </div>
    </div>
</div>