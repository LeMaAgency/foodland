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

$res = CIBlockElement::GetList(Array(), Array("CODE"=>$arResult['VARIABLES']['ELEMENT_CODE'], "ID" => $arResult['VARIABLES']['ELEMENT_ID']), false, Array(), Array("PROPERTY_BRAND"));
if($row = $res->Fetch()){
    $iBrandId = $row['PROPERTY_BRAND_VALUE'];
}
$resBrand = CIBlockElement::GetList(Array(), Array("IBLOCK_ID"=>11,"ID"=>$iBrandId), false, Array(), Array("NAME"));
if($rowBrand = $resBrand->Fetch()){
    $sBrand = $rowBrand;
}
?>
<div class="wrap-search">
    <div class="container">
        <div class="row">
            <div class="col-19 col-md-24 css-right">
                <div class="bread-crumbs">
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
                <!--<h2 class="h2-product-page"><?/*=$sBrand['NAME'];*/?></h2>-->
                <br>
                <br>
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
                //get analog elements from element
                global $analogFilter;
                $analogFilter = array();

                \Bitrix\Main\Loader::includeModule('iblock');
                //get id of current element by code
                $elements = \WM\IBlock\Element::getListD7($arParams['IBLOCK_ID'], array(
                    'filter' => array('CODE' => $arResult['VARIABLES']['ELEMENT_CODE']),
                    'select' => array('ID'),
                ));
                //id found
                if(!empty($elements))
                {
                    //get all property values
                    $res = \CIBlockElement::GetProperty(
                        $arParams['IBLOCK_ID'],
                        current(array_keys($elements)),
                        '',
                        '',
                        array('CODE' => 'ANALOGS')
                    );
                    $elements = array();
                    while($row = $res->Fetch())
                    {
                        if(!empty($row['VALUE']))
                            $elements[$row['VALUE']] = array();
                    }
                }
                ?>
                <? if(!empty($elements)):
                    //set filter
                    $analogFilter = array('=ID' => array_keys($elements));
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
                <? endif; ?>
            </div>
            <div class="container-main">
                <div class="row">
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
                </div>
            </div>
        </div>
    </div>
    <?
    //get recipes from element
    global $recipesFilter;
    $recipesFilter = array();

    \Bitrix\Main\Loader::includeModule('iblock');
    //get id of current element by code
    $elements = \WM\IBlock\Element::getListD7($arParams['IBLOCK_ID'], array(
        'filter' => array('CODE' => $arResult['VARIABLES']['ELEMENT_CODE']),
        'select' => array('ID'),
    ));
    //id found
    if(!empty($elements))
    {
        //get all property values
        $res = \CIBlockElement::GetProperty(
            $arParams['IBLOCK_ID'],
            current(array_keys($elements)),
            '',
            '',
            array('CODE' => 'RECIPES')
        );
        $elements = array();
        while($row = $res->Fetch())
        {
            if(!empty($row['VALUE']))
                $elements[$row['VALUE']] = array();
        }
    }
    ?>
    <? if(!empty($elements)):
        //set filter
        $recipesFilter = array('=ID' => array_keys($elements));
        ?>
        <? $APPLICATION->IncludeComponent('bitrix:news.list', 'events_slider', array(
        'DISPLAY_DATE' => 'Y',
        'DISPLAY_NAME' => 'Y',
        'DISPLAY_PICTURE' => 'Y',
        'DISPLAY_PREVIEW_TEXT' => 'Y',
        'AJAX_MODE' => 'N',
        'IBLOCK_TYPE' => 'catalog',
        'IBLOCK_ID' => 19,
        'NEWS_COUNT' => '20',
        'SORT_BY1' => 'ACTIVE_FROM',
        'SORT_ORDER1' => 'DESC',
        'SORT_BY2' => 'SORT',
        'SORT_ORDER2' => 'ASC',
        'FILTER_NAME' => 'recipesFilter',
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
    <? endif; ?>

    <div class="container">
        <?
        global $productShopSliderFilter;
        if(!empty($productShopSliderFilter['=ID'])): ?>
            <? $APPLICATION->IncludeComponent('bitrix:news.list', 'product_shops', array(
                'DISPLAY_DATE' => 'Y',
                'DISPLAY_NAME' => 'Y',
                'DISPLAY_PICTURE' => 'Y',
                'DISPLAY_PREVIEW_TEXT' => 'Y',
                'AJAX_MODE' => 'N',
                'IBLOCK_TYPE' => 'content',
                'IBLOCK_ID' => '22',
                'NEWS_COUNT' => '20',
                'SORT_BY1' => 'ACTIVE_FROM',
                'SORT_ORDER1' => 'DESC',
                'SORT_BY2' => 'SORT',
                'SORT_ORDER2' => 'ASC',
                'FILTER_NAME' => 'productShopSliderFilter',
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
        <? endif; ?>
    </div>

    <div class="milk"></div>
    <div class="block-left-top"></div>
    <div class="block-right"></div>
    <div class="block-left-middle"></div>
    <div class="block-left-bottom"></div>
    <div class="cheese-right"></div>
</div>