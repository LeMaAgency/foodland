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

if(!empty($_GET['arrFilter_pf']))
{
    include_once $_SERVER['DOCUMENT_ROOT'] . $this->GetFolder() . '/search.php';

    return;
}

$APPLICATION->AddViewContent('header_class', 'product-page-header');

$this->setFrameMode(true);
?>

<div class="background-page">
    <? if($arParams["USE_SEARCH"] == "Y"): ?>
        <div class="container">
            <div class="element">
                <h1 class="h1 h1_mt-35"><? $APPLICATION->ShowTitle(); ?></h1>
            </div>
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

    <? $APPLICATION->IncludeComponent('bitrix:catalog.section.list', 'recipes_section_list', array(
        'VIEW_MODE' => 'TEXT',
        'SHOW_PARENT_NAME' => 'Y',
        'IBLOCK_TYPE' => $arParams['IBLOCK_TYPE'],
        'IBLOCK_ID' => $arParams['IBLOCK_ID'],
        'SECTION_ID' => '',
        'SECTION_CODE' => '',
        'SECTION_URL' => '',
        'COUNT_ELEMENTS' => 'Y',
        'TOP_DEPTH' => '2',
        'SECTION_FIELDS' => array('CODE', 'PICTURE'),
        'SECTION_USER_FIELDS' => '',
        'ADD_SECTIONS_CHAIN' => 'Y',
        'CACHE_TYPE' => 'A',
        'CACHE_TIME' => '36000000',
        'CACHE_NOTES' => '',
        'CACHE_GROUPS' => 'Y',
    )); ?>

    <div class="container">
        <div class="row">
            <? if($arParams["USE_FILTER"] == "Y"): ?>
                <div class="container-aside">
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
                            'ADDITIONAL_CLASS' => 'filter_mb-30',
                        ),
                        $component
                    );
                    ?>
                </div>
            <? endif ?>
            <div class="container-main">
                <? if(empty($_GET['q'])): ?>
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "recipes_list_main",
                        Array(
                            "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
                            "IBLOCK_ID" => $arParams["IBLOCK_ID"],
                            "NEWS_COUNT" => $arParams["NEWS_COUNT"],
                            "SORT_BY1" => $arParams["SORT_BY1"],
                            "SORT_ORDER1" => $arParams["SORT_ORDER1"],
                            "SORT_BY2" => $arParams["SORT_BY2"],
                            "SORT_ORDER2" => $arParams["SORT_ORDER2"],
                            "FIELD_CODE" => $arParams["LIST_FIELD_CODE"],
                            "PROPERTY_CODE" => $arParams["LIST_PROPERTY_CODE"],
                            "DISPLAY_PANEL" => $arParams["DISPLAY_PANEL"],
                            "SET_TITLE" => $arParams["SET_TITLE"],
                            "SET_LAST_MODIFIED" => $arParams["SET_LAST_MODIFIED"],
                            "MESSAGE_404" => $arParams["MESSAGE_404"],
                            "SET_STATUS_404" => $arParams["SET_STATUS_404"],
                            "SHOW_404" => $arParams["SHOW_404"],
                            "FILE_404" => $arParams["FILE_404"],
                            "INCLUDE_IBLOCK_INTO_CHAIN" => $arParams["INCLUDE_IBLOCK_INTO_CHAIN"],
                            "ADD_SECTIONS_CHAIN" => $arParams["ADD_SECTIONS_CHAIN"],
                            "CACHE_TYPE" => $arParams["CACHE_TYPE"],
                            "CACHE_TIME" => $arParams["CACHE_TIME"],
                            "CACHE_FILTER" => $arParams["CACHE_FILTER"],
                            "CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
                            "DISPLAY_TOP_PAGER" => $arParams["DISPLAY_TOP_PAGER"],
                            "DISPLAY_BOTTOM_PAGER" => $arParams["DISPLAY_BOTTOM_PAGER"],
                            "PAGER_TITLE" => $arParams["PAGER_TITLE"],
                            "PAGER_TEMPLATE" => $arParams["PAGER_TEMPLATE"],
                            "PAGER_SHOW_ALWAYS" => $arParams["PAGER_SHOW_ALWAYS"],
                            "PAGER_DESC_NUMBERING" => $arParams["PAGER_DESC_NUMBERING"],
                            "PAGER_DESC_NUMBERING_CACHE_TIME" => $arParams["PAGER_DESC_NUMBERING_CACHE_TIME"],
                            "PAGER_SHOW_ALL" => $arParams["PAGER_SHOW_ALL"],
                            "PAGER_BASE_LINK_ENABLE" => $arParams["PAGER_BASE_LINK_ENABLE"],
                            "PAGER_BASE_LINK" => $arParams["PAGER_BASE_LINK"],
                            "PAGER_PARAMS_NAME" => $arParams["PAGER_PARAMS_NAME"],
                            "DISPLAY_DATE" => $arParams["DISPLAY_DATE"],
                            "DISPLAY_NAME" => "Y",
                            "DISPLAY_PICTURE" => $arParams["DISPLAY_PICTURE"],
                            "DISPLAY_PREVIEW_TEXT" => $arParams["DISPLAY_PREVIEW_TEXT"],
                            "PREVIEW_TRUNCATE_LEN" => $arParams["PREVIEW_TRUNCATE_LEN"],
                            "ACTIVE_DATE_FORMAT" => $arParams["LIST_ACTIVE_DATE_FORMAT"],
                            "USE_PERMISSIONS" => $arParams["USE_PERMISSIONS"],
                            "GROUP_PERMISSIONS" => $arParams["GROUP_PERMISSIONS"],
                            "FILTER_NAME" => $arParams["FILTER_NAME"],
                            "HIDE_LINK_WHEN_NO_DETAIL" => $arParams["HIDE_LINK_WHEN_NO_DETAIL"],
                            "CHECK_DATES" => $arParams["CHECK_DATES"],
                            "STRICT_SECTION_CHECK" => $arParams["STRICT_SECTION_CHECK"],

                            "PARENT_SECTION" => $arResult["VARIABLES"]["SECTION_ID"],
                            "PARENT_SECTION_CODE" => $arResult["VARIABLES"]["SECTION_CODE"],
                            "DETAIL_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["detail"],
                            "SECTION_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["section"],
                            "IBLOCK_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["news"],
                        ),
                        $component
                    ); ?>
                <? else: ?>
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:search.page",
                        "",
                        Array(
                            "CHECK_DATES" => $arParams["CHECK_DATES"] !== "N" ? "Y" : "N",
                            "arrWHERE" => Array("iblock_" . $arParams["IBLOCK_TYPE"]),
                            "arrFILTER" => Array("iblock_" . $arParams["IBLOCK_TYPE"]),
                            "SHOW_WHERE" => "N",
                            //"PAGE_RESULT_COUNT" => "",
                            "CACHE_TYPE" => $arParams["CACHE_TYPE"],
                            "CACHE_TIME" => $arParams["CACHE_TIME"],
                            "SET_TITLE" => $arParams["SET_TITLE"],
                            "arrFILTER_iblock_" . $arParams["IBLOCK_TYPE"] => Array($arParams["IBLOCK_ID"]),
                            'IBLOCK_TYPE' => $arParams['IBLOCK_TYPE'],
                            'IBLOCK_ID' => $arParams['IBLOCK_ID'],
                        ),
                        $component
                    ); ?>
                <? endif; ?>
            </div>
        </div>
    </div>
    <div class="background-page__cheese-left_recipe"></div>
    <div class="background-page__block-left-top_recipe"></div>
    <div class="background-page__block-left-middle_recipe"></div>
    <div class="background-page__cow-right"></div>
    <div class="background-page__block-right-top_recipe"></div>
</div>