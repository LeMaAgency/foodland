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
<div class="product-use-carousel_4">
    <div class="container">
        <div class="product-use-carousel_4__carousel">
            <? foreach($data->items() as $item): ?>
                <div class="product-use-carousel__carousel__item product-use-carousel_4__carousel__item" <?=$item->editId();?>>
                    <div class="product-use-carousel_4__carousel__item__wrap">
                        <img src="<?=$item->previewPicture();?>" alt="<?=$item->getName();?>">
                        <div class="product-use-carousel__carousel__item__name"><?=$item->getName();?></div>
                        <div class="product-use-carousel__carousel__item__block-link">
                            <a href="<?=$item->detailUrl();?>"
                               title="<?=$item->getName();?>"><span><?=Loc::getMessage('LEMA_RECIPES_MORE_TEXT');?></span></a>
                        </div>
                    </div>
                </div>
            <? endforeach; ?>
        </div>
    </div>
</div>