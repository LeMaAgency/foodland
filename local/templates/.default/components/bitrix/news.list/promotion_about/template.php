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

$this->setFrameMode(true);

if(empty($arResult['ITEMS']))
    return;

$strEditLink = \CIBlock::GetArrayByID($arParams['IBLOCK_ID'], 'ELEMENT_EDIT');
$strDeleteLink = \CIBlock::GetArrayByID($arParams['IBLOCK_ID'], 'ELEMENT_DELETE');
$confirmDelete = array('CONFIRM' => \GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM'));

?>
<div class="random random_about container">
    <div class="row">
        <div class="col-24">
            <h2 class="h2_about-company h2_about-company_mt"><?=$arResult['NAME'];?></h2>
        </div>
        <div class="col-24">
            <div class="random_about__wrap">
                <div class="random__carousel">
                    <? foreach($arResult["ITEMS"] as $arItem): ?>
                        <?
                        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], $strEditLink);
                        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], $strDeleteLink, $confirmDelete);
                        ?>

                        <div class="random__block" style="background-image: url('<?=$arItem['PREVIEW_PICTURE']['SRC'];?>')">
                            <? if(Helper::propFilled('LOGO_IMG', $arItem)): ?>
                                <div class="random__logo"><img src="<?=$arItem['PROPERTIES']['LOGO_IMG']['VALUE_SRC'];?>" alt="<?=$arItem['NAME'];?>">
                                </div>
                            <? endif; ?>
                            <div class="random__body random__body_about" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                                <div class="random__title">
                                    <?=$arItem['NAME'];?>
                                </div>
                                <div class="random__text">
                                    <p><?=$arItem['PREVIEW_TEXT'];?></p>
                                </div>
                                <div class="random__button-mini">
                                    <a href="<?=Helper::escPropValue('URL', $arItem);?>" title="<?=$arItem['NAME'];?>"><?=Loc::getMessage('LEMA_EVENTS_MORE_TEXT');?></a>
                                </div>
                                <div class="random__button">
                                    <a href="<?=$arItem['LIST_PAGE_URL'];?>" title="<?=Loc::getMessage('LEMA_ALL_EVENTS_TEXT');?>"
                                       class="button-orange">
                                        <span><?=Loc::getMessage('LEMA_ALL_EVENTS_TEXT');?></span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    <? endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>