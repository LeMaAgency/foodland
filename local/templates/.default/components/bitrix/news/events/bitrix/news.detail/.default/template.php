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

?>
<div class="product-use-carousel product-use-carousel_m-0-50">
    <div class="container">
        <div class="row">
            <div class="product-use-carousel__wrap">
                <div class="product-use-carousel__carousel">
                    <div class="product-use-carousel__carousel__item">
                        <img src="/assets/images/product/product-page/product-use-2.png" alt="">
                        <div class="product-use-carousel__carousel__item__name"><?=$arResult['NAME'];?></div>
                        <div class="product-use-carousel__carousel__item__block-link">
                            <a href="" title=""><span>Подробней</span></a>
                        </div>
                    </div>
                    <div class="product-use-carousel__carousel__item">
                        <img src="/assets/images/product/product-page/product-use-1.png" alt="">
                        <div class="product-use-carousel__carousel__item__name">Чемпионат мира по продуктам питания</div>
                        <div class="product-use-carousel__carousel__item__block-link">
                            <a href="" title=""><span>Подробней</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-use-carousel__wrap">
                <div class="product-use-carousel__carousel">
                    <div class="product-use-carousel__carousel__item">
                        <img src="/assets/images/product/product-page/product-use-1.png" alt="">
                        <div class="product-use-carousel__carousel__item__name">Чемпионат мира по продуктам питания</div>
                        <div class="product-use-carousel__carousel__item__block-link">
                            <a href="" title=""><span>Подробней</span></a>
                        </div>
                    </div>
                    <div class="product-use-carousel__carousel__item">
                        <img src="/assets/images/product/product-page/product-use-2.png" alt="">
                        <div class="product-use-carousel__carousel__item__name">Чемпионат мира по продуктам питания</div>
                        <div class="product-use-carousel__carousel__item__block-link">
                            <a href="" title=""><span>Подробней</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-use-carousel__wrap">
                <div class="product-use-carousel__carousel">
                    <div class="product-use-carousel__carousel__item">
                        <img src="/assets/images/product/product-page/product-use-2.png" alt="">
                        <div class="product-use-carousel__carousel__item__name">ПРОДЭКСПО-2016</div>
                        <div class="product-use-carousel__carousel__item__block-link">
                            <a href="" title=""><span>Подробней</span></a>
                        </div>
                    </div>
                    <div class="product-use-carousel__carousel__item">
                        <img src="/assets/images/product/product-page/product-use-1.png" alt="">
                        <div class="product-use-carousel__carousel__item__name">ПРОДЭКСПО-2016</div>
                        <div class="product-use-carousel__carousel__item__block-link">
                            <a href="" title=""><span>Подробней</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-use-carousel__wrap">
                <div class="product-use-carousel__carousel">
                    <div class="product-use-carousel__carousel__item">
                        <img src="/assets/images/product/product-page/product-use-1.png" alt="">
                        <div class="product-use-carousel__carousel__item__name">Дегустация сыров от «Футленд»</div>
                        <div class="product-use-carousel__carousel__item__block-link">
                            <a href="" title=""><span>Подробней</span></a>
                        </div>
                    </div>
                    <div class="product-use-carousel__carousel__item">
                        <img src="/assets/images/product/product-page/product-use-2.png" alt="">
                        <div class="product-use-carousel__carousel__item__name">Дегустация сыров от «Футленд»</div>
                        <div class="product-use-carousel__carousel__item__block-link">
                            <a href="" title=""><span>Подробней</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
<div class="product-use-carousel_4_gallery">
    <div class="container">
        <h2 class="h2 h2_mb-25">Галерея</h2>
        <div class="product-use-carousel_4__carousel">
            <div class="product-use-carousel__carousel__item product-use-carousel_4__carousel__item product-use-carousel_4__carousel__item_gallery">
                <div class="product-use-carousel_4__carousel__item__wrap product-use-carousel_4__carousel__item__wrap_gallery">
                    <img src="/assets/images/product/product-page/product-use-2.png" alt="">
                </div>
            </div>
            <div class="product-use-carousel__carousel__item product-use-carousel_4__carousel__item product-use-carousel_4__carousel__item_gallery">
                <div class="product-use-carousel_4__carousel__item__wrap product-use-carousel_4__carousel__item__wrap_gallery">
                    <img src="/assets/images/product/product-page/product-use-1.png" alt="">
                </div>
            </div>
            <div class="product-use-carousel__carousel__item product-use-carousel_4__carousel__item product-use-carousel_4__carousel__item_gallery">
                <div class="product-use-carousel_4__carousel__item__wrap product-use-carousel_4__carousel__item__wrap_gallery">
                    <img src="/assets/images/product/product-page/product-use-2.png" alt="">
                </div>
            </div>
            <div class="product-use-carousel__carousel__item product-use-carousel_4__carousel__item product-use-carousel_4__carousel__item_gallery">
                <div class="product-use-carousel_4__carousel__item__wrap product-use-carousel_4__carousel__item__wrap_gallery">
                    <img src="/assets/images/product/product-page/product-use-1.png" alt="">
                </div>
            </div>
            <div class="product-use-carousel__carousel__item product-use-carousel_4__carousel__item product-use-carousel_4__carousel__item_gallery">
                <div class="product-use-carousel_4__carousel__item__wrap product-use-carousel_4__carousel__item__wrap_gallery">
                    <img src="/assets/images/product/product-page/product-use-2.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>