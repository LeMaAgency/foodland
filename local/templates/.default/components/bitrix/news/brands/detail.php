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

$APPLICATION->AddViewContent('header_class', 'product-page-header');
?>
<div class="slider container-fluid">
    <? $APPLICATION->IncludeComponent('bitrix:news.list', 'brands_detail_top_slider', array(
        'DISPLAY_DATE' => 'Y',
        'DISPLAY_NAME' => 'Y',
        'DISPLAY_PICTURE' => 'Y',
        'DISPLAY_PREVIEW_TEXT' => 'Y',
        'AJAX_MODE' => 'N',
        'IBLOCK_TYPE' => 'content',
        'IBLOCK_ID' => '15',
        'NEWS_COUNT' => '1',
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
    <div class="slider__img-brand">
        <?$APPLICATION->ShowViewContent('brand_logo_detail');?>
    </div>
</div>
<div class="wrap-search wrap-search_one-brand">
    <div class="container">
        <div class="row">
            <div class="col-19 col-md-24 css-right">
                <div class="bread-crumbs bread-crumbs_return">
                    <? $APPLICATION->IncludeComponent('bitrix:breadcrumb', 'breadcrumbs', array(
                        'START_FROM' => '0',
                        'PATH' => '',
                        'SITE_ID' => SITE_ID,
                    )); ?>
                </div>
                <? if($arParams["USE_SEARCH"] == "Y"): ?>
                    <div class="container">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:search.form",
                            "flat",
                            Array(
                                "PAGE" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["search"],
                                'ADDITIONAL_CLASS' => 'css-right',
                            ),
                            $component,
                            array('HIDE_ICONS' => 'Y')
                        ); ?>
                    </div>
                <? endif ?>
            </div>

        </div>
    </div>
</div>
<div class="background-page-product">
    <div class="container">
        <div class="row">
            <div class="container-aside"></div>
            <div class="container-main">
                <h1 class="h1-product-page"><? $APPLICATION->ShowTitle(); ?></h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="container-aside">
                <? if($arParams["USE_FILTER"] == "Y"): ?>
                    <? $APPLICATION->IncludeComponent(
                        "lema:catalog.filter",
                        "",
                        Array(
                            "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
                            "IBLOCK_ID" => $arParams["IBLOCK_ID"],
                            "FILTER_NAME" => $arParams["FILTER_NAME"],
                            "FIELD_CODE" => $arParams["FILTER_FIELD_CODE"],
                            "PROPERTY_CODE" => $arParams["FILTER_PROPERTY_CODE"],
                            "CACHE_TYPE" => $arParams["CACHE_TYPE"],
                            "CACHE_TIME" => $arParams["CACHE_TIME"],
                            "CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
                            "PAGER_PARAMS_NAME" => $arParams["PAGER_PARAMS_NAME"],
                            'FORM_ACTION' => $arParams['SEF_FOLDER'],
                        ),
                        $component
                    );
                    ?>
                <? endif; ?>
                <?
                global $analogFilter;
                $analogFilter = array(
                    '!=CODE' => $arResult['VARIABLES']['ELEMENT_CODE'],
                    '!=ID' => $arResult['VARIABLES']['ELEMENT_ID'],
                );
                ?>
                <? $APPLICATION->IncludeComponent('bitrix:news.list', 'analog_carousel', array(
                    'DISPLAY_DATE' => 'Y',
                    'DISPLAY_NAME' => 'Y',
                    'DISPLAY_PICTURE' => 'Y',
                    'DISPLAY_PREVIEW_TEXT' => 'Y',
                    'AJAX_MODE' => 'N',
                    'IBLOCK_TYPE' => $arParams['IBLOCK_TYPE'],
                    'IBLOCK_ID' => $arParams['IBLOCK_ID'],
                    'NEWS_COUNT' => '20',
                    'SORT_BY1' => 'ACTIVE_FROM',
                    'SORT_ORDER1' => 'DESC',
                    'SORT_BY2' => 'SORT',
                    'SORT_ORDER2' => 'ASC',
                    'FILTER_NAME' => 'analogFilter',
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
                    'PARENT_SECTION' => $arResult['VARIABLES']['SECTION_ID'],
                    'PARENT_SECTION_CODE' => $arResult['VARIABLES']['SECTION_CODE'],
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
            <div class="container-main">
                <? $ElementID = $APPLICATION->IncludeComponent(
                    "bitrix:news.detail",
                    "",
                    Array(
                        "DISPLAY_DATE" => $arParams["DISPLAY_DATE"],
                        "DISPLAY_NAME" => $arParams["DISPLAY_NAME"],
                        "DISPLAY_PICTURE" => $arParams["DISPLAY_PICTURE"],
                        "DISPLAY_PREVIEW_TEXT" => $arParams["DISPLAY_PREVIEW_TEXT"],
                        "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
                        "IBLOCK_ID" => $arParams["IBLOCK_ID"],
                        "FIELD_CODE" => $arParams["DETAIL_FIELD_CODE"],
                        "PROPERTY_CODE" => $arParams["DETAIL_PROPERTY_CODE"],
                        "DETAIL_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["detail"],
                        "SECTION_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["section"],
                        "META_KEYWORDS" => $arParams["META_KEYWORDS"],
                        "META_DESCRIPTION" => $arParams["META_DESCRIPTION"],
                        "BROWSER_TITLE" => $arParams["BROWSER_TITLE"],
                        "SET_CANONICAL_URL" => $arParams["DETAIL_SET_CANONICAL_URL"],
                        "DISPLAY_PANEL" => $arParams["DISPLAY_PANEL"],
                        "SET_LAST_MODIFIED" => $arParams["SET_LAST_MODIFIED"],
                        "SET_TITLE" => $arParams["SET_TITLE"],
                        "MESSAGE_404" => $arParams["MESSAGE_404"],
                        "SET_STATUS_404" => $arParams["SET_STATUS_404"],
                        "SHOW_404" => $arParams["SHOW_404"],
                        "FILE_404" => $arParams["FILE_404"],
                        "INCLUDE_IBLOCK_INTO_CHAIN" => $arParams["INCLUDE_IBLOCK_INTO_CHAIN"],
                        "ADD_SECTIONS_CHAIN" => $arParams["ADD_SECTIONS_CHAIN"],
                        "ACTIVE_DATE_FORMAT" => $arParams["DETAIL_ACTIVE_DATE_FORMAT"],
                        "CACHE_TYPE" => $arParams["CACHE_TYPE"],
                        "CACHE_TIME" => $arParams["CACHE_TIME"],
                        "CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
                        "USE_PERMISSIONS" => $arParams["USE_PERMISSIONS"],
                        "GROUP_PERMISSIONS" => $arParams["GROUP_PERMISSIONS"],
                        "DISPLAY_TOP_PAGER" => $arParams["DETAIL_DISPLAY_TOP_PAGER"],
                        "DISPLAY_BOTTOM_PAGER" => $arParams["DETAIL_DISPLAY_BOTTOM_PAGER"],
                        "PAGER_TITLE" => $arParams["DETAIL_PAGER_TITLE"],
                        "PAGER_SHOW_ALWAYS" => "N",
                        "PAGER_TEMPLATE" => $arParams["DETAIL_PAGER_TEMPLATE"],
                        "PAGER_SHOW_ALL" => $arParams["DETAIL_PAGER_SHOW_ALL"],
                        "CHECK_DATES" => $arParams["CHECK_DATES"],
                        "ELEMENT_ID" => $arResult["VARIABLES"]["ELEMENT_ID"],
                        "ELEMENT_CODE" => $arResult["VARIABLES"]["ELEMENT_CODE"],
                        "SECTION_ID" => $arResult["VARIABLES"]["SECTION_ID"],
                        "SECTION_CODE" => $arResult["VARIABLES"]["SECTION_CODE"],
                        "IBLOCK_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["news"],
                        "USE_SHARE" => $arParams["USE_SHARE"],
                        "SHARE_HIDE" => $arParams["SHARE_HIDE"],
                        "SHARE_TEMPLATE" => $arParams["SHARE_TEMPLATE"],
                        "SHARE_HANDLERS" => $arParams["SHARE_HANDLERS"],
                        "SHARE_SHORTEN_URL_LOGIN" => $arParams["SHARE_SHORTEN_URL_LOGIN"],
                        "SHARE_SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],
                        "ADD_ELEMENT_CHAIN" => (isset($arParams["ADD_ELEMENT_CHAIN"]) ? $arParams["ADD_ELEMENT_CHAIN"] : ''),
                        'STRICT_SECTION_CHECK' => (isset($arParams['STRICT_SECTION_CHECK']) ? $arParams['STRICT_SECTION_CHECK'] : ''),
                    ),
                    $component
                ); ?>
                <?
                global $brandProductFilter;
                $brandProductFilter = array('PROPERTY_BRAND' => $ElementID);
                ?>
                <? $APPLICATION->IncludeComponent("bitrix:news.list", "brand_product_list", array(
                    'IBLOCK_TYPE' => 'catalog',
                    'IBLOCK_ID' => '3',
                    'NEWS_COUNT' => '20',
                    'SORT_BY1' => 'ACTIVE_FROM',
                    'SORT_ORDER1' => 'DESC',
                    'SORT_BY2' => 'SORT',
                    'SORT_ORDER2' => 'ASC',
                    'FIELD_CODE' =>
                        array(
                            0 => 'DATE_CREATE',
                            1 => '',
                        ),
                    'PROPERTY_CODE' =>
                        array(
                            0 => 'BRAND',
                            1 => 'ARTICLE',
                            2 => 'FATNESS',
                        ),
                    'DISPLAY_PANEL' => null,
                    'SET_TITLE' => 'Y',
                    'SET_LAST_MODIFIED' => 'N',
                    'MESSAGE_404' => '',
                    'SET_STATUS_404' => 'Y',
                    'SHOW_404' => 'Y',
                    'FILE_404' => '',
                    'INCLUDE_IBLOCK_INTO_CHAIN' => 'N',
                    'ADD_SECTIONS_CHAIN' => 'Y',
                    'CACHE_TYPE' => 'A',
                    'CACHE_TIME' => '36000000',
                    'CACHE_FILTER' => 'N',
                    'CACHE_GROUPS' => 'N',
                    'DISPLAY_TOP_PAGER' => 'N',
                    'DISPLAY_BOTTOM_PAGER' => 'Y',
                    'PAGER_TITLE' => 'Товары',
                    'PAGER_TEMPLATE' => 'catalog',
                    'PAGER_SHOW_ALWAYS' => 'N',
                    'PAGER_DESC_NUMBERING' => 'N',
                    'PAGER_DESC_NUMBERING_CACHE_TIME' => '36000',
                    'PAGER_SHOW_ALL' => 'Y',
                    'PAGER_BASE_LINK_ENABLE' => 'N',
                    'PAGER_BASE_LINK' => null,
                    'PAGER_PARAMS_NAME' => null,
                    'DISPLAY_DATE' => 'Y',
                    'DISPLAY_NAME' => 'Y',
                    'DISPLAY_PICTURE' => 'Y',
                    'DISPLAY_PREVIEW_TEXT' => 'Y',
                    'PREVIEW_TRUNCATE_LEN' => '',
                    'ACTIVE_DATE_FORMAT' => 'd.m.Y',
                    'USE_PERMISSIONS' => 'N',
                    'GROUP_PERMISSIONS' => null,
                    'FILTER_NAME' => 'brandProductFilter',
                    'HIDE_LINK_WHEN_NO_DETAIL' => 'Y',
                    'CHECK_DATES' => 'Y',
                    'STRICT_SECTION_CHECK' => 'N',
                    'PARENT_SECTION' => null,
                    'PARENT_SECTION_CODE' => '',
                    'DETAIL_URL' => '/catalog/#SECTION_CODE#/#ELEMENT_CODE#/',
                    'SECTION_URL' => '/catalog/#SECTION_CODE#/',
                    'IBLOCK_URL' => '/catalog/',
                )); ?>
            </div>

            <div class="col-24">
                <div class="product-use-carousel">
                    <div class="container">
                        <div class="row">
                            <div class="col-8 col-xl-12 col-lg-24">
                                <div class="product-use-carousel__carousel">
                                    <div class="product-use-carousel__carousel__item">
                                        <img src="/assets/images/product/product-page/product-use-2.png" alt="">
                                        <div class="product-use-carousel__carousel__item__name">Паста Сицилиана</div>
                                        <div class="product-use-carousel__carousel__item__block-link">
                                            <a href="" title=""><span>Подробней</span></a>
                                        </div>
                                    </div>
                                    <div class="product-use-carousel__carousel__item"><img
                                                src="/assets/images/product/product-page/product-use-1.png" alt="">
                                        <div class="product-use-carousel__carousel__item__name">Паста Сицилиана</div>
                                        <div class="product-use-carousel__carousel__item__block-link">
                                            <a href="" title=""><span>Подробней</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-8 col-xl-12 col-lg-24">
                                <div class="product-use-carousel__carousel">
                                    <div class="product-use-carousel__carousel__item">
                                        <img src="/assets/images/product/product-page/product-use-1.png" alt="">
                                        <div class="product-use-carousel__carousel__item__name">Паста Сицилиана</div>
                                        <div class="product-use-carousel__carousel__item__block-link">
                                            <a href="" title=""><span>Подробней</span></a>
                                        </div>
                                    </div>
                                    <div class="product-use-carousel__carousel__item"><img
                                                src="/assets/images/product/product-page/product-use-2.png" alt="">
                                        <div class="product-use-carousel__carousel__item__name">Паста Сицилиана</div>
                                        <div class="product-use-carousel__carousel__item__block-link">
                                            <a href="" title=""><span>Подробней</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-8 col-xl-12 col-lg-24">
                                <div class="product-use-carousel__carousel">
                                    <div class="product-use-carousel__carousel__item">
                                        <img src="/assets/images/product/product-page/product-use-2.png" alt="">
                                        <div class="product-use-carousel__carousel__item__name">Паста Сицилиана</div>
                                        <div class="product-use-carousel__carousel__item__block-link">
                                            <a href="" title=""><span>Подробней</span></a>
                                        </div>
                                    </div>
                                    <div class="product-use-carousel__carousel__item"><img
                                                src="/assets/images/product/product-page/product-use-1.png" alt="">
                                        <div class="product-use-carousel__carousel__item__name">Паста Сицилиана</div>
                                        <div class="product-use-carousel__carousel__item__block-link">
                                            <a href="" title=""><span>Подробней</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <div class="background-page__top"></div>
    <div class="background-page__bottom"></div>
</div>