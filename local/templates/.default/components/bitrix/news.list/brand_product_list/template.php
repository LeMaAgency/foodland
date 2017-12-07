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
                <h2 class="products-block__title">Продукция</h2>
                <? if(empty($arResult['ITEMS'])): ?>
                    <div><?=Loc::getMessage('LEMA_NO_PRODUCTS_FOUND');?></div>
                <? else: ?>
                    <? foreach($data->items() as $item): ?>

                        <div class="products-block__wrap-item" <?=$item->editId();?>>
                            <a href="<?=str_replace('direction', 'catalog', $item->detailUrl());?>" title="<?=$item->getName();?>">
                                <div class="products-block__item">
                                    <div class="products-block__item__image">
                                        <img src="<?=$item->previewPicture();?>" alt="<?=$item->getName();?>">
                                    </div>
                                    <div class="products-block__item__name"><?=$item->getName();?></div>
                                    <? if($item->propFilled('ARTICLE')): ?>
                                        <p class="products-block__item__art">
                                            <?=$item->propName('ARTICLE');?>
                                            <?=$item->propValue('ARTICLE');?>
                                        </p>
                                    <? endif; ?>
                                    <div class="products-block__item__description">
                                        <? if($item->propFilled('BRAND')): ?>
                                            <p class="products-block__item__sort"><?=$item->prop('BRAND', 'LINKED_NAME');?>
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