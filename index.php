<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('FoodLand - главная страница');
?>
<? $APPLICATION->IncludeComponent('bitrix:news.list', 'top_slider', array(
    'DISPLAY_DATE' => 'Y',
    'DISPLAY_NAME' => 'Y',
    'DISPLAY_PICTURE' => 'Y',
    'DISPLAY_PREVIEW_TEXT' => 'Y',
    'AJAX_MODE' => 'N',
    'IBLOCK_TYPE' => 'content',
    'IBLOCK_ID' => '1',
    'NEWS_COUNT' => '20',
    'SORT_BY1' => 'ACTIVE_FROM',
    'SORT_ORDER1' => 'DESC',
    'SORT_BY2' => 'SORT',
    'SORT_ORDER2' => 'ASC',
    'FILTER_NAME' => '',
    'FIELD_CODE' => array(),
    'PROPERTY_CODE' => array(
        'LOGO_IMG',
        'LOGO_TITLE_IMG',
    ),
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
<? $APPLICATION->IncludeComponent('bitrix:news.list', 'cheese_elements', array(
    'DISPLAY_DATE' => 'Y',
    'DISPLAY_NAME' => 'Y',
    'DISPLAY_PICTURE' => 'Y',
    'DISPLAY_PREVIEW_TEXT' => 'Y',
    'AJAX_MODE' => 'N',
    'IBLOCK_TYPE' => 'content',
    'IBLOCK_ID' => '4',
    'NEWS_COUNT' => '3',
    'SORT_BY1' => 'ID',
    'SORT_ORDER1' => 'ASC',
    'SORT_BY2' => 'SORT',
    'SORT_ORDER2' => 'ASC',
    'FILTER_NAME' => '',
    'FIELD_CODE' => array(),
    'PROPERTY_CODE' => array(
        'CATALOG_SECTIONS',
    ),
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


    <div class="popular ">
        <div class="back-img back-img__maslo"></div>
        <div class="container">
            <div class="title-big">Самые популярные<br>продукты</div>
            <div class="popular__carousel">
                <a href="" title="">
                    <div class="popular__item">
                        <div class="popular__item__image">
                            <img src="/assets/images/popular/lamber.png" alt="">
                        </div>
                        <div class="popular__item__name"><b>Сыр<br>«Ламбер»</b></div>
                        <div class="popular__item__text">
                            <span>Bonfesto</span><br>
                            <span>жирность: <b>30%</b></span><br>
                            <span>артикул: <b>123456</b></span>
                        </div>
                        <div class="popular__item__description">
                            <p>Мягкие и полутвердые сыры, выпускаемые по итальянским технологиям.</p>
                        </div>
                    </div>
                </a>
                <a href="" title="">
                    <div class="popular__item">
                        <div class="popular__item__image">
                            <img src="/assets/images/popular/lamber.png" alt="">
                        </div>
                        <div class="popular__item__name"><b>Сыр<br>«Ламбер»</b></div>
                        <div class="popular__item__text">
                            <span>Bonfesto</span><br>
                            <span>жирность: <b>30%</b></span><br>
                            <span>артикул: <b>123456</b></span>
                        </div>
                        <div class="popular__item__description">
                            <p>Мягкие и полутвердые сыры, выпускаемые по итальянским технологиям.</p>
                        </div>
                    </div>
                </a>
                <a href="" title="">
                    <div class="popular__item">
                        <div class="popular__item__image">
                            <img src="/assets/images/popular/lamber.png" alt="">
                        </div>
                        <div class="popular__item__name"><b>Сыр<br>«Ламбер»</b></div>
                        <div class="popular__item__text">
                            <span>Bonfesto</span><br>
                            <span>жирность: <b>30%</b></span><br>
                            <span>артикул: <b>123456</b></span>
                        </div>
                        <div class="popular__item__description">
                            <p>Мягкие и полутвердые сыры, выпускаемые по итальянским технологиям.</p>
                        </div>
                    </div>
                </a>
                <a href="" title="">
                    <div class="popular__item">
                        <div class="popular__item__image">
                            <img src="/assets/images/popular/lamber.png" alt="">
                        </div>
                        <div class="popular__item__name"><b>Сыр<br>«Ламбер»</b></div>
                        <div class="popular__item__text">
                            <span>Bonfesto</span><br>
                            <span>жирность: <b>30%</b></span><br>
                            <span>артикул: <b>123456</b></span>
                        </div>
                        <div class="popular__item__description">
                            <p>Мягкие и полутвердые сыры, выпускаемые по итальянским технологиям.</p>
                        </div>
                    </div>
                </a>
                <a href="" title="">
                    <div class="popular__item">
                        <div class="popular__item__image">
                            <img src="/assets/images/popular/lamber.png" alt="">
                        </div>
                        <div class="popular__item__name"><b>Сыр<br>«Ламбер»</b></div>
                        <div class="popular__item__text">
                            <span>Bonfesto</span><br>
                            <span>жирность: <b>30%</b></span><br>
                            <span>артикул: <b>123456</b></span>
                        </div>
                        <div class="popular__item__description">
                            <p>Мягкие и полутвердые сыры, выпускаемые по итальянским технологиям.</p>
                        </div>
                    </div>
                </a>
                <a href="" title="">
                    <div class="popular__item">
                        <div class="popular__item__image">
                            <img src="/assets/images/popular/lamber.png" alt="">
                        </div>
                        <div class="popular__item__name"><b>Сыр<br>«Ламбер»</b></div>
                        <div class="popular__item__text">
                            <span>Bonfesto</span><br>
                            <span>жирность: <b>30%</b></span><br>
                            <span>артикул: <b>123456</b></span>
                        </div>
                        <div class="popular__item__description">
                            <p>Мягкие и полутвердые сыры, выпускаемые по итальянским технологиям.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="recommendation">
        <div class="recommendation-carousel">
            <div class="recommendation__carousel__block">
                <div class="recommendation__list row">
                    <div class="col-8 col-xl-6 col-lg-8 col-sm-24">
                        <div class="row">
                            <div class="recommendation__block" style="background-image: url('/assets/images/recommendation/heidi.jpg')"></div>
                        </div>
                        <div class="row">
                            <div class="recommendation__block" style="background-image: url('/assets/images/recommendation/test.jpg')">
                                <div class="icon">
                                    <span class="icon__like"></span>
                                </div>
                                <div class="recommendation__block__title-mini recommendation__block__line recommendation__block__line_down">Тертые
                                    сыры<br> для HoReCa<br> длинный<br> заголовок
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-16 col-xl-18 col-lg-16 col-sm-24">
                        <div class="row">
                            <div class="recommendation__block recommendation__block_col-4">
                                <div class="recommendation__block__title">Мы рекомендуем</div>
                                <div class="recommendation__block__description">
                                    <div class="icon">
                                        <i class="icon__star"></i>
                                    </div>
                                    <span>Подборка месяца</span>
                                </div>
                                <div class="recommendation__block__text">Элитные импортные сыры высокого качества таких торговых марок, как La
                                    Paulina, продукция Великобурлукского, Каневского, Коропского, Херсонского и других сырзаводов
                                </div>
                                <div class="recommendation__block__button">
                                    <a href="" title="" class="button-white">
                                        <span>Все эксклюзивы</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="recommendation__carousel__block">
                <div class="recommendation__list row">
                    <div class="col-8 col-xl-8 col-lg-8 col-md-12 col-sm-24">
                        <div class="row">
                            <div class="recommendation__block" style="background-image: url('/assets/images/recommendation/ras.jpg')">
                                <div class="icon">
                                    <span class="icon__like"></span>
                                </div>
                                <div class="recommendation__block__title-mini recommendation__block__line recommendation__block__line_right">
                                    <p>Рассольные сыры собственного приготовления линейка опускается с нижней стороны</p></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="recommendation__block" style="background-image: url('/assets/images/recommendation/mlekara.jpg')"></div>
                        </div>
                    </div>
                    <div class="col-8 col-xl-8 col-lg-8 col-md-12 col-sm-24">
                        <div class="row">
                            <div class="recommendation__block recommendation__block_col-2"
                                 style="background-image: url('/assets/images/recommendation/cheese-par.jpg')">
                                <div class="like">
                                    <a href="" title=""></a>
                                </div>
                                <div class="recommendation__block__title-mini recommendation__block__line recommendation__block__line_bottom">
                                    <p>
                                        Сыры «Гойя»
                                        Аргентина
                                        очень длинный заголовок
                                        текст поднимается выше
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-8 col-xl-8 col-lg-8 col-md-24 col-sm-24">
                        <div class="row">
                            <div class="recommendation__block" style="background-image: url('/assets/images/recommendation/bondesto.jpg')"></div>
                        </div>
                        <div class="row">
                            <div class="recommendation__block" style="background-image: url('/assets/images/recommendation/cheese.jpg')">
                                <div class="like">
                                    <a href="" title=""></a>
                                </div>
                                <div class="recommendation__block__title-mini recommendation__block__line recommendation__block__line_right-top">
                                    Сыры «Гауда»
                                    Аргентина
                                    желта
                                    линейка
                                    остается на
                                    месте
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="recommendation__carousel__block">
                <div class="recommendation__list row">
                    <div class="col-8 col-xl-8 col-lg-8 col-md-12 col-sm-24">
                        <div class="row">
                            <div class="recommendation__block" style="background-image: url('/assets/images/recommendation/ras.jpg')">
                                <div class="icon">
                                    <span class="icon__like"></span>
                                </div>
                                <div class="recommendation__block__title-mini recommendation__block__line recommendation__block__line_right">
                                    <p>Рассольные сыры собственного приготовления линейка опускается с нижней стороны</p></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="recommendation__block" style="background-image: url('/assets/images/recommendation/mlekara.jpg')"></div>
                        </div>
                    </div>
                    <div class="col-8 col-xl-8 col-lg-8 col-md-12 col-sm-24">
                        <div class="row">
                            <div class="recommendation__block recommendation__block_col-2"
                                 style="background-image: url('/assets/images/recommendation/cheese-par.jpg')">
                                <div class="like">
                                    <a href="" title=""></a>
                                </div>
                                <div class="recommendation__block__title-mini recommendation__block__line recommendation__block__line_bottom">
                                    <p>
                                        Сыры «Гойя»
                                        Аргентина
                                        очень длинный заголовок
                                        текст поднимается выше
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-8 col-xl-8 col-lg-8 col-md-24 col-sm-24">
                        <div class="row">
                            <div class="recommendation__block" style="background-image: url('/assets/images/recommendation/bondesto.jpg')"></div>
                        </div>
                        <div class="row">
                            <div class="recommendation__block" style="background-image: url('/assets/images/recommendation/cheese.jpg')">
                                <div class="like">
                                    <a href="" title=""></a>
                                </div>
                                <div class="recommendation__block__title-mini recommendation__block__line recommendation__block__line_right-top">
                                    Сыры «Гауда»
                                    Аргентина
                                    желта
                                    линейка
                                    остается на
                                    месте
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="recommendation__carousel__block">
                <div class="recommendation__list row">
                    <div class="col-8 col-xl-8 col-lg-8 col-md-12 col-sm-24">
                        <div class="row">
                            <div class="recommendation__block" style="background-image: url('/assets/images/recommendation/ras.jpg')">
                                <div class="icon">
                                    <span class="icon__like"></span>
                                </div>
                                <div class="recommendation__block__title-mini recommendation__block__line recommendation__block__line_right">
                                    <p>Рассольные сыры собственного приготовления линейка опускается с нижней стороны</p></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="recommendation__block" style="background-image: url('/assets/images/recommendation/mlekara.jpg')"></div>
                        </div>
                    </div>
                    <div class="col-8 col-xl-8 col-lg-8 col-md-12 col-sm-24">
                        <div class="row">
                            <div class="recommendation__block recommendation__block_col-2"
                                 style="background-image: url('/assets/images/recommendation/cheese-par.jpg')">
                                <div class="like">
                                    <a href="" title=""></a>
                                </div>
                                <div class="recommendation__block__title-mini recommendation__block__line recommendation__block__line_bottom">
                                    <p>
                                        Сыры «Гойя»
                                        Аргентина
                                        очень длинный заголовок
                                        текст поднимается выше
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-8 col-xl-8 col-lg-8 col-md-24 col-sm-24">
                        <div class="row">
                            <div class="recommendation__block" style="background-image: url('/assets/images/recommendation/bondesto.jpg')"></div>
                        </div>
                        <div class="row">
                            <div class="recommendation__block" style="background-image: url('/assets/images/recommendation/cheese.jpg')">
                                <div class="like">
                                    <a href="" title=""></a>
                                </div>
                                <div class="recommendation__block__title-mini recommendation__block__line recommendation__block__line_right-top">
                                    Сыры «Гауда»
                                    Аргентина
                                    желта
                                    линейка
                                    остается на
                                    месте
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<? $APPLICATION->IncludeComponent('bitrix:news.list', 'spinner_elements', array(
    'DISPLAY_DATE' => 'Y',
    'DISPLAY_NAME' => 'Y',
    'DISPLAY_PICTURE' => 'Y',
    'DISPLAY_PREVIEW_TEXT' => 'Y',
    'AJAX_MODE' => 'N',
    'IBLOCK_TYPE' => 'content',
    'IBLOCK_ID' => '5',
    'NEWS_COUNT' => '3',
    'SORT_BY1' => 'ID',
    'SORT_ORDER1' => 'ASC',
    'SORT_BY2' => 'SORT',
    'SORT_ORDER2' => 'ASC',
    'FILTER_NAME' => '',
    'FIELD_CODE' => array(),
    'PROPERTY_CODE' => array(
        'URL',
    ),
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

    <div class="day-product col-lg-css-margin-none">
        <div class="container">
            <div class="title-big">Продукт дня</div>
            <div class="row">
                <div class="col-12 col-lg-24">
                    <div class="day-product__images-block">
                        <div class="day-product__images-block_images">
                            <img src="/assets/images/blud.png" alt="">
                        </div>
                        <div class="day-product__images-block_text">
                            <div class="day-product__images-block_name">Феттуччине <br>Альфредо</div>
                            <div class="day-product__images-block_description">
                                <span>Паста феттуччине, сыр «Ламбер», куриная грудка и сливочное масло</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-24">
                    <div class="day-product__product row col-md-css-text-center">
                        <div class="col-10 col-md-24">
                            <div class="day-product__product_name">Сыр «Ламбер»</div>
                            <div class="day-product__product_text">«Ламбер» (Lamber) — это традиционный сычужный сыр, который обладает изысканным
                                пикантным вкусом и производится из уникального по своим качествам молока из Алтайского края.
                            </div>
                            <div class="day-product__product_button"><a href="" title="" class="button-cheese">
                                    <span>Подробней о продукте</span></a></div>
                        </div>
                        <div class="col-14 col-md-24 col-md-css-padding">
                            <div class="day-product__product_images col-md-css-padding-none">
                                <img src="/assets/images/lamber.png" alt="Ламбер">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="random container-fluid">
        <div class="back-img back-img__cheese-and-tomato"></div>
        <div class="row">
            <div class="col-1 col-xl-none">
                <div class="random__point"></div>
            </div>
            <? $APPLICATION->IncludeComponent('bitrix:news.list', 'bottom_slider_events', array(
                'DISPLAY_DATE' => 'Y',
                'DISPLAY_NAME' => 'Y',
                'DISPLAY_PICTURE' => 'Y',
                'DISPLAY_PREVIEW_TEXT' => 'Y',
                'AJAX_MODE' => 'N',
                'IBLOCK_TYPE' => 'content',
                'IBLOCK_ID' => '6',
                'NEWS_COUNT' => '20',
                'SORT_BY1' => 'ID',
                'SORT_ORDER1' => 'ASC',
                'SORT_BY2' => 'SORT',
                'SORT_ORDER2' => 'ASC',
                'FILTER_NAME' => '',
                'FIELD_CODE' => array(),
                'PROPERTY_CODE' => array(
                    'LOGO_IMG',
                    'URL',
                ),
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
                'PARENT_SECTION_CODE' => 'left_block',
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
            <? $APPLICATION->IncludeComponent('bitrix:news.list', 'bottom_slider_events', array(
                'DISPLAY_DATE' => 'Y',
                'DISPLAY_NAME' => 'Y',
                'DISPLAY_PICTURE' => 'Y',
                'DISPLAY_PREVIEW_TEXT' => 'Y',
                'AJAX_MODE' => 'N',
                'IBLOCK_TYPE' => 'content',
                'IBLOCK_ID' => '6',
                'NEWS_COUNT' => '20',
                'SORT_BY1' => 'ID',
                'SORT_ORDER1' => 'ASC',
                'SORT_BY2' => 'SORT',
                'SORT_ORDER2' => 'ASC',
                'FILTER_NAME' => '',
                'FIELD_CODE' => array(),
                'PROPERTY_CODE' => array(
                    'LOGO_IMG',
                    'URL',
                ),
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
                'PARENT_SECTION_CODE' => 'right_block',
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
            <div class="col-1 col-xl-none">
                <div class="random__point"></div>
            </div>
        </div>
    </div>
<? $APPLICATION->IncludeComponent('bitrix:news.list', 'our_clients', array(
    'DISPLAY_DATE' => 'Y',
    'DISPLAY_NAME' => 'Y',
    'DISPLAY_PICTURE' => 'Y',
    'DISPLAY_PREVIEW_TEXT' => 'Y',
    'AJAX_MODE' => 'N',
    'IBLOCK_TYPE' => 'content',
    'IBLOCK_ID' => '2',
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
<? require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php'); ?>