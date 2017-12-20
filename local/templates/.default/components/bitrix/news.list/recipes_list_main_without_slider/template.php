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

use \Bitrix\Main\Localization\Loc,
    \WM\Common\Helper;

Loc::loadMessages(__FILE__);

$this->setFrameMode(true);

if(empty($arResult['ITEMS']))
    return;

$data = new \WM\Template\TemplateHelper($this);

$maxStars = 3;

?>
    <section class="product-use-carousel_recipes">
        <div class="container-fluid">
            <div class="row">
                <? foreach($data->items() as $item): ?>
                    <div class="product-use-carousel__wrap product-use-carousel__wrap_recipes">
                        <div class="product-use-carousel__carousel">
                            <div class="product-use-carousel__carousel__item" <?=$item->editId()?>>
                                <img src="<?=$item->previewPicture();?>" alt="<?=$item->getName();?>">
                                <div class="product-use-carousel__carousel__item__name product-use-carousel__carousel__item__name_recipes">
                                    <?=mb_strimwidth(htmlspecialcharsback($item->getName()), 0, 50, "...");?>
                                </div>
                                <div class="product-use-carousel__carousel__item__info">
                                    <div class="product-use-carousel__carousel__item__info__time">
                                        <span><?=$item->propvalue('TIME');?></span> <?=Loc::getMessage('LEMA_RECIPES_TIME');?>
                                    </div>
                                    <div class="product-use-carousel__carousel__item__info__rating">
                                        <? $complexity = (int) $item->prop('COMPLEXITY', 'VALUE_XML_ID');
                                        if($complexity > $maxStars)
                                            $complexity = $maxStars; ?>
                                        <? for($i = 0; $i < $maxStars; ++$i): ?>
                                            <span class="rating-star<? if($i < $complexity) { ?>_active<? } ?>"></span>
                                        <? endfor; ?>
                                    </div>
                                </div>
                                <div class="product-use-carousel__carousel__item__block-link">
                                    <a href="<?=$item->detailUrl();?>" title="<?=$item->getName();?>">
                                        <span><?=Loc::getMessage('LEMA_RECIPES_MORE_TEXT');?></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <? endforeach; ?>
            </div>
        </div>
    </section>
<? if($arParams['DISPLAY_BOTTOM_PAGER'] == 'Y'): ?>
    <?=$arResult['NAV_STRING'];?>
<? endif; ?>