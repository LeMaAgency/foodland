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
<div class="col-12 col-xl-24">
    <div class="block-product-img">
        <div class="block-product-img__img">
            <img src="<?=$item->previewPicture();?>" alt="<?=$item->getName();?>">
        </div>
        <? if($item->propFilled('MORE_PHOTO')): ?>
            <div class="block-product-img__carousel">
                <? foreach($item->prop('MORE_PHOTO', 'VALUE_SRC') as $src): ?>
                    <a href="<?=$src;?>" title="<?=$item->getName();?>">
                        <div class="block-product-img__carousel__item">
                            <img src="<?=$src;?>" alt="<?=$item->getName();?>">
                        </div>
                    </a>
                <? endforeach; ?>
            </div>
        <? endif; ?>
        <div class="block-product-img__description">
            <h2 class="block-product-img__description__h2"><?=Loc::getMessage('LEMA_CATALOG_DETAIL_CHARACTERS_100_TITLE');?></h2>
            <?
            $props = array('CALORIES', 'PROTEINS', 'FATS', 'CARBOHYDRATES', 'DIETARY_FIBER', 'WATER');
            foreach($props as $prop): ?>
                <div class="block-product-img__description__line">
                    <div class="block-product-img__description__line__name"><?=$item->propName($prop);?></div>
                    <div class="block-product-img__description__line__dots"></div>
                    <div class="block-product-img__description__line__val"><?=$item->propValue($prop);?></div>
                </div>
            <? endforeach; ?>
        </div>
    </div>
</div>
<div class="col-12 col-xl-24">
    <div class="block-product-text">
        <h2 class="block-product-text__h2"><?=Loc::getMessage('LEMA_CATALOG_DETAIL_PRODUCT_TITLE');?></h2>
        <?=$item->previewText();?>
        <h2 class="block-product-text__h2-info"><?=Loc::getMessage('LEMA_CATALOG_DETAIL_PRODUCT_INFO');?></h2>
        <? if($item->propFilled('COMPOSITION')): ?>
            <h3 class="block-product-text__h3-composition"><?=Loc::getMessage('LEMA_CATALOG_DETAIL_COMPOSITION');?></h3>
            <?=$item->propText('COMPOSITION');?>
        <? endif; ?>
        <? if($item->propFilled('MANUFACTURE')): ?>
            <h3 class="block-product-text__h3-factory"><?=$item->propName('MANUFACTURE');?></h3>
            <p><?=$item->propValue('MANUFACTURE');?></p>
        <? endif; ?>
    </div>
</div>