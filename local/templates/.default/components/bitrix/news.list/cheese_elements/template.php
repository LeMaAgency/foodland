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

use \Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

$this->setFrameMode(true);

if(empty($arResult['ITEMS']))
    return;

$strEditLink = \CIBlock::GetArrayByID($arParams['IBLOCK_ID'], 'ELEMENT_EDIT');
$strDeleteLink = \CIBlock::GetArrayByID($arParams['IBLOCK_ID'], 'ELEMENT_DELETE');
$confirmDelete = array('CONFIRM' => \GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM'));

?>
<div class="cheese">
    <div class="back-img back-img__tomato"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-24">
                <div data-resize-after="cheese"></div>
                <? $arItem = array_shift($arResult['ITEMS']);
                    $this->AddEditAction('default_' . $arItem['ID'], $arItem['EDIT_LINK'], $strEditLink);
                    $this->AddDeleteAction('default_' . $arItem['ID'], $arItem['DELETE_LINK'], $strDeleteLink, $confirmDelete);
                    ?>
                    <div class="cheese__product active" data-cheese="content" data-cheese-index="default"
                         id="<?=$this->GetEditAreaId('default_' . $arItem['ID']);?>">
                        <h3 class="cheese__title"><?=htmlspecialcharsback($arItem['NAME']);?></h3>

                        <div class="cheese__text-block">
                            <div class="cheese__text scroll-pane">
                                <?=$arItem['PREVIEW_TEXT'];?>
                            </div>
                            <? if(!empty($arItem['SECTIONS'])): ?>
                                <ul class="cheese__links">
                                    <? foreach($arItem['SECTIONS'] as $sectionId => $section): ?>
                                        <li class="cheese__item">
                                            <a href="<?=$section['URL'];?>" title="<?=$section['NAME'];?>" class="cheese__link">
                                                <?=$section['NAME'];?>
                                            </a>
                                        </li>
                                    <? endforeach; ?>
                                </ul>
                            <? endif; ?>
                        </div>
                        <a href="<?=SITE_DIR;?>direction/" title="" class="button button-cheese">
                            <span><?=Loc::getMessage('LEMA_CATALOG_MORE_TEXT');?></span>
                        </a>
                    </div>

                <?
                $i = 0;
                foreach($arResult["ITEMS"] as $arItem):
                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], $strEditLink);
                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], $strDeleteLink, $confirmDelete);
                    ?>
                    <div class="cheese__product"
                         data-cheese="content" data-cheese-index="item<?=++$i?>"
                         id="<?=$this->GetEditAreaId($arItem['ID']);
                         ?>">
                        <h3 class="cheese__title"><?=htmlspecialcharsback($arItem['NAME']);?></h3>
                        <a href="" title="" class="cheese__back"><?=Loc::getMessage('LEMA_CATALOG_BACK_TEXT');?></a>
                        <div class="cheese__text-block">
                            <div class="cheese__text scroll-pane">
                                <?=$arItem['PREVIEW_TEXT'];?>
                            </div>
                            <? if(!empty($arItem['SECTIONS'])): ?>
                                <ul class="cheese__links">
                                    <? foreach($arItem['SECTIONS'] as $sectionId => $section): ?>
                                        <li class="cheese__item">
                                            <a href="<?=$section['URL'];?>" title="<?=$section['NAME'];?>" class="cheese__link">
                                                <?=$section['NAME'];?>
                                            </a>
                                        </li>
                                    <? endforeach; ?>
                                </ul>
                            <? endif; ?>
                        </div>
                        <a href="<?=SITE_DIR;?>direction/" title="" class="button button-cheese">
                            <span><?=Loc::getMessage('LEMA_CATALOG_MORE_TEXT');?></span>
                        </a>
                    </div>
                <? endforeach; ?>
            </div>
            <div class="col-12 col-lg-24" data-resize="cheese" data-resize-width="1000">
                <div class="cheese-circle">
                    <div class="shadow"></div>
                    <?
                    $i = 0;
                    foreach($arResult['ITEMS'] as $arItem):?>
                        <div class="piece" data-number="item<?=++$i?>" data-type="piece"></div>
                    <? endforeach; ?>
                    <div class="green"></div>
                    <div class="bg"></div>
                    <?
                    $i = 0;
                    foreach($arResult['ITEMS'] as $arItem):?>
                        <div class="icon" data-number="item<?=++$i?>" data-type="piece"></div>
                    <? endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>