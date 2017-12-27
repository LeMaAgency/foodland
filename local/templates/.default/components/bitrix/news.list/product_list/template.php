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

$data = new \WM\Template\TemplateHelper($this);

?>
    <section class="products-block">
        <div class="container-fluid">
            <div class="row">
                <? if(empty($arResult['ITEMS'])): ?>
                    <div><? ShowNote(Loc::getMessage("SEARCH_NOTHING_TO_FOUND")); ?></div>
                <? else: ?>
                    <? foreach($data->items() as $item): ?>
                        <div class="products-block__wrap-item" <?=$item->editId();?>>
                            <a href="<?=$item->detailUrl();?>" title="<?=$item->getName();?>">
                                <div class="products-block__item">
                                    <div class="products-block__item__image">
                                        <img src="<? if (!empty($item->previewPicture())) {
                                            echo $item->previewPicture();
                                        } else {
                                            echo "/assets/images/cheese_gag.png";
                                        } ?>" alt="<?=$item->getName();?>">
                                    </div>
                                    <div class="products-block__item__name"><?=$item->getName();?></div>
                                    <? if($item->propFilled('BRAND')): ?>
                                        <p class="products-block__item__art">
                                            <?=$item->prop('BRAND', 'LINKED_NAME');?>
                                        </p>
                                    <? endif; ?>
                                    <div class="products-block__item__description">
                                        <? if($item->propFilled('ARTICLE')): ?>
                                            <p class="products-block__item__sort">
                                                <?=$item->propName('ARTICLE');?>
                                                <?=$item->propValue('ARTICLE');?>
                                            </p>
                                        <? endif; ?>
                                        <? if($item->propFilled('FATNESS')): ?>
                                            <p class="products-block__item__sort-fat">
                                                <?=$item->propName('FATNESS');?>:
                                                <?=$item->propValue('FATNESS');?>
                                            </p>
                                        <? endif; ?>
                                        <p class="products-block__item__text">
                                            <?=$item->previewText();?>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <? endforeach; ?>
                <? endif; ?>
            </div>
        </div>
    </section>
<? if($arParams['DISPLAY_BOTTOM_PAGER'] == 'Y'): ?>
    <?=$arResult['NAV_STRING'];?>
<? endif; ?>