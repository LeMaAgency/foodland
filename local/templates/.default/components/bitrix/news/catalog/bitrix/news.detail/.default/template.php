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
        <div class="block-product-img__carousel">
            <a href="" title="">
                <div class="block-product-img__carousel__item">
                    <img src="/assets/images/product/product-page/carousel-item-1.png" alt="">
                </div>
            </a>
            <a href="" title="">
                <div class="block-product-img__carousel__item"><img
                            src="/assets/images/product/product-page/carousel-item-2.png" alt="">
                </div>
            </a>
            <a href="" title="">
                <div class="block-product-img__carousel__item"><img
                            src="/assets/images/product/product-page/carousel-item-3.png" alt="">
                </div>
            </a>
            <a href="" title="">
                <div class="block-product-img__carousel__item"><img
                            src="/assets/images/product/product-page/carousel-item-4.png" alt="">
                </div>
            </a>
            <a href="" title="">
                <div class="block-product-img__carousel__item"><img
                            src="/assets/images/product/product-page/carousel-item-1.png" alt="">
                </div>
            </a>
        </div>
        <div class="block-product-img__description">
            <h2 class="block-product-img__description__h2">Пищевая ценность в 100 г продукта:</h2>
            <div class="block-product-img__description__line">
                <div class="block-product-img__description__line__name">Калории</div>
                <div class="block-product-img__description__line__dots"></div>
                <div class="block-product-img__description__line__val"><span>355,6</span> кКал</div>
            </div>
            <div class="block-product-img__description__line">
                <div class="block-product-img__description__line__name">Белки</div>
                <div class="block-product-img__description__line__dots"></div>
                <div class="block-product-img__description__line__val"><span>26</span> г</div>
            </div>
            <div class="block-product-img__description__line">
                <div class="block-product-img__description__line__name">Жиры</div>
                <div class="block-product-img__description__line__dots"></div>
                <div class="block-product-img__description__line__val"><span>26,5</span> г</div>
            </div>
            <div class="block-product-img__description__line">
                <div class="block-product-img__description__line__name">Углеводы</div>
                <div class="block-product-img__description__line__dots"></div>
                <div class="block-product-img__description__line__val"><span>3,5</span> г</div>
            </div>
            <div class="block-product-img__description__line">
                <div class="block-product-img__description__line__name">Пищевые волокна</div>
                <div class="block-product-img__description__line__dots"></div>
                <div class="block-product-img__description__line__val"><span>0</span> г</div>
            </div>
            <div class="block-product-img__description__line">
                <div class="block-product-img__description__line__name">Вода</div>
                <div class="block-product-img__description__line__dots"></div>
                <div class="block-product-img__description__line__val"><span>0</span> г</div>
            </div>
        </div>
    </div>
</div>
<div class="col-12 col-xl-24">
    <div class="block-product-text">
        <h2 class="block-product-text__h2">Описание продукта</h2>
        <?=$item->previewText();?>
        <h2 class="block-product-text__h2-info">Информация о товаре</h2>
        <h3 class="block-product-text__h3-composition">Состав</h3>
        <?=$item->detailText();?>
        <h3 class="block-product-text__h3-factory">Завод изготовитель</h3>
        <p>Республика Беларусь, г. Каменец, ОАО «Савушкин продукт».</p>
    </div>
</div>