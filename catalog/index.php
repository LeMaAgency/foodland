<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Каталог продукции");
?>

<? $APPLICATION->IncludeComponent('bitrix:news.list', 'catalog_top_slider', array(
    'DISPLAY_DATE' => 'Y',
    'DISPLAY_NAME' => 'Y',
    'DISPLAY_PICTURE' => 'Y',
    'DISPLAY_PREVIEW_TEXT' => 'Y',
    'AJAX_MODE' => 'N',
    'IBLOCK_TYPE' => 'content',
    'IBLOCK_ID' => '17',
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

    <div class="background-page-category">
        <div class="container">
            <div class="element">
                <h1 class="element__title__h1"><? $APPLICATION->ShowTitle(false); ?></h1>
            </div>
            <div class="search">
                <div class="search__form-mini">
                    <form action="" method="get">
                        <input class="search__form-mini__input" type="text" placeholder="" name="q" value="" size="40">
                        <button class="search__form-mini__button" role="button" type="submit" value="Искать"><i class="icon search__form_button"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-4 col-lg-6 col-md-8 col-sm-24">
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
                <div class="col-20 col-lg-18 col-md-16 col-sm-24">
                    <div class="product__category">
                        <a href="" title="" class="product__category__item">
                            <div class="product__category__item__images">
                                <img src="/assets/images/product/category/1.png" alt="">
                                <img src="/assets/images/product/category/1_hover.png" alt="" class="product__category__item__images_hover">
                            </div>
                        </a>
                        <a href="" title="" class="product__category__item">
                            <div class="product__category__item__images">
                                <img src="/assets/images/product/category/2.png" alt="">
                                <img src="/assets/images/product/category/2_hover.png" alt="" class="product__category__item__images_hover">
                            </div>
                        </a>
                        <a href="" title="" class="product__category__item">
                            <div class="product__category__item__images">
                                <img src="/assets/images/product/category/3.png" alt="">
                                <img src="/assets/images/product/category/3_hover.png" alt="" class="product__category__item__images_hover">
                            </div>
                        </a>
                        <a href="" title="" class="product__category__item">
                            <div class="product__category__item__images">
                                <img src="/assets/images/product/category/4.png" alt="">
                                <img src="/assets/images/product/category/4_hover.png" alt="" class="product__category__item__images_hover">
                            </div>
                        </a>
                        <a href="" title="" class="product__category__item">
                            <div class="product__category__item__images">
                                <img src="/assets/images/product/category/5.png" alt="">
                                <img src="/assets/images/product/category/5_hover.png" alt="" class="product__category__item__images_hover">
                            </div>
                        </a>
                        <a href="" title="" class="product__category__item">
                            <div class="product__category__item__images">
                                <img src="/assets/images/product/category/6.png" alt="">
                                <img src="/assets/images/product/category/6_hover.png" alt="" class="product__category__item__images_hover">
                            </div>
                        </a>
                        <a href="" title="" class="product__category__item">
                            <div class="product__category__item__images">
                                <img src="/assets/images/product/category/7.png" alt="">
                                <img src="/assets/images/product/category/7_hover.png" alt="" class="product__category__item__images_hover">
                            </div>
                        </a>
                        <a href="" title="" class="product__category__item">
                            <div class="product__category__item__images">
                                <img src="/assets/images/product/category/8.png" alt="">
                                <img src="/assets/images/product/category/8_hover.png" alt="" class="product__category__item__images_hover">
                            </div>
                        </a>
                        <a href="" title="" class="product__category__item">
                            <div class="product__category__item__images">
                                <img src="/assets/images/product/category/9.png" alt="">
                                <img src="/assets/images/product/category/9_hover.png" alt="" class="product__category__item__images_hover">
                            </div>
                        </a>
                        <a href="" title="" class="product__category__item">
                            <div class="product__category__item__images">
                                <img src="/assets/images/product/category/10.png" alt="">
                                <img src="/assets/images/product/category/10_hover.png" alt="" class="product__category__item__images_hover">
                            </div>
                        </a>
                        <a href="" title="" class="product__category__item">
                            <div class="product__category__item__images">
                                <img src="/assets/images/product/category/11.png" alt="">
                                <img src="/assets/images/product/category/11_hover.png" alt="" class="product__category__item__images_hover">
                            </div>
                        </a>
                        <a href="" title="" class="product__category__item">
                            <div class="product__category__item__images">
                                <img src="/assets/images/product/category/12.png" alt="">
                                <img src="/assets/images/product/category/12_hover.png" alt="" class="product__category__item__images_hover">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="structure-company structure-company_catalog">
            <div class="container">
                <div class="row">
                    <? $APPLICATION->IncludeComponent('bitrix:news.list', 'direction_about', array(
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
                        'FIELD_CODE' => array(
                            'ID',
                            'NAME',
                            'PREVIEW_TEXT',
                            'PREVIEW_PICTURE',
                            'DETAIL_PICTURE',
                        ),
                        'PROPERTY_CODE' => array(
                            'ORIENTATION',
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
                        'H2_CLASS' => 'h2_catalog',
                    )); ?>
                    <div class="row">
                        <div class="structure-company_direct__more">
                            <div class="col-12 col-sm-24 css-right">
                                <div class="row">
                                    <div class="col-15 col-lg-none">
                                        <div class="structure-company_direct__more__description">
                                            <p>
                                                <? $APPLICATION->IncludeFile(SITE_DIR . 'include/about/direction_text.php'); ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-9 col-lg-24 col-lg-css-text-center">
                                        <? $APPLICATION->IncludeFile(SITE_DIR . 'include/about/direction_link.php'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="popular popular_pb">
            <div class="container">
                <div class="h2 h2_catalog-popular">Самые популярные<br>продукты</div>
                <? $APPLICATION->IncludeComponent('bitrix:news.list', 'popular_about', array(
                    'DISPLAY_DATE' => 'Y',
                    'DISPLAY_NAME' => 'Y',
                    'DISPLAY_PICTURE' => 'Y',
                    'DISPLAY_PREVIEW_TEXT' => 'Y',
                    'AJAX_MODE' => 'N',
                    'IBLOCK_TYPE' => 'content',
                    'IBLOCK_ID' => '3',
                    'NEWS_COUNT' => '3',
                    'SORT_BY1' => 'ID',
                    'SORT_ORDER1' => 'ASC',
                    'SORT_BY2' => 'SORT',
                    'SORT_ORDER2' => 'ASC',
                    'FILTER_NAME' => 'popularItemsFilter',
                    'FIELD_CODE' => array(),
                    'PROPERTY_CODE' => array(
                        'BRAND',
                        'FATNESS',
                        'ARTICLE',
                        'IS_POPULAR',
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
            </div>
        </div>
        <div class="recommendation">
            <div class="recommendation-carousel">
                <div class="recommendation__carousel__block">
                    <div class="recommendation__list row">
                        <? $APPLICATION->IncludeComponent('bitrix:news.list', 'recommend_main', array(
                            'DISPLAY_DATE' => 'Y',
                            'DISPLAY_NAME' => 'Y',
                            'DISPLAY_PICTURE' => 'Y',
                            'DISPLAY_PREVIEW_TEXT' => 'Y',
                            'AJAX_MODE' => 'N',
                            'IBLOCK_TYPE' => 'content',
                            'IBLOCK_ID' => '8',
                            'NEWS_COUNT' => '20',
                            'SORT_BY1' => 'ID',
                            'SORT_ORDER1' => 'ASC',
                            'SORT_BY2' => 'SORT',
                            'SORT_ORDER2' => 'ASC',
                            'FILTER_NAME' => '',
                            'FIELD_CODE' => array(
                                'ID',
                                'NAME',
                                'PREVIEW_PICTURE',
                                'DETAIL_PICTURE',
                            ),
                            'PROPERTY_CODE' => array(
                                'URL',
                                'URL_2',
                                'SHOW_LIKE',
                                'LINE_ORIENTATION',
                                'TWO_COLUMNS',
                                'TEXT_IN_TOP_BLOCK',
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
                            'PARENT_SECTION_CODE' => 'first_block',
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
                            'SHOW_WRAPPER' => 'N',
                        )); ?>
                        <div class="col-16 col-xl-18 col-lg-16 col-sm-24">
                            <div class="row">
                                <div class="recommendation__block recommendation__block_col-4">
                                    <div class="recommendation__block__title">
                                        <? $APPLICATION->IncludeFile(SITE_DIR . 'include/index/recommend_title_top.php'); ?>
                                    </div>
                                    <div class="recommendation__block__description">
                                        <div class="icon">
                                            <i class="icon__star"></i>
                                        </div>
                                        <span><? $APPLICATION->IncludeFile(SITE_DIR . 'include/index/recommend_title_two.php'); ?></span>
                                    </div>
                                    <div class="recommendation__block__text">
                                        <? $APPLICATION->IncludeFile(SITE_DIR . 'include/index/recommend_text.php'); ?>
                                    </div>
                                    <div class="recommendation__block__button">
                                        <? $APPLICATION->IncludeFile(SITE_DIR . 'include/index/recommend_link.php'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <? $APPLICATION->IncludeComponent('bitrix:news.list', 'recommend_main', array(
                    'DISPLAY_DATE' => 'Y',
                    'DISPLAY_NAME' => 'Y',
                    'DISPLAY_PICTURE' => 'Y',
                    'DISPLAY_PREVIEW_TEXT' => 'Y',
                    'AJAX_MODE' => 'N',
                    'IBLOCK_TYPE' => 'content',
                    'IBLOCK_ID' => '8',
                    'NEWS_COUNT' => '20',
                    'SORT_BY1' => 'ID',
                    'SORT_ORDER1' => 'ASC',
                    'SORT_BY2' => 'SORT',
                    'SORT_ORDER2' => 'ASC',
                    'FILTER_NAME' => '',
                    'FIELD_CODE' => array(
                        'ID',
                        'NAME',
                        'PREVIEW_PICTURE',
                        'DETAIL_PICTURE',
                    ),
                    'PROPERTY_CODE' => array(
                        'URL',
                        'URL_2',
                        'SHOW_LIKE',
                        'LINE_ORIENTATION',
                        'TWO_COLUMNS',
                        'TEXT_IN_TOP_BLOCK',
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
                    'PARENT_SECTION_CODE' => 'second_block',
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
                <? $APPLICATION->IncludeComponent('bitrix:news.list', 'recommend_main', array(
                    'DISPLAY_DATE' => 'Y',
                    'DISPLAY_NAME' => 'Y',
                    'DISPLAY_PICTURE' => 'Y',
                    'DISPLAY_PREVIEW_TEXT' => 'Y',
                    'AJAX_MODE' => 'N',
                    'IBLOCK_TYPE' => 'content',
                    'IBLOCK_ID' => '8',
                    'NEWS_COUNT' => '20',
                    'SORT_BY1' => 'ID',
                    'SORT_ORDER1' => 'ASC',
                    'SORT_BY2' => 'SORT',
                    'SORT_ORDER2' => 'ASC',
                    'FILTER_NAME' => '',
                    'FIELD_CODE' => array(
                        'ID',
                        'NAME',
                        'PREVIEW_PICTURE',
                        'DETAIL_PICTURE',
                    ),
                    'PROPERTY_CODE' => array(
                        'URL',
                        'URL_2',
                        'SHOW_LIKE',
                        'LINE_ORIENTATION',
                        'TWO_COLUMNS',
                        'TEXT_IN_TOP_BLOCK',
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
                    'PARENT_SECTION_CODE' => 'third_block',
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
                <? $APPLICATION->IncludeComponent('bitrix:news.list', 'recommend_main', array(
                    'DISPLAY_DATE' => 'Y',
                    'DISPLAY_NAME' => 'Y',
                    'DISPLAY_PICTURE' => 'Y',
                    'DISPLAY_PREVIEW_TEXT' => 'Y',
                    'AJAX_MODE' => 'N',
                    'IBLOCK_TYPE' => 'content',
                    'IBLOCK_ID' => '8',
                    'NEWS_COUNT' => '20',
                    'SORT_BY1' => 'ID',
                    'SORT_ORDER1' => 'ASC',
                    'SORT_BY2' => 'SORT',
                    'SORT_ORDER2' => 'ASC',
                    'FILTER_NAME' => '',
                    'FIELD_CODE' => array(
                        'ID',
                        'NAME',
                        'PREVIEW_PICTURE',
                        'DETAIL_PICTURE',
                    ),
                    'PROPERTY_CODE' => array(
                        'URL',
                        'URL_2',
                        'SHOW_LIKE',
                        'LINE_ORIENTATION',
                        'TWO_COLUMNS',
                        'TEXT_IN_TOP_BLOCK',
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
                    'PARENT_SECTION_CODE' => 'forth_block',
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
            </div>
        </div>
        <div class="tm-carousel-horizontal tm-carousel-horizontal_catalog">
            <? $APPLICATION->IncludeComponent('bitrix:news.list', 'our_tm_about', array(
                'DISPLAY_DATE' => 'Y',
                'DISPLAY_NAME' => 'Y',
                'DISPLAY_PICTURE' => 'Y',
                'DISPLAY_PREVIEW_TEXT' => 'Y',
                'AJAX_MODE' => 'N',
                'IBLOCK_TYPE' => 'content',
                'IBLOCK_ID' => '11',
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
        </div>

        <div class="cow cow_catalog"></div>
        <div class="block-left-top_catalog"></div>
        <div class="block-right_catalog"></div>
        <div class="block-right-middle_catalog"></div>
        <div class="block-left-middle_catalog"></div>
        <div class="block-left-bottom_catalog"></div>
        <div class="cheese-left cheese-left_catalog"></div>
        <div class="cheese-right cheese-right_catalog"></div>
    </div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>