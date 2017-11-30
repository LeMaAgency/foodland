<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("События");

$APPLICATION->AddViewContent('header_class', 'product-page-header');
?>
    <div class="background-page">
        <? $APPLICATION->IncludeComponent('bitrix:news', 'events', array(
            'ADD_ELEMENT_CHAIN' => 'Y',
            'ADD_SECTIONS_CHAIN' => 'N',
            'AJAX_MODE' => 'N',
            'AJAX_OPTION_ADDITIONAL' => '',
            'AJAX_OPTION_HISTORY' => 'N',
            'AJAX_OPTION_JUMP' => 'N',
            'AJAX_OPTION_STYLE' => 'Y',
            'BROWSER_TITLE' => 'NAME',
            'CACHE_FILTER' => 'N',
            'CACHE_GROUPS' => 'N',
            'CACHE_TIME' => '36000000',
            'CACHE_TYPE' => 'A',
            'CHECK_DATES' => 'Y',
            'COMPOSITE_FRAME_MODE' => 'A',
            'COMPOSITE_FRAME_TYPE' => 'AUTO',
            'DETAIL_ACTIVE_DATE_FORMAT' => 'd.m.Y',
            'DETAIL_DISPLAY_BOTTOM_PAGER' => 'Y',
            'DETAIL_DISPLAY_TOP_PAGER' => 'N',
            'DETAIL_FIELD_CODE' => array('', ''),
            'DETAIL_PAGER_SHOW_ALL' => 'Y',
            'DETAIL_PAGER_TEMPLATE' => '',
            'DETAIL_PAGER_TITLE' => 'Страница',
            'DETAIL_PROPERTY_CODE' => array('', ''),
            'DETAIL_SET_CANONICAL_URL' => 'N',
            'DISPLAY_BOTTOM_PAGER' => 'Y',
            'DISPLAY_DATE' => 'Y',
            'DISPLAY_NAME' => 'Y',
            'DISPLAY_PICTURE' => 'Y',
            'DISPLAY_PREVIEW_TEXT' => 'Y',
            'DISPLAY_TOP_PAGER' => 'N',
            'FILE_404' => '',
            'HIDE_LINK_WHEN_NO_DETAIL' => 'Y',
            'IBLOCK_ID' => '16',
            'IBLOCK_TYPE' => 'content',
            'INCLUDE_IBLOCK_INTO_CHAIN' => 'N',
            'LIST_ACTIVE_DATE_FORMAT' => 'd.m.Y',
            'LIST_FIELD_CODE' => array('DATE_CREATE', ''),
            'LIST_PROPERTY_CODE' => array('', ''),
            'MESSAGE_404' => '',
            'META_DESCRIPTION' => '-',
            'META_KEYWORDS' => '-',
            'NEWS_COUNT' => '20',
            'PAGER_BASE_LINK_ENABLE' => 'N',
            'PAGER_DESC_NUMBERING' => 'N',
            'PAGER_DESC_NUMBERING_CACHE_TIME' => '36000',
            'PAGER_SHOW_ALL' => 'Y',
            'PAGER_SHOW_ALWAYS' => 'N',
            'PAGER_TEMPLATE' => 'events',
            'PAGER_TITLE' => 'События',
            'PREVIEW_TRUNCATE_LEN' => '',
            'SEF_FOLDER' => '/events/',
            'SEF_MODE' => 'Y',
            'SEF_URL_TEMPLATES' => Array(
                'detail' => '#ELEMENT_CODE#/',
                'news' => '',
                'section' => '',
            ),
            'SET_LAST_MODIFIED' => 'N',
            'SET_STATUS_404' => 'Y',
            'SET_TITLE' => 'Y',
            'SHOW_404' => 'Y',
            'SORT_BY1' => 'ACTIVE_FROM',
            'SORT_BY2' => 'SORT',
            'SORT_ORDER1' => 'DESC',
            'SORT_ORDER2' => 'ASC',
            'STRICT_SECTION_CHECK' => 'N',
            'USE_CATEGORIES' => 'N',
            'USE_FILTER' => 'N',
            'USE_PERMISSIONS' => 'N',
            'USE_RATING' => 'N',
            'USE_RSS' => 'N',
            'USE_SEARCH' => 'Y',
            'USE_SHARE' => 'N',
        )); ?>

        <div class="background-page__cheese-left_event"></div>
        <div class="background-page__block-left-top_event"></div>
        <div class="background-page__block-left-middle_event"></div>
        <?$APPLICATION->ShowViewContent('bg_block');?>
        <div class="background-page__butter-right_event"></div>
        <div class="background-page__block-right-top_event"></div>
    </div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>