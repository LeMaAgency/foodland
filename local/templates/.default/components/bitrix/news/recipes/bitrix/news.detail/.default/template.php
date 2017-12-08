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
                        <h2 class="block-product-img__description__h2">Ингредиенты:</h2>
                        <div class="block-product-img__description__line block-product-img__description__line_full">
                            <div class="block-product-img__description__line__name">Брынза</div>
                            <div class="block-product-img__description__line__dots"></div>
                            <div class="block-product-img__description__line__val"><span>100</span>г</div>
                        </div>
                        <div class="block-product-img__description__line block-product-img__description__line_full">
                            <div class="block-product-img__description__line__name">Помидоры</div>
                            <div class="block-product-img__description__line__dots"></div>
                            <div class="block-product-img__description__line__val"><span>1</span>шт.</div>
                        </div>
                        <div class="block-product-img__description__line block-product-img__description__line_full">
                            <div class="block-product-img__description__line__name">Сливочное растительное масло</div>
                            <div class="block-product-img__description__line__dots"></div>
                            <div class="block-product-img__description__line__val"><span>20</span>г</div>
                        </div>
                        <div class="block-product-img__description__line block-product-img__description__line_full">
                            <div class="block-product-img__description__line__name">Яйца</div>
                            <div class="block-product-img__description__line__dots"></div>
                            <div class="block-product-img__description__line__val"><span>2</span>шт.</div>
                        </div>
                        <div class="block-product-img__description__line block-product-img__description__line_full">
                            <div class="block-product-img__description__line__name">Болгарский перец</div>
                            <div class="block-product-img__description__line__dots"></div>
                            <div class="block-product-img__description__line__val"><span>1-2</span>шт.</div>
                        </div>
                        <div class="block-product-img__description__line block-product-img__description__line_full">
                            <div class="block-product-img__description__line__name">Базилик</div>
                        </div>
                        <div class="block-product-img__description__line block-product-img__description__line_full">
                            <div class="block-product-img__description__line__name">Сельдерей сушеный</div>
                        </div>
                        <div class="block-product-img__description__line block-product-img__description__line_full">
                            <div class="block-product-img__description__line__name">Петрушка (зелень)</div>
                        </div>
                        <div class="block-product-img__description__line block-product-img__description__line_full">
                            <div class="block-product-img__description__line__name">Укроп (зелень)</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-24">
                <div class="one-recipe__img">
                    <img src="/assets/images/eggs.png" alt="">
                </div>
                <div class="one-recipe__info-icon">
                    <div class="one-recipe__info-icon__item one-recipe__info-icon__item_time">
                        <span><?=$item->propValue('TIME');?></span>мин.
                    </div>
                    <div class="one-recipe__info-icon__item one-recipe__info-icon__item_category">
                        <?=$arResult['SECTION']['PATH'][0]['NAME'];?>
                    </div>
                    <a href="" title="">
                        <div class="one-recipe__info-icon__item one-recipe__info-icon__item_print">
                            Распечатать рецепт
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
            <div class="text-one-recipe">
                <h3 class="text-one-recipe__h3">Приготовление</h3>
                <p>На дно кокотниц выложить по кусочку сливочного масла, либо капнуть по паре капелек растительного. Помидор нарезать маленькими кубиками. Из половинки перца вырезать ножом или выемкой для печенья 4 сердечка, остатки мелко порубить и смешать с помидорами.</p>
                <p>Кусок брынзы разделить пополам, отщипнуть от каждой по небольшому кусочку (мы будем посыпать этими крошками блюдо сверху).</p>
                <p>Брынзу выложить на дно кокотниц. Накрыть сыр смесью помидоров и перца, в каждую из кокотниц влить по яйцу. Сверху присыпать сухими травами и крошками брынзы. На них выложить по 2 сердечка из перца и украсить свежей зеленью. При желании, слои можно начать с помидорных кубиков, потом брынза, снова помидоры, яйцо, травы, посыпка брынзой и перец.</p>
                <p>При желании, слои можно начать с помидорных кубиков, потом брынза, снова помидоры, яйцо, травы, посыпка брынзой и перец. Так - тоже очень вкусно.</p>
                <p>Поместить кокотницы в духовку, довести до температуры в 200 С, запекать в течение нескольких минут, до момента, когда брынза подплавится и появится характерный запах готового блюда.</p>
                <p>Подавать горячим.</p>
                <p>Блюдо получается очень эффектным, ярким, с неожиданным вкусом и начинкой: получается густым, творожно-сырным, солоноватым, с легкой кислинкой и радостными вкраплениями сочных овощей и зелени. Яйцо смягчает остроту брынзы и объединяет блюдо в очень вкусную запеканку.</p>
                <p>Приятного Вам аппетита!</p>
            </div>
        </div>
        <div class="col-7 col-md-24">
            <div class="photo-product-recipe">
                <div class="photo-product-recipe__h3">Фото используемых продуктов:</div>
                <div class="product-use-carousel__carousel product-use-carousel__carousel_one-recipe">
                    <div class="product-use-carousel__carousel__item product-use-carousel__carousel__item_m-h">
                        <img src="/assets/images/product/product-page/main-img--product.png" alt="">
                    </div>
                    <div class="product-use-carousel__carousel__item product-use-carousel__carousel__item_m-h">
                        <img src="/assets/images/product/product-page/main-img--product.png" alt="">
                    </div>
                </div>
                <div class="random__button random__button_one-recipe">
                    <a href="" title="" class="button-orange button-orange_one-recipe"><span>В каталог продуктов</span></a>
                </div>
                <div class="photo-product-recipe__h3">Вам может быть интересно:</div>
                <div class="product-use-carousel__carousel product-use-carousel__carousel_one-recipe">
                    <div class="product-use-carousel__carousel__item product-use-carousel__carousel__item_m-h">
                        <img src="/assets/images/product/product-page/main-img--product.png" alt="">
                    </div>
                    <div class="product-use-carousel__carousel__item product-use-carousel__carousel__item_m-h">
                        <img src="/assets/images/product/product-page/main-img--product.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>