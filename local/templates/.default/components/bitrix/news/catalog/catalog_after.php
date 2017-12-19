<?php
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();

use \Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);
?>
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
        <div class="h2 h2_catalog-popular"><?=Loc::getMessage('LEMA_CATALOG_MOST_POPULAR_TITLE');?></div>
        <?
global $popularItemsFilter;
$popularItemsFilter = array('PROPERTY_IS_POPULAR_VALUE' => 'Y');

        $APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"popular_about", 
	array(
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"AJAX_MODE" => "N",
		"IBLOCK_TYPE" => "content",
		"IBLOCK_ID" => "3",
		"NEWS_COUNT" => "20",
		"SORT_BY1" => "ID",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "popularItemsFilter",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "ARTICLE",
			1 => "FATNESS",
			2 => "IS_POPULAR",
			3 => "BRAND",
			4 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "Y",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "Y",
		"CACHE_GROUPS" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "Элементы",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => "",
		"PAGER_BASE_LINK" => "",
		"PAGER_PARAMS_NAME" => "arrPager",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"COMPONENT_TEMPLATE" => "popular_about",
		"STRICT_SECTION_CHECK" => "N"
	),
	false
); ?>
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