<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("События");

$APPLICATION->AddViewContent('header_class', 'product-page-header');
?>
    <div class="background-page">
        <div class="container">
            <div class="element">
                <h1 class="h1 h1_mt-35">События</h1>
            </div>
            <div class="search">
                <div class="search__form-mini">
                    <form action="" method="get">
                        <input class="search__form-mini__input" type="text" placeholder="" name="q" value="" size="40">
                        <button class="search__form-mini__button" role="button" type="submit" value="Искать"><i
                                    class="icon search__form_button"></i></button>
                    </form>
                </div>
            </div>
        </div>

            <? $APPLICATION->IncludeComponent('bitrix:news.list', 'events_list', array(
                'DISPLAY_DATE' => 'Y',
                'DISPLAY_NAME' => 'Y',
                'DISPLAY_PICTURE' => 'Y',
                'DISPLAY_PREVIEW_TEXT' => 'Y',
                'AJAX_MODE' => 'N',
                'IBLOCK_TYPE' => 'content',
                'IBLOCK_ID' => '16',
                'NEWS_COUNT' => '1',
                'SORT_BY1' => 'NAME',
                'SORT_ORDER1' => 'DESC',
                'SORT_BY2' => 'SORT',
                'SORT_ORDER2' => 'ASC',
                'FILTER_NAME' => '',
                'FIELD_CODE' => array('DATE_CREATE'),
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
                'DISPLAY_BOTTOM_PAGER' => 'Y',
                'PAGER_TITLE' => 'Элементы',
                'PAGER_SHOW_ALWAYS' => 'N',
                'PAGER_TEMPLATE' => 'events',
                'PAGER_DESC_NUMBERING' => 'N',
                'PAGER_DESC_NUMBERING_CACHE_TIME' => '36000',
                'PAGER_SHOW_ALL' => 'Y',
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

        <div class="background-page__cheese-left_event"></div>
        <div class="background-page__block-left-top_event"></div>
        <div class="background-page__block-left-middle_event"></div>
        <div class="background-page__block-left-bottom_event"></div>
        <div class="background-page__butter-right_event"></div>
        <div class="background-page__block-right-top_event"></div>
    </div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>