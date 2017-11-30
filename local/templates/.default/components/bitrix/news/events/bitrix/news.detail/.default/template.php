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

Loc::loadMessages(__FILE__);

$this->setFrameMode(true);

?>
    <section class="event-inn">
        <div class="container">
            <h2 class="h2 event-inn__h2"><?=$arResult['NAME'];?></h2>
            <div class="event-inn__img"><img src="<?=$arResult['DETAIL_PICTURE']['SRC'];?>" alt="<?=$arResult['NAME'];?>"></div>
            <p>
                <?=$arResult['PREVIEW_TEXT'];?>
            </p>
            <div class="text-about-company__advantages text-about-company__advantages_event">
                <?=$arResult['DETAIL_TEXT'];?>
            </div>
        </div>
    </section>
<? if(Helper::propFilled('MORE_PHOTO', $arResult)): ?>
    <div class="product-use-carousel_4_gallery">
        <div class="container">
            <h2 class="h2 h2_mb-25"><?=Loc::getMessage('LEMA_EVENT_DETAIL_GALLERY_TITLE');?></h2>

            <div class="product-use-carousel_4__carousel">
                <? foreach($arResult['PROPERTIES']['MORE_PHOTO']['VALUE_SRC'] as $src): ?>
                    <div class="product-use-carousel__carousel__item product-use-carousel_4__carousel__item product-use-carousel_4__carousel__item_gallery">
                        <div class="product-use-carousel_4__carousel__item__wrap product-use-carousel_4__carousel__item__wrap_gallery">
                            <img src="<?=$src;?>" alt="<?=$arResult['NAME'];?>">
                        </div>
                    </div>
                <? endforeach; ?>
            </div>
        </div>
    </div>
<? endif; ?>