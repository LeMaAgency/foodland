<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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

$this->setFrameMode(true);

if(empty($arResult['ITEMS']))
return;

$data = new \WM\Template\TemplateHelper($this);

?>
<section class="products-block products-block_excl">
    <div class="container">
        <div class="row">
            <? foreach($data->items() as $item): ?>
                <div class="products-block__wrap-item products-block__wrap-item_4" <?=$item->editId();?>>
                    <a href="<?=str_replace('exclusive', 'catalog', $item->detailUrl());?>" title="<?=$item->getName();?>">
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
        </div>
    </div>
</section>
<? if($arParams['DISPLAY_BOTTOM_PAGER'] == 'Y'): ?>
    <?=$arResult['NAV_STRING'];?>
<? endif; ?>