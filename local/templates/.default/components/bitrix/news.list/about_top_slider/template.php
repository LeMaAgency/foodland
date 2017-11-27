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
<div class="slider slider__carousel container-fluid">
    <? foreach($arResult["ITEMS"] as $arItem): ?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], $strEditLink);
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], $strDeleteLink, $confirmDelete);
        ?>
        <div class="slider__item" style="background-image: url('<?=$arItem['PREVIEW_PICTURE']['SRC'];?>');">
            <div class="container">
                <div class="row" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                    <div class="col-12 col-lg-24 col-lg-css-center">
                        <div class="slider__item__text slider__item__text_font">
                            <p><?=$arItem['PREVIEW_TEXT'];?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <? endforeach; ?>
</div>