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

$data = new \WM\Template\TemplateHelper($this);

?>
<div class="day-product col-lg-css-margin-none">
    <div class="container">
        <div class="title-big"><?=$data->getName();?></div>
        <? foreach($data->items() as $item): ?>
            <div class="row" <?=$item->editId();?>>
                <div class="col-12 col-lg-24">
                    <div class="day-product__images-block">
                        <div class="day-product__images-block_images">
                            <img src="<?=$item->previewPicture();?>" alt="<?=$item->getName();?>">
                        </div>
                        <div class="day-product__images-block_text">
                            <div class="day-product__images-block_name"><?=htmlspecialcharsback($item->propValue('DISH_TITLE'));?></div>
                            <div class="day-product__images-block_description">
                                <span><?=$item->previewText();?></span></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-24">
                    <div class="day-product__product row col-md-css-text-center">
                        <div class="col-10 col-md-24">
                            <div class="day-product__product_name"><?=$item->getName();?></div>
                            <div class="day-product__product_text">
                                <?=$item->detailText();?>
                            </div>
                            <div class="day-product__product_button">
                                <a href="<?=$item->propValue('URL');?>" title="<?=Loc::getMessage('LEMA_DAILY_PRODUCT_MORE_LINK');?>"
                                   class="button-cheese">
                                    <span><?=Loc::getMessage('LEMA_DAILY_PRODUCT_MORE_LINK');?></span>
                                </a>
                            </div>
                        </div>
                        <div class="col-14 col-md-24 col-md-css-padding">
                            <div class="day-product__product_images col-md-css-padding-none">
                                <img src="<?=$item->detailPicture();?>" alt="<?=$item->getName();?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <? endforeach; ?>
    </div>
</div>