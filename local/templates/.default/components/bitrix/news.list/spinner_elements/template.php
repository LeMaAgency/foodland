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

$i = 0;

?>
<div class="production-spinner container-fluid">
    <div class="back-img back-img__cheese"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-24">
                <div data-js-core-resize-after="spinet__resize"></div>
                <? foreach($arResult["ITEMS"] as $arItem): ?>
                    <?
                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], $strEditLink);
                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], $strDeleteLink, $confirmDelete);
                    ?>
                    <div data-spinner="content" data-index="<?=++$i;?>"<? if(1 === $i): ?> class="active"<? endif; ?>
                         id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                        <div class="title-big"><?=Helper::escPropValue('ADDITIONAL_HEADER', $arItem);?></div>
                        <div class="title-mini"><?=$arItem['NAME'];?></div>
                        <div class="text">
                            <p>
                                <?=$arItem['PREVIEW_TEXT'];?>
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-none">
                                <div class="description">
                                    <p>
                                        <?=$arItem['DETAIL_TEXT'];?>
                                    </p>
                                </div>
                            </div>
                            <? if(Helper::propFilled('URL', $arItem)): ?>
                                <div class="col-12 col-lg-24 col-lg-css-text-center">
                                    <a href="<?=Helper::escPropValue('URL', $arItem);?>" title="" class="button-cheese">
                                        <span>
                                            <?=Loc::getMessage('LEMA_SPINNER_MORE_TEXT');?>
                                        </span>
                                    </a>
                                </div>
                            <? endif; ?>
                        </div>
                    </div>
                <? endforeach; ?>

            </div>
            <div class="col-12 col-lg-24">
                <div data-js-core-resize="spinet__resize" data-js-core-resize-width='lg'>
                    <div id="spinner">
                        <div class="rotate-wrap" data-active="1">
                            <?php
                            $i = 0;
                            ?>
                            <? foreach($arResult['ITEMS'] as $arItem): ?>
                                <div class="circle active" data-index="<?=++$i;?>">
                                    <h4><?=$arItem['NAME'];?></h4>
                                </div>
                            <? endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
