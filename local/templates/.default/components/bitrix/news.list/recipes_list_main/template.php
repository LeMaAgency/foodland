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
<section class="product-use-carousel_recipes">
    <div class="container-fluid">
        <div class="row">
            <div class="product-use-carousel__wrap product-use-carousel__wrap_recipes">
                <div class="product-use-carousel__carousel">
                    <div class="product-use-carousel__carousel__item">
                        <img src="/assets/images/product/product-page/product-use-2.png" alt="">
                        <div class="product-use-carousel__carousel__item__name
                                                product-use-carousel__carousel__item__name_recipes">Паста Сицилиана</div>
                        <div class="product-use-carousel__carousel__item__info">
                            <div class="product-use-carousel__carousel__item__info__time"><span>40</span>мин.</div>
                            <div class="product-use-carousel__carousel__item__info__rating">
                                <span class="rating-star_active"></span>
                                <span class="rating-star_active"></span>
                                <span class="rating-star"></span>
                            </div>
                        </div>
                        <div class="product-use-carousel__carousel__item__block-link">
                            <a href="" title=""><span>Подробней</span></a>
                        </div>
                    </div>
                    <div class="product-use-carousel__carousel__item">
                        <img src="/assets/images/product/product-page/product-use-1.png" alt="">
                        <div class="product-use-carousel__carousel__item__name
                                                product-use-carousel__carousel__item__name_recipes">Паста Сицилиана</div>
                        <div class="product-use-carousel__carousel__item__info">
                            <div class="product-use-carousel__carousel__item__info__time"><span>40</span>мин.</div>
                            <div class="product-use-carousel__carousel__item__info__rating">
                                <span class="rating-star_active"></span>
                                <span class="rating-star_active"></span>
                                <span class="rating-star"></span>
                            </div>
                        </div>
                        <div class="product-use-carousel__carousel__item__block-link">
                            <a href="" title=""><span>Подробней</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-use-carousel__wrap product-use-carousel__wrap_recipes">
                <div class="product-use-carousel__carousel">
                    <div class="product-use-carousel__carousel__item">
                        <img src="/assets/images/product/product-page/product-use-1.png" alt="">
                        <div class="product-use-carousel__carousel__item__name
                                                product-use-carousel__carousel__item__name_recipes">Паста Сицилиана</div>
                        <div class="product-use-carousel__carousel__item__info">
                            <div class="product-use-carousel__carousel__item__info__time"><span>40</span>мин.</div>
                            <div class="product-use-carousel__carousel__item__info__rating">
                                <span class="rating-star_active"></span>
                                <span class="rating-star_active"></span>
                                <span class="rating-star"></span>
                            </div>
                        </div>
                        <div class="product-use-carousel__carousel__item__block-link">
                            <a href="" title=""><span>Подробней</span></a>
                        </div>
                    </div>
                    <div class="product-use-carousel__carousel__item">
                        <img src="/assets/images/product/product-page/product-use-2.png" alt="">
                        <div class="product-use-carousel__carousel__item__name
                                                product-use-carousel__carousel__item__name_recipes">Паста Сицилиана</div>
                        <div class="product-use-carousel__carousel__item__info">
                            <div class="product-use-carousel__carousel__item__info__time"><span>40</span>мин.</div>
                            <div class="product-use-carousel__carousel__item__info__rating">
                                <span class="rating-star_active"></span>
                                <span class="rating-star_active"></span>
                                <span class="rating-star"></span>
                            </div>
                        </div>
                        <div class="product-use-carousel__carousel__item__block-link">
                            <a href="" title=""><span>Подробней</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-use-carousel__wrap product-use-carousel__wrap_recipes">
                <div class="product-use-carousel__carousel">
                    <div class="product-use-carousel__carousel__item">
                        <img src="/assets/images/product/product-page/product-use-2.png" alt="">
                        <div class="product-use-carousel__carousel__item__name
                                                product-use-carousel__carousel__item__name_recipes">Паста Сицилиана</div>
                        <div class="product-use-carousel__carousel__item__info">
                            <div class="product-use-carousel__carousel__item__info__time"><span>40</span>мин.</div>
                            <div class="product-use-carousel__carousel__item__info__rating">
                                <span class="rating-star_active"></span>
                                <span class="rating-star_active"></span>
                                <span class="rating-star"></span>
                            </div>
                        </div>
                        <div class="product-use-carousel__carousel__item__block-link">
                            <a href="" title=""><span>Подробней</span></a>
                        </div>
                    </div>
                    <div class="product-use-carousel__carousel__item">
                        <img src="/assets/images/product/product-page/product-use-1.png" alt="">
                        <div class="product-use-carousel__carousel__item__name
                                                product-use-carousel__carousel__item__name_recipes">Паста Сицилиана</div>
                        <div class="product-use-carousel__carousel__item__info">
                            <div class="product-use-carousel__carousel__item__info__time"><span>40</span>мин.</div>
                            <div class="product-use-carousel__carousel__item__info__rating">
                                <span class="rating-star_active"></span>
                                <span class="rating-star_active"></span>
                                <span class="rating-star"></span>
                            </div>
                        </div>
                        <div class="product-use-carousel__carousel__item__block-link">
                            <a href="" title=""><span>Подробней</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-use-carousel__wrap product-use-carousel__wrap_recipes">
                <div class="product-use-carousel__carousel">
                    <div class="product-use-carousel__carousel__item">
                        <img src="/assets/images/product/product-page/product-use-1.png" alt="">
                        <div class="product-use-carousel__carousel__item__name
                                                product-use-carousel__carousel__item__name_recipes">Паста Сицилиана</div>
                        <div class="product-use-carousel__carousel__item__info">
                            <div class="product-use-carousel__carousel__item__info__time"><span>40</span>мин.</div>
                            <div class="product-use-carousel__carousel__item__info__rating">
                                <span class="rating-star_active"></span>
                                <span class="rating-star_active"></span>
                                <span class="rating-star"></span>
                            </div>
                        </div>
                        <div class="product-use-carousel__carousel__item__block-link">
                            <a href="" title=""><span>Подробней</span></a>
                        </div>
                    </div>
                    <div class="product-use-carousel__carousel__item">
                        <img src="/assets/images/product/product-page/product-use-2.png" alt="">
                        <div class="product-use-carousel__carousel__item__name
                                                product-use-carousel__carousel__item__name_recipes">Паста Сицилиана</div>
                        <div class="product-use-carousel__carousel__item__info">
                            <div class="product-use-carousel__carousel__item__info__time"><span>40</span>мин.</div>
                            <div class="product-use-carousel__carousel__item__info__rating">
                                <span class="rating-star_active"></span>
                                <span class="rating-star_active"></span>
                                <span class="rating-star"></span>
                            </div>
                        </div>
                        <div class="product-use-carousel__carousel__item__block-link">
                            <a href="" title=""><span>Подробней</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-use-carousel__wrap product-use-carousel__wrap_recipes">
                <div class="product-use-carousel__carousel">
                    <div class="product-use-carousel__carousel__item">
                        <img src="/assets/images/product/product-page/product-use-2.png" alt="">
                        <div class="product-use-carousel__carousel__item__name
                                                product-use-carousel__carousel__item__name_recipes">Паста Сицилиана</div>
                        <div class="product-use-carousel__carousel__item__info">
                            <div class="product-use-carousel__carousel__item__info__time"><span>40</span>мин.</div>
                            <div class="product-use-carousel__carousel__item__info__rating">
                                <span class="rating-star_active"></span>
                                <span class="rating-star_active"></span>
                                <span class="rating-star"></span>
                            </div>
                        </div>
                        <div class="product-use-carousel__carousel__item__block-link">
                            <a href="" title=""><span>Подробней</span></a>
                        </div>
                    </div>
                    <div class="product-use-carousel__carousel__item">
                        <img src="/assets/images/product/product-page/product-use-1.png" alt="">
                        <div class="product-use-carousel__carousel__item__name
                                                product-use-carousel__carousel__item__name_recipes">Паста Сицилиана</div>
                        <div class="product-use-carousel__carousel__item__info">
                            <div class="product-use-carousel__carousel__item__info__time"><span>40</span>мин.</div>
                            <div class="product-use-carousel__carousel__item__info__rating">
                                <span class="rating-star_active"></span>
                                <span class="rating-star_active"></span>
                                <span class="rating-star"></span>
                            </div>
                        </div>
                        <div class="product-use-carousel__carousel__item__block-link">
                            <a href="" title=""><span>Подробней</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-use-carousel__wrap product-use-carousel__wrap_recipes">
                <div class="product-use-carousel__carousel">
                    <div class="product-use-carousel__carousel__item">
                        <img src="/assets/images/product/product-page/product-use-1.png" alt="">
                        <div class="product-use-carousel__carousel__item__name
                                                product-use-carousel__carousel__item__name_recipes">Паста Сицилиана</div>
                        <div class="product-use-carousel__carousel__item__info">
                            <div class="product-use-carousel__carousel__item__info__time"><span>40</span>мин.</div>
                            <div class="product-use-carousel__carousel__item__info__rating">
                                <span class="rating-star_active"></span>
                                <span class="rating-star_active"></span>
                                <span class="rating-star"></span>
                            </div>
                        </div>
                        <div class="product-use-carousel__carousel__item__block-link">
                            <a href="" title=""><span>Подробней</span></a>
                        </div>
                    </div>
                    <div class="product-use-carousel__carousel__item">
                        <img src="/assets/images/product/product-page/product-use-2.png" alt="">
                        <div class="product-use-carousel__carousel__item__name
                                                product-use-carousel__carousel__item__name_recipes">Паста Сицилиана</div>
                        <div class="product-use-carousel__carousel__item__info">
                            <div class="product-use-carousel__carousel__item__info__time"><span>40</span>мин.</div>
                            <div class="product-use-carousel__carousel__item__info__rating">
                                <span class="rating-star_active"></span>
                                <span class="rating-star_active"></span>
                                <span class="rating-star"></span>
                            </div>
                        </div>
                        <div class="product-use-carousel__carousel__item__block-link">
                            <a href="" title=""><span>Подробней</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-use-carousel__wrap product-use-carousel__wrap_recipes">
                <div class="product-use-carousel__carousel">
                    <div class="product-use-carousel__carousel__item">
                        <img src="/assets/images/product/product-page/product-use-2.png" alt="">
                        <div class="product-use-carousel__carousel__item__name
                                                product-use-carousel__carousel__item__name_recipes">Паста Сицилиана</div>
                        <div class="product-use-carousel__carousel__item__info">
                            <div class="product-use-carousel__carousel__item__info__time"><span>40</span>мин.</div>
                            <div class="product-use-carousel__carousel__item__info__rating">
                                <span class="rating-star_active"></span>
                                <span class="rating-star_active"></span>
                                <span class="rating-star"></span>
                            </div>
                        </div>
                        <div class="product-use-carousel__carousel__item__block-link">
                            <a href="" title=""><span>Подробней</span></a>
                        </div>
                    </div>
                    <div class="product-use-carousel__carousel__item">
                        <img src="/assets/images/product/product-page/product-use-1.png" alt="">
                        <div class="product-use-carousel__carousel__item__name
                                                product-use-carousel__carousel__item__name_recipes">Паста Сицилиана</div>
                        <div class="product-use-carousel__carousel__item__info">
                            <div class="product-use-carousel__carousel__item__info__time"><span>40</span>мин.</div>
                            <div class="product-use-carousel__carousel__item__info__rating">
                                <span class="rating-star_active"></span>
                                <span class="rating-star_active"></span>
                                <span class="rating-star"></span>
                            </div>
                        </div>
                        <div class="product-use-carousel__carousel__item__block-link">
                            <a href="" title=""><span>Подробней</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-use-carousel__wrap product-use-carousel__wrap_recipes">
                <div class="product-use-carousel__carousel">
                    <div class="product-use-carousel__carousel__item">
                        <img src="/assets/images/product/product-page/product-use-1.png" alt="">
                        <div class="product-use-carousel__carousel__item__name
                                                product-use-carousel__carousel__item__name_recipes">Паста Сицилиана</div>
                        <div class="product-use-carousel__carousel__item__info">
                            <div class="product-use-carousel__carousel__item__info__time"><span>40</span>мин.</div>
                            <div class="product-use-carousel__carousel__item__info__rating">
                                <span class="rating-star_active"></span>
                                <span class="rating-star_active"></span>
                                <span class="rating-star"></span>
                            </div>
                        </div>
                        <div class="product-use-carousel__carousel__item__block-link">
                            <a href="" title=""><span>Подробней</span></a>
                        </div>
                    </div>
                    <div class="product-use-carousel__carousel__item">
                        <img src="/assets/images/product/product-page/product-use-2.png" alt="">
                        <div class="product-use-carousel__carousel__item__name
                                                product-use-carousel__carousel__item__name_recipes">Паста Сицилиана</div>
                        <div class="product-use-carousel__carousel__item__info">
                            <div class="product-use-carousel__carousel__item__info__time"><span>40</span>мин.</div>
                            <div class="product-use-carousel__carousel__item__info__rating">
                                <span class="rating-star_active"></span>
                                <span class="rating-star_active"></span>
                                <span class="rating-star"></span>
                            </div>
                        </div>
                        <div class="product-use-carousel__carousel__item__block-link">
                            <a href="" title=""><span>Подробней</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-use-carousel__wrap product-use-carousel__wrap_recipes">
                <div class="product-use-carousel__carousel">
                    <div class="product-use-carousel__carousel__item">
                        <img src="/assets/images/product/product-page/product-use-2.png" alt="">
                        <div class="product-use-carousel__carousel__item__name
                                                product-use-carousel__carousel__item__name_recipes">Паста Сицилиана</div>
                        <div class="product-use-carousel__carousel__item__info">
                            <div class="product-use-carousel__carousel__item__info__time"><span>40</span>мин.</div>
                            <div class="product-use-carousel__carousel__item__info__rating">
                                <span class="rating-star_active"></span>
                                <span class="rating-star_active"></span>
                                <span class="rating-star"></span>
                            </div>
                        </div>
                        <div class="product-use-carousel__carousel__item__block-link">
                            <a href="" title=""><span>Подробней</span></a>
                        </div>
                    </div>
                    <div class="product-use-carousel__carousel__item">
                        <img src="/assets/images/product/product-page/product-use-1.png" alt="">
                        <div class="product-use-carousel__carousel__item__name
                                                product-use-carousel__carousel__item__name_recipes">Паста Сицилиана</div>
                        <div class="product-use-carousel__carousel__item__info">
                            <div class="product-use-carousel__carousel__item__info__time"><span>40</span>мин.</div>
                            <div class="product-use-carousel__carousel__item__info__rating">
                                <span class="rating-star_active"></span>
                                <span class="rating-star_active"></span>
                                <span class="rating-star"></span>
                            </div>
                        </div>
                        <div class="product-use-carousel__carousel__item__block-link">
                            <a href="" title=""><span>Подробней</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="product-use-carousel_recipes">
    <div class="container-fluid">
        <div class="row">
            <? foreach($data->items() as $item): ?>
                <div class="product-use-carousel__wrap product-use-carousel__wrap_recipes" <?=$item->editId();?>>
                    <div class="product-use-carousel__carousel">
                        <div class="product-use-carousel__carousel__item">
                            <img src="/assets/images/product/product-page/product-use-2.png" alt="">
                            <div class="product-use-carousel__carousel__item__name
                                                product-use-carousel__carousel__item__name_recipes">Паста Сицилиана</div>
                            <div class="product-use-carousel__carousel__item__info">
                                <div class="product-use-carousel__carousel__item__info__time"><span>40</span>мин.</div>
                                <div class="product-use-carousel__carousel__item__info__rating">
                                    <span class="rating-star_active"></span>
                                    <span class="rating-star_active"></span>
                                    <span class="rating-star"></span>
                                </div>
                            </div>
                            <div class="product-use-carousel__carousel__item__block-link">
                                <a href="" title=""><span>Подробней</span></a>
                            </div>
                        </div>
                        <div class="product-use-carousel__carousel__item">
                            <img src="/assets/images/product/product-page/product-use-1.png" alt="">
                            <div class="product-use-carousel__carousel__item__name
                                                product-use-carousel__carousel__item__name_recipes">Паста Сицилиана</div>
                            <div class="product-use-carousel__carousel__item__info">
                                <div class="product-use-carousel__carousel__item__info__time"><span>40</span>мин.</div>
                                <div class="product-use-carousel__carousel__item__info__rating">
                                    <span class="rating-star_active"></span>
                                    <span class="rating-star_active"></span>
                                    <span class="rating-star"></span>
                                </div>
                            </div>
                            <div class="product-use-carousel__carousel__item__block-link">
                                <a href="" title=""><span>Подробней</span></a>
                            </div>
                        </div>
                    </div>
                </div>
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
</section>