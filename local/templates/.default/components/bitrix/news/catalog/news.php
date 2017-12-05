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

$this->setFrameMode(true);
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
<? $APPLICATION->IncludeFile($this->GetFolder() . '/catalog_before.php'); ?>
<? if($arParams["USE_SEARCH"] == "Y"): ?>
    <div class="container">
        <div class="element">
            <h1 class="element__title__h1"><? $APPLICATION->ShowTitle(false); ?></h1>
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

    <div class="container">
        <div class="row">
            <? if($arParams["USE_FILTER"] == "Y"): ?>
                <div class="col-4 col-lg-6 col-md-8 col-sm-24">
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
                        ),
                        $component
                    );
                    ?>
                </div>
            <? endif ?>
            <? $APPLICATION->IncludeComponent('bitrix:catalog.section.list', 'catalog_section_list', array(
                'VIEW_MODE' => 'TEXT',
                'SHOW_PARENT_NAME' => 'Y',
                'IBLOCK_TYPE' => $arParams['IBLOCK_TYPE'],
                'IBLOCK_ID' => $arParams['IBLOCK_ID'],
                'SECTION_ID' => '',
                'SECTION_CODE' => '',
                'SECTION_URL' => '',
                'COUNT_ELEMENTS' => 'Y',
                'TOP_DEPTH' => '2',
                'SECTION_FIELDS' => array('PICTURE', 'DETAIL_PICTURE'),
                'SECTION_USER_FIELDS' => '',
                'ADD_SECTIONS_CHAIN' => 'Y',
                'CACHE_TYPE' => 'A',
                'CACHE_TIME' => '36000000',
                'CACHE_NOTES' => '',
                'CACHE_GROUPS' => 'Y',
            )); ?>
        </div>
    </div>
<? $APPLICATION->IncludeFile($this->GetFolder() . '/catalog_after.php'); ?>