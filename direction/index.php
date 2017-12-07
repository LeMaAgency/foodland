<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Направления деятельности");
?>
    <div class="background-page">
        <div class="container">
            <div class="element">
                <h1 class="h1 h1_mt-35"><?$APPLICATION->ShowTitle(false);?></h1>
            </div>
            <? $APPLICATION->IncludeComponent(
                "bitrix:search.form",
                "flat",
                Array(
                    "PAGE" => '/direction/',
                ),
                false,
                array('HIDE_ICONS' => 'Y')); ?>
        </div>
        <? $APPLICATION->IncludeComponent('bitrix:news.list', 'direction_line', array(
            'DISPLAY_DATE' => 'Y',
            'DISPLAY_NAME' => 'Y',
            'DISPLAY_PICTURE' => 'Y',
            'DISPLAY_PREVIEW_TEXT' => 'Y',
            'AJAX_MODE' => 'N',
            'IBLOCK_TYPE' => 'content',
            'IBLOCK_ID' => '14',
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
            'HIDE_LINK_WHEN_NO_DETAIL' => 'N',
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
            'H2_CLASS' => 'h2_catalog',
        )); ?>
        <div class="random random_about container">
            <div class="row">
                <div class="col-24">
                    <div class="random_about__wrap">
                        <div class="random__carousel">
                            <div class="random__block" style="background-image: url('/assets/images/images-1.jpg')">
                                <div class="random__logo"><img src="/assets/images/icons/bonfesto.png"></div>
                                <div class="random__body random__body_about">
                                    <div class="random__title">
                                        Дегустация сыров от «Фудленд»
                                    </div>
                                    <div class="random__text">
                                        <p>«Фудлэнд» совместно с Bonfesto и Heidi провели дегустацию новых сыров. На дегустации были представлены 12
                                            сортов сыра, которыми пополнился ассортимент компаний.</p>
                                    </div>
                                    <div class="random__button-mini">
                                        <a href="" title="">— Подробней —</a>
                                    </div>
                                    <div class="random__button">
                                        <a href="" title="" class="button-orange"><span>Все события</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="random__block" style="background-image: url('/assets/images/images-1.jpg')">
                                <div class="random__body random__body_about">
                                    <div class="random__title">
                                        Дегустация сыров от «Фудленд»
                                    </div>
                                    <div class="random__text">
                                        <p>«Фудлэнд» совместно с Bonfesto и Heidi провели дегустацию новых сыров. На дегустации были представлены 12
                                            сортов сыра, которыми пополнился ассортимент компаний.</p>
                                    </div>
                                    <div class="random__button-mini">
                                        <a href="" title="">— Подробней —</a>
                                    </div>
                                    <div class="random__button">
                                        <a href="" title="" class="button-orange"><span>Все события</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-direct">
            <div class="container">
                <div class="row">
                    <div class="col-24">
                        <p>Мы начали свою деятельность в 1994 году и благодаря профессиональному отношению к делу приобрели солидную деловую
                            репутацию. На сегодняшний день Компания «Фудлэнд» является крупнейшим в России дистрибьютором различных видов сыров,
                            сливочного масла и сухих молочных продуктов. Сотрудничество с нами – это возможность круглогодично получать самый полный
                            ассортимент традиционных отечественных и импортных сыров.</p>
                    </div>
                </div>
            </div>
        </div>
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
                            <a href="" title="" class="button-orange"><span>Показать</span></a>
                        </div>
                    </div>
                </div>
                <div class="container-main">
                    <section class="products-block products-block_pt">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="products-block__wrap-item">
                                    <a href="" title="">
                                        <div class="products-block__item">
                                            <div class="products-block__item__image">
                                                <img src="/assets/images/product/products/product-item.png" alt="image-product">
                                            </div>
                                            <div class="products-block__item__name">Полутвёрдый продукт <br> Бутербродный
                                            </div>
                                            <p class="products-block__item__art">арт. 2345</p>
                                            <div class="products-block__item__description">
                                                <p class="products-block__item__sort">Bonfesto</p>
                                                <p class="products-block__item__sort-fat">жирность: 30%</p>
                                                <p class="products-block__item__text">Мягкие и полутвердые сыры, выпускаемые по итальянским
                                                    технологиям.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="products-block__wrap-item">
                                    <a href="" title="">
                                        <div class="products-block__item">
                                            <div class="products-block__item__image">
                                                <img src="/assets/images/product/products/product-item-2.png" alt="image-product">
                                            </div>
                                            <div class="products-block__item__name">Сыр Витязь <br> "РАДОСТЬ ВКУСА"</div>
                                            <p class="products-block__item__art">арт. 2345</p>
                                            <div class="products-block__item__description">
                                                <p class="products-block__item__sort">Bonfesto</p>
                                                <p class="products-block__item__sort-fat">жирность: 30%</p>
                                                <p class="products-block__item__text">Мягкие и полутвердые сыры, выпускаемые по итальянским
                                                    технологиям.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="products-block__wrap-item">
                                    <a href="" title="">
                                        <div class="products-block__item">
                                            <div class="products-block__item__image">
                                                <img src="/assets/images/product/products/product-item-3.png" alt="image-product">
                                            </div>
                                            <div class="products-block__item__name">Сыр Российский <br> "РАДОСТЬ ВКУСА"
                                            </div>
                                            <p class="products-block__item__art">арт. 2345</p>
                                            <div class="products-block__item__description">
                                                <p class="products-block__item__sort">Bonfesto</p>
                                                <p class="products-block__item__sort-fat">жирность: 30%</p>
                                                <p class="products-block__item__text">Мягкие и полутвердые сыры, выпускаемые по итальянским
                                                    технологиям.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="products-block__wrap-item">
                                    <a href="" title="">
                                        <div class="products-block__item">
                                            <div class="products-block__item__image">
                                                <img src="/assets/images/product/products/product-item-3.png" alt="image-product">
                                            </div>
                                            <div class="products-block__item__name">Сыр Российский <br> "РАДОСТЬ ВКУСА"
                                            </div>
                                            <p class="products-block__item__art">арт. 2345</p>
                                            <div class="products-block__item__description">
                                                <p class="products-block__item__sort">Bonfesto</p>
                                                <p class="products-block__item__sort-fat">жирность: 30%</p>
                                                <p class="products-block__item__text">Мягкие и полутвердые сыры, выпускаемые по итальянским
                                                    технологиям.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="products-block__wrap-item">
                                    <a href="" title="">
                                        <div class="products-block__item">
                                            <div class="products-block__item__image">
                                                <img src="/assets/images/product/products/product-item.png" alt="image-product">
                                            </div>
                                            <div class="products-block__item__name">Полутвёрдый <br> продукт Бутербродный
                                            </div>
                                            <p class="products-block__item__art">арт. 2345</p>
                                            <div class="products-block__item__description">
                                                <p class="products-block__item__sort">Bonfesto</p>
                                                <p class="products-block__item__sort-fat">жирность: 30%</p>
                                                <p class="products-block__item__text">Мягкие и полутвердые сыры, выпускаемые по итальянским
                                                    технологиям.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="products-block__wrap-item">
                                    <a href="" title="">
                                        <div class="products-block__item">
                                            <div class="products-block__item__image">
                                                <img src="/assets/images/product/products/product-item-2.png" alt="image-product">
                                            </div>
                                            <div class="products-block__item__name">Сыр Витязь <br> "РАДОСТЬ ВКУСА"</div>
                                            <p class="products-block__item__art">арт. 2345</p>
                                            <div class="products-block__item__description">
                                                <p class="products-block__item__sort">Bonfesto</p>
                                                <p class="products-block__item__sort-fat">жирность: 30%</p>
                                                <p class="products-block__item__text">Мягкие и полутвердые сыры, выпускаемые по итальянским
                                                    технологиям.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="product-pagination product-pagination_pb-10">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-19 col-xl-17 col-lg-24">
                                    <ul class="product-pagination__pagination css-text-center">
                                        <li><a href="" title="" class="product-pagination__pagination__elem-active">1</a></li>
                                        <li><a href="" title="">2</a></li>
                                        <li><a href="" title="">3</a></li>
                                        <li><a href="" title="">4</a></li>
                                        <li class="col-sm-none"><a href="" title="">5</a></li>
                                        <li><a href="" title="" class="product-pagination__pagination__elem-deactive">...</a></li>
                                        <li><a href="" title="">9</a></li>
                                    </ul>
                                </div>
                                <div class="col-5 col-xl-7 col-lg-24 css-right">
                                    <div class="product-pagination__button">
                                        <a href="" title="" class="button-cheese"><span>Показать все</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clients clients_about">
            <div class="container">
                <h2 class="h2_about-company">Наши клиенты</h2>
                <div class="clients__carousel clients__carousel_bg">
                    <a href="" title="">
                        <div class="clients__carousel__item">
                            <img src="/assets/images/clients/azbuka.png" alt="">
                        </div>
                    </a>
                    <a href="" title="">
                        <div class="clients__carousel__item">
                            <img src="/assets/images/clients/azbuka.png" alt="">
                        </div>
                    </a>
                    <a href="" title="">
                        <div class="clients__carousel__item">
                            <img src="/assets/images/clients/azbuka.png" alt="">
                        </div>
                    </a>
                    <a href="" title="">
                        <div class="clients__carousel__item">
                            <img src="/assets/images/clients/azbuka.png" alt="">
                        </div>
                    </a>
                    <a href="" title="">
                        <div class="clients__carousel__item">
                            <img src="/assets/images/clients/azbuka.png" alt="">
                        </div>
                    </a>
                    <a href="" title="">
                        <div class="clients__carousel__item">
                            <img src="/assets/images/clients/azbuka.png" alt="">
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="product-use-carousel_4">
            <div class="container">
                <div class="product-use-carousel_4__carousel">
                    <div class="product-use-carousel__carousel__item product-use-carousel_4__carousel__item">
                        <div class="product-use-carousel_4__carousel__item__wrap">
                            <img src="/assets/images/product/product-page/product-use-2.png" alt="">
                            <div class="product-use-carousel__carousel__item__name">Паста Сицилиана</div>
                            <div class="product-use-carousel__carousel__item__block-link">
                                <a href="" title=""><span>Подробней</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-use-carousel__carousel__item product-use-carousel_4__carousel__item">
                        <div class="product-use-carousel_4__carousel__item__wrap">
                            <img src="/assets/images/product/product-page/product-use-1.png" alt="">
                            <div class="product-use-carousel__carousel__item__name">Паста Сицилиана</div>
                            <div class="product-use-carousel__carousel__item__block-link">
                                <a href="" title=""><span>Подробней</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-use-carousel__carousel__item product-use-carousel_4__carousel__item">
                        <div class="product-use-carousel_4__carousel__item__wrap">
                            <img src="/assets/images/product/product-page/product-use-2.png" alt="">
                            <div class="product-use-carousel__carousel__item__name">Паста Сицилиана</div>
                            <div class="product-use-carousel__carousel__item__block-link">
                                <a href="" title=""><span>Подробней</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-use-carousel__carousel__item product-use-carousel_4__carousel__item">
                        <div class="product-use-carousel_4__carousel__item__wrap">
                            <img src="/assets/images/product/product-page/product-use-1.png" alt="">
                            <div class="product-use-carousel__carousel__item__name">Паста Сицилиана</div>
                            <div class="product-use-carousel__carousel__item__block-link">
                                <a href="" title=""><span>Подробней</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-use-carousel__carousel__item product-use-carousel_4__carousel__item">
                        <div class="product-use-carousel_4__carousel__item__wrap">
                            <img src="/assets/images/product/product-page/product-use-2.png" alt="">
                            <div class="product-use-carousel__carousel__item__name">Паста Сицилиана</div>
                            <div class="product-use-carousel__carousel__item__block-link">
                                <a href="" title=""><span>Подробней</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="background-page__cheese-left_direction"></div>
        <div class="background-page__cheese-left-bottom_direction"></div>
        <div class="background-page__block-left-top_direction"></div>
        <div class="background-page__block-left-middle_direction"></div>
        <div class="background-page__block-left-bottom_direction"></div>
        <div class="background-page__cheese-right_direction"></div>
        <div class="background-page__block-right-top_direction"></div>
    </div>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>