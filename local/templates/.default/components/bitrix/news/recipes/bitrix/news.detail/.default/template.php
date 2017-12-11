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

$item = $data->item();
?>
<section class="one-recipe">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-24">
                <h1 class="one-recipe__h1"><?=$arResult['NAME'];?></h1>
                <div class="one-recipe__ingredients">
                    <div class="block-product-img__description">
                        <? if(!empty($arResult['INGREDIENTS'])): ?>
                            <h2 class="block-product-img__description__h2"><?=Loc::getMessage('LEMA_RECIPE_DETAIL_INGREDIENTS_TITLE');?></h2>
                            <? foreach($arResult['INGREDIENTS'] as $ingredient): ?>
                                <div class="block-product-img__description__line block-product-img__description__line_full">
                                    <div class="block-product-img__description__line__name"><?=$ingredient['PROPERTY_PRODUCT_VALUE'];?></div>
                                    <? if(!empty($ingredient['PROPERTY_MEASURE_VALUE']) && !empty($ingredient['PROPERTY_COUNT_VALUE'])): ?>
                                        <div class="block-product-img__description__line__dots"></div>
                                        <div class="block-product-img__description__line__val">
                                            <span><?=$ingredient['PROPERTY_COUNT_VALUE']?></span>
                                            <?=$ingredient['PROPERTY_MEASURE_VALUE']?>
                                        </div>
                                    <? endif; ?>
                                </div>
                            <? endforeach; ?>
                        <? endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-24">
                <div class="one-recipe__img">
                    <img src="<?=$item->detailPicture();?>" alt="<?=$item->getName();?>">
                </div>
                <div class="one-recipe__info-icon">
                    <? if($item->propFilled('TIME')): ?>
                        <div class="one-recipe__info-icon__item one-recipe__info-icon__item_time">
                            <span><?=$item->propValue('TIME');?></span><?=Loc::getMessage('LEMA_RECIPE_TIME');?>
                        </div>
                    <? endif; ?>
                    <div class="one-recipe__info-icon__item one-recipe__info-icon__item_category">
                        <?=$arResult['SECTION']['PATH'][0]['NAME'];?>
                    </div>
                    <a href="#" class="js-recipe-print" title="<?=Loc::getMessage('LEMA_RECIPE_DETAIL_PRINT_TITLE');?>">
                        <div class="one-recipe__info-icon__item one-recipe__info-icon__item_print">
                            <?=Loc::getMessage('LEMA_RECIPE_DETAIL_PRINT_TITLE');?>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="col-17 col-md-24">
            <? if($item->detailText()): ?>
                <div class="text-one-recipe">
                    <h3 class="text-one-recipe__h3"><?=Loc::getMessage('LEMA_RECIPE_DETAIL_COOKING_TITLE');?></h3>
                    <?=$item->detailText();?>
                </div>
            <? endif; ?>
        </div>
        <div class="col-7 col-md-24">
            <div class="photo-product-recipe">
                <? if(!empty($arResult['INGREDIENTS_IMAGES'])): ?>
                    <div class="photo-product-recipe__h3"><?=Loc::getMessage('LEMA_RECIPE_DETAIL_RECIPE_PRODUCTS_PHOTO');?></div>
                    <div class="product-use-carousel__carousel product-use-carousel__carousel_one-recipe">
                        <? foreach($arResult['INGREDIENTS_IMAGES'] as $k => $src): ?>
                            <div class="product-use-carousel__carousel__item product-use-carousel__carousel__item_m-h">
                                <img src="<?=$src;?>" alt="<?=$arResult['INGREDIENTS'][$k]['PROPERTY_PRODUCT_VALUE'];?>">
                            </div>
                        <? endforeach; ?>
                    </div>
                    <div class="random__button random__button_one-recipe">
                        <a href="<?=SITE_DIR?>catalog/" title="<?=Loc::getMessage('LEMA_RECIPE_DETAIL_CATALOG_LINK');?>"
                           class="button-orange button-orange_one-recipe">
                            <span><?=Loc::getMessage('LEMA_RECIPE_DETAIL_CATALOG_LINK');?></span>
                        </a>
                    </div>
                <? endif; ?>
            </div>
        </div>
    </div>
</div>