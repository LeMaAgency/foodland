<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("О компании");
?>
<? $APPLICATION->IncludeComponent('bitrix:news.list', 'about_top_slider', array(
    'DISPLAY_DATE' => 'Y',
    'DISPLAY_NAME' => 'Y',
    'DISPLAY_PICTURE' => 'Y',
    'DISPLAY_PREVIEW_TEXT' => 'Y',
    'AJAX_MODE' => 'N',
    'IBLOCK_TYPE' => 'content',
    'IBLOCK_ID' => '10',
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

    <div class="background-page">
        <div class="container">
            <div class="row">
                <div class="col-24">
                    <h1 class="h1"><? $APPLICATION->ShowTitle(false); ?></h1>
                </div>
            </div>
        </div>
        <div class="text-about-company">
            <div class="container">
                <div class="row">
                    <div class="col-24">
                        <p><? $APPLICATION->IncludeFile(SITE_DIR . 'include/about/text_top.php'); ?></p>
                        <div class="text-about-company__advantages">
                            <? $APPLICATION->IncludeFile(SITE_DIR . 'include/about/text2_top.php'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <? $APPLICATION->IncludeComponent('bitrix:news.list', 'structure_about', array(
            'DISPLAY_DATE' => 'Y',
            'DISPLAY_NAME' => 'Y',
            'DISPLAY_PICTURE' => 'Y',
            'DISPLAY_PREVIEW_TEXT' => 'Y',
            'AJAX_MODE' => 'N',
            'IBLOCK_TYPE' => 'content',
            'IBLOCK_ID' => '13',
            'NEWS_COUNT' => '20',
            'SORT_BY1' => 'ACTIVE_FROM',
            'SORT_ORDER1' => 'DESC',
            'SORT_BY2' => 'SORT',
            'SORT_ORDER2' => 'ASC',
            'FILTER_NAME' => '',
            'FIELD_CODE' => array(),
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
        )); ?>

        <div class="text-about-company text-about-company_pb">
            <div class="container">
                <div class="row">
                    <div class="col-24">
                        <p><? $APPLICATION->IncludeFile(SITE_DIR . 'include/about/text_bottom.php'); ?></p>
                        <div class="text-about-company__advantages">
                            <? $APPLICATION->IncludeFile(SITE_DIR . 'include/about/text2_bottom.php'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="popular popular_pb">
            <div class="container">
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
        <? $APPLICATION->IncludeComponent('bitrix:news.list', 'promotion_about', array(
            'DISPLAY_DATE' => 'Y',
            'DISPLAY_NAME' => 'Y',
            'DISPLAY_PICTURE' => 'Y',
            'DISPLAY_PREVIEW_TEXT' => 'Y',
            'AJAX_MODE' => 'N',
            'IBLOCK_TYPE' => 'content',
            'IBLOCK_ID' => '12',
            'NEWS_COUNT' => '20',
            'SORT_BY1' => 'ACTIVE_FROM',
            'SORT_ORDER1' => 'DESC',
            'SORT_BY2' => 'SORT',
            'SORT_ORDER2' => 'ASC',
            'FILTER_NAME' => '',
            'FIELD_CODE' => array(),
            'PROPERTY_CODE' => array(
                'URL',
                'LOGO_IMG',
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

        <div class="tm-carousel-horizontal">
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

        <div class="structure-company structure-company_direct">
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
                        'H2_CLASS' => 'h2_about-company',
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

        <? $APPLICATION->IncludeComponent('bitrix:news.list', 'our_clients_about', array(
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

        <div class="background-page__tomat_about"></div>
        <div class="background-page__butter_about"></div>
        <div class="background-page__cheese-left_about"></div>
        <div class="background-page__block-left-top_about"></div>
        <div class="background-page__block-left-middle-top_about"></div>
        <div class="background-page__block-left-middle_about"></div>
        <div class="background-page__block-left-middle-bottom_about"></div>
        <div class="background-page__block-left-bottom_about"></div>
        <div class="background-page__cheese-right_about"></div>
        <div class="background-page__block-right-top_about"></div>
        <div class="background-page__block-right-middle_about"></div>
        <div class="background-page__block-right-bottom_about"></div>
    </div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>