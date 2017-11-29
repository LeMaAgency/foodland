<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Торговые марки");

?>
<? $APPLICATION->IncludeComponent('bitrix:news.list', 'brands_top_slider', array(
    'DISPLAY_DATE' => 'Y',
    'DISPLAY_NAME' => 'Y',
    'DISPLAY_PICTURE' => 'Y',
    'DISPLAY_PREVIEW_TEXT' => 'Y',
    'AJAX_MODE' => 'N',
    'IBLOCK_TYPE' => 'content',
    'IBLOCK_ID' => '15',
    'NEWS_COUNT' => '20',
    'SORT_BY1' => 'ACTIVE_FROM',
    'SORT_ORDER1' => 'DESC',
    'SORT_BY2' => 'SORT',
    'SORT_ORDER2' => 'ASC',
    'FILTER_NAME' => '',
    'FIELD_CODE' => array(),
    'PROPERTY_CODE' => array(),
    'CHECK_DATES' => 'Y',
    'DETAIL_URL' => '',
    'PREVIEW_TRUNCATE_LEN' => '',
    'ACTIVE_DATE_FORMAT' => 'd.m.Y',
    'SET_TITLE' => 'N',
    'SET_BROWSER_TITLE' => 'N',
    'SET_META_KEYWORDS' => 'N',
    'SET_META_DESCRIPTION' => 'N',
    'SET_LAST_MODIFIED' => 'N',
    'INCLUDE_IBLOCK_INTO_CHAIN' => 'N',
    'ADD_SECTIONS_CHAIN' => 'N',
    'HIDE_LINK_WHEN_NO_DETAIL' => 'Y',
    'PARENT_SECTION' => '',
    'PARENT_SECTION_CODE' => '',
    'INCLUDE_SUBSECTIONS' => 'Y',
    'CACHE_TYPE' => 'A',
    'CACHE_TIME' => '36000000',
    'CACHE_FILTER' => 'Y',
    'CACHE_GROUPS' => 'N',
    'DISPLAY_TOP_PAGER' => 'N',
    'DISPLAY_BOTTOM_PAGER' => 'N',
    'PAGER_TITLE' => 'Элементы',
    'PAGER_SHOW_ALWAYS' => 'N',
    'PAGER_TEMPLATE' => '',
    'PAGER_DESC_NUMBERING' => 'N',
    'PAGER_DESC_NUMBERING_CACHE_TIME' => '36000',
    'PAGER_SHOW_ALL' => 'N',
    'PAGER_BASE_LINK_ENABLE' => 'N',
    'SET_STATUS_404' => 'N',
    'SHOW_404' => 'N',
    'MESSAGE_404' => '',
    'PAGER_BASE_LINK' => '',
    'PAGER_PARAMS_NAME' => 'arrPager',
    'AJAX_OPTION_JUMP' => 'N',
    'AJAX_OPTION_STYLE' => 'Y',
    'AJAX_OPTION_HISTORY' => 'N',
    'AJAX_OPTION_ADDITIONAL' => '',
)); ?>

    <div class="container">
        <div class="element">
            <h1 class="element__title__h1"><? $APPLICATION->ShowTitle(false); ?></h1>
        </div>
        <div class="search">
            <div class="search__form-mini">
                <form action="" method="get">
                    <input class="search__form-mini__input" type="text" placeholder="" name="q" value="" size="40">
                    <button class="search__form-mini__button" role="button" type="submit" value="Искать">
                        <i class="icon search__form_button"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
    <div class="background-page">
        <div class="container">
            <div class="row">
                <div class="container-aside">
                    <div class="filter">
                        <div class="filter__title"><span>Настройка<br>поиска</span></div>

                        <div class="filter__item">
                            <div class="filter__item__name">Особенности</div>
                            <div class="filter__item__select">
                                <select class="cs-select cs-skin-border">
                                    <option value="" disabled selected>Все</option>
                                    <option value="email">Россия</option>
                                    <option value="twitter">Ростов</option>
                                    <option value="linkedin">США</option>
                                </select>
                            </div>
                        </div>
                        <div class="filter__item">
                            <div class="filter__item__name">Торговая марка</div>
                            <div class="filter__item__select">
                                <select class="cs-select cs-skin-border">
                                    <option value="" disabled selected>Все</option>
                                    <option value="email">Россия</option>
                                    <option value="twitter">Ростов</option>
                                    <option value="linkedin">США</option>
                                </select>
                            </div>
                        </div>
                        <div class="filter__item">
                            <div class="filter__item__name">Страна происхождения</div>
                            <div class="filter__item__select">
                                <select class="cs-select cs-skin-border">
                                    <option value="" disabled selected>Все</option>
                                    <option value="email">Россия</option>
                                    <option value="twitter">Ростов</option>
                                    <option value="linkedin">США</option>
                                </select>
                            </div>
                        </div>
                        <div class="filter__item">
                            <div class="filter__item__name">Категория</div>
                            <div class="filter__item__select">
                                <select class="cs-select cs-skin-border">
                                    <option value="" disabled selected>Все</option>
                                    <option value="email">Россия</option>
                                    <option value="twitter">Ростов</option>
                                    <option value="linkedin">США</option>
                                </select>
                            </div>
                        </div>
                        <div class="filter__item">
                            <div class="filter__item__name">Подкатегория</div>
                            <div class="filter__item__select">
                                <select class="cs-select cs-skin-border">
                                    <option value="" disabled selected>Все</option>
                                    <option value="email">Россия</option>
                                    <option value="twitter">Ростов</option>
                                    <option value="linkedin">США</option>
                                </select>
                            </div>
                        </div>
                        <div class="filter__button">
                            <a href="" class="button-orange"><span>Показать</span></a>
                        </div>
                    </div>
                    <div class="tm-carousel aside-category-carousel">
                        <div class="tm-carousel__title"><span>Выбрать категорию</span></div>
                        <div class="tm-carousel__carousel">
                            <a href="" class="product__category__item">
                                <div class="product__category__item__images">
                                    <img src="/assets/images/product/category/1.png" alt="">
                                    <img src="/assets/images/product/category/1_hover.png" alt="" class="product__category__item__images_hover">
                                </div>
                            </a>
                            <a href="" class="product__category__item">
                                <div class="product__category__item__images">
                                    <img src="/assets/images/product/category/2.png" alt="">
                                    <img src="/assets/images/product/category/2_hover.png" alt="" class="product__category__item__images_hover">
                                </div>
                            </a>
                            <a href="" class="product__category__item">
                                <div class="product__category__item__images">
                                    <img src="/assets/images/product/category/6.png" alt="">
                                    <img src="/assets/images/product/category/6_hover.png" alt="" class="product__category__item__images_hover">
                                </div>
                            </a>
                            <a href="" class="product__category__item">
                                <div class="product__category__item__images">
                                    <img src="/assets/images/product/category/3.png" alt="">
                                    <img src="/assets/images/product/category/3_hover.png" alt="" class="product__category__item__images_hover">
                                </div>
                            </a>
                            <a href="" class="product__category__item">
                                <div class="product__category__item__images">
                                    <img src="/assets/images/product/category/4.png" alt="">
                                    <img src="/assets/images/product/category/4_hover.png" alt="" class="product__category__item__images_hover">
                                </div>
                            </a>
                            <a href="" class="product__category__item">
                                <div class="product__category__item__images">
                                    <img src="/assets/images/product/category/5.png" alt="">
                                    <img src="/assets/images/product/category/5_hover.png" alt="" class="product__category__item__images_hover">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="container-main">
                    <section class="trade-marks">
                        <div class="trade-marks__item">
                            <a href="">
                                <div class="trade-marks__item__card">
                                    <div class="trade-marks__item__card__img">
                                        <img src="/assets/images/trade-marks/Cream_nuvo-01.png" alt="">
                                    </div>
                                    <div class="trade-marks__item__card__title">Вимм-Билль-Данн</div>
                                </div>
                            </a>
                        </div>
                        <div class="trade-marks__item">
                            <a href="">
                                <div class="trade-marks__item__card">
                                    <div class="trade-marks__item__card__img">
                                        <img src="/assets/images/trade-marks/Heidi.png" alt="">
                                    </div>
                                    <div class="trade-marks__item__card__title">Heidi</div>
                                </div>
                            </a>
                        </div>
                        <div class="trade-marks__item">
                            <a href="">
                                <div class="trade-marks__item__card">
                                    <div class="trade-marks__item__card__img">
                                        <img src="/assets/images/trade-marks/La_paulina-01.png" alt="">
                                    </div>
                                    <div class="trade-marks__item__card__title">Mlekara sabac</div>
                                </div>
                            </a>
                        </div>
                        <div class="trade-marks__item">
                            <a href="">
                                <div class="trade-marks__item__card">
                                    <div class="trade-marks__item__card__img">
                                        <img src="/assets/images/trade-marks/Lattesso-01.png" alt="">
                                    </div>
                                    <div class="trade-marks__item__card__title">Савушкин продукт</div>
                                </div>
                            </a>
                        </div>
                        <div class="trade-marks__item">
                            <a href="">
                                <div class="trade-marks__item__card">
                                    <div class="trade-marks__item__card__img">
                                        <img src="/assets/images/trade-marks/Cream_nuvo-01.png" alt="">
                                    </div>
                                    <div class="trade-marks__item__card__title">Вимм-Билль-Данн</div>
                                </div>
                            </a>
                        </div>
                        <div class="trade-marks__item">
                            <a href="">
                                <div class="trade-marks__item__card">
                                    <div class="trade-marks__item__card__img">
                                        <img src="/assets/images/trade-marks/Heidi.png" alt="">
                                    </div>
                                    <div class="trade-marks__item__card__title">Heidi</div>
                                </div>
                            </a>
                        </div>
                        <div class="trade-marks__item">
                            <a href="">
                                <div class="trade-marks__item__card">
                                    <div class="trade-marks__item__card__img">
                                        <img src="/assets/images/trade-marks/La_paulina-01.png" alt="">
                                    </div>
                                    <div class="trade-marks__item__card__title">Mlekara sabac</div>
                                </div>
                            </a>
                        </div>
                        <div class="trade-marks__item">
                            <a href="">
                                <div class="trade-marks__item__card">
                                    <div class="trade-marks__item__card__img">
                                        <img src="/assets/images/trade-marks/Lattesso-01.png" alt="">
                                    </div>
                                    <div class="trade-marks__item__card__title">Савушкин продукт</div>
                                </div>
                            </a>
                        </div>
                        <div class="trade-marks__item">
                            <a href="">
                                <div class="trade-marks__item__card">
                                    <div class="trade-marks__item__card__img">
                                        <img src="/assets/images/trade-marks/Cream_nuvo-01.png" alt="">
                                    </div>
                                    <div class="trade-marks__item__card__title">Вимм-Билль-Данн</div>
                                </div>
                            </a>
                        </div>
                        <div class="trade-marks__item">
                            <a href="">
                                <div class="trade-marks__item__card">
                                    <div class="trade-marks__item__card__img">
                                        <img src="/assets/images/trade-marks/Heidi.png" alt="">
                                    </div>
                                    <div class="trade-marks__item__card__title">Heidi</div>
                                </div>
                            </a>
                        </div>
                        <div class="trade-marks__item">
                            <a href="">
                                <div class="trade-marks__item__card">
                                    <div class="trade-marks__item__card__img">
                                        <img src="/assets/images/trade-marks/La_paulina-01.png" alt="">
                                    </div>
                                    <div class="trade-marks__item__card__title">Mlekara sabac</div>
                                </div>
                            </a>
                        </div>
                        <div class="trade-marks__item">
                            <a href="">
                                <div class="trade-marks__item__card">
                                    <div class="trade-marks__item__card__img">
                                        <img src="/assets/images/trade-marks/Lattesso-01.png" alt="">
                                    </div>
                                    <div class="trade-marks__item__card__title">Савушкин продукт</div>
                                </div>
                            </a>
                        </div>
                        <div class="trade-marks__item">
                            <a href="">
                                <div class="trade-marks__item__card">
                                    <div class="trade-marks__item__card__img">
                                        <img src="/assets/images/trade-marks/Cream_nuvo-01.png" alt="">
                                    </div>
                                    <div class="trade-marks__item__card__title">Вимм-Билль-Данн</div>
                                </div>
                            </a>
                        </div>
                        <div class="trade-marks__item">
                            <a href="">
                                <div class="trade-marks__item__card">
                                    <div class="trade-marks__item__card__img">
                                        <img src="/assets/images/trade-marks/Heidi.png" alt="">
                                    </div>
                                    <div class="trade-marks__item__card__title">Heidi</div>
                                </div>
                            </a>
                        </div>
                        <div class="trade-marks__item">
                            <a href="">
                                <div class="trade-marks__item__card">
                                    <div class="trade-marks__item__card__img">
                                        <img src="/assets/images/trade-marks/La_paulina-01.png" alt="">
                                    </div>
                                    <div class="trade-marks__item__card__title">Mlekara sabac</div>
                                </div>
                            </a>
                        </div>
                        <div class="trade-marks__item">
                            <a href="">
                                <div class="trade-marks__item__card">
                                    <div class="trade-marks__item__card__img">
                                        <img src="/assets/images/trade-marks/Lattesso-01.png" alt="">
                                    </div>
                                    <div class="trade-marks__item__card__title">Савушкин продукт</div>
                                </div>
                            </a>
                        </div>
                        <div class="trade-marks__item">
                            <a href="">
                                <div class="trade-marks__item__card">
                                    <div class="trade-marks__item__card__img">
                                        <img src="/assets/images/trade-marks/Cream_nuvo-01.png" alt="">
                                    </div>
                                    <div class="trade-marks__item__card__title">Вимм-Билль-Данн</div>
                                </div>
                            </a>
                        </div>
                        <div class="trade-marks__item">
                            <a href="">
                                <div class="trade-marks__item__card">
                                    <div class="trade-marks__item__card__img">
                                        <img src="/assets/images/trade-marks/Heidi.png" alt="">
                                    </div>
                                    <div class="trade-marks__item__card__title">Heidi</div>
                                </div>
                            </a>
                        </div>
                        <div class="trade-marks__item">
                            <a href="">
                                <div class="trade-marks__item__card">
                                    <div class="trade-marks__item__card__img">
                                        <img src="/assets/images/trade-marks/La_paulina-01.png" alt="">
                                    </div>
                                    <div class="trade-marks__item__card__title">Mlekara sabac</div>
                                </div>
                            </a>
                        </div>
                        <div class="trade-marks__item">
                            <a href="">
                                <div class="trade-marks__item__card">
                                    <div class="trade-marks__item__card__img">
                                        <img src="/assets/images/trade-marks/Lattesso-01.png" alt="">
                                    </div>
                                    <div class="trade-marks__item__card__title">Савушкин продукт</div>
                                </div>
                            </a>
                        </div>
                        <div class="trade-marks__item">
                            <a href="">
                                <div class="trade-marks__item__card">
                                    <div class="trade-marks__item__card__img">
                                        <img src="/assets/images/trade-marks/Cream_nuvo-01.png" alt="">
                                    </div>
                                    <div class="trade-marks__item__card__title">Вимм-Билль-Данн</div>
                                </div>
                            </a>
                        </div>
                        <div class="trade-marks__item">
                            <a href="">
                                <div class="trade-marks__item__card">
                                    <div class="trade-marks__item__card__img">
                                        <img src="/assets/images/trade-marks/Heidi.png" alt="">
                                    </div>
                                    <div class="trade-marks__item__card__title">Heidi</div>
                                </div>
                            </a>
                        </div>
                        <div class="trade-marks__item">
                            <a href="">
                                <div class="trade-marks__item__card">
                                    <div class="trade-marks__item__card__img">
                                        <img src="/assets/images/trade-marks/La_paulina-01.png" alt="">
                                    </div>
                                    <div class="trade-marks__item__card__title">Mlekara sabac</div>
                                </div>
                            </a>
                        </div>
                        <div class="trade-marks__item">
                            <a href="">
                                <div class="trade-marks__item__card">
                                    <div class="trade-marks__item__card__img">
                                        <img src="/assets/images/trade-marks/Lattesso-01.png" alt="">
                                    </div>
                                    <div class="trade-marks__item__card__title">Савушкин продукт</div>
                                </div>
                            </a>
                        </div>
                    </section>
                    <div class="product-pagination product-pagination_padding ">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-19 col-xl-17 col-lg-24">
                                    <ul class="product-pagination__pagination product-pagination__pagination_center">
                                        <li><a href="" class="product-pagination__pagination__elem-active">1</a></li>
                                        <li><a href="">2</a></li>
                                    </ul>
                                </div>
                                <div class="col-5 col-xl-7 col-lg-24 css-right">
                                    <div class="product-pagination__button">
                                        <a href="" class="button-cheese"><span>Показать все</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="background-page__tomat_brand"></div>
        <div class="background-page__block-left-top_brand"></div>
        <div class="background-page__block-left-middle_brand"></div>
        <div class="background-page__block-right_brand"></div>
        <div class="background-page__cheese-right_brand"></div>
    </div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>